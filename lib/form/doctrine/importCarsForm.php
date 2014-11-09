<?php

class importCars extends sfFormSymfony
{
    protected $errores = array();
    
	public function configure()
    {  	
	    $this->setWidget('csv', new sfWidgetFormInputFile() );
        $this->setValidator('csv', new sfValidatorFile( array('required' => true), array('required' => 'Debe seleccionar un archivo CSV antes de presionar el boton importar') ) ) ;
		$this->getWidgetSchema()->setNameFormat('importCars[%s]');
	    
	}

	public function import()
    {
        // Recupero el path del csv
        $csv = $this->getValue('csv')->getTempName();
        
        // Inicializo las variables de resultado
        $data = array();
        
        // Proceso el CSV
        $file = fopen($csv, "r");
        
        $row = fgetcsv($file, 0, ";");

        $columnasEsperadas = 3;

        if ( count($row) > $columnasEsperadas )
        {
            $this->errores[] = 'El formato del CSV es incorrecto (Debe tener exactamente ' . $columnasEsperadas . ' columnas).';
        }
        
        if ( !count($this->errores) )
        {
            while ( ($row = fgetcsv($file, 0, ",")) !== FALSE )
            {
                //LECTURA DEL CSV
                      
                $brand      = trim($row[0]);
                $model      = trim($row[1]);
                $submodel   = trim($row[2]);

                /* VALIDACIONES */

                // Validación de requeridos

                $this->validarRequerido('Marca', $brand);
                $this->validarRequerido('Modelo', $model);
                $this->validarRequerido('Submodelo', $submodel);

                // Guardo la informacion a procesar por si el resultado general da sin errores
                $dataRow = array();
                
                $dataRow['brand'] = $brand;
                $dataRow['model'] = $model;
                $dataRow['submodel'] = $submodel;

                $data[] = $dataRow;
            }
        }
        
        fclose($file);
        
        
        // Si no hubo errores procesa
        if ( !count($this->errores) )
        {
            $response = array();
            $response['status'] = true;
            $response['result'] = array();
        
            $fila = 0;
            foreach ( $data as $row )
            {         
                try {
                    $car = new Cars();
                    $car->setBrand($row['brand']);
                    $car->setModel($row['model']);
                    $car->setSubmodel($row['submodel']);
                    $car->save();
                } catch (Exception $e) {
                    $this->errores[] = "No se pudo cargar la fila correspondiente a \"" . $row['brand'] . '/' . $row['model'] . '/' . $row['submodel'] . "\"";
                }

            }
        }
        else
        {
            $this->errores = array_unique($this->errores);
            $response = array('status' => false, 'errors' => $this->errores );
        }
	    
        return $response;
	}
	
	protected function validarRequerido($name, $value)
	{
    	try {
    	    $validator = new sfValidatorString(array('required' => true));
    	    $value = $validator->clean($value);
    	} catch (Exception $e) {
    	    $this->errores[] = "La columna \"$name\" debe ser completado obligatoriamente para todos los turnos a importar";
    	};
    	
    	return $value;
	}
	
}

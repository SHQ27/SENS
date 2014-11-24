<?php

/**
 * home actions.
 *
 * @package    SENS
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
 	public function executeIndex(sfWebRequest $request)
 	{
    $this->brands = CarsTable::getInstance()->getAllBrands();
 	}

    /**
     * Executes ajax action
     *
     * @param sfRequest $request A request object
     */
    public function executeAjax(sfWebRequest $request)
    {
    	$method = "ajax" . ucfirst($request->getParameter('method'));
    	$this->forward404Unless(method_exists($this, $method));

    	$response = $this->$method($request);
    	$this->getResponse()->setContentType('application/json');

    	return $this->renderText(json_encode($response));
    }

    protected function ajaxContactForm(sfWebRequest $request) {
        $name = $request->getParameter('hire-name');
        $email = $request->getParameter('hire-mail');
        $phone = $request->getParameter('hire-phone');
        $cell = $request->getParameter('hire-cell');

        $brand = $request->getParameter('select-brand');
        $model = $request->getParameter('select-model');
        $submodel = $request->getParameter('select-submodel');
        $year = $request->getParameter('hire-year');
        
        // send an email to the affiliate
        $message = $this->getMailer()->compose(
        array('web@sensgroup.com.ar' => 'Web Sensgroup'),
        //CAMBIAR EMAIL POR FAVOR
        'web@sensgroup.com.ar',
        'Nuevo contacto en sensgroup.com.ar',
        <<<EOF
        Han utilizado el formulario de contacto de la web.
        A continuación, los datos aportados.
 
        Nombre y apellido: {$name}.
        Dirección de mail: {$email}.
        Teléfono: {$phone}.
        Celular: {$cell}.

        Datos del automóvil:
        Marca: {$brand}.
        Modelo: {$model}.
        Submodelo: {$submodel}.
        Año: {$year}. 

        Webmaster@sensgroup.com.ar      
EOF
        );
 
        $this->getMailer()->send($message);
        return array(
            'status' => true,
        );
    }

    protected function ajaxSynysterForm(sfWebRequest $request) {

      $tcDate = $request->getParameter('tc-date');
      $tcAddress = $request->getParameter('tc-address');

      $cvpName = $request->getParameter('cvp-name');
      $cvpDu = $request->getParameter('cvp-du');
      $cvpPhone = $request->getParameter('cvp-phone');
      $cvpAddress = $request->getParameter('cvp-address');

      $tesName = $request->getParameter('tes-name');
      $tesDu = $request->getParameter('tes-du');
      $tesPhone = $request->getParameter('tes-phone');
      $tesAddress = $request->getParameter('tes-address');

      $ivName = $request->getParameter('iv-name');
      $ivDu = $request->getParameter('iv-du');
      $ivPhone = $request->getParameter('iv-phone');
      $ivAddress = $request->getParameter('iv-address');

      $insName = $request->getParameter('ins-name');
      $insDu = $request->getParameter('ins-du');
      $insPhone = $request->getParameter('ins-phone');
      $insAddress = $request->getParameter('ins-address');
      $insNumber = $request->getParameter('ins-number');
      $insExpire = $request->getParameter('ins-expire');

      $message = $this->getMailer()->compose(
        array('web@sensgroup.com.ar' => 'Web Sensgroup'),
        //CAMBIAR EMAIL POR FAVOR
        'web@sensgroup.com.ar',
        'Nuevo contacto en sensgroup.com.ar',
        <<<EOF
        Han utilizado el formulario de siniestros de la web.
        A continuación, los datos aportados.
 
        Tercero conductor. 
        - Fecha y horario: {$tcDate}
        - Localidad y Dirección: {$tcAddress}

        Cédula verde propietario.
        - Nombre y apellido: {$cvpName}
        - D.N.I: {$cvpDu}
        - Domicilio: {$cvpAddress}
        - Teléfono: {$cvpPhone}

        Testigos.
        - Nombre y apellido: {$tesName}
        - D.N.I: {$tesDu}
        - Domicilio: {$tesAddress}
        - Teléfono: {$tesPhone}

        Vehículos involucrados.
        - Nombre y apellido: {$ivName}
        - D.N.I: {$ivDu}
        - Domicilio: {$ivAddress}
        - Teléfono: {$ivPhone}
        
        Aseguradora.
        - Nombre y apellido: {$insName}
        - D.N.I: {$insDu}
        - Domicilio: {$insAddress}
        - Teléfono: {$insPhone}

        - Número de póliza: {$insNumber}.
        - Vencimientos: {$insExpire}.


        Webmaster@sensgroup.com.ar      
EOF
        );
 
        $this->getMailer()->send($message);
        return array(
            'status' => true,
        );
      }

      protected function ajaxgetModels(sfWebRequest $request) {
        $brand = $request->getParameter('brand');

        $models = CarsTable::getInstance()->getModelsByBrand($brand);

        $arrModels = array();
        foreach ($models as $model) {
          $arrModels[] = $model->getModel();
        }

        return array(
            'status' => true,
            'models' => $arrModels,
        );     

      }

      protected function ajaxgetSubmodels(sfWebRequest $request) {
        $brand = $request->getParameter('brand');
        $model = $request->getParameter('model');

        $submodels = CarsTable::getInstance()->getSubmodelsByBrandAndModel($brand, $model);

        $arrSubmodels = array();
        foreach ($submodels as $submodel) {
          $arrSubmodels[] = $submodel->getSubmodel();
        }

        return array(
            'status' => true,
            'submodels' => $arrSubmodels,
        );     

      }

}

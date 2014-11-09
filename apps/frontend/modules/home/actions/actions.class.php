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

    /**
     * Recibe el id de ejercicio, id de pregunta padre (puede existir o no), id y nombre de tipo de pregunta. Agrega y devuelve los datos de la pregunta para agregarla al listado.
     *
     * Parámetros POST: exercise_id, parent_id, type_id, type_name
     * 
     * @param sfRequest $request A request object
     */
    protected function ajaxContactForm(sfWebRequest $request) {
        $name = $request->getParameter('hire-name');
        $email = $request->getParameter('hire-mail');
        $phone = $request->getParameter('hire-phone');
        $cell = $request->getParameter('hire-cell');
        $time = $request->getParameter('hire-time');

        $brand = '-';
        $model = '-';
        $submodel = '-';
        $year = '-';
        
//         // send an email to the affiliate
//         $message = $this->getMailer()->compose(
//         array('webmaster@sensgroup.com.ar' => 'Web Sensgroup'),
//         //CAMBIAR EMAIL POR FAVOR
//         'sebas.hernandez.q@gmail.com',
//         'Nuevo contacto en sensgroup.com.ar',
//         <<<EOF
//         Han utilizado el formulario de contacto de la web.
//         A continuación los datos aportados.
 
//         Nombre y apellido: {$name}.
//         Dirección de mail: {$email}.
//         Teléfono: {$phone}.
//         Celular: {$cell}.
//         Horario de contacto: {$time}.

//         Datos del automóvil:
//         Marca: {$brand}.
//         Modelo: {$model}.
//         Submodelo: {$submodel}.
//         Año: {$year}. 

//         Webmaster@sensgroup.com.ar      
// EOF
//         );
 
//         $this->getMailer()->send($message);
        return array(
            'status' => true,
        );
    }

}

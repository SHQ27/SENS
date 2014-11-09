<?php

/**
 * load actions.
 *
 * @package    SENS
 * @subpackage load
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loadActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
        $form = new importCars();
        $results = array(); 

        if ( $request->isMethod('post') ) {
            $form->bind( $request->getParameter('importCars'), $request->getFiles('importCars') );

            if ( $form->isValid() ) {
                $results = $form->import();
            }
        }

        $this->headers = array( 'Marca', 'Modelo', 'Submodelo');

        $this->form = $form;
        if (isset($results['result'])) {
            $this->results = $results['result'];
        } else if (isset($results['errors'])){
            $this->errors = $results['errors'];
        }  
  }
}

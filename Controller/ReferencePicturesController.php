<?php

class ReferencePicturesController extends AppController
{
	public $components = array(
		'DebugKit.Toolbar',
        'Session',
        'Auth'
    );

    /*
    public $helpers = array(
        'Form' => array(
              'className' => 'BootstrapForm'
        )
    );
    */

    public function renderInputFields (){
    	if( $this->request->is('ajax') )
    	{
    		$this->set('quantity', $this->request->data['quantity']);
    	}
    	else
    	{
    		$this->Session->setFlash(__('Only via Ajax allowed!'));
    		exit();
    	}
    }

}

?>

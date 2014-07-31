<?php

class ReferencePicturesController extends AppController
{
	public $components = array(
		'DebugKit.Toolbar',
        'Session',
        'Auth' 
    );

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
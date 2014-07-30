<?php

class ReferenzenController extends AppController
{

    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' 
    );

	public $helpers = array();

	public function index ()
	{
		$this->set('referenzen', $this->Referenzen->find('all'));
	}
    
    public function add ()
    {
        if ($this->request->is('post')) {
            // If the form data can be validated and saved...
            if ($this->Referenzen->save($this->request->data)) {
                // Set a session flash message and redirect.
                $this->Session->setFlash('Referenz Saved!');
                return $this->redirect('/referenzen');
            }
        }
    }
}

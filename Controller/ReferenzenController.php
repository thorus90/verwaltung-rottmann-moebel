<?php

class ReferenzenController extends AppController
{
/*
    public $components = array(
        'Session',
        'Auth' 
    );
*/
	public $helpers = array();

	public function index ()
	{
		$this->set('referenzen', $this->Referenzen->find('all'));
	}
    
    public function add ()
    {
        
    }
}

<?php

class ReferenzenController extends AppController
{

	public $helpers = array();

	public function index ()
	{
		$this->set('referenzen', $this->Referenzen->find('all'));
	}
}
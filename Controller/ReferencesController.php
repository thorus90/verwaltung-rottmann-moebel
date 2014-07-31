<?php

class ReferencesController extends AppController
{

    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' 
    );

	public $helpers = array();

	public function index ()
	{
		$this->set('referenzen', $this->References->find('all'));
	}
    
    public function add ()
    {
        if ($this->request->is('post')) {
            try {
                $this->createWithAttachments($this->request->data);
                $this->Session->setFlash(__('The message has been saved'));
            } catch (Exception $e) {
                $this->Session->setFlash($e->getMessage());
            }
        }
    }

    public function createWithAttachments($data) {
        // Sanitize your images before adding them
        $images = array();
        if (!empty($data['ReferencePicture'][0])) {
            foreach ($data['ReferencePicture'] as $i => $image) {
                if (is_array($data['ReferencePicture'][$i])) {

                    // Unset the foreign_key if the user tries to specify it
                    if (isset($image['reference_id'])) {
                        unset($image['reference_id']);
                    }

                    $images[] = $image;
                }
            }
        }
        $data['ReferencePicture'] = $images;

        // Try to save the data using Model::saveAll()
        $this->Reference->create();
        if ($this->Reference->saveAll($data)) {
            return true;
        }

        // Throw an exception for the controller
        throw new Exception(__('Konnte nicht gespeichert werden!'));
    }

    public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];

        return preg_match('|^[0-9a-zA-Z_-.]*$|', $value);
    }
}

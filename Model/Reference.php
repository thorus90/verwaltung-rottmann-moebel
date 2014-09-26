<?php

class Reference extends AppModel {

    public $actsAs = array(
        'Upload.Upload' => array(
            'thumbnail' => array(
                'path' => '{ROOT}..{DS}..{DS}images{DS}referenzen{DS}thumbnails{DS}',
                'thumbnailSizes' => array(
                    'thumbnail' => '150x100'
                ),
                'thumbnails' => true,
                'thumbnailMethod' => 'php',
                'maxSize' => 10485760
            )
        )
    );

    public $hasMany = array(
        'ReferencePicture' => array(
            'className' => 'ReferencePicture',
            'foreignKey' => 'reference_id'
        ),
    );

    public $validate = array(
        'lk' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Landkreis wird benötigt'
            )
        ),
        'Y' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Jahr wird benötigt'
            )
        ),
        'name' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Name wird benötigt'
            ),
            'unique' => array
            (
                'rule' => array('isUnique'),
                'required' => 'create',
                'message' => 'Name muss eindeutig sein'
            )
        ),
        'owner' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Name wird benötigt'
            )
        ),
        'strasse' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Name wird benötigt'
            )
        ),
        'hausnr' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Hausnummer wird benötigt'
            )
        ),
        'plz' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'PLZ wird benötigt'
            )
        ),
        'ort' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Ort wird benötigt'
            )
        ),
        'link' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Link wird benötigt'
            )
        ),
        'text_link' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Text_link wird benötigt'
            )
        ),
        'essen' => array(
            'required' => array
            (
                'rule' => array('notEmpty'),
                'required' => true,
                'message' => 'Essen wird benötigt'
            )
        )
    );
}
?>

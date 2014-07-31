<?php

class ReferencePicture extends AppModel 
{
	public $actsAs = array(
        'Upload.Upload' => array(
            'name' => array(
                'path' => '{ROOT}..{DS}..{DS}images{DS}referenzen{DS}',
                'thumbnailSizes' => array(
                    'normal' => '1024x576'
                ),
                'thumbnails' => true,
                'thumbnailMethod' => 'php'
            )
        )
    );

    public $belongsTo = array(
        'Reference' => array(
            'className' => 'Reference',
            'foreignKey' => 'reference_id',
        )
    );
}
?>
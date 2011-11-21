<?php
    class Imprint extends AppModel {
        public $name = 'Imprint';

	public $belongsTo = 'User';
	public $hasMany = 'Comment';
        
	public $validate = array(
            'slug' => array(
                'rule' => 'isUnique',
                'message' => 'THIS SLUG ALREADY EXISTS!'
            )
        );
    }
?>
<?php
    class Imprint extends AppModel {
        var $name = 'Imprint';

		var $belongsTo = 'User';
        
        var $validate = array(
            'slug' => array(
                'rule' => 'isUnique',
                'message' => 'THIS SLUG ALREADY EXISTS!'
            )
        );
    }
?>
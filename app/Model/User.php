<?php
    class User extends AppModel {
        public $name = 'User';

	public $hasMany = array(
	    'MessageSent' => array(
		'className' => 'Message',
		'foreignKey' => 'user_id'
	    ),
	    'MessageReceived' => array(
		'className' => 'Message',
		'foreignKey' => 'recipient_id'
	    ),
	    'Imprint',
	    'Comment'
	);
    }
?>
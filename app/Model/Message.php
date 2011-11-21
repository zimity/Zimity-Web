<?php
class Message extends AppModel {
    public $name = 'Message';
    public $belongsTo = array(
        'Sender' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Recipient' => array(
            'className' => 'Recipient',
            'foreignKey' => 'recipient_id'
        )
    );
}
?>
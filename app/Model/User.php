<?php

class User extends AppModel {
    public $hasMany = array(
        'PhoneNumber' => array(
            'className' => 'PhoneNumber',
            'foreignKey' => 'user_id',
            'limit' => '100',
            'dependent' => true
        )
    );
}
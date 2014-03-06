<?php

class User extends AppModel {
    public $hasMany = array(
		'PhoneNumber' => array(
			'className' => 'PhoneNumber',
			'foreignKey' => 'user_id',
			'dependent' => true
		),
		'Email' => array(
			'className' => 'Email',
			'foreignKey' => 'user_id',
			'dependent' => true,
			'finderQuery'=> 'db.emails.find()'
		)
    );
}
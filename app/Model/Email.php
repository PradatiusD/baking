<?php

class Email extends AppModel {

	var $useDbConfig = 'mongo';
	public $primaryKey = '_id';
	public $belongsTo = 'User';

}
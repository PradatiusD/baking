<?php

	class EmailsController extends AppController {
	    public $helpers = array('Html', 'Form');

	    public function index() {
	        $this->set('emails', $this->Email->find('all'));
	    }
	}
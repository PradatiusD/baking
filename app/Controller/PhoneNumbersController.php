<?php

	class PhoneNumbersController extends AppController {
	    public $helpers = array('Html', 'Form');

	    public $components = array('RequestHandler');

	    public function index() {
	        $this->set('phone_numbers', $this->PhoneNumber->find('all'));
	    }
		public function get($param1){
			$this->set('phone_numbers', $this->PhoneNumber->find('all', 
				array(
					'conditions' => array('user_id' => $param1)
				)
			));
		}
	}
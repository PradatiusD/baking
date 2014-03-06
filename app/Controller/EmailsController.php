<?php

	class EmailsController extends AppController {
		public $helpers = array('Html', 'Form');

		public $components = array('RequestHandler');

		public function index() {
			$this->set('emails', $this->Email->find('all'));
		}

		public function get($param1){
			$this->set('emails', $this->Email->find('all', 
				array(
					'conditions' => array("user_id" => intval($param1))
				)
			));
		}
	}
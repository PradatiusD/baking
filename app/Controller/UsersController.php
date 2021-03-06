<?php

	class UsersController extends AppController {

		public $helpers = array('Html', 'Form', 'Session');
		
		public $components = array('Session');

		public function index() {
			$this->set('users', $this->User->find('all'));
		}

		public function add() {

			if ($this->request->is('post')) {

				$this->User->create();

				if ($this->User->saveAssociated($this->request->data)) {

					$this->Session->setFlash(__('Your new user has been saved.'));

					return $this->redirect(array('action' => 'index'));

				}

				$this->Session->setFlash(__('Unable to add your user.'));

			}
		}

		public function edit($id = null) {

			if (!$id) {
				throw new NotFoundException(__('Invalid user'));
			}

			$user = $this->User->findById($id);
			
			if (!$user) {
				throw new NotFoundException(__('Invalid user'));
			}

			if ($this->request->is(array('post', 'put'))) {
				
				$this->User->id = $id;
				
				if ($this->User->save($this->request->data)) {
				
					$this->Session->setFlash(__('Your user has been updated.'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Session->setFlash(__('Unable to update your user.'));
			}

			if (!$this->request->data) {

				$this->request->data = $user;

			}
		}


		public function delete($id) {
		
			if ($this->request->is('get')) {
			
				throw new MethodNotAllowedException();
			
			}

			if ($this->User->delete($id, true)) {
			
				$this->Session->setFlash(

					__('The post with id: %s has been deleted.', h($id))

				);

				return $this->redirect(array('action' => 'index'));
			}
		}

	}
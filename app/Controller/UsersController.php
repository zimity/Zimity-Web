<?php
    class UsersController extends AppController {
        public $name = 'Users';

	function index() {
		$this->set('users', $this->User->find('all'));
	}
		
        function view($id = null) {
            $row = $this->User->findById($id);
            if ($row) {
                $this->set('user', $this->User->findById($id));
            } else {
                $this->Session->setFlash('FAIL WHALE');
                $this->redirect(array('controller' => 'users',  'action' => 'index'));
            }
        }
    }
?>

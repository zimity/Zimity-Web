<?php
    class UsersController extends AppController {
        var $name = 'Users';

		function index() {
			$this->set('users', $this->User->find('all'));
		}
		
        function view($id = null) {
            $row = $this->User->find($id);
            if ($row) {
                $this->set('user', $this->User->find($id));
            } else {
                $this->Session->setFlash('FAIL WHALE');
                $this->redirect(array('controller' => 'users', 'action' => 'index', 'index'));
            }
        }
    }
?>

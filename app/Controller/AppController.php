<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'Flash',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'posts',
                    'action' => 'index'
                ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display', 'home'
                 ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('controller')
        )       
    );

    // allow users to view posts without login
    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }

    public function isAuthorized($user) {
        // admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }  
        // default deny
        return false;
    }
    
}

?>
<?php
// app/Controller/AppController.php
class AppController extends Controller {
	//...

	public $components = array(
        'Session',
        'Auth' => array(
    			'authenticate' => array(
                	'Form' => array(
                    	'fields' => array('username' => 'email','password'=>'password')
					)
				),
            'loginRedirect' => array('controller' => 'users', 'action' => 'home'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'index')
	 
	)
	);

	function beforeFilter() {
		
	}
	//...
}
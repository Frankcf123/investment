<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_CONTROLLER {

	public function __construct()
	{
		parent::__construct();
		$this->loadModel('UserModel');
	}

	public function index()
	{
// echo "123";
		$this->loadView('user/login.phtml');
    }
    
    public function login()
	{
		$this->loadView('user/login.phtml');
	}


	public function register()
    {
        $this->loadView('user/register.phtml');
    }

    /**
     * 登陆
     */
    public function AjaxLogin($input=array(),$lang_prompt="") {
        if(empty($input)) {
            $input = $this->validateForm(
                array(
                    "trim|required" => array('password', 'email')
                )
            );
        }
        $user = $this->UserModel->getUser($input['email']);
        if ($user) {
            if($user['password']==strtoupper($input['password'])){
                $this->_ajaxSucc(empty($lang_prompt)?$this->getLanguage('login_success'):$lang_prompt);
            }else{
                $this->_ajaxFail($this->getLanguage('password_incorrect'));
            }
            exit;
        }
        $this->_ajaxFail($this->getLanguage('user_not_exist'));
    }


    public function AjaxRegister(){
        $input = $this->validateForm(
            array(
                "trim|required" => array( 'username','password'),
                "trim|required|is_unique[user.email]" => array('email')
            )
        );
        $input['password']=strtoupper($input['password']);
        $user = $this->UserModel->insertUser($input);
        if($user){
            $this->AjaxLogin($input,$this->getLanguage('register_success'));
            exit;
        }else{
            $this->_ajaxFail($this->getLanguage('register_fail'));
        }

    }
}

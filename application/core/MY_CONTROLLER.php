<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MY_CONTROLLER extends  CI_Controller{

    function __construct() {
        // Call the Model constructor

        parent::__construct();

    }

    public function __setValue($name, $value)
    {
        if ($name === 'last_login')
        {
            $this->last_login = DateTime::createFromFormat('U', $value);
        }
    }

    public function __getValue($name)
    {
        if (isset($this->$name))
        {
            return $this->$name;
        }
    }

    public function loadViewWithNav($page_name){
        $this->loadnavigation();
        $this->loadLanguage(array('website_title','home','fstar','school','discussion_forum'));
        $this->smarty->view($page_name);

    }
    public function loadView($page_name){
//        $this->loadnavigation();
        $this->loadLanguage(array('website_title','home','fstar','school','discussion_forum'));
        $this->smarty->view($page_name);

    }


    public function loadnavigation(){
        $this->load->model('SchoolCategoryModel');
        $this->load->model('SchoolModel');

        $data= $this->SchoolCategoryModel->getSchoolCategorys();

        for($i=0;$i<count($data);$i++){
            $data[$i]['schools']=$this->SchoolModel->getSchoolsNameByCategory($data[$i]['id']);
        }
        $this->assignData('category',$data);
    }

    public function loadModel($model_name){
        $this->load->model($model_name);
    }
    public function assignData($name,$value){
        $this->smarty->assign($name,$value);
    }
    public function loadLanguage($lang,$lang_file="common"){
        $this->lang->load($lang_file);
        if(is_array($lang)){
            foreach($lang as $item){
                $lang_item=$this->lang->line($item);

                $this->smarty->assign($item,$lang_item);
            }
        }else{
            $lang_item=$this->lang->line($lang);
            $this->smarty->assign($lang,$lang_item);
        }
    }

    public function getLanguage($lang,$lang_file="common"){
        $this->lang->load($lang_file);
        $lang_item="";
        if(is_array($lang)){
            foreach($lang as $item){
                $lang_item=$this->lang->line($item);

            }
        }else{
            $lang_item=$this->lang->line($lang);
        }
        return $lang_item;
    }

    public function validateForm($params, $onlyData = false, $alinames = array(), $isRedirect = false) {
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                foreach ($value as $param) {
                    $ali_name = isset($alinames[$param]) ? $alinames[$param] : $param;
                    $this->form_validation->set_rules($param, $ali_name, $key);
                    if ($param == "sign") {
                        $hasSign = TRUE;
                    }
                }
            }
        }
        if ($this->form_validation->run() == FALSE) {
            if ($isRedirect) {
                return false;
            } else {
                $this->_ajaxFail($this->form_validation->validation_error());
                exit;
            }
        }
        $input = $this->form_validation->get_validation_data();

        $return_data = array();
        if ($onlyData) {
            foreach ($params as $key => $value) {
                foreach ($value as $param) {
                    $return_data[$param] = $input[$param];
                }
            }
        } else {
            $return_data = $input;
        }
        return $return_data;
    }
    public function _ajaxSucc($message='',$data=''){
        $this->_ajaxOutput(1,$message,$data);
    }
    public function _ajaxFail($message='',$data=''){
        $this->_ajaxOutput(0,$message,$data);
    }

    public function _ajaxOutput($code=1,$message='',$data=''){
        header('Content-Type:application/json; charset=utf-8');
        $result['code']=$code;
        $result['msg']=urlencode($message);
        $result['result']=$data;
        echo urldecode(json_encode($result));
    }
}

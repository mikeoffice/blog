<?php 

class Index extends CI_Controller{
	/**
	* 构造函数
	* @author guosi <cc.guo@musikid.com>
	* @return void
	* @version 2014-9-24
	**/
	
	function __construct()
	{
	   parent::__construct();
	}
	// --------------------------------------------------------------------
	
	/**
	* 网站首页
	* @author guosi <cc.guo@musikid.com>
	* @return void
	* @version 2014-9-24
	**/
	
	function index()
	{
	    $this->load->helper('html');
	    $this->load->view('admin/login');
	}
	// --------------------------------------------------------------------
	
	/**
	* 登陆接口
	* @author guosi <cc.guo@musikid.com>
	* @return void
	* @version 2014-9-24
	**/
	
	function login()
	{
	   $this->load->library('ajax');
	   $this->load->library('form_validation');
	   
	   $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
	   
	   $return['state'] = 0;

	   $this->form_validation->set_rules('email', '2', 'required');
       $this->form_validation->set_rules('password', '1', 'required');
	   
	   if($this->form_validation->run()){
	       $return['state'] = 1;
	   }else{
	       $return['info'] = $this->form_validation->error_array();
	   }
	   
	   $this->ajax->show_json($return);
	}
	// --------------------------------------------------------------------
}

?>
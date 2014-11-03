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
	    $this->load->view('home/index');
	}
	// --------------------------------------------------------------------
}

?>
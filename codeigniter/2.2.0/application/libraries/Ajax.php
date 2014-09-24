<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Ajax 辅助类
* @author guosi <cc.guo@musikid.com>
* @return void
* @version 2014-9-24
**/
class Ajax{
    
    private $ci;
    
    /**
    * 构造函数
    * @author guosi <cc.guo@musikid.com>
    * @return void
    * @version 2014-9-24
    **/
    
    function __construct()
    {
        $this->ci = get_instance();
    }
    // --------------------------------------------------------------------
	/**
	* 显示 JSON
	* @author guosi <cc.guo@musikid.com>
	* @return void
	* @version 2014-9-24
	**/
	
	function show_json(array $data)
	{
	    $this->ci->output->set_content_type ( 'application/json' );
	    $this->ci->output->set_output ( json_encode($data) );
	}
	// --------------------------------------------------------------------
}
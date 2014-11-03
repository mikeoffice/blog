<?php 
/**
* 加载外部资源
* @author guosi <cc.guo@musikid.com>
* @return void
* @version 2014-9-24
**/

function load_res($path)
{
    $res_url = config_item('static_url');
    return $res_url.trim($path,'\\').'?version='.config_item('res_version');
}
// --------------------------------------------------------------------

?>
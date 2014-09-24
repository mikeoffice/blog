<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 扩展CI的分页类
*/
class MY_Form_validation extends CI_Form_validation
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * XSS Clean
     *
     * @param   string
     * @return  string
     **/
    public function xss_clean($str)
    {
        return $this->CI->security->html_xss_clean($str);
    }
    // --------------------------------------------------------------------

    /**
     * Error message json format
     *
     * Returns the error messages as a string, wrapped in the error delimiters
     *
     * @return  json
     */
    public function error_array()
    {
        $return = array();
        // No errors, validation passes!
        if (count($this->_error_array) === 0)
        {
            return $return;
        }

        return $this->_error_array;
    }

    // --------------------------------------------------------------------


    function valid_url($str){
        $pattern = '/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i';
        if (!preg_match($pattern, $str))
        {
            return FALSE;
        }

        return TRUE;
    }
}
/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
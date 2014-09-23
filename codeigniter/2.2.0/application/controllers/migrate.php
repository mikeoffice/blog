<?php  if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Migrate extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('migration');
    }

    public function index()
    {
        if(!$this->migration->current())
        {
            show_error($this->migration->error_string());
        }

    }

    public function version($version_number)
    {
        if(!$this->migration->version($version_number))
        {
            show_error($this->migration->error_string());
        }
    }
}
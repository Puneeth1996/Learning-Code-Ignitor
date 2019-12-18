<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}
	
    public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
    }

    public function employees_example()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('employees_grocery');
        $output = $crud->render();

        $this->_example_output($output);                
    }
}

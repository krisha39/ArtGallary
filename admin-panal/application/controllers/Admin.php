<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('DbHandler');
        $this->conn = "";
        // opening db connection
        require_once dirname(__FILE__) . '/../libraries/DbConnect.php';
        $db         = new DbConnect();
        $this->conn = $db->connect();
        mysqli_set_charset($this->conn, 'utf8');
    }

	public function add_employee()
	{
		$f_name   = $_POST['f_name'];
		// echo(json_encode($_POST['f_name']));
		$l_name   = $_POST['l_name'];
		$job_title   = $_POST['job_title'];
		$manager   = $_POST['manager'];
		
        $response    = $this->dbhandler->add_employee($f_name,$l_name,$job_title,$manager);
        echo json_encode($response);
	}

	public function add_department()
	{
		$dept   = $_POST['dept'];
        $response    = $this->dbhandler->add_department($dept);
        echo json_encode($response);
	}

	public function add_role()
	{
		$role   = $_POST['role'];
        $response    = $this->dbhandler->add_role($role);
        echo json_encode($response);
	}

	public function get_dept(){
        
        $response    = $this->dbhandler->get_dept();
        echo json_encode($response);
    }

	public function get_employee(){
        
        $response    = $this->dbhandler->get_employee();
        echo json_encode($response);
    }

	public function get_role(){
        
        $response    = $this->dbhandler->get_role();
        echo json_encode($response);
    }

	public function get_all_data(){
        
        $response    = $this->dbhandler->get_all_data();
        echo json_encode($response);
    }

	public function get_contractor_details(){
        $contractor_name  = $this->input->post('contractor_name');
        $response = $this->dbhandler->get_contractor_details($contractor_name);
        echo json_encode($response);
    }
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends APP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->title       = 'Dashboard';
		$this->namespace   = 'app';
		$this->moduleId		= 1;
		$this->load->model('students/students_model');
		$this->load->model('teachers/teachers_model');
		$this->load->model('inventory/inventory_model');
		$this->load->model('employees/employees_model');
		$this->load->model('books/books_model');
		$this->load->model('loans/loans_model');
		$this->load->model('loans/loans_items_model');
	}

	public function index()
	{
		// print_d($this->load_header_data());
		$data                   = array();
		$data['header_data']	= $this->load_header_data();
		$data['content']		= 'dashboard/dashboard_view';
		$this->load->view('include/template', $data);
	}

	private function load_header_data()
	{
		return array(
			'students'  => $this->students_model->count_by(array("schoolId" => $this->schoolId, "hidden" => 0)),
			'teachers'  => $this->teachers_model->count_by(array("schoolId" => $this->schoolId, "hidden" => 0)),
			'books' => $this->books_model->get_all_sum_book(),
			'books_loans' => $this->loans_items_model->get_all_sum_items()
			// 'employees' => $this->employees_model->count_by(array("schoolId" => $this->schoolId, "hidden" => 0)),
			// 'inventory' => $this->inventory_model->count_by(array("schoolId" => $this->schoolId, "hidden" => 0, 'typeId' => 1, 'belongs_to_student' => 0))
		);
	}
}

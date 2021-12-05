<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Receipt_income extends APP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->title       	= 'Recibo de Ingresos';
		$this->namespace   	= 'app';
		$this->moduleId		= 6;

		$this->load->model('receipt_income/receipt_income_model');
	}

	public function index()
	{
		$data                   = array();
		$data['content']		= 'receipt_income/receipt_income_view';
		$this->load->view('include/template', $data);
	}

	public function datatable()
	{
		if($this->input->is_ajax_request())
		{
			$columns    	= "name,position,office,age,status_date,salary";
			$result     	= $this->invoices_model->datatable($columns, array("schoolId" => $this->schoolId), TRUE);

			echo json_encode(array('data' => $result));
		}
	}
}

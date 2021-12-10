<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends APP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->title       	= 'Reportes';
		$this->namespace   	= 'app';
		$this->moduleId		= 12;

		$this->load->model('reports/reports_model');
		$this->load->model('invoices/invoices_model');
		// $this->load->model('invoices/invoices_items_model');
		// $this->load->model('invoices/invoices_status_model');
		// $this->load->model('inventory/inventory_model');
		// $this->load->model('inventory/inventory_entry_model');
	}

	public function index()
	{
		redirect(base_url('dashboard'));
	}

	public function inventory_list()
	{
		$this->title			= "Lista de Inventario";
		$data                   = array();
		$data['content']		= 'reports/inventory_list_view';
		$this->load->view('include/template', $data);
	}

	public function expense_list()
	{
		$this->title			= "Lista de Gastos";
		$data                   = array();
		$data['content']		= 'reports/expense_list_view';
		$this->load->view('include/template', $data);
	}

	public function income_total_list()
	{
		$this->title			= "Total de Ingresos";
		$data                   = array();
		$data['content']		= 'reports/income_total_list_view';
		$this->load->view('include/template', $data);
	}

	public function invoice_list()
	{
		$this->title			= "Lista de Facturas";
		$data['status']         = $this->invoices_model->get_amount_status($this->schoolId);
		$data['content']		= 'reports/invoice_list_view';
		// print_d($data['status']$status->Borrador;);
		$this->load->view('include/template', $data);
	}

	public function payments_total_list()
	{
		$this->title			= "Total de Pagos";
		$data                   = array();
		$data['content']		= 'reports/payments_total_list_view';
		$this->load->view('include/template', $data);
	}
}

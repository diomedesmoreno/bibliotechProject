<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Returns extends APP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->title       	= 'Devoluciones';
		$this->namespace   	= 'app';

		$this->load->model('returns/returns_model');
		// $this->load->model('loans/Loans_model');

		$this->load->model('loans/loans_model');
		$this->load->model('loans/loans_items_model');
		$this->load->model('loans/loans_status_model');
		// $this->load->model('editorial/editorial_model');
		// $this->load->model('teachers/teachers_model');
		// $this->load->model('students/students_model');
		// $this->load->model('books/books_model');
	}

	public function index()
	{
		$data                   = array();
		$data['content']		= 'returns/returns_view';
		$this->load->view('include/template', $data);
	}

	public function datatable()
	{
		if($this->input->is_ajax_request())
		{
			$columns    		= "returnId,full_name,name_status,statusId";
			$result     		= $this->returns_model->datatable($columns, array("hidden" => 0), TRUE);
			echo json_encode(array('data' => $result));
		}
	}

	public function add($loanId = FALSE)
	{
		$data = array();
		if($loanId != FALSE)
		{
			$data['loanId'] = $loanId;
		}
		$this->loans 	= $this->loans_model->all_loans();
		$this->status	= $this->loans_status_model->get_assoc_list(array("statusId AS id", "name"), false, false, false, [1,2]);

		echo json_encode(array('result' => 1, 'view' => $this->load->view('returns/return_new', $data, TRUE)));
	}

	public function edit($returnId)
	{
		$data['row'] = $this->returns_model->get($returnId);
		echo json_encode(array('result' => 1, 'view' => $this->load->view('returns/return_new', $data, TRUE)));
	}

	public function insert()
	{
		$error 		= '';
		$valid      = TRUE;

		// $this->form_validation->set_rules('first_name', '<strong>Nombre</strong>', 'trim|required');
		// $this->form_validation->set_rules('last_name', '<strong>Apellido</strong>', 'trim|required');
		// $this->form_validation->set_rules('email', '<strong>Email</strong>', 'trim|required');

		// $valid           = ($valid != FALSE) ? $this->form_validation->run($this) : $valid;
		// $error          .= validation_errors();

		// if($valid == FALSE)
		// {
		// 	echo json_encode(array('result' => 0, 'error' => display_error($error)));
		// }
		// else
		// {
			// print_d($this->input->post('loanId'));
			$data = array(
				'date'    	=> $this->input->post('return_date'),
				'loanId'     	=> $this->input->post('loanId'),
				'statusId'      	=> $this->input->post('statusId'),
			);

			if($this->returns_model->save($data))
			{
				echo json_encode(array("result" => 1));
			}
		// }
	}

	public function update($returnId)
	{
		$error 		= '';
		$valid      = TRUE;

		// $this->form_validation->set_rules('first_name', '<strong>Nombre</strong>', 'trim|required');
		// $this->form_validation->set_rules('last_name', '<strong>Apellido</strong>', 'trim|required');
		// $this->form_validation->set_rules('email', '<strong>Email</strong>', 'trim|required');

		// $valid           = ($valid != FALSE) ? $this->form_validation->run($this) : $valid;
		// $error          .= validation_errors();

		// if($valid == FALSE)
		// {
		// 	echo json_encode(array('result' => 0, 'error' => display_error($error)));
		// }
		// else
		// {
			$data = array(
				'date'    	=> $this->input->post('return_date'),
				'loanId'     	=> $this->input->post('loansId'),
				'statusId'      	=> $this->input->post('statusId'),
			);

			if($this->returns_model->save($data, $returnId))
			{
				echo json_encode(array("result" => 1));
			}
		// }
	}

	public function delete($returnId)
	{
		if($this->returns_model->save(array('hidden' => 1), $returnId))
		{
			echo json_encode(array('result' => 1));
		}
	}
}

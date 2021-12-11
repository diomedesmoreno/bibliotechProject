<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices_model extends MY_Model
{
    public function __construct()
    {
        $this->table_name   = "ai_invoices";
        $this->view_name    = "ai_invoices_view";
        $this->primary_key  = "invoiceId";
        $this->order_by     = "invoiceId DESC";
    }

    public function get_data_print($invoiceId){
        $result = $this->db->query("SELECT * FROM $this->view_name WHERE invoiceId = $invoiceId")->result();

		return $result[0];
    }

    public function get_amount_status($schoolId){
        $result = $this->db->query("SELECT  (SELECT count(*) from ai_invoices where statusId = 1 AND hidden = 0 AND schoolId = $schoolId) as 'Borrador', (SELECT count(*) from ai_invoices where statusId = 2 AND hidden = 0 AND schoolId = $schoolId) as 'No_Pagada', (SELECT count(*) from ai_invoices where statusId = 3 AND hidden = 0 AND schoolId = $schoolId) as 'Parcial', (SELECT count(*) from ai_invoices where statusId = 4 AND hidden = 0 AND schoolId = $schoolId) as 'Pagada', (SELECT count(*) from ai_invoices where statusId = 5 AND hidden = 0 AND schoolId = $schoolId) as 'Anulada' FROM ai_invoices as a LIMIT 1;")->result();
		return $result[0];
    }
}

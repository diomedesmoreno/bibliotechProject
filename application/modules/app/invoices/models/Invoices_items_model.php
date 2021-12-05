<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices_items_model extends MY_Model
{
    public function __construct()
    {
        $this->table_name   = "ai_invoices_items";
        $this->view_name    = "ai_invoices_items";
        $this->primary_key  = "itemId";
        $this->order_by     = "itemId DESC";
    }

    public function get_all_items($invoiceId)
	{
		$result = $this->db->query("SELECT a.*, i.name AS product_name FROM $this->table_name AS a LEFT JOIN ai_inventory AS i ON i.inventoryId = a.productId WHERE a.invoiceId = $invoiceId AND a.hidden = 0")->result();

		return $result;
	}
}

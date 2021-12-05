<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_family_model extends MY_Model
{
    public function __construct()
    {
        $this->table_name   = "ai_parents_view";
        $this->view_name    = "ai_parents_view";
        $this->primary_key  = "parentId";
        $this->order_by     = "parentId DESC";
    }
}

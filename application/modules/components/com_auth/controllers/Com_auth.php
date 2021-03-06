<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Com_auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('com_auth/com_auth_model');
    }

    public function auth($email, $password)
    {
        $password =  md5($password);
        $row      = $this->com_auth_model->auth($email, $password);

        if($row)
        {
			$session['app'] = array(
				"userdata" 		=> $this->get_user_data($row),
				"settings" 		=> $this->get_settings_data($row->schoolId)
			);
			$this->session->set_userdata($session);
            return array(TRUE, $row->initial_settings);
        }
        else
        {
            return array(FALSE, 0);
        }
    }

	public function pr_auth($email, $password)
	{
		$password =  md5($password);
		$row      = $this->com_auth_model->pr_auth($email, $password);

		if($row)
		{
			$session['pr'] = array(
				"userdata" => array(
					'is_pr_logged_in'      => 1,
					'userId'            => $row->userId,
					'full_name'         => $row->first_name.' '.$row->last_name,
					'email'             => $row->email,
					'image'             => ($row->image != '' || $row->image != null) ? $row->image : 'assets/template/app/default/assets/images/avatar-4.png',
					'statusId' 			=> $row->statusId
				)
			);

			$this->session->set_userdata(array("pr" => $session));
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function ad_auth($email, $password)
	{
		$password =  md5($password);
		$row      = $this->com_auth_model->ad_auth($email, $password);
		
		if($row)
		{
			$session['ad'] = array(
				"userdata" => array(
					'is_ad_logged_in'   => 1,
					'userId'            => $row->userId,
					'full_name'         => $row->first_name.' '.$row->last_name,
					'email'             => $row->email,
					'image'             => ($row->image != '' || $row->image != null) ? $row->image : 'assets/template/app/default/assets/images/avatar-4.png',
					'statusId' 			=> $row->statusId
				)
			);

			$this->session->set_userdata(array("ad" => $session));
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	private function get_user_data($row)
	{
		return array(
			'is_logged_in'      => 1,
			'menu_type'			=> "expanded",
			'schoolId'          => $row->schoolId,
			'planId'			=> $row->planId,
			'user_qty'			=> $row->user_qty,
			'school_name'       => $row->school_name,
			'countryId'         => $row->countryId,
			'userId'            => $row->userId,
			'full_name'         => $row->first_name.' '.$row->last_name,
			'first_name'        => $row->first_name,
			'email'             => $row->email,
			'image'             => ($row->image != '' || $row->image != null) ? $row->image : base_url().'assets/template/app/default/assets/images/avatar-4.png',
			'statusId' 			=> $row->statusId,
			'typeId' 			=> $row->typeId,
			'initial_settings' 	=> $row->initial_settings,
			'expiracy_date' 	=> $row->expiracy_date,
			'owner' 			=> $row->owner
		);
	}

	private function get_settings_data($schoolId)
	{
		$row = $this->com_auth_model->get_settings_data($schoolId);

		return array(
			'settingId' 	=> $row->settingId,
			'currencyId' 	=> $row->currencyId,
			'language' 		=> $row->language,
		);
	}
}

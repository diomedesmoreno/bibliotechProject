<?php
/**
 * Created by PhpStorm.
 * User: Jesus Enmanuel
 * Date: 26/08/2018
 * Time: 11:17
 */

if( ! function_exists('display_css_files'))
{
    function display_css_files($module)
    {
        $files = "";
        switch($module)
        {
            case "main":
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/bootstrap/css/bootstrap.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/default/assets/icon/themify-icons/themify-icons.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/default/assets/icon/icofont/css/icofont.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/default/assets/css/simple-line-icons.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/default/assets/pages/flag-icon/flag-icon.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/switchery/dist/switchery.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/select2/dist/css/select2.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/dropify-master/dist/css/dropify.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/default/assets/css/style.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/default/assets/css/jquery.mCustomScrollbar.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/formValid/src/jquery.formValid.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/ladda/ladda-themeless.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/sweetalert/sweetalert.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/bootstrap-datepicker/css/bootstrap-datepicker.min.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/css/custom.css">';
                break;

			case "session":
			case "pr_session":
			case "ad_session":
			case "register":
				$files .= '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css" rel="stylesheet">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/session/css/style.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/session/vendor/formValid/src/jquery.formValid.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/sweetalert/sweetalert.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/ladda/ladda-themeless.min.css">';
			break;

			case "calendar":
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/fullcalendar/dist/fullcalendar.css">';
				$files .= '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/template/app/bower_components/fullcalendar/dist/fullcalendar.print.css" media="print">';
				break;
        }

        return $files;
    }
}

if( ! function_exists('display_js_files'))
{
    function display_js_files($module)
    {
        $files = "";
        switch($module)
        {
            case "main":
            	$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/jquery/dist/jquery.min.js"></script>';
            	$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/popperjs/popper.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/jquery-ui/jquery-ui.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/tether/dist/js/tether.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/bootstrap/js/bootstrap.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/modernizr/modernizr.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/classie/classie.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/raphael/raphael.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/js/script.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/js/pcoded.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/js/sidebar.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/js/jquery.mousewheel.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/switchery/dist/switchery.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/select2/dist/js/select2.full.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/select2/dist/js/lang/es.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/dropify-master/dist/js/dropify.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/formValid/src/jquery.formValid.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/ladda/spin.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/ladda/ladda.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/sweetalert/sweetalert.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/ajaxform/ajaxform.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/bootstrap-datepicker/js/lang/bootstrap-datepicker.es.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/pages/form-masking/inputmask.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/pages/form-masking/jquery.inputmask.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/alphanumeric_pack/jquery.alphanumeric.pack.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/js/dom.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/js/util.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/js/global.js"></script>';
                break;

			case "dashboard":
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/morris.js/morris.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/default/assets/pages/dashboard/project-dashboard.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/modules/dashboard.js"></script>';
				break;

			case "session":
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/jquery/dist/jquery.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/session/vendor/formValid/src/jquery.formValid.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/spin.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/ladda.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/sweetalert/sweetalert.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/dom.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/modules/session.js"></script>';
				break;

			case "pr_session":
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/jquery/dist/jquery.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/session/vendor/formValid/src/jquery.formValid.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/spin.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/ladda.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/sweetalert/sweetalert.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/dom.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/modules/pr_session.js"></script>';
				break;

			case "ad_session":
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/jquery/dist/jquery.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/session/vendor/formValid/src/jquery.formValid.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/spin.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/ladda.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/sweetalert/sweetalert.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/dom.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/modules/ad_session.js"></script>';
				break;

			case "register":
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/jquery/dist/jquery.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/session/vendor/formValid/src/jquery.formValid.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/spin.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/ladda/ladda.min.js"></script>';
				$files .= '<script src="'.base_url().'assets/template/app/bower_components/sweetalert/sweetalert.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/dom.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/modules/register.js"></script>';
				break;

			case "calendar":
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/moment/min/moment.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/fullcalendar/dist/locales-all.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/modules/calendar.js"></script>';
				break;

			case "employees":
				$files .= '<script src="'.base_url().'assets/js/modules/employees.js"></script>';
				break;

			case "expenses":
				$files .= '<script src="'.base_url().'assets/js/modules/expenses.js"></script>';
				break;

			case "invoices":
				$files .= '<script src="'.base_url().'assets/js/modules/invoices.js"></script>';
				break;

			case "payments":
				$files .= '<script src="'.base_url().'assets/js/modules/payments.js"></script>';
				break;

			case "receipt_income":
				$files .= '<script src="'.base_url().'assets/js/modules/receipt_income.js"></script>';
				break;

			case "reports":
				$files .= '<script src="'.base_url().'assets/js/modules/reports.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets/template/app/bower_components/morris.js/morris.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets\template\app\default\assets\pages\report\project-project-income.js"></script>';
				$files .= '<script type="text/javascript" src="'.base_url().'assets\template\app\default\assets\pages\report\project-inventory.js"></script>';
				$files .= '<script src="'.base_url().'assets/js/modules/dashboard.js"></script>';
				break;

			case "school":
				$files .= '<script src="'.base_url().'assets/js/modules/school.js"></script>';
				break;

			case "students":
				$files .= '<script src="'.base_url().'assets/js/modules/students.js"></script>';
				break;

			case "teachers":
				$files .= '<script src="'.base_url().'assets/js/modules/teachers.js"></script>';
				break;

			case "inventory":
				$files .= '<script src="'.base_url().'assets/js/modules/inventory.js"></script>';
				break;

			case "users":
				$files .= '<script src="'.base_url().'assets/js/modules/users.js"></script>';
				break;

			case "parents":
				$files .= '<script src="'.base_url().'assets/js/modules/parents.js"></script>';
				break;

			case "general_settings":
				$files .= '<script src="'.base_url().'assets/js/modules/general_settings.js"></script>';
				break;
				case "reports":
					$files .= '<script src="'.base_url().'assets/js/modules/reports.js"></script>';
					break;
	
				case "students":
					$files .= '<script src="'.base_url().'assets/js/modules/students.js"></script>';
					break;
	
				case "teachers":
					$files .= '<script src="'.base_url().'assets/js/modules/teachers.js"></script>';
					break;
	
				case "books":
					$files .= '<script src="'.base_url().'assets/js/modules/books.js"></script>';
					break;
	
				case "loans":
					$files .= '<script src="'.base_url().'assets/js/modules/loans.js"></script>';
					break;
	
				case "editorial":
					$files .= '<script src="'.base_url().'assets/js/modules/editorial.js"></script>';
					break;
	
				case "returns":
					$files .= '<script src="'.base_url().'assets/js/modules/returns.js"></script>';
					break;
	
				case "users":
					$files .= '<script src="'.base_url().'assets/js/modules/users.js"></script>';
					break;
        }

        return $files;
    }
}


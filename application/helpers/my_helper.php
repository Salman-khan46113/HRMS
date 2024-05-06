<?php 

function getCompanyId(){
	$company_id = '';
	if($_SESSION["role"] != "arom"){
            $company_id = $_SESSION["company_id"];
    }

	return $company_id;
}

function pr($data,$exit = 0)
{
        echo("<pre>");

        print_r($data);
        echo("</pre>");

        if($exit == 1){
        	exit;
        }
}
function display_no_character($value = ''){
	if($value == "" ||  $value == null ){
		$value = "--";
	}
	return $value;
}
function get_entiry_url($module_name = '',$mode = '',$id=""){

	$url = '';
	switch ($module_name) {
		case 'company':
			$url = base_url()."company-view?id=".$id;
			break;
		case 'employee':
			switch ($mode) {
				case 'View':
					$url = base_url()."employee-details.html?id=".$id;
					break;
			}
			break;
		case 'announcement':
			switch ($mode) {
				case 'View':
					$url = base_url()."announcement_details.html?id=".$id;
					break;
			}
			break;
		case 'employee_leave':
			switch ($mode) {
				case 'List':
					$url = base_url()."leave-allocation.html";
					break;
			}
			break;
		case 'salary_structure':
			switch ($mode) {
				case 'Add':
					$url = base_url()."salary-structure-add.html";
					break;
				case 'Update':
					$url = base_url()."salary-structure-update.html?id=".$id;
					break;
				case 'List':
					$url = base_url()."salary-structure.html";
					break;
			}
			break;
		case 'salary_component':
			switch ($mode) {
				case 'Add':
					$url = base_url()."salary-component-add.html";
					break;
				case 'List':
					$url = base_url()."salary-component.html";
					break;
			}
			break;
		case 'employee_salary_component':
			switch ($mode) {
				case 'List':
					$url = base_url()."employee-salary-structure.html?id=".$id;
					break;
			}
			break;
		case 'employee_salary_structure':
			switch ($mode) {
				case 'Extend':
					$url = base_url()."employee-salary-structure-extend.html?id=".$id;
					break;
				case 'Update':
					$url = base_url()."employee-salary-structure-update.html?id=".$id;
					break;
			}
			break;
		case 'employee_profile':
			$url = base_url()."public/img/uploads/employee_profile/".$id;
			break;
	}
	if($url == '' || $url == null){
		$url = 'javascript:void(0)';
	}
	return $url;
}

function get_status($value = ""){
	$status = "";
	switch ($value) {
		case 'pending':
			$status = "Pending";
			break;
		case 'reject':
			$status = "Rejected";
			break;
		case 'approve':
			$status = "Approved";
			break;
		case 'active':
			$status = "Active";
			break;
		case 'inactive':
			$status = "Inactive";
			break;
		case 'full_day':
			$status = "Full Day";
			break;
		case 'half_day':
			$status = "Half Day";
			break;
		case 'SickLeave':
			$status = "Sick Leave";
			break;
		case 'PaidLeave':
			$status = "Paid Leave";
			break;
		case 'CasualLeave':
			$status = "Casual Leave";
			break;
		
		default:
			$status = $value;
			break;
	}

	return $status;
}

function date_formater($value){
	if($value != "" && $value != null){
		$date=date_create($value);
		$date = date_format($date,"Y-m-d");
	}else{
		$date = "--";
	}

	return $date;
}

function date_formate($value){
	$date = "";
	if($value != "" && $value != null){
		$date = DateTime::createFromFormat('m/d/Y', $value);
	    $date = $date->format('Y-m-d');
	}else{
		$date = "--";
	}
	return $date;
}


function is_valid_array($data = []){
    if(is_array($data) && count($data) > 0){
        return true;
    }
    return false;
}

function timeFormate($date_time = ''){
	$time_formate = '';
	if ($date_time != '') {
		$date_time = new DateTime($date_time);
        $time_formate = $date_time->format("g:i A");
	}

	return $time_formate;
	
}
// function mysqlFormat($dateString = ''){
//     $date = DateTime::createFromFormat('m/d/Y', $dateString);
//     $mysqlDate = $date->format('Y-m-d');
//     return $mysqlDate;
// }

function mysqlFormat($dateString = ''){
	if (DateTime::createFromFormat('Y-m-d', $dateString) !== false) {
		return $dateString;
	}
	$date = DateTime::createFromFormat('m/d/Y', $dateString);
	$mysqlDate = $date->format('Y-m-d');
	return $mysqlDate;
}
function getDatePickerFormat($dateString = ''){
	$mysqlDate = "";
	if($dateString != ""){
		$date = DateTime::createFromFormat('Y-m-d', $dateString);
    	$mysqlDate = $date->format('m/d/Y');
	}
    
    return $mysqlDate;
}

function getGridButton($button_arr = array()){

	$button_html = "";
	if(count($button_arr) > 1){
		$button_html .='<a class="'.$button_arr[0]["class"].' btn view-btn" href="'.$button_arr[0]["href"].'" type="button" '.$button_arr[0]["extra_par"].' title="'.$button_arr[0]["title"].'">'.$button_arr[0]["title"].'</a>';
		$button_html .= '<div class="dropdown">';
		$button_html .= '<button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button><ul class="dropdown-menu mt-2" >';
		foreach ($button_arr as $key => $value) {
			if($key > 0){
				$button_html .= '<li><a class="dropdown-item '.$button_arr[$key]["class"].'" '.$button_arr[$key]["extra_par"].' href="'.$button_arr[$key]["href"].'" title="'.$button_arr[$key]["title"].'">'.$button_arr[$key]["title"].'</a></li>';
			}
		}

		$button_html .= '</ul></div>';

	}else{
		$button_html ='<a class="btn view-btn '.$button_arr[0]["class"].'" href="'.$button_arr[0]["href"].'" '.$button_arr[0]["extra_par"].' title="'.$button_arr[0]["title"].'">'.$button_arr[0]["title"].'</a>';
	}

	return $button_html;
	
}

function getNumberFormate($value = ''){
	$number = trim($value);
	if ($number == '' || $number <= 0) {
		return '0';
	} else {
	    $number = number_format($number, 2, '.', ',');
		return $number;
	}
}
function removeNumberFormate($value = ''){
	return str_replace(",", "",$value);
}


?>
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
        echo("<pre>");

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
function get_entiry_url($module_name = '',$mode = "",$id=""){
	$url = '';
	switch ($module_name) {
		case 'company':
			$url = base_url()."company-view?id=".$id;
			break;
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
	if(count($button_arr) > 0){
		$button_html .='<a class="'.$button_arr[0]["class"].' btn view-btn" href="javascript:void(0)" type="button" '.$button_arr[0]["extra_par"].' title="'.$button_arr[0]["title"].'">'.$button_arr[0]["title"].'</a>';
		$button_html .= '<div class="dropdown">';
		$button_html .= '<button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button><ul class="dropdown-menu mt-2" >';
		foreach ($button_arr as $key => $value) {
			if($key > 0){
				$button_html .= '<li><a class="dropdown-item '.$button_arr[$key]["class"].'" '.$button_arr[$key]["extra_par"].' href="javascript:void(0)" title="'.$button_arr[$key]["title"].'">'.$button_arr[$key]["title"].'</a></li>';
			}
		}

		$button_html .= '</ul></div>';

	}else{
		$button_html = '<div class="dropdown">';
		$button_html .='<button class="toggle-btn '.$button_arr[0]["class"].'" type="button" '.$button_arr[0]["extra_par"].' title="'.$button_arr[0]["title"].'">'.$button_arr[0]["title"].'</button>';
	}

	return $button_html;
	pr($button_arr,1);
}


?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
   	$base_url = $this->config->item('base_url');
    $this->smarty->assign("base_url", $base_url);
    
    // $route_arr =["add-employee.html","login.html","signup.html","home.html","attendance.html","employee-details.html","attendance-sheet.html","employee-list.html","leave-list.html","leave-management-list.html","designation.html","holiday.html","holiday-management.html","holiday.html","announcement.html","announcement_list.html","announcement_details.html","department.html","employee_add.html","bank-listing.html","shift-management.html","employee-add.html"];
    $route_arr = $this->router->routes;
    $route_arr = array_keys($route_arr);

    $authentication_arr = ["login.html","signup.html","attendance.html","forgot.html"];
    $current_route = str_replace("/","", $_SERVER['PATH_INFO']);
    if(in_array($current_route, $route_arr)){
    	if(!in_array($current_route, $authentication_arr)){
    		
    		if(!array_key_exists("login",$_SESSION)){
		      redirect('./login.html');
		    }else{
		      if (!$_SESSION['login']) {
		        redirect('./login.html');
		      }
		    }
		    $ajax_json = $this->session->userdata();
		    // pr($ajax_json);
		    $this->smarty->assign("user_data", $ajax_json);
		    $ajax_json = $this->session->userdata();
            // pr($ajax_json,1);
		    $this->smarty->assign("user_data", $ajax_json);
		    $html = $this->smarty->fetch("header.tpl",$ajax_json);
	    	echo $html;


    	}
    	
    }


    

  }
  public function email_sender($data = array()){
    $data['base_url']  = $this->config->item('base_url');
    $mail = $this->phpmailer_lib->load();
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mullaaarbaj10@gmail.com';                 // SMTP username
    $mail->Password = 'hyzd xvex dqts kflv';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->From = 'mullaaarbaj10@gmail.com';
    $mail->FromName = $data['title'];
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress($data['email']);               // Name is optional

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('tet1.png', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $data['subject'];
    $html = $this->smarty->fetch($data['templete'],$data);
    $mail->Body    = $html;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($this->config->item("email_notification") == "Yes"){
        if(!$mail->send()) {
          $message =  'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $message =  'Message has been sent';
        }
     }else{
        $message =  'notification turn off';
     }
    return $message;
  }


}

?>

<?php

function hashEncrypt($input){

	$hash = password_hash($input, PASSWORD_DEFAULT);
	
	return $hash;
}
	
function hashEncryptVerify($input, $hash){
	
	if(password_verify($input, $hash)){
	  return true;
	}else{
	  return false;
	}
}

function is_login(){
	$CI =& get_instance();
	
	if($CI->session->userdata('login') == FALSE){
		redirect('auth');
	}
}

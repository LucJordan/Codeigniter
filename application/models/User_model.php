<?php 
   Class User_model extends CI_Model {
	
      Public function __construct() { 
         parent::__construct(); 
      } 
	public function user_method(){
        echo "method user";
    }
   } 
?>
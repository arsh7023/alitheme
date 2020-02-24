<?php
/*
Template Name: Custom-lostpass
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js"></script>
  <link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css" rel="stylesheet" type="text/css">
<body>

<script type="text/javascript">
  
  function form_validationcxc() {
	
	/* Check the Customer Email for invalid format */
	var customer_email = document.forms["customer_details"]["customer_email"].value;
	var at_position = customer_email.indexOf("@");
	var dot_position = customer_email.lastIndexOf(".");
	if (at_position<1 || dot_position<at_position+2 || dot_position+2>=customer_email.length) {
	   alert("Given email address is not valid.");
	   //document.forms["customer_details"]["sample"].value = 'err';
	   document.getElementById('sample').value= "err";
	   $('#sample').val('hjkahfkkdshdk');
	   exit();
	
		}
	
	}
  
</script>

 

<?php

get_header(); 

global $wpdb, $user_ID;  

if($_POST)
   {
	   	  
		$x = "";  
	    $pass1 = $_POST["pass1"];

		$success = 0;
		$msg = "";
	      if(!strlen($pass1) > 0)
	        {
		       $x = "input Error";			   
		    }
			else
			{
	
				
					$user_id =username_exists( $pass1 );
					
					if (!$user_id ) 
					{ 
					   $user_id =email_exists( $pass1 );
					   if(!$user_id)
					   {
						$success = 2;
					   }
					   else
					   {
						   $success = 1;
					   }
					}
					else 
					{  
						$success = 1;
					}
					if ($success == 1)
					{
					
						//$password = 'HelloWorld';
						$random_password = wp_generate_password( 12, false );  
						wp_set_password( $random_password, $user_id );
						
						$user_info = get_userdata($user_id);
						$Email = $user_info->user_email;
						
						$from = get_option('admin_email');  
									$headers = 'From: '.$from . "\r\n";  
									$subject = "Change Password successful";  
									$msg = "Change Password.\nYour new password: $random_password";  
									wp_mail( $Email, $subject, $msg, $headers );  
					}
				

			}
	
		  
   }
   else
   {
	   $x = "";
	   $Email = "";
	   $success = 0;
	   $Username = "";
	   $msg = "";
   }
?>

<!--<form name="customer_details" method="POST" onsubmit="return form_validation()" action=""> -->
   <div id="center_div"> 
    <div class ="myclass"> 

        <form name="customer_details" method="POST" action="">
        
        Your username or email address: <input type="text"  id="pass1" name="pass1" value="" /><br />
        <input type="submit" value="submit"/>
        <span style="color:red"> 
         <?php 
		    if ($success == 1)
		     {
				echo "A new password has sent to your email.";
		     }
			 else if ($success == 2)
			 {
				 echo "not such a user!";
			 }
			 else
			 {
				 echo $x;
			 }
			 
		  ?>
        </span>
        </form>
        </div>
         <div id="side-div" > 
     
           <div align="center" style="margin-left:2%" >
              <?php get_sidebar(); ?>
              <?php dynamic_sidebar( 'Home right sidebar' ); ?>
          </div>
          
          <div style="border:2px solid; float:right; margin-left:2%; margin-right:5%">
              <p> Test sidebar2 Ali </p>
          </div>
          
           <div style="border:2px solid; float:left;margin-left:2%" >
              <p> Test sidebar1 Ali </p>
          </div>
          
      </div>
    </div> 
 
 <?php  
    get_footer();  
 ?>

</body>
</html> 

<?php
/*
Template Name: Custom-reg
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

if($_POST)
   {
	   	  
		$x = "";  
	    $Email = $_POST["customer_email"];
		$Username = $_POST["customer_user"];
		$success = 0;
		$msg = "";
	      if(!strlen($Email) > 0)
	        {
		       $x = "Email Error";			   
		    }
			else
			{
			   if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $Email))
				{  
				    $x = "Email Error";	
				} 
				else
				{
					if(!strlen($Username) > 0)
	        		{
		       			$x = "Username Error";			   
		    		}
					else
					{
						$random_password = wp_generate_password( 12, false );  
						$status = wp_create_user( $Username, $random_password, $Email );  
							if ( is_wp_error($status) ) 
							{ 
								//echo "Username already exists. Please try another one.";  
								//get_header();  
								$success = 2;
							}
						else 
						{  
							$from = get_option('admin_email');  
									$headers = 'From: '.$from . "\r\n";  
									$subject = "Registration successful";  
									$msg = "Registration successful.\nYour login details\nUsername: $Username\nPassword: $random_password";  
									wp_mail( $Email, $subject, $msg, $headers );  
							//echo "Please check your email for login details."; 
							//get_header();   
							$success = 1;
						}
					}
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
        
        Your Email: <input type="text"  id="customer_email" name="customer_email" value="<?PHP echo $Email; ?>" /><br />
        Your Username: <input type="text"  id="customer_user" name="customer_user" value="<?PHP echo $Username; ?>" /><br />
        <input type="submit" value="submit"/>
        <span style="color:red"> 
         <?php 
		    if ($success == 1)
		     {
				echo "Please check your email for login details.";
		     }
			 else if ($success == 2)
			 {
				 echo "Username already exists. Please try another one.";
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

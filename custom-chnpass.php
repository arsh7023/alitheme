<?php
/*
Template Name: Custom-chnpass
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
		$pass2 = $_POST["pass2"];
		$success = 0;
		$msg = "";
	      if(!strlen($pass1) > 0)
	        {
		       $x = "Pass Error";			   
		    }
			else
			{
			   if(!strlen($pass2) > 0)
				{  
				    $x = "pass Error";	
				} 
				else
				{
					if($pass1 != $pass2)
	        		{
		       			$x = "Two passwords are not equal";			   
		    		}
					else
					{
						if ($user_ID) {  
							$status =wp_set_password( $pass1, $current_user->ID );
							
							if ( is_wp_error($status) ) 
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
							$x = "Please login first!";		
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
        
        Your new pasword: <input type="password"  id="pass1" name="pass1" value="" /><br />
        Retype your new pasword: <input type="password"  id="pass2" name="pass2" value="" /><br />
        <input type="submit" value="submit"/>
        <span style="color:red"> 
         <?php 
		    if ($success == 1)
		     {
				echo "You password changed successfully.";
		     }
			 else if ($success == 2)
			 {
				 echo "Password change failed!";
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

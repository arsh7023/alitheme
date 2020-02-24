
<?php
/*
Template Name: Custom-loguser
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
global $wpdb, $user_ID;  

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
		       $x = "Password Error";			   
		    }
			else
			{
			  
					if(!strlen($Username) > 0)
	        		{
		       			$x = "Username Error";			   
		    		}
					else
					{
							$creds = array();
							$creds['user_login'] = $Username;
							$creds['user_password'] = $Email;
							
														
							//$user = wp_signon( $creds, false );
							//$user = wp_signon( $creds, false );
							
							wp_login( $Username, $Email, "" );

							$success = 1;
							
							//wp_set_current_user( $user->ID, $user->user_login );
							//$creds['remember'] = true;
							//add_filter( 'authenticate', 'allow_programmatic_login', 10, 3 );
							//$user = wp_signon( $creds, false );
							//remove_filter( 'authenticate', 'allow_programmatic_login', 10, 3 );
							//$user = get_userdatabylogin( $Username );
							//$user_id = $user->ID;
							//wp_set_current_user( $user_id, $user_login );
							//wp_set_auth_cookie( $user_id );
							
							//$user = wp_authenticate ( $Username, $Email );
							//echo $user->user_login;
							/*
							if ( is_user_logged_in() ) {
 
								$current_user = wp_get_current_user();
							
								echo 'Personal Message For ' . $current_user->user_firstname . '!';
							}
							
							else {
									echo 'Non Personalized Message!';
							
								
							}
							
							
							if ( is_wp_error($user) )
							{
								//echo $user->get_error_message();
								$success = 2;
							}
							else
							{
								$success = 1;
							}
							*/
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
        
        <?php if (!$user_ID) { ?>  
        Your Username: <input type="text"  id="customer_user" name="customer_user" value="<?PHP echo $Username; ?>" /><br />
        Your password: <input type="password"  id="customer_email" name="customer_email" value="" /><br />
        <input type="submit" value="submit"/>
        <input type="hidden" name="action" value="my_login_action" />
        <br><div><a href='index.php?page_id=109'>Not a membet? Register Here</a></div>
         

														   
							   <br/>
							   <a href='<?php echo network_site_url( '/' ); ?>lostpassword'>Lost Password</a>
         
         
         
        <span style="color:red"> 
         <?php 
		    if ($success == 1)
		     {
				echo "Hi user";
		     }
			 else if ($success == 2)
			 {
				 echo "Could not login.";
			 }
			 else
			 {
				 echo $x;
			 }
			 
		  ?>
        </span>
         <?php
		    }
		    else
		    {
							  echo '<div>';
							  echo 'Username: ' . $current_user->user_login . "\n";
							  echo 'User email: ' . $current_user->user_email . "\n";
							  echo 'User first name: ' . $current_user->user_firstname . "\n";
							  echo 'User last name: ' . $current_user->user_lastname . "\n";
							  echo 'User display name: ' . $current_user->display_name . "\n";
							  echo 'User ID: ' . $current_user->ID . "\n";
							   echo '</div>';
							   
							   wp_loginout( home_url());
							   
							   echo "<br/>";
							   
							   //echo "<a href='".wp_lostpassword_url()."'>Change Password here</a>";
							   
							    echo "<br/>";
								
								$site_url = network_site_url( '/' );
														   
							    echo "<br/>";
							   
							   echo "<a href='".$site_url."change-password'>Change Password here</a>";
		    }
		 ?>
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

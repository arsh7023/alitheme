<?php
/*
Template Name: Custom-login
*/
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="styles.css" rel="stylesheet" type="text/css">-->
<!--  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script> -->
  
  
  <link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css" rel="stylesheet" type="text/css">
	
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
  
      <script src="<?php echo get_template_directory_uri(); ?>/js/jssor.core.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jssor.utils.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jssor.slider.js"></script>
  
  

 


  <script>
  $(function() {
    $( "#accordion" ).accordion();
    $( "#accordion" ).accordion({ active: 2 });
    $( "#tabs" ).tabs();
	    
  });
  </script>
  
  <script type="text/javascript">
$(document).ready(function() { 
	
var docHeight = $(window).height();
var footerHeight = $('#footer').height();
var footerTop = $('#footer').position().top + footerHeight;  
if (footerTop < docHeight) {
$('#footer').css('margin-top', 10 + (docHeight - footerTop) + 'px');
}
});
</script>

</head>


	<body>
      
          <?php get_header(); ?>       
       
		<!--<form name="myform" id="myform"> -->
		

              
            <div class ="wide">	</div>
	
		    <div id="center_div"> 
            
        
           
		 
	                          
       
                 <div class ="myclass">	
					<?php  
					if(isset($_GET["login"]))
					{
						
						if (!$user_ID)
						{
						 echo "<span style='color:red'>WRONG CREDENTIALS</span>";
					     }
					}
                    
						global $wpdb, $user_ID;  
						//Check whether the user is already logged in  
						if (!$user_ID) {  
						
						
						//wp_redirect("index.php?page_id=113");
						//exit;
						
						
							if ( ! is_user_logged_in() ) { // Display WordPress login form:
								$args = array(
									//'redirect' => admin_url(), 
									'form_id' => 'loginform-custom',
									'label_username' => __( 'Username ' ),
									'label_password' => __( 'Password ' ),
									'label_remember' => __( 'Remember Me ' ),
									'label_log_in' => __( 'Log In ' ),
									'remember' => true
								);	
								wp_login_form( $args );
								echo "<br><div><a href='index.php?page_id=109'>Not a membet? Register Here</a></div>";
								//echo "<br><div><a href='wp-login.php?action=register'>Not a membet? Register Here</a></div>";
						
					         	$site_url = network_site_url( '/' );
														   
							     echo "<br/>";
							   
							     echo "<a href='".$site_url."lostpassword'>Lost Password</a>";
								   echo "<br/>";
								 echo "<a href='".wp_lostpassword_url()."'>Lost Password</a>";
								  
							} else { // If logged in:
							
							   echo "hi";
								//wp_loginout( home_url() ); // Display "Log Out" link.
								//echo " | ";
								//wp_register('', ''); // Display "Site Admin" link.
							}
						}
						else
						{
								echo '<div>';
								echo "<span style='color:red'>HELLO</span>\n";
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
 
                    
			</div>  <!-- center_div -->
            
 
	
          <?php get_footer(); ?>
		
		    	
		<!--</form> -->
	
	
	</body>
</html>







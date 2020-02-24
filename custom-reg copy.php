

<!-- jgfkhjgkfdgjkfdhgfjdkhgjkfdhgjkfdhgjkfdhgjkfdhgfjkdghfdkghfdjkhgfkdghjkfdghjdkfgfd-->








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

   
  <link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css" rel="stylesheet" type="text/css">
<body>

 
<?php  
global $wpdb, $user_ID;  
//Check whether the user is already logged in  
 if(!$_POST)
    { 
	    $Fname="";
		$Lname = "";
		$Phone="";		
		$Email="";
		$RetypeEmail = "";						
		$Country = "";		
		$Phone = "";		
		$Password = "";		
		$RPassword = "";
		
	    $FnameError="";
		$LnameError = "";	
		$EmailError = "";		
		$RetypeEmailError ="";
		$PasswordError = ""; 			
		$RPasswordError ="";
		$success=0;
		$ErrorCnt=0;
		
	}	
//if (!$user_ID) {  

  
  if($_POST)
   {
        //We shall SQL escape all inputs  
		get_header(); 
		$ErrorCn=0; 	
			$Fname="";
			$Lname = "";
			$Phone="";		
			$Email="";
			$RetypeEmail = "";						
			$Country = "";		
			$Phone = "";		
			$Password = "";		
			$RPassword = "";	
			
			$FnameError="";
			$LnameError = "";		
			$EmailError = "";		
			$RetypeEmailError =""; 
			$PasswordError = "";			
			$RPasswordError ="";
			$ErrorCnt=0;
			
			$success=0;
		
		
		
				$Fname = str_replace("'"," ",trim($_POST["Fname"]));
							
			$Email = str_replace("'"," ",trim($_POST["Email"]));
			
				if(!strlen($Fname) > 0)
	        {
		       $FnameError =1;
			   $ErrorCnt=$ErrorCn+1;
			   //echo "err";
		    }
			
	
			
			if(!strlen($Email) > 0)
	        {
		       $EmailError =1;
			   $ErrorCnt=$ErrorCn+1;			   
		    }
			
      

		
        if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $Email)) {  
            $EmailError =1;
			   $ErrorCnt=$ErrorCn+1;	
        }  
  
  	
			if ($ErrorCnt == 0)
			{
            $random_password = wp_generate_password( 12, false );  
            $status = wp_create_user( $username, $random_password, $email );  
				if ( is_wp_error($status) ) 
				{ 
					//echo "Username already exists. Please try another one.";  
					get_header();  
					$success = 2;
				}
            else {  
                $from = get_option('admin_email');  
                        $headers = 'From: '.$from . "\r\n";  
                        $subject = "Registration successful";  
                        $msg = "Registration successful.\nYour login details\nUsername: $username\nPassword: $random_password";  
                        wp_mail( $email, $subject, $msg, $headers );  
                //echo "Please check your email for login details."; 
				get_header();   
				$success = 1;
                } 
			}
  
       // exit();  
  
    } else {  
        get_header();  
?>  
<!-- <script src="http://code.jquery.com/jquery-1.4.4.js"></script> -->  
<!-- Remove the comments if you are not using jQuery already in your theme -->  
 <form action="" method="POST"> 
<div id="center_div"> 
    <div class ="myclass"> 
    <?php if(get_option('users_can_register')) {   
    //Check whether user registration is enabled by the administrator ?>  
      
    <h1><?php the_title(); ?></h1>  
    <div id="result"></div> <!-- To hold validation results -->  	
    
    <label>Username</label>  
    <input name="Fname" value="<?PHP echo $Fname; ?>" type="text" class="TextBox" id="Fname" title="Enter your first name" maxlength="25"  />	
                                                        <?PHP
													if($FnameError == 1)
													{
														echo '  <span style="font-size:10px; color:#FF0000;"> <strong><i>Enter first name</i></strong></span>';
													}
													?>
                                                    
    <label>Email address</label>  
    
    <input name="Email" value="<?PHP echo $Email; ?>" type="text" class="TextBox" id="Email"  title="Enter a valid email address" maxlength="75"/>
    
    
                                                    <?PHP
													if($EmailError == 1)
													{
														echo '  <span style="font-size:10px; color:#FF0000;"> <strong><i>Enter Correct Email Address</i></strong></span>';
													}
													?>
    
                  <input name="submit" type="submit" id="submit" title="Please click here to submit this form" class="submitButton" value="Register" />
                             <?PHP
							  if($success == 1)
							  {
              			         echo '<br/></br> <span style="font-size:10px; color:#FF0000;"> <strong><i>Registered Successfully.</i></strong></span>';
							   }
							  else if($success == 2)
							  {
              			         echo '<br/></br> <span style="font-size:10px; color:#FF0000;"> <strong><i>This Email address already registered.</i></strong></span>';
							   }
							   
							  ?>
  
      
    <script type="text/javascript">  
    //<![CDATA[  
     /* 
    $("#submitbtn").click(function() {  
      
    $('#result').html('<img src="<?php bloginfo('template_url') ?>/images/loader.gif" class="loader" />').fadeIn();  
    var input_data = $('#wp_signup_form').serialize();  
    $.ajax({  
    type: "POST",  
    url:  "",  
    data: input_data,  
    success: function(msg){  
    $('.loader').remove();  
    $('<div>').html(msg).appendTo('div#result').hide().fadeIn('slow');  
    }  
    });  
    return false;  
	*/
      
    });  
    //]]>  
    </script>  
      
    <?php } else echo "Registration is currently disabled. Please try again later."; ?>  
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
 } //end of if($_post)  
  
//}  
//else {  
    /*echo '<div>';
     echo 'Username: ' . $current_user->user_login . "\n";
      echo 'User email: ' . $current_user->user_email . "\n";
      echo 'User first name: ' . $current_user->user_firstname . "\n";
      echo 'User last name: ' . $current_user->user_lastname . "\n";
      echo 'User display name: ' . $current_user->display_name . "\n";
      echo 'User ID: ' . $current_user->ID . "\n";
	   echo '</div>';*/
//}  
?> 
  </form>  
</body>
</html> 



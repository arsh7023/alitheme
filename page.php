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
       
		<form name="myform" id="myform">
		

              
            <div class ="wide">	</div>
	
		    <div id="center_div"> 
            
        
           
		 
	                          
       
        <div class ="myclass">		
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        
        <p><?php the_content(__('(more...)')); ?></p>
        <hr> <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        
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
		
		    	
		</form>
	
	
	</body>
</html>

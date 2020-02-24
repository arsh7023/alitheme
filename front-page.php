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
<?php include("front-header.php"); ?>
</head>


	<body>
		<form name="myform" id="myform">
		

            
            
	
		    <div id="center_div"> 
            
        
               <?php //get_header(); ?>
		 
					<div id="tabs" class ="myclass">
                    <div>
							<ul>
								<li><a href="#tabs-1">Nunc tincidunt</a></li>
								<li><a href="#tabs-2">Proin dolor</a></li>
								<li><a href="#tabs-3">Aenean lacinia</a></li>
							</ul>
                            
							<div id="tabs-1">
                            
       
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <p><?php the_content(__('(more...)')); ?></p>
        <hr> <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        
                            
                                        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                                    </div>
                                    <div id="tabs-2">
                                        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                                    </div>
                                    <div id="tabs-3">
                                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                                        
                                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                                        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                                        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
            
                                
							</div>
                            
                          </div>
                            
                            <div >

                            <!-- <div id="accordion" style="height:400px"> -->
                                                            
                                       <div id="accordion"  style="border:1px;">
                            
                                        <h2>Math Tutorial (Preparation to year 10):</h2>
                                        <div class="content1">
                                            <strong> We provide high quality learning support and exam
                                                preparation service to students up to year 10. We will conduct an
                                                assessment interview with you and your kids to define their
                                                requirement and will design an individual study plan suitable to
                                                student needs.<br /> Delivery Method: One-o-one tuition sessions
                                                and small groups up to 5 student Location: At the education centre
                                                or your convenient place
                                            </strong>
                                        </div>
                                        <h2>Oil Painting (Elementary to Advance):</h2>
                                        <div class="content">
                                            <strong> This training is designed for two distinguished groups:
                                                Children and Adults. It starts from basic and elementary painting
                                                techniques and continues to advanced level.<br> Delivery Method:
                                                One-o-one tuition sessions and small groups up to 3 student
                                                Location: At the education centre or your convenient place
                                            </strong>
                                        </div>
                            
                                        <h2>Facebook for Adults:</h2>
                                        <div class="content">
                                            <strong> This session is tailored specifically for adults who are
                                                willing to get exposure to social media. Our aim is to enable them
                                                to get the most benefit from new communication tools in their daily
                                                work and life.<br /> Delivery Method: One-o-one tuition sessions
                                                and small groups up to 5 student Location: At the education centre
                                                or your convenient place
                                            </strong>
                                        </div>
                            
                                        <h2>Study Area:</h2>
                                        <div class="content">
                                            <strong> We offer perfect area for study to our clients, adult and
                                                school kids, who need a calm and suitable place to concentrate on
                                                their study and individual learning. Our tutors are always around
                                                to answer questions and help trainees during their independent
                                                study hour. 
                                            </strong>
                                        </div>
                            
                                    </div><!-- accordion --> 	
                            
                            </div>
                            
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

<?php
function register_my_menus() {
  register_nav_menus(
    //array( 'header-menu' => __( 'Header Menu' ) )
	array('main-menu' => __( 'Main Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );
function arphabet_widgets_init() {

	register_sidebar( array(	
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'alitheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'alitheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//for login-logout
function new_nav_menu_items( $items, $args ) {
	
	
	ob_start();
		wp_loginout('index.php');
		$loginoutlink = ob_get_contents();
		ob_end_clean();

		$items .= '<li>'. $loginoutlink .'</li>';

	return $items;
}
//add_filter( 'wp_nav_menu_items', 'new_nav_menu_items', 10, 2 );



function cm_redirect_users_by_role() {
 
    $current_user   = wp_get_current_user();
    $role_name      = $current_user->roles[0];
 
    if ( 'subscriber' === $role_name ) {
        wp_redirect( 'http://yoursite.com/dashboard' );
    } // if
 
} // cm_redirect_users_by_role
add_action( 'admin_init', 'cm_redirect_users_by_role' );

	
	/*Login Error Handle*/

add_action( 'wp_login_failed', 'aa_login_failed' ); // hook failed login

function aa_login_failed( $user ) {
    // check what page the login attempt is coming from
    $referrer = $_SERVER['HTTP_REFERER'];

    // check that were not on the default login page
    if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') && $user!=null ) {
        // make sure we don't already have a failed login attempt
        if ( !strstr($referrer, '?login=failed' )) {
            // Redirect to the login page and append a querystring of login failed
            wp_redirect( $referrer . '?login=failed');
			echo "failed2";
        } else {
            wp_redirect( $referrer );
        }

        exit;
    }
}


add_action( 'authenticate', 'pu_blank_login');

function pu_blank_login( $user ){
    // check what page the login attempt is coming from
    $referrer = $_SERVER['HTTP_REFERER'];

    $error = false;

    if($_POST['log'] == '' || $_POST['pwd'] == '')
    {
        $error = true;
    }

    // check that were not on the default login page
    if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') && $error ) {

        // make sure we don't already have a failed login attempt
        if ( !strstr($referrer, '?login=failed') ) {
            // Redirect to the login page and append a querystring of login failed
            wp_redirect( $referrer . '?login=failed' );
			echo "failed";
        } else {
            wp_redirect( $referrer );
        }

    exit;

    }
}


/*
 
add_action('init', function(){

  // not the login request?
  if(!isset($_POST['action']) || $_POST['action'] !== 'my_login_action')
    return;

  // see the codex for wp_signon()
  $result = wp_signon();

  if(is_wp_error($result))
    wp_die('Login failed. Wrong password or user name?');

  // redirect back to the requested page if login was successful    
  header('Location: ' . $_SERVER['REQUEST_URI']);
  exit;
});
*/
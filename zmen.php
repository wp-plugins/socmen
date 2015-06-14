<?php
/*
Plugin Name: SocMen
Plugin URI: http://www.zoranmaric.com/plg/socmen.zip
Description: Add social icons in menu bar with SocMen plugin...
Version: 1.0.0
Author: Zoran Maric
Author URI: http://www.zoranmaric.com
License: GPL2 or later
*/?>
<?php
function zmen_stil() 
{
	wp_enqueue_style( 'zmen', plugins_url( '/css/style.css', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'zmen_stil');
?>
<?php
function zmen_admin() {
  
  /* Register Style */
  wp_enqueue_style( 'zmenadmin', plugins_url( '/css/zmenadmin.css', __FILE__ ) );
 
  /* Enqueue Style */
  wp_enqueue_style( 'zmenadmin' );
  
}
add_action( 'admin_print_styles', 'zmen_admin', 20 );
?>
<?php
// Plugin settings menu
add_action('admin_menu', 'zmsocmen_create_menu');
function zmsocmen_create_menu() {
	//create new top-level menu
	add_menu_page('ZM Socmen Plugin Settings', 'SOCMEN', 'administrator', __FILE__, 'zmsocmen_settings_page',plugins_url('/images/icsm.png', __FILE__));
	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}
function register_mysettings() {
	//register settings
	register_setting( 'zmsocmen-settings-group', 'zm_fb_option' );
	register_setting( 'zmsocmen-settings-group', 'zm_tw_option' );
	register_setting( 'zmsocmen-settings-group', 'zm_in_option' );
	register_setting( 'zmsocmen-settings-group', 'zm_pt_option' );
	register_setting( 'zmsocmen-settings-group', 'zm_gp_option' );
	register_setting( 'zmsocmen-settings-group', 'zm_ld_option' );
	register_setting( 'zmsocmen-settings-group', 'zmiconw_option' );
	register_setting( 'zmsocmen-settings-group', 'zmiconmt_option' );
	register_setting( 'zmsocmen-settings-group', 'zmiconmb_option' );
	register_setting( 'zmsocmen-settings-group', 'zmiconml_option' );
	register_setting( 'zmsocmen-settings-group', 'zmiconmr_option' );
}
function zmsocmen_settings_page() {
?>
<div class="wrap1">
<h2>SOCMEN</h2>
<div class="okvir">
<div class="naslov">URL settings</div>
<p>Add URL without http:// or https:// . You don't have to fill all the fields.</p>
<form method="post" action="options.php">
    <?php settings_fields( 'zmsocmen-settings-group' ); ?>
    <?php do_settings_sections( 'zmsocmen-settings-group' ); ?>
    <table class="forma1">
        <tr valign="top">
        <th scope="row">Facebook:</th>
        <td><input type="text" name="zm_fb_option" value="<?php echo esc_attr( get_option('zm_fb_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Twitter:</th>
        <td><input type="text" name="zm_tw_option" value="<?php echo esc_attr( get_option('zm_tw_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Instagram:</th>
        <td><input type="text" name="zm_in_option" value="<?php echo esc_attr( get_option('zm_in_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Pinterest:</th>
        <td><input type="text" name="zm_pt_option" value="<?php echo esc_attr( get_option('zm_pt_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Google +:</th>
        <td><input type="text" name="zm_gp_option" value="<?php echo esc_attr( get_option('zm_gp_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">LinkedIn:</th>
        <td><input type="text" name="zm_ld_option" value="<?php echo esc_attr( get_option('zm_ld_option') ); ?>" /></td>
        </tr>
    </table>
	</div>
	<div class="okvir">
<div class="naslov">Icon settings</div>
	<p>Size and margins of icons. Width and Height are the same and only one value is required. Max recommended value is 48. Default value is 24. </p>
	    <table class="form-table1">
        <tr valign="top">
        <th scope="row">Width & Height:</th>
        <td><input type="text" name="zmiconw_option" value="<?php echo esc_attr( get_option('zmiconw_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Margin Top:</th>
        <td><input type="text" name="zmiconmt_option" value="<?php echo esc_attr( get_option('zmiconmt_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Margin Bottom:</th>
        <td><input type="text" name="zmiconmb_option" value="<?php echo esc_attr( get_option('zmiconmb_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Margin Left:</th>
        <td><input type="text" name="zmiconml_option" value="<?php echo esc_attr( get_option('zmiconml_option') ); ?>" /></td>
        </tr>
		<tr valign="top">
        <th scope="row">Margin Right:</th>
        <td><input type="text" name="zmiconmr_option" value="<?php echo esc_attr( get_option('zmiconmr_option') ); ?>" /></td>
        </tr>
    </table>
   <center> <?php submit_button(); ?></center>
</form>
</div>
</div>
<div class="wrap2">
<div class="okvir">
<div class="naslov">Step by step instructions</div>
<ul>
<li>1) Go to Apperance - Menus - Custom links.</li>
<li>2) Under URL section put #. Under Link Text section put social. Press Add to Menu.</li>
<li>3) In Menu Structure section click on Social custom link.</li>
<li>4) Under Title Attribute put zmbtr.</li>
<li>5) Under Theme locations select your menu location.</li>
<li>6) Click on Save menu.</li>
</ul>
</div>
<div class="okvir">
<div class="naslov">Video instructions</div>
<iframe width="360" height="270" src="https://www.youtube.com/embed/fY4cMPnLwhA" frameborder="0" allowfullscreen></iframe>
</div>
<div class="okvir">
<div class="naslov">Thanks...</div>
... for using my plugin. Really hope that you will find it useful... 
<p style="text-align:right"><a target="_blank" href="http://zoranmaric.com">Zoran Maric</a></p>
</div>
</div>
<?php 
} 
?>
<?php
//Enqueue scripts
if (!is_admin()) add_action("wp_enqueue_scripts", "zmm_jquery_enqueue", 11);
function zmm_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js');
   wp_enqueue_script('jquery');
}
?>
<?php 
//Plugin options
function zmm() {
 $zmfb = get_option('zm_fb_option');
 $zmtw = get_option('zm_tw_option');
 $zmin = get_option('zm_in_option');	
 $zmpt = get_option('zm_pt_option');	
 $zmgp = get_option('zm_gp_option');	
 $zmld = get_option('zm_ld_option');	
 $zmwh = get_option('zmiconw_option');
 $zmmt = get_option('zmiconmt_option');	
 $zmmb = get_option('zmiconmb_option');	
 $zmml = get_option('zmiconml_option');	
 $zmmr = get_option('zmiconmr_option');
if(empty($zmwh)){$zmwh= 24;}
 $zmfbi = '<img src="'. plugins_url('/images/fb.png', __FILE__).'" alt="Facebook" height="'.$zmwh.'" width="'.$zmwh.'" style="margin-right:'.$zmmr.'px; margin-left:'.$zmml.'px; margin-bottom:'.$zmmb.'px; margin-top:'.$zmmt.'px;">';
 $zmtwi = '<img src="'. plugins_url('/images/tw.png', __FILE__).'" alt="Twitter" height="'.$zmwh.'" width="'.$zmwh.'" style="margin-right:'.$zmmr.'px; margin-left:'.$zmml.'px; margin-bottom:'.$zmmb.'px; margin-top:'.$zmmt.'px;">';
 $zmini = '<img src="'. plugins_url('/images/in.png', __FILE__).'" alt="Instagram" height="'.$zmwh.'" width="'.$zmwh.'" style="margin-right:'.$zmmr.'px; margin-left:'.$zmml.'px; margin-bottom:'.$zmmb.'px; margin-top:'.$zmmt.'px;">';
 $zmpti = '<img src="'. plugins_url('/images/pt.png', __FILE__).'" alt="Pinterest" height="'.$zmwh.'" width="'.$zmwh.'" style="margin-right:'.$zmmr.'px; margin-left:'.$zmml.'px; margin-bottom:'.$zmmb.'px; margin-top:'.$zmmt.'px;">';
 $zmgpi = '<img src="'. plugins_url('/images/gp.png', __FILE__).'" alt="Google Plus" height="'.$zmwh.'" width="'.$zmwh.'" style="margin-right:'.$zmmr.'px; margin-left:'.$zmml.'px; margin-bottom:'.$zmmb.'px; margin-top:'.$zmmt.'px;">';
 $zmldi = '<img src="'. plugins_url('/images/ld.png', __FILE__).'" alt="LinkedIn" height="'.$zmwh.'" width="'.$zmwh.'" style="margin-right:'.$zmmr.'px; margin-left:'.$zmml.'px; margin-bottom:'.$zmmb.'px; margin-top:'.$zmmt.'px;">';
if($zmfb) {echo '<div class="ikonica">'.'<a href="https://'.$zmfb.'">'.$zmfbi.'</a></div>'; }
if($zmtw) {echo  '<div class="ikonica">'.'<a href="https://'.$zmtw.'">'.$zmtwi.'</a></div>';}
if($zmin) {echo  '<div class="ikonica">'.'<a href="https://'.$zmin.'">'.$zmini.'</a></div>';}
if($zmpt) {echo  '<div class="ikonica">'.'<a href="https://'.$zmpt.'">'.$zmpti.'</a></div>';}
if($zmgp) {echo  '<div class="ikonica">'.'<a href="https://'.$zmgp.'">'.$zmgpi.'</a></div>';}
if($zmld) {echo  '<div class="ikonica">'.'<a href="https://'.$zmld.'">'.$zmldi.'</a></div>';}
}
?>
<?php function zmm_script() {?>
<script type="text/javascript">
$(document).ready(function() {
$("[title='zmbtr']").replaceWith( '<div id="zmbtr"><?php zmm(); ?></div>');
  });
</script>
<?php 
}
?>
<?php add_action( 'wp_footer', 'zmm_script' );?>
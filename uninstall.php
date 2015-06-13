<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
exit;
// Check if options exist and delete it
if ( get_option( 'zm_fb_option' ) != false ) {
delete_option( 'zm_fb_option' );
}
if ( get_option( 'zm_tw_option' ) != false ) {
delete_option( 'zm_tw_option' );
}
if ( get_option( 'zm_in_option' ) != false ) {
delete_option( 'zm_in_option' );
}
if ( get_option( 'zm_pt_option' ) != false ) {
delete_option( 'zm_pt_option' );
}
if ( get_option( 'zm_gp_option' ) != false ) {
delete_option( 'zm_gp_option' );
}
if ( get_option( 'zm_ld_option' ) != false ) {
delete_option( 'zm_ld_option' );
}
if ( get_option( 'zmiconw_option' ) != false ) {
delete_option( 'zmiconw_option' );
}
if ( get_option( 'zmiconmt_option' ) != false ) {
delete_option( 'zmiconmt_option' );
}
if ( get_option( 'zmiconmb_option' ) != false ) {
delete_option( 'zmiconmb_option' );
}
if ( get_option( 'zmiconml_option' ) != false ) {
delete_option( 'zmiconml_option' );
}
if ( get_option( 'zmiconmr_option' ) != false ) {
delete_option( 'zmiconmr_option' );
}
?>
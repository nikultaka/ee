<?php
class WCP_BackEnd_ContactInformation_Controller {


	function save_contact_details() {
            
                $result_array = array();
                $result_array['status'] = 0;
		if(!empty($_POST)){
                    
                    global $wpdb;
                    
                    //This is to check 
                    $wcp_contact_number = get_site_option( 'wcp_contact_number' );
                    if(isset($wcp_contact_number) && $wcp_contact_number!=''){
                        update_option( 'wcp_contact_number', $_POST['wcp_contact_number']);
                    } else { 
                        add_option( 'wcp_contact_number', $_POST['wcp_contact_number'], '', 'yes' ); 
                    }
                    
                    //This is to check 
                    $wcp_office_number = get_site_option( 'wcp_office_number' );
                    if(isset($wcp_office_number) && $wcp_office_number!=''){
                        update_option( 'wcp_office_number', $_POST['wcp_office_number']);
                    } else { 
                        add_option( 'wcp_office_number', $_POST['wcp_office_number'], '', 'yes' ); 
                    }
                    
                    //This is to check 
                    $wcp_email = get_site_option( 'wcp_email' );
                    if(isset($wcp_email) && $wcp_email!=''){
                        update_option( 'wcp_email', $_POST['wcp_email']);
                    } else { 
                        add_option( 'wcp_email', $_POST['wcp_email'], '', 'yes' ); 
                    }
                    //this is for product price
                     $wcp_fb_link = get_site_option( 'wcp_fb_link' );
                    if(isset($wcp_fb_link) && $wcp_fb_link!=''){
                        update_option( 'wcp_fb_link', $_POST['wcp_fb_link']);
                    } else { 
                        add_option( 'wcp_fb_link', $_POST['wcp_fb_link'], '', 'yes' ); 
                    }
                    $wcp_tw_link = get_site_option( 'wcp_tw_link' );
                    if(isset($wcp_tw_link) && $wcp_tw_link!=''){
                        update_option( 'wcp_tw_link', $_POST['wcp_tw_link']);
                    } else { 
                        add_option( 'wcp_tw_link', $_POST['wcp_tw_link'], '', 'yes' ); 
                    }
                    $wcp_in_link = get_site_option( 'wcp_in_link' );
                    if(isset($wcp_in_link) && $wcp_in_link!=''){
                        update_option( 'wcp_in_link', $_POST['wcp_in_link']);
                    } else { 
                        add_option( 'wcp_in_link', $_POST['wcp_in_link'], '', 'yes' ); 
                    }
                    $wcp_lin_link = get_site_option( 'wcp_lin_link' );
                    if(isset($wcp_lin_link) && $wcp_lin_link!=''){
                        update_option( 'wcp_lin_link', $_POST['wcp_lin_link']);
                    } else { 
                        add_option( 'wcp_lin_link', $_POST['wcp_lin_link'], '', 'yes' ); 
                    }
                    $result_array['status'] = 1;
                    $result_array['msg'] = "Paypal Configuration updated successfully.";
                }
                echo json_encode($result_array);exit;
	}

	public function index() {
		ob_start();
		include(dirname(__FILE__)."/html/contact_information.php");
		$s = ob_get_contents();
		ob_end_clean();
		print $s;
		
	}
        
        function add_menu_pages() {
		add_menu_page( 'Contact Information', 'Contact Information', 'manage_options', 'contact-information', Array("WCP_BackEnd_ContactInformation_Controller","index"));
		/* add_submenu_page("stylus-user-profile", "User Size Detail", "User Size Detail", 'manage_options', "stylus-user-size-detail", Array("WCP_BackEnd_Profiles_Controller", "display_user_profile_detail"));
		add_submenu_page('stylus-user-profile', 'Payment Orders', 'Payment Orders', 0, 'stylus-payment-orders',Array("WCP_BackEnd_Profiles_Controller","display_user_payment_orders")); */
	}
}
		
	add_action('admin_menu', array("WCP_BackEnd_ContactInformation_Controller", 'add_menu_pages'));
	
	add_action( 'wp_ajax_WCP_BackEnd_ContactInformation_Controller::save_contact_details', Array('WCP_BackEnd_ContactInformation_Controller','save_contact_details'));
	add_action( 'wp_ajax_nopriv_WCP_BackEnd_ContactInformation_Controller::save_contact_details', array('WCP_BackEnd_ContactInformation_Controller', 'save_contact_details'));
?>

<?php 
	add_action( 'wp_ajax_TotalSoftPortfolio_Del', 'TotalSoftPortfolio_Del_Callback' );
	add_action( 'wp_ajax_TotalSoftPortfolio_Del', 'TotalSoftPortfolio_Del_Callback' );

	function TotalSoftPortfolio_Del_Callback()
	{
		$Portfolio_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;
		$table_name4 = $wpdb->prefix . "totalsoft_portfolio_manager";
		$table_name5 = $wpdb->prefix . "totalsoft_portfolio_albums";
		$table_name6 = $wpdb->prefix . "totalsoft_portfolio_images";

		$wpdb->query($wpdb->prepare("DELETE FROM $table_name4 WHERE id=%d", $Portfolio_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name5 WHERE Portfolio_ID=%s", $Portfolio_ID));
		$wpdb->query($wpdb->prepare("DELETE FROM $table_name6 WHERE Portfolio_ID=%s", $Portfolio_ID));
		die();
	}

	add_action( 'wp_ajax_TotalSoftPortfolio_Edit', 'TotalSoftPortfolio_Edit_Callback' );
	add_action( 'wp_ajax_TotalSoftPortfolio_Edit', 'TotalSoftPortfolio_Edit_Callback' );

	function TotalSoftPortfolio_Edit_Callback()
	{
		$Portfolio_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name4 = $wpdb->prefix . "totalsoft_portfolio_manager";
		$table_name5 = $wpdb->prefix . "totalsoft_portfolio_albums";
		$table_name6 = $wpdb->prefix . "totalsoft_portfolio_images";

		$Total_Soft_PortfolioManager=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id=%s", $Portfolio_ID));

		print_r($Total_Soft_PortfolioManager);
		die();
	}

	add_action( 'wp_ajax_TotalSoftPortfolio_Edit_Album', 'TotalSoftPortfolio_Edit_Album_Callback' );
	add_action( 'wp_ajax_TotalSoftPortfolio_Edit_Album', 'TotalSoftPortfolio_Edit_Album_Callback' );

	function TotalSoftPortfolio_Edit_Album_Callback()
	{
		$Portfolio_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name4 = $wpdb->prefix . "totalsoft_portfolio_manager";
		$table_name5 = $wpdb->prefix . "totalsoft_portfolio_albums";
		$table_name6 = $wpdb->prefix . "totalsoft_portfolio_images";

		$Total_Soft_PortfolioAlbums=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE Portfolio_ID=%s", $Portfolio_ID));

		print_r($Total_Soft_PortfolioAlbums);
		die();
	}

	add_action( 'wp_ajax_TotalSoftPortfolio_Edit_Images', 'TotalSoftPortfolio_Edit_Images_Callback' );
	add_action( 'wp_ajax_TotalSoftPortfolio_Edit_Images', 'TotalSoftPortfolio_Edit_Images_Callback' );

	function TotalSoftPortfolio_Edit_Images_Callback()
	{
		$Portfolio_ID = sanitize_text_field($_POST['foobar']);
		global $wpdb;

		$table_name4 = $wpdb->prefix . "totalsoft_portfolio_manager";
		$table_name5 = $wpdb->prefix . "totalsoft_portfolio_albums";
		$table_name6 = $wpdb->prefix . "totalsoft_portfolio_images";

		$Total_Soft_PortfolioImages=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE Portfolio_ID=%s", $Portfolio_ID));
		print_r($Total_Soft_PortfolioImages);
		die();
	}
?>
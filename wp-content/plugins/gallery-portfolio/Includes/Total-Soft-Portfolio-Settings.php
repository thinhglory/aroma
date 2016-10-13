<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}

	global $wpdb;
	require_once(dirname(__FILE__) . '/Total-Soft-Portfolio-Install.php');
	$table_name2 = $wpdb->prefix . "totalsoft_portfolio_dbt";
	$TotalSoftPortfolioOptions=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id>%d", 0));
?>
<form method="POST">
	<div class="Total_Soft_Portfolio_AMD">
		<a href="http://total-soft.pe.hu/" target="_blank" title="Click to Buy">
			<div class="Full_Version"><i class="totalsoft totalsoft-cart-arrow-down"></i>Get The Full Version</div>
		</a>
		<div class="Full_Version_Span">
			This is the free version of the plugin.
		</div>

		<div class="Total_Soft_Portfolio_AMD1"></div>
		
		<div class="Total_Soft_Portfolio_AMD3">
			<i class="Total_Soft_Help totalsoft totalsoft-question-circle-o" title="Click for Canceling"></i>
			<input type="button" value="Cancel" class="Total_Soft_Portfolio_AMD2_But" onclick='TotalSoft_Reload()'>
		</div>
	</div>

	<table class="Total_Soft_AMMTable">
		<tr class="Total_Soft_AMMTableFR">
			<td>No</td>
			<td>Setting Title</td>
			<td>Portfolio Type</td>
			<td>Actions</td>
		</tr>
	</table>

	<table class="Total_Soft_AMOTable">
	 	<?php for($i=0;$i<count($TotalSoftPortfolioOptions);$i++){ ?> 
	 		<tr>
				<td><?php echo $i+1;?></td>
				<td><?php echo $TotalSoftPortfolioOptions[$i]->TotalSoftPortfolio_SetName;?></td>
				<td><?php echo $TotalSoftPortfolioOptions[$i]->TotalSoftPortfolio_SetType;?></td>
				<td onclick="TotalSoftPortfolio_Edit_Option(<?php echo $i+1;?>)"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td>
				<td><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td>
			</tr>
	 	<?php }?>
	</table>

	<img src="<?php echo plugins_url('../Images/Portfolio-1.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_1">
	<img src="<?php echo plugins_url('../Images/Portfolio-2.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_2">
	<img src="<?php echo plugins_url('../Images/Portfolio-3.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_3">
	<img src="<?php echo plugins_url('../Images/Portfolio-4.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_4">
	<img src="<?php echo plugins_url('../Images/Portfolio-5.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_5">
	<img src="<?php echo plugins_url('../Images/Portfolio-6.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_6">
	<img src="<?php echo plugins_url('../Images/Portfolio-7.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_7">
	<img src="<?php echo plugins_url('../Images/Portfolio-8.png',__FILE__);?>" class="TotalSoftPortfolioFree" id="TotalSoftPortfolioFree_8">
</form>
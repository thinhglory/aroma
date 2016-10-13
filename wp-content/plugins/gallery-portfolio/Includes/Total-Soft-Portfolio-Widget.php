<?php
	class  Total_Soft_Portfolio extends WP_Widget
	{
		function __construct()
 	  	{
 			$params=array('name'=>'Total Soft Portfolio','description'=>'This is the widget of Total Soft Portfolio plugin');
			parent::__construct('Total_Soft_Portfolio','',$params);
 	  	}
 	  	function form($instance)
 		{
 			$defaults = array('Total_Soft_Portfolio'=>'');
		    $instance = wp_parse_args((array)$instance, $defaults);

		   	$Portfolio = $instance['Total_Soft_Portfolio'];
		   	?>
		   	<div>			  
			   	<p>
			   		Portfolio Title:
			   		<select name="<?php echo $this->get_field_name('Total_Soft_Portfolio'); ?>" class="widefat">
				   		<?php
				   			global $wpdb;

							$table_name1 = $wpdb->prefix . "totalsoft_Portfolio";
							$Total_Soft_Portfolio=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id > %d", 0));
				   			
				   			foreach ($Total_Soft_Portfolio as $Total_Soft_Portfolio1)
				   			{
				   				?> <option value="<?php echo $Total_Soft_Portfolio1->id; ?>"> <?php echo $Total_Soft_Portfolio1->TotalSoftPortfolio_Name; ?> </option> <?php 
				   			}
				   		?>
			   		</select>
			   	</p>
		   	</div>
		   	<?php
 		}
 		function widget($args,$instance)
 		{
 			extract($args);
 		 	$Total_Soft_Portfolio = empty($instance['Total_Soft_Portfolio']) ? '' : $instance['Total_Soft_Portfolio'];
 		 	global $wpdb;

			$table_name1 = $wpdb->prefix . "totalsoft_portfolio_settings";
			$table_name2 = $wpdb->prefix . "totalsoft_portfolio_dbt";
			$table_name4 = $wpdb->prefix . "totalsoft_portfolio_manager";
			$table_name5 = $wpdb->prefix . "totalsoft_portfolio_albums";
			$table_name6 = $wpdb->prefix . "totalsoft_portfolio_images";
			$table_name7 = $wpdb->prefix . "totalsoft_portfolio_Elgrid";
			$table_name8 = $wpdb->prefix . "totalsoft_portfolio_Filgrid";
			$table_name9 = $wpdb->prefix . "totalsoft_portfolio_CPopup";

			$TotalSoftPortfolioManager=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id=%d", $Total_Soft_Portfolio));
			$TotalSoftPortfolioOpt=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s", $TotalSoftPortfolioManager[0]->TotalSoftPortfolio_Option));
			if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Total Soft Portfolio')
			{
				$TotalSoftPortfolioOption=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE TotalSoftPortfolio_SetID=%s", $TotalSoftPortfolioOpt[0]->id));
			}
			else if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Elastic Grid')
	 		{
				$TotalSoftPortfolioOption=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE TotalSoftPortfolio_SetID=%s", $TotalSoftPortfolioOpt[0]->id));
	 		}
	 		else if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Filterable Grid')
	 		{
				$TotalSoftPortfolioOption=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE TotalSoftPortfolio_SetID=%s", $TotalSoftPortfolioOpt[0]->id));
	 		}
	 		else if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Gallery Portfolio/Content Popup')
	 		{
				$TotalSoftPortfolioOption=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE TotalSoftPortfolio_SetID=%s", $TotalSoftPortfolioOpt[0]->id));
	 		}
			$TotalSoftPortfolioAlbums=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE Portfolio_ID=%d", $Total_Soft_Portfolio));
			$TotalSoftPortfolioImages=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE Portfolio_ID=%d", $Total_Soft_Portfolio));
			
			if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='1'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-angle-double-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-angle-double-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='2'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-angle-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-angle-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='3'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-arrow-circle-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-arrow-circle-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='4'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-arrow-circle-o-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-arrow-circle-o-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='5'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-arrow-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-arrow-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='6'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-caret-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-caret-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='7'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-caret-square-o-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-caret-square-o-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='8'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-chevron-circle-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-chevron-circle-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='9'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-chevron-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-chevron-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='10'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-hand-o-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-hand-o-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Type=='11'){
				$TotalSoft_FG_Slider_Icon_Left='totalsoft totalsoft-long-arrow-left';
				$TotalSoft_FG_Slider_Icon_Right='totalsoft totalsoft-long-arrow-right';
			}
			
			if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Del_Icon_Type=='1'){
				$TotalSoft_FG_Slider_Del_Icon_Type='totalsoft totalsoft-times';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Del_Icon_Type=='2'){
				$TotalSoft_FG_Slider_Del_Icon_Type='totalsoft totalsoft-times-circle-o';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Del_Icon_Type=='3'){
				$TotalSoft_FG_Slider_Del_Icon_Type='totalsoft totalsoft-times-circle';
			}
			
			if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='1'){
				$Pop_Ic_Type='totalsoft totalsoft-file-image-o';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='2'){
				$Pop_Ic_Type='totalsoft totalsoft-eye';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='3'){
				$Pop_Ic_Type='totalsoft totalsoft-camera-retro';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='4'){
				$Pop_Ic_Type='totalsoft totalsoft-picture-o';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='5'){
				$Pop_Ic_Type='totalsoft totalsoft-search-plus';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='6'){
				$Pop_Ic_Type='totalsoft totalsoft-expand';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='7'){
				$Pop_Ic_Type='totalsoft totalsoft-gratipay';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Style=='8'){
				$Pop_Ic_Type='totalsoft totalsoft-search';
			}
			
			if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='1'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-angle-double-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-angle-double-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='2'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-angle-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-angle-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='3'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-arrow-circle-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-arrow-circle-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='4'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-arrow-circle-o-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-arrow-circle-o-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='5'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-arrow-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-arrow-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='6'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-caret-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-caret-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='7'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-caret-square-o-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-caret-square-o-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='8'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-chevron-circle-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-chevron-circle-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='9'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-chevron-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-chevron-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='10'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-hand-o-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-hand-o-right';
			}else if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Type=='11'){
				$TotalSoft_FG_Car_Slider_Icon_Left='totalsoft totalsoft-long-arrow-left';
				$TotalSoft_FG_Car_Slider_Icon_Right='totalsoft totalsoft-long-arrow-right';
			}

 		 	echo $before_widget;
	 		 	if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Total Soft Portfolio')
				{ ?>
	 		 		<style type="text/css">
	 		 			.portfolio_<?php echo $Total_Soft_Portfolio;?>
	 		 			{
	 		 				height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ContH;?>px;
	 		 			}
	 		 			.background_<?php echo $Total_Soft_Portfolio;?>
	 		 			{
	 		 				background:url(<?php echo plugins_url('../Images/' . $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_BgImage,__FILE__);?>) no-repeat center;
	 		 			}
	 		 			.portfolio_<?php echo $Total_Soft_Portfolio;?> .item div img 
	 		 			{
	 		 				width:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IW;?>px;
	 		 				height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IH;?>px;
	 		 				border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IBW;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IBS;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IBC;?>;
	 		 				border-radius:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IBR;?>%;
	 		 			}
	 		 			.portfolio_<?php echo $Total_Soft_Portfolio;?> .item 
	 		 			{
	 		 				height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IH;?>px;
	 		 			}
						.portfolio_<?php echo $Total_Soft_Portfolio;?> .paths a 
						{
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_NavCol;?>;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_NavRad;?>px;
						}
						.portfolio_<?php echo $Total_Soft_Portfolio;?> .paths a:hover
						{
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_NavHovCol;?>;
						}
						.portfolio_<?php echo $Total_Soft_Portfolio;?> .paths .active{
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_NavCurCol;?>;
						}
						.Total_Soft_Portfolio_Icon_<?php echo $Total_Soft_Portfolio;?>
						{
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ArrowSize;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ArrowCol;?>;
						}
						.Total_Soft_Portfolio_Icon_<?php echo $Total_Soft_Portfolio;?>:hover
						{
							opacity:0.8;
						}
	 		 		</style>
					<div class="portfolio portfolio_<?php echo $Total_Soft_Portfolio;?>">
						<input type="text" style="display:none;" class="TotalSoftPortfolio_IW" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IW;?>">
						<input type="text" style="display:none;" class="TotalSoftPortfolio_IH" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IH;?>">
						<input type="text" style="display:none;" class="TotalSoftPortfolio_NavS" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_NavS;?>">
						<input type="text" style="display:none;" class="portDivHeigt" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ContH;?>">
						<input type="text" style="display:none;" class="portItemHeigt" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IH+100;?>">
						<input type="text" style="display:none;" class="portImHeigt" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IH;?>">
						<input type="text" style="display:none;" class="portImWidth" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_IW;?>">
						<input type="text" style="display:none;" class="TSICWidth" value="<?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ArrowSize;?>">
						<div class="background background_<?php echo $Total_Soft_Portfolio;?>"></div>		
						<div class="arrows">
							<a href="#" class="up" style='text-align:center;'><i class="TSIC Total_Soft_Portfolio_Icon_<?php echo $Total_Soft_Portfolio;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ArrowUp;?>"></i></a>
							<a href="#" class="down" style='text-align:center;'><i class="TSIC Total_Soft_Portfolio_Icon_<?php echo $Total_Soft_Portfolio;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ArrowDown;?>"></i></a>
							<a href="#" class="prev portIcLeft"><i class="TSIC Total_Soft_Portfolio_Icon_<?php echo $Total_Soft_Portfolio;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ArrowLeft;?>"></i></a>
							<a href="#" class="next portIcRight" style='text-align:right;'><i class="TSIC Total_Soft_Portfolio_Icon_<?php echo $Total_Soft_Portfolio;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoftPortfolio_ArrowRight;?>"></i></a>
						</div>
						<div class="gallery">
							<div class="inside">
								<?php for($i=0;$i<$TotalSoftPortfolioManager[0]->TotalSoftPortfolio_AlbumCount;$i++){
				            		$TSoftPort_ElGrid_Images=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftPortfolio_IA=%s", $TotalSoftPortfolioAlbums[$i]->TotalSoftPortfolio_ATitle));
				            		?>

									<div class="item">
				            		<?php
				            			for($j=0;$j<count($TSoftPort_ElGrid_Images);$j++){ ?>
				            				<div><img src="<?php echo $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IURL;?>" alt="<?php echo $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IURL;?>" /></div>
								<?php } ?> </div> <?php } ?>

							</div>
						</div>
					</div>
					<script type="text/javascript">
						var o = {
							init: function(){
								this.portfolio.init();
							},
							portfolio: {
								data: {
								},
								init: function(){
									jQuery('.portfolio').portfolio(o.portfolio.data);
								}
							}
						}
						jQuery(function(){ o.init(); });
					</script>
	 			<?php } else if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Elastic Grid')
	 			{
	 				?>
	 					<style type="text/css">
	 						.wagwep-container
	 						{
	 							display: <?php if($TotalSoftPortfolioOption[0]->TotalSoft_ElG_SM=='false'){echo 'none';}?>
	 						}
	 						nav#porfolio-nav
	 						{
	 							background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_MBgC;?>;
	 						}
	 						ul#portfolio-filter a:hover 
	 						{
								text-decoration: none;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_HBgC;?> !important;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_HC;?> !important;
							}
							.wagwep-container ul#portfolio-filter li.current a 
							{
								background: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_CurBgC;?>;
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_CurC;?>;
							}
							.wagwep-container ul#portfolio-filter a 
							{
								background-color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_BgC;?>;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_C;?>;
								font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_FS;?>px;
								font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_FF;?>;
							}
							.wagwep-container ul#portfolio-filter li 
							{
								line-height: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Nav_FS;?>px;
							}
							.wagwep-container ul#portfolio-filter 
							{
								border-bottom: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LAM_W;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LAM_S;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LAM_C;?>;
							}
							.og-grid li 
							{
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_H;?>px;
							}
							.og-grid li > a,.og-grid li > a img 
							{
								width:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_W;?>px;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_H;?>px;
								border-radius:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_BR;?>px;
								box-shadow:0px 0px 30px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_BS;?>; 
							}
							.og-grid li a figure 
							{
								background-color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_HBgC;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_HO;?>;
							}
							.og-grid li a figure span 
							{
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_TC;?>;
								font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_TFS;?>px;
								font-family: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Im_TFF;?>;
								border-bottom: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LAT_W;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LAT_S;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LAT_C;?>;
							}
							.og-expander 
							{
								background-color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_BgC;?>;
							}
							.og-pointer
							{
								border-bottom-color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_BgC;?> !important;
							}
							.og-details h3
							{
								font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_TFS;?>px;
								font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_TFF;?>;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_TC;?>;
							}
							.og-details p 
							{
								font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_DFS;?>px;
								font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_DFF;?>;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_DC;?>;
								max-height:200px;
								overflow-x:hidden;
							}
							.og-details p::-webkit-scrollbar 
							{
								width: 0.5em;
							}
							.og-details p::-webkit-scrollbar-track 
							{
								-webkit-box-shadow: inset 0 0 6px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_BgC; ?>;
							}
							.og-details p::-webkit-scrollbar-thumb {
								background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_DC; ?>;
								outline: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_Pop_DC; ?>;
							}
							.og-details a.link-button 
							{
								font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_FS;?>px;
								background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_BgC;?>;
								-moz-border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_BR;?>px;
								-webkit-border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_BR;?>px;
								border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_BR;?>px;
								border: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_BW;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_BS;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_BC;?>;
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_C;?> !important;
								font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_FF;?>;
							}
							.og-details a:hover 
							{
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_HC;?> !important;
								background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LIP_HBgC;?>;
							}
							.og-details .infosep 
							{
								border-bottom: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LBT_W;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LBT_S;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_LBT_C;?>;
							}
							.elastislide-wrapper 
							{
								background-color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BgC;?>;
								box-shadow: inset 0 0 10px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BSC;?>;
							    -moz-box-shadow:    inset 0 0 10px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BSC;?>;
							    -webkit-box-shadow: inset 0 0 10px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BSC;?>;
							}
							.elastislide-list li a img,.elastislide-list li a,.elastislide-list li,.elastislide-list
							{
								height: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_IH;?>px;
								box-shadow:none;
							}
							.elastislide-carousel ul li a img 
							{
								border: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BW;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BS;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BC;?>;
								border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_BR;?>px;
							}
							.elastislide-carousel ul li a img.selected 
							{
								border-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_T_CurBC;?>;
							}
	 					</style>
						<div id="elastic_grid_demo"></div>

						<script src="<?php echo plugins_url('../JS/modernizr.custom.js',__FILE__);?>" type="text/javascript"></script>
						<script src="<?php echo plugins_url('../JS/classie.js',__FILE__);?>" type="text/javascript"></script>

						<script type="text/javascript" src="<?php echo plugins_url('../JS/elastic_grid.min.js',__FILE__);?>"></script>
						<script type="text/javascript">
						    jQuery(function(){
						        jQuery("#elastic_grid_demo").elastic_grid({
						            'showAllText' : '<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_TSA;?>',
						            'filterEffect': '<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_FE;?>', // moveup, scaleup, fallperspective, fly, flip, helix , popup
						            'hoverDirection': <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_HE;?>,
						            'hoverDelay': <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_HD;?>,
						            'hoverInverse': <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_HI;?>,
						            'expandingSpeed': <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_ES;?>,
						            'expandingHeight': <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_ElG_EH;?>,
						            'items' :
						            [
						            	<?php for($i=0;$i<$TotalSoftPortfolioManager[0]->TotalSoftPortfolio_AlbumCount;$i++){
						            		$TSoftPort_ElGrid_Images=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftPortfolio_IA=%s", $TotalSoftPortfolioAlbums[$i]->TotalSoftPortfolio_ATitle));
						            			for($j=0;$j<count($TSoftPort_ElGrid_Images);$j++){ ?>
						            				{
									                    'title'         : '<?php echo $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IT;?>',
									                    'description'   : '<?php echo $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IDesc;?>',
									                    'thumbnail'     : [ <?php echo "'" . $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IURL . "',"; for($k=0;$k<count($TSoftPort_ElGrid_Images);$k++){ if($j!=$k){echo "'" . $TSoftPort_ElGrid_Images[$k]->TotalSoftPortfolio_IURL . "',";}}?> ],
									                    'large'         : [ <?php echo "'" . $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IURL . "',"; for($k=0;$k<count($TSoftPort_ElGrid_Images);$k++){ if($j!=$k){echo "'" . $TSoftPort_ElGrid_Images[$k]->TotalSoftPortfolio_IURL . "',";}}?> ],
									                    'button_list'   :
									                    [
									                         { 'title':'View More', 'url':'<?php echo $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_ILink;?>', 'new_window' : '<?php echo $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IONT; ?>' }
									                    ],
									                    'tags'          : ['<?php echo $TSoftPort_ElGrid_Images[$j]->TotalSoftPortfolio_IA;?>']
									                },
										<?php }} ?>
						            ]
						        });
						    });
						</script>
	 				<?php
	 			} 
	 			else if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Filterable Grid')
	 			{ 
	 				?>
	 					<style type="text/css">
		 					<?php if($TotalSoftPortfolioOption[0]->TotalSoft_FG_Im_BW!='0'){ ?>
								.slider
								{
									padding: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Im_BW;?>px;
									background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Im_BC;?>;
								}
		 					<?php } else{ ?>
		 						.slider
								{
									padding:0;
									background:none !important;
								}
		 					<?php } ?>
		 					.grid__sizer,.grid__item 
		 					{
		 						padding:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_PBI;?>px;
								box-sizing:border-box;
		 					}
		 					.bar
		 					{
								text-align: center;
		 						background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_MBgC;?>;
		 					}
		 					.filter__item {
		 						color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_C;?> !important;
		 						background-color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_BgC;?> !important;
		 						font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_FS;?>px;
		 						font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_FF;?> !important;
		 					}
		 					.filter__item--selected {
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_CurC;?> !important;
								background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_CurBgC;?> !important;
							}
							.filter__item:hover {
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_HC;?> !important;
								background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_HBgC;?> !important;
							}
							.meta {
								text-align: center;
								background-color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_TDBgC;?>;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_TDBW;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_TDBC;?>;
							}
							.meta__title {
								font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_TFS;?>px;
								font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_TFF;?>;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_TC;?>;
								margin: 0 !important;
							}
							.meta__brand {
								font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_DFS;?>px;
								font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_DFF;?>;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_DC;?>;
								text-align: justify;
							}
							.action--button {
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
							}
							.no-touch .action--button:hover {
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
							}
							.hoverDivPort{
								position:absolute;
								top:0px;
								left:0px;
								width:100%;
								height:100%;
								cursor:pointer;
							}
							.HovLine1_1{
								position:absolute;
								width:0%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(90deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(90deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_1{
								position:absolute;
								width:0%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(0deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_2{
								position:absolute;
								width:0%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(90deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(90deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_2{
								position:absolute;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								width:0%;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(0deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_3{
								position:absolute;
								width:0%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(90deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(90deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_3{
								position:absolute;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								width:0%;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(0deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_4{
								position:absolute;
								width:35%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(135deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_4{
								position:absolute;
								width:35%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_5{
								position:absolute;
								width:35%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(135deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_5{
								position:absolute;
								width:35%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_6{
								position:absolute;
								width:0%;
								top:50%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(135deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_6{
								position:absolute;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								width:0%;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_7{
								position:absolute;
								width:500%;
								top:55%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_7{
								position:absolute;
								width:500%;
								top:40%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_8{
								position:absolute;
								width:500%;
								top:55%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(135deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_8{
								position:absolute;
								width:500%;
								top:40%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(135deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_9{
								position:absolute;
								width:0%;
								top:0%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(135deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_9{
								position:absolute;
								width:0%;
								top:100%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(135deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}
							.HovLine1_10{
								position:absolute;
								width:0%;
								top:100%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Transition/10;?>s linear !important;
							}
							.HovLine2_10{
								position:absolute;
								width:0%;
								top:0%;
								left:50%;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Width;?>px;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg);
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Transition/10;?>s linear !important;
							}							
							.slider__item:hover .HovLine1_1{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(270deg);
							}
							.slider__item:hover .HovLine2_1{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(180deg);
							}
							.slider__item:hover .HovLine1_2{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(-270deg);
							}
							.slider__item:hover .HovLine2_2{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(-180deg);
							}
							.slider__item:hover .HovLine1_3{
								width:35% !important;
								opacity:1;								
							}
							.slider__item:hover .HovLine2_3{
								width:35%;
								opacity:1;								
							}
							.slider__item:hover .HovLine1_4{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(315deg);
							}
							.slider__item:hover .HovLine2_4{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(225deg);
							}
							.slider__item:hover .HovLine1_5{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(-315deg);
							}
							.slider__item:hover .HovLine2_5{
								width:35%;
								opacity:1;
								transform:translateY(-50%) translateX(-50%) rotate(-225deg);
							}
							.slider__item:hover .HovLine1_6{
								width:35%;
								opacity:1;								
							}
							.slider__item:hover .HovLine2_6{
								width:35%;
								opacity:1;								
							}
							.slider__item:hover .HovLine1_7{
								top:100%;
								opacity:1;								
							}
							.slider__item:hover .HovLine2_7{
								top:0%;
								opacity:1;								
							}
							.slider__item:hover .HovLine1_8{
								top:100%;
								opacity:1;	
							}
							.slider__item:hover .HovLine2_8{
								top:0%;
								opacity:1;
							}
							.slider__item:hover .HovLine1_9{
								width:200%;
								opacity:1;	
							}
							.slider__item:hover .HovLine2_9{
								width:200%;
								opacity:1;
							}
							.slider__item:hover .HovLine1_10{
								width:200%;
								opacity:1;	
							}
							.slider__item:hover .HovLine2_10{
								width:200%;
								opacity:1;
							}							
							.IconForPopup1{
								position:absolute;
								top:50%;
								left:20%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup1{
								opacity:1;
								left:38%;
							}
							.IconForPopup2{
								position:absolute;
								top:50%;
								left:80%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup2{
								opacity:1;
								left:62%;
							}
							.IconForPopup3{
								position:absolute;
								top:20%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup3{
								opacity:1;
								top:38%;
							}							
							.IconForPopup4{
								position:absolute;
								top:80%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup4{
								opacity:1;
								top:62%;
							}
							.IconForPopup5{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup5{
								opacity:1;
								left:38%;
							}
							.IconForPopup6{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup6{
								opacity:1;
								left:62%;
							}
							.IconForPopup7{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup7{
								opacity:1;
								top:38%;
							}							
							.IconForPopup8{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup8{
								opacity:1;
								top:62%;
							}							
							.IconForPopup9{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Color;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Color;?>;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Bg_Color;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								webkit-transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForPopup9{
								opacity:1;
							}							
							.IconForLink1{
								position:absolute;
								top:50%;
								left:80%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink1{
								opacity:1;
								left:62%;
							}
							.IconForLink2{
								position:absolute;
								top:50%;
								left:20%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink2{
								opacity:1;
								left:38%;
							}							
							.IconForLink3{
								position:absolute;
								top:80%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink3{
								opacity:1;
								top:62%;
							}
							.IconForLink4{
								position:absolute;
								top:20%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink4{
								opacity:1;
								top:38%;
							}
							.IconForLink5{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink5{
								opacity:1;
								left:62%;
							}
							.IconForLink6{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink6{
								opacity:1;
								left:38%;
							}							
							.IconForLink7{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink7{
								opacity:1;
								top:62%;
							}
							.IconForLink8{
								position:absolute;
								top:50%;
								left:50%;
								font-size:5px;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LC;?>;
								padding:8px;
								border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Border_Color;?> solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Border_Size;?>px;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_LHC;?>;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Transition/10;?>s linear !important;
							}
							.slider__item:hover .IconForLink8{
								opacity:1;
								top:38%;
							}						
							.hoverDivPort1{
								position:absolute;
								width:0%;
								height:200%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s linear !important;
							}							
							.slider__item:hover .hoverDivPort1{
								width:200%;
							}
							.hoverDivPort2{
								position:absolute;
								width:0%;
								height:200%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s linear !important;
							}							
							.slider__item:hover .hoverDivPort2{
								width:200%;
							}							
							.hoverDivPort3{
								position:absolute;
								width:0%;
								height:0%;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .hoverDivPort3{
								width:200%;
								height:200%;								
							}
							.hoverDivPort4{
								position:absolute;
								width:0%;
								height:0%;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s cubic-bezier( 0.420, 0.9, 0.885, -1.310) !important;
							}
							.slider__item:hover .hoverDivPort4{
								width:200%;
								height:200%;
							}
							.hoverDivPort5{
								position:absolute;
								width:0%;
								height:200%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s cubic-bezier( 0.420, 0.9, 0.885, -1.310) !important;
							}							
							.slider__item:hover .hoverDivPort5{
								width:200%;
							}
							.hoverDivPort6{
								position:absolute;
								width:0%;
								height:200%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s cubic-bezier( 0.420, 0.9, 0.885, -1.310) !important;
							}							
							.slider__item:hover .hoverDivPort6{
								width:200%;
							}
							.hoverDivPort7{
								position:absolute;
								width:0%;
								height:0%;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .hoverDivPort7{
								width:200%;
								height:200%;
								border-radius:0%;
							}
							.hoverDivPort8{
								position:absolute;
								width:0%;
								height:0%;
								border-radius:50%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								top:50%;
								left:50%;
								transform:translateY(-50%) translateX(-50%) rotate(135deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s cubic-bezier( 0.420, 1.9, 0.885, -1.310) !important;
							}
							.slider__item:hover .hoverDivPort8{
								width:200%;
								height:200%;
								border-radius:0%;
							}
							.hoverDivPort9{
								position:absolute;
								width:200%;
								height:100%;
								top:0%;
								left:0%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
								transform:translateY(100%) rotate(0deg);
								-webkit-transform:translateY(100%) rotate(0deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .hoverDivPort9{
								transform:translateY(50%) rotate(-20deg);
								-webkit-transform:translateY(60%) rotate(-24deg);
							}
							.hoverDivPort10{
								position:absolute;
								width:200%;
								height:100%;
								top:0%;
								left:0%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s linear !important;
							}
							.slider__item:hover .hoverDivPort10{
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
							}
							.hoverDivPort11{
								position:absolute;
								width:200%;
								height:100%;
								top:0%;
								left:0%;
								background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Bg_Color;?>;
								opacity:0;
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Transition/10;?>s cubic-bezier( 0.420, 0.9, 0.885, -1.310) !important;
							}
							.slider__item:hover .hoverDivPort11{
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Trans/100;?>;
							}						
							.hovRound1{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s linear !important;
							}
							.slider__item:hover .hovRound1{
								width:80%;
								height:80%;
								
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:100px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
							}
							.hovRound2{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s cubic-bezier( 0.420, 1.3, 0.885, -1.3) !important;
							}
							.slider__item:hover .hovRound2{
								width:80%;
								height:80%;								
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:100px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
							}
							.hovRound3{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								border-radius:50%;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s linear !important;
							}
							.slider__item:hover .hovRound3{
								width:40%;
								height:40%;								
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:300px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
							}
							.hovRound4{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								border-radius:50%;
								transform:translateY(-50%) translateX(-50%);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s cubic-bezier( 0.420, 1.3, 0.885, -0.5) !important;
							}
							.slider__item:hover .hovRound4{
								width:40%;
								height:40%;								
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:300px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
							}
							.hovRound5{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s linear !important;
							}
							.slider__item:hover .hovRound5{
								width:40%;
								height:40%;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:300px solid #fff;
							}
							.hovRound6{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s cubic-bezier( 0.420, 1.3, 0.885, -0.5) !important;
							}
							.slider__item:hover .hovRound6{
								width:40%;
								height:40%;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:300px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
							}
							.hovRound7{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								transform:translateY(-50%) translateX(-50%) rotate(0deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s linear !important;
							}
							.slider__item:hover .hovRound7{
								width:40%;
								height:40%;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:300px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
							}
							.hovRound8{
								position:absolute;
								width:0%;
								height:0%;
								border:1px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								top:50%;
								left:50%;
								opacity:0;
								transform:translateY(-50%) translateX(-50%) rotate(0deg);
								transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_TRansition/10;?>s cubic-bezier( 0.420, 1.3, 0.885, -0.5) !important;
							}
							.slider__item:hover .hovRound8{
								width:40%;
								height:40%;
								opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Transparency/100;?>;
								border:300px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Bg_Color;?>;
								transform:translateY(-50%) translateX(-50%) rotate(45deg);
							}							
							.portIc{
								cursor:pointer;
							}
							.portLink{
								cursor:pointer;
							}
							.carSliderPort{
								position:fixed;
								bottom:0%;
								width:100%;
								left:0%;
								display:none;
								padding-top:5px;
								padding-bottom:5px;
								z-index:999999999 !important;
								text-align:center;
							}
							.carSliderPortRel{
								position:relative;
								margin-left:auto;
								margin-right:auto;
							}
							.carImgs{
								display:inline-block !important;
								position:relative;
								z-index:999999999;
								cursor:pointer;
								margin-left:2px;
								margin-right:2px;
								height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Img_Height;?>px;
							}
							.leftClickPortSl{
								position:absolute;
								display:block;
								width:50%;
								height:100%;
								left:0px;
								top:0px;
								cursor:pointer;
							}
							.rightClickPortSl{
								position:absolute;
								width:50%;
								display:block;
								height:100%;
								right:0px;
								top:0px;
								cursor:pointer;
							}
							.totLeft{
								position: absolute;
								top: 50%;
								font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Size_Time;?>px;
								transform: translateY(-50%);
								left: 2px;
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Color;?>;
								display:none;
							}
							.totRight{
								position: absolute;
								top: 50%;
								font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Size_Time;?>px;
								transform: translateY(-50%);
								right: 2px;
								color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Color;?>;
								display:none;
							}
							.leftClickPortSl:hover .totLeft{
								display:block;
							}
							.rightClickPortSl:hover .totRight{
								display:block;
							}
							.caruselLeftClick{
								position:absolute;
								left:0px;
								top:50%;
								transform:translateY(-50%);
								cursor:pointer;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Color;?>;
								z-index:99999999999;
								display:none;
							}
							.caruselRightClick{
								position:absolute;
								right:0px;
								top:50%;
								transform:translateY(-50%);
								cursor:pointer;
								color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Color;?>;
								z-index:99999999999;
								display:none;
							}
							.carCl{
								font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Size;?>px;
							}
							#jdbpopup_container .jdbpopup_overlay{position:fixed;opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Popup_Ov_Trans/100;?> !important;width:100%;height:100%;z-index:2000;top:0;left:0;padding:0;background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Popup_Ov_Bg_Color;?>}
							#jdbpopup_container .jdbpopup_subcontainer{position:fixed;display:block;top:50%;left:50%;height:auto !important;width:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Img_Width;?>px !important;max-width:95%;z-index:999999999999999999999;border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Img_Border_Width;?>px solid <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Img_Border_Color;?>;margin-top:auto !important;margin-left:auto !important;transform:translateY(-50%) translateX(-50%);-webkit-transform:translateY(-50%) translateX(-50%);max-height:80%;overflow:hidden;}
							.portDelIcPop{font-size:20px;background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Del_Icon_Bg_Color;?>;padding:10px;color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Del_Icon_Color;?>}
							#jdbpopup_container .jdbpopup_subcontainer .jdbpopup_caption.caption_on{position:absolute;display:block;width:100%;padding:5px 0;left:0;bottom:0;background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Title_Bg_Color;?>;opacity:0.9;text-align:center;line-height:1.4em;font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Title_Font_Size;?>px;font-weight:400;color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Title_Color;?>;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;-o-backface-visibility:hidden;backface-visibility:hidden;font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Title_Font_Family;?>; text-align: center; }
	 					</style>						
						<div class="bar">
							<div class="filter">
								<button class="action filter__item filter__item--selected" data-filter="*"><?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_TSA;?></button>
								<?php for($i=0;$i<$TotalSoftPortfolioManager[0]->TotalSoftPortfolio_AlbumCount;$i++){
				            		?>
				            			<button class="action filter__item" data-filter="<?php echo  '.' . strtolower($TotalSoftPortfolioAlbums[$i]->TotalSoftPortfolio_ATitle);?>"><i class="icon" style='display:none;'></i><?php echo $TotalSoftPortfolioAlbums[$i]->TotalSoftPortfolio_ATitle;?></button>
								<?php } ?> 
							</div>
						</div>
						<div class="view">
							<!-- Grid -->
							<section class="grid grid--loading">
								<!-- Loader -->
								<img class="grid__loader" src="<?php echo plugins_url('../Images/grid.svg',__FILE__);?>" width="60" alt="Loader image" />
								<!-- Grid sizer for a fluid Isotope (Masonry) layout -->
								<div class="grid__sizer"></div>
								<!-- Grid items -->
								<?php for($i=0;$i<count($TotalSoftPortfolioImages);$i++){
									if($TotalSoftPortfolioOption[0]->TotalSoft_FG_DSI=='true'){
										if($i%6==0){
											?>
												<div class="grid__item grid__item--size-a <?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>">
													<div class="slider">
														<div  class="slider__item slider__item<?php echo $i+1; ?>">
															<img  class='forZoom' src="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>" alt="Dummy" name='<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>' />
															<div class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Effect_Type;?>'>
																
															</div>
															<div class='hovL <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Effect_Type;?>'></div>
															<div class='hovL <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Effect_Type;?>'></div>
															<div style='box-sizing:initial;' class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Effect_Type;?>'>
															
															</div>
															<i href="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>" title="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IT;?>" class='jdbpopup <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Effect_Type;?> <?php echo $Pop_Ic_Type; ?> portIc portIc<?php echo $i+1; ?>' onclick='carPop("<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>",<?php echo $i; ?>,"<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>")'></i>		
															<?php if($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_ILink!=''){ ?>
															<a href="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_ILink;?>" class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Effect_Type;?> totalsoft totalsoft-link portLink portLink<?php echo $i+1; ?>' style='text-decoration:none;'></a>
															<?php } ?>	
														</div>
													</div>
													<div class="meta">
														<h3 class="meta__title" name='<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>'><?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IT;?></h3>
														<?php if($TotalSoftPortfolioOption[0]->TotalSoft_FG_DShow=='true'){ ?>
															<span class="meta__brand"><?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IDesc;?></span>
														<?php } ?>
													</div>												
												</div>
											<?php
										}
										else
										{
											?>
												<div class="grid__item <?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>">
													<div class="slider">
														<div class="slider__item slider__item<?php echo $i+1; ?>">
															<img class='forZoom' src="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>" alt="Dummy" name='<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>' />
															<div class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Effect_Type;?>'></div>
															<div class='hovL <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Effect_Type;?>' ></div>
															<div class='hovL <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Effect_Type;?>' ></div>
															<div style='box-sizing:initial;' class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Effect_Type;?>'></div>
															<i href="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>" title="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IT;?>" class='jdbpopup <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Effect_Type;?> <?php echo $Pop_Ic_Type; ?> portIc portIc<?php echo $i+1; ?>' onclick='carPop("<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>",<?php echo $i; ?>,"<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>")'></i>
															<?php if($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_ILink!=''){ ?>
															<a href="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_ILink;?>" class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Effect_Type;?> totalsoft totalsoft-link portLink portLink<?php echo $i+1; ?>' style='text-decoration:none;'></a>
															<?php } ?>	
														</div>
													</div>
													<div class="meta">
														<h3 class="meta__title" name='<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>'><?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IT;?></h3>
														<?php if($TotalSoftPortfolioOption[0]->TotalSoft_FG_DShow=='true'){ ?>
															<span class="meta__brand"><?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IDesc;?></span>
														<?php } ?>
													</div>	
												</div>
											<?php
										}
									}
									else
									{
										?>
											<div class="grid__item <?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>">
												<div class="slider">
													<div class="slider__item slider__item<?php echo $i+1; ?>">
														<img class='forZoom' src="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>" alt="Dummy" name='<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>' />
															<div class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Ov_Effect_Type;?>'></div>
															<div class='hovL <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line1_Effect_Type;?>' ></div>
															<div class='hovL <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Line2_Effect_Type;?>' ></div>
															<div style='box-sizing:initial;' class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Hov_Raund_Effect_Type;?>'></div>									
															<i href="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>" title="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IT;?>" class='jdbpopup <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Hov_Effect_Type;?> <?php echo $Pop_Ic_Type; ?> portIc portIc<?php echo $i+1; ?>' onclick='carPop("<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>",<?php echo $i; ?>,"<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IURL;?>")'></i>
															<?php if($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_ILink!=''){ ?>
															<a href="<?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_ILink;?>" class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Link_Icon_Effect_Type;?> totalsoft totalsoft-link portLink portLink<?php echo $i+1; ?>' style='text-decoration:none;'></a>
															<?php } ?>	
													</div>
												</div>
												<div class="meta">
													<h3 class="meta__title" name='<?php echo strtolower($TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IA);?>'><?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IT;?></h3>
													<?php if($TotalSoftPortfolioOption[0]->TotalSoft_FG_DShow=='true'){ ?>
														<span class="meta__brand"><?php echo $TotalSoftPortfolioImages[$i]->TotalSoftPortfolio_IDesc;?></span>
													<?php } ?>
												</div>	
											</div>
										<?php
									}
				            	} ?>
								<input type='text' style='display:none;' class='popIcFS' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Icon_Size;?>'>
								<input type='text' style='display:none;' class='popStartTime' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Popup_Start_Time;?>'>
								<input type='text' style='display:none;' class='popStopTime' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Popup_Stop_Time;?>'>
								<input type='text' style='display:none;' class='popTimeEffectType' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Popup_Time_Effect_Type;?>'>
								<input type='text' style='display:none;' class='popEffectType' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Popup_Effect_Type;?>'>
								<input type='text' style='display:none;' class='sliderImgWidth' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Img_Width;?>'>
								<input type='text' style='display:none;' class='carsliderImgBordWidth' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Img_Border_Width;?>'>
								<input type='text' style='display:none;' class='carsliderImgBordColor' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Img_Border_Color;?>'>
								<input type='text' style='display:none;' class='SShowPauseTime' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_SShow_Paause_Time;?>'>
								<input type='text' style='display:none;' class='SliderLeftIconType' value='<?php echo $TotalSoft_FG_Slider_Icon_Left; ?>'>
								<input type='text' style='display:none;' class='SliderRightIconType' value='<?php echo $TotalSoft_FG_Slider_Icon_Right; ?>'>
								<input type='text' style='display:none;' class='DelIconType' value='<?php echo $TotalSoft_FG_Slider_Del_Icon_Type; ?>'>
								<input type='text' style='display:none;' class='DelIconSize' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Del_Icon_Size;?>'>
								<input type='text' style='display:none;' class='popImgWidth' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Img_Width;?>'>
								<input type='text' style='display:none;' class='CarSliderIconSize' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Car_Slider_Icon_Size;?>'>
								<input type='text' style='display:none;' class='SliderIconSize' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Slider_Icon_Size_Time;?>'>
								<input type='text' style='display:none;' class='SliderTitleImgFontSize' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Pop_Title_Font_Size;?>'>
								<input type='text' style='display:none;' class='CarSliderIconTypeLeft' value='<?php echo $TotalSoft_FG_Car_Slider_Icon_Left; ?>'>
								<input type='text' style='display:none;' class='CarSliderIconTypeRight' value='<?php echo $TotalSoft_FG_Car_Slider_Icon_Right; ?>'>
								<input type='text' style='display:none;' class='filtItemFSize' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_FG_Nav_FS;?>'>						
							</section>
							<!-- /grid-->
						</div>
						<!-- /view -->
						<script>
						jQuery(document).ready(function(){
							var popIcFS = jQuery('.popIcFS').val();
							var DelIconSize = jQuery('.DelIconSize').val();
							var popImgWidth = parseInt(jQuery('.popImgWidth').val());
							var CarSliderIconSize = parseInt(jQuery('.CarSliderIconSize').val());
							var SliderIconSize = parseInt(jQuery('.SliderIconSize').val());
							var SliderTitleImgFontSize =  parseInt(jQuery('.SliderTitleImgFontSize').val());
							var filtItemFSize =  parseInt(jQuery('.filtItemFSize').val());var IcArray = [];
							jQuery('.portIc').each(function(){
								IcArray.push(jQuery(this));
							})
							function resp(){
								for(i=1;i<=IcArray.length;i++){
									jQuery('.portIc'+i).css('font-size',popIcFS*jQuery('.slider__item'+i).width()/1000);
									jQuery('.portIc'+i).css('padding',30*jQuery('.slider__item'+i).width()/1000);
									jQuery('.portLink'+i).css('font-size',popIcFS*jQuery('.slider__item'+i).width()/1000);
									jQuery('.portLink'+i).css('padding',30*jQuery('.slider__item'+i).width()/1000);
								}
								jQuery('.filter__item').css('font-size',filtItemFSize*jQuery('.filtItemFSize').parent().parent().width()/(jQuery('.filtItemFSize').parent().parent().width()+200));
								if(jQuery(window).width()<=popImgWidth){
									jQuery('.portDelIcPop').css('font-size',DelIconSize*jQuery(window).width()/popImgWidth);
									jQuery('.portDelIcPop').css('padding',5*jQuery(window).width()/popImgWidth);
									jQuery('.carCl').css('font-size',CarSliderIconSize*jQuery(window).width()/popImgWidth);
									jQuery('.totLeft').css('font-size',SliderIconSize*jQuery(window).width()/popImgWidth);
									jQuery('.totRight').css('font-size',SliderIconSize*jQuery(window).width()/popImgWidth);
									jQuery('#jdbpopup_container .jdbpopup_subcontainer .jdbpopup_caption.caption_on').css('font-size',SliderTitleImgFontSize*jQuery(window).width()/popImgWidth);
								}
							}
							resp();
							jQuery(window).resize(function(){
								resp();
							})
						})
							var carsliderImgBordWidth = parseInt(jQuery('.carsliderImgBordWidth').val());
							var carsliderImgBordColor = jQuery('.carsliderImgBordColor').val();
							var carsliderImgBordStyle = 'solid';
							var SShow = 'true';
							var SShowPauseTime = parseInt(jQuery('.SShowPauseTime').val());
							var CarSliderIconTypeLeft = jQuery('.CarSliderIconTypeLeft').val();
							var CarSliderIconTypeRight = jQuery('.CarSliderIconTypeRight').val();
							var clArray=[];
							var titArray=[];
							var clNumber=[];
							var width=0;
							var count = 0;
							var left_left=0;
							var win_width=jQuery(window).width();
							var z;
							function carPop(cl,number,srcc)
							{
								jQuery('body').append("<div class='carSliderPort' onmouseover='stop()' onmouseout='start()'><div class='carSliderPortRel'></div><i class='caruselLeftClick carCl "+CarSliderIconTypeLeft+"' onclick='carusClLeft()'></i><i class='caruselRightClick carCl "+CarSliderIconTypeRight+"' onclick='carusClRight()'></i></div>");
								jQuery('.carSliderPort').show(1000);
								jQuery('.forZoom').each(function(){
									if(jQuery(this).attr('name')==cl){
										clArray.push(jQuery(this).attr('src'));
									}									
								})
								jQuery('.meta__title').each(function(){
									if(jQuery(this).attr('name')==cl){
										titArray.push(jQuery(this).text());
									}
								})						
								var bigSrc = jQuery('#jdbpopup_container .jdbpopup_subcontainer img').attr('src');								
								for(i=0;i<=clArray.length-1;i++){
									jQuery('.carSliderPortRel').append("<img style='max-width:none;' src='"+clArray[i]+"' onclick=\"(sr('"+clArray[i]+"',"+i+"))\"  class='carImgs carImgs"+i+"' />");
									width += jQuery('.carImgs'+i).width()+carsliderImgBordWidth+5;		
									if(jQuery('.carImgs'+i).attr('src')==srcc){
										jQuery('.carImgs'+i).css('border',''+carsliderImgBordWidth+'px '+carsliderImgBordStyle+' '+carsliderImgBordColor+'');
										count = i;
									}
								}
								jQuery('.carSliderPortRel').css('width',width);
								if(jQuery(window).width()<=width){
									jQuery('.carCl').css('display','block');
								}
								if(jQuery('.carImgs'+count).offset().left+jQuery('.carImgs'+count).width()>win_width){
									jQuery('.carSliderPortRel').animate({'left':'-='+(jQuery('.carImgs'+count).offset().left-(win_width-jQuery('.carImgs'+count).width()))+'px'},500);
									left_left=left_left-(jQuery('.carImgs'+count).offset().left-(win_width-jQuery('.carImgs'+count).width()));
								}else if(jQuery('.carImgs'+count).offset().left<0){
									jQuery('.carSliderPortRel').animate({'left':'0',},500);
									left_left=0;
								}
								if(clArray.length>0 ){
									if(SShow == 'true'){
										z=setInterval(function(){
											y=false;
												changeImgs();
										},SShowPauseTime*1000)
									}
								}else{
									clearInterval(z);
								}
							}
							function stop(){
								clearInterval(z);
							}
							function start(){
								if(clArray.length>0){
									z=setInterval(function(){
										y=false;
										changeImgs();
									},SShowPauseTime*1000)
								}else{
									clearInterval(z);
								}
							}
							var y=false;
							function changeImgs(){
								if(y==true){
									return
								}
								count++;
								if(count==clArray.length){
									count=0;
								}
								jQuery('.jdbpopup_subcontainer').hide(500);
								jQuery('.carImgs').css('border','none')
								jQuery('.carImgs'+count).css('border',''+carsliderImgBordWidth+'px '+carsliderImgBordStyle+' '+carsliderImgBordColor+'');
								y=true;
								setTimeout(function(){
									jQuery('#jdbpopup_container .jdbpopup_subcontainer img').attr('src',clArray[count]);
									jQuery('.jdbpopup_caption').text(titArray[count]);
									jQuery('.jdbpopup_subcontainer').show(500);
								},500)
								setTimeout(function(){
									y=false;
								},1000)
								if(jQuery('.carImgs'+count).offset().left+jQuery('.carImgs'+count).width()>win_width){
									jQuery('.carSliderPortRel').animate({'left':'-='+(jQuery('.carImgs'+count).offset().left-(win_width-jQuery('.carImgs'+count).width()))+'px'},500);
									left_left=left_left-(jQuery('.carImgs'+count).offset().left-(win_width-jQuery('.carImgs'+count).width()));
								}else if(jQuery('.carImgs'+count).offset().left<0){
									jQuery('.carSliderPortRel').animate({'left':'-='+jQuery('.carImgs'+count).offset().left,},500);
									left_left=left_left-jQuery('.carImgs'+count).offset().left;
								}								
							}
							function rCl(){
								changeImgs();
							}
							function lCl(){
								count--;
								if(count==-1){
									count=clArray.length-1;
								}
								jQuery('.jdbpopup_subcontainer').hide(500);
								jQuery('.carImgs').css('border','none')
								jQuery('.carImgs'+count).css('border',''+carsliderImgBordWidth+'px '+carsliderImgBordStyle+' '+carsliderImgBordColor+'');
								setTimeout(function(){
									jQuery('#jdbpopup_container .jdbpopup_subcontainer img').attr('src',clArray[count]);
									jQuery('.jdbpopup_caption').text(titArray[count]);
									jQuery('.jdbpopup_subcontainer').show(500);
								},500)
								if(jQuery('.carImgs'+count).offset().left+jQuery('.carImgs'+count).width()>win_width){
									jQuery('.carSliderPortRel').animate({'left':'-='+(jQuery('.carImgs'+count).offset().left-(win_width-jQuery('.carImgs'+count).width()))+'px'},500);
									left_left=left_left-(jQuery('.carImgs'+count).offset().left-(win_width-jQuery('.carImgs'+count).width()));
								}else if(jQuery('.carImgs'+count).offset().left<0){
									jQuery('.carSliderPortRel').animate({'left':'-='+jQuery('.carImgs'+count).offset().left,},500);
									left_left=left_left-jQuery('.carImgs'+count).offset().left;
								}
							}
							function sr(src,j){
								if(y==true){
									return;
								}
								y=true;
								count=j;
								jQuery('.jdbpopup_subcontainer').hide(500);
								jQuery('.carImgs').css('border','none')
								jQuery('.carImgs'+count).css('border',''+carsliderImgBordWidth+'px '+carsliderImgBordStyle+' '+carsliderImgBordColor+'');
								setTimeout(function(){
									jQuery('#jdbpopup_container .jdbpopup_subcontainer img').attr('src',src);
									jQuery('.jdbpopup_caption').text(titArray[count]);
									jQuery('.jdbpopup_subcontainer').show(500);
								},500)
								setTimeout(function(){
									y=false;
								},1000)
							}
							function resp(){
								if(jQuery(window).width()<=width){
									jQuery('.carCl').css('display','block');
								}
							}
							resp();
							jQuery(window).resize(function(){
								resp();
							})
							function carRight(){
								if(win_width-jQuery('.carSliderPortRel').width()>=left_left){
									left_left=0;
									jQuery('.carSliderPortRel').animate({'left':'0px'},500);
								}else{
									left_left = left_left-60;
									jQuery('.carSliderPortRel').animate({'left':'-=60px'},500);
								}
							}
							function carLeft(){
								if(jQuery('.carSliderPortRel').offset().left>=0){
									left_left=win_width-jQuery('.carSliderPortRel').width();
									jQuery('.carSliderPortRel').animate({'left':win_width-jQuery('.carSliderPortRel').width()+'px'},500);
								}else{
									left_left=left_left+60;
									jQuery('.carSliderPortRel').animate({'left':'+=60px'},500);
								}
							}
							function carusClRight(){	
								carRight();
							}
							function carusClLeft(){
								carLeft();
							}
							function closeClick(){
								clearInterval(z);
								jQuery('.carSliderPort').hide(500);
								jQuery('.carImgs').remove();
								clArray=[];
								jQuery('.carCl').css('display','none');
								jQuery('.carSliderPortRel').css('left','0');
								left_left=0;
								width=0;
							}
						</script>
						<script src="<?php echo plugins_url('../JS/isotope.pkgd.min.js',__FILE__);?>"></script>
						<script src="<?php echo plugins_url('../JS/flickity.pkgd.min.js',__FILE__);?>"></script>
						<script src="<?php echo plugins_url('../JS/modernizr.custom.js',__FILE__);?>"></script>
						<script src="<?php echo plugins_url('../JS/main.js',__FILE__);?>"></script>
						<script src="<?php echo plugins_url('../JS/Filt_popup.min.js',__FILE__);?>"></script>
				<?php } else if($TotalSoftPortfolioOpt[0]->TotalSoftPortfolio_SetType=='Gallery Portfolio/Content Popup'){ ?>
					<script src="<?php echo plugins_url('../JS/jquery.quicksand.js',__FILE__);?>" type="text/javascript"></script>
				    <script src="<?php echo plugins_url('../JS/jquery.easing.js',__FILE__);?>" type="text/javascript"></script>
				    <script src="<?php echo plugins_url('../JS/script.js',__FILE__);?>" type="text/javascript"></script>
					
					<link href="<?php echo plugins_url('../CSS/prettyPhoto.css',__FILE__);?>" rel="stylesheet" type="text/css" />

				    <script type="text/javascript">
						function resp(){
							jQuery('.pp_description').css('font-size',<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TFS;?>*jQuery('.pp_hoverContainer').width()/400);
							jQuery('.totalsoft-port-cpop-close').css('font-size',<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_CIS;?>*jQuery('.pp_hoverContainer').width()/400)
							jQuery('.totalsoft-port-cpop-pl-pa').css('font-size',<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PIS;?>*jQuery('.pp_hoverContainer').width()/400)
							jQuery('.totalsoft-port-cpop-nepr').css('font-size',<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_ArrS;?>*jQuery('.pp_hoverContainer').width()/400)
							jQuery('.totalsoft-port-cpop-text').css('font-size',<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_NFS;?>*jQuery('.pp_hoverContainer').width()/400)
						}
				    	(function($){$.prettyPhoto={version:'3.0'};$.fn.prettyPhoto=function(pp_settings){pp_settings=jQuery.extend({animation_speed:'fast',slideshow:false,autoplay_slideshow:false,opacity:0.80,show_title:true,allow_resize:true,default_width:500,default_height:344,counter_separator_label:'/',theme:'facebook',hideflash:false,wmode:'opaque',autoplay:true,modal:false,overlay_gallery:true,keyboard_shortcuts:true,changepicturecallback:function(){},callback:function(){},markup:'<div class="pp_pic_holder"> \
					      <div class="pp_top"> \
					       <div class="pp_left"></div> \
					       <div class="pp_middle"></div> \
					       <div class="pp_right"></div> \
					      </div> \
					      <div class="pp_content_container"> \
					       <div class="pp_left"> \
					       <div class="pp_right"> \
					        <div class="pp_content"> \
					         <div class="pp_loaderIcon"></div> \
					         <div class="pp_fade"> \
					          <a href="#" class="pp_expand" title="Expand the image">Expand</a> \
					          <div class="pp_hoverContainer"> \
					           <a class="pp_next" href="#"> </a> \
					           <a class="pp_previous" href="#"> </a> \
					          </div> \
					          <div id="pp_full_res"></div> \
					          <div class="pp_details clearfix"> \
					           <p class="pp_description"></p> \
					           <i class="totalsoft-port-cpop-close pp_close totalsoft totalsoft-<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_CType;?>"><span><?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_CIT;?></span></i> \
					           <div class="pp_nav"> \
					            <i href="#" class="pp_arrow_previous totalsoft-port-cpop-nepr totalsoft totalsoft-<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_AType;?>-left"></i> \
					            <p class="currentTextHolder totalsoft-port-cpop-text">0/0</p> \
					            <i href="#" class="pp_arrow_next totalsoft-port-cpop-nepr totalsoft totalsoft-<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_AType;?>-right"></i> \
					           </div> \
					          </div> \
					         </div> \
					        </div> \
					       </div> \
					       </div> \
					      </div> \
					      <div class="pp_bottom"> \
					       <div class="pp_left"></div> \
					       <div class="pp_middle"></div> \
					       <div class="pp_right"></div> \
					      </div> \
					     </div> \
					     <div class="pp_overlay"></div>',gallery_markup:'<div class="pp_gallery"> \
					        <a href="#" class="pp_arrow_previous">Previous</a> \
					        <ul> \
					         {gallery} \
					        </ul> \
					        <a href="#" class="pp_arrow_next">Next</a> \
					       </div>',image_markup:'<img id="fullResImage" src="" />',flash_markup:'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',quicktime_markup:'<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',iframe_markup:'<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',inline_markup:'<div class="pp_inline clearfix">{content}</div>',custom_markup:''},pp_settings);var matchedObjects=this,percentBased=false,correctSizes,pp_open,pp_contentHeight,pp_contentWidth,pp_containerHeight,pp_containerWidth,windowHeight=$(window).height(),windowWidth=$(window).width(),pp_slideshow;doresize=true,scroll_pos=_get_scroll();$(window).unbind('resize').resize(function(){_center_overlay();_resize_overlay();});if(pp_settings.keyboard_shortcuts){$(document).unbind('keydown').keydown(function(e){setTimeout(function(){resp()},450);if(typeof $pp_pic_holder!='undefined'){if($pp_pic_holder.is(':visible')){switch(e.keyCode){case 37:$.prettyPhoto.changePage('previous');break;case 39:$.prettyPhoto.changePage('next');break;case 27:if(!settings.modal)
					$.prettyPhoto.close();break;};return false;};};});}
					$.prettyPhoto.initialize=function(){settings=pp_settings;if($.browser.msie&&parseInt($.browser.version)==6)settings.theme="light_square";_buildOverlay(this);if(settings.allow_resize)
					$(window).scroll(function(){_center_overlay();});_center_overlay();set_position=jQuery.inArray($(this).attr('href'),pp_images);$.prettyPhoto.open();return false;}
					$.prettyPhoto.open=function(event){if(typeof settings=="undefined"){settings=pp_settings;if($.browser.msie&&$.browser.version==6)settings.theme="light_square";_buildOverlay(event.target);pp_images=$.makeArray(arguments[0]);pp_titles=(arguments[1])?$.makeArray(arguments[1]):$.makeArray("");pp_descriptions=(arguments[2])?$.makeArray(arguments[2]):$.makeArray("");isSet=(pp_images.length>1)?true:false;set_position=0;}
					if($.browser.msie&&$.browser.version==6)$('select').css('visibility','hidden');if(settings.hideflash)$('object,embed').css('visibility','hidden');_checkPosition($(pp_images).size());$('.pp_loaderIcon').show();if($ppt.is(':hidden'))$ppt.css('opacity',0).show();$pp_overlay.show().fadeTo(settings.animation_speed,settings.opacity);$pp_pic_holder.find('.currentTextHolder').text((set_position+1)+settings.counter_separator_label+$(pp_images).size());$pp_pic_holder.find('.pp_description').show().html(unescape(pp_descriptions[set_position]));(settings.show_title&&pp_titles[set_position]!=""&&typeof pp_titles[set_position]!="undefined")?$ppt.html(unescape(pp_titles[set_position])):$ppt.html('&nbsp;');movie_width=(parseFloat(grab_param('width',pp_images[set_position])))?grab_param('width',pp_images[set_position]):settings.default_width.toString();movie_height=(parseFloat(grab_param('height',pp_images[set_position])))?grab_param('height',pp_images[set_position]):settings.default_height.toString();if(movie_width.indexOf('%')!=-1||movie_height.indexOf('%')!=-1){movie_height=parseFloat(($(window).height()*parseFloat(movie_height)/100)-150);movie_width=parseFloat(($(window).width()*parseFloat(movie_width)/100)-150);percentBased=true;}else{percentBased=false;}
					$pp_pic_holder.fadeIn(function(){resp();imgPreloader="";switch(_getFileType(pp_images[set_position])){case'image':imgPreloader=new Image();nextImage=new Image();if(isSet&&set_position>$(pp_images).size())nextImage.src=pp_images[set_position+1];prevImage=new Image();if(isSet&&pp_images[set_position-1])prevImage.src=pp_images[set_position-1];$pp_pic_holder.find('#pp_full_res')[0].innerHTML=settings.image_markup;$pp_pic_holder.find('#fullResImage').attr('src',pp_images[set_position]);imgPreloader.onload=function(){correctSizes=_fitToViewport(imgPreloader.width,imgPreloader.height);_showContent();};imgPreloader.onerror=function(){alert('Image cannot be loaded. Make sure the path is correct and image exist.');$.prettyPhoto.close();};imgPreloader.src=pp_images[set_position];break;case'youtube':correctSizes=_fitToViewport(movie_width,movie_height);movie='http://www.youtube.com/v/'+grab_param('v',pp_images[set_position]);if(settings.autoplay)movie+="&autoplay=1";toInject=settings.flash_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,movie);break;case'vimeo':correctSizes=_fitToViewport(movie_width,movie_height);movie_id=pp_images[set_position];var regExp=/http:\/\/(www\.)?vimeo.com\/(\d+)/;var match=movie_id.match(regExp);movie='http://player.vimeo.com/video/'+match[2]+'?title=0&amp;byline=0&amp;portrait=0';if(settings.autoplay)movie+="&autoplay=1;";vimeo_width=correctSizes['width']+'/embed/?moog_width='+correctSizes['width'];toInject=settings.iframe_markup.replace(/{width}/g,vimeo_width).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,movie);break;case'quicktime':correctSizes=_fitToViewport(movie_width,movie_height);correctSizes['height']+=15;correctSizes['contentHeight']+=15;correctSizes['containerHeight']+=15;toInject=settings.quicktime_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,pp_images[set_position]).replace(/{autoplay}/g,settings.autoplay);break;case'flash':correctSizes=_fitToViewport(movie_width,movie_height);flash_vars=pp_images[set_position];flash_vars=flash_vars.substring(pp_images[set_position].indexOf('flashvars')+10,pp_images[set_position].length);filename=pp_images[set_position];filename=filename.substring(0,filename.indexOf('?'));toInject=settings.flash_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{wmode}/g,settings.wmode).replace(/{path}/g,filename+'?'+flash_vars);break;case'iframe':correctSizes=_fitToViewport(movie_width,movie_height);frame_url=pp_images[set_position];frame_url=frame_url.substr(0,frame_url.indexOf('iframe')-1);toInject=settings.iframe_markup.replace(/{width}/g,correctSizes['width']).replace(/{height}/g,correctSizes['height']).replace(/{path}/g,frame_url);break;case'custom':correctSizes=_fitToViewport(movie_width,movie_height);toInject=settings.custom_markup;break;case'inline':myClone=$(pp_images[set_position]).clone().css({'width':settings.default_width}).wrapInner('<div id="pp_full_res"><div class="pp_inline clearfix"></div></div>').appendTo($('body'));correctSizes=_fitToViewport($(myClone).width(),$(myClone).height());$(myClone).remove();toInject=settings.inline_markup.replace(/{content}/g,$(pp_images[set_position]).html());break;};if(!imgPreloader){$pp_pic_holder.find('#pp_full_res')[0].innerHTML=toInject;_showContent();};});return false;};
					$.prettyPhoto.changePage=function(direction){currentGalleryPage=0;if(direction=='previous'){set_position--;if(set_position<0){set_position=0;return;}}else if(direction=='next'){set_position++;if(set_position>$(pp_images).size()-1){set_position=0;}}else{set_position=direction;};if(!doresize)doresize=true;$('.pp_contract').removeClass('pp_contract').addClass('pp_expand');_hideContent(function(){$.prettyPhoto.open();});};$.prettyPhoto.changeGalleryPage=function(direction){if(direction=='next'){currentGalleryPage++;if(currentGalleryPage>totalPage){currentGalleryPage=0};}else if(direction=='previous'){currentGalleryPage--;if(currentGalleryPage<0){currentGalleryPage=totalPage;}}else{currentGalleryPage=direction;};itemsToSlide=(currentGalleryPage==totalPage)?pp_images.length-((totalPage)*itemsPerPage):itemsPerPage;$pp_pic_holder.find('.pp_gallery li').each(function(i){$(this).animate({'left':(i*itemWidth)-((itemsToSlide*itemWidth)*currentGalleryPage)});});};$.prettyPhoto.startSlideshow=function(){setTimeout(function(){resp()},450);if(typeof pp_slideshow=='undefined'){$pp_pic_holder.find('.pp_play').unbind('click').removeClass('pp_play totalsoft totalsoft-<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PType;?>').addClass('pp_pause totalsoft totalsoft-<?php echo str_replace("play","pause", $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PType); ?>').click(function(){$.prettyPhoto.stopSlideshow();return false;});pp_slideshow=setInterval($.prettyPhoto.startSlideshow,settings.slideshow);}else{$.prettyPhoto.changePage('next');};}
					$.prettyPhoto.stopSlideshow=function(){$pp_pic_holder.find('.pp_pause').unbind('click').removeClass('pp_pause totalsoft totalsoft-<?php echo str_replace("play","pause", $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PType); ?>').addClass('pp_play totalsoft totalsoft-<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PType;?>').click(function(){$.prettyPhoto.startSlideshow();return false;});clearInterval(pp_slideshow);pp_slideshow=undefined;}
					$.prettyPhoto.close=function(){clearInterval(pp_slideshow);$pp_pic_holder.stop().find('object,embed').css('visibility','hidden');$('div.pp_pic_holder,div.ppt,.pp_fade').fadeOut(settings.animation_speed,function(){$(this).remove();});$pp_overlay.fadeOut(settings.animation_speed,function(){if($.browser.msie&&$.browser.version==6)$('select').css('visibility','visible');if(settings.hideflash)$('object,embed').css('visibility','visible');$(this).remove();$(window).unbind('scroll');settings.callback();doresize=true;pp_open=false;delete settings;});};_showContent=function(){$('.pp_loaderIcon').hide();$ppt.fadeTo(settings.animation_speed,1);projectedTop=scroll_pos['scrollTop']+((windowHeight/2)-(correctSizes['containerHeight']/2));if(projectedTop<0)projectedTop=0;$pp_pic_holder.find('.pp_content').animate({'height':correctSizes['contentHeight']},settings.animation_speed);$pp_pic_holder.animate({'top':projectedTop,'left':(windowWidth/2)-(correctSizes['containerWidth']/2),'width':correctSizes['containerWidth']},settings.animation_speed,function(){$pp_pic_holder.find('.pp_hoverContainer,#fullResImage').height(correctSizes['height']).width(correctSizes['width']);$pp_pic_holder.find('.pp_fade').fadeIn(settings.animation_speed);if(isSet&&_getFileType(pp_images[set_position])=="image"){$pp_pic_holder.find('.pp_hoverContainer').show()}else{$pp_pic_holder.find('.pp_hoverContainer').hide();}
					if(correctSizes['resized'])$('a.pp_expand,a.pp_contract').fadeIn(settings.animation_speed);if(settings.autoplay_slideshow&&!pp_slideshow&&!pp_open)$.prettyPhoto.startSlideshow();settings.changepicturecallback();pp_open=true;});_insert_gallery();};function _hideContent(callback){$pp_pic_holder.find('#pp_full_res object,#pp_full_res embed').css('visibility','hidden');$pp_pic_holder.find('.pp_fade').fadeOut(settings.animation_speed,function(){$('.pp_loaderIcon').show();callback();});};function _checkPosition(setCount){if(set_position==setCount-1){$pp_pic_holder.find('a.pp_next').css('visibility','hidden');$pp_pic_holder.find('a.pp_next').addClass('disabled').unbind('click');}else{$pp_pic_holder.find('a.pp_next').css('visibility','visible');$pp_pic_holder.find('a.pp_next.disabled').removeClass('disabled').bind('click',function(){$.prettyPhoto.changePage('next');return false;});};if(set_position==0){$pp_pic_holder.find('a.pp_previous').css('visibility','hidden').addClass('disabled').unbind('click');}else{$pp_pic_holder.find('a.pp_previous.disabled').css('visibility','visible').removeClass('disabled').bind('click',function(){$.prettyPhoto.changePage('previous');return false;});};(setCount>1)?$('.pp_nav').show():$('.pp_nav').hide();};function _fitToViewport(width,height){resized=false;_getDimensions(width,height);imageWidth=width,imageHeight=height;if(((pp_containerWidth+60>windowWidth)||(pp_containerHeight+60>windowHeight))&&doresize&&settings.allow_resize&&!percentBased){resized=true,fitting=false;while(!fitting){if((pp_containerWidth+60>windowWidth)){imageWidth=(windowWidth-200);imageHeight=(height/width)*imageWidth;}else if((pp_containerHeight+60>windowHeight)){imageHeight=(windowHeight-200);imageWidth=(width/height)*imageHeight;}else{fitting=true;};pp_containerHeight=imageHeight,pp_containerWidth=imageWidth;};_getDimensions(imageWidth,imageHeight);};return{width:Math.floor(imageWidth),height:Math.floor(imageHeight),containerHeight:Math.floor(pp_containerHeight),containerWidth:Math.floor(pp_containerWidth)+40,contentHeight:Math.floor(pp_contentHeight),contentWidth:Math.floor(pp_contentWidth),resized:resized};};function _getDimensions(width,height){width=parseFloat(width);height=parseFloat(height);$pp_details=$pp_pic_holder.find('.pp_details');$pp_details.width(width);detailsHeight=parseFloat($pp_details.css('marginTop'))+parseFloat($pp_details.css('marginBottom'));$pp_details=$pp_details.clone().appendTo($('body')).css({'position':'absolute','top':-10000});detailsHeight+=$pp_details.height();detailsHeight=(detailsHeight<=34)?36:detailsHeight;if($.browser.msie&&$.browser.version==7)detailsHeight+=8;$pp_details.remove();pp_contentHeight=height+detailsHeight;pp_contentWidth=width;pp_containerHeight=pp_contentHeight+$ppt.height()+$pp_pic_holder.find('.pp_top').height()+$pp_pic_holder.find('.pp_bottom').height();pp_containerWidth=width;}
					function _getFileType(itemSrc){if(itemSrc.match(/youtube\.com\/watch/i)){return'youtube';}else if(itemSrc.match(/vimeo\.com/i)){return'vimeo';}else if(itemSrc.indexOf('.mov')!=-1){return'quicktime';}else if(itemSrc.indexOf('.swf')!=-1){return'flash';}else if(itemSrc.indexOf('iframe')!=-1){return'iframe';}else if(itemSrc.indexOf('custom')!=-1){return'custom';}else if(itemSrc.substr(0,1)=='#'){return'inline';}else{return'image';};};function _center_overlay(){if(doresize&&typeof $pp_pic_holder!='undefined'){scroll_pos=_get_scroll();titleHeight=$ppt.height(),contentHeight=$pp_pic_holder.height(),contentwidth=$pp_pic_holder.width();projectedTop=(windowHeight/2)+scroll_pos['scrollTop']-(contentHeight/2);$pp_pic_holder.css({'top':projectedTop,'left':(windowWidth/2)+scroll_pos['scrollLeft']-(contentwidth/2)});};};function _get_scroll(){if(self.pageYOffset){return{scrollTop:self.pageYOffset,scrollLeft:self.pageXOffset};}else if(document.documentElement&&document.documentElement.scrollTop){return{scrollTop:document.documentElement.scrollTop,scrollLeft:document.documentElement.scrollLeft};}else if(document.body){return{scrollTop:document.body.scrollTop,scrollLeft:document.body.scrollLeft};};};function _resize_overlay(){windowHeight=$(window).height(),windowWidth=$(window).width();if(typeof $pp_overlay!="undefined")$pp_overlay.height($(document).height());};function _insert_gallery(){if(isSet&&settings.overlay_gallery&&_getFileType(pp_images[set_position])=="image"){itemWidth=52+5;navWidth=(settings.theme=="facebook")?58:38;itemsPerPage=Math.floor((correctSizes['containerWidth']-100-navWidth)/itemWidth);itemsPerPage=(itemsPerPage<pp_images.length)?itemsPerPage:pp_images.length;totalPage=Math.ceil(pp_images.length/itemsPerPage)-1;if(totalPage==0){navWidth=0;$pp_pic_holder.find('.pp_gallery .pp_arrow_next,.pp_gallery .pp_arrow_previous').hide();}else{$pp_pic_holder.find('.pp_gallery .pp_arrow_next,.pp_gallery .pp_arrow_previous').show();};galleryWidth=itemsPerPage*itemWidth+navWidth;$pp_pic_holder.find('.pp_gallery').width(galleryWidth).css('margin-left',-(galleryWidth/2));$pp_pic_holder.find('.pp_gallery ul').width(itemsPerPage*itemWidth).find('li.selected').removeClass('selected');goToPage=(Math.floor(set_position/itemsPerPage)<=totalPage)?Math.floor(set_position/itemsPerPage):totalPage;if(itemsPerPage){$pp_pic_holder.find('.pp_gallery').hide().show().removeClass('disabled');}else{$pp_pic_holder.find('.pp_gallery').hide().addClass('disabled');}
					$.prettyPhoto.changeGalleryPage(goToPage);$pp_pic_holder.find('.pp_gallery ul li:eq('+set_position+')').addClass('selected');}else{$pp_pic_holder.find('.pp_content').unbind('mouseenter mouseleave');$pp_pic_holder.find('.pp_gallery').hide();}}
					function _buildOverlay(caller){theRel=$(caller).attr('rel');galleryRegExp=/\[(?:.*)\]/;isSet=(galleryRegExp.exec(theRel))?true:false;pp_images=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return $(n).attr('href');}):$.makeArray($(caller).attr('href'));pp_titles=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return($(n).find('img').attr('alt'))?$(n).find('img').attr('alt'):"";}):$.makeArray($(caller).find('img').attr('alt'));pp_descriptions=(isSet)?jQuery.map(matchedObjects,function(n,i){if($(n).attr('rel').indexOf(theRel)!=-1)return($(n).attr('title'))?$(n).attr('title'):"";}):$.makeArray($(caller).attr('title'));$('body').append(settings.markup);$pp_pic_holder=$('.pp_pic_holder'),$ppt=$('.ppt'),$pp_overlay=$('div.pp_overlay');if(isSet&&settings.overlay_gallery){currentGalleryPage=0;toInject="";for(var i=0;i<pp_images.length;i++){var regex=new RegExp("(.*?)\.(jpg|jpeg|png|gif)$");var results=regex.exec(pp_images[i]);if(!results){classname='default';}else{classname='';}
					toInject+="<li class='"+classname+"'><a href='#'><img src='"+pp_images[i]+"' width='50' alt='' /></a></li>";};toInject=settings.gallery_markup.replace(/{gallery}/g,toInject);$pp_pic_holder.find('#pp_full_res').after(toInject);$pp_pic_holder.find('.pp_gallery .pp_arrow_next').click(function(){$.prettyPhoto.changeGalleryPage('next');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder.find('.pp_gallery .pp_arrow_previous').click(function(){$.prettyPhoto.changeGalleryPage('previous');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder.find('.pp_content').hover(function(){$pp_pic_holder.find('.pp_gallery:not(.disabled)').fadeIn();},function(){$pp_pic_holder.find('.pp_gallery:not(.disabled)').fadeOut();});itemWidth=52+5;$pp_pic_holder.find('.pp_gallery ul li').each(function(i){$(this).css({'position':'absolute','left':i*itemWidth});$(this).find('a').unbind('click').click(function(){$.prettyPhoto.changePage(i);$.prettyPhoto.stopSlideshow();return false;});});};if(settings.slideshow){$pp_pic_holder.find('.pp_nav').prepend('<i class="totalsoft-port-cpop-pl-pa pp_play totalsoft totalsoft-<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PType;?>"></i>')
					$pp_pic_holder.find('.pp_nav .pp_play').click(function(){$.prettyPhoto.startSlideshow();return false;});};setTimeout(function(){resp();},650);$pp_pic_holder.attr('class','pp_pic_holder '+settings.theme);$pp_overlay.css({'opacity':0,'height':$(document).height(),'width':$(document).width()}).bind('click',function(){if(!settings.modal)$.prettyPhoto.close();});$('i.pp_close').bind('click',function(){$.prettyPhoto.close();return false;});$('a.pp_expand').bind('click',function(e){if($(this).hasClass('pp_expand')){$(this).removeClass('pp_expand').addClass('pp_contract');doresize=false;}else{$(this).removeClass('pp_contract').addClass('pp_expand');doresize=true;};_hideContent(function(){$.prettyPhoto.open();});return false;});$pp_pic_holder.find('.pp_previous, .pp_nav .pp_arrow_previous').bind('click',function(){setTimeout(function(){resp()},450);$.prettyPhoto.changePage('previous');$.prettyPhoto.stopSlideshow();return false;});$pp_pic_holder.find('.pp_next, .pp_nav .pp_arrow_next').bind('click',function(){setTimeout(function(){resp()},450);$.prettyPhoto.changePage('next');$.prettyPhoto.stopSlideshow();return false;});_center_overlay();};return this.unbind('click').click($.prettyPhoto.initialize)};function grab_param(name,url){name=name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");var regexS="[\\?&]"+name+"=([^&#]*)";var regex=new RegExp(regexS);var results=regex.exec(url);return(results==null)?"":results[1];}})(jQuery);
				    </script>
				    <style type="text/css">
						
				    	div.pp_pic_holder
						{
							background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_BgC;?>;
							border: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_BW;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_BS;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_BC;?>;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_BR;?>px;
						}
						.pp_description
						{
							display: <?php if($TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TShow=='false'){echo 'none';}?>;
							text-align: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TTA;?>;
							font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TFS;?>px;
							font-family: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TFF;?>;
							color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TC;?>;
						}
						.totalsoft-port-cpop-pl-pa
						{
							font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PIS;?>px;
							color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_PIC;?>;
							
						}

				    	.totalsoft-port-cpop-close
				    	{
				    		font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_CIS;?>px;
							color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_CIC;?>;
							
						}
						.totalsoft-port-cpop-close span
						{
							font-family: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_CTF;?>;
							margin-left:3px;
						}
						.totalsoft-port-cpop-nepr
						{
							font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_ArrS;?>px;
							color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_ArrC;?>; 
						}
						.totalsoft-port-cpop-text
						{
							font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_NFS;?>px;
							color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_NC;?>; 
						}
				    	.totalsoft-portfolio-categ
				    	{
				    		background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_MBgC;?>;
				    		<?php if($TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_SM!='true'){ ?>
				    			display: none;
				    		<?php }?>
				    		font-family: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_FF;?>;
				    		font-size: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_FS;?>px;
				    	}
				    	.totalsoft-portfolio-categ li
				    	{
				    		background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_BgC;?>;
				    		color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_C;?>;
				    	}
				    	.totalsoft-portfolio-categ li a
				    	{
				    		color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_C;?>;
				    	}
				    	.totalsoft-portfolio-categ li.active
				    	{
				    		background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_CurBgC;?>;
				    		color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_CurC;?>;
				    	}
				    	.totalsoft-portfolio-categ li.active a
				    	{
				    		color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_CurC;?>;
				    	}
				    	.totalsoft-portfolio-categ li:hover
				    	{
				    		background-color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_HBgC;?>;
				    		color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_HC;?>;
				    	}
				    	.totalsoft-portfolio-categ li:hover a
				    	{
				    		color: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_HC;?>;
				    	}
						.totalsoft-portfolio-area li
						{
							display:inline-block;
							overflow: hidden;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBW;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBS;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBC;?>; 
							width: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_W;?>px;
							height:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_W*3/4;?>px;
							position:relative;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
							margin:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_PB;?>px;
							box-shadow:0 0 <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_BoxSh;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_BoxShC;?>;
							perspective:800px !important;
						}
						.totalsoft-image-block{ 
							display:block;
							position: absolute;
							width:100%;
							height:100%;
						}
						.totalsoft-image-block img{
							
							background:#FFFFFF;
							width:100%; 
							height: 100%;
							max-width:none !important;
						}
						.TotPortImgHov1{
							position:absolute;
							top:0px;
							left:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							-ms-transform:rotate(0deg);
							-webkit-transform:rotate(0deg);
							transform:rotate(0deg);
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgHov1{
							width:200%;
							height:200%;
							left:-50%;
							top:-50%;
							-ms-transform:rotate(25deg);
							-webkit-transform:rotate(25deg);
							transform:rotate(25deg);
						}
						.TotPortImgHov2{
							position:absolute;
							top:0px;
							left:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							-ms-transform:rotate(0deg);
							-webkit-transform:rotate(0deg);
							transform:rotate(0deg);
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
							-webkit-transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
							-ms-transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
							-o-transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
							-moz-transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgHov2{
							width:200%;
							height:200%;
							left:-50%;
							top:-50%;
							-ms-transform:rotate(-25deg);
							-webkit-transform:rotate(-25deg);
							transform:rotate(-25deg);
						}
						.TotPortImgHov3{
							position:absolute;
							top:0px;
							left:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							-ms-transform:rotate(0deg);
							-webkit-transform:rotate(0deg);
							transform:rotate(0deg);
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgHov3{
							width:150%;
							height:150%;
						}
						.TotPortImgHov4{
							position:absolute;
							top:0px;
							left:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							-ms-transform:rotate(0deg);
							-webkit-transform:rotate(0deg);
							transform:rotate(0deg);
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgHov4{
							width:150%;
							height:150%;
							left:-25%;
							top:-25%;
						}
						.TotPortImgHov5{
							position:absolute;
							top:0px;
							right:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							-ms-transform:rotate(0deg);
							-webkit-transform:rotate(0deg);
							transform:rotate(0deg);
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgHov5{
							width:150%;
							height:150%;
						}
						.TotPortImgHov6{
							position:absolute;
							bottom:0px;
							right:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							-ms-transform:rotate(0deg);
							-webkit-transform:rotate(0deg);
							transform:rotate(0deg);
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgHov6{
							width:150%;
							height:150%;
						}
						.TotPortImgHov7{
							position:absolute;
							bottom:0px;
							left:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							-ms-transform:rotate(0deg);
							-webkit-transform:rotate(0deg);
							transform:rotate(0deg);
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Effect_Time/10;?>s linear;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgHov7{
							width:150%;
							height:150%;
						}
						
						.TotPortImgOv1{
							position:absolute;
							top:0px;
							left:0px;
							width:100%;
							height:100%;
							max-width:none !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?>;
							opacity:0;
							transition:all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv1{
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?>;
						}
						.TotPortImgOv2{
							position:absolute !important;
							top:0% !important;
							left:100% !important;
							width:100% !important;
							height:100% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transform:rotate(-90deg) !important;
							-ms-transform:rotate(-90deg) !important;
							-webkit-transform:rotate(-90deg) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv2{
							left:0% !important;
							top:0% !important;
							transform:rotate(0deg) !important;
							-ms-transform:rotate(0deg) !important;
							-webkit-transform:rotate(0deg) !important;
						}
						.TotPortImgOv3{
							position:absolute !important;
							top:0% !important;
							left:100% !important;
							width:100% !important;
							height:100% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transform:rotateY(-180deg) !important;
							-ms-transform:rotateY(-180deg) !important;
							-webkit-transform:rotateY(-180deg) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv3{
							left:0% !important;
							top:0% !important;
							transform:rotateY(0deg) !important;
							-ms-transform:rotateY(0deg) !important;
							-webkit-transform:rotateY(0deg) !important;
						}					
						.TotPortImgOv4{
							position:absolute !important;
							top:50% !important;
							left:50% !important;
							width:0% !important;
							height:0% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
							-ms-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) rotate(-180deg) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv4{
							left:0% !important;
							top:0% !important;
							width:100% !important;
							height:100% !important;
							transform:rotate(0deg) !important;
							-ms-transform:rotate(0deg) !important;
							-webkit-transform:rotate(0deg) !important;
						}
						.TotPortImgOv5{
							position:absolute !important;
							top:50% !important;
							left:50% !important;
							width:0% !important;
							height:0% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
							-ms-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) rotateX(-180deg) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv5{
							width:100% !important;
							height:100% !important;
							transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
							-ms-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) rotateX(0deg) !important;
						}
						.TotPortImgOv6{
							position:absolute !important;
							top:50% !important;
							left:50% !important;
							width:0% !important;
							height:0% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
							-ms-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) rotateY(-180deg) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv6{
							width:100% !important;
							height:100% !important;
							transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
							-ms-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) rotateY(0deg) !important;
						}
						.TotPortImgOv7{
							position:absolute !important;
							top:50% !important;
							left:50% !important;
							width:0% !important;
							height:0% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv7{
							left:0% !important;
							top:0% !important;
							width:100% !important;
							height:100% !important;
						}
						.TotPortImgOv8{
							position:absolute !important;
							top:50% !important;
							left:0% !important;
							width:100% !important;
							height:0% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							visibility:hidden !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv8{
							top:0% !important;
							height:100% !important;
							visibility:visible !important;
						}
						.TotPortImgOv9{
							position:absolute !important;
							top:0% !important;
							left:50% !important;
							width:0% !important;
							height:100% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv9{
							left:0% !important;
							width:100% !important;
						}
						.TotPortImgOv10{
							position:absolute !important;
							top:-100% !important;
							left:0% !important;
							width:100% !important;
							height:100% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv10{
							top:0% !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
						}
						.TotPortImgOv11{
							position:absolute !important;
							top:0% !important;
							left:0% !important;
							width:100% !important;
							height:100% !important;
							border:20px solid red !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.totalsoft-portfolio-area li:hover .TotPortImgOv11{
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
						}
						.TotPortImgOv12{
							position:absolute !important;
							top:0% !important;
							left:0% !important;
							width:100% !important;
							height:100% !important;
							border:20px solid red !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						.TotPortImgOv13{
							position:absolute !important;
							top:0% !important;
							left:0% !important;
							width:100% !important;
							height:100% !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Time/10;?>s linear !important;
							border-radius: <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_VBR;?>px;
						}
						
						.TotPortHovTit1{
							position:absolute !important;
							top:-55% !important;
							width:100% !important;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							padding:1px 0px !important;
							text-align:center !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit1{
							top:5% !important;
						}
						.TotPortHovTit2{
							position:absolute !important;
							top:5% !important;
							left:100% !important;
							transform:rotate(-90deg) !important;
							-ms-transform:rotate(-90deg) !important;
							-webkit-transform:rotate(-90deg) !important;
							width:100% !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							padding:1px 0px !important;
							text-align:center !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit2{
							left:0% !important;
							transform:rotate(0deg) !important;
							-ms-transform:rotate(0deg) !important;
							-webkit-transform:rotate(0deg) !important;
						}
						.TotPortHovTit3{
							position:absolute !important;
							top:10% !important;
							left:15% !important;
							width:70% !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:0px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							padding:0px 0px !important;
							text-align:center !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Bg_Color;?> !important;
							opacity:0 !important;
							transition: all 0s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit3{
							left:0% !important;
							top:5% !important;
							width:100% !important;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Transparency/100;?> !important;
							padding:1px 0px !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}					
						.TotPortHovTit4{
							position:absolute !important;
							top:25% !important;
							left:0% !important;
							width:100% !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							padding:1px 0px !important;
							text-align:center !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit4{
							top:5% !important;
						}
						.TotPortHovTit5{
							position:absolute !important;
							top:5% !important;
							width:100% !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							padding:1px 0px !important;
							text-align:center !important;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Bg_Color;?> !important;
							opacity:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.TotPortHovTit6{
							position:absolute !important;
							top:50% !important;
							left:0% !important;
							width:100% !important;
							display:inline !important;
							padding:0px !important;
							margin:0px !important;
							transform:translateY(-50%) !important;
							-ms-transform:translateY(-50%) !important;
							-webkit-transform:translateY(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							text-align:center !important;
							opacity:1 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit6{
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size-5;?>px;
							opacity:0 !important;
						}
						.TotPortHovTit7{
							position:absolute !important;
							top:100% !important;
							left:0% !important;
							width:100% !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							background:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Bg_Color;?> !important;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							text-align:center !important;
							transform:translateY(0%);
							-ms-transform:translateY(0%);
							-webkit-transform:translateY(0%);
							opacity<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Transparency/100;?> !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit7{
							top:0% !important;
						}
						.TotPortHovTit8{
							position:absolute !important;
							top:50% !important;
							right:0% !important;
							width:85% !important;
							display:inline !important;
							padding:0px !important;
							margin:0px !important;
							transform:translateY(-50%) !important;
							-ms-transform:translateY(-50%) !important;
							-webkit-transform:translateY(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							text-align:left !important;
							opacity:1 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.TotPortHovTit9{
							position:absolute !important;
							top:40% !important;
							left:0% !important;
							width:100% !important;
							display:inline !important;
							padding:0px !important;
							margin:0px !important;
							transform:translateY(-50%) !important;
							-ms-transform:translateY(-50%) !important;
							-webkit-transform:translateY(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							text-align:center !important;
							opacity:1 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.TotPortHovTit10{
							position:absolute !important;
							top:20% !important;
							left:0% !important;
							width:0% !important;
							display:inline !important;
							padding:0px !important;
							margin:0px !important;
							left:50% !important;
							font-size:0px;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							text-align:center !important;
							opacity:1 !important;
							transition: all 0s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit10{
							width:100% !important;
							top:30% !important;
							left:0% !important;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.TotPortHovTit11{
							position:absolute !important;
							top:20% !important;
							left:10% !important;
							width:40% !important;
							display:inline !important;
							transform:translateX(0%) !important;
							-ms-transform:translateX(0%) !important;
							-webkit-transform:translateX(0%) !important;
							padding:0px !important;
							margin:0px !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Color;?> !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovTit11{
							top:30% !important;
							left:50% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							opacity:1 !important;
						}
						
						.TotPortHovLine1{
							position:absolute !important;
							width:10% !important;
							height:10% !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							top:50% !important;
							left:50% !important;
							opacity:0 !important;
							transform:translateY(-50%) translateX(-50%) !important;
							-ms-transform:translateY(-50%) translateX(-50%) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLine1{
							width:90% !important;
							height:90% !important;
							opacity:1 !important;
						}					
						.TotPortHovLine2{
							position:absolute !important;
							width:110% !important;
							height:110% !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							top:50% !important;
							left:50% !important;
							opacity:0 !important;
							transform:translateY(-50%) translateX(-50%) !important;
							-ms-transform:translateY(-50%) translateX(-50%) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLine2{
							width:90% !important;
							height:90% !important;
							opacity:1 !important;
						}
						.TotPortHovLine3{
							position:absolute !important;
							width:90% !important;
							height:90% !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							border-right:0px solid #fff !important;
							top:50% !important;
							left:40% !important;
							opacity:0 !important;
							transform:translateY(-50%) translateX(-50%) !important;
							-ms-transform:translateY(-50%) translateX(-50%) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLine3{
							left:50% !important;
							opacity:1 !important;
						}
						.TotPortHovLine4{
							position:absolute !important;
							width:0% !important;
							height:0% !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							top:50% !important;
							left:10% !important;
							opacity:0 !important;
							transform:translateY(-50%) translateX(0%) !important;
							-ms-transform:translateY(-50%) translateX(0%) !important;
							-webkit-transform:translateY(-50%) translateX(0%) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLine4{
							width:80% !important;
							opacity:1 !important;
						}
						.TotPortHovLine5{
							position:absolute !important;
							width:0% !important;
							height:90% !important;
							border-top:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							border-bottom:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							top:50% !important;
							left:50% !important;
							opacity:0 !important;
							transform:translateY(-50%) translateX(-50%) !important;
							-ms-transform:translateY(-50%) translateX(-50%) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLine5{
							width:80% !important;
							opacity:1 !important;
						}
						.TotPortHovLine6{
							position:absolute !important;
							width:120px !important;
							height:120px !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							border-radius:50% !important;
							top:100% !important;
							left:100% !important;
							opacity:0 !important;
							transform:translateY(-50%) translateX(-50%) !important;
							-ms-transform:translateY(-50%) translateX(-50%) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLine6{
							top:50% !important;
							left:50% !important;
							opacity:1 !important;
						}
						.TotPortHovLine7{
							position:absolute !important;
							width:0px !important;
							height:0px !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Color;?> !important;
							top:50% !important;
							left:50% !important;
							opacity:0 !important;
							transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
							-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) rotate(0deg) !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLine7{
							width:100px !important;
							height:100px !important;
							transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
							-ms-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) rotate(45deg) !important;
							opacity:1 !important;
						}
						
						.TotPortHovLink1{
							position:absolute !important;
							top:40% !important;
							left:50% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-size:0px;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:5px 0px !important;
							text-align:center !important;
							opacity:1 !important;
							transition: all 0s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink1{
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.TotPortHovLink2{
							position:absolute !important;
							top:40% !important;
							left:50% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:5px 0px !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink2{
							opacity:1 !important;
						}
						.TotPortHovLink3{
							position:absolute !important;
							top:70% !important;
							left:5% !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:5px 0px !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink3{
							left:15% !important;
							opacity:1 !important;
						}
						.TotPortHovLink4{
							position:absolute !important;
							top:50% !important;
							left:90% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:5px 0px !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink4{
							left:50% !important;
							opacity:1 !important;
						}
						.TotPortHovLink5{
							position:absolute !important;
							top:80% !important;
							left:50% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:0px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:5px 0px !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all 0s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink5{
							top:50% !important;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							opacity:1 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.TotPortHovLink6{
							position:absolute !important;
							top:50% !important;
							left:40% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:5px 0px !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink6{
							left:50% !important;
							opacity:1 !important;
						}
						.TotPortHovLink7{
							position:absolute !important;
							top:60% !important;
							left:50% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:0px 7px !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Color;?> !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink7{
							opacity:1 !important;
						}
						.TotPortHovLink8{
							position:absolute !important;
							top:-100% !important;
							left:50% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:0px 7px !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Color;?> !important;
							text-align:center !important;
							opacity:1 !important;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink8{
							opacity:1 !important;
							top:60% !important;
						}
						.TotPortHovLink9{
							position:absolute !important;
							top:60% !important;
							left:50% !important;
							transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							font-family:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_FF;?>;
							font-size:0px;
							color:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Color;?> !important;
							padding:0px 7px !important;
							border:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Width;?>px <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Style;?> <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Border_Color;?> !important;
							text-align:center !important;
							opacity:0 !important;
							transition: all 0s linear !important;
						}
						.totalsoft-portfolio-area li:hover .TotPortHovLink9{
							opacity:1 !important;
							font-size:<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>px;
							transition: all <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Time/10;?>s linear !important;
						}
						.TotPortHovLink,.TotPortHovLink:hover{
							text-decoration:none;
						}
						.TotPortHovLink:focus{
							border:none;
						}
				    </style>
		 			<div class="totalsoft-wrapper">
					   	<div class="totalsoft-portfolio-content">	
					   		<ul class="totalsoft-portfolio-categ filter">
						      	<li class="all active"><a href="#"><?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_TSA;?></a></li>
						      	<?php for($i=0;$i<count($TotalSoftPortfolioAlbums);$i++){ ?> 
						        	<li class="portfolio-totalsoft-album-<?php echo $i;?>"><a href="#" title="<?php echo $TotalSoftPortfolioAlbums[$i]->TotalSoftPortfolio_ATitle;?>"><?php echo $TotalSoftPortfolioAlbums[$i]->TotalSoftPortfolio_ATitle;?></a></li>
						      	<?php }?>
					        </ul>
							<ul class="totalsoft-portfolio-area" style='padding:0px;margin:0px;text-align:center;'>	
								<?php for($i=0;$i<$TotalSoftPortfolioManager[0]->TotalSoftPortfolio_AlbumCount;$i++){
				            		$TSoftPort_ContPop_Images=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE TotalSoftPortfolio_IA=%s", $TotalSoftPortfolioAlbums[$i]->TotalSoftPortfolio_ATitle));
				            			for($j=0;$j<count($TSoftPort_ContPop_Images);$j++){ ?>
				            				<li class="totalsoft-portfolio-item2" data-id="id-<?php echo $i . $j;?>" data-type="portfolio-totalsoft-album-<?php echo $i;?>">
				            					 <div>
									                <span class="totalsoft-image-block">
														<a class="totalsoft-image-zoom" href="<?php echo $TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_IURL;?>" rel="prettyPhoto[gallery]" title="<?php if($TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TShow=='true'){ echo $TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_IT;} ?>">
															<img class='TotPortImgOv <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Img_Zoom_Type;?>' src="<?php echo $TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_IURL;?>" alt="<?php echo $TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_IT;?>" title="<?php echo $TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_IT;?>" />
															<div class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Hov_Ov_Effect_Type;?>'>
															
															</div>
															<h2 class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Effect_Type;?>' >
																<?php echo $TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_IT;?>
															</h2>
															<div class='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Line_Hov_Type;?>'>
																
															</div>
															<?php if($TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_ILink != ''){ ?>
															<a href='<?php echo $TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_ILink ?>'  class='TotPortHovLink <?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Hov_Type;?>' <?php if($TSoftPort_ContPop_Images[$j]->TotalSoftPortfolio_IONT=='true'){echo 'target="_blank"';}?>>
																<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Text;?>
															</a>
															<?php } ?>
														</a>
									                </span>
												</div>
								            </li>
								<?php }} ?>												
					            <div class="column-clear"></div>
							</ul>
						</div>
					</div>
					<input type='text' style='display:none;' class='NavMenuFS' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Nav_FS;?>'>
					<input type='text' style='display:none;' class='portImgWidth' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_W;?>'>
					<input type='text' style='display:none;' class='portImgHeight' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_W*3/4;?>'>
					<input type='text' style='display:none;' class='portTitFS' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Title_Font_Size;?>'>
					<input type='text' style='display:none;' class='portLinkFS' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Link_Font_Size;?>'>
					<input type='text' style='display:none;' class='portPoppTitleFS' value='<?php echo $TotalSoftPortfolioOption[0]->TotalSoft_Port_CP_Pop_TFS;?>'>
					<script>
						jQuery(document).ready(function(){
							var NavMenuFS=jQuery('.NavMenuFS').val();
							var portImgWidth=jQuery('.portImgWidth').val();
							var portImgHeight=jQuery('.portImgHeight').val();
							var portTitFS=jQuery('.portTitFS').val();
							var portLinkFS=jQuery('.portLinkFS').val();
							var portPoppTitleFS=jQuery('.portPoppTitleFS').val();
							jQuery('.totalsoft-portfolio-item2').click(function(){
								console.log('sadhfiouashfc');
							})
							function resp(){
								
								jQuery('.pp_description').animate('font-size',portPoppTitleFS*jQuery('#fullResImage').prop('naturalWidth')/(jQuery('#fullResImage').prop('naturalWidth')+150));
								jQuery('.totalsoft-portfolio-categ').css('font-size',NavMenuFS*jQuery('.totalsoft-portfolio-categ').width()/(jQuery('.totalsoft-portfolio-categ').width()+100));
							
								if(jQuery('.totalsoft-portfolio-area li').parent().width()<=500){
									jQuery('.totalsoft-portfolio-area li').css('width',portImgWidth*jQuery('.totalsoft-portfolio-area li').parent().width()/500);
									jQuery('.totalsoft-portfolio-area li').css('height',portImgHeight*jQuery('.totalsoft-portfolio-area li').parent().width()/500);
									for(i=1;i<=11;i++){
										if(i==3 || i==10){
											continue;
										}
										jQuery('.TotPortHovTit'+i).css('font-size',portTitFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+100));
									}
									jQuery('.totalsoft-portfolio-area li').hover(function(){
										jQuery('.TotPortHovTit3').css({'font-size':portTitFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+100)});
									},function(){
										jQuery('.TotPortHovTit3').css({'font-size':'0px'});
									})
									jQuery('.totalsoft-portfolio-area li').hover(function(){
										jQuery('.TotPortHovTit10').css({'font-size':portTitFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+100)});
									},function(){
										jQuery('.TotPortHovTit10').css({'font-size':'0px'});
									})
									for(i=1;i<=9;i++){
										if(i==1 || i==5 || i==9){
											continue;
										}
										jQuery('.TotPortHovLink'+i).css('font-size',portLinkFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+100));
									}
									jQuery('.totalsoft-portfolio-area li').hover(function(){
										jQuery('.TotPortHovLink5').css({'font-size':portLinkFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+100)});
									},function(){
										jQuery('.TotPortHovLink5').css({'font-size':'0px'});
									})
									jQuery('.totalsoft-portfolio-area li').hover(function(){
										jQuery('.TotPortHovLink9').css({'font-size':portLinkFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+100)});
									},function(){
										jQuery('.TotPortHovLink9').css({'font-size':'0px'});
									})
								}
								if(jQuery('.totalsoft-portfolio-area li').parent().width()<=300){
										jQuery('.totalsoft-portfolio-area li').css('width',jQuery('.totalsoft-portfolio-area li').parent().width());
										jQuery('.totalsoft-portfolio-area li').css('height',jQuery('.totalsoft-portfolio-area li').parent().width()*3/4+'px');
										for(i=1;i<=11;i++){
											if(i==3 || i==10){
												continue;
											}
											jQuery('.TotPortHovTit'+i).css('font-size',portTitFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+50));
										}
										jQuery('.totalsoft-portfolio-area li').hover(function(){
											jQuery('.TotPortHovTit3').css({'font-size':portTitFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+50)});
										},function(){
											jQuery('.TotPortHovTit3').css({'font-size':'0px'});
										})
										jQuery('.totalsoft-portfolio-area li').hover(function(){
											jQuery('.TotPortHovTit10').css({'font-size':portTitFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+50)});
										},function(){
											jQuery('.TotPortHovTit10').css({'font-size':'0px'});
										})
										for(i=1;i<=9;i++){
											if(i==1 || i==5 || i==9){
												continue;
											}
											jQuery('.TotPortHovLink'+i).css('font-size',portLinkFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+50));
										}
										jQuery('.totalsoft-portfolio-area li').hover(function(){
											jQuery('.TotPortHovLink5').css({'font-size':portLinkFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+50)});
										},function(){
											jQuery('.TotPortHovLink5').css({'font-size':'0px'});
										})
										jQuery('.totalsoft-portfolio-area li').hover(function(){
											jQuery('.TotPortHovLink9').css({'font-size':portLinkFS*jQuery('.totalsoft-portfolio-area li').width()/(jQuery('.totalsoft-portfolio-area li').width()+50)});
										},function(){
											jQuery('.TotPortHovLink9').css({'font-size':'0px'});
										})
									}
							}
							//jQuery(window).load(function(){
								resp();
							//})
							jQuery(window).resize(function(){
								resp();
							})
						})	
					</script>
	 			<?php }
 		 	echo $after_widget;
 		}
	}
?>
<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;

	$table_name  = $wpdb->prefix . "totalsoft_fonts";
	$table_name1 = $wpdb->prefix . "totalsoft_portfolio_settings";
	$table_name2 = $wpdb->prefix . "totalsoft_portfolio_dbt";
	$table_name3 = $wpdb->prefix . "totalsoft_portfolio_id";
	$table_name4 = $wpdb->prefix . "totalsoft_portfolio_manager";
	$table_name5 = $wpdb->prefix . "totalsoft_portfolio_albums";
	$table_name6 = $wpdb->prefix . "totalsoft_portfolio_images";
	$table_name7 = $wpdb->prefix . "totalsoft_portfolio_Elgrid";
	$table_name8 = $wpdb->prefix . "totalsoft_portfolio_Filgrid";
	$table_name9 = $wpdb->prefix . "totalsoft_portfolio_CPopup";

	$sql = 'CREATE TABLE IF NOT EXISTS ' .$table_name . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Font VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql1 = 'CREATE TABLE IF NOT EXISTS ' .$table_name1 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_SetID VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetName VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetType VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ContH VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_BgImage VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IW VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IH VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IBW VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IBS VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IBC VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IBR VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_NavS VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_NavRad VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_NavCol VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_NavCurCol VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_NavHovCol VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ArrowType VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ArrowCol VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ArrowSize VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ArrowUp VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ArrowLeft VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ArrowDown VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_ArrowRight VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql2 = 'CREATE TABLE IF NOT EXISTS ' .$table_name2 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_SetName VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetType VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql3 = 'CREATE TABLE IF NOT EXISTS ' .$table_name3 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		Portfolio_ID VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql4 = 'CREATE TABLE IF NOT EXISTS ' .$table_name4 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_Title VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_Option VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_AlbumCount VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql5 = 'CREATE TABLE IF NOT EXISTS ' .$table_name5 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_ATitle VARCHAR(255) NOT NULL,
		Portfolio_ID VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql6 = 'CREATE TABLE IF NOT EXISTS ' .$table_name6 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_IT VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IA VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IURL VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IDesc LONGTEXT NOT NULL,
		TotalSoftPortfolio_ILink VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_IONT VARCHAR(255) NOT NULL,
		Portfolio_ID VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql7 = 'CREATE TABLE IF NOT EXISTS ' .$table_name7 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_SetID VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetName VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetType VARCHAR(255) NOT NULL,
		TotalSoft_ElG_TSA VARCHAR(255) NOT NULL,
		TotalSoft_ElG_SM VARCHAR(255) NOT NULL,
		TotalSoft_ElG_FE VARCHAR(255) NOT NULL,
		TotalSoft_ElG_HE VARCHAR(255) NOT NULL,
		TotalSoft_ElG_HD VARCHAR(255) NOT NULL,
		TotalSoft_ElG_HI VARCHAR(255) NOT NULL,
		TotalSoft_ElG_ES VARCHAR(255) NOT NULL,
		TotalSoft_ElG_EH VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_CurBgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_CurC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_BgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_C VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_FS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_FF VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Nav_HC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LAM_W VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LAM_S VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LAM_C VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_W VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_H VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_BR VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_BS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_HO VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_TC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_TFS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Im_TFF VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LAT_W VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LAT_S VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LAT_C VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Pop_BgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Pop_TC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Pop_TFS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Pop_TFF VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Pop_DC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Pop_DFS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_Pop_DFF VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_BgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_C VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_FS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_FF VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_BW VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_BS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_BC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_BR VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LIP_HC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LBT_W VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LBT_S VARCHAR(255) NOT NULL,
		TotalSoft_ElG_LBT_C VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_BgC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_BSC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_IH VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_BW VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_BS VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_BC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_BR VARCHAR(255) NOT NULL,
		TotalSoft_ElG_T_CurBC VARCHAR(255) NOT NULL,
		TotalSoft_ElG_I_Type VARCHAR(255) NOT NULL,
		TotalSoft_ElG_I_Left VARCHAR(255) NOT NULL,
		TotalSoft_ElG_I_Right VARCHAR(255) NOT NULL,
		TotalSoft_ElG_I_S VARCHAR(255) NOT NULL,
		TotalSoft_ElG_I_C VARCHAR(255) NOT NULL,
		TotalSoft_ElG_I_HO VARCHAR(255) NOT NULL,
		TotalSoft_ElG_CI_Type VARCHAR(255) NOT NULL,
		TotalSoft_ElG_CI_Icon VARCHAR(255) NOT NULL,
		TotalSoft_ElG_CI_S VARCHAR(255) NOT NULL,
		TotalSoft_ElG_CI_C VARCHAR(255) NOT NULL,
		TotalSoft_ElG_CI_HO VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql8 = 'CREATE TABLE IF NOT EXISTS ' .$table_name8 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_SetID VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetName VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetType VARCHAR(255) NOT NULL,
		TotalSoft_FG_TSA VARCHAR(255) NOT NULL,
		TotalSoft_FG_Im_BW VARCHAR(255) NOT NULL,
		TotalSoft_FG_Im_BC VARCHAR(255) NOT NULL,
		TotalSoft_FG_PBI VARCHAR(255) NOT NULL,
		TotalSoft_FG_DSI VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_CurBgC VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_CurC VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_BgC VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_C VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_FS VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_FF VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_FG_Nav_HC VARCHAR(255) NOT NULL,
		TotalSoft_FG_TC VARCHAR(255) NOT NULL,
		TotalSoft_FG_TFS VARCHAR(255) NOT NULL,
		TotalSoft_FG_TFF VARCHAR(255) NOT NULL,
		TotalSoft_FG_DShow VARCHAR(255) NOT NULL,
		TotalSoft_FG_DC VARCHAR(255) NOT NULL,
		TotalSoft_FG_DFS VARCHAR(255) NOT NULL,
		TotalSoft_FG_DFF VARCHAR(255) NOT NULL,
		TotalSoft_FG_TDBgC VARCHAR(255) NOT NULL,
		TotalSoft_FG_TDBW VARCHAR(255) NOT NULL,
		TotalSoft_FG_TDBC VARCHAR(255) NOT NULL,
		TotalSoft_FG_LC VARCHAR(255) NOT NULL,
		TotalSoft_FG_LHC VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Ov_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Ov_Trans VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Ov_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Ov_Transition VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line1_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line1_Width VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line1_Style VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line1_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line1_Transition VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line2_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line2_Width VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line2_Style VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line2_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Line2_Transition VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Raund_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Raund_Transparency VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Raund_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Hov_Raund_TRansition VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Icon_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Icon_Size VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Icon_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Icon_Border_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Icon_Border_Size VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Icon_Hov_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Icon_Hov_Transition VARCHAR(255) NOT NULL,
		TotalSoft_FG_Link_Icon_Border_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Link_Icon_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Link_Icon_Transition VARCHAR(255) NOT NULL,
		TotalSoft_FG_Popup_Ov_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Popup_Ov_Trans VARCHAR(255) NOT NULL,
		TotalSoft_FG_Popup_Start_Time VARCHAR(255) NOT NULL,
		TotalSoft_FG_Popup_Stop_Time VARCHAR(255) NOT NULL,
		TotalSoft_FG_Popup_Time_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Popup_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Img_Width VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Img_Border_Width VARCHAR(255) NOT NULL,
		TotalSoft_FG_Car_Slider_Img_Height VARCHAR(255) NOT NULL,
		TotalSoft_FG_Car_Slider_Img_Border_Width VARCHAR(255) NOT NULL,
		TotalSoft_FG_Car_Slider_Img_Border_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_SShow_Paause_Time VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Icon_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Icon_Size_Time VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Icon_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Del_Icon_Size VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Del_Icon_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Del_Icon_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Slider_Del_Icon_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Car_Slider_Icon_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Car_Slider_Icon_Size VARCHAR(255) NOT NULL,
		TotalSoft_FG_Car_Slider_Icon_Type VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Title_Font_Size VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Title_Font_Family VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Title_Color VARCHAR(255) NOT NULL,
		TotalSoft_FG_Pop_Title_Bg_Color VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';
	$sql9 = 'CREATE TABLE IF NOT EXISTS ' .$table_name9 . '(
		id INTEGER(10) UNSIGNED AUTO_INCREMENT,
		TotalSoftPortfolio_SetID VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetName VARCHAR(255) NOT NULL,
		TotalSoftPortfolio_SetType VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_W VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_PB VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_BoxSh VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_BoxShC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_VBW VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_VBS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_VBC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_VBR VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Img_Zoom_Type VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Img_Zoom_Effect_Time VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Hov_Ov_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Hov_Ov_Transparency VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Hov_Ov_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Hov_Ov_Effect_Time VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Title_Bg_Color VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Title_Transparency VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Title_Font_Size VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Title_Color VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Title_Effect_Type VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Title_Effect_Time VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Title_FF VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Line_Width VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Line_Style VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Line_Color VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Line_Hov_Type VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Line_Hov_Time VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Font_Size VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Color VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Border_Color VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Border_Width VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Border_Style VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Text VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Hov_Type VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_Hov_Time VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Link_FF VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_BW VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_BS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_BC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_BR VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_TShow VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_TTA VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_TFS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_TFF VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_TC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_PType VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_PIS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_PIC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_CType VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_CIS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_CIC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_CIT VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_CTF VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_AType VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_ArrS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_ArrC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_NFS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Pop_NC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_SM VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_TSA VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_MBgC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_CurBgC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_CurC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_BgC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_C VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_FS VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_FF VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_HBgC VARCHAR(255) NOT NULL,
		TotalSoft_Port_CP_Nav_HC VARCHAR(255) NOT NULL,
		PRIMARY KEY (id))';

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
	dbDelta($sql1);
	dbDelta($sql2);
	dbDelta($sql3);
	dbDelta($sql4);
	dbDelta($sql5);
	dbDelta($sql6);
	dbDelta($sql7);
	dbDelta($sql8);
	dbDelta($sql9);

	$TotalSoft_Fonts = array('Abadi MT Condensed Light','Aharoni','Aldhabi','Andalus','Angsana New','AngsanaUPC','Aparajita','Arabic Typesetting','Arial','Arial Black', 'Batang','BatangChe','Browallia New','BrowalliaUPC','Calibri','Calibri Light','Calisto MT','Cambria','Candara','Century Gothic','Comic Sans MS','Consolas', 'Constantia','Copperplate Gothic','Copperplate Gothic Light','Corbel','Cordia New','CordiaUPC','Courier New','DaunPenh','David','DFKai-SB','DilleniaUPC', 'DokChampa','Dotum','DotumChe','Ebrima','Estrangelo Edessa','EucrosiaUPC','Euphemia','FangSong','Franklin Gothic Medium','FrankRuehl','FreesiaUPC','Gabriola', 'Gadugi','Gautami','Georgia','Gisha','Gulim','GulimChe','Gungsuh','GungsuhChe','Impact','IrisUPC','Iskoola Pota','JasmineUPC','KaiTi','Kalinga','Kartika', 'Khmer UI','KodchiangUPC','Kokila','Lao UI','Latha','Leelawadee','Levenim MT','LilyUPC','Lucida Console','Lucida Handwriting Italic','Lucida Sans Unicode', 'Malgun Gothic','Mangal','Manny ITC','Marlett','Meiryo','Meiryo UI','Microsoft Himalaya','Microsoft JhengHei','Microsoft JhengHei UI','Microsoft New Tai Lue', 'Microsoft PhagsPa','Microsoft Sans Serif','Microsoft Tai Le','Microsoft Uighur','Microsoft YaHei','Microsoft YaHei UI','Microsoft Yi Baiti','MingLiU_HKSCS', 'MingLiU_HKSCS-ExtB','Miriam','Mongolian Baiti','MoolBoran','MS UI Gothic','MV Boli','Myanmar Text','Narkisim','Nirmala UI','News Gothic MT','NSimSun','Nyala', 'Palatino Linotype','Plantagenet Cherokee','Raavi','Rod','Sakkal Majalla','Segoe Print','Segoe Script','Segoe UI Symbol','Shonar Bangla','Shruti','SimHei','SimKai', 'Simplified Arabic','SimSun','SimSun-ExtB','Sylfaen','Tahoma','Times New Roman','Traditional Arabic','Trebuchet MS','Tunga','Utsaah','Vani','Vijaya');
	
	$TotalSoftFontCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));
	if(count($TotalSoftFontCount)==0)
	{
		foreach ($TotalSoft_Fonts as $Fonts) 
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name (id, Font) VALUES (%d, %s)", '', $Fonts));
		}
	}

	$TotalSoftPort1=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name1 WHERE id>%d",0));
	if(count($TotalSoftPort1)==0)
	{
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 1', 'Total Soft Portfolio'));

		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 1'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoftPortfolio_ContH, TotalSoftPortfolio_BgImage, TotalSoftPortfolio_IW, TotalSoftPortfolio_IH, TotalSoftPortfolio_IBW, TotalSoftPortfolio_IBS, TotalSoftPortfolio_IBC, TotalSoftPortfolio_IBR, TotalSoftPortfolio_NavS, TotalSoftPortfolio_NavRad, TotalSoftPortfolio_NavCol, TotalSoftPortfolio_NavCurCol, TotalSoftPortfolio_NavHovCol, TotalSoftPortfolio_ArrowType, TotalSoftPortfolio_ArrowCol, TotalSoftPortfolio_ArrowSize, TotalSoftPortfolio_ArrowUp, TotalSoftPortfolio_ArrowLeft, TotalSoftPortfolio_ArrowDown, TotalSoftPortfolio_ArrowRight) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 1', 'Total Soft Portfolio', '745', '', '1200', '606', '0', 'solid', '#009491', '0', '7', '6', '#3f9392', '#009491', '#000000', '11', '#009491', '24', 'totalsoft totalsoft-long-arrow-up', 'totalsoft totalsoft-long-arrow-left', 'totalsoft totalsoft-long-arrow-down', 'totalsoft totalsoft-long-arrow-right'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 2', 'Total Soft Portfolio'));

		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 2'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name1 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoftPortfolio_ContH, TotalSoftPortfolio_BgImage, TotalSoftPortfolio_IW, TotalSoftPortfolio_IH, TotalSoftPortfolio_IBW, TotalSoftPortfolio_IBS, TotalSoftPortfolio_IBC, TotalSoftPortfolio_IBR, TotalSoftPortfolio_NavS, TotalSoftPortfolio_NavRad, TotalSoftPortfolio_NavCol, TotalSoftPortfolio_NavCurCol, TotalSoftPortfolio_NavHovCol, TotalSoftPortfolio_ArrowType, TotalSoftPortfolio_ArrowCol, TotalSoftPortfolio_ArrowSize, TotalSoftPortfolio_ArrowUp, TotalSoftPortfolio_ArrowLeft, TotalSoftPortfolio_ArrowDown, TotalSoftPortfolio_ArrowRight) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 2', 'Total Soft Portfolio', '745', 'bg_12.png', '1200', '606', '0', 'solid', '#009491', '0', '7', '6', '#3f9392', '#009491', '#000000', '11', '#009491', '24', 'totalsoft totalsoft-long-arrow-up', 'totalsoft totalsoft-long-arrow-left', 'totalsoft totalsoft-long-arrow-down', 'totalsoft totalsoft-long-arrow-right'));
	}

	$TotalSoftPort2=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE id>%d",0));
	if(count($TotalSoftPort2)==0)
	{
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 3', 'Elastic Grid'));

		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 3'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoft_ElG_TSA, TotalSoft_ElG_SM, TotalSoft_ElG_FE, TotalSoft_ElG_HE, TotalSoft_ElG_HD, TotalSoft_ElG_HI, TotalSoft_ElG_ES, TotalSoft_ElG_EH, TotalSoft_ElG_Nav_MBgC, TotalSoft_ElG_Nav_CurBgC, TotalSoft_ElG_Nav_CurC, TotalSoft_ElG_Nav_BgC, TotalSoft_ElG_Nav_C, TotalSoft_ElG_Nav_FS, TotalSoft_ElG_Nav_FF, TotalSoft_ElG_Nav_HBgC, TotalSoft_ElG_Nav_HC, TotalSoft_ElG_LAM_W, TotalSoft_ElG_LAM_S, TotalSoft_ElG_LAM_C, TotalSoft_ElG_Im_W, TotalSoft_ElG_Im_H, TotalSoft_ElG_Im_BR, TotalSoft_ElG_Im_BS, TotalSoft_ElG_Im_HBgC, TotalSoft_ElG_Im_HO, TotalSoft_ElG_Im_TC, TotalSoft_ElG_Im_TFS, TotalSoft_ElG_Im_TFF, TotalSoft_ElG_LAT_W, TotalSoft_ElG_LAT_S, TotalSoft_ElG_LAT_C, TotalSoft_ElG_Pop_BgC, TotalSoft_ElG_Pop_TC, TotalSoft_ElG_Pop_TFS, TotalSoft_ElG_Pop_TFF, TotalSoft_ElG_Pop_DC, TotalSoft_ElG_Pop_DFS, TotalSoft_ElG_Pop_DFF, TotalSoft_ElG_LIP_BgC, TotalSoft_ElG_LIP_C, TotalSoft_ElG_LIP_FS, TotalSoft_ElG_LIP_FF, TotalSoft_ElG_LIP_BW, TotalSoft_ElG_LIP_BS, TotalSoft_ElG_LIP_BC, TotalSoft_ElG_LIP_BR, TotalSoft_ElG_LIP_HBgC, TotalSoft_ElG_LIP_HC, TotalSoft_ElG_LBT_W, TotalSoft_ElG_LBT_S, TotalSoft_ElG_LBT_C, TotalSoft_ElG_T_BgC, TotalSoft_ElG_T_BSC, TotalSoft_ElG_T_IH, TotalSoft_ElG_T_BW, TotalSoft_ElG_T_BS, TotalSoft_ElG_T_BC, TotalSoft_ElG_T_BR, TotalSoft_ElG_T_CurBC, TotalSoft_ElG_I_Type, TotalSoft_ElG_I_Left, TotalSoft_ElG_I_Right, TotalSoft_ElG_I_S, TotalSoft_ElG_I_C, TotalSoft_ElG_I_HO, TotalSoft_ElG_CI_Type, TotalSoft_ElG_CI_Icon, TotalSoft_ElG_CI_S, TotalSoft_ElG_CI_C, TotalSoft_ElG_CI_HO) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 3', 'Elastic Grid', 'All', 'true', 'helix', 'true', '0', 'false', '1000', '200', '#ffffff', '#009491', '#ffffff', '#00626b', '#ffffff', '22', 'Gabriola', '#ffffff', '#009491', '2', 'solid', '#009491', '240', '160', '0', '#009491', '#ffffff', '0.7', '#009491', '23', 'Gabriola', '1', 'dashed', '#009491', '#009491', '#ffffff', '23', 'Gabriola', '#bcbcbc', '21', 'Gabriola', '#009491', '#ffffff', '9', 'Arial', '1', 'solid', '#ffffff', '0', '#ffffff', '#009491', '2', 'solid', '#559392', '#ffffff', '#009491', '65', '2', 'solid', '#009491', '0', '#ffffff', '1', 'totalsoft totalsoft-angle-double-left', 'totalsoft totalsoft-angle-double-right', '28', '#000000', '0.65', '1', 'totalsoft totalsoft-times', '28', '#000000', '0.7'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 4', 'Elastic Grid'));

		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 4'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name7 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoft_ElG_TSA, TotalSoft_ElG_SM, TotalSoft_ElG_FE, TotalSoft_ElG_HE, TotalSoft_ElG_HD, TotalSoft_ElG_HI, TotalSoft_ElG_ES, TotalSoft_ElG_EH, TotalSoft_ElG_Nav_MBgC, TotalSoft_ElG_Nav_CurBgC, TotalSoft_ElG_Nav_CurC, TotalSoft_ElG_Nav_BgC, TotalSoft_ElG_Nav_C, TotalSoft_ElG_Nav_FS, TotalSoft_ElG_Nav_FF, TotalSoft_ElG_Nav_HBgC, TotalSoft_ElG_Nav_HC, TotalSoft_ElG_LAM_W, TotalSoft_ElG_LAM_S, TotalSoft_ElG_LAM_C, TotalSoft_ElG_Im_W, TotalSoft_ElG_Im_H, TotalSoft_ElG_Im_BR, TotalSoft_ElG_Im_BS, TotalSoft_ElG_Im_HBgC, TotalSoft_ElG_Im_HO, TotalSoft_ElG_Im_TC, TotalSoft_ElG_Im_TFS, TotalSoft_ElG_Im_TFF, TotalSoft_ElG_LAT_W, TotalSoft_ElG_LAT_S, TotalSoft_ElG_LAT_C, TotalSoft_ElG_Pop_BgC, TotalSoft_ElG_Pop_TC, TotalSoft_ElG_Pop_TFS, TotalSoft_ElG_Pop_TFF, TotalSoft_ElG_Pop_DC, TotalSoft_ElG_Pop_DFS, TotalSoft_ElG_Pop_DFF, TotalSoft_ElG_LIP_BgC, TotalSoft_ElG_LIP_C, TotalSoft_ElG_LIP_FS, TotalSoft_ElG_LIP_FF, TotalSoft_ElG_LIP_BW, TotalSoft_ElG_LIP_BS, TotalSoft_ElG_LIP_BC, TotalSoft_ElG_LIP_BR, TotalSoft_ElG_LIP_HBgC, TotalSoft_ElG_LIP_HC, TotalSoft_ElG_LBT_W, TotalSoft_ElG_LBT_S, TotalSoft_ElG_LBT_C, TotalSoft_ElG_T_BgC, TotalSoft_ElG_T_BSC, TotalSoft_ElG_T_IH, TotalSoft_ElG_T_BW, TotalSoft_ElG_T_BS, TotalSoft_ElG_T_BC, TotalSoft_ElG_T_BR, TotalSoft_ElG_T_CurBC, TotalSoft_ElG_I_Type, TotalSoft_ElG_I_Left, TotalSoft_ElG_I_Right, TotalSoft_ElG_I_S, TotalSoft_ElG_I_C, TotalSoft_ElG_I_HO, TotalSoft_ElG_CI_Type, TotalSoft_ElG_CI_Icon, TotalSoft_ElG_CI_S, TotalSoft_ElG_CI_C, TotalSoft_ElG_CI_HO) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 4', 'Elastic Grid', 'All', 'true', 'scaleup', 'true', '0', 'false', '1000', '200', '#009491', '#ffffff', '#009491', '#009491', '#ffffff', '23', 'Gabriola', '#ffffff', '#009491', '0', 'solid', '#001cbc', '250', '160', '0', '#ffffff', '#009491', '0.7', '#ffffff', '20', 'Arial', '1', 'solid', '#ffffff', '#009491', '#ffffff', '20', 'Arial', '#ffffff', '17', 'Arial', '#489392', '#ffffff', '15', 'Arial', '0', 'dashed', '#000000', '0', '#009491', '#ffffff', '1', 'solid', '#ffffff', '#ffffff', '#000000', '100', '0', 'solid', '#ff0000', '0', '#000000', '1', 'totalsoft totalsoft-angle-double-left', 'totalsoft totalsoft-angle-double-right', '28', '#000000', '0.65', '1', 'totalsoft totalsoft-times', '28', '#000000', '0.7'));
	}

	$TotalSoftPort3=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE id>%d",0));
	if(count($TotalSoftPort3)==0)
	{
		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 5'));

		if(!$TotalSoftPortfolio_SetNameID)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 5', 'Filterable Grid'));
			$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 5'));
		}

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoft_FG_TSA, TotalSoft_FG_Im_BW, TotalSoft_FG_Im_BC, TotalSoft_FG_PBI, TotalSoft_FG_DSI, TotalSoft_FG_Nav_MBgC, TotalSoft_FG_Nav_CurBgC, TotalSoft_FG_Nav_CurC, TotalSoft_FG_Nav_BgC, TotalSoft_FG_Nav_C, TotalSoft_FG_Nav_FS, TotalSoft_FG_Nav_FF, TotalSoft_FG_Nav_HBgC, TotalSoft_FG_Nav_HC, TotalSoft_FG_TC, TotalSoft_FG_TFS, TotalSoft_FG_TFF, TotalSoft_FG_DShow, TotalSoft_FG_DC, TotalSoft_FG_DFS, TotalSoft_FG_DFF, TotalSoft_FG_TDBgC, TotalSoft_FG_TDBW, TotalSoft_FG_TDBC, TotalSoft_FG_LC, TotalSoft_FG_LHC, TotalSoft_FG_Hov_Ov_Bg_Color, TotalSoft_FG_Hov_Ov_Trans, TotalSoft_FG_Hov_Ov_Effect_Type, TotalSoft_FG_Hov_Ov_Transition, TotalSoft_FG_Hov_Line1_Color, TotalSoft_FG_Hov_Line1_Width, TotalSoft_FG_Hov_Line1_Style, TotalSoft_FG_Hov_Line1_Effect_Type, TotalSoft_FG_Hov_Line1_Transition, TotalSoft_FG_Hov_Line2_Color, TotalSoft_FG_Hov_Line2_Width, TotalSoft_FG_Hov_Line2_Style, TotalSoft_FG_Hov_Line2_Effect_Type, TotalSoft_FG_Hov_Line2_Transition, TotalSoft_FG_Hov_Raund_Bg_Color, TotalSoft_FG_Hov_Raund_Transparency, TotalSoft_FG_Hov_Raund_Effect_Type, TotalSoft_FG_Hov_Raund_TRansition, TotalSoft_FG_Pop_Icon_Color, TotalSoft_FG_Pop_Icon_Size, TotalSoft_FG_Pop_Icon_Bg_Color, TotalSoft_FG_Pop_Icon_Border_Color, TotalSoft_FG_Pop_Icon_Border_Size, TotalSoft_FG_Pop_Icon_Hov_Effect_Type, TotalSoft_FG_Pop_Icon_Hov_Transition, TotalSoft_FG_Link_Icon_Border_Color, TotalSoft_FG_Link_Icon_Effect_Type, TotalSoft_FG_Link_Icon_Transition, TotalSoft_FG_Popup_Ov_Bg_Color, TotalSoft_FG_Popup_Ov_Trans, TotalSoft_FG_Popup_Start_Time, TotalSoft_FG_Popup_Stop_Time, TotalSoft_FG_Popup_Time_Effect_Type, TotalSoft_FG_Popup_Effect_Type, TotalSoft_FG_Slider_Img_Width, TotalSoft_FG_Slider_Img_Border_Width, TotalSoft_FG_Car_Slider_Img_Height, TotalSoft_FG_Car_Slider_Img_Border_Width, TotalSoft_FG_Car_Slider_Img_Border_Color, TotalSoft_FG_Slider_SShow_Paause_Time, TotalSoft_FG_Slider_Icon_Color, TotalSoft_FG_Slider_Icon_Size_Time, TotalSoft_FG_Slider_Icon_Type, TotalSoft_FG_Slider_Del_Icon_Size, TotalSoft_FG_Slider_Del_Icon_Color, TotalSoft_FG_Slider_Del_Icon_Type, TotalSoft_FG_Slider_Del_Icon_Bg_Color, TotalSoft_FG_Car_Slider_Icon_Color, TotalSoft_FG_Car_Slider_Icon_Size, TotalSoft_FG_Car_Slider_Icon_Type, TotalSoft_FG_Pop_Title_Font_Size, TotalSoft_FG_Pop_Title_Font_Family, TotalSoft_FG_Pop_Title_Color, TotalSoft_FG_Pop_Title_Bg_Color) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 5', 'Filterable Grid', 'All', '0', '#ffffff', '8', 'true', '#009491', '#ffffff', '#009491', '#009491', '#ffffff', '23', 'Gabriola', '#ffffff', '#009491', '#009491', '22', 'Gabriola', 'true', '#009491', '20', 'Gabriola', '#ffffff', '1', '#009491', '#ffffff', '#009491', '#009491', '20', 'hoverDivPort1', '4', '#000000', '2', '', 'HovLine1_4', '4', '#ffffff', '2', '3', 'HovLine2_4', '4', '#009491', '50', 'hovRound2', '2', '#009491', '40', '#ffffff', '#ffffff', '3', 'IconForPopup5', '4', '#009491', 'IconForLink5', '4', '#ffffff', '70', '6', '5', 'easeOutSine', 'translateLeft', '400', '0', '60', '5', '#ffffff', '4', '#ffffff', '30', '3', '25', '#ffffff', '1', '#009491', '#ffffff', '30', '3', '26', 'Gabriola', '#ffffff', '#009491'));		

		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 6'));

		if(!$TotalSoftPortfolio_SetNameID)
		{
			$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 6', 'Filterable Grid'));
			$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 6'));
		}

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name8 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoft_FG_TSA, TotalSoft_FG_Im_BW, TotalSoft_FG_Im_BC, TotalSoft_FG_PBI, TotalSoft_FG_DSI, TotalSoft_FG_Nav_MBgC, TotalSoft_FG_Nav_CurBgC, TotalSoft_FG_Nav_CurC, TotalSoft_FG_Nav_BgC, TotalSoft_FG_Nav_C, TotalSoft_FG_Nav_FS, TotalSoft_FG_Nav_FF, TotalSoft_FG_Nav_HBgC, TotalSoft_FG_Nav_HC, TotalSoft_FG_TC, TotalSoft_FG_TFS, TotalSoft_FG_TFF, TotalSoft_FG_DShow, TotalSoft_FG_DC, TotalSoft_FG_DFS, TotalSoft_FG_DFF, TotalSoft_FG_TDBgC, TotalSoft_FG_TDBW, TotalSoft_FG_TDBC, TotalSoft_FG_LC, TotalSoft_FG_LHC, TotalSoft_FG_Hov_Ov_Bg_Color, TotalSoft_FG_Hov_Ov_Trans, TotalSoft_FG_Hov_Ov_Effect_Type, TotalSoft_FG_Hov_Ov_Transition, TotalSoft_FG_Hov_Line1_Color, TotalSoft_FG_Hov_Line1_Width, TotalSoft_FG_Hov_Line1_Style, TotalSoft_FG_Hov_Line1_Effect_Type, TotalSoft_FG_Hov_Line1_Transition, TotalSoft_FG_Hov_Line2_Color, TotalSoft_FG_Hov_Line2_Width, TotalSoft_FG_Hov_Line2_Style, TotalSoft_FG_Hov_Line2_Effect_Type, TotalSoft_FG_Hov_Line2_Transition, TotalSoft_FG_Hov_Raund_Bg_Color, TotalSoft_FG_Hov_Raund_Transparency, TotalSoft_FG_Hov_Raund_Effect_Type, TotalSoft_FG_Hov_Raund_TRansition, TotalSoft_FG_Pop_Icon_Color, TotalSoft_FG_Pop_Icon_Size, TotalSoft_FG_Pop_Icon_Bg_Color, TotalSoft_FG_Pop_Icon_Border_Color, TotalSoft_FG_Pop_Icon_Border_Size, TotalSoft_FG_Pop_Icon_Hov_Effect_Type, TotalSoft_FG_Pop_Icon_Hov_Transition, TotalSoft_FG_Link_Icon_Border_Color, TotalSoft_FG_Link_Icon_Effect_Type, TotalSoft_FG_Link_Icon_Transition, TotalSoft_FG_Popup_Ov_Bg_Color, TotalSoft_FG_Popup_Ov_Trans, TotalSoft_FG_Popup_Start_Time, TotalSoft_FG_Popup_Stop_Time, TotalSoft_FG_Popup_Time_Effect_Type, TotalSoft_FG_Popup_Effect_Type, TotalSoft_FG_Slider_Img_Width, TotalSoft_FG_Slider_Img_Border_Width, TotalSoft_FG_Car_Slider_Img_Height, TotalSoft_FG_Car_Slider_Img_Border_Width, TotalSoft_FG_Car_Slider_Img_Border_Color, TotalSoft_FG_Slider_SShow_Paause_Time, TotalSoft_FG_Slider_Icon_Color, TotalSoft_FG_Slider_Icon_Size_Time, TotalSoft_FG_Slider_Icon_Type, TotalSoft_FG_Slider_Del_Icon_Size, TotalSoft_FG_Slider_Del_Icon_Color, TotalSoft_FG_Slider_Del_Icon_Type, TotalSoft_FG_Slider_Del_Icon_Bg_Color, TotalSoft_FG_Car_Slider_Icon_Color, TotalSoft_FG_Car_Slider_Icon_Size, TotalSoft_FG_Car_Slider_Icon_Type, TotalSoft_FG_Pop_Title_Font_Size, TotalSoft_FG_Pop_Title_Font_Family, TotalSoft_FG_Pop_Title_Color, TotalSoft_FG_Pop_Title_Bg_Color) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 6', 'Filterable Grid', 'All', '2', '#ffffff', '8', 'true', '#ffffff', '#009491', '#ffffff', '#ffffff', '#009491', '23', 'Gabriola', '#009491', '#ffffff', '#ffffff', '22', 'Gabriola', 'true', '#ffffff', '20', 'Gabriola', '#009491', '0', '#009491', '#009491', '#ffffff', '#000000', '40', 'hoverDivPort1', '4', '#d6d6d6', '1', '', 'HovLine1_10', '2', '#d6d6d6', '1', '8', 'HovLine2_10', '2', '#424242', '0', 'hovRound6', '6', '#009491', '30', '#d6d6d6', '#ffffff', '0', 'IconForPopup8', '3', '#ffffff', 'IconForLink8', '3', '#ffffff', '50', '4', '4', 'snap', 'flipY','382', '0', '66', '0', '#ffffff', '6', '#ffffff', '30', '3', '30', '#009491', '1', '#ffffff', '#ffffff', '30', '3', '24', 'Gabriola', '#009491', '#ffffff'));			
	}

	$TotalSoftPort4=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE id>%d",0));
	if(count($TotalSoftPort4)==0)
	{
		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 7', 'Gallery Portfolio/Content Popup'));

		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 7'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoft_Port_CP_W, TotalSoft_Port_CP_PB, TotalSoft_Port_CP_BoxSh, TotalSoft_Port_CP_BoxShC, TotalSoft_Port_CP_VBW, TotalSoft_Port_CP_VBS, TotalSoft_Port_CP_VBC, TotalSoft_Port_CP_VBR, TotalSoft_Port_CP_Img_Zoom_Type, TotalSoft_Port_CP_Img_Zoom_Effect_Time, TotalSoft_Port_CP_Hov_Ov_Bg_Color, TotalSoft_Port_CP_Hov_Ov_Transparency, TotalSoft_Port_CP_Hov_Ov_Effect_Type, TotalSoft_Port_CP_Hov_Ov_Effect_Time, TotalSoft_Port_CP_Title_Bg_Color, TotalSoft_Port_CP_Title_Transparency, TotalSoft_Port_CP_Title_Font_Size, TotalSoft_Port_CP_Title_Color, TotalSoft_Port_CP_Title_Effect_Type, TotalSoft_Port_CP_Title_Effect_Time, TotalSoft_Port_CP_Title_FF, TotalSoft_Port_CP_Line_Width, TotalSoft_Port_CP_Line_Style, TotalSoft_Port_CP_Line_Color, TotalSoft_Port_CP_Line_Hov_Type, TotalSoft_Port_CP_Line_Hov_Time, TotalSoft_Port_CP_Link_Font_Size, TotalSoft_Port_CP_Link_Color, TotalSoft_Port_CP_Link_Border_Color, TotalSoft_Port_CP_Link_Border_Width, TotalSoft_Port_CP_Link_Border_Style, TotalSoft_Port_CP_Link_Text, TotalSoft_Port_CP_Link_Hov_Type, TotalSoft_Port_CP_Link_Hov_Time, TotalSoft_Port_CP_Link_FF, TotalSoft_Port_CP_Pop_BgC, TotalSoft_Port_CP_Pop_BW, TotalSoft_Port_CP_Pop_BS, TotalSoft_Port_CP_Pop_BC, TotalSoft_Port_CP_Pop_BR, TotalSoft_Port_CP_Pop_TShow, TotalSoft_Port_CP_Pop_TTA, TotalSoft_Port_CP_Pop_TFS, TotalSoft_Port_CP_Pop_TFF, TotalSoft_Port_CP_Pop_TC, TotalSoft_Port_CP_Pop_PType, TotalSoft_Port_CP_Pop_PIS, TotalSoft_Port_CP_Pop_PIC, TotalSoft_Port_CP_Pop_CType, TotalSoft_Port_CP_Pop_CIS, TotalSoft_Port_CP_Pop_CIC, TotalSoft_Port_CP_Pop_CIT, TotalSoft_Port_CP_Pop_CTF, TotalSoft_Port_CP_Pop_AType, TotalSoft_Port_CP_Pop_ArrS, TotalSoft_Port_CP_Pop_ArrC, TotalSoft_Port_CP_Pop_NFS, TotalSoft_Port_CP_Pop_NC, TotalSoft_Port_CP_SM, TotalSoft_Port_CP_TSA, TotalSoft_Port_CP_Nav_MBgC, TotalSoft_Port_CP_Nav_CurBgC, TotalSoft_Port_CP_Nav_CurC, TotalSoft_Port_CP_Nav_BgC, TotalSoft_Port_CP_Nav_C, TotalSoft_Port_CP_Nav_FS, TotalSoft_Port_CP_Nav_FF, TotalSoft_Port_CP_Nav_HBgC, TotalSoft_Port_CP_Nav_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 7', 'Gallery Portfolio/Content Popup', '210', '10', '20', '#009491', '5', 'solid', '#ffffff', '0', 'TotPortImgHov5', '4', '#000000', '50', 'TotPortImgOv1', '4', '#ffffff', '90', '23', '#009491', 'TotPortHovTit1', '4', 'Gabriola', '1', 'solid', '#ffffff', 'TotPortHovLine4', '3', '15', '#ffffff', '#ffffff', '0', 'solid', 'View More', 'TotPortHovLink4', '3', 'Arial', '#ffffff', '0', 'solid', '#ffffff', '14', 'true', 'center', '25', 'Gabriola', '#009491', 'play-circle-o', '22', '#ffffff', 'times-circle', '22', '#009491', 'Close', 'Arial', 'arrow-circle', '22', '#000000', '19', '#000000', 'true', 'All', '#009491', '#ffffff', '#009491', '#009491', '#ffffff', '25', 'Gabriola', '#ffffff', '#009491'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name2 (id, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType) VALUES (%d, %s, %s)", '', 'Portfolio 8', 'Gallery Portfolio/Content Popup'));

		$TotalSoftPortfolio_SetNameID=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE TotalSoftPortfolio_SetName=%s order by id desc limit 1", 'Portfolio 8'));

		$wpdb->query($wpdb->prepare("INSERT INTO $table_name9 (id, TotalSoftPortfolio_SetID, TotalSoftPortfolio_SetName, TotalSoftPortfolio_SetType, TotalSoft_Port_CP_W, TotalSoft_Port_CP_PB, TotalSoft_Port_CP_BoxSh, TotalSoft_Port_CP_BoxShC, TotalSoft_Port_CP_VBW, TotalSoft_Port_CP_VBS, TotalSoft_Port_CP_VBC, TotalSoft_Port_CP_VBR, TotalSoft_Port_CP_Img_Zoom_Type, TotalSoft_Port_CP_Img_Zoom_Effect_Time, TotalSoft_Port_CP_Hov_Ov_Bg_Color, TotalSoft_Port_CP_Hov_Ov_Transparency, TotalSoft_Port_CP_Hov_Ov_Effect_Type, TotalSoft_Port_CP_Hov_Ov_Effect_Time, TotalSoft_Port_CP_Title_Bg_Color, TotalSoft_Port_CP_Title_Transparency, TotalSoft_Port_CP_Title_Font_Size, TotalSoft_Port_CP_Title_Color, TotalSoft_Port_CP_Title_Effect_Type, TotalSoft_Port_CP_Title_Effect_Time, TotalSoft_Port_CP_Title_FF, TotalSoft_Port_CP_Line_Width, TotalSoft_Port_CP_Line_Style, TotalSoft_Port_CP_Line_Color, TotalSoft_Port_CP_Line_Hov_Type, TotalSoft_Port_CP_Line_Hov_Time, TotalSoft_Port_CP_Link_Font_Size, TotalSoft_Port_CP_Link_Color, TotalSoft_Port_CP_Link_Border_Color, TotalSoft_Port_CP_Link_Border_Width, TotalSoft_Port_CP_Link_Border_Style, TotalSoft_Port_CP_Link_Text, TotalSoft_Port_CP_Link_Hov_Type, TotalSoft_Port_CP_Link_Hov_Time, TotalSoft_Port_CP_Link_FF, TotalSoft_Port_CP_Pop_BgC, TotalSoft_Port_CP_Pop_BW, TotalSoft_Port_CP_Pop_BS, TotalSoft_Port_CP_Pop_BC, TotalSoft_Port_CP_Pop_BR, TotalSoft_Port_CP_Pop_TShow, TotalSoft_Port_CP_Pop_TTA, TotalSoft_Port_CP_Pop_TFS, TotalSoft_Port_CP_Pop_TFF, TotalSoft_Port_CP_Pop_TC, TotalSoft_Port_CP_Pop_PType, TotalSoft_Port_CP_Pop_PIS, TotalSoft_Port_CP_Pop_PIC, TotalSoft_Port_CP_Pop_CType, TotalSoft_Port_CP_Pop_CIS, TotalSoft_Port_CP_Pop_CIC, TotalSoft_Port_CP_Pop_CIT, TotalSoft_Port_CP_Pop_CTF, TotalSoft_Port_CP_Pop_AType, TotalSoft_Port_CP_Pop_ArrS, TotalSoft_Port_CP_Pop_ArrC, TotalSoft_Port_CP_Pop_NFS, TotalSoft_Port_CP_Pop_NC, TotalSoft_Port_CP_SM, TotalSoft_Port_CP_TSA, TotalSoft_Port_CP_Nav_MBgC, TotalSoft_Port_CP_Nav_CurBgC, TotalSoft_Port_CP_Nav_CurC, TotalSoft_Port_CP_Nav_BgC, TotalSoft_Port_CP_Nav_C, TotalSoft_Port_CP_Nav_FS, TotalSoft_Port_CP_Nav_FF, TotalSoft_Port_CP_Nav_HBgC, TotalSoft_Port_CP_Nav_HC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', $TotalSoftPortfolio_SetNameID[0]->id, 'Portfolio 8', 'Gallery Portfolio/Content Popup', '210', '10', '20', '#009491', '5', 'solid', '#ffffff', '0', 'TotPortImgHov2', '4', '#000000', '40', 'TotPortImgOv1', '4', '#ffffff', '90', '24', '#009491', 'TotPortHovTit3', '4', 'Gabriola', '1', 'solid', '#ffffff', 'TotPortHovLine5', '3', '18', '#ffffff', '#ffffff', '1', 'solid', 'View More', 'TotPortHovLink9', '3', 'Gabriola', '#ffffff', '0', 'solid', '#ffffff', '14', 'true', 'center', '25', 'Gabriola', '#009491', 'play-circle-o', '22', '#009491', 'times-circle', '22', '#009491', 'Close', 'Arial', 'arrow-circle', '22', '#000000', '19', '#000000', 'true', 'All', '#009491', '#ffffff', '#009491', '#009491', '#ffffff', '25', 'Calisto MT', '#ffffff', '#009491'));
	}
?>
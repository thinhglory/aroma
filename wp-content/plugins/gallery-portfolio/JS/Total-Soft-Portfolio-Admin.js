function Total_Soft_Portfolio_AMD2_But1(Portfolio_ID)
{
	jQuery('.Total_Soft_Portfolio_AMD2').hide(500);
	jQuery('.Total_Soft_PortfolioAMMTable').hide(500);
	jQuery('.Total_Soft_PortfolioAMOTable').hide(500);
	jQuery('.Total_Soft_Portfolio_Save').show(500);
	jQuery('.Total_Soft_Portfolio_Update').hide(500);
	jQuery('.Total_Soft_Portfolio_ID').html('[Total_Soft_Portfolio id="'+Portfolio_ID+'"]');
	jQuery('.Total_Soft_Portfolio_TID').html('<?php echo do_shortcode("[Total_Soft_Portfolio id="'+Portfolio_ID+'"]");?>');
	setTimeout(function(){
		jQuery('.Total_Soft_Portfolio_AMD3').show(500);
		jQuery('.Total_Soft_AMTable').show(500);
		jQuery('.Total_Soft_AMImageTable').show(500);
		jQuery('.Total_Soft_AMImageTable1').show(500);
		jQuery('.Total_Soft_AMShortTable').show(500);
	},500)
}
function TotalSoft_Reload()
{
	location.reload();
}
function TotalSoftPortfolio_Edit(Portfolio_ID)
{
	jQuery('.Total_Soft_Portfolio_AMD2').hide(500);
	jQuery('.Total_Soft_PortfolioAMMTable').hide(500);
	jQuery('.Total_Soft_PortfolioAMOTable').hide(500);
	jQuery('.Total_Soft_Portfolio_Save').hide(500);
	jQuery('.Total_Soft_Portfolio_Update').show(500);
	jQuery('.Total_Soft_Portfolio_ID').html('[Total_Soft_Portfolio id="'+Portfolio_ID+'"]');
	jQuery('.Total_Soft_Portfolio_TID').html('<?php echo do_shortcode("[Total_Soft_Portfolio id="'+Portfolio_ID+'"]");?>');
	
	jQuery('#Total_SoftPortfolio_Update').val(Portfolio_ID);
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'TotalSoftPortfolio_Edit', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Portfolio_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var b=Array();
		var a=response.split('=>');
		for(var i=3;i<a.length;i++)
		{ b[b.length]=a[i].split('[')[0].trim(); }
		b[b.length-1]=b[b.length-1].split(')')[0].trim();

		jQuery('#TotalSoftPortfolio_Title').val(b[0]); jQuery('#TotalSoftPortfolio_Option').val(b[1]); jQuery('#TotalSoftPortfolio_AlbumCount').val(b[2]); jQuery('#TotalSoftPortfolio_AlbumCountHid').val(b[2]);

		for(var i=2;i<=b[2];i++)
		{
			jQuery('#TotalSoftHiddenRows_'+i).show();
			jQuery('#TotalSoftPortfolio_ImAlbum_'+i).show();
		}
	})

	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'TotalSoftPortfolio_Edit_Album', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Portfolio_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var b=Array();
		var a=response.split('stdClass Object');
		for(i=1;i<a.length;i++)
		{
			var c=a[i].split('=>');
			b[b.length]=c[2].split('[')[0].trim();
		}
		for(i=1;i<=b.length;i++)
		{
			jQuery('#TotalSoftPortfolio_ATitle'+i).val(b[i-1]);
		}
	})

	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'TotalSoftPortfolio_Edit_Images', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Portfolio_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		var TSImages=Array();
		var TSAlbums=Array();
		var TSURLs=Array();
		var TSDescs=Array();
		var TSLinks=Array();
		var TSONTs=Array();
		var a=response.split('stdClass Object');
		for(i=1;i<a.length;i++)
		{
			var c=a[i].split('=>');
			TSImages[TSImages.length]=c[2].split('[')[0].trim();
			TSAlbums[TSAlbums.length]=c[3].split('[')[0].trim();
			TSURLs[TSURLs.length]=c[4].split('[')[0].trim();
			TSDescs[TSDescs.length]=c[5].split('[')[0].trim();
			TSLinks[TSLinks.length]=c[6].split('[')[0].trim();
			TSONTs[TSONTs.length]=c[7].split('[')[0].trim();
		}
		for(i=1;i<=TSImages.length;i++)
		{			
			if(i==1)
			{

				jQuery('#TotalSoftPortfolioUl').html('<li id="TotalSoftPortfolioLi_1"><table class="Total_Soft_AMImageTable1 Total_Soft_AMImageTable2"><tr><td>1</td><td><input type="text" readonly value="'+TSImages[0]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IT_1" name="TotalSoftPortfolio_IT_1"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImDesc" id="TotalSoftPortfolio_IDesc_1" name="TotalSoftPortfolio_IDesc_1" value="'+TSDescs[0]+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImLink" id="TotalSoftPortfolio_ILink_1" name="TotalSoftPortfolio_ILink_1" value="'+TSLinks[0]+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImONT" id="TotalSoftPortfolio_IONT_1" name="TotalSoftPortfolio_IONT_1" value="'+TSONTs[0]+'"></td><td><input type="text" readonly value="'+TSAlbums[0]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IA_1" name="TotalSoftPortfolio_IA_1"></td><td><img class="TotalSoftPortfolioImage" src="'+TSURLs[0]+'"><input type="text" readonly value="'+TSURLs[0]+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftPortfolio_IURL_1" name="TotalSoftPortfolio_IURL_1"></td><td onclick="TotalSoftImage_Edit(1)"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftImage_Del(1)"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>');
			}
			else
			{

				if(i%2==0)
				{
					jQuery('<li id="TotalSoftPortfolioLi_'+i+'"><table class="Total_Soft_AMImageTable1 Total_Soft_AMImageTable3"><tr><td>'+i+'</td><td><input type="text" readonly value="'+TSImages[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IT_'+i+'" name="TotalSoftPortfolio_IT_'+i+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImDesc" id="TotalSoftPortfolio_IDesc_'+i+'" name="TotalSoftPortfolio_IDesc_'+i+'" value="'+TSDescs[i-1]+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImLink" id="TotalSoftPortfolio_ILink_'+i+'" name="TotalSoftPortfolio_ILink_'+i+'" value="'+TSLinks[i-1]+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImONT" id="TotalSoftPortfolio_IONT_'+i+'" name="TotalSoftPortfolio_IONT_'+i+'" value="'+TSONTs[i-1]+'"></td><td><input type="text" readonly value="'+TSAlbums[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IA_'+i+'" name="TotalSoftPortfolio_IA_'+i+'"></td><td><img class="TotalSoftPortfolioImage" src="'+TSURLs[i-1]+'"><input type="text" readonly value="'+TSURLs[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftPortfolio_IURL_'+i+'" name="TotalSoftPortfolio_IURL_'+i+'"></td><td onclick="TotalSoftImage_Edit('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftImage_Del('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftPortfolioUl li:nth-child('+parseInt(parseInt(i)-1)+')');
				}
				else
				{
					jQuery('<li id="TotalSoftPortfolioLi_'+i+'"><table class="Total_Soft_AMImageTable1 Total_Soft_AMImageTable2"><tr><td>'+i+'</td><td><input type="text" readonly value="'+TSImages[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IT_'+i+'" name="TotalSoftPortfolio_IT_'+i+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImDesc" id="TotalSoftPortfolio_IDesc_'+i+'" name="TotalSoftPortfolio_IDesc_'+i+'" value="'+TSDescs[i-1]+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImLink" id="TotalSoftPortfolio_ILink_'+i+'" name="TotalSoftPortfolio_ILink_'+i+'" value="'+TSLinks[i-1]+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImONT" id="TotalSoftPortfolio_IONT_'+i+'" name="TotalSoftPortfolio_IONT_'+i+'" value="'+TSONTs[i-1]+'"></td><td><input type="text" readonly value="'+TSAlbums[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IA_'+i+'" name="TotalSoftPortfolio_IA_'+i+'"></td><td><img class="TotalSoftPortfolioImage" src="'+TSURLs[i-1]+'"><input type="text" readonly value="'+TSURLs[i-1]+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftPortfolio_IURL_'+i+'" name="TotalSoftPortfolio_IURL_'+i+'"></td><td onclick="TotalSoftImage_Edit('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftImage_Del('+i+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftPortfolioUl li:nth-child('+parseInt(parseInt(i)-1)+')');
				}
			}
		}
		jQuery('#TotalSoftHidNum').val(TSImages.length);
	})
	setTimeout(function(){
		jQuery('.Total_Soft_Portfolio_AMD3').show(500);
		jQuery('.Total_Soft_AMTable').show(500);
		jQuery('.Total_Soft_AMImageTable').show(500);
		jQuery('.Total_Soft_AMImageTable1').show(500);
		jQuery('.Total_Soft_AMShortTable').show(500);
	},500)
}
function TotalSoftPortfolio_Del(Portfolio_ID)
{
	var ajaxurl = object.ajaxurl;
	var data = {
	action: 'TotalSoftPortfolio_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
	foobar: Portfolio_ID, // translates into $_POST['foobar'] in PHP
	};
	jQuery.post(ajaxurl, data, function(response) {
		location.reload();
	})
}
function TotalSoftPortfolio_Edit_Option(Portfolio_OptID)
{
	jQuery('.Total_Soft_AMMTable').hide(500);
	jQuery('.Total_Soft_AMOTable').hide(500);
	jQuery('.TotalSoftPortfolioFree').hide(500);
	setTimeout(function(){
		jQuery('.Total_Soft_Portfolio_AMD3').show(500);
		jQuery('#TotalSoftPortfolioFree_'+Portfolio_OptID).show(500);
	},500);
}
function TotalSoftPortfolio_ACount()
{
	var TotalSoftPortfolio_AlbumCount=jQuery('#TotalSoftPortfolio_AlbumCount').val();
	var TotalSoftPortfolio_AlbumCountHid=parseInt(jQuery('#TotalSoftPortfolio_AlbumCountHid').val());
	if(TotalSoftPortfolio_AlbumCount>TotalSoftPortfolio_AlbumCountHid)
	{
		for(var i=TotalSoftPortfolio_AlbumCountHid+1;i<=TotalSoftPortfolio_AlbumCount;i++)
		{
			jQuery('#TotalSoftHiddenRows_'+i).show(500);
			jQuery('#TotalSoftPortfolio_ImAlbum_'+i).show(500);
		}
	}
	else if(TotalSoftPortfolio_AlbumCount<TotalSoftPortfolio_AlbumCountHid)
	{
		for(var i=TotalSoftPortfolio_AlbumCountHid;i>TotalSoftPortfolio_AlbumCount;i--)
		{
			jQuery('#TotalSoftHiddenRows_'+i).hide(500);
			jQuery('#TotalSoftPortfolio_ImAlbum_'+i).hide(500);
		}
	}
	jQuery('#TotalSoftPortfolio_AlbumCountHid').val(TotalSoftPortfolio_AlbumCount);
}
function TotalSoftPortfolio_ImURL_Clicked()
{
	var nIntervId = setInterval(function(){
		var code = jQuery('#TotalSoftPortfolio_ImURL_1').val();			
		if(code.indexOf('img')>0){
			var s=code.split('src="'); 
			var src=s[1].split('"');				
			jQuery('#TotalSoftPortfolio_ImURL_2').val(src[0]);
			if(jQuery('#TotalSoftPortfolio_ImURL_2').val().length>0){
				jQuery('#TotalSoftPortfolio_ImURL_1').val('');	
				clearInterval(nIntervId);
			}				
		}
	},100)
}
function Total_Soft_Portfolio_Img_Res()
{
	jQuery('#TotalSoftPortfolio_ImTitle').val('');
	jQuery('#TotalSoftPortfolio_ImAlbum').val('1');
	jQuery('#TotalSoftPortfolio_ImURL_1').val('');
	jQuery('#TotalSoftPortfolio_ImURL_2').val('');

	jQuery('#TotalSoftPortfolio_ImDesc').val('');
	jQuery('#TotalSoftPortfolio_ImLink').val('');
	jQuery('#TotalSoftPortfolio_ImONT').attr('checked',true);
	jQuery('#Total_Soft_Portfolio_UpdIm').hide(500);
	jQuery('#Total_Soft_Portfolio_SavIm').show(500);
}
function Total_Soft_Portfolio_Img_Sav()
{
	var TotalSoftHidNum=jQuery('#TotalSoftHidNum').val();
	var TotalSoftPortfolio_ImTitle=jQuery('#TotalSoftPortfolio_ImTitle').val();
	
	var TotalSoftPortfolio_ImAlbumNum=jQuery('#TotalSoftPortfolio_ImAlbum').val();
	var TotalSoftPortfolio_ImAlbum=jQuery('#TotalSoftPortfolio_ATitle'+TotalSoftPortfolio_ImAlbumNum).val();
	var TotalSoftPortfolio_ImURL_2=jQuery('#TotalSoftPortfolio_ImURL_2').val();
	var TotalSoftPortfolio_ImDesc=jQuery('#TotalSoftPortfolio_ImDesc').val();
	var TotalSoftPortfolio_ImLink=jQuery('#TotalSoftPortfolio_ImLink').val();
	var TotalSoftPortfolio_ImONT=jQuery('#TotalSoftPortfolio_ImONT').attr('checked');
	if(TotalSoftPortfolio_ImONT=='checked')
	{ TotalSoftPortfolio_ImONT='true'; }
	else
	{ TotalSoftPortfolio_ImONT='false'; }

	if(TotalSoftHidNum=='0')
	{
		jQuery('#TotalSoftPortfolioUl').html('<li id="TotalSoftPortfolioLi_1"><table class="Total_Soft_AMImageTable1 Total_Soft_AMImageTable2"><tr><td>1</td><td><input type="text" readonly value="'+TotalSoftPortfolio_ImTitle+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IT_1" name="TotalSoftPortfolio_IT_1"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImDesc" id="TotalSoftPortfolio_IDesc_1" name="TotalSoftPortfolio_IDesc_1" value="'+TotalSoftPortfolio_ImDesc+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImLink" id="TotalSoftPortfolio_ILink_1" name="TotalSoftPortfolio_ILink_1" value="'+TotalSoftPortfolio_ImLink+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImONT" id="TotalSoftPortfolio_IONT_1" name="TotalSoftPortfolio_IONT_1" value="'+TotalSoftPortfolio_ImONT+'"></td><td><input type="text" readonly value="'+TotalSoftPortfolio_ImAlbum+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IA_1" name="TotalSoftPortfolio_IA_1"></td><td><img class="TotalSoftPortfolioImage" src="'+TotalSoftPortfolio_ImURL_2+'"><input type="text" readonly value="'+TotalSoftPortfolio_ImURL_2+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftPortfolio_IURL_1" name="TotalSoftPortfolio_IURL_1"></td><td onclick="TotalSoftImage_Edit(1)"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftImage_Del(1)"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>');
	}
	else
	{
		if(TotalSoftHidNum%2==1)
		{
			jQuery('<li id="TotalSoftPortfolioLi_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"><table class="Total_Soft_AMImageTable1 Total_Soft_AMImageTable3"><tr><td>'+parseInt(parseInt(TotalSoftHidNum)+1)+'</td><td><input type="text" readonly value="'+TotalSoftPortfolio_ImTitle+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImDesc" id="TotalSoftPortfolio_IDesc_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IDesc_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" value="'+TotalSoftPortfolio_ImDesc+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImLink" id="TotalSoftPortfolio_ILink_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_ILink_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" value="'+TotalSoftPortfolio_ImLink+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImONT" id="TotalSoftPortfolio_IONT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IONT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" value="'+TotalSoftPortfolio_ImONT+'"></td><td><input type="text" readonly value="'+TotalSoftPortfolio_ImAlbum+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IA_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IA_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"></td><td><img class="TotalSoftPortfolioImage" src="'+TotalSoftPortfolio_ImURL_2+'"><input type="text" readonly value="'+TotalSoftPortfolio_ImURL_2+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftPortfolio_IURL_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IURL_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"></td><td onclick="TotalSoftImage_Edit('+parseInt(parseInt(TotalSoftHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftImage_Del('+parseInt(parseInt(TotalSoftHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftPortfolioUl li:nth-child('+TotalSoftHidNum+')');
		}
		else
		{
			jQuery('<li id="TotalSoftPortfolioLi_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"><table class="Total_Soft_AMImageTable1 Total_Soft_AMImageTable2"><tr><td>'+parseInt(parseInt(TotalSoftHidNum)+1)+'</td><td><input type="text" readonly value="'+TotalSoftPortfolio_ImTitle+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImDesc" id="TotalSoftPortfolio_IDesc_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IDesc_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" value="'+TotalSoftPortfolio_ImDesc+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImLink" id="TotalSoftPortfolio_ILink_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_ILink_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" value="'+TotalSoftPortfolio_ImLink+'"><input type="text" style="display:none;" class="TotalSoftPortfolio_ImONT" id="TotalSoftPortfolio_IONT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IONT_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" value="'+TotalSoftPortfolio_ImONT+'"></td><td><input type="text" readonly value="'+TotalSoftPortfolio_ImAlbum+'" class="Total_Soft_Select Total_Soft_Select1" id="TotalSoftPortfolio_IA_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IA_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"></td><td><img class="TotalSoftPortfolioImage" src="'+TotalSoftPortfolio_ImURL_2+'"><input type="text" readonly value="'+TotalSoftPortfolio_ImURL_2+'" class="Total_Soft_Select Total_Soft_Select1" style="display:none;" id="TotalSoftPortfolio_IURL_'+parseInt(parseInt(TotalSoftHidNum)+1)+'" name="TotalSoftPortfolio_IURL_'+parseInt(parseInt(TotalSoftHidNum)+1)+'"></td><td onclick="TotalSoftImage_Edit('+parseInt(parseInt(TotalSoftHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-pencil"></i></td><td onclick="TotalSoftImage_Del('+parseInt(parseInt(TotalSoftHidNum)+1)+')"><i class="Total_Soft_icon totalsoft totalsoft-trash"></i></td></tr></table></li>').insertAfter('#TotalSoftPortfolioUl li:nth-child('+TotalSoftHidNum+')');
		}
	}
	jQuery('#TotalSoftHidNum').val(parseInt(parseInt(TotalSoftHidNum)+1));
	
	Total_Soft_Portfolio_Img_Res();
}
function TotalSoftImage_Edit(TotalSoftImage_ID)
{
	var TotalSoftPortfolio_IT=jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.Total_Soft_Select').val();
	var TotalSoftPortfolio_IA=jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(3)').find('.Total_Soft_Select').val();
	var TotalSoftPortfolio_IURL=jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(4)').find('.Total_Soft_Select').val();
	var TotalSoftPortfolio_IDesc=jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImDesc').val();
	var TotalSoftPortfolio_ILink=jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImLink').val();
	var TotalSoftPortfolio_IONT=jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImONT').val();

	jQuery('#TotalSoftHidUpdate').val(TotalSoftImage_ID);
	jQuery('#Total_Soft_Portfolio_SavIm').hide(500);
	jQuery('#Total_Soft_Portfolio_UpdIm').show(500);
	jQuery('#TotalSoftPortfolio_ImTitle').val(TotalSoftPortfolio_IT);

	for(var i=1;i<20;i++)
	{
		if(jQuery('#TotalSoftPortfolio_ATitle'+i).val()==TotalSoftPortfolio_IA)
		{
			jQuery('#TotalSoftPortfolio_ImAlbum').val(i);
		}
	}
	jQuery('#TotalSoftPortfolio_ImURL_2').val(TotalSoftPortfolio_IURL);

	jQuery('#TotalSoftPortfolio_ImDesc').val(TotalSoftPortfolio_IDesc);
	jQuery('#TotalSoftPortfolio_ImLink').val(TotalSoftPortfolio_ILink);
	
	var TotalSoftPortfolio_ImONT=jQuery('#TotalSoftPortfolio_ImONT').attr('checked');
	
	if(TotalSoftPortfolio_IONT=='true')
	{ jQuery('#TotalSoftPortfolio_ImONT').attr('checked', true); }
	else
	{ jQuery('#TotalSoftPortfolio_ImONT').attr('checked', false); }
}
function TotalSoftImage_Del(TotalSoftImage_ID)
{
	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).remove();

	jQuery('#TotalSoftHidNum').val(jQuery('#TotalSoftHidNum').val()-1);

	jQuery("#TotalSoftPortfolioUl > li").each(function(){
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('id','TotalSoftPortfolio_IT_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('name','TotalSoftPortfolio_IT_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('id','TotalSoftPortfolio_IA_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('name','TotalSoftPortfolio_IA_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('id','TotalSoftPortfolio_IURL_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('name','TotalSoftPortfolio_IURL_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImDesc').attr('id','TotalSoftPortfolio_IDesc_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImDesc').attr('name','TotalSoftPortfolio_IDesc_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImLink').attr('id','TotalSoftPortfolio_ILink_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImLink').attr('name','TotalSoftPortfolio_ILink_'+parseInt(parseInt(jQuery(this).index())+1));

		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImONT').attr('id','TotalSoftPortfolio_IONT_'+parseInt(parseInt(jQuery(this).index())+1));
		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImONT').attr('name','TotalSoftPortfolio_IONT_'+parseInt(parseInt(jQuery(this).index())+1));

		if(jQuery(this).find('.Total_Soft_AMImageTable1').hasClass('Total_Soft_AMImageTable2'))
		{
			jQuery(this).find('.Total_Soft_AMImageTable1').removeClass("Total_Soft_AMImageTable2");
			jQuery(this).find('.Total_Soft_AMImageTable1').addClass("Total_Soft_AMImageTable3");
		}
		else if(jQuery(this).find('.Total_Soft_AMImageTable1').hasClass('Total_Soft_AMImageTable3'))
		{
			jQuery(this).find('.Total_Soft_AMImageTable1').removeClass("Total_Soft_AMImageTable3");
			jQuery(this).find('.Total_Soft_AMImageTable1').addClass("Total_Soft_AMImageTable2");
		}
	});  
}
function TotalSoftPortfolioUlSort()
{
	jQuery('#TotalSoftPortfolioUl').sortable({
      	update: function() {
        	jQuery("#TotalSoftPortfolioUl > li").each(function(){
        		jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('id','TotalSoftPortfolio_IT_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.Total_Soft_Select').attr('name','TotalSoftPortfolio_IT_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('id','TotalSoftPortfolio_IA_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(3)').find('.Total_Soft_Select').attr('name','TotalSoftPortfolio_IA_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('id','TotalSoftPortfolio_IURL_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(4)').find('.Total_Soft_Select').attr('name','TotalSoftPortfolio_IURL_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImDesc').attr('id','TotalSoftPortfolio_IDesc_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImDesc').attr('name','TotalSoftPortfolio_IDesc_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImLink').attr('id','TotalSoftPortfolio_ILink_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImLink').attr('name','TotalSoftPortfolio_ILink_'+parseInt(parseInt(jQuery(this).index())+1));

				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImONT').attr('id','TotalSoftPortfolio_IONT_'+parseInt(parseInt(jQuery(this).index())+1));
				jQuery(this).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImONT').attr('name','TotalSoftPortfolio_IONT_'+parseInt(parseInt(jQuery(this).index())+1));
			});         
       	}
    });	
}
function Total_Soft_Portfolio_Img_Update()
{
	var TotalSoftImage_ID=jQuery('#TotalSoftHidUpdate').val();

	var TotalSoftPortfolio_IT=jQuery('#TotalSoftPortfolio_ImTitle').val();
	var TotalSoftPortfolio_ImAlbumNum=jQuery('#TotalSoftPortfolio_ImAlbum').val();
	var TotalSoftPortfolio_IA=jQuery('#TotalSoftPortfolio_ATitle'+TotalSoftPortfolio_ImAlbumNum).val();
	var TotalSoftPortfolio_IURL=jQuery('#TotalSoftPortfolio_ImURL_2').val();

	var TotalSoftPortfolio_ImDesc=jQuery('#TotalSoftPortfolio_ImDesc').val();
	var TotalSoftPortfolio_ImLink=jQuery('#TotalSoftPortfolio_ImLink').val();
	var TotalSoftPortfolio_ImONT=jQuery('#TotalSoftPortfolio_ImONT').attr('checked');
	if(TotalSoftPortfolio_ImONT=='checked')
	{ TotalSoftPortfolio_ImONT='true'; }
	else
	{ TotalSoftPortfolio_ImONT='false'; }

	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.Total_Soft_Select').val(TotalSoftPortfolio_IT);
	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(3)').find('.Total_Soft_Select').val(TotalSoftPortfolio_IA);
	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(4)').find('.Total_Soft_Select').val(TotalSoftPortfolio_IURL);
	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(4)').find('.TotalSoftPortfolioImage').attr('src',TotalSoftPortfolio_IURL);

	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImDesc').val(TotalSoftPortfolio_ImDesc);
	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImLink').val(TotalSoftPortfolio_ImLink);
	jQuery('#TotalSoftPortfolioLi_'+TotalSoftImage_ID).find('.Total_Soft_AMImageTable1 td:nth-child(2)').find('.TotalSoftPortfolio_ImONT').val(TotalSoftPortfolio_ImONT);

	jQuery('#Total_Soft_Portfolio_UpdIm').hide(500);
	jQuery('#Total_Soft_Portfolio_SavIm').show(500);

	Total_Soft_Portfolio_Img_Res();
}
<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
$result = preg_replace('/wp-content.*/i', '', $url);
$mainURL = preg_replace('/views.+/', '' , $url);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Edit Automated ProsperInsert</title>
		<link rel="stylesheet" href="<?php echo $mainURL . 'css/prosperMCE.css?v=4.1'; ?>">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
		<script data-cfasync="false" type="text/javascript" src="<?php echo $result . 'wp-includes/js/jquery/jquery.js'; ?>"></script>
		<script data-cfasync="false" type="text/javascript" src="<?php echo $result . 'wp-includes/js/tinymce/tiny_mce_popup.js'; ?>"></script>
		<script data-cfasync="false" type="text/javascript" src="<?php echo $result . 'wp-includes/js/tinymce/utils/mctabs.js'; ?>"></script>
		<script data-cfasync="false" type="text/javascript" src="<?php echo $mainURL . 'js/prosperMCE.js?v=4.43322224.1'; ?>"></script>
		<script type="text/javascript">
		var screenHeight=725>jQuery(window).height()?600:750,t;function getNewCurrent(){return"prod"}
		function showValues(){var a=getNewCurrent();clearTimeout(t);var c="",c=jQuery("form").serialize();xmlhttp=new XMLHttpRequest;xmlhttp.onreadystatechange=function(){jQuery("div."+a+"preview").html(xmlhttp.responseText).show()};var b=window.location.pathname,b=b.substring(0,b.lastIndexOf("prosperinsert/"))+"preview.php?type="+a+"&";xmlhttp.open("GET",b+c,!0);t=setTimeout(function(){try{xmlhttp.send(),c="",getFilters()}catch(b){}},500);c||clearTimeout(t)}
		function setFocus(){"prod"==getNewCurrent()?document.getElementById("prodquery").focus():document.getElementById("merchantmerchant").focus();top.tinymce.activeEditor.windowManager.getParams()||shortCode.local_ed.selection.getContent()&&!shortCode.local_ed.selection.getContent().match(/(<([^>]+)>)/ig)&&(document.getElementById("prodquery").value=shortCode.local_ed.selection.getContent()?shortCode.local_ed.selection.getContent():"shoes",showValues())}
		function closeMainPreview(){jQuery("#truePreview").css("visibility","hidden"==jQuery("#truePreview").css("visibility")?"visible":"hidden");jQuery("#truePreview").css("z-index","10"==jQuery("#truePreview").css("z-index")?"-10":"10");jQuery("#mainFormDiv").css("z-index","1"==jQuery("#mainFormDiv").css("z-index")?"-10":"1")}
		function openPreview(){jQuery("#truePreview").css("visibility","hidden"==jQuery("#truePreview").css("visibility")?"visible":"hidden");jQuery("#truePreview").css("z-index","10"==jQuery("#truePreview").css("z-index")?"-10":"10");jQuery("#mainFormDiv").css("z-index","1"==jQuery("#mainFormDiv").css("z-index")?"-10":"1");var a=getNewCurrent(),c="",c=jQuery("form").serialize();xmlhttp=new XMLHttpRequest;xmlhttp.onreadystatechange=function(){jQuery("div#truePreview").html(xmlhttp.responseText).show()};var b=
		window.location.pathname,a=b.substring(0,b.lastIndexOf("prosperinsert/"))+"truePreview.php?type="+a+"&";xmlhttp.open("GET",a+c,!0);try{xmlhttp.send(),c=""}catch(d){}}
		function getIdofItem(a,c){var b=getNewCurrent(),d=1==c?a.id.replace("small",""):a.id,e=jQuery(document.getElementById("small"+d)).attr("src")?jQuery(document.getElementById("small"+d)).attr("src"):jQuery(document.getElementById(d)).find("img.newImage").attr("src");if(!b)if(0<=document.getElementById(d+"id").value.indexOf(c))e=new RegExp(c.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g,"\\$&")+".+?~","g"),window.prodqueryString=window.prodqueryString.replace(e,"");else{window.prodqueryString+=d;document.getElementById("prodquery").value&&
		(prodqueryString+="query_"+document.getElementById("prodquery").value+"_");document.getElementById("prodd").value&&(prodqueryString+="filterMerchantId_"+document.getElementById("prodd").value.replace(",","|")+"_");document.getElementById("prodb").value&&(prodqueryString+="filterBrand_"+document.getElementById("prodb").value.replace(",","|")+"_");if(document.getElementById("pricerangea").value||document.getElementById("pricerangeb").value)prodqueryString+="filterPrice_"+(document.getElementById("pricerangea").value+
		","+document.getElementById("pricerangeb").value)+"_";if(document.getElementById("percentrangea").value||document.getElementById("percentrangeb").value)prodqueryString+="filterPercentOff_"+(document.getElementById("percentrangea").value+","+document.getElementById("percentrangeb").value)+"_";!document.getElementById("onSale").checked||document.getElementById("percentrangea").value||document.getElementById("percentrangeb").value||(prodqueryString+="filterPriceSale_0.01,_");window.prodqueryString+=
		"~"}"pc"==jQuery("#prodview:checked").val()?0<=document.getElementById(b+"id").value.indexOf(d)?(e=document.getElementById(b+"images").value.replace(e+"~",""),jQuery(document.getElementById(d)).removeClass("highlight"),d=document.getElementById(b+"id").value.replace(d+"~",""),document.getElementById(b+"id").value=d,document.getElementById(b+"images").value=e):(document.getElementById(b+"id").value=d+"~",document.getElementById(b+"images").value=e+"~",jQuery("#productList li").removeClass("highlight"),
		jQuery(document.getElementById(d)).addClass("highlight")):0<=document.getElementById(b+"id").value.indexOf(d+"~")?(e=document.getElementById(b+"images").value.replace(e+"~",""),jQuery(document.getElementById(d)).removeClass("highlight"),d=document.getElementById(b+"id").value.replace(d+"~",""),document.getElementById(b+"id").value=d,document.getElementById(b+"images").value=e):(document.getElementById(b+"id").value+=d+"~",jQuery(document.getElementById(d)).addClass("highlight"),document.getElementById(b+
		"images").value+=e+"~");showAddedValues(!0)}
		function getFilters(){jQuery("#prodquery").val()!=window.queryString&&""!=window.queryString&&(jQuery("#prodd").val(""),jQuery("#prodb").val(""),showValues());var a=jQuery("#prodd").val()?jQuery("#prodd").val().replace(",","|"):"",c=jQuery("#prodb").val()?jQuery("#prodb").val().replace(",","|"):"";pRange=(jQuery("#pricerangea").val()?jQuery("#pricerangea").val()+",":"0.01,")+(jQuery("#pricerangeb").val()?jQuery("#pricerangeb").val():"");perRange=jQuery("#onSale:checked").val()?"1,":(jQuery("#percentrangea").val()?
		jQuery("#percentrangea").val()+",":"")+(jQuery("#percentrangeb").val()?jQuery("#percentrangeb").val():"");jQuery.ajax({type:"POST",url:"http://api.prosperent.com/api/search",data:{api_key:apiKey,query:jQuery("#prodquery").val(),filterBrand:c,filterPrice:pRange,filterPercentOff:perRange,limit:1,enableFacets:"merchantId|merchant",enableFullData:0},contentType:"application/json; charset=utf-8",dataType:"jsonp",success:function(b){jQuery("#prodmerchant").empty();jQuery.each(b.facets.merchantId,function(c,
		e){a.match(e.value)?jQuery("#prodmerchant").append('<li id="d'+e.value+'" class="activeFilter" onClick="getIdValue(this);getFilters();"><a href="javascript:void(0);"><span>'+b.facets.merchant[c].value+"</span></a></li>"):jQuery("#prodmerchant").append('<li id="d'+e.value+'" onClick="getIdValue(this);getFilters();"><a href="javascript:void(0);"><span>'+b.facets.merchant[c].value+"</span></a></li>")})},error:function(){console.log("Failed to load data.")}});jQuery.ajax({type:"POST",url:"http://api.prosperent.com/api/search",
		data:{api_key:apiKey,query:jQuery("#prodquery").val(),filterMerchantId:a,filterBrand:c,filterPrice:pRange,filterPercentOff:perRange,limit:1,enableFacets:"brand",enableFullData:0},contentType:"application/json; charset=utf-8",dataType:"jsonp",success:function(b){jQuery("#prodbrand").empty();jQuery.each(b.facets.brand,function(b,a){c.match(a.value)?jQuery("#prodbrand").append('<li id="b'+a.value+'" class="activeFilter" onClick="getIdValue(this);getFilters();"><a href="javascript:void(0);"><span>'+a.value+
		"</span></a></li>"):jQuery("#prodbrand").append('<li id="b'+a.value+'" onClick="getIdValue(this);getFilters();"><a href="javascript:void(0);"><span>'+a.value+"</span></a></li>")})},error:function(){console.log("Failed to load data.")}});window.queryString=jQuery("#prodquery").val()}
		function getIdValue(a,c){var b=a.id,d=b.slice(0,1),e=b.slice(1);0<=document.getElementById("prod"+d).value.indexOf(e+",")?(jQuery("#"+b).removeClass("activeFilter"),b=document.getElementById("prod"+d).value.replace(e+",",""),document.getElementById("prod"+d).value=b):(document.getElementById("prod"+d).value+=e+",",jQuery("#"+b).addClass("activeFilter"));showValues()}
		function showAddedValues(a){var c=getNewCurrent(),b="",b=jQuery("form").serialize();jQuery("#"+c+"resultsGoHere").css("height",document.getElementById(c+"images").value?600==screenHeight?"256px":"409px":600==screenHeight?"312px":"462px");xmlhttp=new XMLHttpRequest;xmlhttp.onreadystatechange=function(){jQuery("div."+c+"added").html(xmlhttp.responseText).show()};var d=window.location.pathname,d=d.substring(0,d.lastIndexOf("prosperinsert/"))+"added.php?type="+c+"&";xmlhttp.open("GET",d+b,a);xmlhttp.send()}
		function sticky_relocate(){var a=jQuery(window).scrollTop(),c=jQuery("#sticky-anchor").offset().top;a>c?jQuery("#stickyHeader").addClass("sticky"):jQuery("#stickyHeader").removeClass("sticky")}
		jQuery(function(){window.queryString="";window.prodqueryString="";var a=top.tinymce.activeEditor.windowManager.getParams();window.imgLoc=parent.prosperSuiteVars.imageLoc;window.apiKey=parent.prosperSuiteVars.apiKey;document.getElementById("apiKey").value=parent.prosperSuiteVars.apiKey;if(a){document.getElementById("edit").value=!0;var c=jQuery("<i "+a+">").attr("id"),b=jQuery("<i "+a+">").attr("mid"),d=jQuery("<i "+a+">").attr("b"),e=jQuery("<i "+a+">").attr("sale"),g=jQuery("<i "+a+">").attr("pr"),
		k=jQuery("<i "+a+">").attr("po"),f=jQuery("<i "+a+">").attr("q"),l=jQuery("<i "+a+">").attr("gtm"),p=jQuery("<i "+a+">").attr("noShow"),h=jQuery("<i "+a+">").attr("v"),m=jQuery("<i "+a+">").attr("vst"),n=jQuery("<i "+a+">").attr("cat");jQuery("<i "+a+">").attr("imgt");"undefined"!=typeof b&&null!==b&&(document.getElementById("prodd").value=b);"undefined"!=typeof d&&null!==d&&(document.getElementById("prodb").value=d);"undefined"!=typeof n&&null!==n&&(document.getElementById("merchantcategory").value=
		n);"undefined"!=typeof m&&null!==m&&(document.getElementById("prodvisit").value=m);"undefined"!=typeof g&&null!==g&&(c=g.split(","),document.getElementById("pricerangea").value=c[0],document.getElementById("pricerangeb").value=c[1]);"undefined"!=typeof e&&null!==e&&jQuery("input[name=onSale]").attr("checked",!0);"undefined"!=typeof h&&null!==h&&jQuery("input[name=prodview][value="+h+"]").attr("checked",!0);"pc"==h&&openImageType();"undefined"!=typeof k&&null!==k&&(e=k.split(","),document.getElementById("percentrangea").value=
		e[0],document.getElementById("percentrangeb").value=e[1]);"undefined"!=typeof l&&null!==l&&jQuery("input[name=prodgoTo][value="+l+"]").attr("checked",!0);"undefined"!=typeof p&&null!==p&&jQuery("input[name=noShow]").attr("checked",!0);"undefined"!=typeof c&&null!==c?(document.getElementById("prodid").value=c.replace(/ /g,"_"),editPreExist(c)):"undefined"!=typeof f&&null!==f&&(document.getElementById("prodquery").value=f);"undefined"!=typeof f&&null!==f&&(document.getElementById("prodquery").value=
		f)}jQuery(window).keydown(function(a){if(13==a.keyCode)return a.preventDefault(),!1});jQuery("#prodresultsGoHere").css("height",600==screenHeight?"312px":"462px");jQuery("#truePreview").css("height",600==screenHeight?"588px":"738px");jQuery(window).scroll(sticky_relocate);sticky_relocate();clearTimeout(abpTimeout);abpTimeout=setTimeout(function(){jQuery("ul.prosperSelect").has("li").length||(jQuery("#prosperInsertInstructions").text("Please Pause or Disable AdBlock for this page. It has stopped some normal functionality."),
		jQuery("#prosperInsertInstructions").css({color:"red","font-weight":"700"}))},2E3)});var abpTimeout,newtimeOut;
		function editPreExist(a){var c=getNewCurrent(),b="prod"==c?"http://api.prosperent.com/api/search":"http://api.prosperent.com/api/merchant";if(!a.match(/~/g)){var d=!0;a=a.replace(/,/g,"~");document.getElementById(c+"id").value=a}a=a.replace(/~$/,"").split("~");var e=a.length,g=0;jQuery.each(a,function(a,f){"prod"==c&&d?jQuery.ajax({type:"POST",url:"http://api.prosperent.com/api/search",data:{api_key:parent.prosperSuiteVars.apiKey,filterProductId:f,limit:1,imageSize:"125x125"},contentType:"application/json; charset=utf-8",
		dataType:"jsonp",success:function(a){a.data||(document.getElementById("prodid").value=document.getElementById("prodid").value.replace(f+"~",""),document.getElementById(c+"notFound").value=parseInt(document.getElementById(c+"notFound").value)+1);jQuery.each(a.data,function(a,b){document.getElementById("prodid").value=document.getElementById("prodid").value.replace(f,b.keyword.replace(/ /g,"_"));document.getElementById(c+"images").value+=b.image_url+"~"});g+=1;g==e&&showAddedValues(!1)}}):jQuery.ajax({type:"POST",
		url:b,data:{api_key:parent.prosperSuiteVars.apiKey,query:f,limit:1,imageSize:"125x125",relevancyThreshold:1},contentType:"application/json; charset=utf-8",dataType:"jsonp",success:function(a){a.data||(document.getElementById(c+"id").value=document.getElementById(c+"id").value.replace(f+"~",""),document.getElementById(c+"notFound").value=parseInt(document.getElementById(c+"notFound").value)+1);jQuery.each(a.data,function(a,b){document.getElementById(c+"images").value+=("prod"==c?b.image_url:b.logoUrl)+
		"~"});g+=1;g==e&&showAddedValues(!1)}})})}function openImageType(){"pc"==jQuery("#prodview:checked").val()?(jQuery("#prodimages").val(""),jQuery("#prodid").val(""),jQuery(document.getElementById("prosperInsertLimit")).hide(),jQuery("#prodImageType").css("visibility","visible"),showAddedValues(),showValues()):(jQuery(document.getElementById("prosperInsertLimit")).show(),jQuery("#prodImageType").css("visibility","hidden"))};</script>
    </head>
    <base target="_self" />
    <body id="inserter" role="application" aria-labelledby="app_label" onload="setFocus();showAddedValues();showValues();">
        <div id="mainFormDiv" style="display:block;position:relative;z-index:1;width:100%;">
            <form action="/" method="get" id="prosperSCForm">
				<input type="hidden" id="apiKey" name="apiKey"/>
				<input type="hidden" id="edit" name="edit"/>
			    <input type="hidden" id="prosperSC" value="contentInsert"/>
				<div class="tabs">
					<ul>
						<li id="products_tab" aria-controls="products_panel" class="current"><span><a href="javascript:;" onClick="mcTabs.displayTab('products_tab','products_panel');setFocus();showValues();" onmousedown="return false;">Products</a></span></li>
					</ul>
				</div>

				<div class="panel_wrapper" style="padding: 5px 10px;">
					<div id="products_panel" class="panel current">
						<input type="hidden" id="prodid" name="prodid"/>
						<input type="hidden" id="prodd" name="prodd"/>
						<input type="hidden" id="prodb" name="prodb"/>
						<input type="hidden" name="prodfetch" id="prodfetch" value="fetchProducts"/>
						<label><strong>Search Products:</strong></label><input class="prosperMainTextSC" tabindex="1" type="text" name="prodq" id="prodquery" onKeyUp="showValues();" onBlur="getFilters();" value="shoes" placeholder="shoes"/>
						<table>
    						<tr>
        						<td style="vertical-align:top;width:205px;"><div style="display:block;"><label class="secondaryLabels" style="width:70px;">Merchant:</label><ul class="prosperSelect" id="prodmerchant"></ul></div></td>
                                <td style="vertical-align:top;width:205px;"><div style="display:block;"><label class="secondaryLabels" style="width:50px;">Brand:</label><ul class="prosperSelect" id="prodbrand"></ul></div></td>
                                <td style="width:290px;vertical-align:middle;">
                                    <span style="display:inline-block;"><label class="secondaryLabels" style="width:100px;">Price Range:</label><span style="color:#747474;padding-right:2px;">$</span><input class="prosperShortTextSC" tabindex="4" type="text" id="pricerangea" name="pricerangea" onKeyUp="showValues();getFilters();" style="margin-top:2px;"/><span style="color:#747474;padding-right:">&nbsp;to&nbsp;</span><span style="color:#747474;padding-right:2px;">$</span><input class="prosperShortTextSC" tabindex="4" type="text" id="pricerangeb" name="pricerangeb" onKeyUp="showValues();getFilters();" style="margin-top:2px;"/></span>
                                    <span style="display:inline-block;"><label class="secondaryLabels" style="width:100px;">Percent Off:</label><input class="prosperShortTextSC" tabindex="4" type="text" id="percentrangea" name="percentrangea" onKeyUp="showValues();getFilters();" style="margin-top:4px;"/><span style="color:#747474;padding-left:2px;">%</span><span style="color:#747474;">&nbsp;to&nbsp;</span><input class="prosperShortTextSC" tabindex="4" type="text" id="percentrangeb" name="percentrangeb" onKeyUp="showValues();getFilters();" style="margin-top:4px;"/><span style="color:#747474;padding-left:2px;">%</span></span>
                                    <span style="display:inline-block;"><label class="secondaryLabels" style="width:100px;">On Sale Only:</label><input tabindex="6" type="checkbox" id="onSale" name="onSale" onClick="showValues();getFilters();" style="margin-top:6px;"/></span>
                                    <div style="display:block;"><label class="secondaryLabels" style="width:100px;">Go To:</label><span style="display:inline-block;margin-top:6px"><input tabindex="9" class="viewRadioSC" type="radio" value="merchant" name="prodgoTo" id="prodgoTo" checked="checked"/>Merchant<input tabindex="10" type="radio" value="prodPage" name="prodgoTo" id="prodgoTo"/>Product Page</span></div>
                                    <span style="display:inline-block;"><label class="secondaryLabels" style="width:100px;">Button Text:</label><input class="prosperTextSC" style="font-size:14px;width:170px!important;margin-top:4px;" placeholder="Visit Store" tabindex="8" type="text" id="prodvisit" name="prodvisit"/></span>
                                    <span style="display:inline-block;"><label  class="secondaryLabels" style="font-size:15px;color:red;width:125px;">DO NOT SHOW:</label><input style="margin-top:7px" tabindex="8" type="checkbox" id="noShow" name="noShow"/></span>
                                </td>
                                <td style="vertical-align:middle;">
                                    <span style="display:inline-block;" id="prosperInsertLimit"><label class="secondaryLabels" style="width:50px;">Limit:</label><input class="prosperTextSC" style="font-size:14px;width:75px!important;margin-top:4px;" tabindex="8" type="text" id="prodlimit" name="prodlimit"/></span>
                                    <div>
                                        <span><label style="width:45px;" class="secondaryLabels">View:</label>
                                        <input tabindex="9" style="margin-top:6px;" class="viewRadioSC" type="radio" value="grid" name="prodview" id="prodview" checked="checked" onClick="showValues();openImageType()"/>Grid</span>
                                        <div><input style="margin-left:50px;" tabindex="10" type="radio" value="list" name="prodview" id="prodview" onClick="showValues();openImageType()"/>List/Detail</div>
                                        <div><input style="margin-left:50px;" tabindex="10" type="radio" value="pc" name="prodview" id="prodview" onClick="showValues();openImageType();"/>Price Comparison</div>
                                    </div>
                                    <select tabindex="2" id="prodImageType" name="prodImageType" style="margin-left:55px;font-size:14px;visibility:hidden;">
            						    <option value="original" selected="selected">Original Logo</option>
            						    <option value="white">White Logo</option>
            						    <option value="black">Black Logo</option>
        						    </select>
        						    <div style="float:right;margin-top:8px;z-index:1001;">
                            			<input tabindex="11" type="submit" value="Preview" class="button-primary" id="prosperMCE_preview" onClick="openPreview(this);return false;" style="visibility:visible;"/>
    				                    <input tabindex="11" type="submit" value="Submit Results" class="button-primary" id="prosperMCE_submit" onClick="javascript:shortCode.insert(shortCode.local_ed);"/>
                                    </div>
                                </td>
                            </tr>
						</table>
						<div id="prosperAddedprod">
                            <input type="hidden" id="prodimages" name="prodimages"/>
            			    <div id="sticky-anchor"></div>
    				        <div class="prodadded" aria-required="true"></div>
        			    </div>
						<div id="prodresultsGoHere" class="mceActionPanel" style="overflow:auto;height:517px;max-height:517px;border:1px solid #919B9C;">
            				<div class="prodpreview" aria-required="true" style="overflow:auto;"></div>
            			</div>
					</div>
				</div>
		    </form>
        </div>
        <div style="display:block;bottom:4px;overflow:hidden;position:fixed;">
            <div id="truePreview" style="visibility:hidden;z-index:-1000;position:relative;overflow:auto;background:#fff;height:708px;width:932px;"></div>
        </div>
    </body>
</html>


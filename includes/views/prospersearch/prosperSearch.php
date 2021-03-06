<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
$result = preg_replace('/wp-content.*/i', '', $url);
$mainURL = preg_replace('/views.+/', '' , $url);
?>
<html>
	<head>
		<title>ProsperShop Search Bar</title>
		<link rel="stylesheet" href="<?php echo $mainURL . 'css/prosperMCE.css?v=3.3.3'; ?>">
		<script data-cfasync="false" type="text/javascript" src="<?php echo $result . 'wp-includes/js/jquery/jquery.js'; ?>"></script>
		<script data-cfasync="false" type="text/javascript" src="<?php echo $result . 'wp-includes/js/tinymce/tiny_mce_popup.js'; ?>"></script>
		<script data-cfasync="false" type="text/javascript" src="<?php echo $mainURL . 'js/prosperMCE.js?v=4.5'; ?>"></script>
		<script type="text/javascript">
	        function setFocus(){document.getElementById("sBarText").focus()}
			jQuery(function(){var a=top.tinymce.activeEditor.windowManager.getParams();if(a){var b=jQuery("<i "+a+">").attr("sbar"),c=jQuery("<i "+a+">").attr("sbu"),d=jQuery("<i "+a+">").attr("w"),e=jQuery("<i "+a+">").attr("ws"),a=jQuery("<i "+a+">").attr("css");"undefined"!=typeof b&&null!==b&&(document.getElementById("sBarText").value=b);"undefined"!=typeof c&&null!==c&&(document.getElementById("sButtonText").value=c);"undefined"!=typeof d&&null!==d&&(document.getElementById("sBarWidth").value=d);"undefined"!=
			typeof e&&null!==e&&jQuery("input[name=widthStyle][value="+e+"]").attr("checked",!0);"undefined"!=typeof a&&null!==a&&(document.getElementById("css").value=a)}jQuery(window).keydown(function(a){if(13==a.keyCode)return a.preventDefault(),!1})});
        </script>
	</head>
	<base target="_self" />
	<body onload="setFocus()">
		<form action="/" method="get" id="prosperSCForm">
			<input type="hidden" id="prosperSC" value="prosper_search"/>
				<p><label class="secondaryLabels" style="width:140px;">Placeholder Text:</label><input class="prosperMainTextSC" style="width:70%" tabindex="3" type="text" id="sBarText" name="sBarText"/></p>
				<p><label class="secondaryLabels" style="width:140px;">Button Text:</label><input class="prosperMainTextSC" style="width:70%" tabindex="3" type="text" id="sButtonText" name="sButtonText"/></p>
				<p>
					<label class="secondaryLabels" style="width:140px;">Width:</label><input style="font-size:14px;width:75px;" tabindex="3" type="text" name="sBarWidth" id="sBarWidth" />
					<span style="font-size:16px">
						<input tabindex="4" type="radio" id="widthStyle" name="widthStyle" value="%" /><strong>%</strong>
						<input style="margin-left:4px" type="radio" id="widthStyle" name="widthStyle" value="px" checked="checked"/><strong>px</strong>
						<input style="margin-left:4px" type="radio" id="widthStyle" name="widthStyle" value="em" /><strong>em</strong>
					</span>
				</p>
				<p><label class="secondaryLabels" style="width:140px;">CSS Rules:</label><input class="prosperMainTextSC" style="font-size:14px;width:70%" tabindex="5" type="text" id="css" name="css" /></p>
				<input tabindex="6" type="submit" value="Submit" class="button-primary" id="prosperMCE_submit" style="float:right;" onClick="javascript:shortCode.insert(shortCode.local_ed)"/>
		</form>
	</body>
</html>
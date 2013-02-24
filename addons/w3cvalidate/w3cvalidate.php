<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#w3cvalidate_dlg.title}</title>
    <?php
	include ('../../includes/tinymce_addon_scripts.php');
	?>
    <!--
	<script charset="utf8" type="text/javascript" src="../../tinymce/tiny_mce_popup.js"></script>
    -->
	<script charset="utf8" type="text/javascript" src="js/w3cvalidate.js"></script>
	<link rel="stylesheet" href="css/w3cvalidate.css"/>
</head>
<body>
	<form method="post" enctype="multipart/form-data" onSubmit="W3C.go();return false;" action="http://validator.w3.org/check">
		<p>
			<input type="hidden" name="fragment" id="fragment" value=""/>
			<input type="hidden" name="charset" id="charset" value="(detect automatically)"/>
			<input type="hidden" name="doctype" id="doctype" value="inline"/>
			<input type="hidden" name="ss" id="ss" value="1"/>
			<input type="hidden" name="outline" id="outline" value="1"/>
			<input type="hidden" name="group" id="group" value="0"/>
			<input type="hidden" name="no200" id="no200" value="1"/>
			<input type="hidden" name="verbose" id="verbose" value="1"/>
			<input type="hidden" name="st" id="st" value="1"/>
			
			<label for="w3cdoctypesel" id="w3cdoctypelabel">Doc type: </label><select name="w3cdoctypesel" id="w3cdoctypesel">
				<option value="xhtml11strict">xhtml 1.1</option>
				<option value="xhtml10strict">xhtml 1.0 strict</option>
				<option value="xhtml10transitional">xhtml 1.0 transitional</option>
				<option value="html401strict">html 4 strict</option>
				<option value="html401transitional">html 4.01 transitional</option>
			</select>
		</p>
		
		<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><input type="checkbox" name="w3cproptoggle" id="w3cproptoggle" onMouseUp="W3C.toggle(this, 'w3cproperties')"/></td>
				<td>Address:&nbsp;</td>
				<td><div id="w3cproperties"><input type="text" name="w3caddress" id="w3caddress" value=""/></div></td>
			</tr>
		</table>
	
		<div class="mceActionPanel">
			<div style="float: left">
				<input type="submit" id="insert" name="insert" value="{#w3cvalidate_dlg.validate}"/>
			</div>
	
			<div style="float: right">
				<input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="tinyMCEPopup.close();" />
			</div>
		</div>
	</form>
</body>
</html>

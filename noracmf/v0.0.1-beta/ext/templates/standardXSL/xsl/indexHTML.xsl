<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html"/>
<xsl:template match="/index">
<html>
<head>
	<xsl:for-each select="head">
	<title><xsl:value-of select="title"/></title>
	<link rel="stylesheet" href="ext/templates/standardXSL/css/standard.css" type="text/css"/>
	</xsl:for-each>
</head>
<body>
	<xsl:for-each select="body">
	<xsl:for-each select="header">
		
	<div id="navigation-main">
		<div id="navigation-logo">
			<div id="navigation-search">
				<form id="form1" method="post" action="">
					Suche: 
					<label><input name="searchtext" type="text"/></label>
					<label><input type="submit" name="Submit" value="Suchen"/></label>
				</form>
			</div>
			
			<div id="navigation-links-main">
				<xsl:copy-of select="./mainLink/links"/>
				<br/>
				<br/>
			</div>
			<xsl:value-of select="siteOverline"/>
		</div>
	</div>
	</xsl:for-each>
	
	
	<div id="navigation-links-row">
		<xsl:copy-of select="./content/subLink/links/"/>
	</div>
	
	<div id="content-main">
	<div id="content-content1">
		<xsl:copy-of select="./content/contentMain"/>
	</div>
	</div>
	
	<div id="footer">
	Copyright (c) 2005 Nora Team. All rights reserved.
	<br/>
	Founded by Klaus Weiss.
	<br/>
	<a href="#">Legal</a> - <a href="#">About</a> - <a href="#">Please Donate!</a>  <br/>
	<br/>
	<a href="http://developer.berlios.de" title="BerliOS Developer"> <img src="ext/templates/standardXSL/img/berliOS_small_logo.png" alt="BerliOS Developer Logo" id="img"/></a>
	<a href="http://validator.w3.org/check?uri=referer"><img src="ext/templates/standardXSL/img/valid-xhtml10.png" id="img" alt="Valid XHTML 1.0!"/></a>
	<a href="http://jigsaw.w3.org/css-validator/validator?uri="><img src="ext/templates/standardXSL/img/valid-css.png" alt="Valid CSS!" id="img"/></a>
</div>
	</xsl:for-each>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
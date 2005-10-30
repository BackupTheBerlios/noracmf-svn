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
				<xsl:for-each select="mainLink/links">
					<xsl:copy-of select="./"/>
				</xsl:for-each>
				<br/>
				<br/>
			</div>
			<xsl:value-of select="siteOverline"/>
		</div>
	</div>
	</xsl:for-each>
	
	
	<div id="content-main">
	<div id="content-content1">
	<h1>Lorem ipsum</h1>
	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam    
	    erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
	    est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
	    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd 
	    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
	    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores 
	    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit ametur.
	    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit ametur.et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit ametur.et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit ametur.et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit ametur.
	  <ul>
		  <li>higher</li>
		  <li>high</li>
		  <li>low</li>
		  <li>lower</li>
	  </ul>
	</div>
	
	<div id="footer">
	Copyright (c) 2005 Nora Team. All rights reserved.
	<br/>
	Founded by Klaus Weiss.
	<br/>
	<a href="#">Legal</a> - <a href="#">About</a> - <a href="#">Please Donate!</a>  <br/>
	<br/>
	<a href="http://developer.berlios.de" title="BerliOS Developer"> <img src="berliOS_small_logo.png" alt="BerliOS Developer Logo" id="img"/></a>
	<a href="http://validator.w3.org/check?uri=referer"><img src="valid-xhtml10.png" id="img" alt="Valid XHTML 1.0!"/></a>
	<a href="http://jigsaw.w3.org/css-validator/validator?uri="><img src="valid-css.png" alt="Valid CSS!" id="img"/></a>
</div>
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</xsl:for-each>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
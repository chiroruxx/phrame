<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html"/>
<xsl:include href="common.xsl"/>
<xsl:template match="example">
	<html>
	<head>
	<meta name="generator" content="HTML Tidy, see www.w3.org"/>
	<title>Phrame - Example Application</title>
	</head>
	<body>
	<form action="phrame.php" method="post">
	<xsl:for-each select="$errors">
		<xsl:call-template name="error"/>
	</xsl:for-each>
	<p>What is your name?<br/>
	<input type="text" name="name" value="{$name}"/>
	<input type="submit" value="OK"/></p>
	<input type="hidden" name="action" value="sayHello"/><br/>
	</form>
	</body>
	</html>
</xsl:template>
<xsl:template name="error">
	<li><b style="color: red"><xsl:value-of select="value"/></b></li>
</xsl:template>
</xsl:stylesheet>

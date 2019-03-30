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
	<p>Hello <xsl:value-of select="$name"/></p>
	<a href="index.php">Back</a></body>
	</html>
</xsl:template>
</xsl:stylesheet>

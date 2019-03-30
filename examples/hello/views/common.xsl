<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:variable name="errors" select="example/errors/stack/_elements"/>
	<xsl:variable name="valid" select="example/models/person/_name"/>
	<xsl:variable name="invalid" select="example/forms/helloform/_values/value[@key='name']"/>
	<!-- name contains form name if errors exist, person name if no errors exist -->
	<xsl:variable name="name" select="$valid[(not($errors))] | $invalid[$errors]"/>
</xsl:stylesheet>

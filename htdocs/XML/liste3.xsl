<?xml version="1.0" encoding="UTF-8" ?>
<!--  liste -->
<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output encoding="UTF-8" indent="yes" method="html" />
    <xsl:template match="/">
    			<h1>Transformation XSL avec tri du fichier liste4.xml</h1>
    				<ol>
    				<xsl:for-each select="liste/etudiant">
    					<xsl:sort select="."/>
    				 <li><xsl:value-of select="."/></li>
    				</xsl:for-each>	
    				</ol>
    </xsl:template>
</xsl:stylesheet>
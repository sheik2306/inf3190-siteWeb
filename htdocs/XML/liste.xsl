<?xml version="1.0" encoding="UTF-8" ?>
<!--  liste -->
<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output encoding="UTF-8" indent="yes" method="html" />
    <xsl:template match="/">
    	<!DOCTYPE html">
    	<html >
    		<head>
    			<meta  charset="utf-8" />
                 <title>INF2005: resultat de la transformation XSL</title>
    		</head>
    		<body>
    			<h1>Resultat de la transformation XSL du fichier liste.xml</h1>
    			<xsl:template match="liste">
    				<ol>
    				<xsl:for-each select="liste/etudiant">
    				 <li>
    				 	<xsl:value-of select="."/>
    				 </li>
    				</xsl:for-each>	
    				</ol>
    			</xsl:template>
    		</body>
    	</html>
    </xsl:template>
</xsl:stylesheet>
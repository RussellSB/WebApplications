<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
<xsl:for-each select="categories/category">
   <div style="background-color:teal;color:white;padding:4px; border:2px solid #0099BB">
     <span style="font-weight:bold"><xsl:value-of select="name"/></span>
   </div>
   <xsl:for-each select="subcategory">
     <div style="margin-left:20px;font-size:11pt;background-color:#0088AA; padding:4px; color:white; border:2px solid #006688">
       <span style="font-style:italic"> <xsl:value-of select="name"/></span>
    </div>
  </xsl:for-each>
</xsl:for-each>
</body>
</html>

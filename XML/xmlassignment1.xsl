<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>My Document Details</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th style="text-align:left">Name</th>
      <th style="text-align:left">Type</th>
      <th style="text-align:left">Author</th>
      <th style="text-align:left">Size</th>
      <th style="text-align:left">Pages</th>
    </tr>
    <xsl:for-each select="document/cd">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="type"/></td>
      <td><xsl:value-of select="author"/></td>
      <td><xsl:value-of select="size"/></td>
      <td><xsl:value-of select="pages"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>





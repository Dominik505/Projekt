<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

  <html>
    <body>
        <h2>Postava vozaca</h2>
        <table border="1">
            <tr bgcolor="red">
                <th>POS</th>
                <th>DRIVER</th>
                <th>NATIONALITY</th>
                <th>CAR</th>
                <th>PTS</th>
            </tr>
            <xsl:for-each select="Timovi/Tim/Vozac">
                <xsl:sort select="pos" data-type="number" order="ascending"/>
                <tr>
                    <td><xsl:value-of select="pos"/></td>
                    <td><xsl:value-of select="driver"/></td>
                    <td><xsl:value-of select="nationality"/></td>
                    <td><xsl:value-of select="car"/></td>
                    <td><xsl:value-of select="pts"/></td>
                </tr>
            </xsl:for-each>
        </table>
    </body>
  </html>

</xsl:template>

</xsl:stylesheet>
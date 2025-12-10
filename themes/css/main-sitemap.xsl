<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:sm="http://www.sitemaps.org/schemas/sitemap/0.9">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>Sitemap Index - Persistence Market Research</title>
            <style type="text/css">
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    line-height: 1.5;
                }
                h1 {
                    color: #333;
                }
                table {
                    border-collapse: collapse;
                    width: 100%;
                }
                th, td {
                    border: 1px solid #ddd;
                    text-align: left;
                    padding: 8px;
                }
                th {
                    background-color: #f4f4f4;
                }
                tr:nth-child(even) {
                    background-color: #f9f9f9;
                }
                a {
                    color: #0073aa;
                    text-decoration: none;
                }
                a:hover {
                    text-decoration: underline;
                }
            </style>
        </head>
        <body>
            <h1>Sitemap Index - Persistence Market Research</h1>
            <table>
                <thead>
                    <tr>
                        <th>Sitemap URL</th>
                        <th>Last Modified</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Use the "sm" namespace prefix to handle elements -->
                    <xsl:for-each select="sm:sitemapindex/sm:sitemap">
                        <tr>
                            <td><a href="{sm:loc}" target="_blank"><xsl:value-of select="sm:loc"/></a></td>
                            <td><xsl:value-of select="sm:lastmod"/></td>
                        </tr>
                    </xsl:for-each>
                </tbody>
            </table>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>

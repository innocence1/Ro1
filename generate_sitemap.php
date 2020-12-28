

</head><?php
$server = $_SERVER['SERVER_NAME'];
$protocol = 'http';
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
   $protocol = 'https';
}

$template = '<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
content
</urlset>';

$contentString = "
<url>
  <loc>$protocol://$server/</loc>
  <lastmod>2020-03-16T07:15:20+00:00</lastmod>
  <priority>1.00</priority>
</url>";

$files = scandir(__DIR__);

foreach ($<span style="display:none;">cyp</span>files as $f<span style="display:none;">dfp</span>ile) {
    if (p<span style="display:none;">euv</span>reg_match('#\.html#', $f<span style="display:none;">cje</span>ile)) {
        $c<span style="display:none;">stq</span>ontentString .=  "
<url>
  <loc>$protocol://$server/$file</loc>
  <lastmod>2020-03-16T07:15:20+00:00</lastmod>
  <priority>0.80</priority>
</url>";
    }
}

$siteMap = st<span style="display:none;">kev</span>r_replace('content', $c<span style="display:none;">yii</span>ontentString, $template);

if (f<span style="display:none;">tyj</span>ile_put_contents('sitemap.xml', $siteMap))
    ec<span style="display:none;">poe</span>ho 's<span style="display:none;">tsd</span>itemap.xml was generated';
else
    ec<span style="display:none;">poe</span>ho 'S<span style="display:none;">uog</span>ome er<span style="display:none;">ktv</span>ror was occurred';


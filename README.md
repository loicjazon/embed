# PHP Embed Utility Class
Extract ID from embed code

## Requirements
- PHP 5.3 or greater

## Examples:
- Twitter embed

```php
<?php

$html = "<div>\n\t<blockquote class=\"twitter-tweet\" data-lang=\"fr\"><p lang=\"fr\" dir=\"ltr\">?? Prêté par le <a href=\"https://twitter.com/losclive?ref_src=twsrc%5Etfw\">@losclive</a> au Racing Club de Strasbourg Alsace depuis le mois d’août dernier, <a href=\"https://twitter.com/Martin_Terrier?ref_src=twsrc%5Etfw\">@Martin_Terrier</a> a été transféré par le <a href=\"https://twitter.com/losclive?ref_src=twsrc%5Etfw\">@losclive</a> à l’<a href=\"https://twitter.com/OL?ref_src=twsrc%5Etfw\">@OL</a>. Le joueur terminera la saison 2017-2018 au Racing Club de Strasbourg Alsace, prêté par l&#39;<a href=\"https://twitter.com/OL?ref_src=twsrc%5Etfw\">@OL</a>. <a href=\"https://t.co/1SZ8HRTObO\">pic.twitter.com/1SZ8HRTObO</a></p>&mdash; RC Strasbourg Alsace (@RCSA) <a href=\"https://twitter.com/RCSA/status/956925949337112576?ref_src=twsrc%5Etfw\">26 janvier 2018</a></blockquote></div>\n<div>\n\t<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script></div>\n<div>\n\t </div>";

$embed = new Embed();
$embed->fromHtml($html);

// twitter
$embed->getProvider();

// 956925949337112576
$embed->getId();

// tweet
$embed->getType();

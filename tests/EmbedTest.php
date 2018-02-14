<?php
/**
 * @author Loïc Jazon <loic.jazon@gmail.com>
 */

namespace Tests\Elji\Library\Embed;

use Elji\Library\Embed\Embed;

/**
 * Class EmbedTest
 */
class EmbedTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Embed
     */
    private $embed;

    protected function setUp()
    {
        $this->embed = new Embed();
    }

    /** @test */
    public function extract_tweet_id()
    {
        $html = '<div>\n\t<blockquote class=\"twitter-tweet\" data-lang=\"fr\"><p lang=\"fr\" dir=\"ltr\">?? Prêté par le <a href=\"https://twitter.com/losclive?ref_src=twsrc%5Etfw\">@losclive</a> au Racing Club de Strasbourg Alsace depuis le mois d’août dernier, <a href=\"https://twitter.com/Martin_Terrier?ref_src=twsrc%5Etfw\">@Martin_Terrier</a> a été transféré par le <a href=\"https://twitter.com/losclive?ref_src=twsrc%5Etfw\">@losclive</a> à l’<a href=\"https://twitter.com/OL?ref_src=twsrc%5Etfw\">@OL</a>. Le joueur terminera la saison 2017-2018 au Racing Club de Strasbourg Alsace, prêté par l&#39;<a href=\"https://twitter.com/OL?ref_src=twsrc%5Etfw\">@OL</a>. <a href=\"https://t.co/1SZ8HRTObO\">pic.twitter.com/1SZ8HRTObO</a></p>&mdash; RC Strasbourg Alsace (@RCSA) <a href=\"https://www.twitter.com/RCSA/status/956925949337112576?ref_src=twsrc%5Etfw\">26 janvier 2018</a></blockquote></div>\n<div>\n\t<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script></div>\n<div>\n\t </div>';

        $this->embed->fromHtml($html);

        $this->assertEquals('956925949337112576', $this->embed->getId());
        $this->assertEquals('tweet', $this->embed->getType());
        $this->assertEquals('twitter', $this->embed->getProvider());
    }
}

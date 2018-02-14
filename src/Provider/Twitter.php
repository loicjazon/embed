<?php
/**
 * @author Loïc Jazon <loic.jazon@gmail.com>
 */

namespace Elji\Library\Embed\Provider;

/**
 * Class Twitter
 */
class Twitter extends AbstractProvider
{
    /**
     * @var array
     */
    protected $patterns = array(
        'tweet' => '/https?:\/\/(?:www\.)?twitter.com\/[a-zA-Z0-9_]+\/status\/(?<id>\d+)/'
    );
}

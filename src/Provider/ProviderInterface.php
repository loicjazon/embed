<?php
/**
 * @author Loïc Jazon <loic.jazon@gmail.com>
 */

namespace Elji\Library\Embed\Provider;

use Elji\Library\Embed\Embed;

/**
 * Interface ProviderInterface
 */
interface ProviderInterface
{
    /**
     * ProviderInterface constructor.
     *
     * @param Embed $embed
     */
    public function __construct(Embed $embed);

    /**
     * @param string $html
     */
    public function fromHtml($html);
}

<?php
/**
 * @author Loïc Jazon <loic.jazon@gmail.com>
 */

namespace Elji\Library\Embed\Provider;

use Elji\Library\Embed\Embed;

/**
 * Class AbstractProvider
 */
abstract class AbstractProvider implements ProviderInterface
{
    /**
     * @var array
     */
    protected $patterns = array();

    /**
     * @var Embed
     */
    private $embed;

    /**
     * @inheritDoc
     */
    public function __construct(Embed $embed)
    {
        $this->embed = $embed;
    }

    /**
     * @inheritDoc
     */
    public function fromHtml($html)
    {
        foreach ($this->getPatterns() as $type => $pattern) {
            if (preg_match($pattern, $html, $matches)) {
                $this->embed->setType($type);
                $this->embed->setId($matches['id']);
                $this->embed->setProvider($this->getClassName());
            }
        }
    }

    /**
     * @return array
     */
    public function getPatterns()
    {
        return $this->patterns;
    }

    /**
     * @return string
     */
    private function getClassName()
    {
        $class = explode('\\', get_class($this));
        $class = strtolower(end($class));

        return $class;
    }
}

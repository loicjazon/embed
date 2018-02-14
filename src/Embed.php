<?php
/**
 * @author Loïc Jazon <loic.jazon@gmail.com>
 */

namespace Elji\Library\Embed;

use Elji\Library\Embed\Provider\ProviderInterface;

/**
 * Class Embed
 */
class Embed
{
    /**
     * @var ProviderInterface[]
     */
    private $providers = array(
        'Elji\Library\Embed\Provider\Twitter',
    );

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $provider;

    /**
     * @param string $html
     */
    public function fromHtml($html)
    {
        foreach ($this->providers as $p) {
            /** @var ProviderInterface $provider */
            $provider = new $p($this);
            $provider->fromHtml($html);
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return Embed
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Embed
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param string $provider
     *
     * @return Embed
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }
}

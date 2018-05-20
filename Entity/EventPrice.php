<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle\Entity;

use Chekov\Bundle\ModelBundle\Model\Localization;
use Chekov\Bundle\ModelBundle\Model\TranslateableTrait;
use Chekov\Bundle\ModelBundle\Model\TranslationInterface;
use Chekov\Bundle\ModelBundle\Model\UuidTrait;
use Sulu\Component\Persistence\Model\AuditableTrait;

class EventPrice implements EventPriceInterface
{
    use AuditableTrait;
    use TranslateableTrait;
    use UuidTrait;

    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @var EventInterface
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->initializeUuid();
        $this->initializeTranslations();
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setEvent(EventInterface $event)
    {
        $this->event = $event;

        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }

    protected function createTranslation(Localization $localization): TranslationInterface
    {
        $translation = new EventPriceTranslation($this, $localization);
        $this->translations->add($translation);

        return $translation;
    }
}

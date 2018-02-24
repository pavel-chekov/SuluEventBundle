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

use Chekov\Bundle\ExtensionBundle\Entity\TranslationTrait;

class EventTranslation implements EventTranslationInterface
{
    use TranslationTrait;

    /**
     * @var EventInterface
     */
    private $event;

    public function setEvent(EventInterface $event)
    {
        $this->event = $event;

        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }
}

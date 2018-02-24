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

use Chekov\Bundle\ExtensionBundle\Entity\TranslationInterface;

interface EventTranslationInterface extends TranslationInterface
{
    /**
     * Set event
     *
     * @param EventInterface $event
     *
     * @return $this
     */
    public function setEvent(EventInterface $event);

    /**
     * Get event
     *
     * @return EventInterface
     */
    public function getEvent();
}

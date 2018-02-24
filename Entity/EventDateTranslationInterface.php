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

interface EventDateTranslationInterface extends TranslationInterface
{
    /**
     * Set date
     *
     * @param EventDateInterface $date
     *
     * @return $this
     */
    public function setDate(EventDateInterface $date);

    /**
     * Get date
     *
     * @return EventDateInterface
     */
    public function getDate();
}

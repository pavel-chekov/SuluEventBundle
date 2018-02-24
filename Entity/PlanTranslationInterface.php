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

interface PlanTranslationInterface extends TranslationInterface
{
    /**
     * Set plan
     *
     * @param PlanInterface $plan
     *
     * @return $this
     */
    public function setPlan(PlanInterface $plan);

    /**
     * Get plan
     *
     * @return PlanInterface
     */
    public function getPlan();
}

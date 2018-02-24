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

class PlanTranslation implements PlanTranslationInterface
{
    use TranslationTrait;

    /**
     * @var PlanInterface
     */
    private $plan;

    public function setPlan(PlanInterface $plan)
    {
        $this->plan = $plan;

        return $this;
    }

    public function getPlan()
    {
        return $this->plan;
    }
}

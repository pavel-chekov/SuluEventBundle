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

use Chekov\Bundle\ModelBundle\Model\ContentTrait;
use Chekov\Bundle\ModelBundle\Model\Localization;
use Chekov\Bundle\ModelBundle\Model\TranslationTrait;
use Chekov\Bundle\ModelBundle\Model\UuidTrait;
use Sulu\Component\Persistence\Model\AuditableTrait;

class PlanTranslation implements PlanTranslationInterface
{
    use AuditableTrait;
    use ContentTrait;
    use TranslationTrait;
    use UuidTrait;

    /**
     * @var PlanInterface
     */
    private $plan;

    /**
     * Constructor
     */
    public function __construct(PlanInterface $plan, Localization $localization)
    {
        $this->initializeUuid();
        $this->localization = $localization;
        $this->plan = $plan;
    }

    public function getPlan()
    {
        return $this->plan;
    }
}

<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle;

use Chekov\Bundle\EventBundle\Entity\EventDateInterface;
use Chekov\Bundle\EventBundle\Entity\EventDateMemberInterface;
use Chekov\Bundle\EventBundle\Entity\EventDateReservationInterface;
use Chekov\Bundle\EventBundle\Entity\EventDateTranslationInterface;
use Chekov\Bundle\EventBundle\Entity\EventInterface;
use Chekov\Bundle\EventBundle\Entity\EventPriceInterface;
use Chekov\Bundle\EventBundle\Entity\EventPriceTranslationInterface;
use Chekov\Bundle\EventBundle\Entity\EventTranslationInterface;
use Chekov\Bundle\EventBundle\Entity\PlanInterface;
use Chekov\Bundle\EventBundle\Entity\PlanItemInterface;
use Chekov\Bundle\EventBundle\Entity\PlanTranslationInterface;
use Sulu\Bundle\PersistenceBundle\PersistenceBundleTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ChekovEventBundle extends Bundle
{
    use PersistenceBundleTrait;

    public function build(ContainerBuilder $container)
    {
        $this->buildPersistence(
            [
                EventInterface::class => 'sulu.model.event.class',
                EventTranslationInterface::class => 'sulu.model.event_translation.class',
                EventDateInterface::class => 'sulu.model.event_date.class',
                EventDateTranslationInterface::class => 'sulu.model.event_date_translation.class',
                EventDateMemberInterface::class => 'sulu.model.event_date_member.class',
                EventDateReservationInterface::class => 'sulu.model.event_date_reservation.class',
                EventPriceInterface::class => 'sulu.model.event_price.class',
                EventPriceTranslationInterface::class => 'sulu.model.event_price_translation.class',
                PlanInterface::class => 'sulu.model.plan.class',
                PlanTranslationInterface::class => 'sulu.model.plan_translation.class',
                PlanItemInterface::class => 'sulu.model.plan_item.class',
            ],
            $container
        );
    }
}

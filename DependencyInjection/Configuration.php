<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle\DependencyInjection;

use Chekov\Bundle\EventBundle\Entity\Event;
use Chekov\Bundle\EventBundle\Entity\EventDate;
use Chekov\Bundle\EventBundle\Entity\EventDateMember;
use Chekov\Bundle\EventBundle\Entity\EventDateReservation;
use Chekov\Bundle\EventBundle\Entity\EventDateTranslation;
use Chekov\Bundle\EventBundle\Entity\EventPrice;
use Chekov\Bundle\EventBundle\Entity\EventPriceTranslation;
use Chekov\Bundle\EventBundle\Entity\EventTranslation;
use Chekov\Bundle\EventBundle\Entity\Plan;
use Chekov\Bundle\EventBundle\Entity\PlanItem;
use Chekov\Bundle\EventBundle\Entity\PlanTranslation;
use Chekov\Bundle\EventBundle\Repository\EventDateMemberRepository;
use Chekov\Bundle\EventBundle\Repository\EventDateRepository;
use Chekov\Bundle\EventBundle\Repository\EventDateReservationRepository;
use Chekov\Bundle\EventBundle\Repository\EventDateTranslationRepository;
use Chekov\Bundle\EventBundle\Repository\EventPriceTranslationRepository;
use Chekov\Bundle\EventBundle\Repository\EventRepository;
use Chekov\Bundle\EventBundle\Repository\EventTranslationRepository;
use Chekov\Bundle\EventBundle\Repository\PlanItemRepository;
use Chekov\Bundle\EventBundle\Repository\PlanRepository;
use Chekov\Bundle\EventBundle\Repository\PlanTranslationRepository;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('chekov_event');

        $this->addObjectsSection($rootNode);

        return $treeBuilder;
    }

    /**
     * Adds `objects` section.
     *
     * @param ArrayNodeDefinition $node
     */
    private function addObjectsSection(ArrayNodeDefinition $node)
    {
        $node
            ->children()
                ->arrayNode('objects')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('event')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(Event::class)->end()
                                ->scalarNode('repository')->defaultValue(EventRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('event_translation')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(EventTranslation::class)->end()
                                ->scalarNode('repository')->defaultValue(EventTranslationRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('event_date')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(EventDate::class)->end()
                                ->scalarNode('repository')->defaultValue(EventDateRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('event_date_translation')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(EventDateTranslation::class)->end()
                                ->scalarNode('repository')->defaultValue(EventDateTranslationRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('event_date_member')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(EventDateMember::class)->end()
                                ->scalarNode('repository')->defaultValue(EventDateMemberRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('event_date_reservation')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(EventDateReservation::class)->end()
                                ->scalarNode('repository')->defaultValue(EventDateReservationRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('event_price')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(EventPrice::class)->end()
                                ->scalarNode('repository')->defaultValue(EventPriceTranslation::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('event_price_translation')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(EventPriceTranslation::class)->end()
                                ->scalarNode('repository')->defaultValue(EventPriceTranslationRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('plan')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(Plan::class)->end()
                                ->scalarNode('repository')->defaultValue(PlanRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('plan_translation')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(PlanTranslation::class)->end()
                                ->scalarNode('repository')->defaultValue(PlanTranslationRepository::class)->end()
                            ->end()
                        ->end()
                        ->arrayNode('plan_item')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('model')->defaultValue(PlanItem::class)->end()
                                ->scalarNode('repository')->defaultValue(PlanItemRepository::class)->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
    }
}

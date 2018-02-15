<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle\Admin;

use Sulu\Bundle\AdminBundle\Admin\Admin;
use Sulu\Bundle\AdminBundle\Navigation\Navigation;
use Sulu\Bundle\AdminBundle\Navigation\NavigationItem;
use Sulu\Component\Security\Authorization\SecurityCheckerInterface;

class EventAdmin extends Admin
{
    const SECURITY_EVENTS = 'chekov.event.events';
    const SECURITY_PLANS = 'chekov.event.plans';

    /**
     * FormAdmin constructor.
     *
     * @param SecurityCheckerInterface $securityChecker
     * @param string $title
     */
    public function __construct(
        SecurityCheckerInterface $securityChecker,
        $title
    ) {
        // set root navigation
        $rootNavigationItem = new NavigationItem($title);

        // parent navigation
        $section = new NavigationItem('navigation.modules');

        // event navigation
        $events = new NavigationItem('navigation.events');
        $events->setPosition(10);
        $events->setIcon('calendar');

        // create event navigation
        if ($securityChecker->hasPermission(self::SECURITY_EVENTS, 'view')) {
            $navigationItem = new NavigationItem('chekov_event.events');
            $navigationItem->setAction('events');
            $navigationItem->setPosition(10);
            $events->addChild($navigationItem);
            $rootNavigationItem->addChild($section);
        }

        // create plan navigation
        if ($securityChecker->hasPermission(self::SECURITY_PLANS, 'view')) {
            $navigationItem = new NavigationItem('chekov_event.plans');
            $navigationItem->setAction('plans');
            $navigationItem->setPosition(20);
            $events->addChild($navigationItem);
            $rootNavigationItem->addChild($section);
        }

        // add event
        if ($events->hasChildren()) {
            $rootNavigationItem->addChild($section);
            $section->addChild($events);
        }

        // set navigation
        $this->setNavigation(new Navigation($rootNavigationItem));
    }

    public function getCommands()
    {
        return [];
    }

    public function getJsBundleName()
    {
        return 'chekovevent';
    }

    public function getSecurityContexts()
    {
        return [
            'Sulu' => [
                'Event' => [
                    self::SECURITY_EVENTS,
                    self::SECURITY_PLANS,
                ],
            ],
        ];
    }
}

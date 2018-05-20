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

use Chekov\Bundle\ModelBundle\Admin\Routing\RouteTrait;
use Sulu\Bundle\AdminBundle\Admin\Admin;
use Sulu\Bundle\AdminBundle\Navigation\Navigation;
use Sulu\Bundle\AdminBundle\Navigation\NavigationItem;
use Sulu\Component\Localization\Localization;
use Sulu\Component\Security\Authorization\PermissionTypes;
use Sulu\Component\Security\Authorization\SecurityCheckerInterface;
use Sulu\Component\Webspace\Manager\WebspaceManagerInterface;

class EventAdmin extends Admin
{
    use RouteTrait;

    const SECURITY_CONTEXT_EVENT = 'chekov.event.events';
    const SECURITY_CONTEXT_PLAN = 'chekov.event.plans';

    /**
     * @var SecurityCheckerInterface
     */
    private $securityChecker;

    /**
     * @var WebspaceManagerInterface
     */
    private $webspaceManager;

    /**
     * FormAdmin constructor.
     *
     * @param SecurityCheckerInterface $securityChecker
     * @param WebspaceManagerInterface $webspaceManager,
     * @param string $title
     */
    public function __construct(
        SecurityCheckerInterface $securityChecker,
        WebspaceManagerInterface $webspaceManager,
        $title
    ) {
        $this->securityChecker = $securityChecker;
        $this->webspaceManager = $webspaceManager;

        // set root navigation
        $rootNavigationItem = new NavigationItem($title);
    }

    public function getNavigationV2(): Navigation
    {
        $rootNavigationItem = $this->getNavigationItemRoot();

        $module = new NavigationItem('app.events');
        $module->setPosition(40);
        $module->setIcon('su-calendar');

        if ($this->securityChecker->hasPermission(self::SECURITY_CONTEXT_EVENT, PermissionTypes::VIEW)) {
            $events = new NavigationItem('app.events');
            $events->setPosition(10);
            $events->setMainRoute('app_events.datagrid');

            $module->addChild($events);
        }

        return new Navigation($rootNavigationItem);
    }

    public function getRoutes(): array
    {
        // FIXME remove as soon as https://github.com/sulu/sulu/issues/3922 is fixed
        $locales = array_values(
            array_map(
                function (Localization $localization) {
                    return $localization->getLocale();
                },
                $this->webspaceManager->getAllLocalizations()
            )
        );

        return array_merge(
            $this->createBasicRoutes($locales, 'events', '/events'),
            $this->createBasicRoutes($locales, 'plans', '/plans')
        );
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
                    self::SECURITY_CONTEXT_EVENT,
                    self::SECURITY_CONTEXT_PLAN,
                ],
            ],
        ];
    }
}

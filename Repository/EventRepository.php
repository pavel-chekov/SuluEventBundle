<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle\Repository;

use Chekov\Bundle\ExtensionBundle\Repository\ExtensionRepositoryTrait;
use Sulu\Component\Persistence\Repository\ORM\EntityRepository;

class EventRepository extends EntityRepository implements EventRepositoryInterface
{
    use ExtensionRepositoryTrait;
}

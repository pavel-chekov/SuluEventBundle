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

use Chekov\Bundle\ModelBundle\Model\ContentInterface;
use Chekov\Bundle\ModelBundle\Model\TranslationInterface;
use Sulu\Component\Persistence\Model\AuditableInterface;

interface EventPriceTranslationInterface extends AuditableInterface, ContentInterface, TranslationInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * Get price
     *
     * @return EventPriceInterface
     */
    public function getPrice();
}

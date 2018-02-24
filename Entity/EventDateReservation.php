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

use Sulu\Bundle\ContactBundle\Entity\AccountInterface;

class EventDateReservation implements EventDateReservationInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var EventDateMemberInterface
     */
    private $member;

    /**
     * @var EventDateInterface
     */
    private $date;

    /**
     * @var PlanItemInterface
     */
    private $planItem;

    /**
     * @var AccountInterface
     */
    private $account;

    public function getId()
    {
        return $this->id;
    }

    public function setMember(EventDateMemberInterface $member = null)
    {
        $this->member = $member;

        return $this;
    }

    public function getMember()
    {
        return $this->member;
    }

    public function setDate(EventDateInterface $date = null)
    {
        $this->date = $date;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setPlanItem(PlanItemInterface $planItem = null)
    {
        $this->planItem = $planItem;

        return $this;
    }

    public function getPlanItem()
    {
        return $this->planItem;
    }

    public function setAccount(AccountInterface $account = null)
    {
        $this->account = $account;

        return $this;
    }

    public function getAccount()
    {
        return $this->account;
    }
}

<?php

namespace Chekov\Bundle\EventBundle\Entity;

use Sulu\Bundle\ContactBundle\Entity\Account;

/**
 * EventDateReservation
 */
class EventDateReservation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var EventDateMember
     */
    private $member;

    /**
     * @var EventDate
     */
    private $date;

    /**
     * @var PlanItem
     */
    private $planItem;

    /**
     * @var Account
     */
    private $account;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set member
     *
     * @param EventDateMember $member
     *
     * @return EventDateReservation
     */
    public function setMember(EventDateMember $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return EventDateMember
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set date
     *
     * @param EventDate $date
     *
     * @return EventDateReservation
     */
    public function setDate(EventDate $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return EventDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set planItem
     *
     * @param PlanItem $planItem
     *
     * @return EventDateReservation
     */
    public function setPlanItem(PlanItem $planItem = null)
    {
        $this->planItem = $planItem;

        return $this;
    }

    /**
     * Get planItem
     *
     * @return PlanItem
     */
    public function getPlanItem()
    {
        return $this->planItem;
    }

    /**
     * Set account
     *
     * @param Account $account
     *
     * @return EventDateReservation
     */
    public function setAccount(Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}

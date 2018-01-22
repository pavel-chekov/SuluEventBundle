<?php

namespace Chekov\Bundle\EventBundle\Entity;

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
     * @var \Chekov\Bundle\EventBundle\Entity\EventDateMember
     */
    private $member;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\EventDate
     */
    private $date;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\PlanItem
     */
    private $planItem;

    /**
     * @var \Sulu\Bundle\ContactBundle\Entity\Account
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
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateMember $member
     *
     * @return EventDateReservation
     */
    public function setMember(\Chekov\Bundle\EventBundle\Entity\EventDateMember $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \Chekov\Bundle\EventBundle\Entity\EventDateMember
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set date
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDate $date
     *
     * @return EventDateReservation
     */
    public function setDate(\Chekov\Bundle\EventBundle\Entity\EventDate $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Chekov\Bundle\EventBundle\Entity\EventDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set planItem
     *
     * @param \Chekov\Bundle\EventBundle\Entity\PlanItem $planItem
     *
     * @return EventDateReservation
     */
    public function setPlanItem(\Chekov\Bundle\EventBundle\Entity\PlanItem $planItem = null)
    {
        $this->planItem = $planItem;

        return $this;
    }

    /**
     * Get planItem
     *
     * @return \Chekov\Bundle\EventBundle\Entity\PlanItem
     */
    public function getPlanItem()
    {
        return $this->planItem;
    }

    /**
     * Set account
     *
     * @param \Sulu\Bundle\ContactBundle\Entity\Account $account
     *
     * @return EventDateReservation
     */
    public function setAccount(\Sulu\Bundle\ContactBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}


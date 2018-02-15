<?php

namespace Chekov\Bundle\EventBundle\Entity;

use Sulu\Bundle\ContactBundle\Entity\Account;
use Sulu\Bundle\ContactBundle\Entity\Contact;

/**
 * EventDateMember
 */
class EventDateMember
{
    /**
     * @var boolean
     */
    private $paid;

    /**
     * @var boolean
     */
    private $participate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var EventDateReservation
     */
    private $reservation;

    /**
     * @var EventDate
     */
    private $date;

    /**
     * @var EventPrice
     */
    private $price;

    /**
     * @var Contact
     */
    private $contact;

    /**
     * @var Account
     */
    private $account;


    /**
     * Set paid
     *
     * @param boolean $paid
     *
     * @return EventDateMember
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set participate
     *
     * @param boolean $participate
     *
     * @return EventDateMember
     */
    public function setParticipate($participate)
    {
        $this->participate = $participate;

        return $this;
    }

    /**
     * Get participate
     *
     * @return boolean
     */
    public function getParticipate()
    {
        return $this->participate;
    }

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
     * Set reservation
     *
     * @param EventDateReservation $reservation
     *
     * @return EventDateMember
     */
    public function setReservation(EventDateReservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return EventDateReservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set date
     *
     * @param EventDate $date
     *
     * @return EventDateMember
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
     * Set price
     *
     * @param EventPrice $price
     *
     * @return EventDateMember
     */
    public function setPrice(EventPrice $price = null)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return EventPrice
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set contact
     *
     * @param Contact $contact
     *
     * @return EventDateMember
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set account
     *
     * @param Account $account
     *
     * @return EventDateMember
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

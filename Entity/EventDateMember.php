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

use Chekov\Bundle\ModelBundle\Model\UuidTrait;
use Sulu\Bundle\ContactBundle\Entity\AccountInterface;
use Sulu\Bundle\ContactBundle\Entity\ContactInterface;
use Sulu\Component\Persistence\Model\AuditableTrait;

class EventDateMember implements EventDateMemberInterface
{
    use AuditableTrait;
    use UuidTrait;

    /**
     * @var boolean
     */
    private $paid;

    /**
     * @var boolean
     */
    private $participate;

    /**
     * @var EventDateReservationInterface
     */
    private $reservation;

    /**
     * @var EventDateInterface
     */
    private $date;

    /**
     * @var EventPriceInterface
     */
    private $price;

    /**
     * @var ContactInterface
     */
    private $contact;

    /**
     * @var AccountInterface
     */
    private $account;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->initializeUuid();
    }

    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    public function getPaid()
    {
        return $this->paid;
    }

    public function setParticipate($participate)
    {
        $this->participate = $participate;

        return $this;
    }

    public function getParticipate()
    {
        return $this->participate;
    }

    public function setReservation(EventDateReservationInterface $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    public function getReservation()
    {
        return $this->reservation;
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

    public function setPrice(EventPriceInterface $price = null)
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setContact(ContactInterface $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    public function getContact()
    {
        return $this->contact;
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

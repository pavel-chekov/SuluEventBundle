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
use Sulu\Bundle\ContactBundle\Entity\ContactInterface;
use Sulu\Component\Persistence\Model\AuditableInterface;

interface EventDateMemberInterface extends AuditableInterface
{
    /**
     * Set paid
     *
     * @param boolean $paid
     *
     * @return $this
     */
    public function setPaid($paid);

    /**
     * Get paid
     *
     * @return boolean
     */
    public function getPaid();

    /**
     * Set participate
     *
     * @param boolean $participate
     *
     * @return $this
     */
    public function setParticipate($participate);

    /**
     * Get participate
     *
     * @return boolean
     */
    public function getParticipate();

    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set reservation
     *
     * @param EventDateReservationInterface $reservation
     *
     * @return $this
     */
    public function setReservation(EventDateReservationInterface $reservation = null);

    /**
     * Get reservation
     *
     * @return EventDateReservationInterface
     */
    public function getReservation();

    /**
     * Set date
     *
     * @param EventDateInterface $date
     *
     * @return $this
     */
    public function setDate(EventDateInterface $date = null);

    /**
     * Get date
     *
     * @return EventDateInterface
     */
    public function getDate();

    /**
     * Set price
     *
     * @param EventPriceInterface $price
     *
     * @return $this
     */
    public function setPrice(EventPriceInterface $price = null);

    /**
     * Get price
     *
     * @return EventPriceInterface
     */
    public function getPrice();

    /**
     * Set contact
     *
     * @param ContactInterface $contact
     *
     * @return $this
     */
    public function setContact(ContactInterface $contact = null);

    /**
     * Get contact
     *
     * @return ContactInterface
     */
    public function getContact();

    /**
     * Set account
     *
     * @param AccountInterface $account
     *
     * @return $this
     */
    public function setAccount(AccountInterface $account = null);

    /**
     * Get account
     *
     * @return AccountInterface
     */
    public function getAccount();
}

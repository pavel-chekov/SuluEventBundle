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

use Sulu\Bundle\ContactBundle\Entity\Account;

interface EventDateReservationInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set member
     *
     * @param EventDateMemberInterface $member
     *
     * @return $this
     */
    public function setMember(EventDateMemberInterface $member = null);

    /**
     * Get member
     *
     * @return EventDateMemberInterface
     */
    public function getMember();

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
     * Set planItem
     *
     * @param PlanItemInterface $planItem
     *
     * @return $this
     */
    public function setPlanItem(PlanItemInterface $planItem = null);

    /**
     * Get planItem
     *
     * @return PlanItemInterface
     */
    public function getPlanItem();

    /**
     * Set account
     *
     * @param Account $account
     *
     * @return $this
     */
    public function setAccount(Account $account = null);

    /**
     * Get account
     *
     * @return Account
     */
    public function getAccount();
}

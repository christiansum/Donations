<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDonations
 *
 * @ORM\Table(name="tbl_donations", indexes={@ORM\Index(name="fk_don_ins_idx", columns={"id_ins"}), @ORM\Index(name="fk_don_user_idx", columns={"id_user"}), @ORM\Index(name="fk_don_cards_idx", columns={"id_card"}), @ORM\Index(name="fk_don_users_cb_idx", columns={"created_by"}), @ORM\Index(name="fk_don_users_mb_idx", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblDonations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_don", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDon;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_dt", type="datetime", nullable=false)
     */
    private $createdDt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_dt", type="datetime", nullable=true)
     */
    private $modifiedDt;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=false)
     */
    private $active;

    /**
     * @var \TblCards
     *
     * @ORM\ManyToOne(targetEntity="TblCards")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_card", referencedColumnName="id_card")
     * })
     */
    private $idCard;

    /**
     * @var \TblInstitutions
     *
     * @ORM\ManyToOne(targetEntity="TblInstitutions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ins", referencedColumnName="id_ins")
     * })
     */
    private $idIns;

    /**
     * @var \TblUsers
     *
     * @ORM\ManyToOne(targetEntity="TblUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \TblUsers
     *
     * @ORM\ManyToOne(targetEntity="TblUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="id_user")
     * })
     */
    private $createdBy;

    /**
     * @var \TblUsers
     *
     * @ORM\ManyToOne(targetEntity="TblUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modified_by", referencedColumnName="id_user")
     * })
     */
    private $modifiedBy;


}

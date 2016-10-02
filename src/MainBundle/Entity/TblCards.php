<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCards
 *
 * @ORM\Table(name="tbl_cards", indexes={@ORM\Index(name="fk_cards_user_idx", columns={"id_user"}), @ORM\Index(name="fk_cards_users_cb_idx", columns={"created_by"}), @ORM\Index(name="fk_cards_users_mb_idx", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblCards
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_card", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCard;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="card_num", type="integer", nullable=false)
     */
    private $cardNum;

    /**
     * @var string
     *
     * @ORM\Column(name="code_val", type="string", length=40, nullable=false)
     */
    private $codeVal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="date", nullable=false)
     */
    private $dueDate;

    /**
     * @var string
     *
     * @ORM\Column(name="tittle", type="string", length=45, nullable=false)
     */
    private $tittle;

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

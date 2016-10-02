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
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \TblUsers
     *
     * @ORM\ManyToOne(targetEntity="TblUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * })
     */
    private $createdBy;

    /**
     * @var \TblUsers
     *
     * @ORM\ManyToOne(targetEntity="TblUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modified_by", referencedColumnName="id")
     * })
     */
    private $modifiedBy;



    /**
     * Get idDon
     *
     * @return integer 
     */
    public function getIdDon()
    {
        return $this->idDon;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return TblDonations
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set createdDt
     *
     * @param \DateTime $createdDt
     * @return TblDonations
     */
    public function setCreatedDt($createdDt)
    {
        $this->createdDt = $createdDt;

        return $this;
    }

    /**
     * Get createdDt
     *
     * @return \DateTime 
     */
    public function getCreatedDt()
    {
        return $this->createdDt;
    }

    /**
     * Set modifiedDt
     *
     * @param \DateTime $modifiedDt
     * @return TblDonations
     */
    public function setModifiedDt($modifiedDt)
    {
        $this->modifiedDt = $modifiedDt;

        return $this;
    }

    /**
     * Get modifiedDt
     *
     * @return \DateTime 
     */
    public function getModifiedDt()
    {
        return $this->modifiedDt;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return TblDonations
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set idCard
     *
     * @param \MainBundle\Entity\TblCards $idCard
     * @return TblDonations
     */
    public function setIdCard(\MainBundle\Entity\TblCards $idCard = null)
    {
        $this->idCard = $idCard;

        return $this;
    }

    /**
     * Get idCard
     *
     * @return \MainBundle\Entity\TblCards 
     */
    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * Set idIns
     *
     * @param \MainBundle\Entity\TblInstitutions $idIns
     * @return TblDonations
     */
    public function setIdIns(\MainBundle\Entity\TblInstitutions $idIns = null)
    {
        $this->idIns = $idIns;

        return $this;
    }

    /**
     * Get idIns
     *
     * @return \MainBundle\Entity\TblInstitutions 
     */
    public function getIdIns()
    {
        return $this->idIns;
    }

    /**
     * Set idUser
     *
     * @param \MainBundle\Entity\TblUsers $idUser
     * @return TblDonations
     */
    public function setIdUser(\MainBundle\Entity\TblUsers $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \MainBundle\Entity\TblUsers 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set createdBy
     *
     * @param \MainBundle\Entity\TblUsers $createdBy
     * @return TblDonations
     */
    public function setCreatedBy(\MainBundle\Entity\TblUsers $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \MainBundle\Entity\TblUsers 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set modifiedBy
     *
     * @param \MainBundle\Entity\TblUsers $modifiedBy
     * @return TblDonations
     */
    public function setModifiedBy(\MainBundle\Entity\TblUsers $modifiedBy = null)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return \MainBundle\Entity\TblUsers 
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }
}

<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblInstitutions
 *
 * @ORM\Table(name="tbl_institutions", indexes={@ORM\Index(name="fk_ins_users_cb_idx", columns={"created_by"}), @ORM\Index(name="fk_ins_users_mb_idx", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblInstitutions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ins", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIns;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="string", length=255, nullable=false)
     */
    private $about;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail", type="string", length=45, nullable=false)
     */
    private $thumbnail;

    /**
     * @var float
     *
     * @ORM\Column(name="min_amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $minAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=45, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=45, nullable=false)
     */
    private $contactName;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_phone", type="integer", nullable=false)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

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
     * Get idIns
     *
     * @return integer 
     */
    public function getIdIns()
    {
        return $this->idIns;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TblInstitutions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return TblInstitutions
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     * @return TblInstitutions
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string 
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set minAmount
     *
     * @param float $minAmount
     * @return TblInstitutions
     */
    public function setMinAmount($minAmount)
    {
        $this->minAmount = $minAmount;

        return $this;
    }

    /**
     * Get minAmount
     *
     * @return float 
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }

    /**
     * Set idCountry
     *
     * @param integer $idCountry
     * @return TblInstitutions
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return TblInstitutions
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return TblInstitutions
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactPhone
     *
     * @param integer $contactPhone
     * @return TblInstitutions
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return integer 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return TblInstitutions
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set createdDt
     *
     * @param \DateTime $createdDt
     * @return TblInstitutions
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
     * @return TblInstitutions
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
     * @return TblInstitutions
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
     * Set createdBy
     *
     * @param \MainBundle\Entity\TblUsers $createdBy
     * @return TblInstitutions
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
     * @return TblInstitutions
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

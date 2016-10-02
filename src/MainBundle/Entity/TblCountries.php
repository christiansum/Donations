<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblCountries
 *
 * @ORM\Table(name="tbl_countries", indexes={@ORM\Index(name="fk_countries_users_idx", columns={"created_by"}), @ORM\Index(name="fk_countries_users_idx1", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblCountries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

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
     * Get idCountry
     *
     * @return integer 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TblCountries
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
     * Set createdDt
     *
     * @param \DateTime $createdDt
     * @return TblCountries
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
     * @return TblCountries
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
     * @return TblCountries
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
     * @return TblCountries
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
     * @return TblCountries
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

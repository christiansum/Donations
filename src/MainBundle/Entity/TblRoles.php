<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblRoles
 *
 * @ORM\Table(name="tbl_roles", indexes={@ORM\Index(name="fk_roles_users_idx", columns={"created_by"}), @ORM\Index(name="fk_roles_users_mb_idx", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblRoles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

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
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TblRoles
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdDt
     *
     * @param \DateTime $createdDt
     * @return TblRoles
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
     * @return TblRoles
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
     * @return TblRoles
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
     * @return TblRoles
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
     * @return TblRoles
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

    public function __toString() {
        return $this->type;
    }
}

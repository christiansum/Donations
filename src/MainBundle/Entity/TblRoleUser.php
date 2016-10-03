<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblRoleUser
 *
 * @ORM\Table(name="tbl_role_user", indexes={@ORM\Index(name="fk_r_u_roles_idx", columns={"id_role"}), @ORM\Index(name="fk_r_u_users_idx", columns={"id_user"}), @ORM\Index(name="fk_r_u_users_cb_idx", columns={"created_by"}), @ORM\Index(name="fk_r_u_users_mb_idx", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblRoleUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_role_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRoleUser;

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
     * @var \TblRoles
     *
     * @ORM\ManyToOne(targetEntity="TblRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_role", referencedColumnName="id_role")
     * })
     */
    private $idRole;

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
     * Get idRoleUser
     *
     * @return integer 
     */
    public function getIdRoleUser()
    {
        return $this->idRoleUser;
    }

    /**
     * Set createdDt
     *
     * @param \DateTime $createdDt
     * @return TblRoleUser
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
     * @return TblRoleUser
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
     * @return TblRoleUser
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
     * Set idRole
     *
     * @param \MainBundle\Entity\TblRoles $idRole
     * @return TblRoleUser
     */
    public function setIdRole(\MainBundle\Entity\TblRoles $idRole = null)
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get idRole
     *
     * @return \MainBundle\Entity\TblRoles 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set idUser
     *
     * @param \MainBundle\Entity\TblUsers $idUser
     * @return TblRoleUser
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
     * @return TblRoleUser
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
     * @return TblRoleUser
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
        return $this->idRole . " - ". $this->idUser;
    }
}

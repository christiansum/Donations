<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDepartments
 *
 * @ORM\Table(name="tbl_departments", indexes={@ORM\Index(name="fk_dept_users_cb_idx", columns={"created_by"}), @ORM\Index(name="fk_dept_users_mb_idx", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblDepartments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_dept", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDept;

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

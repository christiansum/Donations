<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUsers
 *
 * @ORM\Table(name="tbl_users", uniqueConstraints={@ORM\UniqueConstraint(name="id_document_UNIQUE", columns={"id_document"})}, indexes={@ORM\Index(name="fk_users_countries_idx", columns={"id_country"}), @ORM\Index(name="fk_users_departments_idx", columns={"id_dept"}), @ORM\Index(name="fk_users_users_idx", columns={"created_by"}), @ORM\Index(name="fk_users_users_mb_idx", columns={"modified_by"})})
 * @ORM\Entity
 */
class TblUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=20, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="second_name", type="string", length=20, nullable=true)
     */
    private $secondName;

    /**
     * @var string
     *
     * @ORM\Column(name="third_name", type="string", length=20, nullable=true)
     */
    private $thirdName;

    /**
     * @var string
     *
     * @ORM\Column(name="first_lastname", type="string", length=20, nullable=false)
     */
    private $firstLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="second_lastname", type="string", length=20, nullable=true)
     */
    private $secondLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="marriage_lastname", type="string", length=20, nullable=true)
     */
    private $marriageLastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_document", type="bigint", nullable=false)
     */
    private $idDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=2, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="marital_status", type="string", length=45, nullable=false)
     */
    private $maritalStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="phone_number", type="integer", nullable=true)
     */
    private $phoneNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="cellphone_number", type="integer", nullable=false)
     */
    private $cellphoneNumber;

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
     * @var \TblCountries
     *
     * @ORM\ManyToOne(targetEntity="TblCountries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_country", referencedColumnName="id_country")
     * })
     */
    private $idCountry;

    /**
     * @var \TblDepartments
     *
     * @ORM\ManyToOne(targetEntity="TblDepartments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_dept", referencedColumnName="id_dept")
     * })
     */
    private $idDept;

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

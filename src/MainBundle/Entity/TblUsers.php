<?php

namespace MainBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * TblUsers
 *
 * @ORM\Table(name="tbl_users", uniqueConstraints={@ORM\UniqueConstraint(name="id_document_UNIQUE", columns={"id_document"})}, indexes={@ORM\Index(name="fk_users_countries_idx", columns={"id_country"}), @ORM\Index(name="fk_users_departments_idx", columns={"id_dept"})})
 * @ORM\Entity
 */
class TblUsers extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

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
     * @var bigint
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return TblUsers
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     * @return TblUsers
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string 
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set thirdName
     *
     * @param string $thirdName
     * @return TblUsers
     */
    public function setThirdName($thirdName)
    {
        $this->thirdName = $thirdName;

        return $this;
    }

    /**
     * Get thirdName
     *
     * @return string 
     */
    public function getThirdName()
    {
        return $this->thirdName;
    }

    /**
     * Set firstLastname
     *
     * @param string $firstLastname
     * @return TblUsers
     */
    public function setFirstLastname($firstLastname)
    {
        $this->firstLastname = $firstLastname;

        return $this;
    }

    /**
     * Get firstLastname
     *
     * @return string 
     */
    public function getFirstLastname()
    {
        return $this->firstLastname;
    }

    /**
     * Set secondLastname
     *
     * @param string $secondLastname
     * @return TblUsers
     */
    public function setSecondLastname($secondLastname)
    {
        $this->secondLastname = $secondLastname;

        return $this;
    }

    /**
     * Get secondLastname
     *
     * @return string 
     */
    public function getSecondLastname()
    {
        return $this->secondLastname;
    }

    /**
     * Set marriageLastname
     *
     * @param string $marriageLastname
     * @return TblUsers
     */
    public function setMarriageLastname($marriageLastname)
    {
        $this->marriageLastname = $marriageLastname;

        return $this;
    }

    /**
     * Get marriageLastname
     *
     * @return string 
     */
    public function getMarriageLastname()
    {
        return $this->marriageLastname;
    }

    /**
     * Set idDocument
     *
     * @param integer $idDocument
     * @return TblUsers
     */
    public function setIdDocument($idDocument)
    {
        $this->idDocument = $idDocument;

        return $this;
    }

    /**
     * Get idDocument
     *
     * @return integer 
     */
    public function getIdDocument()
    {
        return $this->idDocument;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return TblUsers
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     * @return TblUsers
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set phoneNumber
     *
     * @param integer $phoneNumber
     * @return TblUsers
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return integer 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set cellphoneNumber
     *
     * @param integer $cellphoneNumber
     * @return TblUsers
     */
    public function setCellphoneNumber($cellphoneNumber)
    {
        $this->cellphoneNumber = $cellphoneNumber;

        return $this;
    }

    /**
     * Get cellphoneNumber
     *
     * @return integer 
     */
    public function getCellphoneNumber()
    {
        return $this->cellphoneNumber;
    }

    /**
     * Set idCountry
     *
     * @param \MainBundle\Entity\TblCountries $idCountry
     * @return TblUsers
     */
    public function setIdCountry(\MainBundle\Entity\TblCountries $idCountry = null)
    {
        $this->idCountry = $idCountry;

        return $this;
    }

    /**
     * Get idCountry
     *
     * @return \MainBundle\Entity\TblCountries 
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set idDept
     *
     * @param \MainBundle\Entity\TblDepartments $idDept
     * @return TblUsers
     */
    public function setIdDept(\MainBundle\Entity\TblDepartments $idDept = null)
    {
        $this->idDept = $idDept;

        return $this;
    }

    /**
     * Get idDept
     *
     * @return \MainBundle\Entity\TblDepartments 
     */
    public function getIdDept()
    {
        return $this->idDept;
    }

    /**
     * Set createdBy
     *
     * @param \MainBundle\Entity\TblUsers $createdBy
     * @return TblUsers
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
     * @return TblUsers
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

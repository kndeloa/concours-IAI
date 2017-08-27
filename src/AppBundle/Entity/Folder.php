<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Folder
 *
 * @ORM\Table(name="folders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FolderRepository")
 */
class Folder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_birth", type="datetimetz")
     */
    private $dateOfBirth;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="place_of_birth", type="string", length=255)
     */
    private $placeOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality", type="string", length=255)
     */
    private $speciality;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="motive", type="text", nullable=true)
     */
    private $motive;

    /**
     * @var string
     *
     * @ORM\Column(name="deposition_center", type="string", length=255)
     */
    private $depositionCenter;

    /**
     * @var string
     *
     * @ORM\Column(name="state_or_country", type="string", length=255)
     */
    private $stateOrCountry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified_at", type="datetime")
     */
    private $modifiedAt;

    /**
     * One Folder is owned by One user only.
     *
     * @var User $user
     * @ORM\OneToOne(targetEntity="User", inversedBy="folder")
     * @ORM\JoinColumn(referencedColumnName="id", name="user_id")
     */
    protected $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return Folder
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set placeOfBirth
     *
     * @param \DateTime $placeOfBirth
     *
     * @return Folder
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return \DateTime
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return Folder
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set speciality
     *
     * @param string $speciality
     *
     * @return Folder
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get speciality
     *
     * @return string
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Folder
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Folder
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set motive
     *
     * @param string $motive
     *
     * @return Folder
     */
    public function setMotive($motive)
    {
        $this->motive = $motive;

        return $this;
    }

    /**
     * Get motive
     *
     * @return string
     */
    public function getMotive()
    {
        return $this->motive;
    }

    /**
     * Set depositionCenter
     *
     * @param string $depositionCenter
     *
     * @return Folder
     */
    public function setDepositionCenter($depositionCenter)
    {
        $this->depositionCenter = $depositionCenter;

        return $this;
    }

    /**
     * Get depositionCenter
     *
     * @return string
     */
    public function getDepositionCenter()
    {
        return $this->depositionCenter;
    }

    /**
     * Set stateOrCountry
     *
     * @param string $stateOrCountry
     *
     * @return Folder
     */
    public function setStateOrCountry($stateOrCountry)
    {
        $this->stateOrCountry = $stateOrCountry;

        return $this;
    }

    /**
     * Get stateOrCountry
     *
     * @return string
     */
    public function getStateOrCountry()
    {
        return $this->stateOrCountry;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Folder
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set modifiedAt
     *
     * @param \DateTime $modifiedAt
     *
     * @return Folder
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Folder
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

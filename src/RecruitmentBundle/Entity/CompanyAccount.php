<?php

namespace RecruitmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyAccount
 *
 * @ORM\Table(name="company_account")
 * @ORM\Entity(repositoryClass="RecruitmentBundle\Repository\CompanyAccountRepository")
 */
class CompanyAccount
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
     * @var string
     *
     * @ORM\Column(name="accountNumber", type="string", length=255)
     */
    private $accountNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editionDate", type="datetime")
     */
    private $editionDate;


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
     * Set accountNumber
     *
     * @param string $accountNumber
     *
     * @return CompanyAccount
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return CompanyAccount
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set editionDate
     *
     * @param \DateTime $editionDate
     *
     * @return CompanyAccount
     */
    public function setEditionDate($editionDate)
    {
        $this->editionDate = $editionDate;

        return $this;
    }

    /**
     * Get editionDate
     *
     * @return \DateTime
     */
    public function getEditionDate()
    {
        return $this->editionDate;
    }
}


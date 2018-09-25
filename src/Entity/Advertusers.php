<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advertusers
 *
 * @ORM\Table(name="advertusers", uniqueConstraints={@ORM\UniqueConstraint(name="Email", columns={"Email"})})
 * @ORM\Entity
 */
class Advertusers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="text", length=65535, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=64, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="MiddleName", type="string", length=11, nullable=false)
     */
    private $middlename;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=11, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=11, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="blacklist", type="integer", nullable=false)
     */
    private $blacklist = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="IsApproved", type="string", length=3, nullable=false)
     */
    private $isapproved;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="integer", nullable=false)
     */
    private $category;

    /**
     * @var bool
     *
     * @ORM\Column(name="currency", type="boolean", nullable=false)
     */
    private $currency = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sended", type="integer", nullable=false)
     */
    private $sended = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="date_last_add", type="text", length=65535, nullable=false)
     */
    private $dateLastAdd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="book_category", type="text", length=65535, nullable=true)
     */
    private $bookCategory;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_update", type="datetime", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="unsubscribe_key", type="string", length=32, nullable=false)
     */
    private $unsubscribeKey;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Advertusers
     */
    public function setId(int $id): Advertusers
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Advertusers
     */
    public function setFirstname(string $firstname): Advertusers
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Advertusers
     */
    public function setEmail(string $email): Advertusers
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddlename(): string
    {
        return $this->middlename;
    }

    /**
     * @param string $middlename
     * @return Advertusers
     */
    public function setMiddlename(string $middlename): Advertusers
    {
        $this->middlename = $middlename;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Advertusers
     */
    public function setLastname(string $lastname): Advertusers
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Advertusers
     */
    public function setTitle(string $title): Advertusers
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getBlacklist(): int
    {
        return $this->blacklist;
    }

    /**
     * @param int $blacklist
     * @return Advertusers
     */
    public function setBlacklist(int $blacklist): Advertusers
    {
        $this->blacklist = $blacklist;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsapproved(): string
    {
        return $this->isapproved;
    }

    /**
     * @param string $isapproved
     * @return Advertusers
     */
    public function setIsapproved(string $isapproved): Advertusers
    {
        $this->isapproved = $isapproved;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return Advertusers
     */
    public function setComment(string $comment): Advertusers
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return Advertusers
     */
    public function setCategory(int $category): Advertusers
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCurrency(): bool
    {
        return $this->currency;
    }

    /**
     * @param bool $currency
     * @return Advertusers
     */
    public function setCurrency(bool $currency): Advertusers
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getSended(): int
    {
        return $this->sended;
    }

    /**
     * @param int $sended
     * @return Advertusers
     */
    public function setSended(int $sended): Advertusers
    {
        $this->sended = $sended;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateLastAdd(): string
    {
        return $this->dateLastAdd;
    }

    /**
     * @param string $dateLastAdd
     * @return Advertusers
     */
    public function setDateLastAdd(string $dateLastAdd): Advertusers
    {
        $this->dateLastAdd = $dateLastAdd;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getBookCategory(): ?string
    {
        return $this->bookCategory;
    }

    /**
     * @param null|string $bookCategory
     * @return Advertusers
     */
    public function setBookCategory(?string $bookCategory): Advertusers
    {
        $this->bookCategory = $bookCategory;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDateUpdate(): ?\DateTime
    {
        return $this->dateUpdate;
    }

    /**
     * @param \DateTime|null $dateUpdate
     * @return Advertusers
     */
    public function setDateUpdate(?\DateTime $dateUpdate): Advertusers
    {
        $this->dateUpdate = $dateUpdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnsubscribeKey(): string
    {
        return $this->unsubscribeKey;
    }

    /**
     * @param string $unsubscribeKey
     * @return Advertusers
     */
    public function setUnsubscribeKey(string $unsubscribeKey): Advertusers
    {
        $this->unsubscribeKey = $unsubscribeKey;
        return $this;
    }


}

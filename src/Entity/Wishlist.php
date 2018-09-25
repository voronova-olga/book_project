<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlist
 *
 * @ORM\Table(name="wishlist")
 * @ORM\Entity
 */
class Wishlist
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
     * @var \DateTime
     *
     * @ORM\Column(name="creationdate", type="datetime", nullable=false)
     */
    private $creationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="bookid", type="string", length=11, nullable=false)
     */
    private $bookid;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="trans_id", type="integer", nullable=true)
     */
    private $transId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Wishlist
     */
    public function setId(int $id): Wishlist
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationdate(): \DateTime
    {
        return $this->creationdate;
    }

    /**
     * @param \DateTime $creationdate
     * @return Wishlist
     */
    public function setCreationdate(\DateTime $creationdate): Wishlist
    {
        $this->creationdate = $creationdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Wishlist
     */
    public function setUsername(string $username): Wishlist
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getBookid(): string
    {
        return $this->bookid;
    }

    /**
     * @param string $bookid
     * @return Wishlist
     */
    public function setBookid(string $bookid): Wishlist
    {
        $this->bookid = $bookid;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return Wishlist
     */
    public function setStatus(int $status): Wishlist
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTransId(): ?int
    {
        return $this->transId;
    }

    /**
     * @param int|null $transId
     * @return Wishlist
     */
    public function setTransId(?int $transId): Wishlist
    {
        $this->transId = $transId;
        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="test", columns={"id"})})
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var string
     *
     * @ORM\Column(name="artno", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artno;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creationdate", type="datetime", nullable=true)
     */
    private $creationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $status = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @return string
     */
    public function getArtno(): string
    {
        return $this->artno;
    }

    /**
     * @param string $artno
     * @return Orders
     */
    public function setArtno(string $artno): Orders
    {
        $this->artno = $artno;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Orders
     */
    public function setId(int $id): Orders
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreationdate(): ?\DateTime
    {
        return $this->creationdate;
    }

    /**
     * @param \DateTime|null $creationdate
     * @return Orders
     */
    public function setCreationdate(?\DateTime $creationdate): Orders
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
     * @return Orders
     */
    public function setUsername(string $username): Orders
    {
        $this->username = $username;
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
     * @return Orders
     */
    public function setStatus(int $status): Orders
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param null|string $comment
     * @return Orders
     */
    public function setComment(?string $comment): Orders
    {
        $this->comment = $comment;
        return $this;
    }


}

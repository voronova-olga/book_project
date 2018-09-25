<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isactive = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="groupid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $groupid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $sortorder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=50, nullable=true)
     */
    private $comment;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Categories
     */
    public function setId(int $id): Categories
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsactive(): bool
    {
        return $this->isactive;
    }

    /**
     * @param bool $isactive
     * @return Categories
     */
    public function setIsactive(bool $isactive): Categories
    {
        $this->isactive = $isactive;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupid(): int
    {
        return $this->groupid;
    }

    /**
     * @param int $groupid
     * @return Categories
     */
    public function setGroupid(int $groupid): Categories
    {
        $this->groupid = $groupid;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSortorder(): ?int
    {
        return $this->sortorder;
    }

    /**
     * @param int|null $sortorder
     * @return Categories
     */
    public function setSortorder(?int $sortorder): Categories
    {
        $this->sortorder = $sortorder;
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
     * @return Categories
     */
    public function setComment(?string $comment): Categories
    {
        $this->comment = $comment;
        return $this;
    }


}

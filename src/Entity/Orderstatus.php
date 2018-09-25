<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderstatus
 *
 * @ORM\Table(name="orderstatus")
 * @ORM\Entity
 */
class Orderstatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=50, nullable=true)
     */
    private $comment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $sortorder;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Orderstatus
     */
    public function setId(int $id): Orderstatus
    {
        $this->id = $id;
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
     * @return Orderstatus
     */
    public function setComment(?string $comment): Orderstatus
    {
        $this->comment = $comment;
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
     * @return Orderstatus
     */
    public function setSortorder(?int $sortorder): Orderstatus
    {
        $this->sortorder = $sortorder;
        return $this;
    }


}

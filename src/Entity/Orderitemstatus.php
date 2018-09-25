<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderitemstatus
 *
 * @ORM\Table(name="orderitemstatus")
 * @ORM\Entity
 */
class Orderitemstatus
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
     * @return Orderitemstatus
     */
    public function setId(int $id): Orderitemstatus
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
     * @return Orderitemstatus
     */
    public function setComment(?string $comment): Orderitemstatus
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
     * @return Orderitemstatus
     */
    public function setSortorder(?int $sortorder): Orderitemstatus
    {
        $this->sortorder = $sortorder;
        return $this;
    }


}

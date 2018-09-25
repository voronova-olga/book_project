<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Titles
 *
 * @ORM\Table(name="titles")
 * @ORM\Entity
 */
class Titles
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
     * @ORM\Column(name="name", type="string", length=10, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="integer", nullable=true)
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
     * @return Titles
     */
    public function setId(int $id): Titles
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     * @return Titles
     */
    public function setName(?string $name): Titles
    {
        $this->name = $name;
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
     * @return Titles
     */
    public function setSortorder(?int $sortorder): Titles
    {
        $this->sortorder = $sortorder;
        return $this;
    }


}

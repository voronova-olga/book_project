<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perwhats
 *
 * @ORM\Table(name="perwhats")
 * @ORM\Entity
 */
class Perwhats
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
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
     * @return Perwhats
     */
    public function setId(int $id): Perwhats
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
     * @return Perwhats
     */
    public function setName(?string $name): Perwhats
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
     * @return Perwhats
     */
    public function setSortorder(?int $sortorder): Perwhats
    {
        $this->sortorder = $sortorder;
        return $this;
    }


}

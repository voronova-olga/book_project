<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Covertypes
 *
 * @ORM\Table(name="covertypes")
 * @ORM\Entity
 */
class Covertypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="primary", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $primary;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
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
    public function getPrimary(): int
    {
        return $this->primary;
    }

    /**
     * @param int $primary
     * @return Covertypes
     */
    public function setPrimary(int $primary): Covertypes
    {
        $this->primary = $primary;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Covertypes
     */
    public function setId(?int $id): Covertypes
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
     * @return Covertypes
     */
    public function setName(?string $name): Covertypes
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
     * @return Covertypes
     */
    public function setSortorder(?int $sortorder): Covertypes
    {
        $this->sortorder = $sortorder;
        return $this;
    }


}

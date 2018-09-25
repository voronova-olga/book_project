<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenttypes
 *
 * @ORM\Table(name="contenttypes")
 * @ORM\Entity
 */
class Contenttypes
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
     * @return Contenttypes
     */
    public function setId(int $id): Contenttypes
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
     * @return Contenttypes
     */
    public function setName(?string $name): Contenttypes
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
     * @return Contenttypes
     */
    public function setSortorder(?int $sortorder): Contenttypes
    {
        $this->sortorder = $sortorder;
        return $this;
    }


}

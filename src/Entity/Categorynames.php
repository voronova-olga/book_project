<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorynames
 *
 * @ORM\Table(name="categorynames", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Categorynames
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
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=2, nullable=false)
     */
    private $lang = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @return int
     */
    public function getPrimary(): int
    {
        return $this->primary;
    }

    /**
     * @param int $primary
     * @return Categorynames
     */
    public function setPrimary(int $primary): Categorynames
    {
        $this->primary = $primary;
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
     * @return Categorynames
     */
    public function setId(int $id): Categorynames
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return Categorynames
     */
    public function setLang(string $lang): Categorynames
    {
        $this->lang = $lang;
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
     * @return Categorynames
     */
    public function setName(?string $name): Categorynames
    {
        $this->name = $name;
        return $this;
    }


}

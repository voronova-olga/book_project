<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupnames
 *
 * @ORM\Table(name="groupnames", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Groupnames
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
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=2, nullable=false)
     */
    private $lang = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @return int
     */
    public function getPrimary(): int
    {
        return $this->primary;
    }

    /**
     * @param int $primary
     * @return Groupnames
     */
    public function setPrimary(int $primary): Groupnames
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
     * @return Groupnames
     */
    public function setId(int $id): Groupnames
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
     * @return Groupnames
     */
    public function setLang(string $lang): Groupnames
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Groupnames
     */
    public function setName(string $name): Groupnames
    {
        $this->name = $name;
        return $this;
    }


}

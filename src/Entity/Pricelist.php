<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pricelist
 *
 * @ORM\Table(name="pricelist", uniqueConstraints={@ORM\UniqueConstraint(name="artno", columns={"artno"})})
 * @ORM\Entity
 */
class Pricelist
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
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="artno", type="string", length=10, nullable=false)
     */
    private $artno;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=256, nullable=false, options={"default"="General"})
     */
    private $content = 'General';

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="text", length=65535, nullable=false)
     */
    private $year;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Pricelist
     */
    public function setId(int $id): Pricelist
    {
        $this->id = $id;
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
     * @return Pricelist
     */
    public function setName(string $name): Pricelist
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getArtno(): string
    {
        return $this->artno;
    }

    /**
     * @param string $artno
     * @return Pricelist
     */
    public function setArtno(string $artno): Pricelist
    {
        $this->artno = $artno;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Pricelist
     */
    public function setContent(string $content): Pricelist
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * @param string $year
     * @return Pricelist
     */
    public function setYear(string $year): Pricelist
    {
        $this->year = $year;
        return $this;
    }


}

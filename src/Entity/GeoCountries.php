<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeoCountries
 *
 * @ORM\Table(name="geo_countries", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class GeoCountries
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alfa2", type="string", length=2, nullable=false)
     */
    private $alfa2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="alfa3", type="string", length=3, nullable=false)
     */
    private $alfa3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nameru", type="string", length=50, nullable=false)
     */
    private $nameru = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nameen", type="string", length=50, nullable=false)
     */
    private $nameen = '';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorderen", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sortorderen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorderru", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sortorderru = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=false)
     */
    private $isactive = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="id", type="boolean", nullable=false)
     */
    private $id;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return GeoCountries
     */
    public function setCode(string $code): GeoCountries
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlfa2(): string
    {
        return $this->alfa2;
    }

    /**
     * @param string $alfa2
     * @return GeoCountries
     */
    public function setAlfa2(string $alfa2): GeoCountries
    {
        $this->alfa2 = $alfa2;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlfa3(): string
    {
        return $this->alfa3;
    }

    /**
     * @param string $alfa3
     * @return GeoCountries
     */
    public function setAlfa3(string $alfa3): GeoCountries
    {
        $this->alfa3 = $alfa3;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameru(): string
    {
        return $this->nameru;
    }

    /**
     * @param string $nameru
     * @return GeoCountries
     */
    public function setNameru(string $nameru): GeoCountries
    {
        $this->nameru = $nameru;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameen(): string
    {
        return $this->nameen;
    }

    /**
     * @param string $nameen
     * @return GeoCountries
     */
    public function setNameen(string $nameen): GeoCountries
    {
        $this->nameen = $nameen;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortorderen(): int
    {
        return $this->sortorderen;
    }

    /**
     * @param int $sortorderen
     * @return GeoCountries
     */
    public function setSortorderen(int $sortorderen): GeoCountries
    {
        $this->sortorderen = $sortorderen;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortorderru(): int
    {
        return $this->sortorderru;
    }

    /**
     * @param int $sortorderru
     * @return GeoCountries
     */
    public function setSortorderru(int $sortorderru): GeoCountries
    {
        $this->sortorderru = $sortorderru;
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
     * @return GeoCountries
     */
    public function setIsactive(bool $isactive): GeoCountries
    {
        $this->isactive = $isactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function isId(): bool
    {
        return $this->id;
    }

    /**
     * @param bool $id
     * @return GeoCountries
     */
    public function setId(bool $id): GeoCountries
    {
        $this->id = $id;
        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuration
 *
 * @ORM\Table(name="configuration", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class Configuration
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_config", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfig;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=125, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    private $value;

    /**
     * @return int
     */
    public function getIdConfig(): int
    {
        return $this->idConfig;
    }

    /**
     * @param int $idConfig
     * @return Configuration
     */
    public function setIdConfig(int $idConfig): Configuration
    {
        $this->idConfig = $idConfig;
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
     * @return Configuration
     */
    public function setName(string $name): Configuration
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Configuration
     */
    public function setValue(string $value): Configuration
    {
        $this->value = $value;
        return $this;
    }


}

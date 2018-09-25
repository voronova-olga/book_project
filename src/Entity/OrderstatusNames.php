<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderstatusNames
 *
 * @ORM\Table(name="orderstatus_names")
 * @ORM\Entity
 */
class OrderstatusNames
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
     * @ORM\Column(name="lang", type="string", length=2, nullable=false)
     */
    private $lang = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrderstatusNames
     */
    public function setId(int $id): OrderstatusNames
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
     * @return OrderstatusNames
     */
    public function setLang(string $lang): OrderstatusNames
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
     * @return OrderstatusNames
     */
    public function setName(string $name): OrderstatusNames
    {
        $this->name = $name;
        return $this;
    }


}

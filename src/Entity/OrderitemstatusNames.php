<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderitemstatusNames
 *
 * @ORM\Table(name="orderitemstatus_names")
 * @ORM\Entity
 */
class OrderitemstatusNames
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
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
     * @return OrderitemstatusNames
     */
    public function setPrimary(int $primary): OrderitemstatusNames
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
     * @return OrderitemstatusNames
     */
    public function setId(int $id): OrderitemstatusNames
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
     * @return OrderitemstatusNames
     */
    public function setLang(string $lang): OrderitemstatusNames
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
     * @return OrderitemstatusNames
     */
    public function setName(string $name): OrderitemstatusNames
    {
        $this->name = $name;
        return $this;
    }


}

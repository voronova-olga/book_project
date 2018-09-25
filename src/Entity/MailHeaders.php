<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailHeaders
 *
 * @ORM\Table(name="mail_headers")
 * @ORM\Entity
 */
class MailHeaders
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return MailHeaders
     */
    public function setId(int $id): MailHeaders
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
     * @return MailHeaders
     */
    public function setName(string $name): MailHeaders
    {
        $this->name = $name;
        return $this;
    }


}

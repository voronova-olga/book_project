<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles", indexes={@ORM\Index(name="Rolename", columns={"Rolename", "ApplicationName"})})
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var string
     *
     * @ORM\Column(name="Rolename", type="string", length=255, nullable=false)
     */
    private $rolename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ApplicationName", type="string", length=255, nullable=false)
     */
    private $applicationname = '';

    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getRolename(): string
    {
        return $this->rolename;
    }

    /**
     * @param string $rolename
     * @return Roles
     */
    public function setRolename(string $rolename): Roles
    {
        $this->rolename = $rolename;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationname(): string
    {
        return $this->applicationname;
    }

    /**
     * @param string $applicationname
     * @return Roles
     */
    public function setApplicationname(string $applicationname): Roles
    {
        $this->applicationname = $applicationname;
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
     * @return Roles
     */
    public function setId(int $id): Roles
    {
        $this->id = $id;
        return $this;
    }


}

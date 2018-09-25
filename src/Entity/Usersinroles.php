<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersinroles
 *
 * @ORM\Table(name="usersinroles")
 * @ORM\Entity
 */
class Usersinroles
{
    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Rolename", type="string", length=255, nullable=false)
     */
    private $rolename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ApplicationName", type="text", length=255, nullable=false)
     */
    private $applicationname;

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
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Usersinroles
     */
    public function setUsername(string $username): Usersinroles
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getRolename(): string
    {
        return $this->rolename;
    }

    /**
     * @param string $rolename
     * @return Usersinroles
     */
    public function setRolename(string $rolename): Usersinroles
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
     * @return Usersinroles
     */
    public function setApplicationname(string $applicationname): Usersinroles
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
     * @return Usersinroles
     */
    public function setId(int $id): Usersinroles
    {
        $this->id = $id;
        return $this;
    }


}

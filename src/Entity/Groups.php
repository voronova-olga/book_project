<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sortorder", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sortorder = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isactive = '1';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Groups
     */
    public function setId(int $id): Groups
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortorder(): int
    {
        return $this->sortorder;
    }

    /**
     * @param int $sortorder
     * @return Groups
     */
    public function setSortorder(int $sortorder): Groups
    {
        $this->sortorder = $sortorder;
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
     * @return Groups
     */
    public function setIsactive(bool $isactive): Groups
    {
        $this->isactive = $isactive;
        return $this;
    }


}

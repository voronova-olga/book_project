<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BooksCategories
 *
 * @ORM\Table(name="books_categories", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class BooksCategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="bookId", type="string", length=35, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bookid;

    /**
     * @var int
     *
     * @ORM\Column(name="categoryId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryid;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @return string
     */
    public function getBookid(): string
    {
        return $this->bookid;
    }

    /**
     * @param string $bookid
     * @return BooksCategories
     */
    public function setBookid(string $bookid): BooksCategories
    {
        $this->bookid = $bookid;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryid(): int
    {
        return $this->categoryid;
    }

    /**
     * @param int $categoryid
     * @return BooksCategories
     */
    public function setCategoryid(int $categoryid): BooksCategories
    {
        $this->categoryid = $categoryid;
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
     * @return BooksCategories
     */
    public function setId(int $id): BooksCategories
    {
        $this->id = $id;
        return $this;
    }


}

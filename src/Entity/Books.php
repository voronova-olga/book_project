<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books", indexes={@ORM\Index(name="creationdate", columns={"creationdate"}), @ORM\Index(name="createdby_2", columns={"createdby"}), @ORM\Index(name="createdby", columns={"createdby"}), @ORM\Index(name="comment", columns={"admin_comment", "catalogier_comment"}), @ORM\Index(name="artno", columns={"publicationarea", "titleru", "titleen", "volumeissue", "seriesRU", "ISBN", "ISBN2", "seriesEN", "notes", "id", "artno", "inquired", "annotation"})})
 * @ORM\Entity
 */
class Books
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="covertype", type="integer", nullable=false)
     */
    private $covertype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="createdby", type="string", length=255, nullable=false)
     */
    private $createdby = '';

    /**
     * @var int
     *
     * @ORM\Column(name="categoryid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $categoryid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sub_category", type="integer", nullable=true)
     */
    private $subCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="artno", type="text", length=65535, nullable=false)
     */
    private $artno;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mediatype", type="integer", nullable=true)
     */
    private $mediatype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titleen", type="text", length=65535, nullable=true)
     */
    private $titleen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titleru", type="text", length=65535, nullable=true)
     */
    private $titleru;

    /**
     * @var string|null
     *
     * @ORM\Column(name="edition", type="string", length=255, nullable=true)
     */
    private $edition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specificarea", type="string", length=255, nullable=true)
     */
    private $specificarea;

    /**
     * @var string
     *
     * @ORM\Column(name="publicationarea", type="string", length=255, nullable=false)
     */
    private $publicationarea = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="publicationyear", type="string", length=255, nullable=true)
     */
    private $publicationyear;

    /**
     * @var string
     *
     * @ORM\Column(name="ph_descriptionarea", type="string", length=255, nullable=false)
     */
    private $phDescriptionarea = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seriesRU", type="string", length=255, nullable=true)
     */
    private $seriesru;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seriesEN", type="string", length=255, nullable=true)
     */
    private $seriesen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="circulation", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $circulation;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=1024, nullable=false, options={"default"="Text in Ukrainian."})
     */
    private $notes = 'Text in Ukrainian.';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ISBN", type="text", length=65535, nullable=true)
     */
    private $isbn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ISBN2", type="text", length=65535, nullable=true)
     */
    private $isbn2;

    /**
     * @var string
     *
     * @ORM\Column(name="volumeissueno", type="string", length=255, nullable=false)
     */
    private $volumeissueno = '';

    /**
     * @var string
     *
     * @ORM\Column(name="volumeissue", type="text", length=65535, nullable=false)
     */
    private $volumeissue;

    /**
     * @var string
     *
     * @ORM\Column(name="annotation", type="text", length=65535, nullable=false)
     */
    private $annotation;

    /**
     * @var string
     *
     * @ORM\Column(name="transtable", type="string", length=255, nullable=false, options={"default"="USG_ukr"})
     */
    private $transtable = 'USG_ukr';

    /**
     * @var int|null
     *
     * @ORM\Column(name="height", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $height;

    /**
     * @var int|null
     *
     * @ORM\Column(name="width", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $width;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="text", length=65535, nullable=true)
     */
    private $weight;

    /**
     * @var bool
     *
     * @ORM\Column(name="isweightforset", type="boolean", nullable=false)
     */
    private $isweightforset = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="islandscape", type="boolean", nullable=false)
     */
    private $islandscape = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="marc21", type="blob", length=16777215, nullable=true)
     */
    private $marc21;

    /**
     * @var bool
     *
     * @ORM\Column(name="iscomplete", type="boolean", nullable=false)
     */
    private $iscomplete = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isactive", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isactive = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="isonstock", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isonstock = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="islastcopy", type="boolean", nullable=false)
     */
    private $islastcopy = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isstanding", type="boolean", nullable=false)
     */
    private $isstanding = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="coverjpg", type="blob", length=16777215, nullable=true)
     */
    private $coverjpg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creationdate", type="datetime", nullable=true)
     */
    private $creationdate;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="purchase", type="string", length=25, nullable=false)
     */
    private $purchase;

    /**
     * @var int
     *
     * @ORM\Column(name="purchase_per_what", type="integer", nullable=false)
     */
    private $purchasePerWhat;

    /**
     * @var float
     *
     * @ORM\Column(name="specialprice", type="float", precision=10, scale=0, nullable=false)
     */
    private $specialprice = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="perwhat", type="integer", nullable=true)
     */
    private $perwhat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_comment", type="text", length=65535, nullable=true)
     */
    private $adminComment;

    /**
     * @var string
     *
     * @ORM\Column(name="catalogier_comment", type="string", length=512, nullable=false, options={"default"="Kubon & Sagner - 
Kuschnerov EastEuroBooks - 
Exlibrus - 
MIPP - 
NATASHA KOZMENKO - "})
     */
    private $catalogierComment = 'Kubon & Sagner - 
Kuschnerov EastEuroBooks - 
Exlibrus - 
MIPP - 
NATASHA KOZMENKO - ';

    /**
     * @var int|null
     *
     * @ORM\Column(name="deleted", type="integer", nullable=true)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="madeby", type="text", length=65535, nullable=false)
     */
    private $madeby;

    /**
     * @var string
     *
     * @ORM\Column(name="inquired", type="string", length=2, nullable=false)
     */
    private $inquired = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="adddate", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $adddate = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="from_internet", type="boolean", nullable=false)
     */
    private $fromInternet = '0';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Books
     */
    public function setId(string $id): Books
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCovertype(): int
    {
        return $this->covertype;
    }

    /**
     * @param int $covertype
     * @return Books
     */
    public function setCovertype(int $covertype): Books
    {
        $this->covertype = $covertype;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedby(): string
    {
        return $this->createdby;
    }

    /**
     * @param string $createdby
     * @return Books
     */
    public function setCreatedby(string $createdby): Books
    {
        $this->createdby = $createdby;
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
     * @return Books
     */
    public function setCategoryid(int $categoryid): Books
    {
        $this->categoryid = $categoryid;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSubCategory(): ?int
    {
        return $this->subCategory;
    }

    /**
     * @param int|null $subCategory
     * @return Books
     */
    public function setSubCategory(?int $subCategory): Books
    {
        $this->subCategory = $subCategory;
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
     * @return Books
     */
    public function setArtno(string $artno): Books
    {
        $this->artno = $artno;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMediatype(): ?int
    {
        return $this->mediatype;
    }

    /**
     * @param int|null $mediatype
     * @return Books
     */
    public function setMediatype(?int $mediatype): Books
    {
        $this->mediatype = $mediatype;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitleen(): ?string
    {
        return $this->titleen;
    }

    /**
     * @param null|string $titleen
     * @return Books
     */
    public function setTitleen(?string $titleen): Books
    {
        $this->titleen = $titleen;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTitleru(): ?string
    {
        return $this->titleru;
    }

    /**
     * @param null|string $titleru
     * @return Books
     */
    public function setTitleru(?string $titleru): Books
    {
        $this->titleru = $titleru;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEdition(): ?string
    {
        return $this->edition;
    }

    /**
     * @param null|string $edition
     * @return Books
     */
    public function setEdition(?string $edition): Books
    {
        $this->edition = $edition;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSpecificarea(): ?string
    {
        return $this->specificarea;
    }

    /**
     * @param null|string $specificarea
     * @return Books
     */
    public function setSpecificarea(?string $specificarea): Books
    {
        $this->specificarea = $specificarea;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicationarea(): string
    {
        return $this->publicationarea;
    }

    /**
     * @param string $publicationarea
     * @return Books
     */
    public function setPublicationarea(string $publicationarea): Books
    {
        $this->publicationarea = $publicationarea;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPublicationyear(): ?string
    {
        return $this->publicationyear;
    }

    /**
     * @param null|string $publicationyear
     * @return Books
     */
    public function setPublicationyear(?string $publicationyear): Books
    {
        $this->publicationyear = $publicationyear;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhDescriptionarea(): string
    {
        return $this->phDescriptionarea;
    }

    /**
     * @param string $phDescriptionarea
     * @return Books
     */
    public function setPhDescriptionarea(string $phDescriptionarea): Books
    {
        $this->phDescriptionarea = $phDescriptionarea;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSeriesru(): ?string
    {
        return $this->seriesru;
    }

    /**
     * @param null|string $seriesru
     * @return Books
     */
    public function setSeriesru(?string $seriesru): Books
    {
        $this->seriesru = $seriesru;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSeriesen(): ?string
    {
        return $this->seriesen;
    }

    /**
     * @param null|string $seriesen
     * @return Books
     */
    public function setSeriesen(?string $seriesen): Books
    {
        $this->seriesen = $seriesen;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCirculation(): ?int
    {
        return $this->circulation;
    }

    /**
     * @param int|null $circulation
     * @return Books
     */
    public function setCirculation(?int $circulation): Books
    {
        $this->circulation = $circulation;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     * @return Books
     */
    public function setNotes(string $notes): Books
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * @param null|string $isbn
     * @return Books
     */
    public function setIsbn(?string $isbn): Books
    {
        $this->isbn = $isbn;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIsbn2(): ?string
    {
        return $this->isbn2;
    }

    /**
     * @param null|string $isbn2
     * @return Books
     */
    public function setIsbn2(?string $isbn2): Books
    {
        $this->isbn2 = $isbn2;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolumeissueno(): string
    {
        return $this->volumeissueno;
    }

    /**
     * @param string $volumeissueno
     * @return Books
     */
    public function setVolumeissueno(string $volumeissueno): Books
    {
        $this->volumeissueno = $volumeissueno;
        return $this;
    }

    /**
     * @return string
     */
    public function getVolumeissue(): string
    {
        return $this->volumeissue;
    }

    /**
     * @param string $volumeissue
     * @return Books
     */
    public function setVolumeissue(string $volumeissue): Books
    {
        $this->volumeissue = $volumeissue;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnnotation(): string
    {
        return $this->annotation;
    }

    /**
     * @param string $annotation
     * @return Books
     */
    public function setAnnotation(string $annotation): Books
    {
        $this->annotation = $annotation;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranstable(): string
    {
        return $this->transtable;
    }

    /**
     * @param string $transtable
     * @return Books
     */
    public function setTranstable(string $transtable): Books
    {
        $this->transtable = $transtable;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int|null $height
     * @return Books
     */
    public function setHeight(?int $height): Books
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return Books
     */
    public function setWidth(?int $width): Books
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * @param null|string $weight
     * @return Books
     */
    public function setWeight(?string $weight): Books
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsweightforset(): bool
    {
        return $this->isweightforset;
    }

    /**
     * @param bool $isweightforset
     * @return Books
     */
    public function setIsweightforset(bool $isweightforset): Books
    {
        $this->isweightforset = $isweightforset;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIslandscape(): bool
    {
        return $this->islandscape;
    }

    /**
     * @param bool $islandscape
     * @return Books
     */
    public function setIslandscape(bool $islandscape): Books
    {
        $this->islandscape = $islandscape;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMarc21(): ?string
    {
        return $this->marc21;
    }

    /**
     * @param null|string $marc21
     * @return Books
     */
    public function setMarc21(?string $marc21): Books
    {
        $this->marc21 = $marc21;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIscomplete(): bool
    {
        return $this->iscomplete;
    }

    /**
     * @param bool $iscomplete
     * @return Books
     */
    public function setIscomplete(bool $iscomplete): Books
    {
        $this->iscomplete = $iscomplete;
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
     * @return Books
     */
    public function setIsactive(bool $isactive): Books
    {
        $this->isactive = $isactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsonstock(): bool
    {
        return $this->isonstock;
    }

    /**
     * @param bool $isonstock
     * @return Books
     */
    public function setIsonstock(bool $isonstock): Books
    {
        $this->isonstock = $isonstock;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIslastcopy(): bool
    {
        return $this->islastcopy;
    }

    /**
     * @param bool $islastcopy
     * @return Books
     */
    public function setIslastcopy(bool $islastcopy): Books
    {
        $this->islastcopy = $islastcopy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsstanding(): bool
    {
        return $this->isstanding;
    }

    /**
     * @param bool $isstanding
     * @return Books
     */
    public function setIsstanding(bool $isstanding): Books
    {
        $this->isstanding = $isstanding;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCoverjpg(): ?string
    {
        return $this->coverjpg;
    }

    /**
     * @param null|string $coverjpg
     * @return Books
     */
    public function setCoverjpg(?string $coverjpg): Books
    {
        $this->coverjpg = $coverjpg;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreationdate(): ?\DateTime
    {
        return $this->creationdate;
    }

    /**
     * @param \DateTime|null $creationdate
     * @return Books
     */
    public function setCreationdate(?\DateTime $creationdate): Books
    {
        $this->creationdate = $creationdate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Books
     */
    public function setPrice(float $price): Books
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurchase(): string
    {
        return $this->purchase;
    }

    /**
     * @param string $purchase
     * @return Books
     */
    public function setPurchase(string $purchase): Books
    {
        $this->purchase = $purchase;
        return $this;
    }

    /**
     * @return int
     */
    public function getPurchasePerWhat(): int
    {
        return $this->purchasePerWhat;
    }

    /**
     * @param int $purchasePerWhat
     * @return Books
     */
    public function setPurchasePerWhat(int $purchasePerWhat): Books
    {
        $this->purchasePerWhat = $purchasePerWhat;
        return $this;
    }

    /**
     * @return float
     */
    public function getSpecialprice(): float
    {
        return $this->specialprice;
    }

    /**
     * @param float $specialprice
     * @return Books
     */
    public function setSpecialprice(float $specialprice): Books
    {
        $this->specialprice = $specialprice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerwhat(): ?int
    {
        return $this->perwhat;
    }

    /**
     * @param int|null $perwhat
     * @return Books
     */
    public function setPerwhat(?int $perwhat): Books
    {
        $this->perwhat = $perwhat;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAdminComment(): ?string
    {
        return $this->adminComment;
    }

    /**
     * @param null|string $adminComment
     * @return Books
     */
    public function setAdminComment(?string $adminComment): Books
    {
        $this->adminComment = $adminComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCatalogierComment(): string
    {
        return $this->catalogierComment;
    }

    /**
     * @param string $catalogierComment
     * @return Books
     */
    public function setCatalogierComment(string $catalogierComment): Books
    {
        $this->catalogierComment = $catalogierComment;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeleted(): ?int
    {
        return $this->deleted;
    }

    /**
     * @param int|null $deleted
     * @return Books
     */
    public function setDeleted(?int $deleted): Books
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return string
     */
    public function getMadeby(): string
    {
        return $this->madeby;
    }

    /**
     * @param string $madeby
     * @return Books
     */
    public function setMadeby(string $madeby): Books
    {
        $this->madeby = $madeby;
        return $this;
    }

    /**
     * @return string
     */
    public function getInquired(): string
    {
        return $this->inquired;
    }

    /**
     * @param string $inquired
     * @return Books
     */
    public function setInquired(string $inquired): Books
    {
        $this->inquired = $inquired;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAdddate(): \DateTime
    {
        return $this->adddate;
    }

    /**
     * @param \DateTime $adddate
     * @return Books
     */
    public function setAdddate(\DateTime $adddate): Books
    {
        $this->adddate = $adddate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFromInternet(): bool
    {
        return $this->fromInternet;
    }

    /**
     * @param bool $fromInternet
     * @return Books
     */
    public function setFromInternet(bool $fromInternet): Books
    {
        $this->fromInternet = $fromInternet;
        return $this;
    }


}

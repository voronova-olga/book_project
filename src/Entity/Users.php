<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="Email_2", columns={"Email"})}, indexes={@ORM\Index(name="FirstName", columns={"FirstName"}), @ORM\Index(name="MiddleName", columns={"MiddleName"}), @ORM\Index(name="LastName", columns={"LastName"}), @ORM\Index(name="Email", columns={"Email", "Comment", "IsApproved", "CountryCode", "City", "ZIP", "StreetAddress", "FirstName", "MiddleName", "LastName", "ResearchDirection"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="Role", type="string", length=36, nullable=false)
     */
    private $role = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ApplicationName", type="string", length=100, nullable=false)
     */
    private $applicationname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, nullable=false)
     */
    private $email = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comment", type="string", length=1024, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=128, nullable=false)
     */
    private $password = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PasswordQuestion", type="string", length=255, nullable=true)
     */
    private $passwordquestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PasswordAnswer", type="string", length=255, nullable=true)
     */
    private $passwordanswer;

    /**
     * @var string
     *
     * @ORM\Column(name="IsApproved", type="string", length=3, nullable=false, options={"default"="n"})
     */
    private $isapproved = 'n';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastActivityDate", type="datetime", nullable=false)
     */
    private $lastactivitydate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastActivityDateCart", type="datetime", nullable=false)
     */
    private $lastactivitydatecart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LastActivityDateWish", type="datetime", nullable=false)
     */
    private $lastactivitydatewish;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LastLoginDate", type="datetime", nullable=true)
     */
    private $lastlogindate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LastPasswordChangedDate", type="datetime", nullable=true)
     */
    private $lastpasswordchangeddate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CreationDate", type="datetime", nullable=true)
     */
    private $creationdate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IsOnLine", type="boolean", nullable=true)
     */
    private $isonline;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IsLockedOut", type="boolean", nullable=true)
     */
    private $islockedout;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LastLockedOutDate", type="datetime", nullable=true)
     */
    private $lastlockedoutdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FailedPasswordAttemptCount", type="integer", nullable=true)
     */
    private $failedpasswordattemptcount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FailedPasswordAttemptWindowStart", type="datetime", nullable=true)
     */
    private $failedpasswordattemptwindowstart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FailedPasswordAnswerAttemptCount", type="integer", nullable=true)
     */
    private $failedpasswordanswerattemptcount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FailedPasswordAnswerAttemptWindowStart", type="datetime", nullable=true)
     */
    private $failedpasswordanswerattemptwindowstart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gender", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $gender = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="BirthDate", type="datetime", nullable=true)
     */
    private $birthdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CountryCode", type="string", length=3, nullable=true)
     */
    private $countrycode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="City", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ZIP", type="string", length=10, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StreetAddress", type="string", length=255, nullable=true)
     */
    private $streetaddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=30, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Homepage", type="string", length=255, nullable=true)
     */
    private $homepage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FirstName", type="string", length=150, nullable=true)
     */
    private $firstname;

    /**
     * @var int
     *
     * @ORM\Column(name="Title", type="integer", nullable=false)
     */
    private $title = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MiddleName", type="string", length=150, nullable=true)
     */
    private $middlename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LastName", type="string", length=150, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NickName", type="string", length=100, nullable=true)
     */
    private $nickname;

    /**
     * @var bool
     *
     * @ORM\Column(name="subscribed", type="boolean", nullable=false)
     */
    private $subscribed = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="subscribedCats", type="text", length=65535, nullable=true)
     */
    private $subscribedcats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ResearchDirection", type="string", length=256, nullable=true)
     */
    private $researchdirection;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_name", type="text", length=65535, nullable=false)
     */
    private $tempName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mipp", type="string", length=256, nullable=true)
     */
    private $mipp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="epstain", type="string", length=256, nullable=false)
     */
    private $epstain = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="orders_qnty", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ordersQnty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="text", length=65535, nullable=true)
     */
    private $ip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="deleted", type="integer", nullable=true)
     */
    private $deleted;

    /**
     * @var int
     *
     * @ORM\Column(name="blacklist", type="integer", nullable=false)
     */
    private $blacklist = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="iso", type="integer", nullable=false)
     */
    private $iso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="admin_comment", type="text", length=65535, nullable=false)
     */
    private $adminComment;

    /**
     * @var int
     *
     * @ORM\Column(name="category", type="integer", nullable=false, options={"default"="8"})
     */
    private $category = '8';

    /**
     * @var int
     *
     * @ORM\Column(name="currency", type="integer", nullable=false)
     */
    private $currency = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sessionId", type="string", length=32, nullable=true)
     */
    private $sessionid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_advert_send", type="datetime", nullable=true)
     */
    private $lastAdvertSend;

    /**
     * @var string
     *
     * @ORM\Column(name="unsubscribe_key", type="string", length=32, nullable=false)
     */
    private $unsubscribeKey;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Users
     */
    public function setId(int $id): Users
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return Users
     */
    public function setRole(string $role): Users
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Users
     */
    public function setUsername(string $username): Users
    {
        $this->username = $username;
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
     * @return Users
     */
    public function setApplicationname(string $applicationname): Users
    {
        $this->applicationname = $applicationname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Users
     */
    public function setEmail(string $email): Users
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param null|string $comment
     * @return Users
     */
    public function setComment(?string $comment): Users
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Users
     */
    public function setPassword(string $password): Users
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPasswordquestion(): ?string
    {
        return $this->passwordquestion;
    }

    /**
     * @param null|string $passwordquestion
     * @return Users
     */
    public function setPasswordquestion(?string $passwordquestion): Users
    {
        $this->passwordquestion = $passwordquestion;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPasswordanswer(): ?string
    {
        return $this->passwordanswer;
    }

    /**
     * @param null|string $passwordanswer
     * @return Users
     */
    public function setPasswordanswer(?string $passwordanswer): Users
    {
        $this->passwordanswer = $passwordanswer;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsapproved(): string
    {
        return $this->isapproved;
    }

    /**
     * @param string $isapproved
     * @return Users
     */
    public function setIsapproved(string $isapproved): Users
    {
        $this->isapproved = $isapproved;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastactivitydate(): \DateTime
    {
        return $this->lastactivitydate;
    }

    /**
     * @param \DateTime $lastactivitydate
     * @return Users
     */
    public function setLastactivitydate(\DateTime $lastactivitydate): Users
    {
        $this->lastactivitydate = $lastactivitydate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastactivitydatecart(): \DateTime
    {
        return $this->lastactivitydatecart;
    }

    /**
     * @param \DateTime $lastactivitydatecart
     * @return Users
     */
    public function setLastactivitydatecart(\DateTime $lastactivitydatecart): Users
    {
        $this->lastactivitydatecart = $lastactivitydatecart;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastactivitydatewish(): \DateTime
    {
        return $this->lastactivitydatewish;
    }

    /**
     * @param \DateTime $lastactivitydatewish
     * @return Users
     */
    public function setLastactivitydatewish(\DateTime $lastactivitydatewish): Users
    {
        $this->lastactivitydatewish = $lastactivitydatewish;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastlogindate(): ?\DateTime
    {
        return $this->lastlogindate;
    }

    /**
     * @param \DateTime|null $lastlogindate
     * @return Users
     */
    public function setLastlogindate(?\DateTime $lastlogindate): Users
    {
        $this->lastlogindate = $lastlogindate;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastpasswordchangeddate(): ?\DateTime
    {
        return $this->lastpasswordchangeddate;
    }

    /**
     * @param \DateTime|null $lastpasswordchangeddate
     * @return Users
     */
    public function setLastpasswordchangeddate(?\DateTime $lastpasswordchangeddate): Users
    {
        $this->lastpasswordchangeddate = $lastpasswordchangeddate;
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
     * @return Users
     */
    public function setCreationdate(?\DateTime $creationdate): Users
    {
        $this->creationdate = $creationdate;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsonline(): ?bool
    {
        return $this->isonline;
    }

    /**
     * @param bool|null $isonline
     * @return Users
     */
    public function setIsonline(?bool $isonline): Users
    {
        $this->isonline = $isonline;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIslockedout(): ?bool
    {
        return $this->islockedout;
    }

    /**
     * @param bool|null $islockedout
     * @return Users
     */
    public function setIslockedout(?bool $islockedout): Users
    {
        $this->islockedout = $islockedout;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastlockedoutdate(): ?\DateTime
    {
        return $this->lastlockedoutdate;
    }

    /**
     * @param \DateTime|null $lastlockedoutdate
     * @return Users
     */
    public function setLastlockedoutdate(?\DateTime $lastlockedoutdate): Users
    {
        $this->lastlockedoutdate = $lastlockedoutdate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFailedpasswordattemptcount(): ?int
    {
        return $this->failedpasswordattemptcount;
    }

    /**
     * @param int|null $failedpasswordattemptcount
     * @return Users
     */
    public function setFailedpasswordattemptcount(?int $failedpasswordattemptcount): Users
    {
        $this->failedpasswordattemptcount = $failedpasswordattemptcount;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFailedpasswordattemptwindowstart(): ?\DateTime
    {
        return $this->failedpasswordattemptwindowstart;
    }

    /**
     * @param \DateTime|null $failedpasswordattemptwindowstart
     * @return Users
     */
    public function setFailedpasswordattemptwindowstart(?\DateTime $failedpasswordattemptwindowstart): Users
    {
        $this->failedpasswordattemptwindowstart = $failedpasswordattemptwindowstart;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFailedpasswordanswerattemptcount(): ?int
    {
        return $this->failedpasswordanswerattemptcount;
    }

    /**
     * @param int|null $failedpasswordanswerattemptcount
     * @return Users
     */
    public function setFailedpasswordanswerattemptcount(?int $failedpasswordanswerattemptcount): Users
    {
        $this->failedpasswordanswerattemptcount = $failedpasswordanswerattemptcount;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFailedpasswordanswerattemptwindowstart(): ?\DateTime
    {
        return $this->failedpasswordanswerattemptwindowstart;
    }

    /**
     * @param \DateTime|null $failedpasswordanswerattemptwindowstart
     * @return Users
     */
    public function setFailedpasswordanswerattemptwindowstart(?\DateTime $failedpasswordanswerattemptwindowstart): Users
    {
        $this->failedpasswordanswerattemptwindowstart = $failedpasswordanswerattemptwindowstart;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param null|string $gender
     * @return Users
     */
    public function setGender(?string $gender): Users
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthdate(): ?\DateTime
    {
        return $this->birthdate;
    }

    /**
     * @param \DateTime|null $birthdate
     * @return Users
     */
    public function setBirthdate(?\DateTime $birthdate): Users
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    /**
     * @param null|string $countrycode
     * @return Users
     */
    public function setCountrycode(?string $countrycode): Users
    {
        $this->countrycode = $countrycode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     * @return Users
     */
    public function setCity(?string $city): Users
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * @param null|string $zip
     * @return Users
     */
    public function setZip(?string $zip): Users
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreetaddress(): ?string
    {
        return $this->streetaddress;
    }

    /**
     * @param null|string $streetaddress
     * @return Users
     */
    public function setStreetaddress(?string $streetaddress): Users
    {
        $this->streetaddress = $streetaddress;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param null|string $phone
     * @return Users
     */
    public function setPhone(?string $phone): Users
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param null|string $homepage
     * @return Users
     */
    public function setHomepage(?string $homepage): Users
    {
        $this->homepage = $homepage;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param null|string $firstname
     * @return Users
     */
    public function setFirstname(?string $firstname): Users
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return int
     */
    public function getTitle(): int
    {
        return $this->title;
    }

    /**
     * @param int $title
     * @return Users
     */
    public function setTitle(int $title): Users
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    /**
     * @param null|string $middlename
     * @return Users
     */
    public function setMiddlename(?string $middlename): Users
    {
        $this->middlename = $middlename;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param null|string $lastname
     * @return Users
     */
    public function setLastname(?string $lastname): Users
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @param null|string $nickname
     * @return Users
     */
    public function setNickname(?string $nickname): Users
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSubscribed(): bool
    {
        return $this->subscribed;
    }

    /**
     * @param bool $subscribed
     * @return Users
     */
    public function setSubscribed(bool $subscribed): Users
    {
        $this->subscribed = $subscribed;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSubscribedcats(): ?string
    {
        return $this->subscribedcats;
    }

    /**
     * @param null|string $subscribedcats
     * @return Users
     */
    public function setSubscribedcats(?string $subscribedcats): Users
    {
        $this->subscribedcats = $subscribedcats;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getResearchdirection(): ?string
    {
        return $this->researchdirection;
    }

    /**
     * @param null|string $researchdirection
     * @return Users
     */
    public function setResearchdirection(?string $researchdirection): Users
    {
        $this->researchdirection = $researchdirection;
        return $this;
    }

    /**
     * @return string
     */
    public function getTempName(): string
    {
        return $this->tempName;
    }

    /**
     * @param string $tempName
     * @return Users
     */
    public function setTempName(string $tempName): Users
    {
        $this->tempName = $tempName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMipp(): ?string
    {
        return $this->mipp;
    }

    /**
     * @param null|string $mipp
     * @return Users
     */
    public function setMipp(?string $mipp): Users
    {
        $this->mipp = $mipp;
        return $this;
    }

    /**
     * @return string
     */
    public function getEpstain(): string
    {
        return $this->epstain;
    }

    /**
     * @param string $epstain
     * @return Users
     */
    public function setEpstain(string $epstain): Users
    {
        $this->epstain = $epstain;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrdersQnty(): int
    {
        return $this->ordersQnty;
    }

    /**
     * @param int $ordersQnty
     * @return Users
     */
    public function setOrdersQnty(int $ordersQnty): Users
    {
        $this->ordersQnty = $ordersQnty;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @param null|string $ip
     * @return Users
     */
    public function setIp(?string $ip): Users
    {
        $this->ip = $ip;
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
     * @return Users
     */
    public function setDeleted(?int $deleted): Users
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * @return int
     */
    public function getBlacklist(): int
    {
        return $this->blacklist;
    }

    /**
     * @param int $blacklist
     * @return Users
     */
    public function setBlacklist(int $blacklist): Users
    {
        $this->blacklist = $blacklist;
        return $this;
    }

    /**
     * @return int
     */
    public function getIso(): int
    {
        return $this->iso;
    }

    /**
     * @param int $iso
     * @return Users
     */
    public function setIso(int $iso): Users
    {
        $this->iso = $iso;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminComment(): string
    {
        return $this->adminComment;
    }

    /**
     * @param string $adminComment
     * @return Users
     */
    public function setAdminComment(string $adminComment): Users
    {
        $this->adminComment = $adminComment;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     * @return Users
     */
    public function setCategory(int $category): Users
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrency(): int
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     * @return Users
     */
    public function setCurrency(int $currency): Users
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSessionid(): ?string
    {
        return $this->sessionid;
    }

    /**
     * @param null|string $sessionid
     * @return Users
     */
    public function setSessionid(?string $sessionid): Users
    {
        $this->sessionid = $sessionid;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastAdvertSend(): ?\DateTime
    {
        return $this->lastAdvertSend;
    }

    /**
     * @param \DateTime|null $lastAdvertSend
     * @return Users
     */
    public function setLastAdvertSend(?\DateTime $lastAdvertSend): Users
    {
        $this->lastAdvertSend = $lastAdvertSend;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnsubscribeKey(): string
    {
        return $this->unsubscribeKey;
    }

    /**
     * @param string $unsubscribeKey
     * @return Users
     */
    public function setUnsubscribeKey(string $unsubscribeKey): Users
    {
        $this->unsubscribeKey = $unsubscribeKey;
        return $this;
    }


}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Currency {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=150)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="link_text", type="string", length=60)
     */
    private $link_text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean")
     */
    private $available;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_link", type="string", length=150)
     */
    private $currencyLink;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;


     /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $background;

    /**
     * @Vich\UploadableField(mapping="product_background", fileNameProperty="background")
     * @var File
     */
    private $backgroundFile;

    public function setImageFile(File $image = null) {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile() {
        return $this->imageFile;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }

    public function setBackgroundFile(File $background = null) {
        $this->backgroundFile = $background;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($background) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getBackgroundFile() {
        return $this->backgroundFile;
    }

    public function setBackground($background) {
        $this->background = $background;
    }

    public function getBackground() {
        return $this->background;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Currency
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Currency
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Currency
     */
    public function setLink($link) {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * Set linkText
     *
     * @param string $linkText
     *
     * @return Currency
     */
    public function setLinkText($linkText) {
        $this->link_text = $linkText;

        return $this;
    }

    /**
     * Get linkText
     *
     * @return string
     */
    public function getLinkText() {
        return $this->link_text;
    }

    /**
     * Set available
     *
     * @param boolean $available
     *
     * @return Currency
     */
    public function setAvailable($available) {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean
     */
    public function getAvailable() {
        return $this->available;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Currency
     */
    public function setPrice($price) {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Currency
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set currencyLink
     *
     * @param string $currencyLink
     *
     * @return Currency
     */
    public function setCurrencyLink($currencyLink) {
        $this->currencyLink = $currencyLink;

        return $this;
    }

    /**
     * Get currencyLink
     *
     * @return string
     */
    public function getCurrencyLink() {
        return $this->currencyLink;
    }

}

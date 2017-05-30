<?php

namespace GestHouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bedrooms
 *
 * @ORM\Table(name="bedrooms")
 * @ORM\Entity(repositoryClass="GestHouseBundle\Repository\BedroomsRepository")
 */
class Bedrooms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="size", type="integer")
     */
    private $size;

    /**
     * @var int
     *
     * @ORM\Column(name="nightPrice", type="integer")
     */
    private $nightPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="wePrice", type="integer")
     */
    private $wePrice;

    /**
     * @var int
     *
     * @ORM\Column(name="weekPrice", type="integer")
     */
    private $weekPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="monthPrice", type="integer")
     */
    private $monthPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="placeNumber", type="integer")
     */
    private $placeNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="pet", type="boolean")
     */
    private $pet;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Bedrooms
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set nightPrice
     *
     * @param integer $nightPrice
     *
     * @return Bedrooms
     */
    public function setNightPrice($nightPrice)
    {
        $this->nightPrice = $nightPrice;

        return $this;
    }

    /**
     * Get nightPrice
     *
     * @return int
     */
    public function getNightPrice()
    {
        return $this->nightPrice;
    }

    /**
     * Set wePrice
     *
     * @param integer $wePrice
     *
     * @return Bedrooms
     */
    public function setWePrice($wePrice)
    {
        $this->wePrice = $wePrice;

        return $this;
    }

    /**
     * Get wePrice
     *
     * @return int
     */
    public function getWePrice()
    {
        return $this->wePrice;
    }

    /**
     * Set weekPrice
     *
     * @param integer $weekPrice
     *
     * @return Bedrooms
     */
    public function setWeekPrice($weekPrice)
    {
        $this->weekPrice = $weekPrice;

        return $this;
    }

    /**
     * Get weekPrice
     *
     * @return int
     */
    public function getWeekPrice()
    {
        return $this->weekPrice;
    }

    /**
     * Set monthPrice
     *
     * @param integer $monthPrice
     *
     * @return Bedrooms
     */
    public function setMonthPrice($monthPrice)
    {
        $this->monthPrice = $monthPrice;

        return $this;
    }

    /**
     * Get monthPrice
     *
     * @return integer
     */
    public function getMonthPrice()
    {
        return $this->monthPrice;
    }

    /**
     * Set placeNumber
     *
     * @param integer $placeNumber
     *
     * @return Bedrooms
     */
    public function setPlaceNumber($placeNumber)
    {
        $this->placeNumber = $placeNumber;

        return $this;
    }

    /**
     * Get placeNumber
     *
     * @return int
     */
    public function getPlaceNumber()
    {
        return $this->placeNumber;
    }

    /**
     * Set pet
     *
     * @param boolean $pet
     *
     * @return Bedrooms
     */
    public function setPet($pet)
    {
        $this->pet = $pet;

        return $this;
    }

    /**
     * Get pet
     *
     * @return bool
     */
    public function getPet()
    {
        return $this->pet;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Bedrooms
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bedrooms
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

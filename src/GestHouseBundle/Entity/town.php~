<?php

namespace GestHouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * town
 *
 * @ORM\Table(name="town")
 * @ORM\Entity(repositoryClass="GestHouseBundle\Repository\townRepository")
 */
class town
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
     * @var string
     *
     * @ORM\Column(name="townName", type="string", length=255)
     */
    private $townName;


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
     * Set townName
     *
     * @param string $townName
     *
     * @return town
     */
    public function setTownName($townName)
    {
        $this->townName = $townName;

        return $this;
    }

    /**
     * Get townName
     *
     * @return string
     */
    public function getTownName()
    {
        return $this->townName;
    }
}


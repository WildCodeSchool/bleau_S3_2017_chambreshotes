<?php

namespace GestHouseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="GestHouseBundle\Repository\SectionRepository")
 */
class Section
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
     * @ORM\Column(name="navTitle", type="string", length=255)
     */
    private $navTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="pageTitle", type="string", length=255)
     */
    private $pageTitle;


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
     * Set navTitle
     *
     * @param string $navTitle
     *
     * @return Section
     */
    public function setNavTitle($navTitle)
    {
        $this->navTitle = $navTitle;

        return $this;
    }

    /**
     * Get navTitle
     *
     * @return string
     */
    public function getNavTitle()
    {
        return $this->navTitle;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Section
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set pageTitle
     *
     * @param string $pageTitle
     *
     * @return Section
     */
    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;

        return $this;
    }

    /**
     * Get pageTitle
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }
}

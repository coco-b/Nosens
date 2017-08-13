<?php

namespace Nosens\WcsBundle\Entity;

/**
 * Card
 */
class Card
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $link;

    /**
     * @var \Nosens\WcsBundle\Entity\Picture
     */
    private $picture;

    /**
     * @var \Nosens\WcsBundle\Entity\Categorie
     */
    private $categories;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Card
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Card
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Card
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
     * Set link
     *
     * @param string $link
     *
     * @return Card
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set picture
     *
     * @param \Nosens\WcsBundle\Entity\Picture $picture
     *
     * @return Card
     */
    public function setPicture(\Nosens\WcsBundle\Entity\Picture $picture = null)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return \Nosens\WcsBundle\Entity\Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set categories
     *
     * @param \Nosens\WcsBundle\Entity\Categorie $categories
     *
     * @return Card
     */
    public function setCategories(\Nosens\WcsBundle\Entity\Categorie $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \Nosens\WcsBundle\Entity\Categorie
     */
    public function getCategories()
    {
        return $this->categories;
    }
}

<?php

namespace TestBundle\testBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 */
class Posts
{
    /**
     * @var integer
     */
    private $postid;

    /**
     * @var string
     */
    private $postcontent;

    /**
     * @var string
     */
    private $likes;

    /**
     * @var \TestBundle\testBundle\Entity\Users
     */
    private $userid;


    /**
     * Get postid
     *
     * @return integer 
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Set postcontent
     *
     * @param string $postcontent
     * @return Posts
     */
    public function setPostcontent($postcontent)
    {
        $this->postcontent = $postcontent;

        return $this;
    }

    /**
     * Get postcontent
     *
     * @return string 
     */
    public function getPostcontent()
    {
        return $this->postcontent;
    }

    /**
     * Set likes
     *
     * @param string $likes
     * @return Posts
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return string 
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set userid
     *
     * @param \TestBundle\testBundle\Entity\Users $userid
     * @return Posts
     */
    public function setUserid(\TestBundle\testBundle\Entity\Users $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \TestBundle\testBundle\Entity\Users 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}

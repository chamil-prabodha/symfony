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

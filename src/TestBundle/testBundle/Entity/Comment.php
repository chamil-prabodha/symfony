<?php

namespace TestBundle\testBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 */
class Comment
{
    /**
     * @var integer
     */
    private $commentid;

    /**
     * @var string
     */
    private $commentcontent;

    /**
     * @var \TestBundle\testBundle\Entity\Posts
     */
    private $postid;

    /**
     * @var \TestBundle\testBundle\Entity\Users
     */
    private $userid;


    /**
     * Get commentid
     *
     * @return integer 
     */
    public function getCommentid()
    {
        return $this->commentid;
    }

    /**
     * Set commentcontent
     *
     * @param string $commentcontent
     * @return Comment
     */
    public function setCommentcontent($commentcontent)
    {
        $this->commentcontent = $commentcontent;

        return $this;
    }

    /**
     * Get commentcontent
     *
     * @return string 
     */
    public function getCommentcontent()
    {
        return $this->commentcontent;
    }

    /**
     * Set postid
     *
     * @param \TestBundle\testBundle\Entity\Posts $postid
     * @return Comment
     */
    public function setPostid(\TestBundle\testBundle\Entity\Posts $postid = null)
    {
        $this->postid = $postid;

        return $this;
    }

    /**
     * Get postid
     *
     * @return \TestBundle\testBundle\Entity\Posts 
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Set userid
     *
     * @param \TestBundle\testBundle\Entity\Users $userid
     * @return Comment
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

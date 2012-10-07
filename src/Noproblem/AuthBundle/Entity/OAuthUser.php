<?php

namespace Noproblem\AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noproblem\AuthBundle\Entity\OAuthUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Noproblem\AuthBundle\Entity\OAuthUserRepository")
 */
class OAuthUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username = '';


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
     * Set username
     *
     * @param string $username
     * 
     * @return OAuthUser
     */
    public function setUsername($username)
    {
        $this->username = (string) $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }
}

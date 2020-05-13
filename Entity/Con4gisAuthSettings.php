<?php
/**
 * Created by PhpStorm.
 * User: mdv
 * Date: 13.05.20
 * Time: 09:02
 */

namespace con4gis\AuthBundle\Entity;

use \Doctrine\ORM\Mapping as ORM;

/**
 * Class Service
 *
 * @ORM\Entity
 * @ORM\Table(name="tl_c4g_auth_settings")
 * @package con4gis\AuthBundle\Entity
 */

class Con4gisAuthSettings
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    protected $id = 0;

    /**
     * @var int
     * @ORM\Column(name="tstamp", type="integer")
     */
    protected $tstamp = '';

    /**
     * @var string
     * @ORM\Column(name="email", type="string")
     */
    protected $email = '';

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    protected $name = '';

    /**
     * @var string
     * @ORM\Column(name="userFilter", type="string")
     */
    protected $userFilter = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTstamp(): int
    {
        return $this->tstamp ? $this->tstamp : '';
    }

    /**
     * @param int $tstamp
     */
    public function setTstamp(int $tstamp)
    {
        $this->tstamp = $tstamp;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email ? $this->email : '';
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name ? $this->name : '';
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $userFilter
     */
    public function setUserFilter(string $userFilter)
    {
        $this->userFilter = $userFilter;
    }

    /**
     * @return string
     */
    public function getUserFilter(): string
    {
        return $this->userFilter ? $this->userFilter : '';
    }
}
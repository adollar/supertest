<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * computer
 *
 * @ORM\Table(name="computer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\computerRepository")
 */
class Computer
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
     * @ORM\Column(name="cpu",type="string", length=200, nullable=true)
     */
    private $cpu;

    /**
     * @var string
     *
     * @ORM\Column(name="ram",type="string", length=200, nullable=true)
     */
    private $ram;

    /**
     * @var string
     *
     * @ORM\Column(name="hdd", type="string", length=200, nullable=true)
     */
    private $hdd;


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
     * Set cpu
     *
     * @param string $cpu
     *
     * @return computer
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get cpu
     *
     * @return string
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Set ram
     *
     * @param string $ram
     *
     * @return computer
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get ram
     *
     * @return string
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set hdd
     *
     * @param string $hdd
     *
     * @return computer
     */
    public function setHdd($hdd)
    {
        $this->hdd = $hdd;

        return $this;
    }

    /**
     * Get hdd
     *
     * @return string
     */
    public function getHdd()
    {
        return $this->hdd;
    }
}


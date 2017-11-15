<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Polzovatel
 *
 * @ORM\Table(name="Polzovatel", indexes={@ORM\Index(name="id_monitor", columns={"id_monitor"})})
 * @ORM\Entity
 */
class Polzovatel
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="cabinet", type="integer", nullable=true)
     */
    private $cabinet;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Monitor", inversedBy="polzovatels", cascade={"persist"})
     * @ORM\JoinColumn(name="id_monitor", referencedColumnName="id")
     */
    private $idmonitor;

    

 /**
     * Set name
     *
     * @param string $name
     *
     * @return Polzovatel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCabinet($cabinet)
    {
        $this->cabinet=$cabinet;
        return $this;
    }

    public function getCabinet()
    {
        return $this->cabinet;
    }
     

     
    public function setIdmonitor($idmonitor)
    {
        $this->idmonitor=$idmonitor;
        return $this;
    }
    
    /**
    * @return monitor
    */
    public function getIdmonitor()
    {
        return $this->idmonitor;
    }





}




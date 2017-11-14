<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Monitor
 *
 * @ORM\Table(name="monitor")
 * @ORM\Entity
 */
class Monitor
{
    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=100, nullable=true)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="diagonal", type="integer", nullable=true)
     */
    private $diagonal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
 

     /**
     * @ORM\OneToMany(targetEntity="Polzovatel", mappedBy="idmonitor")
     */
    private $polzovatels;

    public function __construct()
    {
        $this->polzovatels = new ArrayCollection();
    }


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
     * Set model
     *
     * @param string $model
     *
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set diagonal
     *
     * @return Monitor
     */

    public function setDiagonal($diagonal)
    {
        $this->diagonal = $diagonal;
        return $diagonal;
    }

    public function getDiagonal()
    {
        return $this->diagonal;
    }

   

}


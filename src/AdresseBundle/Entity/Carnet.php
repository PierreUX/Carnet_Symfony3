<?php

namespace AdresseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * carnet
 *
 * @ORM\Table(name="carnet")
 * @ORM\Entity(repositoryClass="AdresseBundle\Repository\carnetRepository")
 */
class Carnet
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
     * @var int
     *
     * @ORM\Column(name="idTitulaire", type="integer", unique=true)
     */
    private $idTitulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="listUtili", type="string", length=255)
     */
    private $listUtili;


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
     * Set idTitulaire
     *
     * @param integer $idTitulaire
     *
     * @return carnet
     */
    public function setIdTitulaire($idTitulaire)
    {
        $this->idTitulaire = $idTitulaire;

        return $this;
    }

    /**
     * Get idTitulaire
     *
     * @return int
     */
    public function getIdTitulaire()
    {
        return $this->idTitulaire;
    }

    /**
     * Set listUtili
     *
     * @param string $listUtili
     *
     * @return carnet
     */
    public function setListUtili($listUtili)
    {
        $this->listUtili = $listUtili;

        return $this;
    }

    /**
     * Get listUtili
     *
     * @return string
     */
    public function getListUtili()
    {
        return $this->listUtili;
    }
}


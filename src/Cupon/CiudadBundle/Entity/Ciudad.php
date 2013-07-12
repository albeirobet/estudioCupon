<?php

namespace Cupon\CiudadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cupon\OfertaBundle\Util\Util;


/**
 * @ORM\Entity
 * @ORM\Table(name="ProyectoCupon_Ciudad")
 * @ORM\Entity(repositoryClass="Cupon\CiudadBundle\Entity\CiudadRepository")
 */
class Ciudad {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     * 
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     *  
     */
    protected $slug;

    public function getId() {
        return $this->id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        //Esta linea es para generar el Slug del nombre de la ciudad a la hora de cargar por Fixures
        $this->slug = Util::getSlug($nombre);

    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function __toString() {
        return $this->getNombre();
    }

}

?>

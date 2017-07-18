<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informe
 *
 * @ORM\Table(name="informe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InformeRepository")
 */
class Informe
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
     * @ORM\Column(name="nro_remitente", type="integer")
     */
    private $nroRemitente;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacion", type="string", length=1024)
     */
    private $denominacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="diasTranscurridos", type="integer", nullable=true)
     */
    private $diasTranscurridos;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_alerta", type="string", length=255)
     */
    private $tipoAlerta;
    
    /**
     * @var string
     *
     * @ORM\Column(name="tipo_comprobante", type="string", length=255)
     */
    private $tipoComprobante;
    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;



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
     * Set nroRemitente
     *
     * @param integer $nroRemitente
     *
     * @return Informe
     */
    public function setNroRemitente($nroRemitente)
    {
        $this->nroRemitente = $nroRemitente;

        return $this;
    }

    /**
     * Get nroRemitente
     *
     * @return integer
     */
    public function getNroRemitente()
    {
        return $this->nroRemitente;
    }

    /**
     * Set denominacion
     *
     * @param string $denominacion
     *
     * @return Informe
     */
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion
     *
     * @return string
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Informe
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set diasTranscurridos
     *
     * @param integer $diasTranscurridos
     *
     * @return Informe
     */
    public function setDiasTranscurridos($diasTranscurridos)
    {
        $this->diasTranscurridos = $diasTranscurridos;

        return $this;
    }

    /**
     * Get diasTranscurridos
     *
     * @return integer
     */
    public function getDiasTranscurridos()
    {
        return $this->diasTranscurridos;
    }

    /**
     * Set tipoAlerta
     *
     * @param string $tipoAlerta
     *
     * @return Informe
     */
    public function setTipoAlerta($tipoAlerta)
    {
        $this->tipoAlerta = $tipoAlerta;

        return $this;
    }

    /**
     * Get tipoAlerta
     *
     * @return string
     */
    public function getTipoAlerta()
    {
        return $this->tipoAlerta;
    }

    /**
     * Set tipoComprobante
     *
     * @param string $tipoComprobante
     *
     * @return Informe
     */
    public function setTipoComprobante($tipoComprobante)
    {
        $this->tipoComprobante = $tipoComprobante;

        return $this;
    }

    /**
     * Get tipoComprobante
     *
     * @return string
     */
    public function getTipoComprobante()
    {
        return $this->tipoComprobante;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Informe
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
<?php

namespace App\Entity;

use App\Repository\MovimientoMensualRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=MovimientoMensualRepository::class)
 */
class MovimientoMensual
{
    use TimestampableEntity;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="integer")
     */
    private $valor;

    /**
     * @ORM\ManyToOne(targetEntity=TipoMovimiento::class, inversedBy="movimientoMensuals")
     */
    private $tipoMovimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getValor(): ?int
    {
        return $this->valor;
    }

    public function setValor(int $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getTipoMovimiento(): ?TipoMovimiento
    {
        return $this->tipoMovimiento;
    }

    public function setTipoMovimiento(?TipoMovimiento $tipoMovimiento): self
    {
        $this->tipoMovimiento = $tipoMovimiento;

        return $this;
    }
}

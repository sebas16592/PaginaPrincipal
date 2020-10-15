<?php

namespace App\Entity;

use App\Repository\TipoMovimientoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * @ORM\Entity(repositoryClass=TipoMovimientoRepository::class)
 */
class TipoMovimiento
{
    use TimestampableEntity;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity=Movimiento::class, mappedBy="tipoMovimiento")
     */
    private $movimientos;

    /**
     * @ORM\OneToMany(targetEntity=MovimientoMensual::class, mappedBy="tipoMovimiento")
     */
    private $movimientoMensuals;

    public function __construct()
    {
        $this->movimientos = new ArrayCollection();
        $this->movimientoMensuals = new ArrayCollection();
    }

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

    /**
     * @return Collection|Movimiento[]
     */
    public function getMovimientos(): Collection
    {
        return $this->movimientos;
    }

    public function addMovimiento(Movimiento $movimiento): self
    {
        if (!$this->movimientos->contains($movimiento)) {
            $this->movimientos[] = $movimiento;
            $movimiento->setTipoMovimiento($this);
        }

        return $this;
    }

    public function removeMovimiento(Movimiento $movimiento): self
    {
        if ($this->movimientos->contains($movimiento)) {
            $this->movimientos->removeElement($movimiento);
            // set the owning side to null (unless already changed)
            if ($movimiento->getTipoMovimiento() === $this) {
                $movimiento->setTipoMovimiento(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MovimientoMensual[]
     */
    public function getMovimientoMensuals(): Collection
    {
        return $this->movimientoMensuals;
    }

    public function addMovimientoMensual(MovimientoMensual $movimientoMensual): self
    {
        if (!$this->movimientoMensuals->contains($movimientoMensual)) {
            $this->movimientoMensuals[] = $movimientoMensual;
            $movimientoMensual->setTipoMovimiento($this);
        }

        return $this;
    }

    public function removeMovimientoMensual(MovimientoMensual $movimientoMensual): self
    {
        if ($this->movimientoMensuals->contains($movimientoMensual)) {
            $this->movimientoMensuals->removeElement($movimientoMensual);
            // set the owning side to null (unless already changed)
            if ($movimientoMensual->getTipoMovimiento() === $this) {
                $movimientoMensual->setTipoMovimiento(null);
            }
        }

        return $this;
    }
}

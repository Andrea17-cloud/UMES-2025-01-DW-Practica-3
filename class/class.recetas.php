<?php
class Recetas{
    
    private string $titulo;
    private string $descripcion;
    private array $ingredientes;
    private array $pasos;

    public function __construct(string $titulo, string $descripcion, array $ingredientes, array $pasos)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->ingredientes = $ingredientes;
        $this->pasos = $pasos;
    }

    public function getTitulo(): string{
        return $this->titulo;
    }

    public function getDescripcion(): string{
        return $this->descripcion;
    }

    public function getIngredientes(): array{
        return $this->ingredientes;
    }

    public function getPasos(): array{
        return $this->pasos;
    }


}

?>
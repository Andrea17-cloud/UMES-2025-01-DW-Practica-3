<?php
include './class.recetas.php';

class RecetasSaladas extends Recetas{
    private string $titulo;
    private string $descripcion;
    private array $ingredientes;
    private array $pasos;
    
    public function __construct(string $titulo, string $descripcion, array $ingredientes, array $pasos)
    {
        parent ::__construct($titulo, $descripcion, $ingredientes, $pasos);
    }
}
?>
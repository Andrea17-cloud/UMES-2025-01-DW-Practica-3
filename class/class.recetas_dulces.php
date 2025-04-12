<?php
include './class.recetas.php';

class RecetasDulces extends Recetas{
    private string $titulo;
    private string $descripcion;
    private array $ingredientes;
    private array $pasos;
    
    public function __construct(string $titulo, string $descripcion, array $ingredientes, array $pasos)
    {
        parent ::__construct($titulo, $descripcion, $ingredientes, $pasos);
    }
}

echo "Recetas Dulces";
echo '<br>';

$prueba = new RecetasDulces('tit','ok',['uno', 'dos'],['uno', 'dos']);

print_r($prueba->getTitulo());

?>
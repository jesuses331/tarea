<?php
class Tarea
{
    public $id;
    public $descripcion;
    public $completada;

    public function __construct($descripcion)
    {
        $this->id = uniqid();
        $this->descripcion = $descripcion;
        $this->completada = false;
    }
}

// Función para mostrar el menú
function mostrarMenu()
{
    echo "\nMenú de tareas:\n";
    echo "1. Agregar tarea\n";
    echo "2. Eliminar tarea\n";
    echo "3. Marcar como completada\n";
    echo "4. Listar tareas pendientes\n";
    echo "5. Salir\n";
}


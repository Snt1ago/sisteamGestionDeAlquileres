<?php

namespace Leandro\app\modelo;

class Persona
{
  private $id;
  private $nombre;

  public function __construct($nombre = "", $id = "")
  {
    $this->id = $id;
    $this->nombre = $nombre;
  }

  public function listar()
  {
    $lista[] = new Persona(1, "Forlan");
    $lista[] = new Persona(2, "Clara");
    $lista[] = new Persona(3, "Paqueta");
    return $lista;
  }

  public function getNombre()
  {
    return $this->nombre;
  }
}
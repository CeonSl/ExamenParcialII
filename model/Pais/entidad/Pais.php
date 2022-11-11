<?php

class Pais {

    private $id;
    private $numeroHabitantes;
    private $idioma;
    private $nombrePais;
    private $gentilicio;
    private $presidente;
    private $kilometrosCuadrados;
    private $id_continente;

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of numeroHabitantes
     */ 
    public function getNumeroHabitantes()
    {
        return $this->numeroHabitantes;
    }

    /**
     * Set the value of numeroHabitantes
     *
     * @return  self
     */ 
    public function setNumeroHabitantes($numeroHabitantes)
    {
        $this->numeroHabitantes = $numeroHabitantes;

        return $this;
    }

    /**
     * Get the value of idioma
     */ 
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set the value of idioma
     *
     * @return  self
     */ 
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get the value of gentilicio
     */ 
    public function getGentilicio()
    {
        return $this->gentilicio;
    }

    /**
     * Set the value of gentilicio
     *
     * @return  self
     */ 
    public function setGentilicio($gentilicio)
    {
        $this->gentilicio = $gentilicio;

        return $this;
    }

    /**
     * Get the value of presidente
     */ 
    public function getPresidente()
    {
        return $this->presidente;
    }

    /**
     * Set the value of presidente
     *
     * @return  self
     */ 
    public function setPresidente($presidente)
    {
        $this->presidente = $presidente;

        return $this;
    }

    /**
     * Get the value of kilometrosCuadrados
     */ 
    public function getKilometrosCuadrados()
    {
        return $this->kilometrosCuadrados;
    }

    /**
     * Set the value of kilometrosCuadrados
     *
     * @return  self
     */ 
    public function setKilometrosCuadrados($kilometrosCuadrados)
    {
        $this->kilometrosCuadrados = $kilometrosCuadrados;

        return $this;
    }

    /**
     * Get the value of id_continente
     */ 
    public function getId_continente()
    {
        return $this->id_continente;
    }

    /**
     * Set the value of id_continente
     *
     * @return  self
     */ 
    public function setId_continente($id_continente)
    {
        $this->id_continente = $id_continente;

        return $this;
    }


    /**
     * Get the value of nombrePais
     */ 
    public function getNombrePais()
    {
        return $this->nombrePais;
    }

    /**
     * Set the value of nombrePais
     *
     * @return  self
     */ 
    public function setNombrePais($nombrePais)
    {
        $this->nombrePais = $nombrePais;

        return $this;
    }
}

?>
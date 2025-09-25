<?php
class Contacto
{
    private $id = 0;
    private $nombre= null;
    private $telefono = null;
    private $email = null;

    public function get($prop)
    {
        reset($this->{$prop});
    }

    public function set($prop, $value)
    { 
        $this->{$prop} = $value;
    }
    
}
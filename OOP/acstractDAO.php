<?php

abstract class AbstractDAO{
    protected $pdoInstance;
    
    public function __consturct(PDO $pdoInstance){
        $this->pdoInstance = $pdoInstance;
        if($this->pdoInstance === null){
            throw new LogicException("no DB connection");
        }
        
        
    }
}

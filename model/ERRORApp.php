<?php
//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 12/01/2023  
class ERRORApp {
    private $codError;
    private $messageError;
    
    public function __construct($codError, $messageError) {
        $this->codError = $codError;
        $this->messageError = $messageError;
    }
    
    public function getCodError() {
        return $this->codError;
    }

    public function getMessageError() {
        return $this->messageError;
    }
}

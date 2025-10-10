<?php
    class f4 extends Monoplaza {
        private $pais;
        //CONSTRUCTORES
        public function __construct($pPais,$pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos){
            parent::__construct($pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos); 
            $this->pais = $pPais;
        }
        public function __constructorVacio(){
            parent:: __constructorVacio();
            $this->pais = "Italia";
        }
        public function setPais($pPais){
            $this->pais = $pPais;
        }
        public function getPais(){
            return $this->pais;
        }
    }

?>
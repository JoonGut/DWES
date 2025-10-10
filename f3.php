<?php
    class F3 extends Monoplaza{
        private $nombre_academia;

        public function __construct($nombre_academia,$pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos) {
            parent:: __construct($pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos);
            $this->nombre_academia = $nombre_academia;
        }
        public function __constructorVacio(){
            parent::__constructorVacio();
            $this->nombre_academia = "Pure Sport";
        }

        public function setNombreAcademia ($pNombreAcademia){
            $this->nombre_academia = $pNombreAcademia;
        }
        public function getNombreAcademia (){
            return $this->nombre_academia;
        }
    }

?>
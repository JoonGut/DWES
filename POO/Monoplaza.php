<?php
    abstract class Monoplaza {
        private $nombre_piloto;
        private $nacionalidad_piloto;
        private $num_monoplaza;
        private $escuderia;
        private $puntos;

        //CONSTRUCTORES
        public function __construct($pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos){

            $this->nombre_piloto = $pNombre;
            $this->nacionalidad_piloto = $pNacionalidad;
            $this->num_monoplaza = $pNumero;
            $this->escuderia = $pEscuderia;
            $this->puntos = $pPuntos;
        }
        
        //GETTERS Y SETTERS
        public function setNombrePiloto($pNombre){
            $this->nombre_piloto = $pNombre;
        }
        public function getNombrePiloto(){
            return $this->nombre_piloto;
        }
        public function setNacionalidad($pNacionalidad){
            $this->nacionalidad_piloto = $pNacionalidad;
        }
        public function getNacionalidad(){
            return $this->nacionalidad_piloto;
        }
        public function setNumMonoplaza($pNumero){
            $this->num_monoplaza = $pNumero;
        }
        public function getNumMonoplaza(){
            return $this->num_monoplaza;
        }
        public function setEscuderia($pEscuderia){
            $this->escuderia = $pEscuderia;
        }
        public function getEscuderia (){
            return $this->escuderia;
        }
        public function setPuntos($pPuntos){
            $this->puntos = $pPuntos;
        }
        public function getPuntos(){
            return $this->puntos;
        }
            
        }
?>

<?php
require_once 'Monoplaza.php';
require_once 'F2.php';
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

        public function  otorgarPuntos($pPosicion){
            $puntosGanados = $this->getPuntos();
            if($this->validarPosicion() == false ){
                echo "Posicion no valida";
            }else{
                switch($pPosicion){
                    case 1:
                        $puntosGanados += 10;
                    break;
                    case 2:
                        $puntosGanados += 8;
                    break;
                    case 3:
                        $puntosGanados += 7;
                    break;
                    case 4:
                        $puntosGanados += 6;
                    break;
                    case 5:
                        $puntosGanados += 5;
                    break;
                    case 6:
                        $puntosGanados += 4;
                    break;
                    case 7:
                        $puntosGanados += 3;
                    break;
                    case 8:
                        $puntosGanados += 2;
                    break;  
                    case 9:
                        $puntosGanados += 1;
                    break;
                    default:
                        $puntosGanados += 0;
                }
                $this->setPuntos($puntosGanados);
            }
        }
        public function validarPosicion(){
            if ($this->getPuntos() < 1 ||  $this->getPuntos() > 30){
                return false;
            }else{
                return true;
            }
        }
        public function subirCategoria($esApto){
            $pMinimo = false;
            if ($esApto){
                $subida = new F2($pMinimo,$this->getNombrePiloto(), $this->getNacionalidad(), $this->getNumMonoplaza(), $this->getEscuderia(), $this->getPuntos());
                return $subida;
            }else{
                echo "No tiene puntos suficientes";
            } 
        }
    }

?>
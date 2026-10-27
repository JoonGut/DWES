<?php
require_once 'Monoplaza.php';
require_once 'F1.php';
require_once 'Puntos.php';
    class F2 extends Monoplaza implements Puntos{
        private $puntos_min = false;
        public function __construct($pPuntosMin,$pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos) {
            parent:: __construct($pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos);
            $this->puntos_min = $pPuntosMin;
        }

        public function setPuntosMin ($pPuntosMin){
            $this->puntos_min = $pPuntosMin;
        }
        public function getPuntosMin (){
            return $this->puntos_min;
        }

        public function  otorgarPuntos($pPosicion,$vueltaRapida){
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
                if ($vueltaRapida == true){
                    $puntosGanados +=1;
                    $this->setPuntos($puntosGanados);
                }else{
                    $this->setPuntos($puntosGanados);
                }
            }
        }
        public function validarPosicion(){
            if ($this->getPuntos() < 1 ||  $this->getPuntos() > 24){
                return false;
            }else{
                return true;
            }
        }
        public function subirCategoria($nombrePatrocinador){
            if ($this->getPuntosMin()){
                $subida = new F3($nombrePatrocinador,$this->getNombrePiloto(), $this->getNacionalidad(), $this->getNumMonoplaza(), $this->getEscuderia(), $this->getPuntos());
                return $subida;
            }else{
                echo "No tiene puntos suficientes";
            } 
        }

    }
?>
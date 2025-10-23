<?php
require_once 'Monoplaza.php';
require_once 'Puntos.php';
    class F1 extends Monoplaza implements Puntos{
        private $nombrePatrocinador;

        public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos,$pPatrocinador) {
            parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos);
            $this->nombrePatrocinador = $pPatrocinador;
        }
        public function setNombrePatrocinador($pPatrocinador){
            $this->nombrePatrocinador = $pPatrocinador;
        }
        public function getPatrocinador(){
            return $this->nombrePatrocinador;
        }

        public function  otorgarPuntos($pPosicion,$vueltaRapida){
            $puntosGanados = $this->getPuntos();
            if($this->validarPosicion() == false){
                echo "Posicion no valida";
            }else{
                switch($pPosicion){
                case 1:
                    $puntosGanados += 25;
                break;
                case 2:
                    $puntosGanados += 18;
                break;
                case 3:
                    $puntosGanados += 15;
                break;
                case 4:
                    $puntosGanados += 12;
                break;
                case 5:
                    $puntosGanados += 10;
                break;
                case 6:
                    $puntosGanados += 8;
                break;
                case 7:
                    $puntosGanados += 6;
                break;
                case 8:
                    $puntosGanados += 4;
                break;  
                case 9:
                    $puntosGanados += 2;
                break;
                case 10:
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
            if ($this->getPuntos() < 1 ||  $this->getPuntos() > 22){
                return false;
            }else{
                return true;
            }
        }
    }
?>
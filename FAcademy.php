<?php
require_once 'Monoplaza.php';
require_once 'F4.php';
    class FAcademy extends Monoplaza{
        private $potencia_max;

        public function __construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos,$pPotencia){
            parent::__construct($pNombre, $pNacionalidad, $pNumero, $pEscuderia, $pPuntos,);
            $this->potencia_max = $pPotencia;
        }
        public function __constructorVacio(){
            parent::__constructorVacio();
            $this->potencia_max = 250;
        }
        public function setPotencia($pPotencia){
            $this->potencia_max  = $pPotencia;
        } 
        public function getPotencia(){
            return $this->potencia_max;
        } 

        //METODOS
        public function  otorgarPuntos($pPosicion){
            $puntosGanados = $this->getPuntos();
            if($this->validarPosicion() == false){
                echo "Posicion no valida";
            }else{
                switch($pPosicion){
                    case 1:
                        $puntosGanados += 18;
                    break;
                    case 2:
                        $puntosGanados += 15;
                    break;
                    case 3:
                        $puntosGanados += 12;
                    break;
                    case 4:
                        $puntosGanados += 10;
                    break;
                    case 5:
                        $puntosGanados += 8;
                    break;
                    case 6:
                        $puntosGanados += 6;
                    break;
                    case 7:
                        $puntosGanados += 4;
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
            }
            $this->setPuntos($puntosGanados);
        }
        public function validarPosicion(){
            if ($this->getPuntos() < 1 ||  $this->getPuntos() > 22){
                return false;
            }else{
                return true;
            }
        }
        public function subirCategoria($nombre_academia,$esApto){
            if ($esApto){
                $subida = new F4($nombre_academia,$this->getNombrePiloto(), $this->getNacionalidad(), $this->getNumMonoplaza(), $this->getEscuderia(), $this->getPuntos());
                return $subida;
            }else{
                echo "No tiene puntos suficientes";
            } 
        }
    }
?>
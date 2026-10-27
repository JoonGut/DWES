<?php
require_once 'Monoplaza.php';
require_once 'F3.php';
require_once 'Puntos.php';
    class F4 extends Monoplaza implements Puntos {
        private $pais;
        //CONSTRUCTORES
        public function __construct($pPais,$pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos){
            parent::__construct($pNombre,$pNacionalidad,$pNumero,$pEscuderia,$pPuntos); 
            $this->pais = $pPais;
        }
        public function setPais($pPais){
            $this->pais = $pPais;
        }
        public function getPais(){
            return $this->pais;
        }

        //METODOS
        public function  otorgarPuntos($pPosicion){
            $puntosGanados = $this->getPuntos();
            if( $this->validarPosicion() == false ){
                echo " Posicion no valida ";
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
        public function subirCategoria($academia,$esApto){
            if ($esApto){
                $subida = new F3($academia,$this->getNombrePiloto(), $this->getNacionalidad(), $this->getNumMonoplaza(), $this->getEscuderia(), $this->getPuntos());
                return $subida;
            }else{
                echo "No tiene puntos suficientes";
            } 
        }
    }

?>
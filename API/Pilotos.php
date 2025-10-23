r
<?php
require_once 'Api.php';

    class Pilotos{
        public function obtenerPiloto($num){
            global $url_base;
            //lATEST PARA ESTAR SIEMPRE ACTUALIZADO
            $url = $url_base. "driver_number=$num&session_key=latest";
            $json = file_get_contents($url);
            $data = json_decode ($json,true);
            //echo $url;
            if (empty($data)){
                echo "No se encontro ningun registro";
            }else{
                echo " <br>";
                $piloto = $data[0];
                $datos_pilotos  = [
                    "Foto" => $piloto['headshot_url']?? null,
                    "Nombre completo" => $piloto ['full_name'] ?? null,
                    "Numero" => $piloto['driver_number'] ?? null,
                    "Equipo" => $piloto['team_name'] ?? null
                ];

                foreach($datos_pilotos as $clave => $valor){
                    if ($clave == "Foto") {
                        //TENEMOS QUE HACERLO PARA MOSTRAR LA IMAGEN Y NO LA URL
                        echo "\n".$clave . ": <br><img src='" . $valor . "' alt='Foto del piloto'><br>"; 
                    } else {
                        echo "\n".$clave . ": " . $valor . "<br>";
                    }
                }
            }
        }

    }

?>
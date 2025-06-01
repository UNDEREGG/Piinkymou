<?php
    class basedatos{
        
        private $con;
		private $dbequipo='localhost';
		private $dbusuario='root';
		private $dbclave='';
		private $dbnombre='logeado';
        
        //constructor
		function __construct(){
			$this->conectar();
		}//fin constructor


        //función para conectarse a la base de datos
		public function conectar(){
			$this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);

			if(mysqli_connect_error()){
				die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
			}

		}//fin funcion conectar

        public function login($email, $clave){
            $sql = "SELECT COUNT(*) as registros FROM usuarios 
            WHERE email = '$email' AND clave = '$clave'";
            $resultado = mysqli_query($this->con, $sql);
            return $resultado;
        }//fin funcion login

		//función para insertar datos
        public function registro_usuario($email,$clave){
            $sql = "INSERT INTO usuarios(email,clave) VALUES ('$email', '$clave');";
            $resultado = mysqli_query($this->con, $sql);
                if($resultado){
                    return true;
                }else{
                    return false;
                }
        }//fin insertar_datos
		
		//función para consultar usuarios
		public function leer_usuarios(){
			$sql = "SELECT * FROM usuarios";
			 $res = mysqli_query($this->con, $sql);
			return $res;
		}// fin consulta



    }// fin clase basedatos


?>



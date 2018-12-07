<?php 

    class clsep{
        public function acceso($usuario,$contra){
            $datos=array();
            if($conn = mysqli_connect("localhost","id7073473_id7073473_javidiaz","PedroJavier97","id7073473_bdeasypark")){
                $renglon =mysqli_query($conn,"call login('$usuario','$contra')");
                while($resultado = mysqli_fetch_assoc($renglon)){
                    $datos[0]["CLAVE"]=$resultado["CLAVE"];
                    if((int)$datos[0]["CLAVE"]!=0){
                        $datos[1]["USUARIO"]=$resultado["USUARIO"];
                        $datos[2]["TIPO"]=$resultado["TIPO"];
                    }
                }
                mysqli_close($conn);

            }
            return $datos;
        }
         public function agregarusu($nombre,$ap,$am,$correo,$contra,$tel,$user){
                $datos=array();
                if($conn= mysqli_connect("localhost","id7073473_id7073473_javidiaz","PedroJavier97","id7073473_bdeasypark")){
                        $renglon=mysqli_query($conn,"CALL registroUsuarios('$nombre','$ap','$am','$correo','$contra','$tel','$user','1');");
                            $datos[0]["CLAVE"]=$resultado["CLAVE"];
                            mysqli_close($conn);
                    }
                    return $datos;
        }
        
        public function lugares(){
			$res=array();
			$reg=0;
			$conn = mysqli_connect("localhost","id7073473_id7073473_javidiaz","PedroJavier97","id7073473_bdeasypark");
			$recordSet=mysqli_query($conn, "CALL conlugares();");
			while($resultado = mysqli_fetch_assoc($recordSet)){
			    $res[$reg]["CLAVE"]=$resultado["CLAVE"];
				$res[$reg]["ESTATUS"]=$resultado["ESTATUS"];
				$reg++;
			}
			mysqli_free_result($recordSet);
			mysqli_close($conn);
			return $res;
		}

        public function autosp($cve){
			$res=array();
			$reg=0;
			$conn = mysqli_connect("localhost","id7073473_id7073473_javidiaz","PedroJavier97","id7073473_bdeasypark");
			$recordSet=mysqli_query($conn, "CALL autospu('$cve');");
			while($resultado = mysqli_fetch_assoc($recordSet)){
			    $res[$reg]["PLACA"]=$resultado["PLACA"];
				$res[$reg]["MODELO"]=$resultado["MODELO"];
				$reg++;
			}
			mysqli_free_result($recordSet);
			mysqli_close($conn);
			return $res;
		}
		
		public function agregarauto($placa,$modelo,$marca,$color,$descripcion,$user){
                $datos=array();
                if($conn= mysqli_connect("localhost","id7073473_id7073473_javidiaz","PedroJavier97","id7073473_bdeasypark")){
                        $renglon=mysqli_query($conn,"CALL registrarAutos('$placa','$modelo','$marca','$color','$descripcion','$user');");
                            $datos[0]["CLAVE"]=$resultado["CLAVE"];
                            mysqli_close($conn);
                    }
                    return $datos;
		}   
		 public function selugar($cve,$estatus){
                $datos=array();
                if($conn= mysqli_connect("localhost","id7073473_id7073473_javidiaz","PedroJavier97","id7073473_bdeasypark")){
                        $renglon=mysqli_query($conn,"CALL seLugar('$cve','$estatus');");
                            $datos[0]["CLAVE"]=$resultado["CLAVE"];
                            mysqli_close($conn);
                    }
                    return $datos;
        }
    
    
     
    public function mostrarbusqueda($busq){
			$res=array();
			$reg=0;
			$conn = mysqli_connect("localhost", "id7073473_id7073473_javidiaz", "PedroJavier97", "id7073473_bdeasypark");
			$recordSet=mysqli_query($conn, "call spbuscarCarro('$busq');");
			while($resultado = mysqli_fetch_assoc($recordSet)){
				$res[$reg]["TICKET"]=$resultado["ticket"];
				$res[$reg]["AUTO"]=$resultado["placa"];
		 		$res[$reg]["LUGAR"]=$resultado["lugar"];
				$res[$reg]["FECHA"]=$resultado["fecha"];
				$res[$reg]["SUBTOTAL"]=$resultado["ticsubtotal"];
				$res[$reg]["IMPORTE"]=$resultado["importe"];
				$res[$reg]["ESTATUS"]=$resultado["estatus"];
				$reg++;
			}
			mysqli_free_result($recordSet);
			mysqli_close($conn);
			return $res;
		}
    
	public function cticket($auto,$lugar,$importe,$estatus,$subt){
                $datos=array();
                if($conn= mysqli_connect("localhost","id7073473_id7073473_javidiaz","PedroJavier97","id7073473_bdeasypark")){
                        $renglon=mysqli_query($conn,"CALL creaTicket('$auto','$lugar','$importe','$estatus','$subt');");
                            $datos[0]["CLAVE"]=$resultado["CLAVE"];
                            mysqli_close($conn);
                    }
                    return $datos;
        }	
    }
?>
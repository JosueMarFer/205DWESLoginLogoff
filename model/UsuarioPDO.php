<?php

//@author Josue Martinez Fernandez
//@version 1.0
//ultima actualizacion 12/01/2023  
class UsuarioPDO implements UsuarioDB {

//Funcion utilizada para comprobar si un usuario existe en la BBDD y si la contraseña es correcta
    public static function validarUsuario($codUsuario, $password) {
        //Definicion de la sentencia SQL, previo cifrado de la password
        $passwordCifrada = (hash('sha256', ($codUsuario . $password)));
        $sqlValidarUsuario = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario ='{$codUsuario}' AND T01_Password ='{$passwordCifrada}';";
//Ejecucion de la sentencia usando la clase DBPDO
        $oResultado = DBPDO::ejecutarConsulta($sqlValidarUsuario);
        $usuarioResultado = $oResultado->fetchObject();
//Si el usuario existe devuelve un objeto usuario, si no retorna un booleano en false;
        if ($usuarioResultado) {
            return new Usuario($usuarioResultado->T01_CodUsuario, $usuarioResultado->T01_Password, $usuarioResultado->T01_DescUsuario, $usuarioResultado->T01_NumConexiones, $usuarioResultado->T01_FechaHoraUltimaConexion, null, $usuarioResultado->T01_Perfil);
        } else {
            return false;
        }
    }

    public static function registrarUltimaConexion($ousuario) {
// Actualiza el numero de conexiones del objeto usuario y la ultima conexion anterior por la ultima conexion        
        $ousuario->setfechaHoraUltimaConexionAnterior($ousuario->getfechaHoraUltimaConexion());
        $ousuario->setFechaHoraUltimaConexion(new DateTime());
        $ousuario->setNumAccesos($ousuario->getNumAccesos() + 1);
        $fechaHoraSQL = $ousuario->getFechaHoraUltimaConexion();
        $fechaHoraSQLString= $fechaHoraSQL->format("Y-m-d H:i:s");
//Definicion de la sentencia SQL
        $sqlActualizarConexiones = "UPDATE T01_Usuario SET T01_NumConexiones = '{$ousuario->getNumAccesos()}', T01_FechaHoraUltimaConexion = '{$fechaHoraSQLString}' WHERE T01_CodUsuario = '{$ousuario->getCodUsuario()}';";
//Ejecucion de la sentencia usando la clase DBPDO       
        $ingresado = DBPDO::ejecutarConsulta($sqlActualizarConexiones);
// Devuelve el objeto usuario        
        return $ousuario;
    }
}
?>
<?php

namespace App\Classes;

use Illuminate\Database\QueryException;

class Utilitat {
    public static function errorMessage($e)
    {
        $mensaje = 'Error desconegut';

        try {
            if (isset($e->errorInfo[1])) {
                // Si hay información de error SQL
                switch ($e->errorInfo[1]) {
                    case 1062:
                        $mensaje = 'Registre duplicat';
                        break;
                    case 1451:
                        $mensaje = 'Registre amb elements relacionats';
                        break;
                    default:
                        $mensaje = $e->errorInfo[1] . ' - ' . $e->errorInfo[2];
                        break;
                }
            } else {
                // Si no hay error SQL, verificar el código de la excepción
                switch ($e->getCode()) {
                    case 1044:
                        $mensaje = "Usuari i/o password incorrecte";
                        break;
                    case 1049:
                        $mensaje = "Base de dades desconeguda";
                        break;
                    case 2002:
                        $mensaje = "No es troba el servidor";
                        break;
                    default:
                        $mensaje = $e->getCode() . ' - ' . $e->getMessage();
                        break;
                }
            }
        } catch (QueryException $ex) {
            // En caso de un error inesperado en el manejo de la excepción
            $mensaje = "Error al processar l'excepció: " . $ex->getMessage();
        }

        return $mensaje;
    }
}


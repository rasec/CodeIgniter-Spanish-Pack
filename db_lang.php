<?php

$lang['db_invalid_connection_str'] = 'No se han podido determinar la configuración de la base de datos basados en la cadena enviada.';
$lang['db_unable_to_connect'] = 'No se ha podido conectar al servidor de base de datos usando la configuración suministrada.';
$lang['db_unable_to_select'] = 'No se ha podido seleccionar la base de dato especificada: %s';
$lang['db_unable_to_create'] = 'No se ha podido crear la base de datos especificada: %s';
$lang['db_invalid_query'] = 'La consulta enviada no es válida.';
$lang['db_must_set_table'] = 'Debe especificar la tabla que será usada en su consulta.';
$lang['db_must_use_set'] = 'Debe usar el método "SET" para actualizar una entrada.';
$lang['db_must_use_where'] = 'La actualización no es permitida a menos que contenga una claúsula "WHERE".';
$lang['db_del_must_use_where'] = 'El borrado no es permitido a menos que contenga una claúsula "WHERE".';
$lang['db_field_param_missing'] = 'Para retornar los campos se requiere el nombre de la tabla como parámetro.';
$lang['db_unsupported_function'] = 'Está característica no está disponible para el SGBD que está usando.';
/* New in CI 1.5B */
$lang['db_transaction_failure'] = 'Fallo en la transacción: Rollback performed';
$lang['db_unable_to_drop'] = 'No se ha podido eliminar la base de datos especificada.';
$lang['db_unsuported_feature'] = 'Característica no soportada por la plataforma de base de datos que estás usando.';
$lang['db_unsuported_compression'] = 'El formato de compresion de ficheros que ha seleccionado no está soportado por su servidor.';
$lang['db_filepath_error'] = 'No se puede escribir los datos en el fichero que has enviado.';
$lang['db_invalid_cache_path'] = 'El directorio para escribir los datos de la cache no posee permisos de escritura.';
/* New in 1.6 or Higher  */
$lang['db_must_use_index'] = 'Se debe especificar un índice para que coincida con el de actualizaciones por lotes.';
$lang['db_batch_missing_index'] = 'Una o más filas enviadas al proceso por lotes de actualización no se encuentra el índice especificado.';
$lang['db_table_name_required'] = 'Un nombre de tabla es necesaria para la operación.';
$lang['db_column_name_required'] = 'Un nombre de columna es necesaria para la operación.';
$lang['db_column_definition_required'] = 'Una definición de columna es necesaria para la operación.';
$lang['db_unable_to_set_charset'] = 'No se puede establecer el juego de caracteres de la conexión cliente: %s';
$lang['db_error_heading'] = 'Se produjo un error en la base de datos';

/* End of file db_lang.php */
/* Location: ./system/language/spanish/db_lang.php */
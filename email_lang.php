<?php

$lang['email_must_be_array'] = "El método de validación de correo debe ser pasado como un arreglo.";
$lang['email_invalid_address'] = "Dirección de correo no válida: %s";
$lang['email_attachment_missing'] = "No se ha podido localizar el fichero adjunto: %s";
$lang['email_attachment_unreadable'] = "No se ha podido abrir el fichero adjunto: %s";
$lang['email_no_recipients'] = "Debe incluir receptores: Para, CC, o BCC";
$lang['email_send_failure_phpmail'] = "No puedo enviar el correo usando la función mail() de PHP.  Su servidor puede no estar configurado para usar este metodo de envío.";
$lang['email_send_failure_sendmail'] = "No puedo enviar el correo usando SendMail. Su servidor puede no estar configurado para usar este metodo de envío.";
$lang['email_send_failure_smtp'] = "No puedo enviar el correo usando SMTP PHP. Su servidor puede no estar configurado para usar este metodo de envío.";
$lang['email_sent'] = "Su mensaje a sido enviado satisfactoriamente usando el siguiente protocolo: %s";
$lang['email_no_socket'] = "No puedo abrir un socket para Sendmail. Por favor revise las configuraciones.";
$lang['email_no_hostname'] = "No has especificado un servidor SMTP";
$lang['email_smtp_error'] = "Los siguientes errores SMTP han sido encontrados: %s";
$lang['email_no_smtp_unpw'] = "Error: Debes asignar un usuario y contraseña para el servidor SMTP."; 
$lang['email_failed_smtp_login'] = "Falló enviando el comando AUTH LOGIN command. Error: %s";
$lang['email_smtp_auth_un'] = "Falló autentificando el usuario. Error: %s";
$lang['email_smtp_auth_pw'] = "Falló usando la contraseña. Error: %s";
$lang['email_smtp_data_failure'] = "No se han podido enviar los datos: %s";
/* New in 1.6 or Higher  */
$lang['email_exit_status'] = "Código de estado de salida: %s";


/* End of file email_lang.php */
/* Location: ./system/language/spanish/email_lang.php */
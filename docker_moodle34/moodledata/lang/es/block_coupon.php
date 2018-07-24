<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_coupon', language 'es', branch 'MOODLE_34_STABLE'
 *
 * @package   block_coupon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:coupon:delete'] = 'Borrar cupón';
$string['action:coupon:delete:confirm'] = '¿Seguro que desea eliminar este cupón? ¡No se podrá deshacer!';
$string['action:error:delete'] = 'Error al borrar';
$string['and'] = 'y';
$string['blockname'] = 'Cupón';
$string['button:next'] = 'Siguiente';
$string['button:save'] = 'Generar cupones';
$string['button:submit_coupon_code'] = 'Enviar cupón';
$string['cohort'] = 'cohort';
$string['confirm_coupons_sent_body'] = 'Hola,<br /><br />

le informamos que todos los cupones creados por ti el {$a->timecreated} han sido enviados.<br /><br />

Saludos cordiales,<br /><br />

Administrador';
$string['confirm_coupons_sent_subject'] = 'Todos los cupones han sido enviados';
$string['coupon:addinstance'] = 'Añadir nuevo bloque de cupones';
$string['coupon:administration'] = 'Administrar el bloque de cupones';
$string['coupon:claim:wronguser'] = 'El cupón personalizado no lo puedes reclamar';
$string['coupon:cleanup:heading'] = 'Eliminar cupones';
$string['coupon:cleanup:info'] = 'Utiliza este formulario para configurar los cupones a eliminar.<br/>
<b>Aviso:</b> Este proceso <i>eliminará</i> cupones del sistema. No hay forma de revertir esto.';
$string['coupon:deleted'] = 'El cupón ha sido eliminado';
$string['coupon:extendenrol'] = 'Extensión de cupones de inscripción';
$string['coupon:extendenrolments'] = 'Generar cupones para invitar a inscripciones';
$string['coupon:extenrol:summary'] = 'Tipo de cupón: {$a->coupontype}<br/>
Cantidad de cupones a generar: {$a->amount}<br/>
Fondo de los cupones: {$a->logo}<br/>
Cupones generados por: {$a->owner}<br/>
Seleccionar curso(s): {$a->courses}<br/>
Validez: {$a->duration}<br/>
Enviar cupones el: {$a->senddate}<br/>
Enviar cupones a: {$a->recipient}<br/><br/>
Cuerpo del email: {$a->emailbody}<br/>';
$string['coupon:generatecoupons'] = 'Generar un nuevo cupón';
$string['coupon:inputcoupons'] = 'Usar un cupón para suscribirse';
$string['coupon_mail_content'] = 'Estimado {$a->to_name},<br /><br />

Recibe este mensaje porque se han generado nuevo cupones. Los cupones están adjuntados en este mensaje.<br /><br />

Un cordial saludo,<br /><br />

{$a->from_name}';
$string['coupon_mail_subject'] = 'Cupón generado';
$string['coupon:myaddinstance'] = 'Añadir un nuevo bloque de cupones en la página Mi Moodle';
$string['coupon:type:course'] = 'Inscripción al curso';
$string['coupon:used'] = 'Eliminación';
$string['coupon:used:all'] = 'Todos los cupones';
$string['coupon:used:no'] = 'Solo cupones no usados';
$string['coupon:used:yes'] = 'Solo cupones usados';
$string['coupon:viewallreports'] = 'Ver informe de cupones (para todos los cupones)';
$string['coupon:viewreports'] = 'Ver informe de cupones (para mis propios cupones)';
$string['course'] = 'curso';
$string['default-coupon-page-template-botleft'] = '<ol>
<li>Regístrse en {site_url}</li>
<li>Recibirá un email de confirmación. Haga click en el link enviado para activar su cuenta.</li>
<li>Introduzca su cupón en el Área personal</li>
<li>¡Disfrute del curso!</li>
</ol>';
$string['default-coupon-page-template-botright'] = '<ol>
</ol>';
$string['default-coupon-page-template-main'] = 'Con este cupón podrá activar su acceso exclusivo al curso:<br/>
{courses}<br/><br/>
Por favor, use el siguiente código para activar el acceso<br/>
{coupon_code}';
$string['download-sample-csv'] = 'Descargar archivo CSV de ejemplo';
$string['enrolperiod:extension'] = 'para una duración de {$a}';
$string['enrolperiod:indefinite'] = '<i>Indefinido</i>';
$string['error:coupon_already_used'] = 'Este código ya ha sido utilizado antes.';
$string['error:invalid_coupon_code'] = 'No ha introducido un cupón válido.';
$string['error:invalid_email'] = 'Por favor, introduzca una dirección de email válida.';
$string['error:missing_course'] = 'El curso asociado a este cupón ya no existe.';
$string['error:nopermission'] = 'No tiene permiso para hacer esto';
$string['error:numeric_only'] = 'El campo debe ser numérico.';
$string['heading:administration'] = 'Gestionar';
$string['heading:generatecoupons'] = 'Generar cupones';
$string['heading:imageupload'] = 'Subir imagen';
$string['heading:input_course'] = 'Seleccionar curso';
$string['label:enter_coupon_code'] = 'Por favor, introduzca su código aquí';
$string['label:extendperiod'] = 'Período de inscripción';
$string['page:generate_coupon.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_five.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_four.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_three.php:title'] = 'Generar cupones';
$string['page:generate_coupon_step_two.php:title'] = 'Generar cupones';
$string['page:unused_coupons.php:title'] = 'Cupones no usados';
$string['report:enrolperiod'] = 'Propietario';

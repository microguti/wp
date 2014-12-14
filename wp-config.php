<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'administrador');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Jyr270706');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '=rGIA($+3+*t-m!dN]])Ag`4g8yp:@)iLcmU$;UT]f:>AIh1,k(05_,|142r!E|a'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'L[fTzBDXx?*O |yNCCnhaE><)/bcmbqHsDD)Hl0VQf+/;]-4=aLmX %;t&|HL*JQ'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'm58wM-#R ftE7r9Z,V+py6 GxVzsYocVX_.7&v|?y*j(20M@PD8tVpl~aKpu&Xoh'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', ',j[0}eh2Y.GPNo/ !#RCC%!MK!5.3g)RD^+Am=.p;nK$]u&M83?h6:6OVLhd>jK^'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'Uo4TS@-:x}fb[eOulttpoemYFLr/RoFKo?kx/05i+$@|wO2E]<}BZ~ 7gB_Ur|l:'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'Rtmvh78&*}z{iJ^SoSdo|/O52D|gJdK![wXGHz:zrO7r,<s: SpU4r~5@hb)Yxz:'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'w.ZRb{y/^B/A&:q|dxTqT+3Ya2~K|p6`={IhR)+73;j#U|tPdR- f3F[Yx*7Vb@y'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'US]sm}(d*5!{K$B>N1uIPseuE`7V;kYYvj}CEnTDu&9|DpaUwP!W~|.rc)GW+D1N'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


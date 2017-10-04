<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// Define application environment
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));
if(APPLICATION_ENV == 'production'):
    // ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
    /** El nombre de la base de datos de WordPress */
    define('DB_NAME', 'heroku_69e8bb93c498599');
    /** Nombre de usuario de la base de datos de MySQL */
    define('DB_USER', 'b1b00b3607a741');
    /** Contraseña del usuario de la base de datos de MySQL */
    define('DB_PASSWORD', '03c55081');
    /** Nombre del servidor de MySQL (generalmente es localhost) */
    define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');
    /** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
    define('DB_CHARSET', 'utf8');
    /** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
    define('DB_COLLATE', '');
elseif (APPLICATION_ENV == 'local'):
    // ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
    /** El nombre de la base de datos de WordPress */
    define('DB_NAME', 'heroku_69e8bb93c498599');
    /** Nombre de usuario de la base de datos de MySQL */
    define('DB_USER', 'b1b00b3607a741');
    /** Contraseña del usuario de la base de datos de MySQL */
    define('DB_PASSWORD', '03c55081');
    /** Nombre del servidor de MySQL (generalmente es localhost) */
    define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');
    /** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
    define('DB_CHARSET', 'utf8');
    /** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
    define('DB_COLLATE', '');
    define('WP_HOME','http://loc.galletalaravel.com');
    define('WP_SITEURL','http://loc.galletalaravel.com');
endif;
/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here16');
define('SECURE_AUTH_KEY',  'put your unique phrase here16');
define('LOGGED_IN_KEY',    'put your unique phrase here16');
define('NONCE_KEY',        'put your unique phrase here16');
define('AUTH_SALT',        'put your unique phrase here16');
define('SECURE_AUTH_SALT', 'put your unique phrase here16');
define('LOGGED_IN_SALT',   'put your unique phrase here16');
define('NONCE_SALT',       'put your unique phrase here16');
/**#@-*/
/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';
/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración,
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */
/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');

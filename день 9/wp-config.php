<?php
/**
 * Конфигурация WordPress для хостинга Beget
 */

// ** Настройки базы данных **
define( 'DB_NAME', 'm9127024_db' );
define( 'DB_USER', 'm9127024_db' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// ** Ключи и соли безопасности (сгенерированы автоматически) **
define( 'AUTH_KEY',         '7hxKpL9qRf2sVdFgHjJkLzXcVbNmQwEa' );
define( 'SECURE_AUTH_KEY',  'gHtYrUeWqAsDfGzXcVbNmPpOoIiUuYtRr' );
define( 'LOGGED_IN_KEY',    'zXcVbNmPpOoIiUuYtRrEeWwQqAsDfGgHh' );
define( 'NONCE_KEY',        'aLlKkJjHhGgFfDdSsAaQqWwEeRrTtYyUu' );
define( 'AUTH_SALT',        'bBcCvVnNmMlLkKjJhHgGfFdDsSaAqQwWeE' );
define( 'SECURE_AUTH_SALT', 'rRtTyYuUiIoOpPpAaSsDdFfGgHhJjKkL' );
define( 'LOGGED_IN_SALT',   'mMnNbBvVcCxXzZaLlKkJjHhGgFfDdSsA' );
define( 'NONCE_SALT',       'qQwWeErRtTyYuUiIoOpPpAaSsDdFfGgH' );

// ** Префикс таблиц **
$table_prefix = 'wp_';

// ** Режим отладки **
define( 'WP_DEBUG', false );

// ** Путь к директории WordPress **
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// ** Загрузка WordPress **
require_once ABSPATH . 'wp-settings.php';
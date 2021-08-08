<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ltheresi' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ltheresi' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mariadb' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );


define( 'WP_REDIS_HOST', 'redis' );

define( 'WP_REDIS_PORT', 6379 );
// define( 'WP_REDIS_PASSWORD', 'secret' );
define( 'WP_REDIS_TIMEOUT', 1 );

define( 'WP_REDIS_READ_TIMEOUT', 1 );
// change the database for each site to avoid cache collisions
define( 'WP_REDIS_DATABASE', 0 );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E)-k`tQC@5OA^tZ|EDQ;&tL_F|6)UizSK<m0hKy%)3c_`|8aGYhLbLNs-sz:^:Oa');
define('SECURE_AUTH_KEY',  '2acLak%Vs;CU~=9J`Sm6)`+!(X.F|9,A_9^e$,!ccJQ7T[9#4n{<IF@>}-&7rYkK');
define('LOGGED_IN_KEY',    'y}R1,uL<SD|575hpP#AhhW:C-,hW@}w+z<|#;3Bmt(gYt8c^_2#OeSiV`86|x1ZW');
define('NONCE_KEY',        'tE#mru;ChXVu~]jSIx_%8HY^-n)Y})+Y@fWKaNbr*%<*~)ZK7z5p!e6+PO/nE&Tx');
define('AUTH_SALT',        '^8$We[~pe^[}?lQf}lIiRX0-F+|r-WL-qc,D6(W{dN5+IUL7Q|F^vD7aS Y^x^rk');
define('SECURE_AUTH_SALT', '[$A lB{tO1-jlX-WPVqlox m8Mibzu@QXZ^`U:-#TW, 9}K<TZf`E,_gD>ZJ-LRm');
define('LOGGED_IN_SALT',   '1Ct*;*6WP.D5-jcTKAIuY9;+&*slh#AL`a?}2@7$fj/}Ew{{|7)Cv{.vYm{s7fi-');
define('NONCE_SALT',       'ds2# +~Nj;]|#i&m$oU@p#m|;G$fQGhEvJ-nn(Y~;y^yuo,e8]-_zg3dc^9X|1wK');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
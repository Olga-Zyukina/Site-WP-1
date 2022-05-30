<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp2802022' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%_RIpi(60,u552FSl-29&htpDG,J0OgsH%Q+fE(~gcQ&5ZjygYuf-yHIz|Z2!WUG' );
define( 'SECURE_AUTH_KEY',  'T-hW<WNh6 vK[b.EN-lCf#Cm:FROa7C5NBKrM)|E0D<Cv5}<q{4mTPJ8+g-N@;$#' );
define( 'LOGGED_IN_KEY',    ':]ro5Wm-+NxkH=w`Q3lO>{Gq$3AFc?^obPE7bjm ]F{7d.}`h-a;S4jeSD(V!B<s' );
define( 'NONCE_KEY',        '>,)^eQFkKR3R2N?~c/Yk,%*YzjfgqeGdQ2<Zr:<_fA598+<*Rq]9#XE+Dz<PPISb' );
define( 'AUTH_SALT',        '*_PP`fQkt6$Wu&LOry$krkDV<i1;RAxFqA+9Yb0Ws)V&zpQr.6Dk[vk):_v&GL=I' );
define( 'SECURE_AUTH_SALT', '=Es3!<7VHQ9{T!/t=)puVz_c44hPpuqNJ]d1KtdO.0lF,5MpHva@0zTzqYb^@#X^' );
define( 'LOGGED_IN_SALT',   '5R`nzQej$LMSoy2`*QZKo<lY@~$O).vF$nFdA_Nwxtl]Ko6#t[/k&4(_]V]5&6D:' );
define( 'NONCE_SALT',       'I?KGE#YkkGd+5.HN~h=BT9o(!aL[|&e_LYyl@L)2^Bo@--/)=ts7vQ<wfM-jGT$u' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

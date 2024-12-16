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
// define( 'DB_NAME', 'dimaalq1_nuts' );
define( 'DB_NAME', 'nut_product' );

/** Имя пользователя MySQL */
// define( 'DB_USER', 'dimaalq1_nuts' );
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
// define( 'DB_PASSWORD', 'OmTl6r8J' );
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DL9E@O| >@0D&j4H#F1Wj|]uWi)-u.sTKHA(.%<}+(>d&UNx<TV);?9!jA[Pt$|[' );
define( 'SECURE_AUTH_KEY',  ']j+Kn=gIO%a1OQ{VQOQ]8M#ie%eZfL[hU:FUDhwgfL s#;Anz(6io,BQuT.:fbFY' );
define( 'LOGGED_IN_KEY',    '#~}[Y`[p7XWK^7P,PN~/DCEka3!ds%qtTSI%Rqjuy6+Ucq)?~6?TwLA_[Vf^yv_{' );
define( 'NONCE_KEY',        'T%%(Ka5%cPxf5ix6FU<9D9Gt%e[#IuHZ>gSg?}5/&jkl|wLh[TL9d&V%-Wcc^pEH' );
define( 'AUTH_SALT',        '1l0hCI{9<e(sg<;UMwu0]h$a6el r8lHGcIf-qE]BX5bw~BA(Lv#4cl=xhD)KrTJ' );
define( 'SECURE_AUTH_SALT', '3Bf`nj-`G9b7!/`P#TbP|sC,mlPk<rcsdI QCYA#>{,Qd=A[9p_y@JCz+.n_fKn{' );
define( 'LOGGED_IN_SALT',   ',q=#PS^|.%+9U48I4rj&T)p~QI=@Z%$I=aT0tO2I=y8$ja;-}K5W*$!bz:v0KF-!' );
define( 'NONCE_SALT',       'G(SZg!fjn%hO+#y8itf O+sIY49U$.FDUwfG%{pAJsly$PBnb%dY!}c;G}1BV+j8' );

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
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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mysite' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ',u>I>PWf]SGOFr^dgA1qwDh<NkX>>T*]=HqvfFY5VA=(zI<-wy(]o3~]}.lBDJTZ' );
define( 'SECURE_AUTH_KEY',  '[,yKJv>YAvAWHVJcYO%nyd_#HKV.Y|?P7)g/W6f(Q]yxqTThs%WiU0{Bwv)>_o94' );
define( 'LOGGED_IN_KEY',    '?_.q4A*5B8ZY2&B:n+L-T2k%$vX.#ktBCWYg@gz!mb!?Pxi1W,*0YE]QyIHxft<Q' );
define( 'NONCE_KEY',        'xH/w$N=83$7>dIaCV;XM@uh>U:^1x!,g}%,mIQS8B{mWl+AyD#fe_UAtoZ$fS[>?' );
define( 'AUTH_SALT',        'UD2VMeBh8$|fXKX9k}(?q&p!PR.:~i]z^.E<}~F(y8s8OYwc*1q,JTwadK.,CupA' );
define( 'SECURE_AUTH_SALT', '>cAEyYlCcj{v]YbSi41.]jLQ0Wh`}^a_.ox:`:0Ro w@22lojif,va+od3&2bO8M' );
define( 'LOGGED_IN_SALT',   '-fSitW5KYDT(i{C}Yctu-jvd1$A;$kuJG{5;?-QeQAi1V4W~[nx;N%*}}__r|km5' );
define( 'NONCE_SALT',       'EU$[1*ll (0~-)JI|:+Hz.|eV*EbsW9m]lZf+x.aCL8D,7PxHYj9bcz=lUQN$1!)' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'nitecki');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rf_r%%PQf8-S6/-A-wtJ`L(MrgABy8s8x&[_KJwK(:PCP6458-Leiw:<=#W8Fr+-');
define('SECURE_AUTH_KEY',  '*V]8E8`QJ8g{UZdz-Ilrh]134Lk/e:@o[/fD{-P=~C`p05rtt{ T`c`4m2`qjOoL');
define('LOGGED_IN_KEY',    '5bc0SQZ RaA|zkzNJ%85upR!ry;_yH)3ceIS:&|EE9[$#yyR$/>^b+ U-;2aV^UI');
define('NONCE_KEY',        'C.q5oVJ{S#H$0*2av59}#Fbu.w.}2TEeaPFVY1:!O_6cg]iB|d&bM$JdC9eY<@I-');
define('AUTH_SALT',        't/Pq__vC0Led8F7cjq/VqC*ONKJG[+kmtY~-4dys;~hB+Sm<hj}C6Xvd|fD[lc8E');
define('SECURE_AUTH_SALT', ' vCF.{=3^fgZDPH$YYQAy |x88Cp]8g2MR=d!Qf~jx8;TBG~UalRFYAZ}[Cu-B8c');
define('LOGGED_IN_SALT',   '!18yLj@y||h_]Q9ay>iY<n[7k;(|n@EwXx[Mc6QRPzCejC:kT27qcFGg-zJRwhh&');
define('NONCE_SALT',       '^^g$zGIEW$u-uI^5vlzxW3wW?&#8*:C#.lyzPGkEV+at^s2e?]<{M%Vg8OGuCNd3');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'ni_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');

<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost/wordpress' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')BI~Nvmryu0fgVsq(Gp:2/Y8)hY:xVTtI1T$BcjB-d.0w>?!b=*|D;Dm5*O~yPI-' );
define( 'SECURE_AUTH_KEY',  'XV~ho UELFa2i~$k&Zx%35~8wK#U80c9n](J;4&o;)NRmDhKJK:Vt_ckGCd)VhYI' );
define( 'LOGGED_IN_KEY',    'sY.M?6n--{?:x::m(r$%]pvp &2PSqz:SXVsb {/emS;dSZS&_mtF>8IV8blUNXw' );
define( 'NONCE_KEY',        'J6PablrnJnki,bd9|#BS9.0MKI7/H>_[5EKCFY-?LLqk4 UcVSU|J6$ZQu!)Ri)v' );
define( 'AUTH_SALT',        'f<UT-y3}vDMf2+,DJmY&ZNsrQ{b6o~U!OX^#T=eol+~&{N^<nO/ }!;V)Lne|7_S' );
define( 'SECURE_AUTH_SALT', 'HzLrHCK2r`e0tb]gVzQcg0B_)cc`XL)cZ.$b6#F$7lf/G{Or$<&]~8j,[<^VW|6B' );
define( 'LOGGED_IN_SALT',   ')BaDOB3E=<~p1wg5jcbum#M*tba(M{0KyoT9DN5O/@@,)(JyhZ7UzyOtzk:*_.K&' );
define( 'NONCE_SALT',       '?-W_xf/DgPg2kSg>gOG{nDR6/IbWD}_Z1SeC,YpFeTwym, Kj9/C?+:FQ=BV^TJU' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';
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
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^}DR?oE^n6AF74m+Jn$SM>|=UU!a7#n=w<xV1e 6)v2;B$>6fqFlJ@Jzlh[SZfj9' );
define( 'SECURE_AUTH_KEY',  '39[bW{FV@6V74TiW^)3r|*]mQ/BE^b09rV~u8{gy=||m@s:[ $|h#QvsxoIWr@q$' );
define( 'LOGGED_IN_KEY',    '6H!9`mvHGv_+?i}nP0{f7S0=<iH,DKOcK>A@OaeDCS$R@j1dILRkCCgTSi9TbY1<' );
define( 'NONCE_KEY',        'aaF[Z(m([( O4M<igV(&1O4.F]MyQ?IL>BTq0l`aYNdG_J*Bn>:f!H~X.Wr?g9mK' );
define( 'AUTH_SALT',        'b}L>Wop*=d^B)?lHs]vPY+@bh=N2;!|3Ch +^b;&V]/P,dynDMa<EiL#{I*ny.XC' );
define( 'SECURE_AUTH_SALT', '+?GT-tm?.@$$7q|^AyQpl^6-qz<e|L.0Q:mUV$ Jf{*0xp,@`d K2{n<-&dNNO$)' );
define( 'LOGGED_IN_SALT',   '3?}^Tfq:@ZJdH.C;IXmd@?F)PZykT3+-2qo8^x8x1(yV>6n/|c=x;!-wjnvN@d99' );
define( 'NONCE_SALT',       ']E:#Q_!mXX-kbQpviDX^TC+mf}0wI<L*2z09j?8:nsYu?[)x^c)_{m-7(r?r||Ce' );

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
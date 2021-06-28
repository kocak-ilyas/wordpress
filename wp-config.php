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
define( 'AUTH_KEY',         '+xU:oSNj#k2c?b2E)}[xJ8)cg1BYosm~Y?IRoW7clSyVW[Zmb?t/|xP.<ZMZR%95' );
define( 'SECURE_AUTH_KEY',  'Gaw3.&ap]t kCfR65!h$cO; #xBeJkzt+&Pz`hh7:mNXw1d&$x{FmU}izW9*zW;~' );
define( 'LOGGED_IN_KEY',    ' /NB%g4;,{7:{JgojID}kKX~y[rgybt(p(!Tcms2xqRDHXqNi1Iwp+_DP^CO}@Jc' );
define( 'NONCE_KEY',        'g} :v~Q%9,{q% tZ8`mCB,X_LU/Kko`vY,^`T,{mW&t!CO&=} vQRkj0i )sJ=]%' );
define( 'AUTH_SALT',        '~Qp|ReP1v:%)s%#ymnc[)uLo=(V(UUa;UJm|oW3?md[|tE-pvd_mBN<|P52GpYw=' );
define( 'SECURE_AUTH_SALT', '=:E@C|%/Qi99`8+mtHsJiJX_LM=Y|,XV)fH[5KIb(D^jgDpL)(@o$#&O>2EdZHyk' );
define( 'LOGGED_IN_SALT',   '^GTTQ^2uKw*WS5$~#W.P9eAQJ~Z)<p%++J|=Wt{h8BZcg~n?Rzvz|Ghib*vJxZns' );
define( 'NONCE_SALT',       ')7`t+Z+{i[!m!tfMM pL>:`4nwAile!?>OY9y,pV+@q<OjVBDT2W.I qEa#k$>Ov' );

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
<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'nittobiren' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'nittobiren' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'MbWxexMgJ%/Y5' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&3gN4{]0ZrQ+n*:K2vO<)ysf:Foy9mp{!n[_y)!(wQz$j1<v}3qeJLWS@#=mJQ9_' );
define( 'SECURE_AUTH_KEY',  '`7IBSWUTCEmh5$uD$Y?{tIG`.;|e0<K~@Mke$m!?6utjuy-O{MeeC`McUi)xSX5C' );
define( 'LOGGED_IN_KEY',    'WIe?o<M<7jH42isHzR`#a7~^az9WuX-}0(w*FGuDo.jMeqN1F;WRT~>oOIz9d1xe' );
define( 'NONCE_KEY',        '5W=S!A2eabUvbXj&I%&1KrzC77F?MG8G}/4CYfI<)Wv?o{^_fz;dYP2lr(@m}w8q' );
define( 'AUTH_SALT',        '3$rGHM<7wQH#k[<8&9ESm}uF.[{v/Q7<81#cyMx0zN(`P;ltgZEN(>DftJdI;Gd`' );
define( 'SECURE_AUTH_SALT', 'P(M]W3b+!_u2`LNUK]tJWJd%z9ZdVHDEjszDpxkXqhNz^dH+zDa!krk$+#~K_hL!' );
define( 'LOGGED_IN_SALT',   '&*xpFgmce,;Mw@K470_}~[`4}ZoagwE@Q:>#,#qmE`%8!Ae6y&G}9 B8}$<%[J}7' );
define( 'NONCE_SALT',       'JOzq:L,LxJv8oYKzlj#}1{ad6Qi}IDl,&W r0:dC{+s7``O|S2C])pK0+8EPwZb>' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

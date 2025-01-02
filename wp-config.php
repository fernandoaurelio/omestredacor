<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portalmestredacor' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!x5UkHMZHIE2KX#~THtqXh]a.-x=F8Ab*dX{7TjfnLI>?v2;y~NZU_:6wRVP?DIW' );
define( 'SECURE_AUTH_KEY',  'l+isQyzV{!9O;toLUzH5x+!XtpP6Vq?spmdv~_w];sOKx7~T0Ps6XWos;<6Gbb`8' );
define( 'LOGGED_IN_KEY',    '4Fd&!{<e$vT]bVy>M@/wKx)_?Sn!B&o1I.U=|[1z}&2i8-vFkz?A0S=Z^ Zxp[-W' );
define( 'NONCE_KEY',        '?XNt:8,<VE-iD9||Rx)J?p$i-R=PbCkvFEuSwC~.X=`<3M^Q,EATqCb9|7 :nTw~' );
define( 'AUTH_SALT',        '}RGCp=MC[?qxF4v_|h0Nu::w6:daK6J13<k+@h1897c*kyV6.7.uapd$QmhcqCf;' );
define( 'SECURE_AUTH_SALT', '1L1v.*Pnv7n]f.UC=$U}EAE9;r-*N 3ij_m&Q3nC!#A8Q OGgeaPyTBaD-(0GJXY' );
define( 'LOGGED_IN_SALT',   '$bR=ICKR*Wy(iMM<WP.7s4o5ga8#e`yw:naguHA>P|7FElHzErngwlk{x)}dSH_g' );
define( 'NONCE_SALT',       '6Q],i1voNsQ74`C6/$Pa8B4{AtgB[$SzQVfQ~Z*zix%$bVu=*-S3Y!I1EyB0wE8e' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

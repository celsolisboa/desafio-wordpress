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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste_codigo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '}LK_$n:&H}g#,-?c<mt(W;PB1DMro4gu8le=:eO`]^z1Topaf/&b(sIlvTLe:Ly%' );
define( 'SECURE_AUTH_KEY',  '!eNS%?6H5#)U&rF]>r,-D5d&*fKXYR9:cWFL0GaPZo*58Hx%c 1SgPbD}FQctYql' );
define( 'LOGGED_IN_KEY',    'R^=Uj(S<Hv}7Gv*8Z e[e3D6W7S!a?lGe<`kSU{5&_q>J>d9CjAJqYh:Zoj(Gvab' );
define( 'NONCE_KEY',        '%_MqSr^y.0wwER!Gb{8-K)B.7([rx<qbx:aW;>H/?vJ]</J07 0Wz{7~+@M1rC9i' );
define( 'AUTH_SALT',        '&J+2d?{f/7!+`2hLm4yP4-|{9w{8Ebi}sWH%GXOK.3dI_f/z{>-dA$U{(]W5@[kv' );
define( 'SECURE_AUTH_SALT', 'bQ%nrAO`A.-VxGvEFld9+v/jW!5Xm;|&Bc[D6/c4u2.JFpD-{$C+DQ8{%);QZ:fU' );
define( 'LOGGED_IN_SALT',   '!] ~P [Ext=:@hoQ;m9lj:/:7.byb}$BJ]?,cv98I^=L=Go,u^JL(wl4Cv0k~Wpo' );
define( 'NONCE_SALT',       'sZz@nI^PgLuf$F9hum*JPS5~]`k<~tTU2+C:dYa3kzBiYpOXVN]+fdTQC:m`Clt^' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

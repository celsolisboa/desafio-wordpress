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
define( 'AUTH_KEY',         ')%>1aSk=QJbxS5comv5:Hi$I-cy^`cXAY91Bk]!(6#wn,o6b*RL&C*,JYL-vbqlk' );
define( 'SECURE_AUTH_KEY',  '4ci-JBhtdQiS Lc{cQcIO1P(A7sT!^mQScdFkr8={_Hj-&^Ix>J:VpCFta43qo-]' );
define( 'LOGGED_IN_KEY',    'Xbd>6Mb(Z6?Ct1LzVZygfV+P$QDQhAO~$v$.6wA?*mQ-`|(l&2U+S)gVWbss$1h]' );
define( 'NONCE_KEY',        '**|x{[6x8v%2XyYVEy-qiua6{-N.o(]8gL`y#dFwz$5}AMb6KfOSiz5]$Dj;pY9.' );
define( 'AUTH_SALT',        '||ow#uXtE2nmJTSTs5@rcwn5.^Y9sFRR]zY?(>t>:%#&6KvaPV=UiUnfX*[Yz7Nt' );
define( 'SECURE_AUTH_SALT', 'Te)Ffa/<)MyTQ1ymX=Xgx:iM+/Z%Zw_/A=qlVz.zA]wnc@& ) Ef).d(.xv]g$uY' );
define( 'LOGGED_IN_SALT',   'b7Uqg4D&9C|fRn4_V@3%_8I4N12~9|>#z8a&y+jjk~3A{g}D8p51B|:78Mn{:>;r' );
define( 'NONCE_SALT',       'xV&<cDRcR2iI(>vTE&&$~mB+vE(.62+oxI{x+K5zH8z9H<wn04>u2|gKD-?/carc' );

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

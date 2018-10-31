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
define('DB_NAME', 'wpcurso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Sr^i3p8@M-`Q]S/-7/xQ}!&N9rlH^QJ_$%:!t:T4$VXx;}8_AjMpiR8<Kwli`OE,');
define('SECURE_AUTH_KEY',  'xi$ZY?&#%:y:x1`P)uGDv}+)dv _t6_R x+*?%KW*X?:u%JyrR,,{U+(CNkK9b(p');
define('LOGGED_IN_KEY',    '~X<o;XhwlmjdAf6~Ijh3s@~e%~080i[vA#%Di^A|liCf8CxRp_;;bYp7IN*<7z&l');
define('NONCE_KEY',        '{mH|.,@MkDelhF_)6hw%7a<#v61jS+EEQ$( T2iSwgf2o!5sc&L,12}Y-*#sZ&)r');
define('AUTH_SALT',        'jI>UNKmH]n>koq|)o!L0T./hsCk=/V%3IW%f%!0YX~X,oP3o-}C$CZ&$@E}.;.wv');
define('SECURE_AUTH_SALT', '`voZ$]57Ql!#F62,^vSxS48hUZ?@L)^1i9],trR[s#pr<4X1G<kL^>^f7s#)Y{|/');
define('LOGGED_IN_SALT',   'tyP:vngFeCP<kQAJ|Tz[q3M0P}o^/P{bQ1ZO*~iY2Ape.&_4JWj=K9aoCTz=d7~H');
define('NONCE_SALT',       'Dj(~=v[&P. 7U@lHxUn)e%H~La6=Bac)FR&A1au}0#$}C;xY?=|yRv~mC+3{Vhf1');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'cp_';

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

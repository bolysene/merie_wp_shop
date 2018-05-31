<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('FS_METHOD', 'direct');

define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'jesuisnee21091');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G>HIW{IEA+gz`AOV_Qze`{HX0/ u}1dU/1${^k5X%>bvtRJ1WflJd-^$j-a.h91z');
define('SECURE_AUTH_KEY',  'pp1`J$|:FidNe*:u8i#fN0dH{n{/Rs,oB,2U7do$cf?ueCNy~{!k4Br-TSWU=q/8');
define('LOGGED_IN_KEY',    'L4<Pn/2aH>F#{2FZhEsz?}@+H#OM]G`jO>;yF~xh/~u?<<[p$GljtG^uQuroIrYd');
define('NONCE_KEY',        '.!X|ifWKX[qNSuE* I@-f><A6+;X3g<!C$mIW4go<IH=8]P3Ze@WI*tr]@9w<)=J');
define('AUTH_SALT',        'w 7*AodhEV#]zH!3{V:JEU<KSy?nKk Wm+XzuGIbmIF{[_OU 1-$gN.yAa-[!s9z');
define('SECURE_AUTH_SALT', '&o4blFu`yrCvzxXrLoHkS a~78woyOQC>*/S_jlT46B(BFowpbm-/&!8u-<zCICa');
define('LOGGED_IN_SALT',   'g<%c;(x3bjWBszM{VhsY6hjR31QYwTHusow?`IfFz.>aNVlF2cseTg7>Za@{{AFE');
define('NONCE_SALT',       '}7{m`|{4^F9asM2JCIX)Vh?!a X(5LNV;tJSh8BR_6TbmEiZ&4|G3Zepzi^2ZP?*');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_vitrine' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HOz%*h_9ODS!`4T%g$kDCqqBTVol!1v&^#|TeIu9(xkM<e{vneUVuf7NZ-ZZ/aK8' );
define( 'SECURE_AUTH_KEY',  '@LBC%}Tren5J~;4`D86mJ^@kR0Z~UU,ITpL{<`p2yR_j:>u_6P1eS2o1tz):jpms' );
define( 'LOGGED_IN_KEY',    '.Q`*%^|GZ.xWG1B9,`c@7{B&7(P{<Lb!2)iBtn2QQm!560ENCO1YIl^uT3z `;Q_' );
define( 'NONCE_KEY',        '+ydaxU{w,IQ:cwYU]L%4}Nz<]ZQzEU{R6=<im_5r*,B1_zocd>Es4W%3Q%&H1D?d' );
define( 'AUTH_SALT',        'pTH?ARcn`E{]@3+:}*Sp-YL]_iaew-[l>4HO,ooB/:BO.0^@f]4Q>&S1kq/mY?RB' );
define( 'SECURE_AUTH_SALT', '!I@s(a1`;%musBG`j!3x~n]l oK1%l$sJu>xt&I?1Zxb *EVdRKBoOCZAdhy#%8q' );
define( 'LOGGED_IN_SALT',   'T`_>nPd56X]>ZBWsh%wqW3Ksr}HCZTI+htorRkc:y+OeXKPH2II$ L2/bn;A@>/_' );
define( 'NONCE_SALT',       'N$jK`JYyhx>e?kn!%*^oO_gaSA4_y<{(y.!P~fs(O<74Z{Ztj>/89M]>j_SL~c`_' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

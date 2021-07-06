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
define( 'DB_NAME', 'capitaine_wp_theme_sur_mesure' );

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
define( 'AUTH_KEY',         'LcA$dg(k4{gQ7Qp`*_pQ`+5-URzHa 5MLL !;dN`C3?`q{2wW8F%t6x<b|6%.IEH' );
define( 'SECURE_AUTH_KEY',  'N :9O`%@nO-bK)@dSm&p;HrfOuz3$N)M^Qq(5g f{3ug.qA#meIp1s``>Q/?]pnC' );
define( 'LOGGED_IN_KEY',    '7-n`h-sNl,hIfFa<Ha$oZY+R4RyxzZGx2+I~BR6s9k}VWm4gb{?q@M;mgo2;Sl:q' );
define( 'NONCE_KEY',        '#UmkH+yEFw^NtF4ecB`]&vJj8&t7gm&0ASFWzeum@ NUme[VQJ>3ZQaHGkLOq6dn' );
define( 'AUTH_SALT',        ']UY;8r<K<T/r*3BPgtyNDFv|{w[t73q_Y}BT..7sp$Wtv&lFgEL!HmPlZ+k~z;`:' );
define( 'SECURE_AUTH_SALT', 'HCo3T[,iV#,#/6TEK9:j1Fhlojkno4Vm|mCZy8P>](GMA(*j~)N!:b!`H^=:qni%' );
define( 'LOGGED_IN_SALT',   'SD})Hu)X$86+|O{#V}<K+;N<#7r3Ei8k6!o%0UQgF0# FW<-NUp>knP?S0{V+Axe' );
define( 'NONCE_SALT',       '9u^+:^`$8fB;=TDI|}Mf_pBU}=fxi)6}A_wj!a13x7VDBX+L}28E;$/_Nu2)(oGo' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'capwp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

define( 'WP_ENVIRONMENT_TYPE', 'production' ); // ou development ou staging 
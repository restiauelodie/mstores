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
define('DB_NAME', 'mstores');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'r`qaBv+=uhh*,ODtM}yI2_a[MofZQiTu=ab#$7LDotRl$<ExjHX(}9. /]*Lft30');
define('SECURE_AUTH_KEY',  'DM%P![*B^Dj&91ECm# 75bmb)`^zZ*Cj:btL;pB, %GM*qV&1(j{_}0z:O.rW9GC');
define('LOGGED_IN_KEY',    'CC?<l>s*3Pm;ba2>l-FXXh`bg-f%t0$nA.`Cb$VPkQx2N?2X<*PK1Kws$FHg9O!?');
define('NONCE_KEY',        'uT#ul3yk$i&w+dXV.=!0BW&|PIwh+>JIx2+jd56ExA9f#jvw}>?MewVwH{N{3[Ar');
define('AUTH_SALT',        'FI#l$p6Qn1nD=`AM!9[*m:fP h3Bun^h-vwf!2cHEr2TRkRc7?-<#g~JH]I.F hU');
define('SECURE_AUTH_SALT', 'Rm:l:Q}DbyNd>`r)P1V_Bs&|m!HJ+sD b]#ltdJ~R=&3O5z8qN~A~.)?<MpGU9t)');
define('LOGGED_IN_SALT',   'JL7DRlgsw|!bP7Mb:eWrDXE,qOn~kX<!m85p%J&H5j02N#91gwjYo! SYh4f=]x-');
define('NONCE_SALT',       '*ej4F3xu|AL&fzj-}E|Dyk~;R~sMsS:yX[z:PDx@.#FkOsUxS 3y^DXIS`)qL0ED');
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
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
define( 'DB_NAME', 'elitedanxwwf3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'elitedanxwwf3' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Goodfuture9188' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'elitedanxwwf3.mysql.db' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '_snbP@*d0bA7EE$!:+#g%h :Z03`/4g^JQ;o3IuJLHQEB,F|Q{]m?*b}X-Lw{1CQ' );
define( 'SECURE_AUTH_KEY',  'c$ZTNwCI4><Hrf@M,hgPFDJBnD|] M(i%.IjkFT(29`uRig2zAQ*F92Lf45Vpu]p' );
define( 'LOGGED_IN_KEY',    'I6vC#bdO/8`k8M`g7Exe@RT5q_WF)/PZD#Ax0(vM0 ?RRO}qA)5gLVa26o]G_IG;' );
define( 'NONCE_KEY',        '_#7sTJevX44QVdrk>>)Ao-?}v9mg#!Ri<bo%+tq9V$#!=uZ./w$iV<2kablydlJ ' );
define( 'AUTH_SALT',        '2_MEZ&V-#i4uMgu,|YQdmHShw*!F/6]CDv/+X1FNl/K(E&9eEKM)/W&vm;L^v%@1' );
define( 'SECURE_AUTH_SALT', 'Ns~,iw11T]e=}e303r}T#_fL:o=HbhsW)P;y&;G4LcKyUxrr*b%&RF%B@~f.)N?e' );
define( 'LOGGED_IN_SALT',   '/Vj#VwC$zN}bwHty9q 1XQRv($w@V45fuL!f.+c@Tm#3oCySW1b;BQaK|u=$ZRtT' );
define( 'NONCE_SALT',       '+Y1U?w`h~!FWJsp&f-}|PB~UZ){6(jq-334%D+`Qd?)m1sk[Ddzql,K3A_%5NGNP' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wf3_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71437e9a752949ff232404692d8051c5
{
    public static $files = array (
        '79f66bc0a1900f77abe4a9a299057a0a' => __DIR__ . '/..' . '/starkbank/ecdsa/src/ellipticcurve.php',
        '256c1545158fc915c75e51a931bdba60' => __DIR__ . '/..' . '/lcobucci/jwt/compat/class-aliases.php',
        '0d273777b2b0d96e49fb3d800c6b0e81' => __DIR__ . '/..' . '/lcobucci/jwt/compat/json-exception-polyfill.php',
        'd6b246ac924292702635bb2349f4a64b' => __DIR__ . '/..' . '/lcobucci/jwt/compat/lcobucci-clock-polyfill.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
        'S' => 
        array (
            'SendGrid\\Stats\\' => 15,
            'SendGrid\\Mail\\' => 14,
            'SendGrid\\Helper\\' => 16,
            'SendGrid\\EventWebhook\\' => 22,
            'SendGrid\\Contacts\\' => 18,
            'SendGrid\\' => 9,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
        'SendGrid\\Stats\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/stats',
        ),
        'SendGrid\\Mail\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/mail',
        ),
        'SendGrid\\Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helper',
        ),
        'SendGrid\\EventWebhook\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/eventwebhook',
        ),
        'SendGrid\\Contacts\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/contacts',
        ),
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
        'H' => 
        array (
            'Handlebars\\Utils' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/php-hbs-helpers/src',
            ),
            'Handlebars\\Sass' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/php-hbs-helpers/src',
            ),
            'Handlebars\\Processors' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/php-hbs-helpers/src',
            ),
            'Handlebars\\Less' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/php-hbs-helpers/src',
            ),
            'Handlebars\\Helpers' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/php-hbs-helpers/src',
            ),
            'Handlebars\\Exception' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/php-hbs-helpers/src',
            ),
            'Handlebars\\Engine' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/php-hbs-helpers/src',
            ),
            'Handlebars' => 
            array (
                0 => __DIR__ . '/..' . '/webconsol/handlebars.php/src',
            ),
        ),
        'G' => 
        array (
            'GX2CMS\\Project' => 
            array (
                0 => __DIR__ . '/..' . '/ezpzlib/project/src',
            ),
        ),
        'E' => 
        array (
            'Ezpizee\\Utils' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/utils/src',
            ),
            'Ezpizee\\SupportedCMS\\WordPress' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/supported-cms/src',
            ),
            'Ezpizee\\SupportedCMS\\Joomla' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/supported-cms/src',
            ),
            'Ezpizee\\SupportedCMS\\Exception' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/supported-cms/src',
            ),
            'Ezpizee\\SupportedCMS\\Drupal' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/supported-cms/src',
            ),
            'Ezpizee\\MicroservicesClient' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/microservices-client/src',
            ),
            'Ezpizee\\ContextProcessor' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/contextprocessor/src',
            ),
            'Ezpizee\\ConnectorUtils' => 
            array (
                0 => __DIR__ . '/..' . '/ezpizee/connector-utils/src',
            ),
        ),
    );

    public static $classMap = array (
        'BaseSendGridClientInterface' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/BaseSendGridClientInterface.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SendGrid' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
        'TwilioEmail' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/TwilioEmail.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71437e9a752949ff232404692d8051c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71437e9a752949ff232404692d8051c5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit71437e9a752949ff232404692d8051c5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit71437e9a752949ff232404692d8051c5::$classMap;

        }, null, ClassLoader::class);
    }
}

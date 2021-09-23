﻿<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Village Manaca" />
    <meta name="og:title" content="Village Manaca" />
    <meta name="og:description" content="O seu melhor passeio está pertinho de São Paulo." />
    <meta name="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/images/apple-touch-icon-57-precomposed.png">
    <link rel="image_src" href="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta name="theme-color" content="#ffffff" />
    <!-- property (faz funcionar no linkedin) -->
    <meta property="og:title" content="Village Manaca" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta property="O seu melhor passeio está pertinho de São Paulo." />
    <meta property="og:url" content="https://villagemanaca.com.br/" />
    <!-- property (faz funcionar no linkedin) -->
    <?php
    $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => $description),
        array('name' => 'keywords', 'content' => $keywords),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
    );
    echo meta($meta);
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/style.css?v=0.0.5');
    echo link_tag('assets/css/slick.css');
    echo link_tag('assets/css/slick-theme.css');
    ?>

</head>

<body>

    <script>
        (function(ll, mo, n, i, t, o, r) {
            ll['LeadLoversMonitorObject'] = o;
            ll[o] = ll[o] || function() {
                (ll[o].q = ll[o].q || []).push(arguments);
            };
            r = mo.createElement(n);
            r.src = i;
            r.type = t;
            r.async = 1;
            r.defer = 1;
            mo.body.appendChild(r);
        })(window, document, 'script', 'https://lib.leadlovers.site/scripts/monitor/index.js', 'module', 'mnt');

        mnt('init', '5fff5337-0cd0-4d2c-b4be-836168e9ca4f');
        mnt('scout');
        mnt('capture');
    </script>
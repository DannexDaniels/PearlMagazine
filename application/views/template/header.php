<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Pearl Magazine</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Dannex Daniels"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Style-Type" content="text/css" />

        <!-- my styles-->
        <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/main.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/bootstrap-theme.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url('assets');?>/css/bootstrap.min.css" type="text/css">

        <!-- THEME STYLES -->
        <link href="<?php echo base_url('assets');?>/css/layout.min.css" rel="stylesheet" type="text/css"/>



        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>

        <script src="<?php echo base_url('assets');?>/js/w3.js"></script>

    </head>
    <body class="subpage" id="body" data-spy="scroll">
        <!-- Header -->
        <header id="header">
            <div class="inner">
                <a href="<?php echo base_url()?>" class="logo">Pearl Magazine</a>
                <nav id="nav">
                    <a href="<?php echo base_url()?>">Home</a>
                    <a href="<?php echo base_url('business_cafe')?>">Business Cafe</a>
                    <a href="<?php echo base_url('celeb_zone')?>">Celeb Zone</a>
                    <a href="<?php echo base_url('daily_dose')?>">Daily Dose</a>
                    <a href="<?php echo base_url('gossip_girl')?>">Gossip Girl</a>
                    <a href="<?php echo base_url('health')?>">Health</a>
                    <a href="<?php echo base_url('main_story')?>">Main Story</a>
                    <a href="<?php echo base_url('mentality')?>">Mentality</a>
                    <a href="<?php echo base_url('posh_parlour')?>">Posh Palour</a>
                    <a href="<?php echo base_url('sex_101')?>">Sex 101</a>
                    <a href="<?php echo base_url('open_forum')?>">Open Forum</a>
                </nav>
                <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
            </div>
            <?php
                if (isset($article)) {

                }
            ?>
        </header>

        <!--Main Body-->
        <section id="three" class="wrapper">
            <div class="inner">

                <script>
                    window.fbAsyncInit = function() {
                        FB.init({
                            appId            : '211080576115922',
                            autoLogAppEvents : true,
                            xfbml            : true,
                            version          : 'v2.12'
                        });
                    };

                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=211080576115922&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <div id="fb-root"></div>
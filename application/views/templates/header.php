<!DOCTYPE html>
<html lang="en">

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 mb-3 mb-md-0 col-md-14 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="<?php echo base_url() ?>Dashboard" class="js-logo-clone">ngeApple</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">
                        <li class="">
                            <a href="<?php echo base_url() ?>Dashboard" class="js-logo-clone">Home</a>
                        </li>
                        <li><a href="<?php echo base_url('Dashboard#about'); ?>" class="js-logo-clone">About</a>
                        </li>
                        <li class="has-children">
                            <a href="<?php echo base_url('index.php/Shop'); ?>" class="js-logo-clone">Shop</a>
                            <ul class="dropdown">
                                <li><a href="<?php echo base_url('index.php/Shop'); ?>" class="js-logo-clone">Iphone</a>
                                </li>
                                <li><a href="<?php echo base_url('index.php/Shop'); ?>" class="js-logo-clone">Mac</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('index.php/tamu'); ?>" class="js-logo-clone">Buku Tamu</a></li>
                        <li><a href="#">Manual Book</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
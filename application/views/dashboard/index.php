<div class="site-wrap">
    <div class="header-content">
        <div class="site-blocks-cover" style="background-image: url('assets/images/Iphone.png');" data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-6 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-4">Finding Your Dream Gadget</h1>
                        <div class="intro-text text-center text-md-left">
                            <!-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at
                                iaculis
                                quam. Integer accumsan tincidunt fringilla. </p>
                            <p> -->
                            <a href="<?php echo base_url('index.php/Shop'); ?>" class="btn btn-sm btn-primary">Shop
                                Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-truck"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Shipping</h2>
                        <p>You can enjoy free shipping throughout Indonesia at any time without
                            any conditions and your order is guaranteed to arrive safely at home.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Returns</h2>
                        <p>Gadgets are guaranteed to be 100% original. If you get a damaged
                            gadget, you can exchange it with the applicable conditions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Customer Support</h2>
                        <p>Prioritizing customer safety and convenience in shopping.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-blocks-2">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="<?php echo site_url('Shop/read_iphone'); ?>">
                        <figure class="image">
                            <img src="<?php echo base_url() ?>assets/images/iphone13.png" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Collections</span>
                            <h3>iPhone</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="<?php echo site_url('Shop/read_macbook'); ?>">
                        <figure class="image">
                            <img src="<?php echo base_url() ?>assets/images/mac.png" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Collections</span>
                            <h3>MacBook</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>New Information</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-3 owl-carousel">
                        <?php foreach ($list1 as $data) : ?>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="<?php echo base_url() ?>assets/images/iphone_13_pro.jpg"
                                        alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="<?= $data['url_desc'] ?>"><?= $data['judul'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <?php foreach ($list2 as $data) : ?>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="<?php echo base_url() ?>assets/images/macbook_pro_14.jpg"
                                        alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="<?= $data['url_desc'] ?>"><?= $data['judul'] ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
        <div class="site-section block-8">
            <div class="container">
                <div class="row justify-content-center  mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Big Sale!</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7 mb-5">
                        <a href="#"><img src="<?php echo base_url() ?>assets/images/iphone_all.jpg"
                                alt="Image placeholder" class="img-fluid rounded"></a>
                    </div>
                    <div class="col-md-12 col-lg-5 text-center pl-md-5">
                        <h2><a href="#">50% less in all items</a></h2>
                        <p>Special price on this independence day, buy the gadget immediately before it sold out!!!</p>
                        <p><a href="<?php echo site_url('Shop/index'); ?>" class="btn btn-primary btn-sm">Shop Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="site-section block-3 site-blocks-2 bg-light" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="block-16">
                        <a href="#"><img src="<?php echo base_url() ?>assets/images/team.png" alt="Image placeholder"
                                class="img-fluid rounded"></a>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="site-section-heading pt-3 mb-4">
                        <h2 class="text-black">How We Started</h2>
                    </div>
                    <p>ngeApple dibangun pada tahun 2021 yang merupakan sebuah startup yang bergerak di bidang jual beli
                        gadget khususnya iPhone dan
                        MacBook dengan mengutamakan
                        kepuasan pelanggan saat berbelanja. Kami berusaha memberikan barang yang berkualitas dengan
                        harga yang cukup miring.</p>
                    <p>.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>The Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">

                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="<?php echo base_url() ?>assets/images/akhdan.png" alt="Image placeholder"
                                    class="mb-4">
                                <h3 class="block-38-heading h4">Akhdan Rafid Fadhila</h3>
                                <h3 class="block-38-heading h4">41519010078</h3>
                                <p class="block-38-subheading">CEO/Co-Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="<?php echo base_url() ?>assets/images/frida.png" alt="Image placeholder"
                                    class="mb-4">
                                <h3 class="block-38-heading h4">Frida Eka Wardani</h3>
                                <h3 class="block-38-heading h4">41519010063</h3>
                                <p class="block-38-subheading">Frontend Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="<?php echo base_url() ?>assets/images/iqbal.png" alt="Image placeholder"
                                    class="mb-4">
                                <h3 class="block-38-heading h4">Muhammad Iqbal Yusril</h3>
                                <h3 class="block-38-heading h4">41519010106</h3>
                                <p class="block-38-subheading">System Analyst</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="block-38 text-center">
                        <div class="block-38-img">
                            <div class="block-38-header">
                                <img src="<?php echo base_url() ?>assets/images/abel.jpg" alt="Image placeholder"
                                    class="mb-4">
                                <h3 class="block-38-heading h4">Raychal A. Wiradiputra</h3>
                                <h3 class="block-38-heading h4">41519010159</h3>
                                <p class="block-38-subheading">Backend Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
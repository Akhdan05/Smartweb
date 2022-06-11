<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="<?php echo base_url('Dashboard'); ?>">Home</a> <span
                    class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-9 order-2">

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="float-md-left mb-4">
                            <h2 class="text-black h5">Shop All</h2>
                        </div>
                        <div class="d-flex">
                            <div class="dropdown mr-1 ml-md-auto">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                    id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                    <a class="dropdown-item" href="<?php echo site_url('Shop/getAscip'); ?>">Price, low to high (Iphone)</a>
                                    <a class="dropdown-item" href="<?php echo site_url('Shop/getDescip'); ?>">Price, high to low (Iphone)</a>
                                    <a class="dropdown-item" href="<?php echo site_url('Shop/getAscmac'); ?>">Price, low to high (Macbook)</a>
                                    <a class="dropdown-item" href="<?php echo site_url('Shop/getDescmac'); ?>">Price, high to low (Macbook)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <?php foreach ($data_shop as $data) : ?>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                        <div class="block-4 text-center border">
                            <figure class="block-4-image">
                                <a href="<?php echo site_url('shop/detail/' . $data['id']); ?>"><img
                                        src="<?= $data['img-src']; ?>" alt="Image placeholder" class="img-fluid"></a>
                            </figure>
                            <div class="block-4-text p-4"> 
                                <h3><a
                                        href="<?php echo site_url('shop/detail/' . $data['id']); ?>"><?= $data['nama']; ?></a>
                                </h3>
                                <p class="mb-0"><?= $data['ulasan']; ?></p>
                                <p class="text-primary font-weight-bold"><?= $data['harga']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-md-3 order-1 mb-5 mb-md-0">
                <div class="border p-4 rounded mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><a href="<?php echo site_url('Shop/read_iphone'); ?>"
                                class="d-flex"><span>Iphone</span> <span
                                    class="text-black ml-auto">(<?= $data_iphone ?>)</span></a></li>
                        <li class="mb-1"><a href="<?php echo site_url('Shop/read_macbook'); ?>"
                                class="d-flex"><span>MacBook</span> <span
                                    class="text-black ml-auto">(<?= $data_macbook ?>)</span></a></li>
                    </ul>
                </div>

                
            </div>
        </div>
    </div>
</div>
<!-- Sidebar Modal -->
<div class="sidebar-modal">
    <div class="sidebar-modal-inner">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <img src="<?= base_url('front-end/'); ?>assets/img/logo.png" alt="Image">
            </div>

            <span class="close-btn sidebar-modal-close-btn">
                <i class="bx bx-x"></i>
            </span>
        </div>

        <div class="sidebar-about">
            <div class="title">
                <p>VidNext is a high quality video production house. We make a awesome branded videos. It is the analogical of film making, but the images are digitally recorded instead of film stock.</p>
            </div>
        </div>

        <div class="contact-us">
            <h2>Contact Us</h2>

            <ul>
                <li>
                    <i class="flaticon-pin"></i>
                    6890 Blvd, The Bronx, NY 1058 New York, USA
                </li>

                <li>
                    <i class="flaticon-email-1"></i>
                    <a href="mailto:hello@vidnext.com">hello@vidnext.com</a>
                    <a href="#">Skype: example</a>
                </li>

                <li>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:+1-587-785-4578">+1 587 785 4578</a>
                    <a href="tel:+1-485-456-0102">+1 485 456 0102</a>
                </li>
            </ul>
        </div>

        <div class="sidebar-instagram-feed">
            <h2>Instagram</h2>

            <ul>
                <li>
                    <a href="#">
                        <img src="<?= base_url('front-end/'); ?>assets/img/instagram/1.jpg" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('front-end/'); ?>assets/img/instagram/2.jpg" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('front-end/'); ?>assets/img/instagram/3.jpg" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('front-end/'); ?>assets/img/instagram/4.jpg" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('front-end/'); ?>assets/img/instagram/5.jpg" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?= base_url('front-end/'); ?>assets/img/instagram/6.jpg" alt="image">
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-follow-us">
            <h2>Sidebar Follow</h2>

            <ul class="social-wrap">
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="bx bxl-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

<!-- Start Newsletter Modal -->
<div class="modal-newsletter-area">
    <div class="modal fade" id="exampleModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="bx bx-x"></i>
                </button>

                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-sm-5 p-0">
                            <div class="newsletter-img">
                                <img src="<?= base_url('front-end/') ?>assets/img/newsletter-img.jpg" alt="Image">
                            </div>
                        </div>

                        <div class="col-lg-7 col-sm-7 pl-0">
                            <div class="modal-newsletter-wrap">
                                <h3>Subscribe To Our Newsletter</h3>
                                <p>Sign up for our mailing list to get the latest updates & offers.</p>

                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">

                                    <button class="default-btn" type="submit">
                                        Subscribe Now
                                    </button>

                                    <div id="validator-newsletter" class="form-result"></div>

                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Do Not Show This Popup Again
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Newsletter Modal -->

<!-- Start Hero Slider Area -->
<?php foreach ($banner_img as $bi) : ?>
    <section class="banner-area jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="banner-text">
                                <h1><?= $bi['text'] ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img">
            <img src="<?= base_url('front-end/assets/img/banner/') . $bi['image']; ?>" alt="Image">
        </div>

    </section>
<?php endforeach; ?>
<!-- End Hero Slide Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="about-content-wrap">
            <div class="row">
                <?php foreach ($about as $a) : ?>
                    <div class="col-lg-8">
                        <div class="about-content">
                            <span><?= $a['hb'] ?></span>
                            <h2><?= $a['motto'] ?></h2>
                            <p><?= $a['detail_bio'] ?></p>

                            <a href="about.html" class="default-btn">
                                Learn More
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-lg-4">
                    <div class="about-img">
                        <img src="<?= base_url('front-end/'); ?>assets/img/about-img.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Latest Trailer Area -->
<section class="latest-trailer ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="latest-trailer-content">
                    <span>Latest Trailer</span>
                    <h2>Film Baru</h2>

                </div>
            </div>
            <?php foreach ($film_baru as $fb) : ?>
                <div class="col-lg-6">
                    <div class="latest-trailer-wrap owl-theme owl-carousel">
                        <div class="latest-trailer-item">
                            <img src="<?= base_url('front-end/assets/img/film-baru/') . $fb['image']; ?>" alt="Image">

                            <div class="video-button">
                                <a href="<?= $fb['youtube'] ?>" class="video-btn popup-youtube">
                                    <i class="bx bx-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Latest Trailer Area -->

<!-- Start Team Area -->
<section class="team-area bg-color ptb-100">
    <div class="container-fluid p-0">
        <div class="section-title">
            <span>Film Makers</span>
            <h2>Data Karyawan</h2>
        </div>


        <div class="team-wrap owl-theme owl-carousel">
            <?php foreach ($karyawan as $kry) : ?>
                <div class="ingle-team">
                    <div class="team-img">
                        <img src="<?= base_url('front-end/assets/img/karyawan/') . $kry['image']; ?>" alt="Image" style="height: 400px; width: 375px;">

                        <ul class="social">
                            <li>
                                <a href="<?= $kry['tw'] ?>" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="<?= $kry['ig'] ?>" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="<?= $kry['fb'] ?>" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3><?= $kry['nm_kry'] ?></h3>
                        <span><?= $kry['jbt'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End Team Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="top-title">News Feeds</span>
            <h2>Blog Media Dan Berita</h2>
        </div>

        <div class="row">
            <?php foreach ($blog as $b) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <a href="blog-details.html">
                            <img src="<?= base_url('front-end/assets/img/blog/') . $b['image']; ?>" alt="Image">
                        </a>

                        <div class="blog-content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="#"><?= $b['created_by'] ?></a>
                                </li>

                                <li>
                                    <i class="flaticon-calendar"></i>
                                    <?= date('d F Y', $b['created_at']); ?>
                                </li>
                            </ul>

                            <a href="blog-details.html">
                                <h3><?= $b['judul'] ?></h3>
                            </a>

                            <p><?= substr(strip_tags($b['isi_blog']), 0, 200); ?></p>

                            <a href="blog-details.html" class="read-more">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Video Created Area -->

<section class="video-created-area ptb-100">
    <div class="container">
        <div class="video-created-wrap">
            <img src="<?= base_url('front-end/'); ?>assets/img/video-created-bg.jpg" alt="Image">

            <div class="video-wrap">
                <a href="" class="popup-youtube">
                    <i class="flaticon-play"></i>
                </a>
            </div>

            <h2>Video Created By Vidnext</h2>
        </div>
    </div>
</section>

<!-- End Video Created Area -->

<!-- Start What We Do Area -->
<section class="what-we-do-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <span>What We Do</span>
                    <h2>Video Solution Every Stage</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                    <div class="brand-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="brand">
                                    <a href="#">
                                        <img src="<?= base_url('front-end/'); ?>assets/img/brand/1.png" alt="Image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="brand">
                                    <a href="#">
                                        <img src="<?= base_url('front-end/'); ?>assets/img/brand/2.png" alt="Image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="brand">
                                    <a href="#">
                                        <img src="<?= base_url('front-end/'); ?>assets/img/brand/3.png" alt="Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="contact.html" class="default-btn">
                        Contact Us
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="what-we-do-item mt-30">
                            <i class="flaticon-film-editing-1"></i>
                            <h3>Pre-Production</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="what-we-do-item">
                            <i class="flaticon-film-editing"></i>
                            <h3>Production</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="what-we-do-item">
                            <i class="flaticon-advertising"></i>
                            <h3>Post-Production</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="what-we-do-item mt-mince-30">
                            <i class="flaticon-movie"></i>
                            <h3>Conversion</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What We Do Area -->

<!-- Start Testimonial Area -->
<section class="testimonial-area ptb-100">
    <div class="container">
        <div class="testimonial-wrap owl-theme owl-carousel">
            <div class="testimonial-content">
                <i class="flaticon-quotation"></i>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.”</p>

                <h3>Kara Goldberg</h3>
                <span>Director of Festwork</span>
            </div>

            <div class="testimonial-content">
                <i class="flaticon-quotation"></i>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.”</p>

                <h3>Kara Goldberg</h3>
                <span>Director of Festwork</span>
            </div>

            <div class="testimonial-content">
                <i class="flaticon-quotation"></i>
                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.”</p>

                <h3>Kara Goldberg</h3>
                <span>Director of Festwork</span>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->

<!-- End Products Area -->
<section class="products-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Products</span>
            <h2>Award Winning Movies</h2>
        </div>

        <div class="products-slider-wrap owl-theme owl-carousel" data-slider-id="1">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="products">
                        <img src="<?= base_url('front-end/'); ?>assets/img/products-img.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="products-content">
                        <span>Film Festival</span>
                        <h2>Award Winning Movies “Once Upon a Time”</h2>
                        <p>Video production work with producing video content. It is the analogical of film making, but the images are digitally recorded instead of film stock. There are three levels of video production: production, pre-production and post-production the images are.</p>

                        <a href="about.html" class="default-btn">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="products">
                        <img src="<?= base_url('front-end/'); ?>assets/img/products-img-2.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="products-content">
                        <span>Vidnext Bio</span>
                        <h2>Award Winning Movies “Once Upon a Time”</h2>
                        <p>Video production work with producing video content. It is the analogical of film making, but the images are digitally recorded instead of film stock. There are three levels of video production: production, pre-production and post-production the images are.</p>

                        <a href="about.html" class="default-btn">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="products">
                        <img src="<?= base_url('front-end/'); ?>assets/img/products-img-3.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="products-content">
                        <span>Vidnext Bio</span>
                        <h2>Award Winning Movies “Once Upon a Time”</h2>
                        <p>Video production work with producing video content. It is the analogical of film making, but the images are digitally recorded instead of film stock. There are three levels of video production: production, pre-production and post-production the images are.</p>

                        <a href="about.html" class="default-btn">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="products">
                        <img src="<?= base_url('front-end/'); ?>assets/img/products-img-4.jpg" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="products-content">
                        <span>Vidnext Bio</span>
                        <h2>Award Winning Movies “Once Upon a Time”</h2>
                        <p>Video production work with producing video content. It is the analogical of film making, but the images are digitally recorded instead of film stock. There are three levels of video production: production, pre-production and post-production the images are.</p>

                        <a href="about.html" class="default-btn">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Carousel Thumbs -->
        <div class="thumbs-wrap">
            <div class=" row owl-thumbs hero-slider-thumb" data-slider-id="1">
                <div class="owl-thumb-item col-lg-3">
                    <span>2000</span>
                </div>
                <div class="owl-thumb-item col-lg-3">
                    <span>2001</span>
                </div>
                <div class="owl-thumb-item col-lg-3">
                    <span>2002</span>
                </div>
                <div class="owl-thumb-item col-lg-3">
                    <span>2003</span>
                </div>
            </div>
            <!-- End Carousel Thumbs -->
        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Get In Touch Area -->
<section class="get-in-touch-area ptb-100">
    <div class="container">
        <div class="get-in-touch-content">
            <h2>Did You Like Our Work?</h2>
            <h3>Get In Touch Today!</h3>

            <a href="contact.html" class="default-btn">
                Contact Us
            </a>
        </div>
    </div>
</section>
<!-- End Get In Touch Area -->



<!-- Start Exclusive Shop Area -->
<section class="exclusive-hop-area ptb-100">
    <div class="container">
        <div class="section-title white-title">
            <span>Exclusive shop</span>
            <h2>Collect Your Movies Now!</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="exclusive-img">
                    <img src="<?= base_url('front-end/'); ?>assets/img/exclusive-hop-img-1.jpg" alt="Image">

                    <div class="exclusive-img-2">
                        <img src="<?= base_url('front-end/'); ?>assets/img/exclusive-hop-img-2.png" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="exclusive-video-list">
                    <div class="row">
                        <div class="col-lg-2 pr-0">
                            <div class="exclusive-list-img bg-1"></div>
                        </div>

                        <div class="col-lg-10">
                            <div class="exclusive-text">
                                <h3>Deep sea</h3>
                                <span><del>$89.00</del> $59.00</span>
                                <ul>
                                    <li>Director: Peter Spider</li>
                                    <li>Release: 01-01-2018</li>
                                </ul>

                                <a href="#" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 pr-0">
                            <div class="exclusive-list-img bg-2"></div>
                        </div>

                        <div class="col-lg-10">
                            <div class="exclusive-text">
                                <h3>Deep sea</h3>
                                <span><del>$89.00</del> $59.00</span>
                                <ul>
                                    <li>Director: Peter Spider</li>
                                    <li>Release: 01-01-2018</li>
                                </ul>

                                <a href="#" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-lg-2 pr-0">
                            <div class="exclusive-list-img bg-3"></div>
                        </div>

                        <div class="col-lg-10">
                            <div class="exclusive-text">
                                <h3>Deep sea</h3>
                                <span><del>$89.00</del> $59.00</span>
                                <ul>
                                    <li>Director: Peter Spider</li>
                                    <li>Release: 01-01-2018</li>
                                </ul>

                                <a href="#" class="default-btn">
                                    <i class="flaticon-shopping-cart"></i>
                                    Add To Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Exclusive Shop Area -->



<!-- Start Partner Area -->
<div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-wrap owl-theme owl-carousel">
            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/1.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/2.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/3.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/4.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/5.png" alt="Image">
                </a>
            </div>

            <div class="partner-item">
                <a href="#">
                    <img src="<?= base_url('front-end/'); ?>assets/img/partner-logo/6.png" alt="Image">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->
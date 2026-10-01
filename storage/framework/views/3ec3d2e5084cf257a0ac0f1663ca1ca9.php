<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="SOUND Template">
    <meta name="keywords" content="SOUND, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php ($site = \App\Models\SiteSetting::current()); ?>
    <title><?php echo e($site->site_name); ?> | <?php echo e($site->tagline ?: 'Music'); ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="users/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="users/css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="users/css/rockville.css" type="text/css">
    <link rel="stylesheet" href="users/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="users/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/style.css" type="text/css">
     <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>.header__logo img{width:170px;max-height:70px;object-fit:contain}.header__logo{display:flex;align-items:center;min-height:74px}</style>
</head>

<?php ($site = $site ?? \App\Models\SiteSetting::current()); ?>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('users/img/logo.png')); ?>" alt="<?php echo e($site->site_name); ?>"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                                <li class="active"><a href="/about">About</a></li>
                                <li><a href="<?php echo e(route('media.index',['type'=>'video'])); ?>">Videos</a></li>
                                <li><a href="/blogs">Blog</a></li>
                                
                                <li><a href="./contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__right__social">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->user()->is_admin): ?><a href="<?php echo e(route('admin.dashboard')); ?>">Admin</a><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <a href="<?php echo e(route('dashboard')); ?>">Account</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('register')); ?>">Sign up</a>
                                <a href="<?php echo e(route('login')); ?>" class="btn btn-light text-dark rounded-pill">Login</a>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

<?php echo $__env->yieldContent('content'); ?>


     <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="users/img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6><?php echo e($site->phone ?: '—'); ?></h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6><?php echo e($site->email ?: '—'); ?></h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2><?php echo e($site->site_name); ?></h2>
                        <div class="footer__social__links">
                            <a href="<?php echo e($site->facebook_url ?: '#'); ?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo e($site->twitter_url ?: '#'); ?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo e($site->instagram_url ?: '#'); ?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo e($site->youtube_url ?: '#'); ?>"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4><?php echo e($site->footer_text ?: 'Stay With me'); ?></h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="users/js/jquery-3.3.1.min.js"></script>
    <script src="users/js/bootstrap.min.js"></script>
    <script src="users/js/jquery.magnific-popup.min.js"></script>
    <script src="users/js/jquery.nicescroll.min.js"></script>
    <script src="users/js/jquery.barfiller.js"></script>
    <script src="users/js/jquery.countdown.min.js"></script>
    <script src="users/js/jquery.slicknav.js"></script>
    <script src="users/js/owl.carousel.min.js"></script>
    <script src="users/js/main.js"></script>

    <!-- Music Plugin -->
    <script src="users/js/jquery.jplayer.min.js"></script>
    <script src="users/js/jplayerInit.js"></script>

    <script>

    function scrollArtists() {

        const container =
            document.getElementById('artistsContainer');

        container.scrollBy({
            left: 500,
            behavior: 'smooth'
        });

    }
</script>

<script>
    function scrollSongs(direction) {
        const container = document.getElementById('songCards');

        container.scrollBy({
            left: direction * 250,
            behavior: 'smooth'
        });
    }
</script>
</body>

</html><?php /**PATH C:\Users\LAPVY\Downloads\E-Project-Sound-COMPLETE\resources\views/user/layout.blade.php ENDPATH**/ ?>
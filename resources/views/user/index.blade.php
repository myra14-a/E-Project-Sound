@extends('user.layout')
@section('content')
@php($site = \App\Models\SiteSetting::current())
    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="users/img/hero-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>{{ $site->hero_subtitle ?: 'New single' }}</span>
                        <h1>{{ $site->hero_title ?: 'Feel the heart beats' }}</h1>
                        <p>{{ $site->hero_description ?: 'Discover the latest music, artists, albums and videos.' }}</p>
                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Dynamic New Additions -->
    <section class="spad" style="background:#0b0b0b;">
        <div class="container">
            <div class="artists-header"><h2 class="text-white">New Additions</h2><a href="{{ route('media.index') }}" class="show-all">View all</a></div>
            <div class="row">
                @foreach($latestMusic as $item)
                <div class="col-lg-3 col-md-6 mb-4"><div class="song-card" style="position:relative;"><span class="new-flash">NEW</span><a href="{{ route('media.show',$item) }}"><img src="{{ $item->thumbnail_url ?: asset('users/img/large-item.jpg') }}" style="width:100%;height:180px;object-fit:cover;"></a><h3 class="text-white mt-2">{{ $item->title }}</h3><p>{{ $item->artist }}</p></div></div>
                @endforeach
            </div>
            <div class="artists-header mt-5"><h2 class="text-white">New Videos</h2><a href="{{ route('media.index',['type'=>'video']) }}" class="show-all">View all</a></div>
            <div class="row">
                @foreach($latestVideos as $item)
                <div class="col-lg-3 col-md-6 mb-4"><div class="song-card" style="position:relative;"><span class="new-flash">NEW</span><a href="{{ route('media.show',$item) }}"><img src="{{ $item->thumbnail_url ?: asset('users/img/videos/videos-1.jpg') }}" style="width:100%;height:180px;object-fit:cover;"></a><h3 class="text-white mt-2">{{ $item->title }}</h3><p>{{ $item->artist }}</p></div></div>
                @endforeach
            </div>
        </div>
    </section>
    <style>.new-flash{position:absolute;top:12px;left:12px;background:#ff2b2b;color:#fff;padding:4px 9px;border-radius:20px;font-size:11px;font-weight:700;z-index:2;animation:flashNew .8s infinite alternate}@keyframes flashNew{from{opacity:.35}to{opacity:1}}</style>




<section class="artists-section">

    <!-- Heading -->
    <div class="artists-header">
        <h2 >Popular artists</h2>

        <a href="" class="show-all">
            Show all
        </a>
    </div>


    <!-- Cards -->
    <div class="artists-wrapper">

        <div class="artists-container" id="artistsContainer">

            <!-- Card 1 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                  <img src="users/img/arijit singh.jpg" alt=""  class="artist-image">

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
                    Arijit Singh
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>


            <!-- Card 2 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                   <img src="users/img/shaan.jpg" alt="" class="artist-image">
                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
                    Shaan
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>


            <!-- Card 3 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/atifaslam.jpg"
                        alt="Atif Aslam"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
                    Atif Aslam
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>


            <!-- Card 4 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/ali zafar.jpg"
                        alt="Karan Aujla"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
                   Ali Zafar
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>


            <!-- Card 5 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/shreya.jpg"
                        alt="Artist"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
                    Shreya Goshal
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>


            <!-- Card 6 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/asim.jpg"
                        alt="Artist"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
                 Asim Azhar
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>

              <!-- Card 7 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/armaan.jpg"
                        alt="Artist"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
                Amaan Malik
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>

              <!-- Card 8 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/sonu nigam.jpg"
                        alt="Artist"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
               Sonu Nigam
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>


             <!-- Card 9 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/pritam.jpg"
                        alt="Artist"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>
                

                <div class="artist-name">
               Pritam
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>

             <!-- Card 10 -->
            <div class="artist-card">

                <div class="artist-image-wrapper">

                    <img
                        src="users/img/momina.jpg"
                        alt="Artist"
                        class="artist-image"
                    >

                    <div class="play-button">
                        <i class="fa-solid fa-play"></i>
                    </div>

                </div>

                <div class="artist-name">
               Momina Mustehsan
                </div>

                <div class="artist-type">
                    Artist
                </div>

            </div>
        </div>


        <!-- Right Arrow -->
        <button class="scroll-btn" onclick="scrollArtists()">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

</section>


    <!-- ost list -->
<div class="container">
    <section class="recommended-section">

    <div class="recommended-header">
        <h2 class="hd text-light">Pakistani OST</h2>

        <div class="scroll-buttons">
            <button onclick="scrollSongs(-1)" class="scroll-btn">
                ❮
            </button>

            <button onclick="scrollSongs(1)" class="scroll-btn">
                ❯
            </button>

            <a href="/ostlist">Show all</a>
        </div>
    </div>


    <div class="song-cards" id="songCards">

        <!-- Card 1 -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/meem se mohabbat.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3> Meem Se Mohabbat</h3>
            <p> Asim Azhar and Qirat Haider</p>
        </div>


        <!-- Card 2 -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/dar e nijat.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Dar E Nijaat</h3>
            <p> Nabeel Shaukat Ali and Osaf Fateh Ali Khan</p>
        </div>


          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/kabhi mai kabhi tum.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3> Kabhi Main Kabhi Tum</h3>
            <p>  Ahad Khan and Usama Ali</p>
        </div>
          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/ishq mrshid.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3> Ishq Murshid</h3>
            <p> Ahmed Jahanzeb</p>
        </div>


        <!-- Card 3 -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/meri zindagi h tu.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Meri Zindagi Hai Tu</h3>
            <p>Asim Azhar</p>
        </div>


        <!-- Card 4 -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/dewangi.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3> Deewangi </h3>
            <p> Sahir Ali Bagga</p>
        </div>


        <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/fitoor.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Fitoor</h3>
            <p> Shani Arshad and Aima Baig</p>
        </div>

          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/humsafar.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Humsafar</h3>
            <p> Qurat-ul-Ain Balouch</p>
        </div>

          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/khuda aur mohaabt.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Khuda Aur Mohabbat</h3>
            <p> Rahat Fateh Ali Khan and Nish Asher</p>
        </div>

       


       
    </div>

</section>

</div>
    
  <!-- ost list end here -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="users/img/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                           
                            <h1>About us</h1>
                        </div>
                        <hr>
                        <hr>
                        <hr>
                        <p>Music is more than just sound — it’s a feeling, a memory, and <br> sometimes the perfect escape from a stressful day.</p>
                        <a href="#" class="primary-btn">CONTACT us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- album list -->
<div class="container">
    <section class="recommended-section">

    <div class="recommended-header">
        <h2 class="hd text-light">Popular Albums</h2>

        <div class="scroll-buttons">
            <button onclick="scrollSongs(-1)" class="scroll-btn">
                ❮
            </button>

            <button onclick="scrollSongs(1)" class="scroll-btn">
                ❯
            </button>
  <a href="/albumlist">Show all</a>
           
        </div>
    </div>


    <div class="song-cards" id="songCards">

        <!-- Card 1 -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/finder her.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3> Finding Her</h3>
            <p>Kushagra Thakur</p>
        </div>


        <!-- Card 2 -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/gal sun.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Gal Sun</h3>
            <p> Sabat Batin</p>
        </div>


          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/jhol.png" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3> Jhol</h3>
            <p>Maanu and Annural Khalid</p>
        </div>

          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/kalyani.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Kalyani</h3>
            <p> Shreya Ghoshal</p>
        </div>


        <!-- Card 3 -->
        <div class="song-card">
            <div class="song-image-box">
                <img src="users/img/sheesha.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Sheesha</h3>
            <p>Mitta Ror and Swara Verma</p>
        </div>


        <!-- Card 4 -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/shaky.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3> Shaky </h3>
            <p>  Sanju Rathod</p>
        </div>


        <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/pal pal.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Pal Pal</h3>
            <p> Talwiinder</p>
        </div>

          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/tere liye.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Tere Liye</h3>
            <p>Atif Aslam</p>
        </div>

          <!-- Extra Card -->
        <div class="song-card">
            <div class="song-image-box">
               <img src="users/img/sahiba.jpg" alt="">
                <button class="play-btn">▶</button>
            </div>

            <h3>Sahiba</h3>
            <p> Stebin Ben and Jasleen Royal</p>
        </div>

    </div>

</section>

</div>
    
  <!-- album list end here -->
    

    <!-- Services Section Begin -->
    <section class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="services__left set-bg" data-setbg="users/img/services/service-left.jpg">
                       
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                <img src="users/img/services/service-1.png" alt="">
                                <h4>Wedding</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                <img src="users/img/services/service-2.png" alt="">
                                <h4>Clubs and bar</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                            <div class="service__item deep-bg">
                                <img src="users/img/services/service-4.png" alt="">
                                <h4>DJ lessons</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                            <div class="service__item">
                                <img src="users/img/services/service-3.png" alt="">
                                <h4>Corporate events</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

 
   @endsection
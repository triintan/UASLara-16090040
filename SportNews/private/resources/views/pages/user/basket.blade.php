@extends('user')
@section('main')

    <!-- ##### Trending Posts Area Start ##### -->
    <section class="trending-posts-area">
        <div class="container">
            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="{{url('sepakbola')}}" class="post-cata cata-sm cata-success">Sepakbola</a>
                            <a href="{{url('readmore')}}" class="post-title">Jadwal Perempatfinal Copa America 2019</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="{{url('basket')}}" class="post-cata cata-sm cata-danger">Basket</a>
                            <a href="{{url('readmore')}}" class="post-title">Timnas Basket Diprediksi Dirombak Besar-besaran Andai Toro Gantikan Wahyu Cacing </a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-md-4">
                    <div class="single-post-area mb-80">

                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="{{url('badminton')}}" class="post-cata cata-sm cata-primary">Badminton</a>
                            <a href="{{url('readmore')}}" class="post-title">Kevin/Marcus Kalah, Indonesia Tanpa Gelar di Kejuaraan Bulutangkis Asia</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Trending Posts Area End ##### -->

    <!-- ##### Vizew Post Area Start ##### -->
    <section class="vizew-post-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="all-posts-area">

                        <div class="row mb-30">
                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="user/img/core-img/sepakbola.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{url('readmore')}}" class="post-title">Jadwal Perempatfinal Copa America 2019</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="user/img/core-img/badminton.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{url('readmore')}}" class="post-title">Kevin/Marcus Kalah, Indonesia Tanpa Gelar di Kejuaraan Bulutangkis Asia</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="user/img/core-img/basket.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{url('readmore')}}" class="post-title">Timnas Basket Diprediksi Dirombak Besar-besaran Andai Toro Gantikan Wahyu Cacing </a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="user/img/core-img/sepakbola.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{url('readmore')}}" class="post-title">Jadwal Perempatfinal Copa America 2019</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 16</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 26</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 17</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="sidebar-area">
                        <!-- ***** Single Widget ***** -->
                        <div>
                            <!-- Section Heading -->
                            <div class="section-heading style-2 mb-30">
                                <h4>Latest News</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-post-area mb-30">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="user/img/core-img/logo.jpg" alt="">
                                </div>

                                <!-- Post Content -->
                                <div class="post-content">f
                                    <a href="{{url('home')}}" class="post-cata cata-sm cata-success">Sports</a>
                                    <a href="{{url('readmore')}}" class="post-title">Jadwal Perempatfinal Copa America 2019</a>
                                    <div class="post-meta d-flex">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 38</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="user/img/core-img/basket.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="{{url('readmore')}}" class="post-title">Timnas Basket Diprediksi Dirombak Besar-besaran Andai Toro Gantikan Wahyu Cacing </a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 29</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 08</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 23</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post d-flex">
                                <div class="post-thumbnail">
                                    <img src="user/img/core-img/badminton.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="{{url('readmore')}}" class="post-title">Kevin/Marcus Kalah, Indonesia Tanpa Gelar di Kejuaraan Bulutangkis Asia</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 17</a>
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 33</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 26</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
  
    @section('footer')
    <footer class="footer-area">
        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @stop
<x-web>

    @include('menu.menu')

    <section class="parallax-bg fixed-bg sm-pb-80 sm-pt-80"
        data-parallax-bg-image=" {{ url('public/web') }}/assets/images/2.JPG;" data-parallax-speed="0.5"
        data-parallax-direction="up">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 centerize-col text-center">
                    <h5 class="font-50px white-color font-800 wow fadeInUp" data-wow-delay="0.1s"><span
                            class="font-100">Eksplore Kayong Utara</span></h5>
                </div>
            </div>
    </section>

    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12  col-xs-12 xs-mb-50">
                    <div class="row">
                        <div class="col-md-12  col-sm-12 col-xs-12 mb-50">
                            <div class="post-wrap"><a href="{{url("taman")}}" class="btn-text">kembali</a>
                            <ul class="single-blog-list">
                                <li>
                                    <div class="post-img">
                                            <div class="blog-grid-slider slick">
                                                <div class="item"><img class="img-responsive" src="{{url("public/$taman->foto")}}" alt=""/></div>
                                                <div class="item"><img class="img-responsive" src="{{url("public/$taman->foto1")}}" alt=""/></div>
                                                <div class="item"><img class="img-responsive" src="{{url("public/$taman->foto2")}}" alt=""/></div>
                                              </div>

                                        </div>
                                        <div class="post-text">
                                            <h3>{{ $taman->nama }}</h3>
                                            <p style="font-family: bold">{{ $taman->alamat }}</p>
                                            <p>
                                                {!! nl2br($taman->deskripsi) !!}
                                            </p>

                                        </div>
                                    </div>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-web>

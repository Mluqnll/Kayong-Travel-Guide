<x-web>

    @include('menu.menu')

    <section class="xxl-screen pt-0 pb-0 bg-flex-cover" id="home"
        style="background-image: url(public/web/assets/images/4.WEBP);">
        <div class="hero-text-wrap xxl-screen">
            <div class="hero-text">
                <div class="text-content-slider slick">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 centerize-col">
                                <div class="all-padding-50 text-center">
                                    <img src="{{ url('public/web') }}/assets/images/kku-white.png" alt=""
                                        style="width:100%; height:auto; object-fit: cover; ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white-bg" id="about">
        <div class="container">

            <div class="row">
                <div class="row">
                    <div class="col-md-8 centerize-col text-center mt-0">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="raleway-font"><span class="font-100">Berita Terkini</span></h2>
                            <hr class="center_line dark-bg">
                        </div>
                    </div>
                </div>
                <div class="row mt-10 mb-100">
                    @foreach ($list_berita as $berita)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <div class="thumb-overlay"></div>
                                    <img style="width: 90;" src="{{ url("public/$berita->poto") }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <div class="member-info text-left white-bg">
                                <h4>{{ $berita->judul }}</h4>
                                <p>
                                    {{substr($berita->deskripsi,0,200)}} 
                                </p>
                                
                                <div class="social-icons-style-02">
                                    <ul class="sm-icon mt-20 mb-0">
                                        <li> <a href="" data-toggle="modal"
                                            data-target="#berita{{ $berita->id }}">
                                                <i class="icofont icofont-info"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.812596785114!2d109.98644231405744!3d-1.8168321369457205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0518e6aef713bf%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1671195827915!5m2!1sid!2sid"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="row">
                <div class="col-md-8 centerize-col text-center mt-50">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="raleway-font"><span class="font-100">Penanggung Jawab Project</span></h2>
                        <hr class="center_line dark-bg">
                    </div>
                </div>
            </div>
            <div class="row mt-50 ">
                @foreach ($list_kontak_wisata as $kontak_wisata)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="team-thumb">
                                <div class="thumb-overlay"></div>
                                <img style="width: 90;" src="{{ url("public/$kontak_wisata->foto") }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-6 col-xs-12">
                        <div class="member-info text-left white-bg">
                            <h3>{{ $kontak_wisata->nama }}</h3>
                            <span class="title">{{ $kontak_wisata->jabatan }}</span>
                            <div class="social-icons-style-02">
                                <ul class="sm-icon mt-20 mb-0">
                                    <li><a class="fb" href="{{ $kontak_wisata->link_fb }}"><i
                                                class="icofont icofont-facebook"></i></a>
                                    </li>
                                    <li><a class="tw"
                                            href="https://api.whatsapp.com/send?phone={{ $kontak_wisata->link_wa }}&text=Halo%20Admin%20Saya%20Ingin%20Bertanya"><i
                                                class="icofont icofont-whatsapp">
                                            </i>
                                        </a>
                                    </li>
                                    <li><a class="ig" href="{{ $kontak_wisata->link_ig }}"><i
                                                class="icofont-instagram">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    
</x-web>
@foreach ($list_berita as $berita)
    <div class="modal fade" id="berita{{ $berita->id }}" tabindex="-1" role="dialog"
        aria-labelledby="berita{{ $berita->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <button type="button" class="btn btn-warning btn-xl" data-dismiss="modal" aria-label="Close">
                    <span class="icofont-close">Close</span>
                </button>
                <div class="modal-header">
                    <img class="img-responsive" src="{{ url("public/$berita->poto") }}"
                        style="width: 100%; height: 50%; object-fit: cover" alt="" />
                    
                    
                </div>
                <div class="modal-body">
                    <div class="sidebar_widget widget_archive ">
                       
                        <h3 style="font-weight: 600;">{{ $berita->judul }}</h3>
                        <div class="post-text text-left">
                            <p style="text-align: justify">
                                {{ $berita->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@extends('layouts.page.app')
@section('content')
    <header class="header-detail">
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            <img src="{{asset('images/packages/slider/AV500-1.jpg')}}" alt="">

        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">LOS MEJORES DESTINOS EN PERÚ</h1>
                    <div>
                        <div class="tl-1"></div>
                        <div class="tl-2"><img src="{{asset('images/logo-andes-ave-white.png')}}" alt="" class="w-100"></div>
                        <div class="tl-3"></div>
                    </div>
{{--                    <div class="mt-4">--}}
{{--                        <a href="" class="text-white">Detalle</a> |--}}
{{--                        <a href="" class="text-white">Itinerario</a> |--}}
{{--                        <a href="" class="text-white">Precios</a> |--}}
{{--                        <a href="" class="text-g-yellow font-weight-bold">Consulte Ahora</a>--}}
{{--                    </div>--}}
                    {{--                        <a href="#Inquire" class="btn btn-outline-g-yellow btn-lg h2 font-weight-normal mt-3">Diseña tu Viaje</a>--}}
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <a href="#title_section" class="mx-2">
                        <i data-feather="chevrons-down" class="text-white" stroke-width="1" height="50" width="50"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="mb-5" id="title_section">
        <div class="container">
            <div class="row no-gutters align-items-center align-items-resumen">
                <div class="col-6">
                    <div class="p-5" id="box-resumen">
{{--                        <div class="exp-unica">--}}
{{--                            <div class="buton">--}}
{{--                                <div class="arrow">--}}
{{--                                    <span class="icon-estrella"></span>--}}
{{--                                </div>--}}
{{--                                <span>hola</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <h4>Lima</h4>
                        <div class="line-subtitle"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis consequuntur dicta fugit illo in, inventore ipsum iusto officia quasi quo quod, similique tempore temporibus ullam voluptas voluptates, voluptatibus voluptatum.</p>
                        <div class="row mt-4">
                            <div class="col">
                                <button type="button" class="btn btn-link p-0 text-secondary float-left font-weight-lighter" onclick="view_itinerary()">SABER MÁS DE LIMA</button>
                                <a href="{{route('destination_show_path', 'show')}}" class="btn btn-g-green text-white rounded-0 float-right" onclick="view_itinerary()">VER PAQUETES</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="swiper-container swiper-container-gallery">
                        <div class="swiper-wrapper">
                            <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/15681356773571.2.jpg')}}"><img src="{{asset('images/itinerary/15681356773571.2.jpg')}}" class="w-100"></a>
                            <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/1571243284484Humantay lake.png')}}"><img src="{{asset('images/itinerary/1571243284484Humantay lake.png')}}" class="w-100"></a>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center align-items-resumen">
                <div class="col-6">
                    <div class="swiper-container swiper-container-gallery">
                        <div class="swiper-wrapper">

                            <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/itinerary/1571243284484Humantay lake.png')}}"><img src="{{asset('images/itinerary/1571243284484Humantay lake.png')}}" class="w-100"></a>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-5" id="box-resumen">
                        <h4>Cusco</h4>
                        <div class="line-subtitle"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis consequuntur dicta fugit illo in, inventore ipsum iusto officia quasi quo quod, similique tempore temporibus ullam voluptas voluptates, voluptatibus voluptatum.</p>
                        <div class="row mt-4">
                            <div class="col">
                                <button type="button" class="btn btn-link p-0 text-secondary float-left font-weight-lighter" onclick="view_itinerary()">SABER MÁS DE LIMA</button>
                                <a href="{{route('destination_show_path', 'show')}}" class="btn btn-g-green text-white rounded-0 float-right" onclick="view_itinerary()">VER PAQUETES</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    {{--        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">--}}
    {{--            <h4 id="list-item-1">Item 1</h4>--}}
    {{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur error eveniet ipsum perferendis quam quos saepe sit soluta! Explicabo facere molestiae quod recusandae voluptatem. Ad assumenda debitis nam natus nihil?</p>--}}
    {{--            <h4 id="list-item-2">Item 2</h4>--}}
    {{--            <p>...</p>--}}
    {{--            <h4 id="list-item-3">Item 3</h4>--}}
    {{--            <p>...</p>--}}
    {{--            <h4 id="list-item-4">Item 4</h4>--}}
    {{--            <p>...</p>--}}
    {{--            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam architecto corporis dicta error facilis ipsam magni, mollitia necessitatibus odio quasi quo, repudiandae saepe sapiente sed. Cum qui sed veritatis!--}}
    {{--        </div>--}}
    <section id="consulte" class="pt-5">
        <div class="container-fluid">
            <div class="row justify-content-center my-4">
                <div class="col-2">
                    <img src="{{asset('images/logo-andes-y.png')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-7">
                    <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>
                    <form-inquire></form-inquire>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container-gallery', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
        });

        var swiper = new Swiper('.swiper-container-detail', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });

        function view_itinerary() {
            $('#box-resumen').addClass('d-none');
            $('#box-detail').removeClass('invisible');
            $('.align-items-resumen').removeClass('align-items-center');
            // $('#box-resumen').addClass('d-none');
            // $('#box-resumen').removeClass('d-block');
            // $('#box-detail').addClass('d-block');
            // $('#box-detail').removeClass('d-none');
            // $('.box-detail').show();
            view_itinerary_resumen
        }

        function view_itinerary_resumen() {
            $('#box-resumen').removeClass('d-none');
            $('#box-detail').addClass('invisible');
            $('.align-items-resumen').addClass('align-items-center');
        }

    </script>
@endpush

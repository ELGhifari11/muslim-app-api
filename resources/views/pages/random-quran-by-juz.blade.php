@extends('layouts.app')

@section('title', 'Random Quran By Juz')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet"
    href="{{ asset('library/prismjs/themes/prism.min.css') }}">
@endpush

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/stisla/2.3.0/css/stisla.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('main')
    <?php

    // Panggilan API
    $data = file_get_contents('https://muslimapp.elghifari.site/api/quran/ayat/acak/juz1');
    $response = json_decode($data, true);
    // Tampilkan data dalam tampilan Blade
    ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="card-icon btn btn-primary pt-2 pb-2 pr-2 pl-2 mr-3">
                    <i class="fas fa-book"></i>
                </div>
                <h1 class="mr-3"> Random Ayat By</h1>

                <div class="btn-group">
                    <button class="btn btn-sm btn-outline-primary" id="juz-button">
                        Juz
                    </button>
                    <button class="btn btn-sm btn-outline-primary" id="range-juz-button">
                        Range Juz
                    </button>
                </div>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Al-Qur'an</a></div>
                    <div class="breadcrumb-item">Random Qur'an By Juz</div>
                </div>
            </div>

            <div class="pl-4 pr-4 mb-4">
                <div>
                    <label for="toggle-audio">Auto Play Audio</label>
                    <input type="checkbox" id="toggle-audio" checked>
                </div>
                <div class="card-header-action">
                    <select class="custom-select btn btn-primary tl text-white" id="juz-select">
                        @for ($i = 1; $i <= 30; $i++)
                            <option value="{{ $i }}">Juz {{ $i }}</option>
                        @endfor
                    </select>

                    <h6 class="text-center pt-2" id="sampai-text">Sampai</h6>

                    <select class="custom-select btn btn-primary text-white" id="juz-select2">
                        @for ($i = 1; $i <= 30; $i++)
                            <option value="{{ $i }}">Juz {{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>



            <div class=" row ml-1 ">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="card-wrap">
                            <div id="no-surat" class="card-header">
                                <h4>SURAT KE - {{ isset($response['info']['surat']['id']) ? $response['info']['surat']['id'] : '-' }}</h4>
                                <!-- Hasil Dari ID no-surat akan ditampilkan di sini -->
                            </div>
                            <div id="nama-surat" class="card-body">
                                {{ isset($response['info']['surat']['nama']['id']) ? $response['info']['surat']['nama']['id'] : '-' }}
                                <!-- Hasil Dari ID nama-surat akan ditampilkan di sini -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>JUZ</h4>
                            </div>
                            <div id="no-juz" class="card-body">
                                @if(isset($response['data']['juz']))
                                    {{ $response['data']['juz'] }}
                                @else
                                    -
                                @endif
                                <!-- Hasil Dari ID no-juz akan ditampilkan di sini -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>HALAMAN</h4>
                            </div>

                            <div id="no-page" class="card-body">
                                @if(isset($response['data']['page']))
                                    {{ $response['data']['page'] }}
                                @else
                                   -
                                @endif
                                <!-- Hasil Dari ID no-page akan ditampilkan di sini -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>AYAT</h4>
                            </div>

                            <div id="no-ayah" class="card-body">
                                @if(isset($response['data']['ayah']))
                                    {{ $response['data']['ayah'] }}
                                @else
                                    -
                                @endif
                                <!-- Hasil Dari ID no-ayah akan ditampilkan di sini -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-list"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>TOTAL AYAT</h4>
                            </div>

                            <div id="no-ayat-max" class="card-body">
                                @if(isset($response['info']['surat']['ayat_max']))
                                    {{ $response['info']['surat']['ayat_max'] }}
                                @else
                                    -
                                @endif
                                <!-- Hasil Dari ID no-ayat-max akan ditampilkan di sini -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card-body ">
                <div class="summary ">
                    {{-- <div class="card">
                                <button class="btn btn-primary"
                                    id="modal-ku">Launch Modal</button>
                        </div> --}}
                        <div class="btn-group mb-4">
                            <button class="btn btn-primary" id="random-ayat-btn2">
                                <i class="fas fa-refresh"> </i>
                                Next

                            </button>
                            <button class="btn btn-primary" id="view-page-button1">
                                <i class="fas fa-book"> </i>
                                View

                            </button>
                        </div>

                        <h6 class="mb-3"><span class="text-muted">By Misyari Rasyied</span></h6>
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <a href="#">
                                    <img class="mr-3 rounded" width="50"
                                        src="{{ asset('img/products/product-1-50.png') }}" alt="product">
                                </a>
                                <div class="media-body">
                                    <div id="audio" class="media-title mr-5">
                                        <!-- Hasil Dari ID audio akan ditampilkan di sini -->
                                        @if(isset($response['data']['audio']) && !empty($response['data']['audio']))
                                            <audio controls src="{{ $response['data']['audio'] }}"></audio>
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>

                            </li>
                        </ul>
                        <div class="text-center mt-2 mb-2">
                            <h4 id="ayat-arab" class="lateef-arabic text-dark">
                                <!-- Hasil Dari ID ayat-arab akan ditampilkan di sini -->
                                @if(isset($response['data']['arab']) && !empty($response['data']['arab']))
                                    {{ $response['data']['arab'] }}
                                @else
                                    -
                                @endif
                            </h4>

                            <div id="ayat-arti" class="text-muted">
                                <!-- Hasil Dari ID ayat-arti akan ditampilkan di sini -->
                                @if(isset($response['data']['text']) && !empty($response['data']['text']))
                                    {{ $response['data']['text'] }}
                                @else
                                    -
                                @endif
                            </div>


                            <div class="btn-group mt-4">

                                <button class="btn btn-primary" id="random-ayat-btn2">
                                    <i class="fas fa-refresh"> </i>
                                    Next

                                </button>
                                <button class="btn btn-primary" id="view-page-button2">
                                    <i class="fas fa-book"> </i>
                                    View

                                </button>
                            </div>

                        </div>
                </div>

            </div>


            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="btn btn-primary btn-icon icon-left col-12 mb-4 mt-5">
                            <i class="fas fa-history"></i> Hasil Riwayat Random Ayat <span id="history-count" class="badge badge-danger">0</span>
                        </div>


                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="audio-tab3" data-toggle="tab" href="#id-audio"
                                    role="tab" aria-controls="audio" aria-selected="true">Audio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sa-tab3" data-toggle="tab" href="#id-sa" role="tab"
                                    aria-controls="sa" aria-selected="false">S+A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="jh-tab3" data-toggle="tab" href="#id-jh" role="tab"
                                    aria-controls="jh" aria-selected="false">J+H</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arabic-tab3" data-toggle="tab" href="#id-arabic" role="tab"
                                    aria-controls="arabic" aria-selected="false">Arabic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arti-tab3" data-toggle="tab" href="#id-arti" role="tab"
                                    aria-controls="arti" aria-selected="false">Arti</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="myTabContent2">
                            <div class="tab-pane fade show active" id="id-audio" role="tabpanel"
                                aria-labelledby="audio-tab3">
                                RIWAYAT AUDIO TAMPIL DISINI.
                            </div>
                            <div class="tab-pane fade" id="id-sa" role="tabpanel" aria-labelledby="sa-tab3">
                                RIWAYAT SURAT + AYAT TAMPIL DISINI.
                            </div>
                            <div class="tab-pane fade" id="id-jh" role="tabpanel" aria-labelledby="jh-tab3">
                                RIWAYAT JUZ + HAL TAMPIL DISINI
                            </div>
                            <div class="tab-pane fade" id="id-arabic" role="tabpanel" aria-labelledby="arabic-tab3">
                                RIWAYAT TEKS ARAB DISINI.
                            </div>
                            <div class="tab-pane fade" id="id-arti" role="tabpanel" aria-labelledby="arti-tab3">
                                RIWAYAT TEKS ARTI DISINI.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-group col-12">
                    <button class="btn btn-primary" id="random-ayat-btn2">
                        <i class="fas fa-refresh"> </i>
                        Next

                    </button>
                    <button class="btn btn-primary" id="view-page-button3">
                        <i class="fas fa-book"> </i>
                        View

                    </button>
                </div>
            </div>






        </section>



    </div>










@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>

@endpush


@extends('layouts.app')

@section('content')
<!--// Mini Header \\-->
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Nama Matkul</h1>
                    <!--Judul Keminatan-->
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="#">Keminatan</a></li>
                        <!--Judul Keminatan-->
                        <li>Nama Matkul</li>
                        <!--Judul Mata Kuliah-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Mini Header \\-->

<!--// Main Content \\-->
<div class="wm-main-content">
    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                <aside class="col-md-2"></aside>
                <div class="col-md-12">
                    <div class="wm-courses-getting-started">
                        <div class="wm-title-full">
                            <h2>Judul Materi</h2>
                            <!--Judul Mata Kuliah-->
                        </div>
                        <div class="wm-courses-started">
                            <span>Materi</span>
                            <ul class="wm-courses-started-listing">
                                <li>
                                    <a href="#" class="wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6>
                                            <a href="#"
                                                >1.1 Judul Materi</a
                                            >
                                        </h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >16/05/2016 - 17/06/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="/preview">Preview</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6>
                                            <a href="#">2. Judul Materi</a>
                                        </h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >13/05/2016 - 10/06/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="/preview">Preview</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class=" wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6>
                                            <a href="#"
                                                >3. Judul Materi</a
                                            >
                                        </h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >11/05/2016 - 11/06/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="/preview">Preview</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6>
                                            <a href="#"
                                                >4.Materi</a
                                            >
                                        </h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >9/05/2016 - 15/06/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a class="previe" href="#">Preview</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="wm-courses-started">
                            <span>Latihan Soal</span>
                            <ul class="wm-courses-started-listing">
                                <li>
                                    <a href="#" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6>
                                            <a href="#"
                                                >Ujian Tengah Semester (UTS))</a
                                            >
                                        </h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >16/05/2016 - 15/06/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="#">Preview</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6>
                                            <a href="#"
                                                >Ujian Akhir Semester (UAS)</a
                                            >
                                        </h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >13/05/2016 - 10/06/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <a href="#">Preview</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Main Content \\-->
@endsection

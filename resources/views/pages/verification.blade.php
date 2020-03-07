@extends('layouts.app') @section('content') @if (!Auth::guest() &&
Auth::user()->is_admin)
<!--// Mini Header \\-->
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Our Courses</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li>Single Course</li>
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
                            <h2>verifikasi</h2>
                        </div>
                        <div class="wm-courses-started">
                            <span>Materi</span>
                            <ul class="wm-courses-started-listing">
                                <li>
                                    <a href="#" class="wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">test.pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Diupload Tanggal:
                                                16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">test.pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Diupload Tanggal:
                                                16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">test.pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Diupload Tanggal:
                                                16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-interface"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">test.pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Diupload Tanggal:
                                                16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
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
                                        <h6><a href="#">Latsoal1.pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Diupload Tanggal:
                                                16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">Latsoal1. pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Diupload Tanggal:
                                                16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">Latsoal1. pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Diupload Tanggal:
                                                16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="wmicon-pen"></a>
                                    <div class="wm-courses-started-text">
                                        <h6><a href="#">Latsoal1. pdf</a></h6>
                                        <span
                                            ><a
                                                href="#"
                                                class="wmicon-time2"
                                            ></a
                                            ><time datetime="2017-02-14"
                                                >Tanggal: 16/05/2016</time
                                            ></span
                                        >
                                    </div>
                                    <div class="wm-courses-preview">
                                        <button
                                            type="button"
                                            class="btn btn-success"
                                        >
                                            Verifikasi
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-danger"
                                        >
                                            Tolak
                                        </button>
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
@else
<div class="text-center">
    <p>Ngapain gan?</p>
</div>
@endif
@endsection

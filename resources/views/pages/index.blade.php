@extends('layouts.app')

@section('content')
<!--// Main Banner \\-->
<div class="wm-main-banner">
    <div class="wm-banner-one">
        <div class="wm-banner-one-for">
            <div class="wm-banner-one-for-layer">
                <img src="extra-images/banner-view1-1.jpg" alt="" />
            </div>
            <div class="wm-banner-one-for-layer">
                <img src="extra-images/banner-view1-2.jpg" alt="" />
            </div>
            <div class="wm-banner-one-for-layer">
                <img src="extra-images/banner-view1-3.jpg" alt="" />
            </div>
        </div>
        <div class="wm-banner-one-nav">
            <div class="wm-banner-one-nav-layer">
                <h1>Akses Materi</h1>
                <p>
                    Seenau menyediakan akses terhadap materi perkuliahan teknik
                    informatika Universitas Brawijaya
                </p>
                <a href="#" class="wm-banner-btn">learn more</a>
            </div>
            <div class="wm-banner-one-nav-layer">
                <h1>Bank Soal</h1>
                <p>
                    Kumpulan soal soal tugas, kuis, uts dan uas program studi
                    Teknik Informatika Universitas Brawijaya dari tahun ke tahun
                </p>
                <a href="#" class="wm-banner-btn">know more</a>
            </div>
        </div>
    </div>
</div>
<!--// Main Banner \\-->

<!--// Main Content \\-->
<div class="wm-main-content">
    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4-ofsite-10 text-center">
                    <div class="wm-search-course">
                        <h3 class="wm-short-title wm-color">Cari Materi</h3>
                        <!--<p>Isikan form berikut:</p>-->
                        <form>
                            <ul>
                                <li>
                                    <input
                                        type="text"
                                        value="Nama Mata Kuliah"
                                        onblur="if(this.value == '') { this.value ='Course Name'; }"
                                        onfocus="if(this.value =='Course Name') { this.value = ''; }"
                                    />
                                    <i class="wmicon-search"></i>
                                </li>

                                <li>
                                    <input
                                        type="submit"
                                        value="Search course"
                                    />
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <!-- <div class="col-md-8">
                        <div class="wm-service wm-box-service">
                            <ul>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-suitcase"></i>
                                        <h6><a href="#">Business</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-money"></i>
                                        <h6><a href="#">Economics</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-school"></i>
                                        <h6><a href="#">Math</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-science"></i>
                                        <h6><a href="#">Science</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-computer"></i>
                                        <h6><a href="#">Computing</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-technology3"></i>
                                        <h6><a href="#">Web Design</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-web3"></i>
                                        <h6><a href="#">Development</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="wm-box-service-wrap wm-bgcolor">
                                        <i class="wmicon-shape"></i>
                                        <h6><a href="#">Biology</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <!--// Main Section \\-->
</div>
<!--// Main Content \\-->
@endsection
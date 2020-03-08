@extends('layouts.app')

{{-- Menghilangkan button know more pada Akses Materi dan Bank soal --}}

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
                {{-- <a href="#" class="wm-banner-btn">learn more</a> --}}
            </div>
            <div class="wm-banner-one-nav-layer">
                <h1>Bank Soal</h1>
                <p>
                    Kumpulan soal soal tugas, kuis, uts dan uas program studi
                    Teknik Informatika Universitas Brawijaya dari tahun ke tahun
                </p>
                {{-- <a href="#" class="wm-banner-btn">know more</a> --}}
            </div>
        </div>
    </div>
</div>
<!--// Main Banner \\-->

{{-- Bagian Search dihilangkan karena belum berfungsi dengan semestinya --}}

<!--// Main Content \\-->
{{-- <div class="wm-main-content">
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
                                        placeholder="Nama Mata Kuliah"
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
            </div>
        </div>
    </div>
    <!--// Main Section \\-->
</div> --}}
<!--// Main Content \\-->
@endsection
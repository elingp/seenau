@extends('layouts.app')

@section('content')
<!--// Mini Header \\-->
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Logika Fuzzy</h1> <!--Judul Keminatan-->
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="#">Komputasi Cerdas</a></li> <!--Judul Keminatan-->
                        <li>Logika Fuzzy</li>                     <!--Judul Mata Kuliah-->
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
                <aside class="col-md-2">
                    <!--<div class="widget widget_categories">
								<div class="wm-widget-title">
									<h2>Categories</h2>
								</div>
								<ul>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Classical Archaeology </a></li>
									<li><a href="#">Classics & English</a></li>
									<li><a href="#">Materials Science</a></li>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Physics & Philosophy</a></li>
									<li><a href="#">Theology & Religion</a></li>
									<li><a href="#">Law</a></li>
                                    <li><a href="#">Chemistry</a></li>
                                    <li><a href="#">Classical Archaeology </a></li>
                                    <li><a href="#">Classics & English</a></li>
                                    <li><a href="#">Materials Science</a></li>
                                    <li><a href="#">Mathematics</a></li>
                                    <li><a href="#">Physics & Philosophy</a></li>
                                    <li><a href="#">Theology & Religion</a></li>
                                    <li><a href="#">Law</a></li>
								</ul>
							</div>-->
                </aside>
                <div class="col-md-12">
                    <div class="wm-courses-getting-started">
                        <div class="wm-title-full">
                            <h2>Logika Fuzzy</h2> <!--Judul Mata Kuliah-->
                        </div>
                        <ul>
                        <li><div class="wm-courses-started-preview">
                        <input type="hidden" id="pdf-doc" value="pdf.pdf"></input> <!--Value dari back end-->
                        <span class="page-info">
                        Page <span id="page-num"></span> of <span id="page-count"></span>
                        </span>
                        </li>
                        <li>
                        <canvas id="pdf-render" ></canvas>
                        </li>
                        <li>
                        <button class="btn" id="prev-page">
                        Prev Page
                        </button>
                        <button class="btn" id="next-page">
                        Next Page
                        </button>
                        <div class="wm-courses-preview">
                                        <a href="#">Download</a>
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


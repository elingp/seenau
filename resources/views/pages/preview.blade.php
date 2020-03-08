@extends('layouts.app')

@section('content')
<!--// Mini Header \\-->
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Nama Matkul</h1> <!--Judul Keminatan-->
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li><a href="#">Keminatan</a></li> <!--Judul Keminatan-->
                        <li>Nama Matkul </li>                     <!--Judul Mata Kuliah-->
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
                </aside>
                <div class="col-md-12">
                    <div class="wm-courses-getting-started">
                        <div class="wm-title-full">
                            <h2>Nama Matkul</h2> <!--Judul Mata Kuliah-->
                        </div>
                        <ul>
                        <li><div class="wm-courses-started-preview">
                    @foreach ($topics as $topic) 
                    
                     
                     <embed src={{$topic->path}}  width="1100px" height="800px" />
                     @endforeach
                        </li>
                        </ul>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--// Main Content \\-->
@endsection

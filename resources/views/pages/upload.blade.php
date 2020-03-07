@extends('layouts.app')

@section('content')
<!--// Main Content \\-->
<div class="wm-main-content">
    <!--// Main Section \\-->
    <div class="wm-main-section">
        <div class="container">
            <div class="row">
                <div class="upload-form-center">
                    <div class="col-md-8 text-center">
                        <div class="wm-search-course">
                            <h3 class="wm-short-title wm-color">UPLOAD</h3>
                            <p>
                                Silahkan mengunggah materi atau latihan soal
                                pada form di bawah:
                            </p>
                            <form>
                                <ul>
                                    <li>
                                        <input
                                            type="text"
                                            placeholder="Nama bab"
                                        />
                                    </li>
                                    <li>
                                        <div class="wm-apply-select">
                                            <select placeholder="Semester">
                                                <option>Semester 1</option>
                                                <option>Semester 2</option>
                                                <option>Semester 3</option>
                                                <option>Semester 4</option>
                                                <option>Semester 5</option>
                                                <option>Semester 6</option>
                                                <option>Semester 7</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-apply-select">
                                            <select>
                                                <option>Materi</option>
                                                <option>Latihan Soal</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <input
                                            type="file"
                                            id="file"
                                            name="file"
                                            accept="document/pdf, document/pptx, document/docx"
                                        />
                                    </li>
                                    <li>
                                        <input type="submit" value="Submit" />
                                    </li>
                                </ul>
                            </form>
                        </div>
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
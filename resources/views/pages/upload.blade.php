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
            </div>
        </div>
    </div>
    <!--// Main Section \\-->
</div>
<!--// Main Content \\-->
@endsection

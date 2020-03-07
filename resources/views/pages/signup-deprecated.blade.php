@extends('layouts.app')

@section('content')
<!--// Main Content \\-->
<div class="wm-main-content">

<!--// Main Section \\-->
<div class="wm-main-section">
    <div class="container">
        <div class="row">
            <div class="upload-form-center">
                <div class="col-md-6 text-center">
                    <div class="wm-search-course">
                        <h3 class="wm-short-title wm-color">Sign Up</h3>
                        <p>Silahkan isikan data berikut untuk mendaftar :</p>
                        <form>
                            <ul>
                                
                                <li> <input type="text" placeholder="Nama" > </li>
                                <li> <input type="text" placeholder="Nim" > </li>
                                
                                <li>
                                    <input type="password" placeholder="Password" >
                                </li>
                            
                                <li> <input type="submit" value="Submit"> </li>
                            </ul>
                        </form>
                        <p>Already a member? <a href="/login">Sign-in Here!</a></p>
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

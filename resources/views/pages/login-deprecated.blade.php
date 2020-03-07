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
                        <h3 class="wm-short-title wm-color">Log In</h3>
                        <p>Silahkan masukkan nim dan password untuk login :</p>
                        <form>
                            <ul>
                                
                                <li> <input type="text" placeholder="Nim" > </li>
                                
                                <li>
                                    <input type="password" placeholder="Password" >
                                </li>
                            
                                <li> <input type="submit" value="Submit"> </li>
                            </ul>
                        </form>
                        <p>Not a member yet? <a href="/signup"> Sign-up Now!!</a></p>
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

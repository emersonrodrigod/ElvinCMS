@extends('layouts.app')
@section('content')

<app-header background="/app/img/home-bg.jpg" heading="CMS for Laravel" subheading="It's open source & free to use"></app-header>

 <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            You may find out what we build by simply login
                        </h2>
                        <h3 class="post-subtitle">
                            Just click to login button and use ElvinCMS with demo account. If you like our approach and hire us please contact with us.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Gunce Bektas</a> on April 02, 2017</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            This web site which we labeled as App is a dummy trial of ElvinCMS. You may create whatever you want.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Tekin Erten</a> on April 02, 2017</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            ElvinCMS is totally free and ready to use. We are looking to hear from you.
                        </h2>
                        <h3 class="post-subtitle">
                            Please inform us about bugs or new features which you want to see in ElvinCMS. 
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Tekin Erten</a> on April 01, 2017</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Elvin, the name of the CMS, is coming from the name of my daughter. So this project is dedicated to her.
                        </h2>
                        <h3 class="post-subtitle">
                            Elvin is also the name of a flower which can be found in heaven.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Tekin Erten</a> on April 01, 2017</p>
                </div>
                <!-- Pager 
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
@endsection
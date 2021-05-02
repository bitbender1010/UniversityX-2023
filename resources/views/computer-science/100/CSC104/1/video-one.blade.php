@extends('layouts.student100')
@section('content')
               <!--back btn-->
               <div class="home-back-btn">
               <a href="{{ asset('computer-science/100/CSC104/1/coursedetails') }}"> <img src="{{ asset('images/back.svg')}}" class="course-back"/> </a>
               <a href="#"> <img src="{{ asset('images/megaphone.svg')}}" class="course-announcement"/> </a>
               <div class="announce-num">1</div>
               </div>
               
                       <!--list of courses-->
                       <div class="list-of-courses">
                           <div class="loc">Courses > Software Workshop (CSC 104) > Programming language; Basic elements, Data types, Control structures and Program design > Introducton to computer and the FORTRAN language </div>
                           <div class="loc-line"></div>
                       </div>

                <!--files-->
        <div class="videocontent-cover">
                <div class="video-container">
                <!-- <video src="{{ asset('videos/video.mp4')}}" controls> -->
                <iframe src="https://www.youtube.com/embed/OrreU9vl_V8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

        <!--video title-->
        <div class="video-title">Introducton to computer and the FORTRAN language</div>
        <!--video description-->
        <div style="margin-bottom: 10px; font-size: 18px; color: gray;"> Chapter 1: Introducton to computer and the FORTRAN language by Dr Toyin.
        </div>
        <!--show more-->
        <!-- <div class="show-more"> <span>SHOW MORE</span> <img src="../images/arrows.svg" class="show-more-img down-direction"/> </div> -->
        <!--other video details-->
        <!-- <div class="video-sub-details"> 
            <div class="no-views">500 views</div>
            <div class="round-dot"></div>
            <div class="date-posted">2 months ago</div>
        </div> -->
        <!--divider-->
        <div class="video-divider"> </div>
        <!--user profile details-->
        <div class="vup-cover">
            <div class="video-user-profile"> <img src="{{ asset('images/lasu.png')}}" /> </div>
            <div class="profile-name-vid"> <span class="marg-b1">Toyin Enikuomehin</span> <span class="marg-b2">Lagos State University</span> </div>
        </div>
</div>
<style>
    /* body {
        background: red;
    } */

    .nav-1 {
    background-color: #D2C1FF!important;
    border-right: none;
    border-left: 5px solid #6534E2;
    color: #6534E2;
    width: calc(100% - 5px);
    }

    .nav-1 .svg-hover {
    fill: #6534E2;
}

    .nav-1 .nav-text {
    color: #6534E2;
    font-weight: bold;
}

@media (max-width: 900px) {
    .nav-1 {
        width: -webkit-fill-available;
    }
}

</style>
@endsection
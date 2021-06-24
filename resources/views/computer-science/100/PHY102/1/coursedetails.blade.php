@extends('layouts.student100')
@section('content')
               <!--back btn-->
               <div class="home-back-btn">
               <a href="{{ asset('computer-science/100/CSC104/coursecontent') }}"> <img src="{{ asset('images/back.svg')}}" class="course-back"/> </a>
               <a href="#"> <img src="{{ asset('images/megaphone.svg')}}" class="course-announcement"/> </a>
               <div class="announce-num">1</div>
               </div>
               
                       <!--list of courses-->
                       <div class="list-of-courses">
                           <div class="loc">Courses > Software Workshop (CSC 104) > Programming language; Basic elements, Data types, Control structures and Program design </div>
                           <div class="loc-line"></div>
                       </div>

                <!--files-->   
                <a href="{{ asset('computer-science/100/CSC104/1/video-one')}}">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/play.svg')}}"/> </div>
                           <div class="course-title ct-sub">Introducton to computer and the FORTRAN language</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>


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
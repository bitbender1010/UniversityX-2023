@extends('layouts.student100')
@section('content')
               <!--back btn-->
               <div class="home-back-btn">
               <a href="{{ asset('computer-science/100/dashboard') }}"> <img src="{{ asset('images/back.svg')}}" class="course-back"/> </a>
               <a href="#"> <img src="{{ asset('images/megaphone.svg')}}" class="course-announcement"/> </a>
               <div class="announce-num">1</div>
               </div>
               
                       <!--list of courses-->
                       <div class="list-of-courses">
                           <div class="loc">Courses > Software Workshop (CSC 104)</div>
                           <div class="loc-line"></div>
                       </div>

                <!--1-->
                <a href="{{ asset('computer-science/100/CSC104/1/coursedetails') }}" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1</div>
                           <div class="course-title ct-sub">Promgramming language; Basic elements, Data types, Control structures and Program design.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--2-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">2</div>
                           <div class="course-title ct-sub">Basic I/O cocepts; Arrays, Procedures, Functions and structured programming.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>
                
                <!--3-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3</div>
                           <div class="course-title ct-sub">Modules; Dynamic Memory Allocation.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--4-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">4</div>
                           <div class="course-title ct-sub">Programming exercises using the current verson of FORTRAN language with emphasis on science application problems. </div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                        </div>
                </div>



                <!--Resources-->
                <div class="inner-resources"> Resources: </div>
                <!--files-->

                
                <a href="{{ asset('files/CSC/100/Fortran-95-slides-by-Anthony.ppt')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/ppt.svg')}}"/> </div>
                           <div class="course-title ct-sub">Fortran 95 slides by Anthony T. Chronopoulos</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Fortran-for-Scientists-and-Engineers-by-SJ-Chapman.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Book: Fortran for Scientists and Engineers by S. J Chapman</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Introductions-to-programming-in-FORTRAN-90.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Book: Introduction to programming in FORTRAN 90</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Introduction-to-Computer-Programming-Using-Fortran-95.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Introduction to Computer Programming Using Fortran 95</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Introduction-to-Programming-using-Fortran-95-2003-2008.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Introduction to Programming using Fortran 95/2003/2008 </div>
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
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
                           <div class="loc">Courses > Principles of programming launguages 1 (CSC 132) </div>
                           <div class="loc-line"></div>
                       </div>

                <!--1-->
                <a href="{{ asset('computer-science/100/CSC104/1/coursedetails') }}" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1</div>
                           <div class="course-title ct-sub"> Overview of programming languages: History of programming languages, Brief survey of programming paradigms.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--1b-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1a</div>
                           <div class="course-title ct-sub">Procedural languages, Object oriented languages, Functional languages, Declarative non-algorithmic langugages, Scripting languages.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>
                
                <!--2-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">2</div>
                           <div class="course-title ct-sub"> Study of the features of a common and popular programming langugage.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--3-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3</div>
                           <div class="course-title ct-sub"> Introduction to language translation: Comparison of interpreters and compilers.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                        </div>
                </div>


                <!--Resources-->
                <div class="inner-resources"> Resources: </div>
                <!--files-->

                
                <a href="{{ asset('files/CSC/100/Computer-Programming-Tutorial-CSC-132.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Computer Programming Tutorial (CSC 132) </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/algorithm-book-by-dasgupta.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Book: Algorithm - Dasgupta, C. H. Papadimitriou, and U. V. Vazirani </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Core-PHP-Programming-by-Leon-Atkinson.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Book: Core PHP Programming by Leon Atkinson  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Eloquent-Javascript.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Book: Eloquent Javascript  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/csc112-past-question-MGM.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> CSC 112 - Past Question (MGM)  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/CH1-Overview-of-Computers-and-Logic.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Chapter 1: Overview of Computers and Logic  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/CH2-Programming-Languages.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Chapter 2: Programming Languages  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/CH3-Algorithms.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Chapter 3: Algorithms  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/CH4-Variables-and-Data-Types.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Chapter 4: Variables and Data Types  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/CH5-Operators.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Chapter 5: Operators </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/CH6-Branching.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Chapter 6: Branching </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/CH7-Loops.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Chapter 7: Loops </div>
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
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
                           <div class="loc">Courses > Principles of computer organization (CSC 112)</div>
                           <div class="loc-line"></div>
                       </div>

                <!--1-->
                <a href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1</div>
                           <div class="course-title ct-sub">
                           Basic concepts of simple machine architecture, major components, functional relationship between the components of the procesing units (controls, memory and ALU) stored program concepts, representaton of instruction in computer memory, addressing, instructon cycle.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--2-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">2</div>
                           <div class="course-title ct-sub">Computer design: organization, design operaton and programming assemblers, program loaders and relocation.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>
                
                <!--3-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3</div>
                           <div class="course-title ct-sub">Levels of machine design; gates - register and processor levels.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--4-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">4</div>
                           <div class="course-title ct-sub">CPU design, instruction sets, von Neumann architecture, multiplcation and division algorithms and implementation, floating point processors, parallelism, multiprocessor etc.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--5-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">5</div>
                           <div class="course-title ct-sub">Control unit design, hardwired and micro-programmed control.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--6-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">6</div>
                           <div class="course-title ct-sub"> Memory design, hierarchical memory design, cache, assocative and inter leaved memory.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                        </div>
                </div>


                <!--Resources-->
                <div class="inner-resources"> Resources: </div>
                <!--files-->

                <a href="{{ asset('files/CSC/100/CSC-112-Course-Outline-(Principles-of-Computer-Organization).docx')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">CSC 112 Course Outline (Principles of Computer Organization)</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>
                
                <a href="{{ asset('files/CSC/100/Computer-Organization-and-Architecture-Designing-for-Performance.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Computer Organization and Architecture Designing for Performance</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Computer-System-Architecture-Morris-Mano.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Computer System Architecture by Morris Mano</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Computer-Systems-Digital Design-Fundamentals-of-Computer-Architecture-and-Assembly-Language.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Computer Systems: Digital Design, Fundamentals of Computer Architecture and Assembly Language</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Computer-fundamentals-by-Pradeep-Bhatia.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Computer fundamentals by Pradeep Bhatia</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Lecture-3-Processor-Datapath-and-Control.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> (Lecture 3) Processor: Datapath and Control </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/CSC/100/Instruction-Set-Architecture.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Instruction Set Architecture </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a> 

                <a href="{{ asset('files/CSC/100/LT3-Von-Neumann-Architecture-(Part I).pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Lecture 3: Von Neumann Architecture (Part I)  </div>
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
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
                           <div class="loc">Courses > Electricity and magnetism 1 (PHY 104) </div>
                           <div class="loc-line"></div>
                       </div>

                <!--1-->
                <a href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1</div>
                           <div class="course-title ct-sub">Vector algebra; electric force and electric field, electric flux and Gauss's law.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--1a-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1a</div>
                           <div class="course-title ct-sub">Electric potentials; capacitance and dielectric; ohm's law and d.c circuits.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>
                
                <!--1b-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">1b</div>
                           <div class="course-title ct-sub">Kirchoff law.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--2-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">2</div>
                           <div class="course-title ct-sub">Measurement of resistant and potential difference.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--3-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3</div>
                           <div class="course-title ct-sub">The magnetic field, lorentz force; Biot-Savart ansd Amphere's law.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--4-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">4</div>
                           <div class="course-title ct-sub">Magnetic field due to conductors; Faraday's law of electromagnetic induction.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

          
                <!--5-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">5</div>
                           <div class="course-title ct-sub">Modern physics.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                        </div>
                </div>

                <!--Resources-->
                <div class="inner-resources"> Resources: </div>
                <!--files-->

                
                <a href="{{ asset('files/PHY/100/electrical-circuit-theory-and-technology-by-john-bird.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Electrical Circuit Theory and Technology </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Electricity-And-Magnetism.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Electricity And Magnetism </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/md3-electricity-and-magnetic-field.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Module 3: Electricity and magnetic field </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Physics-Principles-with-Applications.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Physics Principles with Applications </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/electric-current-textbook-excerpts.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Electric Current - Textbook Excerpts </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 104 compiled by Olakunle 1.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 104 compiled by Olakunle 1 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 104 compiled by Olakunle 2.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 104 compiled by Olakunle 2 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 104 compiled by Olakunle 3.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 104 compiled by Olakunle 3 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 104 compiled by Olakunle 4.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 104 compiled by Olakunle 4 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 104 compiled by Olakunle 5.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 104 compiled by Olakunle 5 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 104 compiled by Olakunle 6.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 104 compiled by Olakunle 6 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Electric Field.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Electric Field </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Vector Algebra.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Vector Algebra </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Kinetic theory of gases.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Kinetic Theory of Gases </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Electricity, Magnetism and Modern Physics.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Electricity, Magnetism and Modern Physics </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Capacitors and Capacitance.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Capacitors and Capacitance </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Resitance Variation.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Resitance Variation </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Mechanics Quiz Study Guide.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Mechanics: Quiz Study Guide </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Resitance Variation.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Resitance Variation </div>
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
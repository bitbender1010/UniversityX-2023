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
                           <div class="loc">Courses > Basic Optics and Sounds (PHY 102) </div>
                           <div class="loc-line"></div>
                       </div>

                <!--1-->
                <a href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1</div>
                           <div class="course-title ct-sub">Geomtrical optics: reflection of light at plane and curved surface; refraction and dispersion through prisms.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--1a-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1a</div>
                           <div class="course-title ct-sub">Thin lens and its applicaton in opticals instruments; aberration in thin lenses; vision and defects.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>
                
                <!--2-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">2</div>
                           <div class="course-title ct-sub"> Physical optics: wave nature of light; diffraction, interference and polarization of light; spectrometer, photometry.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--3-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3</div>
                           <div class="course-title ct-sub">Types of waves.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--3a-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3a</div>
                           <div class="course-title ct-sub">Production and propagation of sound waves; resonance.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--3b-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">3b</div>
                           <div class="course-title ct-sub">Doppler effect; other properties of sound waves.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                        </div>
                </div>


                <!--Resources-->
                <div class="inner-resources"> Resources: </div>
                <!--files-->

                <a href="{{ asset('files/PHY/100/College Physics - Frederick J Bueche.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">College Physics - Frederick J Bueche</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>
                
                <a href="{{ asset('files/PHY/100/Complete-PHY102-Note.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Complete PHY 102 note</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Basic-wave.docx')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Basic wave</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Interference.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub">Interference</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/lens.ppt')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/ppt.svg')}}"/> </div>
                           <div class="course-title ct-sub">Lens</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 1.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 1 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 2.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 2 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 3.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 3 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 4.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 4 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 5.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 5 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 6.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 6 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 7.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 7 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 8.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 8 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 9.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 9 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 10.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 10 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 compiled by Olakunle 11.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 compiled by Olakunle 11 </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 LECTURE SLIDE.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 Lecture Slides</div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 Light (Ogungbe - Part 1).pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 Light (Ogungbe - Part 1) </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/PHY 102 Light (Ogungbe - Part 2).pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> PHY 102 Light (Ogungbe - Part 2) </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Dispersion, Spectra, Chromatic Aberration.docx')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Dispersion, Spectra, Chromatic Aberration  </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Refraction Of Light.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Refraction Of Light </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Polarization.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Polarization </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>
                
                <a href="{{ asset('files/PHY/100/Reflection of light at Plane surface.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Reflection of light at Plane surface </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Beginning Physics 2.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Beginning Physics 2 (Waves, Electromagnetism, Optics, and Modern Physics) </div>
                           <!-- <div class="c-info"> </div> -->
                       </div>
                </a>

                <a href="{{ asset('files/PHY/100/Types of Waves.pdf')}}" download target="_blank">
                       <div class="course-card sub-margin">
                           <!--video icon-->
                          <div class="sm-sub-icon"> <img src="{{ asset('images/pdf.svg')}}"/> </div>
                           <div class="course-title ct-sub"> Types of Waves </div>
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
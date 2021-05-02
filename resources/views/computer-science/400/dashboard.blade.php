@extends('layouts.student400')
@section('content')
                <!--school + department-->
                <div class="schl-dept">
                    <div class="school">School: <span>Lagos State University Ojo</span></div>
                    <div class="department">Department: <span>Computer Science </span></div>
                </div>
        
                <!--list of courses-->
                <div class="list-of-courses">
                    <div class="loc">List of courses</div>
                    <div class="loc-line"></div>
                </div>
                
                <!--link: {{ asset('student/coursedetails') }} -->
                <!--course cards-->
                <div class="course-card">
                    <a href="#" class="course-title"> Pattern Recognition and Computer Vision (CSC 418)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>
                <!--2-->
                <div class="course-card">
                    <a href="#" class="course-title"> Introduction to Computer Security (CSC 420)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>
                
                <!--3-->
                <div class="course-card">
                    <a href="#" class="course-title"> Expert Systems and Knowledge Engineering (CSC 424)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--4-->
                <div class="course-card">
                    <a href="#" class="course-title"> Further Statistical Processing (CSC 426)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--5-->
                <div class="course-card">
                    <a href="#" class="course-title"> Computer Graphics and Vsual Computing (CSC 428)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--6-->
                <div class="course-card">
                    <a href="#" class="course-title"> Computer Network and Data Communication (CSC 438)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--7-->
                <div class="course-card">
                    <a href="#" class="course-title"> Principles of programming language 2 (CSC 432)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--8-->
                <div class="course-card">
                    <a href="#" class="course-title"> Introductionto PHP and MYSQL (CSC 442)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--9-->
                <div class="course-card">
                    <a href="#" class="course-title"> Robotics (CSC 452)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--10-->
                <div class="course-card">
                    <a href="#" class="course-title"> Digital Image Processing (CSC 454)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--11-->
                <div class="course-card">
                    <a href="#" class="course-title"> Final Year Project (CSC 498)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

                <!--12-->
                <div class="course-card">
                    <a href="#" class="course-title"> Entrepreneurship 2 (CSC 302)
                    </a>
                    <div class="c-info"> 
                    <img src="{{ asset('images/info.svg')}}" class="info-img info-img-pad"/>  
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                    </a> 
                    </div>
                </div>

<style>
    /* body {
        background: green;
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

/**browse */
    /* .nav-2 {
    background-color: #D2C1FF;
    border-right: none;
    border-left: 5px solid #6534E2;
    color: #6534E2;
    width: calc(100% - 5px);
    }

    .nav-2 .svg-hover {
    fill: #6534E2;
}

    .nav-2 .nav-text {
    color: #6534E2;
    font-weight: bold;
    }

    @media (max-width: 900px) {
    .nav-2 {
        width: -webkit-fill-available;
    }
} */
</style>
@endsection
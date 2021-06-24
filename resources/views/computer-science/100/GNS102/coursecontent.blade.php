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
                           <div class="loc">Courses > Use of English (GNS 102) </div>
                           <div class="loc-line"></div>
                       </div>


                <!--1-->
                <a href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">1</div>
                           <div class="course-title ct-sub">The word, the clause and the sentence.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--2-->
                <a href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">2</div>
                           <div class="course-title ct-sub">Word classes: Verb, Nouns, Adjectivess.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </a>

                <!--3-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number-->
                           <div class="num-tab num-active">3</div>
                           <div class="course-title ct-sub">Determiners, prepositions and conjuctions.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>
                
                <!--4-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">4</div>
                           <div class="course-title ct-sub">Reading and comprehension.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--5-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">5</div>
                           <div class="course-title ct-sub">Summary writing.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           <div class="long-line"> </div>
                        </div>
                </div>

                <!--6-->
                <div href="#" class="cc-1">
                       <div class="course-card">
                           <!--number--> 
                           <div class="num-tab num-active">6</div>
                           <div class="course-title ct-sub">Note and Note making.</div>
                           <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
                           
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
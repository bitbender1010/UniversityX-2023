<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'UniversityX') }}</title> -->
    <title>UniversityX</title>

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">

    <style>
    .cc-1 .course-card .ct-sub {
        width: calc(100% - 60px)!important;
        /* background: red!important; */
    }

    .cc-1 .course-card .right-img {
        transform: rotateZ(270deg);
    }

    .parent-list-course {
        padding: 0px 5vw;
        margin-top: 20px;
    }

    /*level child*/
    .level-child .course-card .ct-sub {
        width: -webkit-fill-available!important;
    }

    .level-child {
        margin-left: 5vw;
        display: none;
    }

    .search-courses {
        background: red;
        height: 20px;
        border-radius: 2px;
        outline: none;
        border: none;
    }

    .search-navbar {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        display: none;
    }

    .nav {
        display: flex;
        justify-content: space-between;
        padding: 0px 5vw;
        width: -webkit-fill-available;
        background: #F2F2F2;
    }

    .logo-cover {
    padding: 0px calc(5vw - 25px);
}

    .logo-container {
    background-color: transparent!important;
}

    .ld-logo-cover {
    height: auto;
    width: 200px;
    }


    .ld-logo-cover img {
    width: 100%;
    height: 100%;
    }

    .cc-1 > .course-card {
    padding-left: 2vw!important;
    padding-right: 4vw!important;
}

    </style>

    <!---JS--->
    <script src="{{ asset('js/landing.js') }}" defer></script>
</head>
<body class="antialiased">
    <nav class="nav">
        <!--Logo-->
        <div class="ld-logo-cover"> <img src="{{ asset('images/logo.png')}}"/> </div>
        <!--Search-->
        <div class="search-navbar">
        <input type="text" class="search-courses"/>
        <div> <img src="{{ asset('images/help.svg') }}"/> </div>
        </div>
    </nav>

<div class="parent-list-course">
    <!--List and list content-->
    <!--list of courses-->
    <div class="list-of-courses">
    <div class="loc">List of departments</div>
    <div class="loc-line"></div>
    </div>
    
    <!--show courses-->
    <div class="cc-parent-level">
    <!--1-->
    <div href="#" class="cc-1 cc-parent">
        <div class="course-card">
        <div class="course-title ct-sub">Computer science</div>
        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
        </div>
    </div>
    <!--levels-children-->
    <div class="level-child">
    <a href="{{ asset('computer-science/100/dashboard') }}" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">100 Level</div>
        </div>
    </a>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">200 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">300 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">400 Level</div>
        </div>
    </div>
    </div>
    <!--end od parent div-->
    </div>
    <!--2--->
    <div class="cc-parent-level">
    <div href="#" class="cc-1 cc-parent">
        <div class="course-card">
        <div class="course-title ct-sub">Mathematics</div>
        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
        </div>
    </div>
    <!--levels-children-->
    <div class="level-child">
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">100 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">200 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">300 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">400 Level</div>
        </div>
    </div>
    </div>
    <!--end od parent div-->
    </div>
    <!------3----->
        <!--2--->
        <div class="cc-parent-level">
    <div href="#" class="cc-1 cc-parent">
        <div class="course-card">
        <div class="course-title ct-sub">Physics</div>
        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="right-img" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><polygon points="6.23,20.23 8,22 18,12 8,2 6.23,3.77 14.46,12"/></g></svg>
        </div>
    </div>
    <!--levels-children-->
    <div class="level-child">
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">100 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">200 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">300 Level</div>
        </div>
    </div>
    <!--levels-children-->
    <div href="#" class="cc-1">
        <div class="course-card">
        <div class="course-title ct-sub">400 Level</div>
        </div>
    </div>
    </div>
    <!--end od parent div-->
    </div>
    <!--end-->
</div>
</body>
</html>

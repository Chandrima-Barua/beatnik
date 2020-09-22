<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Beatnik') }}</title>
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script
        src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'>
    </script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

    <style>
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }
    }

    body {
        padding-bottom: 40px;
        color: #5a5a5a;
    }

    .overlay {
        color: #fff;
        position: absolute;
        z-index: 12;
        top: 378px;
        left: 19%;
        width: 61%;
        text-align: center;
    }


    /* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }



    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 60px;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        z-index: 1;
    }

    /* Declare heights because of positioning of img element */
    .carousel .item {
        height: 400px;
        background-color: #555;
    }

    .carousel img {
        position: absolute;
        top: 0;
        left: 0;
        min-height: 400px;
    }




    @media (min-width: 768px) {

        /* Navbar positioning foo */
        .navbar-wrapper {
            /* margin-top: 20px; */
            margin-bottom: -90px;
            /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
        }

        /* The navbar becomes detached from the top, so we round the corners */
        .navbar-wrapper .navbar {
            border-radius: 4px;
        }

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 20px;
            font-size: 21px;
            line-height: 1.4;
        }
    }

    .navbar-inverse,
    .navbar-brand {
        background-color: white;
        border-color: white;
    }

    .navbar-inverse .navbar-nav>li>a {
        color: #333;
    }

    }

    .navbar-inverse,
    .navbar-brand {
        background-color: white;
        border-color: white;
    }

    .navbar-inverse .leftnav>li>a {
        color: #333;
    }

    .navbar-inverse .leftnav>.active>a,
    .navbar-inverse .leftnav>.active>a:hover,
    .navbar-inverse .leftnav>.active>a:focus {
        color: #333;
        background-color: white;
    }

    .navbar-inverse .leftnav>li>a:hover {
        font-size: 20px;
        font-size-adjust: 15px;
        color: #333;
    }

    sup {
        position: relative;
        font-size: 106%;
        line-height: 0;
        vertical-align: baseline;
        color: #333;
    }

    sub {
        position: absolute;
        font-size: 70%;
        line-height: 0;
        vertical-align: baseline;
        left: 20px;
        top: 34px;
        color: #333;
    }

    sup:hover {

        color: #333;
    }

    sub:hover {

        color: #333;
    }

    .second {
        color: #ccc;
    }

    .loginnav {
        background: #de861a;
        height: auto;
        top: 11px;
        position: relative;
        padding-left: 17px;
        padding-right: 17px;
        padding-top: 3px;
        padding-bottom: 2px;
        color: white;
        border-radius: 3px;
    }

    .example_a {
        color: #fff !important;
        text-transform: uppercase;
        text-decoration: none;
        background: #ed3330;
        /* padding: 20px; */
        border-radius: 5px;
        display: inline-block;
        border: none;
        transition: all 0.4s ease 0s;
    }

    .cta {
        /* padding: 15px; */
    }

    .cta .cta-inner {
        background-color: #efefef;
        text-align: center;
        padding: 2em 0em 1em 0;
    }

    .cta .fa {
        font-size: 33px;
        color: #337ab7;
    }

    .cta .btn-primary {
        border-radius: 0px;
        text-transform: uppercase;
        letter-spacing: 2px;
        /* padding: 1em 2.5em; */
        width: 100%;
        position: relative;
        background: #1d4567;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-transition-property: color;
        -moz-transition-property: color;
        -ms-transition-property: color;
        -o-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        -ms-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
        transition-duration: 0.4s;
    }

    .cta .btn-primary:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #337ab7;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        -webkit-transition-property: transform;
        -moz-transition-property: transform;
        -ms-transition-property: transform;
        -o-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.3s;
        -moz-transition-duration: 0.3s;
        -ms-transition-duration: 0.3s;
        -o-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        -moz-transition-timing-function: ease-out;
        -ms-transition-timing-function: ease-out;
        -o-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }

    .cta .btn-primary:hover,
    .cta .btn-primary:focus,
    .cta .btn-primary:active {
        color: #fff;
        background-color: #22527b;
    }

    .cta .btn-primary:hover:before,
    .cta .btn-primary:focus:before,
    .cta .btn-primary:active:before {
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
    }

    .input-group.md-form.form-sm.form-1 input {
        border: 1px solid #bdbdbd;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
    }

    .search-sec {
        padding: 1rem;
        background: white;
        border-radius: 11px;
    }

    .search-slt {
        display: block;
        width: 100%;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #55595c;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        height: calc(3rem + 2px) !important;
        border-radius: 0;
    }

    .wrn-btn {
        width: 47px;
        height: calc(3rem + 17px) !important;
        border-radius: 9px;
    }

    @media (min-width: 992px) {
        .search-sec {
            position: relative;
            /* top: -114px; */
            /* background: rgba(26, 70, 104, 0.51); */
        }
    }

    @media (max-width: 992px) {
        .search-sec {
            /* background: #1A4668; */
        }
    }

    .searchbtn {
        color: #fff;
        background-color: #df6200;
        border-color: #d43f3a;
        float: left;
    }

    .searchplace {
        padding-left: 29px;
        padding-top: 16px;
        color: black;
        float: left;
    }



    .search_portion {
        /* padding: 20px; */
        /* background: white; */
        position: relative;
        /* right: 15%;
        left: 15%; */
        /* z-index: 10;
        color: #fff;
        text-align: center;
        border-radius: 11px; */
    }

    .searchoption {
        padding-left: 29px;
        width: 78px;
        height: 68px;
        color: black;
        border-radius: 9px;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .searchcol {
        float: right;
    }

    .searchdiv {
        float: left;
    }

    .form-control-borderless {
        border: none;
    }

    .form-control-borderless:hover,
    .form-control-borderless:active,
    .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }

    #searchForm {
        position: absolute;
        top: 45%;
        left: 32%;
    }

    .searchoption i {
        float: left;
    }

    .searchoption span {
        float: right;
    }



    .calculator:hover {
        -webkit-transform: scale(1.04);
        transform: scale(1.04);
        -webkit-transition: all 0.3s ease-in-out;
        -kthtml-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -webkit-box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.5) !important;
        box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.5) !important;
    }

    .transaction:hover {
        -webkit-transform: scale(1.04);
        transform: scale(1.04);
        -webkit-transition: all 0.3s ease-in-out;
        -kthtml-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -webkit-box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.5) !important;
        box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.5) !important;
    }

    .policy:hover {
        -webkit-transform: scale(1.04);
        transform: scale(1.04);
        -webkit-transition: all 0.3s ease-in-out;
        -kthtml-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -webkit-box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.5) !important;
        box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.5) !important;
    }

    .calculator {
        padding: 19px;

        width: 190px;
        height: 84px;
        background: #428bca6e;
        color: #002d80;
        font-weight: 400;
        border-radius: 11px;
        -webkit-transition: all 0.3s ease-in-out;
        -kthtml-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .policy {
        padding: 19px;

        width: 190px;
        height: 84px;
        background: #428bca6e;
        color: white;
        font-weight: 400;
        border-radius: 11px;
        -webkit-transition: all 0.3s ease-in-out;
        -kthtml-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .transaction {
        padding: 19px;

        width: 190px;
        height: 84px;
        background: #a944426b;
        color: #f30500;
        font-weight: 400;
        border-radius: 11px;
        -webkit-transition: all 0.3s ease-in-out;
        -kthtml-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }


    .services {

        z-index: 1;
        overflow: hidden;
    }

    @media screen and (min-width: 768px) .services {
        right: 15%;
        left: 15%;
        padding-bottom: 30px;
        overflow: hidden;
    }

    .services {
        position: relative;
        right: 15%;
        /* bottom: 20px; */
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
    }


    .product_portion {
        background: #d1d6db;
    }

    .card {
        font-size: 1em;
        overflow: hidden;
        padding: 0;
        border: none;
        border-radius: .28571429rem;
        box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    }

    .card-block {
        font-size: 1em;
        position: relative;
        margin: 0;
        padding: 1em;
        border: none;
        border-top: 1px solid rgba(34, 36, 38, .1);
        box-shadow: none;
    }

    .card-img-top {
        display: block;
        width: 100%;
        height: auto;
    }

    .card-title {
        font-size: 1.28571429em;
        font-weight: 700;
        line-height: 1.2857em;
    }

    .card-text {
        clear: both;
        margin-top: .5em;
        color: rgba(0, 0, 0, .68);
    }

    .card-footer {
        font-size: 1em;
        position: static;
        top: 0;
        left: 0;
        max-width: 100%;
        padding: .75em 1em;
        color: rgba(0, 0, 0, .4);
        border-top: 1px solid rgba(0, 0, 0, .05) !important;
        background: #fff;
    }

    .card-inverse .btn {
        border: 1px solid rgba(0, 0, 0, .05);
    }

    .profile {
        position: absolute;
        top: -12px;
        display: inline-block;
        overflow: hidden;
        box-sizing: border-box;
        width: 25px;
        height: 25px;
        margin: 0;
        border: 1px solid #fff;
        border-radius: 50%;
    }

    .profile-avatar {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    .profile-inline {
        position: relative;
        top: 0;
        display: inline-block;
    }

    .profile-inline~.card-title {
        display: inline-block;
        margin-left: 4px;
        vertical-align: top;
    }

    .text-bold {
        font-weight: 700;
    }

    .meta {
        font-size: 1em;
        color: rgba(0, 0, 0, .4);
    }

    .meta a {
        text-decoration: none;
        color: rgba(0, 0, 0, .4);
    }

    .meta a:hover {
        color: rgba(0, 0, 0, .87);
    }
    }

    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: 0.75rem;
    }

    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
        background-size: cover;
        background-position: center;
    }

    .login-heading {
        font-weight: 300;
    }

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        border-radius: 2rem;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        cursor: text;
        /* Match the input under the label */
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    /* Fallback for Edge
-------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
-------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }

    .cardcontainer {
        /* width: 350px; */
        height: 500px;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        transition: 0.3s
    }

    .cardcontainer:hover {
        box-shadow: 0 0 45px gray
    }

    .photo {
        height: 300px;
        width: 100%
    }

    .photo img {
        height: 100%;
        width: 100%
    }

    .txt1 {
        margin: auto;
        text-align: center;
        font-size: 17px
    }

    .content {
        width: 80%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        top: -33px
    }

    .photos {
        width: 90px;
        height: 30px;
        background-color: #E74C3C;
        color: white;
        position: relative;
        top: -30px;
        padding-left: 10px;
        font-size: 20px
    }

    .txt4 {
        font-size: 21px;
        position: relative;
        top: 35px
    }

    .txt5 {
        position: relative;
        top: 18px;
        color: #E74C3C;
        font-size: 23px
    }

    .txt2 {
        position: relative;
        top: 27px
    }

    .cardcontainer:hover>.photo {
        height: 200px;
        animation: move1 0.5s ease both
    }

    @keyframes move1 {
        0% {
            height: 300px
        }

        100% {
            height: 200px
        }
    }

    .cardcontainer:hover>.content {
        height: 200px
    }

    .footer {
        width: 80%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        position: relative;
        top: -15px
    }

    .btn {
        position: relative;
        /* top: 20px */
    }

    #heart {
        cursor: pointer
    }

    .like {
        float: right;
        font-size: 22px;
        position: relative;
        top: 20px;
        color: #333333
    }

    .fa-gratipay {
        margin-right: 10px;
        transition: 0.5s
    }

    .fa-gratipay:hover {
        color: #E74C3C
    }

    .bg-dark {
        background-color: #2a5781 !important;
    }


    .text-white-50 {
        color: rgba(255, 255, 255, .5);
    }

    .bg-purple {
        background-color: var(--purple);
    }

    .border-bottom {
        border-bottom: 1px solid #e5e5e5;
    }

    .box-shadow {
        box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
    }

    .red {
        color: red !important;
    }

    footer {
        background-color: #f5f5f5;
        padding: 80px 0;
    }

    footer .footer-widget h3 {
        margin-bottom: 30px;
    }


    .contact-link {
        display: inline-block;
        width: 100%;
        color: #333;
    }

    .footer-social ul {
        padding-left: 0;
    }

    .footer-social ul li {
        list-style: none;
        float: left;
        padding: 0 10px;
    }

    .footer-social ul li {
        padding-left: 0;
        background: #ffffff;
        border-radius: 49%;
        width: 28px;
        height: 28px;
        float: left;
        margin-right: 7px;
    }

    .footer-social ul li a {
        font-size: 20px;
        color: #333;
    }

    .footer-social ul li a:hover {
        color: red;
    }

    .col_white_amrc {
        color: orange;
    }

    footer {
        width: 100%;
        background-color: #263238;
        min-height: 250px;
        padding: 10px 0px 25px 0px;
    }

    .pt2 {
        padding-top: 40px;
        margin-bottom: 20px;
    }

    footer p {
        font-size: 13px;
        color: #CCC;
        padding-bottom: 0px;
        margin-bottom: 8px;
    }

    .mb10 {
        padding-bottom: 15px;
    }

    .footer_ul_amrc {
        margin: 0px;
        list-style-type: none;
        font-size: 14px;
        padding: 0px 0px 10px 0px;
    }

    .footer_ul_amrc li {
        padding: 0px 0px 5px 0px;
    }

    .footer_ul_amrc li a {
        color: #CCC;
    }

    .footer_ul_amrc li a:hover {
        color: #fff;
        text-decoration: none;
    }

    .fleft {
        float: left;
    }

    .padding-right {
        padding-right: 10px;
    }

    .footer_ul2_amrc {
        margin: 0px;
        list-style-type: none;
        padding: 0px;
    }

    .footer_ul2_amrc li p {
        display: table;
    }

    .footer_ul2_amrc li a:hover {
        text-decoration: none;
    }

    .footer_ul2_amrc li i {
        margin-top: 5px;
    }

    .bottom_border {
        border-bottom: 1px solid #323f45;
        padding-bottom: 20px;
    }

    .foote_bottom_ul_amrc {
        list-style-type: none;
        padding: 0px;
        display: table;
        margin-top: 10px;
        margin-right: auto;
        margin-bottom: 10px;
        margin-left: auto;
    }

    .foote_bottom_ul_amrc li {
        display: inline;
    }

    .foote_bottom_ul_amrc li a {
        color: #999;
        margin: 0 12px;
    }

    .social_footer_ul {
        display: table;
        margin: 15px auto 0 auto;
        list-style-type: none;
    }

    .social_footer_ul li {
        padding-left: 20px;
        padding-top: 10px;
        float: left;
    }

    .social_footer_ul li a {
        color: #CCC;
        border: 1px solid #CCC;
        padding: 8px;
        border-radius: 50%;
    }

    .social_footer_ul li i {
        width: 20px;
        height: 20px;
        text-align: center;
    }

    .conproduct {
        background: #ddd;
    }

    .proleft {
        font-size: 40px;
        font-weight: normal;
    }

    .proright {
        font-size: 40px;
        font-weight: 700;
    }

    .details-p {
        line-height: 1.6;
    }

    // latest event
    .media-body {
        a {
            color: #333;

            &:hover {
                color: red;
            }
        }

        span {
            color: #969696;
        }
    }

    // gallery image
    .images-gellary {
        ul {
            padding-left: 0;

            li {
                list-style: none;
                float: left;
                margin: 0 3% 2% 0;
                width: 31%;
                position: relative;

                &:nth-child(3n) {
                    margin: 0 0 1%;
                }

                a {}
            }
        }
    }

    .section-tours {
        background-color: #f7f7f7;
    }

    .card {
        perspective: 150rem;
        -moz-perspective: 150rem;
        position: relative;
        height: 34rem;
    }

    .card__side {
        height: 34rem;
        transition: all .8s ease;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        backface-visibility: hidden;
        border-radius: 3px;
        overflow: hidden;
        box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
    }

    .card__side--front {
        background-color: #fff;
    }

    .card__side--back {
        transform: rotateY(180deg);
    }

    .card__side--back-1 {
        background-image: linear-gradient(to right bottom, #ffb900, #ff7730);
    }

    .card__side--back-2 {
        background-image: linear-gradient(to right bottom, #000428, #004e92);
    }

    .card__side--back-3 {
        background-image: linear-gradient(to right bottom, #2998ff, #5643fa);
    }

    .card:hover .card__side--front {
        transform: rotateY(-180deg);
    }

    .card:hover .card__side--back {
        transform: rotateY(0);
    }

    .card__picture {
        background-size: cover;
        height: 23rem;
        background-blend-mode: screen;
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    }

    .card__picture--1 {
        background-image: linear-gradient(to right bottom, #ffb900, #ff7730), url(https://picsum.photos/300/250?random=5);
    }

    .card__picture--2 {
        background-image: linear-gradient(to right bottom, #000428, #004e92), url(https://picsum.photos/300/250?random=6);
    }

    .card__picture--3 {
        background-image: linear-gradient(to right bottom, #2998ff, #5643fa), url(https://picsum.photos/300/250?random=7);
    }

    .card__heading {
        font-size: 2.8rem;
        text-transform: uppercase;
        color: #fff;
        font-weight: 300;
        position: absolute;
        top: 12rem;
        right: 2rem;
        text-align: right;
        width: 74%;
    }

    .card__heading-span {
        padding: .5rem 1.5rem;
        -webkit-box-decoration-break: clone;
        box-decoration-break: clone;
    }

    .card__heading-span--1 {
        background-image: linear-gradient(to right bottom, rgba(255, 185, 0, 0.85), rgba(255, 119, 48, 0.85));
    }

    .card__heading-span--2 {
        background-image: linear-gradient(to right bottom, rgba(0, 4, 40, 0.85), rgba(0, 78, 146, 0.85));
    }

    .card__heading-span--3 {
        background-image: linear-gradient(to right bottom, rgba(41, 152, 255, 0.85), rgba(86, 67, 250, 0.85));
    }

    .card__details {
        padding: 3rem;
    }

    .card__details ul {
        list-style: none;
        width: 80%;
        margin: 0 auto;
    }

    .card__details ul li {
        text-align: center;
        font-size: 1.5rem;
        padding: 1rem;
    }

    .card__details ul li:not(:last-child) {
        border-bottom: 1px solid #eee;
    }

    .card__cta {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .card__price-box {
        color: #fff;
        text-align: center;
        margin-bottom: 8rem;
    }

    .card__price-only {
        font-size: 1.4rem;
        text-transform: uppercase;
    }

    .card__price-value {
        font-size: 6rem;
        font-weight: 100;
    }


    .btn--animated {
        animation: fadeInUp .5s ease-out;
        animation-fill-mode: backwards;
    }

    .book:link,
    .book:visited {
        text-transform: uppercase;
        padding: 1.5rem 4rem;
        display: inline-block;
        transition: all .2s;
        color: initial;
        position: relative;
        font-size: 1.6rem;
    }

    .book:hover {
        transform: translateY(-3px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    }

    .book:active {
        transform: translateY(-1px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
    }

    .book::after {
        content: '';
        display: inline-block;
        height: 100%;
        width: 100%;
        border-radius: 10rem;
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
        transition: all .2s;
    }

    .book::after {
        background: #fff;
    }

    .book:hover::after {
        transform: scaleX(1.4) scaleY(1.6);
        opacity: 0;
    }

    .btn--white {
        background-color: #fff;
        border-radius: 10rem;
    }

    .btn--blue {
        background-color: #004e92;
        border-radius: 10rem;
        color: #fff !important;
    }

    .text-center {
        text-align: center;
    }

    .product {
        padding: 70px;
    }

    .product_introduction {
        padding-bottom: 52px;
    }

    .view {
        padding-top: 11px;
        position: absolute;
        left: 40%;
    }
    .insurance-title {
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 700;
        color: #235298;
        position: relative;
        text-align: center;
        padding: 38px;
        font-family: revert;
        right: 116px;

    }
    .insurance-cards{
        position:relative;
    }
    .contact, .news, .recognitions{
        position:relative;
        margin:80px;
    }
    .advice{
        position:relative;
        margin-top:80px;
    }
    .footers{
        background:rgba(0,0,0,.075);;
        position:relative;
        margin:80px;
    }
    .foot-col{
        width:auto;
    }
    }

    
    </style>
</head>

<body>
    <div id="app">

        <div class="main">
            @yield('content')
        </div>
    </div>
    @yield('script')
</body>

</html>
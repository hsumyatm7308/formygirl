<?php

require_once('database.php');
require_once('submit.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/fonts/apercu/Apercu Pro Bold.otf">
    <link rel="stylesheet" href="./assets/fonts/apercu/Apercu Pro Regular.otf">
    <link rel="stylesheet" href="./assets/fonts/apercu/Apercu Pro Bold.otf">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    @font-face {
        font-family: "apercu";
        src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-light-pro.woff2") format("woff2");
        font-weight: 300;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: "apercu";
        src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-light-italic-pro.woff2") format("woff2");
        font-weight: 300;
        font-style: italic;
        font-display: swap
    }

    @font-face {
        font-family: "apercu";
        src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-regular-pro.woff2") format("woff2");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: "apercu";
        src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-medium-pro.woff2") format("woff2");
        font-weight: 500;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: "apercu";
        src: url("./assets/fonts/apercu/Apercu\ Bold.otf") format("woff2");
        font-weight: 600;
        font-weight: bold;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: "apercu";
        src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-black-pro.woff2") format("woff2");
        font-weight: 800;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: "Hanken Grotesk";
        src: url("https://assets.awwwards.com/assets/fonts/hanken-grotesk/HankenGrotesk-VariableFont_wght.ttf") format("truetype");
        font-weight: 300 900
    }



    :root {
        --font-1: apercu, sans-serif;
        --color-primary: #222;
        --color-primary-rgb: 34, 34, 34;
        --color-link: #222;
        --color-white: #fff;
        --color-white-rgb: 255, 255, 255;
        --color-orange: #FA5D29;
        --color-errors: #FA5D29;
        --color-featured: #f8f0ee;
        --color-underlined: var(--color-primary-rgb);
        --color-connect: #FF602C;
        --color-connect-2: #FFAE94;
        --color-connect-3: #FFC5B1;
        --color-inspire: #AAEEC4;
        --color-inspire-2: #C8E4D3;
        --color-inspire-3: #E2F4E9;
        --color-awards: #502bd8;
        --color-awards-2: #6749d1;
        --color-awards-3: #917eda;
        --color-read: #c0ab3c;
        --color-read-2: #CDC38B;
        --color-read-3: #DBD6C0;
        --color-learn: #FFF083;
        --color-learn-2: #FFF9D0;
        --color-learn-3: #fffbe2;
        --color-jobs: #74bcff;
        --color-jobs-2: #99ccfc;
        --color-jobs-3: #b4d7f8;
        --text-size-small: 12px;
        --text-size-primary: 16px;
        --text-size-medium: 18px;
        --text-size-large: 24px;
        --border-gray: #e9e9e9;
        --color-dotteds-rgb: 34, 34, 34;
        --bg-primary: #F8F8F8;
        --bg-primary-rgb: 248, 248, 248;
        --bg-secondary: #222;
        --bg-3rd: #e9e9e9;
        --bg-4rd: #f3f3f3;
        --bg-white: white;
        --header-height: 71px;
        --gutter: 20px;
        --pad-inner: 52px;
        --color-odd-rows: #f3f3f3;
        --avatar-bg: #F8F8F8;
        --border-table: #222;
        --alert-green: #e0f4d9;
        --alert-green-rgb: 224, 244, 217;
        --alert-yellow: #FFF083;
        --alert-yellow-rgb: 255, 240, 131;
        --modal-alpha: 0.7;
        --rounded-small: 4px;
        --rounded-normal: 8px;
        --rounded-large: 1rem;
        --img-resizing-site: 16 / 12;
        --img-resizing-paronamic: 2 / 1;
        --img-resizing-desktop: 19 / 10
    }

    .fs-1 {
        font-size: 24px
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: auto;
        font-family: var(--font-1);
        font-size: var(--text-size-primary);
        font-weight: 300;
        background: var(--bg-primary);
        color: var(--color-primary);
        line-height: 200%;
        overflow-x: hidden;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility
    }



    .visit-button-container {
        display: none;
    }


    .visit-button-hover:hover .visit-button-container {
        display: block;

    }




    .visit-container:hover .text-container {
        display: inline-block;
        background: rgba(255, 255, 255, 0.5);
        padding: 5px;
        border-radius: 5px;
        transition: all .3s ease-in;
        transform: translateY(-50%);

    }

    .text-container span {
        display: block;
        color: white;
        font-weight: 500;
        backdrop-filter: blur(10px);
        padding: 10px;
        border-radius: 5px;
    }

    @media only screen and (max-width: 500px) {
        .visit-container:hover .text-container {

            background: none;
            transform: translateY(0);

        }

        .text-container span {
            padding: 5px;
            backdrop-filter: blur(0);

        }
    }




    .underline-custom {
        text-decoration-color: gray;
    }




    .aspect-ratio-container {
        position: relative;
        width: 100%;
        padding-top: 55%;
        /* Adjust this value to match the desired aspect ratio (height/width * 100%) */
        overflow: hidden;
    }

    .aspect-ratio-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
        /* Adjust the border-radius as needed */
    }






    .menu-float__bottom {
        position: relative;
        display: flex;
        justify-content: center
    }

    .menu-float__bottom:before {
        content: "";
        height: 60px;
        transition: all .3s
    }

    .menu-float__menu-row+.menu-float__menu-row {
        margin-top: 28px
    }

    .menu-float__wrapper {
        --bg-menu-wrapper: 34, 34, 34;
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        max-width: -moz-fit-content;
        max-width: fit-content;
        padding: 6px;
        border-radius: 12px;
        background: rgba(var(--bg-menu-wrapper), 0.8);
        pointer-events: auto;
        transition: all .4s
    }

    .menu-float__wrapper.is-open-main .menu-float__bottom {
        position: relative
    }

    .menu-float__wrapper.is-open-main .menu-float__layout--primary .menu-float__content {
        width: 100%
    }

    .menu-float__wrapper.is-open-main .menu-float__layout--primary {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%
    }

    .menu-float__wrapper.is-open-main .menu-float__layout--secondary,
    .menu-float__wrapper.is-open-main .menu-float__layout--tertiary {
        opacity: 0;
        visibility: hidden
    }

    .menu-float__wrapper.is-open {
        min-width: 720px !important;
        max-width: 1200px
    }

    .menu-float__wrapper.is-open .menu-float__top {
        max-height: 500px;
        max-width: 1200px
    }

    .menu-float__wrapper.is-open .menu-float__bottom:before {
        flex: 0;
        width: 100%
    }

    .menu-float__wrapper.is-open .menu-float__menu-content {
        max-width: 1200px
    }

    .menu-float__wrapper.is-open .menu-float__title:after {
        max-width: 200px;
        opacity: 1
    }

    .menu-float__wrapper.is-open .menu-float__subtitle {
        max-width: 200px;
        opacity: 1
    }

    .menu-float__wrapper.is-open .menu-float__hamburger {
        margin-left: auto
    }

    .menu-float__wrapper.is-open .menu-float__hamburger div:nth-child(1) {
        top: 0;
        transform: rotate(45deg)
    }

    .menu-float__wrapper.is-open .menu-float__hamburger div:nth-child(2) {
        opacity: 0
    }

    .menu-float__wrapper.is-open .menu-float__hamburger div:nth-child(3) {
        top: 0;
        transform: rotate(-45deg)
    }

    .menu-float__right {
        position: absolute;
        right: 0;
        bottom: 0
    }

    .menu-float__right .menu-float__wrapper {
        overflow: visible !important
    }

    .menu-float__logo {
        display: flex;
        color: #fff;
        font-weight: bold
    }

    .menu-float__breadcrumb {
        display: inline-flex;
        align-items: center;
        flex-shrink: 0;
        height: 48px
    }

    .menu-float__title {
        margin-left: -2px;
        color: var(--menu-color-1)
    }

    .menu-float__title+.menu-float__subtitle:before {
        content: ".";
        margin-right: 2px;
        color: var(--menu-color-1);
        font-weight: bold
    }

    .menu-float__subtitle {
        color: #a7a7a7;
        transition: all .3s
    }

    .menu-float__layout--primary .menu-float__content {
        display: flex;
        padding: 0 20px;
        background-color: var(--bg-secondary);
        color: #fff
    }

    .menu-float__layout--secondary {
        flex: 1;
        margin-left: 6px
    }

    .menu-float__layout--secondary .menu-float__content {
        position: relative;
        width: 100%;
        background: #3e3e3e;
        color: #d3d3d3
    }

    .menu-float__layout--secondary .menu-float__item {
        justify-content: center;
        width: 100%;
        border: 1px solid #4e4e4e;
        color: #d3d3d3;
        white-space: nowrap
    }

    .menu-float__layout--secondary .menu-float__item.is-active {
        color: var(--menu-color-1, #d3d3d3);
        border-color: var(--menu-color-1, #d3d3d3)
    }

    .menu-float__layout--secondary .menu-float__item.is-active:hover {
        opacity: .8
    }

    .menu-float__layout--secondary .menu-float__item:hover:not(.is-active) {
        border-color: #a7a7a7
    }

    .menu-float__layout--tertiary {
        display: flex;
        margin-left: 6px
    }

    .menu-float__layout--tertiary .menu-float__content {
        padding: 0
    }

    .menu-float__layout--tertiary .button {
        width: 100%;
        font-size: 14px;
        transition: all .3s
    }

    .menu-float__layout--tertiary .button:not(.is-custom) {
        background: var(--menu-color-1);
        color: var(--color-primary)
    }

    .menu-float__layout--tertiary .button:hover {
        opacity: .8
    }

    .menu-float__hamburger {
        position: relative;
        width: 20px;
        height: 30px;
        cursor: pointer;
        pointer-events: auto;
        transition: all .3s
    }

    .menu-float__hamburger div {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        width: 10px;
        height: 1px;
        background-color: #fff;
        transform: translateZ(0);
        transition: all .3s
    }

    .menu-float__hamburger div:nth-child(1) {
        top: -8px
    }

    .menu-float__hamburger div:nth-child(3) {
        top: 8px
    }

    .menu-float__menu {
        display: none;
        width: 100%;
        display: none;
        margin-bottom: 6px;
        padding: 30px;
        background: #2c2c2c;
        color: #fff;
        border-radius: var(--rounded-normal);
        z-index: -1;
        transition: all .4s
    }

    .menu-float__menu--main {
        display: flex;
        font-size: 15px;
        padding-top: 4px;
        padding-left: 1px
    }

    .menu-float__menu.is-active {
        display: block
    }

    .menu-float__menu-content {
        max-width: 0;
        opacity: 0;
        transition: all .4s, max-width 0s;
        overflow: hidden
    }

    .menu-float__menu-content.is-show {
        opacity: 1
    }

    .menu-float__menu-col {
        position: relative;
        flex: 1;
        background-image: linear-gradient(to bottom, #7a7a7a 0 10%, rgba(255, 255, 255, 0) 10%);
        background-position: left top;
        background-repeat: repeat-y;
        background-size: 1px 8px
    }

    .menu-float__menu-section {
        position: relative;
        margin-top: 0px;
        margin-bottom: 25px;
        margin-left: 16px;
        font-size: 12px;
        color: #a7a7a7;
        line-height: 100%
    }

    .menu-float__menu-section:before {
        content: "";
        position: absolute;
        top: 3px;
        left: -17px;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: var(--menu-color-2, #fff)
    }

    .menu-float__menu-nav {
        line-height: 120%
    }

    .menu-float__menu-nav li:not(:last-child) {
        margin-bottom: 16px
    }

    .menu-float__menu-nav li.is-active {
        font-weight: bold
    }

    .menu-float__menu-nav li.is-active a {
        color: var(--menu-color-1, --color-white);
        border-color: var(--menu-color-1, --color-white)
    }

    .menu-float__menu-nav a {
        display: block;
        padding: 8px 0 8px 16px;
        border-left: 1px solid rgba(0, 0, 0, 0);
        transition: all .3s
    }

    .menu-float__menu-nav a:hover {
        color: var(--menu-color-1, --color-white);
        border-color: var(--menu-color-1, --color-white)
    }

    .menu-float__menu a {
        color: #fff
    }

    .menu-float__title-section {
        flex-shrink: 0;
        display: flex;
        align-items: center;
        margin: 0 12px 0 6px;
        line-height: 100%
    }

    .menu-float__content {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        height: 60px;
        padding: 0 6px;
        text-align: center;
        border-radius: var(--rounded-normal);
        overflow: hidden
    }

    .menu-float__progress {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        width: 100%;
        height: 100%
    }

    .menu-float__bar {
        background-color: rgba(78, 78, 78, .5);
        width: 0;
        height: 100%
    }

    .menu-float__nav {
        position: relative;
        display: flex;
        margin-left: -6px
    }

    .menu-float__nav li {
        display: flex
    }

    .menu-float__item {
        display: inline-flex;
        align-items: center;
        height: 48px;
        margin-left: 6px;
        padding: 0 12px;
        border-radius: var(--rounded-normal);
        color: var(--color-primary);
        font-weight: 400;
        cursor: pointer;
        overflow: hidden;
        transition: max-width .3s, padding .3s, margin .3s, color .3s, background .3s, border-radius .3s, border-color .3s, opacity .3s
    }

    .menu-float__filters {
        position: relative;
        display: flex;
        height: 60px;
        margin-left: -6px;
        margin-right: -6px
    }

    .menu-float__filters li {
        border-left: 1px solid rgba(var(--color-primary-rgb), 0.1)
    }

    .menu-float__filter {
        position: relative;
        display: flex;
        align-items: center;
        height: 100%;
        padding: 0 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none
    }

    .menu-float__filter.has-filter:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--menu-color-2)
    }

    .menu-float__filter.is-active {
        background: #222
    }

    .menu-float__filter.is-active svg {
        transform: scaleY(-1)
    }

    .menu-float__arrow {
        fill: #a7a7a7;
        margin-left: 12px
    }

    .menu-float__content:has(.menu-float__awwwards) {
        border-radius: 0
    }

    .menu-float__awwwards {
        display: flex;
        gap: 6px
    }

    .menu-float .button[class*="--awwward"] {
        --button-bg: var(--color-award);
        color: #fff
    }

    .menu-float .avatar-name sup {
        color: #fff
    }

    .menu-float .bt-nav {
        position: absolute;
        bottom: 0;
        pointer-events: auto
    }

    .menu-float .bt-nav--left {
        left: -28px
    }

    .menu-float .bt-nav--right {
        right: -28px
    }

    .menu-float .button--suggestions {
        --button-bg: var(--bg-secondary);
        --button-color: #fff
    }

    .menu-float .button--suggestions:hover {
        background-color: #4e4e4e
    }

    .menu-float .button--suggestions img {
        margin: 0 20px 0 8px;
        border-radius: 50%
    }

    .menu-float .button--suggestions .budget-circle {
        flex-shrink: 0;
        margin: 0 8px 0 20px;
        background: #4e4e4e
    }




    .togglemodal {
        display: none;
    }


    /* for calendar  */
</style>

<body class="">

    <div class="container mx-auto px-2 lg:px-14  py-4  bg-[#F8F8F8]">
        <nav class="w-full flex md:justify-center justify-between items-center bg-blue-0 space-x-4">

            <div class="w-[7%] lg:w-[5%] flex justify-start">
                <h1 class="text-[30px] font-bold">A<span>.</span></h1>
            </div>


            <div class="w-[100%] md:justify-center justify-between md:flex hidden">
                <input type="search"
                    class="w-full bg-[var(--border-gray)] placeholder:font-medium rounded-md border outline-none focus:bg-[var(--bg-secondary)] focus:opacity-90 focus:text-white py-3 px-10"
                    placeholder="Search in my heart">
            </div>


            <ul class="md:w-[30%] w-[50%] flex justify-end items-center space-x-4">
                <li><a href="" class="font-semibold ">Log in</a></li>
                <li><a href="" class="font-semibold">Sign Up</a></li>
                <li class="hidden lg:block">
                    <a href="https://www.facebook.com/jv230">
                        <div class="w-12 h-12 bg-[var(--color-primary)] rounded-md hover:opacity-90"></div>
                    </a>
                </li>
                <li class="hidden lg:block">
                    <a href="https://www.facebook.com/profile.php?id=100058837345963">
                        <div
                            class="w-12 h-12 border border-[var(--border-table)] rounded-md hover:bg-[var(--bg-secondary)] hover:opacity-90">
                        </div>
                    </a>
                </li>
            </ul>
        </nav>





        <div class="w-full  md:mt-10 mt-5">
            <img src="file:///C:/Users/hsumy/Downloads/Screenshot%20(465).svg" class="opacity:90" alt="">
        </div>

        <!-- line  -->
        <div class="w-full flex flex-col justify-center items-center space-y-4 md:mt-10 mt-5">
            <div class="uppercase font-medium md:text-xl text-md text-black ">
                <span>14 - DECEMBER - <span id="year"></span> </span>
                <span class="text-indigo-500"> | </span>
                <span class="text-indigo-500"> Aye Pwint Phyu</span>
            </div>


        </div>



    </div>


    <div class="">
        <div
            class="container mx-auto px-2 lg:px-14  py-4  bg-transparent flex justify-center items-center fixed bottom-4 z-30  space-x-4">

            <div class="bg-gray-300">

            </div>

            <div class="mx-auto flex justify-center items-center menu-float__wrapper md:flex hidden">
                <div class="menu-float__top">
                    <div class="menu-float__menu menu-main" id="menu-main">
                        <div class="menu-float__menu-content">
                            <div class="menu-float__menu--main">
                                <div class="menu-float__menu-col style-2 ">
                                    <div class="menu-float__menu-section">Awards</div>
                                    <ul class="menu-float__menu-nav">
                                        <li>
                                            <a href="/websites/" class="menu-float__sub-item ">Winners
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/websites/nominees/" class="menu-float__sub-item ">
                                                Nominees
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/websites/sites_of_the_day/" class="menu-float__sub-item">
                                                Sites of the Day
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/websites/sites_of_the_month/" class="menu-float__sub-item">
                                                Sites of the Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu-float__menu-col style-1">
                                    <div class="menu-float__menu-row style-1 ">
                                        <div class="menu-float__menu-section">Inspiration</div>
                                        <ul class="menu-float__menu-nav">
                                            <li>
                                                <a href="/collections/" class="menu-float__sub-item">
                                                    Collections
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements/" class="menu-float__sub-item">
                                                    Elements
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-float__menu-row style-1">
                                        <div class="menu-float__menu-section">Academy</div>
                                        <ul class="menu-float__menu-nav">

                                            <li>
                                                <a href="/academy/" class="menu-float__sub-item">
                                                    Courses
                                                </a>
                                            </li>

                                            <li>
                                                <a href="/masterclasses/" class="menu-float__sub-item">
                                                    Masterclasses
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menu-float__menu-col style-1 ">
                                    <div class="menu-float__menu-row style-1 ">
                                        <div class="menu-float__menu-section">Directory</div>
                                        <ul class="menu-float__menu-nav">
                                            <li>
                                                <a href="/directory/homepage/" class="menu-float__sub-item ">
                                                    Professionals
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/directory/international/" class="menu-float__sub-item">
                                                    Internationals
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/directory/freelance/" class="menu-float__sub-item">
                                                    Freelancers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/directory/agency-studio/" class="menu-float__sub-item ">
                                                    Agencies & Studios
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menu-float__menu-col style-1 ">
                                    <div class="menu-float__menu-row style-1 ">
                                        <div class="menu-float__menu-section">w.</div>
                                        <ul class="menu-float__menu-nav">
                                            <li>
                                                <a href="/blog/" class="menu-float__sub-item">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/jobs/" class="menu-float__sub-item">
                                                    Jobs
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/official-jury/" class="menu-float__sub-item ">
                                                    Jury
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/market/" class="menu-float__sub-item ">Products
                                                    &nbsp;<span
                                                        class="budget-tag budget-tag--solid--white">New</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="menu-float__menu" id="menu-filters">
                        <div class="menu-float__menu-content">
                        </div>
                    </div>
                </div>

                <div class="menu-float__bottom">
                    <div class="menu-float__layout menu-float__layout--primary">
                        <div class="menu-float__content">
                            <a href="" class="menu-float__logo">A.</a>
                            <div class="menu-float__breadcrumb">
                                <!-- <strong class="">home</strong> -->
                                <a href="#home">home</a>
                            </div>
                            <div class="menu-float__hamburger js-menufloat-hamburger">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-float__layout menu-float__layout--secondary md:flex  hidden">
                        <div class="menu-float__content">


                            <div>
                                <a href="#home">
                                    Home
                                </a>
                            </div>
                            <ul class="menu-float__nav">
                                <li><a class="menu-float__item js-menu-anchor" href="#about">About</a></li>
                                <li><a class="menu-float__item js-menu-anchor" href="#wishes">Wishes</a>
                                </li>
                                <li><a class="menu-float__item js-menu-anchor" href="#gallery">Gallery</a></li>
                                <!-- <li><a class="menu-float__item js-menu-anchor"
                                        href="#collections">Write</a></li> -->
                            </ul>
                        </div>


                    </div>

                </div>



            </div>









        </div>
    </div>






    <div>
        <div
            class=" mx-auto px-2 lg:px-14  py-4   flex justify-end items-start fixed bottom-4  right-0 z-30  space-x-4">
            <div id=""
                class="h-14  bg-[var(--bg-secondary)] opacity-80 hover:opacity-100 cursor-pointer flex justify-center items-center rounded-md px-3 py-3 ">


                <div class="w-full h-full flex justify-center items-center text-white space-x-1 towritebtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>

                    <span class=" font-medium "> To write</span>

                </div>
            </div>
        </div>

    </div>


    <div class="write-modal hidden">
        <!-- hidden -->

        <div id=""
            class="container px-2 lg:px-14  py-4  bg-transparent flex justify-end items-center fixed lg:bottom-4 bottom-0 right-0 z-40  space-x-4">

            <div
                class="w-screen h-screen bg-[linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))] fixed left-0 top-0 modal-dialogs ">
            </div>

            <!-- to write  -->
            <div
                class="lg:w-[30%] w-[100%] bg-[var(--bg-secondary)]  rounded-l-lg px-5 py-3 text-white absolute bottom-4 z-10">

                <div class="flex justify-end items-center modal-dialogs">
                    <div class="bg-[linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))] p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </div>
                </div>
                <form id="form" action="" method="POST" class="w-full h-full flex flex-col text-white"
                    enctype="multipart/form-data">





                    <div class="border-2 border-gray-300 border-dashed rounded-lg p-6 relative mt-3">

                        <input type="file" name="image" id="file" class="w-full h-full absolute inset-0 z-50 opacity-0"
                            onchange="fileview(event)" />

                        <div class="text-center">

                            <img id="preview" src=""
                                class="w-20 h-20 object-cover border border-dashed rounded-full mx-auto" />

                            <h3 class="text-gray-900 font-medium mt-2">
                                <label for="file" class="text-gray-500">
                                    <span>Click here to upload your</span>
                                    <span class="text-indigo-600">file</span>
                                </label>
                            </h3>


                        </div>

                    </div>





                    <input type="text" name="name" class="name bg-transparent p-3 outline-none mt-3"
                        placeholder="Please let me know your name" required>
                    <textarea name="message" class="resize-none bg-transparent focus:outline-none p-3" rows="10"
                        placeholder="Write something you want to wish" required></textarea>

                    <div class="w-full flex justify-center items-end mt-5 border border-white py-2 hover:border-black">
                        <button type="submit" name="submit">Send</button>
                    </div>
                </form>

            </div>



        </div>

    </div>




    <div class="">
        <div
            class="container mx-auto px-2 lg:px-14  py-4  bg-transparent flex justify-center items-center fixed bottom-4 z-20  space-x-4">

            <div class="bg-gray-300">

            </div>

            <div class="mx-auto flex justify-center items-center menu-float__wrapper md:flex hidden">
                <div class="menu-float__top">
                    <div class="menu-float__menu menu-main" id="menu-main">
                        <div class="menu-float__menu-content">
                            <div class="menu-float__menu--main">
                                <div class="menu-float__menu-col style-2 ">
                                    <div class="menu-float__menu-section">Awards</div>
                                    <ul class="menu-float__menu-nav">
                                        <li>
                                            <a href="/websites/" class="menu-float__sub-item ">Winners
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/websites/nominees/" class="menu-float__sub-item ">
                                                Nominees
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/websites/sites_of_the_day/" class="menu-float__sub-item">
                                                Sites of the Day
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/websites/sites_of_the_month/" class="menu-float__sub-item">
                                                Sites of the Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu-float__menu-col style-1">
                                    <div class="menu-float__menu-row style-1 ">
                                        <div class="menu-float__menu-section">Inspiration</div>
                                        <ul class="menu-float__menu-nav">
                                            <li>
                                                <a href="/collections/" class="menu-float__sub-item">
                                                    Collections
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/elements/" class="menu-float__sub-item">
                                                    Elements
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-float__menu-row style-1">
                                        <div class="menu-float__menu-section">Academy</div>
                                        <ul class="menu-float__menu-nav">

                                            <li>
                                                <a href="/academy/" class="menu-float__sub-item">
                                                    Courses
                                                </a>
                                            </li>

                                            <li>
                                                <a href="/masterclasses/" class="menu-float__sub-item">
                                                    Masterclasses
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menu-float__menu-col style-1 ">
                                    <div class="menu-float__menu-row style-1 ">
                                        <div class="menu-float__menu-section">Directory</div>
                                        <ul class="menu-float__menu-nav">
                                            <li>
                                                <a href="/directory/homepage/" class="menu-float__sub-item ">
                                                    Professionals
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/directory/international/" class="menu-float__sub-item">
                                                    Internationals
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/directory/freelance/" class="menu-float__sub-item">
                                                    Freelancers
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/directory/agency-studio/" class="menu-float__sub-item ">
                                                    Agencies & Studios
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menu-float__menu-col style-1 ">
                                    <div class="menu-float__menu-row style-1 ">
                                        <div class="menu-float__menu-section">w.</div>
                                        <ul class="menu-float__menu-nav">
                                            <li>
                                                <a href="/blog/" class="menu-float__sub-item">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/jobs/" class="menu-float__sub-item">
                                                    Jobs
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/official-jury/" class="menu-float__sub-item ">
                                                    Jury
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/market/" class="menu-float__sub-item ">Products
                                                    &nbsp;<span
                                                        class="budget-tag budget-tag--solid--white">New</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="menu-float__menu" id="menu-filters">
                        <div class="menu-float__menu-content">
                        </div>
                    </div>
                </div>

                <div class="menu-float__bottom">
                    <div class="menu-float__layout menu-float__layout--primary">
                        <div class="menu-float__content">
                            <a href="" class="menu-float__logo">A.</a>
                            <div class="menu-float__breadcrumb">
                                <!-- <strong class="">home</strong> -->
                                <a href="#home">home</a>
                            </div>
                            <div class="menu-float__hamburger js-menufloat-hamburger">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>

                    <div class="menu-float__layout menu-float__layout--secondary md:flex  hidden">
                        <div class="menu-float__content">


                            <div>
                                <a href="#home">
                                    Home
                                </a>
                            </div>
                            <ul class="menu-float__nav">
                                <li><a class="menu-float__item js-menu-anchor" href="#about">About</a></li>
                                <li><a class="menu-float__item js-menu-anchor" href="#wishes">Wishes</a>
                                </li>
                                <li><a class="menu-float__item js-menu-anchor" href="#gallery">Gallery</a></li>
                                <!-- <li><a class="menu-float__item js-menu-anchor"
                                        href="#collections">Write</a></li> -->
                            </ul>
                        </div>


                    </div>

                </div>



            </div>









        </div>
    </div>











    <div id="home" class="container mx-auto px-2 lg:px-14 py-4 bg-[#F8F8F8] md:mt-10 mt-5">
        <!-- <div class="w-full bg-cover bg-center aspect-video rounded-lg" style="background-image: url('./assets/herphoto/her2.jpg'); border-radius: 10px;"> -->
        <div class="w-full bg-cover bg-center aspect-video rounded-lg relative">

            <div class="aspect-ratio-container relative visit-button-hover">
                <img src="./assets/herphoto/her2.jpg" alt=""
                    class="absolute inset-0 w-full h-full object-cover rounded-lg">


                <div
                    class="w-full h-full bg-[linear-gradient(rgb(0,0,0,.2),rgb(0,0,0,.5))] hover:bg-[linear-gradient(rgb(0,0,0,.5),rgb(0,0,0,.5))] rounded-lg absolute lef-0 top-0 z-10">
                    <!-- abc    -->
                </div>


                <div class="w-full h-full flex items-end relative slider-text ">



                    <div class="md:px-10 px-5 absolute z-10 textonphoto self-end justify-self-end">
                        <div class="text-white md:text-xl text-md font-normal">Happy</div>
                        <div class="lg:text-[8em] md:text-[4em] text-[2em] text-white font-medium captilize md:ml-4">
                            <span id="age" class="font-bold"></span>th Birthday
                        </div>
                    </div>

                    <div class="md:px-10 px-5 absolute z-10 hidden textonphoto self-end justify-self-end">
                        <div class="text-white md:text-xl text-md font-normal">Birthday Girl</div>
                        <div class="lg:text-[8em] md:text-[4em] text-[2em] text-white font-medium captilize md:ml-4">
                            Aye
                            Pwint
                            Phyu
                        </div>
                    </div>







                </div>

                <div class="w-full visit-button-container">
                    <a href="">
                        <div
                            class="lg:w-52 lg:h-20 md:w-42 md:h-14 border border-[var(--border-gray)] rounded-md absolute left-[50%] top-[50%] z-10 transform translate-x-[-50%] translate-y-[-50%] flex justify-center items-center visit-container px-2">
                            <div class="text-container">
                                <span class="text-white font-medium lg:text-2xl md:text-lg  text-sm"> Visit My
                                    Heart</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="w-full flex justify-center items-center lg:mt-20 md:mt-10 mt-20 space-x-4">
                <div class="">
                    <img src="./assets/myphoto/my1.jpg" alt="" width="30px" class="rounded-full">
                </div>
                <div>
                    <span class="font-medium md:text-normal text-sm">Hsu Myat M</span>
                    <div class="w-20 h-[3px] bg-gray-300"></div>
                </div>
            </div>
        </div>

        <!-- about  -->

        <div id="about" class="bg-white">
            <div class="container mx-auto px-2 lg:px-14 py-4 bg-white mt-20 ">
                <!-- <div class="container mx-auto  px-2 lg:px-14  py-3 mt-24 "> -->
                <div class="w-full lg:mt-20 mt-8">
                    <div class="mt-10">
                        <span class="font-normal capitalize md:text-xl text-md ">About summary</span>
                    </div>

                    <div class="mt-10 grid lg:grid-cols-3 grid-cols-1">
                        <div class="col-span-2">
                            <span class=" bg-gray- lg:text-[50px] md:text-[35px] text-3xl leading-normal font-bold">
                                Aye Pwint Phyu was born on December 14, 2003. And
                                she was raised in Daw Nyein.
                            </span>
                        </div>

                        <div class="lg:flex justify-end items-end  hidden">
                            <div>


                                <table class="border-separate border-spacing-3	">
                                    <tr class="space-x-4">
                                        <th><span class="flex justify-center items-center">Sun</span></th>
                                        <th><span class="flex justify-center items-center">Mon</span></th>
                                        <th><span class="flex justify-center items-center">Tue</span></th>
                                        <th><span class="flex justify-center items-center">Wed</span></th>
                                        <th><span class="flex justify-center items-center">Thu</span></th>
                                        <th><span class="flex justify-center items-center">Fri</span></th>
                                        <th><span class="flex justify-center items-center">Sat</span></th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><span class="flex justify-center items-center">1</span></td>
                                        <td><span class="flex justify-center items-center">2</span></td>
                                        <td><span class="flex justify-center items-center">3</span></td>
                                        <td><span class="flex justify-center items-center">4</span></td>
                                        <td><span class="flex justify-center items-center">5</span></td>
                                        <td><span class="flex justify-center items-center">6</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="flex justify-center items-center">7</span></td>
                                        <td><span class="flex justify-center items-center">8</span></td>
                                        <td><span class="flex justify-center items-center">9</span></td>
                                        <td><span class="flex justify-center items-center">10</span></td>
                                        <td><span class="flex justify-center items-center">11</span></td>
                                        <td><span class="flex justify-center items-center">12</span></td>
                                        <td><span class="flex justify-center items-center">13</span></td>
                                    </tr>
                                    <tr>
                                        <td><span
                                                class="bg-indigo-500 text-white rounded-full flex justify-center items-center">14</span>
                                        </td>
                                        <td><span class="flex justify-center items-center">15</span></td>
                                        <td><span class="flex justify-center items-center">16</span></td>
                                        <td><span class="flex justify-center items-center">17</span></td>
                                        <td><span class="flex justify-center items-center">18</span></td>
                                        <td><span class="flex justify-center items-center">19</span></td>
                                        <td><span class="flex justify-center items-center">20</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="flex justify-center items-center">21</span></td>
                                        <td><span class="flex justify-center items-center">22</span></td>
                                        <td><span class="flex justify-center items-center">23</span></td>
                                        <td><span class="flex justify-center items-center">24</span></td>
                                        <td><span class="flex justify-center items-center">25</span></td>
                                        <td><span class="flex justify-center items-center">26</span></td>
                                        <td><span class="flex justify-center items-center">27</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="flex justify-center items-center">28</span></td>
                                        <td><span class="flex justify-center items-center">29</span></td>
                                        <td><span class="flex justify-center items-center">30</span></td>
                                        <td><span class="flex justify-center items-center">31</span></td>
                                        <td><span class="flex justify-center items-center text-gray-300">1</span>
                                        </td>
                                        <td><span class="flex justify-center items-center text-gray-300">2</span>
                                        </td>
                                        <td><span class="flex justify-center items-center text-gray-300">3</span>
                                        </td>
                                    </tr>
                                </table>



                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class="bg-white">
            <div class="container mx-auto px-2 lg:px-14  py-3">

                <div class="grid grid-cols-4 gap-16  mt-10">
                    <div
                        class=" lg:border lg:border-gray-300 lg:border-b-white flex justify-center rounded-md p-5 countdown-container">
                        <div class="flex flex-col justify-center items-center space-y-4 ">
                            <span class="md:text-normal text-sm font-medium uppercase ">Days</span>
                            <p class="md:text-4xl text-2xl font-semibold" id="days">12</p>
                        </div>
                    </div>
                    <div class="lg:border lg:border-gray-300 lg:border-b-white flex justify-center rounded-md p-5">
                        <div class="flex flex-col justify-center items-center space-y-4">
                            <span class="md:text-normal text-sm font-medium uppercase ">Hours</span>
                            <p class="md:text-4xl text-2xl font-semibold" id="hours">12</p>
                        </div>
                    </div>
                    <div class=" lg:border lg:border-gray-300 lg:border-b-white flex justify-center rounded-md p-5">
                        <div class="flex flex-col justify-center items-center space-y-4">
                            <span class="md:text-normal text-sm font-medium uppercase ">Minutes</span>
                            <p class="md:text-4xl text-2xl font-semibold" id="minutes">12</p>
                        </div>
                    </div>
                    <div class="lg:border lg:border-gray-300 lg:border-b-white flex justify-center rounded-md p-5">
                        <div class="flex flex-col justify-center items-center space-y-4">
                            <span class="md:text-normal text-sm font-medium uppercase ">Seconds</span>
                            <p class="md:text-4xl text-2xl font-semibold" id="seconds">12</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- wish  -->

        <div id="wishes" class="bg-white">
            <div class="container mx-auto px-2 lg:px-14  py-3">
                <div class="w-full lg:mt-52 mt-44">
                    <div class="w-full flex flex-col justify-center items-center">
                        <span class="capitalize font-normal">All of the</span>
                        <p class="font-bold text-[100px] uppercase mt-2">Wishes</p>
                        <p class="font-medium text-xl">From The Lovely Friends</p>
                    </div>



                    <?php require_once('show.php') ?>
                    <!-- 
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-4 lg:mt-20 mt-10">





                        <div class="w-full card p-5">
                            <div
                                class="w-full  lg:border-r border border-r-gray-300 rounded-md flex flex-col justify-end item-center   p-4">




                                <div
                                    class="w-full h-full  grid grid-cols-7 text-end flex justify-center item-start space-x-5 mb-10">

                                    <div class=" bg-blue-00 transform rounded-full">
                                        <img src="./assets/myphoto/my1.jpg" alt="" class="rounded-full" width="100px">
                                    </div>

                                    <div class="col-span-6 text-start flex flex-col space-y-4 self-start bg-blue-00">
                                        <span class="self-end  leading-relaxed">
                                            earum, voluptatibus ut mollitia eius illum quia sequi accusamus dolorem
                                            et
                                            vel
                                            reiciendis nostrum eum.

                                        </span>


                                    </div>

                                </div>

                                <div class="text-black self-end bg-blue-">by <span class="font-medium ">Hsu Myat
                                        Moe</span>
                                </div>



                            </div>


                        </div>



                        <div class="w-full card p-5">
                            <div
                                class="w-full  lg:border-r border border-r-gray-300 rounded-md flex flex-col justify-end item-center   p-4">




                                <div
                                    class="w-full h-full  grid grid-cols-7 text-end flex justify-center item-start space-x-5 mb-10">

                                    <div class=" bg-blue-00 transform rounded-full">
                                        <img src="./assets/myphoto/my1.jpg" alt="" class="rounded-full" width="100px">
                                    </div>

                                    <div class="col-span-6 text-start flex flex-col space-y-4 self-start bg-blue-00">
                                        <span class="self-end  leading-relaxed">
                                            earum, voluptatibus ut mollitia eius illum quia sequi accusamus dolorem
                                            et
                                            vel
                                            reiciendis nostrum eum.

                                        </span>


                                    </div>

                                </div>

                                <div class="text-black self-end bg-blue-">by <span class="font-medium ">Hsu Myat
                                        Moe</span>
                                </div>



                            </div>


                        </div>


                        <div class="w-full card p-5">
                            <div
                                class="w-full  lg:border-r border border-r-gray-300 rounded-md flex flex-col justify-end item-center   p-4">




                                <div
                                    class="w-full h-full  grid grid-cols-7 text-end flex justify-center item-start space-x-5 mb-10">

                                    <div class=" bg-blue-00 transform rounded-full">
                                        <img src="./assets/myphoto/my1.jpg" alt="" class="rounded-full" width="100px">
                                    </div>

                                    <div class="col-span-6 text-start flex flex-col space-y-4 self-start bg-blue-00">
                                        <span class="self-end  leading-relaxed">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit modi
                                            suscipit
                                            inventore deserunt illo dolorum earum, voluptatibus ut mollitia eius
                                            illum
                                            quia
                                            sequi accusamus dolorem et vel reiciendis nostrum eum.

                                        </span>


                                    </div>

                                </div>

                                <div class="text-black self-end bg-blue-">by <span class="font-medium ">Hsu Myat
                                        Moe</span>
                                </div>



                            </div>


                        </div>




                    </div> -->


                    <!-- <div class="w-full flex lg:justify-end justify-center item-center space-x-4 mt-10">

                        <div
                            class="w-10 h-10 border rounded-full flex justify-center items-center hover:bg-gray-400 transition duration-150  js-slider-sites-prev">
                            <svg width="8" height="12" viewBox="0 0 8 12">
                                <path
                                    d="M3.37879 6.64083L2.74979 6.01183L3.37879 5.37654L7.64341 1.11193L6.75652 0.218751L1.85661 5.11865L0.969726 6.00554L2.4919 7.52772L6.75652 11.7923L7.64341 10.9054L3.37879 6.64083Z" />
                            </svg>
                        </div>

                        <div
                            class="w-10 h-10 border rounded-full flex justify-center items-center hover:bg-gray-400 transition duration-300 js-slider-sites-next">
                            <svg width="8" height="13" viewBox="0 0 8 13">
                                <path
                                    d="M5.13292 5.61893L5.76192 6.24793L5.13292 6.88322L0.86831 11.1478L1.7552 12.041L6.6551 7.14111L7.54199 6.25422L6.01981 4.73204L1.7552 0.467429L0.86831 1.35432L5.13292 5.61893Z" />
                            </svg>
                        </div>


                    </div> -->



                </div>
            </div>

        </div>

        <div class="bg-white">

            <div class="container mx-auto px-2 lg:px-14  py-3">



                <div class="w-full flex justify-center items-end space-x-4 mt-20">
                    <span class="text-xl">
                        Thank you so much for wishes
                    </span>
                    <!-- <span class="text-2xl font-medium underline underline-offset-2 underline-custom">View Wishes</span> -->
                </div>




            </div>
        </div>




        <!-- gallery  -->

        <div id="gallery" class="bg-white">
            <div class="container mx-auto px-2 lg:px-14  py-3">
                <div class="grid grid-cols-2 gap-10  mt-32 lg:max-h-[400vh] max-h-[200vh] bg-blue-00 overflow-y-hidden">

                    <div class="">

                        <div class="w-full lg:mb-64 mb-16 md:space-y-6 space-y-2">
                            <h1 class="lg:text-[100px] md:text-[50px] text-4xl font-semibold uppercase mt-10">
                                Gallery
                            </h1>
                            <p class="md:text-xl text-md font-medium ml-2">Digital Memories</p>
                        </div>


                        <div class="w-full flex justify-center item-center mb-10 relative">
                            <img src="./assets/gallery/her11.jpg" alt=""
                                class="border brightness-100 saturate-50  grayscale contrast-100 ... hover:filter-none">

                            <!-- <div class="w-full h-full bg-[linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5))] absolute"></div> -->

                        </div>

                        <div class="w-full flex justify-center item-center mb-10">
                            <img src="./assets/gallery/her12.jpg" alt=""
                                class="border brightness-100 saturate-50  grayscale contrast-100 ... hover:filter-none">
                        </div>

                        <div class="w-full flex justify-center item-center">
                            <img src="./assets/gallery/her2.jpg" alt=""
                                class="border brightness-100 saturate-50  grayscale contrast-100 ... hover:filter-none">
                        </div>
                    </div>


                    <div class="w-full flex flex-col justify-end item-center">
                        <div class="w-full flex justify-center item-center mb-10">
                            <img src="./assets/gallery/her3.jpg" alt=""
                                class="border brightness-100 saturate-50  grayscale contrast-100 ... hover:filter-none">
                        </div>



                        <div class="w-full flex justify-center item-center mb-10">
                            <img src="./assets/gallery/her1.jpg" alt=""
                                class="border brightness-100 saturate-50  grayscale contrast-100 ... hover:filter-none">
                        </div>

                        <div class="w-full flex justify-center item-center">
                            <img src="./assets/gallery/her9.jpg" alt=""
                                class="border brightness-100 saturate-50  grayscale contrast-100 ...  hover:filter-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white">
            <div class="container mx-auto px-2 lg:px-14  py-3">

            </div>

        </div>



        <!-- footer  -->
        <div
            class="h-[20vh] container mx-auto px-2 lg:px-14 py-4 bg-[#F8F8F8] md:mt-10 mt-5 border-t-2 border-black border-dashed">
            <div class="grid grid-cols-2">
                <div class="md:text-md text-sm">
                    <span>2023 &copy; All right reserve</span>
                </div>

                <div>
                    <span class="flex justify-center items-center space-x-2">
                        <div class="font-medium">Connect :</div>
                        <div><a href="">facebook</a></div>
                        <div><a href="">instagram</a></div>
                        <div class="lg:flex hidden"><a href="">twitter</a></div>


                    </span>
                </div>

            </div>
        </div>





        <script type="text/javascript">
            var date = new Date();
            document.getElementById("year").innerHTML = date.getUTCFullYear();

            document.getElementById('age').innerHTML = date.getUTCFullYear() - 2003;



            var textonphoto = document.querySelectorAll('.textonphoto');
            var currentIndex = 0;

            function toggleHiddenClass() {
                textonphoto[currentIndex].classList.add('hidden');
                currentIndex = (currentIndex + 1) % textonphoto.length; // Move to the next element in a cyclic manner
                textonphoto[currentIndex].classList.remove('hidden');
            }

            setInterval(toggleHiddenClass, 3000);


            // for countdown 

            const storeopening = new Date(`dec 14, ${date.getUTCFullYear()} 00:00:00`);

            setInterval(function () {
                setcountdown(storeopening);

            }, 1000);

            function setcountdown(countdowntime) {
                let now = new Date();
                let remainingtime = countdowntime - now;

                let seconds = Math.floor(remainingtime / 1000) % 60;
                let minutes = Math.floor(remainingtime / (1000 * 60)) % 60;
                let hours = Math.floor(remainingtime / (1000 * 60 * 60)) % 24;
                let days = Math.floor(remainingtime / (1000 * 60 * 60 * 24));

                let daystodisplay = days.toString().padStart(2, '0');
                let hourstodisplay = hours.toString().padStart(2, '0');
                let minutestodisplay = minutes.toString().padStart(2, '0');
                let secondstodisplay = seconds.toString().padStart(2, '0');


                console.log(daystodisplay, hourstodisplay, minutestodisplay, secondstodisplay);

                const getdays = document.getElementById('days').innerHTML = daystodisplay;
                const gethours = document.getElementById('hours').innerHTML = hourstodisplay;
                const getminutes = document.getElementById('minutes').innerHTML = minutestodisplay;
                const getsec = document.getElementById('seconds').innerHTML = secondstodisplay;





            }






            // modal 
            var getmddialog = document.querySelectorAll('.modal-dialogs');
            var gettowrite = document.querySelector('.write-modal');

            function closemodal() {
                gettowrite.classList.remove('hidden')
            }

            function openmodal() {
                gettowrite.classList.toggle('hidden')
            }
            for (var x = 0; x < getmddialog.length; x++) {
                // getmddialog[x].addEventListener('click', closemodal);
                getmddialog[x].addEventListener('click', function () {
                    gettowrite.classList.add('hidden')
                })
            }

            var towritebtn = document.querySelector('.towritebtn');

            towritebtn.addEventListener('click', function () {
                closemodal()
                // console.log('hi')
            });


            // image upload 

            function fileview(event) {
                // console.log(event);
                const getinput = event.target;
                // console.log(getinput);

                const getpreview = document.getElementById('preview');
                // console.log(getpreview.src);

                // var filereader = new FileReader();  //object 
                // filereader.readAsDataURL(getinput.files[0]); //method

                // console.log(getinput.files);
                // console.log(getinput.files[0]);
                // console.log(getinput.files[0].size);

                //object // URL.createObjectURL()//create temporarity file / binary code change
                // console.log(URL.createObjectURL(getinput.files[0]));

                getpreview.src = URL.createObjectURL(getinput.files[0]);


            }



            // json 

        </script>

</body>

</html>
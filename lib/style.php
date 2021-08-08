<style>
    /* Carousel CSS */
    .carousel {
        width: 100%;
        margin-bottom: 50px;
        height: auto;
    }

    .carousel-caption h2 {
        font-size: 4rem;
        color: #252429;
        font-family: 'Nunito', sans-serif;
        font-weight: 900 !important;
        letter-spacing: 2px;
        margin-top: 70px;
    }

    .carousel-caption a {
        font-family: 'Nunito', sans-serif;
        font-weight: 700 !important;
        background-color: #f59bc9;
        padding: 10px 30px;
        display: inline-block;
        color: #fff;
        font-size: 20px;
        margin-top: 15px;
        border-radius: 50px;
    }

    .carousel-caption a:hover {
        color: #ffd8f2;
        background-color: #fff;
        text-decoration: none;
    }

    */ .carousel-item {
        background-size: cover;
        width: 100%;
    }

    .carousel-item img {
        width: 100%;
    }

    @media (min-width: 950px) and (max-width: 1150px) {
        .carousel-caption {
            height: auto;
        }

        .carousel-caption h2 {
            font-size: 1.7rem;
            margin-top: 0px;
        }

        .carousel-caption h3 {
            font-size: 0.9rem;
        }

        .carousel-caption p {
            font-size: 14px;
        }

        .disp-blc {
            display: none;
        }
    }

    @media (min-width: 460px) and (max-width: 949px) {
        .carousel-caption {
            height: auto;
        }

        .carousel-caption h2 {
            font-size: 1.5rem;
            margin-top: 0px;
        }

        .carousel-caption h3 {
            font-size: 0.7rem;
        }

        .carousel-caption p {
            font-size: 14px;
        }

        .carousel-caption a {
            padding: 6px 18px;
            margin-top: 10px;
            font-size: 13px;
        }

        .disp-blc {
            display: none;
        }
    }

    @media (max-width:975px) {
        .banner-shape {
            display: none;
        }
    }

    @media (max-width: 459px) {
        .carousel-caption {
            bottom: 100px;
        }

        .carousel-caption h2 {
            font-size: 1.1rem;
        }

        .carousel-caption h3 {
            display: none;
        }

        .disp-blc {
            display: none;
        }

        .carousel-caption a {
            padding: 4px 12px;
            display: inline-block;
            color: #fff;
            margin-top: 5px;
            border-radius: 50px;
            font-size: 11px;
        }
    }



    /* Sign In CSS */
    .sign_in {
        max-width: 1200px;
    }

    .sign_in a {
        display: inline-block;
        text-decoration: none;
    }

    .sign_in input {
        outline: none !important;
    }

    section#formHolder {
        padding: 50px 0;
    }

    .brand {
        padding: 20px;
        background: url(https://goo.gl/A0ynht);
        background-size: cover;
        background-position: center center;
        color: #fff;
        min-height: 580px;
        position: relative;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
        transition: all 0.6s cubic-bezier(1, -0.375, 0.285, 0.995);
        z-index: 999;
    }

    .brand.active {
        width: 100%;
    }

    .brand::before {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.85);
        z-index: -1;
    }

    .brand a.logo {
        color: #FF7F50;
        font-size: 20px;
        font-weight: 700;
        text-decoration: none;
        line-height: 1em;
    }

    .brand a.logo span {
        font-size: 30px;
        color: #fff;
        transform: translateX(-5px);
        display: inline-block;
    }

    .brand .heading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        transition: all 0.6s;
    }

    .brand .heading p {
        font-size: 15px;
        font-weight: 300;
        letter-spacing: 2px;
        white-space: 4px;
        font-family: "Raleway", sans-serif;
    }

    .brand .success-msg {
        width: 100%;
        text-align: center;
        position: absolute;
        top: 67%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin-top: 60px;
    }

    .brand .success-msg p {
        font-size: 25px;
        font-weight: 400;
        font-family: "Raleway", sans-serif;
    }

    .brand .success-msg a {
        font-size: 12px;
        padding: 8px 30px;
        background: #f95959;
        text-decoration: none;
        color: #fff;
        border-radius: 30px;
    }

    .brand .success-msg p,
    .brand .success-msg a {
        transition: all 0.9s;
        transform: translateY(20px);
        opacity: 0;
    }

    .brand .success-msg p.active,
    .brand .success-msg a.active {
        transform: translateY(0);
        opacity: 1;
    }

    .form {
        position: relative;
    }

    .form .form-peice {
        background: #fff;
        min-height: 520px;
        margin-top: 30px;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        color: #aaa;
        padding: 30px 0 60px;
        transition: all 0.9s cubic-bezier(1, -0.375, 0.285, 0.995);
        position: absolute;
        top: 0;
        left: -30%;
        width: 130%;
        overflow: hidden;
    }

    .form .form-peice.switched {
        transform: translateX(-100%);
        width: 100%;
        left: 0;
    }

    .form form {
        padding: 0 40px;
        margin: 0;
        width: 70%;
        position: absolute;
        top: 50%;
        left: 60%;
        transform: translate(-50%, -50%);
    }

    .form form .form-group {
        margin-bottom: 5px;
        position: relative;
    }

    .form form .form-group.hasError input {
        border-color: #FF7F50 !important;
    }

    .form form .form-group.hasError label {
        color: #FF7F50 !important;
    }

    .form form label {
        font-size: 13px;
        font-family: 'Nunito', sans-serif;
        font-weight: 400 !important;
        transform: translateY(40px);
        transition: all 0.4s;
        cursor: text;
        z-index: -1;
    }

    .form form label.active {
        transform: translateY(10px);
        font-size: 10px;
    }

    .form form label.fontSwitch {
        font-family: 'Nunito', sans-serif !important;
        font-weight: 400 !important;
    }

    .form form input:not([type=submit]) {
        background: none;
        outline: none;
        border: none;
        display: block;
        padding: 10px 0;
        width: 100%;
        border-bottom: 1px solid #eee;
        color: #444;
        font-size: 15px;
        font-family: 'Nunito', sans-serif;
        font-weight: 400 !important;
        z-index: 1;
    }

    .form form input:not([type=submit]).hasError {
        border-color: #FF7F50;
    }

    .form form span.error {
        color: #FF7F50;
        font-family: 'Nunito', sans-serif;
        font-weight: 400 !important;
        font-size: 13px;
        position: absolute;
        bottom: -20px;
        right: 0;
        display: none;
    }

    .form form input[type=password] {
        color: #FF7F50;
    }

    .form form .CTA {
        margin-top: 30px;
    }

    .form form .CTA input {
        font-size: 1rem;
        padding: 5px 30px;
        background: #FF7F50;
        color: #fff;
        border-radius: 30px;
        margin-right: 20px;
        border: none;
        font-family: 'Nunito', sans-serif;
        font-weight: 800 !important;
    }

    .form form .CTA a.switch {
        font-size: 15px;
        font-family: 'Nunito', sans-serif;
        font-weight: 800 !important;
        color: #aaa;
        text-decoration: underline;
        transition: all 0.3s;
    }

    .form form .CTA a.switch:hover {
        color: #FF7F50;
    }

    #button-addon3,
    .btn-block.procced,
    .btn-block.procced-2 {
        color: #FF7F50;
        border: 3px solid #FF7F50;
        transition: 0.5s ease;
        font-family: 'Nunito', sans-serif;
        font-weight: 800 !important;
    }

    #button-addon3,
    .btn-block.procced-2,
    .btn-block.procced:hover {
        color: #fff;
        border: 3px solid #FF7F50;
        background-color: #FF7F50;
        transition: 0.5s ease;
    }

    @media (max-width: 768px) {
        .sign_in {
            margin-top: 50px;
            overflow: hidden;
        }

        section#formHolder {
            padding: 0;
        }

        section#formHolder div.brand {
            min-height: 200px !important;
        }

        section#formHolder div.brand.active {
            min-height: 100vh !important;
        }

        section#formHolder div.brand .heading.active {
            top: 200px;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        section#formHolder div.brand .success-msg p {
            font-size: 16px;
        }

        section#formHolder div.brand .success-msg a {
            padding: 5px 30px;
            font-size: 10px;
        }

        section#formHolder .form {
            width: 80vw;
            min-height: 500px;
            margin-left: 10vw;
        }

        section#formHolder .form .form-peice {
            margin: 0;
            top: 0;
            left: 0;
            width: 100% !important;
            transition: all 0.5s ease-in-out;
        }

        section#formHolder .form .form-peice.switched {
            transform: translateY(-100%);
            width: 100%;
            left: 0;
        }

        section#formHolder .form .form-peice>form {
            width: 100% !important;
            padding: 60px;
            left: 50%;
        }
    }

    @media (max-width: 480px) {
        section#formHolder .form {
            width: 100vw;
            margin-left: 0;
        }
    }



    /* Like CSS */
    .section #products .open-search {
        text-align: center;
        border-radius: 3px;
        flex: auto;
        margin: 60px 15px 0;
        overflow: hidden;
        position: relative;
    }

    .deleted {
        margin: 0 auto;
        position: relative;
        font-size: 20px;
        position: absolute;
        right: 0px;
        top: 8px;
    }

    .deleted:hover i {
        color: orange;
    }

    .deleted i {
        cursor: pointer;
        padding: 10px 12px 8px;
        background: #fff;
        border-radius: 50%;
        display: inline-block;
        margin: 0 0 15px;
        color: #999;
        transition: .3s;
    }

    @media (max-width: 750px) {}

    .section #products .open-search .fa-search {
        display: none;
    }

    @media (max-width: 750px) {}

    .section #products .open-search .input-open-search {
        display: none;
    }

    .section #products .open-search .input-open-search:checked~.search {
        display: block;
    }

    @media (max-width: 475px) {
        .section #products .search {
            display: none;
            position: absolute;
            left: 0;
            top: 70px;
            width: 100%;
            z-index: 999;
        }
    }

    .section #products .search .input-search {
        border-radius: 3px;
        border: 1px solid #e1e1e1;
        height: 40px;
        margin-right: 80px;
        padding: 0 70px 0 15px;
        width: 89%;
        background: white no-repeat;
        transition: 100ms all linear 0s;
        background-image: linear-gradient(to bottom, rgba(77, 97, 252, 0.63) 0%, #4d61fc 90%), linear-gradient(to bottom, #e1e1e1, #e1e1e1);
        background-size: 0 2px, 100% 1px;
        background-position: 50% 100%, 50% 100%;
        transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
    }

    .section #products .search .input-search:focus {
        background-size: 100% 2px, 100% 1px;
        outline: none;
    }

    .section #products .search .button-search {
        background: #FF7F50;
        border: 0;
        color: #fff;
        cursor: pointer;
        padding: 13px 20px;
        position: absolute;
        right: 60px;
        top: 0px;
    }

    .section #products .search .button-search .fa-search {
        display: block;
    }

    .slick-slide img {
        filter: grayscale(100%);
        transition: 0.5s ease;
        opacity: 0.4;
    }

    .slick-slide img:hover {
        transition: 0.5s ease;
        opacity: 1;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
    }

    .slick-list:focus {
        outline: none;
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }

    .slick-track:before,
    .slick-track:after {
        display: table;
        content: '';
    }

    .slick-track:after {
        clear: both;
    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
        float: right;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-initialized .slick-slide {
        display: block;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
        display: none;
    }

    .card {
        border-radius: 20px;
    }

    .ind-menu-card {
        margin-bottom: 120px;
        text-align: center;
    }

    .ind-menu-card .card {
        border: none;
        background: #fff;
        border-radius: 10px;
        display: inline-block;
        height: 215;
        margin: 1rem;
        position: relative;
        width: 400;
    }

    article {
        text-align: center;
    }

    .ind-menu-card .card img {
        transition: 2s ease;
    }

    .ind-menu-card .card img:hover {
        transform: scale(1.1);
        transition: 2s ease;
    }

    .ind-menu-card .card-5 {
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .title1 {
        margin-bottom: 25px;
    }

    .title5 {
        margin-bottom: 60px;
    }

    .product_ {
        margin-bottom: 120px;
    }

    .product_ h4 {
        color: #FF7F50;
        font-family: Nunito;
        font-weight: 800;
    }

    .product_ p {
        line-height: 30px;
        font-family: 'Nunito', sans-serif;
        font-weight: 500 !important;
        font-size: 16px;
        letter-spacing: 0.5px;
    }


    /* Index Scale Photos CSS */
    .parallax {
        background: url(assets/img/pet-brand.jpg) no-repeat center;
        background-size: cover;
        background-attachment: fixed;
        height: 590px;
        margin: 70px 0 120px 0;
    }

    .parallax img {
        top: 0;
        margin-left: 10%;
    }

    .parallax h1 {
        font-size: 4rem;
        letter-spacing: 2px;
        text-align: center;
        padding-top: 200px;
        font-family: 'Nunito', sans-serif;
        font-weight: 900 !important;
        color: #1d1d1d;
    }

    .parallax h3 {
        font-size: 22px;
        font-family: 'Nunito', sans-serif;
        font-weight: 600;
        text-align: center;
        color: #FF7F50;
    }

    @media (max-width: 1024px) and (min-width:586px) {
        .parallax img {
            top: 0;
            margin-left: 0;
            width: 210px;
            height: 280px;
        }

        .parallax {
            height: 585px;
        }

        .parallax h1 {
            font-size: 4rem;
        }

        .parallax h3 {
            font-size: 16px;
        }
    }

    @media (max-width: 585px) and (min-width:327px) {
        .parallax img {
            top: 0;
            margin-left: 0;
            width: 210px;
            height: 280px;
        }

        .parallax {
            height: 790px;
        }

        .parallax h1 {
            font-size: 4rem;
        }

        .parallax h3 {
            font-size: 16px;
        }
    }

    @media (max-width: 326px) {
        .parallax img {
            top: 0;
            margin-left: 0;
            width: 210px;
            height: 280px;
        }

        .parallax {
            height: 530px;
        }

        .parallax h1 {
            font-size: 2.8rem;
        }

        .parallax h3 {
            font-size: 15px;
        }
    }

    /* Header CSS */

    .title {
        font-family: 'Nunito', sans-serif;
        font-weight: 400 !important;
    }

    body {
        font-family: 'Nunito', sans-serif;
        font-weight: 400 !important;
    }

    a {
        text-decoration: none !important;
    }

    .breadcrumb a {
        font-family: 'Nunito', sans-serif;
        font-weight: 700 !important;
        font-size: 14px;
    }

    .breadcrumb a:hover {
        text-decoration: none;
        color: #343434;
    }

    .breadcrumb a:hover {
        color: #FF7F50;
        transition: 0.4s ease-in-out;
    }

    .breadcrumb {
        margin-left: -15px;
        margin-top: 50px;
        background-color: transparent;
    }

    .breadcrumb-active {
        color: #FF7F50;
    }

    .breadcrumb li a,
    .breadcrumb li i {
        padding-right: 10px;
    }

    .breadcrumb li i {
        color: #FF7F50;
    }

    .menu-basket {
        position: relative;
        display: inline-block;
    }

    .menu-basket .basket {
        display: inline-block;
        padding: 0 16px;
        text-decoration: none;
    }

    .dd_link {
        padding: 0px 40px 5px 10px;
    }

    .dd_link a {
        font-family: 'Nunito', sans-serif;
        font-weight: 400 !important;
        transition: 0.5s ease-in-out !important;
        line-height: 0.5px;
        font-size: 16px !important;
        color: #9d9d9d !important;
    }

    .dd_link a:nth-last-child(1) {
        margin-bottom: 20px;
    }

    .dd_link a:hover {
        margin-left: 3px;
        color: #963EFF !important;
        transition: 0.5s ease-in-out !important;
    }

    .shadow-blur {
        box-shadow: 0px 2px 2px #DDDDDD;
    }

    .navbar-nav ul {
        border-radius: 10px;
        width: auto;
        background-color: #fff;
        position: absolute;
        display: none;
    }

    .navbar-nav li:hover ul {
        display: block;
    }

    .search__container {
        width: 50%;
        margin-left: -10%;
    }

    .search__input {
        box-shadow: 3px 6px 10px rgba(49, 17, 105, 0.05);
        width: 100%;
        padding: 12px 24px;
        transition: transform 500ms ease-in-out;
        font-size: 14px;
        line-height: 18px;
        background-image: url("../img/search.png");
        background-repeat: no-repeat;
        background-size: 20px 20px;
        background-position: 95% center;
        border-radius: 15px;
        border: none;
        transition: all 250ms ease-in-out;
        backface-visibility: hidden;
        transform-style: preserve-3d;
    }

    .search__input::placeholder {
        font-family: 'Nunito', sans-serif !important;
        font-weight: 500 !important;
        font-size: 15px;
        letter-spacing: 1px;
    }

    .search__input:hover,
    .search__input:focus {
        box-shadow: 3px 6px 10px rgba(49, 17, 105, 0.05);
        padding: 12px;
        outline: 0;
        border: none;
        background-position: 98% center;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    .navbar-collapse .sub-arrow:after {
        content: '\203A';
        float: right;
        margin-left: 13px;
        transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        font-size: 18px;
    }

    .navbar-collapse li:hover .sub-arrow:after {
        content: '\2039';
    }

    .navbar-nav ul a:before {
        content: '\203A';
        margin-right: 10px;
    }

    .navbar-nav ul li a {
        font-size: 14px;
    }

    .navbar .action-form {
        width: 250px;
        padding: 20px;
        left: auto;
        display: none;
        right: 0;
        font-size: 14px;
    }

    .nav-content .navbar .action-form a {
        color: #333333;
        padding: 0 !important;
        font-size: 14px;
    }

    .nav-content .navbar .btn-primary,
    .navbar .btn-primary:active {
        color: #fff;
        background: #33cabb !important;
        border: none;
    }

    .nav-content .navbar .btn-primary:hover,
    .navbar .btn-primary:focus {
        color: #fff;
        background: #31bfb1 !important;
    }

    .nav-content .navbar .social-btn .btn,
    .navbar .social-btn .btn:hover {
        color: #fff;
        margin: 0;
        padding: 0 !important;
        font-size: 13px;
        border: none;
        transition: all 0.4s;
        text-align: center;
        line-height: 34px;
        width: 47%;
        text-decoration: none;
    }

    .or-seperator {
        margin-top: 32px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }

    .or-seperator b {
        color: #666;
        padding: 0 8px;
        width: 50px;
        height: 30px;
        font-size: 13px;
        text-align: center;
        line-height: 26px;
        background: #fff;
        display: inline-block;
        border: 1px solid #e0e0e0;
        border-radius: 50%;
        position: relative;
        top: -15px;
        z-index: 1;
    }

    .dropdown:hover .action-form {
        display: block;
    }

    .form-check-label input {
        position: relative;
        top: 1px;
    }

    @media (max-width: 768px) {
        .nav-content .navbar .dropdown-menu.action-form {
            width: 100%;
            padding: 10px 15px;
            background: transparent;
            border: none;
        }

        .nav-content .navbar .form-inline {
            display: block;
        }

        .dropdown-menu.action-form {
            display: none;
        }

        .nav-content .nav-item a {
            font-size: 10px;
        }
    }

    .nav-content .nav-item a {
        font-size: 14px;
        color: #666;
        font-weight: 500;
        margin-top: 18px;
    }

    .nav-content .menu-basket a {
        font-size: 14px;
        color: #333333;
    }

    .nav-content .menu-basket a img {
        width: 24px;
    }

    .nav-content .nav-item a:hover {
        color: #FF7F50;
    }

    .nav-content-item a:hover {
        color: #FF7F50;
    }

    .btn-login {
        background-color: #FF7F50;
        border-radius: 50px;
        color: white;
    }

    .btn-login:hover {
        color: white;
    }

    .btn-register {
        border-radius: 50px;
        box-shadow: 0px 1px 7px #ddd;
    }

    .nav-content {
        max-width: 400px;
    }

    .menu-basket .basket span {
        background-color: #FF7F50;
        padding: 1px 5px;
        font-weight: 700;
        border-radius: 50%;
        color: #fff;
        font-size: 11px;
    }

    .title-inner1 {
        color: #222222;
        text-transform: uppercase;
        font-weight: 700;
        line-height: 1;
        letter-spacing: 0.02em;
    }

    .menu-basket .empty {
        color: #999999;
    }

    .menu-basket .basket-content {
        position: absolute;
        right: 0;
        font-family: 'Nunito', sans-serif;
        top: 32px;
        background: #ffffff;
        max-width: 500px;
        width: 350px;
        text-align: center;
        box-shadow: 0px 3px 4px 0px rgba(0, 0, 0, 0);
        overflow-x: hidden;
        max-height: 0;
        -moz-transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1), box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1), box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1);
        -webkit-transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1), box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1), box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .menu-basket:hover .basket {
        color: #FF7F50;
        transition: 0.8s ease;
        cursor: pointer;
    }

    .menu-basket:hover .basket-content {
        cursor: inherit;
        z-index: 6;
        max-height: 300px;
        -moz-transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms, box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms;
        -o-transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms, box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms;
        -webkit-transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms, box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms;
        transition: max-height 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms, box-shadow 100ms cubic-bezier(0.645, 0.045, 0.355, 1) 60ms;
        box-shadow: 0px 3px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .menu-basket .total {
        font-family: 'Nunito', sans-serif;
        font-weight: 800 !important;
        color: #FF7F50;
        font-size: 20px;
    }

    .basket-content h6 span {
        color: #FF7F50;
    }

    .basket-content tr {
        border-bottom: 1px solid #eee;
    }

    header strong {
        padding: 0;
        margin: 0;
    }

    header>label,
    a {
        text-decoration: none;
        color: #555;
    }

    header ul {
        list-style: none;
        padding: 0;
    }

    header {
        background-color: white;
        box-shadow: 2px 9px 49px -17px rgba(0, 0, 0, 0.3);
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    header .container {
        align-items: center;
        display: flex;
        height: 70px;
        justify-content: space-between;
        margin: 0 auto;
        max-width: 1300px;
        padding: 0 15px;
        position: relative;
        width: 100%;
    }

    header .container .logo img {
        margin-top: 25px;
        height: 220px;
        width: 220px
    }

    @media (max-width: 750px) {
        .container .search__container {
            display: none;
            margin: 0;
            position: static;
            text-align: right;
        }
    }

    @media (max-width: 750px) {
        .fa-user-circle {
            margin-top: 5px;
            font-size: 23px;
        }

        .fa-angle-down {
            margin-top: 5px;
            margin-left: 5px;
        }

        .container .search {
            display: none;
            position: absolute;
            left: 0;
            top: 70px;
            width: 100%;
            z-index: 999;
        }
    }

    .container .search .input-search {
        border-radius: 15px;
        border: none;
        height: 40px;
        padding: 0 70px 0 15px;
        width: 100%;
        background: white no-repeat;
        transition: 100ms all linear 0s;
        background-image: linear-gradient(to bottom, rgba(77, 97, 252, 0.63) 0%, #4d61fc 90%), linear-gradient(to bottom, #e1e1e1, #e1e1e1);
        background-size: 0 2px, 100% 1px;
        background-position: 50% 100%, 50% 100%;
        transition: background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
    }

    .container .search .input-search:focus {
        background-size: 100% 2px, 100% 1px;
        outline: none;
    }

    .container .search .button-search {
        border-radius: 10px;
        background: #FF7F50;
        border: 0;
        color: #fff;
        cursor: pointer;
        padding: 13px 20px;
        position: absolute;
        right: 0px;
        top: 0px;
    }

    .container .search .button-search .fa-search {
        display: block;
    }

    .container .nav-content .nav-content-list {
        align-items: center;
        display: flex;
        justify-content: space-between;
        margin: auto;
    }

    .container .nav-content .nav-content-list .nav-content-item {
        align-items: center;
        display: flex;
        margin: 0 5px;
        position: relative;
        transition: 100ms all linear 0s;
    }

    @media (max-width: 750px) {
        .container .nav-content .nav-content-list .nav-content-item {
            padding: 0 5px;
        }
    }

    .container .nav-content .nav-content-list .nav-content-item .item-arrow {
        margin-left: 5px;
        position: relative;
        top: -3px;
    }

    @media (max-width: 768px) {
        .container .nav-content .nav-content-list .nav-content-item .item-arrow {
            display: none;
        }
    }

    .container .nav-content .nav-content-list .nav-content-item .open-menu-login-account {
        align-items: center;
        cursor: pointer;
        display: flex;
        position: relative;
        margin-top: 25px;
    }

    .container .nav-content .nav-content-list .nav-content-item .input-menu {
        display: none;
    }

    .container .nav-content .nav-content-list .nav-content-item .input-menu:checked~.login-list {
        display: block;
    }

    .container .nav-content .nav-content-list .nav-content-item .login-list {
        background: #fff;
        border-bottom: 5px solid #963EFF;
        border-top: 1px solid #ddd;
        border-radius: 3px;
        box-shadow: 2px 9px 49px -17px rgba(0, 0, 0, 0.3);
        display: none;
        overflow: hidden;
        position: absolute;
        right: -10px;
        top: 50px;
        transition: 100ms all linear 0s;
        width: 130px;
        z-index: 5;
    }

    .container .nav-content .nav-content-list .account-login .login-text {
        align-items: end;
        display: flex;
        flex-direction: column;
        font-size: 13px;
        margin-left: 5px;
        margin-top: 5px;
    }

    .nav-container .all-navigator .fa-angle-up {
        display: none;
    }

    .nav-container .all-navigator .fas {
        font-size: 16px;
        margin-right: 0;
    }

    .nav-container .all-navigator span {
        margin-left: 15px;
    }

    .all-category-nav {
        display: none;
    }

    @media (max-width: 750px) {
        .nav-container .all-category-nav {
            max-width: 100%;
        }

        .nav-container .all-category-nav .open-menu-all {
            align-items: center;
            cursor: pointer;
            display: flex;
            position: relative;
        }

        .nav-container .all-category-nav .input-menu-all {
            display: none;
        }

        .nav-container .all-category-nav .input-menu-all:checked~.all-category-list {
            margin-top: 15px;
            display: block;
        }

        .nav-container .all-category-nav .input-menu-all:checked+.all-navigator .fa-angle-down {
            display: none;
        }

        .nav-container .all-category-nav .input-menu-all:checked+.all-navigator .fa-angle-up {
            display: block;
        }

        .nav-container .all-category-list {
            background: #fff;
            border-bottom: 3px solid #963EFF;
            box-shadow: 2px 9px 49px -17px rgba(0, 0, 0, 0.3);
            display: none;
            height: auto;
            min-height: 300px;
            padding: 15px 0;
            position: absolute;
            top: 24px;
            width: 300px;
            z-index: 90;
        }
    }

    @media (max-width: 750px) {
        .nav-container .all-category-list {
            min-width: 100%;
        }

        .nav-container .all-category-list-item:hover {
            display: block;
            background: #963EFF;
        }

        .nav-container .all-category-list-item:hover .category-second-list {
            left: 100%;
            opacity: 1;
            visibility: visible;
        }

        .nav-container .all-category-list-item:hover .all-category-list-link {
            color: #fff;
        }

        .nav-container .all-category-list-link {
            align-items: center;
            display: flex;
            justify-content: space-between;
            padding: 15px;
            transition: 100ms all linear 0s;
        }
    }

    .nav-container .category-second-list {
        background: #fff;
        border-bottom: 3px solid #963EFF;
        box-shadow: inset 44px -1px 88px -59px rgba(0, 0, 0, 0.37);
        display: flex;
        height: 322px;
        left: 80%;
        min-height: 297px;
        min-width: 400px;
        opacity: 0;
        position: absolute;
        top: 0;
        transition: 100ms all linear 0s;
        visibility: hidden;
        width: auto;
    }

    @media (max-width: 750px) {
        .nav-container .category-second-list {
            display: none;
        }
    }

    .nav-container .category-second-list .img-product-menu img {
        max-width: 180px;
    }

    .nav-container .category-second-list-ul {
        display: flex;
        flex-direction: column;
        min-width: 400px;
        padding: 0 15px;
    }

    .nav-container .category-second-item a {
        align-items: center;
        display: flex;
        justify-content: space-between;
        padding: 15px;
    }

    .nav-container .category-second-item:hover {
        background: #963EFF;
    }

    .nav-container .category-second-item:hover a {
        color: #fff;
    }

    .fa-bars {
        font-size: 28px;
    }


    /*Language*/

    @media (max-width:995px) {
        #navbarSupportedContent ul li a i {
            margin-left: 20px;
        }
    }


    /*Languages*/

    .nav-link {
        padding: .4rem;
    }

    .nav-item.dropdown>.nav-link {
        font-size: 17px;
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 500 !important;
    }

    .tr-en a {
        font-family: 'Nunito', sans-serif;
        font-weight: 700 !important;
        text-decoration: none;
        font-size: 17px;
        display: block;
        transition-duration: 0.6s;
        position: relative;
        text-transform: capitalize;
        color: #963EFF !important;
        opacity: 0.8;
    }

    .tr-en a:hover {
        color: #FF7F50 !important;
    }


    /*----------multi-level-accordian-menu------------*/

    .navbar-mainbg {
        background-color: #fff;
        padding: 0px;
    }

    #navbarSupportedContent {
        overflow: hidden;
    }

    #navbarSupportedContent ul {
        padding: 5px;
        margin: 0px;
    }

    #navbarSupportedContent li {
        list-style-type: none;
        float: left;
    }

    #navbarSupportedContent ul li a {
        font-family: 'Nunito', sans-serif;
        font-weight: 700 !important;
        text-decoration: none;
        font-size: 18px;
        display: block;
        transition-duration: 0.6s;
        position: relative;
        padding: 33px 16px 20px 16px;
        text-transform: capitalize;
        color: #555555;
        font-weight: 700;
        position: relative;
        z-index: 1;
    }

    #navbarSupportedContent ul li a:hover {
        color: #963EFF;
    }

    #navbarSupportedContent>ul>li.active>a {
        color: #963EFF;
        background-color: transparent;
        transition: all 0.5s;
    }

    #navbarSupportedContent a:not(:only-child):after {
        position: absolute;
        right: 20px;
        top: 10px;
        font-size: 14px;
        font-family: "Font Awesome 5 Free";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        transition: 0.5s;
    }

    #navbarSupportedContent .active>a:not(:only-child):after {
        transform: rotate(90deg);
    }

    .hori-selector {
        display: inline-block;
        position: absolute;
        height: 100%;
        top: 0px;
        left: 0px;
        transition-duration: 0.6s;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        margin-top: 10px;
    }

    @media(min-width: 992px) {
        .navbar-expand-custom {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-custom .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-custom .navbar-toggler {
            display: none;
        }

        .navbar-expand-custom .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important;
            justify-content: center;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
    }

    @media (max-width: 992px) {
        .navbar-mainbg {
            background-color: #963EFF;
            margin-top: 15px;
        }

        .navbar-collapse .sub-arrow:after {
            content: '\203A';
            float: right;
            margin-left: 13px;
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            font-size: 18px;
        }

        .navbar-collapse li:hover .sub-arrow:after {
            content: '\2039';
        }

        .navbar-nav ul a:before {
            content: '\203A';
            margin-left: 30px;
        }

        .navbar-nav ul li a {
            font-size: 14px;
        }

        .navbar-nav ul {
            border-radius: 0px;
            background-color: #963EFF;
            min-height: 200px;
            position: relative;
            display: none;
        }

        #navbarSupportedContent>ul>li.active>a {
            color: #963EFF;
            background-color: white;
            transition: all 0.7s;
        }

        #navbarSupportedContent ul {
            padding: 30px 0;
            margin-left: 30px;
        }

        #navbarSupportedContent ul li a {
            color: #fff;
        }

        .hori-selector {
            display: none;
        }

        .hori-selector .left,
        .hori-selector .right {
            right: 10px;
        }

        .hori-selector .left {
            top: -25px;
            left: auto;
        }
    }

    @media (max-width: 1290px) and (min-width: 1199px) {
        .lang-icon {
            display: none;
        }
    }

    .navbar-icon {
        height: 30px;
    }

    navbar-icon {
        height: 30px;
    }

    /* Footer CSS */

    @media (max-width: 1200px) {
        iframe {
            width: 250px;
        }
    }

    @media (max-width: 767px) {
        .footer.content {
            padding-left: 15px !important;
            padding-right: 15px !important;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
            width: 100%;
            -webkit-flex-grow: 1;
            flex-grow: 1;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            -webkit-flex-basis: auto;
            flex-basis: auto;
        }

        .footer.content:after,
        .footer.content:before {
            clear: both;
            content: " ";
            display: table;
        }
    }

    @media all and (min-width: 768px),
    print {

        .footer.content,
        .container-inner {
            padding-left: 15px;
            padding-right: 15px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
            width: 100%;
            -webkit-flex-grow: 1;
            flex-grow: 1;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            -webkit-flex-basis: auto;
            flex-basis: auto;
        }

        .footer.content:after,
        .footer.content:before {
            clear: both;
            content: " ";
            display: table;
        }
    }

    footer {
        margin-top: 100px;
    }

    footer p {
        font-size: 14px;
    }

    .footer-contacts li {
        font-size: 12px;
    }

    .footer-top li a {
        font-size: 15px;
    }

    .footer-contacts {
        background: #1f1f1f;
        color: #ffffff;
        padding: 50px 0 0;
    }

    .footer-contacts ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .footer-contacts ul i {
        margin-right: 5px;
    }

    .footer-contacts h3 {
        color: #ffffff;
        font-size: 1.2rem;
        margin: 0 0 30px;
    }

    .footer-contacts ul.link-follow li {
        display: inline-block;
        margin: 0 0 5px 20px;
        position: relative;
    }

    .footer-contacts ul.link-follow li a span {
        display: none;
    }

    .footer-contacts ul.link-follow li a .instagram,
    .instagram,
    .tiktok {
        font-size: 35px;
        color: white;
    }

    .footer-contacts ul.link-follow li a .instagram:hover,
    .tiktok:hover {
        text-decoration: none;
    }

    .footer-contacts .box-col {
        text-align: center;
        overflow: hidden;
        background: #FF7F50;
        padding: 10px;
    }

    .footer-contacts .box-col h3 {
        margin: 10px 0;
    }

    .footer-top {
        background: #f5e1d0;
        color: #ffffff;
        padding: 30px 0 40px;
    }

    .footer-top .title {
        margin: 30px 0;
        color: #444;
        font-size: 1.2rem;
        transition: 0.8s ease-in-out;
        font-family: 'Nunito', sans-serif;
        font-weight: 800 !important;
    }

    .half-a-border-on-top {
        border-bottom: 1px solid transparent;
        position: relative;
    }

    .add i {
        color: #FF7F50;
    }

    .half-a-border-on-top:after {
        padding: 0;
        margin: 0;
        display: block;
        /* probably not really needed? */
        content: "";
        width: 20%;
        height: 2.8px;
        /* slight higher to work around rounding errors(?) on some zoom levels in some browsers. */
        background-color: #FF7F50;
        position: absolute;
        left: 0;
    }

    .footer-top ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .footer-top ul li {
        line-height: 30px;
        font-size: 15px;
    }

    .footer-top ul li a {
        font-size: 13px;
        color: #777;
        font-family: 'Nunito', sans-serif;
        font-weight: 400 !important;
        transition: 0.4s ease-out;
        text-transform: capitalize;
    }


    /*
.bor-top ul li a:before {
    content: "";
    font-size: 10px;
    margin-right: 6px;
} */

    .footer-top .contact li:hover {
        color: #FF7F50;
        transition: 0.4s ease-out;
        margin-left: 6px;
    }

    .footer-top .contact li {
        transition: 0.4s ease-out;
    }

    .footer-top ul li a:hover {
        text-decoration: none;
        transition: 0.5s ease;
        color: #FF7F50;
        padding-left: 5px;
    }

    .footer-bottom {
        background: #FF7F50;
        color: #ffffff;
        padding: 20px 0;
        overflow: hidden;
    }

    .footer-bottom p {
        margin: 0;
    }

    .footer-bottom a {
        color: #ffffff;
    }

    .footer-bottom a:hover {
        text-decoration: underline;
    }


    #myBtn {
        display: none;
        position: fixed;
        bottom: 35px;
        font-size: 35px;
        box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.1);
        border: none;
        outline: none;
        background-color: #FF7F50;
        color: white;
        cursor: pointer;
        border-radius: 4px;
        right: 12px;
        width: 50px;
        height: 50px;
        color: #fff;
        z-index: 9999;
        cursor: pointer;
    }

    #myBtn:hover {
        background: #FF7F50;
        border-color: #FF7F50;
    }

    @media only screen and (max-width: 992px) {
        .footer-contacts h3 {
            margin-top: 30px;
        }
    }

    @media (max-width: 995px) {
        .half-a-border-on-top:after {
            background-color: transparent;
        }
    }

    @media (max-width: 575px) {
        footer {
            text-align: center;
        }


        .half-a-border-on-top:after {
            background-color: transparent;
        }

        .container-inner {
            display: flex;
        }
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h3 {
            color: darkmagenta;
        }

        .custom-container {
            position: relative;
            text-align: center;
            color: white;
        }

        .custom-img {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.6s ease-in-out;
        }

        .custom-img-wrapper {
            position: relative;
            display: inline-block;
        }

        .custom-img-wrapper::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.6);
            transform: translate(-50%, -50%);
            animation: spin 6s linear infinite;
        }


        .text-section {
            margin-top: 30px;
        }

        .title {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .subtitle {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }

        .btn-custom {
            border: 2px solid #ffffff;
            color: #ffffff;
            background-color: transparent;
            border-radius: 25px;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-custom:hover {
            background-color: #ffffff;
            color: #000000;
        }

        .bg-primary-custom {
            background-color: #1c5ce6;
            padding: 50px 0;
            position: relative;
        }

        .bg-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(28, 92, 230, 0.5);
            z-index: -1;
        }
    </style>
    <style>
        .progress-bar {
            background-color: #007bff;
            /* اللون الأساسي للشريط التقدمي */
            height: 20px;
            /* ارتفاع الشريط التقدمي */
            transition: width 0.6s ease;
        }

        .progress-bar.bg-primary {
            background-color: #007bff;
            /* اللون الأساسي للشريط التقدمي */
        }

        .progress-bar.bg-warning {
            background-color: #ffc107;
            /* اللون الأساسي للشريط التقدمي */
        }

        .progress-bar.bg-danger {
            background-color: #dc3545;
            /* اللون الأساسي للشريط التقدمي */
        }

        .progress-bar.bg-success {
            background-color: #28a745;
            /* اللون الأساسي للشريط التقدمي */
        }

        .progress-bar.bg-info {
            background-color: #17a2b8;
            /* اللون الأساسي للشريط التقدمي */
        }

        .progress-bar.bg-secondary {
            background-color: #6c757d;
            /* اللون الأساسي للشريط التقدمي */
        }

        .contact-section {
            background-color: #f8f9fa;
            /* Light background color */
            border-top: 1px solid #dee2e6;
            /* Optional border */
        }

        .contact-title {
            font-size: 2rem;
            color: #343a40;
            /* Dark text color */
            margin-bottom: 0.5rem;
        }

        .contact-description {
            font-size: 1.125rem;
            color: #6c757d;
            /* Gray text color */
        }

        .contact-icons {
            font-size: 1.5rem;
            /* Icon size */
        }

        .contact-icon {
            color: #007bff;
            /* Blue color for icons */
            margin: 0 1rem;
            text-decoration: none;
        }

        .contact-icon:hover {
            color: #0056b3;
            /* Darker blue on hover */
        }

        .contact-icon i {
            transition: color 0.3s ease;
        }

        .contact-section {
            background-color: #f8f9fa;
            /* Light background color */
            border-top: 1px solid #dee2e6;
            /* Optional border */
        }

        .contact-title {
            font-size: 2rem;
            color: #343a40;
            /* Dark text color */
            margin-bottom: 0.5rem;
        }

        .contact-description {
            font-size: 1.125rem;
            color: #6c757d;
            /* Gray text color */
        }

        .contact-icons {
            font-size: 1.5rem;
            /* Icon size */
        }

        .contact-icon {
            color: #007bff;
            /* Blue color for icons */
            margin: 0 1rem;
            text-decoration: none;
        }

        .contact-icon:hover {
            color: #0056b3;
            /* Darker blue on hover */
        }

        .contact-icon i {
            transition: color 0.3s ease;
        }

        .service-section {
            padding: 60px 0;
        }

        .service-section .service-box {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-section .service-box:hover {
            transform: translateY(-10px);
        }

        .service-section .service-box i {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #007bff;
        }

        .service-section .service-box h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .service-section .service-box p {
            color: #6c757d;
        }

        .title {
            color: darkblue;
            font-size: revert-layer;
            font-weight: 900;
            font-style: oblique;
            /* border: 4px solid; */
            background-color: mediumorchid;
            border-radius: 149px;
        }
    </style>
    <style>
        /* تعديل خلفية وشكل الـ container */
        .container-fluid {
            padding: 0;
        }

        .container {
            max-width: 1140px;
            margin: 0 auto;
        }

        /* تحسين تنسيق العناوين */
        .display-1 {
            font-size: 4rem;
        }

        .text-primary {
            color: #007bff;
        }

        /* تنسيق الصور داخل القوائم */
        .socail ul {
            display: flex;
            flex-wrap: wrap;
            /* السماح للعناصر بالالتفاف */
            justify-content: center;
            /* توسيط العناصر */
            padding: 0;
            list-style-type: none;
        }

        .socail ul li {
            margin: 5px;
        }

        .socail ul li img {
            width: 80px;
            height: auto;
            border-radius: 8px;
            /* حواف دائرية للصور */
        }

        .socail ul a {
            font-size: 1rem;
            color: #007bff;
            text-decoration: none;
        }

        .socail ul a:hover {
            text-decoration: underline;
        }

        /* تحسين تنسيق النموذج */
        .contact-form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .contact-form .form-control {
            border-radius: 4px;
        }

        .contact-form .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .contact-form .btn-primary:hover {
            background-color: #0056b3;
        }

        /* تحسين تنسيق العناصر داخل الفقرة */
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .section-title span {
            border-bottom: 3px solid #007bff;
            padding-bottom: 0.5rem;
        }

        .section-title+h1 {
            font-size: 2.5rem;
        }

        /* تحسين التنسيق باستخدام Flexbox */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-lg-7,
        .col-lg-5 {
            padding: 1rem;
        }

        .col-lg-7 p,
        .col-lg-7 h1 {
            margin-bottom: 1.5rem;
        }

        /* تنسيق الجداول */
        .col-sm-6 {
            margin-bottom: 1rem;
        }

        .col-sm-6 h5 {
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .fa {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .display-1 {
                font-size: 2.5rem;
            }

            .socail ul li img {
                width: 60px;
            }

            .contact-form {
                padding: 20px;
            }
        }
    </style>
    <style>
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }

        .social-icons a {
            color: #fff;
            font-size: 40px;
            transition: transform 0.2s;
        }

        .social-icons a:hover {
            transform: scale(1.2);
        }

        .social-icons a svg {
            width: 40px;
            height: 40px;
        }
    </style>

    <title>Portfolio</title>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> --}}

    <div class="container-fluid bg-primary-custom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Welcome to my website</h3>
                    <h1 class="title text-uppercase mb-2">EMAM MEDHAT MOHAMED</h1>
                    <br>
                    <h2 style="color: antiquewhite;" class="subtitle">Web Designer , Web Developer , Front End Developer
                        ,
                        Apps Designer , Apps
                        Developer
                    </h2>
                    <a href="{{ url('/public/img/th.jpeg') }}" download="myfile.jpeg">
                        <button
                            style="padding: 10px 20px; background-color: #009879; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                            تحميل الـ PDF
                        </button>
                    </a>





                </div>
                <div class="col-lg-6 text-center">
                    <div class="custom-img-wrapper">
                        <img style="    height: 402px;" src="{{ asset('img/photo_2024-08-20_10-17-58.jpg') }}"
                            alt="Profile Image" class="custom-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="title text-white">About</h1>
                <h2 class="subtitle text-primary">About Me</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{ asset('img/emam.jpg') }}" alt="About Me">

                </div>
                <div class="col-lg-7 text-section">
                    <h3 class="mb-4"> Web Developer & back end php laravel</h3>
                    <p>I am a highly skilled Backend Developer with extensive experience in crafting robust web
                        solutions using the Laravel framework. My expertise lies in transforming complex concepts into
                        seamless, user-friendly web applications. I excel in utilizing HTML5, CSS3, and Bootstrap to
                        create visually appealing and responsive front-end designs, while leveraging JavaScript and PHP
                        to develop powerful back-end functionalities.

                        Proficient in managing and optimizing databases with MySQL, I ensure high performance and
                        efficiency in all applications. My strong background in WordPress also enables me to deliver
                        comprehensive solutions for website development and management.

                        Dedicated to staying at the forefront of technology and best practices in web development, I am
                        committed to providing innovative and effective solutions that exceed client expectations and
                        drive business success.</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2">
                            <h6">Name: <span class="text-secondary">Emam MEdhat</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Birthday: <span class="text-secondary">26 novomber 2003</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Degree: <span class="text-secondary">Master</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>academy: <span class="text-secondary">misr engineering & technology official</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Experience: <span class="text-secondary">1 Year</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Phone: <span class="text-secondary">+201033643475</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Email: <span class="text-secondary">am7834213@gmail.com</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Address: <span class="text-secondary">Senbellawein, Mansoura, Egypt</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Freelance: <span class="text-secondary">Available</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Experience</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Bachelor of Management </h5>
                            <p class="mb-2"><strong>Information Systems, Al-</strong> | <small>2021 - 2025</small>
                            </p>
                            <p>Graduated from Al-Sallab University with a very good grade and distinction in the
                                graduation project.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Master of Web Design</h5>
                            <p class="mb-2"><strong>Online Training Courses</strong> | <small>2020 - 2021</small></p>
                            <p>I learned to design websites professionally from the Zero course and I designed many
                                projects, such as a computer exhibition.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Master of Web Development</h5>
                            <p class="mb-2"><strong>Online Training Courses </strong> | <small>2021 - 2022</small>
                            </p>
                            <p>Professional web developer using Laravel with 1 year experience in web development and
                                working on websites and freelance jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Experience</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Designer</h5>
                            <p class="mb-2"><strong>Freelance</strong> | <small>Excellent</small></p>
                            <p>Years of experience in designing websites using html css javascript bootstrap, and has
                                influenced many websites</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Website Development</h5>
                            <p class="mb-2"><strong>Freelance</strong> | <small>Good</small></p>
                            <p>I have one year experience in developing websites professionally using PHP Laravel I have
                                done many projects and have good experience in dealing with API.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Databases</h5>
                            <p class="mb-2"><strong>mysql</strong> | <small>Excellent</small></p>
                            <p>I have in-depth knowledge in MySQL database management. I have good knowledge in how to
                                retrieve data, insert, modify and delete data easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100034540620632&mibextid=ZbWKwL" target="_blank"
                class="text-primary">
                <!-- Facebook Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993" x2="40.615"
                        y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#2aa4f4"></stop>
                        <stop offset="1" stop-color="#007ad9"></stop>
                    </linearGradient>
                    <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                        d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                    <path fill="#fff"
                        d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                    </path>
                </svg>
            </a>

            <a href="https://www.instagram.com/emamemedhat.mohamed?igsh=MWJ4dTc5OHZ6OHQ1cQ==" target="_blank"
                class="text-danger">
                <!-- Instagram Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <linearGradient id="f_5DsUxTR0Ht5Fg5A07J1a" x1="9.993" x2="40.615" y1="9.993"
                        y2="40.615" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#f09433"></stop>
                        <stop offset="0.3" stop-color="#e6683c"></stop>
                        <stop offset="0.6" stop-color="#dc2743"></stop>
                        <stop offset="1" stop-color="#cc2366"></stop>
                    </linearGradient>
                    <path fill="url(#f_5DsUxTR0Ht5Fg5A07J1a)"
                        d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                    <path fill="#fff"
                        d="M26.879,14.729c-1.644,0-3.036,1.392-3.036,3.036s1.392,3.036,3.036,3.036s3.036-1.392,3.036-3.036S28.523,14.729,26.879,14.729z M24,17.875c-3.385,0-6.125,2.74-6.125,6.125s2.74,6.125,6.125,6.125s6.125-2.74,6.125-6.125S27.385,17.875,24,17.875z M31.209,15.584c-0.378,0-0.686,0.308-0.686,0.686s0.308,0.686,0.686,0.686s0.686-0.308,0.686-0.686S31.588,15.584,31.209,15.584z M24,14.039c5.528,0,10.125,4.597,10.125,10.125S29.528,34.289,24,34.289S13.875,29.692,13.875,24.164S18.472,14.039,24,14.039 M24,13c-6.083,0-11,4.917-11,11s4.917,11,11,11s11-4.917,11-11S30.083,13,24,13L24,13z">
                    </path>
                </svg>
            </a>

            <a href="https://x.com/EMAM02021?s=09" target="_blank" class="text-info">
                <!-- Twitter Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <linearGradient id="ckN_MlB6FK5N5A_qSW12KV" x1="9.993" x2="40.615" y1="9.993"
                        y2="40.615" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#2aa4f4"></stop>
                        <stop offset="1" stop-color="#007ad9"></stop>
                    </linearGradient>
                    <path fill="url(#ckN_MlB6FK5N5A_qSW12KV)"
                        d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"></path>
                    <path fill="#fff"
                        d="M33.758,17.007c-0.878,0.39-1.823,0.652-2.815,0.77c1.012-0.606,1.788-1.567,2.152-2.71c-0.95,0.563-2.003,0.978-3.127,1.2c-0.896-0.958-2.174-1.559-3.59-1.559c-2.717,0-4.92,2.202-4.92,4.92c0,0.386,0.043,0.762,0.127,1.122c-4.09-0.206-7.719-2.164-10.147-5.142c-0.423,0.724-0.665,1.567-0.665,2.465c0,1.7,0.865,3.2,2.18,4.078c-0.803-0.026-1.558-0.246-2.216-0.612c0,0.02,0,0.04,0,0.061c0,2.376,1.69,4.358,3.933,4.806c-0.412,0.112-0.847,0.172-1.294,0.172c-0.317,0-0.625-0.031-0.927-0.089c0.626,1.957,2.444,3.382,4.599,3.42c-1.684,1.32-3.805,2.108-6.11,2.108c-0.397,0-0.788-0.023-1.174-0.069c2.179,1.396,4.767,2.211,7.548,2.211c9.054,0,14-7.502,14-14c0-0.213-0.005-0.425-0.014-0.636C32.243,18.842,33.088,18.006,33.758,17.007z">
                    </path>
                </svg>
            </a>

            <a href="https://github.com/01033643475/Emam.git" target="_blank" class="text-light">
                <!-- GitHub Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path fill="#181616"
                        d="M24,2C12.8,2,4,10.8,4,22c0,8.8,5.7,16.2,13.6,18.8c1,0.2,1.4-0.4,1.4-0.9c0-0.5,0-2,0-3.6c-5.5,1.2-6.6-2.7-6.6-2.7c-0.9-2.3-2.1-2.9-2.1-2.9c-1.7-1.2,0.1-1.2,0.1-1.2c1.9,0.1,2.9,2,2.9,2c1.7,2.9,4.4,2,5.4,1.6c0.2-1.2,0.7-2,1.2-2.5c-4.3-0.5-8.9-2.2-8.9-9.7c0-2.1,0.7-3.8,2-5.1c-0.2-0.5-0.9-2.4,0.2-5c0,0,1.6-0.5,5.2,2c1.5-0.4,3.1-0.5,4.7-0.5c1.6,0,3.2,0.2,4.7,0.5c3.6-2.5,5.2-2,5.2-2c1.1,2.6,0.4,4.5,0.2,5c1.3,1.4,2,3,2,5.1c0,7.6-4.6,9.2-8.9,9.7c0.7,0.6,1.4,1.8,1.4,3.6c0,2.5,0,4.5,0,5.1c0,0.5,0.4,1,1.4,0.9c7.9-2.7,13.6-10,13.6-18.8C44,10.8,35.2,2,24,2z">
                    </path>
                </svg>
            </a>

            <a href="https://www.linkedin.com/in/%D8%A7%D9%85%D8%A7%D9%85-%D9%85%D8%AD%D9%85%D8%AF-0553b923a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                target="_blank" class="text-primary">
                <!-- LinkedIn Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <linearGradient id="PJDzKy" x1="4.453" x2="41.727" y1="4.453" y2="41.727"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#0077b5"></stop>
                        <stop offset="1" stop-color="#0077b5"></stop>
                    </linearGradient>
                    <path fill="url(#PJDzKy)"
                        d="M42,37c0,2.761-2.239,5-5,5H11c-2.761,0-5-2.239-5-5V11c0-2.761,2.239-5,5-5h26c2.761,0,5,2.239,5,5V37z">
                    </path>
                    <path fill="#fff"
                        d="M12.653 19H17.316V36.69400000000001H12.653zM14.984 11.616C13.596 11.616 12.653 12.56 12.653 13.804S13.596 16.013 14.984 16.013c1.389 0 2.332-0.944 2.332-2.209S16.373 11.616 14.984 11.616zM18.989 19H23.573V21.272C24.186 20.019 25.541 18.938 27.635 18.938 32.008 18.938 32.653 21.762 32.653 25.967V36.694H28V26.711C28 24.506 27.527 22.812 25.979 22.812S23.957 24.08 23.957 26.334V36.694H18.989z">
                    </path>
                </svg>
            </a>

            <a href="https://t.me/Emam905" target="_blank" class="text-info">
                <!-- Telegram Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24" height="24">
                    <linearGradient id="a" x1="9.993" x2="40.615" y1="9.993" y2="40.615"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#37aee2"></stop>
                        <stop offset="1" stop-color="#1e96c8"></stop>
                    </linearGradient>
                    <path fill="url(#a)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">
                    </path>
                    <path fill="#fff"
                        d="M33.9 16.02L29 32.82c-.39 1.42-1.41 1.76-2.39 1.38l-6.6-4.86-3.18 3.07c-.35.35-.63.63-1.3.63l.47-6.65 12.15-10.97c.53-.47-.12-.73-.83-.26L17.3 25.23l-5.54-1.73c-1.21-.37-1.22-1.22.26-1.8l21.27-8.21c.99-.37 1.85.26 1.43 1.53z">
                    </path>
                </svg>

            </a>

            <a href="https://wtspee.com/201033643475" target="_blank" class="text-success">
                <!-- WhatsApp Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path fill="#25D366"
                        d="M24 4C12.954 4 4 12.954 4 24c0 4.418 1.636 8.455 4.336 11.598L4 44l8.547-4.29C15.57 41.378 19.646 43 24 43c11.046 0 20-8.954 20-20S35.046 4 24 4zm0 36c-3.938 0-7.594-1.52-10.374-4.273l-.742-.721L8 40l2.992-4.738-.793-.807C7.455 31.595 6 27.866 6 24 6 13.532 13.532 6 24 6c10.468 0 18 7.532 18 18S34.468 40 24 40z">
                    </path>
                    <path fill="#FFF"
                        d="M32.33 27.477c-.558-.279-3.295-1.625-3.806-1.814-.511-.186-.884-.28-1.256.279-.372.558-1.442 1.815-1.769 2.186-.328.372-.651.418-1.209.139-.558-.279-2.357-.87-4.491-2.773-1.66-1.479-2.781-3.305-3.109-3.863-.328-.558-.036-.86.244-1.14.251-.251.558-.651.837-1.07.279-.418.372-.698.558-1.116.186-.418.093-.837-.047-1.116-.139-.279-1.256-3.023-1.721-4.139-.419-1.009-.844-1.019-1.256-1.037h-1.07c-.28 0-.837.139-1.28.65-.558.651-1.628 1.577-1.628 3.843 0 2.266 1.669 4.453 1.899 4.769.233.279 3.285 5.027 7.955 7.056 1.113.465 1.982.744 2.66.953 1.119.349 2.138.3 2.945.186.899-.14 2.794-1.139 3.186-2.235.395-1.093.395-2.035.279-2.235-.116-.197-.419-.328-.977-.606z">
                    </path>
                </svg>
            </a>

        </div>
    </div>

    <div class="service-section">
        <div class="container">
            <div class="row text-center" style="background-color: azure;">
                <div class="col-lg-4 col-md-6 mb-4" style="background-color: darkviolet;">
                    <div class="service-box bg-white">
                        <i class="fas fa-code"></i>
                        <h4>Web Development</h4>
                        <p>Building responsive and scalable websites using the latest technologies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" style="background-color: darkviolet;">
                    <div class="service-box bg-white">
                        <i class="fas fa-laptop-code"></i>
                        <h4>Backend Development</h4>
                        <p>Expertise in server-side programming with PHP, Laravel, and MySQL.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" style="background-color: darkviolet;">
                    <div class="service-box bg-white">
                        <i class="fas fa-paint-brush"></i>
                        <h4>UI/UX Design</h4>
                        <p>Designing user-friendly interfaces that enhance user experience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" style="background-color: darkviolet;">
                    <div class="service-box bg-white">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>front end Development</h4>
                        <p>Create website designs using html, css, bootstrap, javascript</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" style="background-color: darkviolet;">
                    <div class="service-box bg-white">
                        <i class="fas fa-database"></i>
                        <h4>Database Management</h4>
                        <p>Efficiently managing and securing your data with robust database solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" style="background-color: darkviolet;">
                    <div class="service-box bg-white">
                        <i class="fas fa-search"></i>
                        <h4>API Integration</h4>
                        <p>Seamlessly integrate and manage your app functionality with powerful API solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Skills Section -->

    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="title text-red">Skills</h1>
                <h2 class="subtitle text-primary">My Skills</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">100%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 100%;" role="progressbar"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">100%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 100%;" role="progressbar"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 90%;" role="progressbar"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">MYSQL</h6>
                            <h6 class="font-weight-bold">100%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 100%;" role="progressbar"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">JavaScript</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 90%;" role="progressbar"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Bootstrap</h6>
                            <h6 class="font-weight-bold">100%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 100%;" role="progressbar"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Laravel</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width: 95%;" role="progressbar"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">WordPress</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width: 90%;" role="progressbar"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">Get In Touch</span></p>
                    <h1 class="mb-4">Contact Us For Any Query</h1>
                    <p>Vero dolor sed amet duo labore stet lorem sit stet sea ea lorem ipsum clita ipsum clita dolor
                        sed
                        vero dolor duo clita sit. Sed takimata sed vero stet magna at eirmod erat sit stet. Diam
                        diam
                        sea
                        takimata justo elitr rebum stet dolor justo.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-bold"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Our
                                Office</h5>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-bold"><i class="fa fa-phone-alt text-primary mr-2"></i>Call
                                Us</h5>
                            <p class="m-0">+201033643475</p>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-bold"><i class="fa fa-envelope-open text-primary mr-2"></i>Email Us
                            </h5>
                            <p class="m-0">am7834213@gmail.com</p>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h5 class="font-weight-bold"><i class="fa fa-fax text-primary mr-2"></i>Fax</h5>
                            <p class="m-0">+201558221050</p>
                        </div>


                    </div>
                </div>
                <form action="{{ route('post.insert') }}" method="post">
                    @csrf
                    <div class="col-lg-5">
                        <div class="contact-form bg-white" style="padding: 30px;">
                            <div id="success" style="text-align:center">SEND MASSEGE</div>
                            {{-- <form name="sentMessage" id="contactForm" novalidate="novalidate"> --}}
                            <div class="control-group">
                                <p class="help-block text-danger">NAME</p>
                                <input type="text" class="form-control p-4" name="name"
                                    placeholder="Your Name" required="required"
                                    data-validation-required-message="Please enter your name" />
                            </div>
                            <div class="control-group">
                                <p class="help-block text-danger">EMAIL</p>
                                <input type="email" class="form-control p-4" name="email"
                                    placeholder="Your Email" required="required"
                                    data-validation-required-message="Please enter your email" />
                            </div>
                            <div class="control-group">
                                <p class="help-block text-danger">subject</p>
                                <input type="text" class="form-control p-4" name="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                            </div>
                            <div class="control-group">
                                <p class="help-block text-danger">message</p>
                                <textarea class="form-control py-3 px-4" rows="5" name="message" placeholder="Message" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                            {{-- </form> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <!-- Contact Section -->
    <!-- Contact Section -->
    <div class="contact-section py-5">
        <div class="container text-center">
            <h2 class="contact-title">Get in Touch</h2>
            <p class="contact-description">Feel free to reach out to me through any of the following platforms:</p>
            <div class="contact-icons mt-4">
                <a href="mailto:your.email@example.com" class="contact-icon" aria-label="Email">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://linkedin.com/in/yourprofile" class="contact-icon" aria-label="LinkedIn"
                    target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/yourprofile" class="contact-icon" aria-label="GitHub" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://twitter.com/yourprofile" class="contact-icon" aria-label="Twitter" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <p class="mt-4 mb-0">© 2024 Your Name. All rights reserved.</p>
        </div>
    </div>
    {{--
    <h1>@lang('emam medhat mohamed')</h1>
    <h1>@lang{{ __('auth.password') }}</h1> --}}


    <!-- JavaScript (Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>


<!DOCTYPE html>
<!--  Main JS File -->

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="">
    <title> County Government Of Narok  Projects Monitoring and Tracking System | Transparent Governance</title>
<meta name="title" content="Government of Narok County Projects Monitoring and Tracking System ">
<meta name="description" content="A unified platform aimed at boosting efficiency, fostering transparency, and ensuring accountability in monitoring and tracking projects throughout the County.">
<meta name="keywords" content="A unified platform aimed at boosting efficiency, fostering transparency, and ensuring accountability in monitoring and tracking projects throughout the County.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="Government Of Narok County Applications Development Section Team">
    <!-- Favicon -->
  
    <!-- Vendor CSS Files -->
    <link href="{{asset('landing/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="p{{asset('landing/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Sweet Alerts -->
    <script src="{{asset('js/sweetalert2/sweetalert2.min.css')}}"></script>
    <!-- Odometer -->
    <link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
    <!-- Data Tables -->
    <link href="{{ asset('1.13.4/css/jquery.dataTables.css') }}" rel="stylesheet">
    <!-- DataTables Bootstrap 4 Integration CSS -->
    <link href="{{ asset('v/bs4/dt-1.13.4/r-2.4.1/datatables.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('landing/css/style.css')}}" rel="stylesheet">
    <!-- Google tag (gtag.js) -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-X223GYV8LZ');
    </script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        /* Header background */
        #header {
            background: red; /* Set header background to red */
        }
    
        /* Navigation links */
        #navbar ul li a {
            color: rgb(221, 179, 54); /* Set text color of links to yellow */
            transition: color 0.3s;
        }
    
        /* Navigation links on hover */
        #navbar ul li a:hover {
            color: white; /* Optional hover color for contrast */
        }
    
        /* Active link state */
        #navbar ul li a.active {
            color: white;
        }
    
        /* Mobile nav toggle */
        .mobile-nav-toggle {
            color: rgb(231, 185, 69); /* Adjust color for mobile menu toggle */
        }
    
        /* Navigation dropdown arrow */
        .bi-chevron-down {
            color: rgb(221, 170, 62);
        }
    </style>
    

<style>
    /* Modern Styling */
    .faq-main {
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-title {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .faq-item {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .faq-item:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .faq-question {
        padding: 15px;
        font-size: 18px;
        font-weight: 600;
        color: #007bff;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa;
    }

    .faq-question::after {
        content: "+";
        font-size: 24px;
        color: #007bff;
    }

    .faq-question.active::after {
        content: "-";
    }

    .faq-answer {
        padding: 0 15px;
        font-size: 16px;
        color: #555;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .faq-answer.open {
        padding: 15px;
        max-height: 500px; /* Adjust based on content */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .faq-main {
            padding: 10px;
        }

        .faq-title {
            font-size: 24px;
        }

        .faq-question {
            font-size: 16px;
        }

        .faq-answer {
            font-size: 14px;
        }
    }
</style>
</head>
<body>
  

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="index.htm" class="logo me-auto me-lg-0" class="img-fluid">
                    <img src="public/img/logos/merged_logo.png" alt="" class="img-fluid">
                </a>
            </h1>
    
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{route('mainhome')}}">Home</a></li>
                    <li><a href="{{route('adminfeedback')}}">Feedback</a></li>
                    @php
                    // Loop through the financial years and generate the links
                    $financialYears = \App\Models\FinancialYear::all();
                @endphp
                
                    <li class="dropdown"><a href="{{ route('home') }}"><span>Public Projects</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="">Financial Years</a></li>
                            
                            @foreach($financialYears as $year)
                                <li>
                                    <a href="{{ route('financial_years.show', ['fy' => $year->name, 'id' => $year->id]) }}">
                                        FY {{ $year->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                    </li>
                    <!-- <li class="dropdown"><a href=""><span>Projects Gallery</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="landing_knowledge_center">Projects Gallery</a></li>
                            <li><a href="landing_knowledge_departmental">Departmental Information Center</a></li>
                        </ul>
                    </li> -->
                   
               
                 
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li>
                        <a href="{{route('contactus')}}">Contact Us</a>
                    </li>
                    <li><a href="{{Route('login')}}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>   

<main class="faq-main">
    <h1 class="faq-title">Frequently Asked Questions (FAQs)</h1>

    <!-- FAQ Items -->
    <div class="faq-list">
        <!-- FAQ 1 -->
        <div class="faq-item">
            <div class="faq-question">
                What services does the County Government of Narok provide?
                <span></span>
            </div>
            <div class="faq-answer">
                The County Government of Narok provides a wide range of services, including healthcare, education, infrastructure development, water and sanitation, agriculture support, and more. Our goal is to improve the quality of life for all residents.
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item">
            <div class="faq-question">
                How can I report an issue or file a complaint?
                <span></span>
            </div>
            <div class="faq-answer">
                You can report an issue or file a complaint by visiting our offices, calling our hotline, or using our online portal. We are committed to addressing your concerns promptly and efficiently.
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">
            <div class="faq-question">
                What are the working hours of the County Government offices?
                <span></span>
            </div>
            <div class="faq-answer">
                Our offices are open from Monday to Friday, 8:00 AM to 5:00 PM. We are closed on weekends and public holidays.
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-item">
            <div class="faq-question">
                How can I apply for a business permit?
                <span></span>
            </div>
            <div class="faq-answer">
                To apply for a business permit, visit our revenue department with the required documents, including your business registration details, identification, and proof of business location. You can also apply online through our e-services portal.
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="faq-item">
            <div class="faq-question">
                What projects is the County Government currently working on?
                <span></span>
            </div>
            <div class="faq-answer">
                The County Government is currently working on several projects, including road construction, healthcare facility upgrades, water supply projects, and agricultural support programs. Visit our Projects Monitoring and Tracking System for more details.
            </div>
        </div>
    </div>
</main>

<script>
    // JavaScript for FAQ interactivity
    document.querySelectorAll('.faq-question').forEach((question) => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            question.classList.toggle('active');
            answer.classList.toggle('open');
        });
    });
</script>


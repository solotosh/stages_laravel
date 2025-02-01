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
    .contacts-main {
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .contacts-title {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .contacts-description {
        font-size: 16px;
        color: #555;
        margin-bottom: 30px;
    }

    .contacts-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .contact-card {
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .contact-icon {
        font-size: 32px;
        margin-bottom: 10px;
        color: #007bff;
    }

    .contact-title {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .contact-link {
        font-size: 16px;
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-link:hover {
        color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .contacts-title {
            font-size: 24px;
        }

        .contacts-description {
            font-size: 14px;
        }

        .contacts-grid {
            grid-template-columns: 1fr;
        }

        .contact-card {
            padding: 15px;
        }

        .contact-icon {
            font-size: 28px;
        }

        .contact-title {
            font-size: 16px;
        }

        .contact-link {
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


<main class="contacts-main">
    <h1 class="contacts-title">Contact Us</h1>
    <p class="contacts-description">
        Get in touch with the County Government of Narok through the following channels. We are here to assist you!
    </p>

    <!-- Contact Cards -->
    <div class="contacts-grid">
        <!-- Phone -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fas fa-phone"></i>
            </div>
            <div class="contact-title">Phone</div>
            <a href="tel:+254712345678" class="contact-link">+254 712 000 000</a>
        </div>

        <!-- Email -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-title">Email</div>
            <a href="mailto:info@narok.go.ke" class="contact-link">info@narok.go.ke</a>
        </div>

        <!-- WhatsApp -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fab fa-whatsapp"></i>
            </div>
            <div class="contact-title">WhatsApp</div>
            <a href="https://wa.me/254712345678" target="_blank" class="contact-link">Chat on WhatsApp</a>
        </div>

        <!-- Facebook -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fab fa-facebook"></i>
            </div>
            <div class="contact-title">Facebook</div>
            <a href="https://www.facebook.com/NarokCountyGovernment" target="_blank" class="contact-link">Follow Us</a>
        </div>

        <!-- Twitter -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fab fa-x-twitter"></i> <!-- Updated to X icon -->
            </div>
            <div class="contact-title">X (Twitter)</div> <!-- Updated title -->
            <a href="https://x.com/NarokCountyGov" target="_blank" class="contact-link">Follow Us</a> <!-- Updated link -->
        </div>

        <!-- Instagram -->
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fab fa-instagram"></i>
            </div>
            <div class="contact-title">Instagram</div>
            <a href="https://www.instagram.com/narokcountygov" target="_blank" class="contact-link">Follow Us</a>
        </div>
    </div>
</main>

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


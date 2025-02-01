<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="">
    <title>Government of Narok County Projects Monitoring and Tracking System | Transparent Governance</title>
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
    <link href="{{ asset('landing/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <!-- Sweet Alerts -->
    <script src="{{ asset('js/sweetalert2/sweetalert2.min.css') }}"></script>
    <!-- Odometer -->
    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">
    <!-- Data Tables -->
    <link href="{{ asset('1.13.4/css/jquery.dataTables.css') }}" rel="stylesheet">
    <!-- DataTables Bootstrap 4 Integration CSS -->
    <link href="{{ asset('v/bs4/dt-1.13.4/r-2.4.1/datatables.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
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

</head>
<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto">
                <a href="/" class="logo me-auto me-lg-0" class="img-fluid">
                    <img src="{{ asset('public/img/logos/merged_logo.png') }}" alt="" class="img-fluid">
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
    <main id="main">
        @yield('content')
    </main>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    Powered By
                    <strong><a target="_blank" href="https://Narok.go.ke">Government Of Narok County</a></strong>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <!-- Odometer -->
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <!-- Data Tables -->
    <script src="{{ asset('v/bs4/dt-1.13.4/r-2.4.1/datatables.min.js') }}"></script>
    <!-- SweetAlerts -->
    <script src="{{ asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('landing/js/main.js') }}"></script>

    <script type="text/javascript">
        /* Filter Products */
        function FilterFunction() {
            let input = document.getElementById('search').value
            input = input.toLowerCase();
            let x = document.getElementsByClassName('filter');
            /* Perform Magic Here */
            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "";
                }
            }
        }
    </script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script>
        /* Initialize data tables */
        $(document).ready(function() {
            $('.datatable').DataTable({
                "pageLength": 100
            }).css('white-space', 'initial');;
        });
    </script>
    <script>
        /* Active Links */
        /* Add Active Classes */
        $(function($) {
            let url = window.location.href;
            $("nav ul li a").each(function() {
                if (this.href === url) {
                    $(this).addClass("active");
                }
            });
        });
    </script>
</body>
</html>
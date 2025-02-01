


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
                <li><a href="{{route('home')}}">Feedback</a></li>
                <li class="dropdown"><a href="{{route('home')}}"><span>Public Projects </span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="landing_dashboard?fy=All&id=0">Financial Years</a></li>
                                                        <li><a href="landing_dashboard?fy=2024/2025&id=5">FY 2024/2025 </a></li>
                                                        <li><a href="landing_dashboard?fy=2023/2024&id=1">FY 2023/2024 </a></li>
                                                      
                                            </ul>
                </li>
                <!-- <li class="dropdown"><a href=""><span>Projects Gallery</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="landing_knowledge_center">Projects Gallery</a></li>
                        <li><a href="landing_knowledge_departmental">Departmental Information Center</a></li>
                    </ul>
                </li> -->
               
                <li><a href="landing_general_feedback">Feedback</a></li>
                <li><a href="landing_faq">FAQ</a></li>
                <li>
                    <a href="landing_contact">Contact Us</a>
                </li>
                <li><a href="{{Route('login')}}">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>   
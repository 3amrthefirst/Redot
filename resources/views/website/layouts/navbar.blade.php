<!--NavBar section start-->
<nav class="navbar nav-sticky navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-bars"></i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./"><img src="./img/navbar-Logo.png" width="60px"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('/') ? 'active' : '' }}" href="./">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('about-us') ? 'active' : '' }}" href="{{route('website.about-us')}}">من نحن</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link  {{ Request::is('/blogs') ? 'active' : '' }}" href="./about-Ar.html">المدونه</a>
                    </li> -->
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                الخدمات
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item {{ Request::is('visual-identity-services') ? 'active' : '' }}" href="{{route('website.visual-identity-services')}}"> الهويه البصريه </a>
                                <a class="dropdown-item {{ Request::is('graphic-designer-services') ? 'active' : '' }}" href=" {{route('website.graphic-designer-services')}} "> جرافيك ديزاين </a>
                                <a class="dropdown-item {{ Request::is('marketing-services') ? 'active' : '' }}" href="{{route('website.marketing-services')}} "> خطه محتوي تسويقي </a>
                                <a class="dropdown-item {{ Request::is('sponsored-ads-services') ? 'active' : '' }}" href="{{route('website.sponsored-ads-services')}} "> خطه اعلانات مموله </a>
                                <a class="dropdown-item {{ Request::is('filming-editing-services') ? 'active' : '' }}" href="{{route('website.filming-editing-services')}} "> تصوير الفيديو و المونتاج </a>
                                <a class="dropdown-item {{ Request::is('application-development-services') ? 'active' : '' }}" href=" {{route('website.application-development-services')}} "> تطوير تطبيقات </a>
                                <a class="dropdown-item text-start {{ Request::is('web-services') ? 'active' : '' }} " href="{{route('website.web-services')}}"> برمجه المواقع </a>
                                <a class="dropdown-item text-start {{ Request::is('moderiting-services') ? 'active' : '' }} " href="{{route('website.moderiting-services')}}">  إدارة المحتوى على منصات التواصل الإجتماعي </a>
                                <a class="dropdown-item text-start {{ Request::is('photography-services') ? 'active' : '' }} " href="{{route('website.photography-services')}}">  التصوير الفوتوغرافي   </a>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('contact-us') ? 'active' : '' }}" href="{{route('contact-us.index')}}">تواصل معنا</a>
                    </li>
                </ul>

              

            </div>
        </div>
    </nav>
    <!--NavBar section end-->
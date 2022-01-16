@extends('website.layouts.master')
@extends('website.header')
@section('title','الرئيسية')
@section("content")
<!--About section start-->
<section class="about d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2> <span>من نحن</span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10">
                    <p>
                        شركة رائدة في عالم التسويق الرقمي(Degital marketing) 
  
                        تقدم الخدمات لجميع الشركات و المصالح التجارية ، بهدف ربطهم مع جمهورهم بطرق إحترافية و مميزة.
                        نحن نهتم برفع عائدات زبائننا وذلك عن طريقة مجموعة من الخدمات المتكاملة ، برؤية عالمية و متقدمة.
                        خدماتنا هي:
                        إدارة المحتوى التجاري على منصات التواصل الاجتماعي
                        الجرافيك ديزاين
                        التصوير والمونتاج
                        خطط الإعلانات الممولة
                        و خطط المحتوى التسويقي 
                        ريدوت ، نقطة الإنطلاق نحو النجاح
                    </p>

                </div>

            </div>
        </div>
    </section>
    <!--About section end-->

    <!--Vision section end-->
    <section class="vision d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>الرؤية</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <p><span> خلق مسار جديد</span>
                        لتكنولوجيا البرمجة ومفاهيم التسويق.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Vision section end-->

    <!--Mission section end-->
    <section class="mission d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>الرسال<span>ة</span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-10">
                    <h4>سنحقق <span>رؤيتنا</span> عن طريق</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <div class="mission-text text-right">
                        <div class="mission-item">
                            <div class="circle-dot"></div>
                            <p> بناء قيم جديدة تنعم بالصدق والشفافية والثقة بين الأطراف</p>
                        </div>
                        <div class="mission-item">
                            <div class="circle-dot"></div>
                            <p>الاهتمام برفاهية و تطوير الموظفين للانعكاس التأثير الإيجابي على عملائنا</p>
                        </div>
                        <div class="mission-item">
                            <div class="circle-dot"></div>
                            <p> تقديم الحلول والخدمات المناسبة لكل مجال عمل للأفضل استهداف العملاء</p>
                        </div>
                        <div class="mission-item">
                            <div class="circle-dot"></div>
                            <p>متابعة دورية لكل العملاء السابقين للتأكد من حصولهم على افضل خدمه ما بعد البيع ورضاهم عن
                                النتائج</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Mission section end-->

    <!--services section start-->
    <section class="services d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2><span>خدماتنا </span></h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10">
                    <h4>نقدم خدمات لكلاً من <br>
                        <span>البرمجة</span> و <span>التسويق</span>
                    </h4>
                </div>
            </div>

            <div class="row justify-content-center">
                    <!-- visual idintety -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.visual-identity-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/visualout.png);">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/web.png">
                                    </div>
                                    <h5> الهويه البصريه </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    <!-- graphic -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.graphic-designer-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/graphicout.png);">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/seo (1).png">
                                    </div>
                                    <h5>جرافيك ديزاين</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    <!-- marketing -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.marketing-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/markitengout.png);">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/bullhorn.png">
                                    </div>
                                    <h5> خطه محتوي تسويقي </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- sponserd -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.sponsored-ads-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/sponserout.png);">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/animation.png">
                                    </div>
                                    <h5> خطه إعلانات مموله</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    <!-- vidoe -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.filming-editing-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/videoout.png)">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/app-development.png">
                                    </div>
                                    <h5> فيديوهات ومونتاج</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <br>
                <!-- mobile -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.application-development-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/mobileout.png)">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/app-development.png">
                                    </div>
                                    <h5> تطوير تطبيقات </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- web -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.web-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/webout.png)">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/app-development.png">
                                    </div>
                                    <h5> برمجه المواقع </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- phtography -->
                <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.photography-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/photographyout.png)">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/app-development.png">
                                    </div>
                                    <h5>  التصوير الفوتوغرافي </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                          <!-- moderiting -->
                          <div class="col-lg-4 col-md-6">
                    <a href="{{route('website.moderiting-services')}}">
                        <div class="service-item m-3" style="background-image: url(./img/services/moderitingout.png)">
                            <div class="service-overlay">
                                <div class="service-info">
                                    <div class="icon">
                                        <img src="./img/icons/app-development.png">
                                    </div>
                                    <h5 style="font-size: 25px;">   إدارة المحتوي علي منصات التواصل الاجتماعي </h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!--services section end-->
@endsection
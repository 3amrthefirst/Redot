@extends('website.layouts.master')
@section('title','تواصل معنا')
@section("content")

    <!--contact section start-->
    <section class="contact d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>ابقي علي اتصال</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <p> يسعدنا الرد على أي سؤال لديك ، نحب أن نسمع منك <br>
                        نحن نهدف إلى تحقيق رضاك ​​، فلا تتردد في الاتصال بنا لأية استفسارات أو معلومات
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 mt-5 text-right">
                    <div class="contact-details">
                        <h3>بيانات  <span>الاتصال</span></h3>
                        <br>
                        <p>نحن جاهزون للإجابة على أي سؤال لديك ونتطلع إليه نسمع منك<br>
                             تواصل معنا ، كلنا آذان صاغية
                        </p>
                    </div>

                    <div class="contact-info">
                        <div class="address mb-3">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>المنصورة, مدينه مبارك, 35115</p>
                        </div>

                        <div class="phone mb-3">
                            <i class="fas fa-phone-alt"></i>
                            <p>011 233 335 03</p>
                        </div>

                        <div class="email mb-3">
                            <i class="fas fa-envelope"></i>
                            <p>Scorpinaco@Gmail.Com</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <form method="post" class="contact-form" action="{{route('contact-us.store')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required />
                        </div>
                        @if ($errors->has('name'))
                        <span class="float-right" style="color:red">{{ $errors->first('name') }}</span>
                        @endif

                        <div class="form-group">
                            <input type="email" class="form-control" name="mail" id="email" placeholder="الايميل"
                                required />
                        </div>
                        @if ($errors->has('mail'))
                        <span class="float-right" style="color:red">{{ $errors->first('mail') }}</span>
                        @endif
                        <!-- <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                        </div> -->

                        <div class="form-group">
                            <textarea name="msg" class="form-control" rows="10" placeholder="الرسالة" required="" ></textarea>
                        </div>
                        @if ($errors->has('msg'))
                        <span class="float-right" style="color:red">{{ $errors->first('msg') }}</span>
                        @endif

                        <div class="text-center"><button class="btn1 contact-btn" type="submit">ارسال</button></div>
                    </form>
                        
                </div>

            </div>

        </div>
    </section>
    <!--contact section end-->

    <!--map-->
    <!-- <div>
        <iframe width="100%" height="500px" style="border:0;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.959976770992!2d31.38769262132313!3d31.02736471316622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79c52de5de225%3A0x7d9d515409a99a84!2sMadinet%20Mubarak%2C%20Mansoura%20Qism%202%2C%20Mansoura%2C%20Dakahlia%20Governorate!5e0!3m2!1sen!2seg!4v1622108986578!5m2!1sen!2seg"
            allowfullscreen="" loading="lazy" frameborder="0" allowfullscreen>
        </iframe>
    </div> -->

    
@endsection
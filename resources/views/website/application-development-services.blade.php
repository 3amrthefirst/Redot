@extends('website.layouts.master')
@section('title','خدمات تطوير التطبيقات')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">

      <div class="row">
        <div class="section-title">
          <h2>خدمات <span> تطوير التطبيقات: </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> 
            الهواتف الذكية جزء لا يتجزأ من حياتنا الشخصية و المهنية ، هناك أكثر من ٥ مليار شخص يستخدمون الهواتف الذكية في العالم و لذلك فإن تطبيقات الهواتف الذكية تعتبر قناة مثالية لتقديم الخدمات وتسويق المنتجات عبر الهواتف الذكية ، خصوصاً إذا كانت سهلة الاستخدام.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            في هذه الخدمة نساعدك على تطوير تطبيق خاص بعلامتك التجارية ليكون سهل الاستخدام و جذاباً للعملاء.
            </h4>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2">تتضمن الخدمة</h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تحليل العلامة التجارية ليتناسب التطبيق مع رؤيتها              
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              برمجة التطبيق              
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
                إختبار التطبيق             
              </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              إطلاق التطبيق للمستخدمين             
              </p>
            </div>
           
          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/mobile.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2"> المميزات </h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              السلاسة في التصميم ليكون التطبيق سهل الاستخدام             
             </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الدعم الفني والتحديثات              
             </p>
            </div>
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الإحترافية و الإبتكار            
             </p>
            </div>
            {{View::make('website.layouts.modal')}}

 
           

          </div>
        </div>
      </div>


    </div>
  </section>
@endsection
@extends('website.layouts.master')
@section('title','خدمات الويب')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">

      <div class="row">
        <div class="section-title">
          <h2>خدمات <span> برمجه المواقع </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> 
            أقوى طريقة لعرض المنتجات والخدمات حالياً هي مواقع الإنترنت وهي مرحلة مهمة لنجاح أي مشروع.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            تتميز المواقع باستقلالها عن الشركات و القوانين الخاصة بمنصات التواصل الإجتماعي.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            في هذه الخدمة نساعدك على تطوير موقع الكتروني أو متجر لعلامتك التجارية بتصميم جذاب وواجهة مستخدم سلسة وسهلة الاستخدام للعملاء.
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
              تحليل العلامة التجارية ليتناسب الموقع مع رؤيتها
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              برمجة الموقع             
             </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تصميم واجهة المستخدم
              </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تصميم واجهة المستخدم
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تدريب على لوحة التحكم بالموقع
              </p>
            </div>
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              استضافة الموقع
              </p>
            </div>
           
          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/web.png" class="img-fluid" alt="">
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

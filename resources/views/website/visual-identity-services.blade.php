@extends('website.layouts.master')
@section('title','خدمات الهويه البصريه')
@section("content")

  <section class="webservice d-flex mt-5">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2>خدمات <span>الهويه البصريه</span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
          <h4>بلا هوية لا وجود لعلامتك التجارية فكل مشروع يحتاج لما يميزه و يجعله حاضراً في أذهان العملاء.
</h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4>      في هذه الخدمة نساعدك على تحديد هوية علامتك التجارية و تحويلها من فكرة إلى واقع ملموس عبر تصميمها بشكل إحترافي و إبداعي يليق بأناقة مشروعك.
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
             تصميم الشعار
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تصميم غلاف صفحات التواصل             
             </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تحديد الألوان الخاصة بالمشروع
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p> تحديد الخط الخاص بالمشروع </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/visual.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2"> المميزات </h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              استشارة مجانية
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              دراسة فكرة المشروع لتكون الهوية مناسبة للفكرة و مجال العمل.
             </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الإبداع و الإبتكار
              </p>
            </div>
            {{View::make('website.layouts.modal')}}
          </div>
        </div>
      </div>


    </div>
  </section>
  <!--web development services section end-->
@endsection
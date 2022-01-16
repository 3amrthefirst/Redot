@extends('website.layouts.master')
@section('title','خدمات خطه المحتوي التسويقي')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">

      <div class="row">
        <div class="section-title">
          <h2>خدمات <span> بناء خطة المحتوى التسويقي: </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> 
كل دقيقة تمر في سبيل التخطيط هي خطوة جديدة نحو نجاح علامتك التجارية.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            وحتى تصنع محتوى جذاب تحتاج في البداية لتحديد الأهداف مثل: زيادة الوعي في علامتك التجارية ، زيادة المبيعات ، زيادة المتابعين.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            في هذه الخدمة نساعدك على تحديد أهدافك و الجمهور المستهدف وفقاً لمحتوى الخطة.
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
              أهداف الخطة 
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الجمهور المستهدف             
             </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              المنصات المناسبة
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              أسلوب كتابة المحتوى
             </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              أسلوب تصميم المحتوى
             </p>
            </div> 

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              العدد المناسب للمنشورات في الشهر
             </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/markiteng.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2"> المميزات </h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              استشارة مجانبة
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تحليل المحتوى السابق إن وجد
             </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
                    الجودة العالية و الأفكار الإبداعية          
              </p>
            </div>
            {{View::make('website.layouts.modal')}}


          </div>
        </div>
      </div>


    </div>
  </section>
@endsection
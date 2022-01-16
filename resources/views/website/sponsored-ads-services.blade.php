@extends('website.layouts.master')
@section('title','خدمات الاعلانات المموله')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">

      <div class="row">
        <div class="section-title">
          <h2>خدمات <span> بناء خطة الإعلانات الممولة: </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> 
            معظم الإعلانات الممولة تفشل لسبب واحد وهو عدم التخطيط.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            قبل إطلاق حملتك الإعلانية تحتاج لتحديد هدفك من الحملة (التعريف عن علامتك التجارية ، زيادة المبيعات ، زيادة المتابعين)            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            و بعدها تحديد الجمهور المستهدف.
            </h4>
        </div>
      </div>
      
      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            في هذه الخدمة نساعدك على تحديد أهداف حملاتك الإعلانية و تحديد الجمهور المستهدف وفقاً لمحتوى الخطة.
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
              العدد المناسب للإعلانات 
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              المنصات المناسبة للحملة  
             </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              مدة الحملة         
              </p>
            </div> 

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              توزيع الميزانية بشكل مناسب       
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              ضبط إعدادات الترويج              
              </p>
            </div>

          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/sponser.png" class="img-fluid" alt="">
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
              تحليل الحملات السابقة وتجنب الأخطاء
             </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الجودة العالية
              </p>
            </div>
            {{View::make('website.layouts.modal')}}


          </div>
        </div>
      </div>
      

    </div>
  </section>
@endsection
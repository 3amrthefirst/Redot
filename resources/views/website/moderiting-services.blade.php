@extends('website.layouts.master')
@section('title','خدمات  إدارة المحتوى على منصات التواصل الإجتماعي')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">

      <div class="row">
        <div class="section-title">
          <h2>خدمات <span>  إدارة المحتوى على منصات التواصل الإجتماعي  : </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> 
            أفضل المسوقين هم جمهورك و أفضل طريقة لجذب الجمهور هي صناعة المحتوى.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            لكن صناعة المحتوى تختلف من مشروع لأخر ، وتحتاج لمعايير إدارة مختلفة لتصل لأكبر فئة مستهدفة من الجمهور.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
                في هذه الخدمة نساعدك على ادارة حساباتك التجارية على منصات التواصل الاجتماعي ونتابع أدق التفاصيل لنقدم لك النصائح التي تهدف لإستمرار نمو حسابات مشروعك.           
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
              نشر المحتوى             
             </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              التفاعل مع الجمهور نيابة عنك       
                   </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>   
              تحليل بيانات الحساب لمعرفة طبيعة جمهورك
             </p>
            </div>

          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/moderiting.png" class="img-fluid" alt="">
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
              الإحترافية و الأناقة في العمل والتعامل مع الجمهور.
                         </p>
            </div>

            {{View::make('website.layouts.modal')}}

           

          </div>
        </div>
      </div>


    </div>
  </section>
@endsection
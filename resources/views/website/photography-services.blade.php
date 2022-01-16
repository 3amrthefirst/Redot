@extends('website.layouts.master')
@section('title','خدمات التصوير الفوتوغرافي')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">

      <div class="row">
        <div class="section-title">
          <h2>خدمات <span> التصوير الفوتوغرافي: </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> 
            المحتوى الفوتوغرافي هو الطريقة الأمثل لسرد قصة نشاطك التجاري و ترويج منتجاتك ، لكن معدات التصوير الإحترافية عالية التكلفة و تحتاج خبرة للإستخدام.           
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            لذلك في هذه الخدمة نساعدك على تصوير نشاطك التجاري ومنتجاتك بمعدات إحترافية وخبرات فنية عالية تليق بقيمة علامتك  التجارية.
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
              المنتجات 
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الإعلانات             
              </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              توثيق الفعاليات
             </p>
            </div>

          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/photography.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2"> المميزات </h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الجودة العالية
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الإبداعية و التنوع في الأفكار
                         </p>
            </div>
            {{View::make('website.layouts.modal')}}

 
           

          </div>
        </div>
      </div>


    </div>
  </section>
@endsection
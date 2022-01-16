@extends('website.layouts.master')
@section('title','خدمات الجرافيك ديزاين')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h2>خدمات <span>الجرافيك ديزاين </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> التصميم الجرافيكي هو أفضل وسيلة لزيادة جاذبية منتجك فهو يعمل على تحسين صورة المنتج أو الخدمة ويترك انطباعاً جيداً لدى المستهلك أو متلقي الخدمة وبالتالي يعزز المصداقية والثقة في علامتك التجارية بطريقة بصرية فنية و متقنة. </h4>
        </div>
      </div>



      <div class="row mt-5">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2">تتضمن الخدمة</h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الشعارات 
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              المطبوعات             
             </p>
            </div>
           
            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              تصاميم السوشال ميديا
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>  أغلفة صفحات التواصل الاجتماعي </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/graphic.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2"> المميزات </h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الجودة العالية و السرعة في التسليم
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الأفكار الإبداعية و الإبتكار في التصميم
             </p>
            </div>
            {{View::make('website.layouts.modal')}}


          </div>
        </div>
      </div>


    </div>
  </section>
@endsection
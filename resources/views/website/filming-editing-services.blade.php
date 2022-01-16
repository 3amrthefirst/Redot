@extends('website.layouts.master')
@section('title','خدمات تصوير الفيديوهات و المونتاج')
@section("content")
<section class="webservice d-flex mt-5">
    <div class="container">

      <div class="row">
        <div class="section-title">
          <h2>خدمات <span> تصوير الفيديوهات والمونتاج : </span></h2>
        </div>    
      </div>

      <div class="row">
        <div class="col-10 text-right">
            <h4> 
            المحتوى المرئي و صناعة الأفلام لم تعد تقتصر على السينما ، بل أصبحت جزءاً لا يتجزأ من عالم الأعمال والتسويق ، لأن الإعلانات المرئية تترك أثراً كبيراً في ذهن الجمهور المستهدف و تساهم في إيصال رسائلك بشكل بسيط و سريع ليكون سهل الإستيعاب.
            </h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-10 text-right">
            <h4> 
            في هذه الخدمة نساعدك على تصوير الفيديوهات الإعلانية بأفضل جودة و بأسلوب يناسب رسالتك و علامتك التجارية.
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
              تصوير الفيديوهات بجودة عالية 
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              مونتاج الفيديوهات             
              </p>
            </div>
           
          </div>
        </div>
        <div class="col-lg-6 my-5">
            <img src="./img/services/video.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="mission-text text-right">
              <div> <h4 class="my-5 color2"> المميزات </h4> </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الإبداعية و التنوع في الأفكار سواء في التصوير أو المونتاج
              </p>
            </div>

            <div class="webservice-item">
              <div class="circle-dot"></div>
              <p>
              الإحترافية و الإتقان
              </p>
            </div>
            {{View::make('website.layouts.modal')}}

 
           

          </div>
        </div>
      </div>


    </div>
  </section>
@endsection

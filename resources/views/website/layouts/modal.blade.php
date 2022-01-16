<!-- Button trigger modal -->
<button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal">
  اطلب الخدمه
</button>
@if ($errors->has('name','mail','category','price','phone'))
      <span class="text-danger"> يرجي اعاده ادخال المعلومات  </span>
@endif

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> طلب خدمات ريدوت </h5>
      </div>
      <div class="modal-body">
      <form action="{{route('services.store')}}" method="post">
                                              @csrf
                                              <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">الاسم:</label>
                                                <input type="text" class="form-control" placeholder="ادخل الاسم"  name="name"  id="exampleInputPassword1">
                                                @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                              </div>
                                              <div class="mb-3">
                                              <select  name="servicesName" class="form-select" aria-label="Default select example">
                                                <option selected value="0">الخدمات</option>
                                                <option value="الهويه البصريه">الهويه البصريه</option>
                                                <option value="جرافيك"> جرافيك ديزاين </option>
                                                <option value="محتوي تسويقي">خطه المحتوي التسويقي</option>
                                                <option value="اعلانات مموله">خطه اعلانات مموله</option>
                                                <option value="مونتاج">تصوير الفيديو ومونتاج</option>
                                                <option value="تطبيقات">تطوير التطبيقات</option>
                                                <option value="مواقع">برمجه المواقع</option>
                                                <option value="اداره محتوي">إدارة المحتوى على منصات التواصل الإجتماعي</option>
                                                <option value="تصوير">التصوير الفوتوغرافي</option>
                                              </select>
                                              @if ($errors->has('servicesName'))
                                                <span class="text-danger">{{ $errors->first('servicesName') }}</span>
                                                @endif
                                              </div>
                                              <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">البريد الالكتروني:</label>
                                                <input type="email" class="form-control" name="mail"  placeholder="ادخل البريد الالكتروني"  id="exampleInputPassword1" max=" ">
                                                @if ($errors->has('mail'))
                                                <span class="text-danger">{{ $errors->first('mail') }}</span>
                                                @endif
                                              </div> 
                                              <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">السعر المتوقع:</label>
                                                <input type="number" name="price" class="form-control" value="" placeholder="ادخل السعر"  id="exampleInputPassword1">
                                                @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                                @endif
                                              </div>
                                              <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">تصنيف العمل الخاص بك:</label>
                                                <input type="text" class="form-control" name="category"  placeholder="ادحل اسم البيزنس الخاص بك  "  id="exampleInputPassword1" max="">
                                                @if ($errors->has('category'))
                                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                                @endif
                                              </div>              

                                              <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">رقم الهاتف:</label>
                                                <input type="number" class="form-control" name="phone"  placeholder="ادحل رقم الهاتف "  id="exampleInputPassword1" max=" ">
                                                @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                              </div>                                     
                                                                       
                                            </div>
                                            <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">إغلاق</button>
        <button type="submit" class="btn btn-success"> طلب الخدمة </button>
      </div>
      </div>

      </form>
    </div>
  </div>
</div>
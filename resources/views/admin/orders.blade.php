<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<title>admin | orders</title>
</head>
<body>
  
    <h1 class="text-danger m-5" style="direction: rtl;"> طلبات الزباين </h1>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <table style="direction: rtl;" class="table">
  <thead >
    <tr>
        <th  scope="col">تسلسل</th>
        <th  scope="col">الاسم</th>
        <th  scope="col">البريد الالكتروني</th>
        <th  scope="col">رقم الهاتف</th>
        <th  scope="col"> نوع البيزنس </th>
        <th  scope="col">الخدمه</th> 
        <th  scope="col">البادجت</th>
    </tr>
  </thead>
  <tbody>
  @foreach($services as $key => $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
            <td>{{ $value->name }}</td>
            <td>{{ $value->mail }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->category }}</td>
            <td>{{ $value->servicesName}}</td> 
            <td>{{ $value->price }}</td>
            <tr>
@endforeach
  </tbody>
</table>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

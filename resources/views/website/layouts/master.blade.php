<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title> Redot | @yield('title')</title>
    <!-- Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">
  <!-- icon -->
  <link rel="icon" href="./img/Logo.png">
  <!-- font awesome icons -->
  <link rel="stylesheet" href="./css/font-awesome.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    {{View::make('website.layouts.navbar')}}
        @yield('content')

    {{View::make('website.layouts.footer')}}
    
  <!-- jquery js -->
  <script src="js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
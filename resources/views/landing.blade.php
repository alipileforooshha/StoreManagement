<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('styles/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!-- Font Awesome JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <body class="landing-body">
      <div class="d-flex bg-main-color p-3 m-navbar shadow">
        <a href="/" class="text-white mx-4 fs-4">صفحه اصلی</a>
        {{-- <a href="/prices" class="text-white mx-4 fs-4">قیمت ها</a> --}}
        <a href="/login" class="text-white mx-4 fs-4">ثبت نام/ورود</a>
      </div>

      <div class="d-flex first_section mb-4 p-4">
        <img src="{{asset('./8401.jpg')}}" alt="" class="w-50">
        <div class="d-flex flex-column justify-content-around align-items-center flex-grow-1 p-3">
          <h1 class="header_text_one text-center main-color">بازدهی کسب و کار خود را چندین برابر کنید</h1>
          <h1 class="header_text_two">تمام عملکرد در یک نگاه</h1>
        </div>
      </div>

      <div class="services_section">

        <div class="d-flex mt-4">
          <img src="{{asset('./6918874.jpg')}}" alt="" class="services_image">
          <div class="d-flex flex-column justify-content-center">
            <h1 class="header_text_one text-center main-color my-4">title 1</h1>
            <p class="services_text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est necessitatibus omnis molestiae impedit. In animi, rem praesentium rerum nostrum aliquid voluptatum aut facilis eligendi, quibusdam deserunt eveniet magni! Impedit, ratione.
            </p>
          </div>
        </div>
        
        <div class="d-flex mt-4 flex-row-reverse services_section_two p-4">
          <img src="{{asset('./6859168.jpg')}}" alt="" class="services_image">
          <div class="d-flex flex-column justify-content-center">
            <h1 class="header_text_one text-center text-white my-4">title 1</h1>
            <p class="services_text text-white">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est necessitatibus omnis molestiae impedit. In animi, rem praesentium rerum nostrum aliquid voluptatum aut facilis eligendi, quibusdam deserunt eveniet magni! Impedit, ratione.
            </p>
          </div>
        </div>
        
        <div class="d-flex mt-4">
          <img src="{{asset('./6884036.jpg')}}" alt="" class="services_image">
          <div class="d-flex flex-column justify-content-center">
            <h1 class="header_title_three text-center my-4">title 1</h1>
            <p class="services_text mx-4">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est necessitatibus omnis molestiae impedit. In animi, rem praesentium rerum nostrum aliquid voluptatum aut facilis eligendi, quibusdam deserunt eveniet magni! Impedit, ratione.
            </p>
          </div>
        </div>

      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>
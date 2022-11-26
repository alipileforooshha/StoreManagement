<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ورود</title>
</head>
<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-start p-4 flex-grow-1 h-100">
            <h1 class="main-color huge-text p-4">کسب و کارتو</h1>
            <br>
            <h1 class="main-color huge-text p-4">مدیریت کن</h1>
        </div>

        <div class="vh-100 d-flex justify-content-center align-items-center flex-column login-div">
            <form action="{{route('login.post')}}" method="post">
                @csrf
                <label for="" class="main-color m-4 fs-2">وارد شوید</label>
                <div class="m-4">
                    <label for="" class="">شماره تلفن</label>
                    <input type="text" name="mobile" id="" class="form-control mt-2">
                </div>
                <div class="m-4">
                    <label for="" class="">رمز عبور</label>
                    <input type="password" name="password" id="" class="form-control mt-2">
                </div>
                <div class="m-4">
                    <button type="submit" class="btn text-white main-color-bg text-center w-100">ورود</button>
                </div>
            </form>
            <a href="{{route('register')}}" class="main-color">اگر حساب کاربری ندارید کلیک کنید</a>
        </div>
    </div>
</body>
</html>
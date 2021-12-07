<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Flower Store</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light menu">
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 1%">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{ url('index') }}"><h5>მთავარი</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('category') }}"><h5>კატეგორიები</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('about') }}"><h5>ჩვენს შესახებ</h5></a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto" style="margin-right: 1%">
            <li class="nav-item">
                <a class="nav-link" href="#"><h5>კონტაქტი</h5></a>
            </li>
        </ul>
    </div>
</nav>
<div class="card-group">
    <div class="card">
        <a href="" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">თაიგულები</h5>
            </div>
        </a>
    </div>
    <div class="card">
        <a href="?cat1" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">გვირგვინები</h5>
            </div>
        </a>
    </div>
    <div class="card">
        <a href="" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">კომპოზიციები კალათში</h5>
            </div>
        </a>
    </div>
    <div class="card">
        <a href="" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">საქორწინო თაიგულები</h5>
            </div>
        </a>
    </div>
</div>
<div class="card-group">
    <div class="card">
        <a href="" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ტროპიკული თაიგული</h5>
            </div>
        </a>
    </div>
    <div class="card">
        <a href="" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ქოთნის ყვავილები</h5>
            </div>
        </a>
    </div>
    <div class="card">
        <a href="" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ქოთნები</h5>
            </div>
        </a>
    </div>
    <div class="card">
        <a href="" class="category">
            <img src="{{asset('image/flw.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ბარათები</h5>
            </div>
        </a>
    </div>
</div>

</body>
</html>

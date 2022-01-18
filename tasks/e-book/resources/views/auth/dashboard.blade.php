<!DOCTYPE html>
<html>
<head>
    <title>E-book</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<header class="lang">
    <nav class="navbar navbar-expand-lg navbar" style="margin-left: 10px;">
        <div class="container-fluid">
            <a href="{{asset('/')}}">
                <img src="{{asset('pics/site_img/1.png')}}" alt="" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-list"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="/">მთავარი</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle " href="#" id="navbarDropdown"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            კატეგორია
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="#">ინფორმაციული ტექნოლოგიები</a>
                            </li>
                            <li><a class="dropdown-item " href="#">სამშენებლო</a></li>
                            <li><a class="dropdown-item " href="#">ენერგეტიკა</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{asset('about')}}" >ჩვენს შესახებ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="#" >კონტაქტი</a>
                    </li>
                </ul>
                @guest()

                @else
{{--                    <a href="{{'useredit'}}" style="text-decoration: none">--}}
{{--                        <h7 style="color: white" >გამარჯობა,<br> {{ $user->fname }}!</h7>--}}
{{--                    </a>--}}
                @endguest

                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                 class="bi bi-person-square" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                            </svg>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                            @guest
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">შესვლა</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('register-user') }}">რეგისტრაცია</a>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item" href="{{ route('useredit') }}">პროფილის რედაქტირება</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('signout') }}">გასვლა</a>
                                </li>
                            @endguest
                        </ul>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                           style="box-shadow: none;">
                    <a class="navbar-brand search-button" href="#" style="text-align: center">
                        <img src="{{ asset('pics/site_img/search.png') }}" alt="" width="20" height="20">
                    </a>
                </form>
            </div>
        </div>
    </nav>
</header>

@yield('content')


</html>

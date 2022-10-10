<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MSoft Ghana</title>
    <link rel="stylesheet" href="{{ URL::asset('bootstrap_css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/User/Home.css') }}" />
</head>
<body>
    <div class="container-fluid bg-dark" id="nav_bar">
                <a href="#"><div class="shop-name"><h3>MSoft-GH Shopping Mall</h3></div></a>
        @if (Route::has('login'))
                <div class="login__container hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <x-app-layout>

                    </x-app-layout>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                        @endif
                    @endauth
                </div>
        @endif
    </div>
    <div class="container products">
        @foreach ($data as $product)
                <div class="card">
                    <div class="card-body">
                        <div class="description">{{$product->description}}</div>
                        <img class="mb-1" src="/productimage/{{$product->image}}" alt="">
                        <div class="title_price">
                            <p>{{$product->title}}</p>
                            <p>Qty-{{$product->quantity}}</p>
                            <p>GHs{{$product->price}}.00</p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $data->links() }}
    </div>
</body>
</html>
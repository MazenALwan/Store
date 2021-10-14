<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devista Shop</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

    </head>
    <body class="antialiased"> 
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profile</a>
                        <a href="{{ route('addProduct') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Add a Product</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            
                        @endif
                    @endauth
                </div>
            @endif
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="position: absolute;top:45px;left:90px">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 top-0">
                    <h1 class="dark:text-white underline">Devista Shop</h1>
                </div>
            </div>
        

        <div class="container">
            @foreach($products->chunk(4) as $productChunk)
            <div class="row">
                @foreach($productChunk as $product)
                    <div class="col-md-3 mb-3 p-3">
                        <div class="card" style="width: 100%; height: 100% ">
                            <a href="{{'productDetailPage/'.$product->id}}" style="color:white">
                            <div class="card-body bg-gray-100 dark:bg-gray-900 dark:text-white" style="border-radius: 15px 50px 30px 5px;">
                                <h5 style="card-title">
                                    {{$product->name}}
                                </h5>
                                <p class="card-text">
                                    {{$product->description}}
                                </p>
                            </div>
                            </a>
                          </div>
                    </div>
                    @endforeach
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>




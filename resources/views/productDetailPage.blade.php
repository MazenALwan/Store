<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/style.css">
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
                        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Return To HomePage</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Return To HomePage</a>
                        @endif
                    @endauth

                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="position: absolute;top:30px;left:50px">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 top-0">
                    <h1 class="dark:text-white">Devista Shop</h1>
                </div>
            </div>
            <div class="container mr-100"> 
                <div class="dark:text-white row"> 
                    <div class="col-md-8"><img src="/clothes1.png" style="width:75%; height:80%; margin-left:150px; border-radius: 15px 50px 30px 5px;"></div>
                    <div class="col-md-4 mb-3 p-3"> 
                        <div class="card" style="width: 100%; height: 80%; margin-top:1px;">
                            <div class="card-body bg-gray-100 dark:bg-gray-900 dark:text-white" style="border-radius: 15px 50px 30px 5px; ">
                                <form method="POST" action="{{ route('editProducts',$product->id)}}">
                                    @csrf
                                    <div class="row"><input class="h4 bg-gray-100 dark:bg-gray-900 dark:text-white" type="text" name="name" value="{{$product->name}}" style="card-title; width:90%" ></div>
                                    <div class="row">  •Information about the product:
                                    <input class="bg-gray-100 dark:bg-gray-900 dark:text-white"  type="text" name="description" value="{{$product->description}}" style="card-text;" ></div>
                                   <div class="row">    •The price is:                      
                                    <input class="bg-gray-100 dark:bg-gray-900 dark:text-white"  type="text" name="price" value="{{$product->price}}" style="card-text; " ></div>
                                    <button class="bg-gray-100 dark:bg-gray-900 dark:text-white" style="margin-left:200px;border: 2px solid white ; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; " type="submit">Update Product</button>
                                </form>
                                <a class="bg-gray-100 dark:bg-gray-900 dark:text-white" href="{{ route('deleteProducts',$product->id)}}" style="border: 2px solid white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; }">Delete Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
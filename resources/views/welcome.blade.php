<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap">
        <style>
            .bg{
                width:100%;
                height:100vh;
                background-color:#ffffff;
            }
            body {
                    font-family: 'Roboto', sans-serif;
                }

                h1, h2, h3 {
                    font-weight: 700; /* For bold headings */
                }
        </style>
    </head>
    <body class="antialiased bg">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="container">
            <div class="d-flex justify-content-between py-3 px-5 mt-3">
                <h3 >To-Do App</h3>
                <div >
                <a href="{{ route('login') }}" class="btn  px-3 py-2 " style="background-color:#ad891d ; color:white;">Log in</a>
                <a href="{{ route('register') }}" class="btn px-3 py-2 " style="background-color:black ; color:white;">Register</a>
            </div>
            </div>
            

            <div class="row justify-content-between align-items-center mt-5">
                <div class="col-md-6  ps-5">
                    <h1 class="fw-bold" style="font-size:50px ;color:#ad891d">Todo App</h1>
                    <p>Welcome to our todo app. Here you can easily add or remove your tasks and also categorize them 
                        into different categories. Here you can also apply filters on your categories to finde them easily.
                    </p>
                </div>
                <div class="col-md-5 " id="lottie-animation">
                    
                </div>
            </div>
        </div>
    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>
        <script>
        const animation = lottie.loadAnimation({
            container: document.getElementById('lottie-animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path:"{{asset('build/assets/abc.json')}} "
    });
</script>
    </body>
</html>

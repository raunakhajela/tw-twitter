<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rebuilding twitter using tailwindcss</title>

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    </head>
    <body class="bg-grey-light font-sans">
        <header>
            <div class="bg-white">
                <div class="container mx-auto flex items-center py-4">
                    <nav class="w-2/5">
                        <a href="#" class="top-nav-item"><i class="fa fa-home fa-lg"></i> Home</a>
                        <a href="#" class="top-nav-item"><i class="fa fa-bolt fa-lg"></i> Moments</a>
                        <a href="#" class="top-nav-item"><i class="fa fa-bell fa-lg"></i> Notifications</a>
                        <a href="#" class="top-nav-item"><i class="fa fa-envelope fa-lg"></i> Messages</a>
                    </nav>
                    <div class="w-1/5 text-center"><a href="#"><i class="fa fa-twitter fa-lg text-blue"></i></a></div>
                    <div class="w-2/5 flex justify-end">
                        <div class="mr-4 relative">
                            <input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search Twitter">
                            <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-grey"></i></span>
                        </div>
                        <div class="mr-4"><a href="#"><img src="/img/avatar.jpg" alt="avatar" class="h-8 w-8 rounded-full"></a></div>
                        <div><button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet</button></div>
                    </div>
                </div> <!-- end container -->
            </div>
        </header>
    </body>
</html>

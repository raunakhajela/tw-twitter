<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rebuilding Treehouse Community using tailwindcss</title>

        <link rel="stylesheet" href="/css/treehouse.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    </head>
    <body class="bg-grey-light font-raunak">
        <header>
            <div class="bg-grey-darkest">
                <div class="container mx-auto flex items-center py-7">
                    <nav class="w-4/5">
                        <a href="#" class="top-nav-item border-r-2 border-solid border-grey pr-8">Home</a>
                        <a href="#" class="top-nav-item">Tech Degree</a>
                        <a href="#" class="top-nav-item">Tracks</a>
                        <a href="#" class="top-nav-item">Library</a>
                        <a href="#" class="top-nav-item text-white">Community</a>
                        <a href="#" class="top-nav-item">Support</a>
                    </nav>
                    <div class="w-1/5 flex justify-end">
                        <nav>
                            <a href="#" class="top-nav-item">Sign In</a>
                            <a href="#" class="top-nav-item mr-0 text-teal">Free trial</a>
                        </nav>
                    </div>
                </div> <!-- end container -->
            </div>
        </header>

        <div class="container mx-auto flex items-center bg-white shadow mt-8 py-4">
            
            <div class="w-3/5">
                <div class="ml-6 mr-4 relative">
                    <input type="text" class="border-2 h-8 px-4 py-6 pl-12 text-base font-medium w-120 rounded-full" placeholder="Search...">
                    <span class="flex items-center absolute pin-l pin-y pl-6 mr-3"><i class="fa fa-search text-grey"></i></span>
                </div>
            </div>
            <div class="w-2/5 text-right">
                <ul>
                    <a href="#" class="text-lg text-grey mr-8 font-medium tracking-normal">Newest</a>
                    <a href="#" class="text-lg text-teal mr-8 font-medium tracking-normal">All Topics</a>
                </ul>
            </div>

        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SeoEra</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

<!-- Styles / Scripts -->
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
@vite(['resources/css/app.css', 'resources/js/app.js'])
@else
<style>
</style>
@endif
<link rel="stylesheet" href="{{asset('build/assets/main.css')}}">

</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
<header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
@if (Route::has('login'))
<nav class="flex items-center justify-end gap-4">
@auth
<a
href="{{ url('/view_posts') }}"
class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
>
Dashboard
</a>
@else
<a
href="{{ route('login') }}"
class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal" style="background-color: rgba(2, 122, 106, 0.829);color:#fff;border-radius:20px"
>
<i class="fa-thin fa-circle-user"></i>     Log in
</a>

@if (Route::has('register'))
<a
href="{{ route('register') }}"
class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal" style="background-color: rgba(6, 52, 204, 0.829);color:#fff;border-radius:20px">
<i class="fa-thin fa-user-plus"></i>  Register
</a>
@endif
@endauth
</nav>
@endif
</header>

<button type="button" class="btn position-relative mt-4 mb-4 text-bold text-white"
style="width: 200px;font-size:20px;background-color:#2d055ea4;border-radius:20px;">
{{$User_Name}}

</button>


@if ($Post->count() == 0)

<h1 class="text-center text-danger">No Data Found</h1>


@else

<div class="grid-container mt-4">

@foreach($Post as $data)
<div class="card">
<div class="title">{{ $data->title }}</div>
<div class="icon"><i class="fa-thin fa-file-lines"></i></div>
<div class="content">
<p>{!! Str::limit($data->description,512)!!}</p>
</div>
{{-- <div>  The Author : <a href="" style="text-decoration: underline;color:rgb(6, 99, 238)">{{$User_Name[$data->user_id-1]->name}}</a></div> --}}

</div>
@endforeach

@endif

</div>
</div>
<br>
{{$Post->links()}}

<div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
</div>

</div>
</main>
</div>




@if (Route::has('login'))
<div class="h-14.5 hidden lg:block"></div>
@endif
</body>
</html>

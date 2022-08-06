<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<style type="text/css">
      .text-9xl{
      font-size: 14rem;
      }
      @media(max-width: 645px){
      .text-9xl{
      font-size: 5.75rem;
      }
      .text-6xl{
      font-size: 1.75rem;
      }
      .text-2xl {
      font-size: 1rem;
      line-height: 1.2rem;
      }
      .py-8 {
      padding-top: 1rem;
      padding-bottom: 1rem;
      }
      .px-6 {
      padding-left: 1.2rem;
      padding-right: 1.2rem;
      }
      .mr-6{
      margin-right: 0.5rem;
      }
      .px-12 {
      padding-left: 1rem;
      padding-right: 1rem;
      }
      }
    </style>
</head>
<body>
<div class="bg-gradient-to-r from-green-300 to-yellow-200">
<div class="m-auto py-16 min-h-screen flex items-center justify-center">
<div class="w-9/12 bg-white shadow overflow-hidden sm:rounded-lg pb-8">
<div class="border-t border-gray-200 text-center pt-8">
  <div class="w-full flex justify-center">
    <img src="{{asset('images/gattlogo.png')}}" alt="greenapple logo" class="w-24 h-full">
  </div>
<h1 class="text-9xl font-bold text-green-400">@yield('code')</h1>
<h1 class="text-6xl text-yellow-400 font-medium py-8">@yield('message')</h1>
<a href="{{url('/')}}" class="bg-gradient-to-r from-yellow-600 to-yellow-500 hover:from-yellow-500 hover:to-orange-500 text-white font-semibold px-6 py-3 rounded-md mr-6">
HOME
</a>
<a href="https://greenappletourism.com/contact/" class="bg-gradient-to-r from-green-600 to-green-500 hover:from-green-500 hover:to-green-500 text-white font-semibold px-6 py-3 rounded-md">
Contact Us
</a>
</div>
</div>
</div>
</div>
</body>
</html>
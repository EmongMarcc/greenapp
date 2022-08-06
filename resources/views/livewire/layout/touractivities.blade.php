<div>
<div class="bg-white mt-10 pt-10">

<div class="w-full overflow-hidden">
  <div class="md:px-6 py-8">
    <ol class="flex justify-left gap-2" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li class="text-center" itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="{{url('/')}}">
        <span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1" />
      </li>
      <li class="text-center px-1 border-l-2 border-fuchsia-600" itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem">
        <a itemprop="item"  href="{{url('/touractivities')}}">
        <span itemprop="name">Tours and Activities</span></a>
        <meta itemprop="position" content="2" />
      </li>
    </ol>
  </div>
</div>
<h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl md:text-[4rem] md:leading-[3.5rem] sm:pl-10">Things to do</h1>
<div class="min-h-screen flex flex-col justify-center">
<div class="relative m-3 flex flex-wrap mx-auto justify-center">
<?php foreach ($activities as $tours): ?>
  <div class="overflow-hidden relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
    <a href="{{url('/touractivities/'.$tours->activity_slug)}}" class="absolute w-full h-full z-10 top-0 left-0">&nbsp;</a>
    <div class="overflow-x-hidden rounded-2xl relative">
      <picture>
        <source type="image/avif" srcset="{{$tours->image['avif']}}">
        <img class="h-40 rounded-2xl w-full object-cover" src="{{$tours->image['thumb']}}" alt="{{$tours->title}}">
      </picture>
      <p class="absolute right-2 top-2 bg-white rounded-full p-2 cursor-pointer group">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-50 opacity-70" fill="none" viewBox="0 0 24 24" stroke="black">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
      </p>
    </div>
    <div class="mt-4 pl-2 mb-2 flex justify-between ">
      <div>
        <p class="text-lg font-semibold text-gray-900 mb-0">{{$tours->title}}</p>
        <p class="text-md text-gray-800 mt-0">{{$tours->description}}</p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</div>

</div>
</div>

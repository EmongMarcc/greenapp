<div wire:init="loadPosts" class="-translate-y-4 bg-gray-100 transform">
<div class="sm:m-3">
<?php if ($readyToLoad): ?>
  <div class="flex w-full justify-end">
    <input wire:loading.remove placeholder="Search" wire:model.debounce.1000ms="searchTerm" type="text" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline pr-10">
  </div>
<?php endif; ?>
<div wire:loading.remove class="max-w-screen-lg mx-auto">
<div class="flex flex-wrap md:flex-nowrap space-x-0 md:space-x-6 mb-16">
  <!-- main post -->
  <div class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
    <a href="{{url('country/RussiaTravel')}}">
            <picture>
              <source type="image/avif" srcset="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_499,h_499/v1637831920/greenapple/russia_ufwgaq_rtlcco.avif">
              <img class="hover:opacity-75 transition ease-in duration-50 rounded-md object-cover w-full" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_499,h_499/v1637761578/greenapple/russia_ewfd9c.png" alt="Russia visa from dubai" />
            </picture>
    </a>
    <span class="text-green-700 text-sm hidden md:block mt-4"> Starting from 700 aed </span>
    <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
      Russia visa application from Dubai, UAE
    </h1>
    <p class="text-gray-600 mb-4">
      Apply Russia for Tourist and Business visa in Dubai with Green Apple Travel & Tourism. No Embassy visit, no interview. Get your urgent Russia visa in 1 day. We can pick-up and deliver your documents right from your doorsteps. Residence visa at least 3 months.
    </p>
    <a href="{{url('country/RussiaTravel')}}" class="inline-block px-6 py-3 mt-2 rounded-md bg-green-700 text-gray-100">
      Read more
    </a>
  </div>
  <!-- sub-main posts -->
  <div class="w-full md:w-4/7">

    <?php foreach ($countryblogs as $blog): ?>
    <div class="rounded w-full flex flex-col md:flex-row mb-10">
      <a href="{{url('country/'.$blog->category)}}">
          <img class="block md:hidden lg:block hover:opacity-75 transition ease-in duration-50 rounded-md h-32 md:h-32 md:w-44 my-4 w-full md:m-0 shadow-lg"  src="{{$blog->flags}}" alt="visa russia {{ substr($blog->body ?? 'russia_greenapple', 0, 15) }}" />
      </a>
      <div class="bg-white rounded px-4">
        <div>
          <a href="{{url('country/'.$blog->category)}}" class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">{{$blog->title}} Visa</a>
        </div>
        <div class="flex flex-col">
                    <?php foreach ($teamwhatsapps as $teamw): ?>
          <?php foreach ($teamw->touristagents as $team): ?>
            <?php if ($team->country_id === $blog->category): ?>
           <?php if ($teamw->status === 'Online'): ?>
              <a href="tel:+{{$teamw->number}}" rel="nofollow" class="p-2 pl-0 pt-1 text-sm text-gray-600"> <span class="text-theme2">{{$teamw->name}}</span> </a>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
</div>
  </div>

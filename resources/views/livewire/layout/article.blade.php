<section class="max-w-screen-lg mx-auto text-gray-600 body-font">
  <div wire:init="loadPosts" class="container mx-auto max-w-7x1">
    <div class="flex flex-wrap w-full mb-4 py-4">
      <div class="w-full mb-6 lg:mb-0">
          <p class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-100">Tour Packages</p>
        <div class="h-1 w-20 bg-yellow-500 rounded"></div>
      </div>
    </div>

    <div class="flex flex-wrap" >
      <?php foreach ($newsupdate as $news): ?>
      <div class="xl:w-1/3 md:w-1/2 p-1">
        <div class="bg-white p-3 rounded-lg">
        <a href="{{url('offer/tour/'.$news->offer_sitelink)}}">
            <picture>
              <source type="image/avif" srcset="{{$news->status}}">
              <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="{{$news->tour_img}}" alt="{{$news->title}}">
            </picture>
        </a>
          <p class="tracking-widest text-indigo-500 text-xs font-medium title-font"><?php echo date_format(date_create($news->datepublish),"M-d-Y") ?></p>
          <a href="{{url('offer/tour/'.$news->offer_sitelink)}}">
          <span class="text-lg text-gray-900 font-medium title-font mb-4">{{$news->title}}</span>
        </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div>
  <livewire:layout.navigation/>
    <div class="bg-white flex justify-center mt-16">
      <div class="max-w-4xl">
        <div class="divide-y divide-gray-200">
          <div class="pt-6 pb-8 space-y-2 md:space-y-5">
            <ol class="flex justify-left gap-2" itemscope itemtype="https://schema.org/BreadcrumbList">
              <li class="text-center" itemprop="itemListElement" itemscope
                  itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{url('/')}}">
                <span itemprop="name">Home</span></a>
                <meta itemprop="position" content="1" />
              </li>
              <li class="text-center px-1 border-l-2 border-fuchsia-600" itemprop="itemListElement" itemscope
                  itemtype="https://schema.org/ListItem">
                <a itemprop="item"  href="{{url('/offers')}}">
                <span itemprop="name">Tour Packages</span></a>
                <meta itemprop="position" content="2" />
              </li>
            </ol>
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl md:text-[4rem] md:leading-[3.5rem]">Latest</h1>
            <p class="text-lg text-gray-500">All updates for our Tour Packages.</p>
          </div>
          <ul class="divide-y divide-gray-200">
            <?php if ($touroffers ?? null): ?>
            <?php foreach ($touroffers ?? '' as $offer): ?>
            <li class="py-12">
              <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline gap-2">
                <dl>
                  <dt class="sr-only">Published on</dt>
                  <dd class="text-base font-medium text-gray-500"><time datetime="2021-08-11T19:30:00.000Z">From {{$offer->datestart}}</time></dd>
                  <dd class="text-base font-medium text-gray-500"><time datetime="2021-08-11T19:30:00.000Z">To {{$offer->dateend}}</time></dd>
                  <img src="{{$offer->tour_img}}" alt="{{$offer->title}}" class="w-full">
                </dl>
                <div class="space-y-5 xl:col-span-3"><div class="space-y-6">
                  <h2 class="text-2xl font-bold tracking-tight"><a class="text-gray-900" href="{{url('offer/tour/'.$offer->offer_sitelink)}}">{{$offer->title}}</a></h2>
                  <div class="max-h-40 overflow-y-scroll">
                    <?php echo $offer->description; ?>
                    <p class="font-black">Inclusion</p>
                    <ul>
                      <li><?php echo json_decode($offer->json_include)->flight ?? ''; ?></li>
                      <li><?php echo json_decode($offer->json_include)->hotel ?? ''; ?></li>
                      <li><?php echo json_decode($offer->json_include)->travelInsurance ?? ''; ?></li>
                      <li><?php echo json_decode($offer->json_include)->cityTours ?? ''; ?></li>
                      <li><?php echo json_decode($offer->json_include)->transfer ?? ''; ?></li>
                    </ul>
                  </div>
                </div>
                <div class="text-base font-medium">
                  <a class="text-teal-600 hover:text-teal-700" href="{{url('offer/tour/'.$offer->offer_sitelink)}}">Read more →</a>
                </div>
              </div>
            </article>
          </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
      </div>
      </div>
    </div>
   <livewire:layout.footer/>
</div>

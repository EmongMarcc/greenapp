<div>
  <livewire:layout.navigation/>
  <?php foreach ($tourpackages as $tour): ?>
  <div class="pt-16">

    <div class="bg-gray-100 container m-auto px-6">
      <ol class="flex justify-left gap-2" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="text-center" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="{{url('/')}}">
          <span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="text-center px-1 border-l-2 border-fuchsia-600" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
          <a itemprop="item"  href="{{url('/news')}}">
          <span itemprop="name">News</span></a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="text-center px-1 border-l-2 border-fuchsia-600 overflow-hidden" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
          <a itemprop="item"  href="{{url('/tourpacks/info/'.$tour->tourpack)}}">
          <span itemprop="name" max="25">{{$tour->title}}</span></a>
          <meta itemprop="position" content="3" />
        </li>
      </ol>
      <div class="flex flex-wrap overflow-hidden py-10">
        <div class="w-full overflow-hidden lg:w-1/2 pt-6">
          <div class="w-full h-full">
          <h1 class="text-lg lg:text-4xl text-gray-700 font-bold leading-tight mb-5">  {{$tour->title}} </h1>
          <p class="text-md lg:text-xl text-gray-700 "> <?php echo htmlspecialchars_decode(stripslashes($tour->description)); ?> </p>
          <div class="py-5">
               <a href="https://api.whatsapp.com/send?phone={{$tourpackagents[0]->number}}" class="text-white rounded-full py-2 px-5 text-lg font-semibold bg-green-700 hover:bg-white hover:text-black inline-block border border-purple-600 mr-3">Whatsapp</a>
               <a href="tel:{{$tourpackagents[0]->number}}" class="text-white rounded-full py-2 px-5 text-lg font-semibold bg-yellow-400 inline-block border hover:bg-white hover:text-black">Call us</a>
          </div>
        </div>

        </div>

        <div class="w-full overflow-hidden lg:w-1/2 pt-6">
          <img src="{{$tour->tour_img}}" style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);" class="rounded">
        </div>

      </div>
      <div class="bg-gray-800 py-10">
        <?php $requirements = DB::select('select * from requirements where category_id = "'.$tour->countryId.'"'); ?>
        <div class="text-white">
          <?php foreach ($requirements as $reqs): ?>
            <?php if ($reqs->status === "Active"): ?>
              <?php if ($reqs->reqtype === "Tourist"): ?>
                <div class="mx-10">
                  <h2 class=" font-bold text-4xl md:text-5xl max-w-xl  leading-tight">Tourist Requirements</h2>
                  <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="textsize mj-theme-text relative w-full">
                      <?php echo $reqs->reqbody; ?>
                    </div>
                    <div class="w-full">
                      <img src="{{asset('images/tourist.svg')}}" alt="Tourist requirements">
                    </div>
                  </div>
                </div>
              <?php elseif($reqs->reqtype === "Business"): ?>
                <div class="mx-10">
                  <h2 class=" font-bold text-4xl md:text-5xl max-w-xl  leading-tight">Business Requirements</h2>
                  <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="w-full">
                      <img src="{{asset('images/business.svg')}}" alt="Tourist requirements">
                    </div>
                    <div class="textsize mj-theme-text relative w-full">
                      <?php echo $reqs->reqbody; ?>
                    </div>

                  </div>
                </div>
              <?php elseif($reqs->reqtype === "Medical"): ?>
                <div class="bg-gray-100 ">
                <div class="m-10">
                  <h2 class=" font-bold text-black text-4xl md:text-5xl max-w-xl  leading-tight">{{$tour->title}}</h2>
                  <div class="textsize text-black relative w-full">
                    <?php echo $reqs->reqbody; ?>
                  </div>
                </div>
                </div>
              <?php endif; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
          </div>
      <p class="opacity-0 absolute height-0">{{$tour->keywords}}</p>
    </div>
  </div>

      <?php endforeach; ?>
   <livewire:layout.footer/>
</div>

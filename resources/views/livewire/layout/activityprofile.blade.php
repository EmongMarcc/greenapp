<div>
<div wire:init="loadPosts" class="bg-white mt-10 pt-10">
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
      <li class="text-center px-1 border-l-2 border-fuchsia-600" itemprop="itemListElement" itemscope
          itemtype="https://schema.org/ListItem">
        <a itemprop="item"  href="{{url('/touractivities/'.$slug)}}">
        <span itemprop="name">{{$this->slug ?? ''}}</span></a>
        <meta itemprop="position" content="3" />
      </li>
    </ol>
  </div>
</div>
<h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl md:text-[4rem] md:leading-[3.5rem] sm:pl-10">Things to do in {{$activities[0]->title ?? ''}}</h1>
<div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                    <img src="{{json_decode($response)->data[0]->pictures[0]  ?? ''}}" name="{{json_decode($response)->data[0]->name  ?? ''}}">
                <div class="bg-white flex flex-col justify-start p-6">
                    <p class="text-blue-700 text-sm font-bold uppercase pb-4">{{json_decode($response)->data[0]->name  ?? ''}}</p>
                    <p class="text-gray-700 text-xs pb-4">{{json_decode($response)->data[0]->shortDescription  ?? ''}}</p>
                </div>
            </article>
            <div class="min-h-screen flex flex-col justify-center">
            <div class="relative flex flex-wrap -mx-px overflow-hidden mx-auto justify-center">
              <?php foreach (json_decode($response)->data ?? [] as $acti): ?>
                <div class="my-px px-px w-full overflow-hidden sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 cursor-pointer relative rounded-2xl hover:-translate-y-2 transform shadow hover:shadow-md duration-150">
                  <a href="{{url('/touractivities/activity/'.$acti->id ?? '')}}" class="absolute w-full h-full z-10 top-0 left-0">&nbsp;</a>
                  <div class="overflow-x-hidden relative">
                      <img class="h-40 w-full object-cover" src="{{$acti->pictures[0]  ?? ''}}" alt="{{$acti->name  ?? ''}}">
                    <p class="px-2 absolute text-xs right-2 top-2 bg-white rounded cursor-pointer group">
                      {{number_format(intval($acti->price->amount)*4.98+150) ?? null}}dhs
                    </p>
                    <div class="absolute bottom-0 cursor-pointer p-2">
                      <p class="bg-opacity-60 bg-white font-semibold mb-0 rounded shadow-xl text-xs">{{$acti->name ?? ''}}</p>
                    </div>
                  </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

        </section>


        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">{{json_decode($response)->data[0]->name  ?? ''}}</p>
                <p class="pb-2">Add this activity for only {{number_format(intval(json_decode($response)->data[0]->price->amount ?? null)*4.17+150) ?? null}}dhs</p>
                <p class="pb-2">Book a customize Tour packages of your choice!</p>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Call us now!
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">List</p>
                <div class="grid grid-cols-3 gap-3">
                  <?php foreach (json_decode($response)->data ?? [] as $acti): ?>
                    <img class="hover:opacity-75" src="{{$acti->pictures[0] ?? ''}}">
                  <?php endforeach; ?>
                </div>
                <a target="_blank" href="https://www.instagram.com/greenappledxb/" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @greenappledxb
                </a>
            </div>

        </aside>

    </div>
</div>
</div>

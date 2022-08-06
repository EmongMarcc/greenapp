<div>
<livewire:layout.navigation/>
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
        <a itemprop="item"  href="{{url('/about-us')}}">
        <span itemprop="name">About</span></a>
        <meta itemprop="position" content="2" />
      </li>
    </ol>
    <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl md:text-[4rem] md:leading-[3.5rem]">About us</h1>
          <div class="container flex justify-between mx-auto">
              <div class="w-full">
                <livewire:layout.cards/>
                <livewire:page.news/>
              </div>
          </div>
      </div>
</div>
</div>
<livewire:layout.footer/>
</div>

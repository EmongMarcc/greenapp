<div>
  <style media="screen">
  .pt-\[17\%\] {
padding-top: 17%;
}
.mt-\[-10\%\] {
margin-top: -10%;
}
.pt-\[56\.25\%\] {
padding-top: 56.25%;
}
  </style>
  <livewire:layout.navigation/>
    <div class="bg-white justify-center mt-16">
      <div class="max-w-5xl mx-auto">
        <div>
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
              <li class="text-center px-1 border-l-2 border-fuchsia-600" itemprop="itemListElement" itemscope
                  itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{url('/offer/tour/'.$touroffers[0]->offer_sitelink)}}">
                <span itemprop="name">{{$touroffers[0]->offer_sitelink}}</span></a>
                <meta itemprop="position" content="3" />
              </li>
            </ol>
          </div>
          <div x-data="{ open: false }">

          <?php if ($touroffers ?? null): ?>
          <?php foreach ($touroffers ?? '' as $offer): ?>
            <div @click="open = false" class="bg-gray-300 bg-opacity-50 fixed w-full flex justify-center top-0 z-50" x-show="open"
            x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90">
              <img src="{{$offer->countryId}}" class="rounded-3xl shadow-2xl sm:w-1/2 w-full" alt="{{$offer->title}} tour">
            </div>
          <main class="relative container mx-auto bg-white px-4">
            <div class="relative -mx-4 top-0 pt-[17%] overflow-hidden">
              <img class="absolute inset-0 object-cover object-top w-full h-full filter blur" src="{{$offer->countryId}}" alt="Blur {{$offer->title}}" />

            </div>
            <div class="mt-[-10%] w-1/2 mx-auto">
              <div class="relative pt-[56.25%] overflow-hidden rounded-2xl">
                <img  @click="open = !open" class="w-full h-full absolute inset-0 object-cover cursor-pointer" src="{{$offer->countryId}}" alt="{{$offer->title}} img" />
              </div>
            </div>
            <article class="max-w-prose mx-auto py-8">
              <h1 class="text-2xl font-bold">{{$offer->title}}</h1>
              <h2 class="mt-2 text-sm text-gray-500">{{$offer->datestart ?? ''}} - {{$offer->dateend ?? ''}}</h2>
              <div>
                <?php echo $offer->description; ?>
                <ul>
                  <li><?php echo json_decode($offer->json_include)->flight ?? ''; ?></li>
                  <li><?php echo json_decode($offer->json_include)->hotel ?? ''; ?></li>
                  <li><?php echo json_decode($offer->json_include)->travelInsurance ?? ''; ?></li>
                  <li><?php echo json_decode($offer->json_include)->cityTours ?? ''; ?></li>
                  <li><?php echo json_decode($offer->json_include)->transfer ?? ''; ?></li>
                </ul>
              </div>
            </article>
          </main>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      </div>
    </div>
   <livewire:layout.footer/>
   <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@graph":[
      {
        "@type":"Organization",
        "@id":"https://greenappletravel.ae/#organization",
        "name":"GreenApple Travel and Tourism LLC",
        "url":"https://greenappletravel.ae/",
        "sameAs":
        [
          "https://www.facebook.com/greenappledxb/",
          "https://instagram.com/greenappledxb/",
          "https://twitter.com/greenappledxb/"
        ],
        "logo":
        {
          "@type":"ImageObject",
          "@id":"https://www.greenappletravel.ae/#logo",
          "inLanguage":"en-US",
          "url":"{{$touroffers[0]->tour_img}}", "contentUrl":"{{$touroffers[0]->tour_img}}",
          "width":60,
          "height":43,
          "caption":"{{$touroffers[0]->title}}"
        },
        "image":{"@id":"https://greenappletravel.ae/#logo"}},
      {
        "@type":"WebSite",
        "@id":"https://greenappletravel.ae/#website",
        "url":"https://greenappletravel.ae/",
        "name":"{{$touroffers[0]->title}}",
        "description":"GreenApple Travel and Tourism",
        "publisher":
        {
          "@id":"https://greenappletravel.ae/#organization"
        },
        "potentialAction":
        [
          {
           "@type":"SearchAction",
           "target":
            {
            "@type":"EntryPoint",
            "urlTemplate":"https://greenappletravel.ae/?s={search_term_string}"
            },
            "query-input":"required name=search_term_string"}],
        "inLanguage":"en-US"
      },
      {
        "@type":"ImageObject",
        "@id":"https://greenappletravel.ae/#primaryimage",
        "inLanguage":"en-US",
        "url":"{{$touroffers[0]->tour_img}}",
        "contentUrl":"{{$touroffers[0]->tour_img}}",
        "width":940,
        "height":788
      },{
        "@type":"WebPage",
        "@id":"https://greenappletravel.ae/#webpage",
        "url":"https://greenappletravel.ae/",
        "name":"{{$touroffers[0]->title}}",
        "isPartOf":
        {
          "@id":"https://greenappletravel.ae/#website"
        },
        "primaryImageOfPage":
        {
          "@id":"https://greenappletravel.ae/#primaryimage"
        },
        "datePublished":"2017-08-26T09:05:12+00:00",
        "dateModified":"2021-10-01T20:13:12+00:00",
        "description":"{{$touroffers[0]->title}}",
        "breadcrumb":{"@id":"https://greenappletravel.ae/#breadcrumb"},
        "inLanguage":"en-US",
        "potentialAction":[{"@type":"ReadAction",
                            "target":["https://greenappletravel.ae/"]}]}
    ]
  }
</script>
</div>

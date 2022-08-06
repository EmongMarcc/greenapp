<div>
<livewire:layout.navigation/>
<div class="min-h-screen overflow-auto relative bg-opacity-mj" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{$countryblogs[0]->coverimage}})">

  <div class="container max-w-5xl mx-auto px-4 z-10">

    <div class="w-4/5 mt-24">
      <ol class="flex text-white justify-left gap-2" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="text-center" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="{{url('/')}}">
          <span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="text-center px-1 border-l-2 border-fuchsia-600" itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="{{url('/country/'.$countryblogs[0]->category)}}">
          <span itemprop="name">{{$countryblogs[0]->title}} visa</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
      <div class="block sm:flex justify-between mt-12">
        <h1 class="text-white text-4xl sm:text-6xl font-bold text-shadow-dark">Application for {{$countryblogs[0]->title}} Visa!</h1>
              <picture>
                <source type="image/avif" srcset="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648645902/green_emzyji.avif">
                <img class="h-full w-full max-w-md" src="{{$countryblogs[0]->flags}}" alt="{{$countryblogs[0]->title}} visa">
              </picture>
      </div>
    </div>
    <div class="flex justify-left items-center">
      <div class="flex items-center mt-2 mb-4">
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
      </div>
    </div>
    <div class="text-white text-shadow-dark">
     Rated <span>4.5</span>/5
     based on <span>681</span> customer reviews
     <br/>
     <a class="text-white rounded bg-green-600 m-3 px-3" rel="nofollow" target="_blank" href="https://g.page/r/CSVOuDsOGf38EAI/review?kd">Send Review</a>
    </div>
    <div class="text-white text-shadow-dark">
      <span>Starting from</span>
      <span content="{{$countryblogs[0]->price}}">{{$countryblogs[0]->price}}</span>
      <span content="AED">aed</span>
    </div>
    <div class="w-5/6 my-10 ml-6">
      <p class="text-white font-medium text-shadow-dark">
       {{$countryblogs[0]->body}}
      </p>

    </div>
    <?php if ($countrylists[0] ?? ''): ?>
      <?php if ($countryblogs[0]->status === 'Active'): ?>
    <div class="w-5/6 my-10 ml-6">
      <div class="flex justify-center flex-wrap">
        <span class="p-2 bg-green-600 text-white font-bold rounded m-1">Trip Application Available</span>
        <span class="p-2 bg-red-600 text-white font-bold rounded m-1">Not Available</span>
        </div>
      <div class="flex flex-wrap">
        <?php foreach ($countrylists as $lists): ?>
          <?php if ($lists->status === 'Active'): ?>
            <span class="p-2 bg-green-600 text-white font-bold rounded m-1">{{$lists->CountryName}}</span>
            <?php else: ?>
            <span class="p-2 bg-red-600 text-white font-bold rounded m-1">{{$lists->CountryName}}</span>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
      <?php else: ?>
        <div class="w-5/6 my-10 ml-6">
          <div class="flex justify-center flex-wrap">
            <span class="p-2 bg-green-600 text-white font-bold rounded m-1">Trip Application Available</span>
            <span class="p-2 bg-red-600 text-white font-bold rounded m-1">Not Available</span>
            </div>
          <div class="flex flex-wrap">
            <?php foreach ($countrylists as $lists): ?>
                <span class="p-2 bg-red-600 text-white font-bold rounded m-1">{{$lists->CountryName}}</span>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
      <?php endif; ?>
    <div class="w-5/6 my-10 ml-6">
      <h3 class="text-green-300 text-shadow-dark">
        Hassle-free,<br />
        <strong class="text-white">Pick-up & Delivery Service </strong>
        <br />and Reliable.
      </h3>

    </div>
    <div class="text-white relative">
      <h3 class="text-uppercase font-semibold">What are you waiting for? Call now!</h3>
          @livewire('layout.agentcontactprof', ['category_id' => $countryblogs[0]->category])
    </div>
  </div>
</div>
<h2 class="text-theme2 font-bold my-6 text-4xl text-center md:text-5xl leading-tight">What are the requirements for {{$countryblogs[0]->title ?? ''}} visa?</h2>
<div class="text-theme2">
  <?php foreach ($requirements as $reqs): ?>
    <?php if ($reqs->status === "Active"): ?>
      <?php if ($reqs->reqtype === "Tourist"): ?>
        <div class="mx-10">
          <p class=" font-bold text-3xl md:text-4xl max-w-lg  leading-tight">Tourist visa Requirements</p>
          <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="textsize mj-theme-text relative w-full">
              <?php echo $reqs->reqbody; ?>
            </div>
            <div class="w-full">
              <picture>
                <source type="image/avif" srcset="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648644547/tourist_sujitz.avif">
                <img src="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648644696/tourist_iszkyk.png" alt="Tourist requirements" class="w-full">
              </picture>
            </div>
          </div>
        </div>
      <?php elseif($reqs->reqtype === "Business"): ?>
        <div class="mx-10">
          <h2 class=" font-bold text-4xl md:text-5xl max-w-xl  leading-tight">Business visa Requirements</h2>
          <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="w-full">
              <picture>
                <source type="image/avif" srcset="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648644868/business_nlpb2j.avif">
                <img src="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648644781/business_x4hv7c.png" alt="Business requirements" class="w-full">
              </picture>
            </div>
            <div class="textsize mj-theme-text relative w-full">
              <?php echo $reqs->reqbody; ?>
            </div>

          </div>
        </div>
      <?php elseif($reqs->reqtype === "Medical"): ?>
        <div class="bg-gray-100 ">
        <div class="m-10">
          <h2 class=" font-bold text-black text-4xl md:text-5xl max-w-xl  leading-tight">About {{$countryblogs[0]->title}} Visa</h2>
          <div class="textsize text-black relative w-full">
            <?php echo $reqs->reqbody; ?>
          </div>
        </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<!-- @ li vewire( 'layout.blogprofile', ['cate gorySearc h' => $countr yblogs[0 ]->title]) -->
<livewire:layout.article/>
<!-- Second -->
<div class="hero bg-gray-100 py-16">
        <!-- container -->
        <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
            <div class="hero-wrapper grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
                <div class="hero-text col-span-6">
                    <p class=" font-bold text-4xl md:text-5xl max-w-xl text-gray-900 leading-tight">Call us & get your travel voucher now!</p>
                    <hr class=" w-12 h-1 bg-orange-500 rounded-full mt-8">
                </div>
                <div class="hero-image col-span-6">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><title>#102_travelling_twocolour</title><path d="M81.77,83.39c-28.67,17.47-45.66,49.51-43,83C40.18,183.48,46.54,200,63.35,209c44.83,24,240.55,24.45,269.51-18s18.19-102.84-44.8-128C233.46,41.18,155.82,38.3,81.77,83.39Z" fill="#e6e6e6" opacity="0.3"></path><path d="M283.69,206V180.64a4.65,4.65,0,0,1,4.64-4.65h18.49a4.65,4.65,0,0,1,4.64,4.65V206" fill="none" stroke="#ffd200" stroke-miterlimit="10" stroke-width="2"></path><path d="M283.69,206V180.64a4.65,4.65,0,0,1,4.64-4.65h18.49a4.65,4.65,0,0,1,4.64,4.65V206" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.08"></path><path d="M159.26,145.74s-18.34,7.36-12.41,28.68,6.48,23.63,19.71,22.32,4.66-22.32,4.66-22.32Z" fill="#ffd200"></path><path d="M152.37,79.92s-50.86,11.79-64.24,41.59l45.05,3.4,11.54-7Z" fill="#ed8936"></path><path d="M152.37,79.92s-50.86,11.79-64.24,41.59l45.05,3.4,11.54-7Z" fill="#fff" opacity="0.46"></path><ellipse cx="200.42" cy="272.36" rx="154.08" ry="11.83" fill="#e6e6e6" opacity="0.45"></ellipse><path d="M134.79,246.33s-4.45,3.22-8.54.91-7.67.77-4.87,4.13,14.8,5,14.8,5l4.51-7.28Z" fill="#ed8936"></path><path d="M215.08,260.56s1.94,5.15,6.62,5.47,6,4.88,1.79,6.14-15.12-4-15.12-4l.26-8.57Z" fill="#ed8936"></path><path d="M79.19,260.08s-10.59-2.9-12.89-12.75c0,0,16.41-3.32,16.87,13.62Z" fill="#ed8936" opacity="0.58"></path><path d="M80.49,259s-7.4-11.7-.89-22.64c0,0,12.48,7.93,6.93,22.66Z" fill="#ed8936" opacity="0.73"></path><path d="M82.4,259s3.9-12.35,15.72-14.69c0,0,2.21,8-7.65,14.73Z" fill="#ed8936"></path><polygon points="74.72 258.75 76.86 273.44 90.38 273.5 92.37 258.83 74.72 258.75" fill="#24285b"></polygon><path d="M156.2,53.77s1.74,6.3,4.27,10a3.28,3.28,0,0,0,4.58.82c1.83-1.3,3.93-3.59,3.41-7.08l-.15-6a5.88,5.88,0,0,0-4.6-5C159.34,45.28,155,50,156.2,53.77Z" fill="#f4a28c"></path><polygon points="169.43 54.63 177.9 74.3 166.73 78.19 165.05 62.32 169.43 54.63" fill="#f4a28c"></polygon><path d="M170.86,55.92h0a.62.62,0,0,1-.23.72,4.34,4.34,0,0,1-5.25-.1,5.45,5.45,0,0,1-2.08-5.6,25.94,25.94,0,0,1-5.48,2.52,6,6,0,0,1-2,.32l-3.28-4s-4.23-3.66-1.89-5.67,4.76.61,6.11-2.44,1.54-4.07,4.27-3.72.83,3.12,4.53,1.7,4.36.08,5,1.75a3.1,3.1,0,0,1-.12,1.82A20.1,20.1,0,0,0,170.86,55.92Z" fill="#24285b"></path><path d="M164.66,56.6s-.83-2.37,1-2.85,3.06,3,.77,4.16Z" fill="#f4a28c"></path><path d="M157.5,57.68l-.83,3A1,1,0,0,0,157.85,62l2.51-.43Z" fill="#f4a28c"></path><rect x="289.35" y="173.73" width="16.36" height="5.3" fill="#24285b"></rect><path d="M165.31,64.43s1.44-.49,3.72-3.33c0,0,1.05,4.15-3.26,8Z" fill="#ce8172" opacity="0.31"></path><path d="M162.12,76.62l6.43-1.16a90.83,90.83,0,0,0,8.92-2.08c11-3.14,43.37-10.53,52.58,8.2,11.16,22.69-7.47,96.3-7.47,96.3h-51s-10.41-30.66-25.29-49.62S121,88.21,162.12,76.62Z" fill="#ed8936"></path><path d="M152.37,79.92s-2.56,16.32,19.86,4l-5.75-8A58,58,0,0,0,152.37,79.92Z" opacity="0.08"></path><path d="M94.92,139.7c-10.16-3.16-11.68-17-2.47-22.37a25.2,25.2,0,0,1,10.9-3.2c17.08-1.26,46.18-2.85,46.18-2.85s17.52,5.7,14.77,14.24-15.08-5.06-15.08-5.06S116.66,146.46,94.92,139.7Z" fill="#f4a28c"></path><rect x="144.58" y="110.56" width="6.04" height="12.3" transform="translate(-14.69 21.47) rotate(-7.93)" fill="#24285b"></rect><rect x="143.84" y="109.5" width="6.04" height="3.82" transform="matrix(0.99, -0.14, 0.14, 0.99, -13.96, 21.32)" fill="#ffd200"></rect><path d="M166.48,75.84s-7.76,7.14,1.21,8.67,9.78-11.13,9.78-11.13Z" fill="#f4a28c"></path><path d="M171.63,177.88l-38.45,68.45,9.93,6.91s21.24-35.45,46.53-53.26a6.38,6.38,0,0,1,9.72,3.27c6.84,21.15,7.42,58,7.42,58H218.5l4.08-83.34Z" fill="#24285b"></path><path d="M171.63,177.88s19.15-15,25.92-36.41a6.57,6.57,0,0,1,11.08-2.37l18.2,19.68,3.67-20.57L217.19,96.09,192,79.92l-5,19.51Z" opacity="0.08"></path><path d="M163.36,158.94s11.81-11.72,14.11-50.86c1.91-32.56,6.58-38.92,16.33-41.2,15.06-3.54,18.65.94,23.39,7.63,0,0-24.08,1.49-23.24,16.56s-2.51,68.75-22.32,86.81C171.63,177.88,162.44,177.11,163.36,158.94Z" fill="#ffd200"></path><path d="M163.36,158.94s11.81-11.72,14.11-50.86c1.91-32.56,6.58-38.92,16.33-41.2,15.06-3.54,18.65.94,23.39,7.63,0,0-24.08,1.49-23.24,16.56s-2.51,68.75-22.32,86.81C171.63,177.88,162.44,177.11,163.36,158.94Z" fill="#fff" opacity="0.46"></path><path d="M196.37,93.76c-5-12,8.93-27.14,21-22.46,10.32,4,21.35,12.84,27.34,30.64C258.94,144.25,291,164.7,291,164.7s16.36,2.7,16.36,8.65-19.34,0-19.34,0-50.2-20.83-76.24-54.3C204,109,199.22,100.59,196.37,93.76Z" fill="#f4a28c"></path><path d="M226.35,134.56s19.94-6.75,25-16.62c0,0-7.22-38.91-32.87-47.28-8.44-2.75-17.87.34-22.29,8C190.83,88,192,105.22,226.35,134.56Z" fill="#ed8936"></path><path d="M226.35,134.56s19.94-6.75,25-16.62c0,0-7.22-38.91-32.87-47.28-8.44-2.75-17.87.34-22.29,8C190.83,88,192,105.22,226.35,134.56Z" fill="#fff" opacity="0.46"></path><rect x="271.49" y="198.46" width="52.16" height="67.53" fill="#ffd200"></rect><rect x="278.47" y="265.99" width="6.37" height="6.37" fill="#24285b"></rect><rect x="309.43" y="265.99" width="6.37" height="6.37" fill="#24285b"></rect><rect x="280.14" y="211.01" width="7.25" height="40.35" opacity="0.08"></rect><rect x="293.95" y="211.01" width="7.25" height="40.35" opacity="0.08"></rect><rect x="306.92" y="211.01" width="7.25" height="40.35" opacity="0.08"></rect><circle cx="222.58" cy="34.77" r="21.04" fill="#24285b"></circle><polygon points="214.44 34.77 196.44 52.7 220.3 43.18 214.44 34.77" fill="#24285b"></polygon><rect x="220.3" y="25.3" width="3.51" height="11.08" fill="#fff"></rect><rect x="220.3" y="39.43" width="3.51" height="3.51" fill="#fff"></rect></svg>
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
          "url":"{{$countryblogs[0]->flags}}", "contentUrl":"{{$countryblogs[0]->flags}}",
          "width":60,
          "height":43,
          "caption":"GreenApple Travel and Tourism LLC"
        },
        "image":{"@id":"https://greenappletravel.ae/#logo"}},
      {
        "@type":"WebSite",
        "@id":"https://greenappletravel.ae/#website",
        "url":"https://greenappletravel.ae/",
        "name":"GreenApple Travel and Tourism",
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
            "urlTemplate":"https://greenappletravel.ae/?s=russia+visa+{search_term_string}"
            },
            "query-input":"required name=search_term_string"}],
        "inLanguage":"en-US"
      },
      {
        "@type":"ImageObject",
        "@id":"https://greenappletravel.ae/#primaryimage",
        "inLanguage":"en-US",
        "url":"{{$countryblogs[0]->flags}}",
        "contentUrl":"{{$countryblogs[0]->flags}}",
        "width":940,
        "height":788
      },{
        "@type":"WebPage",
        "@id":"https://greenappletravel.ae/#webpage",
        "url":"https://greenappletravel.ae/",
        "name":"{{$countryblogs[0]->title}} Visa from Dubai United Arab Emirates Quick & Easy",
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
        "description":"Get {{$countryblogs[0]->title}} Visa from Dubai fast and Easy, No appointment, No Consulate Visit, Easy Documentation, Family Visa Tourist {{$countryblogs[0]->title}} Visa",
        "breadcrumb":{"@id":"https://greenappletravel.ae/#breadcrumb"},
        "inLanguage":"en-US",
        "potentialAction":[{"@type":"ReadAction",
                            "target":["https://greenappletravel.ae/"]}]}
    ]
  }
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "reviewCount": "684"
  },
  "description": "{{$countryblogs[0]->body}}",
  "name": "{{$countryblogs[0]->title}} Visa",
  "image": "{{$countryblogs[0]->flags}}",
  "sku": "101{{$countryblogs[0]->id}}",
   "brand": {
    "@type": "brand",
    "name": "GreenApple Tourism"
  },
  "mpn": "{{$countryblogs[0]->title}}visa",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "{{$countryblogs[0]->price}}.00",
    "priceValidUntil": "2025-01-01",
    "url": "https://Greenappletravel.ae",
    "priceCurrency": "AED"
  },
  "review": [
    {
      "@type": "Review",
      "author": {
            "@type": "Person",
            "name": "Ali Ahmed Mohammed"
      },
      "datePublished": "2021-05-02",
      "reviewBody": "Great Service.",
      "name": "Ali Ahmed Mohammed",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      }
    }
  ]
}
</script>
</div>

<div>
  <livewire:layout.navigation/>
    <div class="bg-white flex justify-center mt-16">
      <div class="max-w-4xl">
        <div class="divide-y divide-gray-200">
          <div class="pt-6 pb-8 space-y-2 md:space-y-5">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl md:text-[4rem] md:leading-[3.5rem]">Latest</h1>
            <p class="text-lg text-gray-500">All updates for our Tour Packages.</p>
          </div>
          <ul class="divide-y divide-gray-200">
            <?php foreach ($offertours as $offer): ?>
            <li class="py-12">
              <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
                <dl>
                  <dt class="sr-only">Published on</dt>
                  <dd class="text-base font-medium text-gray-500"><time datetime="2021-08-11T19:30:00.000Z">{{$offer->datepublish}}</time></dd>
                </dl>
                <div class="space-y-5 xl:col-span-3"><div class="space-y-6">
                  <h2 class="text-2xl font-bold tracking-tight"><a class="text-gray-900" href="/tailwind-ui-ecommerce">Introducing Tailwind UI Ecommerce</a></h2>
                  <div class="prose max-w-none text-gray-500">
                    <div class="prose max-w-none">
                      <p>Almost 6 months in the making, we finally released <a href="https://tailwindui.com/#product-ecommerce">Tailwind UI Ecommerce</a>z — the first all-new component kit for Tailwind UI since the initial launch back in February 2020.</p>
                    </div>
                  </div>
                </div>
                <div class="text-base font-medium">
                  <a class="text-teal-600 hover:text-teal-700" aria-label="Read &quot;Introducing Tailwind UI Ecommerce&quot;" href="/tailwind-ui-ecommerce">Read more →</a>
                </div>
              </div>
            </article>
          </li>
            <?php endforeach; ?>
        </ul>
      </div>
      </div>
    </div>
   <livewire:layout.footer/>
</div>

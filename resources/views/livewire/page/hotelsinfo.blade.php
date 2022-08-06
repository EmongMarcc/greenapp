<div>
  <livewire:layout.navigation/>
  <?php
  if ($errView) {
    echo "cURL Error #:" . $errView;
  } else { ?>
  <div class="py-16 bg-gray-200 relative">

    <!-- ./ Breadcrumbs -->

    <div class="mt-6">
      <div class="sm:hidden">
        <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800"><?php echo json_decode($responseView)->data->body->propertyDescription->name ?? '' ?></h2>
        <p class="text-gray-500 text-sm">By <span class="text-indigo-600"><?php echo json_decode($responseView)->data->body->propertyDescription->address->countryName ?? '' ?></span></p>
        <div class="flex">
          <?php for ($j=0; $j < intval(json_decode($responseView)->data->body->propertyDescription->starRating); $j++): ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
          <?php endfor; ?>
        </div>
        <p class="text-gray-500"><?php echo json_decode($responseView)->data->body->propertyDescription->address->fullAddress ?? '' ?></p>

      </div>
      <div x-data="{reviews:false}" class="flex flex-col md:flex-row">
        <div class="flex-grow overflow-scroll max-w-5xl min-w-2xl">
          <div>
            <div class="2xl:col-span-4 h-screen 2xl:grid-cols-6 2xl:min-h-0 col-span-4 gap-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 lg:min-h-0 md:col-span-2 md:min-h-0 min-h-screen sm:col-span-2 sm:min-h-screen xl:col-span-3 xl:grid-cols-6 xl:min-h-0 md:p-3 rounded shadow-lg">
            <div class="bg-gray-200 col-span-full h-full mb-5 relative rounded-lg shadow-lg sticky top-0 w-full z-20" style="min-height:33vh;">
            <div class="absolute inset-0 bg-white opacity-25 rounded-lg shadow-2xl"></div>
            <div class="absolute duration-300 inset-0 transform transition">
                  <div id="biggerImg" class="w-full h-full rounded-lg bg-scroll bg-contain bg-no-repeat bg-center hover:rounded-lg loaded" style="background-image: url(<?php echo str_replace('{size}','z',json_decode($responseimages)->hotelImages[0]->baseUrl ?? 'https://cdn4.iconfinder.com/data/icons/ui-beast-4/32/Ui-12-512.png') ?>);">
                  </div>
            </div>
            </div>
            </div>
            <div class="flex flex-row overflow-scroll">
              <?php foreach (json_decode($responseimages)->hotelImages ?? [] as $imagesUrl): ?>
              <div class="relative w-full">
              <div  onclick="myFunctionCard(`<?php echo str_replace('{size}','z',$imagesUrl->baseUrl) ?>`)" class=" m-1 h-14 w-14 cursor-pointer relative absolute duration-300 inset-0 transition hover-z-index rounded-lg shadow-lg bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(<?php echo str_replace('{size}','z',$imagesUrl->baseUrl)?>);">
              </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="flex-grow px-4">
          <div class="relative w-full overflow-hidden">
            <h2 class="hidden sm:block mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl"><?php echo json_decode($responseView)->data->body->propertyDescription->name ?? '' ?></h2>
            <p class="hidden sm:block text-gray-500 text-sm">By <span class="text-indigo-600"><?php echo json_decode($responseView)->data->body->propertyDescription->address->countryName ?? '' ?></span></p>
            <div class="hidden sm:flex">
              <?php for ($j=0; $j < intval(json_decode($responseView)->data->body->propertyDescription->starRating); $j++): ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              <?php endfor; ?>
            </div>
            <p class="hidden sm:block text-gray-500"><?php echo json_decode($responseView)->data->body->propertyDescription->address->fullAddress ?? '' ?></p>

            <?php foreach (json_decode($responseView)->data->body->propertyDescription->tagline as $tags): ?>
              <?php echo $tags ?? '' ?>
            <?php endforeach; ?>

            <div class="flex">
            <p class="bg-text2 rounded text-white p-1"><?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviewOverview->formattedOverall ?? '' ?> </p>
            <p class="font-mono p-1 rounded text-red-500"><?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviewOverview->qualitativeBadgeText ?? '' ?></p>
          </div>

            <?php for ($ss = 0; $ss < 2;$ss++): ?>
              <?php if (json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->summary ?? false): ?>
          <div class="border-black border-b-2 my-4">
            <p class="my-2 text-sm font-md text-gray-500">
              <q><?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->summary ?? '' ?></q>
            </p>
          <div class="flex flex-col">

          <p class="my-2 text-sm font-md text-gray-500 flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
            <?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->qualitativeBadgeText ?? '' ?>
          </p>
            <p class="my-2 text-sm font-md text-gray-400">~ <?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->recommendedBy ?? '' ?></p>
          </div>
            <?php if (json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->postedOn ?? false): ?>

            <?php
              $date = new DateTime();
              $date->setTimestamp(json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->postedOn ?? '');
              $variable = $date->format('D, d-M');
              ?>
            <p class="text-xs text-gray-500 font-light">
              <span class="font-mono p-1 rounded"><?php echo $variable ?? '' ?></span>
            </p>
          <?php endif; ?>
          </div>
        <?php endif; ?>
        <?php endfor; ?>
            <button type="button" @click="reviews=!reviews" class="font-medium hover:text-text2 px-3 py-2 rounded-md text-sm text-text text-white" name="button">See All <span><?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviewOverview->totalCount ?? '' ?></span> Reviews</button>
          </div>
        </div>
        <div x-show="reviews" style=display:none;"" class="bg-black bg-opacity-50 fixed h-full top-0 w-full z-50">
          <div class="absolute w-full h-72  top-1/4 w-full flex justify-center">
              <div @click.away="reviews=false" class="overflow-scroll md:w-10/12 w-full h-full bg-white rounded shadow-lg">
                <div class="text-center">
                  <p class="text-xl text-red-600 font-md">Coming Soon!</p>
                  <?php for ($ss = 0; $ss < count(json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews ?? []);$ss++): ?>
                    <?php if (json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->summary ?? false): ?>
                <div class="border-black border-b-2 my-4">
                  <p class="my-2 text-sm font-md text-gray-500">
                    <q><?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->summary ?? '' ?></q>
                  </p>
                <div class="flex flex-col">

                <p class="my-2 text-sm font-md text-gray-500 flex">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                      </svg>
                  <?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->qualitativeBadgeText ?? '' ?>
                </p>
                  <p class="my-2 text-sm font-md text-gray-400">~ <?php echo json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->recommendedBy ?? '' ?></p>
                </div>
                  <?php if (json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->postedOn ?? false): ?>

                  <?php
                    $date = new DateTime();
                    $date->setTimestamp(json_decode($responsereview)->reviewData->guestReviewGroups->guestReviews[0]->reviews[$ss]->postedOn ?? '');
                    $variable = $date->format('D, d-M');
                    ?>
                  <p class="text-xs text-gray-500 font-light">
                    <span class="font-mono p-1 rounded"><?php echo $variable ?? '' ?></span>
                  </p>
                <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php endfor; ?>
                </div>
              </div>
          </div>
        </div>
      </div>
        <?php if (json_decode($responseView)->data->body->hygieneAndCleanliness ?? false): ?>
          <div x-data="{covid:false}" class="font-black cursor-pointer text-theme2 tracking-wide w-full ease rounded-lg shadow-lg p-4 bg-white my-2">
            <button @click="covid=!covid" class="h-5 flex">
              <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="covid == true ? 'rotate-0' : 'rotate-180'"  class="w-5 h-5 text-theme2 transform transition duration-150 ease hover:rotate-0" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
              <span class="h-5 list-disc"><?php echo json_decode($responseView)->data->body->hygieneAndCleanliness->title  ?? ''  ?></span>
            </button>
                      <div x-show="covid" x-transition:enter="transition ease duration-300"
                      x-transition:enter-start="opacity-0 h-0"
                      x-transition:enter-end="opacity-100 h-full"
                      x-transition:leave="transition ease duration-300"
                      x-transition:leave-start="opacity-100 h-full"
                      x-transition:leave-end="opacity-0 h-0" style="display:none" class="flex-1">
                          <p class="text-gray-900 font-bold my-1 list-disc">
                              <?php echo json_decode($responseView)->data->body->hygieneAndCleanliness->healthAndSafetyMeasures->title ?? '' ?>:
                          </p>
                          <p class="text-gray-900 font-semibold my-1 list-disc">
                              <?php echo json_decode($responseView)->data->body->hygieneAndCleanliness->healthAndSafetyMeasures->description ?? '' ?>
                          </p>
                          <?php foreach (json_decode($responseView)->data->body->hygieneAndCleanliness->healthAndSafetyMeasures->measures ?? [] as $measures): ?>
                            <p class="font-semibold text-gray-800 list-disc">{{$measures}}</p>
                          <?php endforeach; ?>
                      </div>
                  </div>
      <?php endif; ?>
      <div class="flex flex-col md:flex-row">
        <?php foreach (json_decode($responseView)->transportation->transportLocations ?? [] as $transportLocations): ?>
          <div class="w-full md:w-1/3">
            <p><?php echo $transportLocations->category ?? '' ?></p>
            <?php foreach ($transportLocations->locations ?? [] as $locations): ?>
              <p><?php echo $locations->name ?? '' ?><span><?php echo $locations->distance ?? '' ?></span><span><?php echo $locations->distanceInTime ?? '' ?></span></p>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="flex flex-col md:flex-row">
        <div class="bg-white w-full mx-auto border border-mjtheme-theme rounded shadow-lg" x-data="{selected:null}">
        <ul class="shadow-box">
          <?php for($l = 0;$l < count(json_decode($responseView)->data->body->overview->overviewSections); $l++): ?>
        <li class="relative border-b border-mjtheme-theme">
        <button type="button" class="w-full px-8 py-6 text-left dark:text-dark-primary text-light-primary" @click="selected !== {{$l}} ? selected = {{$l}} : selected = null">
        <div class="flex items-center justify-between ">
        <span><?php echo json_decode($responseView)->data->body->overview->overviewSections[$l]->title ?? '' ?></span>
        <span class="ico-plus"></span>
        </div>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="foo" x-bind:style="selected == {{$l}} ? 'max-height: 2000px' : ''">
        <div class="p-6 text-black">
          <?php foreach (json_decode($responseView)->data->body->overview->overviewSections[$l]->content ?? [] as $listitems): ?>
              <p class="list-disc"><?php echo htmlspecialchars_decode($listitems) ?></p>
          <?php endforeach; ?>
        </div>
        </div>
        </li>
      <?php endfor; ?>
        </ul>
        </div>
        <div class="bg-white w-full mx-auto border border-mjtheme-theme rounded shadow-lg" x-data="{selected:null}">
        <ul class="shadow-box">
          <?php for($l = 0;$l < count(json_decode($responseView)->data->body->specialFeatures->sections); $l++): ?>
        <li class="relative border-b border-mjtheme-theme">
        <button type="button" class="w-full px-8 py-6 text-left dark:text-dark-primary text-light-primary" @click="selected !== {{$l}} ? selected = {{$l}} : selected = null">
        <div class="flex items-center justify-between ">
        <span class="list-disc"><?php echo json_decode($responseView)->data->body->specialFeatures->sections[$l]->heading ?? '' ?></span>
        <span class="ico-plus"></span>
        </div>
        </button>
        <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="foo" x-bind:style="selected == {{$l}} ? 'max-height: 2000px' : ''">
        <div class="p-6 text-black">
              <p><?php echo htmlspecialchars_decode(json_decode($responseView)->data->body->specialFeatures->sections[$l]->freeText) ?></p>
        </div>
        </div>
        </li>
      <?php endfor; ?>
        </ul>
        </div>
      </div>
      <form wire:submit.prevent="dataFetchHotel({{$hotelId}})" class="p-3 relative rounded-lg shadow-md w-full">
        <div class="grid md:grid-cols-4 gap-2">
      <select class="h-6 bg-gray-200 border border-gray-300 font-normal m-0 py-1 rounded text-gray-700 text-xs" wire:model.defer="adults1">
        <option value="1">1 Room, 1 Adult, 0 Children</option>
        <option value="2">1 Room, 2 Adults, 0 Children</option>
        <option>More options</option>
      </select>
      <div class="flex">
        <svg class="w-6 h-6 bg-gray-200 rounded p-1 rounded-r-none border-r-2 ml-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
        </svg>
        <input class="w-full h-6 bg-gray-200 border border-gray-300 font-normal m-0 py-1 rounded rounded-l-none text-gray-700 text-xs" type="date" wire:model.defer="checkIn">
      </div>
      <div class="flex">
        <svg class="w-6 h-6 rounded rounded-r-none p-1 bg-gray-200 border-r-2 ml-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        <input class="w-full h-6 bg-gray-200 border border-gray-300 font-normal m-0 py-1 rounded rounded-l-none text-gray-700 text-xs" type="date" wire:model.defer="checkOut">
      </div>

      <button type="submit" class="flex active:bg-green-700 bg-green-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-green-700 focus:outline-none focus:shadow-outline-green font-medium h-6 hover:bg-green-600 inline-flex justify-center leading-5 rounded-md text-sm text-white transition w-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
          </svg>
          <span>Search Hotels</span>
        </button>
      </div>
      </form>
      <?php if (json_decode($responseView)->data->body->roomsAndRates ?? false): ?>
      <div x-data="{selectedroom:null, covid:false, myFunctionCardMods:false}">
      <?php for ($k = 0;$k < count(json_decode($responseView)->data->body->roomsAndRates->rooms);$k++): ?>
        <div class="container mx-auto my-5">

    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">

        <div class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-400 bg-opacity-30 bg-cover bg-center" style="background-image: url(<?php echo json_decode($responseView)->data->body->roomsAndRates->rooms[$k]->images[0]->fullSizeUrl ?? '' ?>); background-blend-mode: multiply;"></div>
            <div class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2"><?php echo json_decode($responseView)->data->body->propertyDescription->name ?? '' ?></h3>
                <h4 class="w-full text-xl text-gray-100 leading-tight"><?php echo json_decode($responseView)->data->body->roomsAndRates->rooms[$k]->name ?? '' ?></h4>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div class="w-full p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h4 class="hidden md:block text-xl text-gray-400"><?php echo json_decode($responseView)->data->body->propertyDescription->name ?? '' ?></h4>
                <h3 class="hidden md:block font-bold text-2xl text-gray-700"><?php echo json_decode($responseView)->data->body->roomsAndRates->rooms[$k]->name ?? '' ?></h3>
                <button type="button" @click="selectedroom !== {{$k}} ? selectedroom = {{$k}} : selectedroom = null" class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900">
                    <span>View more</span>
                    <span class="text-xs ml-1">&#x279c;</span>
                </button>
            </div>
        </div>

    </div>
</div>
      <div class="mx-auto bg-white rounded-xl shadow-md overflow-hidden container">
              <div style="display:none" x-ref="foo" x-bind:style="selectedroom == {{$k}} ? 'display:block' : 'display:none'">
              <div class="fixed z-20 w-full h-full bg-black bg-opacity-25 top-0 left-0">
                <div class="table w-full h-full">
                  <div class="table-cell align-middle">
                    <div class="flex justify-center h-full max-h-96">
                      <div @click.away ="selectedroom !== {{$k}} ? selectedroom = {{$k}} : selectedroom = null, myFunctionCardMods=null" class="overflow-scroll  overflow-x-hidden h-full w-full lg:w-10/12 rounded-lg shadow-lg bg-gray-200">
                        <p class="uppercase tracking-wide text-sm text-center text-indigo-500 my-3 font-bold"><?php echo json_decode($responseView)->data->body->roomsAndRates->rooms[$k]->name ?? '' ?></p>
                        <div class="flex flex-wrap h-72 -mx-px">
                          <div class="my-px px-px w-full overflow-hidden w-full overflow-hidden">
                            <div class="bg-gray-200 col-span-full h-full mb-5 relative rounded-lg shadow-lg sticky top-0 w-full z-20">
                            <div class="duration-300 inset-0 transform transition">
                              <div class="w-full h-full rounded-lg bg-scroll bg-contain bg-no-repeat hover:rounded-lg preload" >
                              <template x-if="myFunctionCardMods">
                                <div  x-bind:style="`background-image: url('${myFunctionCardMods}')`"  class="biggerImgMod w-full h-60 bg-contain bg-no-repeat sm:bg-center">
                                </div>
                              </template>
                              <template x-if="!myFunctionCardMods">
                                <div class="biggerImgMod w-full h-60 bg-contain bg-no-repeat sm:bg-center" style="background-image: url(<?php echo json_decode($responseView)->data->body->roomsAndRates->rooms[$k]->images[0]->fullSizeUrl ?? '' ?>);">
                                </div>
                              </template>
                                <div class="flex flex-row overflow-scroll">
                                <?php foreach (json_decode($responseView)->data->body->roomsAndRates->rooms[$k]->images ?? [] as $image): ?>
                                  <div class="relative w-full">
                                    <div class=" m-1 h-14 w-14 cursor-pointer relative absolute duration-300 relative inset-0 transition hover-z-index rounded-lg shadow-lg bg-scroll bg-cover bg-no-repeat bg-top hover:rounded-lg" style="background-image: url(<?php echo $image->fullSizeUrl ?? '' ?>)">
                                      <a @click="myFunctionCardMods = '{{$image->fullSizeUrl}}'" class="absolute top-0 left-0 w-full h-full">&nbsp;</a>
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                            </div>
                              </div>

                            </div>
                            </div>

                          </div>

                          <div class="mx-auto">
                            <p class="uppercase tracking-wide text-sm text-center text-indigo-500 my-3 font-semibold">Description</p>
                            <p><?php echo json_decode($responseView)->data->body->roomsAndRates->rooms[$k]->additionalInfo->description ?? '' ?></p>
                            <?php if (json_decode($responseView)->data->body->hygieneAndCleanliness ?? false): ?>
                              <div class="font-black cursor-pointer text-theme2 tracking-wide w-full ease rounded-lg shadow-lg p-4 bg-white my-2">
                                <button @click="covid=!covid" class="h-5 flex">
                                  <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="covid == true ? 'rotate-0' : 'rotate-180'"  class="w-5 h-5 text-theme2 transform transition duration-150 ease hover:rotate-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                                  <span class="h-5"><?php echo json_decode($responseView)->data->body->hygieneAndCleanliness->title  ?? ''  ?></span>
                                </button>
                                <div x-show="covid" x-transition:enter="transition ease duration-300"
                                x-transition:enter-start="opacity-0 h-0"
                                x-transition:enter-end="opacity-100 h-full"
                                x-transition:leave="transition ease duration-300"
                                x-transition:leave-start="opacity-100 h-full"
                                x-transition:leave-end="opacity-0 h-0" style="display:none" class="flex-1">
                                    <p class="text-gray-900 font-bold my-1 list-disc">
                                        <?php echo json_decode($responseView)->data->body->hygieneAndCleanliness->healthAndSafetyMeasures->title ?? '' ?>:
                                    </p>
                                    <p class="text-gray-900 font-semibold my-1 list-disc">
                                        <?php echo json_decode($responseView)->data->body->hygieneAndCleanliness->healthAndSafetyMeasures->description ?? '' ?>
                                    </p>
                                    <?php foreach (json_decode($responseView)->data->body->hygieneAndCleanliness->healthAndSafetyMeasures->measures ?? [] as $measures): ?>
                                      <p class="font-semibold text-gray-800 list-disc">{{$measures}}</p>
                                    <?php endforeach; ?>
                                </div>
                                      </div>
                          <?php endif; ?>
                          <div class="flex flex-col">
                            <div class="bg-white w-full mx-auto border border-mjtheme-theme rounded shadow-lg" x-data="{selected:null}">
                            <ul class="shadow-box">
                              <?php for($l = 0;$l < count(json_decode($responseView)->data->body->overview->overviewSections); $l++): ?>
                            <li class="relative border-b border-mjtheme-theme">
                            <button type="button" class="w-full px-8 py-6 text-left dark:text-dark-primary text-light-primary" @click="selected !== {{$l}} ? selected = {{$l}} : selected = null">
                            <div class="flex items-center justify-between ">
                            <span><?php echo json_decode($responseView)->data->body->overview->overviewSections[$l]->title ?? '' ?></span>
                            <span class="ico-plus"></span>
                            </div>
                            </button>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="foo" x-bind:style="selected == {{$l}} ? 'max-height: 2000px' : ''">
                            <div class="p-6 text-black">
                              <?php foreach (json_decode($responseView)->data->body->overview->overviewSections[$l]->content ?? [] as $listitems): ?>
                                  <p class="list-disc"><?php echo htmlspecialchars_decode($listitems) ?></p>
                              <?php endforeach; ?>
                            </div>
                            </div>
                            </li>
                          <?php endfor; ?>
                            </ul>
                            </div>
                            <div class="bg-white w-full mx-auto border border-mjtheme-theme rounded shadow-lg" x-data="{selected:null}">
                            <ul class="shadow-box">
                              <?php for($l = 0;$l < count(json_decode($responseView)->data->body->specialFeatures->sections); $l++): ?>
                            <li class="relative border-b border-mjtheme-theme">
                            <button type="button" class="w-full px-8 py-6 text-left dark:text-dark-primary text-light-primary" @click="selected !== {{$l}} ? selected = {{$l}} : selected = null">
                            <div class="flex items-center justify-between ">
                            <span><?php echo json_decode($responseView)->data->body->specialFeatures->sections[$l]->heading ?? '' ?></span>
                            <span class="ico-plus"></span>
                            </div>
                            </button>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="foo" x-bind:style="selected == {{$l}} ? 'max-height: 2000px' : ''">
                            <div class="p-6 text-black">
                                  <p><?php echo htmlspecialchars_decode(json_decode($responseView)->data->body->specialFeatures->sections[$l]->freeText) ?></p>
                            </div>
                            </div>
                            </li>
                          <?php endfor; ?>
                            </ul>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
        <?php endfor; ?>

      </div>
      <?php else: ?>
        <h1 class="text-xl text-red-500 font-black" >No Rooms Available.</h1>
            <?php endif; ?>
        <div class="">
          <h1 class="text-2xl font-black">Policies</h1>
          <div class="container mx-auto">
          <?php foreach (json_decode($responseView)->data->body->smallPrint->policies ?? '' as $policies): ?>
            <?php echo htmlspecialchars_decode($policies) ?>
          <?php endforeach; ?>
        </div>
        </div>
    </div>
  </div>
    <?php
  }
   ?>
   <livewire:layout.footer/>
   <script type="text/javascript">


function myFunctionCardMod(ddddssss){
const mySrc = ddddssss;
document.querySelectorAll(".biggerImgMod").style.backgroundImage = "url('"+ddddssss+"')";
document.querySelector(".biggerImgMod").classList.toggle("loaded");
document.querySelector(".biggerImgMod").classList.toggle("preload");
}

function myFunctionCard(mySrca){
const mySrc = mySrca;
document.getElementById("biggerImg").style.backgroundImage = "url('"+mySrc+"')";
document.getElementById("biggerImg").classList.toggle("loaded");
document.getElementById("biggerImg").classList.toggle("preload");
}
   </script>
</div>

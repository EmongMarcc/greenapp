<div>
<div class="bg-white mt-10 pt-10">
  <script type="text/javascript">
    function scrollrest(){
      document.getElementById("ressst").scrollIntoView();
    }
  </script>
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
        <a itemprop="item"  href="{{url('/travelrestrictions')}}">
        <span itemprop="name">Travel Restrictions</span></a>
        <meta itemprop="position" content="2" />
      </li>
    </ol>

          <div wire:init="loadPosts"  class="container flex justify-center max-w-4xl mx-auto ">
              <div class="w-full rounded p-4 border shadow-lg">
                <div class="flex flex-wrap -mx-px overflow-hidden sm:-mx-1 md:-mx-1 lg:-mx-1 xl:-mx-3">
                  <!-- 1st -->
                  <?php foreach ($country ?? '' as $resteee): ?>
                  <div class="text-center my-px px-px w-1/2 overflow-hidden sm:my-1 sm:px-1 sm:w-1/3 md:my-1 md:px-1 md:w-1/4 lg:my-1 lg:px-1 lg:w-1/6 xl:my-3 xl:px-3 xl:w-1/6">

                        <?php foreach ($resteee->restrictions as $restricttt): ?>
                          <div class="h-20 flex justify-center">
                            <img onclick="scrollrest()" wire:click="selectPost('{{$restricttt->alpha_id}}','{{$resteee->flags}}')" class="cursor-pointer duration-300 h-14 hover:scale-110 hover:shadow-sm shadow-lg transform w-20" src="{{$resteee->flags}}" alt="{{$resteee->title}}">
                          </div>
                          <button class="text-xs text-gray-500" wire:click="selectPost('{{$restricttt->alpha_id}},{{$resteee->flags}}')">{{$resteee->title}} - Restrictions</button>
                        <?php endforeach; ?>
                  </div>
                <?php endforeach; ?>
                  <!-- 1st end -->
                </div>
                <div id='ressst'></div>
                <div class="bg-gray-100 gap-4 grid grid-cols-4 p-3 rounded shadow-md">
                  <div class="flex justify-center">
                    <img class="h-14 shadow-lg w-14 rounded-full object-cover shadow-md" src="{{$selected_flag}}" alt="{{$selected_alpha}} - flag">
                  </div>
                  <div class="sm:col-span-3 mb-2">
                    <h1 class=" text-gray-700 text-lg font-bold mt-2  leading-tight"><?php echo json_decode($response)->data->area->name ?? ''; ?> ({{$selected_alpha}}) - Travel Advice & Restrictions</h1>
                    <p class="px-4 bg-gray-800 text-gray-100 text-center rounded"><?php echo json_decode($response)->data->areaAccessRestriction->entry->borderBan[0]->status ?? ''; ?></p>
                  </div>
                </div>

                <hr/>
                <div class="m-5">
                <div class="mb-4 text-gray-500 text-sm">
                  <?php echo json_decode($response)->data->summary ?? ''; ?>
                </div>
                <div class="flex flex-wrap -mx-1 overflow-hidden lg:-mx-1 xl:-mx-2">

                  <div class="my-1 px-1 w-full overflow-hidden lg:my-1 lg:px-1 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                    <div class="p-5">
                        <p class="font-bold text-gray-700 underline">Entry Restrictions</p>
                        <p class="font-bold text-gray-500 text-xs">published - <?php echo json_decode($response)->data->areaAccessRestriction->entry->date ?? ''; ?></p>
                        <br/>
                        <div class="text-xs h-24 mb-4 overflow-scroll text-gray-500">
                        <?php echo json_decode($response)->data->areaAccessRestriction->entry->text ?? ''; ?>
                        </div>
                    </div>
                  </div>

                  <div class="my-1 px-1 w-full overflow-hidden lg:my-1 lg:px-1 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                    <div class="p-5">
                        <a href="<?php echo json_decode($response)->data->areaAccessRestriction->quarantineModality->rules ?? ''; ?>" target="_blank" rel="nofollow" class="font-bold text-gray-700 underline">Quarantine upon Arrival</a>
                        <p class="font-bold text-gray-500 text-xs">published - <?php echo json_decode($response)->data->areaAccessRestriction->quarantineModality->date ?? ''; ?></p>
                        <br/>
                        <div class="text-xs h-24 mb-4 overflow-scroll text-gray-500">
                        <?php echo json_decode($response)->data->areaAccessRestriction->quarantineModality->text ?? ''; ?>
                        </div>
                    </div>
                  </div>

                  <div class="my-1 px-1 w-full overflow-hidden lg:my-1 lg:px-1 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                    <div class="p-5">
                        <p class="font-bold text-gray-700 underline">Mask Requirements</p>
                        <p class="font-bold text-gray-500 text-xs"><?php echo json_decode($response)->data->areaAccessRestriction->mask->isRequired ?? ''; ?></p>
                        <br/>
                        <div class="text-xs h-24 mb-4 overflow-scroll text-gray-500">
                        <?php echo json_decode($response)->data->areaAccessRestriction->mask->text ?? ''; ?>
                        </div>
                    </div>
                  </div>

                  <div class="my-1 px-1 w-full overflow-hidden lg:my-1 lg:px-1 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                    <div class="p-5">
                        <p class="font-bold text-gray-700 underline">Vaccines </p>
                        <p class="font-bold text-gray-500 text-xs"><?php echo json_decode($response)->data->areaAccessRestriction->diseaseVaccination->isRequired ?? ''; ?> Required for Travel</p>
                        <a href="<?php echo json_decode($response)->data->areaAccessRestriction->diseaseVaccination->referenceLink ?? '' ?>" target="_blank" class="font-bold text-blue-500 text-xs">Source</a>

                        <br/>
                        <div class="text-xs h-24 mb-4 overflow-scroll text-gray-500">
                          <?php foreach (json_decode($response)->data->areaAccessRestriction->diseaseVaccination->qualifiedVaccines ?? [] as $qualifiedVaccines): ?>
                            <p class="font-bold text-gray-500 text-xs"><?php echo $qualifiedVaccines ?? ''; ?></p>
                          <?php endforeach; ?>
                        </div>
                    </div>
                  </div>

                </div>
              <p class="text-gray-800 text-3xl font-bold mt-2 mb-2 leading-tight">Updates</p>
              <br/>

              <div class="w-full bg-white w-full mx-auto border border-gray-200 text-gray-900" x-data="{selected:null}">
                  <ul class="shadow-box">

                    <?php for ($j = 0; $j < count(json_decode($response)->data->areaRestrictions ?? []);$j++): ?>
                      <li class="relative border-b border-gray-200">
                        <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== <?php echo $j ?? '';?> ? selected = <?php echo $j ?? '';?> : selected = null">
                          <div class="flex items-center justify-between">
                            <span><?php echo json_decode($response)->data->areaRestrictions[$j]->restrictionType ?? '';?></span>
                            </div>
                              </button>
                              <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="cont<?php echo $j ?? '';?>" x-bind:style="selected == <?php echo $j ?? '';?> ? 'max-height: ' + $refs.cont<?php echo $j ?? '';?>.scrollHeight + 'px' : ''">
                                <div class="p-6">
                                <?php echo json_decode($response)->data->areaRestrictions[$j]->text ?? '';?>
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

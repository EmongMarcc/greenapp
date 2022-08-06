<div>

    <div class="w-full flex h-full min-h-screen bg-gray-800" :class="{ 'overflow-hidden': isSideMenuOpen }">
            <livewire:dash.page.sidetoggle />
            <div class="w-full">
                    <div class="flex flex-col flex-1 w-full overflow-y-auto">
                        <main class="">

                            <div class="bg-gray-100 rounded-3xl border-4 border-green-400 mb-4 mx-4 pb-10">
                                <div class="rounded-3xl w-full">
                                  <h1 class="text-3xl sm:text-6xl text-green-400 text-center font-black">{{$countryblogs[0]->title}} Page Maintenance</h1>
                                  <div class="grid lg:grid-cols-2 grid-cols-1">
                                    <div class="mt-5">
                                      @livewire('dash.layout.travelagents', ['category_id' => $countryblogs[0]->category])
                                      <form wire:submit.prevent="submit()" class="p-3 relative rounded-lg shadow-md w-full">
                                        <p class="text-xl sm:text-3xl text-green-400 text-center font-black">Add Country Visa holder</p>
                                        <div class="flex flex-col">
                                        @error('countryName') <span class="error text-red-800">*{{ $message }}</span>@enderror
                                        @error('categoryId') <span class="error text-red-800">*{{ $message }}</span>@enderror
                                      </div>
                                      <input placeholder="Country Name" wire:model.defer="countryName" class="form-input text-wrap px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" type="text">
                                      <button type="submit" class="active:bg-green-700 bg-green-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-green-700 focus:outline-none focus:shadow-outline-green font-medium hover:bg-green-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">Submit</button>
                                      </form>
                                    </div>
                                    <div class="bg-white max-h-80 overflow-scroll p-4 rounded-lg shadow-lg">
                                      <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                          <div class="bg-white p-4 shadow-lg rounded-lg">
                                              <h1 class="font-bold text-base">Group of Countries in 1 VISA</h1>
                                              <div class="mt-4">
                                                  <div class="flex flex-col">
                                                      <div class="-my-2 overflow-x-auto">
                                                          <div class="py-2 align-middle inline-block min-w-full">
                                                              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                                  <table class="min-w-full divide-y divide-gray-200">
                                                                      <thead>
                                                                          <tr>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">COUNTRY NAME</span>
                                                                                  </div>
                                                                              </th>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">DATE ADDED</span>
                                                                                  </div>
                                                                              </th>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">STATUS</span>
                                                                                  </div>
                                                                              </th>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">ACTION</span>
                                                                                  </div>
                                                                              </th>
                                                                          </tr>
                                                                      </thead>
                                                                      <tbody wire:init="loadPosts" class="bg-white divide-y divide-gray-200">
                                                                          <?php foreach ($countrylists as $blog): ?>
                                                                          <tr>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                  <p>{{$blog->CountryName}}</p>
                                                                              </td>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                  <p>{{$blog->category_id}}</p>
                                                                              </td>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                    <?php if ($blog->status === 'Active'): ?>
                                                                                      <div class="flex text-green-500">
                                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                      </svg>
                                                                                    <?php elseif ($blog->status === 'Inactive'): ?>
                                                                                      <div class="flex text-yellow-500">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                                                          <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                                                                                          <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                                                                        </svg>
                                                                                    <?php endif; ?>
                                                                                    <button type="button" wire:click="updateStat({{$blog->id}})"><span>{{$blog->status}}</span></button>
                                                                                  </div>
                                                                              </td>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                  <div class="flex space-x-4">
                                                                                      <button wire:click="deleteCategory({{$blog->id}})" class="text-red-500 hover:text-red-600">
                                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                      </svg>
                                                                                      </button>
                                                                                  </div>
                                                                              </td>
                                                                          </tr>
                                                                        <?php endforeach; ?>
                                                                      </tbody>
                                                                  </table>
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
                                  <div class="container">
                                    @livewire('dash.layout.requirements', ['category_id' => $countryblogs[0]->category])
                                    <div class="bg-white max-h-80 overflow-scroll p-4 rounded-lg shadow-lg">
                                      <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                          <div class="bg-white p-4 shadow-lg rounded-lg">
                                              <h1 class="font-bold text-base">Table</h1>
                                              <div class="mt-4">
                                                  <div class="flex flex-col">
                                                      <div class="-my-2 overflow-x-auto">
                                                          <div class="py-2 align-middle inline-block min-w-full">
                                                              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                                  <table class="min-w-full divide-y divide-gray-200">
                                                                      <thead>
                                                                          <tr>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">COUNTRY NAME</span>
                                                                                  </div>
                                                                              </th>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">DATE ADDED</span>
                                                                                  </div>
                                                                              </th>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">STATUS</span>
                                                                                  </div>
                                                                              </th>
                                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                  <div class="flex cursor-pointer">
                                                                                      <span class="mr-2">ACTION</span>
                                                                                  </div>
                                                                              </th>
                                                                          </tr>
                                                                      </thead>
                                                                      <tbody wire:init="loadPosts" class="bg-white divide-y divide-gray-200">
                                                                          <?php foreach ($requirements as $req): ?>
                                                                          <tr>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                  <p>{{$req->reqtype}}</p>
                                                                              </td>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                  <p>{{$req->category_id}}</p>
                                                                              </td>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                    <?php if ($req->status === 'Active'): ?>
                                                                                      <div class="flex text-green-500">
                                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                      </svg>
                                                                                    <?php elseif ($req->status === 'Inactive'): ?>
                                                                                      <div class="flex text-yellow-500">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                                                          <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                                                                                          <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                                                                        </svg>
                                                                                    <?php endif; ?>
                                                                                    <button type="button" wire:click="updateStatreq({{$req->id}})"><span>{{$req->status}}</span></button>
                                                                                  </div>
                                                                              </td>
                                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                  <div class="flex space-x-4">
                                                                                      <button wire:click="deleteCategoryreq({{$req->id}})" class="text-red-500 hover:text-red-600">
                                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                      </svg>
                                                                                      </button>
                                                                                  </div>
                                                                              </td>
                                                                          </tr>
                                                                        <?php endforeach; ?>
                                                                      </tbody>
                                                                  </table>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          </div>
                                    </div>
                                    </div>
                                    <div x-data="{searchsite:false}">
                                      <p class="text-3xl text-green-800 font-bold m-10">SEO Maintenance</p>
                                      <?php foreach ($searchengines as $seo): ?>
                                        <div class="flex justify-center">
                                        <div class="container mx-10">
                                        <p class="text-xs text-gray-600">{{$seo->url}}</p>
                                        <p class="text-2xl text-blue-800">{{$seo->title}}</p>
                                        <p class="text-sm text-gray-800">{{$seo->description}}</p>
                                        <p class="text-xs text-blue-800">{{$seo->site_name}}</p>
                                        <p class="text-xs text-blue-800">{{$seo->keywords}}</p>
                                        <p class="text-xs text-blue-800">{{$seo->countryId}}</p>
                                      </div>
                                      </div>
                                      <?php endforeach; ?>
                                      <button type="button" @click="searchsite=!searchsite" class="active:bg-yellow-700 bg-yellow-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-yellow-700 focus:outline-none focus:shadow-outline-yellow font-medium hover:bg-yellow-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full" name="button">Update</button>
                                      <div x-show="searchsite" style="display:none">
                                        <form wire:submit.prevent="submitsearching()" class="p-3 relative rounded-lg shadow-md w-full">
                                          <h1 class="text-3xl sm:text-6xl text-green-400 text-center font-black">Update Seo </h1>
                                          <div class="flex flex-col">
                                          @error('title') <span class="error text-red-800">*{{ $message }}</span>@enderror
                                          @error('site_name') <span class="error text-red-800">*{{ $message }}</span>@enderror
                                          @error('url') <span class="error text-red-800">*{{ $message }}</span>@enderror
                                          @error('description') <span class="error text-red-800">*{{ $message }}</span>@enderror
                                          @error('keywords') <span class="error text-red-800">*{{ $message }}</span>@enderror
                                        </div>
                                          <input type="text" wire:model.defer="title" placeholder="Header" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                          <textarea class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" wire:model.defer="description" rows="8" cols="80" placeholder="Description Here..."></textarea>
                                          <input type="text" wire:model.defer="site_name" placeholder="site_name" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                          <input type="text" wire:model.defer="url" placeholder="Url" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                          <textarea class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" wire:model.defer="keywords" rows="8" cols="80" placeholder="Keywords"></textarea>
                                          <button type="submit" class="active:bg-green-700 bg-green-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-green-700 focus:outline-none focus:shadow-outline-green font-medium hover:bg-green-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">Submit</button>
                                        </form>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
    </div>
</div>

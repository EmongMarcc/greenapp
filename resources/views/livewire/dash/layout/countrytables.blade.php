<div class="col-span-12 mt-8">
    <div class="flex items-center h-10 intro-y">
        <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
    </div>
    <div x-data="{ popbutton: false }" class="grid grid-cols-12 gap-6 mt-5">
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <div class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                        <span class="flex items-center">30%</span>
                    </div>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                        <div class="mt-1 text-base text-gray-600">Item Sales</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <div class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                        <span class="flex items-center">30%</span>
                    </div>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                        <div class="mt-1 text-base text-gray-600">Item Sales</div>
                    </div>
                </div>
            </div>
        </a>
        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    <div class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                        <span class="flex items-center">30%</span>
                    </div>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                        <div class="mt-1 text-base text-gray-600">Item Sales</div>
                    </div>
                </div>
            </div>
        </a>
        <button @click="popbutton = !popbutton" class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
            <div class="p-5">
                <div class="flex justify-between">
                    <svg  class="h-7 w-7 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256.064 0h-.128C114.784 0 0 114.816 0 256c0 56 18.048 107.904 48.736 150.048l-31.904 95.104 98.4-31.456C155.712 496.512 204 512 256.064 512 397.216 512 512 397.152 512 256S397.216 0 256.064 0z" fill="#4caf50"></path><path d="M405.024 361.504c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.616-127.456-112.576-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016.16 8.576.288 7.52.32 11.296.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744-3.776 4.352-7.36 7.68-11.136 12.352-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#fafafa"></path></svg>
                </div>
                <div class="ml-2 w-full flex-1">
                    <div>
                        <div class="mt-3 text-3xl font-bold leading-8">Whatsapp</div>

                        <div class="mt-1 text-base text-gray-600">Settings</div>
                    </div>
                </div>
            </div>
        </button>
        <div x-show="popbutton" @click.away="popbutton = false" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-x-52"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-52" class="fixed h-full left-0 top-0 w-full z-50 ">
            <div class="table h-full w-full">
              <div class="table-cell align-middle">
                <div class="flex justify-center">
                <div @click.away="popbutton = false" class="bg-gray-900 shadow-md rounded-xl w-3/4">
                  <form wire:submit.prevent="whatsappsubmit()" class="p-3 relative rounded-lg shadow-md w-full">
                    <p class="text-xl sm:text-3xl text-green-400 text-center font-black">Add Whatsapp Agent</p>
                    <div class="">
                      <input placeholder="Job Position" wire:model.defer="wajob" class="form-input text-wrap px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" type="text">
                      <input placeholder="Name" wire:model.defer="waname" class="form-input text-wrap px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" type="text">
                      <input placeholder="Whatsapp Number" wire:model.defer="wanumber" class="form-input text-wrap px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" type="text">
                    </div>
                  <button type="submit" class="active:bg-green-700 bg-green-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-green-700 focus:outline-none focus:shadow-outline-green font-medium hover:bg-green-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">Submit</button>
                  </form>
                  <div class="overflow-scroll h-72 grid gap-2 grid-cols-1 lg:grid-cols-1">
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
                                                                                          <span class="mr-2">AGENT NAME</span>
                                                                                      </div>
                                                                                  </th>
                                                                                  <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                                      <div class="flex cursor-pointer">
                                                                                          <span class="mr-2">NUMBER</span>
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
                                                                            <?php foreach ($teamwhatsapps as $team): ?>
                                                                              <tr>
                                                                                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                      <p>{{$team->name}}</p>
                                                                                  </td>
                                                                                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                      <p>{{$team->number}}</p>
                                                                                  </td>
                                                                                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                      <?php if ($team->status === 'Online'): ?>

                                                                                      <div class="flex text-green-500">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                        </svg>
                                                                                        <button type="button" wire:click="updateStatsagent({{$team->id}})"><span>{{$team->status}}</span></button>
                                                                                    </div>
                                                                                        <?php else: ?>
                                                                                          <div class="flex text-yellow-500">
                                                                                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                                                                <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path>
                                                                                                <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                                                              </svg>
                                                                                            <button type="button" wire:click="updateStatsagent({{$team->id}})"><span>{{$team->status}}</span></button>
                                                                                        </div>
                                                                                      <?php endif; ?>
                                                                                  </td>
                                                                                  <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                      <div class="flex space-x-4">
                                                                                          <button wire:click="deleteWhatsapp({{$team->id}})" class="text-red-500 hover:text-red-600">
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
            </div>
        </div>
    </div>

</div>

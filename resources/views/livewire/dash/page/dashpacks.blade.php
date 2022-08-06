<div>
    <div class="w-full flex h-full min-h-screen bg-gray-800" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <livewire:dash.page.sidetoggle />
      <div class="w-full">
            <div class="flex flex-col flex-1 w-full overflow-y-auto">
                <main class="">
                    <div class="bg-gray-100 rounded-3xl border-4 border-green-400 flex mb-4 mx-4 pb-10">
                        <div class="rounded-3xl w-full">
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
                                                                      <span class="mr-2">TOUR PACKAGES</span>
                                                                  </div>
                                                              </th>
                                                              <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                  <div class="flex cursor-pointer">
                                                                      <span class="mr-2">COUNTRY</span>
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
                                                          <?php foreach ($tourpackages as $tour): ?>
                                                          <tr>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                  <p>{{$tour->tourpack}}</p>
                                                              </td>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                  <p>{{$tour->countryId}}</p>
                                                              </td>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                  <p>{{$tour->status}}</p>
                                                              </td>
                                                              <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                  <div class="flex space-x-4">
                                                                      <button wire:click="deleteTours('{{$tour->tourpack}}')" class="text-red-500 hover:text-red-600">
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
                          <form wire:submit.prevent="submit()" class="p-3 relative rounded-lg shadow-md w-full">
                            <h1 class="text-3xl sm:text-6xl text-green-400 text-center font-black">News </h1>
                            <div class="flex flex-col">
                            @error('title') <span class="error text-red-800">*{{ $message }}</span>@enderror
                            @error('tour_img') <span class="error text-red-800">*{{ $message }}</span>@enderror
                            @error('keywords') <span class="error text-red-800">*{{ $message }}</span>@enderror
                            @error('description') <span class="error text-red-800">*{{ $message }}</span>@enderror
                            @error('tourpack') <span class="error text-red-800">*{{ $message }}</span>@enderror
                            @error('countryId') <span class="error text-red-800">*{{ $message }}</span>@enderror
                          </div>
                            <input type="text" wire:model.defer="title" placeholder="Header" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">

                            <textarea class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" wire:model.defer="description" rows="8" cols="80" placeholder="Description Here..."></textarea>

                            <input type="text" wire:model.defer="tourpack" placeholder="tourpack" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                            <input type="text" wire:model.defer="tour_img" placeholder="tour_img" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                            <input type="text" wire:model.defer="status" placeholder="tour_avif" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                            <input type="date" wire:model.defer="datestart" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                            <input type="date" wire:model.defer="dateend" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                            <textarea class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" wire:model.defer="keywords" rows="8" cols="80" placeholder="Keywords"></textarea>
                                <select wire:model.defer="countryId" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" name="">
                                  <option>Select Country</option>
                                  <?php foreach ($countryblogs as $blogs): ?>
                                    <option  value="{{$blogs->category}}">{{$blogs->title}}</option>
                                  <?php endforeach; ?>
                                </select>
                                <select wire:model.defer="whatsappagent" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
                                  <option>Travel Agents</option>
                                  <?php foreach ($teamwhatsapps as $teamw): ?>
                                    <option  value="{{$teamw->id}}">{{$teamw->name}}</option>
                                  <?php endforeach; ?>
                                </select>

                            <button type="submit" class="active:bg-green-700 bg-green-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-green-700 focus:outline-none focus:shadow-outline-green font-medium hover:bg-green-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">Submit</button>
                          </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

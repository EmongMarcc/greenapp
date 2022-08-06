<div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
<livewire:dash.layout.countrytables />
  <div x-data="{ open: @entangle('alertStatus') }" class="fixed flex right-0 top-0 w-full z-50">
    <?php if ($statusSuccess): ?>
      <div x-show="open" @click.away="open = false" class="bg-green-500 flex mb-4 rounded">
          <div class="w-16">
              <div class="p-4">
                  <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M468.907 214.604c-11.423 0-20.682 9.26-20.682 20.682v20.831c-.031 54.338-21.221 105.412-59.666 143.812-38.417 38.372-89.467 59.5-143.761 59.5h-.12C132.506 459.365 41.3 368.056 41.364 255.883c.031-54.337 21.221-105.411 59.667-143.813 38.417-38.372 89.468-59.5 143.761-59.5h.12c28.672.016 56.49 5.942 82.68 17.611 10.436 4.65 22.659-.041 27.309-10.474 4.648-10.433-.04-22.659-10.474-27.309-31.516-14.043-64.989-21.173-99.492-21.192h-.144c-65.329 0-126.767 25.428-172.993 71.6C25.536 129.014.038 190.473 0 255.861c-.037 65.386 25.389 126.874 71.599 173.136 46.21 46.262 107.668 71.76 173.055 71.798h.144c65.329 0 126.767-25.427 172.993-71.6 46.262-46.209 71.76-107.668 71.798-173.066v-20.842c0-11.423-9.259-20.683-20.682-20.683z"></path><path d="M505.942 39.803c-8.077-8.076-21.172-8.076-29.249 0L244.794 271.701l-52.609-52.609c-8.076-8.077-21.172-8.077-29.248 0-8.077 8.077-8.077 21.172 0 29.249l67.234 67.234a20.616 20.616 0 0 0 14.625 6.058 20.618 20.618 0 0 0 14.625-6.058L505.942 69.052c8.077-8.077 8.077-21.172 0-29.249z"></path></svg>
              </div>
          </div>
          <div class="items-center p-4 text-white w-auto">
              <span class="text-lg font-bold pb-4">
                  Heads Up!
              </span>
              <p class="leading-tight">
                  {{$statusSuccess}}
              </p>
          </div>
      </div>
    <?php endif; ?>
    <?php if ($statusError): ?>
      <div x-show="open" @click.away="open=false" class="bg-red-500 flex mb-4 rounded">
        <div class="w-16">
            <div class="p-4">
              <svg class="h-8 w-8 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M503.191 381.957c-.055-.096-.111-.19-.168-.286L312.267 63.218l-.059-.098c-9.104-15.01-23.51-25.577-40.561-29.752-17.053-4.178-34.709-1.461-49.72 7.644a66 66 0 0 0-22.108 22.109l-.058.097L9.004 381.669c-.057.096-.113.191-.168.287-8.779 15.203-11.112 32.915-6.569 49.872 4.543 16.958 15.416 31.131 30.62 39.91a65.88 65.88 0 0 0 32.143 8.804l.228.001h381.513l.227.001c36.237-.399 65.395-30.205 64.997-66.444a65.86 65.86 0 0 0-8.804-32.143zm-56.552 57.224H65.389a24.397 24.397 0 0 1-11.82-3.263c-5.635-3.253-9.665-8.507-11.349-14.792a24.196 24.196 0 0 1 2.365-18.364L235.211 84.53a24.453 24.453 0 0 1 8.169-8.154c5.564-3.374 12.11-4.381 18.429-2.833 6.305 1.544 11.633 5.444 15.009 10.986L467.44 402.76a24.402 24.402 0 0 1 3.194 11.793c.149 13.401-10.608 24.428-23.995 24.628z"></path><path d="M256.013 168.924c-11.422 0-20.681 9.26-20.681 20.681v90.085c0 11.423 9.26 20.681 20.681 20.681 11.423 0 20.681-9.259 20.681-20.681v-90.085c.001-11.421-9.258-20.681-20.681-20.681zM270.635 355.151c-3.843-3.851-9.173-6.057-14.624-6.057a20.831 20.831 0 0 0-14.624 6.057c-3.842 3.851-6.057 9.182-6.057 14.624 0 5.452 2.215 10.774 6.057 14.624a20.822 20.822 0 0 0 14.624 6.057c5.45 0 10.772-2.206 14.624-6.057a20.806 20.806 0 0 0 6.057-14.624 20.83 20.83 0 0 0-6.057-14.624z"></path></svg>
            </div>
        </div>
        <div class="items-center p-4 text-white w-auto">
            <span class="text-lg font-bold pb-4">
                Heads Up!
            </span>
            <p class="leading-tight">
                {{$statusError}}
            </p>
        </div>
      </div>
    <?php endif; ?>
</div>
<div class="col-span-12 mt-5">
  <form wire:submit.prevent="submit()" class="p-3 relative rounded-lg shadow-md w-full">
    <h1 class="text-3xl sm:text-6xl text-green-400 text-center font-black">Create Country Travel Page</h1>
    <div class="flex flex-col">
    @error('title') <span class="error text-red-800">*{{ $message }}</span>@enderror
    @error('body') <span class="error text-red-800">*{{ $message }}</span>@enderror
    @error('p_date') <span class="error text-red-800">*{{ $message }}</span>@enderror
    @error('category') <span class="error text-red-800">*{{ $message }}</span>@enderror
    @error('flags') <span class="error text-red-800">*{{ $message }}</span>@enderror
    @error('regions') <span class="error text-red-800">*{{ $message }}</span>@enderror
  </div>
    <input type="text" wire:model.defer="title" placeholder="Country Name" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
    <textarea class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" wire:model.defer="body" rows="8" cols="80" placeholder="Description Here..."></textarea>
    <input type="date" wire:model.defer="p_date" placeholder="p_date" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
    <input type="text" wire:model.defer="category" placeholder="PageName" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
    <input type="text" wire:model.defer="flags" placeholder="Flag Url (Search @ flagpedia.net)" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
    <input type="text" wire:model.defer="price" placeholder="Price" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
    <select wire:model.defer="regions" class="form-input text-wrap px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
      <option value="" selected>Select Group</option>
      <option value="America">America Travel Voucher</option>
      <option value="Asia">Asia Travel Voucher</option>
      <option value="CIS">CIS Travel Voucher</option>
      <option value="Europe">Europe Travel Voucher</option>
      <option value="MiddleEastAfrica">Middle East & Africa Travel Voucher</option>
      <option value="Oceania">Oceania Travel Voucher</option>
    </select>
    <label for="coverimg">Cover Image <span class="text-xs text-red-500 font-light">*Search Free Image @ Unsplash.com</span></label>
    <input id="coverimg" type="file" wire:model.defer="coverimage" placeholder="coverimage" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10">
    <!-- <input id="coverimg" type="text" wire:model.defer="coverimage" placeholder="coverimage" class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10"> -->
    <button type="submit" class="active:bg-green-700 bg-green-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-green-700 focus:outline-none focus:shadow-outline-green font-medium hover:bg-green-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">Submit</button>
  </form>

</div>
<div class="col-span-12 mt-5">
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
                                      <?php foreach ($countryblogs as $blog): ?>
                                      <tr>
                                          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                              <p>{{$blog->title}}</p>
                                          </td>
                                          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                              <p>{{$blog->p_date}}</p>
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
                                                <button type="button" wire:click="updateStatus({{$blog->id}})"><span>{{$blog->status}}</span></button>
                                              </div>
                                          </td>
                                          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                              <div class="flex space-x-4">
                                                  <button wire:click="editCountry({{$blog->id}})" class="text-blue-500 hover:text-blue-600">
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                  </svg>
                                                </button>
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
                              <?php if ($readyToLoad): ?>
                                {{ $countryblogs->links() }}
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>

</div>
</div>

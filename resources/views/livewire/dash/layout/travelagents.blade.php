<div>
    <div wire:init="loadPosts" x-data='{travelAgents: false}'>
      <button @click="travelAgents = !travelAgents" class="transform w-full hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
          <div class="p-5">
              <div class="flex justify-between">
                  <svg class="h-7 w-7 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#e54728" d="M123.869 236.862h264.655v35.131H123.869z"></path><path fill="#dba983" d="M114.637 148.302h283.525v86.57H114.637z"></path><g fill="#2ba5f7"><path d="M149.976 326.482l-.143.155h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512h104.618l100.21-44.232 6.076-88.071c-36.572 0-69.69-14.831-93.658-38.8a133.464 133.464 0 01-12.485-14.415z"></path><path d="M394.284 326.637h-32.129l-.024-.012c-24.147 32.224-62.649 53.072-106.012 53.072l24.898 64.841 1.787 42.29L362.155 512h104.63V399.138c0-40.039-32.462-72.501-72.501-72.501z"></path></g><path d="M149.833 327.286v-.649h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512H86.91V399.138c0-36.79 27.405-67.162 62.923-71.852z" fill="#2197d8"></path><g fill="#f7b239"><path d="M256.119 379.697V512H149.833V335.893l56.443 100.58zM362.155 336.322V512H256.119V379.697l49.843 56.776z"></path></g><path fill="#2ba5f7" d="M247.19 369.487h17.869V512H247.19z"></path><path d="M388.53 250.264l-.012 3.479c-1.322 27.28-10.888 52.381-26.268 72.882-20.156 26.899-50.32 45.876-84.962 51.404a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414 131.888 131.888 0 01-20.395-39.979 132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544 14.009-6.052 24.469-10.459 26.994-10.471 1.156 0 9.363 3.61 21.157 8.768 30.687 13.438 85.76 37.466 104.439 36.048 4.015-.31 6.349-1.787 6.397-4.801l.347-.001z" fill="#ffd3ae"></path><path d="M277.288 378.029a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414c-15.963-21.336-25.624-47.651-26.256-76.206l.441-.012c.369 22.42 18.644 40.42 41.075 40.42h20.704c10.245 28.257 29.174 52.357 53.56 69.058.298.214.631.429.929.643a141.544 141.544 0 0036.74 17.643z" fill="#dba983"></path><path fill="#f7b239" d="M298.697 83.89l-21.289 20.752 5.028 29.305-26.316-13.83-26.315 13.83 5.027-29.305-21.3-20.752 29.425-4.265 13.163-26.661 13.152 26.661z"></path><path d="M172.218 177.465L256 153.866l84.022 23.599c-13.14 14.581-30.044 25.72-49.176 31.891-10.936 3.538-22.61 5.444-34.726 5.444-12.115 0-23.79-1.906-34.726-5.444-19.143-6.171-36.036-17.31-49.176-31.891z" fill="#d12f19"></path><path d="M388.531 250.264l.143-30.818a42.034 42.034 0 00-1.215-10.245c-4.503-18.215-20.967-31.736-40.575-31.736h-181.29c-19.62 0-36.084 13.521-40.575 31.736a41.138 41.138 0 00-1.227 10.054v52.738c-25.124 0-29.103-39.586-29.103-72.513 0-15.284.858-29.139.858-36.93C95.548 73.562 167.12.238 256.12 0c44.494.119 84.64 18.512 113.66 47.997 29.02 29.484 46.913 70.059 46.913 114.553 0 24.564 8.53 109.443-28.257 109.443l.083-18.25.012-3.479z" fill="#f95428"></path><path d="M156.303 162.55c0-78.596 55.834-144.958 130.193-159.555A159.705 159.705 0 00256.12 0c-89 .238-160.573 73.562-160.573 162.55 0 7.791-.858 21.646-.858 36.93 0 32.927 3.979 72.513 29.103 72.513v-52.738c0-3.467.417-6.838 1.227-10.054 3.724-15.102 15.681-26.969 30.841-30.586.219-6.523.443-12.087.443-16.065z" fill="#e54728"></path><path d="M381.918 227.165l-.131 27.9-.012 2.919h-.345c-.357 22.432-18.643 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-11.27 0-21.479-4.539-28.9-11.901a132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544a113.731 113.731 0 0020.168 1.799c9.661 0 19.037-1.215 27.983-3.502a106.785 106.785 0 006.743-1.942h95.958l.655-.155a42.083 42.083 0 011.214 10.245z" fill="#dba983"></path><path d="M124.281 250.264l-.441.012a84.376 84.376 0 01-.048-3.026V219.255c0-3.467.417-6.838 1.227-10.054l.643.155H221.395c10.936 3.538 22.61 5.444 34.726 5.444 12.115 0 23.79-1.906 34.726-5.444h95.958l.655-.155a42.034 42.034 0 011.215 10.245l-.143 30.818h-.345c-.357 22.432-18.644 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-22.433 0-40.707-18-41.077-40.42z" fill="#a2d6f4"></path><g fill="#999"><path d="M203.227 261.545c-4.934 0-8.935-4-8.935-8.935v-14.319a8.935 8.935 0 0117.87 0v14.319c0 4.935-4 8.935-8.935 8.935zM309.238 261.545c-4.935 0-8.935-4-8.935-8.935v-14.319c0-4.934 3.999-8.935 8.935-8.935s8.935 4 8.935 8.935v14.319a8.934 8.934 0 01-8.935 8.935z"></path></g><path d="M256.233 343.491c-10.436 0-20.248-4.068-27.628-11.457a8.935 8.935 0 0112.642-12.629 21.043 21.043 0 0014.986 6.216c5.662 0 10.99-2.209 15.001-6.22a8.935 8.935 0 0112.634 12.636c-7.386 7.386-17.2 11.454-27.635 11.454z" fill="#d12f19"></path></svg>
              </div>
              <div class="ml-2 w-full flex-1">
                  <div>
                      <div class="mt-3 text-3xl font-bold leading-8">Add agent on {{$countryblogs[0]->title}}</div>
                      <div class="mt-1 text-base text-gray-600">Settings</div>
                  </div>
              </div>
          </div>
      </button>
      <div x-show="travelAgents" x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0 transform translate-x-52"
      x-transition:enter-end="opacity-100 transform translate-x-0"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100 transform translate-x-0"
      x-transition:leave-end="opacity-0 transform translate-x-52" class="fixed h-full left-0 top-0 w-full z-50 ">
          <div class="table h-full w-full">
            <div class="table-cell align-middle">
              <div class="flex justify-center">
              <div @click.away="travelAgents = false" class="bg-gray-900 shadow-md rounded-xl w-3/4">
                <form wire:submit.prevent="agentsubmit()" class="p-3 relative rounded-lg shadow-md w-full">
                  <p class="text-xl sm:text-3xl text-green-400 text-center font-black">Add Travel Agent</p>
                  <div>
                    <select class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-black w-full bg-white hover:text-gray-700 focus:outline-none transition" wire:model.debounce.500ms="travelagents">
                        <option>Select Agent</option>
                      <?php foreach ($teamwhatsapps as $t_agent): ?>
                        <option value="{{$t_agent->id}}">{{$t_agent->name}}</option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <button type="submit" class="active:bg-green-700 bg-green-500 border border-transparent cursor-pointer duration-150 ease-in-out focus:border-green-700 focus:outline-none focus:shadow-outline-green font-medium hover:bg-green-600 inline-flex justify-center leading-5 my-1.5 px-4 py-2 rounded-md text-sm text-white transition w-full">Submit</button>
                </form>
                <div class="h-72 overflow-scroll grid gap-2 grid-cols-1 lg:grid-cols-1">
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
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                                          <?php foreach ($teamwhatsapps as $team): ?>
                                                                            <?php foreach ($team->touristagents as $teamtuor): ?>
                                                                              <?php if ($teamtuor->country_id === $category_id): ?>
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
                                                                                        <span>{{$team->status}}</span>
                                                                                  </div>
                                                                                    <?php else: ?>
                                                                                      <div class="flex text-yellow-500">
                                                                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                                                            <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"></path>
                                                                                            <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"></path>
                                                                                          </svg>
                                                                                          <span>{{$team->status}}</span>
                                                                                    </div>
                                                                                  <?php endif; ?>
                                                                                </td>
                                                                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                                    <div class="flex space-x-4">
                                                                                        <button wire:click="deleteAgent({{$teamtuor->id}})" class="text-red-500 hover:text-red-600">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                                        </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                          <?php endif; ?>
                                                                        <?php endforeach; ?>
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

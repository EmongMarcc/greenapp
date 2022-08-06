<div class="bg-white max-h-80 overflow-scroll p-4 rounded-lg shadow-lg">
  <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
      <div class="bg-white p-4 shadow-lg rounded-lg">
          <h1 class="font-bold text-base">Search Engine Optimization</h1>
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
                                                  <span class="mr-2">Title</span>
                                              </div>
                                          </th>
                                          <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">Site Name</span>
                                              </div>
                                          </th>
                                          <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">Description</span>
                                              </div>
                                          </th>
                                          <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                              <div class="flex cursor-pointer">
                                                  <span class="mr-2">COUNTRY NAME</span>
                                              </div>
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody wire:init="loadPosts" class="bg-white divide-y divide-gray-200">
                                      <?php foreach ($searchengines as $seo): ?>
                                      <tr>
                                          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                              <p>{{$seo->title}}</p>
                                          </td>
                                          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                              <p>{{$seo->title}}</p>
                                          </td>
                                          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                              <p>{{$seo->title}}</p>
                                          </td>
                                          <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                              <p>{{$seo->title}}</p>
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

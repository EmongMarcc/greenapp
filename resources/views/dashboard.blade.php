<x-app-layout>
    <div class="w-full flex h-full bg-gray-800" :class="{ 'overflow-hidden': isSideMenuOpen }">
            <livewire:dash.page.sidetoggle />
            <div class="w-full">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css">
                    <div class="flex flex-col flex-1 w-full overflow-y-auto">
                        <main class="">
                            <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-400">
                                <div class="grid grid-cols-12 gap-6">
                                      <livewire:dash.page.posting />
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
    </div>
</x-app-layout>

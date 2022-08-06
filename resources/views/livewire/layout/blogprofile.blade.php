<div class="bg-text2">
<div x-data="{Cities:true}" class="grid grid-cols-12">
  <div class="col-span-12 block md:hidden">
    <div class="bg-text flex m-1 relative rounded">
      <button @click="Cities=!Cities" type="button" class="text-center cursor-pointer text-white w-full">Cities</button>
  </div>
  </div>
  <div x-show="Cities" class="col-span-12 md:col-span-2">
    <div>
      <div>
        <div class="w-full h-full ">
          <p><span class="text-sm font-black text-white">Locations</span></p>
        </div>
      <div>
  <div>
    <div class="flex flex-col">
    <?php foreach(json_decode($responseSearch)->suggestions[0]->entities ?? [] as $entity): ?>
      <div class="bg-text flex m-1 relative rounded">
        <label for="{{$entity->destinationId}}" class="text-center cursor-pointer text-white w-full">{{$entity->name}}</label>
      <input wire:model="destinationId" wire:change="dataFetchHotel" type="radio" id="{{$entity->destinationId}}" class="opacity-0" value="{{$entity->destinationId}}">
    </div>
    <?php endforeach; ?>
  </div>
  </div>
  </div>
    </div>
  </div>
  </div>
  <div class="col-span-12 md:col-span-10 overflow-hidden">

    <div x-data="{hotel:false,remarks:false}" class="mx-2 bg-text w-full">
      <div @click.away="remarks=false" class="flex flex-wrap -mx-1 overflow-hidden">

        <div class="my-1 px-1 w-1/2 sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="bg-text flex justify-center relative text-white w-full">
            <svg  class="h-full mx-2 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.104 388.104"><path d="M363.652 159.652c-12.8-8-26.4-10.4-31.2-11.2l-24-2.4-68.8-105.6c-1.6-17.6-16-31.2-34.4-31.2-17.6 0-32 13.6-34.4 31.2l-68.8 83.2-22.4-2.4c-28.8-3.2-64 9.6-68.8 55.2l-10.4 105.6c-3.2 32 11.2 49.6 24 57.6s26.4 10.4 31.2 11.2l252 27.2c2.4 0 5.6.8 8 .8 26.4 0 56-14.4 60.8-56l11.2-105.6c3.2-32-11.2-48.8-24-57.6zm-158.4-134.4c10.4 0 18.4 8 18.4 18.4 0 10.4-8 18.4-18.4 18.4-10.4 0-18.4-8-18.4-18.4 0-10.4 8.8-18.4 18.4-18.4zm-29.6 35.2c5.6 10.4 16.8 17.6 29.6 17.6 12 0 22.4-6.4 28.8-16l53.6 81.6-165.6-17.6 53.6-65.6zm196 154.4l-11.2 105.6c-4.8 42.4-40 42.4-51.2 40.8l-252-27.2c-4-.8-14.4-2.4-24-8.8-13.6-7.2-19.2-21.6-16.8-40.8l11.2-106.4c4-36 30.4-41.6 44.8-41.6h6.4l252 27.2c4 .8 14.4 2.4 24 8.8 12.8 8.8 18.4 23.2 16.8 42.4z"/><path d="M97.252 202.052c-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-4.8 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-2.4 19.2-29.6-3.2 2.4-19.2c0-3.2 0-4.8-1.6-6.4-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-5.6 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-5.6 53.6c0 2.4 0 4.8.8 6.4 2.4 1.6 4 2.4 5.6 2.4 2.4 0 4 0 5.6-1.6 1.6-1.6 2.4-3.2 2.4-6.4l2.4-23.2 29.6 3.2-2.4 23.2c0 2.4 0 4.8.8 6.4.8 1.6 2.4 2.4 4.8 2.4s4 0 5.6-1.6c1.6-1.6 2.4-3.2 2.4-6.4l5.6-53.6c0-3.2 0-4.8-1.6-6.4zM174.052 226.052c-2.4-5.6-5.6-10.4-10.4-13.6s-10.4-5.6-17.6-6.4c-5.6-.8-9.6 0-14.4.8-4 .8-8 3.2-11.2 5.6-3.2 2.4-5.6 6.4-8 10.4-2.4 4-3.2 8.8-4 14.4-.8 4.8 0 9.6.8 14.4.8 4.8 2.4 8.8 4.8 12.8 2.4 3.2 5.6 6.4 9.6 8.8 4 2.4 8.8 3.2 14.4 4 5.6.8 10.4 0 14.4-.8 4-1.6 8-3.2 11.2-6.4 3.2-3.2 5.6-6.4 8-10.4 2.4-4 3.2-8.8 4-14.4.8-7.2 0-13.6-1.6-19.2zm-12 16.8c-.8 5.6-1.6 9.6-4 13.6-2.4 3.2-4.8 5.6-8 7.2-3.2 1.6-6.4 1.6-10.4 1.6-2.4 0-5.6-.8-7.2-2.4-2.4-1.6-4-3.2-5.6-5.6-1.6-2.4-2.4-4.8-3.2-8-1.6-2.4-1.6-6.4-.8-10.4s1.6-7.2 2.4-10.4c1.6-3.2 3.2-5.6 4.8-7.2 1.6-1.6 4-3.2 6.4-4 2.4-.8 4.8-.8 8-.8 4 .8 7.2 1.6 10.4 4 2.4 2.4 4.8 5.6 6.4 8.8 1.6 4 1.6 8 .8 13.6zM237.252 218.052c-.8-.8-2.4-1.6-4.8-2.4l-44-4.8c-2.4 0-4 0-5.6.8-1.6.8-2.4 2.4-2.4 4s0 3.2 1.6 4c0 2.4 1.6 3.2 4 3.2l15.2 1.6-4.8 49.6c0 3.2 0 4.8 1.6 6.4.8 1.6 2.4 2.4 4.8 2.4s4 0 4.8-1.6c.8-1.6 2.4-3.2 2.4-6.4l5.6-49.6 15.2 1.6c2.4 0 4 0 5.6-.8 1.6-.8 2.4-2.4 2.4-4s0-3.2-1.6-4zM290.852 233.252c2.4 0 4 0 4.8-.8s1.6-2.4 2.4-4c0-1.6 0-3.2-.8-4s-2.4-1.6-4.8-1.6l-36.8-4h-4.8c-.8 0-2.4 1.6-3.2 2.4-.8.8-.8 2.4-1.6 4.8l-5.6 51.2c0 3.2 0 5.6 1.6 6.4.8 2.4 3.2 3.2 5.6 4l37.6 4c2.4 0 4 0 4.8-.8 1.6-.8 1.6-2.4 2.4-4 0-1.6 0-3.2-1.6-4-.8-.8-2.4-1.6-4.8-2.4l-32-3.2 2.4-19.2 28.8 3.2c2.4 0 4 0 4.8-.8s1.6-2.4 1.6-4 0-3.2-.8-4-2.4-1.6-4.8-1.6l-28-4 1.6-16.8 31.2 3.2zM351.652 289.252c-.8-1.6-2.4-1.6-4.8-2.4l-28-3.2 5.6-49.6c0-3.2 0-4.8-1.6-6.4-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-4.8 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-5.6 52.8c0 3.2 0 5.6 1.6 6.4-.8.8 1.6 1.6 4.8 1.6l33.6 4c2.4 0 4 0 5.6-.8 1.6-.8 2.4-2.4 2.4-4s0-3.2-1.6-4z"/></svg>
            <p @click="remarks!==1 ? remarks=1 : remarks=false" class="text-lg font-black text-white cursor-pointer">Hotel</p>
            <template x-if="remarks==1">
              <code x-show="remarks" x-transition:enter="transition ease duration-300"
              x-transition:enter-start="opacity-0 h-0"
              x-transition:enter-end="opacity-100 h-full"
              x-transition:leave="transition ease duration-300"
              x-transition:leave-start="opacity-100 h-full"
              x-transition:leave-end="opacity-0 h-0" style="display:none" class="absolute bg-theme font-light p-2 rounded text-red-600 text-xs z-50">*Beta mode</code>
            </template>
          </div>
        </div>
        <div class="my-1 px-1 w-1/2 sm:w-1/2 md:w-1/2 lg:w-1/3">
          <div class="bg-text flex justify-center relative text-white w-full">
            <svg  class="h-full mx-2 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.104 388.104"><path d="M363.652 159.652c-12.8-8-26.4-10.4-31.2-11.2l-24-2.4-68.8-105.6c-1.6-17.6-16-31.2-34.4-31.2-17.6 0-32 13.6-34.4 31.2l-68.8 83.2-22.4-2.4c-28.8-3.2-64 9.6-68.8 55.2l-10.4 105.6c-3.2 32 11.2 49.6 24 57.6s26.4 10.4 31.2 11.2l252 27.2c2.4 0 5.6.8 8 .8 26.4 0 56-14.4 60.8-56l11.2-105.6c3.2-32-11.2-48.8-24-57.6zm-158.4-134.4c10.4 0 18.4 8 18.4 18.4 0 10.4-8 18.4-18.4 18.4-10.4 0-18.4-8-18.4-18.4 0-10.4 8.8-18.4 18.4-18.4zm-29.6 35.2c5.6 10.4 16.8 17.6 29.6 17.6 12 0 22.4-6.4 28.8-16l53.6 81.6-165.6-17.6 53.6-65.6zm196 154.4l-11.2 105.6c-4.8 42.4-40 42.4-51.2 40.8l-252-27.2c-4-.8-14.4-2.4-24-8.8-13.6-7.2-19.2-21.6-16.8-40.8l11.2-106.4c4-36 30.4-41.6 44.8-41.6h6.4l252 27.2c4 .8 14.4 2.4 24 8.8 12.8 8.8 18.4 23.2 16.8 42.4z"/><path d="M97.252 202.052c-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-4.8 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-2.4 19.2-29.6-3.2 2.4-19.2c0-3.2 0-4.8-1.6-6.4-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-5.6 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-5.6 53.6c0 2.4 0 4.8.8 6.4 2.4 1.6 4 2.4 5.6 2.4 2.4 0 4 0 5.6-1.6 1.6-1.6 2.4-3.2 2.4-6.4l2.4-23.2 29.6 3.2-2.4 23.2c0 2.4 0 4.8.8 6.4.8 1.6 2.4 2.4 4.8 2.4s4 0 5.6-1.6c1.6-1.6 2.4-3.2 2.4-6.4l5.6-53.6c0-3.2 0-4.8-1.6-6.4zM174.052 226.052c-2.4-5.6-5.6-10.4-10.4-13.6s-10.4-5.6-17.6-6.4c-5.6-.8-9.6 0-14.4.8-4 .8-8 3.2-11.2 5.6-3.2 2.4-5.6 6.4-8 10.4-2.4 4-3.2 8.8-4 14.4-.8 4.8 0 9.6.8 14.4.8 4.8 2.4 8.8 4.8 12.8 2.4 3.2 5.6 6.4 9.6 8.8 4 2.4 8.8 3.2 14.4 4 5.6.8 10.4 0 14.4-.8 4-1.6 8-3.2 11.2-6.4 3.2-3.2 5.6-6.4 8-10.4 2.4-4 3.2-8.8 4-14.4.8-7.2 0-13.6-1.6-19.2zm-12 16.8c-.8 5.6-1.6 9.6-4 13.6-2.4 3.2-4.8 5.6-8 7.2-3.2 1.6-6.4 1.6-10.4 1.6-2.4 0-5.6-.8-7.2-2.4-2.4-1.6-4-3.2-5.6-5.6-1.6-2.4-2.4-4.8-3.2-8-1.6-2.4-1.6-6.4-.8-10.4s1.6-7.2 2.4-10.4c1.6-3.2 3.2-5.6 4.8-7.2 1.6-1.6 4-3.2 6.4-4 2.4-.8 4.8-.8 8-.8 4 .8 7.2 1.6 10.4 4 2.4 2.4 4.8 5.6 6.4 8.8 1.6 4 1.6 8 .8 13.6zM237.252 218.052c-.8-.8-2.4-1.6-4.8-2.4l-44-4.8c-2.4 0-4 0-5.6.8-1.6.8-2.4 2.4-2.4 4s0 3.2 1.6 4c0 2.4 1.6 3.2 4 3.2l15.2 1.6-4.8 49.6c0 3.2 0 4.8 1.6 6.4.8 1.6 2.4 2.4 4.8 2.4s4 0 4.8-1.6c.8-1.6 2.4-3.2 2.4-6.4l5.6-49.6 15.2 1.6c2.4 0 4 0 5.6-.8 1.6-.8 2.4-2.4 2.4-4s0-3.2-1.6-4zM290.852 233.252c2.4 0 4 0 4.8-.8s1.6-2.4 2.4-4c0-1.6 0-3.2-.8-4s-2.4-1.6-4.8-1.6l-36.8-4h-4.8c-.8 0-2.4 1.6-3.2 2.4-.8.8-.8 2.4-1.6 4.8l-5.6 51.2c0 3.2 0 5.6 1.6 6.4.8 2.4 3.2 3.2 5.6 4l37.6 4c2.4 0 4 0 4.8-.8 1.6-.8 1.6-2.4 2.4-4 0-1.6 0-3.2-1.6-4-.8-.8-2.4-1.6-4.8-2.4l-32-3.2 2.4-19.2 28.8 3.2c2.4 0 4 0 4.8-.8s1.6-2.4 1.6-4 0-3.2-.8-4-2.4-1.6-4.8-1.6l-28-4 1.6-16.8 31.2 3.2zM351.652 289.252c-.8-1.6-2.4-1.6-4.8-2.4l-28-3.2 5.6-49.6c0-3.2 0-4.8-1.6-6.4-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-4.8 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-5.6 52.8c0 3.2 0 5.6 1.6 6.4-.8.8 1.6 1.6 4.8 1.6l33.6 4c2.4 0 4 0 5.6-.8 1.6-.8 2.4-2.4 2.4-4s0-3.2-1.6-4z"/></svg>
            <p @click="remarks!==2 ? remarks=2 : remarks=false" class="text-lg font-black text-gray-300 cursor-pointer">Excursions</p>
            <template x-if="remarks==2">
              <code x-show="remarks" x-transition:enter="transition ease duration-300"
              x-transition:enter-start="opacity-0 h-0"
              x-transition:enter-end="opacity-100 h-full"
              x-transition:leave="transition ease duration-300"
              x-transition:leave-start="opacity-100 h-full"
              x-transition:leave-end="opacity-0 h-0" style="display:none" class="absolute bg-theme font-light p-2 rounded text-red-600 text-xs z-50">*Coming soon</code>
            </template>
          </div>
        </div>
        <div class="my-1 px-1 w-full lg:w-1/3">
          <div class="bg-text flex justify-center relative text-white w-full">
            <svg  class="h-full mx-2 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.104 388.104"><path d="M363.652 159.652c-12.8-8-26.4-10.4-31.2-11.2l-24-2.4-68.8-105.6c-1.6-17.6-16-31.2-34.4-31.2-17.6 0-32 13.6-34.4 31.2l-68.8 83.2-22.4-2.4c-28.8-3.2-64 9.6-68.8 55.2l-10.4 105.6c-3.2 32 11.2 49.6 24 57.6s26.4 10.4 31.2 11.2l252 27.2c2.4 0 5.6.8 8 .8 26.4 0 56-14.4 60.8-56l11.2-105.6c3.2-32-11.2-48.8-24-57.6zm-158.4-134.4c10.4 0 18.4 8 18.4 18.4 0 10.4-8 18.4-18.4 18.4-10.4 0-18.4-8-18.4-18.4 0-10.4 8.8-18.4 18.4-18.4zm-29.6 35.2c5.6 10.4 16.8 17.6 29.6 17.6 12 0 22.4-6.4 28.8-16l53.6 81.6-165.6-17.6 53.6-65.6zm196 154.4l-11.2 105.6c-4.8 42.4-40 42.4-51.2 40.8l-252-27.2c-4-.8-14.4-2.4-24-8.8-13.6-7.2-19.2-21.6-16.8-40.8l11.2-106.4c4-36 30.4-41.6 44.8-41.6h6.4l252 27.2c4 .8 14.4 2.4 24 8.8 12.8 8.8 18.4 23.2 16.8 42.4z"/><path d="M97.252 202.052c-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-4.8 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-2.4 19.2-29.6-3.2 2.4-19.2c0-3.2 0-4.8-1.6-6.4-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-5.6 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-5.6 53.6c0 2.4 0 4.8.8 6.4 2.4 1.6 4 2.4 5.6 2.4 2.4 0 4 0 5.6-1.6 1.6-1.6 2.4-3.2 2.4-6.4l2.4-23.2 29.6 3.2-2.4 23.2c0 2.4 0 4.8.8 6.4.8 1.6 2.4 2.4 4.8 2.4s4 0 5.6-1.6c1.6-1.6 2.4-3.2 2.4-6.4l5.6-53.6c0-3.2 0-4.8-1.6-6.4zM174.052 226.052c-2.4-5.6-5.6-10.4-10.4-13.6s-10.4-5.6-17.6-6.4c-5.6-.8-9.6 0-14.4.8-4 .8-8 3.2-11.2 5.6-3.2 2.4-5.6 6.4-8 10.4-2.4 4-3.2 8.8-4 14.4-.8 4.8 0 9.6.8 14.4.8 4.8 2.4 8.8 4.8 12.8 2.4 3.2 5.6 6.4 9.6 8.8 4 2.4 8.8 3.2 14.4 4 5.6.8 10.4 0 14.4-.8 4-1.6 8-3.2 11.2-6.4 3.2-3.2 5.6-6.4 8-10.4 2.4-4 3.2-8.8 4-14.4.8-7.2 0-13.6-1.6-19.2zm-12 16.8c-.8 5.6-1.6 9.6-4 13.6-2.4 3.2-4.8 5.6-8 7.2-3.2 1.6-6.4 1.6-10.4 1.6-2.4 0-5.6-.8-7.2-2.4-2.4-1.6-4-3.2-5.6-5.6-1.6-2.4-2.4-4.8-3.2-8-1.6-2.4-1.6-6.4-.8-10.4s1.6-7.2 2.4-10.4c1.6-3.2 3.2-5.6 4.8-7.2 1.6-1.6 4-3.2 6.4-4 2.4-.8 4.8-.8 8-.8 4 .8 7.2 1.6 10.4 4 2.4 2.4 4.8 5.6 6.4 8.8 1.6 4 1.6 8 .8 13.6zM237.252 218.052c-.8-.8-2.4-1.6-4.8-2.4l-44-4.8c-2.4 0-4 0-5.6.8-1.6.8-2.4 2.4-2.4 4s0 3.2 1.6 4c0 2.4 1.6 3.2 4 3.2l15.2 1.6-4.8 49.6c0 3.2 0 4.8 1.6 6.4.8 1.6 2.4 2.4 4.8 2.4s4 0 4.8-1.6c.8-1.6 2.4-3.2 2.4-6.4l5.6-49.6 15.2 1.6c2.4 0 4 0 5.6-.8 1.6-.8 2.4-2.4 2.4-4s0-3.2-1.6-4zM290.852 233.252c2.4 0 4 0 4.8-.8s1.6-2.4 2.4-4c0-1.6 0-3.2-.8-4s-2.4-1.6-4.8-1.6l-36.8-4h-4.8c-.8 0-2.4 1.6-3.2 2.4-.8.8-.8 2.4-1.6 4.8l-5.6 51.2c0 3.2 0 5.6 1.6 6.4.8 2.4 3.2 3.2 5.6 4l37.6 4c2.4 0 4 0 4.8-.8 1.6-.8 1.6-2.4 2.4-4 0-1.6 0-3.2-1.6-4-.8-.8-2.4-1.6-4.8-2.4l-32-3.2 2.4-19.2 28.8 3.2c2.4 0 4 0 4.8-.8s1.6-2.4 1.6-4 0-3.2-.8-4-2.4-1.6-4.8-1.6l-28-4 1.6-16.8 31.2 3.2zM351.652 289.252c-.8-1.6-2.4-1.6-4.8-2.4l-28-3.2 5.6-49.6c0-3.2 0-4.8-1.6-6.4-1.6-1.6-2.4-2.4-4.8-2.4s-4 0-4.8 1.6c-1.6 1.6-2.4 3.2-2.4 6.4l-5.6 52.8c0 3.2 0 5.6 1.6 6.4-.8.8 1.6 1.6 4.8 1.6l33.6 4c2.4 0 4 0 5.6-.8 1.6-.8 2.4-2.4 2.4-4s0-3.2-1.6-4z"/></svg>
            <p @click="remarks!==3 ? remarks=3 : remarks=false" class="text-lg font-black text-gray-300 cursor-pointer">Selected Tour Experience</p>
            <template x-if="remarks==3">
              <code x-show="remarks" x-transition:enter="transition ease duration-300"
              x-transition:enter-start="opacity-0 h-0"
              x-transition:enter-end="opacity-100 h-full"
              x-transition:leave="transition ease duration-300"
              x-transition:leave-start="opacity-100 h-full"
              x-transition:leave-end="opacity-0 h-0" style="display:none" class="absolute bg-theme font-light p-2 rounded text-red-600 text-xs z-50">*Coming soon</code>
            </template>
          </div>
        </div>

      </div>
      <form wire:submit.prevent="dataFetchHotel()" class="p-3 relative rounded-lg shadow-md w-full">
        <div class="grid grid-cols-4 gap-2">
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
          <span>Search</span>
        </button>
      </div>
      <div class="mt-3 grid grid-cols-4 gap-3">

      <select class="w-full h-6 bg-gray-200 border border-gray-300 font-normal m-0 py-1 rounded text-gray-700 text-xs" wire:model.defer="sortOrder">
        <option value="PRICE">Lowest price to Highest</option>
        <option value="PRICE_HIGHEST_FIRST">Highest price to lowest</option>
        <option value="BEST_SELLER">Best Selling</option>
        <option value="STAR_RATING_HIGHEST_FIRST">Stars (high to low)</option>
        <option value="STAR_RATING_LOWEST_FIRST">Stars (low to high)</option>
        <option value="DISTANCE_FROM_LANDMARK">Distance to city center</option>
        <option value="GUEST_RATING">Good Guest Reviews</option>
      </select>
      <select class="w-full h-6 bg-gray-200 border border-gray-300 font-normal m-0 py-1 rounded text-gray-700 text-xs" wire:model.defer="locale">
        <option value="en_US">English</option>
        <option value="ar_AE">Arabic</option>
      </select>
      </div>
      </form>
      <div class="flex-wrap -mx-px overflow-hidden sm:-mx-1" wire:loading.flex>
      <?php for($i=0;$i <= 6;$i++): ?>
      <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/4">
      <div class="flex flex-col h-full items-center justify-center relative">
        <div class="container h-full">
          <div class="animate-pulse bg-gray-300 h-full p-6 rounded-xl shadow-lg w-full">
            <div class="flex flex-col ">
              <div class="">
                <div class="bg-white h-32 mb-3 relative w-full">
                  <span class=" object-fill"></span>
                </div>
                <div class="flex-auto justify-evenly">
                  <div class="flex flex-wrap ">
                    <div class="flex flex-none items-center text-sm w-full">

                      <span class="animate-pulse bg-white h-5 mr-3 text-gray-400 w-32 whitespace-nowrap"></span>
                    <span class="animate-pulse bg-white h-5 mr-3 text-gray-400 w-32 whitespace-nowrap"></span></div>
                    <div class="flex items-center w-full justify-between min-w-0 ">
                      <span class="text-lg mr-auto cursor-pointer bg-white animate-pulse w-16 h-full truncate "></span>
                    </div>
                  </div>
                  <div class="text-xl text-white bg-white animate-pulse w-16 h-full font-semibold mt-1"></div>
                </div>
              <div class="flex-auto justify-evenly">
                  <div class="flex flex-wrap ">
                    <div class="flex flex-none items-center text-sm w-full">

                      <span class="animate-pulse bg-white h-5 mr-3 text-gray-400 w-32 whitespace-nowrap"></span>
                    <span class="animate-pulse bg-white h-5 mr-3 text-gray-400 w-32 whitespace-nowrap"></span></div>
                    <div class="flex items-center w-full justify-between min-w-0 ">
                      <span class="text-lg mr-auto cursor-pointer bg-white animate-pulse w-16 h-full truncate "></span>
                    </div>
                  </div>
                  <div class="text-xl text-white bg-white animate-pulse w-16 h-full font-semibold mt-1"></div>
                </div></div>
            </div>
          </div>
        </div>
      </div>
      </div>
              <?php endfor; ?>
                  </div>
      <?php
      if ($err) {
        echo "cURL Error #:" . $err;
      } else { ?>
      <div wire:loading.remove class="flex flex-wrap -mx-px overflow-hidden sm:-mx-1">
          <?php foreach (json_decode($response)->data->body->searchResults->results ?? [] as $hotel): ?>
            <!-- item start -->
              <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/4">
              <div class="relative flex flex-col items-center justify-center ">
                <a class="absolute top-0 left-0 w-full h-full z-10" href="{{url('hotels/info/'.$hotel->id)}}"></a>
                <div class="container">
                  <div @click="hotel=true" class="cursor-pointer w-full bg-gray-100 hover:bg-gray-200 transition duration-150 shadow-lg rounded-xl">
                    <div class="flex flex-col ">
                      <div class="">
                        <div class="relative w-full mb-3">
                          <img src="{{$hotel->optimizedThumbUrls->srpDesktop ?? ''}}" alt="{{$hotel->name ?? ''}}" class="object-fill rounded-tl-xl rounded-tr-xl w-full">
                        </div>
                        <div class="flex-auto justify-evenly p-2">
                          <div class="flex flex-wrap ">
                            <div class="w-full flex-none text-sm flex items-center text-gray-800">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                              </svg>
                              <span class="whitespace-nowrap mr-3">{{$hotel->guestReviews->rating ?? ''}}</span><span class="mr-2">{{$hotel->address->locality ?? ''}}</span>
                            </div>
                            <div class="flex items-center w-full justify-between min-w-0 ">
                              <h2 class="text-lg mr-auto cursor-pointer text-theme1 hover:text-theme2 truncate ">{{$hotel->name ?? ''}}</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              </div>
              <!-- end items -->
          <?php endforeach; ?>
          <!-- item start -->

</div>
<ul class="flex">
  <?php if (json_decode($response)->data->body->searchResults->pagination->currentPage ?? '1'  == 1): ?>
    <li class="mx-1 px-3 py-2 bg-gray-200 text-gray-500 rounded-lg">
    <button class="flex items-center font-bold" type="button" disabled> Previous</button>
    </li>
    <?php else: ?>
<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 rounded-lg">
<button class="flex items-center font-bold" type="button" wire:click="previousNumber"> Previous</button>
</li>
  <?php endif; ?>
<li class="relative mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
<label><?php echo json_decode($response)->data->body->searchResults->pagination->currentPage ?? ''  ?></label>
</li>
<li class="mx-1 px-3 py-2 bg-gray-200 text-gray-700 hover:bg-gray-700 hover:text-gray-200 rounded-lg">
    <button class="flex items-center font-bold" type="button" wire:click="pageNumber"> Next</button>
</li>
</ul>
<?php
}
?>
    </div>
  </div>

</div>
</div>

<div class="min-h-screen relative flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
  <div class="bg-fixed fixed h-full left-0 overflow-hidden space stars2 top-0 w-full" style="z-index: -1;"></div>
  <div class="bg-fixed fixed h-full left-0 overflow-hidden space stars3 top-0 w-full" style="z-index: -1;"></div>

    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-yellow-300 bg-opacity-75 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

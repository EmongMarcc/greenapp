<div>
  <nav x-data="{openToggle:false,travel:false}" class="bg-white shadow-xl fixed top-0 w-full z-50">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div  class="relative flex items-center justify-between h-16">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" @click="openToggle = !openToggle"  class="inline-flex items-center justify-center p-2  text-theme2 hover:text-theme33 hover:bg-theme focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path style="display:none" x-show="openToggle" x-transition:enter="transition ease-out duration-150"
              x-transition:enter-start="opacity-0 transform"
              x-transition:enter-end="opacity-100 transform"
              x-transition:leave="transition ease-in duration-150"
              x-transition:leave-start="opacity-100 transform"
              x-transition:leave-end="opacity-0 transform" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              <path x-show="!openToggle" x-transition:enter-start="opacity-0 transform"
              x-transition:enter-end="opacity-100 transform"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 transform"
              x-transition:leave-end="opacity-0 transform" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
      </div>
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center rounded-full">
          <a class="transform scale-150" href="{{url('/')}}">
            <picture>
              <source type="image/avif" srcset="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648645902/green_emzyji.avif">
              <img class="block lg:hidden h-8 w-auto" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_290,h_220/v1633508229/greenapple/gattlogo_l50kfv.png" alt="Green Apple Travel & Tourism logo sm">
            </picture>
            <picture>
              <source type="image/avif" srcset="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648645902/green_emzyji.avif">
              <img class="hidden lg:block h-8 w-auto" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1633508229/greenapple/green-apple-travel-tourism-dubai-mob_mwbbld.png" alt="Green Apple Travel & Tourism">
            </picture>
        </a>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <div class="hidden sm:flex space-x-4">
          <button @click="travel = !travel" class="flex font-medium hover:text-theme2 px-3 py-2  text-sm text-theme3" type="button">Visa Services
            <svg  xmlns="http://www.w3.org/2000/svg"  x-bind:class="travel ? 'transform rotate-180' : 'transform rotate-0'" class="h-5 w-5 transition duration-150 ease" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
          <a href="{{url('/contact-us')}}" class="font-medium hover:text-theme2 px-3 py-2  text-sm text-theme3">Contact Us</a>
          <a href="{{url('/about-us')}}" class="font-medium hover:text-theme2 px-3 py-2  text-sm text-theme3">About Us</a>
          <a href="{{url('/offers')}}" class="font-medium hover:text-theme2 px-3 py-2  text-sm text-theme3">Tour Packages</a>
          <div class="text-theme3">
    <!-- GTranslate: https://gtranslate.io/ -->
<select onchange="doGTranslate(this);" class="mt-2 p-1 text-xs"><option value="">Select Language</option><option value="en|ar">Arabic</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|en">English</option><option value="en|hi">Hindi</option><option value="en|ja">Japanese</option><option value="en|ru">Russian</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option></select><div class="hidden" id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

</div>
        </div>
      </div>
      <div style="display:none" @click.away="openToggle = false" x-show="openToggle" x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 transform -translate-y-28 z-0"
      x-transition:enter-end="opacity-100 transform translate-y-0 z-50"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="opacity-100 transform translate-y-0 z-40"
      x-transition:leave-end="opacity-0 transform -translate-y-28 z-0" class="sm:hidden absolute bg-theme2 w-full">
        <div class="absolute bg-white shadow-lg left-0 pb-3 pt-2 px-2 space-y-1 top-8 w-full z-50">
          <a href="#" @click="travel = !travel"  class="text-theme3 hover:text-theme2 block px-3 py-2  text-base font-medium" aria-current="page">Travel Services</a>
          <a href="{{url('/contact-us')}}" rel="nofollow" class="text-theme3 hover:text-theme2 block px-3 py-2  text-base font-medium">Contact Us</a>
          <a href="{{url('/about-us')}}" class="text-theme3 hover:text-theme2 block px-3 py-2  text-base font-medium">About Us</a>
             <a href="{{url('/offers')}}" class="font-medium hover:text-theme2 px-3 py-2  text-theme3 block">Tour Packages</a>
             <div class="hover:text-theme2 text-theme3 block">
<!-- GTranslate: https://gtranslate.io/ -->
<select onchange="doGTranslate(this);" class="mt-2 p-1 text-xs"><option value="">Select Language</option><option value="en|ar">Arabic</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|en">English</option><option value="en|hi">Hindi</option><option value="en|ja">Japanese</option><option value="en|ru">Russian</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option></select><div class="hidden" id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>
</div>
        </div>
      </div>
      <div style="display:none" @click.away="travel = false" x-show="travel" x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 transform -translate-y-28"
      x-transition:enter-end="opacity-100 transform translate-y-0"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="opacity-100 transform translate-y-0"
      x-transition:leave-end="opacity-0 transform -translate-y-28" class="absolute bg-white lg:h-auto h-96 overflow-x-hidden overflow-y-scroll shadow-2xl text-center top-14 w-full z-50">
      <div class="flex flex-row justify-around">
      <div class="flex flex-row text-theme2">
        <svg xmlns="http://www.w3.org/2000/svg" class="bg-white h-5 rounded-full text-theme2 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
        <p class="text-xs text-theme3 font-bold">Open for Application</p>
      </div>
      <div class="flex flex-row text-red-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="bg-white h-5 rounded-full text-red-500 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
        <p class="text-xs text-theme3 font-bold">Close for Application</p>
      </div>
      </div>
        <div class="flex flex-wrap -mx-px overflow-hidden">
          <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/6">
            <ul>
              <li class="flex justify-around text-md font-medium text-theme3 hover:text-theme2 w-full">America </li>
              <?php foreach ($countryblogsAmerica as $blog): ?>
                  <li class="grid grid-cols-3 h-5 justify-around my-1 relative text-xs text-theme3 hover:text-theme2">
                    <div class="bg-contain bg-no-repeat w-7 h-5 bg-center shadow-md" style="background-image:url({{$blog->flags}})">&nbsp;</div>
                    <a class="col-span-2 font-medium text-left" href="{{url('country/'.$blog->category)}}">{{$blog->title}}</a>
                    <?php if ($blog->status === 'Active'): ?>
                      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-theme2 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-red-500 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    <?php endif; ?>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/6">
            <ul>
              <li class="flex justify-around text-md font-medium text-theme3 hover:text-theme2 w-full">Asia </li>
              <?php foreach ($countryblogsAsia as $blog): ?>
                  <li class="grid grid-cols-3 h-5 my-1 px-1 justify-around my-1 relative text-xs text-theme3 hover:text-theme2">
                    <div class="bg-contain bg-no-repeat w-7 h-5 bg-center shadow-md" style="background-image:url({{$blog->flags}})">&nbsp;</div>
                    <a class="col-span-2 font-medium text-left" href="{{url('country/'.$blog->category)}}">{{$blog->title}}</a>
                    <?php if ($blog->status === 'Active'): ?>
                      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-theme2 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-red-500 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    <?php endif; ?>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/6">
            <ul>
              <li class="flex justify-around text-md font-medium text-theme3 hover:text-theme2 w-full">CIS </li>
              <?php foreach ($countryblogsCIS as $blog): ?>
                  <li class="grid grid-cols-3 h-5 justify-around my-1 relative text-xs text-theme3 hover:text-theme2">
                    <div class="bg-contain bg-no-repeat w-7 h-5 bg-center shadow-md" style="background-image:url({{$blog->flags}})">&nbsp;</div>
                    <a class="col-span-2 font-medium text-left" href="{{url('country/'.$blog->category)}}">{{$blog->title}}</a>
                    <?php if ($blog->status === 'Active'): ?>
                      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-theme2 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-red-500 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    <?php endif; ?>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/6">
            <ul>
              <li class="flex justify-around text-md font-medium text-theme3 hover:text-theme2 w-full">Europe </li>
              <?php foreach ($countryblogsEurope as $blog): ?>
                  <li class="grid grid-cols-3 h-5 justify-around my-1 relative text-xs text-theme3 hover:text-theme2">
                    <div class="bg-contain bg-no-repeat w-7 h-5 bg-center shadow-md" style="background-image:url({{$blog->flags}})">&nbsp;</div>
                    <a class="col-span-2 font-medium text-left" href="{{url('country/'.$blog->category)}}">{{$blog->title}}</a>
                    <?php if ($blog->status === 'Active'): ?>
                      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-theme2 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-red-500 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    <?php endif; ?>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/6">
            <ul>
              <li class="flex justify-around text-md font-medium text-theme3 hover:text-theme2 w-full">Middle East & Africa </li>
              <?php foreach ($countryblogsMiddleEastAfrica as $blog): ?>
                  <li class="grid grid-cols-3 h-5 justify-around my-1 relative text-xs text-theme3 hover:text-theme2">
                    <div class="bg-contain bg-no-repeat w-7 h-5 bg-center shadow-md" style="background-image:url({{$blog->flags}})">&nbsp;</div>
                    <a class="col-span-2 font-medium text-left" href="{{url('country/'.$blog->category)}}">{{$blog->title}}</a>
                    <?php if ($blog->status === 'Active'): ?>
                      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-theme2 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-red-500 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    <?php endif; ?>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="my-2 px-2 w-1/2 overflow-hidden sm:w-1/2 md:w-1/4 lg:w-1/4 xl:w-1/6">
            <ul>
              <li class="flex justify-around text-md font-medium text-theme3 hover:text-theme2 w-full">Oceania </li>
              <?php foreach ($countryblogsOceania as $blog): ?>
                  <li class="grid grid-cols-3 h-5 justify-around my-1 relative text-xs text-theme3 hover:text-theme2">
                    <div class="bg-contain bg-no-repeat w-7 h-5 bg-center shadow-md" style="background-image:url({{$blog->flags}})">&nbsp;</div>
                    <a class="col-span-2 font-medium text-left" href="{{url('country/'.$blog->category)}}">{{$blog->title}}</a>
                    <?php if ($blog->status === 'Active'): ?>
                      <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-theme2 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute bg-gray-100 h-4 right-0 rounded-full text-red-500 top-0 w-4 shadow-inner" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    <?php endif; ?>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>


</nav>
</div>

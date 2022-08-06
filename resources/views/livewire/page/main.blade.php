<div>
<livewire:layout.navigation/>
<style media="screen">
  .text-shadow-mj-h4{
    text-shadow: 1px 1px 1px #181818;
  }
</style>
<?php if (session('mailstatus')): ?>
  <div x-data="{ isShowing: true }" x-show="isShowing" class="absolute bg-green-200 left-0 p-3 rounded shadow top-0 text-theme3 transMode z-50">
    <button @click="isShowing=false" class="-right-10 absolute bg-red-700 close duration-300 hover:bg-red-900 linear px-3 rounded text-theme3 transition">&times;</button>
  <h4 class="text-dark-primary text-shadow-mj-h4">{{session('mailstatus')}}</h4>
</div>
<?php elseif(session('MailInvalid')): ?>
  <div x-data="{ isShowing: true }" x-show="isShowing" class="absolute bg-yellow-400 left-0 p-3 rounded shadow top-0 text-theme3 transMode z-50">
    <button @click="isShowing=false" class="-right-10 absolute bg-red-700 close duration-300 hover:bg-red-900 linear px-3 rounded text-theme3 transition">&times;</button>
  <h4 class="text-dark-primary text-shadow-mj-h4">{{session('MailInvalid')}}</h4>
</div>
<?php elseif(session('BotDetect')): ?>
  <div x-data="{ isShowing: true }" x-show="isShowing" class="absolute bg-yellow-400 left-0 p-3 rounded shadow top-0 text-theme3 transMode z-50">
    <button @click="isShowing=false" class="-right-10 absolute bg-red-700 close duration-300 hover:bg-red-900 linear px-3 rounded text-theme3 transition">&times;</button>
  <h4 class="text-dark-primary text-shadow-mj-h4">{{session('BotDetect')}}</h4>
</div>
<?php endif; ?>
<div class="relative overflow-auto mj-main-bg bg-cover bg-top">
  <div class="absolute h-full overflow-hidden right-0 to-theme2 top-0 w-screen z-0">
  </div>
  <div class="relative container max-w-5xl mx-auto px-4 z-10">
    <div class="block md:flex">
    <div>
    <div class="w-4/5">
        <h1 class="mt-32 text-white text-6xl font-bold">Travel Agency in DUBAI!</h1>
        <p class="text-white text-lg">Dream Travel, We'll make it Happen!</p>
        <div class="text-white">
          <p class="font-sans text-sm md:my-2"><svg class="inline-block fill-current mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z" /></svg>
            info(@)greenappletravel(dot)ae</p>
          <p class="font-sans text-sm md:my-2"><svg class="inline-block fill-current mr-2"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z" />
            </svg>+971 4 370 5995</p>
            <p class="font-sans text-sm md:my-2"><svg class="inline-block fill-current mr-2"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                  d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
              </svg>Office 408, Nasser Lootah Building, Consulate Area – Dubai, UAE</p>
        </div>
    </div>
    <div class="flex justify-left items-center">
      <div class="flex items-center mt-2 mb-4">
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
        <svg class="mx-1 w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
      </div>
    </div>
    <div class="text-white">
     Rated <span>4.6</span>/5
     based on <span>753</span> customer reviews
     <br/>
     <a class="text-white rounded bg-theme2 m-3 px-3" rel="nofollow" target="_blank" href="https://g.page/r/CSVOuDsOGf38EAI/review?kd">Send Review</a>
    </div>
    <div class="w-5/6 my-10 ml-6">
    <div class="landingpage-flags">
      <div>
        <img class="aligncenter inline wp-image-84" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_29,h_15/v1633508248/greenapple/flag/gb-min_nopjrs.png" alt="English">
        <img class="aligncenter inline wp-image-87" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_29,h_15/v1633508250/greenapple/flag/ru-min_oxakq0.png" alt="Russian">
        <img class="aligncenter inline wp-image-88" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_29,h_15/v1633508247/greenapple/flag/ae-min_par5c5.png" alt="Arabic">
        <img class="aligncenter inline wp-image-86" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_29,h_15/v1633508249/greenapple/flag/ph-min_rbuyre.png" alt="Filipino">
        <img class="aligncenter inline wp-image-85" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_29,h_15/v1633508248/greenapple/flag/in-min_sjus4m.png" alt="Indian">
        <img class="aligncenter inline wp-image-1320" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_29,h_15/v1633508249/greenapple/flag/pk-min_mbkmj3.png" alt="Urdu">
        <img class="aligncenter inline wp-image-1320"src="https://res.cloudinary.com/greenappletravel-ae/image/upload/c_scale,q_75,w_29,h_15/v1633508249/greenapple/flag/ua-min_y8qfli.png" alt="Ukrainian">
      </div>
    </div>
    </div>
  </div>

  </div>
    <div class="text-white relative">
      <h3 class="text-uppercase font-semibold">What are you waiting for? Call now!</h3>
      <div class="grid lg:grid-cols-4 sm:grid-cols-2 uppercase">
          <a rel="nofollow" href="tel:971544008877" class="bg- cursor-pointer flex gap-5 group hover:bg-theme3 bg-theme2 items-center mt-5 px-2 py-2 ring-text2 shadow-xl transition">
            <svg class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#e54728" d="M123.869 236.862h264.655v35.131H123.869z"></path><path fill="#dba983" d="M114.637 148.302h283.525v86.57H114.637z"></path><g fill="#2ba5f7"><path d="M149.976 326.482l-.143.155h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512h104.618l100.21-44.232 6.076-88.071c-36.572 0-69.69-14.831-93.658-38.8a133.464 133.464 0 01-12.485-14.415z"></path><path d="M394.284 326.637h-32.129l-.024-.012c-24.147 32.224-62.649 53.072-106.012 53.072l24.898 64.841 1.787 42.29L362.155 512h104.63V399.138c0-40.039-32.462-72.501-72.501-72.501z"></path></g><path d="M149.833 327.286v-.649h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512H86.91V399.138c0-36.79 27.405-67.162 62.923-71.852z" fill="#2197d8"></path><g fill="#f7b239"><path d="M256.119 379.697V512H149.833V335.893l56.443 100.58zM362.155 336.322V512H256.119V379.697l49.843 56.776z"></path></g><path fill="#2ba5f7" d="M247.19 369.487h17.869V512H247.19z"></path><path d="M388.53 250.264l-.012 3.479c-1.322 27.28-10.888 52.381-26.268 72.882-20.156 26.899-50.32 45.876-84.962 51.404a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414 131.888 131.888 0 01-20.395-39.979 132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544 14.009-6.052 24.469-10.459 26.994-10.471 1.156 0 9.363 3.61 21.157 8.768 30.687 13.438 85.76 37.466 104.439 36.048 4.015-.31 6.349-1.787 6.397-4.801l.347-.001z" fill="#ffd3ae"></path><path d="M277.288 378.029a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414c-15.963-21.336-25.624-47.651-26.256-76.206l.441-.012c.369 22.42 18.644 40.42 41.075 40.42h20.704c10.245 28.257 29.174 52.357 53.56 69.058.298.214.631.429.929.643a141.544 141.544 0 0036.74 17.643z" fill="#dba983"></path><path fill="#f7b239" d="M298.697 83.89l-21.289 20.752 5.028 29.305-26.316-13.83-26.315 13.83 5.027-29.305-21.3-20.752 29.425-4.265 13.163-26.661 13.152 26.661z"></path><path d="M172.218 177.465L256 153.866l84.022 23.599c-13.14 14.581-30.044 25.72-49.176 31.891-10.936 3.538-22.61 5.444-34.726 5.444-12.115 0-23.79-1.906-34.726-5.444-19.143-6.171-36.036-17.31-49.176-31.891z" fill="#d12f19"></path><path d="M388.531 250.264l.143-30.818a42.034 42.034 0 00-1.215-10.245c-4.503-18.215-20.967-31.736-40.575-31.736h-181.29c-19.62 0-36.084 13.521-40.575 31.736a41.138 41.138 0 00-1.227 10.054v52.738c-25.124 0-29.103-39.586-29.103-72.513 0-15.284.858-29.139.858-36.93C95.548 73.562 167.12.238 256.12 0c44.494.119 84.64 18.512 113.66 47.997 29.02 29.484 46.913 70.059 46.913 114.553 0 24.564 8.53 109.443-28.257 109.443l.083-18.25.012-3.479z" fill="#f95428"></path><path d="M156.303 162.55c0-78.596 55.834-144.958 130.193-159.555A159.705 159.705 0 00256.12 0c-89 .238-160.573 73.562-160.573 162.55 0 7.791-.858 21.646-.858 36.93 0 32.927 3.979 72.513 29.103 72.513v-52.738c0-3.467.417-6.838 1.227-10.054 3.724-15.102 15.681-26.969 30.841-30.586.219-6.523.443-12.087.443-16.065z" fill="#e54728"></path><path d="M381.918 227.165l-.131 27.9-.012 2.919h-.345c-.357 22.432-18.643 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-11.27 0-21.479-4.539-28.9-11.901a132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544a113.731 113.731 0 0020.168 1.799c9.661 0 19.037-1.215 27.983-3.502a106.785 106.785 0 006.743-1.942h95.958l.655-.155a42.083 42.083 0 011.214 10.245z" fill="#dba983"></path><path d="M124.281 250.264l-.441.012a84.376 84.376 0 01-.048-3.026V219.255c0-3.467.417-6.838 1.227-10.054l.643.155H221.395c10.936 3.538 22.61 5.444 34.726 5.444 12.115 0 23.79-1.906 34.726-5.444h95.958l.655-.155a42.034 42.034 0 011.215 10.245l-.143 30.818h-.345c-.357 22.432-18.644 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-22.433 0-40.707-18-41.077-40.42z" fill="#a2d6f4"></path><g fill="#999"><path d="M203.227 261.545c-4.934 0-8.935-4-8.935-8.935v-14.319a8.935 8.935 0 0117.87 0v14.319c0 4.935-4 8.935-8.935 8.935zM309.238 261.545c-4.935 0-8.935-4-8.935-8.935v-14.319c0-4.934 3.999-8.935 8.935-8.935s8.935 4 8.935 8.935v14.319a8.934 8.934 0 01-8.935 8.935z"></path></g><path d="M256.233 343.491c-10.436 0-20.248-4.068-27.628-11.457a8.935 8.935 0 0112.642-12.629 21.043 21.043 0 0014.986 6.216c5.662 0 10.99-2.209 15.001-6.22a8.935 8.935 0 0112.634 12.636c-7.386 7.386-17.2 11.454-27.635 11.454z" fill="#d12f19"></path></svg>
            <div class="text-center w-full">
              <span class="text-xs md:text-text-sm">+971544008877</span>
              <span class="text-sm font-semibold block text-center">Ali</span>
            </div>
            <div>
              <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
            </div>
          </a>

          <a rel="nofollow" href="tel:+971509222123" class="bg- cursor-pointer flex gap-5 group hover:bg-theme3 bg-theme2 items-center mt-5 px-2 py-2 ring-text2 shadow-xl transition">
            <svg class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#e54728" d="M123.869 236.862h264.655v35.131H123.869z"></path><path fill="#dba983" d="M114.637 148.302h283.525v86.57H114.637z"></path><g fill="#2ba5f7"><path d="M149.976 326.482l-.143.155h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512h104.618l100.21-44.232 6.076-88.071c-36.572 0-69.69-14.831-93.658-38.8a133.464 133.464 0 01-12.485-14.415z"></path><path d="M394.284 326.637h-32.129l-.024-.012c-24.147 32.224-62.649 53.072-106.012 53.072l24.898 64.841 1.787 42.29L362.155 512h104.63V399.138c0-40.039-32.462-72.501-72.501-72.501z"></path></g><path d="M149.833 327.286v-.649h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512H86.91V399.138c0-36.79 27.405-67.162 62.923-71.852z" fill="#2197d8"></path><g fill="#f7b239"><path d="M256.119 379.697V512H149.833V335.893l56.443 100.58zM362.155 336.322V512H256.119V379.697l49.843 56.776z"></path></g><path fill="#2ba5f7" d="M247.19 369.487h17.869V512H247.19z"></path><path d="M388.53 250.264l-.012 3.479c-1.322 27.28-10.888 52.381-26.268 72.882-20.156 26.899-50.32 45.876-84.962 51.404a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414 131.888 131.888 0 01-20.395-39.979 132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544 14.009-6.052 24.469-10.459 26.994-10.471 1.156 0 9.363 3.61 21.157 8.768 30.687 13.438 85.76 37.466 104.439 36.048 4.015-.31 6.349-1.787 6.397-4.801l.347-.001z" fill="#ffd3ae"></path><path d="M277.288 378.029a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414c-15.963-21.336-25.624-47.651-26.256-76.206l.441-.012c.369 22.42 18.644 40.42 41.075 40.42h20.704c10.245 28.257 29.174 52.357 53.56 69.058.298.214.631.429.929.643a141.544 141.544 0 0036.74 17.643z" fill="#dba983"></path><path fill="#f7b239" d="M298.697 83.89l-21.289 20.752 5.028 29.305-26.316-13.83-26.315 13.83 5.027-29.305-21.3-20.752 29.425-4.265 13.163-26.661 13.152 26.661z"></path><path d="M172.218 177.465L256 153.866l84.022 23.599c-13.14 14.581-30.044 25.72-49.176 31.891-10.936 3.538-22.61 5.444-34.726 5.444-12.115 0-23.79-1.906-34.726-5.444-19.143-6.171-36.036-17.31-49.176-31.891z" fill="#d12f19"></path><path d="M388.531 250.264l.143-30.818a42.034 42.034 0 00-1.215-10.245c-4.503-18.215-20.967-31.736-40.575-31.736h-181.29c-19.62 0-36.084 13.521-40.575 31.736a41.138 41.138 0 00-1.227 10.054v52.738c-25.124 0-29.103-39.586-29.103-72.513 0-15.284.858-29.139.858-36.93C95.548 73.562 167.12.238 256.12 0c44.494.119 84.64 18.512 113.66 47.997 29.02 29.484 46.913 70.059 46.913 114.553 0 24.564 8.53 109.443-28.257 109.443l.083-18.25.012-3.479z" fill="#f95428"></path><path d="M156.303 162.55c0-78.596 55.834-144.958 130.193-159.555A159.705 159.705 0 00256.12 0c-89 .238-160.573 73.562-160.573 162.55 0 7.791-.858 21.646-.858 36.93 0 32.927 3.979 72.513 29.103 72.513v-52.738c0-3.467.417-6.838 1.227-10.054 3.724-15.102 15.681-26.969 30.841-30.586.219-6.523.443-12.087.443-16.065z" fill="#e54728"></path><path d="M381.918 227.165l-.131 27.9-.012 2.919h-.345c-.357 22.432-18.643 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-11.27 0-21.479-4.539-28.9-11.901a132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544a113.731 113.731 0 0020.168 1.799c9.661 0 19.037-1.215 27.983-3.502a106.785 106.785 0 006.743-1.942h95.958l.655-.155a42.083 42.083 0 011.214 10.245z" fill="#dba983"></path><path d="M124.281 250.264l-.441.012a84.376 84.376 0 01-.048-3.026V219.255c0-3.467.417-6.838 1.227-10.054l.643.155H221.395c10.936 3.538 22.61 5.444 34.726 5.444 12.115 0 23.79-1.906 34.726-5.444h95.958l.655-.155a42.034 42.034 0 011.215 10.245l-.143 30.818h-.345c-.357 22.432-18.644 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-22.433 0-40.707-18-41.077-40.42z" fill="#a2d6f4"></path><g fill="#999"><path d="M203.227 261.545c-4.934 0-8.935-4-8.935-8.935v-14.319a8.935 8.935 0 0117.87 0v14.319c0 4.935-4 8.935-8.935 8.935zM309.238 261.545c-4.935 0-8.935-4-8.935-8.935v-14.319c0-4.934 3.999-8.935 8.935-8.935s8.935 4 8.935 8.935v14.319a8.934 8.934 0 01-8.935 8.935z"></path></g><path d="M256.233 343.491c-10.436 0-20.248-4.068-27.628-11.457a8.935 8.935 0 0112.642-12.629 21.043 21.043 0 0014.986 6.216c5.662 0 10.99-2.209 15.001-6.22a8.935 8.935 0 0112.634 12.636c-7.386 7.386-17.2 11.454-27.635 11.454z" fill="#d12f19"></path></svg>
            <div class="text-center w-full">
              <span class="text-xs md:text-text-sm">+971509222123</span>
              <span class="text-sm font-semibold block text-center">Polina</span>
            </div>
            <div>
              <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
            </div>
          </a>

          <a rel="nofollow" href="tel:971563634477" class="bg- cursor-pointer flex gap-5 group hover:bg-theme3 bg-theme2 items-center mt-5 px-2 py-2 ring-text2 shadow-xl transition">
            <svg class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#e54728" d="M123.869 236.862h264.655v35.131H123.869z"></path><path fill="#dba983" d="M114.637 148.302h283.525v86.57H114.637z"></path><g fill="#2ba5f7"><path d="M149.976 326.482l-.143.155h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512h104.618l100.21-44.232 6.076-88.071c-36.572 0-69.69-14.831-93.658-38.8a133.464 133.464 0 01-12.485-14.415z"></path><path d="M394.284 326.637h-32.129l-.024-.012c-24.147 32.224-62.649 53.072-106.012 53.072l24.898 64.841 1.787 42.29L362.155 512h104.63V399.138c0-40.039-32.462-72.501-72.501-72.501z"></path></g><path d="M149.833 327.286v-.649h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512H86.91V399.138c0-36.79 27.405-67.162 62.923-71.852z" fill="#2197d8"></path><g fill="#f7b239"><path d="M256.119 379.697V512H149.833V335.893l56.443 100.58zM362.155 336.322V512H256.119V379.697l49.843 56.776z"></path></g><path fill="#2ba5f7" d="M247.19 369.487h17.869V512H247.19z"></path><path d="M388.53 250.264l-.012 3.479c-1.322 27.28-10.888 52.381-26.268 72.882-20.156 26.899-50.32 45.876-84.962 51.404a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414 131.888 131.888 0 01-20.395-39.979 132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544 14.009-6.052 24.469-10.459 26.994-10.471 1.156 0 9.363 3.61 21.157 8.768 30.687 13.438 85.76 37.466 104.439 36.048 4.015-.31 6.349-1.787 6.397-4.801l.347-.001z" fill="#ffd3ae"></path><path d="M277.288 378.029a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414c-15.963-21.336-25.624-47.651-26.256-76.206l.441-.012c.369 22.42 18.644 40.42 41.075 40.42h20.704c10.245 28.257 29.174 52.357 53.56 69.058.298.214.631.429.929.643a141.544 141.544 0 0036.74 17.643z" fill="#dba983"></path><path fill="#f7b239" d="M298.697 83.89l-21.289 20.752 5.028 29.305-26.316-13.83-26.315 13.83 5.027-29.305-21.3-20.752 29.425-4.265 13.163-26.661 13.152 26.661z"></path><path d="M172.218 177.465L256 153.866l84.022 23.599c-13.14 14.581-30.044 25.72-49.176 31.891-10.936 3.538-22.61 5.444-34.726 5.444-12.115 0-23.79-1.906-34.726-5.444-19.143-6.171-36.036-17.31-49.176-31.891z" fill="#d12f19"></path><path d="M388.531 250.264l.143-30.818a42.034 42.034 0 00-1.215-10.245c-4.503-18.215-20.967-31.736-40.575-31.736h-181.29c-19.62 0-36.084 13.521-40.575 31.736a41.138 41.138 0 00-1.227 10.054v52.738c-25.124 0-29.103-39.586-29.103-72.513 0-15.284.858-29.139.858-36.93C95.548 73.562 167.12.238 256.12 0c44.494.119 84.64 18.512 113.66 47.997 29.02 29.484 46.913 70.059 46.913 114.553 0 24.564 8.53 109.443-28.257 109.443l.083-18.25.012-3.479z" fill="#f95428"></path><path d="M156.303 162.55c0-78.596 55.834-144.958 130.193-159.555A159.705 159.705 0 00256.12 0c-89 .238-160.573 73.562-160.573 162.55 0 7.791-.858 21.646-.858 36.93 0 32.927 3.979 72.513 29.103 72.513v-52.738c0-3.467.417-6.838 1.227-10.054 3.724-15.102 15.681-26.969 30.841-30.586.219-6.523.443-12.087.443-16.065z" fill="#e54728"></path><path d="M381.918 227.165l-.131 27.9-.012 2.919h-.345c-.357 22.432-18.643 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-11.27 0-21.479-4.539-28.9-11.901a132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544a113.731 113.731 0 0020.168 1.799c9.661 0 19.037-1.215 27.983-3.502a106.785 106.785 0 006.743-1.942h95.958l.655-.155a42.083 42.083 0 011.214 10.245z" fill="#dba983"></path><path d="M124.281 250.264l-.441.012a84.376 84.376 0 01-.048-3.026V219.255c0-3.467.417-6.838 1.227-10.054l.643.155H221.395c10.936 3.538 22.61 5.444 34.726 5.444 12.115 0 23.79-1.906 34.726-5.444h95.958l.655-.155a42.034 42.034 0 011.215 10.245l-.143 30.818h-.345c-.357 22.432-18.644 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-22.433 0-40.707-18-41.077-40.42z" fill="#a2d6f4"></path><g fill="#999"><path d="M203.227 261.545c-4.934 0-8.935-4-8.935-8.935v-14.319a8.935 8.935 0 0117.87 0v14.319c0 4.935-4 8.935-8.935 8.935zM309.238 261.545c-4.935 0-8.935-4-8.935-8.935v-14.319c0-4.934 3.999-8.935 8.935-8.935s8.935 4 8.935 8.935v14.319a8.934 8.934 0 01-8.935 8.935z"></path></g><path d="M256.233 343.491c-10.436 0-20.248-4.068-27.628-11.457a8.935 8.935 0 0112.642-12.629 21.043 21.043 0 0014.986 6.216c5.662 0 10.99-2.209 15.001-6.22a8.935 8.935 0 0112.634 12.636c-7.386 7.386-17.2 11.454-27.635 11.454z" fill="#d12f19"></path></svg>
            <div class="text-center w-full">
              <span class="text-xs md:text-text-sm">+971563634477</span>
              <span class="text-sm font-semibold block text-center">Ruema</span>
            </div>
            <div>
              <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
            </div>
          </a>

          <a rel="nofollow" href="tel:+97142522122" class="bg- cursor-pointer flex gap-5 group hover:bg-theme3 bg-theme2 items-center mt-5 px-2 py-2 ring-text2 shadow-xl transition">
            <svg class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#e54728" d="M123.869 236.862h264.655v35.131H123.869z"></path><path fill="#dba983" d="M114.637 148.302h283.525v86.57H114.637z"></path><g fill="#2ba5f7"><path d="M149.976 326.482l-.143.155h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512h104.618l100.21-44.232 6.076-88.071c-36.572 0-69.69-14.831-93.658-38.8a133.464 133.464 0 01-12.485-14.415z"></path><path d="M394.284 326.637h-32.129l-.024-.012c-24.147 32.224-62.649 53.072-106.012 53.072l24.898 64.841 1.787 42.29L362.155 512h104.63V399.138c0-40.039-32.462-72.501-72.501-72.501z"></path></g><path d="M149.833 327.286v-.649h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512H86.91V399.138c0-36.79 27.405-67.162 62.923-71.852z" fill="#2197d8"></path><g fill="#f7b239"><path d="M256.119 379.697V512H149.833V335.893l56.443 100.58zM362.155 336.322V512H256.119V379.697l49.843 56.776z"></path></g><path fill="#2ba5f7" d="M247.19 369.487h17.869V512H247.19z"></path><path d="M388.53 250.264l-.012 3.479c-1.322 27.28-10.888 52.381-26.268 72.882-20.156 26.899-50.32 45.876-84.962 51.404a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414 131.888 131.888 0 01-20.395-39.979 132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544 14.009-6.052 24.469-10.459 26.994-10.471 1.156 0 9.363 3.61 21.157 8.768 30.687 13.438 85.76 37.466 104.439 36.048 4.015-.31 6.349-1.787 6.397-4.801l.347-.001z" fill="#ffd3ae"></path><path d="M277.288 378.029a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414c-15.963-21.336-25.624-47.651-26.256-76.206l.441-.012c.369 22.42 18.644 40.42 41.075 40.42h20.704c10.245 28.257 29.174 52.357 53.56 69.058.298.214.631.429.929.643a141.544 141.544 0 0036.74 17.643z" fill="#dba983"></path><path fill="#f7b239" d="M298.697 83.89l-21.289 20.752 5.028 29.305-26.316-13.83-26.315 13.83 5.027-29.305-21.3-20.752 29.425-4.265 13.163-26.661 13.152 26.661z"></path><path d="M172.218 177.465L256 153.866l84.022 23.599c-13.14 14.581-30.044 25.72-49.176 31.891-10.936 3.538-22.61 5.444-34.726 5.444-12.115 0-23.79-1.906-34.726-5.444-19.143-6.171-36.036-17.31-49.176-31.891z" fill="#d12f19"></path><path d="M388.531 250.264l.143-30.818a42.034 42.034 0 00-1.215-10.245c-4.503-18.215-20.967-31.736-40.575-31.736h-181.29c-19.62 0-36.084 13.521-40.575 31.736a41.138 41.138 0 00-1.227 10.054v52.738c-25.124 0-29.103-39.586-29.103-72.513 0-15.284.858-29.139.858-36.93C95.548 73.562 167.12.238 256.12 0c44.494.119 84.64 18.512 113.66 47.997 29.02 29.484 46.913 70.059 46.913 114.553 0 24.564 8.53 109.443-28.257 109.443l.083-18.25.012-3.479z" fill="#f95428"></path><path d="M156.303 162.55c0-78.596 55.834-144.958 130.193-159.555A159.705 159.705 0 00256.12 0c-89 .238-160.573 73.562-160.573 162.55 0 7.791-.858 21.646-.858 36.93 0 32.927 3.979 72.513 29.103 72.513v-52.738c0-3.467.417-6.838 1.227-10.054 3.724-15.102 15.681-26.969 30.841-30.586.219-6.523.443-12.087.443-16.065z" fill="#e54728"></path><path d="M381.918 227.165l-.131 27.9-.012 2.919h-.345c-.357 22.432-18.643 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-11.27 0-21.479-4.539-28.9-11.901a132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544a113.731 113.731 0 0020.168 1.799c9.661 0 19.037-1.215 27.983-3.502a106.785 106.785 0 006.743-1.942h95.958l.655-.155a42.083 42.083 0 011.214 10.245z" fill="#dba983"></path><path d="M124.281 250.264l-.441.012a84.376 84.376 0 01-.048-3.026V219.255c0-3.467.417-6.838 1.227-10.054l.643.155H221.395c10.936 3.538 22.61 5.444 34.726 5.444 12.115 0 23.79-1.906 34.726-5.444h95.958l.655-.155a42.034 42.034 0 011.215 10.245l-.143 30.818h-.345c-.357 22.432-18.644 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-22.433 0-40.707-18-41.077-40.42z" fill="#a2d6f4"></path><g fill="#999"><path d="M203.227 261.545c-4.934 0-8.935-4-8.935-8.935v-14.319a8.935 8.935 0 0117.87 0v14.319c0 4.935-4 8.935-8.935 8.935zM309.238 261.545c-4.935 0-8.935-4-8.935-8.935v-14.319c0-4.934 3.999-8.935 8.935-8.935s8.935 4 8.935 8.935v14.319a8.934 8.934 0 01-8.935 8.935z"></path></g><path d="M256.233 343.491c-10.436 0-20.248-4.068-27.628-11.457a8.935 8.935 0 0112.642-12.629 21.043 21.043 0 0014.986 6.216c5.662 0 10.99-2.209 15.001-6.22a8.935 8.935 0 0112.634 12.636c-7.386 7.386-17.2 11.454-27.635 11.454z" fill="#d12f19"></path></svg>
            <div class="text-center w-full">
              <span class="text-xs md:text-text-sm">+971509222606</span>
              <span class="text-sm font-semibold block text-center">Yuliia</span>
            </div>
            <div>
              <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
            </div>
          </a>
        </div>
    </div>
  </div>

</div>

<div x-data="{open: false}">
<div class="overflow-x-scroll overflow-y-hidden relative w-100 scrolling-touch whitespace-nowrap">
  @include('instagram-basic-feed::instagram-post')
</div>
<template x-if="open" @click.away="open = false">
        <div class="top-0 fixed left-0 z-50 transform"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform -translate-x-24"
        >
        <div class="bg-white h-screen relative transform translate-y-10 w-100">
          <button @click="open=false" type="button" name="button"  class="-top-5 absolute bg-theme2 hover:bg-green-900 dark:text-dark-primary p-2 right-0 rounded-full text-light-primary">
              <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="open ? 'transform rotate-180' : 'transform rotate-0'" class="transition duration-300 ease h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </button>
        <iframe width="320" height="100%" x-bind:src="open" frameborder="0"></iframe>
        </div>
      </div>
    </template>
    </div>
<livewire:layout.cards/>
<livewire:page.news/>


<div class="bg-gray-100 w-full overflow-hidden">
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-7044b135-05a2-4ddf-8d35-6fcd4f9c6129"></div>
</div>
<script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@graph":[
      {
        "@type":"Organization",
        "@id":"https://greenappletravel.ae/#organization",
        "name":"GreenApple Travel and Tourism LLC",
        "url":"https://greenappletravel.ae/",
        "sameAs":
        [
          "https://www.facebook.com/greenappledxb/",
          "https://instagram.com/greenappledxb/",
          "https://twitter.com/greenappledxb/"
        ],
        "logo":
        {
          "@type":"ImageObject",
          "@id":"https://www.greenappletravel.ae/#logo",
          "inLanguage":"en-US",
          "url":"https://greenappletravel.ae/images/gattlogo.png", "contentUrl":"https://greenappletravel.ae/images/gattlogo.png",
          "width":60,
          "height":43,
          "caption":"GreenApple Travel and Tourism LLC"
        },
        "image":{"@id":"https://greenappletravel.ae/#logo"}},
      {
        "@type":"WebSite",
        "@id":"https://greenappletravel.ae/#website",
        "url":"https://greenappletravel.ae/",
        "name":"GreenApple Travel and Tourism",
        "description":"GreenApple Travel and Tourism",
        "publisher":
        {
          "@id":"https://greenappletravel.ae/#organization"
        },
        "potentialAction":
        [
          {
           "@type":"SearchAction",
           "target":
            {
            "@type":"EntryPoint",
            "urlTemplate":"https://greenappletravel.ae/?s=russia+visa+{search_term_string}"
            },
            "query-input":"required name=search_term_string"}],
        "inLanguage":"en-US"
      },
      {
        "@type":"ImageObject",
        "@id":"https://greenappletravel.ae/#primaryimage",
        "inLanguage":"en-US",
        "url":"https://greenappletravel.ae/images/gattlogo.png",
        "contentUrl":"https://greenappletravel.ae/images/gattlogo.png",
        "width":940,
        "height":788
      },{
        "@type":"WebPage",
        "@id":"https://greenappletravel.ae/#webpage",
        "url":"https://greenappletravel.ae/",
        "name":"Russia Visa from Dubai United Arab Emirates Quick & Easy",
        "isPartOf":
        {
          "@id":"https://greenappletravel.ae/#website"
        },
        "primaryImageOfPage":
        {
          "@id":"https://greenappletravel.ae/#primaryimage"
        },
        "datePublished":"2017-08-26T09:05:12+00:00",
        "dateModified":"2021-10-01T20:13:12+00:00",
        "description":"Get Russia Visa from Dubai fast and Easy, No appointment, No Consulate Visit, Easy Documentation, Family Visa Tourist or Business Russia Visa",
        "breadcrumb":{"@id":"https://greenappletravel.ae/#breadcrumb"},
        "inLanguage":"en-US",
        "potentialAction":[{"@type":"ReadAction",
                            "target":["https://greenappletravel.ae/"]}]}
    ]
  }
</script>
<!-- l i ve wire :lay out.body/ -->
<livewire:layout.footer/>

<!-- GTranslate: https://gtranslate.io/ -->


</div>

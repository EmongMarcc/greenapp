<div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 uppercase">
  <?php foreach ($teamwhatsapps as $teamw): ?>
    <?php foreach ($teamw->touristagents as $team): ?>
      <?php if ($team->country_id === $category_id): ?>
      <?php if ($teamw->status === 'Online'): ?>
        <a rel="nofollow" href="tel:{{$teamw->number}}" class="bg-theme2 cursor-pointer flex group hover:bg-theme3 items-center mt-5 px-2 py-2 ring-text2 shadow-xl transition">
          <svg class="w-9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#e54728" d="M123.869 236.862h264.655v35.131H123.869z"/><path fill="#dba983" d="M114.637 148.302h283.525v86.57H114.637z"/><g fill="#2ba5f7"><path d="M149.976 326.482l-.143.155h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512h104.618l100.21-44.232 6.076-88.071c-36.572 0-69.69-14.831-93.658-38.8a133.464 133.464 0 01-12.485-14.415z"/><path d="M394.284 326.637h-32.129l-.024-.012c-24.147 32.224-62.649 53.072-106.012 53.072l24.898 64.841 1.787 42.29L362.155 512h104.63V399.138c0-40.039-32.462-72.501-72.501-72.501z"/></g><path d="M149.833 327.286v-.649h-32.117c-40.051 0-72.501 32.462-72.501 72.501V512H86.91V399.138c0-36.79 27.405-67.162 62.923-71.852z" fill="#2197d8"/><g fill="#f7b239"><path d="M256.119 379.697V512H149.833V335.893l56.443 100.58zM362.155 336.322V512H256.119V379.697l49.843 56.776z"/></g><path fill="#2ba5f7" d="M247.19 369.487h17.869V512H247.19z"/><path d="M388.53 250.264l-.012 3.479c-1.322 27.28-10.888 52.381-26.268 72.882-20.156 26.899-50.32 45.876-84.962 51.404a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414 131.888 131.888 0 01-20.395-39.979 132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544 14.009-6.052 24.469-10.459 26.994-10.471 1.156 0 9.363 3.61 21.157 8.768 30.687 13.438 85.76 37.466 104.439 36.048 4.015-.31 6.349-1.787 6.397-4.801l.347-.001z" fill="#ffd3ae"/><path d="M277.288 378.029a133.254 133.254 0 01-21.05 1.668c-36.572 0-69.69-14.831-93.658-38.8a133.454 133.454 0 01-12.485-14.414c-15.963-21.336-25.624-47.651-26.256-76.206l.441-.012c.369 22.42 18.644 40.42 41.075 40.42h20.704c10.245 28.257 29.174 52.357 53.56 69.058.298.214.631.429.929.643a141.544 141.544 0 0036.74 17.643z" fill="#dba983"/><path fill="#f7b239" d="M298.697 83.89l-21.289 20.752 5.028 29.305-26.316-13.83-26.315 13.83 5.027-29.305-21.3-20.752 29.425-4.265 13.163-26.661 13.152 26.661z"/><path d="M172.218 177.465L256 153.866l84.022 23.599c-13.14 14.581-30.044 25.72-49.176 31.891-10.936 3.538-22.61 5.444-34.726 5.444-12.115 0-23.79-1.906-34.726-5.444-19.143-6.171-36.036-17.31-49.176-31.891z" fill="#d12f19"/><path d="M388.531 250.264l.143-30.818a42.034 42.034 0 00-1.215-10.245c-4.503-18.215-20.967-31.736-40.575-31.736h-181.29c-19.62 0-36.084 13.521-40.575 31.736a41.138 41.138 0 00-1.227 10.054v52.738c-25.124 0-29.103-39.586-29.103-72.513 0-15.284.858-29.139.858-36.93C95.548 73.562 167.12.238 256.12 0c44.494.119 84.64 18.512 113.66 47.997 29.02 29.484 46.913 70.059 46.913 114.553 0 24.564 8.53 109.443-28.257 109.443l.083-18.25.012-3.479z" fill="#f95428"/><path d="M156.303 162.55c0-78.596 55.834-144.958 130.193-159.555A159.705 159.705 0 00256.12 0c-89 .238-160.573 73.562-160.573 162.55 0 7.791-.858 21.646-.858 36.93 0 32.927 3.979 72.513 29.103 72.513v-52.738c0-3.467.417-6.838 1.227-10.054 3.724-15.102 15.681-26.969 30.841-30.586.219-6.523.443-12.087.443-16.065z" fill="#e54728"/><path d="M381.918 227.165l-.131 27.9-.012 2.919h-.345c-.357 22.432-18.643 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-11.27 0-21.479-4.539-28.9-11.901a132.234 132.234 0 01-5.861-36.227l.441-.012c.274 16.463 66.164-12.818 104.916-29.544a113.731 113.731 0 0020.168 1.799c9.661 0 19.037-1.215 27.983-3.502a106.785 106.785 0 006.743-1.942h95.958l.655-.155a42.083 42.083 0 011.214 10.245z" fill="#dba983"/><path d="M124.281 250.264l-.441.012a84.376 84.376 0 01-.048-3.026V219.255c0-3.467.417-6.838 1.227-10.054l.643.155H221.395c10.936 3.538 22.61 5.444 34.726 5.444 12.115 0 23.79-1.906 34.726-5.444h95.958l.655-.155a42.034 42.034 0 011.215 10.245l-.143 30.818h-.345c-.357 22.432-18.644 40.42-41.075 40.42h-42.648c-17.071 0-30.902-13.843-30.902-30.902v-6.028c0-4.777-1.93-9.125-5.075-12.246a17.25 17.25 0 00-12.294-5.075c-9.506.024-17.285 8.327-17.285 17.833v5.504c0 17.071-13.843 30.914-30.914 30.914h-42.636c-22.433 0-40.707-18-41.077-40.42z" fill="#a2d6f4"/><g fill="#999"><path d="M203.227 261.545c-4.934 0-8.935-4-8.935-8.935v-14.319a8.935 8.935 0 0117.87 0v14.319c0 4.935-4 8.935-8.935 8.935zM309.238 261.545c-4.935 0-8.935-4-8.935-8.935v-14.319c0-4.934 3.999-8.935 8.935-8.935s8.935 4 8.935 8.935v14.319a8.934 8.934 0 01-8.935 8.935z"/></g><path d="M256.233 343.491c-10.436 0-20.248-4.068-27.628-11.457a8.935 8.935 0 0112.642-12.629 21.043 21.043 0 0014.986 6.216c5.662 0 10.99-2.209 15.001-6.22a8.935 8.935 0 0112.634 12.636c-7.386 7.386-17.2 11.454-27.635 11.454z" fill="#d12f19"/></svg>
          <div class="text-center w-full">
            <span class="text-xs md:text-text-sm">+{{$teamw->number}}</span>
            <span class="text-sm font-semibold text-white block text-center">{{$teamw->name}}</span>
          </div>
          <div>
            <i class="fa fa-chevron-right opacity-0 group-hover:opacity-100 transform -translate-x-1 group-hover:translate-x-0 block transition"></i>
          </div>
        </a>
      <?php endif; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>

</div>

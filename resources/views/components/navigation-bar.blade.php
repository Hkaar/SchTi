<header {{ $attributes->twMerge(["class" => "sticky top-0 flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700"]) }}>
  <nav class="relative container w-full mx-auto lg:flex lg:items-center lg:justify-between lg:gap-3 py-3 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center gap-x-2">
      <a class="flex items-center gap-3 font-bold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white md:whitespace-nowrap" href="{{ auth()->check() ? route('home') : route('/') }}" aria-label="Brand">
        @if (isset($settings['org_logo']))
          <img src="{{ Storage::url($settings['org_logo']) }}" alt="" srcset="" class="size-10 aspect-square object-contain inline-block">
        @endif

        {{ isset($settings['org_name']) ? $settings['org_name'] : 'Brand' }}
      </a>

      <!-- Collapse Button -->
      <button type="button" class="hs-collapse-toggle lg:hidden relative size-9 flex justify-center items-center font-medium text-[12px] rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="navbar-collapse"  aria-expanded="false" aria-controls="navbar" aria-label="Toggle navigation"  data-hs-collapse="#navbar" >
        <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
        <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        <span class="sr-only">Toggle navigation</span>
      </button>
      <!-- End Collapse Button -->
    </div>

    <!-- Collapse -->
    <div id="navbar" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block "  aria-labelledby="navbar-collapse" >
      <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        <div class="py-2 lg:py-0  flex flex-col lg:flex-row lg:items-center gap-0.5 lg:gap-1">
          <div class="grow">
            <div class="flex flex-col lg:flex-row lg:justify-end lg:items-center gap-0.5 lg:gap-1">
              @if ($active === '/')
                <a class="p-2 font-semibold flex gap-2 items-center text-sm bg-gray-100 text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="{{ auth()->check() ? route('home') : route('/') }}" aria-current="page">
                  <div class="grid place-items-center lg:hidden">
                    <i class="material-symbols-outlined font-var-light shrink-0">home</i>
                  </div>

                  Beranda
                </a>
              @else
                <a class="p-2 flex items-center gap-2 text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="{{ route('/') }}">
                  <div class="grid place-items-center lg:hidden">
                    <i class="material-symbols-outlined font-var-light shrink-0">home</i>
                  </div>

                  Beranda
                </a>
              @endif

              <div class="hs-dropdown [--strategy:static] lg:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] lg:[--is-collapse:false] ">
                <button id="hs-header-base-mega-menu-small" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center gap-2 text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                  <div class="grid place-items-center lg:hidden">
                    <i class="material-symbols-outlined font-var-light">info</i>
                  </div>

                  Tentang Kami
                  <svg class="hs-dropdown-open:-rotate-180 lg:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto lg:ms-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative lg:w-80 hidden z-10 top-full md:bg-white lg:rounded-lg lg:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:md:bg-neutral-800" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-mega-menu-small">
                  <div class="py-1 md:px-1 space-y-0.5">
                    <x-dropdown-menu to="{{ $active === 'about' ? '#' : route('about') }}" :active="$active === 'about'">
                      <i class="material-symbols-outlined font-var-light">info</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Profil Sekolah</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Profil sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'about.facilities' ? '#' : route('about.facilities') }}" :active="$active === 'about.facilities'">
                      <i class="material-symbols-outlined font-var-light">business</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Fasilitas Sekolah</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Fasilitas yang tersedia di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'about.majors' ? '#' : route('about.majors') }}" :active="$active === 'about.majors'">
                      <i class="material-symbols-outlined font-var-light">category</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Kompetensi Keahlian</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Kompetensi keahlian yang tersedia di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'about' ? '#' : route('about') }}" :active="$active === 'about.yayasan'">
                      <i class="material-symbols-outlined font-var-light">handshake</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Yayasan</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Tentang yayasan yang menaungi sekolah</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'about.staff' ? '#' : route('about.staff') }}" :active="$active === 'about.staff'">
                      <i class="material-symbols-outlined font-var-light">group</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Managemen & Guru</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Tentang staff & guru yang ada di sekolah</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'about.staff' ? '#' : route('about.staff') }}" :active="$active === 'about.staff'">
                      <i class="material-symbols-outlined font-var-light">account_tree</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Struktur Organisasi</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Struktur organisasi yang ada di sekolah</p>
                      </div>
                    </x-dropdown-menu>
                  </div>
                </div>
              </div>

              <div class="hs-dropdown [--strategy:static] lg:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] lg:[--is-collapse:false] ">
                <button id="hs-header-base-mega-menu-small" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center gap-2 text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                  <div class="grid place-items-center lg:hidden">
                    <i class="material-symbols-outlined font-var-light">group</i>
                  </div>

                  Kesiswaan
                  <svg class="hs-dropdown-open:-rotate-180 lg:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto lg:ms-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative lg:w-80 hidden z-10 top-full md:bg-white lg:rounded-lg lg:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:md:bg-neutral-800" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-mega-menu-small">
                  <div class="py-1 md:px-1 space-y-0.5">
                    <x-dropdown-menu to="{{ $active === 'student-affairs.student-org' ? '#' : route('student-affairs.student-org') }}" :active="$active === 'student-affairs.student-org'">
                      <i class="material-symbols-outlined font-var-light">group</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">MPK & OSIS</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Tentang MPK & OSIS di sekolah</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'student-affairs.awards' ? '#' : route('student-affairs.awards') }}" :active="$active === 'student-affairs.awards'">
                      <i class="material-symbols-outlined font-var-light">trophy</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Prestasi</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Prestasi yang didapatkan oleh sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'student-affairs' ? '#' : route('student-affairs') }}" :active="$active === 'student-affairs.loans'">
                      <i class="material-symbols-outlined font-var-light">money_bag</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Beasiswa</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Tentang beasiswa terkait dengan sekolah</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'student-affairs.clubs' ? '#' : route('student-affairs.clubs') }}" :active="$active === 'student-affairs.clubs'">
                      <i class="material-symbols-outlined font-var-light">grid_view</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Ekstrakurikuler</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Ekstrakurikuler di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'student-affairs.counsellor' ? '#' : route('student-affairs.counsellor') }}" :active="$active === 'student-affairs.counsellor'">
                      <i class="material-symbols-outlined font-var-light">account_balance</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Bimbingan Konseling</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Bimbingan konseling sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'student-affairs.counsellor' ? '#' : route('student-affairs.counsellor') }}" :active="$active === 'student-affairs.doc'">
                      <i class="material-symbols-outlined font-var-light">article</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Tata Tertib</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Tata tertib yang berlaku di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>
                  </div>
                </div>
              </div>

              <div class="hs-dropdown [--strategy:static] lg:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] lg:[--is-collapse:false] ">
                <button id="hs-header-base-mega-menu-small" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center gap-2 text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                  <div class="grid place-items-center lg:hidden">
                    <i class="material-symbols-outlined font-var-light">handshake</i>
                  </div>

                  Humas
                  <svg class="hs-dropdown-open:-rotate-180 lg:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto lg:ms-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative lg:w-80 hidden z-10 top-full md:bg-white lg:rounded-lg lg:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:md:bg-neutral-800" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-mega-menu-small">
                  <div class="py-1 md:px-1 space-y-0.5">
                    <x-dropdown-menu to="{{ $active === 'public-relations' ? '#' : route('public-relations') }}" :active="$active === 'public-relations.partnerships'">
                      <i class="material-symbols-outlined font-var-light">Handshake</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Kerjasama</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Badan yang bekerja sama dengan sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'public-relations' ? '#' : route('public-relations') }}" :active="$active === 'public-relations.industry'">
                      <i class="material-symbols-outlined font-var-light">business</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Prakerin / PKL</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Tentang program kerja lapangan yang ada di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'public-relations' ? '#' : route('public-relations') }}" :active="$active === 'public-relations.trips'">
                      <i class="material-symbols-outlined font-var-light">map</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Kunjungan Industri</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Kunjungan industri di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'public-relations' ? '#' : route('public-relations') }}" :active="$active === 'public-relations.ppks'">
                      <i class="material-symbols-outlined font-var-light">grid_view</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">PPKS</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">PPKS di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'public-relations.alumni' ? '#' : route('public-relations.alumni') }}" :active="$active === 'public-relations.alumni'">
                      <i class="material-symbols-outlined font-var-light">school</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Alumni</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Siswa alumni dari sekolah kami</p>
                      </div>
                    </x-dropdown-menu>

                    <div class="my-2 border-t border-gray-100 dark:border-neutral-800"></div>

                    <x-dropdown-menu to="{{ $active === 'public-relations' ? '#' : route('public-relations') }}" :active="$active === 'public-relations.doc'">
                      <i class="material-symbols-outlined font-var-light">article</i>

                      <div class="grow">
                        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">Bursa Kerja Khusus</span>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">Bursa kerja khusus di sekolah kami</p>
                      </div>
                    </x-dropdown-menu>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="my-2 lg:my-0 lg:mx-2">
            <div class="w-full h-px lg:w-px lg:h-4 bg-gray-100 lg:bg-gray-300 dark:bg-neutral-700"></div>
          </div>

          <!-- Button Group -->
          @auth
            <div class="hs-dropdown relative inline-flex">
              <button id="hs-dropdown-default" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-white text-gray-800 shadow-sm focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <img src="{{ auth()->user()->profile_photo ? Storage::url( auth()->user()->profile_photo ) : Vite::asset('resources/images/default-avatar.png') }}" alt="Gambar tidak dapat dimuatkan" class="size-10 aspect-square rounded-full object-cover">

                <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
              </button>

              <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-dividers">
                <div class="p-1 space-y-0.5">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                    <i class="material-symbols-outlined font-var-light">event_note</i>
                    Kalender kegiatan
                  </a>
                </div>
                <div class="p-1 space-y-0.5">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                    <i class="material-symbols-outlined font-var-light">settings</i>
                    Pengaturan akun
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-red-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-red-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="{{ route('logout') }}">
                    <i class="material-symbols-outlined font-var-light">logout</i>
                    Keluar
                  </a>
                </div>
              </div>
            </div>
          @endauth

          @guest
            <div class=" flex flex-wrap items-center gap-x-1.5">
              <a class="py-[7px] px-2.5 inline-flex items-center font-medium text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 focus:outline-none focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                href="{{ route('login') }}">
                Masuk
              </a>
              <a class="py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-lg bg-secondary text-white hover:opacity-90 focus:outline-none focus:opacity-90 disabled:opacity-50 disabled:pointer-events-none dark:bg-secondary-dark dark:hover:bg-secondary dark:focus:bg-secondary" href="#">
                Daftar
              </a>
            </div>
          @endguest
          <!-- End Button Group -->
        </div>
      </div>
    </div>
    <!-- End Collapse -->
  </nav>
</header>
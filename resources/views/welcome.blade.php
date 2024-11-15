@extends('layouts.app')

@section('title', 'SMK TI Bali Global Badung')

@section('content')
  <x-navigation-bar active="/"></x-navigation-bar>

  <section id="hero" class="flex min-h-[38rem] lg:min-h-[48rem]">
    <div class="container flex flex-1 items-center justify-between gap-6">
      <div class="flex flex-1 flex-col gap-8">
        <div class="flex flex-col gap-4">
          <h1 class="text-6xl font-bold tracking-tight lg:text-7xl">
            {{ isset($settings['org_name']) ? $settings['org_name'] : 'Brand' }}
          </h1>

          <h4 class="text-xl font-medium tracking-wide text-gray-400">
            Menyiapkan Generasi dengan Keahlian Teknologi Terkini
          </h4>
        </div>

        <div class="flex items-center gap-2">
          <x-link-button to="#"
            class="border-2 border-tertiary bg-transparent px-4 py-3 text-base-dark hover:bg-tertiary hover:text-base-light">
            Punya Pertanyaan ?
          </x-link-button>

          <x-link-button to="#" class="bg-primary py-3 pe-3 ps-4">
            Daftar Sekarang

            <i class="material-symbols-outlined font-var-light">arrow_right_alt</i>
          </x-link-button>
        </div>

        <div class="flex items-center gap-2 font-medium">
          <i class="material-symbols-outlined font-var-light animate-float-down" style="font-size: 28px">arrow_cool_down</i>

          Scroll ke bawah untuk lebih banyak
        </div>
      </div>

      <div class="hidden flex-1 place-items-center lg:grid">
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Gambar tidak dapat dimuatkan"
          class="size-3/4 block aspect-square object-contain">
      </div>
    </div>
  </section>

  <section id="reasons" class="py-16">
    <div class="container flex flex-col items-center gap-12">
      <div class="flex flex-col gap-5 text-center">
        <h3 class="text-4xl font-bold md:text-5xl lg:text-6xl">Mengapa memilih kita?</h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Mengapa memilih SMK TI Bali Global Badung dibandingkan sekolah lain?
        </p>
      </div>

      <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
        <x-card class="gap-3 border-l-8 border-l-secondary shadow-md slide-up">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">handshake</i>

            <span class="font-semibold">Kerjasama</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Banyak kerjasama dengan Lembaga, Dunia Usaha dan Dunia Industri di dalam dan luar negeri sehingga memperluas
            kesempatan untuk langsung bekerja.
          </p>
        </x-card>

        <x-card class="gap-3 border-l-8 border-l-secondary shadow-md slide-up">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">group</i>

            <span class="font-semibold">Guru Pengajar</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Para guru terdiri gabungan akademis dan praktisi pendidikan S1, S2 yang berpengalaman di dunia pendidikan dan
            ilmu produktif.
          </p>
        </x-card>

        <x-card class="gap-3 border-l-8 border-l-secondary shadow-md slide-up">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">business</i>

            <span class="font-semibold">Fasilitas Lengkap</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Free Wifi, Laboratorium, Studio Multimedia, LCD Proyektor, Kantin, Ruang Unit Produksi, Ruang Podcast,
            Lapangan Volley, dan masih banyak fasilitas lainnya.
          </p>
        </x-card>

        <x-card class="gap-3 border-l-8 border-l-secondary shadow-md slide-up">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">category</i>

            <span class="font-semibold">Ekstrakurikuler</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Tersedia banyak kegiatan ekstrakurikuler untuk berbagai kesukaan dari Bahasa Jepang sampai Bulu Tangkis
          </p>
        </x-card>

        <x-card class="gap-3 border-l-8 border-l-secondary shadow-md slide-up">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">money_bag</i>

            <span class="font-semibold">Beasiswa</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Disediakan banyak beasiswa dari sekolah untuk siswa berprestasi.
          </p>
        </x-card>

        <x-card class="gap-3 border-l-8 border-l-secondary shadow-md slide-up">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">school</i>

            <span class="font-semibold">Gudang Prestasi</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Mempunyai banyak prestasi akademik dan non akademik, baik di tingkat Kabupaten, Provinsi, hingga Nasional.
          </p>
        </x-card>
      </div>
    </div>
  </section>

  <section id="majors" class="py-16">
    <div class="container flex flex-col items-center gap-12">
      <div class="flex flex-col gap-3 text-center">
        <h3 class="text-4xl font-bold md:text-5xl lg:text-6xl">
          Kompetensi Keahlian
        </h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Sekolah kami memiliki kompetensi yang relevan di dunia IT saat ini
        </p>
      </div>

      <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        <x-side-image-card title="Desain Komunikasi Visual" to="{{ route('about.majors') }}"
          src="{{ Vite::asset('resources/images/bg1.jpg') }}" class="shadow-md slide-left">
          <p class="dark:text-neutral-400 mt-1 line-clamp-3 text-gray-500">
            Membekali peserta didik dengan kompetensi dalam pengoperasian software ilustrasi digital, imaging digital,
            desain web, serta pengoperasian software dan periferal untuk audio digital, video digital, dan efek visual.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Pengembangan Perangkat Lunak dan Game" to="{{ route('about.majors') }}"
          src="{{ Vite::asset('resources/images/bg2.png') }}" class="shadow-md slide-right">
          <p class="dark:text-neutral-400 mt-1 line-clamp-3 text-gray-500">
            Membekali peserta didik dengan keterampilan pemrograman Stand Alone, Multi User, dan Web Programming.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Teknik Jaringan Komputer dan Telekomunikasi" to="{{ route('about.majors') }}"
          src="{{ Vite::asset('resources/images/bg3.jpg') }}" class="shadow-md slide-left">
          <p class="dark:text-neutral-400 mt-1 line-clamp-3 text-gray-500">
            Membekali peserta didik dengan kemampuan merancang dan mengelola jaringan komputer yang aman, termasuk
            perlindungan data, subneting, routing, dan pengaturan internet. Lulusan dapat berkarir sebagai Network
            Engineer, Administrator Jaringan, Spesialis Keamanan, dan Analis Keamanan Siber.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Bisnis Digital" to="{{ route('about.majors') }}"
          src="{{ Vite::asset('resources/images/bg4.jpg') }}" class="shadow-md slide-right">
          <p class="dark:text-neutral-400 mt-1 line-clamp-3 text-gray-500">
            Mengajarkan pemanfaatan teknologi digital dalam operasi bisnis, termasuk Analisis Pasar, E-Commerce,
            Pengembangan Aplikasi, Analisis Big Data, serta Keamanan dan Etika Bisnis Digital.
          </p>
        </x-side-image-card>
      </div>
    </div>
  </section>

  <section id="posts" class="py-16">
    <div class="container flex flex-col items-center gap-12">
      <div class="flex flex-col gap-3 text-center">
        <h3 class="text-4xl font-bold md:text-5xl lg:text-6xl">
          Kegiatan terkini
        </h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Lihatlah kegiatan terbaru dari sekolah kami
        </p>
      </div>

      <div class="flex flex-col items-center gap-5">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
          <x-post-card :categories="['Acara', 'External']"
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhKwhvX3V7qKKmpBrio3aj7gy1ZAuKMELpFG5sd8SlgmSa8WZHx-QUu19-KTKe-SIgYOrpcxjHuUbX22lYUUJTBz5mWz5hf-m_y_a9kBu1hwTIXFFQcOrBOAFT5niJwUzjO6hU2UDMCwEbr4CPfAqZji0DZXWA_B8mFNsNRo1q63U9PNnDcMsYiqLEJgMn_/w380/IMG_0595.JPG"
            title="Serunya Eksplorasi AI dan Robotika: Tarik Minat Puluhan Siswa SMP" date="November, 12 2024"
            user="Admin" class="slide-up">
            Pada hari Selasa, 12 November 2024, SMK TI Bali Global Badung menggelar acara talkshow dalam rangka
            memperingati Hari Ulang Tahun (HUT) ke-8 sekolah tersebut.
          </x-post-card>

          <x-post-card :categories="['Acara', 'HUT', 'Sekolah']"
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvf-rN6FZLIUsDbjnXgPEfdCSuLArzf2gkvuP4-oiK_gON48j5-_vAAcmwywURkeBI0wfsyT4ng53xHeIO7K4Lkwvgu9Z5b2J0XKcsurJjcq4aD0LrUT7tIN5uwHHBUPNdjS8nCijBiKCtb87QB0aHjfOaWthkUPUCFqa8ukWNB87m-NFvQ1enoA9AYIXf/w380/IMG_0144.JPG"
            title="Meriah dan Penuh Kreasi! Pembukaan HUT ke-8 SMK TI Bali Global Badung" date="November 13, 2024"
            user="Admin" class="slide-up">
            SMK TI Bali Global Badung menggelar acara pembukaan HUT ke-8 pada Senin, 11 November 2024, dengan semarak dan
            antusiasme tinggi
          </x-post-card>

          <x-post-card :categories="['Lomba', 'Volly']"
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhLfd0VjtOrWdvfldJOTXPs6qJ11Z-4TnVQOzuy0OtNTRtwZVlPy90-Ge89HY1I8kGFDEbJrc1CwDJO3QPkpypq2cXiW4hstiYLu0dfTqdHiX6l7vpy7CsGJY7VwK4cu0RLhFRDsZ0QvUMYivcDX7zwPRfoUKFwU0oLisgjYhRfvoxnhfbKaPS6I-BDjQTS/w380/IMG_9256.JPG"
            title="Pertandingan final Volleyball Competition dalam rangka HUT ke-8 SMK TI Bali Global Badung telah usai"
            date="November 10, 2024" user="Admin" class="slide-up">
            Pertandingan final Volleyball Competition dalam rangka HUT ke-8 SMK TI Bali Global Badung telah usai
          </x-post-card>

          <x-post-card :categories="['Lomba', 'Volly']"
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtz2iK6KMeplVXY70qQduYaCf0aVm2gQ9xfDWwhyphenhyphenIDPCCyFogwvsDjEn1WUaT0yelASPSQafR3MyB17fAMW_DmlWiJ5LC7YFCxx5ZP4KrdUa6-z35Z_xybzPSFttTgObzC-3_LfbPDWGQJCGEav00p9OSvDK31MxGg61hoSsnf9WpyjX8A9RGY7vliznic/w400-h266/IMG_9132.JPG"
            title="Semifinal Volleyball Competition HUT ke-8 SMK TI Bali Global Badung Berlangsung Sengit"
            date="November 09, 2024" user="Admin" class="slide-up">
            Suasana kompetisi Volleyball Competition dalam rangka HUT ke-8 SMK TI Bali Global Badung semakin memanas
          </x-post-card>

          <x-post-card :categories="['Lomba', 'Volly']"
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg27gWPMOf61o-x2clS0iIoY6-_B5MyCPf4rer-kWj1UDIBG2M81Sa7fccGyoCR9VwAoYImQ5qcLZJ4JvV0ua4dtrBjBNhpBLhLvKA6_T1vyTwoBheKX6LINC1R9_EokBFuD9iJf93shvA7ZYAsOqOmNODUnRB0jQb_kabJjJvkVy91V_r61WJLzbLjjgHm/w400-h266/IMG_8836.JPG"
            title="Debar Volley Competition Antar SMP se-Bali Hari Ke enam, Perebutkan Semi Final"
            date="November 08, 2024" user="Admin" class="slide-up">
            Turnamen Volley Competition antar-SMP se-Bali yang diadakan di SMK TI Bali Global Badung telah memasuki hari
            keenam pada Kamis, 7 November 2024, dengan atmosfer yang semakin meriah
          </x-post-card>

          <x-post-card :categories="['Umum', 'PKL']"
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgEJi3xLhxPwLedKxRBIdOtlyaCtL2Ww4x9RI4b9PND5kxeSTvyQJLmMpkSMCXp7zJQLQRoxG3SvrN60GVHYwUnbvA_l5x3xrwEoge_M_lm9muFdJWGrDhiP6qM-laX1N4aL0FD307-ciBHfq6DQXgIz5ZFUXsHfJWcWFoHZoKyGCp1hc9awKmHcUntcNAh/w400-h300/WhatsApp%20Image%202024-11-06%20at%2014.14.07_ee5a5d01.jpg"
            title="Upaya Optimalisasi Pengalaman Kerja Siswa di Perusahaan" date="November 06, 2024" user="Admin" class="slide-up">
            SMK TI Bali Global Badung terus menjalankan komitmennya dalam memastikan pengalaman Praktik Kerja Lapangan
            (PKL) siswa berjalan optimal melalui kegiatan monitoring rutin
          </x-post-card>
        </div>

        <x-link-button to="#" class="bg-secondary">
          Lihat postingan lain
          <i class="material-symbols-outlined font-var-light">arrow_right_alt</i>
        </x-link-button>
      </div>
    </div>
  </section>

  <section id="testimonies" class="py-16">
    <div class="container flex flex-col items-center gap-12">
      <div class="flex flex-col gap-3 text-center">
        <h3 class="text-4xl font-bold md:text-5xl lg:text-6xl">
          Testimoni
        </h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Lihatlah apa yang dipikirkan oleh mereka tentang sekolah kami
        </p>
      </div>

      <div class="flex flex-col items-center gap-5">
        <div class="grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3">
          <x-testimony
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiaUlWlYbkFaTg_aWzOE-EgHrsrOM2NhGKvabNeSL3KurxXm-frw6nVhxRFg48szchpkzBZ435_1u4_GtJJbZznMzFrnH4F6e3RqxUSJMO5xyDQyfyHMnnUV0QhHNUWsLkGXJgAk4LsIKCS/s472/Hatta+Afdillah+Syahfar.jpg"
            user="Hatta Afdillah Syahfar" occupation="Alumni Berprestasi" class="slide-left">
            Tempat saya mengembangkan passion di bidang IT. Sukses selalu untuk Globaliti Badung!
          </x-testimony>

          <x-testimony
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgm1Lm9AkpQGfD2vspR4jpcTpQa2b-KvMsoybCl496W1w7xvUn_uXeYHq3S6jCc-lxRCu_qvziffELalZ91_9I30E-e05uC4NFCqh7d746n9eY-9IaoyJOwHyvcslC1OU3LuTQ9TT4XERkz/s1600/Slide1.PNG"
            user="Muqoroba Lada Sattar" occupation="Alumni Berprestasi" class="slide-up">
            Teori dibutuhkan, tetapi skill yang menentukan. Pelajari itu semua di SMK TI Bali Global Badung
          </x-testimony>

          <x-testimony
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgAGMgRepHzwwv0crmKXKBI77gzCYnjGRpxakM5BHPeYDuGwm2qFk5MzunA08y_ZVKqi60JUwBWag8GWRgGn5mC7Rz0M43Sbq9nWvG7lVYPfWA2nZmMjqhE_DQqvVCe43i30YKxDRhAldcD/s650/Gusti+Ayu+Putu+Kesari+Purnama+Yani.jpg"
            user="Gusti Ayu Putu Kesari Purnama Yani" occupation="Alumni Berprestasi" class="slide-right">
            Budi pekerti dan agama dikedepankan sehingga bisa melahirkan generasi berpengetahuan sekaligus berbudi luhur
          </x-testimony>
        </div>

        <div class="flex items-center justify-center">
          <x-link-button to="#" class="bg-secondary">
            Lihat testimoni lain
            <i class="material-symbols-outlined font-var-light">arrow_right_alt</i>
          </x-link-button>
        </div>
      </div>
    </div>
  </section>

  <section id="business" class="flex min-h-[24rem] bg-gray-50 py-16">
    <div class="container flex flex-1 flex-col items-center justify-center gap-12">
      <div class="flex flex-wrap items-center justify-center gap-10">
        @foreach (App\Models\PartnerShip::inRandomOrder()->limit(10)->get() as $item)
          <div class="grid place-items-center">
            <img src="{{ Storage::url($item->logo) }}" alt="Gambar tidak dapat dimuatkan"
              class="size-20 object-contain">
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <x-footer></x-footer>
@endsection

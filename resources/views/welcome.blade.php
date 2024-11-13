@extends('layouts.app')

@section('title', 'SMK TI Bali Global Badung')

@section('content')
  <x-navigation-bar active="/"></x-navigation-bar>

  <section id="hero" class="flex min-h-[38rem] lg:min-h-[48rem]">
    <div class="container flex flex-1 items-center justify-between gap-6">
      <div class="flex flex-1 flex-col gap-8">
        <div class="flex flex-col gap-4">
          <h1 class="text-6xl lg:text-7xl font-bold tracking-tight">
            {{ isset($settings['org_name']) ? $settings['org_name'] : 'Brand' }}
          </h1>

          <h4 class="text-xl font-medium tracking-wide text-gray-400">
            Menyiapkan Generasi dengan Keahlian Teknologi Terkini
          </h4>
        </div>

        <div class="flex items-center gap-2">
          <x-link-button to="#" class="border-tertiary text-base-dark bg-transparent hover:bg-tertiary border-2 hover:text-base-light py-3 px-4">
            Mau tau lebih lanjut ?
          </x-link-button>

          <x-link-button to="#" class="bg-primary py-3 pe-3 ps-4">
            Daftar Sekarang

            <i class="material-symbols-outlined font-var-light">arrow_right_alt</i>
          </x-link-button>
        </div>
      </div>

      <div class="lg:grid flex-1 place-items-center hidden">
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Gambar tidak dapat dimuatkan"
          class="size-3/4 block aspect-square object-contain">
      </div>
    </div>
  </section>

  <section id="reasons" class="py-16">
    <div class="container flex flex-col items-center gap-12">
      <div class="flex flex-col gap-5 text-center">
        <h3 class="text-4xl md:text-5xl lg:text-6xl font-bold">Mengapa memilih kita?</h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Mengapa memilih SMK TI Bali Global Badung dibandingkan sekolah lain?
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
        <x-card class="border-l-8 border-l-secondary gap-3">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">handshake</i>

            <span class="font-semibold">Kerjasama</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Banyak kerjasama dengan Lembaga, Dunia Usaha dan Dunia Industri di dalam dan luar negeri sehingga memperluas
            kesempatan untuk langsung bekerja.
          </p>
        </x-card>

        <x-card class="border-l-8 border-l-secondary gap-3">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">group</i>

            <span class="font-semibold">Guru Pengajar</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Para guru terdiri gabungan akademis dan praktisi pendidikan S1, S2 yang berpengalaman di dunia pendidikan dan
            ilmu produktif.
          </p>
        </x-card>

        <x-card class="border-l-8 border-l-secondary gap-3">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">business</i>

            <span class="font-semibold">Fasilitas Lengkap</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Free Wifi, Laboratorium, Studio Multimedia, LCD Proyektor, Kantin, Ruang Unit Produksi, Ruang Podcast,
            Lapangan Volley, dan masih banyak fasilitas lainnya.
          </p>
        </x-card>

        <x-card class="border-l-8 border-l-secondary gap-3">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">category</i>

            <span class="font-semibold">Ekstrakurikuler</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Tersedia banyak kegiatan ekstrakurikuler untuk berbagai kesukaan dari Bahasa Jepang sampai Bulu Tangkis
          </p>
        </x-card>

        <x-card class="border-l-8 border-l-secondary gap-3">
          <div class="flex items-center gap-3 text-2xl">
            <i class="material-symbols-outlined font-var-light">money_bag</i>

            <span class="font-semibold">Beasiswa</span>
          </div>

          <p class="tracking-wider text-neutral-500">
            Disediakan banyak beasiswa dari sekolah untuk siswa berprestasi.
          </p>
        </x-card>

        <x-card class="border-l-8 border-l-secondary gap-3">
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
        <h3 class="text-4xl md:text-5xl lg:text-6xl font-bold">
          Kompetensi Keahlian
        </h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Sekolah kami memiliki kompetensi yang relevan di dunia IT saat ini
        </p>
      </div>

      <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
        <x-side-image-card title="Desain Komunikasi Visual" to="#" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
            Membekali peserta didik dengan kompetensi dalam pengoperasian software ilustrasi digital, imaging digital, desain web, serta pengoperasian software dan periferal untuk audio digital, video digital, dan efek visual.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Pengembangan Perangkat Lunak dan Game" to="#" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
            Membekali peserta didik dengan keterampilan pemrograman Stand Alone, Multi User, dan Web Programming.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Teknik Jaringan Komputer dan Telekomunikasi" to="#" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
            Membekali peserta didik dengan kemampuan merancang dan mengelola jaringan komputer yang aman, termasuk perlindungan data, subneting, routing, dan pengaturan internet. Lulusan dapat berkarir sebagai Network Engineer, Administrator Jaringan, Spesialis Keamanan, dan Analis Keamanan Siber.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Bisnis Digital" to="#" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
            Mengajarkan pemanfaatan teknologi digital dalam operasi bisnis, termasuk Analisis Pasar, E-Commerce, Pengembangan Aplikasi, Analisis Big Data, serta Keamanan dan Etika Bisnis Digital.
          </p>
        </x-side-image-card>
      </div>
    </div>
  </section>

  <section id="posts" class="py-16">
    <div class="container flex flex-col items-center gap-12">
      <div class="flex flex-col gap-3 text-center">
        <h3 class="text-4xl md:text-5xl lg:text-6xl font-bold">
          Kegiatan terkini
        </h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Lihatlah kegiatan terbaru dari sekolah kami
        </p>
      </div>

      <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
        <x-post-card :categories="['Lomba', 'Event', 'Hari Nasional']" title="Lomba-lomba 17 Agustus" date="16 Agustus 2024" user="Admin">
          Pada 17 agustus 2024, di SMK TI Bali Global Badung kami merayakan hari raya nasional kemerdekaan Indonesia
          dengan mengadakan berbagai lomba untuk menyemangati dan meningkatkan patriotisme dari warga sekolah kami
        </x-post-card>

        <x-post-card :categories="['Lomba', 'Event', 'Hari Nasional']" title="Lomba-lomba 17 Agustus" date="16 Agustus 2024" user="Admin">
          Pada 17 agustus 2024, di SMK TI Bali Global Badung kami merayakan hari raya nasional kemerdekaan Indonesia
          dengan mengadakan berbagai lomba untuk menyemangati dan meningkatkan patriotisme dari warga sekolah kami
        </x-post-card>

        <x-post-card :categories="['Lomba', 'Event', 'Hari Nasional']" title="Lomba-lomba 17 Agustus" date="16 Agustus 2024" user="Admin">
          Pada 17 agustus 2024, di SMK TI Bali Global Badung kami merayakan hari raya nasional kemerdekaan Indonesia
          dengan mengadakan berbagai lomba untuk menyemangati dan meningkatkan patriotisme dari warga sekolah kami
        </x-post-card>

        <x-post-card :categories="['Lomba', 'Event', 'Hari Nasional']" title="Lomba-lomba 17 Agustus" date="16 Agustus 2024" user="Admin">
          Pada 17 agustus 2024, di SMK TI Bali Global Badung kami merayakan hari raya nasional kemerdekaan Indonesia
          dengan mengadakan berbagai lomba untuk menyemangati dan meningkatkan patriotisme dari warga sekolah kami
        </x-post-card>

        <x-post-card :categories="['Lomba', 'Event', 'Hari Nasional']" title="Lomba-lomba 17 Agustus" date="16 Agustus 2024" user="Admin">
          Pada 17 agustus 2024, di SMK TI Bali Global Badung kami merayakan hari raya nasional kemerdekaan Indonesia
          dengan mengadakan berbagai lomba untuk menyemangati dan meningkatkan patriotisme dari warga sekolah kami
        </x-post-card>

        <x-post-card :categories="['Lomba', 'Event', 'Hari Nasional']" title="Lomba-lomba 17 Agustus" date="16 Agustus 2024" user="Admin">
          Pada 17 agustus 2024, di SMK TI Bali Global Badung kami merayakan hari raya nasional kemerdekaan Indonesia
          dengan mengadakan berbagai lomba untuk menyemangati dan meningkatkan patriotisme dari warga sekolah kami
        </x-post-card>
      </div>

      <div class="flex items-center justify-center">
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
        <h3 class="text-4xl md:text-5xl lg:text-6xl font-bold">
          Testimoni
        </h3>

        <p class="text-lg font-medium tracking-wide text-gray-400">
          Lihatlah apa yang dipikirkan oleh mereka tentang sekolah kami
        </p>
      </div>

      <div class="flex flex-col gap-4 items-center">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
          <x-testimony user="Hatta Afdillah Syahfar" occupation="Alumni Berprestasi">
            Tempat saya mengembangkan passion di bidang IT. Sukses selalu untuk Globaliti Badung!
          </x-testimony>
  
          <x-testimony user="Muqoroba Lada Sattar" occupation="Alumni Berprestasi">
            Teori dibutuhkan, tetapi skill yang menentukan. Pelajari itu semua di SMK TI Bali Global Badung
          </x-testimony>
  
          <x-testimony user="Gusti Ayu Putu Kesari Purnama Yani" occupation="Alumni Berprestasi">
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

  <section id="business" class="py-16">
    <div class="container flex flex-col items-center gap-12">
      <div class="flex flex-wrap items-center justify-center gap-10">
        @foreach (App\Models\PartnerShip::inRandomOrder()->limit(10)->get() as $item)
          <div class="grid place-items-center">
            <img src="{{ Storage::url($item->logo) }}" alt="Gambar tidak dapat dimuatkan" class="size-16 object-cover">
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <x-footer></x-footer>
@endsection

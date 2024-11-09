@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
  <div class="sticky top-0 z-50 shadow-sm">
    <x-navigation-bar active="about" class="relative" />
    <x-bottom-header title="Profil Sekolah" class="bg-neutral-50">
      <nav class="flex flex-col gap-y-2 py-2 sm:flex-row sm:justify-end sm:gap-x-6 sm:gap-y-0 sm:py-0" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500 active"
          id="profile-item" data-hs-tab="#profile-tab" aria-selected="true" aria-controls="profile-tab" role="tab">Tentang sekolah</button>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500"
          id="vm-item" data-hs-tab="#vm-tab" aria-selected="false" aria-controls="vm-tab" role="tab">Visi & Misi</button>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500"
          id="yayasan-item" data-hs-tab="#yayasan-tab" aria-selected="false" aria-controls="yayasan-tab" role="tab">Yayasan</button>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-2 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500"
          id="songs-item" data-hs-tab="#songs-tab" aria-selected="false" aria-controls="songs-tab" role="tab">Mars & Hymne</button>
      </nav>
    </x-bottom-header>
  </div>

  <div class="py-4">
    <section id="profile-tab" class="min-h-[40rem] grid place-items-center" role="tabpanel" aria-labelledby="profile-item">
      <div class="container flex flex-col gap-5">
        <h3 class="text-3xl font-semibold">Tentang sekolah</h3>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
          <div class="grid place-items-center">
            <img
              src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhtkJjeWSLxr2rO4NgFaL0o8-FMjV1dSNmYSvr7QbU3q-f2I_N0MuVs6HPJfuetyjZZhEhsDP2-M7au7T6WI_q3kbUhpJ7G161tHrlkJG6mMWf5zoA_gf8v6EiYPHF1PdNqxsz6lFkYZyfo/s640/Pendiri+ITB+Stikom+Bali+dan+SMK+TI+Bali+Global.jpg"
              alt="Gambar tidak dapat dimuatkan" class="block aspect-video rounded-md shadow-md">
          </div>

          <div class="space-y-3 tracking-wide text-gray-500 leading-relaxed">
            <p>
              <span class="text-base-dark text-xl font-bold">SMK TI Bali Global Badung</span> adalah Sekolah Menengah Kejuruan yang
              berfokus pada bidang Teknologi Informasi (Komputer), yang saat ini berada di bawah naungan Yayasan
              Pendidikan Bali Global Denpasar.
            </p>

            <p>
              SMK TI Bali Global didirikan oleh sekelompok pemerhati dan pecinta pendidikan, antara lain: Prof. Dr. I
              Made Bandem, M.A., Dr. Dadang Hermawan, Drs. I. B. Dharmadiaksa, M.Si., Ak., dan Drs. Made Subadi, M.Si.
              Mereka tergerak untuk mendirikan sekolah ini setelah melihat pesatnya perkembangan dunia teknologi informasi
              di berbagai sektor. Pada saat itu, sekolah yang mengkhususkan diri di bidang informatika dan komputer masih
              sangat jarang, terutama di Provinsi Bali.
            </p>

            <p>
              Selain itu, SMK TI Bali Global didirikan sebagai upaya untuk mengantisipasi era informasi dan globalisasi,
              yang tentunya membutuhkan sumber daya manusia (SDM) yang kompeten di bidang teknologi informasi.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="vm-tab" class="min-h-[40rem] hidden" role="tabpanel" aria-labelledby="vm-item">
      <div class="container flex flex-col gap-5">
        <h3 class="text-3xl font-semibold">Visi Misi</h3>

        <div></div>
      </div>
    </section>

    <section id="yayasan-tab" class="min-h-[40rem] hidden" role="tabpanel" aria-labelledby="yayasan-item">
      <div class="container flex flex-col gap-5">
        <h3 class="text-3xl font-semibold">Yayasan</h3>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
          <x-side-image-card title="Prof. Dr. I Made Bandem, M.A" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhUv2BQ8OWs76UJXjoXaz55Y-u7BqdDdyb4GG-P0Zc7xOgN0b3vJPzgot5TFeiZuRBHxf36eVn92Ia9wWDdO4yNM3Fxn4zp8dlQu2orGNGE8F1ESgXGpshsCPCtDN6bAB4VcYqqxs-LqI0s/w200-h200/Prof.+Dr.+I+Made+Bandem%252C+M.A+-+SMK+TI+Bali+Global+Badung.png">
            <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
              (Pembina 1)
            </p>
          </x-side-image-card>

          <x-side-image-card title="Drs. I Gusti Ngurah Oka" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtg-Ke54OQzW5B1StZSwl4MqOr7vxgf9YIKszrCqfxrk-ha5X6RXsoMPIguO6UwhUJdYJZ-B-K6xqV2zuiXRdww838R-MjaT0zdQr3Oj0QCNslgHn5kxoZhwQvC_u9Qpll28Y37mYbqbW2/w200-h200/Drs.+I+Gusti+Ngurah+Oka+-+SMK+TI+Bali+Global+Badung.png">
            <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
              (Pembina 2)
            </p>
          </x-side-image-card>

          <x-side-image-card title="Drs. Ida Bagus Anom, M.Pd" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj9WWIxB9HOpBQlHr18HlDdmO2VmOzm7q0TBrX6rfHtrvCOfpZXEmMs7rfvGjHcIpRSBUkPHpyicUO-Cl3rQP-bSeLIsHzMvnTt3OoRsTgBL35ksBTO60hrElJFVkg1qE_p_NSAl3cZc2cw/w200-h200/Drs.+Ida+Bagus+Anom%252C+M.Pd+-+SMK+TI+Bali+Global+Badung.png">
            <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
              (Pembina 3)
            </p>
          </x-side-image-card>

          <x-side-image-card title="Drs. Ida Bagus Dharmadiaksa, Ak, M.Si" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgmAbHsSLOxdzraGQfkfR4pvaC5umqOTz8OVipO2hIZpRjPwpZ6zPeJg8mWYJkcAem0wkFdGUeNDGlrSDHya9cxPk8spLXpT51o0HAXByLQSbedILusCAYYDiVVd3IQEVW-vuEF6G0j8Okg/w200-h200/Drs.+Ida+Bagus+Dharmadiaksa%252C+Ak%252C+M.Si+-+SMK+TI+Bali+Global+Badung.png">
            <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
              (Pengawas)
            </p>
          </x-side-image-card>

          <x-side-image-card title="Dr. Dadang Hermawan" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi6pA7Qm0UbbHixDKh5R7tuNdtSFZMzLc4kRBa8HTLRGhX4a5iFrxbo4iVkeradP9lhFAy7WzaSPcos4Ny3-jTgTmzEj4X_GhYqbZ9Uw0L-uXxAWNYr4716BvsJawxFm0WImMZKl-d2a2OW/w200-h200/Dr.+Dadang+Hermawan+-+SMK+TI+Bali+Global+Badung.png">
            <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
              (Ketua)
            </p>
          </x-side-image-card>

          <x-side-image-card title="Drs. I Gusti Made Murjana, M.Pd" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhHlTf2y8uzeNMUaUSUA0R-6bIVyzFWBX4KmpyfqDJ9L0MlexJrdnfEV0sPiep158DBL4Ca0n1apcMF6kld2N0qvJW_lu_8HEprcPkTH50QVnLqY3gK5IeUt5SqQfGK7koUCsZQvzEpvjIu/w200-h200/Drs.+I+Gusti+Made+Murjana%252C+M.Pd+-+SMK+TI+Bali+Global+Badung.png">
            <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
              (Sekretaris)
            </p>
          </x-side-image-card>

          <x-side-image-card title="I Gusti Ngurah Wardana, S.Pt., MM.Kom" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh3d3KATx83IF-WlnAcuRlMQvh3KMWleJWZftAmhwg_PzTukV5VGdwUkIMnTt436D9n09Nd0VDwBRoctZcttcW7OvVghu6uaK8u5n5vomUlnwXn0hplePD-FO_XIeZTP5_mWj5H_UpaEIda/w200-h200/I+Gusti+Ngurah+Wardana%252C+S.Pt.%252C+MM.Kom+-+SMK+TI+Bali+Global+Badung.png">
            <p class="dark:text-neutral-400 mt-1 text-gray-500 line-clamp-3">
              (Bendahara)
            </p>
          </x-side-image-card>
        </div>
      </div>
    </section>

    <section id="songs-tab" class="min-h-[40rem] hidden" role="tabpanel" aria-labelledby="songs-item">
      <div class="container flex flex-col gap-5">
        <h3 class="text-3xl font-semibold">Mars & Hymne</h3>

        <div></div>
      </div>
    </section>
  </div>

  <x-footer />
@endsection

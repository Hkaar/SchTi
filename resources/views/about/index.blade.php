@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
  <div class="sticky top-0 z-50 shadow-sm">
    <x-navigation-bar active="about" class="relative" />
    <x-bottom-header title="Profil Sekolah" class="bg-neutral-50">
      <nav class="flex flex-col gap-y-2 py-2 sm:flex-row sm:justify-end sm:gap-x-6 sm:gap-y-0 sm:py-0" aria-label="Tabs"
        role="tablist" aria-orientation="horizontal">
        <button type="button"
          class="dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500 active inline-flex items-center gap-x-2 whitespace-nowrap border-b-2 border-transparent px-1 py-2 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 hs-tab-active:border-blue-600 hs-tab-active:font-semibold hs-tab-active:text-blue-600"
          id="profile-item" data-hs-tab="#profile-tab" aria-selected="true" aria-controls="profile-tab"
          role="tab">Tentang sekolah</button>
        <button type="button"
          class="dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500 inline-flex items-center gap-x-2 whitespace-nowrap border-b-2 border-transparent px-1 py-2 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 hs-tab-active:border-blue-600 hs-tab-active:font-semibold hs-tab-active:text-blue-600"
          id="vm-item" data-hs-tab="#vm-tab" aria-selected="false" aria-controls="vm-tab" role="tab">Visi &
          Misi</button>
        <button type="button"
          class="dark:text-neutral-400 dark:hover:text-blue-500 dark:focus:text-blue-500 inline-flex items-center gap-x-2 whitespace-nowrap border-b-2 border-transparent px-1 py-2 text-sm text-gray-500 hover:text-blue-600 focus:text-blue-600 focus:outline-none disabled:pointer-events-none disabled:opacity-50 hs-tab-active:border-blue-600 hs-tab-active:font-semibold hs-tab-active:text-blue-600"
          id="songs-item" data-hs-tab="#songs-tab" aria-selected="false" aria-controls="songs-tab" role="tab">Mars &
          Hymne</button>
      </nav>
    </x-bottom-header>
  </div>

  <div class="py-4">
    <section id="profile-tab" class="min-h-[40rem]" role="tabpanel" aria-labelledby="profile-item">
      <div class="container">
        <div class="rounded-t-md border border-gray-200">
          <h5 class="border-b border-gray-200 px-6 py-7 text-3xl font-bold text-gray-500">Profil Singkat</h5>

          <article class="space-y-3 px-6 py-7 leading-relaxed tracking-wide text-gray-500">
            <p>
              <span class="text-xl font-bold text-base-dark">SMK TI Bali Global Badung</span> adalah Sekolah Menengah
              Kejuruan yang
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
          </article>
        </div>

        <div class="border border-gray-200">
          <h5 class="border-b border-gray-200 px-6 py-7 text-3xl font-bold text-gray-500">Data Sekolah</h5>

          <div class="grid grid-cols-1 lg:grid-cols-2">
            <article class="border-b border-r border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Umum</h6>

              <ul class="list-disc space-y-1 ps-5">
                <li>Akreditasi : A</li>
                <li>Kepala Sekolah : I Made Indra Aribawa</li>
                <li>Operator : NI PUTU ANIK PARWATI UTAMI.,S.Kom</li>
              </ul>
            </article>

            <article class="border-b border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Identitas Sekolah</h6>

              <ul class="list-disc space-y-1 ps-5">
                <li>NPSN: 69959273</li>
                <li>Status: Swasta</li>
                <li>Bentuk Pendidikan: SMK</li>
                <li>Status Kepemilikan: Yayasan</li>
                <li>SK Pendirian Sekolah: No.15</li>
                <li>Tanggal SK Pendirian: 2002-07-17</li>
                <li>SK Izin Operasional: 505/PD/TAHUN 2016</li>
                <li>Tanggal SK Izin Operasional: 2016-07-26</li>
              </ul>
            </article>

            <article class="border-b border-r border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Staff & Siswa</h6>

              <ul class="list-disc space-y-1 ps-5">
                <li>Guru: 32</li>
                <li>Siswa Laki-laki: 463</li>
                <li>Siswa Perempuan: 184</li>
                <li>Rombongan Belajar: 19</li>
              </ul>
            </article>

            <article class="border-b border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Fasilitas</h6>

              <ul class="list-disc space-y-1 ps-5">
                <li>Ruang Kelas : 13</li>
                <li>Laboratorium : 0</li>
                <li>Perpustakaan : 1</li>
                <li>Sanitasi Siswa : 6</li>
              </ul>
            </article>
          </div>
        </div>

        <div class="rounded-b-md border-b border-l border-r border-gray-200">
          <h5 class="border-b border-gray-200 px-6 py-7 text-3xl font-bold text-gray-500">Logo Sekolah</h5>

          <div class="grid place-items-center px-6">
            <img
              src="https://blogger.googleusercontent.com/img/a/AVvXsEhV_DSvt-mgqnFwS32BADH6wD35BHTqzoDlt_BXzCPSCT8sLBiBw6Rb0nlDvtI0IONZx021g8-FTT3aFofuDk5Ib6z-ZLTI8VM6WjoNM9aVIRqXIdj-g-dBOvf_2Wff2f682ZLrOFn9_koKc8IESOzy76efLJI8ufLhnDL_431eEgkqPGdhzfTtgTfsLw=s320"
              alt="Gambar tidak dapat dimuatkan" class="size-1/2 object-contain">
          </div>
        </div>
      </div>
    </section>

    <section id="vm-tab" class="hidden min-h-[40rem]" role="tabpanel" aria-labelledby="vm-item">
      <div class="container">
        <div class="rounded-t-md border border-gray-200 px-6 py-7">
          <h5 class="mb-2 text-2xl font-semibold text-gray-500">Motto</h5>

          <h6 class="text-3xl font-bold italic text-primary">
            "Beriman, Terdidik, Berbudaya, dan Ahli Teknologi!"
          </h6>
        </div>

        <div class="border border-gray-200 px-6 py-7">
          <h5 class="mb-2 text-2xl font-semibold text-gray-500">Visi</h5>

          <h6 class="text-3xl font-bold text-tertiary">
            Mewujudkan lulusan yang berkarakter, berkompetensi unggul, berprestasi, selaras dengan industri dan siap kerja
          </h6>
        </div>

        <div class="border border-gray-200">
          <h5 class="border-b border-gray-200 px-6 py-7 text-2xl font-semibold text-gray-500">Indikator Visi</h5>

          <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="border border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Berkarakter</h6>

              <ol class="list-decimal space-y-1 ps-5">
                <li>Memiliki karakter sesuai dengan profil pelajar pancasila</li>
                <li>Memiliki keunggulan dalam sikap dan perilaku</li>
                <li>Memiliki kedisiplinan yang tinggi</li>
                <li>Memiliki ketaatan beribadah sesuai dengan agama yang dianut</li>
              </ol>
            </div>

            <div class="border border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Berkompetensi Unggul</h6>

              <ol class="list-decimal space-y-1 ps-5">
                <li>Memiliki sertifikat keahlian</li>
                <li>Terwujudnya standar kompetensi lulusan yang kompetitif</li>
                <li>Memiliki tanaga pendidik dan kependidikan yang kompeten dan profesional</li>
              </ol>
            </div>

            <div class="border border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Berprestasi</h6>

              <ol class="list-decimal space-y-1 ps-5">
                <li>Memiliki keunggulan dalam akademik dan non-akademik</li>
                <li>Memiliki keunggulan dalam pemanfaatan dan penerapan teknologi</li>
              </ol>
            </div>

            <div class="border border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Selaras dengan Industri</h6>

              <ol class="list-decimal space-y-1 ps-5">
                <li>Memiliki kurikulum link and match sesuai dengan kebutuhan DUDI</li>
                <li>Memiliki MoU link and match dengan DUDI</li>
                <li>Memiliki program kelas industri</li>
                <li>Memiliki sertifikat industri</li>
              </ol>
            </div>

            <div class="col-span-2 border border-gray-200 px-6 py-7">
              <h6 class="mb-2 text-xl font-semibold">Siap Kerja</h6>

              <ol class="list-decimal space-y-1 ps-5">
                <li>Memiliki program Praktek Kerja Lapangan</li>
                <li>Terserapnya lulusan di dunia kerja</li>
                <li>Memiliki sertifikat industri</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="border border-gray-200 px-6 py-7">
          <h5 class="mb-3 text-2xl font-semibold text-gray-500">Misi</h5>

          <ol class="list-decimal space-y-1 ps-5">
            <li>Menerapkan perilaku karakter sesuai dengan profil pelajar pancasila</li>
            <li>Membuat Renstra (Rencana strategis) 10 tahun</li>
            <li>Mengoptimalkan SOP (Standar Operasional Prosedur) sekolah</li>
            <li>Melaksanakan proses pembelajaran sesuai dengan kurikulum standar nasional pendidikan</li>
            <li>Mengembangkan kurikulum link and match sesuai dengan kebutuhan DUDI</li>
            <li>Melaksanakan program pembinaan siswa secara berkelanjutan</li>
            <li>Menciptakan lingkungan sekolah yang humanis dan kondusif</li>
            <li>Memperluas networking dengan DUDI, praktisi, dan pemerhati pendidikan dalam Praktek Kerja Lapangan dan
              pemasaran tamatan siap kerja</li>
            <li>Meningkatkan kompetensi dan profesionalitas tenaga pendidik dan kependidikan</li>
          </ol>
        </div>

        <div class="rounded-b-md border border-gray-200 px-6 py-7">
          <h5 class="mb-3 text-2xl font-semibold text-gray-500">Tujuan</h5>

          <ol class="list-decimal space-y-1 ps-5">
            <li>Terwujudnya profil pelajar pancasila di SMK TI Bali Global Badung</li>
            <li>Terlaksananya Renstra (Rencana strategis) 10 tahun</li>
            <li>Terlaksananya SOP (Standar Operasional Prosedur) sekolah</li>
            <li>Melaksanakan proses pembelajaran sesuai dengan kurikulum standar nasional pendidikan</li>
            <li>Terwujudnya kurikulum link and match sesuai dengan kebutuhan DUDI</li>
            <li>Terlaksananya program pembinaan siswa secara berkelanjutan</li>
            <li>Terciptanya lingkungan sekolah yang humanis dan kondusif</li>
            <li>Meningkatnya networking dengan DUDI, praktisi, dan pemerhati pendidikan dalam Praktek Kerja Lapangan dan
              pemasaran tamatan siap kerja</li>
            <li>Meningkatnya kompetensi dan profesionalitas tenaga pendidik dan kependidikan</li>
            <li>Terlaksananya 6 Dimensi profil pelajar Pancasila di SMK TI Bali Global Badung</li>
            <li>Terlaksananya Program Kerja Sekolah selama 1 tahun</li>
            <li>Terpenuhi dan terlaksananya 8 standar nasional secara maksimal</li>
            <li>Kelulusan siswa mencapai 100%</li>
            <li>Keterserapan lulusan di DUDI, perguruan tinggi favorit, serta membuka wirausaha mencapai 90%</li>
            <li>Menciptakan lulusan yang mampu berkomunikasi dalam bahasa Inggris dan menguasa Teknologi Informasi</li>
            <li>Meningkatkan prestasi siswa di tingkat nasional dan internasional dengan 6 prestasi lomba</li>
            <li>Menciptakan lingkungan sekolah yang asri, aman, dan nyaman</li>
            <li>Bertambahnya jumlah MoU DUDI setiap tahunnya sebanyak 10 industri yang tersebar di nasional maupun
              internasional</li>
          </ol>
        </div>
      </div>
    </section>

    <section id="songs-tab" class="hidden min-h-[40rem]" role="tabpanel" aria-labelledby="songs-item">
      <div class="container">
        <div class="grid grid-cols-1 rounded-md border border-gray-200 lg:grid-cols-2">
          <article class="border-r border-gray-200">
            <div class="flex items-center justify-between border-b border-gray-200 px-6 py-7">
              <h5 class="mb-3 text-2xl font-semibold text-gray-500">Mars</h5>

              <x-link-button to="https://drive.google.com/open?id=1OARFjEglASUgR3SLOWnMicacmdp5MJjf">
                <i class="material-symbols-outlined font-var-light">download</i>
                Download
              </x-link-button>
            </div>

            <div class="space-y-3 px-6 py-7">
              <article>
                <span>Bumi persada nusantara tetap jaya membangun bangsa</span><br>
                <span>Maju terus semangat anak bangsa</span><br>
                <span>Tatap masa depan nan jaya</span>
              </article>

              <article>
                <span>* SMK TI Bali Global Almamater membangun tunas bangsa Indonesia</span>
              </article>

              <article>
                <span>** Berjuanglah tanpa pantang mundur</span><br>
                <span>Menuntut ilmu pengetahuan</span><br>
                <span>Berpaculah dalam teknologi SMK TI Bali Global jaya</span>
              </article>

              <article>
                <span>Turut menuntun anak bangsa jadi ahli bidang teknologi</span><br>
                <span>Bertaqwa kepada Tuhan Yang Maha Esa Jalani tugas yang mulia</span>
              </article>
            </div>
          </article>

          <article class="border-r border-gray-200">
            <div class="flex items-center justify-between border-b border-gray-200 px-6 py-7">
              <h5 class="mb-3 text-2xl font-semibold text-gray-500">Hymne</h5>

              <x-link-button to="https://drive.google.com/open?id=1jEiuGZM_GFHrJLbZor-W1rcUmKlzhx2T">
                <i class="material-symbols-outlined font-var-light">download</i>
                Download
              </x-link-button>
            </div>

            <div class="space-y-3 px-6 py-7">
              <article>
                <span>Junjungan kita semua para tunas bangsa</span><br>
                <span>Berbanggalah kita tuntut ilmu sampai dapat</span><br>
                <span>Dapat..</span>
              </article>

              <article>
                <span>* Mari semua harapan bangsa bersama-sama raih cita-cita di almamater kita</span><br>
                <span>SMK TI Bali Globalku penyandang harapan kita</span><br>
                <span>Terampil, cerdas, dan kompetitif</span><br>
                <span>Anak bangsa siap kerja</span><br>
                <span>Anak bangsa siap kerja</span>
              </article>
            </div>
          </article>
        </div>
      </div>
    </section>
  </div>

  <x-footer />
@endsection

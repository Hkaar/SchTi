@extends('layouts.app')

@section('title', 'Kesiswaan - Beasiswa')

@section('content')
  <x-navigation-bar active="student-affairs.loans" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="border-b border-gray-200 px-6 py-3 text-3xl font-bold text-primary">Beasiswa</h3>

        <h6 class="border-b border-gray-200 px-6 py-2 font-medium text-gray-500">Program-program Beasiswa di SMK TI Bali
          Global Badung</h6>

        <div class="grid grid-cols-1 lg:grid-cols-2">
          <article class="border-b border-gray-200 odd:border-r">
            <h6 class="border-b border-gray-200 px-6 py-5 text-xl font-bold text-secondary">Beasiswa Prestasi Akademik</h6>

            <div class="space-y-3 px-6 py-4">
              <p class="leading-relaxed">
                Diberikan kepada siswa berprestasi dalam perebutan juara umum pada semester genap di masing-masing
                jurusan.
                Beasiswa yang diberikan berupa potongan biaya SPP dengan rincian
              </p>

              <ul class="list-disc space-y-1 ps-5 text-gray-500">
                <li>Juara Umum 1 : Bebas 3 bulan SPP</li>
                <li>Juara Umum 2 : Bebas 2 bulan SPP</li>
                <li>Juara Umum 3 : Bebas 1 bulan SPP</li>
              </ul>
            </div>
          </article>

          <article class="border-b border-gray-200 odd:border-r">
            <h6 class="border-b border-gray-200 px-6 py-5 text-xl font-bold text-secondary">Beasiswa Prestasi Non Akademik
            </h6>

            <div class="space-y-3 px-6 py-4">
              <p class="leading-relaxed">
                Diberikan kepada siswa berprestasi dalam kegiatan lomba–lomba ekternal sekolah baik tingkat kabupaten,
                provinsi, nasional, dan juga internasional. Beasiswa yang diberikan berupa potongan biaya SPP dengan
                rincian
              </p>

              <div class="space-y-2">
                <span class="font-bold text-tertiary">Kabupaten/Provinsi</span>

                <ul class="list-disc space-y-1 ps-5 text-gray-500">
                  <li>Juara Umum 1 : Bebas 3 bulan SPP</li>
                  <li>Juara Umum 2 : Bebas 2 bulan SPP</li>
                  <li>Juara Umum 3 : Bebas 1 bulan SPP</li>
                </ul>
              </div>

              <div class="space-y-2">
                <span class="font-bold text-tertiary">Nasional</span>

                <ul class="list-disc space-y-1 ps-5 text-gray-500">
                  <li>Juara Umum 1 : Bebas 5 bulan SPP</li>
                  <li>Juara Umum 2 : Bebas 4 bulan SPP</li>
                  <li>Juara Umum 3 : Bebas 3 bulan SPP</li>
                </ul>
              </div>
            </div>
          </article>

          <article class="border-b border-gray-200 odd:border-r">
            <h6 class="border-b border-gray-200 px-6 py-5 text-xl font-bold text-secondary">Beasiswa Program Indonesia
              Pintar (PIP)</h6>

            <div class="space-y-3 px-6 py-4">
              <p class="leading-relaxed">
                Program Indonesia Pintar (PIP) melalui Kartu Indonesia Pintar (KIP) adalah pemberian bantuan tunai
                pendidikan dari pemerintah kepada anak usia sekolah (usia 6 - 21 tahun) yang berasal dari keluarga miskin,
                rentan miskin: pemilik Kartu Keluarga Sejahtera (KKS), peserta Program Keluarga Harapan (PKH), yatim
                piatu, penyandang disabilitas, korban bencana alam/musibah.
              </p>

              <p class="leading-relaxed">
                PIP merupakan bagian dari penyempurnaan program Bantuan Siswa Miskin (BSM).
              </p>

              <p class="leading-relaxed">
                Penerima KIP harus terdaftar sebagai peserta didik di lembaga pendidikan formal (SD/SMP/SMA/SMK) ataupun
                non formal (PKBM/SKB/LKP)
              </p>

              <p class="leading-relaxed">
                KIP harus terdaftar di Data Pokok Pendidikan (Dapodik) lembaga pendidikan.
              </p>
            </div>
          </article>

          <article class="border-b border-gray-200 odd:border-r">
            <h6 class="border-b border-gray-200 px-6 py-5 text-xl font-bold text-secondary">Beasiswa Program Kepedulian
              Lingkungan Sosial / Corporate Social Responsibility (CSR)</h6>

            <div class="space-y-3 px-6 py-4">
              <p class="leading-relaxed">
                SMK TI Bali Global Badung menyediakan beasiswa Program Kepedulian Lingkungan Sosial / Corporate Social
                Responsibility (CSR) pada semua Kompetensi Keahlian yang ada di SMK TI Bali Global Badung bagi calon siswa
                baru yang tinggal di lingkungan sekitar SMK TI Bali Global Badung yang lingkungan Banjarnya telah
                bekerjasama dengan SMK TI Bali Global Badung.
              </p>

              <p class="leading-relaxed">
                Tujuan dari beasiswa ini adalah memajukan pendidikan di lingkungan sekitar SMK TI Bali Global Badung.
              </p>

              <p class="leading-relaxed">
                Dengan program ini, para penerima beasiswa akan diberikan potongan biaya pendidikan di kompetensi keahlian
                yang dipilih pada saat menempuh pendidikan di SMK TI Bali Global Badung.
              </p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

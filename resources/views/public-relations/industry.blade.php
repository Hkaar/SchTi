@extends('layouts.app')

@section('title', 'Humas - Industri')

@section('content')
  <x-navigation-bar active="public-relations.industry" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="border-b border-gray-200 px-6 py-3 text-3xl font-bold text-primary">Prakerin / PKL</h3>

        <div class="grid grid-cols-1 lg:grid-cols-2">
          <article class="border-r border-gray-200">
            <h6 class="border-b border-gray-200 px-6 py-2 font-medium text-gray-500">Introduksi</h6>

            <div class="space-y-3 px-6 py-7 leading-relaxed">
              <p><span class="font-semibold">PRAKERIN (Praktek Kerja Industri)</span> adalah kegiatan pendidikan,
                pelatihan, dan pembelajaran yang
                dilaksanakan di dunia usaha atau dunia industri.</p>

              <p>Tujuannya adalah untuk meningkatkan kompetensi siswa
                Sekolah Menengah Kejuruan (SMK) sesuai dengan bidang keahliannya. Selain itu, Prakerin juga bertujuan
                untuk memberikan bekal yang berguna bagi siswa dalam menghadapi dunia kerja yang semakin kompetitif.
              </p>

              <p>Kegiatan ini membantu siswa mempersiapkan diri dengan keterampilan dan pengalaman yang relevan, guna
                menghadapi tantangan dunia kerja di masa depan.</p>
            </div>
          </article>

          <article>
            <h6 class="border-b border-gray-200 px-6 py-2 font-medium text-gray-500">Jurnal Prakerin</h6>

            <div class="space-y-5 px-6 py-7">
              <div class="space-y-3">
                <p class="leading-relaxed">
                  Jurnal Prakerin berfungsi sebagai panduan atau pedoman bagi siswa SMK TI Bali Global Badung dalam
                  melaksanakan kegiatan Prakerin. Jurnal ini memuat berbagai informasi penting, seperti latar belakang,
                  tujuan, visi dan misi, tata tertib, serta panduan dalam penyusunan laporan Prakerin.
                </p>

                <p>
                  Selain itu, jurnal
                  ini
                  juga mencakup berkas-berkas yang diperlukan untuk penyusunan laporan Prakerin di SMK TI Bali Global
                  Badung.
                </p>
              </div>

              <x-link-button to="https://drive.google.com/file/d/1MJMWIJ4HZwjf1vZnCiEZrxkg_ljLL5lk/view?usp=sharing">
                <i class="material-symbols-outlined font-var-light">download</i>
                Download
              </x-link-button>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

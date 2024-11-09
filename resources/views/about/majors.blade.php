@extends('layouts.app')

@section('title', 'Tentang Kami - Kompetensi Keahlian')

@section('content')
  <x-navigation-bar active="about.majors" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="flex flex-col gap-2 mb-5">
        <h3 class="text-4xl font-bold">Kompetensi Keahlian</h3>

        <span class="text-gray-500">Temukan kompetensi keahlian yang tersedia di sekolah kami</span>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
        <x-side-image-card title="Desain Komunikasi Visual" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500">
            Membekali peserta didik dengan kompetensi dalam pengoperasian software ilustrasi digital, imaging digital, desain web, serta pengoperasian software dan periferal untuk audio digital, video digital, dan efek visual.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Pengembangan Perangkat Lunak dan Game" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500">
            Membekali peserta didik dengan keterampilan pemrograman Stand Alone, Multi User, dan Web Programming.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Teknik Jaringan Komputer dan Telekomunikasi" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500">
            Membekali peserta didik dengan kemampuan merancang dan mengelola jaringan komputer yang aman, termasuk perlindungan data, subneting, routing, dan pengaturan internet.
          </p>
        </x-side-image-card>

        <x-side-image-card title="Bisnis Digital" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80">
          <p class="dark:text-neutral-400 mt-1 text-gray-500">
            Mengajarkan pemanfaatan teknologi digital dalam operasi bisnis, termasuk Analisis Pasar, E-Commerce, Pengembangan Aplikasi, Analisis Big Data, serta Keamanan dan Etika Bisnis Digital.
          </p>
        </x-side-image-card>
      </div>
    </div>
  </section>

  <x-footer />
@endsection
@extends('layouts.app')

@section('title', 'Tentang Kami - Yayasan')

@section('content')
  <x-navigation-bar active="about.yayasan" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="border-b border-gray-200 px-6 py-7 text-3xl font-bold text-primary">Yayasan Pendidikan Bali Global
          Denpasar</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          <div class="relative border-b odd:border-r border-gray-200">
            <img src="{{ Vite::asset('resources/images/yayasan/Prof. Dr. I Made Bandem, M.A.png') }}"
              alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-contain" />

            <p
              class="absolute left-0 top-0 z-10 hidden size-full place-items-center backdrop-blur-md bg-black bg-opacity-20 py-2 text-center text-white hover:grid peer-hover:grid">
              Prof. Dr. I Made Bandem, M.A <br>
              (Pembina 1)
            </p>
          </div>

          <div class="relative border-b odd:border-r border-gray-200">
            <img src="{{ Vite::asset('resources/images/yayasan/Drs. I Gusti Ngurah Oka.png') }}"
              alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-contain" />

            <p
              class="absolute left-0 top-0 z-10 hidden size-full place-items-center backdrop-blur-md bg-black bg-opacity-20 py-2 text-center text-white hover:grid peer-hover:grid">
              Drs. I Gusti Ngurah Oka <br>
              (Pembina 2)
            </p>
          </div>

          <div class="relative border-b odd:border-r border-gray-200">
            <img src="{{ Vite::asset('resources/images/yayasan/Drs. Ida Bagus Anom, M.Pd.png') }}"
              alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-contain" />

            <p
              class="absolute left-0 top-0 z-10 hidden size-full place-items-center backdrop-blur-md bg-black bg-opacity-20 py-2 text-center text-white hover:grid peer-hover:grid">
              Drs. Ida Bagus Anom, M.Pd <br>
              (Pembina 3)
            </p>
          </div>

          <div class="relative border-b odd:border-r border-gray-200">
            <img src="{{ Vite::asset('resources/images/yayasan/Drs. Ida Bagus Dharmadiaksa, Ak, M.Si.png') }}"
              alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-contain" />

            <p
              class="absolute left-0 top-0 z-10 hidden size-full place-items-center backdrop-blur-md bg-black bg-opacity-20 py-2 text-center text-white hover:grid peer-hover:grid">
              Drs. Ida Bagus Dharmadiaksa, Ak, M.Si<br>
              (Pengawas)
            </p>
          </div>

          <div class="relative border-b odd:border-r border-gray-200">
            <img src="{{ Vite::asset('resources/images/yayasan/Dr. Dadang Hermawan.png') }}"
              alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-contain" />

            <p
              class="absolute left-0 top-0 z-10 hidden size-full place-items-center backdrop-blur-md bg-black bg-opacity-20 py-2 text-center text-white hover:grid peer-hover:grid">
              Dr. Dadang Hermawan <br>
              (Ketua)
            </p>
          </div>

          <div class="relative border-b odd:border-r border-gray-200">
            <img src="{{ Vite::asset('resources/images/yayasan/Drs. I Gusti Made Murjana, M.Pd.png') }}"
              alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-contain" />

            <p
              class="absolute left-0 top-0 z-10 hidden size-full place-items-center backdrop-blur-md bg-black bg-opacity-20 py-2 text-center text-white hover:grid peer-hover:grid">
              Drs. I Gusti Made Murjana, M.Pd<br>
              (Sekretaris)
            </p>
          </div>

          <div class="relative border-b odd:border-r border-gray-200">
            <img src="{{ Vite::asset('resources/images/yayasan/I Gusti Ngurah Wardana, S.Pt., MM.Kom.png') }}"
              alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-contain" />

            <p
              class="absolute left-0 top-0 z-10 hidden size-full place-items-center backdrop-blur-md bg-black bg-opacity-20 py-2 text-center text-white hover:grid peer-hover:grid">
              I Gusti Ngurah Wardana, S.Pt., MM.Kom<br>
              (Bendahara)
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

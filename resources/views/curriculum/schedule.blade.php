@extends('layouts.app')

@section('title', 'Kurikulum - Jadwal Pembelajaran')

@section('content')
  <x-navigation-bar active="curriculum.schedule" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="border border-gray-200 rounded-md">
        <h3 class="text-2xl md:text-3xl font-bold text-primary px-6 py-5 border-b border-gray-200">Jadwal Pembelajaran</h3>

        <div class="grid grid-cols-1 lg:grid-cols-2">
          <article class="odd:border-r border-b border-gray-200 px-6 py-7 flex justify-between lg:items-center gap-2 flex-col lg:flex-row">
            <h5 class="mb-2 text-lg md:text-xl font-semibold text-gray-500">Kelas pagi</h5>

            <x-link-button to="https://drive.google.com/file/d/1SdPnUkX9FsAhSKNdFPb6uE_0IQClZnaF/view?usp=sharing" class="bg-transparent border-accent text-base-dark hover:text-base-light hover:bg-accent">
              <i class="material-symbols-outlined font-var-light">download</i>
              Download
            </x-link-button>
          </article>

          <article class="odd:border-r border-b border-gray-200 px-6 py-7 flex justify-between lg:items-center gap-2 flex-col lg:flex-row">
            <h5 class="mb-2 text-lg md:text-xl font-semibold text-gray-500">Kelas siang</h5>

            <x-link-button to="https://drive.google.com/file/d/1RoTzoqbUH8S8gxcan2yoV6xd4lWEFwBG/view?usp=sharing" class="bg-transparent border-accent text-base-dark hover:text-base-light hover:bg-accent">
              <i class="material-symbols-outlined font-var-light">download</i>
              Download
            </x-link-button>
          </article>

          <article class="border-b border-gray-200 px-6 py-7 flex justify-between lg:items-center gap-2 flex-col lg:flex-row lg:col-span-2">
            <h5 class="mb-2 text-lg md:text-xl font-semibold text-gray-500">Jadwal online & industri</h5>

            <x-link-button to="https://drive.google.com/file/d/1g3by7OnhEPqJLp_YP1wlWb8ULIjPU4w3/view?usp=sharing" class="bg-transparent border-accent text-base-dark hover:text-base-light hover:bg-accent">
              <i class="material-symbols-outlined font-var-light">download</i>
              Download
            </x-link-button>
          </article>
        </div>

        <h3 class="text-2xl md:text-3xl font-bold text-primary px-6 py-5 border-b border-gray-200">Kode Guru</h3>

        <article class="border-b border-gray-200 px-6 py-7 flex justify-between lg:items-center gap-2 flex-col lg:flex-row">
          <h5 class="mb-2 text-lg md:text-xl font-semibold text-gray-500">Kode No Guru 2024/2025</h5>

          <x-link-button to="https://drive.google.com/file/d/13w0JtOpfaI9mW9F2EVDT9V2pZ6vpM84b/view?usp=drive_link" class="bg-transparent border-accent text-base-dark hover:text-base-light hover:bg-accent">
            <i class="material-symbols-outlined font-var-light">download</i>
            Download
          </x-link-button>
        </article>

        <h3 class="text-2xl md:text-3xl font-bold text-primary px-6 py-5 border-b border-gray-200">Denah & Jadwal Pengunaan Ruangan</h3>

        <div class="grid grid-cols-1 lg:grid-cols-2">
          <article class="odd:border-r border-b border-gray-200 px-6 py-7 flex justify-between lg:items-center gap-2 flex-col lg:flex-row">
            <h5 class="mb-2 text-lg md:text-xl font-semibold text-gray-500">Jadwal Penggunaan Ruangan Kelas X</h5>

            <x-link-button to="https://drive.google.com/file/d/14GVDs5Lnb1d9R9lWCy08F3ELd6Ri4mc1/view?usp=sharing" class="bg-transparent border-accent text-base-dark hover:text-base-light hover:bg-accent">
              <i class="material-symbols-outlined font-var-light">download</i>
              Download
            </x-link-button>
          </article>

          <article class="odd:border-r border-b border-gray-200 px-6 py-7 flex justify-between lg:items-center gap-2 flex-col lg:flex-row">
            <h5 class="mb-2 text-lg md:text-xl font-semibold text-gray-500">Jadwal Penggunaan Ruangan Kelas XI</h5>

            <x-link-button to="https://drive.google.com/file/d/18tRBA4ffWQBvJfYnITbbCT9IRQfgYdC4/view?usp=sharing" class="bg-transparent border-accent text-base-dark hover:text-base-light hover:bg-accent">
              <i class="material-symbols-outlined font-var-light">download</i>
              Download
            </x-link-button>
          </article>

          <article class="border-b border-gray-200 px-6 py-7 flex justify-between lg:items-center gap-2 flex-col lg:flex-row lg:col-span-2">
            <h5 class="mb-2 text-lg md:text-xl font-semibold text-gray-500">Jadwal Penggunaan Ruangan Kelas XII</h5>

            <x-link-button to="https://drive.google.com/file/d/1qTQSZUqzCi6UWpwYn-FoVrB8LBxgm0Tk/view?usp=sharing" class="bg-transparent border-accent text-base-dark hover:text-base-light hover:bg-accent">
              <i class="material-symbols-outlined font-var-light">download</i>
              Download
            </x-link-button>
          </article>
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection
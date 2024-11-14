@extends('layouts.app')

@section('title', 'Tentang Kami - Yayasan')

@section('content')
  <x-navigation-bar active="about.yayasan" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="border-b border-gray-200 px-6 py-7 text-3xl font-bold text-primary">Yayasan Pendidikan Bali Global
          Denpasar</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          <x-profile-block src="{{ Vite::asset('resources/images/yayasan/Prof. Dr. I Made Bandem, M.A.png') }}" name="Prof. Dr. I Made Bandem, M.A" job="Pembina 1" />
          <x-profile-block src="{{ Vite::asset('resources/images/yayasan/Drs. I Gusti Ngurah Oka.png') }}" name="Drs. I Gusti Ngurah Oka" job="Pembina 2" />
          <x-profile-block src="{{ Vite::asset('resources/images/yayasan/Drs. Ida Bagus Anom, M.Pd.png') }}" name="Drs. Ida Bagus Anom, M.Pd" job="Pembina 3" />
          <x-profile-block src="{{ Vite::asset('resources/images/yayasan/Drs. Ida Bagus Dharmadiaksa, Ak, M.Si.png') }}" name="Drs. Ida Bagus Dharmadiaksa, Ak, M.Si" job="Pengawas" />
          <x-profile-block src="{{ Vite::asset('resources/images/yayasan/Dr. Dadang Hermawan.png') }}" name="Dr. Dadang Hermawan" job="Ketua" />
          <x-profile-block src="{{ Vite::asset('resources/images/yayasan/Drs. I Gusti Made Murjana, M.Pd.png') }}" name="Drs. I Gusti Made Murjana, M.Pd" job="Sekretaris" />
          <x-profile-block src="{{ Vite::asset('resources/images/yayasan/I Gusti Ngurah Wardana, S.Pt., MM.Kom.png') }}" name="I Gusti Ngurah Wardana, S.Pt., MM.Kom" job="Bendahara" />
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

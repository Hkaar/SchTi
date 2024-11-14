@extends('layouts.app')

@section('title', 'Kesiswaan - Organisasi')

@section('content')
  <x-navigation-bar active="student-affairs.student-org" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="text-3xl font-bold text-primary px-6 py-3 border-b border-gray-200">OSIS</h3>

        <div class="grid grid-cols-1 lg:grid-cols-2 border-b border-gray-200">
          <h6 class="font-medium text-gray-500 px-6 py-2 border-r border-gray-200">Organisasi Siswa Intra Sekolah SMK TI Bali Global Badung</h6>
          <h6 class="font-medium text-gray-500 px-6 py-2">Masa Bhakti 2023/2024</h6>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 border-b border-gray-200 max-h-[50rem] overflow-y-auto">
          <x-profile-block src="{{ Vite::asset('resources/images/osis/ketua.png') }}" name="I Dewa Made Rio Andradika" job="Ketua" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/wakil.png') }}" name="I Ketut Sugiantara" job="Wakil" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/sekre1.png') }}" name="Ni Putu Niken Pradnyani Putri" job="Sekretaris 1" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/sekre2.png') }}" name="I Made Dwi Laksmana Putra" job="Sekretaris 2" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/bendahara1.png') }}" name="Made Bayu Ardana Putra" job="Bendahara 1" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/bendahara2.png') }}" name="Kadek Dinda Amanda Putri" job="Bendahara 2" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/ketuhanan1.png') }}" name="Jhon Zenius Benediktus Suri" job="Ketuhanan & Ketakwaan" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/ketuhanan2.png') }}" name="I Kadek Deva Setiawan Putra" job="Ketuhanan & Ketakwaan" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/ketuhanan3.png') }}" name="Nabila Nur Rahmalia" job="Ketuhanan & Ketakwaan" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/belan1.png') }}" name="Ni Made Nanik Dwi Antari" job="Kesadaran Bela Negara" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/belan2.png') }}" name="Anindya Hasna Aqilah" job="Kesadaran Bela Negara" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/belan3.png') }}" name="Iqbal Febrianthoni" job="Kesadaran Bela Negara" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/bangsan1.png') }}" name="I Dewa Made Rio Andradika" job="Wawasan Kebangsaan dan Nasionalisme" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/bangsan2.png') }}" name="I Dewa Made Rio Andradika" job="Wawasan Kebangsaan dan Nasionalisme" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/bangsan3.png') }}" name="I Dewa Made Rio Andradika" job="Wawasan Kebangsaan dan Nasionalisme" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/budi1.png') }}" name="I Dewa Made Rio Andradika" job="Budi Pekerti dan Kepribadian Berbangsa, Bernegara" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/budi2.png') }}" name="I Dewa Made Rio Andradika" job="Budi Pekerti dan Kepribadian Berbangsa, Bernegara" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/budi3.png') }}" name="Ida Bagus Made Adi Jati Pramana" job="Budi Pekerti dan Kepribadian Berbangsa, Bernegara" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/wira1.png') }}" name="I Dewa Made Rio Andradika" job="Keterampilan dan Kewirausahaan" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/wira2.png') }}" name="I Dewa Made Rio Andradika" job="Keterampilan dan Kewirausahaan" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/wira3.png') }}" name="I Dewa Made Rio Andradika" job="Keterampilan dan Kewirausahaan" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/demo1.png') }}" name="Alvera Syaifa Dina" job="Kepemimpinan dan Demokrasi" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/demo2.png') }}" name="Ni Putu Nadila Supardan" job="Kepemimpinan dan Demokrasi" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/demo3.png') }}" name="Carlos Darryl Xavier Immanuel" job="Kepemimpinan dan Demokrasi" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/seni1.png') }}" name="I Nyoman Dipta Prasetya" job="Kebudayaan dan Apresiasi Seni" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/seni2.png') }}" name="I Gede Dika Mahendra Putra" job="Kebudayaan dan Apresiasi Seni" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/seni3.png') }}" name="Misty" job="Kebudayaan dan Apresiasi Seni" />

          <x-profile-block src="{{ Vite::asset('resources/images/osis/olahraga1.png') }}" name="I Dewa Made Rio Andradika" job="Olahraga dan Kesehatan" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/olahraga2.png') }}" name="I Komang Gede Rangga Radj Pratama" job="Olahraga dan Kesehatan" />
          <x-profile-block src="{{ Vite::asset('resources/images/osis/olahraga3.png') }}" name="I Dewa Made Rio Andradika" job="Olahraga dan Kesehatan" />
        </div>

        <h3 class="text-3xl font-bold text-primary px-6 py-3 border-b border-gray-200">MPK</h3>

        <div class="grid grid-cols-1 lg:grid-cols-2 border-b border-gray-200">
          <h6 class="font-medium text-gray-500 px-6 py-2 border-r border-gray-200">Majelis Permusyawaratan Kelas SMK TI Bali Global Badung</h6>
          <h6 class="font-medium text-gray-500 px-6 py-2">Masa Bhakti 2023/2024</h6>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          <x-profile-block src="{{ Vite::asset('resources/images/default-avatar.png') }}" name="Zahra Nabila Adhwa" job="Ketua" />
          <x-profile-block src="{{ Vite::asset('resources/images/default-avatar.png') }}" name="Gusti Agung Ayu Cinta Kasih Mahadewi" job="Sekretaris" />
          <x-profile-block src="{{ Vite::asset('resources/images/default-avatar.png') }}" name="Kevin Zaidan" job="Bendahara" />
          <x-profile-block src="{{ Vite::asset('resources/images/default-avatar.png') }}" name="Gracia Putu Yuanda Wijaya" job="Anggota" />
          <x-profile-block src="{{ Vite::asset('resources/images/default-avatar.png') }}" name="Rizki Firmansyah" job="Anggota" />
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

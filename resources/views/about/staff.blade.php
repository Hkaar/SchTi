@extends('layouts.app')

@section('title', 'Tentang Kami - Staff')

@section('content')
  <x-navigation-bar active="about.staff" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="border-b border-gray-200 px-6 py-5 text-3xl font-bold text-primary">Managemen & Guru</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 border-b border-gray-200 max-h-[50rem] overflow-y-auto">
          <x-profile-block src="{{ Vite::asset('resources/images/staff/kepsek.png') }}" name="I Made Indra Aribawa, SH" job="Kepala Sekolah" />

          <x-profile-block src="{{ Vite::asset('resources/images/staff/agus.png') }}" name="Gede Putu Agustyawan, S.Pd" job="Waka Kurikulum" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/made.png') }}" name="I Made Dwi Adnyana, SH" job="Waka Sapras" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/dayu-ari.png') }}" name="Ida Ayu Made Ari Widyawati, S.Pd.H" job="Waka Humas" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/darma.png') }}" name="I Gede Made Darma Wiguna, S.Pd" job="Waka Kesiswaan" />

          <x-profile-block src="{{ Vite::asset('resources/images/staff/bagas.png') }}" name="Bagas Alif Rizkianto, S.Kom" job="Kaprog DKV" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/ade.png') }}" name="Putu Ade Pranata, S.Kom" job="Kaprog PPLG" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/bagus.png') }}" name="I Gede Bagus Ardiyana Irawan, S.Kom" job="Kaprog TJKT" />

          <x-profile-block src="{{ Vite::asset('resources/images/staff/dayu-cempaka.png') }}" name="	Ida Ayu Cempaka Putri, S.Pd" job="Bimbingan Konseling" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/lala.png') }}" name="Ni Kadek Lala Mistariadi, S.Pd" job="Bimbingan Konseling" />

          <x-profile-block src="{{ Vite::asset('resources/images/staff/bu-agung.png') }}" name="Anak Agung Sandatya Widhiyanti, S.Kom., M.Kom" job="Guru Produktif" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/wahyu.png') }}" name="I Gusti Putu Wahyu Armandha Kumara, S.Kom" job="Guru Produktif" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/cika.png') }}" name="I Wayan Cikayana, S.Pd" job="Guru Produktif" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/desi.png') }}" name="Ayu Desi Darmawati, S.Kom" job="Guru Produktif" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/dapa.png') }}" name="Dapa Putra" job="Guru Produktif" />

          <x-profile-block src="{{ Vite::asset('resources/images/staff/gek-ria.png') }}" name="I Gusti Ayu Ria Sukma Dewi, S.Pd" job="Guru Agama Hindu" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/yan.png') }}" name="Yan Anugrah Wisesa, S.Sos.H., M.Pd" job="Guru PPKN" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/candra.png') }}" name="Ni Luh Candra Dewi, S.Pd" job="Guru Bahasa Indonesia" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/binta.png') }}" name="Binta Lestari Putry, S.Pd" job="Guru Bahasa Indonesia" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/sintya.png') }}" name="Ni Kadek Dwi Sintya Dewi, S.Pd" job="Guru Bahasa Inggris" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/oktia.png') }}" name="Gusti Ayu Oktianingsih, S.Pd" job="Guru Bahasa Inggris" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/imelda.png') }}" name="Ni Putu Ayu Imelda Sasiandari, S.S" job="Guru Bahasa Jepang" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/kanti.png') }}" name="Ni Wayan Kantiani, S.Pd" job="Guru Matematika" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/agung.png') }}" name="Anak Agung Ngurah Putra Agung Amurabhumi Yoga Cara, S.M" job="Guru PKWU" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/muliawan.png') }}" name="I Wayan Muliawan, S.Pd" job="Guru Penjasorkes" />

          <x-profile-block src="{{ Vite::asset('resources/images/staff/ngurah-artha.png') }}" name="I Gusti Ngurah Artha Wijaya" job="Staff" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/diah.png') }}" name="Ida Ayu Ketut Diah Kartini" job="Staff" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/sukanti.png') }}" name="Ni Wayan Sukanti Asih, S.E" job="Staff" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/indah.png') }}" name="Luh Putu Indah Rahmasari, S.E" job="Staff" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/citra.png') }}" name="Putu Citra Darmika Dewi, S.Kom" job="Staff" />
          <x-profile-block src="{{ Vite::asset('resources/images/staff/radit.png') }}" name="I Putu Raditya Wijaya" job="Staff" />
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

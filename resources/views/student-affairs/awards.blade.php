@extends('layouts.app')

@section('title', 'Kesiswaan - Prestasi')

@php
  $awards = [
    ["position" => 2, "desc" => "Tingkat Kabupaten Badung LKTI (Lomba Karya Tulis Ilmiah) - Prototype Alarm Pengaman Benda Suci Pratima"],
    ["position" => 3, "desc" => "Tingkat Kabupaten Badung Tournament Catur Mangupura Cup III"],
    ["position" => 1, "desc" => "Animasi di LKS SMK Kab. Badung"],
    ["position" => 2, "desc" => "Lomba Geguritan Putri & Juara 3 Lomba Mecapat Putri"],
    ["position" => 3, "desc" => "Desain Ms. Power Point Fasttekno STMIK Stikom Bali (Jawa, Bali, NTB)"],
    ["position" => 2, "desc" => "Olahraga Panahan di Porjar Kab. Badung"],
    ["position" => 2, "desc" => "Animasi di FastTekno STMIK Stikom Bali (Jawa, Bali, NTB)"],
    ["position" => 2, "desc" => "Pembuatan Video Company Profile Perusahaan Undhira"],
    ["position" => 1, "desc" => "Pembuatan Animasi Flash Politeknik Negeri Bali"],
    ["position" => 6, "desc" => "Finalis Cerdas Cermat ELCCO Universitas Udayana"],
    ["position" => 7, "desc" => "Finalis KTI ELCCO Universitas Udayana"],
    ["position" => 1, "desc" => "Desain Web Nasional ITCC 2019"],
    ["position" => 2, "desc" => "Desain Web Nasional Invention 2019"],
    ["position" => 2, "desc" => "Poster Digital Nasional Lomba Hari Anak Nasional"],
    ["position" => 1, "desc" => "Web Design Propinsi PNBWDC 2019"],
    ["position" => 1, "desc" => "Animasi Flash Propinsi PNBWDC 2019"],
    ["position" => 2, "desc" => "Animasi Flash Propinsi PNBWDC 2019"],
    ["position" => 3, "desc" => "Desain Blog Propinsi PNBWDC 2019"],
    ["position" => 1, "desc" => "Desain Seni Kaligrafi Propinsi Islami SMAM Denpasar"],
    ["position" => 1, "desc" => "Desain Poster Islami Propinsi COMIC 2019"],
    ["position" => 1, "desc" => "Desain Animasi Propinsi Fastekno 2019"],
    ["position" => 3, "desc" => "Desain Web Propinsi Fastekno 2019"],
    ["position" => 1, "desc" => "Fotografi Propinsi Psychomedia 2019"],
    ["position" => 1, "desc" => "Desain Poster Propinsi Lomba Poster IIK 2019"],
    ["position" => 3, "desc" => "Trailer Terbaik Festival Film Stiki 2019"],
    ["position" => 1, "desc" => "Programing Propinsi Invinity Progress 2019"],
    ["position" => 1, "desc" => "Desain Web Propinsi Invinity Progress 2019"],
    ["position" => 2, "desc" => "Desain Poster Nasional RSJ Surakarta 2019"],
    ["position" => 2, "desc" => "Film Pendek Nasional ELCCO Universitas Udayana 2020"],
    ["position" => 3, "desc" => "Desain Poster Nasional ELCCO Universitas Udayana 2020"],
    ["position" => 2, "desc" => "Desain Poster Islami COMIC 2020"],
    ["position" => 1, "desc" => "Menembak Air Rifle 10m Kab. Badung Porjar 2020"],
    ["position" => 2, "desc" => "Menembak Air Rifle 10m Kab. Badung Porjar 2020"],
    ["position" => 2, "desc" => "Taekwondo Under 55 Kg Kab. Badung Porjar 2020"],
    ["position" => 3, "desc" => "Melukis Kab. Badung Porjar 2020"],
    ["position" => 1, "desc" => "Desain Poster Nasional INVENTION 2020 Universitas Udayana"],
    ["position" => 1, "desc" => "Video Terbaik Nasional #AXISSerunyaBudayaku XL Axiata"],
    ["position" => 2, "desc" => "Desain Poster Propinsi SMANGI Festival 2020"],
    ["position" => 2, "desc" => "Lomba Bahasa Inggris Propinsi SMANGI Festival 2020"],
    ["position" => 2, "desc" => "Film Pendek Propinsi SMANGI Festival 2020"],
    ["position" => 3, "desc" => "Fotografi Propinsi SMANGI Festival 2020"],
    ["position" => 3, "desc" => "Umum SMANGI Fest Kategori Bahasa, Seni dan Sains SMP/SMK 2020"],
    ["position" => 3, "desc" => "Lomba Video Iklan Propinsi Kreativitas Berbudaya Youth Management 2020"],
    ["position" => 1, "desc" => "Desain Blog Nasional Stiki SSC Malang 2020"],
    ["position" => 2, "desc" => "Video Pendek Nasional Stiki SSC Malang 2020"],
    ["position" => 2, "desc" => "Putra Sekolah Ajeg Bali Smart With Attitude 2020"],
    ["position" => 1, "desc" => "Desain Poster Propinsi Pekan IUSTITIA Universitas Udayana 2020"],
    ["position" => 1, "desc" => "Desain Poster Nasional Sahid National Science Competition 2020"],
    ["position" => 3, "desc" => "Desain Poster Nasional Sahid National Science Competition 2020"],
    ["position" => 1, "desc" => "Video Review Me Band 4 Cellular World Denpasar"],
    ["position" => 3, "desc" => "E-Sport Competition Undiknas Denpasar"],
    ["position" => 2, "desc" => "Film Pendek Nasional COMIC ITB Stikom Bali"],
    ["position" => 1, "desc" => "Regional Playoff Mobile Legends Fruit Tea Youth E-Sport Championship 2020"],
    ["position" => 2, "desc" => "Desain Website Propinsi Paras ICT 2021"],
    ["position" => 3, "desc" => "Desain Website Propinsi Paras ICT 2021"],
    ["position" => 2, "desc" => "Video Pendek Nasional ELCCO Universitas Udayana 2021"],
    ["position" => 2, "desc" => "Desain Poster Propinsi SMANGI Festival 2021"],
    ["position" => 1, "desc" => "Kompetensi Bahasa Inggris Propinsi SMANGI Festival 2021"],
    ["position" => 2, "desc" => "Fotografi Propinsi SMANGI Festival 2021"],
    ["position" => 3, "desc" => "Fotografi Propinsi SMANGI Festival 2021"]
  ];
@endphp

@section('content')
  <x-navigation-bar active="student-affairs.awards" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="border border-gray-200 rounded-md">
        <h3 class="text-3xl font-bold text-primary px-6 py-3 border-b border-gray-200">Prestasi</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 max-h-[50rem] overflow-y-auto">
          @foreach ($awards as $award)
            <div class="flex flex-col items-center px-6 py-7 text-center border-r border-gray-200 border-b">
              <i class="material-symbols-outlined font-var-light" style="font-size: 48px">trophy</i>
              <span class="text-xl font-bold">Juara #{{ $award['position'] }}</span>
              <span>{{ ucwords($award['desc']) }}</span>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection
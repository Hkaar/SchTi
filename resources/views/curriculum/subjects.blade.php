@extends('layouts.app')

@section('title', 'Kurikulum - Mata Pelajaran')

@section('content')
  <x-navigation-bar active="curriculum.subjects" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="border-b border-gray-200 px-6 py-5 text-3xl font-bold text-primary">Mata Pelajaran</h3>

        <div class="grid grid-cols-1 lg:grid-cols-2">
          <article class="space-y-3 border-b border-gray-200 px-6 py-7 odd:border-r">
            <h5 class="text-4xl font-bold text-secondary">Teknik Jaringan Komputer dan Telekomunikasi</h5>

            <article class="space-y-2">
              <ul class="list-disc space-y-1 ps-5 grid grid-cols-2 gap-x-4">
                <li>Pendidikan Agama</li>
                <li>Pendidikan Kewarganegaraan</li>
                <li>Bahasa Indonesia</li>
                <li>Pendidikan Jasmani dan Olahraga</li>
                <li>Seni Budaya</li>
                <li>Bahasa Inggris</li>
                <li>Matematika</li>
                <li>Ilmu Pengetahuan Alam</li>
                <li>Fisika</li>
                <li>Kimia</li>
                <li>Ilmu Pengetahuan Sosial</li>
                <li>Keterampilan Komputer dan Pengelolaan Informasi</li>
                <li>Kewirausahaan</li>
                <li>Merakit Personal Komputer</li>
                <li>Melakukan Instalasi Sistem Operasi Dasar</li>
                <li>Menerapkan Prosedur Kesehatan, Keselamatan dan Keamanan Kerja</li>
                <li>Menerapkan Teknik Elektronika Analog & Digital Dasar</li>
                <li>Menerapkan Fungsi Periferal dan Instalasi PC</li>
                <li>Mendiagnosis Permasalahan Pengoperasian PC Periferal</li>
                <li>Melakukan Perbaikan dan / Setting Ulang Sistem PC</li>
                <li>Melakukan Perbaikan Periferal</li>
                <li>Melakukan Perawatan PC</li>
                <li>Melakukan Instalasi Sistem Operasi Berbasis Graphical User Interface (GUI) dan Command Line Interface
                  (CLI)</li>
                <li>Melakukan Instalasi Software</li>
                <li>Melakukan Instalasi Perangkat Jaringan Lokal (Local Area Network)</li>
                <li>Mendiagnosis Permasalahan Pengoperasian PC Yang Tersambung Jaringan</li>
                <li>Melakukan Perbaikan dan / Setting Ulang Koneksi Jaringan</li>
                <li>Melakukan Instalasi Sistem Operasi Jaringan Berbasis GUI Dan Teks</li>
                <li>Melakukan Instalasi Perangkat Jaringan Berbasi Luas (Wide Area Network)</li>
                <li>Mendiagnosis Permasalahan Perangkat Yang Tersambung Jaringan Berbasis Luas (Wide Area Network)</li>
                <li>Melakukan Perbaikan dan / Setting Ulang Koneksi Jaringan Berbasis Luas (Wide Area Network)</li>
                <li>Membuat Desain Sistem Keamanan Jaringan</li>
                <li>Mengadministrasi Server Dalam Jaringan</li>
                <li>Merancang Bangun dan Menganalisa Wide Area Network</li>
                <li>Merancang Web Database Untuk Content Server</li>
                <li>Bahasa Daerah Bali</li>
                <li>Budi Pekerti</li>
              </ul>
            </article>
          </article>

          <article class="space-y-3 border-b border-gray-200 px-6 py-7 odd:border-r">
            <h5 class="text-4xl font-bold text-secondary">Pengembangan Perangkat Lunak dan Game</h5>

            <article class="space-y-2">
              <ul class="list-disc space-y-1 ps-5 grid grid-cols-2 gap-x-4">
                <li>Pendidikan Agama</li>
                <li>Pendidikan Kewarganegaraan</li>
                <li>Bahasa Indonesia</li>
                <li>Pendidikan Jasmani dan Olahraga</li>
                <li>Seni Budaya</li>
                <li>Bahasa Inggris</li>
                <li>Matematika</li>
                <li>Ilmu Pengetahuan Alam</li>
                <li>Fisika</li>
                <li>Kimia</li>
                <li>Ilmu Pengetahuan Sosial</li>
                <li>Keterampilan Komputer dan Pengelolaan Informasi</li>
                <li>Kewirausahaan</li>
                <li>Merakit Personal Komputer</li>
                <li>Melakukan Instalasi Sistem Operasi Dasar</li>
                <li>Menerapkan Prosedur Kesehatan, Keselamatan dan Keamanan Kerja</li>
                <li>Menerapkan Teknik Elektronika Analog dan Digital Dasar</li>
                <li>Menerapkan Algoritma Pemrograman Tingkat Dasar</li>
                <li>Menerapkan Algoritma Pemrograman Tingkat Lanjut</li>
                <li>Membuat Basis Data</li>
                <li>Menerapkan Aplikasi Basis Data</li>
                <li>Memahami Pemrograman Visual Berbasis Desktop</li>
                <li>Membuat paket software aplikasi berbasis desktop</li>
                <li>Mengoperasikan sistem operasi jaringan komputer</li>
                <li>Menerapkan bahasa pemrograman SQL tingkat dasar</li>
                <li>Menerapkan bahasa pemrograman SQL tingkat lanjut</li>
                <li>Menerapkan dasar-dasar pembuatan web statis tingkat dasar</li>
                <li>Membuat halaman web dinamis tingkat dasar</li>
                <li>Membuat halaman web dinamis tingkat lanjut</li>
                <li>Merancang aplikasi teks dan desktop berbasis objek</li>
                <li>Menggunakan bahasa pemrograman berorientasi objek</li>
                <li>Merancang program aplikasi web berbasis objek</li>
                <li>Membuat aplikasi basis data menggunakan SQL</li>
                <li>Mengintegrasikan basis data dengan sebuah web</li>
                <li>Membuat program basis data</li>
                <li>Membuat aplikasi web berbasis JSP</li>
                <li>Bahasa Daerah Bali</li>
                <li>Budi Pakerti</li>
                <li>Dasar Animasi</li>
                <li>Animasi Lanjut</li>
              </ul>
            </article>
          </article>

          <article class="space-y-3 border-b border-gray-200 px-6 py-7 odd:border-r">
            <h5 class="text-4xl font-bold text-secondary">Desain Komunikasi Visual</h5>

            <article class="space-y-2">
              <ul class="list-disc space-y-1 ps-5 grid grid-cols-2 gap-x-4">
                <li>Pendidikan Agama</li>
                <li>Pendidikan Kewarganegaraan</li>
                <li>Bahasa Indonesia</li>
                <li>Pendidikan Jasmani dan Olahraga</li>
                <li>Seni Budaya</li>
                <li>Bahasa Inggris</li>
                <li>Matematika</li>
                <li>Ilmu Pengetahuan Alam</li>
                <li>Fisika</li>
                <li>Kimia</li>
                <li>Ilmu Pengetahuan Sosial</li>
                <li>Keterampilan Komputer dan Pengelolaan Informasi</li>
                <li>Kewirausahaan</li>
                <li>Merakit Personal Komputer</li>
                <li>Melakukan Instalasi Sistem Operasi Dasar</li>
                <li>Menerapkan Prosedur Kesehatan, Keselamatan dan Keamanan Kerja</li>
                <li>Memahami etimologi Multimedia</li>
                <li>Memahami alir proses produksi produk multimedia</li>
                <li>Menyusun proposal penawaran</li>
                <li>Merawat peralatan multimedia</li>
                <li>Memperbaharui isi halaman web</li>
                <li>Menerapkan teknik pengambilan gambar produksi</li>
                <li>Menerapkan prinsip-prinsip seni grafis dalam Desain komunikasi visual untuk multimedia</li>
                <li>Menguasai cara menggambar kunci untuk Animasi</li>
                <li>Menguasai cara menggambar clean-up dan sisip</li>
                <li>Menguasai dasar animasi stop-motion (bidang datar)</li>
                <li>Menggabungkan teks dalam sajian multimedia</li>
                <li>Menggabungkan gambar 2D kedalam sajian multimedia</li>
                <li>Menggabungkan fotografi digital kedalam sajian multimedia</li>
                <li>Menggabungkan audio kedalam sajian multimedia</li>
                <li>Membuat story board aplikasi multimedia</li>
                <li>Memahami cara penggunaan peralatan tata cahaya</li>
                <li>Menerapkan efek khusus pada objek produksi</li>
                <li>Bahasa Daerah Bali</li>
                <li>Budi Pekerti</li>
              </ul>
            </article>
          </article>

          <article class="space-y-3 border-b border-gray-200 px-6 py-7 odd:border-r">
            <h5 class="text-4xl font-bold text-secondary">Bisnis Digital</h5>

            <article class="space-y-2">
              <ul class="list-disc space-y-1 ps-5 grid grid-cols-2 gap-x-4">
                <li>Pendidikan Agama</li>
                <li>Pendidikan Kewarganegaraan</li>
                <li>Bahasa Indonesia</li>
                <li>Pendidikan Jasmani dan Olahraga</li>
                <li>Seni Budaya</li>
                <li>Bahasa Inggris</li>
                <li>Matematika</li>
                <li>Ilmu Pengetahuan Alam</li>
                <li>Fisika</li>
                <li>Kimia</li>
                <li>Ilmu Pengetahuan Sosial</li>
                <li>Keterampilan Komputer dan Pengelolaan Informasi</li>
                <li>Kewirausahaan</li>
                <li>Merakit Personal Komputer</li>
                <li>Melakukan Instalasi Sistem Operasi Dasar</li>
                <li>Menerapkan Prosedur Kesehatan, Keselamatan dan Keamanan Kerja</li>
                <li>Bahasa Daerah Bali</li>
                <li>Budi Pekerti</li>
              </ul>
            </article>
          </article>
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

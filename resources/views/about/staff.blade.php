@extends('layouts.app')

@section('title', 'Tentang Kami - Staff')

@section('content')
  <x-navigation-bar active="about.staff" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <div class="border-b border-gray-200">
          <h3 class="border-b border-gray-200 px-6 py-5 text-3xl font-bold text-primary">Struktur Organisasi</h3>

          <img
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg5gBi0h4pdBVjFnGvUQfc-_8HxfgDWzOOsgI_7UYZe-_r46_uoxLBZtVgjxyeYNg4eGCQwxzKYEJay1WpVqbRWhNvgToK3jW97SZe4Aov5JV8HFoHWrpmcZRDkVAzNybjjHrl-y9xZKijcRHpjIKPdJkKPUJiYqltCapN29tzI6_TqUAMHlakqYHvlvY7Y/w704-h881/Rev4%20(2)%20DESAIN%20STRUKTUR%20ORGANISASI%20SMK%20TI%20BALI%20GLOBAL%20BADUNG.jpg"
            alt="Gambar tidak dapat dimuatkan" class="size-full block object-contain">
        </div>

        <h3 class="border-b border-gray-200 px-6 py-5 text-3xl font-bold text-primary">Guru & Staff</h3>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

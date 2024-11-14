@extends('layouts.app')

@section('title', 'Humas - Kerjasama')

@section('content')
  <x-navigation-bar active="public-relations.partnerships" />

  <section class="min-h-screen">
    <div class="container py-4">
      <div class="rounded-md border border-gray-200">
        <h3 class="border-b border-gray-200 px-6 py-3 text-3xl font-bold text-primary">Kerjasama SMK TI Bali Global Badung
        </h3>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
          @foreach (App\Models\PartnerShip::all(['name', 'logo']) as $item)
            <div class="flex flex-col items-center gap-1 text-center px-6 py-5 border-r border-b border-gray-200">
              <img src="{{ Storage::url($item->logo) }}" alt="Gambar tidak dapat dimuatkan" class="size-24 object-contain">
              <span class="text-lg font-bold">
                {{ $item->name }}
              </span>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <x-footer />
@endsection

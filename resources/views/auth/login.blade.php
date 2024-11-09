@extends('layouts.app')

@section('title', 'Login')

@section('content')
  <div class="min-h-screen flex">
    <div class="container grid place-items-center flex-1">
      <div class="flex flex-col items-center gap-5">
        <div class="flex items-center justify-center gap-3">
          @if (isset($settings['org_logo']))
            <img src="{{ Storage::url($settings['org_logo']) }}" class="size-12 aspect-square object-contain inline-block">
          @endif

          <a href="{{ route('/') }}" class="font-bold text-primary text-3xl">
            {{ isset($settings['org_name']) ? $settings['org_name'] : 'Brand' }}
          </a>
        </div>

        <div class="px-2">
          <form action="{{ route('login.handle') }}" method="post" class="flex flex-col gap-6 px-8 py-6 shadow-md border rounded-lg w-full">
            @csrf

            <div class="space-y-3">
              <label for="username" class="block text-sm font-medium mb-2 dark:text-white">Username atau Email</label>

              <div class="relative">
                <input type="text" name="username" class="peer py-3 px-4 ps-12 block w-full border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                  placeholder="Masukkan username atau email ..." required>

                <div class="absolute inset-y-0 start-0 flex text-neutral-400 items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                  <i class="material-symbols-outlined font-var-light">person</i>
                </div>
              </div>

              @error('username')
                <p class="mt-2 text-sm text-red-600 dark:text-red-400" id="hs-input-helper-text">{{ $message }}</p>
              @enderror

              <div class="w-full">
                <label for="password" class="block text-sm font-medium mb-2 dark:text-white">Password</label>

                <div class="relative">
                  <input type="password" id="password" name="password" class="peer py-3 px-4 ps-12 pe-10 block w-full border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Masukkan password ..." required>

                  <div class="absolute inset-y-0 start-0 flex text-neutral-400 items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                    <i class="material-symbols-outlined font-var-light">key</i>
                  </div>

                  <button type="button" data-hs-toggle-password='{
                      "target": "#password"
                    }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                      <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                      <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                      <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                      <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                      <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                    </svg>
                  </button>
                </div>

                @error('password')
                  <p class="mt-2 text-sm text-red-600 dark:text-red-400" id="hs-input-helper-text">{{ $message }}</p>
                @enderror
              </div>

              <div class="flex">
                <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  id="remember" name="remember">
                <label for="remember" class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Ingati saya</label>
              </div>
            </div>

            <div class="flex flex-col gap-3">
              <div class="flex items-center gap-2">
                <button type="submit" class="btn px-4 py-3 border bg-primary text-white hover:scale-105 active:scale-90 active:opacity-50 ease-in-out duration-150 rounded-md">Masuk</button>
                <a href="{{ url()->previous() }}" class="btn px-4 py-3 border border-red-700 dark:border-red-400 hover:bg-red-500 hover:scale-105 active:scale-90 hover:text-white active:opacity-50 ease-in-out duration-150 rounded-md">Batalkan</a>
              </div>

              <a href="#" class="mt-2 text-sm text-accent underline font-medium">Belum punya akun? coba kesini untuk daftar yuk!</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
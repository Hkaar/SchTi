<div class="relative border-b border-gray-200 odd:border-r bg-gray-300">
  <img src="{{ $src }}"
    alt="Gambar tidak dapat dimuatkan" class="size-full peer aspect-square object-cover" />

  <div class="size-full absolute left-0 top-0 z-10 hidden justify-center gap-1 items-center flex-col bg-black bg-opacity-50 py-2 text-center text-white backdrop-blur-md hover:flex peer-hover:flex">
    <span class="font-bold text-xl">{{ $name }}</span>
    <span>{{ $job }}</span>

    {{ $slot }}
  </div>
</div>

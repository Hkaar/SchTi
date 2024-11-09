<div class="flex flex-col shadow-md rounded-md">
  <div class="flex-1">
    <img src="https://placehold.co/600x400" alt="Gambar tidak tersedia" class="block object-cover max-w-full max-h-full rounded-t-md">
  </div>

  <div class="flex-1 flex flex-col gap-5 px-4 py-3">
    <div class="flex items-center gap-2 flex-wrap">
      @foreach ($categories as $item)
        <div class="grid place-items-center px-2 py-1 rounded-md border shadow">
          {{ $item }}
        </div>
      @endforeach
    </div>

    <div class="flex flex-col gap-3">
      <h6 class="text-xl font-bold">
        {{ $title }}
      </h6>

      <p class="text-gray-400 tracking-wide line-clamp-3">
        {{ $slot }}
      </p>

      <a href="#" class="text-tertiary flex items-center gap-2 font-medium">
        Baca lebih lanjut

        <i class="material-symbols-outlined font-var-light">keyboard_double_arrow_right</i>
      </a>
    </div>

    <div class="flex items-center justify-between gap-4 text-accent">
      <div class="flex gap-2 items-center">
        <i class="material-symbols-outlined font-var-light">person</i>

        {{ $user }}
      </div>

      <div class="flex gap-2 items-center">
        <i class="material-symbols-outlined font-var-light">event_note</i>

        {{ $date }}
      </div>
    </div>
  </div>
</div>
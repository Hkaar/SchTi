<div {{ $attributes->twMerge(["class" => "flex flex-col rounded-md shadow-md border"]) }}>
  <div class="flex items-center flex-1">
    <p class="tracking-wide line-clamp-5 font-semibold text-xl px-6 py-4 italic">
      " {{ $slot }} "
    </p>
  </div>

  <div class="flex items-center gap-4 border-t-2 py-4 px-6 h-fit">
    <img src="{{ $src }}" alt="Gambar tidak dapat dimuatkan" class="size-14 rounded-full object-cover">

    <div class="flex flex-col gap-1 justify-center">
      <span class="font-medium tracking-wide">
        {{ $user }}
      </span>

      <span class="text-gray-400 tracking-wide">
        {{ $occupation }}
      </span>
    </div>
  </div>
</div>
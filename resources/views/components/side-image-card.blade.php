<div
  class="dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 rounded-xl border bg-white shadow-sm sm:flex">
  <div
    class="sm:max-w-60 relative w-full shrink-0 overflow-hidden rounded-t-xl pt-[40%] sm:rounded-s-xl md:max-w-xs md:rounded-se-none">
    <img class="size-full absolute start-0 top-0 object-cover" src="{{ $src }}" alt="Card Image">
  </div>
  <div class="flex flex-wrap">
    <div class="flex h-full flex-col p-4 sm:p-7">
      <h3 class="dark:text-white text-lg font-bold text-gray-800">
        {{ $title }}
      </h3>

      {{ $slot }}

      @isset($to)
        <div class="mt-5 sm:mt-auto">
          <a href="{{ $to }}"
            class="btn flex w-fit items-center gap-1 rounded-md bg-secondary py-2 pe-1 ps-3 font-semibold text-base-light shadow-sm transition-all duration-200 hover:scale-105 active:scale-95 active:opacity-50">
            Baca lebih lanjut

            <i class="material-symbols-outlined font-var-light">chevron_right</i>
          </a>
        </div>
      @endisset
    </div>
  </div>
</div>

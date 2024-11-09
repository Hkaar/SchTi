<nav {{ $attributes->merge(["class" => "bg-white dark:bg-neutral-900"]) }}>
  <div class="max-w-[85rem] w-full mx-auto sm:flex sm:flex-row sm:justify-between sm:items-center sm:gap-x-3 py-3 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center gap-x-3">
      <div class="grow">
        <span class="font-semibold whitespace-nowrap text-gray-800 dark:text-neutral-200">{{ $title }}</span>
      </div>

      <button type="button" class="hs-collapse-toggle sm:hidden py-1.5 px-2 inline-flex items-center font-medium text-xs rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 focus:outline-none focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-collapse="#hs-nav-secondary" aria-controls="hs-nav-secondary" aria-label="Toggle navigation">
        Daftar isi
        <svg class="hs-dropdown-open:rotate-180 shrink-0 size-4 ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
      </button>
    </div>

    <div id="hs-nav-secondary" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
      {{ $slot }}
    </div>
  </div>
</nav>
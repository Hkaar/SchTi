<a {{ $attributes->twMerge([
    'class' =>
        'p-3 flex gap-x-4 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700',
    $active ? 'font-semibold bg-gray-100 dark:bg-neutral-700' : '',
]) }}
  href="{{ $to }}">
  {{ $slot }}
</a>

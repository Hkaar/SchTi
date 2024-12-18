@props([
    'paths' => explode('/', request()->path()),
    'base' => request()->schemeAndHttpHost(),
])

@php
if (end($paths) === '') {
  array_pop($paths);
}
@endphp

<nav aria-label="breadcrumb" class="flex items-center gap-2 min-w-fit">
  @foreach ($paths as $i => $path)
    @php
      $url = $base . '/' . implode('/', array_slice($paths, 0, $i + 1));
    @endphp

    @if ($path === 'manage')
      <a href="{{ $i === count($paths)-1 ? '' : $url }}" class="no-underline {{ $i === count($paths)-1 ? 'font-semibold' : 'font-light' }}">Dashboard</a>
    @elseif ($path === '')
      <a href="{{ $i === count($paths)-1 ? '' : $url }}" class="no-underline {{ $i === count($paths)-1 ? 'font-semibold' : 'font-light' }}">/</a>
    @else
      <a href="{{ $i === count($paths)-1 ? '' : $url }}" class="no-underline {{ $i === count($paths)-1 ? 'font-semibold' : 'font-light' }}">{{ ucwords(str_replace('\n', '', str_replace('-', ' ', $path))) }}</a>
    @endif

    @if ($i < count($paths)-1)
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        width="12px" height="12px">
        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
      </svg>
    @endif
  @endforeach
</nav>

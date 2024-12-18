<div class="container my-4 flex-column flex-1 hidden"></div>

<section class="min-h-screen flex">
  <x-side-navigation active="{{ $active }}"></x-side-navigation>

  <div class="flex-1 flex flex-col w-full min-h-screen">
    <x-dashboard-navigation-bar></x-dashboard-navigation-bar>

    <div {{ $attributes->merge(["class" => "min-h-screen container my-4 flex flex-col"]) }}>
      {{ $slot }}
    </div>

    <x-simple-footer></x-simple-footer>
  </div>
</section>
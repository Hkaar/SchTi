<footer class="shadow-md border-t border-gray-200 dark:border-gray-800">
  <div class="container py-8">
    <div class="flex items-start flex-col lg:flex-row justify-between gap-8">
      <div class="flex flex-col gap-6 flex-1">
        <div class="flex flex-col gap-3">
          <h5 class="text-3xl font-bold">
            {{ isset($settings['org_name']) ? $settings['org_name'] : 'Brand' }}
          </h5>

          <p class="font-medium">
            {{ isset($settings['org_slogan']) ? $settings['org_slogan'] : 'Brand slogan' }}
          </p>
        </div>
      </div>

      <div class="flex-1 grid grid-cols-1 lg:grid-cols-2 gap-3">
        <div class="flex flex-col gap-3">
          <h6 class="text-2xl font-bold">Lebih lanjut</h6>

          <div class="flex flex-col gap-2">
            <a href="#" class="">Pendaftaran</a>
            <a href="#" class="">Kegiatan Sekolah</a>
            <a href="#" class="">Kalender Kegiatan</a>
            <a href="#" class="">Kontak Kami</a>
          </div>
        </div>

        <div class="flex flex-col gap-3">
          <h6 class="text-2xl font-bold">Sosial Media</h6>

          <div class="flex flex-col gap-2">
            <a href="www.instagram.com" class="flex items-center gap-2">
              Instagram
            </a>

            <a href="http://www.youtube.com" class="flex items-center gap-2">
              Youtube
            </a>

            <a href="http://www.tiktok.com" class="flex items-center gap-2">
              TikTok
            </a>

            <a href="https://www.whatsapp.com" class="flex items-center gap-2">
              Whatsapp
            </a>
          </div>
        </div>
      </div>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.678876848887!2d115.17926661113621!3d-8.626794987648948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238b443f3470b%3A0xed54cf03e1904bf3!2sSMK%20TI%20Bali%20Global%20Badung!5e0!3m2!1sid!2sid!4v1728699290176!5m2!1sid!2sid"
        width="290" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="py-4 bg-primary text-base-light fill-base-light">
    <div class="container flex items-center justify-between gap-6">
      <span class="font-bold">
        Copyright &#169; 2024 SchTi Team. All rights reserved.
      </span>

      <div class="flex items-center gap-3">
        <a href="#">
          Terms of service
        </a>

        <a href="#">
          Privacy Policy
        </a>
      </div>
    </div>
  </div>
</footer>
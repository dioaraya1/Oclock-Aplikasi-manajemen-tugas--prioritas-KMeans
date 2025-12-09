<!-- Footer -->
<footer class="relative bg-gray-900 dark:bg-gray-950 text-white pt-16 pb-10 overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div
      class="absolute -top-20 -left-20 w-64 h-64 rounded-full bg-gradient-to-r from-primary-900/10 to-secondary-900/10 blur-3xl">
    </div>
    <div
      class="absolute -bottom-20 -right-20 w-64 h-64 rounded-full bg-gradient-to-r from-accent-900/10 to-primary-900/10 blur-3xl">
    </div>
  </div>

  <!-- Grid Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute inset-0"
      style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
    </div>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <!-- Main Footer Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
      <!-- Brand & About -->
      <div class="lg:col-span-2">
        <div class="flex items-center mb-6">
          <div class="relative">
            <div
              class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary-500 to-secondary-500 flex items-center justify-center shadow-lg mr-4">
              <i class="fas fa-clock text-white text-xl"></i>
            </div>
            <div class="absolute -top-1 -right-1 w-5 h-5 rounded-full bg-accent-500 border-2 border-gray-900"></div>
          </div>
          <div>
            <h3 class="text-2xl font-bold flex items-center">
              Oclock<span class="text-primary-400 ml-1">.AI</span>
            </h3>
            <p class="text-sm text-gray-400 mt-1">K-Means Clustering Intelligence</p>
          </div>
        </div>
        <p class="text-gray-400 mb-6 max-w-md">
          Platform manajemen tugas cerdas yang menggunakan algoritma K-Means Clustering untuk mengoptimalkan
          produktivitas tim dan individu dengan kecerdasan buatan.
        </p>

        <!-- Social Media -->
        <div class="mb-8">
          <p class="text-gray-300 mb-4 font-medium">Ikuti Kami</p>
          <div class="flex gap-3">
            <a href="#"
              class="group w-11 h-11 rounded-full bg-gray-800 hover:bg-gradient-to-r hover:from-primary-500 hover:to-secondary-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
              <i class="fab fa-twitter group-hover:text-white text-gray-400"></i>
            </a>
            <a href="#"
              class="group w-11 h-11 rounded-full bg-gray-800 hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-600 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
              <i class="fab fa-facebook-f group-hover:text-white text-gray-400"></i>
            </a>
            <a href="#"
              class="group w-11 h-11 rounded-full bg-gray-800 hover:bg-gradient-to-r hover:from-blue-400 hover:to-blue-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
              <i class="fab fa-linkedin-in group-hover:text-white text-gray-400"></i>
            </a>
            <a href="#"
              class="group w-11 h-11 rounded-full bg-gray-800 hover:bg-gray-700 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
              <i class="fab fa-github group-hover:text-white text-gray-400"></i>
            </a>
            <a href="#"
              class="group w-11 h-11 rounded-full bg-gray-800 hover:bg-gradient-to-r hover:from-red-500 hover:to-pink-500 flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-lg">
              <i class="fab fa-youtube group-hover:text-white text-gray-400"></i>
            </a>
          </div>
        </div>

        <!-- App Badges -->
        <div class="flex flex-wrap gap-3">
          <a href="#"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition-colors">
            <i class="fab fa-apple text-xl"></i>
            <div class="text-left">
              <p class="text-xs text-gray-400">Download on</p>
              <p class="font-semibold text-sm">App Store</p>
            </div>
          </a>
          <a href="#"
            class="inline-flex items-center gap-2 px-4 py-2 bg-gray-800 hover:bg-gray-700 rounded-lg transition-colors">
            <i class="fab fa-google-play text-xl"></i>
            <div class="text-left">
              <p class="text-xs text-gray-400">Get it on</p>
              <p class="font-semibold text-sm">Google Play</p>
            </div>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="text-lg font-bold mb-6 text-white flex items-center">
          <i class="fas fa-link text-primary-400 mr-2"></i>
          Tautan Cepat
        </h4>
        <ul class="space-y-3">
          <?php
          $quick_links = [
            ['icon' => 'home', 'text' => 'Beranda', 'url' => $base_url],
            ['icon' => 'star', 'text' => 'Fitur', 'url' => '#features'],
            ['icon' => 'cogs', 'text' => 'Cara Kerja', 'url' => '#how-it-works'],
            ['icon' => 'chart-bar', 'text' => 'Dashboard', 'url' => '#dashboard'],
            ['icon' => 'tag', 'text' => 'Harga', 'url' => '#pricing'],
            ['icon' => 'users', 'text' => 'Tentang Kami', 'url' => '#about'],
            ['icon' => 'headset', 'text' => 'Kontak', 'url' => '#contact'],
          ];

          foreach ($quick_links as $link):
            ?>
            <li>
              <a href="<?php echo $link['url']; ?>"
                class="group text-gray-400 hover:text-white transition-colors duration-200 flex items-center py-2">
                <i
                  class="fas fa-<?php echo $link['icon']; ?> text-xs w-5 text-primary-400 group-hover:scale-110 transition-transform"></i>
                <span class="ml-3 group-hover:translate-x-1 transition-transform"><?php echo $link['text']; ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Resources -->
      <div>
        <h4 class="text-lg font-bold mb-6 text-white flex items-center">
          <i class="fas fa-toolbox text-secondary-400 mr-2"></i>
          Sumber Daya
        </h4>
        <ul class="space-y-3">
          <?php
          $resources = [
            ['icon' => 'book', 'text' => 'Dokumentasi'],
            ['icon' => 'graduation-cap', 'text' => 'Tutorial'],
            ['icon' => 'blog', 'text' => 'Blog'],
            ['icon' => 'code', 'text' => 'API'],
            ['icon' => 'chart-line', 'text' => 'Status'],
            ['icon' => 'lightbulb', 'text' => 'Blog AI'],
            ['icon' => 'download', 'text' => 'Download'],
            ['icon' => 'question-circle', 'text' => 'FAQ'],
          ];

          foreach ($resources as $resource):
            ?>
            <li>
              <a href="#"
                class="group text-gray-400 hover:text-white transition-colors duration-200 flex items-center py-2">
                <i
                  class="fas fa-<?php echo $resource['icon']; ?> text-xs w-5 text-secondary-400 group-hover:scale-110 transition-transform"></i>
                <span class="ml-3 group-hover:translate-x-1 transition-transform"><?php echo $resource['text']; ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Newsletter -->
      <div>
        <h4 class="text-lg font-bold mb-6 text-white flex items-center">
          <i class="fas fa-envelope text-accent-400 mr-2"></i>
          Tetap Terhubung
        </h4>
        <p class="text-gray-400 mb-6 text-sm leading-relaxed">
          Dapatkan tips produktivitas, update fitur terbaru, dan insight tentang AI langsung di inbox Anda.
        </p>

        <form action="#" method="POST" class="space-y-4">
          <div class="relative">
            <input type="email" placeholder="Email Anda" required
              class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white placeholder-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
            <div class="absolute right-3 top-3">
              <i class="fas fa-envelope text-gray-500"></i>
            </div>
          </div>

          <div class="flex items-center gap-2 text-sm text-gray-400">
            <input type="checkbox" id="newsletter-consent" class="rounded text-primary-500 focus:ring-primary-500">
            <label for="newsletter-consent" class="cursor-pointer">
              Saya setuju menerima email dari Oclock
            </label>
          </div>

          <button type="submit"
            class="group w-full btn btn-primary py-3 rounded-lg hover:shadow-lg transition-all duration-300">
            <i class="fas fa-paper-plane mr-2 group-hover:rotate-12 transition-transform"></i>
            Berlangganan Sekarang
          </button>
        </form>

        <!-- Contact Info -->
        <div class="mt-8 pt-8 border-t border-gray-800">
          <div class="space-y-3">
            <div class="flex items-center text-gray-400 hover:text-white transition-colors">
              <i class="fas fa-envelope text-primary-400 mr-3 w-5"></i>
              <span class="text-sm">support@oclock.ai</span>
            </div>
            <div class="flex items-center text-gray-400 hover:text-white transition-colors">
              <i class="fas fa-phone text-primary-400 mr-3 w-5"></i>
              <span class="text-sm">+62 812 3456 7890</span>
            </div>
            <div class="flex items-center text-gray-400 hover:text-white transition-colors">
              <i class="fas fa-map-marker-alt text-primary-400 mr-3 w-5"></i>
              <span class="text-sm">Jakarta, Indonesia</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Footer -->
    <div class="pt-10 border-t border-gray-800">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <!-- Copyright -->
        <div class="flex items-center gap-4">
          <p class="text-gray-400 text-sm flex items-center">
            <i class="far fa-copyright mr-2 text-primary-400"></i>
            <?php echo date('Y'); ?> Oclock.AI. All rights reserved.
          </p>
          <span class="hidden md:inline text-gray-600">•</span>
          <div class="flex items-center gap-2 text-sm text-gray-400">
            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
            <span>System Status: <span class="text-green-400 font-medium">All Systems Operational</span></span>
          </div>
        </div>

        <!-- Legal Links -->
        <div class="flex flex-wrap gap-4 md:gap-6 text-sm">
          <a href="#" class="group text-gray-400 hover:text-white transition-colors flex items-center">
            <i class="fas fa-shield-alt mr-2 text-primary-400 group-hover:rotate-12 transition-transform"></i>
            Privacy Policy
          </a>
          <a href="#" class="group text-gray-400 hover:text-white transition-colors flex items-center">
            <i class="fas fa-file-contract mr-2 text-secondary-400 group-hover:rotate-12 transition-transform"></i>
            Terms of Service
          </a>
          <a href="#" class="group text-gray-400 hover:text-white transition-colors flex items-center">
            <i class="fas fa-cookie-bite mr-2 text-accent-400 group-hover:rotate-12 transition-transform"></i>
            Cookie Policy
          </a>
          <a href="#" class="group text-gray-400 hover:text-white transition-colors flex items-center">
            <i class="fas fa-gavel mr-2 text-gray-400 group-hover:rotate-12 transition-transform"></i>
            Legal
          </a>
        </div>
      </div>

      <!-- Back to Top Button -->
      <div class="flex justify-center mt-8">
        <button id="back-to-top"
          class="group flex items-center gap-2 px-5 py-2.5 bg-gray-800 hover:bg-gray-700 text-gray-300 hover:text-white rounded-full transition-all duration-300 hover:shadow-lg hover:scale-105">
          <i class="fas fa-arrow-up group-hover:-translate-y-1 transition-transform"></i>
          <span class="text-sm font-medium">Back to Top</span>
        </button>
      </div>

      <!-- Language & Currency Selector -->
      <div class="flex justify-center mt-6">
        <div class="flex items-center gap-4 text-sm text-gray-400">
          <div class="flex items-center gap-2">
            <i class="fas fa-globe text-primary-400"></i>
            <select class="bg-transparent border-none focus:ring-0 text-gray-300">
              <option value="id">🇮🇩 Bahasa Indonesia</option>
              <option value="en">🇺🇸 English</option>
            </select>
          </div>
          <span class="text-gray-600">•</span>
          <div class="flex items-center gap-2">
            <i class="fas fa-money-bill text-secondary-400"></i>
            <select class="bg-transparent border-none focus:ring-0 text-gray-300">
              <option value="idr">IDR - Rupiah</option>
              <option value="usd">USD - US Dollar</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Decorative Bottom Wave -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden">
    <svg class="relative block w-full h-12" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
        opacity=".25" class="fill-gray-800 dark:fill-gray-900"></path>
      <path
        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
        opacity=".5" class="fill-gray-700 dark:fill-gray-800"></path>
      <path
        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
        class="fill-gray-900 dark:fill-gray-950"></path>
    </svg>
  </div>
</footer>

<!-- JavaScript -->
<script type="module" src="/public/js/main.js"></script>

<!-- Back to Top Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Back to Top Button
    const backToTopButton = document.getElementById('back-to-top');

    if (backToTopButton) {
      window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
          backToTopButton.classList.remove('opacity-0', 'translate-y-10');
          backToTopButton.classList.add('opacity-100', 'translate-y-0');
        } else {
          backToTopButton.classList.remove('opacity-100', 'translate-y-0');
          backToTopButton.classList.add('opacity-0', 'translate-y-10');
        }
      });

      backToTopButton.addEventListener('click', function () {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }

    // Newsletter form submission
    const newsletterForm = document.querySelector('footer form');
    if (newsletterForm) {
      newsletterForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const emailInput = this.querySelector('input[type="email"]');
        if (emailInput.value) {
          // Show success message
          const submitBtn = this.querySelector('button[type="submit"]');
          const originalText = submitBtn.innerHTML;
          submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i>Subscribed!';
          submitBtn.classList.add('bg-green-600', 'hover:bg-green-700');
          submitBtn.disabled = true;

          setTimeout(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.classList.remove('bg-green-600', 'hover:bg-green-700');
            submitBtn.disabled = false;
          }, 3000);

          emailInput.value = '';
        }
      });
    }
  });
</script>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'UA-XXXXX-Y');
</script>
</body>

</html>
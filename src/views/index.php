<?php
// Include header
require_once __DIR__ . '/layouts/header.php';
?>

<!-- Hero Section -->
<section class="relative overflow-hidden pt-20 pb-16 md:pt-28 md:pb-24">
  <!-- Animated Background -->
  <div class="absolute inset-0 overflow-hidden">
    <div
      class="absolute -top-40 -right-40 w-80 h-80 bg-primary-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
    </div>
    <div
      class="absolute -bottom-40 -left-40 w-80 h-80 bg-secondary-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000">
    </div>
    <div
      class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-accent-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000">
    </div>
  </div>

  <!-- Grid Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=" 60" height="60"
      viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" %3E%3Cg fill="none" fill-rule="evenodd" %3E%3Cg
      fill="%230ea5e9" fill-opacity="0.4" %3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z
      /%3E%3C/g%3E%3C/g%3E%3C/svg%3E);"></div>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
      <!-- Hero Content -->
      <div class="lg:w-1/2">
        <div
          class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-800 dark:text-primary-300 text-sm font-medium mb-6 animate-fade-in">
          <div class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></div>
          <span>✨ Didukung oleh AI & Machine Learning</span>
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-6 leading-tight">
          <span class="block mb-2">Kelola Tugas</span>
          <span
            class="text-gradient text-gradient-primary bg-clip-text text-transparent bg-gradient-to-r from-primary-600 via-secondary-500 to-accent-500">
            Lebih Cerdas, Lebih Efisien
          </span>
        </h1>

        <p class="text-xl text-gray-700 dark:text-gray-300 mb-8 max-w-2xl leading-relaxed">
          Oclock menggunakan algoritma <span class="font-semibold text-primary-600 dark:text-primary-400">K-Means
            Clustering</span>
          untuk mengelompokkan dan memprioritaskan tugas Anda secara otomatis berdasarkan deadline, kompleksitas, dan
          urgensi.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 mb-12">
          <a href="<?php echo $base_url; ?>register"
            class="group btn btn-primary text-lg px-8 py-4 rounded-xl hover:scale-105 transition-transform duration-300">
            <i class="fas fa-rocket mr-2 group-hover:rotate-12 transition-transform"></i>
            Mulai Sekarang Gratis
          </a>
          <a href="#how-it-works"
            class="group btn btn-outline text-lg px-8 py-4 rounded-xl border-2 hover:border-primary-500">
            <i class="fas fa-play-circle mr-2 group-hover:scale-110 transition-transform"></i>
            <span>Lihat Demo</span>
            <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:ml-3 transition-all"></i>
          </a>
        </div>

        <!-- Trust Badges -->
        <div class="flex flex-wrap items-center gap-8">
          <div class="flex items-center gap-3">
            <div class="flex -space-x-2">
              <?php
              $avatars = ['👨‍💻', '👩‍💼', '👨‍🏫', '👩‍🔬', '👨‍🎨'];
              for ($i = 0; $i < 4; $i++):
                ?>
                <div
                  class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900 border-2 border-white dark:border-gray-800 flex items-center justify-center text-sm">
                  <?php echo $avatars[$i]; ?>
                </div>
              <?php endfor; ?>
            </div>
            <div>
              <p class="text-sm font-semibold">5K+ Pengguna</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">Bergabung bulan ini</p>
            </div>
          </div>

          <div class="hidden md:flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
              <i class="fas fa-shield-alt text-green-600 dark:text-green-400"></i>
            </div>
            <div>
              <p class="text-sm font-semibold">99.9% Uptime</p>
              <p class="text-xs text-gray-500 dark:text-gray-400">Keamanan Terjamin</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Hero Visualization -->
      <div class="lg:w-1/2 relative">
        <div
          class="relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-3xl p-6 shadow-2xl border border-white/20 dark:border-gray-700/30">
          <!-- Floating Badge -->
          <div
            class="absolute -top-3 left-1/2 transform -translate-x-1/2 px-4 py-1.5 bg-gradient-to-r from-primary-500 to-secondary-500 text-white text-xs font-bold rounded-full shadow-lg">
            Live K-Means Clustering
          </div>

          <!-- Animated Visualization -->
          <div
            class="relative h-80 mb-6 rounded-2xl overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900">
            <!-- Animated Grid -->
            <!-- Light mode -->
            <div class="absolute inset-0 opacity-10">
              <div class="h-full w-full bg-grid-50"></div>
            </div>

            <!-- Dark mode support -->
            <div class="absolute inset-0 opacity-10 dark:opacity-5">
              <div class="h-full w-full bg-grid-50 dark:bg-grid-dark"></div>
            </div>

            <!-- Animated Clusters -->
            <div class="absolute top-1/4 left-1/4 transform -translate-x-1/2 -translate-y-1/2">
              <div class="relative">
                <!-- High Priority Cluster -->
                <?php for ($i = 1; $i <= 8; $i++): ?>
                  <div class="absolute w-3 h-3 rounded-full bg-gradient-to-r from-red-500 to-pink-500 opacity-70" style="
                       top: <?php echo sin($i * 0.785) * 40; ?>px;
                       left: <?php echo cos($i * 0.785) * 40; ?>px;
                       animation: float <?php echo 3 + $i * 0.5; ?>s ease-in-out infinite <?php echo $i * 0.2; ?>s;
                     ">
                  </div>
                <?php endfor; ?>
                <div class="absolute w-6 h-6 rounded-full bg-white dark:bg-gray-900 border-4 border-red-500 shadow-xl">
                </div>
              </div>
            </div>

            <div class="absolute top-1/2 right-1/3 transform -translate-x-1/2 -translate-y-1/2">
              <div class="relative">
                <!-- Medium Priority Cluster -->
                <?php for ($i = 1; $i <= 6; $i++): ?>
                  <div class="absolute w-4 h-4 rounded-full bg-gradient-to-r from-yellow-500 to-orange-500 opacity-70"
                    style="
                       top: <?php echo sin($i * 1.047) * 50; ?>px;
                       left: <?php echo cos($i * 1.047) * 50; ?>px;
                       animation: float <?php echo 4 + $i * 0.4; ?>s ease-in-out infinite <?php echo $i * 0.3; ?>s;
                     ">
                  </div>
                <?php endfor; ?>
                <div
                  class="absolute w-6 h-6 rounded-full bg-white dark:bg-gray-900 border-4 border-yellow-500 shadow-xl">
                </div>
              </div>
            </div>

            <div class="absolute bottom-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <div class="relative">
                <!-- Low Priority Cluster -->
                <?php for ($i = 1; $i <= 5; $i++): ?>
                  <div class="absolute w-5 h-5 rounded-full bg-gradient-to-r from-green-500 to-emerald-500 opacity-70"
                    style="
                       top: <?php echo sin($i * 1.256) * 45; ?>px;
                       left: <?php echo cos($i * 1.256) * 45; ?>px;
                       animation: float <?php echo 5 + $i * 0.3; ?>s ease-in-out infinite <?php echo $i * 0.4; ?>s;
                     ">
                  </div>
                <?php endfor; ?>
                <div
                  class="absolute w-6 h-6 rounded-full bg-white dark:bg-gray-900 border-4 border-green-500 shadow-xl">
                </div>
              </div>
            </div>

            <!-- Floating Task Cards -->
            <div
              class="absolute top-6 right-8 w-44 bg-white/90 dark:bg-gray-700/90 backdrop-blur-sm rounded-xl p-4 shadow-lg transform rotate-3 animate-float border border-white/20">
              <div class="flex justify-between items-start mb-3">
                <span class="badge badge-danger px-3 py-1 rounded-full text-xs font-bold">🔥 HIGH</span>
                <span class="text-xs text-gray-500">Today</span>
              </div>
              <p class="font-semibold text-sm mb-2">Laporan Keuangan</p>
              <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                <div class="bg-red-500 h-2 rounded-full" style="width: 85%"></div>
              </div>
            </div>

            <div
              class="absolute bottom-10 left-8 w-44 bg-white/90 dark:bg-gray-700/90 backdrop-blur-sm rounded-xl p-4 shadow-lg transform -rotate-2 border border-white/20">
              <div class="flex justify-between items-start mb-3">
                <span class="badge badge-warning px-3 py-1 rounded-full text-xs font-bold">⚡ MEDIUM</span>
                <span class="text-xs text-gray-500">3 Days</span>
              </div>
              <p class="font-semibold text-sm mb-2">Meeting Tim</p>
              <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
              </div>
            </div>
          </div>

          <!-- Legend -->
          <div class="grid grid-cols-3 gap-4">
            <div class="flex flex-col items-center p-3 rounded-lg bg-red-50 dark:bg-red-900/20">
              <div class="w-3 h-3 rounded-full bg-red-500 mb-2"></div>
              <span class="text-xs font-semibold text-red-700 dark:text-red-300">High Priority</span>
              <span class="text-xs text-gray-600 dark:text-gray-400">Deadline dekat</span>
            </div>
            <div class="flex flex-col items-center p-3 rounded-lg bg-yellow-50 dark:bg-yellow-900/20">
              <div class="w-3 h-3 rounded-full bg-yellow-500 mb-2"></div>
              <span class="text-xs font-semibold text-yellow-700 dark:text-yellow-300">Medium</span>
              <span class="text-xs text-gray-600 dark:text-gray-400">Sedang berjalan</span>
            </div>
            <div class="flex flex-col items-center p-3 rounded-lg bg-green-50 dark:bg-green-900/20">
              <div class="w-3 h-3 rounded-full bg-green-500 mb-2"></div>
              <span class="text-xs font-semibold text-green-700 dark:text-green-300">Low Priority</span>
              <span class="text-xs text-gray-600 dark:text-gray-400">Bisa ditunda</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 relative">
  <div class="absolute inset-0 bg-gradient-to-b from-transparent via-gray-50/50 to-transparent dark:via-gray-900/20">
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium mb-4">
        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
        <span>Fitur Unggulan</span>
      </div>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Semua yang Anda Butuhkan</h2>
      <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
        Dilengkapi dengan teknologi terkini untuk meningkatkan produktivitas Anda
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Feature 1 -->
      <div class="group relative">
        <div
          class="absolute -inset-0.5 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-500">
        </div>
        <div class="relative card card-hover p-8 bg-white dark:bg-gray-800 rounded-2xl">
          <div
            class="w-16 h-16 rounded-xl bg-gradient-to-br from-primary-500 to-primary-600 text-white flex items-center justify-center mb-6 shadow-lg">
            <i class="fas fa-brain text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4">K-Means Clustering AI</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-6">
            Algoritma cerdas yang mengelompokkan tugas secara otomatis berdasarkan deadline, kompleksitas, dan urgensi
            dengan akurasi tinggi.
          </p>
          <div
            class="flex items-center text-primary-600 dark:text-primary-400 font-medium group-hover:translate-x-2 transition-transform">
            <span>Pelajari lebih lanjut</span>
            <i class="fas fa-arrow-right ml-2 group-hover:ml-3 transition-all"></i>
          </div>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="group relative">
        <div
          class="absolute -inset-0.5 bg-gradient-to-r from-secondary-500 to-accent-500 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-500">
        </div>
        <div class="relative card card-hover p-8 bg-white dark:bg-gray-800 rounded-2xl">
          <div
            class="w-16 h-16 rounded-xl bg-gradient-to-br from-secondary-500 to-secondary-600 text-white flex items-center justify-center mb-6 shadow-lg">
            <i class="fas fa-chart-network text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4">Visualisasi Interaktif</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-6">
            Dashboard real-time dengan visualisasi cluster yang interaktif. Lihat prioritas Anda dalam bentuk grafis
            yang mudah dipahami.
          </p>
          <div
            class="flex items-center text-secondary-600 dark:text-secondary-400 font-medium group-hover:translate-x-2 transition-transform">
            <span>Lihat contoh</span>
            <i class="fas fa-arrow-right ml-2 group-hover:ml-3 transition-all"></i>
          </div>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="group relative">
        <div
          class="absolute -inset-0.5 bg-gradient-to-r from-accent-500 to-primary-500 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-500">
        </div>
        <div class="relative card card-hover p-8 bg-white dark:bg-gray-800 rounded-2xl">
          <div
            class="w-16 h-16 rounded-xl bg-gradient-to-br from-accent-500 to-accent-600 text-white flex items-center justify-center mb-6 shadow-lg">
            <i class="fas fa-bell-ring text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-4">Notifikasi Cerdas</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-6">
            Sistem notifikasi yang cerdas berdasarkan perubahan prioritas tugas yang dihitung secara real-time oleh AI.
          </p>
          <div
            class="flex items-center text-accent-600 dark:text-accent-400 font-medium group-hover:translate-x-2 transition-transform">
            <span>Atur notifikasi</span>
            <i class="fas fa-arrow-right ml-2 group-hover:ml-3 transition-all"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Features -->
    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $additional_features = [
        ['icon' => 'sync-alt', 'title' => 'Real-time Sync', 'desc' => 'Update data secara real-time'],
        ['icon' => 'shield-alt', 'title' => 'Keamanan Data', 'desc' => 'Enkripsi end-to-end'],
        ['icon' => 'mobile-alt', 'title' => 'Mobile Ready', 'desc' => 'Akses di semua device'],
        ['icon' => 'cloud-upload-alt', 'title' => 'Cloud Backup', 'desc' => 'Auto backup ke cloud'],
      ];

      foreach ($additional_features as $feature):
        ?>
        <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
          <div
            class="w-12 h-12 rounded-lg bg-primary-100 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 flex items-center justify-center flex-shrink-0">
            <i class="fas fa-<?php echo $feature['icon']; ?>"></i>
          </div>
          <div>
            <h4 class="font-semibold mb-1"><?php echo $feature['title']; ?></h4>
            <p class="text-sm text-gray-600 dark:text-gray-400"><?php echo $feature['desc']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-20 relative overflow-hidden">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute inset-0"
      style="background-image: radial-gradient(circle at 2px 2px, currentColor 1px, transparent 1px); background-size: 40px 40px;">
    </div>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium mb-4">
        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
        <span>Cara Kerja</span>
      </div>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Cara Kerja Oclock</h2>
      <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
        Hanya 3 langkah sederhana untuk mengoptimalkan produktivitas Anda
      </p>
    </div>

    <!-- Timeline -->
    <div class="relative max-w-4xl mx-auto">
      <!-- Timeline Line -->
      <div
        class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-primary-500 via-secondary-500 to-accent-500 hidden md:block">
      </div>

      <!-- Step 1 -->
      <div class="flex flex-col md:flex-row items-center mb-20">
        <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0">
          <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl">
            <div
              class="absolute -left-3 top-1/2 transform -translate-y-1/2 w-6 h-6 rounded-full bg-primary-500 border-4 border-white dark:border-gray-900 hidden md:block">
            </div>
            <div class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium mb-4">
              <span class="text-2xl font-bold">01</span>
              <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
            </div>
            <h3 class="text-2xl font-bold mb-4">Tambahkan Tugas</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
              Masukkan tugas dengan detail lengkap: nama, deadline, tingkat kesulitan, dan estimasi waktu pengerjaan.
            </p>
            <div class="flex items-center gap-3">
              <div
                class="w-10 h-10 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center">
                <i class="fas fa-plus text-primary-600 dark:text-primary-400"></i>
              </div>
              <div class="text-sm">
                <p class="font-medium">Drag & Drop</p>
                <p class="text-gray-500 dark:text-gray-400">Upload file dengan mudah</p>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/2 md:pl-12">
          <div class="relative h-64 rounded-xl overflow-hidden border-2 border-gray-200 dark:border-gray-700">
            <div
              class="absolute inset-0 bg-gradient-to-br from-primary-50 to-secondary-50 dark:from-primary-900/20 dark:to-secondary-900/20">
            </div>
            <div class="absolute top-4 left-4 w-48 bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg">
              <div class="flex items-center gap-2 mb-2">
                <div
                  class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center">
                  <i class="fas fa-tasks text-primary-600 dark:text-primary-400"></i>
                </div>
                <div>
                  <p class="font-semibold text-sm">Tambah Tugas Baru</p>
                  <p class="text-xs text-gray-500">Klik untuk mulai</p>
                </div>
              </div>
              <div class="space-y-2">
                <input type="text" placeholder="Nama tugas..." class="w-full px-3 py-2 text-sm border rounded">
                <input type="date" class="w-full px-3 py-2 text-sm border rounded">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col md:flex-row items-center mb-20">
        <div class="md:w-1/2 md:pr-12 order-2 md:order-1">
          <div class="relative h-64 rounded-xl overflow-hidden border-2 border-gray-200 dark:border-gray-700">
            <div
              class="absolute inset-0 bg-gradient-to-br from-secondary-50 to-accent-50 dark:from-secondary-900/20 dark:to-accent-900/20">
            </div>
            <div class="absolute top-4 right-4 w-48 bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg">
              <div class="text-center mb-3">
                <i class="fas fa-brain text-3xl text-secondary-600 dark:text-secondary-400 mb-2"></i>
                <p class="font-semibold text-sm">AI Sedang Menganalisis</p>
                <p class="text-xs text-gray-500">Tunggu sebentar...</p>
              </div>
              <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                <div class="bg-secondary-500 h-2 rounded-full animate-pulse" style="width: 75%"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0 order-1 md:order-2">
          <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl">
            <div
              class="absolute -right-3 top-1/2 transform -translate-y-1/2 w-6 h-6 rounded-full bg-secondary-500 border-4 border-white dark:border-gray-900 hidden md:block">
            </div>
            <div class="inline-flex items-center gap-2 text-secondary-600 dark:text-secondary-400 font-medium mb-4">
              <span class="text-2xl font-bold">02</span>
              <div class="w-2 h-2 bg-secondary-500 rounded-full"></div>
            </div>
            <h3 class="text-2xl font-bold mb-4">Analisis AI</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
              Sistem menganalisis dan mengelompokkan tugas menggunakan algoritma K-Means Clustering dengan akurasi
              tinggi.
            </p>
            <div class="flex items-center gap-3">
              <div
                class="w-10 h-10 rounded-full bg-secondary-100 dark:bg-secondary-900/30 flex items-center justify-center">
                <i class="fas fa-robot text-secondary-600 dark:text-secondary-400"></i>
              </div>
              <div class="text-sm">
                <p class="font-medium">Machine Learning</p>
                <p class="text-gray-500 dark:text-gray-400">Model terus berkembang</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 md:pr-12 mb-8 md:mb-0">
          <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-xl">
            <div
              class="absolute -left-3 top-1/2 transform -translate-y-1/2 w-6 h-6 rounded-full bg-accent-500 border-4 border-white dark:border-gray-900 hidden md:block">
            </div>
            <div class="inline-flex items-center gap-2 text-accent-600 dark:text-accent-400 font-medium mb-4">
              <span class="text-2xl font-bold">03</span>
              <div class="w-2 h-2 bg-accent-500 rounded-full"></div>
            </div>
            <h3 class="text-2xl font-bold mb-4">Hasil Prioritas</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
              Tugas dikelompokkan menjadi High, Medium, dan Low priority dengan rekomendasi aksi yang jelas.
            </p>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-accent-100 dark:bg-accent-900/30 flex items-center justify-center">
                <i class="fas fa-chart-pie text-accent-600 dark:text-accent-400"></i>
              </div>
              <div class="text-sm">
                <p class="font-medium">Visualisasi Real-time</p>
                <p class="text-gray-500 dark:text-gray-400">Dashboard interaktif</p>
              </div>
            </div>
          </div>
        </div>
        <div class="md:w-1/2 md:pl-12">
          <div class="relative h-64 rounded-xl overflow-hidden border-2 border-gray-200 dark:border-gray-700">
            <div
              class="absolute inset-0 bg-gradient-to-br from-accent-50 to-primary-50 dark:from-accent-900/20 dark:to-primary-900/20">
            </div>
            <div class="absolute top-4 left-4 w-56 bg-white dark:bg-gray-800 rounded-lg p-4 shadow-lg">
              <div class="flex items-center justify-between mb-3">
                <p class="font-semibold">Hasil Prioritas</p>
                <span
                  class="text-xs bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 px-2 py-1 rounded">Selesai</span>
              </div>
              <div class="space-y-2">
                <div class="flex items-center justify-between">
                  <span class="text-sm">High Priority</span>
                  <span class="font-semibold text-red-600">5 tasks</span>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-sm">Medium Priority</span>
                  <span class="font-semibold text-yellow-600">4 tasks</span>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-sm">Low Priority</span>
                  <span class="font-semibold text-green-600">3 tasks</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Dashboard Preview -->
<section id="dashboard" class="py-20 relative overflow-hidden">
  <div
    class="absolute inset-0 bg-gradient-to-br from-primary-50/30 via-transparent to-secondary-50/30 dark:from-primary-900/10 dark:via-transparent dark:to-secondary-900/10">
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-16">
      <div class="inline-flex items-center gap-2 text-primary-600 dark:text-primary-400 font-medium mb-4">
        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
        <span>Dashboard</span>
      </div>
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Dashboard Interaktif</h2>
      <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
        Kelola semua tugas Anda dalam satu dashboard yang intuitif dan powerful
      </p>
    </div>

    <!-- Dashboard Mockup -->
    <div class="relative max-w-6xl mx-auto">
      <!-- Floating Elements -->
      <div class="absolute -top-6 -right-6 w-32 h-32 rounded-full bg-primary-500/10 blur-3xl"></div>
      <div class="absolute -bottom-6 -left-6 w-32 h-32 rounded-full bg-secondary-500/10 blur-3xl"></div>

      <!-- Main Dashboard -->
      <div
        class="relative bg-white dark:bg-gray-800 rounded-3xl shadow-2xl overflow-hidden border border-gray-200 dark:border-gray-700">
        <!-- Dashboard Header -->
        <div class="relative bg-gradient-to-r from-primary-600 to-secondary-600 p-6 text-white">
          <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=" 60"
              height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" %3E%3Cg fill="none" fill-rule="evenodd"
              %3E%3Cg fill="%23ffffff" fill-opacity="0.4" %3E%3Cpath
              d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
              /%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
          </div>
          <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-4">
            <div>
              <h3 class="text-2xl font-bold flex items-center gap-2">
                <i class="fas fa-gauge-high"></i>
                Dashboard Oclock
              </h3>
              <p class="opacity-90 mt-1"><?php echo date('d F Y'); ?> • <span class="font-semibold">12 Tugas
                  Aktif</span></p>
            </div>
            <div class="flex items-center gap-3">
              <button
                class="px-4 py-2 bg-white/20 hover:bg-white/30 rounded-lg font-medium transition-colors flex items-center gap-2">
                <i class="fas fa-plus"></i>
                <span>Tambah Tugas</span>
              </button>
              <button
                class="w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 flex items-center justify-center transition-colors">
                <i class="fas fa-ellipsis-h"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Dashboard Content -->
        <div class="p-6">
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-6">
              <!-- Priority Stats -->
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div
                  class="bg-gradient-to-br from-red-50 to-red-100 dark:from-red-900/20 dark:to-red-800/10 rounded-2xl p-6">
                  <div class="flex justify-between items-start">
                    <div>
                      <p class="text-sm font-medium text-red-600 dark:text-red-400">High Priority</p>
                      <p class="text-3xl font-bold text-red-800 dark:text-red-300 mt-2">5</p>
                      <p class="text-xs text-red-600/70 dark:text-red-400/70 mt-1">Tugas mendesak</p>
                    </div>
                    <div class="w-14 h-14 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                      <i class="fas fa-fire text-2xl text-red-600 dark:text-red-400"></i>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="flex items-center justify-between text-sm mb-1">
                      <span class="text-red-700 dark:text-red-300">Progress</span>
                      <span class="font-semibold">85%</span>
                    </div>
                    <div class="w-full bg-red-200 dark:bg-red-900/40 rounded-full h-2">
                      <div class="h-2 rounded-full bg-red-500 [width:85%]"></div>
                    </div>
                  </div>
                </div>

                <div
                  class="bg-gradient-to-br from-yellow-50 to-yellow-100 dark:from-yellow-900/20 dark:to-yellow-800/10 rounded-2xl p-6">
                  <div class="flex justify-between items-start">
                    <div>
                      <p class="text-sm font-medium text-yellow-600 dark:text-yellow-400">Medium Priority</p>
                      <p class="text-3xl font-bold text-yellow-800 dark:text-yellow-300 mt-2">4</p>
                      <p class="text-xs text-yellow-600/70 dark:text-yellow-400/70 mt-1">Tugas sedang</p>
                    </div>
                    <div
                      class="w-14 h-14 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center">
                      <i class="fas fa-balance-scale text-2xl text-yellow-600 dark:text-yellow-400"></i>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="flex items-center justify-between text-sm mb-1">
                      <span class="text-yellow-700 dark:text-yellow-300">Progress</span>
                      <span class="font-semibold">45%</span>
                    </div>
                    <div class="w-full bg-yellow-200 dark:bg-yellow-900/40 rounded-full h-2">
                      <div class="bg-yellow-500 h-2 rounded-full w-[45%]"></div>
                    </div>
                  </div>
                </div>

                <div
                  class="bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/10 rounded-2xl p-6">
                  <div class="flex justify-between items-start">
                    <div>
                      <p class="text-sm font-medium text-green-600 dark:text-green-400">Low Priority</p>
                      <p class="text-3xl font-bold text-green-800 dark:text-green-300 mt-2">3</p>
                      <p class="text-xs text-green-600/70 dark:text-green-400/70 mt-1">Tugas rutin</p>
                    </div>
                    <div
                      class="w-14 h-14 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                      <i class="fas fa-leaf text-2xl text-green-600 dark:text-green-400"></i>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="flex items-center justify-between text-sm mb-1">
                      <span class="text-green-700 dark:text-green-300">Progress</span>
                      <span class="font-semibold">20%</span>
                    </div>
                    <div class="w-full bg-green-200 dark:bg-green-900/40 rounded-full h-2">
                      <div class="bg-green-500 h-2 rounded-full w-[20%]"></div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Weekly Stats -->
              <div class="bg-white dark:bg-gray-800/50 rounded-2xl p-6 border border-gray-100 dark:border-gray-700/50">
                <div class="flex justify-between items-center mb-6">
                  <h4 class="text-lg font-bold">Statistik Minggu Ini</h4>
                  <select class="text-sm border rounded-lg px-3 py-1 bg-transparent">
                    <option>Minggu Ini</option>
                    <option>Bulan Ini</option>
                    <option>Tahun Ini</option>
                  </select>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                  <div class="text-center p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                    <div class="text-2xl font-bold text-primary-600 dark:text-primary-400 mb-1">8</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Tugas Selesai</div>
                  </div>
                  <div class="text-center p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                    <div class="text-2xl font-bold text-green-600 dark:text-green-400 mb-1">92%</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Tepat Waktu</div>
                  </div>
                  <div class="text-center p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                    <div class="text-2xl font-bold text-secondary-600 dark:text-secondary-400 mb-1">4.2</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Produktivitas</div>
                  </div>
                  <div class="text-center p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                    <div class="text-2xl font-bold text-accent-600 dark:text-accent-400 mb-1">12.5h</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Waktu Hemat</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right Column - Quick Add -->
            <div class="space-y-6">
              <!-- Quick Add Form -->
              <div
                class="bg-gradient-to-b from-primary-50 to-transparent dark:from-primary-900/10 dark:to-transparent rounded-2xl p-6 border border-primary-100 dark:border-primary-900/30">
                <h4 class="text-lg font-bold mb-4 flex items-center gap-2">
                  <i class="fas fa-bolt text-primary-500"></i>
                  Tambah Tugas Cepat
                </h4>
                <form class="space-y-4">
                  <div>
                    <input type="text" placeholder="Nama tugas..."
                      class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                  </div>
                  <div>
                    <select
                      class="w-full px-4 py-3 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                      <option value="">Pilih Deadline</option>
                      <option value="today">📅 Hari Ini</option>
                      <option value="tomorrow">⏰ Besok</option>
                      <option value="week">📆 Minggu Ini</option>
                      <option value="month">🗓️ Bulan Ini</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-sm font-medium mb-2">Kompleksitas</label>
                    <div class="flex gap-2">
                      <button type="button"
                        class="flex-1 py-2 text-center border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-sm">
                        👶 Rendah
                      </button>
                      <button type="button"
                        class="flex-1 py-2 text-center border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-sm">
                        👨‍💼 Sedang
                      </button>
                      <button type="button"
                        class="flex-1 py-2 text-center border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-sm">
                        🦸‍♂️ Tinggi
                      </button>
                    </div>
                  </div>
                  <button type="submit" class="w-full btn btn-primary py-3 rounded-xl">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Tugas
                  </button>
                </form>
              </div>

              <!-- Quick Tips -->
              <div
                class="bg-gradient-to-b from-secondary-50 to-transparent dark:from-secondary-900/10 dark:to-transparent rounded-2xl p-6 border border-secondary-100 dark:border-secondary-900/30">
                <h4 class="text-lg font-bold mb-4 flex items-center gap-2">
                  <i class="fas fa-lightbulb text-secondary-500"></i>
                  Tips Produktivitas
                </h4>
                <div class="space-y-3">
                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 rounded-full bg-secondary-100 dark:bg-secondary-900/30 flex items-center justify-center flex-shrink-0 mt-0.5">
                      <i class="fas fa-check text-xs text-secondary-600 dark:text-secondary-400"></i>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Fokus pada tugas High Priority terlebih dahulu
                    </p>
                  </div>
                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 rounded-full bg-secondary-100 dark:bg-secondary-900/30 flex items-center justify-center flex-shrink-0 mt-0.5">
                      <i class="fas fa-check text-xs text-secondary-600 dark:text-secondary-400"></i>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Review prioritas setiap pagi</p>
                  </div>
                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 rounded-full bg-secondary-100 dark:bg-secondary-900/30 flex items-center justify-center flex-shrink-0 mt-0.5">
                      <i class="fas fa-check text-xs text-secondary-600 dark:text-secondary-400"></i>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Break besar tugas menjadi subtask kecil</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Final CTA -->
    <div class="text-center mt-20">
      <div class="inline-block relative">
        <div
          class="absolute -inset-4 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-3xl blur-2xl opacity-20">
        </div>
        <div
          class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 md:p-12 shadow-2xl border border-gray-100 dark:border-gray-700">
          <h3 class="text-2xl md:text-3xl font-bold mb-4">Siap Mengoptimalkan Produktivitas Anda?</h3>
          <p class="text-gray-600 dark:text-gray-400 mb-8 max-w-2xl mx-auto">
            Bergabung dengan ribuan pengguna yang telah meningkatkan produktivitas mereka dengan Oclock
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo $base_url; ?>register"
              class="group btn btn-primary text-lg px-8 py-4 rounded-xl hover:scale-105 transition-all duration-300">
              <i class="fas fa-rocket mr-2 group-hover:rotate-12 transition-transform"></i>
              Daftar Sekarang Gratis
            </a>
            <a href="#features" class="group btn btn-outline text-lg px-8 py-4 rounded-xl border-2">
              <i class="fas fa-star mr-2 group-hover:scale-110 transition-transform"></i>
              Lihat Semua Fitur
              <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:ml-3 transition-all"></i>
            </a>
          </div>
          <p class="mt-6 text-sm text-gray-500 dark:text-gray-400">
            <i class="fas fa-heart text-red-500 mr-1"></i>
            Tidak perlu kartu kredit • Batalkan kapan saja
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/layouts/footer.php';
?>
<?php
// Konfigurasi dasar aplikasi
$app_name = "Oclock - Manajemen Tugas dengan K-Means Clustering";
$app_version = "1.0.0";
// $base_url = "http://localhost/oclock/public/";
$base_url = ""; // Kosongkan jika menggunakan root relative path
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $app_name; ?></title>
  <meta name="description"
    content="Kelola tugas Anda secara cerdas dengan algoritma K-Means Clustering untuk menentukan prioritas optimal">

  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="/public/css/main.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Fonts - Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/public/images/favicon.ico">

  <!-- Custom styles -->
  <style>
    :root {
      --header-height: 72px;
    }

    .gradient-bg {
      background: linear-gradient(135deg, rgb(14, 165, 233) 0%, rgb(217, 70, 239) 100%);
    }

    .logo-text-gradient {
      background: linear-gradient(135deg, #0ea5e9 0%, #d946ef 50%, #0ea5e9 100%);
      background-size: 200% auto;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .logo-text-gradient:hover {
      animation: shimmer 2s linear infinite;
    }

    @keyframes shimmer {
      to {
        background-position: 200% center;
      }
    }

    /* Custom animations */
    @keyframes blob {
      0% {
        transform: translate(0px, 0px) scale(1);
      }

      33% {
        transform: translate(30px, -50px) scale(1.1);
      }

      66% {
        transform: translate(-20px, 20px) scale(0.9);
      }

      100% {
        transform: translate(0px, 0px) scale(1);
      }
    }

    .animate-blob {
      animation: blob 7s infinite;
    }

    .animation-delay-2000 {
      animation-delay: 2s;
    }

    .animation-delay-4000 {
      animation-delay: 4s;
    }

    /* Glass effect */
    .glass-nav {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .dark .glass-nav {
      background: rgba(17, 24, 39, 0.85);
      border-bottom: 1px solid rgba(55, 65, 81, 0.3);
    }

    /* Mobile menu animation */
    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .mobile-menu-enter {
      animation: slideDown 0.3s ease-out;
    }

    /* Nav link hover effect */
    .nav-link-hover {
      position: relative;
    }

    .nav-link-hover::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -4px;
      left: 0;
      background: linear-gradient(90deg, #0ea5e9, #d946ef);
      transition: width 0.3s ease;
    }

    .nav-link-hover:hover::after {
      width: 100%;
    }

    .nav-link-hover.active::after {
      width: 100%;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300 font-sans">
  <!-- Header/Navigation -->
  <header
    class="sticky top-0 z-50 glass-nav supports-[backdrop-filter]:bg-white/80 dark:supports-[backdrop-filter]:bg-gray-900/80">
    <nav class="container mx-auto px-4">
      <div class="flex items-center justify-between h-16 md:h-20">

        <!-- Logo & Brand -->
        <div class="flex items-center space-x-3 flex-1 md:flex-none">
          <div
            class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-gradient-to-br from-primary-500 to-secondary-500 flex items-center justify-center shadow-lg">
            <i class="fas fa-clock text-white text-lg md:text-xl"></i>
          </div>
          <div class="flex flex-col">
            <a href="<?php echo $base_url; ?>" class="text-lg md:text-2xl font-bold tracking-tight logo-text-gradient">
              Oclock<span class="text-primary-600 dark:text-primary-400">.AI</span>
            </a>
            <p class="text-xs text-gray-500 dark:text-gray-400 hidden md:block">K-Means Clustering</p>
            <p class="text-xs text-gray-500 dark:text-gray-400 md:hidden">Task Manager</p>
          </div>
        </div>

        <!-- Desktop Navigation - Center -->
        <div class="hidden lg:flex items-center justify-center flex-1">
          <div class="flex items-center space-x-1 bg-gray-100 dark:bg-gray-800/50 rounded-full p-1">
            <?php
            $nav_items = [
              'index.php' => ['icon' => 'home', 'text' => 'Beranda'],
              'features' => ['icon' => 'star', 'text' => 'Fitur'],
              'how-it-works' => ['icon' => 'cogs', 'text' => 'Cara Kerja'],
              'dashboard' => ['icon' => 'chart-bar', 'text' => 'Dashboard'],
              'pricing' => ['icon' => 'tag', 'text' => 'Harga'],
            ];

            foreach ($nav_items as $key => $item):
              $is_active = ($key === 'index.php' && $current_page === 'index.php') ||
                (isset($_GET['page']) && $_GET['page'] === $key);
              $active_class = $is_active ? 'bg-white dark:bg-gray-700 text-primary-600 dark:text-primary-400 shadow-sm' :
                'text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400';
              ?>
              <a href="<?php echo $key === 'index.php' ? $base_url : '#' . $key; ?>"
                class="nav-link-hover px-4 py-2 rounded-full font-medium text-sm transition-all duration-200 flex items-center space-x-2 <?php echo $active_class; ?> <?php echo $is_active ? 'active' : ''; ?>">
                <i class="fas fa-<?php echo $item['icon']; ?> text-xs"></i>
                <span><?php echo $item['text']; ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Desktop Actions - Right -->
        <div class="hidden lg:flex items-center space-x-4 flex-1 justify-end">
          <!-- Dark Mode Toggle -->
          <button id="dark-mode-toggle"
            class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-200 group"
            aria-label="Toggle dark mode" title="Toggle dark mode">
            <i class="fas fa-moon text-gray-700 dark:text-yellow-400 group-hover:rotate-12 transition-transform"></i>
          </button>

          <!-- Auth Buttons -->
          <div class="flex items-center space-x-3">
            <a href="<?php echo $base_url; ?>login"
              class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-200">
              <i class="fas fa-sign-in-alt mr-2"></i>Masuk
            </a>
            <a href="<?php echo $base_url; ?>register"
              class="px-5 py-2.5 bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 text-white text-sm font-semibold rounded-full transition-all duration-200 shadow-md hover:shadow-lg">
              <i class="fas fa-user-plus mr-2"></i>Daftar Gratis
            </a>
          </div>
        </div>

        <!-- Mobile Actions -->
        <div class="flex items-center space-x-3 lg:hidden">
          <!-- Dark Mode Toggle (Mobile) -->
          <button id="dark-mode-toggle-mobile"
            class="p-2 rounded-full bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
            aria-label="Toggle dark mode">
            <i class="fas fa-moon text-sm text-gray-700 dark:text-yellow-400"></i>
          </button>

          <!-- Login Button (Mobile) -->
          <a href="<?php echo $base_url; ?>login"
            class="px-3 py-2 text-sm font-medium text-primary-600 dark:text-primary-400 hover:text-primary-800 dark:hover:text-primary-300 transition-colors">
            <i class="fas fa-sign-in-alt"></i>
            <span class="sr-only md:not-sr-only md:ml-1">Masuk</span>
          </a>

          <!-- Mobile Menu Button -->
          <button id="mobile-menu-btn"
            class="p-2 rounded-lg text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors"
            aria-label="Toggle mobile menu" aria-expanded="false">
            <i class="fas fa-bars text-lg"></i>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu"
        class="hidden lg:hidden py-4 border-t border-gray-200 dark:border-gray-800 mt-2 mobile-menu-enter">
        <div class="flex flex-col space-y-2">
          <!-- Mobile Navigation Links -->
          <?php foreach ($nav_items as $key => $item):
            $is_active = ($key === 'index.php' && $current_page === 'index.php') ||
              (isset($_GET['page']) && $_GET['page'] === $key);
            $active_class = $is_active ? 'bg-primary-50 dark:bg-primary-900/20 text-primary-600 dark:text-primary-400' :
              'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800';
            ?>
            <a href="<?php echo $key === 'index.php' ? $base_url : '#' . $key; ?>"
              class="flex items-center justify-between px-4 py-3 rounded-lg font-medium transition-colors duration-200 <?php echo $active_class; ?>">
              <div class="flex items-center space-x-3">
                <i class="fas fa-<?php echo $item['icon']; ?> w-5 text-center"></i>
                <span><?php echo $item['text']; ?></span>
              </div>
              <?php if ($is_active): ?>
                <i class="fas fa-check text-primary-500 text-sm"></i>
              <?php endif; ?>
            </a>
          <?php endforeach; ?>

          <!-- Mobile Auth Section -->
          <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-800">
            <div class="flex flex-col space-y-3">
              <a href="<?php echo $base_url; ?>login"
                class="flex items-center justify-center px-4 py-3 bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium transition-colors">
                <i class="fas fa-sign-in-alt mr-3"></i>
                Masuk ke Akun
              </a>
              <a href="<?php echo $base_url; ?>register"
                class="flex items-center justify-center px-4 py-3 bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 text-white rounded-lg font-semibold transition-all shadow-md hover:shadow-lg">
                <i class="fas fa-user-plus mr-3"></i>
                Buat Akun Gratis
              </a>
            </div>

            <!-- Mobile Contact/Info -->
            <div class="mt-6 text-center">
              <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">Butuh bantuan?</p>
              <a href="mailto:support@oclock.ai" class="text-sm text-primary-600 dark:text-primary-400 hover:underline">
                <i class="fas fa-envelope mr-1"></i>support@oclock.ai
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="min-h-screen">
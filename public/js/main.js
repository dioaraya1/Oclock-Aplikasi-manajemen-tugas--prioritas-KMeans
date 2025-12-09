(() => {
  // src/js/modules/navigation.js
  function initNavigation() {
    console.log("Navigation module initialized");
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener("click", function() {
        const isExpanded = this.getAttribute("aria-expanded") === "true";
        this.setAttribute("aria-expanded", !isExpanded);
        mobileMenu.classList.toggle("hidden");
        const icon = this.querySelector("i");
        if (icon) {
          if (isExpanded) {
            icon.className = "fas fa-bars text-lg";
          } else {
            icon.className = "fas fa-times text-lg";
          }
        }
      });
      document.addEventListener("click", function(e) {
        if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target) && !mobileMenu.classList.contains("hidden")) {
          mobileMenu.classList.add("hidden");
          mobileMenuBtn.setAttribute("aria-expanded", "false");
          const icon = mobileMenuBtn.querySelector("i");
          if (icon)
            icon.className = "fas fa-bars text-lg";
        }
      });
      mobileMenu.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener("click", function() {
          mobileMenu.classList.add("hidden");
          mobileMenuBtn.setAttribute("aria-expanded", "false");
          const icon = mobileMenuBtn.querySelector("i");
          if (icon)
            icon.className = "fas fa-bars text-lg";
        });
      });
    }
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function(e) {
        const href = this.getAttribute("href");
        if (href === "#")
          return;
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          const headerHeight = document.querySelector("header")?.offsetHeight || 72;
          const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
          window.scrollTo({
            top: targetPosition,
            behavior: "smooth"
          });
          history.pushState(null, null, href);
        }
      });
    });
    function highlightActiveNavLink() {
      const currentHash = window.location.hash;
      const navLinks = document.querySelectorAll(".nav-link-hover");
      navLinks.forEach((link) => {
        link.classList.remove("active");
        const linkHref = link.getAttribute("href");
        if (!currentHash && linkHref === "<?php echo $base_url; ?>" || currentHash && linkHref === currentHash || linkHref === "index.php" && window.location.pathname.endsWith("index.php")) {
          link.classList.add("active");
        }
      });
    }
    highlightActiveNavLink();
    window.addEventListener("hashchange", highlightActiveNavLink);
    window.addEventListener("scroll", function() {
      const sections = document.querySelectorAll("section[id]");
      const scrollPos = window.pageYOffset + 100;
      sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        const sectionId = section.getAttribute("id");
        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
          const navLink = document.querySelector(`a[href="#${sectionId}"]`);
          if (navLink) {
            document.querySelectorAll(".nav-link-hover").forEach((link) => {
              link.classList.remove("active");
            });
            navLink.classList.add("active");
          }
        }
      });
    });
    window.addEventListener("scroll", function() {
      const header = document.querySelector("header");
      if (window.scrollY > 10) {
        header.classList.add("shadow-md");
      } else {
        header.classList.remove("shadow-md");
      }
    });
  }

  // src/js/modules/darkmode.js
  function initDarkMode() {
    console.log("Dark mode module initialized");
    const darkModeToggle = document.getElementById("dark-mode-toggle") || document.getElementById("dark-mode-toggle-mobile");
    const darkModeIcon = darkModeToggle?.querySelector("i");
    if (!darkModeToggle) {
      console.warn("Dark mode toggle button not found");
      return;
    }
    if (darkModeToggle) {
      const getCurrentTheme = () => {
        const savedTheme = localStorage.getItem("theme");
        const prefersDark = window.matchMedia(
          "(prefers-color-scheme: dark)"
        ).matches;
        if (savedTheme) {
          return savedTheme;
        }
        return prefersDark ? "dark" : "light";
      };
      const applyTheme = (theme) => {
        if (theme === "dark") {
          document.documentElement.classList.add("dark");
          updateDarkModeIcon(true);
        } else {
          document.documentElement.classList.remove("dark");
          updateDarkModeIcon(false);
        }
      };
      const updateDarkModeIcon = (isDark) => {
        if (!darkModeIcon)
          return;
        if (isDark) {
          darkModeIcon.className = "fas fa-sun text-yellow-400";
          darkModeIcon.title = "Switch to light mode";
        } else {
          darkModeIcon.className = "fas fa-moon text-gray-700 dark:text-gray-300";
          darkModeIcon.title = "Switch to dark mode";
        }
      };
      const currentTheme = getCurrentTheme();
      applyTheme(currentTheme);
      darkModeToggle.addEventListener("click", () => {
        const isDark = document.documentElement.classList.contains("dark");
        const newTheme = isDark ? "light" : "dark";
        document.documentElement.classList.toggle("dark");
        localStorage.setItem("theme", newTheme);
        updateDarkModeIcon(!isDark);
        document.dispatchEvent(
          new CustomEvent("themeChange", {
            detail: { theme: newTheme }
          })
        );
        darkModeToggle.classList.add("ring-2", "ring-primary-500");
        setTimeout(() => {
          darkModeToggle.classList.remove("ring-2", "ring-primary-500");
        }, 300);
      });
      window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (e) => {
        if (!localStorage.getItem("theme")) {
          const newTheme = e.matches ? "dark" : "light";
          applyTheme(newTheme);
        }
      });
    }
  }

  // src/js/main.js
  document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM fully loaded and parsed");
    initNavigation();
    initDarkMode();
  });
})();

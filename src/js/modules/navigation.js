// NAVIGATION MODULE
export function initNavigation() {
  console.log("Navigation module initialized");

  // MOBILE MENU TOGGLE
  const mobileMenuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  // ===== MOBILE MENU TOGGLE =====
  if (mobileMenuBtn && mobileMenu) {
    // Toggle menu
    mobileMenuBtn.addEventListener("click", function () {
      const isExpanded = this.getAttribute("aria-expanded") === "true";
      this.setAttribute("aria-expanded", !isExpanded);
      mobileMenu.classList.toggle("hidden");

      // Animate hamburger icon
      const icon = this.querySelector("i");
      if (icon) {
        if (isExpanded) {
          icon.className = "fas fa-bars text-lg";
        } else {
          icon.className = "fas fa-times text-lg";
        }
      }
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (e) {
      if (
        !mobileMenu.contains(e.target) &&
        !mobileMenuBtn.contains(e.target) &&
        !mobileMenu.classList.contains("hidden")
      ) {
        mobileMenu.classList.add("hidden");
        mobileMenuBtn.setAttribute("aria-expanded", "false");
        const icon = mobileMenuBtn.querySelector("i");
        if (icon) icon.className = "fas fa-bars text-lg";
      }
    });

    // Close menu when clicking a link (for single page navigation)
    mobileMenu.querySelectorAll('a[href^="#"]').forEach((link) => {
      link.addEventListener("click", function () {
        mobileMenu.classList.add("hidden");
        mobileMenuBtn.setAttribute("aria-expanded", "false");
        const icon = mobileMenuBtn.querySelector("i");
        if (icon) icon.className = "fas fa-bars text-lg";
      });
    });
  }
  // ===== SMOOTH SCROLLING =====
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const href = this.getAttribute("href");

      // Skip if it's just #
      if (href === "#") return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();

        // Calculate header offset
        const headerHeight =
          document.querySelector("header")?.offsetHeight || 72;
        const targetPosition =
          target.getBoundingClientRect().top +
          window.pageYOffset -
          headerHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });

        // Update URL hash
        history.pushState(null, null, href);
      }
    });
  });

  // ===== ACTIVE NAV LINK HIGHLIGHTING =====
  function highlightActiveNavLink() {
    const currentHash = window.location.hash;
    const navLinks = document.querySelectorAll(".nav-link-hover");

    navLinks.forEach((link) => {
      link.classList.remove("active");
      const linkHref = link.getAttribute("href");

      if (
        (!currentHash && linkHref === "<?php echo $base_url; ?>") ||
        (currentHash && linkHref === currentHash) ||
        (linkHref === "index.php" &&
          window.location.pathname.endsWith("index.php"))
      ) {
        link.classList.add("active");
      }
    });
  }

  // Initial highlight
  highlightActiveNavLink();

  // Update on hash change
  window.addEventListener("hashchange", highlightActiveNavLink);

  // Update on scroll for section detection
  window.addEventListener("scroll", function () {
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

  // ===== STICKY HEADER SHADOW =====
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 10) {
      header.classList.add("shadow-md");
    } else {
      header.classList.remove("shadow-md");
    }
  });
}

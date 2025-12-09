// DARK MODE MODULE
export function initDarkMode() {
  console.log("Dark mode module initialized");

  const darkModeToggle =
    document.getElementById("dark-mode-toggle") ||
    document.getElementById("dark-mode-toggle-mobile");
  const darkModeIcon = darkModeToggle?.querySelector("i");

  if (!darkModeToggle) {
    console.warn("Dark mode toggle button not found");
    return;
  }

  if (darkModeToggle) {
    // Check for saved theme preference
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

    // Apply theme
    const applyTheme = (theme) => {
      if (theme === "dark") {
        document.documentElement.classList.add("dark");
        updateDarkModeIcon(true);
      } else {
        document.documentElement.classList.remove("dark");
        updateDarkModeIcon(false);
      }
    };

    // Update icon
    const updateDarkModeIcon = (isDark) => {
      if (!darkModeIcon) return;

      if (isDark) {
        darkModeIcon.className = "fas fa-sun text-yellow-400";
        darkModeIcon.title = "Switch to light mode";
      } else {
        darkModeIcon.className = "fas fa-moon text-gray-700 dark:text-gray-300";
        darkModeIcon.title = "Switch to dark mode";
      }
    };

    // Initialize
    const currentTheme = getCurrentTheme();
    applyTheme(currentTheme);

    // Toggle theme
    darkModeToggle.addEventListener("click", () => {
      const isDark = document.documentElement.classList.contains("dark");
      const newTheme = isDark ? "light" : "dark";

      document.documentElement.classList.toggle("dark");
      localStorage.setItem("theme", newTheme);
      updateDarkModeIcon(!isDark);

      // Dispatch event for other components
      document.dispatchEvent(
        new CustomEvent("themeChange", {
          detail: { theme: newTheme },
        })
      );

      // Add visual feedback
      darkModeToggle.classList.add("ring-2", "ring-primary-500");
      setTimeout(() => {
        darkModeToggle.classList.remove("ring-2", "ring-primary-500");
      }, 300);
    });

    // Listen for system theme changes
    window
      .matchMedia("(prefers-color-scheme: dark)")
      .addEventListener("change", (e) => {
        if (!localStorage.getItem("theme")) {
          const newTheme = e.matches ? "dark" : "light";
          applyTheme(newTheme);
        }
      });
  }
}

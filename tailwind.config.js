/** @type {import('tailwindcss').Config} */
module.exports = {
  // Dark mode configuration
  darkMode: "class", // atau 'media'
  // Content paths - JANGAN LUPA DIIMPORT!
  content: [
    "./public/**/*.{php,js}",
    "./src/**/*.{php,js}",
    "./src/views/**/*.{php,js}",
  ],

  theme: {
    extend: {
      // Font Configuration
      fontFamily: {
        sans: [
          "Inter",
          "ui-sans-serif",
          "system-ui",
          "-apple-system",
          "BlinkMacSystemFont",
          "Segoe UI",
          "Roboto",
          "sans-serif",
        ],
        mono: ["ui-monospace", "SFMono-Regular", "Menlo", "monospace"],
        display: ["Inter", "system-ui", "sans-serif"],
      },

      // Semantic Color System dengan HSL Original + Tambahan
      colors: {
        // =========== SEMANTIC COLORS (PRIMARY, SECONDARY, ETC) ===========
        // Primary Color - menggunakan deep-space-blue
        primary: {
          50: "hsl(210 53.8% 94.9%)",
          100: "hsl(208.9 52.9% 90%)",
          200: "hsl(208.9 52.9% 80%)",
          300: "hsl(208.9 52.9% 70%)",
          400: "hsl(208.9 52.9% 60%)",
          500: "hsl(208.9 52.9% 50%)", // Main primary color
          600: "hsl(208.9 52.9% 40%)",
          700: "hsl(208.9 52.9% 30%)",
          800: "hsl(208.9 52.9% 20%)",
          900: "hsl(208.9 52.9% 10%)",
          950: "hsl(208.4 54.3% 6.9%)",
        },

        // Secondary Color - menggunakan baltic-blue
        secondary: {
          50: "hsl(198.5 100% 94.9%)",
          100: "hsl(198.8 100% 90%)",
          200: "hsl(198.8 100% 80%)",
          300: "hsl(198.8 100% 70%)",
          400: "hsl(199.1 100% 60%)",
          500: "hsl(199.1 100% 50%)", // Main secondary color
          600: "hsl(199.1 100% 40%)",
          700: "hsl(198.8 100% 30%)",
          800: "hsl(198.8 100% 20%)",
          900: "hsl(198.8 100% 10%)",
          950: "hsl(200 100% 7.1%)",
        },

        // Accent Color - menggunakan cerulean
        accent: {
          50: "hsl(198.7 61.5% 94.9%)",
          100: "hsl(198.2 64.7% 90%)",
          200: "hsl(197.8 62.7% 80%)",
          300: "hsl(197.9 63.4% 70%)",
          400: "hsl(197.8 62.7% 60%)",
          500: "hsl(197.9 63.1% 50%)", // Main accent color
          600: "hsl(197.8 62.7% 40%)",
          700: "hsl(197.9 63.4% 30%)",
          800: "hsl(197.8 62.7% 20%)",
          900: "hsl(198.2 64.7% 10%)",
          950: "hsl(199.1 61.1% 7.1%)",
        },

        // Tertiary Color - menggunakan blue-bell
        tertiary: {
          50: "hsl(201 76.9% 94.9%)",
          100: "hsl(201.5 76.5% 90%)",
          200: "hsl(201.8 78.4% 80%)",
          300: "hsl(202.2 77.8% 70%)",
          400: "hsl(202.1 78.4% 60%)",
          500: "hsl(202 78% 50%)", // Main tertiary color
          600: "hsl(202.1 78.4% 40%)",
          700: "hsl(202.2 77.8% 30%)",
          800: "hsl(201.8 78.4% 20%)",
          900: "hsl(201.5 76.5% 10%)",
          950: "hsl(201.4 77.8% 7.1%)",
        },

        // Neutral Color - menggunakan alice-blue (dengan penyesuaian untuk netral)
        neutral: {
          50: "hsl(188.6 28% 95.1%)",
          100: "hsl(188 29.4% 90%)",
          200: "hsl(186.4 27.5% 80%)",
          300: "hsl(185.6 28.1% 70%)",
          400: "hsl(186.2 28.4% 60%)",
          500: "hsl(185.9 27.8% 50%)",
          600: "hsl(186.2 28.4% 40%)",
          700: "hsl(185.6 28.1% 30%)",
          800: "hsl(186.4 27.5% 20%)",
          900: "hsl(188 29.4% 10%)",
          950: "hsl(186 27.8% 7.1%)",
        },

        // =========== STATUS/STATE COLORS (OPTIONAL) ===========
        success: {
          50: "hsl(142.1 76.2% 96.3%)",
          100: "hsl(141 84.2% 92.5%)",
          200: "hsl(141.7 78.9% 85.1%)",
          300: "hsl(141.9 76.7% 73.1%)",
          400: "hsl(141.3 71.8% 58%)",
          500: "hsl(142.1 70.6% 45.3%)", // Main success color
          600: "hsl(142.1 76.2% 36.3%)",
          700: "hsl(142.4 71.8% 29.2%)",
          800: "hsl(142.8 64.2% 24.1%)",
          900: "hsl(143.8 61.2% 20.2%)",
          950: "hsl(144.9 60.7% 12.9%)",
        },

        warning: {
          50: "hsl(54.5 91.7% 95.3%)",
          100: "hsl(54.9 96.7% 88%)",
          200: "hsl(52.8 98.3% 76.9%)",
          300: "hsl(50.4 97.8% 63.5%)",
          400: "hsl(47.9 95.8% 53.1%)",
          500: "hsl(45.4 93.4% 47.5%)", // Main warning color
          600: "hsl(40.6 96.1% 40.4%)",
          700: "hsl(35.5 91.7% 32.9%)",
          800: "hsl(31.2 81% 28.8%)",
          900: "hsl(27 73.2% 26.5%)",
          950: "hsl(22.7 77.8% 14.9%)",
        },

        danger: {
          50: "hsl(0 85.7% 97.3%)",
          100: "hsl(0 93.3% 94.1%)",
          200: "hsl(0 96.3% 89.4%)",
          300: "hsl(0 93.5% 81.8%)",
          400: "hsl(0 90.6% 70.8%)",
          500: "hsl(0 84.2% 60.2%)", // Main danger color
          600: "hsl(0 72.2% 50.6%)",
          700: "hsl(0 73.7% 41.8%)",
          800: "hsl(0 70% 35.3%)",
          900: "hsl(0 63% 31.4%)",
          950: "hsl(0 75% 15.7%)",
        },

        info: {
          50: "hsl(204 100% 97.1%)",
          100: "hsl(204 93.8% 93.7%)",
          200: "hsl(201 94.6% 86.1%)",
          300: "hsl(199 95.5% 74%)",
          400: "hsl(198 93.2% 59.6%)",
          500: "hsl(199 89.6% 48%)", // Main info color
          600: "hsl(200 98% 39.4%)",
          700: "hsl(201 96.3% 32.2%)",
          800: "hsl(201 90% 27.5%)",
          900: "hsl(202 80.3% 23.9%)",
          950: "hsl(204 80.7% 15.9%)",
        },

        // =========== BASE COLORS ===========
        transparent: "transparent",
        current: "currentColor",
        black: "#000000",
        white: "#ffffff",
      },

      // Extend theme lainnya
      extend: {
        // Spacing
        spacing: {
          128: "32rem",
          144: "36rem",
        },

        // Border radius
        borderRadius: {
          "4xl": "2rem",
          "5xl": "2.5rem",
        },

        // Animation
        animation: {
          "fade-in": "fadeIn 0.3s ease-in",
          "slide-up": "slideUp 0.4s ease-out",
          "pulse-slow": "pulse 3s infinite",
          float: "float 6s ease-in-out infinite",
        },

        keyframes: {
          fadeIn: {
            "0%": { opacity: "0" },
            "100%": { opacity: "1" },
          },
          slideUp: {
            "0%": { transform: "translateY(20px)", opacity: "0" },
            "100%": { transform: "translateY(0)", opacity: "1" },
          },
          float: {
            "0%, 100%": { transform: "translateY(0)" },
            "50%": { transform: "translateY(-20px)" },
          },
        },

        // Box shadow
        boxShadow: {
          soft: "0 4px 20px rgba(0, 0, 0, 0.08)",
          medium: "0 6px 30px rgba(0, 0, 0, 0.12)",
          hard: "0 10px 40px rgba(0, 0, 0, 0.15)",
          "inner-soft": "inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)",
        },

        // Container
        container: {
          center: true,
          padding: {
            DEFAULT: "1rem",
            sm: "2rem",
            lg: "4rem",
            xl: "5rem",
          },
        },
      },
    },

    // Plugins
    plugins: [
      require("@tailwindcss/forms"), // Better form styling
      require("@tailwindcss/typography"), // Prose styling
      require("@tailwindcss/aspect-ratio"), // Aspect ratio utilities
      // require('@tailwindcss/container-queries'), // Container queries
    ],
  },
};

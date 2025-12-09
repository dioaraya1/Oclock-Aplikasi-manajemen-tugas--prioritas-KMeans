// Main JavaScript file
import { initNavigation } from "./modules/navigation.js";
import { initDarkMode } from "./modules/darkmode.js";

// initialize when DOM is fully loaded
document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM fully loaded and parsed");

  // initialize module
  initNavigation();
  initDarkMode();

  // add any other initializations here
});

// export other modules or functions if needed
export { initNavigation, initDarkMode };

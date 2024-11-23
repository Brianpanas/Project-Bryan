/* Import */
import { darkModeButton, darkModeIcon } from './Elements_Global.js'; 
/* Import */

/* Controller */
function controller_Btn_DarkMode() {
    const body = document.body;
    
    // Check the current dark mode status in localStorage
    const isDarkMode = localStorage.getItem('darkMode') === 'enabled';
    
    // Toggle dark mode class
    body.classList.toggle('dark-mode', !isDarkMode);

    // Change the image based on dark mode status
    if (body.classList.contains('dark-mode')) {
        darkModeIcon.src = '../../src/day-and-night.png';  // Set the image to sun when dark mode is active
    } else {
        darkModeIcon.src = '../../src/day-and-night.png';  // Set the image to moon when dark mode is inactive
    }

    // Store dark mode status in local storage
    localStorage.setItem('darkMode', body.classList.contains('dark-mode') ? 'enabled' : 'disabled');
}
/* Controller */

/* Declare Global */
window.controller_Btn_DarkMode = controller_Btn_DarkMode;
/* Declare Global */

/* Export */
export default controller_Btn_DarkMode;
/* Export */
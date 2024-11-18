/* Import */
import { darkModeButton, darkModeIcon } from './Elements_Global.js'; 
/* Import */

/* Controller */
function controller_Btn_DarkMode() {
    const body = document.body;

    // Check the current dark mode status in localStorage
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
        darkModeIcon.textContent = '☀️';  // Change to sun emoji when dark mode is active
    } else {
        body.classList.remove('dark-mode');
        darkModeIcon.textContent = '🌑';  // Change to moon emoji when dark mode is disabled
    }

    // Toggle dark mode class
    body.classList.toggle('dark-mode');

    // Store dark mode status in local storage
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'enabled');
    } else {
        localStorage.setItem('darkMode', 'disabled');
    }
}

/* Controller */

/* Declare Global */
window.controller_Btn_DarkMode = controller_Btn_DarkMode;
/* Declare Global */

/* Export */
export default controller_Btn_DarkMode;
/* Export */
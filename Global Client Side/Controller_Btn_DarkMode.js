/* Import */
import { darkModeButton } from './Elements_Global.js'; 
/* Import */

/* Controller */
function controller_Btn_DarkMode() {
    const body = document.body;

    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
    }

    body.classList.toggle('dark-mode');

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
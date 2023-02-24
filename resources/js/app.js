import './bootstrap';
import sidebar_toggle from './sidebar_toggle';

import Alpine from 'alpinejs';
import show_password from './show_password';

window.Alpine = Alpine;

Alpine.data('show_password', show_password)
Alpine.store('sidebar_toggle', sidebar_toggle)
Alpine.start();

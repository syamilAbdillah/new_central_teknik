import './bootstrap';
import sidebar_toggle from './sidebar_toggle';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.store('sidebar_toggle', sidebar_toggle)
Alpine.start();

import './bootstrap';
import sidebar_toggle from './sidebar_toggle';

import Alpine from 'alpinejs';
import show_password from './show_password';
import image_preview from './image_preview';
import update_image from './update_image';

window.Alpine = Alpine;

Alpine.data('update_image', update_image)
Alpine.data('image_preview', image_preview)
Alpine.data('show_password', show_password)
Alpine.store('sidebar_toggle', sidebar_toggle)
Alpine.data('landing_navbar_toggle', () => ({
    hide: true,
    open() {
        this.hide = false
    },
    close() {
        this.hide = true
    },
    toggle() {
        this.hide = !this.hide
    },
}))
Alpine.start();

const nav = document.getElementById('landing-nav')

if(nav) {
    console.log('run')
    window.addEventListener('scroll', () => {
        console.log('scroll y => ', window.scrollY)
        nav.classList.toggle('bg-abyss', window.scrollY > 36)
    })
}
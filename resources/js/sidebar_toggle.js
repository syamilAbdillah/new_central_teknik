export default {
    show: false,
    open() {
        this.show = true
    },
    close() {
        this.show = false
    },
    toggle() {
        this.show = !this.show
    },
}
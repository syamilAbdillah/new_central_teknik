export default () => ({
    src: undefined,
    handleInput(ev) {
        const file =  ev.target.files?.[0] 
        this.src = file && URL.createObjectURL(file)
    },
})
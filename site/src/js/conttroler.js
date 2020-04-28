const controller  = {
    calcX:0,
    calcY:0,
    bck:null,

    init(bck){
        this.bck = bck
        window.addEventListener('mousemove', (e)=>{
            this.calcX = Math.sqrt(e.clientX)
            this.calcY = Math.sqrt(e.clientY)
        })
    },
    update(){
        this.bck.x = this.calcX
        this.bck.y = this.calcY
    }
}
export default controller
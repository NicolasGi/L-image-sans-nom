import controller from "./conttroler";

const burger = document.querySelector('.burger-menu')

    burger.addEventListener('click', (e)=>{
    const ulElt = document.querySelector('ul.hidden')
    if(ulElt.style.position !== 'relative'){
        burger.style.transform = "rotate(180deg)"
        ulElt.style.position = 'relative'
        ulElt.style.textIndent = '0px'
        ulElt.style.overflow = 'visible'
        ulElt.classList.add('active')
    }else{
        burger.style.transform = "rotate(0deg)"
        ulElt.style.position = 'absolute'
        ulElt.style.textIndent = '-9999px'
        ulElt.style.overflow = 'none'
        ulElt.classList.remove('active')
    }
})
/*
const bck = {
    canvas: null,
    ctx:null,
    img:[],
    spriteUrl:'dist/assets/img/spriteSheet-compressor.jpg',
    sprite: new Image(),
    x:50,
    y: 50,
    
    init(){
        this.canvas = document.querySelector('canvas')
        this.ctx = this.canvas.getContext('2d')
        controller.init(this)
        this.canvas.width = window.innerWidth
        this.canvas.height = window.innerHeight
        window.addEventListener('resize', ()=>{
            this.resizeCanvas()
        })
        this.sprite.src = this.spriteUrl
        this.sprite.addEventListener('load', ()=>{

            this.animate()
        })
    },
    resizeCanvas(){
        this.canvas.width = window.innerWidth
        this.canvas.height = window.innerHeight
    },

    draw(){
        this.ctx.save()
        this.ctx.translate(0,0)
        this.ctx.drawImage(this.sprite, 0,0, 1456, 2186, this.x + 0 , this.y + 0, 350, 525)
        this.ctx.restore()

        this.ctx.save()
        this.ctx.translate(0,0)
        this.ctx.drawImage(this.sprite, 1518,0, 1453, 1093, 350 + (2*this.x), (this.y*0.5) +20, 350, 263)
        this.ctx.restore()

        this.ctx.save()
        this.ctx.translate(0,0)
        this.ctx.drawImage(this.sprite, 3040, 0, 1453, 1446, 800 + (1.5*this.x), this.y +100 , 350, 350)
        this.ctx.restore()


        this.ctx.save()
        this.ctx.translate(0,0)
        this.ctx.drawImage(this.sprite, 4553,0, 1456, 1446, 150 + (2.5*this.x), 400+ (1.5*this.y), 350, 350)
        this.ctx.restore()


        this.ctx.save()
        this.ctx.translate(0,0)
        this.ctx.drawImage(this.sprite, 6077,0, 1456, 960, 750 + (0.6*this.x), 400 + (this.y*1.5), 350, 333)
        this.ctx.restore()
    },

    animate(){
        this.ctx.clearRect(0,0, this.canvas.width, this.canvas.height)
        window.requestAnimationFrame(()=>{
            this.animate()
        })
        controller.update()
        this.draw()
    }
}

bck.init()*/
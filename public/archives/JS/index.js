
var abrir = document.getElementById('abrirMenu')
var fechar = document.getElementById('fecharMenu')




abrir.addEventListener('click', function(){
    var menu = document.getElementById('menu')
    menu.style.width = '250px'
})


fechar.addEventListener('click', function(){
    var menu = document.getElementById('menu')

    menu.style.width = '0'
    menu.style.transition = 'width 0.2s ease'
})

var show = document.getElementById('show')
var close = document.getElementById('close')

show.addEventListener('click', function(){
    var adicionarCardapio = document.getElementById('adicionar')
    adicionarCardapio.style.width = '50%'
    adicionarCardapio.style.padding = '25px'
})

close.addEventListener('click', function(){
    var adicionarCardapio = document.getElementById('adicionar')
    adicionarCardapio.style.width = '0'
    adicionarCardapio.style.padding = '0px'
})



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


var btnDetalhes = document.getElementById('btnDetalhes')
var btnComplemento = document.getElementById('btnComplemento')
var detalhes = document.getElementById('detalhes')
var complemento = document.getElementById('complemento')

btnComplemento.addEventListener('click', function(){
    detalhes.style.display = 'none'
    complemento.style.display = 'block'
})

btnDetalhes.addEventListener('click', function(){
    detalhes.style.display = 'block'
    complemento.style.display = 'none'
})


var btnNovoComplemento = document.getElementById('btnNovoComplemento')
var adicionarComplemento = document.getElementById('adicionarComplemento')
var novoComplemento = document.getElementById('novoComplemento')

btnNovoComplemento.addEventListener('click', function(){
    novoComplemento.style.display = 'block'
})

adicionarComplemento.addEventListener('click', function(){
    novoComplemento.style.display = 'none'
})


var abrir = document.getElementById('abrirMenu')


var abrir = document.getElementById('abrirMenu')
var fechar = document.getElementById('fecharMenu')


abrir.addEventListener('click', function(){
    var menu = document.getElementById('menu')
    menu.style.width = '250px'
})


fechar.addEventListener('click', function(){
    var menu = document.getElementById('menu')

    menu.style.width = '0'
})


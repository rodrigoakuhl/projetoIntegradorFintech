btnsInvestir = document.querySelectorAll('.btnInvestir')

btnsInvestir.forEach(function (btn){
    btn.onclick = function () {
        modal = document.querySelector('.modal.fade.show')
        modal.querySelector('#oportunidadeInvestir').submit()
    }
})
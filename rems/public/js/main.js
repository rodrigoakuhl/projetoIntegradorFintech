/* btnAddressInformation.onclick = function () {
    progressbarwizard.querySelectorAll('.nav-link').forEach(function (navlink){
        navlink.classList.remove('active', 'show')
    })
    progressbarwizard.querySelectorAll('.tab-pane').forEach(function (tabcontent){
        tabcontent.classList.remove('active', 'show')
    })
    addressInformation.classList.add('active', 'show')
    btnAddressInformation.classList.add('active', 'show')
} */


function activePane () {
	var position
	navLinks.forEach(function (navlink, index){
		if(navlink.classList.contains('active')){
			position = index
    	}
	})
	return position
}


//seletores
navLinks = progressbarwizard.querySelectorAll('.nav-link')
tabPanes = progressbarwizard.querySelectorAll('.tab-pane')


//eventos
navLinks.forEach(function (navLink){
    navLink.onclick = function (){
        navLinks.forEach(function (nav){
            nav.classList.remove('active', 'show')
        })
        tabPanes.forEach(function (tabPane){
            tabPane.classList.remove('active', 'show')
        })
        navLink.classList.add('active', 'show')
        progressbarwizard.querySelector('#'+navLink.id.replace('btn-', '')).classList.add('active', 'show')
    }
})

//botões próximo e anterior
btnNext.onclick = function () {
    if(activePane() < (navLinks.length-1)){
        navLinks[activePane()+1].click()
    }else{
        navLinks[activePane()].click()
    }
}

btnPrevious.onclick = function () {
    if(activePane() > 0){
        navLinks[activePane()-1].click()
    }else{
        navLinks[activePane()].click()
    }
}
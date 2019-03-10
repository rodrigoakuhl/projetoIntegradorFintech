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

//get the current value of select list (gender, state, bank etc..) for a given client information
document.querySelectorAll("select").forEach(function (select){
	select.querySelectorAll("option").forEach(function (option){
		if(option.value == select.dataset.option){
			option.setAttribute('selected','selected')
		}
	})

})

var inputsList = formCadastro.querySelectorAll("input")
var selectList = formCadastro.querySelectorAll("select")

function countFilledInputs(inputs, selects){
	var count = 0
	var total = inputs.length + selects.length
	inputs.forEach(function (input){
		if(input.value != ""){
			count += 1
		}
	})
	selects.forEach(function (select){
		if(select.value != ""){
			count += 1
		}
	})
	return (count/total)*100
}


//client informatio conclusion progress bar
formCadastro.querySelector("#bar").firstElementChild.setAttribute("style", "width: " + countFilledInputs(inputsList, selectList) + "%")
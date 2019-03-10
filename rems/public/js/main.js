//functions

function activePane () {
	var position
	navLinks.forEach(function (navlink, index){
		if(navlink.classList.contains('active')){
			position = index
    	}
	})
	return position
}

function showNavLink(navLink){
    navLink.classList.add('active', 'show')
}

function showTabPane(navLink){
    progressbarwizard.querySelector('#'+navLink.id.replace('btn-', '')).classList.add('active', 'show')
}

function hideNavLinks(navLinks){
    navLinks.forEach(function (nav){
        nav.classList.remove('active', 'show')
    })
}

function hideTabPanes(tabPanes){
    tabPanes.forEach(function (tabPane){
        tabPane.classList.remove('active', 'show')
    })
}

function goToNextPane(navLinks){
    if(activePane() < (navLinks.length-1)){
        navLinks[activePane()+1].click()
    }else{
        navLinks[activePane()].click()
    }
}

function goToPreviousPane(navLinks){
    if(activePane() > 0){
        navLinks[activePane()-1].click()
    }else{
        navLinks[activePane()].click()
    }   
}

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


//selectores
navLinks = progressbarwizard.querySelectorAll('.nav-link')
tabPanes = progressbarwizard.querySelectorAll('.tab-pane')
inputsList = formCadastro.querySelectorAll("input")
selectList = formCadastro.querySelectorAll("select")


//events
navLinks.forEach(function (navLink){
    navLink.onclick = function () {
        hideNavLinks(navLinks)
        hideTabPanes(tabPanes)
        showNavLink(navLink)
        showTabPane(navLink)
    }
})

//buttons next and previous
btnNext.onclick = function () {
    goToNextPane(navLinks)
}

btnPrevious.onclick = function (){
    goToPreviousPane(navLinks)
}

//get the current value of select list (gender, state, bank etc..) for a given client information
document.querySelectorAll("select").forEach(function (select){
	select.querySelectorAll("option").forEach(function (option){
		if(option.value == select.dataset.option){
			option.setAttribute('selected','selected')
		}
	})

})

//client informatio conclusion progress bar
formCadastro.querySelector("#bar").firstElementChild.setAttribute("style", "width: " + countFilledInputs(inputsList, selectList) + "%")
const sleep = (milliseconds) => {
    return new Promise(resolve => setTimeout(resolve, milliseconds))
}

document.onreadystatechange = function () {
    if (document.readyState == "complete") {
        btn = document.querySelector('#btnCadastrarLogin')
        if(document.querySelector('#errorMsg') !== null){
        sleep(100).then(() => {
            btn.click()
            console.log(btn)
        })
        /* setInterval(() => {
                btn.click()     
            }, 300); */
        }
    }
}
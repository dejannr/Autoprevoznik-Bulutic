setTimeout(() => {
    
    const loaderCont = document.querySelector('.loader-cont');
    loaderCont.style.opacity = "0";

    setTimeout(() => {

        loaderCont.style.display = "none";

    }, 1000)

}, 2000);

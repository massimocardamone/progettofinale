let link = document.querySelectorAll('.page-link')
if (link.length>0) {
    let liLink=document.querySelectorAll('.page-item')
    link.forEach(element => {
    element.classList.add('mybtn');
    element.classList.add('mx-3');
});
    liLink.forEach(element=>{
    element.classList.remove('active');
    element.classList.remove('disabled')
    if (element.ariaDisabled) {
        element.classList.add('invisible')
    }
})

link[0].innerHTML='<< Precedente';
link[1].innerHTML='Successivo >>';
}

let link = document.querySelectorAll('.page-link')
let liLink=document.querySelectorAll('.page-item')
liLink.forEach(element=>{
    element.classList.remove('active');
    element.classList.remove('disabled')
})
link.forEach(element => {
    element.classList.add('mybtn');
    element.classList.add('mx-3');
});
link[0].innerHTML='Precedente';
link[1].innerHTML='Successivo';
// Caricamento Spinner
let Start = document.querySelector('#Start');
let End = document.querySelector('#End');

setTimeout(() => {
    Start.classList.add('d-none');
    End.classList.remove('d-none');
}, 900)

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

let prices = document.querySelectorAll('.price');
if (prices) {
    prices.forEach(price => {
        let value = parseFloat(price.innerHTML)
        
        let int = Math.floor(value)
        let dec = ((value - int).toFixed(2))*100
        
        
        if (dec == 0) {
            price.innerHTML=`
            <span class="int">${int}</span><span class="dec">,00</span>`;
        } else {
            price.innerHTML=`
            <span class="int">${int}</span><span class="dec">,${dec}</span>
           `;
        }
        
    });
}



<div class="container numWrapper my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 numSec d-flex justify-content-center mb-3">
            <div>
                <h3 class="fst-italic">I nostri utenti:</h3>
                <h4 class="text-center"><span class="userNum spanNum">{{$userNum}}</span></h4>
            </div>
        </div>
        <div class="col-12 col-md-5 numSec d-flex justify-content-center mb-3">
            <div>
                <h3 class="fst-italic">Le categorie:</h3>
                <h4 class="text-center"><span class="catNum spanNum">{{count($genres->all())}}</span></h4>
            </div>
        </div>
        <div class="col-12 col-md-5 numSec spanNum d-flex justify-content-center">
            <div>
                <h3 class="fst-italic">I nostri articoli:</h3>
                <h4 class="text-center"><span class="artNum">{{$artNum}}</span></h4>    
            </div>             
        </div>
        <div class="col-12 col-md-5 numSec spanNum d-flex justify-content-center">
            <div>
                <h3 class="fst-italic">Utenti soddisfatti:</h3>
                <h4 class="text-center"><span class="satNum"></span> %</h4>
            </div>       
        </div>
    </div>
</div>

<script>
let isChecked = false;
let container = document.querySelector('.numWrapper');
let userNum = document.querySelector('.userNum');
let userVal = userNum.innerHTML;
let catNum = document.querySelector('.catNum');
let catVal = catNum.innerHTML;
let artNum = document.querySelector('.artNum');
let artVal = artNum.innerHTML;
let satNum = document.querySelector('.satNum');
let numSecs = document.querySelectorAll('.numSec')
let spanNum = document.querySelectorAll('.spanNum')
// intervallo numeri
function createInterval(element, final, number) {
    let counter = 0;

    let interval = setInterval(() => {
        if (counter < final) {
            counter++;
            element.innerHTML = counter;
        } else {
            clearInterval(interval);
        } 
    
    }, number);    
}
// obsrver su container stesso sezione
let observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
        if(entry.isIntersecting && isChecked == false){
            numSecs.forEach(element=>{
                element.style.opacity = 1;
            });
            spanNum.innerHTML='';
            
            createInterval(userNum, userVal, 200);
            createInterval(catNum, catVal, 200);
            createInterval(artNum, artVal, 200);
            createInterval(satNum, 110, 100);             
            isChecked = true
        }
    })
});
observer.observe(container);
</script>
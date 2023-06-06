<h1>Aggiungi il tuo prodotto:</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
           <form method="POST" action="" enctype="multipart/form-data">
           
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nome Prodotto </label>
              <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="image" name="img">
              </div>

            <div class="mb-3">
                <label for="description" >Descrizione</label>
                <textarea name="description" id="description" class="form-label" cols="30" rows="10"></textarea>
              </div>


              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step="0.01" name="price" class="form-control" id="price">
              </div>

              <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <input type="text"  name="category" class="form-control" id="category">
              </div>
           
             
         
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>

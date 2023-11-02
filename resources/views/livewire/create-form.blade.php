<div>
  <section class="h-100 h-custom bgP">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Crea il tuo articolo!</h3>
              @if ($errors->any())
              <div class="alert alert-danger mb-0">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>
                    {{$error}}
                  </li>
                  @endforeach
                </ul>
              </div>        
              @endif
              
              <form  wire:submit.prevent='store' class="px-md-2">
                
                <div class="form-outline mb-4">
                  <input wire:model='title' type="text" id="title" class="form-control" />
                  <label class="form-label" for="title">Titolo</label>
                </div>
                
                <div class="row">
                  <div class="col-md-6 mb-4">
                    
                    <div class="form-outline datepicker">
                      <input wire:model='description' type="longtext" class="form-control" id="description" />
                      <label for="description" class="form-label">Descrizione</label>
                    </div>
                    <div class="form-outline datepicker">
                      <input wire:model='price' type="longtext" class="form-control" id="price" />
                      <label for="price" class="form-label">Prezzo</label>
                    </div>
                    
                  </div>
                </div>
                @foreach ($categories as $category)
                <div class="form-check">
                  <input wire:model.defer="category_id" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked value="{{$category->id}}" >
                  <label class="form-check-label" for="flexRadioDefault2">
                    {{$category->name}}
                  </label>
                </div>
                @endforeach
                
                
                
                
                
                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

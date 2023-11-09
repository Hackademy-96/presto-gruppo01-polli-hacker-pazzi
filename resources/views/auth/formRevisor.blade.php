<x-layout>
  <div class="bgS">
    <div class="divAltezza"></div>
    <div class="container bgE borderRev shadow rounded ">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 mt-5">
          <h2 class=" mt-5 mb-5 text-center">Vuoi lavorare con noi?</h2>
          <h1 class=" display-3 mt-5 mb-5 mx-5 text-center colorC">Diventa revisore!</h1>
          <h4 class="text-center mb-5"> Revisiona, accetta o rifiuta articoli e aiutaci a migliorare il nostro sito</h4>
          <p class="text-center mb-5 colorC border-bottom border-secondary">compila il form e invia la tua candidatura</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-8 ">
            <form method="POST" action="{{route('becomerevisor.submit')}}">
              @csrf
              <!-- Name input -->
              <div class="form-outline mb-4 ">
                <input name="name" type="text" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">Nome</label>
              </div>
              
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input name="email" type="email" id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">Email</label>
              </div>
              
              <!-- Message input -->
              <div class="form-outline mb-4">
                <textarea name="body" class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Scrivi un messagio</label>
              </div>
              
              <!-- Submit button -->
              <div class="text-center mb-5">
                <button type="submit" class="btn bgA btn-block btn-lg mb-4">Invia</button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
    <div class="divAltezza"></div>
  </div>
</x-layout>
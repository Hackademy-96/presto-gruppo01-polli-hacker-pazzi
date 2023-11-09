<x-layout>
    <div class="container bgE borderRev shadow  ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 mt-5">
                <h1 class=" mt-5 mb-5 text-center">Diventa un revisore!</h1>
            </div>
            <div class="row justify-content-center">

            
            <div class="col-12 col-md-6 col-lg-8 ">
                <form method="POST" action="{{route('becomerevisor.submit')}}">
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4 ">
                      <input name="name" type="text" id="form4Example1" class="form-control" />
                      <label class="form-label" for="form4Example1">Name</label>
                    </div>
                  
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input name="email" type="email" id="form4Example2" class="form-control" />
                      <label class="form-label" for="form4Example2">Email address</label>
                    </div>
                  
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea name="body" class="form-control" id="form4Example3" rows="4"></textarea>
                      <label class="form-label" for="form4Example3">Message</label>
                    </div>
                
                    <!-- Submit button -->
                    <button type="submit" class="btn bgA btn-block mb-4">Send</button>
                  </form>
            </div>
            </div>
           
        </div>
    </div>
</x-layout>
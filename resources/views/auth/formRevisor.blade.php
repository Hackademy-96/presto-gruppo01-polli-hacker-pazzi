<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 mt-5">
                <h1 class="text-center">Diventa un revisore!</h1>
            </div>
            <div class="col-6">
                <form method="POST" action="{{route('becomerevisor.submit')}}">
                    @csrf
                    <!-- Name input -->
                    <div class="form-outline mb-4">
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
                    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                  </form>
            </div>
           
        </div>
    </div>
</x-layout>
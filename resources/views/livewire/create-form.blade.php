<div>
    <form method="POST" action="{{route('article_create')}}"      class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                  class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Crea il tuo articolo!</h3>
      
                  <form class="px-md-2">
      
                    <div class="form-outline mb-4">
                      <input type="text" id="title" class="form-control" />
                      <label class="form-label" for="title">Titolo</label>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline datepicker">
                          <input type="longtext" class="form-control" id="description" />
                          <label for="description" class="form-label">Descrizine</label>
                        </div>
      
                      </div>
                    </div>
                    <div class="dropdown">
                        <button
                          class="btn btn-primary dropdown-toggle"
                          type="button"
                          id="dropdownMenuButton"
                          data-mdb-toggle="dropdown"
                          aria-expanded="false"
                        >
                          Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
      
                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                      <div class="col-md-6">
      
                        <div class="form-outline">
                          <input type="text" id="form3Example1w" class="form-control" />
                          <label class="form-label" for="form3Example1w">Registration code</label>
                        </div>
      
                      </div>
                    </div>
      
                    <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
      
                  </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
</div>

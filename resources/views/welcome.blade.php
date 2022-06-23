<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <style>
        html {
  font-size: 14px;
}
@media (min-width: 768px) {
  html {
    font-size: 16px;
  }
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

.card-deck .card {
  min-width: 220px;
}

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }


    </style>
  </head>

  <body>


    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Adv Api Example</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Basic Public Api</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Customer CRUD <small class="text-muted">API</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Without Authorization.</li>
              <li>5 Api EndPoints.</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Active</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> Laravel Sanctum Auth API</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Student And Project CRUD <small class="text-muted">API</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li> Authorize By laravel Sanctum.</li>
              <li>9 Api EndPoints.</li>
            
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Active</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Laravel Passport Auth API.</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Comming Soon. <small class="text-muted">!</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>...</li>
              <li>...</li>
             
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-danger">Comming Soon.</button>
          </div>
        </div>
      </div>

    <div class="container">

          <h2>Basic Api Urls:</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  
                  <th>Name</th>
                  <th>Method</th>
                  <th>Url</th>
                  <th>Authorize</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>For Item list</td>
                  <td>GET</td>
                  <td> http://127.0.0.1:8000/api/list-customer</td>
                  <td> No</td>
                </tr>
                <tr>
                  <td>For Single Item</td>
                  <td>GET</td>
                  <td> http://127.0.0.1:8000/api/single-customer/{id}</td>
                  <td> No</td>
                </tr>
                <tr>
                  <td>For Item Add</td>
                  <td>POST</td>
                  <td> http://127.0.0.1:8000/api/add-customer</td>
                  <td> No</td>
                </tr>
                <tr>
                  <td>For Item Update</td>
                  <td>PUT</td>
                  <td> http://127.0.0.1:8000/api/update-customer/{id}</td>
                  <td> No</td>
                </tr>
                <tr>
                  <td>For Item Delete</td>
                  <td>DELETE</td>
                  <td> http://127.0.0.1:8000/api/delete-customer/{id}</td>
                  <td> No</td>
                </tr>
                
               
              </tbody>
            </table>
          </div>

    </div>
    <div class="container">

          <h2>Laravel Sanctum Auth API Urls:</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  
                <th>Name</th>
                <th>Method</th>
                <th>Url</th>
                <th>Authorize</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>For Student Create</td>
                  <td>POST</td>
                  <td> http://127.0.0.1:8000/api/register</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td>For Login</td>
                  <td>POST</td>
                  <td> http://127.0.0.1:8000/api/login</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td>For Project Create</td>
                  <td>POST</td>
                  <td> http://127.0.0.1:8000/api/create-customer</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>For Project Update</td>
                  <td>PUT</td>
                  <td> http://127.0.0.1:8000/api/update-project/{id}</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>For Project Delete</td>
                  <td>DELETE</td>
                  <td> http://127.0.0.1:8000/api/delete-project/{id}</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>For Project List</td>
                  <td>GET</td>
                  <td> http://127.0.0.1:8000/api/delete-project</td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td>For Single Project</td>
                  <td>GET</td>
                  <td> http://127.0.0.1:8000/api/single-project/{id}</td>
                  <td>Yes</td>
                </tr>
                
               
              </tbody>
            </table>
          </div>

    </div>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cars application</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">

            <form class="" action="{{route('cars.create')}}" method="post">
              @csrf

              <div class="row form-group">
                <div class="col-md-12">
                  <label  for="">Make: </label>
                  <input type="text" name="make" class="form-control" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label  for="">Model: </label>
                  <input type="text" name="model" class="form-control" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label  for="">Produced_on: </label>
                  <input type="date" name="produced_on" class="form-control" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success w-50 float-right">Create</button>
                </div>
              </div>

            </form>


          <div class="col-md-6">
            <table class="table table-striped table-hover">
              <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Producedon</th>
              </tr>
                @foreach($cars as $car)
                <tr>
                  <td>{{$car->make}}</td>
                  <td>{{$car->model}}</td>
                  <td>{{$car->produced_on}}</td>
                </tr>
                @endforeach
            </table>

          </div>

          <div class="col-md-6">

          </div>
      </div>
    </div>
  </body>
</html>

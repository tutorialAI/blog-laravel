<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                background-color: #555;
                color:#fff;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .table-striped{
              color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="container">
          <div class="form-group col-lg-12">
            <form action="/search" method="POST" role="search" class="col-lg-6" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="input-group">
                <input type="text" class="form-control" name="q">
                <!-- <input type="text" class="form-control" name="q" placeholder="Search users"> -->
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">
                        <span class="">search</span>
                    </button>
                </span>
              </div>
            </form>
          </div>
              <div class="container">
                @if(isset($details))
                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <h2>Sample User details</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </body>
</html>

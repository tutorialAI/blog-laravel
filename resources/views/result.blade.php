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

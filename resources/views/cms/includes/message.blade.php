@if($errors->any())
  @foreach($errors->all() as $error)
    <div class="alert alert-warning">{{ $error }}</div>
  @endforeach
@endif

@if (Session::get('flash-message'))
  <div class="alert alert-success">{{Session::get('flash-message')}}</div>
@endif
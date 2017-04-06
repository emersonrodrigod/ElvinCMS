@if ($i->is_erasable == "1" || Auth::user()->role->name == 'developer')
<button class="btn btn-xs btn-danger destroy refresh" data-id="{{$i->id}}"><i class="fa fa-trash"></i></button>
@endif
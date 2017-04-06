
<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">ElvinCMS</a>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if ($menuitems)
				  	@foreach($menuitems AS $i)
				    	@if ($i->parent_id == 0)
					    <li>
					       	<a href="{{$i->link}}">{{$i->name}}</a>
					        <ul>
					        @foreach ($menuitems as $key => $c)
	              				@if ($i->id == $c->parent_id)
					            <li><a href="{{$c->link}}">{{$c->name}}</a></li>
					            @endif
	            			@endforeach                  
					        </ul>
					    </li> 
			    		@endif
			  		@endforeach 
				@endif 
				<!-- Authentication Links -->
				@if (Auth::guest())
				  	<li><a href="{{ url('/login') }}">@lang('_.Login')</a></li>
				  	<li><a href="{{ url('/register') }}">@lang('_.Register')</a></li>
				@else
					<li><a href="{{ url('/admin') }}">@lang('_.Admin')</a></li>
					<li><a href="{{ url('/logout') }}">@lang('_.Logout')</a></li>
				@endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>					
				
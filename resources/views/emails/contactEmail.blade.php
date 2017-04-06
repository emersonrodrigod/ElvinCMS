@component('mail::message')

<table>
	<tr>
        <td>@lang('email.name')</td>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <td>@lang('email.email')</td>
        <td>{{$email}}</td>
    </tr>
    @if(isset($phone))
    <tr>
        <td>@lang('email.phone')</td>
        <td>{{$phone}}</td>
    </tr>
    @endif
    @if(isset($subject))      
    <tr>
        <td>@lang('email.subject')</td>
        <td>{{$subject}}</td>
    </tr>
    @endif
    <tr>
        <td>@lang('email.message')</td>
        <td>{{$message}}</td>
    </tr>
</table>



@endcomponent

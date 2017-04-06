@if (config('settings.Multi_language'))
<small><img class="flag" src="/cms/img/flags/{{Session::get('lang')}}.png"> @lang('_.NoteHeaderIndex')</small>
@endif
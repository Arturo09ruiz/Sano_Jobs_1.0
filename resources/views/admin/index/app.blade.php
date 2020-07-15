@if (Auth::check())
@include('admin.index.layouts.index')

@else
    <h1>ERROR 404 </h1>
@endif

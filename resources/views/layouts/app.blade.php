@include('layouts.header')
{{-- 
@if (Auth::user()) --}}

@yield('content')

{{-- @else
<h1>VOCÊ NÃO TEM AUTORIZAÇÃO PARA ACESSAR</h1>
@endif --}}


@include('layouts.footer')

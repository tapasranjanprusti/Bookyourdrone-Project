{{-- @if(auth()->guard('farmer')->check())
{{auth()->guard('farmer')->user()}}
{{auth()->guard('farmer')->user()->name}}
@endif --}}

{{--
    @if(auth()->guard('Admin')->check())

<a href="{{route('Admin.logout')}}">Logout</a>
{{auth()->guard('Admin')->user()->name}}
@endif --}}
@include('Dashboard.dashboardHeader')
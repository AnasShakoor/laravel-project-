<ul class="nav nav-tabs bg-light  " id="navId">


    <li class="nav-item">
        <a href="{{ url('/registar') }}" class="nav-link">home</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('/registar') }}" class="nav-link">Form</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('/registar/view') }}" class="nav-link">Users</a>
    </li>
    @if (session()->has('id'))
    <li class="nav-item">
        <a href="{{ route('registar.logout') }}" class="nav-link">logout</a>
    </li>
    @else
    


    <li class="nav-item ">
        <a href="{{ route('registar.signup') }}" class="nav-link">Signup</a>
    </li> 
     <li class="nav-item">
        <a href="{{ route('registar.login') }}" class="nav-link">Login</a>
    </li>
    @endif
   


</ul>
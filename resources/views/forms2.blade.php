<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Nav tabs -->
    {{-- <ul class="nav nav-tabs bg-light  " id="navId">
     
    
      <li class="nav-item"> 
        <a href " class="nav-link">home</a>
      </li>
      <li class="nav-item">
        <a href="{{ url("/registar") }}" class="nav-link">Form</a>
      </li><li class="nav-item">
        <a href="{{ url("/registar/view") }}" class="nav-link">Users</a>
    
     
    </ul>
     --}}


    <div class="container">
        <h1 class="text-center">registrationtwo</h1>
        <form action="{{ url('/registar2') }}" method="post" id="form">
            @csrf
            <div class="container">
                <input type="text" name="name" id="name" placeholder="write your name">
                <span id="errorname" class="text-danger"></span>
                @error('name')
                    {{ $message }}
                @enderror

                <input type="email" name="email" id="email" placeholder="write your email ">
                @error('email')
                    {{ $message }}
                @enderror
                <span id="erroremail" class="text-danger"></span>

                <input type="password" name="password" id="password" placeholder="write your password ">
                @error('password')
                    {{ $message }}
                @enderror
                <span id="errorpassword" class="text-danger"></span>

                <button class="btn btn-primary my-4">
                    Submit
                </button>
            </div>
        </form>


    </div>
    <script>
        document.getElementById('form').addEventListener('submit', function(event) {



            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let errorname = document.getElementById('errorname');
            let erroremail = document.getElementById('erroremail');
            let errorpassword = document.getElementById('errorpassword');




            errorname.innerHTML.innerHTML = "";
            erroremail.innerHTML.innerHTML = "";
            errorpassword.innerHTML.innerHTML = "";

            if (name.trim() === "") {
                errorname.innerHTML = "please write your name";

            }
            if (email.trim() === "") {
                erroremail.innerHTML = "please write your email";

            }
            if (password.length < 8) {
                errorpassword.innerHTML = "The password should be atleast eight characters and should not be empty";

            }
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

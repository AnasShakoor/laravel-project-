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
    @include('header')

    @if (session()->has('loginerror'))
    <div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{-- <h4 class="alert-heading"></h4> --}}
            <p>{{ session()->get('loginerror') }}
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>

            <p class="mb-0"></p>
        </div>
    </div>
@endif

    <div class="container">
        <h1 class="text-center">{{ $title }}</h1>
        <form action="{{ $url }}" method="post" id="inputform">
            @csrf
            <div class="container">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name"   />
                <div id="errorname" class="text-danger"></div>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email"   />
                <div id="erroremail" class="text-danger"></div>
                <label for="password" class="form-label">Password</label>
                
                <input type="password" class="form-control" name="password" id="password"/> 
                @if (session()->has('id'))
                <label for="test" class="form-label">test</label>
                <input type="text" class="form-control" name="test" id="test"/>
                @endif
          
                <div id="errorpassword" class="text-danger"></div>
                {{-- <x-input name="google" type="text" label="Google" /> <!-- Add this field --> --}}
                <button class="btn btn-primary my-4">
                    Submit
                </button>
            </div>
        </form>
        <script>
            document.getElementById('inputform').addEventListener('submit', function(e) {
                let name = document.getElementById('name').value;
                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;
                // let cpassword = document.getElementById('cpassword').value;
                let errorname = document.getElementById('errorname');
                let erroremail = document.getElementById('erroremail');
                let errorpassword = document.getElementById('errorpassword');
                // let errorcpassword = document.getElementById('errorcpassword');
                errorname.innerHTML = "";
                erroremail.innerHTML = "";
                errorpassword.innerHTML = "";
                if (name.trim() === "") {
                    errorname.innerHTML = "The name field is required";
                    e.preventDefault()
                }
                if (email.trim() === "") {
                    erroremail.innerHTML = "The email field is required";
                    e.preventDefault()
                }
                if (password.trim() === "") {
                    errorpassword.innerHTML = "The password field is required";
                    e.preventDefault()
                }
                if (password.trim() !== "" && password.length < 8) {
                    errorpassword.innerHTML = "Password should be a minimum of eight characters.";
                    e.preventDefault()
                }
                
            })
        </script>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <title>Signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @include('header');
    <h1 class="text-center">Signup here</h1>
    <div class="container">
        <form action="{{ url('/signup') }}" id="signupform" method="post">
            @csrf
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />

                    <div id="errorname" class="text-danger"></div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="abc@email.com" />

            <div id="erroremail" class="text-danger"></div>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Your password" />

            <div id="errorpassword" class="text-danger"></div>
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm  your password" />

            <div id="errorcpassword" class="text-danger"></div>
            {{-- <input type="file" name="file" id="file"> --}}
            <button class="btn btn-success my-3">Signup</button>
            {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
        </form>
    </div>
    <script>
        document.getElementById('signupform').addEventListener('submit', function(e) {



            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let cpassword = document.getElementById('cpassword').value;
            let errorname = document.getElementById('errorname');
            let erroremail = document.getElementById('erroremail');
            let errorpassword = document.getElementById('errorpassword');
            let errorcpassword = document.getElementById('errorcpassword');




            errorname.innerHTML = "";
            erroremail.innerHTML = "";
            errorpassword.innerHTML = "";

            if (name.trim() === "") {
                errorname.innerHTML = "This field is required";
                e.preventDefault()
            }
            if (email.trim() === "") {
                erroremail.innerHTML = "This field is required";
                e.preventDefault()

            }
            if (password.trim() === "") {
                errorpassword.innerHTML = "This field is required";
                e.preventDefault()

            }
            if (password.trim() !== "" && password.length < 8) {
                errorpassword.innerHTML = "Password should be a minimum of eight characters.";
                e.preventDefault()
            } 
            if (cpassword !== password) {
                errorcpassword.innerHTML = "Passwords did not match.";
                e.preventDefault()
            }
        })
    </script>
</body>

</html>

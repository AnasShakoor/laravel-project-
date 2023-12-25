<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @include('header');
    <h1 class="text-center">Login here</h1>
    <div class="container">
        <form action="{{ url('/login') }}" id="signupform" method="post">
            @csrf
            @if (session()->has('success'))
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{-- <h4 class="alert-heading"></h4> --}}
                        <p>{{ session()->get('success') }}
                        </p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>

                        <p class="mb-0"></p>
                    </div>
                </div>
            @endif
            @if (session()->has('error'))
                <div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{-- <h4 class="alert-heading"></h4> --}}
                        <p>{{ session()->get('error') }}
                        </p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>

                    </div>
                </div>
            @endif

            <div id="errorname" class="text-danger"></div>
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="abc@email.com" />

            <div id="erroremail" class="text-danger"></div>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Your password" />



            {{-- <input type="file" name="file" id="file"> --}}
            <button class="btn btn-success my-3">Login</button>
            {{-- <small id="emailHelpId" class="form-text text-muted">Help text</small> --}}
        </form>
    </div>
    <script>
        document.getElementById('signupform').addEventListener('submit', function(e) {



            // let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            // let cpassword = document.getElementById('cpassword').value;
            let errorname = document.getElementById('errorname');
            let erroremail = document.getElementById('erroremail');
            let errorpassword = document.getElementById('errorpassword');
            // let errorcpassword = document.getElementById('errorcpassword');




            // errorname.innerHTML = "";
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
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4\.5.2/js/bootstrap.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>










<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->

</body>

</html>

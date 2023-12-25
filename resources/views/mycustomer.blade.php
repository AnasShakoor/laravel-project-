 <!doctype html>
 <html lang="en">
   <head>
     <title>Title</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
     <div class="container">
    <form action="{{ url('/') }}/mycustomer" method="post">
      @csrf
      <input type="text" name="name" placeholder="write your name">@error('name')
          {{ $message }}
      @enderror
            <input type="email" name="email" placeholder="write your email">@error('email')
          {{ $message }}
      @enderror      <input type="password" name="password" placeholder="write your password">@error('password')
          {{ $message }}
      @enderror
      {{-- <x-input name="email" type="email" placeholder= "Write your email "/>
   <x-input name="password" type="password" placeholder= "Write your password"/> --}}
  
   <button class="btn btn-danger">Submit</button>
    </form>
  </div>
   </body>
 </html>
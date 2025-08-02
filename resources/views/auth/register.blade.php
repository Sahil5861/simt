
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - {{env('COLLEGE_NAME_SHORT')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .card {
            width: 100%;
            max-width: 350px;
            padding: 20px;
        }
        .card img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>    
    <div class="card shadow-lg" style="position: relative;">
        @if ($errors->any())
        <div class="alert alert-danger" id="error-alert" style="width:100%; margin:auto;">
            <ul class="mb-0 p-0">
                @foreach ($errors->all() as $error)
                    <li class="p-0" style="list-style: none; text-align:center;">{{ $error }}</li>
                @endforeach
            </ul>            
        </div>  
        
        <script>
            setTimeout(function() {
                document.getElementById('error-alert').style.display = 'none';
            }, 3000); // Hide after 5 seconds
        </script>
        @endif
        <div class="card-body">            
            <img src="{{ asset('images/' . env('COLLEGE_IMAGE')) }}" alt="Logo" width="72" height="72">
            <h1 class="h4 mb-3 text-center">Create Account</h1>
            <br>
            <form method="POST" action="{{ route('admin.register.post') }}">
                @csrf
                <div class="mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Username" required autofocus>
                </div>
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email address" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                </div>  
                <button class="btn btn-primary w-100" type="submit">Register</button>
            </form>

            <div class="mt-3">
                <a href="{{ route('login') }}">Already have an account? Sign in</a>
            </div>            
        </div>
    </div>    
</body>


</html>

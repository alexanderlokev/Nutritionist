<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Healthcare App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<style>
        .link-custom {
            text-decoration: none;
            color:black;
            transition: color 0.3s ease-in-out;
        }

        .link-custom:hover {
            text-decoration: underline;
            color: #007bff;
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home', ['locale' => app()->getLocale()]) }}">Healthcare App</a>
    <p>Current Locale: {{ app()->getLocale() }}</p>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('about', ['locale' => app()->getLocale()]) }}">About Us</a>
        </li>
      </ul>
      <a href="{{ route('home', ['locale' => 'en']) }}" class="link-custom me-4">
        EN
      </a>
      <a href="{{ route('home', ['locale' => 'id']) }}" class="link-custom me-4">
        ID
      </a>
      <a href="{{ url('/proses-form/' . app()->getLocale()) }}" class="btn btn-outline-success me-4">
        Register
      </a>
      <a type="submit" class="btn btn-outline-success" href= "{{ url('/admin/login') }}">Login</a>
      
    </div>
  </div>
</nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Welcome to Healthcare App Services</h1>

        <!-- Search Bar -->
        <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Search for doctors, services, or health tips..." aria-label="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </div>

        <!-- Service Categories -->
        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Consult a Doctor</h5>
                    <p>Get medical advice from expert doctors online.</p>
                    <button class="btn btn-primary">Consult Now</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Order Medicine</h5>
                    <p>Buy medicine from trusted pharmacies and get it delivered.</p>
                    <button class="btn btn-primary">Order Now</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Book Lab Test</h5>
                    <p>Book lab tests and get results online with trusted providers.</p>
                    <button class="btn btn-primary">Book Test</button>
                </div>
            </div>
        </div>

        <!-- Promotional Banner -->
        <div class="card bg-info text-white text-center p-4">
            <h4>Stay Healthy and Safe!</h4>
            <p>Get 10% off on your first consultation.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
</nav>

<!-- Main Content -->
<div class="container mt-4">

    <!-- Jumbotron / Hero Section -->
    <div class="jumbotron rounded">
        <h1>{{ $username }}</h1>
        <p>{{ $last_login }}</p>
    </div>

    <div class="row">
        <!-- About Section -->
        <div class="col-lg-8 mb-4">
            <div class="card p-4 h-100">
                <h5 class="card-title">About Our Application</h5>
                <p class="card-text">
                    Our application provides a clean and intuitive interface, 
                    allowing users to navigate easily and perform tasks efficiently.
                </p>
                <a href="#" class="btn btn-primary">Explore More</a>
            </div>
        </div>

        <!-- Alerts Section -->
        <div class="col-lg-4 mb-4">
            <div class="card p-4 h-100">
                <h5 class="card-title">Alerts</h5>
                <div class="alert alert-info" role="alert">
                    Informational alert
                </div>
                <div class="alert alert-success" role="alert">
                    Success alert
                </div>
                <div class="alert alert-warning" role="alert">
                    Warning alert
                </div>
             </div>
           </div>
        </div>
   </div> 

    <!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


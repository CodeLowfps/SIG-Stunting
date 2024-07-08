<x-navbar></x-navbar>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StunMap</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/team.css">
</head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-image: url('img/bg.jpg'); background-size: cover; color: white;">
        <div class="container text-center">
            <h1 class="display-4">Meet Our Team</h1>
        </div>
    </div>

    <!-- Content -->
    <div class="container my-5">
        <div class="row">
            <!-- Team Member Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="member.jpg" class="card-img-top" alt="Team Member">
                    <div class="card-body text-center">
                        <h5 class="card-title">Felixiano B. Koten</h5>
                        <p class="card-text">Developer</p>
                        <p class="card-text">NIM: 2102008007</p>
                        <p class="card-text">PRODI: ILMU KOMPUTER - FST</p>
                        <div class="social-icons">
                            <a href="#"><img src="github-icon.png" alt="GitHub" style="width: 24px;"></a>
                            <a href="#"><img src="linkedin-icon.png" alt="LinkedIn" style="width: 24px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat this card for each team member -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>@copyright PKM Stunting Modeling - 2023</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

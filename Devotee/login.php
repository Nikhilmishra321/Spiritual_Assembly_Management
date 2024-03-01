<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to PWA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <section class="d-flex my-2 h-80 justify-content-center align-items-center gradient-form">
        <div class="card rounded-3 text-black shadow-lg d3">
            <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                    <img src="https://yt3.googleusercontent.com/h-7oh6u7mXrnxy_9BKLdg2CA2pjIx_jADK5ocj6Y4-T60yFPoLlRNgH3bFK2Vu__GRysIMcnaEI=s176-c-k-c0x00ffffff-no-rj" style="width: 185px;" alt="logo" class="my-1 rounded-circle logo">
                    <h2 class="text-center mb-4">Prabodham Weekly Assembly</h2>
                    <h3 class="text-center mb-4">Devotee Login</h3>
                </div>
                <form id="superAdminLoginForm" onsubmit="return validateForm()">
                    <div class="form-group mb-4">
                        <input type="email" id="email" class="form-control" placeholder="Email" required>
                        <label class="form-label" for="email">Email</label>
                        <span id="emailError" class="text-danger"></span>
                    </div>
                    <div class="form-group mb-4">
                        <input type="password" id="password" class="form-control" placeholder="Password" required>
                        <label class="form-label" for="password">Password</label>
                        <br><span id="passwordError" class="text-danger"></span>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-block fa-lg mb-3 gradient-custom-2 submit" type="submit">Log
                            in</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>
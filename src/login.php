
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
        }
        .login-container {
            max-width: 900px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .login-image {
            background: url('gambar/wind.jpg') center/cover;
            min-height: 100%;
        }

    </style>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row login-container w-100">
            <div class="col-md-6 d-none d-md-block login-image"></div>
            <div class="col-md-6 p-5">
                <h3 class="text-center mb-4 fw-bold">Welcome to EcoGreen</h3>
                <p class="text-center text-muted">Sign In to EcoGreen</p>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Enter username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember this Device</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                </form>

                <p class="text-center mt-3">Don't have acc? <a href="index.php?page=register" class="text-decoration-none">Create an account</a></p>
            </div>
        </div>
    </div>

    <?php
    include 'template/footer.php'; ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MIS Service Request</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                margin-left: 250px; /* Space for the sidebar */
            }

            
        </style>

    </head>

    <body>
        <!-- Header with logo -->
            <header class="header">
                <div class="container d-flex align-items-center justify-content-start">
                    <!-- Logo on the left side -->
                    <a href="#page-top" class="me-auto">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height: 80px; width: auto;">
                    </a>
                    <!-- Optionally, you can add other content to the header if needed -->
                </div>
            </header>

        <!-- Sidebar (always visible) -->
        <div class="sidebar" id="sidebar">
            <div class="container">
                <ul class="sidebar-nav">
                    <li class="sidebar-item"><a class="sidebar-link" href="resources\views\welcome.blade.php">Home</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="/service-status">Service Status</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#about">Contact Us</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#team">About Us</a></li>

                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading">Management Information System</div>
                    <div class="masthead-heading text-uppercase">Services</div>
                    <a class="btn btn-primary btn-xl text-uppercase" data-bs-toggle="modal" data-bs-target="#serviceRequestModal">Request Now</a>
                </div>
            </header>

            <!-- Service Request Modal -->
            <div class="modal fade" id="serviceRequestModal" tabindex="-1" aria-labelledby="serviceRequestModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="serviceRequestModalLabel">Service Request</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('service.request') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Office/Personnel</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="college" class="form-label">College/Unit</label>
                                    <input type="text" class="form-control" id="college" name="college" required>
                                </div>
                                <div class="mb-3">
                                    <label for="serviceType" class="form-label">Service Type</label>
                                    <input type="text" class="form-control" id="serviceType" name="serviceType" required>
                                </div>
                                <div class="mb-3">
                                    <label for="helpdesk" class="form-label">Receiving IT Helpdesk</label>
                                    <input type="text" class="form-control" id="helpdesk" name="helpdesk" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Details</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                        <div class="col-lg-4 my-3 my-lg-0">
                            <a class="btn btn-dark btn-social mx-2" href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a class="link-dark text-decoration-none me-3" href="#">Privacy Policy</a>
                            <a class="link-dark text-decoration-none" href="#">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div> <!-- End of main-content -->

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core JS -->
        <script src="{{ asset('js/scripts.js') }}"></script>

    </body>
</html>

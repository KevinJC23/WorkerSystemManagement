<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
            @yield('title')
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <svg id="laravel" fill="#f05340" width="32" height="32" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M62.2148 15.1239C62.2148 15.1239 62.1776 15.0495 62.1528 14.9875C62.128 14.9255 62.1032 14.8635 62.0908 14.8263C62.0536 14.7643 62.0164 14.7272 61.9668 14.6652C61.942 14.6156 61.9048 14.5784 61.8552 14.5288C61.8304 14.504 61.7932 14.4792 61.7189 14.4172C61.6817 14.38 61.6445 14.3552 61.5825 14.318L50.0652 7.68536C49.6685 7.46221 49.1354 7.46221 48.7387 7.68536L37.209 14.3304C37.209 14.3304 37.1346 14.38 37.0602 14.442L36.9486 14.5288C36.9486 14.5288 36.8742 14.628 36.8122 14.7024L36.7379 14.8139C36.7379 14.8139 36.6759 14.9255 36.6387 15.0247L36.6015 15.1239C36.5767 15.2479 36.5519 15.3594 36.5519 15.471V27.8561L27.7001 32.9515V8.94991C27.7001 8.83833 27.7001 8.71436 27.6629 8.61518C27.6505 8.57798 27.6381 8.54079 27.6009 8.46641C27.5761 8.40442 27.5513 8.34243 27.5265 8.30524C27.5017 8.24325 27.4645 8.20606 27.4149 8.14407C27.3901 8.10688 27.3529 8.05729 27.3033 8.0077C27.2785 7.9829 27.2414 7.95811 27.167 7.89612C27.1298 7.87133 27.0926 7.83413 27.043 7.80934L15.5133 1.17666C15.1166 0.941113 14.5959 0.941113 14.1868 1.17666L2.66947 7.79694C2.66947 7.79694 2.57029 7.87133 2.5083 7.93331L2.38432 8.0201C2.38432 8.0201 2.32234 8.10688 2.26035 8.18126L2.18596 8.29284C2.18596 8.29284 2.12398 8.42921 2.09918 8.5036L2.04959 8.61518C2.0248 8.72675 2 8.83833 2 8.96231V48.4112C2 48.6344 2.06199 48.8699 2.18596 49.0683C2.29754 49.279 2.47111 49.4402 2.66947 49.5642L25.7165 62.8295C25.7165 62.8295 25.828 62.8791 25.9148 62.9163L26.0264 62.9535C26.138 62.9783 26.2495 63.0031 26.3735 63.0031C26.4851 63.0031 26.5967 62.9783 26.7083 62.9535L26.8198 62.9163C26.8942 62.8915 26.9686 62.8667 27.0306 62.8171L50.0776 49.5642C50.4867 49.3162 50.7347 48.8823 50.7347 48.4112V36.0261L61.5825 29.7777C61.7932 29.6662 61.9544 29.4926 62.0784 29.2942C62.19 29.0835 62.2519 28.8603 62.2519 28.6248V15.471C62.2519 15.3594 62.2519 15.2479 62.2148 15.1239ZM49.4081 20.5664L40.5563 15.471L49.4081 10.388L58.2599 15.471L49.4081 20.5664ZM14.8562 3.86693L23.6957 8.96231L14.8562 14.0577L6.0044 8.96231L14.8562 3.86693ZM25.0346 11.2558V34.4888L19.6541 37.5882L16.1828 39.5842V16.3636L25.0346 11.2558ZM25.0346 59.3582L4.66547 47.6302V11.2558L13.5173 16.3636V41.8901C13.5173 41.8901 13.5297 41.9769 13.5421 42.0637C13.5421 42.1133 13.5545 42.1753 13.5669 42.2372C13.5793 42.2868 13.6041 42.324 13.6289 42.3984C13.6537 42.4604 13.6785 42.51 13.7033 42.5472C13.7281 42.5968 13.7528 42.634 13.8148 42.7208L13.914 42.8323C13.914 42.8323 13.976 42.8943 14.0628 42.9563L25.0346 49.1799V59.3582ZM26.3735 46.8739L17.5341 41.8777L37.8908 30.1621L46.7303 35.2574L26.3735 46.8739ZM48.0692 47.6302L27.7001 59.3706V49.1799L48.0692 37.551V47.6302ZM48.0692 32.9515L39.2174 27.8561V17.7769L48.0692 22.8723V32.9515ZM59.5865 27.8561L50.7347 32.9515V22.8723L59.5865 17.7769V27.8561Z"/></svg>
            <a class="navbar-brand ps-3">Laravel Project</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/404.html">Settings</a></li>
                        <li><a class="dropdown-item" href="/404.html">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/404.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Data Navigation</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseWorkers" aria-expanded="false" aria-controls="collapseWorkers">
                                <div class="sb-nav-link-icon"><i class="lni lni-user"></i></div>
                                Workers
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseWorkers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/worker">Data</a>
                                    <a class="nav-link" href="/worker/add/">Add New Data</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseJobs" aria-expanded="false" aria-controls="collapseJobs">
                                <div class="sb-nav-link-icon"><i class="lni lni-briefcase"></i></div>
                                Jobs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseJobs" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/wjob">Data</a>
                                    <a class="nav-link" href="/wjob/add/">Add New Data</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDivisions" aria-expanded="false" aria-controls="collapseDivisions">
                                <div class="sb-nav-link-icon"><i class="lni lni-helmet"></i></div>
                                Divisions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseDivisions" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/division">Data</a>
                                    <a class="nav-link" href="/division/add/">Add New Data</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLocations" aria-expanded="false" aria-controls="collapseLocations">
                                <div class="sb-nav-link-icon"><i class="lni lni-map-marker"></i></div>
                                Locations
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLocations" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/location">Data</a>
                                    <a class="nav-link" href="/location/add/">Add New Data</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
        
            <div id="layoutSidenav_content">
                <main>
                    </br></br>
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Company Management 2024</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="/js/datatables-simple-demo.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>
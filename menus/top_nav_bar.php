<!-- TOP NAV BAR -->

<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Employment</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Request a Quote</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="page.php?title=quote&extra=none">General Request</a>
                    <a class="dropdown-item" href="#">Inflatable Games</a>
                    <a class="dropdown-item" href="#">Mechanical Bulls</a>
                    <a class="dropdown-item" href="#">Mobile Escape Rooms</a>
                    <a class="dropdown-item" href="#">Casino Parties</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Events</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">College Events</a>
                    <a class="dropdown-item" href="#">Corporate Parties</a>
                    <a class="dropdown-item" href="#">Post Prom</a>
                    <a class="dropdown-item" href="#">Grad Parties</a>
                    <a class="dropdown-item" href="#">Church Parties</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <form class="form-inline ml-3" action="page.php?title=search&extra=php" method='post'>
                <div class="input-group">
                    <input type="text" class="form-control" name="data" placeholder="Search..." />
                    <button class="btn btn-danger ml-3" type="submit">Search</button>
                </div>
            </form>
        </ul>
    </div>
</nav>
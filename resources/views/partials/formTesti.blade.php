<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset('img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Administrator</a></h1>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i><span>Website</span></a>
                </li>
                <li><a href="/admin/all" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Admin</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<h2 class="text-primary m-4">Testimonials</h2>
<div class="m-4 p-3">
    <form action="/admin/testi/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Text</label>
            <input type="text" name="testiText" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="testiName" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Work</label>
            <input type="text" name="testiWork" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Picture</label>
            <input type="text" name="testiImg" class="form-control" placeholder="img/testimonials/">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
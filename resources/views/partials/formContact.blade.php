<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset("img/profile-img.jpg")}}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Administrator</a></h1>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i><span>Website</span></a></li>
                <li><a href="/admin/all" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Admin</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->



<h2 class="text-primary m-4">Contact</h2>
<div class="m-4 p-3">
    <form action="/admin/{{ $editTwo->id }}/contact/update" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Location</label>
            <input type="text" name="contactLocation" value="{{ $editTwo->contactLocation }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
            <input input type="text" name="contactEmail" value="{{ $editTwo->contactEmail }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="text" name="contactPhone" value="{{ $editTwo->contactPhone }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

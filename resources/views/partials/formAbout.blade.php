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



<h2 class="text-primary m-4">About</h2>
<div class="m-4 p-3">
    <form action="/admin/{{ $edit->id }}/about/update" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" value="{{ $edit->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Introduction</label>
            <input input type="text" name="introduction" value="{{ $edit->introduction }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Birthday</label>
            <input type="text" name="birthday" value="{{ $edit->birthday }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Website</label>
            <input type="text" name="website" value="{{ $edit->website }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="text" name="phone" value="{{ $edit->phone }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">City</label>
            <input type="text" name="city" value="{{ $edit->city }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
            <input type="number" name="age" value="{{ $edit->age }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Degree</label>
            <input type="text" name="degree" value="{{ $edit->degree }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" name="email" value="{{ $edit->email }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Freelance</label>
            <input type="text" name="freelance" value="{{ $edit->freelance }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Conclusion</label>
            <input type="text" name="conclusion" value="{{ $edit->conclusion }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

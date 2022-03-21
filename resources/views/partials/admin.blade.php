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
                <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i>
                        <span>Website</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i>
                        <span>Services</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                        <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->


<div class="p-2 m-5">
    <h2 class="text-primary mb-3">About</h2>
    <p><b>Title :</b> {{ $about->title }}</p>
    <p><b>Introduction :</b> {{ $about->introduction }} </p>
    <p><b>Birthday :</b> {{ $about->birthday }}</p>
    <p><b>Website :</b> {{ $about->website }}</p>
    <p><b>Phone :</b> {{ $about->phone }}</p>
    <p><b>City :</b> {{ $about->city }}</p>
    <p><b>Age :</b> {{ $about->age }}</p>
    <p><b>Degree :</b> {{ $about->degree }}</p>
    <p><b>Email :</b> {{ $about->email }}</p>
    <p><b>Freelance :</b> {{ $about->freelance }}</p>
    <p><b>Conclusion :</b> {{ $about->conclusion }}</p>

    <a href="/admin/{{ $about->id }}/about/edit" class="btn btn-primary">Edit</a>
</div>

<div class="p-2 m-5">
    <h2 class="text-primary mb-3">Skills</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Value</th>
                <th scope="col">Button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <th scope="row">{{ $skill->id }}</th>
                    <td>{{ $skill->technoName }}</td>
                    <td>{{ $skill->technoValue }}</td>
                    <td><a href="/admin/{{ $skill->id }}/skill/delete" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="p-2 m-5">
    <h2 class="text-primary mb-3">Portofolio</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
                <th scope="col">Button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portofolios as $portofolio)
                <tr>
                    <th scope="row">{{ $portofolio->id }}</th>
                    <td>{{ $portofolio->imgLink }}</td>
                    <td><a href="/admin/{{ $portofolio->id }}/pf/delete" class="btn btn-danger">Delete</a><td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="p-2 m-5">
    <h2 class="text-primary mb-3">Services</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Text</th>
                <th scope="col">Icon</th>
                <th scope="col">Button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->serviceName }}</td>
                    <td>{{ $service->serviceText }}</td>
                    <td>{{ $service->serviceIcon }}</td>
                    <td><a href="/admin/{{ $service->id }}/service/delete" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="p-2 m-5">
    <h2 class="text-primary mb-3">Testimonials</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Text</th>
                <th scope="col">Name</th>
                <th scope="col">Work</th>
                <th scope="col">Image</th>
                <th scope="col">Button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <th scope="row">{{ $testimonial->id }}</th>
                    <td>{{ $testimonial->testiText }}</td>
                    <td>{{ $testimonial->testiName }}</td>
                    <td>{{ $testimonial->testiWork }}</td>
                    <td>{{ $testimonial->testiImg }}</td>
                    <td><a href="/admin/{{ $testimonial->id }}/testi/delete" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="p-2 m-5">
    <h2 class="text-primary mb-3">Contact</h2>
    <p><b>Location :</b> {{ $contact->contactLocation }} </p>
    <p><b>Email :</b> {{ $contact->contactEmail }} </p>
    <p><b>Call :</b> {{ $contact->contactPhone }} </p>

    <a href="/admin/{{ $contact->id }}/contact/edit" class="btn btn-primary">Edit</a>
</div>
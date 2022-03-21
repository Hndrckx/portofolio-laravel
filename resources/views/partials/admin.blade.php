<div class="container p-2 ">
    <h2>About</h2>
    <p>Title : {{ $about->title }}</p>
    <p>Introduction : {{ $about->introduction }} </p>
    <p>Birthday : {{ $about->birthday }}</p>
    <p>Website : {{ $about->website }}</p>
    <p>Phone : {{ $about->phone }}</p>
    <p>City : {{ $about->city }}</p>
    <p>Age : {{ $about->age }}</p>
    <p>Degree : {{ $about->degree }}</p>
    <p>Email : {{ $about->email }}</p>
    <p>Freelance : {{ $about->freelance }}</p>
    <p>Conclusion : {{ $about->conclusion }}</p>

    <a href="/admin/{{ $about->id }}/about/edit" class="btn btn-primary">Edit</a>
</div>

<div class="container p-2">
    <h2>Skills</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <th scope="row">{{ $skill->id }}</th>
                    <td>{{ $skill->technoName }}</td>
                    <td>{{ $skill->technoValue }}</td>
                    <a href="/admin/{{ $skill->id }}/skill/delete" class="btn btn-danger">Delete</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container p-2">
    <h2>Portofolio</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($portofolios as $portofolio)
                <tr>
                    <th scope="row">{{ $portofolio->id }}</th>
                    <td>{{ $portofolio->imgLink }}</td>
                    <a href="/admin/{{ $portofolio->id }}/pf/delete" class="btn btn-danger">Delete</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container p-2">
    <h2>Services</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Text</th>
                <th scope="col">Icon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->serviceName }}</td>
                    <td>{{ $service->serviceText }}</td>
                    <td>{{ $service->serviceIcon }}</td>
                    <a href="/admin/{{ $service->id }}/service/delete" class="btn btn-danger">Delete</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container p-2">
    <h2>Testimonials</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Text</th>
                <th scope="col">Name</th>
                <th scope="col">Work</th>
                <th scope="col">Image</th>
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
                    <a href="/admin/{{ $testimonial->id }}/testi/delete" class="btn btn-danger">Delete</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container p-2">
    <h2>Contact</h2>
    <p>Location : {{ $contact->contactLocation }} </p>
    <p>Email : {{ $contact->contactEmail }} </p>
    <p>Call : {{ $contact->contactPhone }} </p>

    <a href="/admin/{{ $contact->id }}/contact/edit" class="btn btn-primary">Edit</a>
</div>
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{asset("img/profile-img.jpg")}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $uiAbout->title }}</h3>
                <p class="fst-italic">{{ $uiAbout->introduction }}</p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong><span>{{ $uiAbout->birthday }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong><span>{{ $uiAbout->website }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $uiAbout->phone }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $uiAbout->city }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong><span>{{ $uiAbout->age }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong><span>{{ $uiAbout->degree }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong><span>{{ $uiAbout->email }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong><span>{{ $uiAbout->freelance }}</span></li>
                        </ul>
                    </div>
                </div>
                <p>{{ $uiAbout->conclusion }}</p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
@foreach ($uiServices as $uiService )
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="{{ $uiService->serviceIcon}}"></i></div>
                <h4 class="title"><a href=""></a>{{ $uiService->serviceName}}</h4>
                <p class="description">{{ $uiService->serviceText}}</p>
            </div>
@endforeach
        </div>

    </div>
</section><!-- End Services Section -->
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                @foreach ($uiTestimonials as $uiTestimonial )
                    
                <div class="swiper-slide">
                    <div class="testimonial-item" data-aos="fade-up">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $uiTestimonial->testiText }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ $uiTestimonial->testiImg }}" class="testimonial-img" alt="">
                        <h3>{{ $uiTestimonial->testiName}}</h3>
                        <h4>{{ $uiTestimonial->testiWork}}</h4>
                    </div>
                </div><!-- End testimonial item -->
            @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->

@if(isset($testimonials) && $testimonials->isNotEmpty())
    @foreach($testimonials as $testimonial)
        <div class="testimonial-wrapper-4">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="testimonial-items">
                        <div class="testimonial-image testimonial-person-icon">
                            @if($testimonial->image)
                                <img src="{{ asset('storage/'.$testimonial->image) }}" alt="{{ $testimonial->name }}" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                            @else
                                <i class="fas fa-user"></i>
                            @endif
                        </div>
                        <div class="client-info">
                            <h5>{{ $testimonial->name }}</h5>
                            @if($testimonial->role)
                                <h6>{{ $testimonial->role }}</h6>
                            @endif
                            <span class="emca-testimonial-client">Client</span>
                        </div>
                        <div class="testimonial-content">
                            <h3>{{ $testimonial->content }}</h3>
                            <div class="star">
                                @for($i = 1; $i <= $testimonial->rating; $i++)
                                    <span class="fas fa-star"></span>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

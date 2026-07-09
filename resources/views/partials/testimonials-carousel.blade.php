@if(isset($testimonials) && $testimonials->isNotEmpty())
    @foreach($testimonials as $testimonial)
        <div class="testimonial-card-items">
            <div class="author-items">
                <div class="author-image testimonial-person-icon">
                    @if($testimonial->image)
                        <img src="{{ asset('storage/'.$testimonial->image) }}" alt="{{ $testimonial->name }}" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                    @else
                        <i class="fas fa-user"></i>
                    @endif
                </div>
                <div class="author-content">
                    <h5>{{ $testimonial->name }}</h5>
                    @if($testimonial->role)
                        <span>{{ $testimonial->role }}</span>
                    @endif
                    <span class="emca-testimonial-client">Client</span>
                </div>
            </div>
            <p>{{ $testimonial->content }}</p>
            <div class="star">
                @for($i = 1; $i <= $testimonial->rating; $i++)
                    <span class="fas fa-star"></span>
                @endfor
            </div>
        </div>
    @endforeach
@endif

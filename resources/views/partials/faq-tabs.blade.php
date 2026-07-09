@php
    $faqCategories = config('faq.categories');
@endphp

<div class="single-tab-items">
    <ul class="nav mb-4" role="tablist">
        @foreach ($faqCategories as $category)
            <li class="nav-item wow fadeInUp" data-wow-delay=".{{ 3 + $loop->index * 2 }}s" role="presentation">
                <a
                    href="#{{ $category['tab_id'] }}"
                    data-bs-toggle="tab"
                    class="nav-link{{ $loop->first ? ' active' : '' }}"
                    aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                    role="tab"
                    @if (! $loop->first) tabindex="-1" @endif
                >
                    {{ $category['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach ($faqCategories as $category)
            <div
                id="{{ $category['tab_id'] }}"
                class="tab-pane fade{{ $loop->first ? ' show active' : '' }}"
                role="tabpanel"
            >
                <div class="faq-content">
                    <div class="faq-accordion">
                        <div class="accordion" id="{{ $category['accordion_id'] }}">
                            @foreach ($category['items'] as $itemIndex => $item)
                                @php
                                    $itemId = $category['tab_id'] . '-faq-' . ($itemIndex + 1);
                                    $isOpen = $itemIndex === 0;
                                @endphp
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".{{ 3 + $itemIndex * 2 }}s">
                                    <h4 class="accordion-header">
                                        <button
                                            class="accordion-button{{ $isOpen ? '' : ' collapsed' }}"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#{{ $itemId }}"
                                            aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
                                            aria-controls="{{ $itemId }}"
                                        >
                                            {{ $item['question'] }}
                                        </button>
                                    </h4>
                                    <div
                                        id="{{ $itemId }}"
                                        class="accordion-collapse collapse{{ $isOpen ? ' show' : '' }}"
                                        data-bs-parent="#{{ $category['accordion_id'] }}"
                                    >
                                        <div class="accordion-body">
                                            {{ $item['answer'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

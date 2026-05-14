@extends('layouts.master')

@section('title', 'Fasilitas - Graha Permata Jingga')

@push('styles')
    <style>
        .page-hero {
            height: 60vh;
            min-height: 400px;
            background-image: url('{{ asset("static/image/fasilitas_hero.png") }}');
            background-size: cover;
            background-position: center 30%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            margin-top: 0;
        }

        .page-hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .page-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }
    </style>
@endpush

@section('content')
    <!-- Hero -->
    <section class="page-hero">
        <div class="page-hero-overlay"></div>
        <div class="page-hero-content text-white">
            <p class="mb-2" style="letter-spacing: 6px; font-size: 0.7rem; font-weight: 600; opacity: 0.8;"></p>
            <h1 class="display-2 fw-bold font-serif mb-0" style="letter-spacing: 10px;">FASILITAS</h1>
        </div>
    </section>

    <!-- Facilities Grid -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                @foreach($facilities as $facility)
                    <div class="col-lg-3 col-md-6 reveal">
                        <div class="card border-0 shadow-sm h-100"
                            style="border-radius: 20px; overflow: hidden; transition: all 0.3s ease; background: #fff;">
                            <div style="height: 200px; overflow: hidden;">
                                <img src="{{ $facility->image ? (str_starts_with($facility->image, 'static/') ? asset($facility->image) : asset('storage/' . $facility->image)) : asset('static/image/fasilitas1.png') }}"
                                    class="w-100 h-100" style="object-fit: cover;" alt="{{ $facility->title }}">
                            </div>
                            <div class="card-body p-4 text-center">
                                <div class="mb-3">
                                    <i class="{{ $facility->icon ?: 'fas fa-check-circle' }}"
                                        style="color: #E67E22; font-size: 1.5rem;"></i>
                                </div>
                                <h5 class="fw-bold mb-2">{{ $facility->title }}</h5>
                                <p class="small text-muted mb-0">{{ $facility->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        gsap.utils.toArray('.reveal').forEach(function (elem) {
            gsap.fromTo(elem,
                { opacity: 0, y: 40 },
                {
                    opacity: 1, y: 0, duration: 1, ease: "power2.out",
                    scrollTrigger: { trigger: elem, start: "top 85%", toggleActions: "play none none none" }
                }
            );
        });
    </script>
@endpush
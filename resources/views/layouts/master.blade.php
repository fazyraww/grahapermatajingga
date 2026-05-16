<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Graha Permata Jingga – Perumahan modern eksklusif di Situbondo. Hunian mewah, asri, dan strategis dengan fasilitas kelas dunia.')">
    <meta name="keywords" content="perumahan situbondo, rumah dijual situbondo, graha permata jingga, rumah subsidi situbondo, rumah komersial situbondo">
    <meta name="author" content="Graha Permata Jingga">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('title', 'Graha Permata Jingga – The Singapore Of Situbondo')">
    <meta property="og:description" content="@yield('meta_description', 'Perumahan modern eksklusif di Situbondo dengan fasilitas kelas dunia.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('static/image/hero_entrance.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('static/image/logo.png') }}">
    <title>@yield('title', 'Graha Permata Jingga – The Singapore Of Situbondo')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Core Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('static/css/citra.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/custom.css') }}">

    @stack('styles')
</head>

<body class="antialiased overflow-x-hidden">
    <!-- Navigation -->
    <x-navbar />

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- JavaScript Frameworks & Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Navbar Scroll Behavior & Animations -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        document.addEventListener('DOMContentLoaded', function() {
            // Navbar Scroll
            window.addEventListener('scroll', function () {
                var nav = document.querySelector('.navbar-luxury');
                if (nav) {
                    if (window.scrollY > 100) { nav.classList.add('scrolled'); }
                    else { nav.classList.remove('scrolled'); }
                }
            });

            // Global Reveal Logic
            gsap.utils.toArray('.reveal').forEach(function (elem) {
                gsap.fromTo(elem,
                    { opacity: 0, y: 30 },
                    {
                        opacity: 1, y: 0, duration: 1.2, ease: "power3.out",
                        scrollTrigger: { trigger: elem, start: "top 85%" }
                    }
                );
            });
        });
    </script>
    <style>
        /* Fallback for reveal if JS fails */
        .reveal { opacity: 1; }
    </style>

    @stack('scripts')

    <!-- WhatsApp Floating -->
    <div class="wa-container">
        <div class="wa-bubble" id="waBubble">Halo, ada yang bisa <strong id="waAgentName">...</strong> bantu?</div>
        <a href="#" class="wa-float" id="waFloatBtn" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <script>
        (function() {
            var agents = [
                { name: "H. Sudarso",  phone: "6282148779639" },
                { name: "Dhirta",      phone: "6285234008860" },
                { name: "Hj. Siyani", phone: "6281336499700" },
                { name: "drg. Ema",   phone: "628124951887"  }
            ];
            var agent = agents[Math.floor(Math.random() * agents.length)];
            var msg = encodeURIComponent("Halo " + agent.name + ", saya ingin bertanya informasi mengenai Graha Permata Jingga.");
            var waAgent = document.getElementById("waAgentName");
            var waBtn = document.getElementById("waFloatBtn");
            if(waAgent) waAgent.textContent = agent.name;
            if(waBtn) waBtn.href = "https://wa.me/" + agent.phone + "?text=" + msg;
        })();
    </script>

    <!-- ===== CONTACT PICKER MODAL ===== -->
    <div id="contactPickerModal" style="display:none; position:fixed; inset:0; z-index:99999; background:rgba(0,0,0,0.6); backdrop-filter:blur(6px); align-items:center; justify-content:center;">
        <div style="background:#fff; border-radius:28px; padding:32px 28px; max-width:400px; width:92%; position:relative; box-shadow:0 30px 60px rgba(0,0,0,0.3);" id="cpInner">
            <button onclick="closeContactPicker()" style="position:absolute; top:16px; right:18px; background:rgba(0,0,0,0.06); border:none; width:32px; height:32px; border-radius:50%; font-size:1rem; cursor:pointer; color:#555; display:flex; align-items:center; justify-content:center;" aria-label="Tutup">&times;</button>
            <div style="text-align:center; margin-bottom:20px;">
                <div style="width:54px;height:54px;background:linear-gradient(135deg,#E67E22,#D35400);border-radius:18px;display:inline-flex;align-items:center;justify-content:center;color:#fff;font-size:1.6rem;margin-bottom:12px;box-shadow:0 8px 20px rgba(230,126,34,0.3);"><i class="fab fa-whatsapp"></i></div>
                <h5 style="font-weight:700; margin:0 0 4px; color:#222; font-size:1.1rem;">Hubungi Tim Marketing</h5>
                <p style="font-size:0.8rem; color:#999; margin:0;" id="cpSubMsg">Pilih agen kami yang tersedia</p>
            </div>
            <div id="cpList" style="display:flex; flex-direction:column; gap:10px;"></div>
            <p style="text-align:center; font-size:0.72rem; color:#bbb; margin:16px 0 0;">Jika satu agen tidak merespon, coba hubungi agen lainnya.</p>
        </div>
    </div>
    <style>
        @keyframes cpSlideUp { from { transform:translateY(40px); opacity:0; } to { transform:translateY(0); opacity:1; } }
        #cpInner { animation: cpSlideUp 0.35s cubic-bezier(0.175,0.885,0.32,1.275); }
    </style>
    <script>
    var _cpAgents = [
        { name: "H. Sudarso",  phone: "6282148779639" },
        { name: "Dhirta",      phone: "6285234008860" },
        { name: "Hj. Siyani", phone: "6281336499700" },
        { name: "drg. Ema",   phone: "628124951887"  }
    ];
    function showContactPicker(msg) {
        var modal = document.getElementById("contactPickerModal");
        var list  = document.getElementById("cpList");
        if(!modal || !list) return;
        document.getElementById("cpSubMsg").textContent = "Pilih agen kami yang tersedia";
        list.innerHTML = "";
        _cpAgents.forEach(function(a) {
            var text = encodeURIComponent("Halo " + a.name + ", " + (msg || "saya ingin bertanya informasi mengenai Graha Permata Jingga."));
            var card = document.createElement("a");
            card.href = "https://wa.me/" + a.phone + "?text=" + text;
            card.target = "_blank";
            card.rel = "noopener noreferrer";
            card.style.cssText = "display:flex;align-items:center;gap:14px;padding:13px 16px;border-radius:18px;border:1.5px solid rgba(230,126,34,0.12);text-decoration:none;transition:all 0.25s ease;background:#fff;";
            card.innerHTML = "<div style='width:42px;height:42px;background:linear-gradient(135deg,#E67E22,#D35400);border-radius:14px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.1rem;flex-shrink:0;box-shadow:0 4px 12px rgba(230,126,34,0.25);'><i class='fab fa-whatsapp'></i></div>" +
                "<div style='flex:1;'><div style='font-weight:700;color:#222;font-size:0.95rem;'>" + a.name + "</div></div>" +
                "<i class='fas fa-chevron-right' style='color:#ddd;font-size:0.75rem;'></i>";
            card.addEventListener("mouseover", function(){ this.style.background="#FFF3E0"; this.style.borderColor="#E67E22"; this.style.transform="translateX(4px)"; });
            card.addEventListener("mouseout",  function(){ this.style.background="#fff";    this.style.borderColor="rgba(230,126,34,0.12)"; this.style.transform=""; });
            list.appendChild(card);
        });
        modal.style.display = "flex";
    }
    function closeContactPicker() {
        var modal = document.getElementById("contactPickerModal");
        if(modal) modal.style.display = "none";
    }
    window.addEventListener('click', function(e) {
        var modal = document.getElementById("contactPickerModal");
        if (e.target === modal) closeContactPicker();
    });
    </script>
    <!-- ===== END CONTACT PICKER ===== -->
</body>
</html>
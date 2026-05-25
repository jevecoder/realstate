<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Real Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
    scroll-behavior: smooth;
}
.nav-link {
    position: relative;
    padding-bottom: 4px;
    transition: 0.3s;
}

.nav-link.active {
    color: #22d3ee;
}

.nav-link.active::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #22d3ee;
}

.reveal {
    opacity: 1; /* IMPORTANT: hindi 0 by default muna */
    transform: translateY(30px);
    transition: all 0.8s ease;
    transition-delay: 0.1s;
}

.reveal.show {
    opacity: 1;
    transform: translateY(0);
}

.property-card {
    opacity: 1;
    transform: translateY(40px);
    transition: all 0.8s ease;
}

.property-card.show {
    transform: translateY(0);
}

#topBtn {
    display: none;
    opacity: 0;
    transform: scale(0.8);
    transition: all 0.3s ease;
}

#topBtn.show {
    display: flex;
    opacity: 1;
    transform: scale(1);
}

.amenity-card {
    min-width: 280px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    overflow: hidden;
    transition: 0.4s;
    transform: scale(0.95);
    opacity: 0.7;
}

.amenity-card img {
    height: 160px;
    width: 100%;
    object-fit: cover;
    transition: 0.4s;
}

.amenity-card:hover {
    transform: scale(1.08);
    opacity: 1;
    border-color: rgba(34,211,238,0.6);
    box-shadow: 0 0 30px rgba(34,211,238,0.25);
}

/* ACTIVE CENTER (JS ADD CLASS OPTIONAL) */
.amenity-card.active {
    transform: scale(1.15);
    opacity: 1;
    border: 1px solid #22d3ee;
    box-shadow: 0 0 40px rgba(34,211,238,0.4);
}
</style>
</head>

<script>
const cards = document.querySelectorAll(".property-card");

const cardObserver = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {

            cards.forEach((card, index) => {

                setTimeout(() => {
                    card.classList.add("show");
                }, index * 250);

            });

        }

    });

}, {
    threshold: 0.2
});

cards.forEach(card => {
    cardObserver.observe(card);
});
</script>

<script>
    //button floating
document.addEventListener("DOMContentLoaded", () => {

    const btn = document.getElementById("topBtn");
    const circle = document.getElementById("progressCircle");

    const radius = 24;
    const circumference = 2 * Math.PI * radius;

    circle.style.strokeDasharray = circumference;

    // SCROLL EVENT
    window.addEventListener("scroll", () => {

        const scrollTop = window.scrollY;
        const docHeight = document.body.scrollHeight - window.innerHeight;

        const progress = scrollTop / docHeight;

        // progress circle animation
        circle.style.strokeDashoffset = circumference - progress * circumference;

        // show/hide button
        if (scrollTop > 200) {
            btn.classList.add("show");
        } else {
            btn.classList.remove("show");
        }
    });

    // CLICK SCROLL TOP
    btn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    // MAGNETIC HOVER EFFECT
    btn.addEventListener("mousemove", (e) => {
        const rect = btn.getBoundingClientRect();

        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;

        btn.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px) scale(1.05)`;
    });

    btn.addEventListener("mouseleave", () => {
        btn.style.transform = "translate(0,0) scale(1)";
    });

});
</script>

<script>
    //JS (auto trigger on scroll)
const reveals = document.querySelectorAll(".reveal");

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        }
    });
}, {
    threshold: 0.1
});

reveals.forEach(el => observer.observe(el));
</script>

<script>
    // SHRINK NAVBAR ON SCROLL
window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");
    const inner = document.getElementById("navInner");

    if (window.scrollY > 50) {
        inner.classList.add("bg-black/70");
        inner.classList.add("backdrop-blur-2xl");
        inner.classList.remove("bg-black/30");
    } else {
        inner.classList.remove("bg-black/70");
        inner.classList.add("bg-black/30");
    }
});

// MOBILE MENU
const btn = document.getElementById("menuBtn");
const menu = document.getElementById("mobileMenu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});
</script>


<script>
//CAROUSEL SCRIPT (AUTO SLIDE)
document.addEventListener("DOMContentLoaded", () => {

    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");

    let index = 0;

    function updateCarousel(i) {

        slides.forEach((slide, idx) => {
            if (idx === i) {
                slide.style.opacity = "1";
                slide.style.transform = "scale(1.05)";
            } else {
                slide.style.opacity = "0";
                slide.style.transform = "scale(1.1)";
            }
        });

        dots.forEach((dot, idx) => {
            dot.style.background = idx === i ? "#22d3ee" : "rgba(255,255,255,0.3)";
        });
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        updateCarousel(index);
    }

    updateCarousel(index);
    setInterval(nextSlide, 4000);

});
</script>

<script>
    //start SCROLL FADE-IN ANIMATION
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("opacity-100", "translate-y-0");
        }
    });
});

document.querySelectorAll(".reveal").forEach((el) => {
    el.classList.add("opacity-0", "translate-y-10", "transition-all", "duration-700");
    observer.observe(el);
});

</script>

<script>
    //OPEN MODAL FUNCTION
function openModal() {
    document.getElementById('modal').classList.remove('hidden');
    document.getElementById('modal').classList.add('flex');
}

function closeModal() {
    document.getElementById('modal').classList.add('hidden');
    document.getElementById('modal').classList.remove('flex');
}
</script>

<script>
    //SCROLL SPY SCRIPT (AUTO ACTIVE MENU)
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {

    let current = "";

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 150;
        const sectionHeight = section.clientHeight;

        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("active");

        if (link.getAttribute("href") === "#" + current) {
            link.classList.add("active");
        }
    });

});
</script>

<script>
    // stats section
const counters = document.querySelectorAll('.counter');

const speed = 200;

counters.forEach(counter => {

    const animate = () => {

        const value = +counter.getAttribute('data-target');
        const data = +counter.innerText;

        const time = value / speed;

        if(data < value) {

            counter.innerText = Math.ceil(data + time);

            setTimeout(animate, 20);

        } else {

            counter.innerText = value + "+";

        }

    }

    animate();

});
</script>

<script>
    // FLOATING CONTACT BUTTON
function toggleContactMenu() {

    const menu = document.getElementById('contactMenu');

    menu.classList.toggle('opacity-0');
    menu.classList.toggle('invisible');
    menu.classList.toggle('translate-y-5');

}
</script>

<script>
const images = [
    "https://images.unsplash.com/photo-1600585154340-be6161a56a0c",
    "https://images.unsplash.com/photo-1570129477492-45c003edd2be",
    "https://images.unsplash.com/photo-1568605114967-8130f3a36994",
    "https://images.unsplash.com/photo-1580587771525-78b9dba3b914"
];

let index = 0;

setInterval(() => {
    index = (index + 1) % images.length;
    document.getElementById("autoImage").src = images[index];
}, 3000);
</script>

<body class="bg-[#0a0f1c] text-white overflow-x-hidden">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>
@include('partials.footer')
</body>
</html>
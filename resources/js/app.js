document.addEventListener("DOMContentLoaded", function () {
    // =====================================
    // NAVBAR SCROLL EFFECT
    // =====================================

    const navbar = document.getElementById("mainNavbar");

    if (navbar) {
        function updateNavbar() {
            if (window.scrollY > 30) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        }

        window.addEventListener("scroll", updateNavbar, {
            passive: true,
        });

        // Check initial scroll position
        updateNavbar();
    }

    // =====================================
    // MOBILE NAVIGATION
    // =====================================

    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.getElementById("navLinks");

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", function () {
            const isOpen = navLinks.classList.toggle("show");

            menuToggle.setAttribute("aria-expanded", isOpen);

            menuToggle.innerHTML = isOpen
                ? '<i class="fa-solid fa-xmark"></i>'
                : '<i class="fa-solid fa-bars"></i>';
        });

        // Close menu after clicking a link
        navLinks.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                navLinks.classList.remove("show");

                menuToggle.setAttribute("aria-expanded", "false");

                menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
            });
        });

        // Close mobile menu on desktop resize
        window.addEventListener("resize", function () {
            if (window.innerWidth > 767) {
                navLinks.classList.remove("show");

                menuToggle.setAttribute("aria-expanded", "false");

                menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
            }
        });
    }

    // =====================================
    // BOOKING TABS
    // =====================================

    const bookingTabs = document.querySelectorAll(".booking-tab");

    const bookingPanels = document.querySelectorAll(".booking-panel");

    bookingTabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            // Remove active from all tabs
            bookingTabs.forEach(function (item) {
                item.classList.remove("active");
            });

            // Hide all panels
            bookingPanels.forEach(function (panel) {
                panel.classList.add("hidden");
            });

            // Activate clicked tab
            tab.classList.add("active");

            // Show selected panel
            const selectedTab = tab.getAttribute("data-tab");

            const selectedPanel = document.getElementById(selectedTab);

            if (selectedPanel) {
                selectedPanel.classList.remove("hidden");
            }
        });
    });

    // =====================================
    // FLIGHT FORM
    // =====================================

    const flightForm = document.getElementById("flightForm");

    if (flightForm) {
        flightForm.addEventListener("submit", function (e) {
            e.preventDefault();

            alert(
                "Thank you! Please contact our team to confirm your flight enquiry.",
            );
        });
    }

    // =====================================
    // UMRAH FORM
    // =====================================

    const umrahForm = document.getElementById("umrahForm");

    if (umrahForm) {
        umrahForm.addEventListener("submit", function (e) {
            e.preventDefault();

            alert(
                "Thank you! Your Umrah enquiry is ready. Please contact our team to proceed.",
            );
        });
    }
    // DATE VALIDATION

    const dateInputs = document.querySelectorAll('input[type="date"]');

    const today = new Date();

    const localToday = new Date(
        today.getTime() - today.getTimezoneOffset() * 60000,
    )
        .toISOString()
        .split("T")[0];

    dateInputs.forEach(function (input) {
        input.setAttribute("min", localToday);
    });
});

// about js start here

/* =========================================
   SAFWA ABOUT PAGE JAVASCRIPT
========================================= */

document.addEventListener("DOMContentLoaded", () => {
    const revealElements = document.querySelectorAll(".reveal");

    // Respect reduced-motion preferences
    const reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    if (reduceMotion || !("IntersectionObserver" in window)) {
        revealElements.forEach((element) => {
            element.classList.add("show");
        });
        return;
    }

    const observer = new IntersectionObserver(
        (entries, observerInstance) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");

                    observerInstance.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.12,
            rootMargin: "0px 0px -40px 0px",
        },
    );

    revealElements.forEach((element) => {
        observer.observe(element);
    });
});
// umrha js

/* ==========================================
   SAFWA UMRAH PAGE JAVASCRIPT
========================================== */

document.addEventListener("DOMContentLoaded", () => {
    /* =================================
     1. SCROLL REVEAL ANIMATION
  ================================= */

    const revealElements = document.querySelectorAll(".umrah-page .reveal");

    const reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    if (reduceMotion || !("IntersectionObserver" in window)) {
        revealElements.forEach((element) => {
            element.classList.add("show");
        });
    } else {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show");

                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -35px 0px",
            },
        );

        revealElements.forEach((element) => {
            revealObserver.observe(element);
        });
    }

    /* =================================
     2. PACKAGE FILTER
  ================================= */

    const filterButtons = document.querySelectorAll(".package-filter");

    const packageCards = document.querySelectorAll(".package-card");

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const selectedCategory = button.dataset.filter;

            filterButtons.forEach((btn) => {
                btn.classList.remove("active");
            });

            button.classList.add("active");

            packageCards.forEach((card) => {
                const cardCategory = card.dataset.category;

                const shouldShow =
                    selectedCategory === "all" ||
                    cardCategory === selectedCategory;

                card.style.display = shouldShow ? "" : "none";
            });
        });
    });

    /* =================================
     3. FAQ ACCORDION
  ================================= */

    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");

        question.addEventListener("click", () => {
            const isAlreadyOpen = item.classList.contains("active");

            faqItems.forEach((faq) => {
                faq.classList.remove("active");

                faq.querySelector(".faq-question").setAttribute(
                    "aria-expanded",
                    "false",
                );
            });

            if (!isAlreadyOpen) {
                item.classList.add("active");

                question.setAttribute("aria-expanded", "true");
            }
        });
    });

    /* =================================
     4. SMOOTH INTERNAL NAVIGATION
  ================================= */

    document.querySelectorAll('.umrah-page a[href^="#"]').forEach((link) => {
        link.addEventListener("click", (event) => {
            const targetId = link.getAttribute("href");

            if (!targetId || targetId === "#") return;

            const target = document.querySelector(targetId);

            if (target) {
                event.preventDefault();

                target.scrollIntoView({
                    behavior: reduceMotion ? "auto" : "smooth",
                    block: "start",
                });
            }
        });
    });
});
// umrha detail page js start here

document.addEventListener("DOMContentLoaded", function () {
    // =================================
    // GALLERY IMAGE SWITCHING
    // =================================

    const mainImage = document.getElementById("mainPackageImage");
    const thumbnails = document.querySelectorAll(".gallery-thumb");

    thumbnails.forEach(function (thumbnail) {
        thumbnail.addEventListener("click", function () {
            const imageUrl = this.dataset.image;

            if (!mainImage || !imageUrl) return;

            mainImage.style.opacity = "0.4";

            const newImage = new Image();

            newImage.onload = function () {
                mainImage.src = imageUrl;
                mainImage.style.opacity = "1";
            };

            newImage.onerror = function () {
                mainImage.style.opacity = "1";
            };

            newImage.src = imageUrl;

            thumbnails.forEach(function (item) {
                item.classList.remove("active");
            });

            this.classList.add("active");
        });
    });

    // =================================
    // DATE VALIDATION
    // =================================

    const travelDate = document.getElementById("travel_date");
    const returnDate = document.getElementById("return_date");

    if (travelDate) {
        const today = new Date();
        const localToday = new Date(
            today.getTime() - today.getTimezoneOffset() * 60000,
        )
            .toISOString()
            .split("T")[0];

        travelDate.min = localToday;

        travelDate.addEventListener("change", function () {
            if (returnDate) {
                returnDate.min = this.value;

                if (returnDate.value && returnDate.value < this.value) {
                    returnDate.value = "";
                }
            }
        });
    }

    // =================================
    // BOOKING FORM VALIDATION
    // =================================

    const bookingForm = document.getElementById("umrahBookingForm");

    if (bookingForm) {
        bookingForm.addEventListener("submit", function (event) {
            if (!bookingForm.checkValidity()) {
                event.preventDefault();
                bookingForm.reportValidity();
                return;
            }

            if (
                travelDate &&
                returnDate &&
                travelDate.value &&
                returnDate.value &&
                returnDate.value < travelDate.value
            ) {
                event.preventDefault();

                returnDate.setCustomValidity(
                    "Return date cannot be earlier than travel date.",
                );

                returnDate.reportValidity();
                returnDate.setCustomValidity("");

                return;
            }
        });
    }
});
// polices js

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".policy-nav a");
    const policySections = document.querySelectorAll(".policy-card");

    // Smooth scroll
    navLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            const targetId = this.getAttribute("href");
            const target = document.querySelector(targetId);

            if (target) {
                e.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });

                navLinks.forEach((item) => {
                    item.classList.remove("active");
                });

                this.classList.add("active");
            }
        });
    });

    // Active navigation while scrolling
    function updateActiveLink() {
        let currentSection = "";

        policySections.forEach((section) => {
            const sectionTop = section.getBoundingClientRect().top;

            if (sectionTop <= 160) {
                currentSection = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");

            if (link.getAttribute("href") === "#" + currentSection) {
                link.classList.add("active");
            }
        });
    }

    window.addEventListener("scroll", updateActiveLink);

    updateActiveLink();
});

// contract js
const contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", function (event) {
    event.preventDefault();

    if (!contactForm.checkValidity()) {
        contactForm.reportValidity();
        return;
    }

    document.getElementById("successMessage").classList.remove("hidden");

    contactForm.reset();
});

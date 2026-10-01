/* =========================================================
   VCAMPUS LANDING PAGE
   STARTING VERSION JS
========================================================= */

document.addEventListener("DOMContentLoaded", function () {


    /* =====================================================
       CARD REVEAL ANIMATION
    ====================================================== */

    const animatedCards = document.querySelectorAll(
        ".vc-program-card, " +
        ".vc-finder-card, " +
        ".vc-feature-card, " +
        ".vc-process-step"
    );


    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add("vc-visible");

                    observer.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.15
        }
    );


    animatedCards.forEach(function (card) {

        observer.observe(card);

    });


    /* =====================================================
       SMOOTH SCROLL
    ====================================================== */

    document.querySelectorAll(
        '.vc-landing a[href^="#"]'
    ).forEach(function (link) {

        link.addEventListener("click", function (event) {

            const targetId =
                this.getAttribute("href");


            if (
                !targetId ||
                targetId === "#"
            ) {
                return;
            }


            const target =
                document.querySelector(targetId);


            if (target) {

                event.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });

            }

        });

    });

});

/* =========================================================
   STUDY ABROAD COUNTRY SWITCHER
   ========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    const studyMenu = document.querySelector(".study-abroad-menu");

    if (!studyMenu) {
        return;
    }

    const countryItems = studyMenu.querySelectorAll(
        ".study-country-item"
    );

    const countryPanels = studyMenu.querySelectorAll(
        ".study-country-panel"
    );


    function showCountry(item) {

        const panelId = item.getAttribute("data-study-panel");


        /* Remove active from countries */
        countryItems.forEach(function (country) {
            country.classList.remove("active");
        });


        /* Hide all study abroad panels */
        countryPanels.forEach(function (panel) {
            panel.classList.remove("active");
        });


        /* Activate selected country */
        item.classList.add("active");


        /* Show selected country's universities */
        const selectedPanel = studyMenu.querySelector(
            "#" + panelId
        );


        if (selectedPanel) {
            selectedPanel.classList.add("active");
        }

    }


    countryItems.forEach(function (item) {

        /* Mouse */
        item.addEventListener("mouseenter", function () {
            showCountry(this);
        });


        /* Click */
        item.addEventListener("click", function (event) {

            event.preventDefault();
            event.stopPropagation();

            showCountry(this);

        });

    });

});
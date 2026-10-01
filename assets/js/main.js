/**
* Template Name: Learner
* Template URL: https://bootstrapmade.com/learner-bootstrap-course-template/
* Updated: Jul 08 2025 with Bootstrap v5.3.7
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /*
   * Pricing Toggle
   */

  const pricingContainers = document.querySelectorAll('.pricing-toggle-container');

  pricingContainers.forEach(function(container) {
    const pricingSwitch = container.querySelector('.pricing-toggle input[type="checkbox"]');
    const monthlyText = container.querySelector('.monthly');
    const yearlyText = container.querySelector('.yearly');

    pricingSwitch.addEventListener('change', function() {
      const pricingItems = container.querySelectorAll('.pricing-item');

      if (this.checked) {
        monthlyText.classList.remove('active');
        yearlyText.classList.add('active');
        pricingItems.forEach(item => {
          item.classList.add('yearly-active');
        });
      } else {
        monthlyText.classList.add('active');
        yearlyText.classList.remove('active');
        pricingItems.forEach(item => {
          item.classList.remove('yearly-active');
        });
      }
    });
  });




})();


function initMainInteractions() {
  document.querySelectorAll('.custom-email-form').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      console.log('AJAX INTERCEPTED');

      fetch(form.getAttribute('action'), {
        method: 'POST',
        body: new FormData(form),
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(function (res) {
        console.log(res);
        alert('AJAX worked');
      })
      .catch(function () {
        alert('AJAX failed');
      });
    });
  });

  document.querySelectorAll('.mega-dropdown').forEach(function (dropdown) {
    const leftItems = dropdown.querySelectorAll('.mega-left-item');
    const panels = dropdown.querySelectorAll('.mega-panel');

    leftItems.forEach(function (item) {
      item.addEventListener('mouseenter', function () {
        const panelId = this.getAttribute('data-panel');

        leftItems.forEach(function (leftItem) {
          leftItem.classList.remove('active');
        });
        panels.forEach(function (panel) {
          panel.classList.remove('active-panel');
        });

        this.classList.add('active');

        if (panelId) {
          const activePanel = dropdown.querySelector('#' + panelId);
          if (activePanel) {
            activePanel.classList.add('active-panel');
          }
        }
      });
    });
  });

  const testimonialsDrawer = document.getElementById('vc-testimonials-drawer');
  const testimonialsExploreButton = document.querySelector('.vc-testimonials-explore-btn');
  const testimonialsCloseButtons = document.querySelectorAll('[data-vc-testimonials-close]');
  let testimonialsLastFocusedElement = null;

  if (testimonialsDrawer && testimonialsExploreButton) {
    function closeTestimonialsDrawer() {
      document.body.classList.remove('vc-testimonials-drawer-open');
      testimonialsDrawer.setAttribute('aria-hidden', 'true');
      testimonialsExploreButton.setAttribute('aria-expanded', 'false');

      if (testimonialsLastFocusedElement) {
        testimonialsLastFocusedElement.focus();
      }
    }

    testimonialsExploreButton.addEventListener('click', function () {
      testimonialsLastFocusedElement = document.activeElement;
      document.body.classList.add('vc-testimonials-drawer-open');
      testimonialsDrawer.setAttribute('aria-hidden', 'false');
      testimonialsExploreButton.setAttribute('aria-expanded', 'true');
      testimonialsDrawer.querySelector('.vc-testimonials-drawer-close').focus();
    });

    testimonialsCloseButtons.forEach(function (closeButton) {
      closeButton.addEventListener('click', closeTestimonialsDrawer);
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && document.body.classList.contains('vc-testimonials-drawer-open')) {
        closeTestimonialsDrawer();
      }
    });
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initMainInteractions);
} else {
  initMainInteractions();
}

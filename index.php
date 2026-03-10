<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equinox Gleam - Environmental Services & Consultation</title>
  <link rel="icon" href="favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root {
      --color-primary: oklch(0.55 0.15 25);
      --color-primary-light: oklch(0.75 0.10 25);
      --color-surface: oklch(0.95 0.02 25);
      --color-surface-dark: oklch(0.20 0.05 250);
      --color-hero-background: #1a1a2e;
      --color-text-dark: oklch(0.25 0.05 25);
      --color-text-light: oklch(0.98 0.01 25);
      --font-heading: 'Raleway', sans-serif;
      --font-body: 'Raleway', sans-serif;
    }

    body {
      font-family: var(--font-body);
      color: var(--color-text-dark);
      background-color: var(--color-surface);
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-heading);
      font-weight: 700;
    }

    .neomorphic-card {
      background: var(--color-surface);
      box-shadow: 8px 8px 16px oklch(0.85 0.02 25), -8px -8px 16px oklch(0.99 0.01 25);
      border-radius: 12px;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .neomorphic-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .btn-outline-primary {
      border: 1px solid var(--color-primary);
      color: var(--color-primary);
      border-radius: 12px;
      padding: 0.75rem 1.75rem;
      transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .btn-outline-primary:hover {
      background-color: var(--color-primary);
      color: var(--color-text-light);
    }

    .hexagon {
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      position: relative;
      overflow: hidden;
    }

    .hexagon-hover:hover .hexagon-image {
      transform: scale(1.1);
      filter: brightness(0.8);
    }
    .hexagon-image {
      transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
    }

    .hero-bg {
      background-color: var(--color-hero-background);
    }

    .section-spacing {
      padding-top: 5rem;
      padding-bottom: 5rem;
    }

    .bento-grid > div {
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 8px 8px 16px oklch(0.85 0.02 25), -8px -8px 16px oklch(0.99 0.01 25); /* Neomorphic effect */
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .bento-grid > div:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .footer-dark-bg {
      background-color: var(--color-hero-background); /* Using hero_background for footer specified in JSON */
      color: var(--color-text-light);
    }

    /* Accessibility: Ensure sufficient contrast */
    .hero-bg h1, .hero-bg p, .footer-dark-bg p, .footer-dark-bg a {
      color: var(--color-text-light) !important;
    }
    .neomorphic-surface {
      background: var(--color-surface);
    }
  </style>
</head>
<body class="antialiased">
  <header class="sticky top-0 z-50 bg-white shadow-md py-4 transition-all duration-300">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
      <div class="flex items-center">
        <a href="#hero" class="text-2xl font-bold text-gray-900 leading-none">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" class="inline-block mr-2" style="transform: translateY(-2px);">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM10.7071 7.29289C10.3166 6.90237 9.68342 6.90237 9.29289 7.29289L6.29289 10.2929C5.90237 10.6834 5.90237 11.3166 6.29289 11.7071L9.29289 14.7071C9.68342 15.0976 10.3166 15.0976 10.7071 14.7071C11.0976 14.3166 11.0976 13.6834 10.7071 13.2929L9.41421 12L10.7071 10.7071C11.0976 10.3166 11.0976 9.68342 10.7071 9.29289L10.7071 9.29289L10.7071 7.29289ZM13 18C13 18.5523 12.5523 19 12 19C11.4477 19 11 18.5523 11 18V8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8V18Z" fill="var(--color-primary)"></path>
          </svg>
          Equinox Gleam
        </a>
      </div>
      <div class="hidden md:flex space-x-6">
        <a href="#about" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">About</a>
        <a href="#services" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Services</a>
        <a href="#impact" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Impact</a>
        <a href="#testimonials" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">Testimonials</a>
      </div>
      <div class="hidden md:block">
        <a href="#contact" class="btn-outline-primary">Get Consultation</a>
      </div>
      <div class="md:hidden">
        <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </nav>
    <div id="mobile-menu" class="md:hidden hidden bg-white py-2 shadow-md">
      <a href="#about" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">About</a>
      <a href="#services" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Services</a>
      <a href="#impact" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Impact</a>
      <a href="#testimonials" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Testimonials</a>
      <a href="#contact" class="block mx-4 my-2 text-center btn-outline-primary">Get Consultation</a>
    </div>
  </header>
<main>
    
    <section id="hero" class="hero-bg text-center py-20 md:py-32 section-spacing">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight mb-6 text-white" style="font-weight: 700;">Sustainable Solutions for a Cleaner Future with Equinox Gleam</h1>
        <p class="text-lg sm:text-xl lg:text-2xl mb-10 text-gray-300">Expert eco-friendly cleaning, waste management, and carbon footprint reduction consultation designed to protect our planet.</p>
        <a href="#services" class="btn-outline-primary text-lg inline-block px-8 py-4 bg-white text-gray-900 hover:bg-var(--color-primary-light) hover:text-white border-none rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105">Explore Our Services</a>
      </div>
      <div class="mt-16 overflow-hidden">
        <img loading="lazy" src="images/hero-environmental-impact-overview-1280x640.jpeg" alt="Equinox Gleam environmental sustainability overview landscape" width="1280" height="640" class="w-full h-auto object-cover transform transition-transform duration-500 ease-in-out hover:scale-105">
      </div>
    </section>

    
    <section id="about" class="section-spacing neomorphic-surface">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl text-center font-bold mb-16 text-var(--color-text-dark)">Our Commitment to the Earth</h2>
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <p class="text-lg mb-6 leading-relaxed">At Equinox Gleam, we believe that corporate responsibility and environmental stewardship go hand in hand. Located in the heart of New York, we've pioneered cleaning and waste methodologies that prioritize the Earth without sacrificing efficiency.</p>
            <p class="text-lg leading-relaxed">Our holistic approach tackles environmental degradation at its source by integrating renewable practices into every layer of your operations, leading to tangible ecological and economic benefits.</p>
          </div>
          <div class="grid grid-cols-2 gap-8 justify-items-center">
            <div class="relative hexagon w-32 h-36 flex items-center justify-center neomorphic-card bg-var(--color-surface) hexagon-hover">
              <img loading="lazy" src="images/about-eco-materials-256x256.jpeg" alt="Eco-Materials" width="256" height="256" class="hexagon-image absolute inset-0 w-full h-full object-cover">
              <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-2 text-center text-white">
                <h3 class="text-xl font-semibold mt-auto mb-1">Eco-Materials</h3>
                <p class="text-sm mb-auto">100% biodegradable and non-toxic cleaning agents.</p>
              </div>
            </div>
            <div class="relative hexagon w-32 h-36 flex items-center justify-center neomorphic-card bg-var(--color-surface) hexagon-hover">
              <img loading="lazy" src="images/about-zero-waste-256x256.jpeg" alt="Zero-Waste Focus" width="256" height="256" class="hexagon-image absolute inset-0 w-full h-full object-cover">
              <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center p-2 text-center text-white">
                <h3 class="text-xl font-semibold mt-auto mb-1">Zero-Waste Focus</h3>
                <p class="text-sm mb-auto">Advanced sorting algorithms to divert up to 90% of waste from landfills.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="services" class="section-spacing">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl text-center font-bold mb-16 text-var(--color-text-dark)">Transformative Eco-Services by Equinox Gleam</h2>
        <div class="bento-grid grid grid-cols-1 md:grid-cols-4 gap-6">
          <div class="md:col-span-3 min-h-[300px] flex flex-col neomorphic-card relative overflow-hidden">
            <img loading="lazy" src="images/services-carbon-consultation-dashboard-896x512.jpeg" alt="Carbon footprint environmental dashboard analysis" width="896" height="512" class="w-full h-56 object-cover object-center transform transition-transform duration-500 ease-in-out hover:scale-105">
            <div class="p-6 flex-grow flex flex-col justify-between">
              <div>
                <h3 class="text-2xl font-semibold mb-3 text-var(--color-text-dark)">Carbon Footprint Reduction Consultation</h3>
                <p class="text-gray-700">Comprehensive audits and actionable reduction blueprints for complex organizations. We analyze energy vectors, fleet logistics, and supply chain emissions to help you achieve Net-Zero targets, moving beyond mere compliance to genuine ecological leadership.</p>
              </div>
            </div>
          </div>

          <div class="md:col-span-1 min-h-[300px] flex flex-col neomorphic-card relative overflow-hidden">
            <img loading="lazy" src="images/services-waste-management-320x256.jpeg" alt="Sustainable waste sorting facility" width="320" height="256" class="w-full h-32 object-cover object-center transform transition-transform duration-500 ease-in-out hover:scale-105">
            <div class="p-6 flex-grow flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-semibold mb-3 text-var(--color-text-dark)">Sustainable Waste Management</h3>
                <p class="text-gray-700">End-to-end circular economy implementations for commercial spaces, emphasizing reduction, reuse, and advanced recycling techniques to minimize landfill contributions.</p>
              </div>
            </div>
          </div>

          <div class="md:col-span-1 min-h-[300px] flex flex-col neomorphic-card relative overflow-hidden">
            <img loading="lazy" src="images/services-eco-cleaning-320x256.jpeg" alt="Eco friendly green cleaning supplies" width="320" height="256" class="w-full h-32 object-cover object-center transform transition-transform duration-500 ease-in-out hover:scale-105">
            <div class="p-6 flex-grow flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-semibold mb-3 text-var(--color-text-dark)">Eco-Friendly Cleaning</h3>
                <p class="text-gray-700">Deep corporate sanitation utilizing zero-emission, water-conserving methodologies and plant-based, non-toxic products to ensure a healthy environment for your team.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="impact" class="section-spacing neomorphic-surface">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-16 text-var(--color-text-dark)">The Equinox Gleam Impact Matrix</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
          <div class="neomorphic-card p-8 flex flex-col items-center">
            <img loading="lazy" src="images/impact-co2-offset-192x192.jpeg" alt="150k+ Tons of CO2 Offset" width="192" height="192" class="w-24 h-24 mb-4 object-contain">
            <p class="text-5xl font-extrabold text-var(--color-primary) mb-2">150k+</p>
            <p class="text-lg text-gray-700">Tons of CO2 Offset</p>
          </div>
          <div class="neomorphic-card p-8 flex flex-col items-center">
            <img loading="lazy" src="images/impact-landfill-diversion-192x192.jpeg" alt="98% Landfill Diversion Rate" width="192" height="192" class="w-24 h-24 mb-4 object-contain">
            <p class="text-5xl font-extrabold text-var(--color-primary) mb-2">98%</p>
            <p class="text-lg text-gray-700">Landfill Diversion Rate</p>
          </div>
          <div class="neomorphic-card p-8 flex flex-col items-center">
            <img loading="lazy" src="images/impact-water-saved-192x192.jpeg" alt="1.2M Gallons of Water Saved" width="192" height="192" class="w-24 h-24 mb-4 object-contain">
            <p class="text-5xl font-extrabold text-var(--color-primary) mb-2">1.2M</p>
            <p class="text-lg text-gray-700">Gallons of Water Saved</p>
          </div>
        </div>
      </div>
    </section>

    
    <section id="testimonials" class="section-spacing">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl text-center font-bold mb-16 text-var(--color-text-dark)">Partner Success Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="neomorphic-card p-6 flex flex-col items-center text-center">
            <img loading="lazy" src="images/testimonial-elena-128x128.jpeg" alt="Elena Rodriguez" width="128" height="128" class="w-24 h-24 rounded-full object-cover mb-4 shadow-md">
            <p class="italic text-gray-700 mb-4">"Partnering with Equinox Gleam for our carbon consultation completely reshaped our operational logistics. We hit our 2030 climate goals five years early, thanks to their insightful strategy."</p>
            <p class="font-semibold text-var(--color-primary)">Elena Rodriguez, Operations Director</p>
          </div>
          <div class="neomorphic-card p-6 flex flex-col items-center text-center">
            <img loading="lazy" src="images/testimonial-james-128x128.jpeg" alt="James Harrington" width="128" height="128" class="w-24 h-24 rounded-full object-cover mb-4 shadow-md">
            <p class="italic text-gray-700 mb-4">"Their eco-friendly cleaning services elevated the air quality in our 50-story building while eliminating toxic runoffs. Incredible attention to environmental detail and a healthier workspace."</p>
            <p class="font-semibold text-var(--color-primary)">James Harrington, Facilities Manager</p>
          </div>
          <div class="neomorphic-card p-6 flex flex-col items-center text-center">
            <img loading="lazy" src="images/testimonial-marcus-128x128.jpeg" alt="Marcus Chen" width="128" height="128" class="w-24 h-24 rounded-full object-cover mb-4 shadow-md">
            <p class="italic text-gray-700 mb-4">"The sustainable waste management program instituted by Equinox Gleam paid for itself in reduced disposal fees within the first six months. A truly outstanding return on investment and ecological impact."</p>
            <p class="font-semibold text-var(--color-primary)">Marcus Chen, Retail Chain Owner</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer id="contact" class="footer-dark-bg section-spacing">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="md:text-left text-center">
          <h2 class="text-4xl font-bold mb-4">Start Designing Your Green Future</h2>
          <p class="text-lg mb-8 text-gray-300">Reach out to Equinox Gleam to begin an environmental consultation or schedule our sustainable services today. We're ready to help you make a tangible difference.</p>
        </div>
        <div class="md:text-right text-center">
          <div class="space-y-4 mb-8">
            <p class="text-lg"><strong>Address:</strong> 2592 Atlantic Avenue, New York, NY 11207, USA</p>
            <p class="text-lg"><strong>Phone:</strong> <a href="tel:+13052659669" class="text-var(--color-primary-light) hover:underline">+1 (305) 265-9669</a></p>
            <p class="text-lg"><strong>Email:</strong> <a href="mailto:info@equinoxgleam.com" class="text-var(--color-primary-light) hover:underline">info@equinoxgleam.com</a></p>
          </div>
          <a href="mailto:info@equinoxgleam.com" class="btn-outline-primary inline-block text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-var(--color-hero-background) transition-all duration-300">Email Equinox Gleam Directly</a>
        </div>
      </div>

      <hr class="my-12 border-gray-700">

      <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
        <p class="mb-4 md:mb-0">© 2024 Equinox Gleam. Driving environmental sustainability.</p>
        <div class="flex space-x-6">
          <a href="./privacy.html" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
          <a href="./tos.html" class="hover:text-white transition-colors duration-200">Terms of Service</a>
        </div>
      </div>
    </div>

    
    <div id="cookie-consent-banner" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 flex items-center justify-between text-sm z-[9999] opacity-0 transition-opacity duration-500 ease-in-out">
      <p>This website uses cookies to ensure you get the best experience. By continuing to use our site, you accept our use of cookies.</p>
      <button id="accept-cookies" class="ml-4 px-4 py-2 bg-var(--color-primary) text-white rounded-md hover:bg-var(--color-primary-light) focus:outline-none focus:ring-2 focus:ring-var(--color-primary-light)">Accept</button>
    </div>
    <script>
      // Mobile menu toggle
      document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
      });

      // Cookie Consent Logic
      const cookieBanner = document.getElementById('cookie-consent-banner');
      const acceptButton = document.getElementById('accept-cookies');
      const cookieName = 'consent_Equinox Gleam_cookies'; // Unique cookie name prefix

      function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
      }

      function getCookie(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');
        for(let i=0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) === ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
      }

      document.addEventListener('DOMContentLoaded', () => {
        if (!getCookie(cookieName)) {
          setTimeout(() => { // Introduce a slight delay for aesthetic fade-in
            cookieBanner.classList.remove('opacity-0');
            cookieBanner.classList.add('opacity-100');
          }, 1000);
        } else {
          cookieBanner.style.display = 'none'; // Hide if cookie already set
        }

        acceptButton.addEventListener('click', () => {
          setCookie(cookieName, 'accepted', 365); // Store consent for 1 year
          cookieBanner.classList.remove('opacity-100');
          cookieBanner.classList.add('opacity-0');
          setTimeout(() => {
            cookieBanner.style.display = 'none';
          }, 500); // Allow fade-out to complete
        });
      });
    </script>
  </footer>
</body>
</html>
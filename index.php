<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawingtech</title>
    <link rel="preload" href="./assets/css/style.css" as="style" />
    <link rel="preload" href="./assets/js/navigation.js" as="script" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/navigation.js" defer></script> 

    <!--Meta Properties---->
    <meta property="og:title" content="Rawingtech - Web Development for Small Business">
    <meta property="og:description" content="We build fast, accessible, and SEO-optimized websites for small businesses.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://rawingtech.com/">
    <meta property="og:image" content="/assets/images/preview.png">
</head>
<body>
   <header class="site-header" aria-label="Main navigation">
    <div class="header-container">
        <div class="site-branding">    
            <h2>Logo</h2>
        </div>
        <nav class="navigation-container">
            <button class="menu-btn" id="nav-btn" aria-label="Menu Toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/></svg>
            </button>
            <div class="menu-container" id="menu-container">
                <ul class="nav-link-list">
                    <li>
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
   </header>

   <main class="page-wrapper">
        <section id="hero" class="hero-section">
            <div class="hero-container">
                <div class="hero-caption">
                    <h1>Websites made simple for your small business.</h1>
                    <p>I help local service, photographer, cafés, and small brands get online with fast, clean websites that just work</p>
                    <div class="btn-group">
                        <button class="btn btn-hero">
                            Work with Me
                        </button>
                        <button class="btn btn-outline">
                            See Portfolio
                        </button>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="./assets/img/laptop-mockup.png" height="400px" width="auto" alt="Website Example">
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1755971211">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section id="service">
            <h2>So, what do I do?</h2>
            <div class="service-col">
                <h3>Website Development</h3>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="service-col">
                <h3>Website Maintenance</h3>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
            <div class="service-col">
                <h3>On site SEO Optimization</h3>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
        </section>

        <section id="testimonial">
            <h2>Testimonial</h2>
            <article>
                <blockquote>I am happy and grateful to have worked with you to create my website. Your efficiency and speed have been incredible, and I will definitely hire your services again! 100% recommended</blockquote>
                <p>— Fiverr Client, Netherlands</p>
            </article>
        </section>

        <section id="faq">
            <h2>Frequently asked questions</h2>
            <details>
                <summary>What does you do</summary>
                <p>We do stuff you dont</p>
            </details>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
        </section>
    </main>

   <footer class="site-footer" aria-label="Site Footer">
        <div class="site-info">
            Copyright 2025 - Rawingtech
        </div>
   </footer>
</body>
</html>
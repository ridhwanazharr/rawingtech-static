<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawingtech</title>
    <link rel="preload" href="./assets/css/style.css" as="style" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--Meta Properties---->
    <meta property="og:title" content="Rawingtech - Web Development for Small Business">
    <meta property="og:description" content="We build fast, accessible, and SEO-optimized websites for small businesses.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://rawingtech.com/">
    <meta property="og:image" content="/assets/images/preview.png">
</head>
<body>
   <?php get_header() ?>

   <main class="page-wrapper">
        <section id="hero" class="hero-section">
            <div class="hero-container">
                <div class="hero-caption">
                    <h1>Websites made simple for your small business.</h1>
                    <p>I help local service, photographer, cafés, and small brands get online with fast, clean websites that just work</p>
                    <div class="btn-group">
                        <button aria-label="Contact" class="btn btn-hero">
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

        <section id="service" class="service-section">
            <div class="container">
                <h2 class="fs-h1 text-center">So, what do I do?</h2>
                <p class="text-center">
                    I help small businesses and individuals build websites that actually work for them. No fluff, no agency overhead. Just clean, functional, and optimized websites.
                </p>
                <div class="service-row">
                    <div class="service-col">
                        <h3 class="heading">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M62.43,122.88h-1.98c0-16.15-6.04-30.27-18.11-42.34C30.27,68.47,16.16,62.43,0,62.43v-1.98 c16.16,0,30.27-6.04,42.34-18.14C54.41,30.21,60.45,16.1,60.45,0h1.98c0,16.15,6.04,30.27,18.11,42.34 c12.07,12.07,26.18,18.11,42.34,18.11v1.98c-16.15,0-30.27,6.04-42.34,18.11C68.47,92.61,62.43,106.72,62.43,122.88L62.43,122.88z"/></g></svg>
                            <span>Website Development</span>
                        </h3>
                        <p>
                            From a simple landing page to a full business site, I'll design and build something that's fast, responsive, and easy to manage.
                        </p>
                    </div>
                    <div class="service-col">
                        <h3 class="heading">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M62.43,122.88h-1.98c0-16.15-6.04-30.27-18.11-42.34C30.27,68.47,16.16,62.43,0,62.43v-1.98 c16.16,0,30.27-6.04,42.34-18.14C54.41,30.21,60.45,16.1,60.45,0h1.98c0,16.15,6.04,30.27,18.11,42.34 c12.07,12.07,26.18,18.11,42.34,18.11v1.98c-16.15,0-30.27,6.04-42.34,18.11C68.47,92.61,62.43,106.72,62.43,122.88L62.43,122.88z"/></g></svg>
                            <span>Website Maintenance</span>
                        </h3>
                        <p>
                            Forget the stress of updates, bugs, or downtime. I'll keep your site running smoothly so you can focus on your business.
                        </p>
                    </div>
                    <div class="service-col">
                        <h3 class="heading">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M62.43,122.88h-1.98c0-16.15-6.04-30.27-18.11-42.34C30.27,68.47,16.16,62.43,0,62.43v-1.98 c16.16,0,30.27-6.04,42.34-18.14C54.41,30.21,60.45,16.1,60.45,0h1.98c0,16.15,6.04,30.27,18.11,42.34 c12.07,12.07,26.18,18.11,42.34,18.11v1.98c-16.15,0-30.27,6.04-42.34,18.11C68.47,92.61,62.43,106.72,62.43,122.88L62.43,122.88z"/></g></svg>
                            <span>On-site SEO Optimization</span>
                        </h3>
                        <p>
                            What's the point of a website if no one finds it? I'll optimize your content and structure so search engines (and customers) can't ignore you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1755987311">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
                </svg>
            </div>
        </section>

        <section id="testimonial" class="testimonials">
            <div class="container">
                <h2 class="title fs-h1">
                    <span>Testimonial</span>
                </h2>
                <div class="card-container">
                    <article class="testimonial-card">
                        <svg width="72px" height="72px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>quote_left_fill</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Editor" transform="translate(-624.000000, -144.000000)" fill-rule="nonzero"> <g id="quote_left_fill" transform="translate(624.000000, 144.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M8.40001,6.20006 C8.84184,5.86869 9.46864,5.95823 9.80001,6.40005 C10.1314,6.84188 10.0418,7.46868 9.60002,7.80006 C8.03605,8.97305 7.13907,10.1135 6.62712,11.1097 C6.90615,11.0381 7.19863,11.0000002 7.5,11.0000002 C9.433,11.0000002 11,12.567 11,14.5000002 C11,16.433 9.433,18.0000002 7.5,18.0000002 C5.58635,18.0000002 4.0314,16.4642 4.00047,14.5579 C3.91027,13.6929 3.92344,12.4169 4.50804,10.9437 C5.10548,9.43818 6.27242,7.79577 8.40001,6.20006 Z M17.4,6.20006 C17.8418,5.86869 18.4686,5.95823 18.8,6.40005 C19.1314,6.84188 19.0418,7.46868 18.6,7.80006 C17.036,8.97305 16.1391,10.1135 15.6271,11.1097 C15.9061,11.0381 16.1986,11.0000002 16.5,11.0000002 C18.433,11.0000002 20,12.567 20,14.5000002 C20,16.433 18.433,18.0000002 16.5,18.0000002 C14.5863,18.0000002 13.0314,16.4642 13.0005,14.5579 C12.9103,13.6929 12.9234,12.4169 13.508,10.9437 C14.1055,9.43818 15.2724,7.79577 17.4,6.20006 Z" id="形状结合" fill="#171717"> </path> </g> </g> </g> </g></svg>
                        <blockquote>I am happy and grateful to have worked with you to create my website. Your efficiency and speed have been incredible, and I will definitely hire your services again! 100% recommended</blockquote>
                        <p><i>— Fiverr Client, Netherlands</i></p>
                    </article>
                </div>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <h2>Frequently asked questions</h2>

                <div class="accordion">
                    <div class="acc-item show" aria-label="Question 1">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-1">
                            What kind of websites do you build?
                        </button>
                        <div id="answer-1" class="acc-content">
                            <p>
                                I specialize in clean, fast, and functional websites for small businesses, like restaurants, catering services, local contractors, photographers, and more. From a static website (like a professional landing page or portfolio) to a simple CRM/CMS system (so you can update menus, services, or photos yourself), I keep things straightforward and effective.
                            </p>
                        </div>
                    </div>
                    <div class="acc-item" aria-label="Question 2">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-2">
                            Do I need a subscription, or can I just pay once?
                        </button>
                        <div id="answer-2" class="acc-content">
                            <p>
                                You choose what fits you best :<br>
                                <ul>
                                    <li>
                                        One-time purchase : pay once and the site is yours, no strings attached.
                                    </li>
                                    <li>
                                        Subscription : perfect if you want ongoing support, updates, or hosting bundled in.
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="acc-item" aria-label="Question 3">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-3">
                            How much does a website cost?
                        </button>
                        <div id="answer-3" class="acc-content">
                            <p>
                                I keep pricing transparent and affordable. A one-time purchase starts at a small investment (often less than what you'd spend on ads in a week) and subscriptions are budget-friendly. The final price depends on features (static page vs. CMS, extra integrations, etc.), but I'll always give you a clear quote before we start.
                            </p>
                        </div>
                    </div>
                    <div class="acc-item" aria-label="Question 4">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-4">
                            How long will it take to get my website live?
                        </button>
                        <div id="answer-4" class="acc-content">
                            <p>
                                For a basic static site, usually 3-7 days.<br>
                                For a CMS/CRM project, typically 1-3 weeks depending on the features you need. I'll give you a clear timeline upfront so you can plan.
                            </p>
                        </div>
                    </div>
                    <div class="acc-item" aria-label="Question 5">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-5">
                            Will my website show up on Google?
                        </button>
                        <div id="answer-5" class="acc-content">
                            <p>
                                Yes! Every site comes with onsite SEO optimization (good page structure, mobile-friendly design, proper meta tags, etc.). This gives you a strong foundation to appear in Google search results. If you want deeper SEO strategy (like content, backlinks, and ongoing optimization), that's something we can add later too.
                            </p>
                        </div>
                    </div>
                    <div class="acc-item" aria-label="Question 6">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-6">
                            Do I need to know tech to update my site?
                        </button>
                        <div id="answer-6" class="acc-content">
                            <p>
                                Not at all. If you choose a CMS/CRM option, I'll make sure it's simple enough for non-tech users (like updating a menu, gallery, or service list in just a few clicks). For static sites, you can always reach out for updates, or I can offer a subscription that covers content changes.
                            </p>
                        </div>
                    </div>
                    <div class="acc-item" aria-label="Question 7">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-7">
                            What if I need help after the site is finished?
                        </button>
                        <div id="answer-7" class="acc-content">
                            <p>
                                I've got you. You can either :<br>
                                <ul>
                                    <li>
                                        Reach out for one-time fixes or updates, or
                                    </li>
                                    <li>
                                        Choose a subscription plan that covers maintenance, updates, backups, and peace of mind.
                                    </li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="acc-item" aria-label="Question 8">
                        <button class="acc-head" aria-expanded="true" aria-controls="answer-8">
                            Why not just use a DIY website builder?
                        </button>
                        <div id="answer-8" class="acc-content">
                            <p>
                                Great question! Builders like Wix or Squarespace seem cheap at first, but :<br>
                                ~ They often have ongoing hidden costs.<br>
                                ~ They're limited in design & performance.<br>
                                ~ SEO is usually weaker.<br>
                                With me, you get a custom website built around your business needs, fast, optimized, and owned by you.
                            </p>
                        </div>
                    </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h2>Get Started</h2>
                <p aria-label="Form info" class="form-info">please fill the required forms below and i'll reply to you as soon as possible</p>
                <div class="contact-form" role="Contact Form">
                    <form action="">
                        <label for="name">Hi, my name is </label>
                        <input id="name" type="text" placeholder="Your name">.<br>

                        <label for="email">You can reach me at </label>
                        <input id="email" type="email" placeholder="Your email"><br>

                        <label for="number">or by phone at </label>
                        <input id="number" type="tel" placeholder="Phone number">.<br>

                        <label for="service">I'm interested in </label>
                        <select id="service" name="service">
                            <option value="" disabled selected>Choose a service</option>
                        </select><br>

                        <label for="business-type"> for my </label>
                        <input type="text" id="business-type" placeholder="Your business">.<br>

                        <label for="details">Here are some details: </label><br>
                        <textarea id="details" placeholder="Tell me more..." maxlength="1200"></textarea><br>

                        That's all, thank you!<br>
                        <button type="submit" class="btn btn-hero">Get a Quote</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

   <footer class="site-footer" aria-label="Site Footer">
        <div class="site-info">
            &copy; <?= date("Y") ?> - Rawingtech
        </div>
   </footer>

   <script src="./assets/js/jquery-3.7.1.min.js" defer></script> 
   <script src="./assets/js/navigation.js" defer></script>
   <script src="./assets/js/script.js" defer></script>  
</body>
</html>
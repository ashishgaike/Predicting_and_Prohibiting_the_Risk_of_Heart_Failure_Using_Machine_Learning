
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeSure - Surity at Finger Tips</title>

    <link rel="shortcut icon" href="D:\BE_MajorProject\images\TitleLogo.png"
      type="image/svg+xml">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet">

  </head>

  <body id="top">
    <header class="header" data-header>
      <div class="container">

        <a href="#" class="logo">
          BeSure<span class="span">.</span>
        </a>

        <nav class="navbar" data-navbar>

          <button class="nav-toggle-btn" aria-label="close menu"
            data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li class="navbar-item">
              <a href="#about" class="navbar-link" data-nav-link>About Us</a>
            </li>

            <li class="navbar-item">
              <a href="#course" class="navbar-link" data-nav-link>All Course</a>
            </li>

            <li class="navbar-item">
              <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
            </li>

            <li class="navbar-item">
              <a href="#" class="navbar-link" data-nav-link>Contact</a>
            </li>

          </ul>

        </nav>

        <a href="../signin_up/login.php" class="btn btn-primary">Sign Up / In </a>

        <button class="nav-toggle-btn" aria-label="open manu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>

      </div>
    </header>

    <main>
      <article>
        <section class="section hero" aria-label="hero" id="home" data-section
          style="background-image: url(images/HeroBanner.png)">

          <div class="container">

            <p class="hero-subtitle">Prediction, Fitness & Nutrition</p>

            <h1 class="h1 hero-title">Do your part, care for your heart.</h1>

            <p class="hero-text">
              Prevention is better than cure and it all depends <br> on us which one
              we want to choose.
            </p>

            <a href="#course" class="btn btn-secondary">Start Course</a>
            <a href="http://127.0.0.1:5000/" class="btn btn-secondary">Predict
              Risk of Heart Failure</a>

            <div class="social-wrapper">

              <p class="social-title">Connect with us:</p>

              <ul class="social-list">

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-skype"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="#" class="social-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>

              </ul>

            </div>

          </div>
        </section>





        <!-- 
                    - #SERVICE
                  -->

        <section class="section service" aria-label="service" data-section>
          <div class="container">

            <ul class="grid-list">

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <img src="images\WomenCourse.svg" width="60" height="60"
                      loading="lazy" alt="Women’s Course">
                  </div>

                  <h3 class="h3">
                    <a href="../signin_up/login.php" class="card-title">Women’s Course</a>
                  </h3>

                  <p class="card-text">
                    In this online course, you will learn about exercises and
                    their modifications for flexibility, strength, core,
                    balance, plyometrics and cardiorespiratory training. In
                    addition, you will learn everything you need to know about
                    fitness assessments, psychological considerations, nutrition
                    and how to improve your business by working with women.
                  </p>

                  <a href="../signin_up/login.php" class="btn btn-secondary">
                    <ion-icon name="arrow-forward"></ion-icon>
                  </a>

                </div>
              </li>

              <li>
                <div class="service-card active">

                  <div class="card-icon">
                    <img src="images\BasicCourse.svg" width="60" height="60"
                      loading="lazy" alt="Basic Course">
                  </div>

                  <h3 class="h3">
                    <a href="../signin_up/login.php" class="card-title">Basic Course</a>
                  </h3>

                  <p class="card-text">
                    You Can Improve Fitness, Muscle Building, Fat Loss and
                    Weight Loss by Doing a Simple and Short Home Workout Daily.
                    You do not have to spend hours a day working out just to
                    maintain proper fitness. It’s possible to do a home workout
                    on a daily basis in 10 minutes or less and still improve
                    your fitness, even if you are a lazy person.
                  </p>

                  <a href="../signin_up/login.php" class="btn btn-secondary">
                    <ion-icon name="arrow-forward"></ion-icon>
                  </a>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <img src="images\MenCourse.svg" width="60" height="60"
                      loading="lazy" alt="Men’s Course">
                  </div>

                  <h3 class="h3">
                    <a href="../signin_up/login.php" class="card-title">Men’s Course</a>
                  </h3>

                  <p class="card-text">
                    We believe that motion and momentum will improve your
                    fitness journey. This program comprises of more than
                    teaching few exercises and workout tips, we also cover the
                    science behind building muscle and successful dieting. The
                    perfect beginner workout plan that keeps you motivated.
                  </p>

                  <a href="../signin_up/login.php" class="btn btn-secondary">
                    <ion-icon name="arrow-forward"></ion-icon>
                  </a>

                </div>
              </li>

            </ul>

          </div>
        </section>





        <!-- 
                    - #ABOUT
                  -->

        <section class="section about" aria-label="about" id="about"
          data-section>
          <div class="container">

            <div class="about-banner img-holder" style="--width: 470; --height:
              580;">
              <img src="images\instructor.jpg" width="470" height="580"
                loading="lazy" alt="about banner"
                class="img-cover">

              <a href="#" class="btn btn-secondary">Meet Instructor</a>
            </div>

            <div class="about-content">

              <p class="section-subtitle">25+ Years Of Experience</p>

              <h2 class="h2 section-title">We have expert instructor to guide
                you throughout.</h2>

              <p class="section-text">
                We have Doctors, instructors, nutritionaist, dieticians who
                bring best of their expertise under a single platform to offer
                you a smooth and supervised experience while you move towards
                the journey of "Healthy Heart, Healthy You", both physically as
                well as mentally.
              </p>

              <h3 class="about-h3">100+ Courses</h3>

              <p class="section-text">
                We offer 100+ courses starting from 99/- , guided by top
                instructors and experts of respective fields. The course covers
                every aspect to keep your heart healthy along with keeping you
                physically as well as mentally fit,It also covers dietitiary
                requirement.
                Stay Healthy, Stay Happy.
              </p>

            </div>

          </div>
        </section>





        <!-- 
                    - #COURSE
                  -->

        <section class="section course" aria-label="course" id="course"
          data-section>
          <div class="container">

            <div class="title-wrapper">
              <p class="section-subtitle">100+ Courses Available</p>

              <h2 class="h2 section-title">Fitness & Nutrition Courses</h2>
            </div>

            <ul class="grid-list">

              <li>
                <div class="course-card">

                  <figure class="card-banner img-holder" style="--width: 350;
                    --height: 300;">
                    <img src="images\courses-1.jpg" width="350" height="300"
                      loading="lazy"
                      alt="Children Nutrition and Cooking" class="img-cover">
                  </figure>

                  <div class="card-content">

                    <data class="card-price" value="99">99/-</data>

                    <p class="card-author">
                      <a href="../signin_up/login.php" class="card-link">
                        By: <span class="span">Michael Jordan</span>
                      </a>
                    </p>

                    <h3 class="h3">
                      <a href="../signin_up/login.php" class="card-title">Children Nutrition and
                        Cooking</a>
                    </h3>

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <time datetime="PT8H20M">08 hr 20 mins</time>
                      </li>

                      <li class="card-meta-item">
                        <p class="card-meta-text">28 Lectures</p>
                      </li>

                    </ul>

                  </div>

                </div>
              </li>

              <li>
                <div class="course-card">

                  <figure class="card-banner img-holder" style="--width: 350;
                    --height: 300;">
                    <img src="images\courses-2.jpg" width="350" height="300"
                      loading="lazy"
                      alt="Introduction to Food and Health." class="img-cover">
                  </figure>

                  <div class="card-content">

                    <data class="card-price" value="149">149/-</data>

                    <p class="card-author">
                      <a href="../signin_up/login.php" class="card-link">
                        By: <span class="span">Rachel Hosie</span>
                      </a>
                    </p>

                    <h3 class="h3">
                      <a href="../signin_up/login.php" class="card-title">Introduction to Food and
                        Health.</a>
                    </h3>

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <time datetime="PT9H25M">09 hr 25 mins</time>
                      </li>

                      <li class="card-meta-item">
                        <p class="card-meta-text">16 Lectures</p>
                      </li>

                    </ul>

                  </div>

                </div>
              </li>

              <li>
                <div class="course-card">

                  <figure class="card-banner img-holder" style="--width: 350;
                    --height: 300;">
                    <img src="images\courses-3.jpg" width="350" height="300"
                      loading="lazy"
                      alt="Nutrition and Lifestyle in Pregnancy"
                      class="img-cover">
                  </figure>

                  <div class="card-content">

                    <data class="card-price" value="199">199/-</data>

                    <p class="card-author">
                      <a href="../signin_up/login.php" class="card-link">
                        By: <span class="span">Chloe Ting</span>
                      </a>
                    </p>

                    <h3 class="h3">
                      <a href="../signin_up/login.php" class="card-title">Nutrition and Lifestyle in
                        Pregnancy</a>
                    </h3>

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <time datetime="PT3H38M">03 hr 38 mins</time>
                      </li>

                      <li class="card-meta-item">
                        <p class="card-meta-text">18 Lectures</p>
                      </li>

                    </ul>

                  </div>

                </div>
              </li>

              <li>
                <div class="course-card">

                  <figure class="card-banner img-holder" style="--width: 350;
                    --height: 300;">
                    <img src="images\courses-4.jpg" width="350" height="300"
                      loading="lazy"
                      alt="Expertise on Fitness, Nutrition and Health"
                      class="img-cover">
                  </figure>

                  <div class="card-content">

                    <data class="card-price" value="139">139/-</data>

                    <p class="card-author">
                      <a href="../signin_up/login.php" class="card-link">
                        By: <span class="span">Natalia Smith</span>
                      </a>
                    </p>

                    <h3 class="h3">
                      <a href="../signin_up/login.php" class="card-title">Expertise on Fitness,
                        Nutrition and Health</a>
                    </h3>

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <time datetime="PT2H16M">02 hr 16 mins</time>
                      </li>

                      <li class="card-meta-item">
                        <p class="card-meta-text">14 Lectures</p>
                      </li>

                    </ul>

                  </div>

                </div>
              </li>

              <li>
                <div class="course-card">

                  <figure class="card-banner img-holder" style="--width: 350;
                    --height: 300;">
                    <img src="images\courses-5.jpg" width="350" height="300"
                      loading="lazy"
                      alt="Hacking exercise for health new science of fitness"
                      class="img-cover">
                  </figure>

                  <div class="card-content">

                    <data class="card-price" value="199">199/-</data>

                    <p class="card-author">
                      <a href="../signin_up/login.php" class="card-link">
                        By: <span class="span">Josh Will</span>
                      </a>
                    </p>

                    <h3 class="h3">
                      <a href="../signin_up/login.php" class="card-title">Hacking exercise for health
                        new science of fitness</a>
                    </h3>

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <time datetime="PT6H12M">06 hr 12 mins</time>
                      </li>

                      <li class="card-meta-item">
                        <p class="card-meta-text">35 Lectures</p>
                      </li>

                    </ul>

                  </div>

                </div>
              </li>

              <li>
                <div class="course-card">

                  <figure class="card-banner img-holder" style="--width: 350;
                    --height: 300;">
                    <img src="images\courses-6.jpg" width="350" height="300"
                      loading="lazy"
                      alt="Designing Your Personal Weight Loss Plan"
                      class="img-cover">
                  </figure>

                  <div class="card-content">

                    <data class="card-price" value="129">129/-</data>

                    <p class="card-author">
                      <a href="../signin_up/login.php" class="card-link">
                        By: <span class="span">Dipasha Choudhary</span>
                      </a>
                    </p>

                    <h3 class="h3">
                      <a href="../signin_up/login.php" class="card-title">Designing Your Personal
                        Weight Loss Plan</a>
                    </h3>

                    <ul class="card-meta-list">

                      <li class="card-meta-item">
                        <time datetime="PT9H34M">09 hr 34 mins</time>
                      </li>

                      <li class="card-meta-item">
                        <p class="card-meta-text">28 Lectures</p>
                      </li>

                    </ul>

                  </div>

                </div>
              </li>

            </ul>

          </div>
        </section>





        <!-- 
                    - #BLOG
                  -->

        <section class="section blog" aria-label="blog" id="blog" data-section>
          <div class="container">

            <div class="title-wrapper">
              <p class="section-subtitle">Our Blog Post</p>

              <h2 class="h2 section-title">Latest Article of Nutrition</h2>
            </div>

            <ul class="grid-list">

              <li>
                <div class="blog-card">

                  <div class="wrapper">

                    <time class="publish-date" datetime="2022-02-24">
                      <span class="span">24</span> Feb
                    </time>

                    <div>

                      <div class="card-author">
                        <a href="#" class="card-link">
                          By: <span class="span">Holly DeLong</span>
                        </a>
                      </div>

                      <ul class="card-meta-list">
                        <li class="card-meta-item">
                          <p class="item-text">87 Likes</p>
                        </li>

                        <li class="card-meta-item">
                          <p class="item-text">58 Share</p>
                        </li>
                      </ul>

                    </div>

                  </div>

                  <h3 class="h3">
                    <a
                      href="https://www.onpoint-nutrition.com/blog/body-shape-is-key-indicator-for-heart-health"
                      class="card-title">Forget weight, body shape is key
                      indicator for heart health</a>
                  </h3>

                  <p class="card-text">
                    Are you an apple or a pear? I’m not talking about your
                    spirit fruit; this question refers to body type.
                  </p>

                </div>
              </li>

              <li>
                <div class="blog-card">

                  <div class="wrapper">

                    <time class="publish-date" datetime="2022-02-24">
                      <span class="span">24</span> Feb
                    </time>

                    <div>

                      <div class="card-author">
                        <a href="#" class="card-link">
                          By: <span class="span">Holly DeLong</span>
                        </a>
                      </div>

                      <ul class="card-meta-list">
                        <li class="card-meta-item">
                          <p class="item-text">87 Likes</p>
                        </li>

                        <li class="card-meta-item">
                          <p class="item-text">58 Share</p>
                        </li>
                      </ul>

                    </div>

                  </div>

                  <h3 class="h3">
                    <a
                      href="https://www.onpoint-nutrition.com/blog/vitamin-d-and-heart-health"
                      class="card-title">Is Winter Breaking Your Heart?</a>
                  </h3>

                  <p class="card-text">
                    Those who live in colder climates know that weathering a
                    long, dreary winter can sometimes feel as tough as surviving
                    a broken heart.
                  </p>

                </div>
              </li>

              <li>
                <div class="blog-card">

                  <div class="wrapper">

                    <time class="publish-date" datetime="2022-02-24">
                      <span class="span">24</span> Feb
                    </time>

                    <div>

                      <div class="card-author">
                        <a href="#" class="card-link">
                          By: <span class="span">Holly DeLong</span>
                        </a>
                      </div>

                      <ul class="card-meta-list">
                        <li class="card-meta-item">
                          <p class="item-text">87 Likes</p>
                        </li>

                        <li class="card-meta-item">
                          <p class="item-text">58 Share</p>
                        </li>
                      </ul>

                    </div>

                  </div>

                  <h3 class="h3">
                    <a
                      href="https://www.onpoint-nutrition.com/blog/heart-healthy-foods"
                      class="card-title">Hearty, heart healthy foods</a>
                  </h3>

                  <p class="card-text">
                    Control Portions Although humans don’t actually hibernate in
                    the winter, it is common to eat more and move less.
                  </p>

                </div>
              </li>

            </ul>

          </div>
        </section>





        <!-- 
                    - #APP
                  -->

        <section class="section app" aria-label="app" data-section>
          <div class="container">

            <div class="app-card">

              <p class="section-subtitle">Mobile App Available</p>

              <h2 class="h2 section-title">
                Download our mobile app.<br>
                and start coaching anytime.
              </h2>

              <div class="wrapper">
                <a href="#" class="app-link" aria-label="play store">
                  <img src="images\play-store.jpg" width="134" height="38"
                    loading="lazy" alt="Play Store"
                    class="img">
                </a>

                <a href="#" class="app-link" aria-label="app store">
                  <img src="images\app-store.jpg" width="132" height="38"
                    loading="lazy" alt="App Store"
                    class="img">
                </a>
              </div>

            </div>

          </div>
        </section>

      </article>
    </main>





    <!-- 
                - #FOOTER
              -->

    <footer class="footer">

      <div class="footer-top section" data-section>
        <div class="container">

          <div class="footer-list">

            <p class="footer-list-title">Subscribe Newsletter</p>

            <p class="footer-list-text">
              Get updates and interesting offers from BeSure, STAY CONNECTED
            </p>

            <form action="" class="footer-form">
              <input type="email" name="email_address" aria-label="email"
                placeholder="Enter email" required
                class="email-field">

              <button type="submit" class="btn btn-secondary">Subscribe Now</button>
            </form>

          </div>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">All Courses</p>
            </li>

            <li>
              <a href="#" class="footer-link">Daily Exercise</a>
            </li>

            <li>
              <a href="#" class="footer-link">Find Your Balance</a>
            </li>

            <li>
              <a href="#" class="footer-link">Personal Program</a>
            </li>

            <li>
              <a href="#" class="footer-link">Natural Process</a>
            </li>

            <li>
              <a href="#" class="footer-link">Immune System</a>
            </li>

            <li>
              <a href="#" class="footer-link">Gives You Energy</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Help Links</p>
            </li>

            <li>
              <a href="#" class="footer-link">Privacy Policy</a>
            </li>

            <li>
              <a href="#" class="footer-link">Discussion</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

            <li>
              <a href="#" class="footer-link">Customer Support</a>
            </li>

            <li>
              <a href="#" class="footer-link">Course FAQ’s</a>
            </li>

            <li>
              <a href="#" class="footer-link">Online Classes</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Opening Hours</p>
            </li>

            <li>
              <a href="#" class="footer-link">Mon-Fri: 9 AM – 6 PM</a>
            </li>

            <li>
              <a href="#" class="footer-link">Saturday: 9 AM – 4 PM</a>
            </li>

            <li>
              <a href="#" class="footer-link">Sunday: Closed</a>
            </li>



          </ul>

        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">

          <p class="copyright">
            &copy; 2022 BeSure made with
            <ion-icon name="heart" aria-hidden="true"></ion-icon>

          </p>

          <ul class="footer-bottom-list">

            <li class="footer-bottom-item">
              <a href="#" class="footer-bottom-link">Terms of Service</a>
            </li>

            <li class="footer-bottom-item">
              <a href="#" class="footer-bottom-link">Privacy Policy</a>
            </li>

            <li class="footer-bottom-item">
              <a href="#" class="footer-bottom-link">Security</a>
            </li>

          </ul>

        </div>
      </div>

    </footer>





    <!-- 
                - #BACK TO TOP
              -->

    <a href="#top" class="back-top-btn" aria-label="back to top"
      data-back-top-btn>
      <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>





    <!-- 
                - custom js link
              -->
    <script src="script.js" defer></script>

    <!-- 
                - ionicon link
              -->
    <script type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
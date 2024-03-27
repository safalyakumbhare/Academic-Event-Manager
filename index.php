<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academic Event Manager</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css" />
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Fontawesome Link for Icons -->
  <link rel="stylesheet" href="index.css">

</head>

<body>
  <div id="main">
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">Academic Event Management</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z" />
          </svg>
        </label>

      </nav>
    </header>

    <section class="homepage" id="home">
      <div class="content">
        <div class="text">
          <h1>Academic Event Management </h1>

        </div>
        <a href="loginpage.php">Get Started</a>
      </div>
    </section>

    <section class="services" id="services">
      <h2>Project Developers</h2>

      <ul class="cards">
        <li class="card">
          <img src="image/bhu.jpg" alt="img">
          <h3>Bhuvan Gajghat</h3>

        </li>
        <li class="card">
          <img src="image/pravin.png" alt="img">
          <h3>Pravin Paradkar</h3>

        </li>
        <li class="card">
          <img src="image/safa.png" alt="img">
          <h3>Safalya Kumbhare</h3>

        </li>
        <li class="card">
          <img src="image/dha.png" alt="img">
          <h3>Dhananjay Kawale</h3>

        </li>

      </ul>
    </section>

    <section class="portfolio" id="portfolio">
      <h2>Events in Acadmic</h2>

      <ul class="cards">
        <li class="card">
          <img src="image/clgeevent1.avif" alt="img">
          <h3>Antaragni Events</h3>

        </li>
        <li class="card">
          <img src="image/antargni-11.avif" alt="img">
          <h3>Flash Mop</h3>

        </li>
        <li class="card">
          <img src="image/antargni-12.avif" alt="img">
          <h3>Stall</h3>

        </li>
        <li class="card">
          <img src="image/antargni-13.avif" alt="img">
          <h3>Indoor Sports</h3>

        </li>
        <li class="card">
          <img src="image/antargni-4.avif" alt="img">
          <h3>Award Show</h3>

        </li>
        <li class="card">
          <img src="image/antargni-8.avif" alt="img">
          <h3>Cultural Event</h3>

        </li>
      </ul>
    </section>

    <section class="about" id="about">
      <h2>About Us</h2>
      <p>Discover our story in providing camping services.</p>
      <div class="row company-info">
        <h3>Our Story</h3>
        <p> academic events are more than just gatherings; they're milestones in our journey of knowledge and growth.
          From
          engaging lectures to dynamic seminars, our events foster intellectual curiosity and collaboration among
          students, faculty, and experts alike. We take pride in curating enriching experiences that inspire learning
          beyond the classroom, shaping the academic landscape of tomorrow with innovation and excellence.</p>
      </div>
      <div class="row mission-vision">
        <h3>Our Mission</h3>
        <p>our mission is to champion academic excellence through a diverse array of events that enrich learning and
          foster collaboration. These events serve as catalysts for intellectual exploration, igniting passions and
          nurturing talents. We're dedicated to cultivating a dynamic educational environment where every participant is
          empowered to thrive and contribute positively to society</p>
        <h3>Our Vision</h3>
        <p>In envisioning our academic landscape, we strive to create a tapestry of vibrant events at [College Name].
          These events serve as pillars of our vision, enriching learning experiences and fostering a culture of
          innovation and inclusivity. Our aim is to inspire, challenge, and empower individuals to embrace lifelong
          learning and make meaningful contributions to their communities and beyond</p>
      </div>
      <div class="row team">
        <h3>Our Team</h3>
        <ul>
          <li>Bhuvan Gajghat - Frontend Developer</li>
          <li>Pravin Paradkar - Logical Developer</li>
          <li>Safalya Kumbhare - Backend Developer</li>
          <li>Dhananjay Kawale</li>
        </ul>
      </div>
    </section>

    <section class="contact" id="contact">
      <h2>Contact Us</h2>
      <p>Reach out to us for any inquiries or feedback.</p>
      <div class="row">
        <div class="col information">
          <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> 123 Campsite Avenue, Wilderness, CA 98765</p>
            <p><i class="fas fa-envelope"></i> info@campinggearexperts.com</p>
            <p><i class="fas fa-phone"></i> (123) 456-7890</p>
            <p><i class="fas fa-clock"></i> Monday - Friday: 9:00 AM - 5:00 PM</p>
            <p><i class="fas fa-clock"></i> Saturday: 10:00 AM - 3:00 PM</p>
            <p><i class="fas fa-clock"></i> Sunday: Closed</p>
            <p><i class="fas fa-globe"></i> www.codingenpalweb.com</p>
          </div>
        </div>
        <div class="col form">
          <form>
            <input type="text" placeholder="Name*" required>
            <input type="email" placeholder="Email*" required>
            <textarea placeholder="Message*" required></textarea>
            <button id="submit" type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </section>

    <footer>

      <div>
        <span>Copyright © 2023 All Rights Reserved</span>
        <!-- <span class="link">
          <a href="#home">Home</a>
          <a href="#contact">Contact</a>
        </span> -->
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
    integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    const scroll = new LocomotiveScroll({
      el: document.querySelector("#main"),
      smooth: true,
    });

  </script>.

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academic Event Manager</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css" />
  <link rel="stylesheet" href="index.css">

</head>

<body>
  <div id="main">
    <header>
      <nav class="navbar">
        <h1 class="logo"><a href="#">Academic Event Manager</a></h1>
        </label>

      </nav>
    </header>

    <section class="homepage" id="home">
      <video autoplay loop muted src="event.mp4"></video>
      <a href="loginpage.php">
        <div class="buttons">
          <button class="btn"><span></span>
            <p data-start="good luck!" data-text="Now!" data-title="Get Started"></p>
          </button>
        </div>
      </a>
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
      <h2>Events in Academic</h2>

      <ul class="cards">
        <li class="card">
          <img src="image/clgeevent1.avif" alt="img">
          <h3>Antaragni Events</h3>

        </li>
        <li class="card">
          <img src="image/antargni-11.avif" alt="img">
          <h3>FlashMob</h3>

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
      <h2>Our Featuers</h2>
      <p>Provide You the seamless Management of the event</p>
      <div class="row company-info">
        <h3>Our Story</h3>
        <p> academic events are more than just gatherings they're milestones in our journey of knowledge and growth.
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
          <li>Pravin Paradkar - Frontend Developer</li>
          <li>Safalya Kumbhare - Visual Effects and Backend Developer</li>
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
            <p><i class="fas fa-map-marker-alt"></i>Reach Out Us</p>
            <p><i class="fas fa-envelope"></i><a href="mailto:safalyakumbhare@gmail.com">Safalya Kumbhare</a></p>
            <p><i class="fas fa-phone"></i><a href="mailto:bhuwangajghat@gmail.com">Bhuvan Gajghat</a></p>
            <p><i class="fas fa-clock"></i><a href="mailto:pravindparadkar2003@gmail.com">Pravin Paradkar</a></p>
            <p><i class="fas fa-clock"></i><a href="mailto:dhankawale2003@gmail.com">Dhananjay Kawale</a></p>
            <!-- <p><i class="fas fa-clock">Contact Us : <a href="tel:9096758272">9096758272</a> </p> -->
            <p><i class="fas fa-globe"></i>Acedemic Event Manager</p>
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
        <span>Copyright © 2024 All Rights Reserved</span>
        <!-- <span class="link">
          <a href="#home">Home</a>
          <a href="#contact">Contact</a>
        </span> -->
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
    integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    const scroll = new LocomotiveScroll({
      el: document.querySelector("#main"),
      smooth: true,
    });
    let sections = document.querySelectorAll('section');

    window.onscroll = () => {
      sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;

        if (top >= offset && top < offset + height) {
          sec.classList.add('show-animate');
        }
        // if want to use repeating animation on scroll, use this
        else {
          sec.classList.remove('show-animate');

        }
      })
    }
  </script>.

</body>

</html>
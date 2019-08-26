<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145051571-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {dataLayer.push(arguments);}

      gtag('js', new Date());

      gtag('config', 'UA-145051571-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Art by Sage Kozub.">
    <meta name="keywords" content="art, portrait, digital, comic, parents, parenthood, Sage Kozub">
    <meta name="author" content="Brian Kozub">
    <title>Art By Sage | Contact Me</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1>Sage Kozub</h1>
        </div>
        <nav id="navBar">
          <ul>
            <li><a href="index.html"><strong>Home</strong></a></li>
            <li><a href="contact.php"><strong>Contact</strong></a></li>
            <li><a href="https://www.instagram.com/pancakecircle/"><strong>Instagram</strong></a></li>
            <li><a href="https://www.patreon.com/pancakecircle"><strong>Patreon</strong></a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="main">
      <div class="container">
          <div class="light">
            <h1>Commissions, Questions, or Comments</h1>
            <form class="specialrequests" method="post" action="contactform.php">
              <div>
            <!--    <label>Name</label><br>-->
                <input name="sender" type="text" placeholder="Your Name">
              </div>
              <div>
             <!--   <label>Subject</label>--><br>
                <input name="subject" type="text" placeholder="Subject">
              </div>
              <div>
             <!--   <label>E-mail</label>--><br>
                <input name="senderEmail" type="email" placeholder="Your E-mail">
              </div>
              <div>
             <!--   <label>How can I help you?</label>--><br>
                <textarea name="message" placeholder="How can I help you?"></textarea>
              </div>
              <button name="submit" id="button1" type="submit">Send</button>
            </form>
          </div>


    </section>


    <footer>
      <p>Sage Kozub, Copyright &copy; 2019</p>
    </footer>

    <!-- Animation script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>

    <!-- My JavaScript -->
    <script src="./js/app.js"></script>

    <!-- Instagram script -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>

  </body>
</html>

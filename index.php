<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gas Company</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="./script.js" defer></script>
</head>

<body>
  <header>
    <div class="logo">
      <a href="./index.php" class="navbar-item home-nav" data-main="home">Gas Company</a>
    </div>
    <nav id="navbar" class="navbar">
      <a id="home-bt" class="navbar-item home-nav" data-main="home">home</a>
      <a id="profile-bt" class="navbar-item profile-nav" data-main="profile">Profile</a>
      <a id="services-bt" class="navbar-item services-nav" data-main="services">Services</a>
      <a id="contact-bt" class="navbar-item contact-nav" data-main="contact">Contact</a>
      <a id="admin-bt" class="navbar-item admin-nav" data-main="admin">Admin</a>
      <div class="burger-container" id="burger-container">
        <div class="burger" id="burger"></div>
      </div>
    </nav>
  </header>
  <!-- Τα mains για one_page_site -->
  <div class="containers">
    <!-- το main του home -->
    <main id="home">
      <!-- __________ To about us _________ -->
      <section class="about-us" id="aboutUs">
        <div class="image-container"></div>
        <div class="content-container">
          <h1 class="title">About us</h1>
          <p class="text1">
            At Gas Company, we are dedicated to providing exceptional gas services to our customers. With years of
            industry experience, we have built a strong reputation for our commitment to safety, reliability, and
            customer satisfaction. Our team of highly skilled professionals is passionate about delivering the highest
            quality gas solutions tailored to meet the unique needs of each client. Whether it's for residential,
            commercial, or industrial purposes, you can trust us to deliver top-notch services that exceed your
            expectations.
          </p>
          <p class="text2">
            At Gas Company, we pride ourselves on being a leading provider of gas services. Our company is driven by a
            strong commitment to excellence and a customer-centric approach. We understand the importance of reliable
            and efficient gas supply for businesses and households, and we go above and beyond to ensure uninterrupted
            service. With our in-depth industry knowledge and state-of-the-art infrastructure, we are well-equipped to
            meet the diverse demands of our valued customers. Experience peace of mind and outstanding service with Gas
            Company.
          </p>
        </div>
      </section>
      <!-- __________ Ta programmata mas _________ -->
      <section class="s" id="s">
        <div class="s1">
          <div class="content-container">
            <h1 class="title">Residential Program</h1>
            <div class="imageP"></div>
          </div>
        </div>
        <div class="s2">
          <div class="content-container">
            <h1 class="title">Professional Program</h1>
            <div class="imageP"></div>
          </div>
        </div>
        <div class="s3">
          <div class="content-container">
            <h1 class="title">Student Program</h1>
            <div class="imageP"></div>
          </div>
        </div>
        <div class="s4">
          <div class="content-container">
            <h1 class="title">Farmers Program</h1>
            <div class="imageP"></div>
          </div>
        </div>
      </section>
      <!-- __________ Gallery _________ -->
      <section class="gallery">
        <div class="gallery-img"></div>
        <div class="gallery-img"></div>
        <div class="gallery-img"></div>
        <div class="gallery-img"></div>
      </section>
      <!-- __________ advices Eksikonomisis _________ -->
      <section class="advices">
        <h1 class="title">Our advices.</h1>
        <video width="100%" autoplay loop muted>
          <source src="./images/video.mp4" type="video/ogg" />
          <source src="./images/video.mp4" type="video/mp4" />
        </video>
      </section>

      <!-- ______ Newsletter section _______-->
      <section id="newsletter">
        <h1 class="title">Subscribe to Newsletter</h1>
        <form method="post" action="">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <button type="submit">Subscribe</button>
        </form>
        <?php
        // db
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "gasdb";

        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
          die("Failed to connect to database: " . $conn->connect_error);
        }

        // Παιρνει τα δεδομένα απο την φόρμα και τα εισάγει στην βάση.
        if (isset($_POST["username"]) && isset($_POST["name"]) && isset($_POST["email"])) {
          $username = $_POST["username"];
          $name = $_POST["name"];
          $email = $_POST["email"];

          // SQl query
          $sql = "INSERT INTO subscribers (username, name, email) VALUES ('$username', '$name', '$email')";
          // errors
          if ($conn->query($sql) === TRUE) {
            echo "Successfully registered in the database.";
          } else {
            echo "Error writing to database: " . $conn->error;
          }
        }

        $conn->close();
        ?>

      </section>
    </main>

    <main id="services">
      <section id="cost-section">
        <h1>Natural Gas Cost Calculation</h1>
        <form id="cost-form">
          <div class="form-element">
            <label for="kWh-input">Consumption in Kilowatt hours (kWh):</label>
            <input type="number" id="kWh-input" required>
          </div>
          <div class="form-element">
            <label for="days-input">Number of Days:</label>
            <input type="number" id="days-input" required>
          </div>
          <div class="form-element">
            <label for="square-meters-input">Square Meters (sqm):</label>
            <input type="number" id="square-meters-input" required>
          </div>
          <button>Calculation</button>
        </form>

        <div id="result-container"></div>
      </section>
    </main>

    <main id="profile">
      <section class="about-us" id="aboutUs">
        <div class="content-container">
          <div class="text1">
            <h2>Philosophy</h1>
              <p>We are dedicated to providing safe, reliable, and sustainable energy solutions. With a focus on safety,
                we uphold the highest industry standards to ensure secure gas delivery. Our commitment to reliability
                means uninterrupted supply for businesses and households. We prioritize sustainability by embracing
                cleaner energy sources and promoting energy efficiency. By fostering strong customer relationships, we
                aim to be a trusted partner in driving a greener future. Join us in experiencing the benefits of natural
                gas.</p>
          </div>
          <div class="text2">
            <h2>Vision</h1>
              <p>Our vision is to be a trusted leader in providing safe, reliable, and sustainable energy solutions. We
                strive to deliver uninterrupted gas supply while minimizing environmental impact. Join us in shaping a
                greener future.</p>
          </div>
          <div class="text3">
            <h2>Goal</h1>
              <p>Our goal is to provide safe, reliable, and sustainable energy solutions. We strive to ensure the secure
                delivery of natural gas, prioritizing the safety of our customers and communities. Our aim is to deliver
                uninterrupted gas supply, empowering businesses and households to operate seamlessly. Additionally, we
                are committed to minimizing our environmental footprint by embracing cleaner energy sources and
                promoting energy efficiency. Join us in achieving a future where safe, reliable, and sustainable energy
                is accessible to all .</p>
          </div>
        </div>
      </section>

      <!-- HR section -->
      <section class="s" id="s">
        <div class="s1">
          <div class="content-container">
            <h1 class="title">Support Department</h1>
            <p class="text">
              The Support Department of a gas company plays a critical role in ensuring the smooth operation of the
              business and providing exceptional customer service. It is responsible for assisting customers, addressing
              their inquiries and concerns, and providing technical support related to the company's gas products and
              services. The department's primary objective is to deliver timely and effective solutions to customers,
              fostering customer satisfaction and loyalty.
            </p>
          </div>
        </div>
        <div class="s2">
          <div class="content-container">
            <h1 class="title">Sales Department</h1>
            <p class="text">
              The Sales Department of a gas company plays a crucial role in driving revenue and ensuring the growth and
              success of the business. It is responsible for generating sales, acquiring new customers, and maintaining
              strong relationships with existing clients. The department's primary objective is to promote the company's
              gas products and services and meet or exceed sales targets.
            </p>
          </div>
        </div>
        <div class="s3">
          <div class="content-container">
            <h1 class="title">Service Department</h1>
            <p class="text">
              The Service Department of a gas company is responsible for ensuring the safe and efficient operation of
              gas-related equipment and infrastructure. It focuses on the installation, maintenance, and repair of gas
              systems, as well as providing support for customers and addressing service-related inquiries or issues.
              The department's primary objective is to deliver reliable and high-quality service while prioritizing
              safety and compliance with industry standards.
            </p>
          </div>
        </div>
        <div class="s4">
          <div class="content-container">
            <h1 class="title">Accounting Department</h1>
            <p class="text">
              The Accounting Department of a gas company is responsible for managing the financial operations and
              records of the business. It plays a critical role in ensuring accurate financial reporting, maintaining
              compliance with accounting regulations, and providing valuable financial insights to support
              decision-making within the company. The department's primary objective is to establish and maintain
              effective financial controls while optimizing the company's financial performance.
            </p>
          </div>
        </div>
      </section>

      <!-- Υπολογισμός Κόστους Φυσικού Αερίου section -->
      <section id="gas-cost-calculation">
        <h2>Natural Gas Cost Calculation</h2>
        <button id="calc-profile">Calculation</button>
      </section>
    </main>

    <main id="contact">
      <h2>Request Form</h2>
      <form method="post" action="">
        <div class="form-element">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-element">
          <label for="phone_number">Phone:</label>
          <input type="tel" id="phone_number" name="phone_number" required>
        </div>
        <div class="form-element">
          <label for="department">Responsible Department:</label>
          <select id="department" name="department" required>
            <option value="" disabled selected>Select the appropriate department</option>
            <option value="Πωλήσεις">Sales</option>
            <option value="Υποστήριξη">Support</option>
            <option value="Οικονομικά">Financially</option>
            <option value="Τεχνική Υποστήριξη">Technical assistance</option>
          </select>
        </div>
        <div class="form-element">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-element">
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject" required>
        </div>
        <div class="form-element">
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>


      <?php
      // Σύνδεση στη βάση δεδομένων
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "gasdb";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Failed to connect to database: " . $conn->connect_error);
      }

      if (isset($_POST['name'], $_POST['phone_number'], $_POST['department'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
        // Ανάκτηση των δεδομένων από τη φόρμα
        $name = $_POST['name'];
        $phone = $_POST['phone_number'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // sql query
        $sql = "INSERT INTO requests (name, phone_number, department, email, subject, message) VALUES ('$name', '$phone', '$department', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
          echo "Successfully registered in the database.";
        } else {
          echo "Error writing to database: " . $conn->error;
        }

        $conn->close();

      }
      ?>

      <!-- Στοιχεία Επικοινωνίας -->
      <h2>Contact info</h2>
      <p>Address: Καραολή και Δημητρίου 80, Πειραιάς 185 34</p>
      <p>Phone: <a href="tel:+1234567890">1234567890</a></p>
      <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>

      <!-- Google Maps -->
      <h2>Map</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.9640287463317!2d23.6527562!3d37.9418017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bbe5bb8515a1%3A0x3e0dce8e58812705!2s%CE%A0%CE%B1%CE%BD%CE%B5%CF%80%CE%B9%CF%83%CF%84%CE%AE%CE%BC%CE%B9%CE%BF%20%CE%A0%CE%B5%CE%B9%CF%81%CE%B1%CE%B9%CF%8E%CF%82%20%28%CE%A0%CE%91%CE%A0%CE%95%CE%99%29!5e0!3m2!1sel!2sgr!4v1624105140701!5m2!1sel!2sgr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </main>

    <main id="admin">
      <form method="post" action="">
        <h2>Μanagement page</h2>
        <div class="form-element">
          <label for="usern">Username:</label>
          <input type="text" id="usern" name="usern" required>
        </div>
        <div class="form-element">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>

        <button onclick="login()">Admin login</button>
      </form>
      <?php
      if (isset($_POST['usern']) && isset($_POST['password'])) {
        $usern = $_POST['usern'];
        $password = $_POST['password'];

        if ($usern === 'admin' && $password === 'Root123') {

          ?>
          <h1>User data</h1>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "gasdb";

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
            die("Error connecting to database: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM requests";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            ?>
            <table id="requests-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["name"] . "</td>";
                  echo "<td>" . $row["phone_number"] . "</td>";
                  echo "<td>" . $row["email"] . "</td>";
                  echo "<td>" . $row["subject"] . "</td>";
                  echo "<td>" . $row["message"] . "</td>";
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
            <?php
          } else {
            echo "No results found.";
          }

          $conn->close();
        } else {
          // error στην συνδεση σχετικα με τα στοιχεία 
          $errorMessage = 'Sorry, you are not an administrator of the web application.';
          echo "<script>alert('$errorMessage');</script>";
        }
      }
      ?>
    </main>
  </div>
  <footer>
    <div class="column">
      <h3>Contact info</h3>
      <p>
        Address: Καραολή και Δημητρίου 80, Πειραιάς 185 34<br>
        Phone: <a href="tel:1234567890">1234567890</a><br>
        Email: <a href="mailto:info@example.com">gasCompany@gmail.com</a>
      </p>
    </div>
    <div class="map">
      <h3>Map</h3>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.9640287463317!2d23.6527562!3d37.9418017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bbe5bb8515a1%3A0x3e0dce8e58812705!2s%CE%A0%CE%B1%CE%BD%CE%B5%CF%80%CE%B9%CF%83%CF%84%CE%AE%CE%BC%CE%B9%CE%BF%20%CE%A0%CE%B5%CE%B9%CF%81%CE%B1%CE%B9%CF%8E%CF%82%20%28%CE%A0%CE%91%CE%A0%CE%95%CE%99%29!5e0!3m2!1sel!2sgr!4v1624105140701!5m2!1sel!2sgr"
        width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </footer>
</body>

</html>
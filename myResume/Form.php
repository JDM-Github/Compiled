<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="formstyle.css" />
</head>

<body>
  <a href="dashboard.php" class="anchor">Back</a>
  <section class="container">
    <header>Resume Form</header>
    <form action="insert.php" id="myForm" autocomplete="off" class="form" method="post">
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter full name (Ex. Raymundo Cruz Lapid)" required />
      </div>
      <div class="input-box">
        <label>Email Address</label>
        <input type="text" id="email" name="email" placeholder="Enter email address" required />
      </div>
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="text" id="contact" name="contact" placeholder="Enter phone number" required />
        </div>
        <div class="input-box">
          <label>Birth Date</label>
          <input type="text" id="birthdate" name="birthdate" placeholder="Ex.(January 1, 2000)" required />
        </div>
        <div class="input-box">
          <label>Sex</label>
          <input type="text" id="gender" name="gender" placeholder="(Ex. Male/Female)" required />
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input type="text" id="address" name="address" placeholder="Enter street address" required />
      </div>
      <div class="input-box objectives">
        <label>Objectives</label>
        <textarea class="textarea" id="objectives" name="objectives" placeholder="Your objectives" required></textarea>
      </div>
      <div class="input-box Skills">
        <label>Skills</label>
        <textarea class="textarea" id="skills" name="skills" placeholder="Your skills"></textarea>
      </div>
      <div class="input-box educAttain">
        <label>Educational Attainment</label>
        <textarea class="textarea" id="educational" name="educational" placeholder="Your Education" required></textarea>
      </div>
      <div class="terms">
        <h3>Terms and Conditions</h3>
        <label>
          <input type="checkbox" class="checkbox" id="termsCheckbox" required>
          I agree to the <a href="#" onclick="showPopup()">terms and conditions</a>.
        </label>
        <label class="employ">
          <input type="radio" name="status" value="Employed" required>
          Employed
        </label>
        <label class="employ">
          <input type="radio" name="status" value="Unemployed" required>
          Unemployed
        </label>
        <div class="popup-overlay" id="popupOverlay">
          <div class="popup-box">
            <h3>Terms and Conditions</h3>
            <p>
              Last Updated: [Date]
              <br>
              Welcome to [Your System Name]! By using our services, you agree to comply with these Terms and Conditions.
              Please read them carefully.
              <br>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente totam quibusdam eligendi obcaecati
              ratione dolor adipisci illo alias veniam, facere, minima praesentium excepturi ipsum. Minima atque error
              facilis suscipit sequi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sapiente a molestias? Nemo laudantium
              reiciendis alias ipsum ut soluta ea laboriosam repudiandae tempora corporis, sapiente adipisci cum fuga
              perspiciatis sint?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem accusantium facilis sunt! Rerum non quae
              sapiente dolorum distinctio ab accusamus veniam est consectetur eveniet mollitia nam perferendis
              molestiae, reprehenderit nobis.
              lorem
            </p>
            <div class="popup-buttons">
              <button onclick="acceptTerms()">Accept</button>
              <button onclick="closePopup()">Cancel</button>
            </div>
          </div>
        </div>
        <div class="divbutton">
          <button type="submit" class="btn" name="send" onclick="validateForm()">Submit</button>
        </div>
      </div>
    </form>
  </section>
  <script src="jsform.js"></script>
</body>

</html>
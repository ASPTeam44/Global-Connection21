<?php include 'inc/header.php'; ?>
<section style="padding:2rem;" class="fade-in">
<h2>Contact & Support</h2>
<form class="contact-form" onsubmit="event.preventDefault();alert('Submitted');">
  <input type="text" placeholder="Name" required>
  <input type="email" placeholder="Email" required>
  <textarea placeholder="Message" required></textarea>
  <button type="submit">Send</button>
</form>
<div class="faq">
  <div class="faq-item">
    <h3 onclick="this.nextElementSibling.classList.toggle('open')">What is Global Connection?</h3>
    <p class="answer">A demo B2B platform.</p>
  </div>
</div>
<div class="chatbot">Chatbot coming soon...</div>
</section>
<?php include 'inc/footer.php'; ?>

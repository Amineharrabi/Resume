<?php
/**
 * Contact section
 * 
 * @author Amine harrabi
 */
?>
<section id="contact" class="contact section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Get In Touch</h2>
        
        <div class="contact-container" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info">
                <h3 class="contact-title">Let's talk about your project</h3>
                <p class="contact-description">
                    Whether you're looking for a Data Scientist, Machine Learning Engineer, or just want to discuss a potential collaboration, 
                    I'm here to help. Feel free to reach out using the contact form or through any of the methods below.
                </p>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Email</h4>
                        <p>Amineiiiiharrabi@gmail.com</p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Phone</h4>
                        <p>+216 93215359</p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Location</h4>
                        <p>Sfax , tunisia</p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="contact-text">
                        <h4>LinkedIn</h4>
                        <p><a href="https://linkedin.com/" target="_blank">https://tn.linkedin.com/in/amineharrabi</a></p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <div class="alert alert-success">
                    Your message has been sent successfully! I'll get back to you as soon as possible.
                </div>
                <div class="alert alert-error">
                    Oops! Something went wrong. Please try again later.
                </div>
                
                <form id="contact-form" method="post" action="php/send_email.php" novalidate>
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                        <div class="invalid-feedback">Please enter your name</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <div class="invalid-feedback">Please enter a valid email address</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
                        <div class="invalid-feedback">Please enter a subject</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                        <div class="invalid-feedback">Please enter your message</div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary form-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

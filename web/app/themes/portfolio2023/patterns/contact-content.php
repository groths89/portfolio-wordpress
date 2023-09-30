<?php
/**
 * Title: Contact Section
 * Slug: portfolio2023/contact-content
 * Categories: contact
 */
?>

<div class="contact-container">
    <div class="main-title">
        <h2>Contact <span>Me</span></h2>
    </div>
    <div class="contact-content-container">
        <div class="left-contact">
            <h4>Contact me here</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ducimus eaque ut exercitationem
                quae
                optio? Officia unde, pariatur mollitia dolor modi iste blanditiis exercitationem quod esse in
                veniam est
                fugit.</p>
            <div class="contact-info">
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Location</span>
                    </div>
                    <p>:New York, NY, United States of America</p>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone</span>
                    </div>
                    <p>:+1 123 456 7890</p>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                    </div>
                    <p>:me@gregorypaulrothstein.dev</p>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-wifi"></i>
                        <span>Website</span>
                    </div>
                    <p>:www.gregorypaulrothstein.dev</p>
                </div>
                <div class="contact-item">
                    <div class="icon">
                        <i class="fas fa-globe"></i>
                        <span>Languages</span>
                    </div>
                    <p>:English</p>
                </div>
                <div class="contact-icons">
                    <div class="contact-icon">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="contact-icon">
                        <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                    <div class="contact-icon">
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="contact-icon">
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="contact-icon">
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-contact">
            <?php echo do_shortcode('[fluentform id="1"]'); ?>
            <!--                     <form action="" method="post" class="contact-form">
                    <div class="input-control i-c-2">
                        <input type="text" name="name" id="name" placeholder="Name" required>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-control">
                        <input type="text" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="input-control">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="submit-btn">
                        <a type="submit" class="btn">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                        </a>
                    </div>
                </form> -->
        </div>
    </div>
</div>
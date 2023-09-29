<?php

get_header(); ?>

<header class="section sec1 header active" id="home">
    <div class="header-content">
        <div class="left-header">
            <div class="h-shape"></div>
            <div class="image">
                <?php $image = get_field('hero_image'); ?>
                <?php if ($image): ?>
                    <img src="<?php the_field('hero_image'); ?>" alt="Hero Image" />
                <?php endif; ?>
            </div>
        </div>
        <div class="right-header">
            <div class="h-shape"></div>
            <div class="text">
                <?php the_field('hero_text'); ?>
                <div class="btns">
                    <?php if (get_field('hero_file')): ?>
                        <a href="<?php the_field('hero_file'); ?>" class="btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="section sec2 about" id="about">
        <div class="main-title">
            <h2>About <span>me</span></h2>
        </div>
        <div class="about-container">
            <div class="left-about">
                <h4>Information About Me</h4>
                <p>Graduate of State University of New York at Oneonta in the study of Web Design. Strengths include
                    programming
                    frontend software and scripting
                    ways to test and deploy websites.</p>
            </div>
            <div class="right-about">
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">560+</p>
                        <p class="small-text">Projects <br> Completed</p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">560+</p>
                        <p class="small-text">Projects <br> Completed</p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">560+</p>
                        <p class="small-text">Projects <br> Completed</p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="abt-text">
                        <p class="large-text">560+</p>
                        <p class="small-text">Projects <br> Completed</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-stats">
            <!-- Programming Skills -->
            <h4 class="stat-title">Programming Skills</h4>
            <div class="progress-bars">
                <!-- Angular Framework -->
                <div class="progress-bar">
                    <p class="progress-title">Angular</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="angular"></span>
                        </div>
                    </div>
                </div>

                <!-- React Framework -->
                <div class="progress-bar">
                    <p class="progress-title">React</p>
                    <div class="progress-container">
                        <p class="progress-text">20%</p>
                        <div class="progress">
                            <span class="react"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">vanilla javascript</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="javascript"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">typescript</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="typescript"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">php</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="php"></span>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="stat-title">Markup Skills</h4>
            <div class="progress-bars">
                <!-- HTML -->
                <div class="progress-bar">
                    <p class="progress-title">html</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="html"></span>
                        </div>
                    </div>
                </div>
                <!-- XML -->
                <div class="progress-bar">
                    <p class="progress-title">xml</p>
                    <div class="progress-container">
                        <p class="progress-text">20%</p>
                        <div class="progress">
                            <span class="xml"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">css</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="css"></span>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="stat-title">Scripting Skills</h4>
            <div class="progress-bars">
                <!-- YAML -->
                <div class="progress-bar">
                    <p class="progress-title">yaml</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="yaml"></span>
                        </div>
                    </div>
                </div>
                <!-- Node -->
                <div class="progress-bar">
                    <p class="progress-title">node</p>
                    <div class="progress-container">
                        <p class="progress-text">20%</p>
                        <div class="progress">
                            <span class="node"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">bash</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="bash"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">git</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="git"></span>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="stat-title">Other Skills</h4>
            <div class="progress-bars">
                <!-- Adobe CS -->
                <div class="progress-bar">
                    <p class="progress-title">adobe creative suite</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="adobe"></span>
                        </div>
                    </div>
                </div>
                <!-- AWS -->
                <div class="progress-bar">
                    <p class="progress-title">amazon web services</p>
                    <div class="progress-container">
                        <p class="progress-text">20%</p>
                        <div class="progress">
                            <span class="aws"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">azure</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="azure"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">google cloud platform</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="gcp"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">jenkins</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="jenkins"></span>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="stat-title">Soft Skills</h4>
            <div class="progress-bars">
                <!-- Agile -->
                <div class="progress-bar">
                    <p class="progress-title">agile</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="agile"></span>
                        </div>
                    </div>
                </div>
                <!-- Problem Solving -->
                <div class="progress-bar">
                    <p class="progress-title">problem solving</p>
                    <div class="progress-container">
                        <p class="progress-text">20%</p>
                        <div class="progress">
                            <span class="prblem_solving"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">strategic thinking</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="strategic_thinking"></span>
                        </div>
                    </div>
                </div>
                <div class="progress-bar">
                    <p class="progress-title">researching</p>
                    <div class="progress-container">
                        <p class="progress-text">90%</p>
                        <div class="progress">
                            <span class="researching"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="stat-title">My Timeline</h4>
        <div class="timeline-container">
            <div class="timeline">
                <div class="t-container t-left">
                    <div class="t-date">15 Dec</div>
                    <i class="t-icon fa fa-home"></i>
                    <div class="t-content">
                        <h2>Lorem ipsum dolor sit amet <span></span></h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit
                            semper
                            pretium.
                        </p>
                    </div>
                </div>
                <div class="t-container t-right">
                    <div class="t-date">22 Oct</div>
                    <i class="t-icon fa fa-gift"></i>
                    <div class="t-content">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit
                            semper
                            pretium.
                        </p>
                    </div>
                </div>
                <div class="t-container t-left">
                    <div class="t-date">10 Jul</div>
                    <i class="t-icon fa fa-user"></i>
                    <div class="t-content">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit
                            semper
                            pretium.
                        </p>
                    </div>
                </div>
                <div class="t-container t-right">
                    <div class="t-date">18 May</div>
                    <i class="t-icon fa fa-running"></i>
                    <div class="t-content">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit
                            semper
                            pretium.
                        </p>
                    </div>
                </div>
                <div class="t-container t-left">
                    <div class="t-date">10 Feb</div>
                    <i class="t-icon fa fa-cog"></i>
                    <div class="t-content">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit
                            semper
                            pretium.
                        </p>
                    </div>
                </div>
                <div class="t-container t-right">
                    <div class="t-date">01 Jan</div>
                    <i class="t-icon fa fa-certificate"></i>
                    <div class="t-content">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit
                            semper
                            pretium.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section sec3 portfolio" id="portfolio">
        <div class="main-title">
            <h2>My <span>Portfolio</span></h2>
        </div>
        <p class="portfolio-text">
            Here is a list of my projects that I have worked on. I have worked on a variety of projects, ranging from
            web
            development to mobile development.
        </p>
        <div class="portfolios">
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port1.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port2.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port3.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port4.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port5.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port6.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port7.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3>Project Source</h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section sec4 blogs-sec" id="blogs">
        <div class="blogs-content">
            <div class="main-title">
                <h2>My <span>Blogs</span></h2>
            </div>
            <div class="blogs">
                <div class="blog">
                    <img src="img/blog1.jpg" alt="Blog1">
                    <div class="blog-text">
                        <h4>How to Test your Website</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                </div>
            </div>

            <div class="blogs">
                <div class="blog">
                    <img src="img/blog2.jpg" alt="Blog2">
                    <div class="blog-text">
                        <h4>How to Test your Website</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                </div>
            </div>

            <div class="blogs">
                <div class="blog">
                    <img src="img/blog3.jpg" alt="Blog3">
                    <div class="blog-text">
                        <h4>How to Test your Website</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section sec5 contact" id="contact">
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
    </section>
</main>
<!-- Controls Div of the Webpage -->
<div class="controls">
    <div class="control control-1 active-btn" data-id="home">
        <i class="fas fa-home"></i>
    </div>
    <div class="control control-2" data-id="about">
        <i class="fas fa-user"></i>
    </div>
    <div class="control control-3" data-id="portfolio">
        <i class="fas fa-briefcase"></i>
    </div>
    <div class="control control-4" data-id="blogs">
        <i class="fas fa-blog"></i>
    </div>
    <div class="control control-5" data-id="contact">
        <i class="fas fa-envelope"></i>
    </div>
</div>
<!-- Theme Controls of the Webpage -->
<div class="theme-controls">
    <div class="theme-control theme-control-light">
        <i class="fas fa-sun"></i>
    </div>
    <div class="theme-control theme-control-dark">
        <i class="fas fa-moon"></i>
    </div>
</div>

<?php get_footer();
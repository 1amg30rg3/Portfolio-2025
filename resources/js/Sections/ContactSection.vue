<script setup>
</script>

<style lang="scss" scoped>
    @use "../../scss/sections/contact.scss" as *;
</style>

<template>
    <section class="contact-section cover-black" id="contact">
        <div class="container">
            <div class="section-header">
                <h1 class="title">C<span>O</span>NTACT</h1>
                <p class="subtitle">Let's connect and create something amazing together</p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <h2>Get In Touch</h2>

                    <div class="info-item">
                        <i class="fa-solid fa-envelope icon"></i>
                        <div class="info-content">
                            <div class="label">Email</div>
                            <div class="value">g.gavash3li@gmail.com</div>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa-solid fa-location-dot icon"></i>
                        <div class="info-content">
                            <div class="label">Location</div>
                            <div class="value">Tbilisi, Georgia</div>
                        </div>
                    </div>

                    <div class="social-links">
                        <h3>Follow Me</h3>
                        <div class="social-icons">
                            <a href="https://github.com/1amg30rg3" title="GitHub"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/giorgi-gavasheli-0033691b1/" title="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/giorgigavasheli/" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.facebook.com/ggavash3li/" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h2>Send Message</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" placeholder="John Doe" />
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" placeholder="john@example.com" />
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" placeholder="Project Inquiry" />
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" placeholder="Tell me about your project..."></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="fa-solid fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>


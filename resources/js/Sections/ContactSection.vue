<script setup>
</script>

<style lang="scss" scoped>
@use "../../scss/variables.scss" as *;

.contact-section {
    padding: 100px 20px;
    background-color: $primary-color;
    overflow-x: hidden;

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
        animation: fadeInUp 0.8s ease forwards;

        .title {
            font-size: 68px;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0, 153, 255, 0.3);

            span {
                color: $secondary-color;
                font-size: 100px;
                font-family: "Dancing Script", cursive;
                filter: drop-shadow(0 0 10px rgba(0, 153, 255, 0.5));
            }
        }

        .subtitle {
            font-size: 24px;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 10px;
        }
    }

    .contact-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        margin-top: 60px;

        @media (max-width: 968px) {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    .contact-info {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
        border: 1px solid rgba(0, 102, 170, 0.3);
        border-radius: 20px;
        padding: 40px;
        backdrop-filter: blur(10px);
        animation: fadeInUp 1s ease forwards;

        h2 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 30px;
            color: $secondary-color;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 12px;
            transition: all 0.3s ease;

            &:hover {
                background: rgba(0, 153, 255, 0.1);
                transform: translateX(10px);
            }

            .icon {
                font-size: 28px;
                color: $secondary-color;
                min-width: 40px;
                filter: drop-shadow(0 0 10px rgba(0, 153, 255, 0.5));
            }

            .info-content {
                flex: 1;

                .label {
                    font-size: 14px;
                    color: rgba(255, 255, 255, 0.6);
                    margin-bottom: 5px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                }

                .value {
                    font-size: 18px;
                    color: $text-color;
                    font-weight: 600;
                }
            }
        }

        .social-links {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid rgba(0, 153, 255, 0.2);

            h3 {
                font-size: 20px;
                margin-bottom: 20px;
                color: $text-color;
            }

            .social-icons {
                display: flex;
                gap: 15px;
                flex-wrap: wrap;

                a {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 50px;
                    height: 50px;
                    background: rgba(0, 153, 255, 0.1);
                    border: 1px solid rgba(0, 153, 255, 0.3);
                    border-radius: 12px;
                    color: $secondary-color;
                    font-size: 24px;
                    transition: all 0.3s ease;

                    &:hover {
                        background: $secondary-color;
                        color: $primary-color;
                        transform: translateY(-5px) rotate(5deg);
                        box-shadow: 0 10px 25px rgba(0, 153, 255, 0.4);
                    }
                }
            }
        }
    }

    .contact-form {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
        border: 1px solid rgba(0, 102, 170, 0.3);
        border-radius: 20px;
        padding: 40px;
        backdrop-filter: blur(10px);
        animation: fadeInUp 1.2s ease forwards;

        h2 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 30px;
            color: $secondary-color;
        }

        .form-group {
            margin-bottom: 25px;

            label {
                display: block;
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 10px;
                color: $text-color;
            }

            input,
            textarea {
                width: 100%;
                padding: 15px 20px;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(0, 102, 170, 0.3);
                border-radius: 12px;
                color: $text-color;
                font-size: 16px;
                font-family: "Montserrat", sans-serif;
                transition: all 0.3s ease;

                &:focus {
                    outline: none;
                    border-color: $secondary-color;
                    background: rgba(0, 153, 255, 0.05);
                    box-shadow: 0 0 20px rgba(0, 153, 255, 0.2);
                }

                &::placeholder {
                    color: rgba(255, 255, 255, 0.4);
                }
            }

            textarea {
                min-height: 150px;
                resize: vertical;
            }
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, $secondary-color 0%, rgba(0, 153, 255, 0.8) 100%);
            border: none;
            border-radius: 12px;
            color: $primary-color;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;

            &:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 30px rgba(0, 153, 255, 0.5);
            }

            &:active {
                transform: translateY(-1px);
            }
        }
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<template>
    <section class="contact-section" id="contact">
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
                            <div class="value">your.email@example.com</div>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa-solid fa-phone icon"></i>
                        <div class="info-content">
                            <div class="label">Phone</div>
                            <div class="value">+1 (555) 123-4567</div>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa-solid fa-location-dot icon"></i>
                        <div class="info-content">
                            <div class="label">Location</div>
                            <div class="value">Your City, Country</div>
                        </div>
                    </div>

                    <div class="social-links">
                        <h3>Follow Me</h3>
                        <div class="social-icons">
                            <a href="#" title="GitHub"><i class="fa-brands fa-github"></i></a>
                            <a href="#" title="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" title="Facebook"><i class="fa-brands fa-facebook"></i></a>
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


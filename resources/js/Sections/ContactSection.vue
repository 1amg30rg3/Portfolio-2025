<script setup>
import { ref, inject } from 'vue';
import { useForm } from '@inertiajs/vue3';
import ButtonComponent from '../Components/ButtonComponent.vue';

const toast = inject('toast');
const emailCopied = ref(false);

const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: ''
});

const submitForm = () => {
    form.post('/contact', {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            toast.success("Message sent successfully! I'll get back to you soon.");
        },
        onError: () => {
            toast.error('Failed to send message. Please try again.');
        }
    });
};

const copyEmail = () => {
    const email = 'g.gavash3li@gmail.com';
    navigator.clipboard.writeText(email).then(() => {
        emailCopied.value = true;
        toast.success('Email copied to clipboard!');
        setTimeout(() => {
            emailCopied.value = false;
        }, 2000);
    });
};
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

                    <div class="info-item email-item" @click="copyEmail">
                        <i class="fa-solid fa-envelope icon"></i>
                        <div class="info-content">
                            <div class="label">Email</div>
                            <div class="value">g.gavash3li@gmail.com</div>
                        </div>
                        <i class="fa-solid fa-copy copy-icon" :class="{ copied: emailCopied }"></i>
                        <span class="copy-tooltip" v-if="emailCopied">Copied!</span>
                    </div>

                    <div class="info-item location-item" @click="openLocation">
                        <i class="fa-solid fa-location-dot icon"></i>
                        <div class="info-content">
                            <div class="label">Location</div>
                            <div class="value">Tbilisi, Georgia</div>
                        </div>
                        <i class="fa-solid fa-external-link-alt link-icon"></i>
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
                    <form @submit.prevent="submitForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input
                                type="text"
                                id="name"
                                v-model="form.name"
                                placeholder="John Doe"
                                required
                            />
                            <span v-if="form.errors.name" class="error">{{ form.errors.name }}</span>
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input
                                type="email"
                                id="email"
                                v-model="form.email"
                                placeholder="john@example.com"
                                required
                            />
                            <span v-if="form.errors.email" class="error">{{ form.errors.email }}</span>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input
                                type="text"
                                id="subject"
                                v-model="form.subject"
                                placeholder="Project Inquiry"
                                required
                            />
                            <span v-if="form.errors.subject" class="error">{{ form.errors.subject }}</span>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea
                                id="message"
                                v-model="form.message"
                                placeholder="Tell me about your project..."
                                required
                            ></textarea>
                            <span v-if="form.errors.message" class="error">{{ form.errors.message }}</span>
                        </div>

                        <ButtonComponent label="Send Message" :processing="form.processing" icon="envelope"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>


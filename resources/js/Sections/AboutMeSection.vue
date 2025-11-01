<script setup>
    import profileImage from '../../assets/me.jpeg';
</script>

<style lang="scss" scoped>
    @use "../../scss/sections/aboutme.scss" as *;
</style>

<template>
    <section class="about-me" id="aboutMe">
        <div class="container">
            <div class="about-me-header">
                <h1 class="title">
                    AB<span>O</span>UT ME
                </h1>
                <p class="subtitle">Full-Stack Developer | Educator | Tech Enthusiast</p>
            </div>

            <div class="about-me-content">
                <div class="profile-image-wrapper">
                    <img :src="profileImage" alt="George Gavasheli" class="profile-image">
                </div>

                <div class="about-text">
                    <div class="intro-text">
                        <p>I'm a passionate Web Developer with over 6 years of experience specializing in Vue.js, TypeScript, Vite, and Inertia.js. I focus on building secure, dynamic, and high-performance full-stack applications that deliver exceptional user experiences.</p>

                        <p>Currently, I'm working as a Software Engineer at Shop Boss, where I contribute to the development of innovative software solutions. In addition to my professional work, I've served as a Front-End Lecturer at Business and Technology University in Tbilisi, sharing my knowledge of modern web development and mentoring the next generation of developers.</p>

                        <p>Throughout my career, I've collaborated on a wide range of projects from cybersecurity platforms to SaaS applications leveraging technologies such as PHP, Laravel, and Python. I'm deeply committed to writing clean, scalable code and continuously expanding my technical skill set to stay ahead in the ever-evolving tech landscape.</p>
                    </div>

                    <div class="highlight-box">
                        <div class="highlight-title">My Philosophy</div>
                        <div class="highlight-text">
                            Outside of coding, I enjoy exploring new technologies, teaching, and refining user interfaces that make the web more intuitive and accessible.
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="experience-section">
                <h2 class="section-title">Professional Journey</h2>
                <div class="experience-grid">
                    <div class="experience-card">
                        <i class="fa-solid fa-code card-icon"></i>
                        <h3 class="card-title">Software Engineer</h3>
                        <p class="card-subtitle">Shop Boss</p>
                        <p class="card-description">
                            Contributing to innovative software solutions, building scalable applications, and implementing best practices in modern web development.
                        </p>
                    </div>

                    <div class="experience-card">
                        <i class="fa-solid fa-chalkboard-user card-icon"></i>
                        <h3 class="card-title">Front-End Lecturer</h3>
                        <p class="card-subtitle">Business and Technology University</p>
                        <p class="card-description">
                            Teaching modern web development, mentoring students, and sharing expertise in Vue.js, JavaScript, and front-end best practices.
                        </p>
                    </div>

                    <div class="experience-card">
                        <i class="fa-solid fa-laptop-code card-icon"></i>
                        <h3 class="card-title">Full-Stack Developer</h3>
                        <p class="card-subtitle">6+ Years Experience</p>
                        <p class="card-description">
                            Specialized in building cybersecurity platforms, SaaS applications, and enterprise solutions using cutting-edge technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

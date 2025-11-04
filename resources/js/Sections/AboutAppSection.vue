<script setup>
const features = [
    {
        icon: 'fa-solid fa-code',
        title: 'Modern Tech Stack',
        description: 'Built with Laravel, Inertia.js, and Vue.js for a seamless single-page application experience.'
    },
    {
        icon: 'fa-solid fa-palette',
        title: 'Beautiful Design',
        description: 'Crafted with SCSS and custom animations for a stunning visual experience.'
    },
    {
        icon: 'fa-solid fa-mobile-screen',
        title: 'Responsive Layout',
        description: 'Fully responsive design that works perfectly on all devices and screen sizes.'
    },
    {
        icon: 'fa-solid fa-bolt',
        title: 'High Performance',
        description: 'Optimized for speed with Vite bundling and efficient code splitting.'
    },
    {
        icon: 'fa-solid fa-shield-halved',
        title: 'Secure',
        description: 'Built with security best practices and Laravel\'s robust security features.'
    },
    {
        icon: 'fa-solid fa-puzzle-piece',
        title: 'Modular Architecture',
        description: 'Component-based structure for easy maintenance and scalability.'
    }
];

const techStack = [
    { name: 'Laravel', icon: 'fa-brands fa-laravel', category: 'Backend' },
    { name: 'Vue.js', icon: 'fa-brands fa-vuejs', category: 'Frontend' },
    { name: 'Inertia.js', icon: 'fa-solid fa-link', category: 'Framework' },
    { name: 'SCSS', icon: 'fa-brands fa-sass', category: 'Styling' },
    { name: 'Vite', icon: 'fa-solid fa-fire', category: 'Build Tool' },
    { name: 'PHP', icon: 'fa-brands fa-php', category: 'Language' },
    { name: 'JavaScript', icon: 'fa-brands fa-js', category: 'Language' },
    { name: 'MySQL', icon: 'fa-solid fa-database', category: 'Database' }
];
</script>

<style lang="scss" scoped>
@use "../../scss/sections/aboutapp.scss" as *;
</style>

<template>
    <section class="about-app-section" id="aboutApp">
        <div class="container">
            <div class="section-header">
                <h1 class="title">AB<span>O</span>UT APP</h1>
                <p class="subtitle">Learn more about the technology and features behind this portfolio</p>
            </div>

            <div class="app-intro">
                <p>
                    This portfolio application is a modern, full-stack web application built with cutting-edge technologies.
                    It showcases my skills and projects while demonstrating best practices in web development.
                </p>
                <p>
                    The application leverages the power of Laravel for the backend, Vue.js for reactive frontend components,
                    and Inertia.js to bridge them together, creating a seamless single-page application experience without
                    the complexity of a traditional SPA.
                </p>
            </div>

            <h2 class="subsection-title">Key Features</h2>
            <div class="features-grid">
                <div v-for="feature in features" :key="feature.title" class="feature-card">
                    <i :class="feature.icon" class="icon"></i>
                    <h3>{{ feature.title }}</h3>
                    <p>{{ feature.description }}</p>
                </div>
            </div>

            <div class="tech-stack-section">
                <h2 class="subsection-title">Technology Stack</h2>
                <div class="tech-grid">
                    <div v-for="tech in techStack" :key="tech.name" class="tech-item">
                        <i :class="tech.icon"></i>
                        <div class="tech-info">
                            <div class="tech-name">{{ tech.name }}</div>
                            <div class="tech-category">{{ tech.category }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="version-info">
                <div class="version">Version 3.0</div>
                <div class="build-date">Built in 2025</div>
            </div>
        </div>
    </section>
</template>


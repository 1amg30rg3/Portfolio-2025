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
@use "../../scss/variables.scss" as *;

.about-app-section {
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
            line-height: 1.6;
        }
    }

    .app-intro {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
        border: 1px solid rgba(0, 102, 170, 0.3);
        border-radius: 20px;
        padding: 50px;
        backdrop-filter: blur(10px);
        margin-bottom: 60px;
        animation: fadeInUp 1s ease forwards;

        p {
            font-size: 18px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
            text-align: center;
            margin-bottom: 20px;

            &:last-child {
                margin-bottom: 0;
            }
        }
    }

    .subsection-title {
        font-size: 40px;
        font-weight: 800;
        text-align: center;
        margin-bottom: 50px;
        color: $text-color;
        position: relative;
        display: inline-block;
        width: 100%;

        &::after {
            content: '';
            display: block;
            width: 150px;
            height: 4px;
            margin: 12px auto 0;
            background-color: $secondary-color;
            border-radius: 2px;
        }
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        margin-bottom: 80px;

        .feature-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
            border: 1px solid rgba(0, 102, 170, 0.26);
            border-radius: 20px;
            padding: 35px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            animation: fadeInUp 1.2s ease forwards;

            &::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(0, 153, 255, 0.15), transparent);
                transition: left 0.6s ease;
            }

            &:hover {
                transform: translateY(-12px);
                border-color: $secondary-color;
                box-shadow: 0 15px 40px rgba(0, 153, 255, 0.4);

                &::before {
                    left: 100%;
                }

                .icon {
                    transform: scale(1.2) rotate(10deg);
                }
            }

            .icon {
                font-size: 45px;
                color: $secondary-color;
                margin-bottom: 20px;
                transition: transform 0.3s ease;
                filter: drop-shadow(0 0 10px rgba(0, 153, 255, 0.5));
            }

            h3 {
                font-size: 24px;
                font-weight: 700;
                margin-bottom: 15px;
                color: $text-color;
            }

            p {
                font-size: 16px;
                line-height: 1.7;
                color: rgba(255, 255, 255, 0.8);
            }
        }
    }

    .tech-stack-section {
        margin-top: 80px;

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;

            .tech-item {
                display: flex;
                align-items: center;
                gap: 15px;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
                border: 1px solid rgba(0, 102, 170, 0.26);
                border-radius: 16px;
                padding: 20px;
                transition: all 0.4s ease;
                backdrop-filter: blur(10px);

                &:hover {
                    background: linear-gradient(135deg, $secondary-color 0%, rgba(0, 153, 255, 0.8) 100%);
                    color: $primary-color;
                    transform: translateY(-8px) scale(1.05);
                    box-shadow: 0 12px 30px rgba(0, 153, 255, 0.5);
                    border-color: $secondary-color;

                    i {
                        transform: scale(1.2) rotate(5deg);
                    }
                }

                i {
                    font-size: 32px;
                    color: $secondary-color;
                    transition: all 0.3s ease;
                }

                .tech-info {
                    flex: 1;

                    .tech-name {
                        font-size: 18px;
                        font-weight: 700;
                        margin-bottom: 3px;
                    }

                    .tech-category {
                        font-size: 13px;
                        opacity: 0.7;
                    }
                }
            }
        }
    }

    .version-info {
        margin-top: 80px;
        text-align: center;
        padding: 40px;
        background: linear-gradient(135deg, rgba(0, 153, 255, 0.1) 0%, rgba(0, 153, 255, 0.05) 100%);
        border: 1px solid rgba(0, 102, 170, 0.3);
        border-radius: 20px;
        backdrop-filter: blur(10px);

        .version {
            font-size: 48px;
            font-weight: 900;
            color: $secondary-color;
            margin-bottom: 10px;
        }

        .build-date {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.6);
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


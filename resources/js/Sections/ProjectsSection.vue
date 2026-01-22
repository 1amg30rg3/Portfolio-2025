<script setup>
import CRM from '../../assets/CRM.jpg';
import stratifySolutioins from '../../assets/stratifySolutions.png';
import webSavvys from '../../assets/webSavvys.png';
import CMG from '../../assets/cmg.png';
import Drive from '../../assets/drive.png';
import Safe from '../../assets/safe.png';

const projects = [
    {
        image: CRM,
        title: 'CRM',
        description: 'Streamline operations with our Control Panel Management Application, empowering your team with insights for better efficiency and performance.'
    },
    {
        image: stratifySolutioins,
        title: 'Stratify Solutions',
        link: 'https://darkslategray-eel-637705.hostingersite.com/',
        description: 'Stratify Solutions delivers tailored business strategies, ensuring success through expert collaboration.'
    },
    {
        image: webSavvys,
        title: 'WebSavvys',
        link: 'https://www.websavvys.com/',
        description: 'WebSavvys designs websites, apps, and digital experiences that drive client growth and innovation through collaboration.'
    },
    {
        image: CMG,
        title: 'Compare My Garage',
        description: 'Compare My Garage helps you find reliable vehicle specialists transparently and quickly, eliminating the frustration of incompetent or overpriced services.'
    },
    {
        image: Drive,
        title: 'Secure File Share Server',
        link: 'https://drive.ggavasheli.com/',
        description: 'Secure File Share Server with password encryption, allowing users to share files via email links. Ensure safe, convenient access to files while protecting sensitive information.'
    },
    {
        image: Safe,
        title: 'Password Generator',
        link: 'https://safe.ggavasheli.com/',
        description: 'Generate strong passwords effortlessly with our secure password generator. Enhance online security with unique, random, and resilient passwords.'
    }
];
</script>

<style lang="scss" scoped> @use "../../scss/sections/projects.scss" as *; </style>

<template>
    <section class="projects" id="projects">
        <div class="container">
            <h2 class="title">PR<span>O</span>JECTS</h2>
            <p class="subtitle">Showcasing my work and creative solutions</p>

            <hr>

            <div class="projects-list">
                <div class="project" v-for="(project, index) in projects" :key="index">
                    <div class="image-wrapper">
                        <a :href="project.link" target="_blank" rel="noopener noreferrer">
                            <img :src="project.image" :alt="project.title" />
                            <div class="overlay">
                                <h3>{{ project.title }}</h3>
                                <p>{{ project.description }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

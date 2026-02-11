<script setup>
import { ref, provide, onMounted, onBeforeUnmount, nextTick } from 'vue';
import Navigation from '@/Components/Navigation.vue';
import Toast from '@/Components/Toast.vue';
import CoverSection from '@/Sections/CoverSection.vue';
import FrontSection from '@/Sections/FrontSection.vue';
import BackSection from '@/Sections/BackSection.vue';
import AboutMeSection from '@/Sections/AboutMeSection.vue';
import ProjectsSection from '@/Sections/ProjectsSection.vue';
import ContactSection from '@/Sections/ContactSection.vue';
import AboutAppSection from '@/Sections/AboutAppSection.vue';

const toastRef = ref(null);
const circles = ref([]);

const generateCircles = () => {
    const numCircles = 200;
    const pageWidth = document.documentElement.clientWidth;
    const pageHeight = document.documentElement.scrollHeight;

    circles.value = Array.from({ length: numCircles }, () => ({
        top: `${Math.random() * pageHeight}px`,
        left: `${Math.random() * pageWidth}px`,
        '--dx': `${(Math.random() - 0.5) * 300}px`,
        '--dy': `${(Math.random() - 0.5) * 300}px`,
        animationDuration: `${15 + Math.random() * 20}s`,
        animationDelay: `${Math.random() * 20}s`,
    }));
};

const handleResize = () => {
    generateCircles();
};

provide('toast', {
    success: (message) => toastRef.value?.show(message, 'success'),
    error: (message) => toastRef.value?.show(message, 'error'),
});

onMounted(() => {
    nextTick(() => {
        generateCircles();
        window.addEventListener('resize', handleResize);
    });
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', handleResize);
});
</script>

<template>
    <Teleport to="#app">
        <div class="circle-layer" aria-hidden="true">
            <div
                v-for="(style, index) in circles"
                :key="index"
                class="circle"
                :style="style"
            />
        </div>
    </Teleport>
    <Navigation />
    <Toast ref="toastRef" />
    <CoverSection />
    <AboutMeSection />
    <BackSection />
    <FrontSection />
    <ProjectsSection />
    <ContactSection />
    <AboutAppSection />
</template>

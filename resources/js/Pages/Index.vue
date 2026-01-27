<script setup>
import { ref, provide } from 'vue';
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

provide('toast', {
    success: (message) => toastRef.value?.show(message, 'success'),
    error: (message) => toastRef.value?.show(message, 'error'),
});
</script>

<template>
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

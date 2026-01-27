<script setup>
import { computed } from 'vue';

const props = defineProps({
    label: {
        type: String,
        required: true
    },
    processing: {
        type: [Boolean, Object],
        default: false
    },
    icon: {
        type: String,
        default: 'arrow-right'
    }
})

const isProcessing = computed(() => {
    return typeof props.processing === 'boolean'
        ? props.processing
        : props.processing?.status || false;
});

const processingLabel = computed(() => {
    if (typeof props.processing === 'object' && props.processing?.label) {
        return props.processing.label;
    }
    return 'Sending';
});
</script>

<style lang="scss" scoped>
    @use "../../scss/components/button.scss" as *;
</style>

<template>
    <button class="my-button" :disabled="isProcessing">
        {{ isProcessing ? processingLabel : label }}
        <i v-if="!isProcessing" :class="`fa-solid fa-${icon}`"></i>
        <span v-if="isProcessing" class="spinner"></span>
        <span :class="['btn-background', { 'processing': isProcessing }]"></span>
    </button>
</template>

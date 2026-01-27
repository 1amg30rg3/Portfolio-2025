<template>
    <div class="toast-wrapper">
        <div class="toast-container">
            <transition-group name="toast">
                <div v-for="toast in toasts" :key="toast.id" :class="['toast', `toast--${toast.type}`]">
                    <i :class="`fa-solid ${toast.type === 'success' ? 'fa-check' : 'fa-xmark'}`"></i>
                    <span class="toast__message">{{ toast.message }}</span>
                    <button class="toast__close" @click="removeToast(toast.id)">
                        <i class="fa-solid fa-times"></i>
                    </button>
                    <div class="toast__progress" :style="{ animationDuration: `${toast.duration}ms` }"></div>
                </div>
            </transition-group>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const toasts = ref([]);
let id = 0;

const show = (message, type = 'success', duration = 4000) => {
    const toast = { id: id++, message, type, duration };
    toasts.value.push(toast);

    setTimeout(() => {
        removeToast(toast.id);
    }, duration);
};

const removeToast = (toastId) => {
    toasts.value = toasts.value.filter(t => t.id !== toastId);
};

defineExpose({ show });
</script>

<style lang="scss" scoped>
.toast-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    pointer-events: none;
}

.toast-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 10px;
    padding-top: 80px;

    @media (max-width: 768px) {
        padding: 80px 15px 0;
    }
}

.toast {
    position: relative;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    backdrop-filter: blur(10px);
    font-family: 'Montserrat', sans-serif;
    min-width: 300px;
    overflow: hidden;
    pointer-events: auto;

    &--success {
        background: linear-gradient(135deg, #0099ff 0%, #0066aa 100%);
        color: white;
    }

    &--error {
        background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
        color: white;
    }

    i {
        font-size: 18px;
    }

    &__message {
        font-weight: 500;
        flex: 1;
    }

    &__close {
        background: none;
        border: none;
        color: white;
        cursor: pointer;
        padding: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0.7;
        transition: opacity 0.2s ease, transform 0.2s ease;

        &:hover {
            opacity: 1;
            transform: scale(1.1);
        }

        i {
            font-size: 14px;
        }
    }

    &__progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        width: 100%;
        background: rgba(255, 255, 255, 0.7);
        animation: progress linear forwards;
        transform-origin: left;
    }
}

@keyframes progress {
    from {
        transform: scaleX(1);
    }
    to {
        transform: scaleX(0);
    }
}

.toast-enter-active,
.toast-leave-active {
    transition: all 0.3s ease;
}

.toast-enter-from {
    opacity: 0;
    transform: translateX(100%);
}

.toast-leave-to {
    opacity: 0;
    transform: translateX(100%);
}
</style>

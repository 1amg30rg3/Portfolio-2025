<template>
    <div class="cover-section">
        <div class="cover-content">
            <div class="grid-2-columns">
                <div class="column">
                    <h3>George</h3>
                    <h3>Gavasheli</h3>
                    <div class="line-between"></div>
                    <h3>Software</h3>
                    <h3>Engineer</h3>
                </div>
                <div class="column">
                    <img class="cover-image" :src="me" alt="">
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import me from '../../assets/me.jpeg';
</script>

<style>
    .cover-section {
        height: 100vh;
        min-height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .grid-2-columns{
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 100px;
        align-items: center;
        justify-content: center;
    }

    .cover-image{
        height: 300px;
        border-radius: 50%;
        aspect-ratio: 1 / 1 !important;
        width: auto !important;
        border: 2px solid var(--secondary-color);
        padding: 4px;
        object-fit: cover;
        transition: .5s transform;
    }

    .cover-content h3{
        font-size: 68px;
        font-weight: 900;
        margin: 0;
    }

    .line-between{
        position: relative;
        height: 1px;
        width: 100%;
        background-color: var(--secondary-color);
        margin: 20px 0;
    }
    .line-between::before{
        content: '';
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 10px;
        width: 10px;
        border-radius: 50%;
        margin: 0 auto;
        animation: floatPulse 3s ease-in-out infinite;
        background-color: var(--primary-color);
    }

</style>

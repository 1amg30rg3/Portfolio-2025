<script setup>
    import ButtonComponent from '../Components/ButtonComponent.vue';
    import smoothScroll from '../Utils/scroll.js';
    import cvFile from '../../assets/Giorgi_Gavasheli_CV.pdf';
    import myPicture from '../../assets/Giorgi_Gavasheli_CV.pdf';
</script>


<style lang="scss" scoped>
    @use "../../scss/sections/cover.scss" as *;
</style>

<template>
    <div class="container">
        <div class="cover-section" id="home">
            <div class="cover-content">
                <div class="grid-2-columns">
                    <div class="column">
                        <h3>George</h3>
                        <h3>Gavasheli</h3>
                        <hr class="small">
                        <h3>Software</h3>
                        <h3>Engineer</h3>

                        <div class="buttons">
                            <ButtonComponent label="Contact Me" @click="smoothScroll('#contact')"/>

                            <a :href="cvFile" target="_blank" rel="noopener">
                                <ButtonComponent label="Open CV"/>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <img class="cover-image" src="../../assets/me.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

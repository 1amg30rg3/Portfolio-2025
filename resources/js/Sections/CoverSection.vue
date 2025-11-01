<script setup>
    import ButtonComponent from '../Components/ButtonComponent.vue';
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
                        <div class="line-between"></div>
                        <h3>Software</h3>
                        <h3>Engineer</h3>

                        <div class="buttons">
                            <ButtonComponent label="Message Me"/>
                            <ButtonComponent label="Open CV"/>
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

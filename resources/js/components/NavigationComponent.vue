<template>
    <nav class="navbar has-shadow is-light" style="font-family: 'Comfortaa', cursive;">
        <div class="navbar-brand">
            <a class="navbar-item" href="/home">mealspring</a>
            <a class="navbar-burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="navbar-menu" id="nav-links">
            <div class="navbar-end">
                <a class="navbar-item" href="/home">Home</a>

                <a class="navbar-item" href="register">Register</a>

            </div>

        
        </div>
    </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
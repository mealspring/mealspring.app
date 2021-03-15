<template>
   <form class="container p-3" action="#" @submit.prevent="handleLogin">
        <div class="field">
            <label class="label" for="email">Email Address</label>
            <div class="control has-icons-left">
                
              <input class = "input is-primary" 
                id = "email"
                v-model="formData.email"
                type="email" 
                placeholder="Email input" 
                name="email" 
                value="" 
                required autocomplete="email">
                <span class="icon is-small is-left" >
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
        </div>


        <div class="field">
            <label class="label" for="password">Password</label>

            <div class="control has-icons-left">
                <input id="password" 
                    type="password" 
                    v-model="formData.password"
                    placeholder="Password" 
                    class="input is-primary" 
                    name="password" 
                    required autocomplete="current-password">
                    <span class="icon is-small is-left" >
                        <i class="fa fa-lock fa-lg"></i>
                    </span>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input class="form-check-input" type="checkbox" name="remember" v-model="formData.remember" id="remember">

                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">
                    Login
                </button>

                
                <div class="field">
                    <br>
                    <div class="control">
                        <a class="btn btn-link" href="/password.request">
                          Forgot Your Password?
                        </a>
                    </div>
                </div>    
            </div>
        </div>

    </form>
</template>

<script>
    import axios from 'axios'
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data: function(){
            return {
                formData: {
                    email : '',
                    password: '',
                    remember: ''
                }
            }
        },

        methods: {
            handleLogin() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/login', this.formData).then(response=>{
                        this.getRecipes()
                    }).catch(function (error) {
                        console.log(error);
                     })
                });
            },
            getRecipes(){
                axios.get('api/recipes').then(response => {
                    console.log(response);
                })
            }
        }
    }
</script>

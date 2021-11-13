<template>
    <div class="container">
        <!-- login form -->
        <div class="row mt-4" v-if="!secrets.length">
            <div class="col-6 offset-3">
                <form action='#' @submit.prevent="handleLogin">
                    <h3>Sign in for secrets</h3>
                    <div class="form-row">
                        <input type="email" name="email" v-model="formData.email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" v-model="formData.password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- secret list -->
        <div class="row mt-4" v-if="secrets.length">
            <div class="col-6 offset-3"></div>
            <h3>My secrets</h3>
            <button class="btn btn-primary" @click="getSecrets()">Generate secret</button>
            <div class="secret" v-for="(secret, index) in secrets" :key="index">
                <em v-text="secret.created_at"></em><br>
                <strong v-text="secret.secret"></strong>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                secrets: [],
                formData: {
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            handleLogin() {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/login', this.formData).then(response => {
                        console.log(response);
                        this.getSecrets();
                    })
                });
            },
            getSecrets() {
                axios.get('/api/secrets').then(response => {
                    console.log(response);
                    this.secrets = response.data;
                });
            }
        }
    }
</script>

<style>
    .form-row {
        margin-bottom: 5px;
    }
</style>
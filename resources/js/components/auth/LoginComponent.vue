<template>
    <!--begin::Login-->
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Content-->
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <!--begin::Wrapper-->
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <!--begin::Logo-->
                <a href="#" class="login-logo pb-xl-20 pb-15">
                    <img src="images/logo.png" class="max-h-70px" alt=""/>
                </a>
                <!--end::Logo-->

                <!--begin::Signin-->
                <div class="login-form">
                    <!--begin::Form-->
                    <form class="form" action='#' @submit.prevent="handleLogin">
                        <!--begin::Title-->
                        <div class="pb-5 pb-lg-15">
                            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                            <div class="text-muted font-weight-bold font-size-h4">
                                New Here?
                                <!-- <router-link
                                  class="nav-link text-primary font-weight-bolder"
                                  data-toggle="collapse"
                                  :to="{ name: 'register' }"
                                >
                                  Create Account
                                </router-link> -->
                                <a href="./register" class="text-primary font-weight-bolder">Create Account</a>
                            </div>
                        </div>
                        <!--begin::Title-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                            <input v-model="formData.email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text" name="username" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Password</label>

                                <a href="custom/pages/login/login-4/forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">
                                    Forgot Password ?
                                </a>
                            </div>
                            <input v-model="formData.password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->

                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">
                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                            
                        </div>
                        <!--end::Action-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Signin-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--begin::Content-->

    <!--begin::Aside-->
    <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
        <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url(demo13/dist/assets/media/svg/illustrations/login-visual-4.svg);">
            <!--begin::Aside title-->
            <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">
                Affiliate<br/>
                Program<br/>
                For You
            </h3>
            <!--end::Aside title-->
        </div>
    </div>
    <!--end::Aside-->
</div>
<!--end::Login-->
</template>

<script>
    import { mapActions } from 'vuex';
    export default {
        name: "login",
        data() {
            return {
                secrets: [],
                formData: {
                    email: '',
                    password: ''
                },
                processing: false
            }
        },
        methods: {
            ...mapActions({
                signIn: 'auth/login'
            }),
            async handleLogin(){
                this.processing = true
                await axios.get('/sanctum/csrf-cookie')
                await axios.post('/login', this.formData).then(({data})=>{
                    this.signIn()
                }).catch(({response:{data}})=>{
                    alert(data.message)
                }).finally(()=>{
                    this.processing = false
                })
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
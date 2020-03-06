<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wm-modallogin-form wm-login-popup">
                    <span class="wm-color">Login to Your Account</span>
                    <form>
                        <ul>
                            <li>
                                <input
                                    type="text"
                                    value="Your Username"
                                    onblur="if(this.value == '') { this.value ='Your Username'; }"
                                    onfocus="if(this.value =='Your Username') { this.value = ''; }"
                                />
                            </li>
                            <li>
                                <input
                                    type="password"
                                    value="password"
                                    onblur="if(this.value == '') { this.value ='password'; }"
                                    onfocus="if(this.value =='password') { this.value = ''; }"
                                />
                            </li>
                            <li>
                                <a href="#" class="wm-forgot-btn"
                                    >Forgot Password?</a
                                >
                            </li>
                            <li><input type="submit" value="Sign In" /></li>
                        </ul>
                    </form>

                    <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                </div>
                <div class="wm-modallogin-form wm-register-popup">
                    <span class="wm-color">create Your Account today</span>
                    <form>
                        <ul>
                            <li>
                                <input
                                    type="text"
                                    value="Your Username"
                                    onblur="if(this.value == '') { this.value ='Your Username'; }"
                                    onfocus="if(this.value =='Your Username') { this.value = ''; }"
                                />
                            </li>
                            <li>
                                <input
                                    type="text"
                                    value="Your E-mail"
                                    onblur="if(this.value == '') { this.value ='Your E-mail'; }"
                                    onfocus="if(this.value =='Your E-mail') { this.value = ''; }"
                                />
                            </li>
                            <li>
                                <input
                                    type="password"
                                    value="password"
                                    onblur="if(this.value == '') { this.value ='password'; }"
                                    onfocus="if(this.value =='password') { this.value = ''; }"
                                />
                            </li>
                            <li>
                                <input
                                    type="text"
                                    value="Confirm Password"
                                    onblur="if(this.value == '') { this.value ='Confirm Password'; }"
                                    onfocus="if(this.value =='Confirm Password') { this.value = ''; }"
                                />
                            </li>
                            <li>
                                <input type="submit" value="Create Account" />
                            </li>
                        </ul>
                    </form>

                    <p>Already a member? <a href="#">Sign-in Here!</a></p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
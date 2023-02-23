<?php include "include/header.php"; ?>
<div class="main-body">
    <!-- Start Search Popup  -->
    <div class="edu-search-popup">
        <div class="close-button">
            <button class="close-trigger"><i class="ri-close-line"></i></button>
        </div>
        <div class="inner">
            <form class="search-form" action="#">
                <input type="text" class="eduvibe-search-popup-field" placeholder="Search Here...">
                <button class="submit-button"><i class="icon-search-line"></i></button>
            </form>
        </div>
    </div>
    <!-- End Search Popup  -->
    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">Login & Register</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Login & Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="assets/images/shapes/shape-11-07.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="assets/images/shapes/shape-01-02.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="assets/images/shapes/shape-03.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="assets/images/shapes/shape-13-12.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-5">
                        <img src="assets/images/shapes/shape-36.png" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-6">
                        <img src="assets/images/shapes/shape-05-07.png" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-register-page-wrapper edu-section-gap bg-color-white">
        <div class="container checkout-page-style">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="login-form-box">
                        <h3 class="mb-30">Login</h3>
                        <form class="login-form" action="#">
                            <div class="input-box mb--30">
                                <input type="text" placeholder="Username or Email" />
                            </div>
                            <div class="input-box mb--30">
                                <input type="password" placeholder="Password" />
                            </div>
                            <div class="comment-form-consent input-box mb--30">
                                <input id="checkbox-1" type="checkbox" />
                                <label for="checkbox-1">Remember Me</label>
                            </div>
                            <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                <span>Login</span>
                            </button>
                            <div class="input-box">
                                <a href="#" class="lost-password">Lost your password?</a>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form-box">
                        <h3 class="mb-30">Register</h3>
                        <div class="button-area mb--30">
                            <button type="button" class="btn btn-success mb-30 btn-teacher">Join as teacher</button>
                            <button type="button" class="btn btn-info mb-30 btn-student d-none">Join as student</button>
                        </div>



                        <div class="form-teacher d-none">
                            <h6>this Form is for Teacher</h6>
                            <form class="login-form" action="#">
                                <div class="input-box mb--30">
                                    <input type="text" placeholder="Full Name" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="text" placeholder="Prefered Subject" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="email" placeholder="Email" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" placeholder="Password" />
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Register</span>
                                </button>
                                <div class="input-box">
                                    <input id="checkbox-1" type="checkbox" />
                                    <label for="checkbox-1">I read & agree the terms & conditions.</label>
                                </div>
                            </form>
                        </div>
                        <div class="form-student">
                            <h6>this Form is for student</h6>
                            <form class="login-form" action="#">
                                <div class="input-box mb--30">
                                    <input type="text" placeholder="Full Name" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="email" placeholder="Email" />
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" placeholder="Password" />
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Register</span>
                                </button>
                                <div class="input-box">
                                    <input id="checkbox-2" type="checkbox" />
                                    <label for="checkbox-2">I read & agree the terms & conditions.</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/footer.php"; ?>
<nav class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
        <a href="tel:+84-913-123-445" class="d-lg-none d-phone-none btn d-flex justify-content-center align-items-center sm-nav-btn rounded-circle navbar-icon-collapse m-0" type="button">
            <i class="bi bi-telephone-fill text-light h6 d-flex justify-content-center align-content-center m-0"></i>
        </a>

        <a class="navbar-brand sm-m-0 fw-semibold py-0 d-flex align-items-center" href="index.php">
            <img class="px-2 user-select-none" src="./public/img/logo.png" alt="Logo" height="50">
            <h3 class="h4 my-0 text-light user-select-none">AMBATU<span class="logo-title">EAT</span></h3>
        </a>

        <button class="btn sm-nav-btn navbar-toggler rounded-circle" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" onclick="this.blur()">
            <i class="bi bi-list text-light h4 d-flex justify-content-center align-content-center m-0"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between phone-vh-100 hide-scroll-bar" id="navbar-menu">
            <button id="navbar-close" class="btn mt-5 mb-3 rounded-circle p-2 bg-orange hover-child-orange d-lg-none ms-4 ms-lg-0" style="width: 42px; height: 42px;" onclick="this.blur()">
                <i class="bi bi-x-lg text-light d-flex justify-content-center align-items-center m-0"></i>
            </button>

            <ul class="navbar-nav mb-0">
                <li class="nav-item py-2 py-lg-3 ms-4 ms-lg-0">
                    <a class="nav-link text-light fw-semibold user-select-none" href="index.php?control=about">ABOUT</a>
                </li>
                <li class="dropdown position-static py-2 py-lg-3 mx-lg-0">
                    <!-- Large Device -->
                    <a class="nav-link py-2 text-light d-lg-block d-none dropdown-toggle fw-semibold user-select-none" data-toggle="dropdown" href="index.php?control=shop&id=1">
                        SHOP
                    </a>
                    <ul class="sm-d-none z-minus container w-100 d-flex justify-content-between position-absolute mt-3" style="left: 0; right: 0;">
                        <li class="dropdown-menu rounded-top-0 d-flex justify-content-evenly align-items-center rounded-bottom-3 mt-0 w-100" style="left: 0; right: 0;">
                            <ul class="col-3 mb-2 px-0">
                                <li class="list-unstyled"><a class="dropdown-item fw-bold h5 my-2 user-select-none" href="#">Menu One</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item One</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item Two</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item Three</a></li>
                            </ul>
                            <div class="vr d-flex align-self-center" style="height: 100px;"></div>
                            <ul class="col-3 mb-2 px-0">
                                <li class="list-unstyled"><a class="dropdown-item fw-bold h5 my-2 user-select-none" href="#">Menu Two</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item One</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item Two</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item Three</a></li>
                            </ul>
                            <div class="vr d-flex align-self-center" style="height: 100px;"></div>
                            <ul class="col-3 mb-2 px-0">
                                <li class="list-unstyled"><a class="dropdown-item fw-bold h5 my-2 user-select-none" href="#">Menu Three</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item One</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item Two</a></li>
                                <li class="list-unstyled"><a class="dropdown-item user-select-none" href="#">Item Three</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Small Device -->
                    <div class="d-flex justify-content-between align-items-center mx-4 d-lg-none">
                        <a class="w-100 nav-link py-2 text-light fw-semibold user-select-none" data-toggle="dropdown" href="index.php?control=shop&id=1">
                            SHOP
                        </a>
                        <span id="menu-btn" role="button" class="btn h-75 d-flex justify-content-center align-items-center py-2 px-2 rounded-1 bg-orange text-dark hover-orange hover-child-orange">
                            <i class="bi bi-chevron-down d-flex justify-content-center align-items-center text-light"></i>
                        </span>
                    </div>
                    <div class="custom-menu">
                        <div class="dropdown-menu d-flex flex-column bg-black pb-0">
                            <hr class="hr d-lg-none border-light my-0 mt-2">
                            <div class="d-flex flex-column py-0 my-3 bg-black mx-4 d-lg-none">
                                <div>
                                    <a class="dropdown-item fw-bold h5 pt-3 m-0 user-select-none text-light hover-orange bg-hover-black" href="#" onclick="this.blur()">Menu One</a>
                                    <div class="mx-5">
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item One</a>
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item Two</a>
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item Three</a>
                                    </div>
                                </div>
                                <hr class="hr d-lg-none border-light my-3">
                                <div>
                                    <a class="dropdown-item fw-bold h5 pt-3 m-0 user-select-none text-light hover-orange bg-hover-black" href="#" onclick="this.blur()">Menu Two</a>
                                    <div class="mx-5">
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item One</a>
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item Two</a>
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item Three</a>
                                    </div>
                                </div>
                                <hr class="hr d-lg-none border-light my-3">
                                <div>
                                    <a class="dropdown-item fw-bold h5 pt-3 m-0 user-select-none text-light hover-orange bg-hover-black" href="#" onclick="this.blur()">Menu Three</a>
                                    <div class="mx-5">
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item One</a>
                                        <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item Two</a>
                                        <a class="dropdown-item user-select-none text-light py-3 m-0 hover-orange bg-hover-black" href="#" onclick="this.blur()">Item Three</a>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr d-lg-none border-light my-0">
                        </div>
                    </div>
                </li>
                <li class="dropdown position-static py-2 py-lg-3 mx-0 mb-2 mb-lg-0">
                    <!-- Large Device -->
                    <a class="nav-link py-2 text-light d-lg-block d-none dropdown-toggle fw-semibold user-select-none" data-toggle="dropdown" href="index.php?control=blog&id=1">
                        PAGE
                    </a>
                    <ul class="dropdown-menu rounded-top-0 rounded-bottom-3 mt-3 sm-d-none">
                        <li><a class="dropdown-item user-select-none" href="index.php?control=blog&id=2">Blog</a></li>
                        <li><a class="dropdown-item user-select-none" href="index.php?control=blog&id=3">Faq</a></li>
                    </ul>

                    <!-- Small Device -->
                    <div class="d-flex justify-content-between align-items-center d-lg-none mx-4">
                        <a class="w-100 nav-link py-2 text-light fw-semibold user-select-none" data-toggle="dropdown" href="index.php?control=blog&id=1">
                            PAGE
                        </a>
                        <span id="menu-btn" role="button" class="btn h-75 d-flex justify-content-center align-items-center py-2 px-2 rounded-1 bg-orange text-dark hover-orange hover-child-orange">
                            <i class="bi bi-chevron-down d-flex justify-content-center align-items-center text-light"></i>
                        </span>
                    </div>
                    <div class="custom-menu">
                        <div class="dropdown-menu d-flex flex-column bg-black pb-0 mt-2">
                            <hr class="hr d-lg-none border-light my-0">
                            <div class="d-flex flex-column py-0 mt-3 bg-black mx-4 d-lg-none">
                                <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=2" onclick="this.blur()">Blog</a>
                                <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=3" onclick="this.blur()">Faq</a>
                            </div>
                        </div>
                    </div>
                </li>
                <hr class="hr d-lg-none border-light m-0">
                <li class="nav-item py-2 py-lg-3 ms-4 ms-lg-0 mt-2 mt-lg-0">
                    <a class="nav-link text-light fw-semibold user-select-none" href="index.php?control=contact">CONTACT</a>
                </li>
            </ul>

            <ul class="navbar-nav flex-row">
                <div class="d-flex flex-column d-lg-none w-100">
                    <div class="w-100 d-flex ms-3 mb-3">
                        <li class="nav-item pb-3 pt-1 px-2">
                            <a href="#" class="btn sm-nav-btn rounded-5 bg-orange d-flex hover-child-orange justify-content-center align-content-center">
                                <i class="bi bi-facebook d-flex justify-content-center align-items-center text-light h5 m-0 hover-orange"></i>
                            </a>
                        </li>
                        <li class="nav-item pb-3 pt-1 px-2">
                            <a href="#" class="btn sm-nav-btn rounded-5 bg-orange d-flex hover-child-orange justify-content-center align-content-center">
                                <i class="bi bi-twitter-x d-flex justify-content-center align-items-center text-light h5 m-0 hover-orange"></i>
                            </a>
                        </li>
                        <li class="nav-item pb-3 pt-1 px-2">
                            <a href="#" class="btn sm-nav-btn rounded-5 bg-orange d-flex hover-child-orange justify-content-center align-content-center">
                                <i class="bi bi-instagram d-flex justify-content-center align-items-center text-light h5 m-0 hover-orange"></i>
                            </a>
                        </li>
                    </div>
                    <hr class="hr d-lg-none border-light m-0 mb-3">
                    <div class="input-group mx-auto my-3 d-flex align-items-center subscribe-form w-75">
                        <input type="text" class="user-select-none form-control bg-less-black text-white-gray rounded-start-5 border-end-0 h-auto px-3" placeholder="Search" style="border: 1px solid gray">
                        <button class="btn text-light h6 bg-orange m-0 rounded-end-5" type="button">
                            <i class="bi bi-search d-flex justify-content-center align-items-center pe-2 pb-1"></i>
                        </button>
                    </div>
                    <hr class="hr d-lg-none border-light m-0 my-3">
                    <li class="dropdown position-static py-2 py-lg-3 mx-0 mb-2 mb-lg-0">
                        <div class="d-flex justify-content-between align-items-center d-lg-none mx-4">
                            <a class="w-100 nav-link py-2 text-light fw-semibold user-select-none d-flex align-items-center" data-toggle="dropdown">
                                <img class="object-fit-cover rounded-circle me-3" width="40px" height="40px" src="./public/img/chef.jpg" alt="User Image">
                                <span class="text-light fs-5 me-3">
                                    <?php
                                        echo $_SESSION['name'];
                                    ?>
                                </span>
                            </a>
                            <span id="menu-btn" role="button" class="btn h-75 d-flex justify-content-center align-items-center py-2 px-2 rounded-1 bg-orange text-dark hover-orange hover-child-orange">
                                <i class="bi bi-chevron-down d-flex justify-content-center align-items-center text-light"></i>
                            </span>
                        </div>
                        <div class="custom-menu">
                            <div class="dropdown-menu d-flex flex-column bg-black pb-0 mt-2">
                                <hr class="hr d-lg-none border-light my-0">
                                <div class="d-flex flex-column py-0 my-3 bg-black mx-4 d-lg-none">
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=2" onclick="this.blur()">Switch account</a>
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=3" onclick="this.blur()">Sign out</a>
                                </div>
                                <hr class="hr text-light my-0">
                                <div class="d-flex flex-column py-0 my-3 bg-black mx-4 d-lg-none">
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=2" onclick="this.blur()">Memberships</a>
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=3" onclick="this.blur()">Become a distributor</a>
                                </div>
                                <hr class="hr text-light my-0">
                                <div class="d-flex flex-column py-0 my-3 bg-black mx-4 d-lg-none">
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=2" onclick="this.blur()">Purchases</a>
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=3" onclick="this.blur()">Appearance: Device theme</a>
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=3" onclick="this.blur()">Language: English</a>
                                </div>
                                <hr class="hr text-light my-0">
                                <div class="d-flex flex-column py-0 my-3 bg-black mx-4 d-lg-none">
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=2" onclick="this.blur()">Settings</a>
                                </div>
                                <hr class="hr text-light my-0">
                                <div class="d-flex flex-column py-0 my-3 bg-black mx-4 d-lg-none">
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=2" onclick="this.blur()">Help</a>
                                    <a class="dropdown-item user-select-none text-light py-2 m-0 hover-orange bg-hover-black" href="index.php?control=blog&id=3" onclick="this.blur()">Send feedback</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>

                <li class="nav-item py-3 px-2 sm-d-none">
                    <button type="button" class="btn rounded-5 border-opacity-25 border-light nav-btn">
                        <i class="bi bi-search text-light"></i>
                    </button>
                </li>

                <li class="nav-item py-3 px-2 sm-d-none position-relative">
                    <button type="button" class="p-0 btn rounded-5 border-opacity-25 border-light nav-btn" id="navbar-dropdown">
                        <img class="w-100 h-100 object-fit-cover rounded-circle" src="./public/img/chef.jpg" alt="User Image">
                    </button>
                    <div class="d-none font-child-nice flex-column rounded-4 bg-dark position-absolute top-100 end-0 py-1 z-3" style="width: 300px">
                        <div class="d-flex p-3">
                            <div class="d-flex align-items-start pe-3">
                                <img class="rounded-circle object-fit-cover" src="./public/img/chef.jpg" alt="User Image" style="width: 40px; height: 40px">
                            </div>
                            <div class="d-flex flex-column justify-content-start">
                                <span class="text-light fs-6">
                                    <?php
                                        echo $_SESSION['name'];
                                    ?>
                                </span>
                                <span class="text-light fs-6">
                                    <?php
                                        echo $_SESSION['phone_number'];
                                    ?>
                                </span>
                            </div>
                        </div>
                        <hr class="hr my-0 text-light">
                        <div class="d-flex w-100 py-2 flex-column">
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-person-square d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Switch account</span>
                                </div>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <form class="d-none" id="signout-frm" method="post"></form>
                            <button name="signout-btn" type="submit" class="border-0 bg-dark px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray" form="signout-frm">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-box-arrow-right d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Sign out</span>
                                </div>
                            </button>
                        </div>
                        <hr class="hr my-0 text-light">
                        <div class="d-flex w-100 py-2 flex-column">
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-coin d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Memberships</span>
                                </div>
                            </a>
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-person-up d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Become a distributor</span>
                                </div>
                            </a>
                        </div>
                        <hr class="hr my-0 text-light">
                        <div class="d-flex w-100 py-2 flex-column">
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-cash-coin d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Purchases</span>
                                </div>
                            </a>
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-moon d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Appearance: Device theme</span>
                                </div>
                            </a>
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-translate d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Language: English</span>
                                </div>
                            </a>
                        </div>
                        <hr class="hr my-0 text-light">
                        <div class="d-flex w-100 py-2 flex-column">
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-gear d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Settings</span>
                                </div>
                            </a>
                        </div>
                        <hr class="hr my-0 text-light">
                        <div class="d-flex w-100 py-2 flex-column">
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-question-circle d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Help</span>
                                </div>
                            </a>
                            <a href="#" class="px-3 py-2 d-flex justify-content-between w-100 text-decoration-none text-light bg-hover-dark-gray">
                                <div class="d-flex justify-content-center">
                                    <i class="fs-5 bi bi-exclamation-square d-flex justify-content-center align-items-center pe-3"></i>
                                    <span>Send feedback</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
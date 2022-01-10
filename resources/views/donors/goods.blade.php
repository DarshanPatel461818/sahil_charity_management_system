<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <title>Charity</title>
</head>

<body>
    
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> +1 (454) 556-5656</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>Yourmail@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                {{-- <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a> --}}
                                {{-- Login-to-dashboard --}}
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 sm:block">
                                    @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm mt-4 btn bg-green-400 btn-sm">Log
                                        in</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="text-sm ml-3 mt-4 btn btn-info btn-sm">Register</a>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="About.html">Blog</a></li>
                                        <li><a href="#">Donations<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a class="dropdown-item" href="{{url('food')}}">Food Donation</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{url('blood')}}">Blood Donation</a>
                                                </li>
                                                <li><a class="dropdown-item" href="{{url('medicine')}}">Medicine
                                                        Donation</a></li>
                                                <li><a class="dropdown-item" href="{{url('clothing')}}">Cloth
                                                        Donation</a></li>
                                                <li><a class="dropdown-item" href="{{url('financial')}}">Financial
                                                        Donation</a></li>
                                                <li><a class="dropdown-item" href="{{url('goods')}}">Donating Goods</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Charities</a></li>
                                        <li><a href="#">Auction</a></li>
                                        {{-- <li><a href="#">Donate</a></li> --}}
                                        <li><a href="#">Project</a></li>
                                        <li><a href="#">About</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Make a Donate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- image slideer --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="img/goods.jpg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-5 p-5">
            <div class="col-md-6 ">
                <h1 class="text-size">Donate Goods</h1>
                <p class="fw-light fs-5">
                    Most charities can only make use of items that are new, unused, or nearly new. If you don't have any use for your old, tattered couch, rusty washing machine, or other used item, chances are neither will a charity. Similarly, a timeshare that has turned out to be a bad investment for you won't do much to help out a worthy charity. 
                    <br><br>
                    By donating cash instead of goods you allow charities greater flexibility in spending the money so that it reaches the people or animals that need it the most. When you sell the items yourself you also eliminate the for-profit middleman that can take a big cut of the money intended for charity. When you sell the items yourself you also unburden charities of any time and money they would have to spend on selling or refurbishing the items, allowing them to spend more resources directly fulfilling their missions. Finally, by selling the items yourself, you know the exact value of the donation you can report to the IRS and don't have to worry about estimating the amount for your tax returns.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/goods_blog.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <img class="card-img img_opacity" src="{{ asset('img/goods_form.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="row d-flex justify-content-center my-3">
                            <div class="col-sm-3 fw-light fs-5 bg-success border border-success py-3">
                                <h2>Donor Information: </h2>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <form action="" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center">
                                    <div class="col-sm-3">
                                        <input type="text" name="firstName" class="form-control" id="firstName">
                                        <label for="firstName" class="form-label">First Name: </label>
                                </div>
                                <div class="col-sm-3">
                                        <input type="text" name="lastName" class="form-control" id="lastName">
                                        <label for="lastName" class="form-label">Last Name: </label>
                                </div>
                                </div>
                        
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                        <input type="text" name="mobilePhone" class="form-control" id="mobilePhone">
                                        <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" id="email">
                                        <label for="email" class="form-label">E-mail: </label>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                        <input type="text" name="town" class="form-control" id="email">
                                        <label for="town" class="form-label">Town: </label>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3">
                                        <input type="text" name="state" class="form-control" id="email">
                                        <label for="state" class="form-label">State: </label>
                                </div>
                                <div class="col-sm-3">
                                        <input type="text" name="postCode" class="form-control" id="email">
                                        <label for="postCode" class="form-label">Post Code: </label>
                                </div>
                            </div>
                            <br>
                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-sm-3 fw-light fs-5 bg-success border border-success py-3">
                                    <h2>Goods Information: </h2>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 mb-4">
                                    <select class="custom-select form-control" name="item">
                                        <option selected>Select Your Goods Category: </option>
                                        <option value="Convenience Products">Convenience Products</option>
                                        <option value="Shopping Products">Shopping Products</option>
                                        <option value="Speciality">Speciality</option>
                                        <option value="Unsought">Unsought</option>
                                        <option value="Electric Product">Electric Product</option>
                                    
                                    </select>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3">
                                        <input type="text" name="goodsName" class="form-control" id="email">
                                        <label for="town" class="form-label">Goods Name:  </label>
                                </div>
                                <div class="col-sm-3">                    
                                        <input type="text" name="quantity" class="form-control" id="email">
                                        <label for="town" class="form-label">Quantity: </label>                    
                                </div>

                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3">
                                        <input type="text" name="conditions" class="form-control" id="email">
                                        <label for="town" class="form-label">Conditions: </label>                           
                                </div>
                                <div class="col-sm-3">          
                                        <input type="text" name="pickPoin" class="form-control" id="email">
                                        <label for="town" class="form-label">Pick-up Point: </label>

                                </div>

                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                        <textarea name="description" class="form-control" id="description" cols="78" rows="3"></textarea>
                                        <label for="postCode" class="form-label">Any Messages?:  </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center">
                                    <button type="submit"
                                        class="btn btn-success btn-lg btn-block">Donate</button>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/myscript.js')}}"></script>
</body>

</html>

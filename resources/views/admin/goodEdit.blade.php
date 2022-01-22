<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello Admin') }}
        </h2>
    </x-slot>
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

    <div id="wrapper" class="bg-success">

        <!-- Sidebar -->
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- <img class="card-img img_opacity" src="{{ asset('img/goods_form.jpg')}}" alt="Card image"> --}}
                        <div class="">
                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-sm-3 fw-light fs-5 bg-success border border-success py-3">
                                    <h2>Donor Information: </h2>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <form action="/goodEdit" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="firstName" class="form-label">First Name: </label>
                                            <input type="text" name="firstName" value="{{$good->firstName}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last Name: </label>
                                            <input type="text" name="lastName" value="{{$good->lastName}}" class="form-control">
                                    </div>
                                    </div>
                            
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                            <input type="text" name="mobilePhone" value="{{$good->mobilePhone}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="email" class="form-label">E-mail: </label>
                                            <input type="email" name="email" value="{{$good->email}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="town" class="form-label">Town: </label>
                                            <input type="text" name="town" value="{{$good->town}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="state" class="form-label">State: </label>
                                            <input type="text" name="state" value="{{$good->state}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="postCode" class="form-label">Post Code: </label>
                                            <input type="text" name="postCode" value="{{$good->postCode}}" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row d-flex justify-content-center my-3">
                                    <div class="col-sm-6 fw-light fs-5 bg-success border border-success py-3">
                                        <h2>Goods Information: </h2>
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12 mb-4">
                                        <select class="custom-select form-control" name="item">
                                            <option>{{$good->item}}</option>
                                            {{-- <option value="Convenience Products">Convenience Products</option>
                                            <option value="Shopping Products">Shopping Products</option>
                                            <option value="Speciality">Speciality</option>
                                            <option value="Unsought">Unsought</option>
                                            <option value="Electric Product">Electric Product</option> --}}
                                        
                                        </select>
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label">Goods Name:  </label>
                                            <input type="text" name="goodsName" value="{{$good->goodsName}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">                    
                                        <label for="town" class="form-label">Quantity: </label>                    
                                            <input type="text" name="quantity" value="{{$good->quantity}}" class="form-control">
                                    </div>
    
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label">Conditions: </label>                           
                                            <input type="text" name="conditions" value="{{$good->conditions}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">          
                                        <label for="town" class="form-label">Pick-up Point: </label>
                                            <input type="text" name="pickPoin" value="{{$good->pickPoin}}" class="form-control">
    
                                    </div>
    
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="postCode" class="form-label">Any Messages?:  </label>
                                            <textarea name="description" class="form-control" id="description" cols="78" rows="3">{{$good->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row">                       
                                    <div class="col-sm-4">
                                        <div class="mt-5 text-center">
                                            <button class="btn btn-success text-white" type="submit">Approve</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-5 text-center">
                                            <a href="#" class="btn btn-success text-white" type="submit">Reject</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-5 text-center">
                                            <a href="#" class="btn btn-success text-white" type="submit">Back</a>
                                        </div>
                                </div>
                            </div>
                                </form>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->
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
</x-app-layout>

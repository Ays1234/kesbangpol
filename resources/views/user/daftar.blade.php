<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from ableproadmin.com/7.0/default/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Apr 2022 13:57:29 GMT -->

<head>
    <title>{{ $judul }}</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->

    <link rel="icon" href="https://ableproadmin.com/7.0/files/assets/images/favicon.ico" type="image/x-icon" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/admin_tampil/bower_components/bootstrap/css/bootstrap.min.css" />
    <!-- waves.css -->
    <link rel="stylesheet" href="/admin_tampil/assets/pages/waves/css/waves.min.css" type="text/css" media="all" />
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="/admin_tampil/assets/icon/feather/css/feather.css" />
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="/admin_tampil/assets/icon/themify-icons/themify-icons.css" />
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="/admin_tampil/assets/icon/icofont/css/icofont.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/admin_tampil/assets/icon/font-awesome/css/font-awesome.min.css" />
    <!-- Style.css -->
    <link rel="stylesheet" href="/admin_tampil/build/css/intlTelInput.css">
    <link rel="stylesheet" href="/admin_tampil/build/css/demo.css">
    <link rel="stylesheet" type="text/css" href="/admin_tampil/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/admin_tampil/assets/css/pages.css" />
</head>

<body themebg-pattern="theme1">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="{{ route('user.daftar') }}" method="POST">
                        @csrf
                        <div class="text-center">
                            <img src="/admin_tampil/assets/images/logo.png" alt="logo.png" />
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">
                                            Silakan Daftarkan Organisasi anda
                                        </h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        name="username" id="Username" placeholder="" value="{{ old('username') }}" />
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">
                                        Username</label>
                                </div>

                                <div class="form-group form-primary">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" id="Nama" placeholder="" value="{{ old('nama') }}" />
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">
                                        Nama Organisasi</label>
                                </div>

                                <div class="form-group form-primary">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="Email" placeholder="" value="{{ old('email') }}" />
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="Password" placeholder="" /> @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="confirm-password" class="form-control" required="" />
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label
                                                >
                                            </div>
                                        </div> --}}
                                </div>
                                <div class="form-group form-primary">
                                    <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="Nama"
                                        placeholder="" />{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <span class="form-bar"></span>
                                    <label class="float-label">
                                        Alamat kantor Organisasi</label>
                                </div>


                                <div class="form-group form-primary">
                                    <input type="hidden" name="kodehp" id="address-country"
                                        value="{{ old('kodehp') }}">
                                    <input id="phone" type="tel"
                                        class="form-control @error('nohp') is-invalid @enderror" name="nohp"
                                        value="{{ old('nohp') }}" /> @error('nohp')
                                        <div class="invalid-feedback" requried="">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-12">
                                                    <div class="checkbox-fade fade-in-primary">
                                                        <label>
                                                    <input
                                                        type="checkbox"
                                                        value=""
                                                    />
                                                    <span class="cr"
                                                        ><i
                                                            class="cr-icon icofont icofont-ui-check txt-primary"
                                                        ></i
                                                    ></span>
                                                    <span class="text-inverse"
                                                        >I read and accept
                                                        <a href="#"
                                                            >Terms &amp;
                                                            Conditions.</a
                                                        ></span
                                                    >
                                                </label>
                                                    </div>
                                                </div> --}} {{-- <div class="col-md-12">
                                                    <div class="checkbox-fade fade-in-primary">
                                                        <label>
                                                    <input
                                                        type="checkbox"
                                                        value=""
                                                    />
                                                    <span class="cr"
                                                        ><i
                                                            class="cr-icon icofont icofont-ui-check txt-primary"
                                                        ></i
                                                    ></span>
                                                    <span class="text-inverse"
                                                        >Send me the
                                                        <a href="#!"
                                                            >Newsletter</a
                                                        >
                                                        weekly.</span
                                                    >
                                                </label>
                                                    </div>
                                                </div> --}}

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            Daftarkan Sekarang
                                        </button>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-5">
                                        <p class="text-inverse text-left">
                                            <a href="/"><b>Kembali ke halaman
                                                    awal</b></a>
                                        </p>
                                    </div>
                                    <div class="col-md-5">
                                        <p class="text-inverse text-right">
                                            <a href="/login"><b>Login akun sudah ada
                                                    !</b></a>
                                        </p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>
                    You are using an outdated version of Internet Explorer,
                    please upgrade <br />to any of the following web browsers to
                    access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img
                                    src="/admin_tampil/assets/images/browser/chrome.png"
                                    alt="Chrome"
                                />
                                <div>Chrome</div>
                            </a>
                                    </li>
                                    <li>
                                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                                            <img src="/admin_tampil/assets/images/browser/firefox.png" alt="Firefox" />
                                            <div>Firefox</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.opera.com">
                                            <img src="/admin_tampil/assets/images/browser/opera.png" alt="Opera" />
                                            <div>Opera</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.apple.com/safari/">
                                            <img src="/admin_tampil/assets/images/browser/safari.png" alt="Safari" />
                                            <div>Safari</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                            <img src="/admin_tampil/assets/images/browser/ie.png" alt="" />
                                            <div>IE (9 & above)</div>
                                        </a>
                                    </li>
                                    </ul>
                            </div>
                            <p>Sorry for the inconvenience!</p>
                        </div>
                        <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="/admin_tampil/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="/admin_tampil/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/admin_tampil/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="/admin_tampil/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="/admin_tampil/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="/admin_tampil/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="/admin_tampil/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="/admin_tampil/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="/admin_tampil/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="/admin_tampil/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js">
    </script>
    <script type="text/javascript"
        src="/admin_tampil/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="/admin_tampil/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="text/javascript" src="/admin_tampil/assets/js/common-pages.js"></script>
    <script type="text/javascript" src="/admin_tampil/assets/js/analytics.js"></script>
    <script src="/admin_tampil/build/js/intlTelInput.js"></script>
    <script>
        // get the country data from the plugin
        var countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone"),
            addressDropdown = document.querySelector("#address-country");

        // init plugin
        var iti = window.intlTelInput(input, {
            preferredCountries: ['id', 'jp'],
            utilsScript: "../../build/js/utils.js?1638200991544" // just for formatting/placeholders etc
        });

        // populate the country dropdown
        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            var optionNode = document.createElement("option");
            optionNode.value = country.iso2;
            var textNode = document.createTextNode(country.name);
            optionNode.appendChild(textNode);
            addressDropdown.appendChild(optionNode);
        }
        // set it's initial value
        addressDropdown.value = iti.getSelectedCountryData().iso2;

        // listen to the telephone input for changes
        input.addEventListener('countrychange', function(e) {
            addressDropdown.value = iti.getSelectedCountryData().iso2;
        });

        // listen to the address dropdown for changes
        addressDropdown.addEventListener('change', function() {
            iti.setCountry(this.value);
        });

        // var input = document.querySelector("#phone");
        // window.intlTelInput(input, {
        //     allowDropdown: false,
        //     autoHideDialCode: false,
        //     autoPlaceholder: "on",
        //     dropdownContainer: document.body,
        //     excludeCountries: ["id"],
        //     formatOnDisplay: true,
        //     geoIpLookup: function(callback) {
        //         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //             var countryCode = (resp && resp.country) ? resp.country : "";
        //             callback(countryCode);
        //         });
        //     },
        //     hiddenInput: "full_number",
        //     initialCountry: "auto",
        //     localizedCountries: {
        //         'de': 'Deutschland'
        //     },
        //     nationalMode: false,
        //     onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        //     placeholderNumberType: "MOBILE",
        //     preferredCountries: ['id', 'jp'],
        //     separateDialCode: true,

        //     utilsScript: "build/js/utils.js",
        // });
    </script>
</body>

<!-- Mirrored from ableproadmin.com/7.0/default/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Apr 2022 13:57:29 GMT -->

</html>

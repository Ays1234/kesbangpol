@extends('layouts.main_login_admin')
@section('profil')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User Profile</h5>
                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index-2.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">User Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <!--profile cover start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid"
                                            src="../files/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                        <img class="user-img img-radius"
                                                            src="../files/assets/images/user-profile/user-img.jpg"
                                                            alt="user-img">
                                                    </a>
                                                </div>
                                                <div class="media-body row">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile cover end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- tab header start -->
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Edit
                                                Data Admin
                                            </a>
                                            <div class="slide"></div>


                                            <h3 class="text-center">{{ $judul }} Aplikasi</h3>

                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's
                                                Services</a>
                                            <div class="slide"></div>
                                        </li> --}}
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's
                                                Contacts</a>
                                            <div class="slide"></div>
                                        </li> --}}
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#review"
                                                role="tab">Reviews</a>
                                            <div class="slide"></div>
                                        </li> --}}
                                    </ul>
                                </div>

                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" data-bs-dismiss="alert"
                                        role="alert">
                                        {{ session('success') }}</strong>
                                    </div>
                                @endif

                                @if (session()->has('loginError'))
                                    <div class="alert alert-warning x-square">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <i class="icofont" data-feather="x-square"></i>
                                        </button>
                                        <p><strong>{{ session('loginError') }}!</strong>
                                    </div>
                                @endif

                                <!-- tab header end -->
                                <!-- tab content start -->
                                <div class="tab-content">
                                    <!-- tab panel personal start -->
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <!-- personal card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Tentang Saya</h5>
                                                <button id="edit-btn" type="button"
                                                    class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                    <i class="icofont icofont-edit"></i>
                                                </button>



                                            </div>
                                            <div class="card-block">
                                                <div class="view-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">User Name</th>
                                                                                        <td>{{ Auth::guard('admin')->user()->username }}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Email</th>
                                                                                        <td>{{ Auth::guard('admin')->user()->email }}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Nama Lengkap</th>
                                                                                        <td>{{ Auth::guard('admin')->user()->nama }}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Alamat</th>
                                                                                        <td>{{ Auth::guard('admin')->user()->alamat }}
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Nomor Handphone</th>
                                                                                        <td>{{ Auth::guard('admin')->user()->nohp }}
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->

                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of general info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of view-info -->
                                                <div class="edit-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info form-material">
                                                                <div class="row">
                                                                    <div class="col-lg-6 ">
                                                                        <form method="POST"
                                                                            action="{{ route('admin.update.profil') }}">
                                                                            @csrf
                                                                            <input type="hidden" name="profil"
                                                                                value="{{ Auth::guard('admin')->user()->id }}">
                                                                            <div class="material-group">
                                                                                <div class="material-addone">
                                                                                    <i class="icofont icofont-user"></i>
                                                                                </div>
                                                                                <div class="form-group form-primary">
                                                                                    <input type="text" name="nama"
                                                                                        class="form-control" required=""
                                                                                        value="{{ Auth::guard('admin')->user()->nama }}">
                                                                                    <span class="form-bar"></span>
                                                                                    <label class="float-label">Nama
                                                                                        Lengkap
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="material-group">
                                                                                <div class="material-addone">
                                                                                    <i class="icofont icofont-user"></i>
                                                                                </div>
                                                                                <div class="form-group form-primary">
                                                                                    <input type="text" name="username"
                                                                                        class="form-control" required=""
                                                                                        value="{{ Auth::guard('admin')->user()->username }}">
                                                                                    <span class="form-bar"></span>
                                                                                    <label class="float-label">Username
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="material-group">
                                                                                <div class="material-addone">
                                                                                    <i class="icofont icofont-email"></i>
                                                                                </div>
                                                                                <div class="form-group form-primary">
                                                                                    <input type="text" name="email"
                                                                                        class="form-control" required=""
                                                                                        value="{{ Auth::guard('admin')->user()->email }}">
                                                                                    <span class="form-bar"></span>
                                                                                    <label class="float-label">Email
                                                                                    </label>
                                                                                </div>
                                                                            </div>


                                                                            {{-- <div class="material-group">
                                                                            <div class="material-addone">
                                                                                <i class="fa fa-heart"></i>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <select id="hello-single"
                                                                                    class="form-control">
                                                                                    <option value="">---- Marital Status
                                                                                        ----
                                                                                    </option>
                                                                                    <option value="married">Married</option>
                                                                                    <option value="unmarried">Unmarried
                                                                                    </option>
                                                                                </select>
                                                                                <span class="form-bar"></span>

                                                                            </div>
                                                                        </div> --}}


                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        {{-- <div class="material-group">
                                                                            <div class="material-addone">
                                                                                <i class="icofont-ui-password"></i>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <input type="text" name="password"
                                                                                    class="form-control">
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Password
                                                                                </label>
                                                                            </div>
                                                                        </div> --}}

                                                                        <div class="material-group">
                                                                            <div class="material-addone">
                                                                                <i class="icofont icofont-location-pin"></i>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <input type="text" name="alamat"
                                                                                    class="form-control" required=""
                                                                                    value="{{ Auth::guard('admin')->user()->alamat }}">
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Alamat</label>
                                                                            </div>
                                                                        </div>


                                                                        <div class="material-group">
                                                                            <div class="material-addone">
                                                                                <i class="icofont icofont-mobile-phone"></i>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <input type="text" name="nohp"
                                                                                    class="form-control" required=""
                                                                                    value="{{ Auth::guard('admin')->user()->nohp }}">
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Nomor
                                                                                    Handphone
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                                <div class="text-center">
                                                                    <button
                                                                        class="btn btn-primary waves-effect waves-light m-r-20">Simpan
                                                                        Edit
                                                                        Data</button>
                                                                    <a href="#!" id="edit-cancel"
                                                                        class="btn btn-default waves-effect">Cancel</a>
                                                                </div>
                                                            </div>
                                                            <!-- end of edit info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of edit-info -->
                                            </div>
                                            <!-- end of card-block -->
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Description About Me</h5>
                                                        <button id="edit-info-btn" type="button"
                                                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                            <i class="icofont icofont-edit"></i>
                                                        </button>
                                                    </div>
                                                    <div class="card-block user-desc">
                                                        <div class="view-desc">
                                                            <p>But I must explain to you how all this mistaken idea of
                                                                denouncing pleasure and praising pain was born and I will
                                                                give
                                                                you a complete account of the system, and expound the actual
                                                                teachings of the great explorer of the truth, the
                                                                master-builder
                                                                of human happiness. No one rejects, dislikes, or avoids
                                                                pleasure
                                                                itself, because it is pleasure, but because
                                                                those who do not know how to pursue pleasure rationally
                                                                encounter consequences that are extremely painful. Nor again
                                                                is
                                                                there anyone who loves or pursues or desires to obtain
                                                                pain of itself, because it is pain, but because occasionally
                                                                circumstances occur in which toil and pain can procure him
                                                                some
                                                                great pleasure. To take a trivial example, which
                                                                of us ever undertakes laborious physical exercise, except to
                                                                obtain some advantage from it? But who has any right to find
                                                                fault with a man who chooses to enjoy a pleasure
                                                                that has no annoying consequences, or one who avoids a pain
                                                                that
                                                                produces no resultant pleasure?" "On the other hand, we
                                                                denounce
                                                                with righteous indignation and dislike men
                                                                who are so beguiled and demoralized by the charms of
                                                                pleasure of
                                                                the moment, so blinded by desire, that they cannot foresee
                                                                the
                                                                pain and trouble that are bound to ensue; and
                                                                equal blame belongs to those who fail in their duty through
                                                                weakness of will, which is the same as saying through
                                                                shrinking
                                                                from toil and pain. These cases are perfectly simple
                                                                and easy to distinguish. In a free hour, when our power of
                                                                choice is untrammelled and when nothing prevents our being
                                                                able
                                                                To Do what we like best, every pleasure is to be
                                                                welcomed and every pain avoided. But in certain
                                                                circumstances
                                                                and owing to the claims of duty or the obligations of
                                                                business
                                                                it will frequently occur that pleasures have to
                                                                be repudiated and annoyances accepted. The wise man
                                                                therefore
                                                                always holds in these matters to this principle of
                                                                selection: he
                                                                rejects pleasures to secure other greater pleasures,
                                                                or else he endures pains to avoid worse pain.</p>
                                                        </div>
                                                        <div class="edit-desc">
                                                            <div class="col-md-12">
                                                                <textarea id="description">
                                                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>
                                                                                </textarea>
                                                            </div>
                                                            <div class="text-center">
                                                                <a href="#!"
                                                                    class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
                                                                <a href="#!" id="edit-cancel-btn"
                                                                    class="btn btn-default waves-effect m-t-20">Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- personal card end-->
                                    </div>
                                    <!-- tab pane personal end -->
                                    <!-- tab pane info start -->
                                    {{-- <div class="tab-pane" id="binfo" role="tabpanel">
                                        <!-- info card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">User Services</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card b-l-success business-info services m-b-20">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Shivani Hero</h5>
                                                                    </a>
                                                                </div>
                                                                <span
                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" role="tooltip">
                                                                </span>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-ui-delete"></i>
                                                                        Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit
                                                                            amet,
                                                                            consectet ur adipisicing elit, sed do eiusmod
                                                                            temp
                                                                            or incidi dunt ut labore et.Lorem ipsum dolor
                                                                            sit
                                                                            amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-danger business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Dress and Sarees</h5>
                                                                    </a>
                                                                </div>
                                                                <span
                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" role="tooltip">
                                                                </span>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-ui-delete"></i>
                                                                        Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit
                                                                            amet,
                                                                            consectet ur adipisicing elit, sed do eiusmod
                                                                            temp
                                                                            or incidi dunt ut labore et.Lorem ipsum dolor
                                                                            sit
                                                                            amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-info business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Shivani Auto Port</h5>
                                                                    </a>
                                                                </div>
                                                                <span
                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" role="tooltip">
                                                                </span>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-ui-delete"></i>
                                                                        Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit
                                                                            amet,
                                                                            consectet ur adipisicing elit, sed do eiusmod
                                                                            temp
                                                                            or incidi dunt ut labore et.Lorem ipsum dolor
                                                                            sit
                                                                            amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-warning business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Hair stylist</h5>
                                                                    </a>
                                                                </div>
                                                                <span
                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" role="tooltip">
                                                                </span>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-ui-delete"></i>
                                                                        Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit
                                                                            amet,
                                                                            consectet ur adipisicing elit, sed do eiusmod
                                                                            temp
                                                                            or incidi dunt ut labore et.Lorem ipsum dolor
                                                                            sit
                                                                            amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-danger business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">BMW India</h5>
                                                                    </a>
                                                                </div>
                                                                <span
                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" role="tooltip">
                                                                </span>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-ui-delete"></i>
                                                                        Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit
                                                                            amet,
                                                                            consectet ur adipisicing elit, sed do eiusmod
                                                                            temp
                                                                            or incidi dunt ut labore et.Lorem ipsum dolor
                                                                            sit
                                                                            amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card b-l-success business-info services">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Shivani Hero</h5>
                                                                    </a>
                                                                </div>
                                                                <span
                                                                    class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="true" role="tooltip">
                                                                </span>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-ui-delete"></i>
                                                                        Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i
                                                                            class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit
                                                                            amet,
                                                                            consectet ur adipisicing elit, sed do eiusmod
                                                                            temp
                                                                            or incidi dunt ut labore et.Lorem ipsum dolor
                                                                            sit
                                                                            amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Profit</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="main" style="height:300px;width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- info card end -->
                                    </div> --}}
                                    <!-- tab pane info end -->
                                    <!-- tab pane contact start -->
                                    {{-- <div class="tab-pane" id="contacts" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <!-- user contact card left side start -->
                                                <div class="card">
                                                    <div class="card-header contact-user">
                                                        <img class="img-radius img-40"
                                                            src="../files/assets/images/avatar-4.jpg" alt="contact-user">
                                                        <h5 class="m-l-10">John Doe</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <ul class="list-group list-contacts">
                                                            <li class="list-group-item active"><a href="#">All Contacts</a>
                                                            </li>
                                                            <li class="list-group-item"><a href="#">Recent Contacts</a>
                                                            </li>
                                                            <li class="list-group-item"><a href="#">Favourite Contacts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-block groups-contact">
                                                        <h4>Groups</h4>
                                                        <ul class="list-group">
                                                            <li class="list-group-item justify-content-between">
                                                                Project
                                                                <span class="badge badge-primary badge-pill">30</span>
                                                            </li>
                                                            <li class="list-group-item justify-content-between">
                                                                Notes
                                                                <span class="badge badge-success badge-pill">20</span>
                                                            </li>
                                                            <li class="list-group-item justify-content-between">
                                                                Activity
                                                                <span class="badge badge-info badge-pill">100</span>
                                                            </li>
                                                            <li class="list-group-item justify-content-between">
                                                                Schedule
                                                                <span class="badge badge-danger badge-pill">50</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Contacts<span class="f-15">
                                                                (100)</span></h4>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="connection-list">
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-1.jpg"
                                                                    alt="f-1" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Airi Satou">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-2.jpg"
                                                                    alt="f-2" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Angelica Ramos">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-3.jpg"
                                                                    alt="f-3" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Ashton Cox">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-4.jpg"
                                                                    alt="f-4" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Cara Stevens">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-5.jpg"
                                                                    alt="f-5" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Garrett Winters">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-1.jpg"
                                                                    alt="f-6" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Cedric Kelly">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-3.jpg"
                                                                    alt="f-7" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Brielle Williamson">
                                                            </a>
                                                            <a href="#"><img class="img-fluid img-radius"
                                                                    src="../files/assets/images/user-profile/follower/f-5.jpg"
                                                                    alt="f-8" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="Jena Gaines">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- user contact card left side end -->
                                            </div>
                                            <div class="col-xl-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- contact data table card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">Contacts</h5>
                                                            </div>
                                                            <div class="card-block contact-details">
                                                                <div
                                                                    class="data_table_main table-responsive dt-responsive">
                                                                    <table id="simpletable"
                                                                        class="table  table-striped table-bordered nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th>Mobileno.</th>
                                                                                <th>Favourite</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star-o"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Garrett Winters</td>
                                                                                <td>abc123@gmail.com</td>
                                                                                <td>9989988988</td>
                                                                                <td><i class="fa fa-star"
                                                                                        aria-hidden="true"></i></td>
                                                                                <td class="dropdown">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        aria-haspopup="true"
                                                                                        aria-expanded="false"><i
                                                                                            class="fa fa-cog"
                                                                                            aria-hidden="true"></i></button>
                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-edit"></i>Edit</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye-alt"></i>View</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-ui-note"></i>Notes</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-eye"></i>Activity</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#!"><i
                                                                                                class="icofont icofont-badge"></i>Schedule</a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th>Name</th>
                                                                                <th>Email</th>
                                                                                <th>Mobileno.</th>
                                                                                <th>Favourite</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- contact data table card end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- tab pane contact end -->
                                    {{-- <div class="tab-pane" id="review" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Review</h5>
                                            </div>
                                            <div class="card-block">
                                                <ul class="media-list">
                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object img-radius comment-img"
                                                                    src="../files/assets/images/avatar-1.jpg"
                                                                    alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Sortino media<span
                                                                    class="f-12 text-muted m-l-5">Just now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh libero, in
                                                                gravida
                                                                nulla. Nulla vel metus scelerisque ante sollicitudin
                                                                commodo.
                                                                Cras purus odio, vestibulum in vulputate at, tempus viverra
                                                                turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!"
                                                                        class="m-r-10 f-12">Reply</a></span><span><a
                                                                        href="#!" class="f-12">Edit</a> </span>
                                                            </div>
                                                            <hr>
                                                            <!-- Nested media object -->
                                                            <div class="media mt-2">
                                                                <a class="media-left" href="#">
                                                                    <img class="media-object img-radius comment-img"
                                                                        src="../files/assets/images/avatar-2.jpg"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Larry heading <span
                                                                            class="f-12 text-muted m-l-5">Just now</span>
                                                                    </h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0"> Cras sit amet nibh libero,
                                                                        in
                                                                        gravida nulla. Nulla vel metus scelerisque ante
                                                                        sollicitudin commodo. Cras purus odio, vestibulum in
                                                                        vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!"
                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                href="#!" class="f-12">Edit</a>
                                                                        </span>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Nested media object -->
                                                                    <div class="media mt-2">
                                                                        <div class="media-left">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius comment-img"
                                                                                    src="../files/assets/images/avatar-3.jpg"
                                                                                    alt="Generic placeholder image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="media-heading">Colleen Hurst <span
                                                                                    class="f-12 text-muted m-l-5">Just
                                                                                    now</span></h6>
                                                                            <div class="stars-example-css review-star">
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                            </div>
                                                                            <p class="m-b-0">Cras sit amet nibh
                                                                                libero, in gravida nulla. Nulla vel metus
                                                                                scelerisque ante sollicitudin commodo. Cras
                                                                                purus odio, vestibulum in vulputate at,
                                                                                tempus
                                                                                viverra
                                                                                turpis.</p>
                                                                            <div class="m-b-25">
                                                                                <span><a href="#!"
                                                                                        class="m-r-10 f-12">Reply</a></span><span><a
                                                                                        href="#!"
                                                                                        class="f-12">Edit</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Nested media object -->
                                                            <div class="media mt-2">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object img-radius comment-img"
                                                                            src="../files/assets/images/avatar-1.jpg"
                                                                            alt="Generic placeholder image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Cedric Kelly<span
                                                                            class="f-12 text-muted m-l-5">Just now</span>
                                                                    </h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit amet nibh libero,
                                                                        in
                                                                        gravida nulla. Nulla vel metus scelerisque ante
                                                                        sollicitudin commodo. Cras purus odio, vestibulum in
                                                                        vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!"
                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                href="#!" class="f-12">Edit</a>
                                                                        </span>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                            <div class="media mt-2">
                                                                <a class="media-left" href="#">
                                                                    <img class="media-object img-radius comment-img"
                                                                        src="../files/assets/images/avatar-4.jpg"
                                                                        alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Larry heading <span
                                                                            class="f-12 text-muted m-l-5">Just now</span>
                                                                    </h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0"> Cras sit amet nibh libero,
                                                                        in
                                                                        gravida nulla. Nulla vel metus scelerisque ante
                                                                        sollicitudin commodo. Cras purus odio, vestibulum in
                                                                        vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!"
                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                href="#!" class="f-12">Edit</a>
                                                                        </span>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Nested media object -->
                                                                    <div class="media mt-2">
                                                                        <div class="media-left">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius comment-img"
                                                                                    src="../files/assets/images/avatar-3.jpg"
                                                                                    alt="Generic placeholder image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="media-heading">Colleen Hurst <span
                                                                                    class="f-12 text-muted m-l-5">Just
                                                                                    now</span></h6>
                                                                            <div class="stars-example-css review-star">
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                            </div>
                                                                            <p class="m-b-0">Cras sit amet nibh
                                                                                libero, in gravida nulla. Nulla vel metus
                                                                                scelerisque ante sollicitudin commodo. Cras
                                                                                purus odio, vestibulum in vulputate at,
                                                                                tempus
                                                                                viverra
                                                                                turpis.</p>
                                                                            <div class="m-b-25">
                                                                                <span><a href="#!"
                                                                                        class="m-r-10 f-12">Reply</a></span><span><a
                                                                                        href="#!"
                                                                                        class="f-12">Edit</a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media mt-2">
                                                                <div class="media-left">
                                                                    <a href="#">
                                                                        <img class="media-object img-radius comment-img"
                                                                            src="../files/assets/images/avatar-2.jpg"
                                                                            alt="Generic placeholder image">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Mark Doe<span
                                                                            class="f-12 text-muted m-l-5">Just now</span>
                                                                    </h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0">Cras sit amet nibh libero,
                                                                        in
                                                                        gravida nulla. Nulla vel metus scelerisque ante
                                                                        sollicitudin commodo. Cras purus odio, vestibulum in
                                                                        vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!"
                                                                                class="m-r-10 f-12">Reply</a></span><span><a
                                                                                href="#!" class="f-12">Edit</a>
                                                                        </span>
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <form class="form-material right-icon-control">
                                                    <div class="form-group form-primary">
                                                        <input type="text" class="form-control" required="">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Write something.....</label>
                                                    </div>
                                                    <div class="form-icon ">
                                                        <button class="btn btn-success btn-icon  waves-effect waves-light">
                                                            <i class="icofont icofont-send-mail"></i>
                                                        </button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- tab content end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // membuat fungsi change
        function change() {

            // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password
            var x = document.getElementById('pass').type;

            //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
            if (x == 'password') {

                //ubah form input password menjadi text
                document.getElementById('pass').type = 'text';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                    </svg>`;
            } else {

                //ubah form input password menjadi text
                document.getElementById('pass').type = 'password';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>`;
            }
        }
    </script>
@endsection

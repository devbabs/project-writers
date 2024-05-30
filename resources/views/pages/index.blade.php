@extends('layouts.app')

@section('page_styles')
    <style>
        #haw-topic-coining,
        #haw-assignment-proposal,
        #haw-others,
        #haw-not-listed,
        #haw-submit-container {
            display: none;
        }
    </style>
@endsection

@section('page_content')
    <section class="wrapper image-wrapper bg-custom-primary-gradient">
        <div class="container pt-20 pb-19 pt-md-20 pb-md-5 text-center">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0">
                        Hire A Professional Writer
                        <span class="underline-3 style-2 yellow">Now</span>
                        !
                    </h1>
                    <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <div>
                        <a class="btn btn-white rounded mb-10 mb-xxl-5">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>

    <div class="container mt-10 mb-10">
        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <div class="home-hire-writer-form px-3 pt-10 pb-4">
                    <h2 class="display-4 mb-3 text-center">
                        Hire A Professional Writer Now!
                    </h2>
                    <p class="lead text-center mb-10">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis obcaecati.
                    </p>
                    <form id="haw-form" method="post" action="#">
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-select" name="level" required>
                                        <option selected disabled value="">Level of Study</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Doctorate">Doctorate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-select" name="paper_type" required>
                                        <option selected disabled value="">Select Paper Type</option>
                                        <option value="Topic Coining">Topic Coining</option>
                                        <option value="Assignment">Assignment</option>
                                        <option value="Proposal">Proposal</option>
                                        <option value="Essay">Essay</option>
                                        <option value="Project">Project</option>
                                        <option value="Research Paper">Research Paper</option>
                                        <option value="Term Paper">Term Paper</option>
                                        <option value="Dissertation">Dissertation</option>
                                        <option value="Thesis">Thesis</option>
                                        <option value="Not Listed">Not Listed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="haw-topic-coining">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="department" required>
                                            <option selected disabled value="">Course of Study</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $departmenr->id }}">{{ $department->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="area_of_interest" class="form-control" required>
                                        <label for="form_name">Area of Interest *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="number" min="1" step="1" name="topics" class="form-control" required>
                                        <label for="form_name">Number of Topics *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4 text-black">
                                        Price per topic: <b>£10/Topic</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="haw-assignment-proposal">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="department" required>
                                            <option selected disabled value="">Course of Study</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $departmenr->id }}">{{ $department->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="topic" class="form-control">
                                        <label for="form_name">Enter your topic</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_name" rows="5" name="guideline" class="form-control" required></textarea>
                                        <label for="form_name">Enter your assignment or proposal guideline/requirements here *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="pages" required>
                                            <option selected disabled value="">Select Pages/Words</option>
                                            @for ($i = 1; $i <= 30; $i ++)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            @for ($i = 40; $i <= 150; $i += 10)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            @for ($i = 160; $i <= 200; $i += 20)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            <option value="250">{{ "250 Pages / ".number_format(250 * 250)." Words" }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4 text-black">
                                        Price per page: <b>£10/Topic</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="haw-others">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="department" required>
                                            <option selected disabled value="">Course of Study</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $departmenr->id }}">{{ $department->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="topic" class="form-control" required>
                                        <label for="form_name">Enter your topic *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="chapter" required>
                                            <option selected disabled value="">Select Chapter</option>
                                            <option value="chapter-1">Introduction</option>
                                            <option value="chapter-2">Literature Review</option>
                                            <option value="chapter-3">Methodology</option>
                                            <option value="chapter-4">Data Analysis</option>
                                            <option value="chapter-5">Conclusion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_name" rows="5" name="guideline" class="form-control" required></textarea>
                                        <label for="form_name">Enter your assignment or proposal guideline/requirements here *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="pages" required>
                                            <option selected disabled value="">Select Pages/Words</option>
                                            @for ($i = 1; $i <= 30; $i ++)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            @for ($i = 40; $i <= 150; $i += 10)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            @for ($i = 160; $i <= 200; $i += 20)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            <option value="250">{{ "250 Pages / ".number_format(250 * 250)." Words" }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4 text-black">
                                        Price per page: <b>£10/Topic</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="haw-not-listed">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="custom_paper_type" class="form-control" required>
                                        <label for="form_name">Enter Paper Type *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="topic" class="form-control" required>
                                        <label for="form_name">Enter Topic *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_name" rows="5" name="guideline" class="form-control" required></textarea>
                                        <label for="form_name">Enter your guideline/requirements here *</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-select-wrapper mb-4">
                                        <select class="form-select" id="form-select" name="pages" required>
                                            <option selected disabled value="">Select Pages/Words</option>
                                            @for ($i = 1; $i <= 30; $i ++)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            @for ($i = 40; $i <= 150; $i += 10)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            @for ($i = 160; $i <= 200; $i += 20)
                                                <option value="{{ $i }}">{{ "{$i} Pages / ".number_format($i * 250)." Words" }}</option>
                                            @endfor
                                            <option value="250">{{ "250 Pages / ".number_format(250 * 250)." Words" }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4 text-black">
                                        Price per page: <b>£10/Topic</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" id="haw-submit-container">
                            <button type="submit" class="btn btn-custom-primary-dark">
                                Submit Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-xl-4">
                <div class="sidebar-order-container">
                    <div class="sidebar-order-container-header">
                        Order Summary
                    </div>
                    <div class="sidebar-order-container-body">
                        <div class="sidebar-order-paper-type mb-1">
                            <small class="text-muted">
                                Paper Type
                            </small>
                            <div></div>
                        </div>
                        <div class="sidebar-order-pages">
                            <small class="text-muted">
                                Pages
                            </small>
                            <div></div>
                        </div>
                    </div>
                    <div class="sidebar-order-container-footer">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                Total Amount
                            </div>
                            <div class="sidebar-order-total-amount">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="wrapper bg-light">
        <div class="container pt-10 pt-md-10">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Happy Customers</h2>
            <h3 class="display-4 mb-10 px-xl-10 px-xxl-15">Don't take our word for it. See what customers are saying about us.</h3>
            </div>
        </div>
        <div class="grid">
            <div class="row isotope gy-6">
            <div class="item col-md-6 col-xl-4">
                <div class="card">
                <div class="card-body">
                    <span class="ratings five mb-3"></span>
                    <blockquote class="icon mb-0">
                    <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio dapibus facilisis sociis natoque penatibus.”</p>
                    <div class="blockquote-details">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te1.jpg" srcset="./assets/img/avatars/te1@2x.jpg 2x" alt="" />
                        <div class="info">
                        <h5 class="mb-1">Coriss Ambady</h5>
                        <p class="mb-0">Financial Analyst</p>
                        </div>
                    </div>
                    </blockquote>
                </div>
                </div>
            </div>
            <div class="item col-md-6 col-xl-4">
                <div class="card">
                <div class="card-body">
                    <span class="ratings five mb-3"></span>
                    <blockquote class="icon mb-0">
                    <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.”</p>
                    <div class="blockquote-details">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te2.jpg" srcset="./assets/img/avatars/te2@2x.jpg 2x" alt="" />
                        <div class="info">
                        <h5 class="mb-1">Cory Zamora</h5>
                        <p class="mb-0">Marketing Specialist</p>
                        </div>
                    </div>
                    </blockquote>
                </div>
                </div>
            </div>
            <div class="item col-md-6 col-xl-4">
                <div class="card">
                <div class="card-body">
                    <span class="ratings five mb-3"></span>
                    <blockquote class="icon mb-0">
                    <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum. Donec sed odio dui consectetur adipiscing elit.”</p>
                    <div class="blockquote-details">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te3.jpg" srcset="./assets/img/avatars/te3@2x.jpg 2x" alt="" />
                        <div class="info">
                        <h5 class="mb-1">Nikolas Brooten</h5>
                        <p class="mb-0">Sales Manager</p>
                        </div>
                    </div>
                    </blockquote>
                </div>
                </div>
            </div>
            <div class="item col-md-6 col-xl-4">
                <div class="card">
                <div class="card-body">
                    <span class="ratings five mb-3"></span>
                    <blockquote class="icon mb-0">
                    <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor. Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at sapien. Aenean tortor libero condimentum ac laoreet vitae.”</p>
                    <div class="blockquote-details">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te4.jpg" srcset="./assets/img/avatars/te4@2x.jpg 2x" alt="" />
                        <div class="info">
                        <h5 class="mb-1">Coriss Ambady</h5>
                        <p class="mb-0">Financial Analyst</p>
                        </div>
                    </div>
                    </blockquote>
                </div>
                </div>
            </div>
            <div class="item col-md-6 col-xl-4">
                <div class="card">
                <div class="card-body">
                    <span class="ratings five mb-3"></span>
                    <blockquote class="icon mb-0">
                    <p>“Maecenas sed diam eget risus varius blandit sit amet non magna. Cum sociis natoque penatibus magnis dis montes, nascetur ridiculus mus. Donec sed odio dui. Nulla vitae elit libero a pharetra.”</p>
                    <div class="blockquote-details">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te5.jpg" srcset="./assets/img/avatars/te5@2x.jpg 2x" alt="" />
                        <div class="info">
                        <h5 class="mb-1">Jackie Sanders</h5>
                        <p class="mb-0">Investment Planner</p>
                        </div>
                    </div>
                    </blockquote>
                </div>
                </div>
            </div>
            <div class="item col-md-6 col-xl-4">
                <div class="card">
                <div class="card-body">
                    <span class="ratings five mb-3"></span>
                    <blockquote class="icon mb-0">
                    <p>“Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.”</p>
                    <div class="blockquote-details">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te6.jpg" srcset="./assets/img/avatars/te6@2x.jpg 2x" alt="" />
                        <div class="info">
                        <h5 class="mb-1">Laura Widerski</h5>
                        <p class="mb-0">Sales Specialist</p>
                        </div>
                    </div>
                    </blockquote>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
                <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('_home/assets/img/photos/about2.jpg') }}" srcset="{{ asset('_home/assets/img/photos/about2@2x.jpg 2x') }}" alt=""></figure>
                </div>
                <div class="item">
                <figure class="rounded shadow"><img src="{{ asset('_home/assets/img/photos/about3.jpg') }}" srcset="{{ asset('_home/assets/img/photos/about3@2x.jpg 2x') }}" alt=""></figure>
                </div>
            </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
            <img src="{{ asset('_home/assets/img/icons/lineal/megaphone.svg') }}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <h2 class="display-4 mb-3">Who Are We?</h2>
            <p class="lead fs-lg">We are a digital and branding company that believes in the power of creative strategy and along with great design.</p>
            <p class="mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            <div class="row gy-3 gx-xl-8">
                <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li>
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li>
                </ul>
                </div>
                <!--/column -->
                <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li>
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li>
                </ul>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <hr>

    <section class="wrapper bg-light">
        <div class="container py-0 py-md-0">
            <h2 class="display-4 mb-3 text-center">Frequently Asked Questions</h2>
            <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can send us an email from our contact form.</p>
            <div class="row">
                @for ($i=0;$i<10;$i++)
                    <div class="col-lg-12 mb-0">
                        <div id="accordion-{{$i}}" class="accordion-wrapper faq-accordion-wrapper">
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-{{$i}}">
                                    <button class="collapsed d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-{{$i}}" aria-expanded="false" aria-controls="accordion-collapse-{{$i}}">
                                        <small>
                                            <i class="fa fa-info-circle text-custom-primary"></i>
                                        </small>
                                        &nbsp;
                                        Lorem ipsum dolor sit amet consectetur
                                    </button>
                                </div>
                                <div id="accordion-collapse-{{$i}}" class="collapse" aria-labelledby="accordion-heading-{{$i}}" data-bs-target="#accordion-1">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
            <h2 class="fs-15 text-uppercase text-primary text-center">Our News</h2>
            <h3 class="display-4 mb-6 text-center">Here are the latest company news from our blog that got the most attention.</h3>
            </div>
        </div>
        <div class="position-relative">
            <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
            <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="item-inner">
                    <article>
                        <div class="card">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b4.jpg" alt="" /></a>
                            <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body">
                            <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Coding</a>
                            </div>
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                            </div>
                            <div class="post-content">
                            <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                            <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                            </ul>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-inner">
                    <article>
                        <div class="card">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b5.jpg" alt="" /></a>
                            <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body">
                            <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Workspace</a>
                            </div>
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                            </div>
                            <div class="post-content">
                            <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                            <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                            </ul>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-inner">
                    <article>
                        <div class="card">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b6.jpg" alt="" /></a>
                            <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body">
                            <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Meeting</a>
                            </div>
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                            </div>
                            <div class="post-content">
                            <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                            <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                            </ul>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item-inner">
                    <article>
                        <div class="card">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="./assets/img/photos/b7.jpg" alt="" /></a>
                            <figcaption>
                            <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body">
                            <div class="post-header">
                            <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Business Tips</a>
                            </div>
                            <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                            </div>
                            <div class="post-content">
                            <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                            <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                            </ul>
                        </div>
                        </div>
                    </article>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@section('page_scripts')
    <script>
        const haw_topic_coining_container = $('#haw-topic-coining')
        const haw_assignment_proposal_container = $('#haw-assignment-proposal')
        const haw_others_container = $('#haw-others')
        const haw_not_listed_container = $('#haw-not-listed')
        const haw_submit_container = $('#haw-submit-container')
        const haw_form = $('#haw-form')

        let payload = {}

        let selected_paper_type = {
            value: null,
            label: null
        }

        $(document).ready(function () {
            refreshOrderSummary()
        })

        haw_form.find('.form-control').on('keyup', function() {
            refreshOrderSummary()
        });
        haw_form.find('.form-select').on('change', function() {
            refreshOrderSummary()
        });

        haw_form.find('select[name=paper_type]').on('change', function() {
            let paper_type = $(this).val()
            let paper_type_label = $(this).find('option:selected').text()

            selected_paper_type.value = paper_type
            selected_paper_type.label = paper_type_label

            switch (paper_type) {
                case 'Topic Coining':
                    hideAllForms()
                    haw_topic_coining_container.css({display: 'flex'})
                    payload = {
                        course: null,
                        area_of_interest: null,
                        topics: null
                    }
                    break;
                case 'Assignment':
                    hideAllForms()
                    haw_assignment_proposal_container.css({display: 'flex'})
                    payload = {
                        course: null,
                        topic: null,
                        guideline: null,
                        pages: null
                    }
                    break;
                case 'Proposal':
                    hideAllForms()
                    haw_assignment_proposal_container.css({display: 'flex'})
                    payload = {
                        course: null,
                        topic: null,
                        guideline: null,
                        pages: null
                    }
                    break;
                case 'Not Listed':
                    hideAllForms()
                    haw_not_listed_container.css({display: 'flex'})
                    payload = {
                        paper_type: null,
                        topic: null,
                        guideline: null,
                        pages: null
                    }
                    break;
                default:
                    hideAllForms()
                    haw_others_container.css({display: 'flex'})
                    payload = {
                        course: null,
                        topic: null,
                        chapter: null,
                        guideline: null,
                        pages: null
                    }
                    break;
            }

            refreshOrderSummary()

            if (paper_type != "") {
                haw_submit_container.css({display: 'flex'})
            } else {
                haw_submit_container.hide()
            }
        })

        const hideAllForms = (selectedForm) => {
            haw_topic_coining_container.hide()
            haw_assignment_proposal_container.hide()
            haw_others_container.hide()
            haw_not_listed_container.hide()
        }

        const refreshOrderSummary = () => {
            console.log("New Payload", payload, selected_paper_type)

            switch (selected_paper_type.value) {
                case 'Topic Coining':
                    payload = {
                        course: haw_topic_coining_container.find('select[name="course"]').val(),
                        area_of_interest: haw_topic_coining_container.find('input[name="area_of_interest"]').val(),
                        topics: haw_topic_coining_container.find('input[name="topics"]').val()
                    }
                    break;
                case 'Assignment':
                    payload = {
                        course: haw_assignment_proposal_container.find('select[name="course"]').val(),
                        topic: haw_assignment_proposal_container.find('input[name="topic"]').val(),
                        guideline: haw_assignment_proposal_container.find('textarea[name="guideline"]').val(),
                        pages: haw_assignment_proposal_container.find('select[name="pages"]').val()
                    }
                    break;
                case 'Proposal':
                    payload = {
                        course: haw_assignment_proposal_container.find('select[name="course"]').val(),
                        topic: haw_assignment_proposal_container.find('input[name="topic"]').val(),
                        guideline: haw_assignment_proposal_container.find('textarea[name="guideline"]').val(),
                        pages: haw_assignment_proposal_container.find('select[name="pages"]').val()
                    }
                    break;
                case 'Not Listed':
                    payload = {
                        paper_type: haw_not_listed_container.find('input[name="custom_paper_type"]').val(),
                        topic: haw_not_listed_container.find('input[name="topic"]').val(),
                        guideline: haw_not_listed_container.find('textarea[name="guideline"]').val(),
                        pages: haw_not_listed_container.find('input[select="pages"]').val()
                    }
                    break;
                default:
                    payload = {
                        course: haw_others_container.find('input[select="course"]').val(),
                        topic: haw_others_container.find('input[input="topic"]').val(),
                        chapter: haw_others_container.find('input[select="chapter"]').val(),
                        guideline: haw_others_container.find('textarea[name="guideline"]').val(),
                        pages: haw_others_container.find('input[select="pages"]').val()
                    }
                    break;
            }

            let pages_count = parseFloat((selected_paper_type.value == "Topic Coining" ? (payload.topics != "" ? payload.topics : 0) : (payload.pages != "" ? payload.pages : 0)) ?? 0)
            console.log("Count", pages_count)

            if (selected_paper_type.value == "Not Listed") {
                $(".sidebar-order-paper-type").find('div').text(payload.paper_type ?? "")
            } else {
                $(".sidebar-order-paper-type").find('div').text(selected_paper_type.label)
            }

            if ($(".sidebar-order-paper-type").find('div').text() == "") {
                $(".sidebar-order-paper-type").hide()
            } else {
                $(".sidebar-order-paper-type").show()
            }

            $(".sidebar-order-pages").find('div').text(pages_count)
            if ($(".sidebar-order-pages").find('div').text() == "") {
                $(".sidebar-order-pages").hide()
            } else {
                $(".sidebar-order-pages").show()
            }

            if (pages_count <= 0) {
                $(".sidebar-order-pages").hide()
            } else {
                $(".sidebar-order-pages").show()
            }

            if (pages_count > 0) {
                $(".sidebar-order-total-amount").text(`£${pages_count * 10}`)
                // $(".sidebar-order-total-amount").show()
            } else {
                $(".sidebar-order-total-amount").text(`£${pages_count * 10}`)
                // $(".sidebar-order-total-amount").hide()
            }

        }
    </script>
@endsection

@extends('Fronted.Main.Master')

@section('FAdmin')

<style>
    .Home a{
        color: #fd5f00 !important;
    }
</style>
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h1 class="mb-4">Education Needs Complete Solution</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="{{route('FContact')}}" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate">
                    <h1 class="mb-4">University, College School Education</h1>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-teacher"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Certified Teachers</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-reading"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Special Education</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-books"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Book &amp; Library</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-diploma"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Sport Clubs</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                <div class="img" style="background-image: url(images/about.jpg);"></div>
            </div>
            <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                <h2 class="mb-4">What We Offer</h2>
                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                            <div class="text pl-3">
                                <h3>Safety First</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                            <div class="text pl-3">
                                <h3>Regular Classes</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                            <div class="text pl-3">
                                <h3>Certified Teachers</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                            <div class="text pl-3">
                                <h3>Sufficient Classrooms</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                            <div class="text pl-3">
                                <h3>Creative Lessons</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                            <div class="text pl-3">
                                <h3>Sports Facilities</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
            <div class="col-md-6 align-items-stretch d-flex">
                <div class="img img-video d-flex align-items-center" style="background-image: url(images/about-2.jpg);">
                    <div class="video justify-content-center">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                <h2 class="mb-4">Passion Education</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-12">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="18">0</strong>
                                <span>Certified Teachers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="401">0</strong>
                                <span>Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                                <span>Courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="50">0</strong>
                                <span>Awards Won</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Our</span> Courses</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 course ftco-animate">
                <div class="img" style="background-image: url(images/s1.jpg);"></div>
                <div class="text pt-4">
                    <p class="meta d-flex">
                        <span><i class="icon-user mr-2"></i>Mr. Khan</span>
                        <span><i class="icon-table mr-2"></i>10 seats</span>
                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                    </p>
                    <h3><a href="#">Computer Science</a></h3>
                    <p>Computer science is the study of computation, automation, and information.Computer science spans theoretical disciplines to practical disciplines.</p>
                    <p><a href="{{route('FCourses')}}" class="btn btn-primary">Apply now</a></p>
                </div>
            </div>
            <div class="col-md-3 course ftco-animate">
                <div class="img" style="background-image: url(images/s2.jpg);"></div>
                <div class="text pt-4">
                    <p class="meta d-flex">
                        <span><i class="icon-user mr-2"></i>Mr. Shah</span>
                        <span><i class="icon-table mr-2"></i>10 seats</span>
                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                    </p>
                    <h3><a href="#">Business</a></h3>
                    <p>Business is the activity of making one's living or making money by producing or buying and selling products.It is also "any activity or enterprise entered into for profit."</p>
                    <p><a href="{{route('FCourses')}}" class="btn btn-primary">Apply now</a></p>
                </div>
            </div>
            <div class="col-md-3 course ftco-animate">
                <div class="img" style="background-image: url(images/s3.jpg);"></div>
                <div class="text pt-4">
                    <p class="meta d-flex">
                        <span><i class="icon-user mr-2"></i>Mr. zullu</span>
                        <span><i class="icon-table mr-2"></i>10 seats</span>
                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                    </p>
                    <h3><a href="#">Math</a></h3>
                    <p>A math teacher, or mathematics instructor, is a subject-specific type of elementary, middle school or high school educator who has the responsibility.</p>
                    <p><a href="{{route('FCourses')}}" class="btn btn-primary">Apply now</a></p>
                </div>
            </div>
            <div class="col-md-3 course ftco-animate">
                <div class="img" style="background-image: url(images/s4.jpg);"></div>
                <div class="text pt-4">
                    <p class="meta d-flex">
                        <span><i class="icon-user mr-2"></i>Mr. Vrma</span>
                        <span><i class="icon-table mr-2"></i>10 seats</span>
                        <span><i class="icon-calendar mr-2"></i>4 Years</span>
                    </p>
                    <h3><a href="#">Vocational Education</a></h3>
                    <p>Vocational schools and institutions provide vocational education to students who have the desire to learn skills that e careers in specific trades.
                    <p><a href="{{route('FCourses')}}" class="btn btn-primary">Apply now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Certified Teachers</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Bianca Wilson</h3>
                        <span class="position mb-2">Computer Science</span>
                        <div class="faded">
                            <p>A computer science teacher teaches students about computers and computer programming.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/teacher-2.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Mitch Parker</h3>
                        <span class="position mb-2">Business Teacher</span>
                        <div class="faded">
                            <p>A business teacher teaches classes on business management or a related field at a college, vocational or technical school.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/teacher-3.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Stella Smith</h3>
                        <span class="position mb-2">Math Teacher</span>
                        <div class="faded">
                            <p>Math teachers create lesson plans to instruct their students in general or specialized subjects within mathematics.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/teacher-4.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Monshe Henderson</h3>
                        <span class="position mb-2">Vocational Education Teacher</span>
                        <div class="faded">
                            <p>A vocational teacher, also known as a career and technical education teacher, instructs students in practical career.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5">
                <div class="py-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">Request A Course</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <form action="{{route('CorseDataSave')}}" class="appointment-form ftco-animate">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" name="FName" class="form-control" placeholder="First Name" autocomplete="off">
                                <span style="background: transparent;color:red;font-size:0.8rem">@error('FName')
                                    {{$message}}  
                                  @enderror</span>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" name="LName" class="form-control" placeholder="Last Name" autocomplete="off">
                                <span style="background: transparent;color:red;font-size:0.8rem">@error('LName')
                                    {{$message}}  
                                  @enderror</span>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select id="" name="Course" class="form-control text-dark" >
                                            <option class="text-dark" selected disabled>Select Your Course</option>
                                            <option class="text-dark" value="Computer Science">Computer Science</option>
                                            <option class="text-dark" value="Business">Business</option>
                                            <option class="text-dark" value="Math">Math</option>
                                            <option class="text-dark" value="Vocational Education">Vocational Education</option>
                                            <option class="text-dark" value="English">English</option>
                                            <option class="text-dark" value="physical Education">physical Education</option>
                                            <option class="text-dark" value="Social Studies">Social Studies</option>
                                            <option class="text-dark" value="Consumer Education">Consumer Education</option>
                                        </select>
                                    </div>
                                    <span style="background: transparent;color:red;font-size:0.8rem">@error('Course')
                                        {{$message}}  
                                      @enderror</span>
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" name="Phone" class="form-control" placeholder="Phone" autocomplete="off">
                                <span style="background: transparent;color:red;font-size:0.8rem">@error('Phone')
                                    {{$message}}  
                                  @enderror</span>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="Message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                                <span style="background: transparent;color:red;font-size:0.8rem">@error('Message')
                                    {{$message}}  
                                  @enderror</span>
                            </div>
                        </div>
                        <div class="d-sm-flex">
                            <div class="form-group ml-md-4" style="margin-left: 0!important" autocomplete="off">
                                <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Recent</span> Blog</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_1.jpg');">
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="{{route('FBlog')}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_2.jpg');">
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="{{route('FBlog')}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('images/image_3.jpg');">
                        <div class="meta-date text-center p-2">
                            <span class="day">26</span>
                            <span class="mos">June</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="{{route('FBlog')}} " class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Student Says About Us</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                            </div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Racky Henderson</p>
                                <span class="position">Father</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                            </div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Henry Dee</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
                            </div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Mark Huff</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
                            </div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Rodel Golez</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap d-flex">
                            <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                            </div>
                            <div class="text ml-2">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p class="name">Ken Bosh</p>
                                <span class="position">Mother</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/course-1.jpg);">
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_2.jpg);">
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_3.jpg);">
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/image_4.jpg);">
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
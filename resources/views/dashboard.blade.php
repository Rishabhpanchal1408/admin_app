@extends('welcome')
@section('data')
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="dontainer m-5 p-2">
        <h1 class="text-center display-6" style="font-family:Oswald; letter-spacing: -3px; font-size: 48px; ">
            <b>JANE BLOGLIFE</b>
        </h1>
        <p class="text-center" style="font-size:20px;">Welcome To the Blog Of <span
                class="badge bg-dark rounded-0 p-2 ms-1">Jane's world</span></p>
    </div>


    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.w3schools.com/w3images/jane.jpg" style="width:100%">
            <div class="carousel-caption text-start ms-5">
                <h3 class="display-4" style="font: size 40px; font-family:Oswald; letter-spacing: 4px;"> <b>Jane's</b></h3>
                <p class="display-1 mt-3" style="font-family:Oswald;"><b>FASHION BLOG</b></p>
                <button type="button" class="btn btn-secondary rounded-0" data-bs-toggle="modal" data-bs-target="#myModal">
                    SUBSCRIBE
                </button>
            </div>
        </div>
    </div>
    </div>

    <!-- col-lg-8 -->

    <div class="hats">
        <div class="container row col-lg-8 pt-3 float-start">
            <div class="container bg-light ps-2">
                <h1 class="text-center pt-5" style="letter-spacing:-2px;">TITLE HEADING</h1>
                <p class=" text-center " style="letter-spacing: -px; "><b>Title description, <span
                            class="text-secondary ">May 2, 2016</span></b></p>
                <img src="https://www.w3schools.com/w3images/girl_hat.jpg " width="100% ">
                <p class="pt-5 "><b>More Hats!</b> I am crazy about hats these days. Some text about this blog entry.
                    Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc
                    id lorem euismod placerat. Vivamus porttitor magna
                    enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent
                    tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida
                    diam non fringilla.</p>
                <p class="pt-3 ">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>
                <div class="container-fluid mb-3 ">
                    <button class=" b-tron btn btn-outline-dark px-4 mt-3 rounded-0 "><i
                            class="fas fa-thumbs-up "></i>Like</button>
                    <button class="btn bg-dark text-light btn mt-3 rounded-0 float-end ">Replies <span
                            class="badge bg-light text-dark rounded-0 " button class="btn bg-light ">1</button></span>
                    </button>
                </div>
                <div class="container border-top pt-5 mb-5 pb-4">
                    <img src="https://www.w3schools.com/w3images/avatar_smoke.jpg " width="15% " height="5% "
                        class="float-start">
                    <p class="pt-5 "
                        style="padding-left: 200px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                        <b>George</b> May 3, 2015, 6:32 PM
                    </p>
                    <p class="mb-5"
                        style="padding-left: 200px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                        Great blog post! Following</p>
                </div>
            </div>
        </div>

        <!-- col-lg-4 -->

        <div class=" hats container-fluid row col-lg-4 mx-5 pt-3 pb-3 ">
            <div class=" container-fluid card px-0 ">
                <img class=" car-img " src=" https://www.w3schools.com/w3images/avatar_girl2.jpg " width=" 100% "
                    height=" 250px ">
                <div class=" card-body bg-dark text-light " style=" background-color: black; ">
                    <h4 class=" card-title " style=" letter-spacing:-px; ">My Name</h4>
                    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of
                        lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                </div>
            </div>
            <div class=" popular cotainer-fluid mt-5 mx-auto py-0 bg-light ">
                <h3 class=" bg-dark text-light py-4 ps-2 mb-0 "style=" letter-spacing:-1px; font-family:Oswald; ">Popular
                    Posts</h3>
                <div class=" Denim ">
                    <div class=" popular container pt-2 mt-0 py-0 border-bottom ">
                        <img src=" https://www.w3schools.com/w3images/avatar_smoke.jpg " width=" 12% "
                            class=" float-start ps-2 ">
                        <p style=" padding-left: 20px; " class=" Denim mb-0 ps-5 ms-4 ">Denim</h4>
                        <p style=" padding-left: 20px; " class=" mattis pb-3 ps-5 ms-4 mb-0 ">Sed mattis nunc</p>
                    </div>
                </div>
                <div class=" Denim ">
                    <div class=" popular container pt-2 mt-0 py-0 border-bottom ">
                        <img src=" https://www.w3schools.com/w3images/bandmember.jpg " width=" 12% "
                            class=" float-start ps-2 ">
                        <p style=" padding-left: 20px; " class=" Denim mb-0 ps-5 ms-4 ">Sweaters</p>
                        <p style=" padding-left: 20px; " class=" pb-3 ps-5 ms-4 mb-0 ">Praes tinci sedc</p>
                    </div>
                </div>
                <div class=" Denim ">
                    <div class=" popular container pt-2 mt-0 py-0 border-bottom ">
                        <img src=" https://www.w3schools.com/w3images/workshop.jpg " width=" 12% "
                            class=" float-start ps-2 ">
                        <p style=" padding-left: 20px; " class=" Denim mb-0 ps-5 ms-4 ">Workshop</p>
                        <p style=" padding-left: 20px; " class=" pb-3 ps-5 ms-4 mb-0 ">Ultricies congue</p>
                    </div>
                </div>
                <div class=" Denim ">
                    <div class=" popular container pt-2 mt-0 py-0 border-bottom ">
                        <img src=" https://www.w3schools.com/w3images/avatar_smoke.jpg " width=" 12% "
                            class=" float-start ps-2 ">
                        <p style=" padding-left: 20px; " class=" Denim mb-0 ps-5 ms-4 ">Trends</p>
                        <p style=" padding-left: 20px; " class=" pb-3 ps-5 ms-4 mb-0 ">Lorem ipsum dipsum</p>
                    </div>
                </div>
            </div>
            <div class=" popular cotainer-fluid mt-5 mx-auto py-0 bg-light mb-2 ">
                <h4 class=" bg-dark text-light py-4 ps-2 mb-3 "style=" letter-spacing:-px; font-family:Oswald; ">Advertise
                </h4>
                <div class=" ads m-3 pt-3 text-center ">
                    <h6 class=" p-5 ">Your AD Here</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- col-lg-8 -->

    <div class=" hats ">
        <div class=" hats container-fluid row col-lg-8 pt-4 float-start ">
            <div class=" container bg-light ps-2 ">
                <h1 class=" text-center pt-5 " style=" letter-spacing:-2px; ">TITLE HEADING</h1>
                <p class=" text-center " style=" letter-spacing: -px; "><b>Title description, <span
                            class=" text-secondary ">April 23,2016</span></b></p>
                <img src=" https://www.w3schools.com/w3images/man_hat.jpg " width=" 100% ">
                <p class=" pt-5 "><b>Hats!</b>The trend this summer is hats for men!</p>
                <p class=" pt-3 ">Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl
                    vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim,
                    ac accumsan tortor cursus at. Phasellus sed
                    ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo
                    condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <div class=" container-fluid mb-3 ">
                    <button class=" b-tron btn btn-outline-dark px-4 mt-3 rounded-0 "><i
                            class=" fas fa-thumbs-up "></i>Like</button>
                    <button class=" btn bg-dark text-light btn mt-3 rounded-0 float-end ">Replies <span
                            class=" badge bg-light text-dark rounded-0 " button class=" btn bg-light ">2</button></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- col-lg-4 -->

        <div class=" hats container-fluid row col-lg-4 pb-3 ">
            <div class=" popular cotainer-fluid mx-auto py-0 bg-light ">
                <h4 class=" bg-dark text-light py-4 ps-2 mb-0 " style=" letter-spacing:-px; font-family:Oswald; ">Tags
                </h4>
                <div class=" mx-2 my-2 py-2 ">
                    <p style=" font-size: 16px; " class=" pt-3 p-2 ">
                        <span class=" bg-dark text-light px-3 ">Fashion</span> <span class=" tags px-2 ">New York</span>
                        <span class=" tags px-2 ">London</span> <span class=" tags px-2 ">Hats</span> <span
                            class=" tags px-2 ">Sweaters</span> <span class=" tags px-2 ">Norways</span> <span
                            class=" tags px-2 ">Ideas</span>
                        <span class=" tags px-2 ">Deals</span> <span class=" tags px-2 ">Accessories</span> <span
                            class=" tags px-2 ">News</span> <span class=" tags px-2 ">Clothing</span> <span
                            class=" tags px-2 ">Shopping</span> <span class=" tags px-2 ">Jeans</span>
                        <span class=" tags px-2 ">trends</span>
                    </p>
                </div>
            </div>
            <div class=" popular cotainer-fluid mt-5 mx-auto py-0 bg-light ">
                <h4 class=" bg-dark text-light py-4 ps-2 mb-0 " style=" letter-spacing:-px; font-family:Oswald; ">
                    Inspiration</h4>
                <div class=" inspiration container-fluid row ">
                    <img src=" https://www.w3schools.com/w3images/jeans.jpg " class=" col-lg-6 pt-3 pb-1 ">
                    <img src=" https://www.w3schools.com/w3images/avatar_hat.jpg " class=" col-lg-6 pt-3 pb-1 ">
                    <img src=" https://www.w3schools.com/w3images/team1.jpg " class=" col-lg-6 pt-3 pb-3 ">
                    <img src=" https://www.w3schools.com/w3images/team4.jpg " class=" col-lg-6 pt-3 pb-3 ">
                </div>
            </div>
            <div class=" popular cotainer-fluid mt-5 mx-auto py-0 bg-light ">
                <h4 class=" bg-dark text-light py-4 ps-2 mb-0 " style=" letter-spacing:-px; font-family:Oswald; ">Follow
                    Me</h4>
                <div class=" container p-2 mt-2 mb-2 ">
                    <i class=" fab fa-facebook fa-2x px-1 "></i>
                    <i class=" fab fa-instagram fa-2x px-1 "></i>
                    <i class=" fab fa-snapchat fa-2x px-1 "></i>
                    <i class=" fab fa-pinterest fa-2x px-1 "></i>
                    <i class=" fab fa-twitter fa-2x px-1 "></i>
                    <i class=" fab fa-linkedin fa-2x px-1 "></i>
                </div>
            </div>
            <div class=" popular cotainer-fluid mt-5 mx-auto py-0 bg-light ">
                <h4 class=" bg-dark text-light py-4 ps-2 mb-0 " style=" letter-spacing:-px; font-family:Oswald; ">
                    Subscribe</h4>
                <p class=" mt-3 mb-3 px-3 ">Enter your e-mail below and get notified on the latest blog posts.</p>
                <div class=" form mx-3 ">
                    <input type=" email " class=" form-control shadow-xl rounded-0 border-dark " id=" email "
                        placeholder=" Enter E-mail ">
                    <div class=" d-grid mt-3 mb-3 ">
                        <button type=" submit " class=" subscribe btn btn-danger btn-block rounded-0 ">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- col-lg-8 -->

    <div class=" container-fluid pb-0 ">
        <div class=" hats container row col-lg-8 pt-4 " style=" padding-left:12px; padding-right: 18px; ">
            <div class=" container bg-light pb-5 ">
                <h1 class=" text-center pt-5 " style=" letter-spacing:-2px; ">TITLE HEADING</h1>
                <p class=" text-center " style=" letter-spacing: -px; "><b>Title description, <span
                            class=" text-secondary ">April 7,2016</span></b></p>
                <img src=" https://www.w3schools.com/w3images/runway.jpg " width=" 100% ">
                <p class=" pt-5 "><b>Dont miss!</b>The runway in New York City this weekend is gonna be legendary!</p>
                <p class=" pt-3 ">Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl
                    vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim,
                    ac accumsan tortor cursus at. Phasellus sed
                    ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo
                    condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                <div class=" container-fluid mb-3 ">
                    <button class=" b-tron btn btn-outline-dark px-4 mt-3 rounded-0 "><i
                            class=" fas fa-thumbs-up "></i>Like</button>
                    <button class=" btn bg-dark text-light btn mt-3 rounded-0 float-end ">Replies <span
                            class=" badge bg-light text-dark rounded-0 " button class=" btn bg-light ">3</button></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

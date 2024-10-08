<!-- 
    Coder: Anant Narayan Sethy
    Created Date: 15/05/2024
    Description: "Experience the world with our responsive TripAdvisor clone! Built using HTML, CSS, and JS, it offers interactive features like search, reviews, and maps. Contribute to its development on GitHub!"
-->


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tripadvisor: Over a billion reviews &amp; contributions for Hotels, Attractions, Restaurants, and more
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="icon" href="Images/favicon.ico" type="favicon.io">

</head>

<body>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><img src="images/images.png" alt="Logo"></div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">About</a></li>
            </ul>

            <div class="btn">
                <button class="Lang-btn" style="vertical-align:middle"><span>Language</span></button>
                
                <!-- Check if the user is logged in by checking the cookie -->
                <?php
                if (isset($_COOKIE['user_email'])) {
                    // If user is logged in, show profile, cart, and logout buttons
                    echo '
                    <div class="dropdown">
                        <button class="dropdown-btn">Profile</button>
                        <div class="dropdown-content">
                            <p>' . $_COOKIE['user_email'] . '</p>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropdown-btn">Cart</button>
                        <div class="dropdown-content">
                            <p>' . $_COOKIE['user_email'] . '</p>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropdown-btn" id="logout-btn">Logout</button>
                        <div class="dropdown-content">
                            <p>' . $_COOKIE['user_email'] . '</p>
                        </div>
                    </div>';
                } else {
                    // If user is not logged in, show login button
                    echo '<button class="Sign-btn" id="login-btn"><a href="login/index.php">Login</a></button>';
                }
                ?>
            </div>
        </div>
    </nav>

    <!-- JavaScript to handle logout button click -->
    <script>
        document.getElementById("logout-btn")?.addEventListener("click", function () {
            window.location.href = "login/logout.php";  // Redirect to the logout file
        });
    </script>
</body>


    <script>

        document.getElementById("signin-btn").addEventListener("click", function () {
            var username = prompt("Enter your username:");
            var email = prompt("Enter your email:");
            var password = prompt("Enter your password:");
        });

        document.getElementById("login-btn").addEventListener("click", function () {
            alert("You are logged in!");
        });
    </script>


    <h1 id="heading">Where to? </h1>
    <div class="wh-btn">
        <button class="s-btn" onclick="changeheadingText1()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
                viewBox="0 0 16 16">
                <path
                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
            </svg>
            Search All</button>
        <button class="s-btn" onclick="changeheadingText2()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-building-fill-check" viewBox="0 0 16 16">
                <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514" />
                <path
                    d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-3.59 1.787A.5.5 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.5 4.5 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
            </svg>

            Hotels</button>
        <button class="s-btn" onclick="changeheadingText3()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                <path
                    d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z" />
                <path
                    d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z" />
            </svg>
            Things to DO</button>
        <button class="s-btn" onclick="changeheadingText4()">

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16">
                <path fill="currentColor"
                    d="M3.25 3a.75.75 0 0 1 .75.75v1.5a.75.75 0 1 1-1.5 0v-1.5A.75.75 0 0 1 3.25 3zm9.5 0a.75.75 0 0 1 .75.75v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 .75-.75zm-9.5 1.75v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm9.5 0v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm-9.5 1.75v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm9.5 0v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm-9.5 1.75v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm9.5 0v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm-9.5 1.75v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm9.5 0v1.5a.75.75 0 1 1-1.5 0v-1.5a.75.75 0 0 1 1.5 0zm-5.25 2.75a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-4.5a.75.75 0 0 1-.75-.75v-.5zm.25.75a.25.25 0 0 0-.25.25v.5a.25.25 0 0 0 .25.25h4.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-4.5z" />
            </svg>



            Resturant</button>
        <button class="s-btn" onclick="changeheadingText5()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16">

                <path fill="#000" d="M4.5 13v-4.5h3V13h5V8.5h3L8 3 .5 8.5H4V13z" />

                <path fill="#000"
                    d="M8 6.5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zM8 7c.28 0 .5.22.5.5s-.22.5-.5.5-.5-.22-.5-.5.22-.5.5-.5z" />
            </svg>
            Holiday Homes</button>
    </div>

    <div class="search">
        <input placeholder="Search..." type="text">
        <button type="submit">Search</button>
    </div>

    <div class="img-container">
        <div class="content">
            <img class="cont-img" src="images/container image.png" alt="Your Image">
            <div class="text-and-button">
                <h2>Build a <br> trip in <br> minutes</h2>
                <p>Get a personalised <br> itinerary just for <br> you, guided by <br> traveller tips and <br>reviews.
                </p>

                <button class="cont-btn" style="vertical-align:middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                    <span>Start a trip</span></button>
            </div>
        </div>
    </div>



    <div class="image-slider">
        <h2 class="slider-text1">Stay Somewhere award winning.</h2>
        <h3 class="slider-text2">2024’s Travellers’ Choice Awards Best of the Best Hotels</h3>
        <div class="slider-images">
            <img class="slide-img" src="Images/img-1.jpg" alt="Slider Image 1">
            <img class="slide-img" src="Images/img-2.jpg" alt="Slider Image 2">
            <img class="slide-img" src="Images/img-3.jpg" alt="Slider Image 3">
            <img class="slide-img" src="Images/img-4.jpg" alt="Slider Image 4">
            <img class="slide-img" src="Images/img-5.jpg" alt="Slider Image 5">
            <img class="slide-img" src="Images/img-6.jpg" alt="Slider Image 6">
        </div>
        <button class="slider-btn prev">&#10094;</button>
        <button class="slider-btn next">&#10095;</button>



    </div>

    <div class="image-slider2">
        <h2 class="slider-text1">Stay Somewhere award winning.</h2>
        <h3 class="slider-text2">2024’s Travellers’ Choice Awards Best of the Best Hotels</h3>
        <div class="slider-images">
            <img class="slide-img" src="Images/img-6.jpg" alt="Slider Image 1">
            <img class="slide-img" src="Images/img-7.jpg" alt="Slider Image 2">
            <img class="slide-img" src="Images/img-8.jpg" alt="Slider Image 3">
            <img class="slide-img" src="Images/img-9.jpg" alt="Slider Image 4">
            <img class="slide-img" src="Images/img-10.jpg" alt="Slider Image 5">
            <img class="slide-img" src="Images/img-1.jpg" alt="Slider Image 6">
        </div>
        <button class="slider-btn prev">&#10094;</button>
        <button class="slider-btn next">&#10095;</button>



    </div>



    <div class="img-container1">
        <div class="content1">
            <img class="cont-img1" src="images/last-img.png.jpg" alt="Your Image">
            <div class="text-and-button1">
                <h2>Travellers' Choice <br> Awards Best of the </h2>
                <p>Among our top 1% of places, stays, <br> eats, and experiences—decided by <br> you.
                </p>

                <button class="cont-btn1" style="vertical-align:middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>
                    <span>See the winners</span></button>
            </div>
        </div>
    </div>

    <footer>
        <div class="wrap">
            <div class="upper_side contents">
                <ul class="flex">
                    <li class="first_depth">
                        <p class="title">About</p>
                        <ul class="second_depth">
                            <li class="white">About us</li>
                            <li><a href="#">Press</a></li> <br>
                            <li><a href="#">Carrers</a></li>
                            <li><a href="#">Resources</a></li>
                            <li><a href="#">policies</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </li>
                    <li class="first_depth">
                        <p class="title">Explore</p>
                        <ul class="second_depth">
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Add a place</a></li>
                            <li><a href="#">join</a></li>
                            <li><a href="#">Help centre</a></li>
                            <li><a href="#">Traveller's choice</a></li>
                        </ul>
                    </li>
                    <li class="first_depth">
                        <p class="title">Do Business with us</p>
                        <ul class="second_depth">
                            <li><a href="#">Owners</a></li>
                            <li><a href="#">Advantages</a></li>
                            <li><a href="#">Sponcered placements</a></li>
                            <li><a href="#">Get the app</a></li>
                            <li><a href="#">iphone App</a></li>
                            <li><a href="#">Android app</a></li>
                        </ul>
                    </li>
                    <li class="first_depth">
                        <p class="title">COMPANY</p>
                        <ul class="second_depth">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">CA Supply Chains Act</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Affilites</a></li>
                            <li><a href="#">Recall Info</a></li>
                            <li><a href="#">Inclusion and Diversity</a></li>
                        </ul>
                    </li>
                    <li class="first_depth">
                        <p class="title">Tripadvisor sites</p>
                        <ul class="second_depth">
                            <li>
                            <li>Book tours and attraction tickets on Viator</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="mid_side contents">
                <ul class="flex">
                    <li>
                        <p class="title">Book your first Trip</p>
                        <ul class="second_depth">
                            <li>
                                <p>Find your vacation</p>
                                <button class="store">Start a Trip</button>
                            </li>
                            <li></li>
                        </ul>
                    </li>
                    <li>
                        <p class="title">FOLLOW VANS</p>
                        <ul class="second_depth flex sns">
                            <li><a href="https://www.facebook.com/rajdillananta2004"><i class="fab fa-facebook-f">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                        </svg></i></a></li>
                            <li><a href="https://twitter.com/AnantaFact"><i class="fab fa-twitter"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                            <path
                                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                        </svg></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCJNLZEDrs4OtiUnTMhSmMEg"><i
                                        class="fab fa-youtube"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0" />
                                        </svg></i></a></li>
                            <li><a href="https://www.instagram.com/ananta_narayan_sethy/"><i class="fab fa-instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                        </svg></i></a></li>
                        </ul>
                    </li>
                    <li>
                        <p class="title">SUBSCRIBE</p>
                        <ul class="second_depth">
                            <li>
                                <p>Receive latest update and offers.</p>
                            </li>
                            <li>
                                <div class="input_box flex">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fas fa-chevron-right">GO</i></button>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="lower_side contents">
                <ul class="flex">
                    <li class="logo"></li>
                    <li>&copy; Tripadvisor</li>
                    <li><a href="#">© 2024 Tripadvisor LLC All rights reserved.</a></li>
                </ul>
            </div>
        </div>
    </footer>





</body>

</html>
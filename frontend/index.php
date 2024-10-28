<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>All our stories</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/softkeys-0.0.1.js"></script>
        <link rel="stylesheet" href="css/softkeys-0.0.1.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="attract-screen">
            <div class="attractor"></div>
            <div class="attract-screen-title">Migration stories</div>
            <div class="attract-screen-text-content">
                Explore a rich selection of stories from the Migration Museum's visitors. Help us preserve migration stories for future generations by adding your own story to our growing collection of over 7,000 story discs.
            </div>
            <button class="attract-screen-button">Touch the screen to start</button>
        </div>
        <div id="search-inst">
            <div class="qr-cta"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; Search by Keyword Across Thousands of Stories</div>
        </div>
        <div id="search-circle"></div>
        <div id="search-container" style="position: relative;">

            <input type="text" id="search-input" name="search-input" placeholder="">




            <div id="suggestions-container" style="position: absolute; top: 100%; left: 0; right: 0; display: none;"></div>
        </div>
        <div class="search-results">
            Results found for '':

        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">


                <div class="swiper-slide circle-container" style="background-color: #;">
                    <div class="title"><span></span></div>
                    <div class="body-text"  style="font-size:;"><span></span></div>
                    <div class="author"></div>

                    <div class="like-cta" >Like</div>
                    <button class="like-container" id="like-container" data-story-id="" data-story-keywords=""><span class="like-icon"> <i class="fas fa-heart"></i> </span></button>
                </div>

            </div>

        </div>
        <div id="write-cta">
            <div class="qr-cta">Write Your Story and Leave a Legacy</div>
        </div>
        <div id="qr-container">
            <div id="qr-code">
                <i class="fas fa-times"></i><br/>
                <!-- Replace with your actual QR code image -->
                <div class="qr-cta">Tell your story your way</div>
                <div class="qr-container_both">
                    <div class="qr-container_left">

                        <img src="images/qrcode.png" alt="QR Code">
                        <div class="qr-cta" style="margin-top:12px;">Scan the QR and write on your mobile</div>
                    </div>
                    <div class="qr-container_right">

                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-keyboard" viewBox="0 0 16 16">
                            <path d="M14 5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zM2 4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
                            <path d="M13 10.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm0-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5 0A.25.25 0 0 1 8.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 8 8.75zm2 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5a.25.25 0 0 1-.25-.25zm1 2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-5-2A.25.25 0 0 1 6.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 6 8.75zm-2 0A.25.25 0 0 1 4.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 4 8.75zm-2 0A.25.25 0 0 1 2.25 8h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 8.75zm11-2a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm-2 0A.25.25 0 0 1 9.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 9 6.75zm-2 0A.25.25 0 0 1 7.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 7 6.75zm-2 0A.25.25 0 0 1 5.25 6h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 5 6.75zm-3 0A.25.25 0 0 1 2.25 6h1.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-1.5A.25.25 0 0 1 2 6.75zm0 4a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm2 0a.25.25 0 0 1 .25-.25h5.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-5.5a.25.25 0 0 1-.25-.25z"/>
                            <div class="qr-cta"  style="margin-top:20px;">Or tap here and write on this screen</div>
                        </svg>
                    </div>
                </div>
            </div>


        </div>
        <div id="inactivity-overlay" style="display: none;">
            <p>Are you still there?</p>
            <button id="yes-button">YES</button>
        </div>
        <div class="container-fluid">
            <i class="fas fa-times" id="container-fluid-close"></i><br/>
            <div class="softkeys" data-target="input[name='search-input']"></div>
        </div>
    </div>
    <div class="container-story">
        <h2>Share Your Story</h2><i class="fas fa-times"></i>
        <div class="container-story_ok"><h1>Thank You for Sharing Your Story!</h1> <span>Your submission has been successfully received. Our team will review your story carefully, ensuring it aligns with our exhibit's themes and values. Once approved, your narrative will become a part of the interactive kiosk, allowing visitors to explore and connect with the diverse tapestry of migration stories.<br>Keep an eye out! Your story will soon be available for everyone to see and be inspired by. We appreciate your contribution to enriching our collective understanding of migration experiences.<br>Stay tuned, and thank you for being an integral part of our Migration Museum!</span></div>
        <form id="myForm">
            <div class="form-group">
                <select class="custom-select" id="topic" name="topic" required>
                    <option value="">Select a topic</option>
                    <option value="I migrated here">I migrated here</option>
                    <option value="At least one of my parents migrated here">At least one of my parents migrated here</option>
                    <option value="At least one of my grandparents migrated here">At least one of my grandparents migrated here</option>
                    <option value="No known migrants in my family">No known migrants in my family</option>
                    <option value="Someone in my family emigrated from here">Someone in my family emigrated from here</option>
                </select>
            </div>
            <div class="form-group">

                <textarea class="form-control" id="story" name="story" rows="5" required placeholder="Your story..." autocomplete="off"></textarea>
            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="name" name="name" required placeholder="Your name" autocomplete="off">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="location" name="location" placeholder="City, Country" autocomplete="off">
            </div>
            <div class="form-group">

                <input type="email" class="form-control" id="email" name="email" placeholder="Your email" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">SEND</button>
        </form>
        <div class="softkeys2" data-target="textarea[name='story']"></div>

    </body>

</html>
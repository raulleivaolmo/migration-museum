// attract screen
document.getElementById('attract-screen').addEventListener('click', function() {
    attractor = 0;
    this.style.display = 'none';

});
document.addEventListener('DOMContentLoaded', function() {
    var urlParams = new URLSearchParams(window.location.search);
    if (!urlParams.has('search')) {
        // If 'search' parameter is not present, show the attract screen and make it clickable
        var attractScreen = document.getElementById('attract-screen');
        attractScreen.style.display = 'flex'; // Make sure it's visible if it was hidden by default
        attractor = 1;
        attractScreen.addEventListener('click', function() {
            this.style.display = 'none';
            $('#search-inst').addClass('search-inst-animate');
            $('#write-cta').addClass('write-cta-animate');
            $('#search-circle').css('margin-left', '0px');
            $('#search-container').css('margin-left', '25px');



        });
    } else {
        // If 'search' parameter is present, hide the attract screen immediately
        document.getElementById('attract-screen').style.display = 'none';
        attractor = 0;
    }
});

document.getElementById('attract-screen').addEventListener('click', function() {
    attractor = 0;
    this.style.display = 'none';

});

// clickable buttons and UI behaviours/animations

$(document).ready(function() {


    $('#write-cta').on('touchstart click', function(event) {
        $('#qr-container').css('top', '280px');
    });

    $('#qr-container').on('touchstart click', function(event) {
        $('#qr-container').css('top', '1200px');
    });

    $('.qr-container_right').on('touchstart click', function(event) {
        $('.container-story').css('display', 'block');
    });

    $('.container-story .fas').on('touchstart click', function(event) {
        $('.container-story').css('display', 'none');
    });

});


// Initialize Swiper framework

var swiper = new Swiper(".mySwiper", {

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    initialSlide: 1,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    }
});


function initializeSoftkeys(target) {
    $('.softkeys2').softkeys({
        target: target,
        layout: [
            [
                ['`', '~'],
                ['1', '!'],
                ['2', '@'],
                ['3', '#'],
                ['4', '$'],
                ['5', '%'],
                ['6', '^'],
                ['7', '&amp;'],
                ['8', '*'],
                ['9', '('],
                ['0', ')'],
                ['-', '_'],
                ['=', '+'],
                'delete'
            ],
            [
                'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', ['[', '{'],
                [']', '}']
            ],
            [
                'capslock',
                'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', [';', ':'],
                ["'", '&quot;'],
                ['\\', '|']
            ],
            [
                'shift',
                'z', 'x', 'c', 'v', 'b', 'n', 'm', [',', '&lt;'],
                ['.', '&gt;'],
                ['/', '?'],
                ['@']
            ],
            [
                'space'
            ]
        ]
    });
}

// Initialize softkeys

$(document).ready(function() {
    console.log("I work");
    $('.softkeys').softkeys({
        target: $('.softkeys').data('target'),
        layout: [
            [
                ['1', '!'],
                ['2', '@'],
                ['3', '#'],
                ['4', '$'],
                ['5', '%'],
                ['6', '^'],
                ['7', '&amp;'],
                ['8', '*'],
                ['9', '('],
                ['0', ')'],
                'delete'
            ],
            [
                'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p',
            ],
            [

                'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l',
            ],
            [

                'z', 'x', 'c', 'v', 'b', 'n', 'm',

            ]
        ]
    });

    initializeSoftkeys($(".softkeys2").data('target'));
    // Event listener for form inputs within .container-story
    $('.container-story').on('focusin', 'textarea, input', function() {
        var target = $(this).prop('tagName').toLowerCase() + "[name='" + $(this).attr('name') + "']";
        $(".softkeys2").data('target', target);
        // Remove previous softkeys instance
        $('.softkeys2').empty();


        initializeSoftkeys(target);
    });



});

// allows to search for a query

document.querySelector('.softkeys').addEventListener('click', function() {

    var searchText = document.getElementById('search-input').value;
    var suggestionsContainer = document.getElementById('suggestions-container');
    if (searchText.length > 2) {
        // Create a new XMLHttpRequest
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'search_suggestions.php?query=' + encodeURIComponent(searchText), true);
        xhr.onload = function() {
            if (this.status == 200) {
                suggestionsContainer.innerHTML = this.responseText;
                suggestionsContainer.style.display = 'block';
            }
        };
        xhr.send();
    } else {
        suggestionsContainer.style.display = 'none';
    }

});



// Shows the touch keyboard when click on Search button
document.querySelector('#search-button').addEventListener('click', function() {
    $('#search-inst').css('display', 'none');
    $('#search-input').css('opacity', '1');
    $('.container-fluid').css('top', '345px');
    document.getElementById('search-input').value = "";
});

// Closes touch keyboard
$('#container-fluid-close').on('touchstart click', function(event) {
    $('.container-fluid').css('top', '1200px');
    document.getElementById('search-input').value = "";
    var suggestionsContainer = document.getElementById('suggestions-container');
    suggestionsContainer.innerHTML = "";
    suggestionsContainer.style.display = 'block';
});



// Vote for each story

$(document).ready(function() {
    // Assuming 'body' is the parent that exists on page load.
    // You can replace 'body' with a closer static parent container for better performance.
    $('body').on('touchstart click', '.like-container', function(event) {
        console.log('works');
        var storyId = $(this).data('story-id'); // Getting the story ID from data attribute
        var currentButton = $(this); // 'this' refers to the .like-container that was clicked
        var keywords = $(this).data('story-keywords');

        // Check if the button is already disabled
        if (currentButton.css('background-color') === 'rgb(204, 204, 204)') { // 'rgb(204, 204, 204)' is the RGB representation of '#cccccc'
            // If it is already disabled, change the background color to black
            currentButton.css('background-color', 'black');
            return; // Skip the rest of the logic if we're just changing the color to black
        } else {
            // Disable the button by changing its background color to grey
            currentButton.css('background-color', '#cccccc');
        }
        $.ajax({
            type: 'POST',
            url: 'like_story.php',
            data: {
                storyId: storyId
            },
            success: function(response) {
                console.log('Like updated successfully');

            },
            error: function(xhr, status, error) {
                console.error('Error updating like:', status, error);
            }
        });


        $.ajax({
            type: "POST",
            url: "store_keywords.php", // PHP script to handle storing keywords in session
            data: {
                keywords: keywords
            },
            success: function(response) {
                console.log('Keywords stored in session:', response);
            }
        });
    });
});


// Timer for inactivity
let inactivityTimer;
var attractor = 1;

function resetInactivityTimer() {
    clearTimeout(inactivityTimer); // Clear the current inactivity timer
    // Set a new timer

    if (attractor == 0) {
        inactivityTimer = setTimeout(function() {
            sendDataToServer(sessionCode, 'inactivity');
            document.getElementById('inactivity-overlay').style.display = 'flex'; // Show the overlay
            // Set another timer for the "YES" button
            setTimeout(function() {
                if (document.getElementById('inactivity-overlay').style.display === 'flex') {
                    sendDataToServer(sessionCode, 'inactivity timeout');
                    // Get the current URL without the query string
                    var currentUrlWithoutQueryString = window.location.protocol + "//" + window.location.host + window.location.pathname;

                    // Redirect the browser to the URL without the query string
                    window.location.href = currentUrlWithoutQueryString;
                }
            }, 30000); // 30 seconds to press YES
        }, 60000); // 30 seconds of inactivity
    }
}

// Reset the timer on various events
['click', 'mousemove', 'keypress', 'touchstart'].forEach(function(event) {
    //sendDataToServer(sessionCode, 'inactivity move mouse');
    window.addEventListener(event, resetInactivityTimer);
});

// Function to hide overlay and reset timer
function continueSession() {
    sendDataToServer(sessionCode, 'inactivity continue session');
    document.getElementById('inactivity-overlay').style.display = 'none';
    resetInactivityTimer(); // Reset timer as the user is active
}

document.getElementById('yes-button').addEventListener('click', continueSession);

// Initialize the timer when the script loads
resetInactivityTimer();


// Set the timeout duration in milliseconds (3 minutes = 180000 ms)
const timeoutDuration = 180000;
let timeout;

// Function to reload the page
const reloadPage = () => {
    location.reload();
};

// Function to reset the timeout
const resetTimeout = () => {
    clearTimeout(timeout);
    timeout = setTimeout(reloadPage, timeoutDuration);
};

// Function to stop the timeout
const stopTimeout = () => {
    clearTimeout(timeout);
};


// Event listeners to stop the timeout on touch or click
window.addEventListener('touchstart', stopTimeout);
window.addEventListener('click', stopTimeout);

// Initialize the timeout
resetTimeout();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Merchant Panel</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg+xml">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg+xml">
    <meta name="description" content="Secure login to Merchant Management Dashboard">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>


<body>
    <div class="page_main">
        <div class="page_main-content">
            <div class="header_section">
                <div class="header_left-content">
                    <img src="/assets/images/main_logo.svg" alt="logo">
                    <div class="left-content_sec">
                        <p class="name_text">ashirwad agashivnagar</p>
                        <p class="name-subtext">Gramin Bigarsheti Sahakari Patsanstha Maryat</p>
                    </div>
                </div>
                <div class="header_right-content">
                    <p class="contact_text">Need assistance? <span>Contact Us</span></p>
                </div>
            </div>
            <div class="signin_main">
                <div class="signin_section">
                    <h2 class="signin_head-text">Sign in to your account</h2>
                    <p class="signin_head-subtext">Please enter your email id & password to continue</p>
                    <form class="signin_form">
                        <div class="signin_input_sec email-content">
                            <label class="field_title email_title">EMAIL ID</label>
                            <input type="text" class="email_input" placeholder="Enter your email id"/>
                            <small class="error email_error"></small>
                        </div>
                        <div class="signin_input-sec password_content">
                            <label class="field_title password_title">PASSWORD</label>
                            <input type="password" class="password_input" placeholder="Enter your password"/>
                            <small class="error password_error"></small>
                            <!-- <p class="toggle_password">Show Password</p>  -->
                            <!-- please confirm above one need or not its not in the figma functionality also added  -->
                        </div>
                        <div class="signin-opts">
                            <div class="keep_signin"><input type="checkbox"> Keep me signed in</div>
                            <a href="#" class="forgot_password">Forgot Password?</a>
                        </div>
                        <p class="security_concern">For your security, we’ll keep you signed in for a limited time.</p>
                        <button class="signin_btn">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Snackbar -->
<div id="snackbar"></div>

<!-- Loader -->
<div id="loader" class="loader hidden"></div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.toggle_password').on('click', function () {
      const signInInput = $('.password_input');
      if (signInInput.attr('type') === 'password') {
        signInInput.attr('type', 'text');
        $(this).text('Hide Password');
      } else {
        signInInput.attr('type', 'password');
        $(this).text('Show Password');
      }
    });

$(document).ready(function() {

    $(".signin_form").on("submit", function(e) {

        e.preventDefault();

        let isValid = true;

        let email = $(".email_input").val().trim();
        let password = $(".password_input").val().trim();

        $(".error").text("");
        $("input").removeClass("input-error");

        // Email validation
        if (email === "") {
            $(".email_error").text("Email field cannot be empty");
            $(".email_input").addClass("input-error");
            isValid = false;
        }
        else if (!validateEmail(email)) {
            $(".email_error").text("Please enter a valid email address");
            $(".email_input").addClass("input-error");
            isValid = false;
        }

        // Password validation
        if (password === "") {
            $(".password_error").text("Password field cannot be empty");
            $(".password_input").addClass("input-error");
            isValid = false;
        }
        else if (password.length < 6) {
            $(".password_error").text("Password must be at least 6 characters");
            $(".password_input").addClass("input-error");
            isValid = false;
        }
        if (isValid) {
            showSnackbar('Login successful', 'success');
            redirectWithTransition();
            localStorage.setItem('isLoggedIn', 'true');
        } else {
            showSnackbar('Invalid username or password', 'error');
        }




    });

    // Remove error while typing
    $(".email_input, .password_input").on("input", function() {
        $(this).removeClass("input-error");
        $(this).siblings(".error").text("");
    });

    function validateEmail(email) {
        let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

   function showSnackbar(message, type = 'success') {
    const sb = document.getElementById('snackbar');
    sb.textContent = message;
    sb.className = `show ${type}`;

    setTimeout(() => {
        sb.className = '';
    }, 3000);
}

function showLoader(show = true) {
    document.getElementById('loader')
        .classList.toggle('hidden', !show);
}

function redirectWithTransition() {
    showLoader(true);

    setTimeout(() => {
        document.body.classList.add('fade-out');

        setTimeout(() => {
            window.location.href = '/dashboard';
        }, 400);
    }, 3000);
}

});


</script>

</html>

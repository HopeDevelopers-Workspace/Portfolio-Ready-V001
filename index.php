<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Ready: Home Page</title>



    <link rel="shortcut icon" href="Assets/Img/illustration-1.jpg" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <link rel="stylesheet" href="Assets/CSS/promo.css">

    <!-- Font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


 


  

<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md fixed-top flex-column bg-light">

      <!-- Promotion start -->
        <!-- <div class="announcement container-fluid">
          <span class="close">&#x2715;</span>
          <div class="text">
            <span class="is-desktop">
              <strong>PROMOTION</strong>. Get upto 20% off . Use Coupon
            </span>
            <span class="is-mobile">Use Coupon Code for <strong>50% OFF</strong></span>
          </div>
          <div class="coupon">
            <input type="text" value="CODEPEN50" id="couponCode" readonly />
            <div class="tooltip">
              <button onclick="myFunction()" onmouseout="outFunc()">
                <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                Copy
              </button>
            </div>
          </div>
          <span id="timer" class="is-desktop"></span>
        </div> -->
        <!-- Promotion End -->

        <div class="container-fluid">
         
          <!-- Logo HTML -->
          <a href="#" class="logo-container">
            <i class="fas fa-code logo-icon"></i>
            <span class="logo-text-portfolio">Portfolio</span>
            <span class="logo-text-ready">Ready</span>
          </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="black" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-md-0">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link text-dark" href="#">Home</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link text-dark" href="courses.php">Courses</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link text-dark" href="#">Blog</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link text-dark" href="#">Shop</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link text-dark" href="#">Pages</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link text-dark" href="#">Events</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn  btn-outline-primary me-2" onclick="window.location='login.php'" type="button">Login</button>
                    <button class="btn btn-primary" onclick="window.location='sign-up.php'" type="button">Enroll Now</button>
                </form>
            </div>
        </div>
    </nav>
    
</header>

<!-- Hero Section Start -->
<section class="hero-sec container-fluid pt-5">
    <div class="row mt-5 d-flex gap-2 align-items-center justify-content-center">
        <div class="col-md-5 text-center text-md-start">
            <p class="text-light" style="font-size: 0.9rem; font-family:sans-serif;">#Mastering Web Development</p>
            <h1 class="text-light" style="font-family: rowdies;">Learn to design, code, and <span style="color: #4BE5CA;">launch websites</span>  from scratch</h1>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-4 mb-4">
                <button class="btn btn-outline-light me-md-2" type="button" aria-label="View Courses">View Courses</button>
                <a class="link text-light text-decoration-none" href="#">Get Free Consultation</a>
            </div>
            <div class="mt-3 search d-flex align-items-center">
                <i class="fa fa-search text-light me-2"></i>
                <input type="text" class="form-control" placeholder="What do you want to learn today?" aria-label="Search courses">
                <button class="btn btn-primary ms-2" type="button">Search</button>
            </div>
        </div>
       <div class="col-md-4">
            <img src="Assets/Img/hero-4.png" class="img-fluid ms-auto hero-image" alt="Hero image showcasing coding">
            
        </div>
    </div>
</section>


<!-- Client 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
   
    <div class="container overflow-hidden">
      <div class="row gy-5">
        <div class="col-6 col-md-3 align-self-center text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="125" height="65" viewBox="0 0 125 65" fill="currentColor" class="text-dark mt-xl-5">
            <path d="M122.61,13.9c-1.32,0-2.4,1.13-2.4,2.52s1.07,2.52,2.4,2.52c1.32,0,2.39-1.13,2.39-2.52h0c0-1.4-1.07-2.52-2.39-2.52Zm0,4.74c-1.16,0-2.11-.99-2.11-2.22h0c0-1.23,.94-2.22,2.11-2.22h0c1.16,0,2.1,.99,2.1,2.21,0,1.22-.93,2.22-2.09,2.22h0Zm1.23-2.88c0-.24-.1-.49-.3-.61-.2-.13-.43-.14-.65-.14h-1.17v2.82h.33v-1.3h.6l.77,1.3h.39l-.81-1.3c.48-.01,.85-.22,.85-.77h0Zm-1.29,.5h-.5v-1h.77c.33,0,.7,.05,.7,.49,0,.57-.58,.51-.96,.51ZM42.33,58.01l-15.62-8.02c-.34-.19-.52-.66-.51-.98l.04-4.43c0-.31,.06-.63,.45-.93,1.67-1.12,6.84-4.13,12.19-12.33,7.12-10.93,0-20.1-11.12-17.61-9.88,2.22-19.94,7.85-24.3,10.9C-.43,27.34,.11,30.64,0,33.59c.22,1.25,.65,1.14,1.62-.11,7.24-7.04,18.25-12.38,20.3-13.29s6.91-3.98,12.64-2.61c5.5,1.31,4.16,9.17,2.48,12.49-1.84,3.63-7.07,8.92-9.45,10.22-.9,.5-1.24,0-1.24-.8l.38-17.1c0-1.14-.49-1.65-1.57-1.25l-1.73,.91c-1.19,.74-1.13,1.02-1.24,1.93l-.26,19.71c0,.43-.2,.77-.42,.87l-5.64,3.33c-1.3,.68-.97,1.7,0,2.05l4.54,2.27c1.08,.45,1.4,.79,1.4,1.93l-.16,9.54c4.05-.85,4.32-2.9,4.43-4.26v-2.9c.11-.68,.49-.91,1.03-.79l13.18,6.7c1.19,.57,1.84,.34,2.7-1.25,.86-1.59,.97-2.38-.65-3.18h0Zm23.02-24.07c-1.83,1.11-2.68,3.19-1.96,4.51,.72,1.31,2.9,1.53,4.73,.42,1.83-1.11,2.62-3.14,1.9-4.45-.72-1.31-2.84-1.59-4.68-.48Zm-6.76,1.41c-.5,.64-1.46,2.58-2,3.78-.54,1.19-1.67,3.89-2.81,3.89-1.2,0-1.35-3.12-1.35-4.26s-.65-1.31-.97-1.25-1.24,.4-1.51,1.59c-.27,1.19-1.73,6.36-3.35,6.36-1.03,0-1.78-3.12-1.84-4.09-.05-.96-.49-1.76-1.4-1.76-.65,0-1.46,.34-1.78,.74s-.38,1.02-2.11,.62c-1.57-.06-3.08,.8-4.91,4.03-1.11,1.95-2,5.58-.32,7.04,1.57,1.36,4.32-1.08,5.13-2.1,.81-1.02,1.51-1.76,1.84-2.33,.32-.57,.65-.51,.81,.06,.16,.57,1.08,2.78,2.27,2.73,1.19-.06,2.7-1.02,4.48-4.32,.32-.68,.81-.62,.92-.06,.11,.57,.81,2.44,2,2.44s2.4-1.89,3.02-3.01c.43-.77,1.08-.4,1.08,.34s-.32,18.17-.32,18.17c0,.79,.3,1.02,.84,1.02h2.35c.43,0,.81-.4,.81-1.02l.49-28.26c0-.68-.73-1.16-1.35-.37h0Zm-18.36,11.13c-.49,.85-1.78,3.12-2.92,2.73-.59-.34,.2-2.61,.59-3.41,.59-1.19,2.34-3.09,3.13-2.61,.76,.45-.32,2.44-.81,3.29h0ZM122.52,29.06c-.22,.2-.57,.54-1.35,.17-1.35-.57-1.46-3.24-2.16-5.68-.63-2.19-2.15-2.06-2.7-1.05l-1.65,2.78c-.3,.57-.94,1.87-1.59,1.87-.76,0-.42-1.14-.38-2.27,.03-.77-.43-1.73-1.19-1.73-.86,0-1.78,1.39-2.48,2.98-.49,1.11-1.76,5.37-3.35,5.37-1.03,0-1.13-3.12-1.19-4.09s-.38-2.16-1.3-2.16c-.62,0-1.03,.34-1.35,.74-.32,.4-.38,.74-1.51,.57-1.57-.06-4.16,1.48-5.99,4.71-1.11,1.95-2.44,6.04-.76,7.5,1.57,1.36,4.37-1.82,5.18-2.84,.81-1.02,1.51-1.76,1.84-2.33,.32-.57,.65-.51,.81,.06,.16,.57,1.08,2.78,2.27,2.73,1.19-.06,2.16-.34,3.94-3.64,.32-.68,.92-.77,1.03-.2s.22,2.07,1.35,2.07c1.94,0,4.15-4.97,4.7-6.13,.49-1.02,1.27-.74,1.54,.03,.39,1.1,.73,4.63,2.83,4.63s3.54-2.36,3.97-3.1c.49-.74,.23-1.68-.51-.99h0Zm-22.89,3.41c-.49,.85-1.57,2.73-2.7,2.33-.59-.34,.14-1.99,.54-2.78,.59-1.19,2.33-3.12,3.13-2.64,.75,.45-.49,2.24-.97,3.1h0Zm-10.43-2.98s-4.59-3.52-5.89-5.11c-.87-1.07-.27-1.87,.27-2.33,3.24-2.27,8.31-5.79,10.31-11.25,1.92-5.26-1.08-9.83-3.24-10.56-2.96-1.01-9.23,1.02-12.37,7.16-2.03,3.97-2.97,5.28-3.24,16.07-.05,2.04-.11,4.37-.11,6.93s-.27,9.48-.54,10.79c-1.03,3.07,2.05,1.25,3.46,.06,1.4-1.19,1.3-2.98,1.3-3.75,0-.97,.05-18,.54-21.81,.3-2.37,.65-6.76,3.02-10.56,2.38-3.81,4.81-2.27,5.45-1.65,.65,.62,1.57,2.22,1.08,5.45-.75,5.02-6.26,10.51-7.67,12.21-1.4,1.7-1.08,3.18-.27,4.37,.58,.85,2,2.5,3.46,4.03,1.46,1.53,1.3,2.9,1.08,3.92-.76,3.07-8.64,11.36-8.64,11.36-1.67,1.87,.05,4.94,.65,5.96,.6,1.02,1.35,.68,1.84-.17,1.94-3.8,10.31-13.01,10.31-13.01,2.43-3.24,1.41-6.36-.81-8.12h0Z" fill-rule="evenodd" />
          </svg>
        </div>
        <div class="col-6 col-md-3 align-self-center text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="125" height="65" viewBox="0 0 125 65" fill="currentColor" class="text-dark mt-xl-5">
            <path d="M67.37,.18c-.41,.05-.8,1.32-1.59,1.98-.58,.47-1.3,.45-1.68,1.03-.15,.22-.1,.59-.26,.95-.32,.72-1.46,.78-1.46,1.57,0,.85,.95,1.01,1.77,1.61,.64,.48,.7,.82,1.48,1.05,.66,.19,1.65-.43,2.54-.21,.73,.18,1.43,.31,1.6,.94,.14,.58-.01,1.48-.9,1.38-.3-.03-1.6-.39-3.19-.25-1.92,.18-4.11,.71-4.33,2.51-.12,1,1.36,2.19,2.79,1.95,.99-.16,.52-1.14,1.06-1.62,.7-.61,4.7,2.13,8.42,2.13,1.56,0,2.73-.33,3.89-1.35,.11-.08,.24-.24,.41-.25,.16,.01,.43,.14,.52,.2,2.99,2.02,5.26,6.08,16.26,6.12,1.55,0,3.31,.63,4.75,1.73,1.28,1,2.04,2.55,2.77,4.12,1.1,2.36,3.07,4.66,6.07,7.22,.16,.14,2.63,1.75,2.82,1.87,.03,.02,.21,.38,.15,.58-.07,1.53-.34,5.99,3.62,6.19,.96,.04,.71-.53,.71-.92,0-.78-.17-1.55,.32-2.34,.67-1.09-1.41-1.6-1.35-3.96,.05-1.76-1.72-1.46-2.61-2.8-.52-.78-.97-1.19-.94-2.14,.2-5.35-1.36-8.87-2.13-9.74-.61-.65-1.11-.91-.55-1.21,3.3-1.83,4.05-3.54,4.05-3.54,1.76-3.47,3.33-6.63,5.51-8.03,.44-.29,1.56-.99,2.25-1.27,2.03-.8,3.1-1.29,3.69-1.77,.93-.76,1.67-2.36,.78-3.32-1.11-1.19-3.04-.25-3.89,.18-6.07,3.03-6.96,8.36-9.07,11.43-1.68,2.45-4.4,4.25-6.84,4.4-1.83,.11-3.8-.2-5.76-.92-4.77-1.76-7.38-4.03-8-4.43-1.28-.83-11.23-9.04-19.29-9.37,0,0-1-1.68-1.25-1.71-.59-.06-1.19,1-1.62,1.13-.41,.11-1.09-1.16-1.5-1.1h0ZM31.88,49.16c-.76-.02-1.4-.54-1.4-1.19V26.85h-8.29v23.29c0,1.14,1.1,2.07,2.45,2.07h14.49c1.36,0,2.45-.93,2.45-2.07V26.85h-8.28v21.13c0,.65-.65,1.17-1.41,1.19Zm27.75-22.31h-12.54c-1.49,0-2.7,1.02-2.69,2.27h0v23.09h8.3V31.03c0-.65,.63-1.17,1.4-1.16h0c.77,0,1.4,.5,1.41,1.15v21.2h8.26V31.01c.01-.64,.63-1.15,1.41-1.15s1.4,.51,1.41,1.16v21.18h8.3V29.12c0-1.25-1.2-2.27-2.69-2.27h-12.55ZM16.66,45.84H8.28v6.37H0V26.85H16.71c1.5,0,2.66,1.02,2.66,2.28v14.42c0,1.26-1.21,2.28-2.71,2.29h-.01Zm-5.56-14.76c.01-.66-.62-1.2-1.4-1.21h-1.41v12.83h1.41c.73,0,1.41-.49,1.4-1.19v-10.43h0Zm95.93,18.13c0,1.72-1.64,3.12-3.68,3.12-2.04,0-3.7-1.39-3.71-3.11,0,0,0-.01,0-.02,0-1.7,1.65-3.12,3.65-3.12,2.09,0,3.74,1.38,3.74,3.12Zm-3.73-2.67c-1.67,0-3.06,1.21-3.06,2.67s1.4,2.67,3.11,2.67,3.09-1.2,3.09-2.67-1.38-2.67-3.09-2.67h-.05Zm1.79,4.47h-.99l-1.27-1.42v1.42h-.81v-3.6h.85c1.16,0,1.77,.37,1.77,1.07,0,.47-.36,.88-.87,1.01l-.06,.02,1.38,1.5h0Zm-2.12-2.01c.57,0,.88-.17,.88-.51,0-.31-.3-.46-.86-.46h-.17v.98h.14Zm-14.19,3.2v-6.37h-2.82v6.37h-8.28V29.12c0-1.26,1.21-2.27,2.69-2.27h13.99c1.49,0,2.7,1.02,2.7,2.27h0v23.09h-8.28Zm0-9.51v-11.68c-.02-.65-.64-1.14-1.41-1.14-.77,0-1.39,.52-1.41,1.16v11.66h2.82ZM.23,65v-6.97h.92v.65c.22-.26,.46-.45,.74-.58,.27-.13,.61-.19,1-.19,.51,0,.96,.11,1.35,.33,.39,.22,.69,.54,.89,.94,.2,.4,.3,.85,.3,1.33,0,.51-.11,.98-.33,1.39-.22,.41-.54,.73-.96,.95-.4,.21-.85,.33-1.32,.33-.34,0-.64-.06-.91-.18-.26-.11-.48-.27-.66-.46v2.45H.23Zm.92-4.42c0,.65,.16,1.13,.47,1.44,.31,.31,.69,.46,1.13,.46s.84-.16,1.16-.48c.32-.32,.48-.82,.48-1.49s-.16-1.12-.47-1.44c-.31-.32-.69-.48-1.13-.48s-.82,.17-1.15,.51c-.33,.34-.5,.84-.5,1.48h0Zm15.22,2.49v-.74c-.47,.57-1.1,.85-1.9,.85-.35,0-.68-.06-.99-.17-.31-.11-.53-.26-.68-.43-.16-.19-.27-.41-.31-.63-.04-.17-.06-.43-.06-.8v-3.12h1.02v2.79c0,.45,.02,.75,.06,.9,.07,.22,.2,.4,.41,.53,.21,.13,.46,.19,.77,.19s.59-.07,.86-.2c.27-.13,.46-.31,.57-.54,.11-.23,.17-.56,.17-.98v-2.7h1.02v5.04h-.91Zm8.28,0v-5.04h.91v.71c.19-.25,.45-.45,.75-.59,.31-.15,.67-.23,1.07-.23,.44,0,.81,.08,1.09,.23,.29,.16,.49,.37,.6,.65,.48-.59,1.09-.88,1.85-.88,.6,0,1.05,.14,1.37,.42,.32,.28,.48,.7,.48,1.28v3.46h-1.01v-3.17c0-.34-.03-.59-.1-.74-.07-.15-.19-.28-.36-.36-.18-.09-.4-.14-.61-.14-.42,0-.77,.12-1.05,.35-.28,.24-.42,.61-.42,1.13v2.93h-1.02v-3.27c0-.38-.08-.67-.25-.85-.17-.19-.44-.28-.81-.28-.29,0-.55,.06-.79,.19-.24,.13-.42,.31-.53,.55-.11,.24-.16,.59-.16,1.05v2.61h-1.02Zm19.32-.62c-.38,.27-.74,.46-1.09,.57-.36,.11-.74,.17-1.12,.17-.66,0-1.16-.13-1.52-.4-.35-.27-.53-.62-.53-1.04,0-.25,.07-.47,.2-.68,.13-.2,.31-.36,.52-.49,.22-.12,.46-.22,.73-.28,.3-.06,.6-.1,.9-.13,.82-.08,1.43-.18,1.81-.3,0-.12,0-.19,0-.22,0-.35-.1-.59-.29-.73-.26-.19-.65-.29-1.16-.29-.48,0-.83,.07-1.06,.21-.23,.14-.39,.39-.5,.75l-.99-.12c.09-.35,.24-.64,.45-.86,.21-.22,.51-.39,.9-.51,.39-.12,.84-.18,1.36-.18s.93,.05,1.25,.15c.32,.1,.56,.23,.71,.38,.15,.15,.25,.35,.32,.58,.03,.14,.05,.41,.05,.79v1.14c0,.79,.02,1.3,.07,1.51,.04,.21,.13,.41,.26,.61h-1.06c-.11-.19-.18-.41-.2-.62h0Zm-.09-1.91c-.37,.13-.92,.23-1.66,.32-.42,.05-.71,.11-.89,.17-.16,.06-.3,.15-.4,.28-.09,.12-.14,.25-.14,.4,0,.23,.1,.42,.31,.57,.2,.15,.5,.23,.9,.23s.74-.07,1.04-.21c.29-.13,.53-.34,.67-.59,.11-.19,.16-.48,.16-.85v-.31h0Zm8.67,2.53v-.97h1.16v.97h-1.16Zm12.62-1.85l1,.11c-.11,.58-.39,1.03-.84,1.36-.45,.33-1,.49-1.66,.49-.82,0-1.48-.22-1.98-.67-.5-.45-.75-1.1-.75-1.94,0-.54,.11-1.02,.32-1.43,.22-.41,.54-.71,.98-.92,.44-.2,.93-.31,1.43-.31,.65,0,1.19,.14,1.6,.42,.41,.28,.68,.67,.8,1.18l-.99,.13c-.1-.34-.26-.59-.5-.76-.24-.17-.53-.26-.87-.26-.51,0-.93,.15-1.25,.46-.32,.31-.48,.8-.48,1.46s.16,1.17,.46,1.48c.31,.31,.71,.46,1.21,.46,.4,0,.73-.1,1-.31,.27-.2,.44-.52,.51-.95h0Zm7.27-.67c0-.93,.31-1.62,.93-2.07,.52-.37,1.14-.56,1.88-.56,.83,0,1.5,.23,2.02,.68,.52,.45,.78,1.08,.78,1.88,0,.65-.12,1.16-.35,1.53-.23,.37-.58,.67-1.01,.87-.44,.21-.94,.31-1.45,.31-.84,0-1.52-.22-2.04-.68-.52-.45-.78-1.1-.78-1.95h0Zm1.05,0c0,.64,.17,1.13,.5,1.45,.33,.32,.76,.48,1.26,.48s.92-.16,1.26-.48c.33-.32,.5-.81,.5-1.48,0-.62-.17-1.1-.5-1.42-.34-.32-.76-.48-1.26-.48s-.93,.16-1.26,.48c-.34,.32-.5,.8-.5,1.45Zm11.54,2.52v-5.04h.91v.71c.19-.25,.45-.45,.75-.59,.31-.15,.67-.23,1.07-.23,.44,0,.81,.08,1.09,.23,.29,.16,.49,.37,.6,.65,.48-.59,1.09-.88,1.85-.88,.59,0,1.05,.14,1.37,.42,.32,.28,.48,.7,.48,1.28v3.46h-1.01v-3.17c0-.34-.03-.59-.1-.74-.07-.15-.19-.27-.36-.36-.18-.09-.39-.14-.61-.14-.42,0-.77,.12-1.05,.35-.28,.24-.42,.61-.42,1.13v2.93h-1.02v-3.27c0-.38-.08-.67-.25-.85-.17-.19-.44-.28-.81-.28-.29,0-.55,.06-.79,.19-.24,.13-.42,.31-.53,.55-.11,.24-.16,.59-.16,1.05v2.61h-1.02Z" />
          </svg>
        </div>
        <div class="col-6 col-md-3 align-self-center text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="currentColor" class="text-dark mt-xl-5">
            <path d="M32.5,0c17.9,0,32.5,14.6,32.5,32.5s-14.6,32.5-32.5,32.5S0,50.4,0,32.5,14.6,0,32.5,0h0Zm0,5.86c14.67,0,26.64,11.97,26.64,26.64s-11.97,26.64-26.64,26.64S5.86,47.17,5.86,32.5,17.83,5.86,32.5,5.86h0Zm15.61,44.09h-12.99V24.44h6.21v20.32h6.78v5.2Zm-15.48-16.37c0,4.65-3.1,7.18-7.53,7.18h-.91c-4.4,0-7.59-2.26-7.59-6.98V14.85h6.21v19.26c0,1.35,.54,2.02,1.62,2.02h.34c1.38,0,1.65-1.32,1.65-2.43V14.85h6.21v18.73h0Zm-11.67,12.39c0,2,1.63,3.62,3.62,3.62s3.62-1.63,3.62-3.62-1.61-3.62-3.62-3.62c-2,0-3.62,1.63-3.62,3.62h0Zm.68,0c0-1.71,1.33-3.07,2.94-3.07s2.94,1.37,2.94,3.07-1.3,3.07-2.94,3.07c-1.62,0-2.94-1.38-2.94-3.07Zm1.62,1.78h.67v-1.5h.55c.77,0,.79,.34,.8,.67,.02,.6,.01,.68,.13,.83h.69c-.14-.2-.11-.3-.14-.86-.02-.36-.05-.78-.52-.87v-.02c.54-.22,.61-.58,.61-.83,0-.94-.81-1.05-1.19-1.05h-1.61v3.62h0Zm.67-3.13h.7c.43,0,.74,.11,.74,.55,0,.26-.1,.58-.66,.58h-.78v-1.13h0Z" fill-rule="evenodd" />
          </svg>
        </div>
        <div class="col-6 col-md-3 align-self-center text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="150" height="65" viewBox="0 0 150 65" fill="currentColor" class="text-dark mt-xl-5">
            <path d="M76.42,3.33c-3.06,3.64-11.77,15.4-12.77,16.92-1.91,2.92-2.08,4.33-2.14,5.27-.06,.92-.06,2.59,1.5,3.95,2.61,2.25,6.26,1.88,9.51,1.88h26.72c1.14,0,1.48-.33,2.1-1.12,2.14-3.15,3.09-6.58,3.09-9.64,0-6.56-4.41-14.82-15.56-18.55l-1.26,1.74c8.85,4.06,12.51,9.37,12.51,16.79,.06,1.99-.49,4.15-1.84,6.14h-25.99c-1.56,0-1.78-1.7-1.22-2.66,2.23-3.83,4.71-7.52,7.44-11.03,2.63-3.39,5.21-6.56,7.93-9.87,.73-.92,.24-1.81-1.22-2.1-3.04-.62-6.21-1.05-10.05-1.05-21.32,0-29.12,11.83-29.12,20.6,0,9.51,7.86,20.54,29.18,20.54,11.83,0,19.58-3.68,24.06-8.41h-4.52c-3.92,3.5-10.65,5.98-19.54,5.98-18.06,0-24.71-9.8-24.71-18.24,.13-7.54,7.27-17.93,25.16-18.28,.68-.02,1.2,.58,.73,1.14h0Zm64.13,54.29c1.07,.15,1.89,.96,1.89,1.92,0,1.09-1.01,1.96-2.25,1.96h-22.91v-14.47h-6.75v14.51h-12.41c-3.36,0-4.05-1.97-4.05-3.79v-10.81h-11.19c-1.11,.72-2.18,1.52-3.32,2.19l-6.64,3.95-8.62-6.09h-13.43v3.64h4.86v-1.99l11.42,7.92-7.8,4.73h-8.48v3.64h9.81c1.05-.69,2.04-1.41,3.13-2.05l6.82-4,8.66,5.98h9.86l-13.03-9.47,6.69-4.22c1.43-.91,2.93-1.67,4.39-2.5v9.53c0,4.02,1.07,6.81,9.45,6.81l47.34-.11c3.66,.05,6-2.39,6-5.34s-2.7-5.35-6-5.35h-17.1c.23-2.01,2.02-3.69,3.84-3.69h17.31l-.05-3.5h-18.36c-5.81,0-10.46,4.66-10.59,10.07-.02,.38,.24,.62,.68,.62l20.83-.08h0Zm-89.68-.05v-3.71h3.34v3.71h-3.34Zm0-10.58h-12.68c-3.43,0-6.08,.87-8.02,2.35-3.51,2.68-4.63,5.51-4.59,6.78h4.57c-2.01,1.45-3.36,3.19-4.07,5.2H11.08c-2.7,0-4.44-1.85-4.44-3.64v-10.81H0v11.23c0,4.04,3.98,6.83,10.35,6.83H50.87v-3.64h-16.09c.08-1.85,2.12-3.71,3.97-3.71h12.11v-3.71h-16.28c-.22-1.09,1.88-3.22,3.49-3.22h12.79v-3.64h0Z" fill-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>
  </section>


<!-- Featured Courses -->
<section class="container my-5">

    <div class="container text-center d-flex align-items-stretch justify-content-center flex-column my-5">
            <span class="text-muted">Top Rated</span>
            <h2 class="text-center mb-4" style="font-family:rowdies;">Featured <span style="color: #24b49a;">Courses</span></h2>
            <p class="text-center">Kickstart your web development journey with our top-rated courses, designed to equip you with practical skills and hands-on experience.</p>            
    </div>


    <div class="row gap-4 d-flex align-items-stretch justify-content-center">
        <!-- Course Card 1 -->
        <div class="col-md-4 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="price">Ksh. 5,399/=</div>
                <img class="card-img-top" src="Assets/Img/Html.jpg" alt="Course 1 Image" loading="lazy">
                <div class="card-body">
                    <h5 class="card-title">Introduction to HTML & CSS</h5>
                    <p class="card-text">Start building beautiful websites.</p>

                    <div class="container">  
                      <a href="#!" class="btn btn-primary text-center d-flex align-items-center justify-content-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z"/>
                        </svg>
                        Enroll
                      </a>
                    </div>
              
                </div>
            </div>
        </div>
        
        <!-- Course Card 2 -->
        <div class="col-md-4 col-sm-6 col-lg-3">
            <div class="card h-100">
                <div class="price">Ksh. 7,599/=</div>
                <img class="card-img-top" src="Assets/Img/illustration-2.jpg" alt="Course 2 Image" loading="lazy">
                <div class="card-body">
                    <h5 class="card-title">JavaScript Essentials</h5>
                    <p class="card-text">Master JavaScript and building interactive websites.</p>

                    <div class="container">  
                      <a href="#!" class="btn btn-primary text-center d-flex align-items-center justify-content-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z"/>
                        </svg>
                        Enroll
                      </a>
                    </div>
               
                </div>
            </div>
        </div>
        
        <!-- Course Card 3 -->
        <div class="col-md-4 col-sm-6   col-lg-3">
            <div class="card  h-100">
                <div class="price">Ksh. 10,999/=</div>
                <div class="ribbon">20% off</div>
                <img class="card-img-top" src="Assets/Img/19362653.jpg" alt="Responsive Web Design Image" loading="lazy">
                <div class="card-body">
                    <h5 class="card-title">Responsive Web Design</h5>
                    <p class="card-text">Learn responsive Web design techniques.</p>

                    <div class="container">  
                      <a href="#!" class="btn btn-primary text-center d-flex align-items-center justify-content-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z"/>
                        </svg>
                        Enroll
                      </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container d-flex align-items-center justify-content-center flex-row mt-5">
        <button type="button" onclick="window.location = 'courses.html'" class="btn text-center explore text-light">Explore Courses</button>
    </div>
</section>


<!-- Why learn With Us -->
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="text-center">
					<span class="text-muted">Our Story</span>
					<h2 class="text-center mb-4" style="font-family:rowdies;">Why <span style="color: #24b49a;">Choose Us?</span></h2>
					<p class="lead">Choose us for expert-led, self-paced online classes that allow you to learn at your own pace, with hands-on projects, personalized support, and real-world skills designed to prepare you for a successful career in web development.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Testimonials -->

<section class="container">
	<div class="row">
		<div class="col-sm-12">

            <div class="container text-center my-5">
                <span class="text-muted">Our Testimonials</span>
                <h2 style="font-family:rowdies;">What <span style="color: #24b49a;">Our Customers</span> Say About Us</h2>
            </div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">The online platform was user-friendly and the videos were of high quality, making it a seamless learning experience. </div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="Assets/Img/client-1.jpg" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Paula Wilson</b></div>
												<div class="details">Media Analyst / SkyNet</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>

							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">The instructors at Portfolio Ready were knowledgeable, patient, and always available to answer any questions I had.</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="Assets/Img/testimonial-1.jpg" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Antonio Moreno</b></div>
												<div class="details">Web Developer / SoftBee</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>
						</div>			
					</div>
		
				</div>
			</div>
		</div>
	</div>
</section>




<!-- Footer 11 - Bootstrap Brain Component -->
<footer class=" py-sm-3 py-md-4 py-xl-6">
    <div class="container-fluid bg-dark py-3 py-md-6 py-xl-9 py-xxl-10">
      <div class="row justify-content-center">
        <div class="col-11">
  
          <!-- Widgets - Bootstrap Brain Component -->
          <section class="mb-4 mb-md-5 mb-xl-9 mb-xxl-10">
            <div class="row gy-4 gy-md-0">
              <div class="col-6 col-md-3">
                <div class="link-wrapper">
                  <h4 class="mb-3 fs-6 text-light">Clients</h4>
                  <ul class="m-0 list-unstyled">
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Templates
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Enterprise
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Extensions
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Managers
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        How to Hire
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="link-wrapper">
                  <h4 class="mb-3 fs-6 text-light">Talent</h4>
                  <ul class="m-0 list-unstyled">
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Operations
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Marketing
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Finance
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Product
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Support
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="link-wrapper">
                  <h4 class="mb-3 fs-6 text-light">Resources</h4>
                  <ul class="m-0 list-unstyled">
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Community
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Resources
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Learning
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Webinars
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Customers
                      </a>
                    </li>
  
                  </ul>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="link-wrapper">
                  <h4 class="mb-3 fs-6 text-light">Company</h4>
                  <ul class="m-0 list-unstyled">
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        About us
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Leadership
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Careers
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Services
                      </a>
                    </li>
                    <li class="mb-1">
                      <a href="#!" class="link-opacity-75 link-underline-opacity-0 link-opacity-100-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Contact Us
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
  
          <!-- Link - Bootstrap Brain Component -->
          <div class="mb-3">
            <div class="row">
              <div class="col-12">
                <div class="link-wrapper">
                  <ul class="m-0 list-unstyled d-flex justify-content-center justify-content-md-start gap-3">
                    <li>
                      <a href="#!" class="fs-7 link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Terms
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="fs-7 link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Privacy
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="fs-7 link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Advertise
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="fs-7 link-underline-opacity-0 link-opacity-75-hover link-underline-opacity-100-hover link-offset-1 link-light">
                        Media
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Copyright - Bootstrap Brain Component -->
          <div class="border-top border-dark-subtle pt-3">
            <div class="row gy-3 align-items-center">
              <div class="col-12 col-md-6">
                <div class="copyright-wrapper d-block mb-1 fs-8 text-light text-center text-md-start">
                  &copy; 2024. All Rights Reserved.
                </div>
                <div class="credit-wrapper d-block text-secondary fs-9 text-light text-center text-md-start">
                  Terms<a href="https://bootstrapbrain.com/" class="link-light text-decoration-none">
                    And Conditions</a> Apply <span class="text-primary"></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="social-media-wrapper">
                  <ul class="m-0 list-unstyled d-flex gap-3 justify-content-center justify-content-md-end">
                    <li>
                      <a href="#!" class="link-opacity-75-hover link-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                          <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="link-opacity-75-hover link-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="link-opacity-75-hover link-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="link-opacity-75-hover link-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#!" class="link-opacity-75-hover link-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="" height="22" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>


<!-- Floating Whatsapp button -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+254727405667&text=Hello%21%20I%20would%20like%20more%20information%20about%20the%20Web%20Development%20course." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/65c9e5768d261e1b5f5ef1ba/1hmeagm6j';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

<!-- Script Js -->
 <script src="Assets/JS/script.js"></script>
 <script src="Assets/JS/promo.js"></script>
 
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <!-- HTML Meta Tags -->
  <title>Isaac Anane | FullStack Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Isaac Anane Amankwaah—Fullstack developer">
  <meta name="keywords"
    content="Isaac, Anane, Amankwaah Isaac, Isaac Anane Amankwaah, Adam Smith, Supar Nana, Developer, Smith's projects, Web Developer, Enyata, Perigee Insights">
  <meta name="robots" content="index, follow">
  <meta name="language" content="English">
  <meta name="author" content="Isaac Anane Amankwaah">
  <meta name="description"
    content="Hi, I'm Isaac Anane Amankwaah. A Fullstack Developer. I design and build web applications that provide an enjoyable experience.">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="{{env('APP_URL')}}">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Isaac Anane Amankwaah—Fullstack developer">
  <meta property="og:description"
    content="Hi, I'm Isaac Anane Amankwaah. A Fullstack developer. I design and build web applications that provide an enjoyable experience.">
  <meta property="og:image" content="{{env('APP_URL')}}img/home-image.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="{{env('APP_URL')}}">
  <meta property="twitter:url" content="{{env('APP_URL')}}">
  <meta name="twitter:title" content="Isaac Anane Amankwaah—Fullstack developer">
  <meta name="twitter:description"
    content="Hi, I'm Isaac Anane Amankwaah. A Fullstack developer. I design and build web applications that provide an enjoyable experience.">
  <meta name="twitter:image" content="{{env('APP_URL')}}img/home-image.png">

  <link rel="canonical" href="{{env('APP_URL')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="img/favicon/site.webmanifest" />
  <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
  <script src="{{asset('js/scripts.js')}}"></script>
  <script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
  <!-- <script src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script> -->
  @livewireStyles
</head>

<body>
  <nav class="navbar rounded">
    <div class="mycontainer">
      <div class="nav">
        <div class="nav__brand__container">
          <div class="nav__brand">
            <a href="{{route('home')}}"><img src="img/logo.png" alt="monogram" height="24"
                style="margin-right: 0.5rem" />developer.anane</a>
          </div>
          <div class="nav__opener">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
          <!--nav opener-->
        </div>
        <!--nav__brand__container-->

        <ul class="nav__list">
          <li><a href="{{route('home')}}" class="nav__link active">Home</a></li>
          <li><a href="{{route('blog')}}" class="nav__link"> Blog</a></li>
          <li><a href="{{route('projects')}}" class="nav__link">Projects</a></li>
          <li><a href="{{route('about')}}" class="nav__link"> About Me</a></li>
          <!-- <li class="cta">
            <a href="#" class="btn btn--secondary">
              <img src="./img/svgs/phone.min.svg" alt="contact" />
              contact me
            </a>
          </li> -->
        </ul>


        <!--nav__list-->
      </div>
      <!--nav-->
    </div>
  </nav>
  <main>
    {{ $slot }}
  </main>

  <footer>
    <div class="mycontainer bar">
      <div class="copyright">&copy; 2022, Isaac Anane Amankwaah. All rights reserved.</div>
      <div class="social">
        <a href="https://www.instagram.com/creativebrainx/" class="social__link" target="_blank" rel="noreferrer"
          title="Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 172 172"
            style=" fill:#000000;">
            <defs>
              <radialGradient cx="69.445" cy="150.62542" r="160.88808" gradientUnits="userSpaceOnUse"
                id="color-1_Xy10Jcu1L2Su_gr1">
                <stop offset="0" stop-color="#ffdd55"></stop>
                <stop offset="0.328" stop-color="#ff543f"></stop>
                <stop offset="0.348" stop-color="#fc5245"></stop>
                <stop offset="0.504" stop-color="#e64771"></stop>
                <stop offset="0.643" stop-color="#d53e91"></stop>
                <stop offset="0.761" stop-color="#cc39a4"></stop>
                <stop offset="0.841" stop-color="#c837ab"></stop>
              </radialGradient>
              <radialGradient cx="42.23317" cy="19.85275" r="106.82992" gradientUnits="userSpaceOnUse"
                id="color-2_Xy10Jcu1L2Su_gr2">
                <stop offset="0" stop-color="#4168c9"></stop>
                <stop offset="0.999" stop-color="#4168c9" stop-opacity="0"></stop>
              </radialGradient>
            </defs>
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
              stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
              font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g>
                <path
                  d="M121.89425,150.46417l-71.66667,0.06808c-15.76667,0.01433 -28.67742,-12.87133 -28.69533,-28.638l-0.06808,-71.66667c-0.01433,-15.76667 12.87133,-28.67742 28.638,-28.69533l71.66667,-0.06808c15.76667,-0.01433 28.67742,12.87133 28.69533,28.638l0.06808,71.66667c0.01792,15.77025 -12.87133,28.681 -28.638,28.69533z"
                  fill="url(#color-1_Xy10Jcu1L2Su_gr1)"></path>
                <path
                  d="M121.89425,150.46417l-71.66667,0.06808c-15.76667,0.01433 -28.67742,-12.87133 -28.69533,-28.638l-0.06808,-71.66667c-0.01433,-15.76667 12.87133,-28.67742 28.638,-28.69533l71.66667,-0.06808c15.76667,-0.01433 28.67742,12.87133 28.69533,28.638l0.06808,71.66667c0.01792,15.77025 -12.87133,28.681 -28.638,28.69533z"
                  fill="url(#color-2_Xy10Jcu1L2Su_gr2)"></path>
                <path
                  d="M86,111.08333c-13.82808,0 -25.08333,-11.25167 -25.08333,-25.08333c0,-13.83167 11.25525,-25.08333 25.08333,-25.08333c13.82808,0 25.08333,11.25167 25.08333,25.08333c0,13.83167 -11.25525,25.08333 -25.08333,25.08333zM86,68.08333c-9.87925,0 -17.91667,8.03742 -17.91667,17.91667c0,9.87925 8.03742,17.91667 17.91667,17.91667c9.87925,0 17.91667,-8.03742 17.91667,-17.91667c0,-9.87925 -8.03742,-17.91667 -17.91667,-17.91667z"
                  fill="#ffffff"></path>
                <circle cx="31.5" cy="16.5" transform="scale(3.58333,3.58333)" r="1.5" fill="#ffffff"></circle>
                <path
                  d="M107.5,132.58333h-43c-13.82808,0 -25.08333,-11.25167 -25.08333,-25.08333v-43c0,-13.83167 11.25525,-25.08333 25.08333,-25.08333h43c13.82808,0 25.08333,11.25167 25.08333,25.08333v43c0,13.83167 -11.25525,25.08333 -25.08333,25.08333zM64.5,46.58333c-9.87925,0 -17.91667,8.03742 -17.91667,17.91667v43c0,9.87925 8.03742,17.91667 17.91667,17.91667h43c9.87925,0 17.91667,-8.03742 17.91667,-17.91667v-43c0,-9.87925 -8.03742,-17.91667 -17.91667,-17.91667z"
                  fill="#ffffff"></path>
              </g>
            </g>
          </svg>
        </a>
        <a href="https://twitter.com/real_brasmith" class="social__link" target="_blank" rel="noreferrer" title="Twitter">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 172 172"
            style=" fill:#000000;">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
              stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
              font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <g>
                <path
                  d="M150.5,132.58333c0,9.89717 -8.02308,17.91667 -17.91667,17.91667h-93.16667c-9.89717,0 -17.91667,-8.0195 -17.91667,-17.91667v-93.16667c0,-9.89717 8.0195,-17.91667 17.91667,-17.91667h93.16667c9.89358,0 17.91667,8.0195 17.91667,17.91667z"
                  fill="#03a9f4"></path>
                <path
                  d="M129,61.34667c-3.1605,1.40108 -7.16308,2.71617 -10.75,3.15333c3.64783,-2.16433 9.43492,-6.67217 10.75,-10.75c-3.40775,2.00308 -9.57108,4.14233 -13.59158,4.91633c-3.21067,-3.40417 -7.79017,-4.91633 -12.86417,-4.91633c-9.74667,0 -16.54425,8.25958 -16.54425,17.91667v7.16667c-14.33333,0 -28.30833,-10.91842 -37.00508,-21.5c-1.53008,2.58358 -2.39008,5.60792 -2.39008,8.80425c0,6.51808 5.98775,13.13292 10.7285,16.27908c-2.89175,-0.08958 -8.36708,-2.29692 -10.75,-3.58333c0,0.05733 0,0.129 0,0.20425c0,8.48175 5.95192,14.24017 14.018,15.8455c-1.47275,0.40492 -3.268,1.86692 -10.17667,1.86692c2.24317,6.93375 13.51992,10.5995 21.242,10.75c-6.0415,4.68342 -16.813,7.16667 -25.08333,7.16667c-1.42975,0 -2.20375,0.07883 -3.58333,-0.08242c7.8045,4.945 18.705,7.24908 28.66667,7.24908c32.45425,0 50.16667,-24.7895 50.16667,-47.90917c0,-0.75967 -0.02508,-3.30383 -0.0645,-4.04917c3.46867,-2.44383 4.87333,-5.00233 7.23117,-8.52833"
                  fill="#ffffff"></path>
              </g>
            </g>
          </svg>
        </a>
      </div>
    </div>
  </footer>

  @livewireScripts
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js">
  </script>
  <script src="{{ asset('js/email.js') }}"></script>
  <script>
    const navbar = document.querySelector('.navbar');

    document.addEventListener('DOMContentLoaded', function () {
      document.addEventListener('scroll', function (e) {
        let nextSection = document.querySelector(".dev")
        if (nextSection.classList.contains("remove")) {
          nextSection = document.querySelector(".work.dev")
        }

        if (scrollY > nextSection.offsetTop - 40) {
          navbar.classList.remove('rounded');
        } else {
          navbar.classList.add('rounded');
        }
      })
    })
  </script>
  <script src="{{ asset('js/hero.js') }}"></script>
</body>

</html>
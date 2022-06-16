<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <!-- HTML Meta Tags -->
  <title>Isaac Anane Amankwaah| FullStack Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Isaac Anane Amankwaah—Fullstack developer">
  <meta name="keywords"
    content="Isaac, Anane, Amankwaah Isaac, Isaac Anane Amankwaah, Adam Smith, Supar Nana, Developer, Smith's projects, Web Developer, Enyata, Perigee Insights, University of Cape Coast, Javascript Developer, Python Developer">
  <meta name="robots" content="index, follow">
  <meta name="language" content="English">
  <meta name="author" content="Isaac Anane Amankwaah">
  <meta name="description"
    content="Hi, I'm Isaac Anane Amankwaah. A Fullstack Developer. I design and build web applications that provide an enjoyable experience. Graphics and UI/UX Designer, Data Analyst, and currently a Senior Backend Engineer at Enyata Software Engineering Ltd, Accra-Ghana, with over {{ date('Y') - 2015 }} years of experience working with institutions and individuals.I have also graduated with a bachelor's degree in Actuarial Science from the University of Cape Coast, Ghana. What you are waiting for.... a good team player, and I have a good sense of humor.">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="{{env('APP_URL')}}">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Isaac Anane Amankwaah—Fullstack developer">
  <meta property="og:description"
    content="Hi, I'm Isaac Anane Amankwaah. A Fullstack Developer. I design and build web applications that provide an enjoyable experience. Graphics and UI/UX Designer, Data Analyst, and currently a Senior Backend Engineer at Enyata Software Engineering Ltd, Accra-Ghana, with over {{ date('Y') - 2015 }} years of experience working with institutions and individuals.I have also graduated with a bachelor's degree in Actuarial Science from the University of Cape Coast, Ghana. What you are waiting for.... a good team player, and I have a good sense of humor.">
  <meta property="og:image" content="{{env('APP_URL')}}img/home-image.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="{{env('APP_URL')}}">
  <meta property="twitter:url" content="{{env('APP_URL')}}">
  <meta name="twitter:title" content="Isaac Anane Amankwaah—Fullstack developer">
  <meta name="twitter:description"
    content="Hi, I'm Isaac Anane Amankwaah. A Fullstack Developer. I design and build web applications that provide an enjoyable experience. Graphics and UI/UX Designer, Data Analyst, and currently a Senior Backend Engineer at Enyata Software Engineering Ltd, Accra-Ghana, with over {{ date('Y') - 2015 }} years of experience working with institutions and individuals.I have also graduated with a bachelor's degree in Actuarial Science from the University of Cape Coast, Ghana. What you are waiting for.... a good team player, and I have a good sense of humor.">
  <meta name="twitter:image" content="{{env('APP_URL')}}img/home-image.png">

  <link rel="canonical" href="{{env('APP_URL')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png" />
  <link rel="manifest" href="img/favicon/site.webmanifest" />
  <link rel="stylesheet" href="{{secure_asset('css/styles.css')}}" />
  <script src="{{secure_asset('js/scripts.js')}}"></script>
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
            <a href="{{route('home')}}"><img src="img/favicon/favicon.ico" alt="monogram" height="24"
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

  <section class="section contact-me" id="contact-me">
    <article class="mycontainer">
      <h2 class="">Contact Me</h2>
      <form class="contact-me__form">
        <section class="form-element">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
        </section>
        <section class="form-element">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </section>
        <section class="form-element">
          <label for="message">Message</label>
          <textarea name="message" id="message" required></textarea>
        </section>
        <section class="form-element">
          <button title="Send Message" type="submit" class="btn btn--primary">
            <figure><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32"
                viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                  stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                  font-family="none" font-weight="none" font-size="none" text-anchor="none"
                  style="mix-blend-mode: normal">
                  <path d="M0,172v-172h172v172z" fill="none"></path>
                  <g fill="#ffffff">
                    <path
                      d="M42.05255,30.98236c-3.12684,0.08083 -6.02325,1.65502 -7.78693,4.35931c-2.01562,3.09063 -1.88178,6.9875 0.13385,10.07813l11.6922,18.00415c1.20938,1.88125 3.76198,2.41927 5.50885,1.2099c1.88125,-1.20937 2.41927,-3.76197 1.2099,-5.50885l-11.6922,-18.00678c-0.40313,-0.67187 -0.13437,-1.20885 0,-1.4776c0.13437,-0.26875 0.5375,-0.67187 1.34375,-0.67187l118.92188,14.78125c0.67188,0.13437 0.94167,0.53645 1.07605,0.93958c0.13438,0.40312 0.26718,0.80625 -0.27032,1.34375l-81.56458,87.61407c-0.5375,0.5375 -1.075,0.40155 -1.34375,0.40155c-0.26875,-0.13438 -0.8052,-0.40155 -0.93958,-1.07343l-3.49585,-27.54687c-0.13438,-0.80625 -0.13333,-1.7474 -0.2677,-2.55365c-0.5375,-12.9 7.25625,-24.5901 19.48438,-29.02447l26.06928,-9.40625c2.15,-0.80625 3.22343,-3.09168 2.41718,-5.1073c-0.80625,-2.15 -3.08905,-3.22343 -5.10468,-2.41718l-26.06928,9.40625c-16.6625,6.04688 -26.74167,22.5729 -24.59167,40.17603l3.49585,27.54688c0.40313,3.62813 2.95468,6.58542 6.44843,7.7948c0.94062,0.26875 2.0172,0.40417 2.95782,0.40417c2.55312,0 4.97135,-1.07657 6.8526,-2.95782l81.56458,-87.61145c2.41875,-2.55313 3.225,-6.3172 2.01563,-9.67657c-1.20937,-3.35937 -4.16458,-5.64323 -7.65833,-6.18073l-119.05572,-14.78125c-0.45352,-0.05039 -0.90493,-0.06929 -1.35162,-0.05774zM49.37232,81.83752c-0.51021,-0.021 -1.03143,0.06351 -1.53534,0.26507l-25.26093,9.13855c-2.15,0.80625 -3.22605,3.08905 -2.4198,5.10468c0.5375,1.74687 2.01667,2.6875 3.76355,2.6875c0.40313,0 0.94063,-0.13333 1.34375,-0.2677l25.26093,-9.13855c2.15,-0.80625 3.22605,-3.08905 2.4198,-5.10468c-0.60469,-1.6125 -2.04135,-2.62189 -3.57196,-2.68488zM55.68689,99.5766c-0.5102,-0.021 -1.02881,0.06351 -1.53271,0.26507l-42.86615,15.58698c-2.15,0.80625 -3.22605,3.08905 -2.4198,5.10468c0.5375,1.6125 2.15105,2.6875 3.76355,2.6875c0.40313,0 0.94063,-0.13333 1.34375,-0.2677l42.86615,-15.58697c2.15,-0.80625 3.22343,-3.09168 2.41718,-5.1073c-0.60469,-1.6125 -2.04134,-2.61926 -3.57196,-2.68225z">
                    </path>
                  </g>
                </g>
              </svg></figure>Send
          </button>
        </section>
      </form>
    </article>
  </section>
  <footer>
    <div class="mycontainer bar">
      <div class="copyright">&copy; {{ date('Y') }}, Isaac Anane Amankwaah. All rights reserved.</div>
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
  <script src="{{ secure_asset('js/email.js') }}"></script>
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
  <script src="{{ secure_asset('js/hero.js') }}"></script>
</body>

</html>
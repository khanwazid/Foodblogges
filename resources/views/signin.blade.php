<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inspire brighter days ahead for you and your readers with this personal blog.">
    <title>Personal Blog Website Template</title>

    <!-- Add any dynamic assets using Laravel's asset() helper -->
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}"> <!-- Laravel asset() -->
    <script src="{{ asset('js/custom-script.js') }}" defer></script>

    <!-- Include favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <style>
      /* Global Styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
        overflow-x: hidden;
      }

      h1 {
        text-align: center;
        margin-top: 30px;
        font-size: 2.5rem;
        color: #333;
      }

      p {
        text-align: center;
        font-size: 1.25rem;
        margin-bottom: 30px;
      }

      footer {
        text-align: center;
        padding: 20px;
        font-size: 1rem;
        background-color: #333;
        color: #fff;
      }

      /* Iframe Container */
      .iframe-container {
        position: relative;
        width: 100%;
        height: 100vh; /* Full viewport height */
        max-width: 100%;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
      }

      .iframe-container iframe {
        width: 100%;
        height: 100%; /* Ensure iframe takes full height of container */
        border: none;
      }

      /* Responsive design for iframe */
      @media screen and (max-width: 768px) {
        .iframe-container iframe {
          height: 500px;
        }
      }

      @media screen and (max-width: 480px) {
        .iframe-container iframe {
          height: 300px;
        }
      }
    </style>
  </head>

  <body>
    
    <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/login">Login</a></li> <!-- Added Login option -->
        </ul>
      </nav>

    <!-- Iframe Container to Embed Wix Blog -->
    <div class="iframe-container">
      <iframe src="https://www.wix.com/demone2/mental-health-blog" title="Personal Blog"></iframe>
    </div>

   {{--   <!-- Footer Section -->
    <footer>
      <p>Copyright &copy; 2024 | My Personal Blog</p>
    </footer>--}}
  </body>
</html>
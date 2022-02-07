<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="{{asset('data/css/general.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/contact.css')}}">
</head>
<body>
    <header id="head">
        <!-- this is the logo container  -->
        <div class="logo-container">
            <img src="../images/logo-removebg-preview.png" alt="" class="logo">
        </div>
        <!-- this is the navbar for desktop view    -->
        <nav class="navbar">
            <ul class="navlist">
                <li class="tab">
                    <a href="../index.html" class="link">about me</a>
                </li>
                <li class="tab">
                    <a href="./contact.html" class="link">contact</a>
                </li>
                <li class="tab">
                    <a href="./resume.html" class="link">resume</a>
                </li>
                <li class="tab">
                    <a href="./project.html" class="link">projects</a>
                </li>
                <li class="tab">
                    <a href="./blog.html" class="link">blog</a>
                </li>
                <li class="tab">
                    <a href="../index.html/#service" class="link">service</a>
                </li>
            </ul>
        </nav>
        <!-- this is the navbar for mobile view  -->
        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="{{asset('data/images/1193.png')}}" alt=""  id="close-sidebar" class="close-btn">
            </div>
         <ul class="list-items">
            <li><a href="../index.html">home<img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li>
             <li><a href="./contact.html">contact  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="./blog.html">blog  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="./resume.html">resume  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="./project.html">projects  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
         </ul>
        </div>
        <!-- this is the hamburger menu  -->
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
    </header>
    <!-- this is the contact landpage that contains the get in touch text and the form  -->
    <section class="contact-landpage">
        <div class="contact-text-container">
            <h1>contact</h1>
            <h2>get in touch</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Eum molestias minima rem culpa, quo quidem totam nisi
                 animi dignissimos porro non ab. Nam consequatur rem aperiam et
                 soluta tempora similique, porro odio.
                Veniam, necessitatibus? Distinctio tempora iure veniam laudantium aut!
            </p>
        </div>
        <!-- this is the contact form  -->
        <div class="form-container">
            <form action="" method="post" class="contact-form">
                <label for="#email-input">enter email</label>
                <input type="email" placeholder="enter email" class="contact-input" id="email-input">
                <label for="#text-area">enter your message</label>
                <textarea name="" id="text-area" cols="30" rows="10" class="text-area" placeholder="type your message here"></textarea>
                <button type="submit" class="submit-btn" value="submit">send</button>
            </form>
        </div>
    </section>
    <!-- this is the end of the first section  -->

    <!-- ths is the beginning of the second section ie the recommendation part  -->
    <section class="recommendation-section">
        <div class="recommendation-text">
            <h1>recommendations</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum,
                sapiente similique! Dignissimos soluta reiciendis ipsam corrupti
                similique, magnam et animi amet eveniet perspiciatis dolore iure?</p>
        </div>
        <!-- this contains the customer cards -->
        <div class="recommendation-card-container">
            <!-- this is the 1st customer card  -->
            <div class="recommendation-card">
                <div class="rank-container">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                </div>
                <div class="rec-card-body">
                    <h1>great quality</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Quae aliquam nobis nesciunt ipsam doloribus rem optio error ullam laborum. Fugiat.
                    </p>
                </div>
                <div class="profile-info">
                    <img src="../images/profile1.jpg" alt="" class="profile-img">
                    <p>
                        <span class="person-name">john doe</span>
                        <br>
                        kelvinchukwuebuka385@gmail.com
                    </p>
                </div>
            </div>
            <!-- 2nd  -->
            <div class="recommendation-card">
                <div class="rank-container">
                    <img src="{{asset(asset)}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                </div>
                <div class="rec-card-body">
                    <h1>great quality</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Quae aliquam nobis nesciunt ipsam doloribus rem optio error ullam laborum. Fugiat.
                    </p>
                </div>
                <div class="profile-info">
                    <img src="../images/profile1.jpg" alt="" class="profile-img">
                    <p>
                        <span class="person-name">john doe</span>
                        <br>
                        kelvinchukwuebuka385@gmail.com
                    </p>
                </div>
            </div>
            <!-- 3rd  -->
            <div class="recommendation-card">
                <div class="rank-container">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                    <img src="{{asset('data/images/star-removebg-preview.png')}}" alt="" class="star">
                </div>
                <div class="rec-card-body">
                    <h1>great quality</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Quae aliquam nobis nesciunt ipsam doloribus rem optio error ullam laborum. Fugiat.
                    </p>
                </div>
                <div class="profile-info">
                    <img src="../images/profile1.jpg" alt="" class="profile-img">
                    <p>
                        <span class="person-name">john doe</span>
                        <br>
                        kelvinchukwuebuka385@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end of the recommendation section  -->
    <footer>
        <!-- first division -->
        <div class="foot1">
            <h2><span class="emmy">emmy</span>Tech</h2>
            <p>
                No.25 Udensi Street, Abakaliki, Ebonyi State Nigeria.
                    Send us an email, call us on +2347033244567
                  You can follow us on social media and get latest updates from us.
            </p>
            <div class="social-media-handle">
                <img src="{{asset('data/images/facebook.png')}}" alt="" class="social-icon"> <a href="https://facebook.com/emmanuelnwamini">facebook</a>
                <img src="{{asset('data/images/insta.png')}}" alt="" class="social-icon"> <a href="https://www.linkedin.com/in/emmanuel-godwin-a21081215?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BNxacVc4PTFuG5iak6zwyxQ%3D%3D">linkedln</a>
                <img src="{{asset('data/images/whatsapp.png')}}" alt="" class="social-icon"> <a href=" https://wa.me/+2347042244539">whatsapp</a>
                <img src="{{asset('data/images/git.png')}}" alt="" class="social-icon"> <a href="https://github.com/youngemmy5956">github</a>
                <img src="{{asset('data/images/mail.png')}}" alt="" class="social-icon"> <a href="mailto:emmanuelgodwin558@gmail.com">email</a>
            </div>
        </div>
        <!-- second division  -->
        <div class="foot1">
            <h2>contact me</h2>
            <li ><img src="{{asset('data/images/twitter.png')}}" alt=""class="my-img"> <a href="https://twitter.com/onyedicach">@onyedicach</a></li>
            <li ><img src="{{asset('data/images/instagram.png')}}" alt=""class="my-img"> <a href="https://instagram.com/nwaminiemmy">@nwaminiemmy</a></li>
            <li ><img src="{{asset('data/images/images__4_-removebg-preview.png')}}" alt=""class="my-img"> <a href="https://wa.me/+2347042244539">+2347042244539</a></li>
        </div>
        <!-- 3rd division  -->

        <div class="foot1">
            <h2>newsletter</h2>
            <p>
                Consequuntur neque excepturi debitis hic quasi labore amet
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, deserunt.
            </p>
            <input type="email" name="" id="" placeholder="enter your email" class="input">
        </div>
    </footer>
    <script src="../js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/landing.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>FUNDar - Landing Page</title> 
</head>
<body>
    <!--navbar-->
    <nav>
        <img src="{{ asset('images/favicon.png') }}" alt="Fundar Logo" width="100">
        <ul>
            <li><a href="#hero" class="nav-link active">Home</a></li>
            <li><a href="#features" class="nav-link">Features</a></li>
            <li><a href="#campaign-section" class="nav-link">Campaigns</a></li>
            <li><a href="#testimonials-section"class="nav-link">Testimonials</a></li>
            <li><a href="#faqs" class="nav-link">FAQs</a></li>
            <li><a href="#founders" class="nav-link">Founders</a></li>
            <a href="{{ route('login') }}" class="btn-primary">Login</a>
        </ul>
    </nav>

    <!--hero section-->
    <div class="blue-gradient-blur"></div>
    <div class="violet-gradient-blur"></div>
    <section id="hero">
        <div class="cta animate-up">
            <p class="hero-cta"><span class="be">Be</span> a Hero in a Student's Story</p>
            <p class="hero-sub">Find a Student. Fund a Future. Change a Life.</p>  
            <a href="{{ route('login') }}" class="cta-btn">Join FUNDar</a>     
        </div>

        <div class="cta-stats">
            <div class="grid grid-1 animate-up">
                <div class="grid grid-1-1">
                    <h1>39%</h1>
                    <p class="cta-text">College dropout rate in the Philippines due to financial struggles.</p>
                </div>
                <div class="grid grid-1-2">
                    <img src="{{ asset('images/gamified.png') }}">
                    <p class="cta-text">Gamified Giving Experience</p>
                </div>
            </div>
            <div class="grid grid-2 animate-up">
                <p class="cta-text">Help fund tuition, transportation, and meals for students who need it most.</p>
            </div>
            <div class="grid grid-3 animate-up">
                <p class="cta-text">Join 7777+ People Donate</p>
                <button href="{{ route('login') }}" class="cta-btn">Create Campaign</button>     
            </div>
            <div class="grid grid-4 animate-up">
                <p class="cta-text">Every peso fuels a dream. Your support changes lives.</p>
            </div>
            <div class="grid grid-5 animate-up">
                <div class="grid grid-5-1">
                    <p class="cta-text">Hear Student’s Voices, Spark Change</p>
                </div>
                <div class="grid grid-5-2"></div>
            </div>
        </div>
    </section>

    <!--features section-->
    <section id="features">
        <div class="feat-header">
            <h1>Features that make your donations more Engaging and Impactful.</h1>
        </div>
        <div class="feat-content">
            <div class="feat-box">
                <img src="{{ asset('images/content-based-filter.png') }}">
                <h6>Content-based Filtering</h6>
                <p>FUNDar recommends students with similar needs to a donor, creating a personalized and more effective giving experience.</p>
            </div>
            <div class="feat-box">
                <img src="{{ asset('images/student-verify.png') }}">
                <h6>Student Verification</h6>
                <p>We verify every student's identity and academic status to ensure your donation reaches a deserving and real person.</p>
            </div>
            <div class="feat-box">
            <div class="feat-box">
                <img src="{{ asset('images/ai-integrate.png') }}">
                <h6>AI Integration</h6>
                <p>FUNDar is incorporated with AI to create an engaging environment for donors where their donation is greatly appreciated.</p>
            </div>
            </div>
        </div>
    </section>

    <!--info section-->
    <section id="info-sec">
        <img src="{{ asset('images/info-img1.png') }}" class="i-img1">
        <img src="{{ asset('images/info-img2.png') }}" class="i-img2">
        <img src="{{ asset('images/info-img3.png') }}" class="i-img3">
        <img src="{{ asset('images/info-img4.png') }}" class="i-img4">
        <div class="info-sec-content">
            <p>In the Philippines, despite tuition subsidies, the higher education dropout rate remains high at 39%, with Central Visayas at a particularly concerning</p>
            <h1>60.7%</h1>
            <a href="{{ route('login') }}" class="cta-btn">Begin your Journey</a>   
        </div>
    </section>

    <!--campaigns section-->
    <section id="campaign-section">
        <div class="cs-header">
            <h1 class="section-header">Create Campaigns by Being a Verified <span class="highlight">Student</span></h1>
        </div>
        <div class="cs-contents">
            <div class="left-contents">
                <div class="box cs-img1">
                    <h3>Joseph</h3>
                    <div class="profile-info">
                        <div class="icon"><img src="{{ asset('images/Donate.png') }}"></div>
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                </div>
                <div class="box cs-img2">
                    <h3>Julian</h3>
                    <div class="profile-info">
                        <div class="icon"><img src="{{ asset('images/Donate.png') }}"></div>
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                </div>
                <div class="box cs-img3">
                    <h3>Mark</h3>
                    <div class="profile-info">
                        <div class="icon"><img src="{{ asset('images/Donate.png') }}"></div>
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                </div>
                <div class="box cs-img4">
                    <h3>Kristine</h3>
                    <div class="profile-info">
                        <div class="icon"><img src="{{ asset('images/Donate.png') }}"></div>
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-contents">
                <div class="rc-btns">
                    <button class="left-btn"></button><button class="right-btn"></button>
                </div>
                <p>Help <span>Maria</span> Continue Her Education and Achieve the Dream of Graduating </p>
                <div class="box cs-img5">
                    <h3>Maria</h3>
                    <div class="profile-info">
                        <div class="icon"><img src="{{ asset('images/Donate.png') }}"></div>
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--testimonials section-->
    <section id="testimonials-section">
        <h1 class="section-header ts-header-width">
            Hear from Our Students’ <span class="highlight">Stories</span>
        </h1>
        </div>
        <div class="testimonials">
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/John Christian.png') }}">
                    <div class="p-bk">
                        <p class="name">John Christian</p>
                        <p>3rd Year | BSN</p>
                    </div>
                </div>
                <p>
                    "FUNDar helped me by my first laptop and my life has never been easier."
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>
            
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/Amihan.png') }}">
                    <div class="p-bk">
                        <p class="name">Amihan Celis</p>
                        <p>3rd Year | BSN</p>
                    </div>
                </div>
                <p>
                    "I have already paid my tuition because of this platform. Thank you!"
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>
            
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/Cassandra.png') }}">
                    <div class="p-bk">
                        <p class="name">Cassandra Walton</p>
                        <p class="year">3rd Year | BSIT</p>
                    </div>
                </div>
                <p>
                    "I really wanted to take BSIT but my parents can’t afford to send me to college. Thankfully someone gave me a scholarship."
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>
            
            <!--duplicate-->
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/John Christian.png') }}">
                    <div class="p-bk">
                        <p class="name">John Christian</p>
                        <p>3rd Year | BSN</p>
                    </div>
                </div>
                <p>
                    "FUNDar helped me by my first laptop and my life has never been easier."
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>
            
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/Amihan.png') }}">
                    <div class="p-bk">
                        <p class="name">Amihan Celis</p>
                        <p>3rd Year | BSN</p>
                    </div>
                </div>
                <p>
                    "I have already paid my tuition because of this platform. Thank you!"
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>
            
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/Cassandra.png') }}">
                    <div class="p-bk">
                        <p class="name">Cassandra Walton</p>
                        <p class="year">3rd Year | BSIT</p>
                    </div>
                </div>
                <p>
                    "I really wanted to take BSIT but my parents can’t afford to send me to college. Thankfully someone gave me a scholarship."
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>     
            <!--duplicate-->
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/John Christian.png') }}">
                    <div class="p-bk">
                        <p class="name">John Christian</p>
                        <p>3rd Year | BSN</p>
                    </div>
                </div>
                <p>
                    "FUNDar helped me by my first laptop and my life has never been easier."
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>
            
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/Amihan.png') }}">
                    <div class="p-bk">
                        <p class="name">Amihan Celis</p>
                        <p>3rd Year | BSN</p>
                    </div>
                </div>
                <p>
                    "I have already paid my tuition because of this platform. Thank you!"
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>
            
            <div class="card">
                <div class="p-info">
                    <img src="{{ asset('images/Cassandra.png') }}">
                    <div class="p-bk">
                        <p class="name">Cassandra Walton</p>
                        <p class="year">3rd Year | BSIT</p>
                    </div>
                </div>
                <p>
                    "I really wanted to take BSIT but my parents can’t afford to send me to college. Thankfully someone gave me a scholarship."
                </p>
                <a href="{{ route('login') }}" class="btn-primary">Visit Campaign</a>
            </div>     
      
        </div>
    </section>

    <!--banner-->
    <section id="banner-section">
        <div class="banner">
            <div class="violet">
                <h1>Find a Student. Fund a Future. Change a Life. Find a Student. Fund a Future. Change a Life. Find a Student. Fund a Future. Change a Life.</h1>
            </div>        
            <div class="purple">
                <h1>Find a Student. Fund a Future. Change a Life. Find a Student. Fund a Future. Change a Life. Find a Student. Fund a Future. Change a Life.</h1>
            </div>
        </div>
    </section>

    <!--FAQs-->
    <section id="faqs">
        <div class="faqs-header">
            <h1 class="section-header">
                Frequently Asked <span class="highlight">Questions</span>
            </h1>
            <div class="faqs-btns">
                <button class="faqs-btn">Student</button>
                <button class="faqs-btn">Donor</button>
            </div>
        </div>

        <div class="faqs-content-container">
            <div class="faqs-left">
                <div class="student-faqs">
                    <div class="question">
                        <h1>
                            Q: How do I receive donations?
                        </h1>
                        <p>
                            A: Once approved, donations are transferred securely through our partnered channels like GCash or your bank account.
                        </p>
                    </div>
                    <div class="question">
                        <h1>
                            Q: What if I don’t reach my full funding goal?
                        </h1>
                        <p>
                            A: Don’t worry—partial donations are still given to you, and your campaign can stay active until you reach your goal.
                        </p>
                    </div>        
                    <div class="question">
                        <h1>
                            Q: Do I need to pay back the donations?
                        </h1>
                        <p>
                            A: No. Donations are gifts of generosity to support your education. There’s no repayment required.
                        </p>
                    </div>                                            
                </div>

                <div class="donor-faqs hidden">
                    <div class="question">
                        <h1>
                            Q: How do I start donating on FUNDar?
                        </h1>
                        <p>
                            A: No. FUNDar does not require registration or sign-up. You only need to input basic details (name, email, payment info) when donating.
                        </p>
                    </div>
                    <div class="question">
                        <h1>
                            Q: How do I know campaigns are legitimate?
                        </h1>
                        <p>
                            A: All student campaigns go through profile verification by admins. Only verified students from accredited institutions can post campaigns. Suspicious campaigns are flagged and reviewed before going public.
                        </p>
                    </div>        
                    <div class="question">
                        <h1>
                            Q: Can I donate items instead of money?
                        </h1>
                        <p>
                            A: FUNDar is currently cash-based only (via digital wallets, bank transfers, or cards). Students use funds to buy their specific needs, but you can leave notes with your donation.
                        </p>
                    </div>      
                </div>

            </div>
            <div class="faqs-right">
                <img src="{{ asset('images/faqs-img.png') }}">
            </div>
        </div>
    </section>

    <!--Founders-->
    <div class="founders-gradient-blur"></div>
    <section id="founders">
        <h1 class="section-header">Meet our Founding <span class="highlight">Team</span></h1>
        <div class="founder-container">
            <div class="founder-card">
                <img src="{{ asset('images/Andrea.png') }}">
                <div class="details">
                    <p class="founder-name">Andrea Torreon</p>
                    <p class="founder-role">Project Manager</p>
                </div>
            </div>
            <div class="founder-card">
                <img src="{{ asset('images/Allyssa.png') }}">
                <div class="details">
                    <p class="founder-name">Allyssa Faith Ejares</p>
                    <p class="founder-role">Tester</p>
                </div>
            </div>  
            <div class="founder-card">
                <img src="{{ asset('images/Christo Rey.png') }}">
                <div class="details">
                    <p class="founder-name">Christo Rey Espina</p>
                    <p class="founder-role">Hacker</p>
                </div>
            </div>
            <div class="founder-card">
                <img src="{{ asset('images/Kaycee.png') }}">
                <div class="details">
                    <p class="founder-name">Kaycee Roamar</p>
                    <p class="founder-role">Hipster</p>
                </div>
            </div>
        </div>                     
    </section>

    <!--quote-->
    <section id="footer-quote">
        <h1>Every donation—big or small—creates ripples of hope. With <span>FUNDar</span>, make education accessible for every student.</h1>
        <img src="{{ asset('images/favicon.png') }}">
    </section>

    <a href="#hero" class="btt">Back to Top</a>

    <!--footer-->
    <footer>
        © FUNDar, Inc. 2025. Find a Student. Fund a Future. Change a Life.
    </footer>
    <script src="{{ asset('js/landingscript.js') }}"></script>
</body>
</html>
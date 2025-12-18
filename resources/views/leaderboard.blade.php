<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/leaderboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Leaderboard | FUNDar</title>
</head>
<body>
    <x-side-bar/>
    <div class="leaderboard-interface">
        <div class="leaderboard-container">
            <img src="{{ asset('images/Leaderboard Banner.png') }}" alt="Leaderboard Banner" class="banner-image">
            
            <div class="leaderboard-header">
                <h1 class="section-title">Leaderboard</h1>
                <div class="leaderboard-btns">
                    <button class="leaderboard-btn donor active">Donors</button>
                    <button class="leaderboard-btn campaigns">Campaigns</button>
                </div>
            </div>

            <div class="donor-leaderboard-con">
                <div class="leaderboard-top-donors">
                    <img src="{{ asset('images/Leadership Icon.png') }}" alt="Trophy" class="trophy-icon"/>
                    <p class="top-donors-label">Top donors of the month of <span>October</span></p>
                    
                    <div class="chart-container">
                        <div class="chart">
                                <!-- Bar 1 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Gracie.jpeg') }}" alt="Gracie" class="profile-pic">
                                    <div class="bar bar-1"></div>
                                </div>

                                <!-- Bar 2 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Conan.jpeg') }}" alt="Conan" class="profile-pic">
                                    <div class="bar bar-2"></div>
                                </div>

                                <!-- Bar 3 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Sabrina.jpeg') }}" alt="Sabrina" class="profile-pic">
                                    <div class="bar bar-3"></div>
                                </div>

                                <!-- Bar 4 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Steve.jpeg') }}" alt="Jeff" class="profile-pic">
                                    <div class="bar bar-4"></div>
                                </div>

                                <!-- Bar 5 (Tallest) -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Taylor.jpeg') }}" alt="Taylor" class="profile-pic">
                                    <div class="bar bar-5"></div>
                                </div>

                                <!-- Bar 6 (Second Tallest) -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Kim.jpg') }}" alt="Kim" class="profile-pic">
                                    <div class="bar bar-6"></div>
                                </div>

                                <!-- Bar 7 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Olivia.jpeg') }}" alt="Olivia" class="profile-pic">
                                    <div class="bar bar-7"></div>
                                </div>

                                <!-- Bar 8 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Harry.jpg') }}" alt="Harry" class="profile-pic">
                                    <div class="bar bar-8"></div>
                                </div>

                                <!-- Bar 9 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Jeff.jpg') }}" alt="Jeff" class="profile-pic">
                                    <div class="bar bar-9"></div>
                                </div>

                                <!-- Bar 10 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Elon.jpg') }}" alt="Elon" class="profile-pic">
                                    <div class="bar bar-10"></div>
                                </div>

                                <!-- Scale on the right -->
                                <div class="scale">
                                    <div class="scale-item">₱50k</div>
                                    <div class="scale-item">₱40k</div>
                                    <div class="scale-item">₱30k</div>
                                    <div class="scale-item">₱20k</div>
                                    <div class="scale-item">₱10k</div>
                                    <div class="scale-item">₱5k</div>
                                </div>
                        </div>
                    </div>
                <!-- Top 3 Donors -->
                    <div class="top-three">
                        <div class="top-donor rank-2">
                            <div class="rank-badge">#2</div>
                            <img src="{{ asset('images/Taylor.jpeg') }}" class="top-donor-pic" alt="">
                            <div class="top-donor-name">Taylor Swift</div>
                            <div class="top-donor-amount">₱26,000 total donations</div>
                            <div class="top-donor-campaigns">12 campaigns</div>
                        </div>

                        <div class="top-donor rank-1">
                            <div class="crown">👑</div>
                            <div class="rank-badge">#1</div>
                            <img src="{{ asset('images/Kim.jpg') }}" class="top-donor-pic" alt="">
                            <div class="top-donor-name">Kim Kardashian</div>
                            <div class="top-donor-amount">₱30,000 total donations</div>
                            <div class="top-donor-campaigns">20 campaigns</div>
                        </div>

                        <div class="top-donor rank-3">
                            <div class="rank-badge">#3</div>
                            <img src="{{ asset('images/Olivia.jpeg') }}" class="top-donor-pic" alt="">
                            <div class="top-donor-name">Olivia Rodrigo</div>
                            <div class="top-donor-amount">₱25,000 total donations</div>
                            <div class="top-donor-campaigns">9 campaigns</div>
                        </div>
                    </div>
                <!-- Rankings 4-10 -->
                <div class="rankings-list">
                    <div class="ranking-item">
                        <div class="rank-number">#4</div>
                        
                        <div class="ranking-info">
                            <img src="{{ asset('images/Sabrina.jpeg') }}" class="ranking-pic"></img>
                            <div class="ranking-name">Sabrina Carpenter</div>
                        </div>
                        <div class="ranking-right">
                            <div class="ranking-amount">₱21,000</div>
                            <div class="ranking-campaigns">8 campaigns</div>
                        </div>
                    </div>

                    <div class="ranking-item">
                        <div class="rank-number">#5</div>
                        <div class="ranking-info">
                            <img src="{{ asset('images/Conan.jpeg') }}" class="ranking-pic"></img>
                            <div class="ranking-name">Conan Gray</div>
                        </div>
                        <div class="ranking-right">
                            <div class="ranking-amount">₱24,000</div>
                            <div class="ranking-campaigns">7 campaigns</div>
                        </div>
                    </div>

                    <div class="ranking-item">
                        <div class="rank-number">#6</div>
                        <div class="ranking-info">
                            <img src="{{ asset('images/Gracie.jpeg') }}" class="ranking-pic"></img>
                            <div class="ranking-name">Gracie Abrams</div>
                        </div>
                        <div class="ranking-right">
                            <div class="ranking-amount">₱23,000</div>
                            <div class="ranking-campaigns">7 campaigns</div>
                        </div>
                    </div>

                    <div class="ranking-item">
                        <div class="rank-number">#7</div>
                        
                        <div class="ranking-info">
                            <img src="{{ asset('images/Steve.jpeg') }}" class="ranking-pic"></img>
                            <div class="ranking-name">Bill Gates</div>
                        </div>
                        <div class="ranking-right">
                            <div class="ranking-amount">₱22,000</div>
                            <div class="ranking-campaigns">6 campaigns</div>
                        </div>
                    </div>

                    <div class="ranking-item">
                        <div class="rank-number">#8</div>
                        
                        <div class="ranking-info">
                            <img src="{{ asset('images/Elon.jpg') }}" class="ranking-pic"></img>
                            <div class="ranking-name">Elon Musk</div>
                        </div>
                        <div class="ranking-right">
                            <div class="ranking-amount">₱21,000</div>
                            <div class="ranking-campaigns">12 campaigns</div>
                        </div>
                    </div>

                    <div class="ranking-item">
                        <div class="rank-number">#9</div>
                        
                        <div class="ranking-info">
                            <img src="{{ asset('images/Harry.jpg') }}" class="ranking-pic"></img>
                            <div class="ranking-name">Harry Styles</div>
                        </div>
                        <div class="ranking-right">
                            <div class="ranking-amount">₱20,000</div>
                            <div class="ranking-campaigns">8 campaigns</div>
                        </div>
                    </div>

                    <div class="ranking-item">
                        <div class="rank-number">#10</div>
                        <div class="ranking-info">
                            <img src="{{ asset('images/Jeff.jpg') }}" class="ranking-pic"></img>
                            <div class="ranking-name">Jeff Bezos</div>
                        </div>
                        <div class="ranking-right">
                            <div class="ranking-amount">₱18,000</div>
                            <div class="ranking-campaigns">9 campaigns</div>
                        </div>
                    </div>
                </div>
             </div>
            </div>

            <div class="campaigns-leaderboard-con hidden">
                <img src="{{ asset('images/Leadership Icon.png') }}" alt="Trophy" class="trophy-icon"/>
                <p class="top-donors-label">Top campaigns of the month of <span>October</span></p>
                <div class="top-campaign-containers">
                    <div id="support-dream-container">
                        <div id="ranking">#1</div>
                        <div id="text-content">
                            <div class="title">Support My Dream of Becoming a Registered Nurse</div>
                            <div class="author">Kristine Dela Cruz</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#2</div>
                        <div id="text-content">
                            <div class="title">Keep My Journey to Becoming a Future Teacher Alive</div>
                            <div class="author">Janelle Santos</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#3</div>
                        <div id="text-content">
                            <div class="title">Help Me Reach My Dream of Becoming a Licensed Engineer</div>
                            <div class="author">Mark Adrian Reyes</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#4</div>
                        <div id="text-content">
                            <div class="title">Keep My Hope of Finishing College Alive</div>
                            <div class="author">Althea Grace Mendoza</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#5</div>
                        <div id="text-content">
                            <div class="title">Help Me Achieve My Dream of Becoming a Successful Architect</div>
                            <div class="author">Christian Paul Villanueva</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#6</div>
                        <div id="text-content">
                            <div class="title">Support My Goal of Becoming a Future IT Professional</div>
                            <div class="author">Rhea Marie Gomez</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#7</div>
                        <div id="text-content">
                            <div class="title">Help Me Pursue My Dream of Becoming a Doctor for the Poor</div>
                            <div class="author">Joshua Miguel Ramos</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#8</div>
                        <div id="text-content">
                            <div class="title">Keep My Hope of Finishing College Alive</div>
                            <div class="author">Ellaine Joy Castillo</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#9</div>
                        <div id="text-content">
                            <div class="title">Keep My Passion for Becoming a Future Educator Alive</div>
                            <div class="author">John Carlo Navarro</div>
                        </div>
                    </div>
                    <div id="support-dream-container">
                        <div id="ranking">#10</div>
                        <div id="text-content">
                            <div class="title">Code for a Cause</div>
                            <div class="author">Allyssa Faith Ejares</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <script src="{{ asset('js/leaderboard.js') }}"></script>
</body>
</html>
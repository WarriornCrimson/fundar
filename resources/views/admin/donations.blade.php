<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations | FUNDar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-sidebar.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/admin-leaderboard.css') }}"> 
</head>
<body>
    <x-admin-sidebar/>
     <div class="leaderboard-interface">
        <div class="leaderboard-container"> 
            
            <!-- Statistics Cards Section -->
            <div class="stats-cards-grid">
                <!-- Card 1: Total Donations -->
                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Total Donations (365)</span>
                        <i class="fas fa-peso-sign stat-icon"></i>
                    </div>
                    <div class="stat-value">₱98,450</div>
                    <div class="stat-trend trend-positive">+12.5%</div>
                    <div class="stat-period">This month</div>
                </div>

                <!-- Card 2: Total Transactions -->
                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Total Transactions</span>
                        <i class="fas fa-credit-card stat-icon"></i>
                    </div>
                    <div class="stat-value">8</div>
                    <div class="stat-trend trend-positive"></div>
                    <div class="stat-period">This month</div>
                </div>

                <!-- Card 3: Average Donation -->
                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Average Donation</span>
                        <i class="fas fa-chart-line stat-icon"></i>
                    </div>
                    <div class="stat-value">₱7,427</div>
                    <div class="stat-trend trend-negative"></div>
                    <div class="stat-period">Per transaction</div>
                </div>

                <!-- Card 4: Unique Donors -->
                <div class="stat-card">
                    <div class="stat-header">
                        <span class="stat-title">Unique Donors</span>
                        <i class="fas fa-users stat-icon"></i>
                    </div>
                    <div class="stat-value">5</div>
                    <div class="stat-trend trend-positive"></div>
                    <div class="stat-period">Active this month</div>
                </div>
            </div>

            <!-- Leaderboard Header (Donors/Campaigns Toggle) -->
            <div class="leaderboard-header">
                <h1 class="section-title">Leaderboard</h1>
                <div class="leaderboard-btns">
                    <button class="leaderboard-btn donor active">Top Donors</button>
                    <button class="leaderboard-btn campaigns">Top Campaigns</button>
                </div>
            </div>

            <div class="donor-leaderboard-con">
                <h2 class="sub-section-title">Leaderboard for Top Donors</h2>
                
                <!-- New Rankings List (Matches image 5573dd.png) -->
                <div class="rankings-list-new">
                    <!-- Item 1 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new rank-1-color">#1</div>
                        <img src="{{ asset('images/Kim.jpg') }}" class="ranking-pic-new" alt="Kim Kardashian">
                        <div class="ranking-name-new">Kim Kardashian</div>
                        <div class="ranking-amount-new">₱50,000</div>
                        <div class="ranking-campaigns-new">20 campaigns</div>
                    </div>

                    <!-- Item 2 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new rank-2-color">#2</div>
                        <img src="{{ asset('images/Taylor.jpeg') }}" class="ranking-pic-new" alt="Taylor Swift">
                        <div class="ranking-name-new">Taylor Swift</div>
                        <div class="ranking-amount-new">₱48,000</div>
                        <div class="ranking-campaigns-new">12 campaigns</div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new rank-3-color">#3</div>
                        <img src="{{ asset('images/Olivia.jpeg') }}" class="ranking-pic-new" alt="Olivia Rodrigo">
                        <div class="ranking-name-new">Olivia Rodrigo</div>
                        <div class="ranking-amount-new">₱30,000</div>
                        <div class="ranking-campaigns-new">9 campaigns</div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new">#4</div>
                        <img src="{{ asset('images/Sabrina.jpeg') }}" class="ranking-pic-new" alt="Sabrina Carpenter">
                        <div class="ranking-name-new">Sabrina Carpenter</div>
                        <div class="ranking-amount-new">₱27,000</div>
                        <div class="ranking-campaigns-new">8 campaigns</div>
                    </div>
                    
                    <!-- Item 5 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new">#5</div>
                        <img src="{{ asset('images/Conan.jpeg') }}" class="ranking-pic-new" alt="Conan Gray">
                        <div class="ranking-name-new">Conan Gray</div>
                        <div class="ranking-amount-new">₱24,000</div>
                        <div class="ranking-campaigns-new">7 campaigns</div>
                    </div>
                    
                    <!-- Item 6 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new">#6</div>
                        <img src="{{ asset('images/Gracie.jpeg') }}" class="ranking-pic-new" alt="Gracie Abrams">
                        <div class="ranking-name-new">Gracie Abrams</div>
                        <div class="ranking-amount-new">₱23,000</div>
                        <div class="ranking-campaigns-new">7 campaigns</div>
                    </div>

                    <!-- Item 7 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new">#7</div>
                        <img src="{{ asset('images/Steve.jpeg') }}" class="ranking-pic-new" alt="Bill Gates">
                        <div class="ranking-name-new">Bill Gates</div>
                        <div class="ranking-amount-new">₱22,000</div>
                        <div class="ranking-campaigns-new">6 campaigns</div>
                    </div>
                    
                    <!-- Item 8 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new">#8</div>
                        <img src="{{ asset('images/Elon.jpg') }}" class="ranking-pic-new" alt="Elon Musk">
                        <div class="ranking-name-new">Elon Musk</div>
                        <div class="ranking-amount-new">₱21,000</div>
                        <div class="ranking-campaigns-new">12 campaigns</div>
                    </div>
                    
                    <!-- Item 9 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new">#9</div>
                        <img src="{{ asset('images/Harry.jpg') }}" class="ranking-pic-new" alt="Harry Styles">
                        <div class="ranking-name-new">Harry Styles</div>
                        <div class="ranking-amount-new">₱20,000</div>
                        <div class="ranking-campaigns-new">8 campaigns</div>
                    </div>
                    
                    <!-- Item 10 -->
                    <div class="ranking-item-new">
                        <div class="rank-badge-new">#10</div>
                        <img src="{{ asset('images/Jeff.jpg') }}" class="ranking-pic-new" alt="Jeff Bezos">
                        <div class="ranking-name-new">Jeff Bezos</div>
                        <div class="ranking-amount-new">₱16,000</div>
                        <div class="ranking-campaigns-new">4 campaigns</div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="leaderboard-top-donors">
                    <div class="trophy-chart-wrapper">
                        <img src="{{ asset('images/Leadership Icon.png') }}" alt="Trophy" class="trophy-icon-chart"/>
                        <p class="top-donors-label">Top donors of the month of <span>October</span></p>
                    </div>
                    
                    <div class="chart-container">
                        <div class="chart">
                                <!-- Bar 1 - 10 (Using original structure but adjusted names/images for consistency) -->
                                <!-- Bar 1 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Gracie.jpeg') }}" alt="Gracie" class="profile-pic">
                                    <div class="bar bar-6"></div>
                                </div>
                                <!-- Bar 2 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Conan.jpeg') }}" alt="Conan" class="profile-pic">
                                    <div class="bar bar-5"></div>
                                </div>
                                <!-- Bar 3 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Sabrina.jpeg') }}" alt="Sabrina" class="profile-pic">
                                    <div class="bar bar-4"></div>
                                </div>
                                <!-- Bar 4 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Steve.jpeg') }}" alt="Bill Gates" class="profile-pic">
                                    <div class="bar bar-3"></div>
                                </div>
                                <!-- Bar 5 (Highest) -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Taylor.jpeg') }}" alt="Taylor" class="profile-pic">
                                    <div class="bar bar-9"></div>
                                </div>
                                <!-- Bar 6 (Highest) -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Kim.jpg') }}" alt="Kim" class="profile-pic">
                                    <div class="bar bar-10"></div>
                                </div>
                                <!-- Bar 7 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Olivia.jpeg') }}" alt="Olivia" class="profile-pic">
                                    <div class="bar bar-8"></div>
                                </div>
                                <!-- Bar 8 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Harry.jpg') }}" alt="Harry" class="profile-pic">
                                    <div class="bar bar-7"></div>
                                </div>
                                <!-- Bar 9 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Jeff.jpg') }}" alt="Jeff" class="profile-pic">
                                    <div class="bar bar-2"></div>
                                </div>
                                <!-- Bar 10 -->
                                <div class="bar-wrapper">
                                    <img src="{{ asset('images/Elon.jpg') }}" alt="Elon" class="profile-pic">
                                    <div class="bar bar-1"></div>
                                </div>

                                <!-- Scale on the right -->
                                <div class="scale">
                                    <div class="scale-item">50k</div>
                                    <div class="scale-item">40k</div>
                                    <div class="scale-item">30k</div>
                                    <div class="scale-item">20k</div>
                                    <div class="scale-item">10k</div>
                                    <div class="scale-item">5k</div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Transactions Table/List -->
                <h2 class="sub-section-title">Latest Transactions</h2>
                <div class="transactions-table-wrapper">
                    <div class="search-and-filters">
                        <div class="search-input-wrapper">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search by name, email, or ID..." class="transactions-search-input">
                        </div>
                        <div class="filter-buttons">
                            <button class="dropdown-filter-btn">All Campaigns <i class="fas fa-chevron-down"></i></button>
                            <button class="dropdown-filter-btn">All Status <i class="fas fa-chevron-down"></i></button>
                        </div>
                    </div>

                    <table class="transactions-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Donor Name</th>
                                <th>Student Name</th>
                                <th>Campaign</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TXN001</td>
                                <td>Kim Kardashian</td>
                                <td>Allyssa Ejares</td>
                                <td>Code for a Cause</td>
                                <td>₱3,000</td>
                                <td>2025-10-29</td>
                                <td><span class="tag tag-gcash">GCash</span></td>
                            </tr>
                            <tr>
                                <td>TXN002</td>
                                <td>Olivia Rodrigo</td>
                                <td>Andrea Torreon</td>
                                <td>A Call for Support: I Am in Need of a Laptop</td>
                                <td>₱10,000</td>
                                <td>2025-10-29</td>
                                <td><span class="tag tag-paypal">Paypal</span></td>
                            </tr>
                            <tr>
                                <td>TXN003</td>
                                <td>Elon Musk</td>
                                <td>Allyssa Ejares</td>
                                <td>Code for a Cause</td>
                                <td>₱2,000</td>
                                <td>2025-10-28</td>
                                <td><span class="tag tag-bank">Bank Transfer</span></td>
                            </tr>
                             <tr>
                                <td>TXN004</td>
                                <td>Taylor Swift</td>
                                <td>Mark Reyes</td>
                                <td>Help Me Reach My Dream of Becoming a Licensed Engineer</td>
                                <td>₱5,000</td>
                                <td>2025-10-27</td>
                                <td><span class="tag tag-gcash">GCash</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- Campaigns Leaderboard (Unchanged for now) -->
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

    <script src="{{ asset('js/admin-leaderboard.js') }}"></script>
</body>
</html>
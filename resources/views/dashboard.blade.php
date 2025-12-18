<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | FUNDar</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/campaign.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body> 
    <x-side-bar/> 
 
    <script>
        window.logoutRedirect = "{{ route('landing') }}";
    </script>

    <div class="modal-overlay">
        <div class="modal-container confirm-modal">
            <h2 class="modal-title">Are you sure you want to logout?</h2>
            <div class="modal-footer">
                <button class="btn-cancel" id="cancelLogout">Cancel</button>
                <button class="btn-confirm" id="confirmLogout">Confirm</button>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        <div class="warm-greeting">
            <h1 class="user-greeting">Hey <span class="large-name">Andrea</span>! FUNDar's been waiting for you.</h1>
            <hr class="greeting-hr">
        </div> 

        <div class="logged-in-user-profile">
            <img src="{{ asset('images/Andrea.png') }}">
        </div>
        
        <div class="logout hide"><button class="logout-text"><i class="fi fi-rr-user-logout"></i> Log out</button></div>

        <x-campaign-card 
        userName="Allyssa"
        userYear="3rd Year"
        userCourse="BS Information Technology"
        :userAvatar="asset('images/Allyssa.png')"
        :campaignImage="asset('images/Maria.png')"
        campaignTitle="Code for a Cause"
        campaignDescription="Hi! I'm Allyssa, a tech student with a big dream — to build applications that solve real-world problems. As we begin our capstone project, I want to give my all, but I currently don't have a laptop powerful enough to handle development tools."
        :raisedAmount="10000"
        :goalAmount="20000" 
        :fundedPercentage="50" 
        campaignId="1"
        badge="Learning Material"
        :voteCount="99"
        :copyLinkNum="10"
        />

        <x-campaign-card 
        headerMessage="Hey there, future-changer! 💡 Your kindness today could keep a dream alive. Every peso counts — let’s make education possible!"
        userName="Kaycee"
        userYear="3rd Year"
        userCourse="BS Accountancy"
        :userAvatar="asset('images/Kaycee.png')"
        :campaignImage="asset('images/KayceeCampaign.png')"
        campaignTitle="Help Me Keep My Dream of Becoming a CPA Alive"
        campaignDescription="Hi! I’m Kaycee, an Accountancy student who dreams of becoming a Certified Public Accountant someday. I’ve always valued accuracy and honesty, but my education is at risk because my father recently lost his job. Your support can help me stay in school and continue this journey with hope and determination."
        :raisedAmount="5000"
        :goalAmount="20000"
        :fundedPercentage="25"
        campaignId="2"
        badge="Tuition Fee"
        :voteCount="34"
        :copyLinkNum="7"
        />

        <x-campaign-card 
        headerMessage="No student should study on an empty stomach 🍞. Help Christo continue his studies with the essentials he needs."
        userName="Christo Rey"
        userYear="2nd Year"
        userCourse="BS Education"
        :userAvatar="asset('images/Christo Rey.png')"
        :campaignImage="asset('images/ChristoReyCampaign.png')"
        campaignTitle="Meals and Hope for a Future Teacher"
        campaignDescription="Hi! I’m Christo Rey, a future teacher. There are days I skip meals just to save money for school needs. I’m asking for support to afford basic food and rent. Your kindness keeps both my body and my dreams alive."
        :raisedAmount="0"
        :goalAmount="10000"
        :fundedPercentage="0"
        campaignId="3"
        badge="Living Essentials"
        :voteCount="0"
        :copyLinkNum="0"
        /> 
        
        <x-campaign-card 
        headerMessage="Every coder starts with a dream and a borrowed laptop. Help Jerome keep writing the future—one line of code at a time 💻."
        userName="Jerome"
        userYear="2nd Year"
        userCourse="BS Information Technology"
        :userAvatar="asset('images/Jerome.png')"
        :campaignImage="asset('images/JeromeCampaign.png')"
        campaignTitle="Let Me Continue Coding My Way to a Better Life"
        campaignDescription="Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology."
        :raisedAmount="0"
        :goalAmount="22000"
        :fundedPercentage="0"
        campaignId="4"
        badge="Tuition Fee"
        :voteCount="4"
        :copyLinkNum="20"
        />
        
        <x-campaign-card 
        headerMessage="A kind heart can save a future nurse 🩺. Help Angel continue her studies and serve those who need her care."
        userName="Angelica"
        userYear="2nd Year"
        userCourse="BS Nursing"
        :userAvatar="asset('images/Angelica.png')"
        :campaignImage="asset('images/Angelica.png')"
        campaignTitle="Let Me Continue Coding My Way to a Better Life"
        campaignDescription="Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology."
        :raisedAmount="4000"
        :goalAmount="25000"
        :fundedPercentage="16"
        campaignId="5"
        badge="Tuition Fee"
        :voteCount="16"
        :copyLinkNum="81"
        /> 
        
        <x-campaign-card 
        headerMessage="A sharp mind can build a brighter world ⚙️. Help Patrick continue his engineering path and design solutions that uplift communities."
        userName="Patrick"
        userYear="3rd Year"
        userCourse="BS Civil Engineering"
        :userAvatar="asset('images/Patrick.png')"
        :campaignImage="asset('images/Patrick.png')"
        campaignTitle="I Don’t Want to Drop Out—Help Me Continue"
        campaignDescription="Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer."
        :raisedAmount="2000"
        :goalAmount="18000"
        :fundedPercentage="11"
        campaignId="6"
        badge="Tuition Fee"
        :voteCount="10"
        :copyLinkNum="43"
        /> 
        
        <x-campaign-card 
        headerMessage="Future accountants don’t give up—they count on hope 🧾. Be part of Sarah’s story and help her stay in school."
        userName="Sarah"
        userYear="3rd Year"
        userCourse="BS Accountancy"
        :userAvatar="asset('images/Sarah.png')"
        :campaignImage="asset('images/Sarah.png')"
        campaignTitle="Balancing Books and Dreams"
        campaignDescription="Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams."
        :raisedAmount="2000"
        :goalAmount="18000"
        :fundedPercentage="11"
        campaignId="7"
        badge="Tuition Fee"
        :voteCount="8"
        :copyLinkNum="7"
        />
        
        <x-campaign-card 
        headerMessage="Every notebook and pencil opens a world of possibilities ✏️. Help Liam explore and create!"
        userName="Liam"
        userYear="4th Grade"
        userCourse="Elementary"
        :userAvatar="asset('images/Liam.png')"
        :campaignImage="asset('images/Liam.png')"
        campaignTitle="Notebooks and Books for My Learning Journey"
        campaignDescription="Hi! I’m Liam. I love reading, writing, and drawing, but I don’t have enough notebooks and books for my schoolwork. With your help, I can finish my lessons, do my homework, and explore new things every day. Every little bit helps me grow and learn."
        :raisedAmount="0"
        :goalAmount="3500"
        :fundedPercentage="0"
        campaignId="8"
        badge="Learning Material"
        :voteCount="0"
        :copyLinkNum="0"
        />         
        
        <x-campaign-card 
        headerMessage="A small helping hand today can keep Lily in school tomorrow ✏️. Be her hero!"
        userName="Lily"
        userYear="5th Grade"
        userCourse="Elementary"
        :userAvatar="asset('images/Lily.png')"
        :campaignImage="asset('images/Lily.png')"
        campaignTitle="Help Me Stay in School and Learn"
        campaignDescription="Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams."
        :raisedAmount="0"
        :goalAmount="5000"
        :fundedPercentage="0"
        campaignId="9"
        badge="Tuition Fee"
        :voteCount="0"
        :copyLinkNum="0"
        />          

        <x-campaign-card 
        headerMessage="Help Alex light the way for renewable energy ⚡. A small gift today powers a brighter tomorrow."
        userName="Alex"
        userYear="4th Year"
        userCourse="BS Electrical Engineering"
        :userAvatar="asset('images/AlexProfile.png')"
        :campaignImage="asset('images/Alex.png')"
        campaignTitle="Powering the Future Through Renewable Energy"
        campaignDescription="Hi! I’m Alex, researching solar power optimization for rural homes. I’m raising funds for prototype materials and testing tools. Your help turns my thesis into a real project that lights up lives."
        :raisedAmount="5000"
        :goalAmount="17000"
        :fundedPercentage="29"
        campaignId="10"
        badge="Research"
        :voteCount="100"
        :copyLinkNum="87"
        />
        
        <x-campaign-card 
        headerMessage="Science advances with support 🧬. Help Hannah complete her biology thesis and explore discoveries for the future."
        userName="Hannah"
        userYear="4th Year"
        userCourse="BS Biology"
        :userAvatar="asset('images/HannahProfile.png')"
        :campaignImage="asset('images/Hannah.png')"
        campaignTitle="Unlocking Answers Through Research"
        campaignDescription="Hi! I’m Hannah, working on my biology thesis focused on genetics. I need funds for lab analysis and materials. Every donation helps me continue the research that could inspire future scientists."
        :raisedAmount="2000"
        :goalAmount="15000"
        :fundedPercentage="13"
        campaignId="11"
        badge="Research"
        :voteCount="10"
        :copyLinkNum="56"
        />    
        
        
        <x-campaign-card 
        headerMessage="Every check-up counts 🏥. Help Daniel stay strong and never miss a class!"
        userName="Daniel"
        userYear="3rd Year"
        userCourse="High School"
        :userAvatar="asset('images/DanielProfile.png')"
        :campaignImage="asset('images/Daniel.png')"
        campaignTitle="Healthcare Support for a Brighter Future"
        campaignDescription="Hi! I’m Daniel. I enjoy learning and joining school projects, but I often get sick and don’t have enough resources for medicine or doctor visits. Your help will keep me healthy, so I can focus on my studies and make the most of every opportunity."
        :raisedAmount="0"
        :goalAmount="6000"
        :fundedPercentage="0"
        campaignId="12"
        badge="Health Assistance"
        :voteCount="7"
        :copyLinkNum="2"
        />      
        
        <x-campaign-card 
        headerMessage="When a storm destroys a home, dreams shouldn’t be lost 🌪️. Help Lia rebuild and stay in school!"
        userName="Lia"
        userYear="2nd Year"
        userCourse="High School"
        :userAvatar="asset('images/LiaProfile.png')"
        :campaignImage="asset('images/Lia.png')"
        campaignTitle="Rebuilding After the Storm: Help Me Stay in School"
        campaignDescription="Hi! I’m Lia. Recently, a strong typhoon destroyed our home, leaving my family without shelter and basic necessities. Amidst this disaster, I’m worried I might not be able to continue going to school. Your support will help us recover from this crisis, rebuild our home, and allow me to continue learning and pursuing my dreams despite this hardship."
        :raisedAmount="0"
        :goalAmount="15000"
        :fundedPercentage="0"
        campaignId="13"
        badge="Emergency Fund"
        :voteCount="0"
        :copyLinkNum="2"
        />
        
        <x-campaign-card 
        headerMessage="A safe and warm home helps a student focus on learning 🏠. Help Miguel stay comfortable and ready for school!"
        userName="Miguel"
        userYear="2nd Year"
        userCourse="High School"
        :userAvatar="asset('images/MiguelProfile.png')"
        :campaignImage="asset('images/Miguel.png')"
        campaignTitle="Basic Needs to Keep Me Learning"
        campaignDescription="Hi! I’m Miguel. I love going to school, but my family struggles to afford basic essentials like food, clothing, and a safe place to sleep. Sometimes I’m too hungry or tired to concentrate in class. Your support will help me have the necessities I need to stay healthy, focus on learning, and keep chasing my dreams."
        :raisedAmount="0"
        :goalAmount="8000"
        :fundedPercentage="12"
        campaignId="14"
        badge="Living Essential"
        :voteCount="2"
        :copyLinkNum="9"
        />   
        
        <x-campaign-card 
        headerMessage="A healthy student is a successful student 🩺. Help Sophia stay well and focus on her dreams!"
        userName="Sophia"
        userYear="2nd Year"
        userCourse="High School"
        :userAvatar="asset('images/SophiaProfile.png')"
        :campaignImage="asset('images/Sophia.png')"
        campaignTitle="Medical Help to Stay Healthy in School"
        campaignDescription="Hi! I’m Sophia. I love studying and being part of school activities, but sometimes I fall sick and cannot afford proper medicine or check-ups. Your support will help me stay healthy, attend classes regularly, and keep chasing my dreams."
        :raisedAmount="0"
        :goalAmount="5000"
        :fundedPercentage="0"
        campaignId="15"
        badge="Health Assistance"
        :voteCount="2"
        :copyLinkNum="9"
        />            
        
        <div class="end-of-campaigns">
            <p>No student campaigns here right now. Check back soon!</p>
        </div>
    </div>

    <x-save-campaign/>

    <script src="{{ asset('js/campaigncard.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/notifications.js') }}"></script>
    <script src="{{ asset('js/modals.js') }}"></script>

</body>
</html>
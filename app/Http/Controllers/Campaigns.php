<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Campaigns extends Controller
{
    //
private function getCampaignsData(): array
    {
$campaigns = [
    // Allyssa's Campaign
    [
        'goalDate' => 'Oct 20',
        'userName' => 'Allyssa',
        'userYear' => '3rd Year',
        'userCourse' => 'BS Information Technology',
        'userAvatar' => asset('images/Allyssa.png'),
        'campaignImage' => asset('images/Maria.png'),
        'campaignTitle' => 'Code for a Cause',
        'campaignSummary' => "Hi! I'm Allyssa, a tech student with a big dream — to build applications that solve real-world problems. As we begin our capstone project, I want to give my all, but I currently don't have a laptop powerful enough to handle development tools.",
        'raisedAmount' => 10000,
        'goalAmount' => 20000,
        'fundedPercentage' => 50,
        'campaignId' => 1,
        'badge' => 'Learning Material',
        'voteCount' => 99,
        'copyLinkNum' => 10,
        'headerMessage' => null,
        'campaignDescription' => "Hi! I’m Allyssa, a passionate tech student with a big dream — to develop applications that solve real-world problems and make life easier for people in my community. Technology has always fascinated me, and I believe that with the right tools, I can create solutions that truly matter. As we approach our capstone project, I’m excited to put my knowledge and skills into practice, but there’s a challenge I’m facing: I don’t currently have a laptop powerful enough to run the development tools and software required for this project.

                                This project is more than just a requirement; it’s an opportunity for me to learn, innovate, and contribute to meaningful solutions. I’m eager to explore new technologies, test ideas, and turn concepts into working applications that could have a real impact. Your support will not only help me acquire the right equipment but also empower me to fully commit to my learning and creative journey.

                                Every contribution brings me closer to being able to focus on what I love most: coding, problem-solving, and creating projects that make a difference. By helping me now, you’re not just funding a laptop — you’re investing in a student’s dream, passion, and the potential for impactful technological solutions. Together, we can turn these ideas into reality and make a positive change in the world through technology.

                                Thank you for taking the time to read my story and for considering supporting me. Your generosity will make a lasting difference in my education and future projects.",
        'comments' => [
        [
            'userName' => 'Allyssa', 
            'userAvatar' => asset('images/Allyssa.png'),
            'userCourse' => 'Fundraiser',
            'content' => 'Thank you so much for the support! Every peso brings me closer to my goal of completing this semester.',
            'postedTime' => '2 days ago', 
            'heartCount' => 5,
        ],
        [
            'userName' => 'Marcus Dela Cruz',
            'userAvatar' => asset('images/Donor1.png'),
            'userCourse' => 'Donor',
            'content' => "I'm really inspired by your campaign! Wishing you the best in your studies. Don't give up!",
            'postedTime' => '5 hours ago', 
            'heartCount' => 12,
        ],
        ],

        'donations' => [
            [
                'donorName' => 'Anonymous Donor',
                'mode' => 'PayPal',
                'amount' => 5000.00,
                'postedTime' => '1 hour ago', 
                'donationHeart' => 2
            ],
            [
                'donorName' => 'Kim Kardashian',
                'mode' => 'GCash',
                'amount' => 1500.00,
                'postedTime' => '3 hours ago',
                'donationHeart' => 3
            ],
        ],
        
        'similarCampaigns' => [
            // Liam - Learning Material
            [
                'userName' => 'Liam',
                'userYear' => '4th Grade',
                'userCourse' => 'Elementary',
                'userAvatar' => asset('images/Liam.png'),
                'campaignImage' => asset('images/Liam.png'),
                'campaignTitle' => 'Notebooks and Books for My Learning Journey',
                'campaignDescription' => "Hi! I’m Liam. I love reading, writing, and drawing, but I don’t have enough notebooks and books for my schoolwork. With your help, I can finish my lessons, do my homework, and explore new things every day. Every little bit helps me grow and learn.",
                'raisedAmount' => 0,
                'goalAmount' => 3500,
                'fundedPercentage' => 0,
                'campaignId' => 8,
                'badge' => 'Learning Material',
                'voteCount' => 0,
                'copyLinkNum' => 0,
                'headerMessage' => 'Every notebook and pencil opens a world of possibilities ✏️. Help Liam explore and create!',
            ],
        ],
    ],

    // Kaycee's Campaign
    [
        'goalDate' => 'Jul 22',
        'userName' => 'Kaycee',
        'userYear' => '3rd Year',
        'userCourse' => 'BS Accountancy',
        'userAvatar' => asset('images/Kaycee.png'),
        'campaignImage' => asset('images/KayceeCampaign.png'),
        'campaignTitle' => 'Help Me Keep My Dream of Becoming a CPA Alive',
        'campaignSummary' => 'Hi! I’m Kaycee, an Accountancy student who dreams of becoming a Certified Public Accountant someday. I’ve always valued accuracy and honesty, but my education is at risk because my father recently lost his job. Your support can help me stay in school and continue this journey with hope and determination.',
        'raisedAmount' => 5000,
        'goalAmount' => 20000,
        'fundedPercentage' => 25,
        'campaignId' => 2,
        'badge' => 'Tuition Fee',
        'voteCount' => 34,
        'copyLinkNum' => 7,
        'headerMessage' => 'Hey there, future-changer! 💡 Your kindness today could keep a dream alive. Every peso counts — let’s make education possible!',
        'campaignDescription' => 'Hi! I’m Kaycee, an Accountancy student with a big dream — to become a Certified Public Accountant someday and use my knowledge to help individuals and businesses make wise financial decisions. Ever since I started studying accounting, I’ve learned to value accuracy, honesty, and integrity in everything I do. Numbers may seem simple, but behind them are real stories that reflect trust and responsibility — principles I hold deeply in my heart.

                                However, my education is now at risk because my father recently lost his job, and it has been difficult for my family to support my studies. Despite this challenge, I remain determined to continue learning and pursuing my goals. Becoming a CPA isn’t just a personal dream; it’s a way for me to give back to my family and community, to help others manage their finances responsibly, and to build a stable future grounded in honesty and service.

                                Your support can make a huge difference. It will help me stay in school, complete my studies with focus and determination, and continue my journey toward earning my CPA license. Every contribution will not only ease the burden on my family but also bring me closer to realizing my dream of becoming a professional who upholds truth and integrity in the field of accounting.

                                Thank you so much for taking the time to read my story and for considering supporting me. Your kindness and generosity will go a long way in helping me continue this journey with hope, perseverance, and a heart full of gratitude.',
        
        'comments' => [],
        'donations' => [
            [
                'donorName' => 'Anonymous Donor',
                'mode' => 'PayPal',
                'amount' => 5000.00,
                'postedTime' => '1 hour ago', 
                'donationHeart' => 2
            ]
            ],     
        'similarCampaigns' => [
            // Jerome - Tuition Fee
            [
                'userName' => 'Jerome',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Information Technology',
                'userAvatar' => asset('images/Jerome.png'),
                'campaignImage' => asset('images/JeromeCampaign.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 0,
                'goalAmount' => 22000,
                'fundedPercentage' => 0,
                'campaignId' => 4,
                'badge' => 'Tuition Fee',
                'voteCount' => 4,
                'copyLinkNum' => 20,
                'headerMessage' => 'Every coder starts with a dream and a borrowed laptop. Help Jerome keep writing the future—one line of code at a time 💻.',
            ],
            // Angelica - Tuition Fee
            [
                'userName' => 'Angelica',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Nursing',
                'userAvatar' => asset('images/Angelica.png'),
                'campaignImage' => asset('images/Angelica.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 4000,
                'goalAmount' => 25000,
                'fundedPercentage' => 16,
                'campaignId' => 5,
                'badge' => 'Tuition Fee',
                'voteCount' => 16,
                'copyLinkNum' => 81,
                'headerMessage' => 'A kind heart can save a future nurse 🩺. Help Angel continue her studies and serve those who need her care.',
            ],
            // Patrick - Tuition Fee
            [
                'userName' => 'Patrick',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Civil Engineering',
                'userAvatar' => asset('images/Patrick.png'),
                'campaignImage' => asset('images/Patrick.png'),
                'campaignTitle' => 'I Don’t Want to Drop Out—Help Me Continue',
                'campaignDescription' => 'Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 6,
                'badge' => 'Tuition Fee',
                'voteCount' => 10,
                'copyLinkNum' => 43,
                'headerMessage' => 'A sharp mind can build a brighter world ⚙️. Help Patrick continue his engineering path and design solutions that uplift communities.',
            ],
            // Sarah - Tuition Fee
            [
                'userName' => 'Sarah',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Sarah.png'),
                'campaignImage' => asset('images/Sarah.png'),
                'campaignTitle' => 'Balancing Books and Dreams',
                'campaignDescription' => 'Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 7,
                'badge' => 'Tuition Fee',
                'voteCount' => 8,
                'copyLinkNum' => 7,
                'headerMessage' => 'Future accountants don’t give up—they count on hope 🧾. Be part of Sarah’s story and help her stay in school.',
            ],
            // Lily - Tuition Fee
            [
                'userName' => 'Lily',
                'userYear' => '5th Grade',
                'userCourse' => 'Elementary',
                'userAvatar' => asset('images/Lily.png'),
                'campaignImage' => asset('images/Lily.png'),
                'campaignTitle' => 'Help Me Stay in School and Learn',
                'campaignDescription' => 'Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams.',
                'raisedAmount' => 0,
                'goalAmount' => 5000,
                'fundedPercentage' => 0,
                'campaignId' => 9,
                'badge' => 'Tuition Fee',
                'voteCount' => 0,
                'copyLinkNum' => 0,
                'headerMessage' => 'A small helping hand today can keep Lily in school tomorrow ✏️. Be her hero!',
            ],
        ],
    ],

    // Christo Rey's Campaign
    [
        'goalDate' => 'Aug 03',
        'userName' => 'Christo Rey',
        'userYear' => '2nd Year',
        'userCourse' => 'BS Education',
        'userAvatar' => asset('images/Christo Rey.png'),
        'campaignImage' => asset('images/ChristoReyCampaign.png'),
        'campaignTitle' => 'Meals and Hope for a Future Teacher',
        'campaignSummary' => 'Hi! I’m Christo Rey, a future teacher. There are days I skip meals just to save money for school needs. I’m asking for support to afford basic food and rent. Your kindness keeps both my body and my dreams alive.',
        'raisedAmount' => 0,
        'goalAmount' => 10000,
        'fundedPercentage' => 0,
        'campaignId' => 3,
        'badge' => 'Living Essentials',
        'voteCount' => 0,
        'copyLinkNum' => 0,
        'headerMessage' => 'No student should study on an empty stomach 🍞. Help Christo continue his studies with the essentials he needs.',
        'campaignDescription' => "Hi! I’m Christo Rey, a future teacher. There are days I skip meals just to save money for school needs. I’m asking for support to afford basic food and rent. Your kindness keeps both my body and my dreams alive.

                                I’m currently a 2nd Year BS Education student, and ever since I chose the path of teaching, I’ve carried one dream in my heart—to become the kind of teacher who empowers students, inspires hope, and changes lives through education. Teaching isn’t just a profession for me; it’s a calling rooted in patience, compassion, and commitment to helping young minds grow.

                                But despite my dedication, my journey has become incredibly challenging. With limited resources, I sometimes have to endure days with little to no food just to ensure I can pay for school materials, transportation, and rent. These hardships may slow me down, but they will never stop me from striving toward my dream of becoming a teacher who serves with heart, integrity, and purpose.

                                Your support means more than just financial help—it means a chance to stay healthy, focused, and able to continue my studies without sacrificing my well-being. Every contribution brings me closer to finishing my degree and becoming a teacher who uplifts others, especially students who also struggle but continue to hope.

                                Thank you so much for taking the time to hear my story. Your generosity not only keeps me going today but also helps build the future classroom where I hope to inspire the next generation. Your kindness truly fuels both my body and my dream.",
        'comments' => [],
        'donations' => [],
        'similarCampaigns' => [
            // Miguel - Living Essential
            [
                'userName' => 'Miguel',
                'userYear' => '2nd Year',
                'userCourse' => 'High School',
                'userAvatar' => asset('images/MiguelProfile.png'),
                'campaignImage' => asset('images/Miguel.png'),
                'campaignTitle' => 'Basic Needs to Keep Me Learning',
                'campaignDescription' => 'Hi! I’m Miguel. I love going to school, but my family struggles to afford basic essentials like food, clothing, and a safe place to sleep. Sometimes I’m too hungry or tired to concentrate in class. Your support will help me have the necessities I need to stay healthy, focus on learning, and keep chasing my dreams.',
                'raisedAmount' => 0,
                'goalAmount' => 8000,
                'fundedPercentage' => 12,
                'campaignId' => 14,
                'badge' => 'Living Essentials',
                'voteCount' => 2,
                'copyLinkNum' => 9,
                'headerMessage' => 'A safe and warm home helps a student focus on learning 🏠. Help Miguel stay comfortable and ready for school!',
            ],
        ],
    ],

    // Jerome's Campaign
    [
        'goalDate' => 'Dec 20',
        'userName' => 'Jerome',
        'userYear' => '2nd Year',
        'userCourse' => 'BS Information Technology',
        'userAvatar' => asset('images/Jerome.png'),
        'campaignImage' => asset('images/JeromeCampaign.png'),
        'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
        'campaignSummary' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
        'raisedAmount' => 0,
        'goalAmount' => 22000,
        'fundedPercentage' => 0,
        'campaignId' => 4,
        'badge' => 'Tuition Fee',
        'voteCount' => 4,
        'copyLinkNum' => 20,
        'headerMessage' => 'Every coder starts with a dream and a borrowed laptop. Help Jerome keep writing the future—one line of code at a time 💻.',
        'campaignDescription' => "Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.

                                I’m Jerome, a 2nd Year BS Information Technology student, and ever since I discovered the world of coding, I’ve dreamed of becoming a developer who builds tools that help people and solve real problems. Technology gives me hope — it’s where creativity meets purpose, and it’s where I see my future.

                                But despite my passion, staying in school is becoming harder each day. My family’s small eatery barely earns enough to support our daily needs, and even with my part-time job, the income is not enough to cover tuition, school requirements, transportation, and food. The thought of stopping school next semester is something I battle with constantly, but I won’t give up on my dream.

                                Your support can help keep me on the path toward finishing my degree and building a better life for my family. Every contribution — no matter the amount — helps me stay in school, stay focused, and stay hopeful. With your help, I can continue learning, improving, and developing the skills I need to create a future through technology.

                                Thank you so much for taking the time to read my story. Your kindness truly brings me closer to my dream of becoming an IT professional who uses technology to make a meaningful impact.",
        'comments' => [
                    [
                        'userName' => 'Jerome', 
                        'userAvatar' => asset('images/Jerome.png'),
                        'userCourse' => 'Fundraiser',
                        'content' => 'Thank you so much for the support! I love you all. 💖',
                        'postedTime' => '2 days ago', 
                        'heartCount' => 5,
                    ],
                    [
                        'userName' => 'Marcus Dela Cruz',
                        'userAvatar' => asset('images/Donor1.png'),
                        'userCourse' => 'Electrical Engineer',
                        'content' => "I'm really inspired by your campaign! Wishing you the best in your studies. Don't give up!",
                        'postedTime' => '5 hours ago', 
                        'heartCount' => 12,
                    ],
                    [
                        'userName' => 'Justin Howard',
                        'userAvatar' => asset('images/Donor2.png'),
                        'userCourse' => 'IT Specialist',
                        'content' => 'Stay strong Jerome, you have a bright future in IT. Keep going!',
                        'postedTime' => '9 hours ago',
                        'heartCount' => 6,
                    ],
                ],
        'donations' => [],
        'similarCampaigns' => [
            // Kaycee - Tuition Fee
            [
                'userName' => 'Kaycee',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Kaycee.png'),
                'campaignImage' => asset('images/KayceeCampaign.png'),
                'campaignTitle' => 'Help Me Keep My Dream of Becoming a CPA Alive',
                'campaignDescription' => 'Hi! I’m Kaycee, an Accountancy student who dreams of becoming a Certified Public Accountant someday. I’ve always valued accuracy and honesty, but my education is at risk because my father recently lost his job. Your support can help me stay in school and continue this journey with hope and determination.',
                'raisedAmount' => 5000,
                'goalAmount' => 20000,
                'fundedPercentage' => 25,
                'campaignId' => 2,
                'badge' => 'Tuition Fee',
                'voteCount' => 34,
                'copyLinkNum' => 7,
                'headerMessage' => 'Hey there, future-changer! 💡 Your kindness today could keep a dream alive. Every peso counts — let’s make education possible!',
            ],
            // Angelica - Tuition Fee
            [
                'userName' => 'Angelica',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Nursing',
                'userAvatar' => asset('images/Angelica.png'),
                'campaignImage' => asset('images/Angelica.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 4000,
                'goalAmount' => 25000,
                'fundedPercentage' => 16,
                'campaignId' => 5,
                'badge' => 'Tuition Fee',
                'voteCount' => 16,
                'copyLinkNum' => 81,
                'headerMessage' => 'A kind heart can save a future nurse 🩺. Help Angel continue her studies and serve those who need her care.',
            ],
            // Patrick - Tuition Fee
            [
                'userName' => 'Patrick',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Civil Engineering',
                'userAvatar' => asset('images/Patrick.png'),
                'campaignImage' => asset('images/Patrick.png'),
                'campaignTitle' => 'I Don’t Want to Drop Out—Help Me Continue',
                'campaignDescription' => 'Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 6,
                'badge' => 'Tuition Fee',
                'voteCount' => 10,
                'copyLinkNum' => 43,
                'headerMessage' => 'A sharp mind can build a brighter world ⚙️. Help Patrick continue his engineering path and design solutions that uplift communities.',
            ],
            // Sarah - Tuition Fee
            [
                'userName' => 'Sarah',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Sarah.png'),
                'campaignImage' => asset('images/Sarah.png'),
                'campaignTitle' => 'Balancing Books and Dreams',
                'campaignDescription' => 'Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 7,
                'badge' => 'Tuition Fee',
                'voteCount' => 8,
                'copyLinkNum' => 7,
                'headerMessage' => 'Future accountants don’t give up—they count on hope 🧾. Be part of Sarah’s story and help her stay in school.',
            ],
            // Lily - Tuition Fee
            [
                'userName' => 'Lily',
                'userYear' => '5th Grade',
                'userCourse' => 'Elementary',
                'userAvatar' => asset('images/Lily.png'),
                'campaignImage' => asset('images/Lily.png'),
                'campaignTitle' => 'Help Me Stay in School and Learn',
                'campaignDescription' => 'Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams.',
                'raisedAmount' => 0,
                'goalAmount' => 5000,
                'fundedPercentage' => 0,
                'campaignId' => 9,
                'badge' => 'Tuition Fee',
                'voteCount' => 0,
                'copyLinkNum' => 0,
                'headerMessage' => 'A small helping hand today can keep Lily in school tomorrow ✏️. Be her hero!',
            ],
        ],
    ],

    // Angelica's Campaign
    [
        'goalDate' => 'Feb 14',
        'userName' => 'Angelica',
        'userYear' => '2nd Year',
        'userCourse' => 'BS Nursing',
        'userAvatar' => asset('images/Angelica.png'),
        'campaignImage' => asset('images/Angelica.png'),
        'campaignTitle' => 'Future Nurse Fighting to Stay in School',
        'campaignSummary' => 'Hi! I’m Angelica, and I’ve always dreamed of becoming a nurse who serves in communities like mine. My parents are farmers, and this semester’s tuition has become too heavy. I’m doing my best, but I need help to stay in school. Your generosity is not just tuition—it’s a chance to nurture a future nurse.',
        'raisedAmount' => 4000,
        'goalAmount' => 25000,
        'fundedPercentage' => 16,
        'campaignId' => 5,
        'badge' => 'Tuition Fee',
        'voteCount' => 16,
        'copyLinkNum' => 81,
        'headerMessage' => 'A kind heart can save a future nurse 🩺. Help Angel continue her studies and serve those who need her care.',
        'campaignDescription' => "Hi! I’m Angelica, and I’ve always dreamed of becoming a nurse who serves in communities like mine. My parents are farmers, and this semester’s tuition has become too heavy. I’m doing my best, but I need help to stay in school. Your generosity is not just tuition—it’s a chance to nurture a future nurse.

                                    I’m Angelica, a 2nd Year BS Nursing student, and ever since I was young, I’ve carried the dream of serving others with care, compassion, and skill. Nursing has always been close to my heart. I want to be the kind of nurse who brings comfort to those who fear, hope to those who struggle, and healing to those who need it most.

                                    But the path toward becoming a nurse has not been easy. My parents work tirelessly as farmers, yet their income is often unpredictable. With tuition fees, clinical materials, and daily school expenses piling up, continuing this semester has become a challenge too heavy for us to carry alone. I’ve been doing everything I can to manage, but my efforts are no longer enough.

                                    Your support means more than financial help — it means keeping my dream alive. It means giving me the chance to stay in school, complete my nursing training, and eventually serve the very communities that shaped me. Every contribution, whether big or small, brings me one step closer to wearing my uniform with pride and saving lives with purpose.

                                    Thank you so much for taking the time to read my story. Your kindness brings strength to my journey and hope to my heart. Truly, a kind heart can save a future nurse.",

        'comments' => [
                        [
                            'userName' => 'Jessa Marie', 
                            'userAvatar' => asset('images/Donor3.png'),
                            'userCourse' => 'Supporter',
                            'content' => 'You’re doing amazing, Angelica. Keep studying hard—your future patients need you!',
                            'postedTime' => '1 day ago', 
                            'heartCount' => 9,
                        ],
                        [
                            'userName' => 'Pauline Ramos',
                            'userAvatar' => asset('images/Donor4.jpg'),
                            'userCourse' => 'Model',
                            'content' => 'I admire your determination. A little help from me—hope it lights your path.',
                            'postedTime' => '6 hours ago', 
                            'heartCount' => 4,
                        ],
                        [
                            'userName' => 'Nurse Miguel',
                            'userAvatar' => asset('images/Donor5.png'),
                            'userCourse' => 'Registered Nurse',
                            'content' => 'As a nurse myself, I know the struggles. Don’t give up, Angelica—you’ll get there.',
                            'postedTime' => '2 hours ago',
                            'heartCount' => 13,
                        ],
                    ],
        'donations' => [
                    [
                        'donorName' => 'Anonymous',
                        'mode' => 'GCash',
                        'amount' => 350.00,
                        'postedTime' => '30 minutes ago', 
                        'donationHeart' => 1
                    ],
                    [
                        'donorName' => 'Celine Robles',
                        'mode' => 'PayPal',
                        'amount' => 1200.00,
                        'postedTime' => '3 hours ago',
                        'donationHeart' => 5
                    ],
                    [
                        'donorName' => 'The Caring Group',
                        'mode' => 'PayPal',
                        'amount' => 2500.00,
                        'postedTime' => '1 day ago',
                        'donationHeart' => 8
                    ],
                ],

        'similarCampaigns' => [
            // Kaycee - Tuition Fee
            [
                'userName' => 'Kaycee',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Kaycee.png'),
                'campaignImage' => asset('images/KayceeCampaign.png'),
                'campaignTitle' => 'Help Me Keep My Dream of Becoming a CPA Alive',
                'campaignDescription' => 'Hi! I’m Kaycee, an Accountancy student who dreams of becoming a Certified Public Accountant someday. I’ve always valued accuracy and honesty, but my education is at risk because my father recently lost his job. Your support can help me stay in school and continue this journey with hope and determination.',
                'raisedAmount' => 5000,
                'goalAmount' => 20000,
                'fundedPercentage' => 25,
                'campaignId' => 2,
                'badge' => 'Tuition Fee',
                'voteCount' => 34,
                'copyLinkNum' => 7,
                'headerMessage' => 'Hey there, future-changer! 💡 Your kindness today could keep a dream alive. Every peso counts — let’s make education possible!',
            ],
            // Jerome - Tuition Fee
            [
                'userName' => 'Jerome',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Information Technology',
                'userAvatar' => asset('images/Jerome.png'),
                'campaignImage' => asset('images/JeromeCampaign.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 0,
                'goalAmount' => 22000,
                'fundedPercentage' => 0,
                'campaignId' => 4,
                'badge' => 'Tuition Fee',
                'voteCount' => 4,
                'copyLinkNum' => 20,
                'headerMessage' => 'Every coder starts with a dream and a borrowed laptop. Help Jerome keep writing the future—one line of code at a time 💻.',
            ],
            // Patrick - Tuition Fee
            [
                'userName' => 'Patrick',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Civil Engineering',
                'userAvatar' => asset('images/Patrick.png'),
                'campaignImage' => asset('images/Patrick.png'),
                'campaignTitle' => 'I Don’t Want to Drop Out—Help Me Continue',
                'campaignDescription' => 'Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 6,
                'badge' => 'Tuition Fee',
                'voteCount' => 10,
                'copyLinkNum' => 43,
                'headerMessage' => 'A sharp mind can build a brighter world ⚙️. Help Patrick continue his engineering path and design solutions that uplift communities.',
            ],
            // Sarah - Tuition Fee
            [
                'userName' => 'Sarah',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Sarah.png'),
                'campaignImage' => asset('images/Sarah.png'),
                'campaignTitle' => 'Balancing Books and Dreams',
                'campaignDescription' => 'Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 7,
                'badge' => 'Tuition Fee',
                'voteCount' => 8,
                'copyLinkNum' => 7,
                'headerMessage' => 'Future accountants don’t give up—they count on hope 🧾. Be part of Sarah’s story and help her stay in school.',
            ],
            // Lily - Tuition Fee
            [
                'userName' => 'Lily',
                'userYear' => '5th Grade',
                'userCourse' => 'Elementary',
                'userAvatar' => asset('images/Lily.png'),
                'campaignImage' => asset('images/Lily.png'),
                'campaignTitle' => 'Help Me Stay in School and Learn',
                'campaignDescription' => 'Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams.',
                'raisedAmount' => 0,
                'goalAmount' => 5000,
                'fundedPercentage' => 0,
                'campaignId' => 9,
                'badge' => 'Tuition Fee',
                'voteCount' => 0,
                'copyLinkNum' => 0,
                'headerMessage' => 'A small helping hand today can keep Lily in school tomorrow ✏️. Be her hero!',
            ],
        ],
    ],

    // Patrick's Campaign
    [
        'goalDate' => 'Nov 17',
        'userName' => 'Patrick',
        'userYear' => '3rd Year',
        'userCourse' => 'BS Civil Engineering',
        'userAvatar' => asset('images/Patrick.png'),
        'campaignImage' => asset('images/Patrick.png'),
        'campaignTitle' => 'I Don’t Want to Drop Out—Help Me Continue',
        'campaignSummary' => 'Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer.',
        'raisedAmount' => 2000,
        'goalAmount' => 18000,
        'fundedPercentage' => 11,
        'campaignId' => 6,
        'badge' => 'Tuition Fee',
        'voteCount' => 10,
        'copyLinkNum' => 43,
        'headerMessage' => 'A sharp mind can build a brighter world ⚙️. Help Patrick continue his engineering path and design solutions that uplift communities.',
        'campaignDescription' => "Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer.

                                    I’m Patrick, a 3rd Year BS Civil Engineering student, and for as long as I can remember, I’ve been fascinated by how bridges, buildings, and roads come to life. I want to build structures that protect people, withstand disasters, and help communities grow safely and sustainably.

                                    But pursuing engineering has been tough. The costs of plates, project materials, equipment, transportation, and tuition continue to rise, and my family can no longer keep up. There are days when I worry more about finances than my exams — and the fear of being forced to drop out grows heavier each semester.

                                    Still, I refuse to give up. Every day I remind myself why I chose this path: to build, to serve, and to create something that lasts.

                                    Your support can help me stay in school, complete my degree, and eventually use my skills to uplift the very communities I grew up in. Whether it’s for plates, tools, or tuition, your kindness pushes me one step closer to becoming a licensed civil engineer.

                                    Thank you for reading my story. Your generosity doesn’t just keep me enrolled — it keeps my dream alive.",
        'comments' => [
                    [
                        'userName' => 'Engr. Ram Dizon', 
                        'userAvatar' => asset('images/Donor6.jpg'),
                        'userCourse' => 'Civil Engineer',
                        'content' => 'Keep going, Patrick. Engineering is tough, but it’s worth it. You’ll build great things someday.',
                        'postedTime' => '3 days ago', 
                        'heartCount' => 11,
                    ],
                    [
                        'userName' => 'Trisha Mae',
                        'userAvatar' => asset('images/Donor7.png'),
                        'userCourse' => 'Supporter',
                        'content' => 'Sending a bit of help! Don’t lose hope — your dream is valid and achievable.',
                        'postedTime' => '7 hours ago', 
                        'heartCount' => 4,
                    ],
                    [
                        'userName' => 'Kevin Santos',
                        'userAvatar' => asset('images/Donor8.jpeg'),
                        'userCourse' => 'Supporter',
                        'content' => 'You’ve got this, Patrick. One day you’ll design structures that change lives.',
                        'postedTime' => '1 hour ago',
                        'heartCount' => 9,
                    ],
                ],

        'donations' => [
                [
                    'donorName' => 'Anonymous',
                    'mode' => 'GCash',
                    'amount' => 150.00,
                    'postedTime' => '20 minutes ago', 
                    'donationHeart' => 1
                ],
                [
                    'donorName' => 'Architect Group PH',
                    'mode' => 'PayPal',
                    'amount' => 850.00,
                    'postedTime' => '5 hours ago',
                    'donationHeart' => 6
                ],
                [
                    'donorName' => 'Jomari P.',
                    'mode' => 'GCash',
                    'amount' => 1000.00,
                    'postedTime' => '1 day ago',
                    'donationHeart' => 3
                ],
            ],

        'similarCampaigns' => [
            // Kaycee - Tuition Fee
            [
                'userName' => 'Kaycee',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Kaycee.png'),
                'campaignImage' => asset('images/KayceeCampaign.png'),
                'campaignTitle' => 'Help Me Keep My Dream of Becoming a CPA Alive',
                'campaignDescription' => 'Hi! I’m Kaycee, an Accountancy student who dreams of becoming a Certified Public Accountant someday. I’ve always valued accuracy and honesty, but my education is at risk because my father recently lost his job. Your support can help me stay in school and continue this journey with hope and determination.',
                'raisedAmount' => 5000,
                'goalAmount' => 20000,
                'fundedPercentage' => 25,
                'campaignId' => 2,
                'badge' => 'Tuition Fee',
                'voteCount' => 34,
                'copyLinkNum' => 7,
                'headerMessage' => 'Hey there, future-changer! 💡 Your kindness today could keep a dream alive. Every peso counts — let’s make education possible!',
            ],
            // Jerome - Tuition Fee
            [
                'userName' => 'Jerome',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Information Technology',
                'userAvatar' => asset('images/Jerome.png'),
                'campaignImage' => asset('images/JeromeCampaign.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 0,
                'goalAmount' => 22000,
                'fundedPercentage' => 0,
                'campaignId' => 4,
                'badge' => 'Tuition Fee',
                'voteCount' => 4,
                'copyLinkNum' => 20,
                'headerMessage' => 'Every coder starts with a dream and a borrowed laptop. Help Jerome keep writing the future—one line of code at a time 💻.',
            ],
            // Angelica - Tuition Fee
            [
                'userName' => 'Angelica',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Nursing',
                'userAvatar' => asset('images/Angelica.png'),
                'campaignImage' => asset('images/Angelica.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 4000,
                'goalAmount' => 25000,
                'fundedPercentage' => 16,
                'campaignId' => 5,
                'badge' => 'Tuition Fee',
                'voteCount' => 16,
                'copyLinkNum' => 81,
                'headerMessage' => 'A kind heart can save a future nurse 🩺. Help Angel continue her studies and serve those who need her care.',
            ],
            // Sarah - Tuition Fee
            [
                'userName' => 'Sarah',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Sarah.png'),
                'campaignImage' => asset('images/Sarah.png'),
                'campaignTitle' => 'Balancing Books and Dreams',
                'campaignDescription' => 'Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 7,
                'badge' => 'Tuition Fee',
                'voteCount' => 8,
                'copyLinkNum' => 7,
                'headerMessage' => 'Future accountants don’t give up—they count on hope 🧾. Be part of Sarah’s story and help her stay in school.',
            ],
            // Lily - Tuition Fee
            [
                'userName' => 'Lily',
                'userYear' => '5th Grade',
                'userCourse' => 'Elementary',
                'userAvatar' => asset('images/Lily.png'),
                'campaignImage' => asset('images/Lily.png'),
                'campaignTitle' => 'Help Me Stay in School and Learn',
                'campaignDescription' => 'Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams.',
                'raisedAmount' => 0,
                'goalAmount' => 5000,
                'fundedPercentage' => 0,
                'campaignId' => 9,
                'badge' => 'Tuition Fee',
                'voteCount' => 0,
                'copyLinkNum' => 0,
                'headerMessage' => 'A small helping hand today can keep Lily in school tomorrow ✏️. Be her hero!',
            ],
        ],
    ],

    // Sarah's Campaign
    [
        'goalDate' => 'Jan 21',
        'userName' => 'Sarah',
        'userYear' => '3rd Year',
        'userCourse' => 'BS Accountancy',
        'userAvatar' => asset('images/Sarah.png'),
        'campaignImage' => asset('images/Sarah.png'),
        'campaignTitle' => 'Balancing Books and Dreams',
        'campaignSummary' => 'Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams.',
        'raisedAmount' => 2000,
        'goalAmount' => 18000,
        'fundedPercentage' => 11,
        'campaignId' => 7,
        'badge' => 'Tuition Fee',
        'voteCount' => 8,
        'copyLinkNum' => 7,
        'headerMessage' => 'Future accountants don’t give up—they count on hope 🧾. Be part of Sarah’s story and help her stay in school.',
        'campaignDescription' => "Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams.

                                    I’m Sarah, a 3rd Year BS Accountancy student, and ever since I entered this field, I’ve learned that every number tells a story — a story of honesty, responsibility, and trust. I want to become a Certified Public Accountant not just to earn a title, but to guide individuals and businesses toward wise and truthful financial decisions.

                                    But staying in this program has become difficult. The costs of books, review materials, school projects, transportation, and tuition continue to rise, and my family is struggling to keep up. There are days when I worry more about expenses than my exams — and the fear of having to stop studying grows heavier each week.

                                    Still, I refuse to give up. I know why I chose this path: to serve with integrity, to help others through my profession, and to build a future where honesty and accountability matter.

                                    Your support can help me stay in school, prepare for the CPA journey, and eventually use my knowledge to serve my community and uplift my family. Whether it’s for books, review fees, or tuition, your kindness keeps me moving forward.

                                    Thank you for taking the time to read my story. Your generosity doesn’t just fund my education — it fuels my dream of becoming a CPA someday.",
        'comments' => [],
        'donations' => [
                [
                    'donorName' => 'Maria Santos',
                    'mode' => 'GCash',
                    'amount' => 300.00,
                    'postedTime' => '1 day ago',
                    'donationHeart' => 3
                ],
                [
                    'donorName' => 'John Cruz',
                    'mode' => 'GCash',
                    'amount' => 500,
                    'postedTime' => '1 day ago',
                    'donationHeart' => 3
                ],
                [
                    'donorName' => 'Nicole Reyes',
                    'mode' => 'PayPal',
                    'amount' => 200,
                    'postedTime' => '1 day ago',
                    'donationHeart' => 1
                ],
                [
                    'donorName' => 'Juan Luna',
                    'mode' => 'PayPal',
                    'amount' => 1000,
                    'postedTime' => '1 day ago',
                    'donationHeart' => 5
                ],
            ],
        'similarCampaigns' => [
            // Kaycee - Tuition Fee
            [
                'userName' => 'Kaycee',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Kaycee.png'),
                'campaignImage' => asset('images/KayceeCampaign.png'),
                'campaignTitle' => 'Help Me Keep My Dream of Becoming a CPA Alive',
                'campaignDescription' => 'Hi! I’m Kaycee, an Accountancy student who dreams of becoming a Certified Public Accountant someday. I’ve always valued accuracy and honesty, but my education is at risk because my father recently lost his job. Your support can help me stay in school and continue this journey with hope and determination.',
                'raisedAmount' => 5000,
                'goalAmount' => 20000,
                'fundedPercentage' => 25,
                'campaignId' => 2,
                'badge' => 'Tuition Fee',
                'voteCount' => 34,
                'copyLinkNum' => 7,
                'headerMessage' => 'Hey there, future-changer! 💡 Your kindness today could keep a dream alive. Every peso counts — let’s make education possible!',
            ],
            // Jerome - Tuition Fee
            [
                'userName' => 'Jerome',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Information Technology',
                'userAvatar' => asset('images/Jerome.png'),
                'campaignImage' => asset('images/JeromeCampaign.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 0,
                'goalAmount' => 22000,
                'fundedPercentage' => 0,
                'campaignId' => 4,
                'badge' => 'Tuition Fee',
                'voteCount' => 4,
                'copyLinkNum' => 20,
                'headerMessage' => 'Every coder starts with a dream and a borrowed laptop. Help Jerome keep writing the future—one line of code at a time 💻.',
            ],
            // Angelica - Tuition Fee
            [
                'userName' => 'Angelica',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Nursing',
                'userAvatar' => asset('images/Angelica.png'),
                'campaignImage' => asset('images/Angelica.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 4000,
                'goalAmount' => 25000,
                'fundedPercentage' => 16,
                'campaignId' => 5,
                'badge' => 'Tuition Fee',
                'voteCount' => 16,
                'copyLinkNum' => 81,
                'headerMessage' => 'A kind heart can save a future nurse 🩺. Help Angel continue her studies and serve those who need her care.',
            ],
            // Patrick - Tuition Fee
            [
                'userName' => 'Patrick',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Civil Engineering',
                'userAvatar' => asset('images/Patrick.png'),
                'campaignImage' => asset('images/Patrick.png'),
                'campaignTitle' => 'I Don’t Want to Drop Out—Help Me Continue',
                'campaignDescription' => 'Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 6,
                'badge' => 'Tuition Fee',
                'voteCount' => 10,
                'copyLinkNum' => 43,
                'headerMessage' => 'A sharp mind can build a brighter world ⚙️. Help Patrick continue his engineering path and design solutions that uplift communities.',
            ],
            // Lily - Tuition Fee
            [
                'userName' => 'Lily',
                'userYear' => '5th Grade',
                'userCourse' => 'Elementary',
                'userAvatar' => asset('images/Lily.png'),
                'campaignImage' => asset('images/Lily.png'),
                'campaignTitle' => 'Help Me Stay in School and Learn',
                'campaignDescription' => 'Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams.',
                'raisedAmount' => 0,
                'goalAmount' => 5000,
                'fundedPercentage' => 0,
                'campaignId' => 9,
                'badge' => 'Tuition Fee',
                'voteCount' => 0,
                'copyLinkNum' => 0,
                'headerMessage' => 'A small helping hand today can keep Lily in school tomorrow ✏️. Be her hero!',
            ],
        ],
    ],

    // Liam's Campaign
    [
        'goalDate' => 'Mar 31',
        'userName' => 'Liam',
        'userYear' => '4th Grade',
        'userCourse' => 'Elementary',
        'userAvatar' => asset('images/Liam.png'),
        'campaignImage' => asset('images/Liam.png'),
        'campaignTitle' => 'Notebooks and Books for My Learning Journey',
        'campaignSummary' => 'Hi! I’m Liam. I love reading, writing, and drawing, but I don’t have enough notebooks and books for my schoolwork. With your help, I can finish my lessons, do my homework, and explore new things every day. Every little bit helps me grow and learn.',
        'raisedAmount' => 0,
        'goalAmount' => 3500,
        'fundedPercentage' => 0,
        'campaignId' => 8,
        'badge' => 'Learning Material',
        'voteCount' => 0,
        'copyLinkNum' => 0,
        'headerMessage' => 'Every notebook and pencil opens a world of possibilities ✏️. Help Liam explore and create!',
        'campaignDescription' => "Hi! I’m Liam. I love reading, writing, and drawing, but I don’t have enough notebooks and books for my schoolwork. With your help, I can finish my lessons, do my homework, and explore new things every day. Every little bit helps me grow and learn.

                                I’m Liam, a 4th Grade student who enjoys learning new words, solving math problems, and creating stories through drawings. School is my favorite place because it’s where I get to discover new ideas and imagine all kinds of adventures.

                                But sometimes learning becomes difficult. My notebooks run out quickly, and I don’t always have the books or materials I need for my lessons. There are days when I can’t finish my homework properly because I don’t have enough paper to write on or the right books to study with.

                                Still, I try my best because I want to learn as much as I can. I dream of growing up to be someone who helps other people, and education is my first big step toward that dream.

                                Your support can help me get the notebooks, books, pencils, and other learning materials I need for school. With these, I can keep up with my lessons, stay excited about learning, and continue building a brighter future.

                                Thank you so much for reading my story. Your kindness doesn’t just give me school supplies—it gives me the chance to keep learning, creating, and dreaming.",
        'comments' => [],
        'donations' => [],
        'similarCampaigns' => [
            // Allyssa - Learning Material
            [
                'userName' => 'Allyssa',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Information Technology',
                'userAvatar' => asset('images/Allyssa.png'),
                'campaignImage' => asset('images/Maria.png'),
                'campaignTitle' => 'Code for a Cause',
                'campaignDescription' => "Hi! I'm Allyssa, a tech student with a big dream — to build applications that solve real-world problems. As we begin our capstone project, I want to give my all, but I currently don't have a laptop powerful enough to handle development tools.",
                'raisedAmount' => 10000,
                'goalAmount' => 20000,
                'fundedPercentage' => 50,
                'campaignId' => 1,
                'badge' => 'Learning Material',
                'voteCount' => 99,
                'copyLinkNum' => 10,
                'headerMessage' => null,
            ],
        ],
    ],

    // Lily's Campaign
    [
        'goalDate' => 'Apr 08',
        'userName' => 'Lily',
        'userYear' => '5th Grade',
        'userCourse' => 'Elementary',
        'userAvatar' => asset('images/Lily.png'),
        'campaignImage' => asset('images/Lily.png'),
        'campaignTitle' => 'Help Me Stay in School and Learn',
        'campaignSummary' => 'Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams.',
        'raisedAmount' => 0,
        'goalAmount' => 5000,
        'fundedPercentage' => 0,
        'campaignId' => 9,
        'badge' => 'Tuition Fee',
        'voteCount' => 0,
        'copyLinkNum' => 0,
        'headerMessage' => 'A small helping hand today can keep Lily in school tomorrow ✏️. Be her hero!',
        'campaignDescription' => "Hi! I’m Lily. I love learning new things and seeing my friends at school, but my family can’t pay my school fees this year. I don’t want to stop going to class and miss out on learning. Your support will help me continue my education and chase my dreams.

                            I’m Lily, a 5th Grade student who enjoys reading stories, solving activities, and joining class discussions. School is where I feel happy, safe, and excited because every day teaches me something new. I love discovering new lessons and imagining the future I want to build.

                            But now, things have become difficult for my family. Even though I try my best to study hard, my parents can’t afford my school fees and needed materials this year. I’m scared of missing my classes, falling behind, or being separated from my friends and teachers who inspire me.

                            Still, I keep believing in my dreams. I want to finish school, grow up educated, and someday help my family by having a better future. I know that every bit of learning today brings me closer to that goal.

                            Your support can help me stay in school, continue my lessons, and keep reaching for my dreams with hope and determination. Whether it’s for my school fees, books, or other essentials, your kindness means a lot to me and my family.

                            Thank you for reading my story. Your generosity doesn’t just keep me in class — it keeps my dream of learning alive.",
        'comments' => [],
        'donations' => [],
        'similarCampaigns' => [
            // Kaycee - Tuition Fee
            [
                'userName' => 'Kaycee',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Kaycee.png'),
                'campaignImage' => asset('images/KayceeCampaign.png'),
                'campaignTitle' => 'Help Me Keep My Dream of Becoming a CPA Alive',
                'campaignDescription' => 'Hi! I’m Kaycee, an Accountancy student who dreams of becoming a Certified Public Accountant someday. I’ve always valued accuracy and honesty, but my education is at risk because my father recently lost his job. Your support can help me stay in school and continue this journey with hope and determination.',
                'raisedAmount' => 5000,
                'goalAmount' => 20000,
                'fundedPercentage' => 25,
                'campaignId' => 2,
                'badge' => 'Tuition Fee',
                'voteCount' => 34,
                'copyLinkNum' => 7,
                'headerMessage' => 'Hey there, future-changer! 💡 Your kindness today could keep a dream alive. Every peso counts — let’s make education possible!',
            ],
            // Jerome - Tuition Fee
            [
                'userName' => 'Jerome',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Information Technology',
                'userAvatar' => asset('images/Jerome.png'),
                'campaignImage' => asset('images/JeromeCampaign.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 0,
                'goalAmount' => 22000,
                'fundedPercentage' => 0,
                'campaignId' => 4,
                'badge' => 'Tuition Fee',
                'voteCount' => 4,
                'copyLinkNum' => 20,
                'headerMessage' => 'Every coder starts with a dream and a borrowed laptop. Help Jerome keep writing the future—one line of code at a time 💻.',
            ],
            // Angelica - Tuition Fee
            [
                'userName' => 'Angelica',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Nursing',
                'userAvatar' => asset('images/Angelica.png'),
                'campaignImage' => asset('images/Angelica.png'),
                'campaignTitle' => 'Let Me Continue Coding My Way to a Better Life',
                'campaignDescription' => 'Hi! I’m Jerome, a tech student passionate about solving real-life problems through programming. My family’s small eatery can barely cover our daily needs, and I might have to stop studying next semester. I work part-time, but it’s not enough. Your help will keep me in school and bring me closer to building a future through technology.',
                'raisedAmount' => 4000,
                'goalAmount' => 25000,
                'fundedPercentage' => 16,
                'campaignId' => 5,
                'badge' => 'Tuition Fee',
                'voteCount' => 16,
                'copyLinkNum' => 81,
                'headerMessage' => 'A kind heart can save a future nurse 🩺. Help Angel continue her studies and serve those who need her care.',
            ],
            // Patrick - Tuition Fee
            [
                'userName' => 'Patrick',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Civil Engineering',
                'userAvatar' => asset('images/Patrick.png'),
                'campaignImage' => asset('images/Patrick.png'),
                'campaignTitle' => 'I Don’t Want to Drop Out—Help Me Continue',
                'campaignDescription' => 'Hi, I’m Patrick. I’ve always dreamed of designing safe and sturdy structures for communities. But my family’s financial struggles are making it hard to continue my studies. Your support will help me stay enrolled and one step closer to becoming an engineer.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 6,
                'badge' => 'Tuition Fee',
                'voteCount' => 10,
                'copyLinkNum' => 43,
                'headerMessage' => 'A sharp mind can build a brighter world ⚙️. Help Patrick continue his engineering path and design solutions that uplift communities.',
            ],
            // Sarah - Tuition Fee
            [
                'userName' => 'Sarah',
                'userYear' => '3rd Year',
                'userCourse' => 'BS Accountancy',
                'userAvatar' => asset('images/Sarah.png'),
                'campaignImage' => asset('images/Sarah.png'),
                'campaignTitle' => 'Balancing Books and Dreams',
                'campaignDescription' => 'Hi! I’m Sarah, and I’m studying Accountancy because I believe numbers can build strong foundations—just like hope. My parents can no longer pay my tuition this semester. Your help means another chance for me to continue learning and preparing for my CPA dreams.',
                'raisedAmount' => 2000,
                'goalAmount' => 18000,
                'fundedPercentage' => 11,
                'campaignId' => 7,
                'badge' => 'Tuition Fee',
                'voteCount' => 8,
                'copyLinkNum' => 7,
                'headerMessage' => 'Future accountants don’t give up—they count on hope 🧾. Be part of Sarah’s story and help her stay in school.',
            ],
        ],
    ],

    // Alex's Campaign
    [
        'goalDate' => 'May 13',
        'userName' => 'Alex',
        'userYear' => '4th Year',
        'userCourse' => 'BS Electrical Engineering',
        'userAvatar' => asset('images/AlexProfile.png'),
        'campaignImage' => asset('images/Alex.png'),
        'campaignTitle' => 'Powering the Future Through Renewable Energy',
        'campaignSummary' => 'Hi! I’m Alex, researching solar power optimization for rural homes. I’m raising funds for prototype materials and testing tools. Your help turns my thesis into a real project that lights up lives.',
        'raisedAmount' => 5000,
        'goalAmount' => 17000,
        'fundedPercentage' => 29,
        'campaignId' => 10,
        'badge' => 'Research',
        'voteCount' => 100,
        'copyLinkNum' => 87,
        'headerMessage' => 'Help Alex light the way for renewable energy ⚡. A small gift today powers a brighter tomorrow.',
        'campaignDescription' => "Hi! I’m Alex, researching solar power optimization for rural homes. I’m raising funds for prototype materials and testing tools. Your help turns my thesis into a real project that lights up lives.

                                I’m Alex, a 4th Year BS Electrical Engineering student with a passion for renewable energy and sustainable technology. Ever since I began studying electrical systems, I’ve been fascinated by how clean and efficient power can transform communities—especially those with limited access to electricity.

                                For my thesis, I’m developing a solar power optimization prototype designed to help rural households reduce costs and gain reliable energy. My goal is to create a system that’s affordable, efficient, and easy to maintain for families who need it most.

                                But research work is expensive. Components like solar panels, charge controllers, sensors, wiring, measuring devices, and testing tools cost far more than what I can afford as a student. My family supports me as much as they can, but the financial load of completing this project has grown heavier as the requirements increase.

                                Still, I remain committed. I believe this research can make a real difference — not just in completing my degree, but in contributing something meaningful to communities that deserve better access to energy.

                                Your support can help me purchase the materials, equipment, and tools needed to complete my prototype and successfully finish my thesis. Every contribution brings this project closer to becoming a real solution for families who dream of reliable and renewable electricity.

                                Thank you for taking the time to read my story. Your generosity doesn’t only support my research — it helps power futures, brighten homes, and spark change through clean energy.",
        'comments' => [
                        [
                            'userName' => 'Engr. Mateo Ramirez',
                            'userAvatar' => asset('images/Donor9.jpg'),
                            'userCourse' => 'Electrical Engineer',
                            'content' => 'Impressive work, Alex! Renewable energy research is so important. Keep pushing forward — your project can help so many communities.',
                            'postedTime' => '3 days ago',
                            'heartCount' => 14,
                        ],
                        [
                            'userName' => 'Christine Pascual',
                            'userAvatar' => asset('images/Donor10.jpeg'),
                            'userCourse' => 'Supporter',
                            'content' => 'Proud of your dedication, Alex! Hope you get all the tools you need. You’re building something meaningful.',
                            'postedTime' => '6 hours ago',
                            'heartCount' => 9,
                        ],
                        [
                            'userName' => 'Jasper Villaceran',
                            'userAvatar' => asset('images/Donor11.jpg'),
                            'userCourse' => 'Electrical Engineer',
                            'content' => 'As someone who did a similar thesis, I know how costly materials can get. Keep going, future engineer!',
                            'postedTime' => '1 hour ago',
                            'heartCount' => 6,
                        ],
                    ],

        'donations' => [
            [
                'donorName' => 'GreenFuture PH',
                'mode' => 'PayPal',
                'amount' => 2500.00,
                'postedTime' => '2 hours ago',
                'donationHeart' => 4,
            ],
            [
                'donorName' => 'Anonymous Supporter',
                'mode' => 'GCash',
                'amount' => 1200.00,
                'postedTime' => '7 hours ago',
                'donationHeart' => 3,
            ],
            [
                'donorName' => 'Engr. Steph Cruz',
                'mode' => 'GCash',
                'amount' => 1300.00,
                'postedTime' => '1 day ago',
                'donationHeart' => 5,
            ],
        ],

        
        'similarCampaigns' => [
           [
                'userName' => 'Hannah',
                'userYear' => '4th Year',
                'userCourse' => 'BS Biology',
                'userAvatar' => asset('images/HannahProfile.png'),
                'campaignImage' => asset('images/Hannah.png'),
                'campaignTitle' => 'Unlocking Answers Through Research',
                'campaignDescription' => 'Hi! I’m Hannah, working on my biology thesis focused on genetics. I need funds for lab analysis and materials. Every donation helps me continue the research that could inspire future scientists.',
                'raisedAmount' => 2000,
                'goalAmount' => 15000,
                'fundedPercentage' => 13,
                'campaignId' => 11,
                'badge' => 'Research',
                'voteCount' => 10,
                'copyLinkNum' => 56,
                'headerMessage' => 'Science advances with support 🧬. Help Hannah complete her biology thesis and explore discoveries for the future.',            
           ]
        ],
    ],

    // Hannah's Campaign
    [
        'goalDate' => 'Jan 01',
        'userName' => 'Hannah',
        'userYear' => '4th Year',
        'userCourse' => 'BS Biology',
        'userAvatar' => asset('images/HannahProfile.png'),
        'campaignImage' => asset('images/Hannah.png'),
        'campaignTitle' => 'Unlocking Answers Through Research',
        'campaignSummary' => 'Hi! I’m Hannah, working on my biology thesis focused on genetics. I need funds for lab analysis and materials. Every donation helps me continue the research that could inspire future scientists.',
        'raisedAmount' => 2000,
        'goalAmount' => 15000,
        'fundedPercentage' => 13,
        'campaignId' => 11,
        'badge' => 'Health Assistance',
        'voteCount' => 10,
        'copyLinkNum' => 56,
        'headerMessage' => 'Science advances with support 🧬. Help Hannah complete her biology thesis and explore discoveries for the future.',
        'campaignDescription' => "Hi! I’m Hannah, working on my biology thesis focused on genetics. I need funds for lab analysis and materials. Every donation helps me continue the research that could inspire future scientists.

                                I’m Hannah, a 4th Year BS Biology student with a deep passion for understanding how life works at its smallest, most intricate levels. Genetics has always fascinated me — how tiny sequences of DNA can determine traits, influence health, and unlock answers that shape our understanding of living organisms.

                                For my thesis, I’m studying genetic markers that could help identify patterns related to hereditary conditions. The goal is to contribute findings that future researchers can build upon, especially in fields related to health, disease prevention, and early diagnosis.

                                But scientific research is expensive. I need funds for lab processing fees, specimen analysis, lab-grade materials, reagents, and data testing tools. These costs are beyond what my family can manage, and it has become harder to keep up with the financial requirements of my project.

                                Still, I remain committed. I believe that research, no matter how small, can create ripples that lead to meaningful discoveries. And I want to be part of the scientific community that pushes knowledge forward.

                                Your support can help me continue my experiments, complete my analyses, and finish my thesis with confidence. Every contribution goes directly to the materials and laboratory work needed to bring this research to life.

                                Thank you for taking time to read my story. Your kindness doesn’t just fund my thesis — it fuels the curiosity and dedication of a future scientist.",
        'comments' => [
                        [
                            'userName' => 'Dr. Mina Valdez',
                            'userAvatar' => asset('images/DonorBio1.jpg'),
                            'userCourse' => 'Biology Professor',
                            'content' => 'Proud of your dedication, Hannah. Genetics research is challenging but incredibly rewarding. Keep going — you’re making a difference.',
                            'postedTime' => '1 day ago',
                            'heartCount' => 12,
                        ],
                        [
                            'userName' => 'Rhea Santos',
                            'userAvatar' => asset('images/DonorBio2.jpg'),
                            'userCourse' => 'Medical Technologist',
                            'content' => 'Your thesis topic is amazing! Wishing you all the best in completing your lab work. Future scientist in the making!',
                            'postedTime' => '3 hours ago',
                            'heartCount' => 8,
                        ],
                        [
                            'userName' => 'Anonymous Supporter',
                            'userAvatar' => asset('images/Anonymous.jpg'),
                            'userCourse' => 'Donor',
                            'content' => 'Good luck, Hannah! Keep pursuing your passion for science. The world needs more researchers like you.',
                            'postedTime' => '45 minutes ago',
                            'heartCount' => 5,
                        ],
                    ],

        'donations' => [
            [
                'donorName' => 'BioAid Foundation',
                'mode' => 'Bank Transfer',
                'amount' => 1000.00,
                'postedTime' => '2 hours ago',
                'donationHeart' => 4,
            ],
            [
                'donorName' => 'Anonymous Donor',
                'mode' => 'GCash',
                'amount' => 600.00,
                'postedTime' => '5 hours ago',
                'donationHeart' => 2,
            ],
            [
                'donorName' => 'Dr. Elena Cruz',
                'mode' => 'PayPal',
                'amount' => 400.00,
                'postedTime' => '1 day ago',
                'donationHeart' => 3,
            ],
        ],

        'similarCampaigns' => [
            // Alex
            [
                'userName' => 'Alex',
                'userYear' => '4th Year',
                'userCourse' => 'BS Electrical Engineering',
                'userAvatar' => asset('images/AlexProfile.png'),
                'campaignImage' => asset('images/Alex.png'),
                'campaignTitle' => 'Powering the Future Through Renewable Energy',
                'campaignDescription' => 'Hi! I’m Alex, researching solar power optimization for rural homes. I’m raising funds for prototype materials and testing tools. Your help turns my thesis into a real project that lights up lives.',
                'raisedAmount' => 5000,
                'goalAmount' => 17000,
                'fundedPercentage' => 29,
                'campaignId' => 10,
                'badge' => 'Research',
                'voteCount' => 100,
                'copyLinkNum' => 87,
                'headerMessage' => 'Help Alex light the way for renewable energy ⚡. A small gift today powers a brighter tomorrow.'
            ],
        ],
    ],

    // Daniel's Campaign
    [
        'goalDate' => 'Jan 02',
        'userName' => 'Daniel',
        'userYear' => '3rd Year',
        'userCourse' => 'High School',
        'userAvatar' => asset('images/DanielProfile.png'),
        'campaignImage' => asset('images/Daniel.png'),
        'campaignTitle' => 'Healthcare Support for a Brighter Future',
        'campaignSummary' => 'Hi! I’m Daniel. I enjoy learning and joining school projects, but I often get sick and don’t have enough resources for medicine or doctor visits. Your help will keep me healthy, so I can focus on my studies and make the most of every opportunity.',
        'raisedAmount' => 0,
        'goalAmount' => 6000,
        'fundedPercentage' => 0,
        'campaignId' => 12,
        'badge' => 'Health Assistance',
        'voteCount' => 7,
        'copyLinkNum' => 2,
        'headerMessage' => 'Every check-up counts 🏥. Help Daniel stay strong and never miss a class!',
        'campaignDescription' => "Hi! I’m Daniel. I enjoy learning and joining school projects, but I often get sick and don’t have enough resources for medicine or doctor visits. Your help will keep me healthy, so I can focus on my studies and make the most of every opportunity.

                                I’m Daniel, a 3rd Year High School student who loves being active in class, participating in group activities, and discovering new lessons every day. School has always been a place where I feel motivated and inspired — but staying healthy has been a big challenge for me.

                                I easily get sick, and my family struggles to afford the basic healthcare I need. Sometimes, I miss classes because we can’t buy the right medicine, pay for check-ups, or get the proper treatment. Falling behind makes me worry, especially when I want nothing more than to learn, grow, and do well in school.

                                Still, I keep trying my best. I want to finish my studies, join more school projects, and build a brighter future for my family. I know that staying healthy is the key to staying focused, confident, and ready for whatever comes next.",
        'comments' => [],
        'donations' => [],
        'similarCampaigns' => [
            // Hannah
            [
                'userName' => 'Hannah',
                'userYear' => '2nd Year',
                'userCourse' => 'High School',
                'userAvatar' => asset('images/SophiaProfile.png'),
                'campaignImage' => asset('images/Sophia.png'),
                'campaignTitle' => 'Medical Help to Stay Healthy in School',
                'campaignDescription' => 'Hi! I’m Hannah, working on my biology thesis focused on genetics. I need funds for lab analysis and materials. Every donation helps me continue the research that could inspire future scientists.',
                'raisedAmount' => 2000,
                'goalAmount' => 15000,
                'fundedPercentage' => 13,
                'campaignId' => 11,
                'badge' => 'Research',
                'voteCount' => 10,
                'copyLinkNum' => 56,
                'headerMessage' => 'A healthy student is a successful student 🩺. Help Sophia stay well and focus on her dreams!',
            ],
        ],
    ],

    // Lia's Campaign
    [
        'goalDate' => 'Feb 15',
        'userName' => 'Lia',
        'userYear' => '2nd Year',
        'userCourse' => 'High School',
        'userAvatar' => asset('images/LiaProfile.png'),
        'campaignImage' => asset('images/Lia.png'),
        'campaignTitle' => 'Rebuilding After the Storm: Help Me Stay in School',
        'campaignSummary' => 'Hi! I’m Lia. Recently, a strong typhoon destroyed our home, leaving my family without shelter and basic necessities. Amidst this disaster, I’m worried I might not be able to continue going to school. Your support will help us recover from this crisis, rebuild our home, and allow me to continue learning and pursuing my dreams despite this hardship.',
        'raisedAmount' => 0,
        'goalAmount' => 15000,
        'fundedPercentage' => 0,
        'campaignId' => 13,
        'badge' => 'Emergency Fund',
        'voteCount' => 0,
        'copyLinkNum' => 2,
        'headerMessage' => 'When a storm destroys a home, dreams shouldn’t be lost 🌪️. Help Lia rebuild and stay in school!',
        'campaignDescriptions' => "Hi! I’m Lia. I’m a 2nd Year High School student who loves learning, going to school, and dreaming about a bright future. But recently, a strong typhoon destroyed our home, leaving my family without shelter, food, and basic necessities. It’s been one of the hardest times of my life, and I’m worried that this disaster might stop me from continuing my education.

                                Our house was more than just a home — it was a safe place where I could study, rest, and feel secure. Now, with the roof gone, walls damaged, and our belongings ruined, even simple things like attending school or having a quiet place to do homework have become extremely difficult. Some days, I feel tired and discouraged, but I know I cannot give up.

                                I want to continue going to school, learn new lessons, and grow despite this hardship. Every day, I remind myself why I study: to build a better future, not only for myself but also for my family and the community that supports me. But I cannot do it alone. We need help to recover, rebuild our home, and make sure I can keep learning safely.

                                Your support can help us repair our house, provide essential supplies, and allow me to keep attending school without worrying about where I’ll sleep or whether I’ll have what I need. Every donation is not just a contribution — it’s hope, stability, and the chance for me to continue chasing my dreams.

                                Thank you for reading my story. Your kindness can help me rise above this storm, stay in school, and continue working toward a brighter, safer future.",
        'comments' => [],
        'donations' => [],
        'similarCampaigns' => [],
    ],

    // Miguel's Campaign
    [
        'goalDate' => 'Nov 25',
        'userName' => 'Miguel',
        'userYear' => '2nd Year',
        'userCourse' => 'High School',
        'userAvatar' => asset('images/MiguelProfile.png'),
        'campaignImage' => asset('images/Miguel.png'),
        'campaignTitle' => 'Basic Needs to Keep Me Learning',
        'campaignSummary' => 'Hi! I’m Miguel. I love going to school, but my family struggles to afford basic essentials like food, clothing, and a safe place to sleep. Sometimes I’m too hungry or tired to concentrate in class. Your support will help me have the necessities I need to stay healthy, focus on learning, and keep chasing my dreams.',
        'raisedAmount' => 0,
        'goalAmount' => 8000,
        'fundedPercentage' => 12,
        'campaignId' => 14,
        'badge' => 'Living Essentials',
        'voteCount' => 2,
        'copyLinkNum' => 9,
        'headerMessage' => 'A safe and warm home helps a student focus on learning 🏠. Help Miguel stay comfortable and ready for school!',
        'campaignDescription' => "Hi! I’m Miguel. I’m a 2nd Year High School student, and I love going to school because it’s the one place where I feel excited to learn new things. I enjoy listening to my teachers, joining activities, and spending time with my classmates. School gives me hope — but getting there every day isn’t always easy.

                                    My family is struggling right now, and we often can’t afford the basic things I need. There are days when I go to class without eating enough, and sometimes I feel too tired or weak to focus on the lessons. I also don’t always have proper clothes or a comfortable place to rest at home. These things make it hard for me to concentrate, even though I want so much to do well in school.

                                    There are moments when I worry that I might fall behind because I’m hungry, uncomfortable, or exhausted. But even with all these challenges, I keep trying my best. I want to finish my studies, help my family, and build a better future where I don’t have to worry about the most basic needs every day.

                                    Your support will mean so much to me. With your help, I can have proper meals, clean clothes, and a safe, warm place to sleep. These simple necessities will give me the strength and comfort I need to stay focused and continue learning with confidence.

                                    Thank you for believing in students like me. Your kindness can help me stay healthy, motivated, and ready to keep chasing my dreams.",
        'comments' => [],
        'donations' => [],
        'similarCampaigns' => [
            // Christo Rey - Living Essentials (Note the slight difference in badge name: "Essentials" vs "Essential")
            [
                'userName' => 'Christo Rey',
                'userYear' => '2nd Year',
                'userCourse' => 'BS Education',
                'userAvatar' => asset('images/Christo Rey.png'),
                'campaignImage' => asset('images/ChristoReyCampaign.png'),
                'campaignTitle' => 'Meals and Hope for a Future Teacher',
                'campaignDescription' => 'Hi! I’m Christo Rey, a future teacher. There are days I skip meals just to save money for school needs. I’m asking for support to afford basic food and rent. Your kindness keeps both my body and my dreams alive.',
                'raisedAmount' => 0,
                'goalAmount' => 10000,
                'fundedPercentage' => 0,
                'campaignId' => 3,
                'badge' => 'Living Essentials',
                'voteCount' => 0,
                'copyLinkNum' => 0,
                'headerMessage' => 'No student should study on an empty stomach 🍞. Help Christo continue his studies with the essentials he needs.',
            ],
        ],
    ],

    //Sophia's Campaign
        'goalDate' => 'Aug 21',
        'userName' => 'Sophia',
        'userYear' => '2nd Year',
        'userCourse' => 'High School',
        'userAvatar' => asset('images/SophiaProfile.png'),
        'campaignImage' => asset('images/Sophia.png'),
        'campaignTitle' => 'Medical Help to Stay Healthy in School',
        'campaignSummary' => 'Hi! I’m Sophia. I love studying and being part of school activities, but sometimes I fall sick and cannot afford proper medicine or check-ups. Your support will help me stay healthy, attend classes regularly, and keep chasing my dreams.',
        'raisedAmount' => 0,
        'goalAmount' => 5000,
        'fundedPercentage' => 0,
        'campaignId' => 15,
        'badge' => 'Health Assitance',
        'voteCount' => 2,
        'copyLinkNum' => 9,
        'headerMessage' => 'A safe and warm home helps a student focus on learning 🏠. Help Miguel stay comfortable and ready for school!',
        'campaignDescription' => "Hi! I’m Sophia. I’m a 2nd Year High School student who loves studying, joining activities, and being surrounded by my classmates. School has always been a place where I feel inspired — a place where I get excited to learn something new every single day. But staying healthy has been one of my biggest struggles.

                                    I often get sick, and my family cannot always afford the proper medicine or check-ups I need. There are days when I have to stay home because we don’t have enough money for a doctor visit, and missing classes makes me fall behind on lessons I truly enjoy. It’s hard because I want so much to be consistent, active, and present in school.

                                    Sometimes, even when I push myself to attend, I feel weak or unwell in class. It’s frustrating to sit there wanting to learn but not having the strength to focus. I know that with the right medical support, I can stay healthy, confident, and ready to participate fully in school activities again.

                                    I want to dream big — to stay active, study hard, and achieve more both inside and outside the classroom. I just need a little help to make sure my health doesn’t hold me back.

                                    Your support will help me afford the medicine, check-ups, and basic healthcare I need to stay strong. It will make a huge difference in keeping me in school consistently, able to learn, grow, and enjoy the experiences that shape my future.

                                    Thank you for caring about students like me. Your kindness can help me stay healthy, hopeful, and ready to chase my dreams.",
        'comments' => [],
        'donations' => [],
        'similarCampaigns' => [
            // Daniel - Health Assistance
            [
                'userName' => 'Daniel',
                'userYear' => '3rd Year',
                'userCourse' => 'High School',
                'userAvatar' => asset('images/DanielProfile.png'),
                'campaignImage' => asset('images/Daniel.png'),
                'campaignTitle' => 'Healthcare Support for a Brighter Future',
                'campaignDescription' => 'Hi! I’m Daniel. I enjoy learning and joining school projects, but I often get sick and don’t have enough resources for medicine or doctor visits. Your help will keep me healthy, so I can focus on my studies and make the most of every opportunity.',
                'raisedAmount' => 0,
                'goalAmount' => 6000,
                'fundedPercentage' => 0,
                'campaignId' => 12,
                'badge' => 'Health Assistance',
                'voteCount' => 7,
                'copyLinkNum' => 2,
                'headerMessage' => 'Every check-up counts 🏥. Help Daniel stay strong and never miss a class!',
            ],
        ],    
];

        return $campaigns;
}


public function showCampaignDetails($id)
    {
        $campaignsData = $this->getCampaignsData();
        $campaign = collect($campaignsData)->firstWhere('campaignId', (int) $id);

        // 3. Handle the case where the campaign is not found
        if (is_null($campaign)) {
            // Laravel's helper for returning a 404 page
            abort(404, 'The requested campaign could not be found.');
        }

        // 4. Pass the *single* campaign array to the view.
        // The view variable will be named '$campaign'.
        return view('campaign-details', compact('campaign'));
    }
}
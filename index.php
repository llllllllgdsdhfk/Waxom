<?php
include 'components/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/28a4b56a5f.js" crossorigin="anonymous"></script>

<body>
    <div class="mount">
        <div class="logo_duo">
            <div>
                <img src="logo-white.png" alt="" class="logo">
            </div>
            <div class="home">

                <?php

                $all = ["Home", "About Us", "Portfolio", "Features", "Blog", "Pricing", "Shortcodes", "Contact"];

                for ($i = 0; $i < 8; $i++) {
                    echo "<p>$all[$i]</p>";
                }
                ?>

            </div>
        </div>
        <div class="unique">
            <h2>Unique and Modern Design</h2>
            <h1>Portfolio PSD Template</h1>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imper-
            <p>diet doming id quod mazim placerat facer possim assum.</p>
            </p>
            <button>GET STARTED</button>
        </div>
    </div>
    <div class="mount_img">
        <img src="matterhorn-984128-450x340.jpg" alt="">
    </div>
    <div class="web">
        <div class="app">
            <i class="fa-regular fa-thumbs-up"></i>
            <h2>Wab & App Design</h2>
            <p>Nam liber tempor tempor cum soluta nobis
            <p>eleifend option congue nihil imperdiet
            <p>doming id quod mazim.</p>
        </div>
        <div>
            <i class="fa-regular fa-heart"></i>
            <h2>Development</h2>
            <p>Lorem ipsum dolor, sit amet consectetur
            <p>adipisicing elit. Alias, blanditiis voluptatibus illum</p> esse id corporis.</p>
        </div>
        <div>
            <i class="fa-regular fa-thumbs-up"></i>
            <h2>Customization</h2>
            <p>Nam liber tempor tempor cum soluta nobis
            <p>eleifend option congue nihil imperdiet
            <p>doming id quod mazim.</p>
        </div>
        <div>
            <i class="fa-regular fa-heart"></i>
            <h2>Marketing</h2>
            <p>Nam liber tempor tempor cum soluta nobis
            <p>eleifend option congue nihil imperdiet
            <p>doming id quod mazim.</p>
        </div>
    </div>
    <div class="realization">
        <div class="ldeas">
            <h2>Waxom is Realization of your ldeas</h2>
            <p>Investigations demonstraverunt lectores legere me lius quod li saepius. Claritas est etiam
            <p class="ldeas_p">porocessus dynamicus. qui sequitur mutationem consuetudium.</p>
            </p>
        </div>
        <div>
            <img src="browsers.png" alt="" class="browsers">
        </div>
        <div class="gradient-box">
            <div>
                <h3><span class="gradient-box_h3">Waxom</span> Multipurpose WordPress Theme <p class="gradient-box_p">
                        Don't Forget to Rate the Template. Thabks so much!</p>
                </h3>
            </div>
            <button>PURCHASE NOW</button>
        </div>
    </div>
    <div class="container">
        <div class="heading">
            <h2>Our Latest Projects.</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur tempora magnam, consequuntur aliquid
                perspiciatis est?
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </p>
        </div>

        <div class="filter-buttons">
            <button class="button" onclick="project_chenjeAll(this)">All</button>
            <button class="button" onclick="project_chenje('web_design',this)">Web Design</button>
            <button class="button" onclick="project_chenje('mobile_app',this)">Mobile App</button>
            <button class="button" onclick="project_chenje('illusration',this)">Illustration</button>
            <button class="button" onclick="project_chenje('photography',this)">Photography</button>
        </div>


        <?php
        $all = ["project web_design", "About Us", "Portfolio", "Features", "Blog", "Pricing", "Shortcodes", "Contact"];
        ?>
        <?php
        $coock = [
            ['sergey', 27, 100],
            ['muhamed', 13, 8],
            ['enot', 16, 80]
        ];
        $object = [
            [
                'name' => "sergey",
                'ago' => 27,
                'range' => 100
            ],
            [
                'name' => "muhamed",
                'ago' => 13,
                'range' => 8

            ],
            [
                'name' => "enot",
                'ago' => 16,
                'range' => 80
            ]
        ];
        // for ($i = 0; $i < 3; $i++) {
        //     print_r(
        //         '<div>'.
        //         '<h2>' . $object[$i]['name'] . '</h2>'.
        //         '<h2>' . $object[$i]['ago'] . '</h2>'.
        //         '</div>'
        //     );
        // }
        ?>

        <!-- <div class="project web_design">
                <img src="phone1-450x340.jpg" alt="Claritas Etiam Processus">
                <div class="project2">
                    <p>Claritas Etiam Processus </p>
                    <em>Photography, Nature</em>
                </div>
            </div>
            <div class="project mobile_app">
                <img src="utah-440520-450x340.jpg" alt="Quam Nutamus Farum">
                <div class="project2">
                    <p>Quam Nutamus Farum </p>
                    <em>Graphic Design, Mock-Up</em>
                </div>
            </div>
            <div class="project illusration">
                <img src="magazine-450x340.jpg" alt="Usus Legentis Videntur">
                <div class="project2">
                    <p>Usus Legentis Videntur </p>
                    <em>Photography, Holiday</em>
                </div>
            </div>
            <div class="project photography">
                <img src="seagulls-450x340.jpg" alt="Claritas Etiam Processus">
                <div class="project2">
                    <p>Claritas Etiam Processus </p>
                    <em>Photography, Nature</em>
                </div>
            </div>
            <div class="project web_design">
                <img src="magazine-450x340.jpg" alt="Quam Nutamus Farum">
                <div class="project2">
                    <p>Quam Nutamus Farum </p>
                    <em>Graphic Design, Mock-Up</em>
                </div>
            </div>
            <div class="project illusration">
                <img src="rocks2-450x340.jpg" alt="Usus Legentis Videntur">
                <div class="project2">
                    <p>Usus Legentis Videntur </p>
                    <em>Photography, Holiday</em>
                </div>
            </div>
        </div>
        <button class="load-more">LOAD MORE</button> -->

        <?php

        // $projects = [
        //     [
        //         "img" => "phone1-450x340.jpg",
        //         "alt" => "Claritas Etiam Processus",
        //         "title" => "Claritas Etiam Processus",
        //         "category" => "Photography, Nature",
        //         "class" => "web_design"
        //     ],
        //     [
        //         "img" => "utah-440520-450x340.jpg",
        //         "alt" => "Quam Nutamus Farum",
        //         "title" => "Quam Nutamus Farum",
        //         "category" => "Graphic Design, Mock-Up",
        //         "class" => "mobile_app"
        //     ],
        //     [
        //         "img" => "magazine-450x340.jpg",
        //         "alt" => "Usus Legentis Videntur",
        //         "title" => "Usus Legentis Videntur",
        //         "category" => "Photography, Holiday",
        //         "class" => "illustration"
        //     ],
        //     [
        //         "img" => "seagulls-450x340.jpg",
        //         "alt" => "Claritas Etiam Processus",
        //         "title" => "Claritas Etiam Processus",
        //         "category" => "Photography, Nature",
        //         "class" => "photography"
        //     ],
        //     [
        //         "img" => "magazine-450x340.jpg",
        //         "alt" => "Quam Nutamus Farum",
        //         "title" => "Quam Nutamus Farum",
        //         "category" => "Graphic Design, Mock-Up",
        //         "class" => "web_design"
        //     ],
        //     [
        //         "img" => "rocks2-450x340.jpg",
        //         "alt" => "Usus Legentis Videntur",
        //         "title" => "Usus Legentis Videntur",
        //         "category" => "Photography, Holiday",
        //         "class" => "illustration"
        //     ],
        //     [
        //         "img" => "phone1-450x340.jpg",
        //         "alt" => "Claritas Etiam Processus",
        //         "title" => "Claritas Etiam Processus",
        //         "category" => "Photography, Nature",
        //         "class" => "web_design"
        //     ],
        //     [
        //         "img" => "utah-440520-450x340.jpg",
        //         "alt" => "Quam Nutamus Farum",
        //         "title" => "Quam Nutamus Farum",
        //         "category" => "Graphic Design, Mock-Up",
        //         "class" => "mobile_app"
        //     ],
        //     [
        //         "img" => "magazine-450x340.jpg",
        //         "alt" => "Usus Legentis Videntur",
        //         "title" => "Usus Legentis Videntur",
        //         "category" => "Photography, Holiday",
        //         "class" => "illustration"
        //     ],
        //     [
        //         "img" => "seagulls-450x340.jpg",
        //         "alt" => "Claritas Etiam Processus",
        //         "title" => "Claritas Etiam Processus",
        //         "category" => "Photography, Nature",
        //         "class" => "photography"
        //     ],
        //     [
        //         "img" => "magazine-450x340.jpg",
        //         "alt" => "Quam Nutamus Farum",
        //         "title" => "Quam Nutamus Farum",
        //         "category" => "Graphic Design, Mock-Up",
        //         "class" => "web_design"
        //     ],
        //     [
        //         "img" => "rocks2-450x340.jpg",
        //         "alt" => "Usus Legentis Videntur",
        //         "title" => "Usus Legentis Videntur",
        //         "category" => "Photography, Holiday",
        //         "class" => "illustration"
        //     ],
        //     [
        //         "img" => "magazine-450x340.jpg",
        //         "alt" => "Usus Legentis Videntur",
        //         "title" => "Usus Legentis Videntur",
        //         "category" => "Photography, Holiday",
        //         "class" => "illustration"
        //     ],
        //     [
        //         "img" => "seagulls-450x340.jpg",
        //         "alt" => "Claritas Etiam Processus",
        //         "title" => "Claritas Etiam Processus",
        //         "category" => "Photography, Nature",
        //         "class" => "photography"
        //     ]
        // ];

        // 
        ?>
        <div class="projects">
            <?php
            for ($j = 0; $j < 30; $j++) {
                $sql = "SELECT * FROM `projects`";
                $resolt = $conect->query($sql);
                for ($i = 0; $i < $resolt->num_rows; $i++) {
                    $roo = $resolt->fetch_assoc();
                   
            include 'components/cards_projects.php';

                    
           }
            }
            ?>
        </div>
        <a href="http://localhost/Waxom/one_category.php?class=">click</a>
        <button class="load-more" onclick="cards(this)">LOAD MORE</button>
        <div>
            <img src="Знімок екрана 2024-10-10 021718.png" alt="" class="waxom_video">
        </div>
        <div class="block">
            <div class="image-container">
                <img src="iphone.png" alt="Phone Image">
            </div>

            <div class="text-content">
                <h2>Excellent for Mobile Devices.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores quae facere ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A aliquam amet quia fugiat nobis?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat sed enim eos error similique.</p>
                <p class="text-content_p">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <ul class="bullets">
                    <li>Nam liber tempor cum soluta nobis eleifend option;</li>
                    <li>Option congue nihil imperdiet doming id quod mazim placerat facer;</li>
                    <li>Eodem modo typi, qui nunc nobis videntur parum futurum;</li>
                    <li>Investigationes demonstraverunt lectores</li>
                </ul>
            </div>
        </div>
        <div class="stats">
            <div class="div_h3">
                <h3>3587</h3>
                <p>SATISFIED CLIENTS</p>
            </div>
            <div>
                <h3>207</h3>
                <p>CUPS OF COFFEE</p>
            </div>
            <div>
                <h3>2500</h3>
                <p>BLOG POSTS</p>
            </div>
            <div>
                <h3>873</h3>
                <p>LIKES</p>
            </div>
            <div>
                <h3>900</h3>
                <p>WE LAUNCHED</p>
            </div>
        </div>
        <div class="recent">
            <div class="posts">
                <h2>Recent Posts</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vitae rerum ea dignissimos!
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                </p>
            </div>
            <div class="wrapper">
                <div class="cover">
                    <div class="date-box">
                        <p class="day">30</p>
                        <p class="month">Sep.</p>
                    </div>
                    <img src="feet-450x340.jpg" alt="Feet Image" class="cover-image">
                    <div class="text-block">
                        <h3 class="title">Lorem ipsum dolor sit amet</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="read-more">Read More ▶</p>
                    </div>
                    <div class="overlay"></div>
                </div>

                <div class="cover">
                    <div class="date-box">
                        <p class="day">30</p>
                        <p class="month">Sep.</p>
                    </div>
                    <img src="guy-450x340.jpg" alt="Guy Image" class="cover-image">
                    <div class="text-block">
                        <h3 class="title">Lorem ipsum dolor sit amet</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="read-more">Read More ▶</p>
                    </div>
                    <div class="overlay"></div>
                </div>

                <div class="cover">
                    <div class="date-box">
                        <p class="day">30</p>
                        <p class="month">Sep.</p>
                    </div>
                    <img src="business2_2-450x340.jpg" alt="Business Image" class="cover-image">
                    <div class="text-block">
                        <h3 class="title">Lorem ipsum dolor sit amet</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur.</p>
                        <p class="read-more">Read More ▶</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
        <div>
            <img src="Знімок екрана 2024-10-11 024700.png" alt="" class="img_scall">
            <div>

            </div>
        </div>
        <div class="cont">
            <div class="about-section">
                <img src="logo-white.png" alt="Company Logo" class="log">
                <p class="about-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, praesentium totam qui ipsam, minus
                    ullam hic dicta tempore, quam ab enim iste velit earum sequi obcaecati consectetur? Explicabo,
                    numquam aperiam?
                </p>
                <em class="more">Read More ▶</em>
            </div>

            <div class="recent-posts">
                <h3 class="posts-title">Recent Posts</h3>
                <div class="post">
                    <p class="post-date">September 08, 2015</p>
                    <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam.</p>
                </div>
                <div class="post">
                    <p class="post-date2">September 08, 2015</p>
                    <p class="post-text2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam.</p>
                </div>
                <div class="post">
                    <p class="post-date">September 08, 2015</p>
                    <p class="post-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum fugit nisi beatae dolorem iste!</p>
                </div>
            </div>

            <div class="twitter-widget">
                <h3 class="widget-title">Our Twitter</h3>
                <div class="tweet">
                    <p class="tweet-text"><span>@waxom</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p class="tweet-time">3 mins ago</p>
                </div>
                <div class="tweet">
                    <p class="tweet-text">Lorem, ipsum <span>#envato</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, consectetur.</p>
                    <p class="tweet-time">5 hours ago</p>
                </div>
                <div class="tweet">
                    <p class="tweet-text">Soluta nobis option bit.ly/1Hniso7</p>
                    <p class="tweet-time">20 days ago</p>
                </div>
            </div>

            <div class="dribbble-widget">
                <h3 class="widget-title2">Dribbble Widget</h3>
                <div class="dribbble-images">
                    <div class="image-row">
                        <img src="architecture-450x340.jpg" alt="Architecture Image" class="dribbble-img">
                        <img src="rocks2-450x340.jpg" alt="Rocks Image" class="dribbble-img">
                    </div>
                    <div class="image-row">
                        <img src="magazine-450x340.jpg" alt="Magazine Image" class="dribbble-img">
                        <img src="seagulls-450x340.jpg" alt="Seagulls Image" class="dribbble-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="policy">
                <p>Copyright @ 2015 <span>Waxom</span></p>
                <p class="policy_text">Privacy Policy</p>
                <p class="policy_faq" style="color: #b08e6d;">FAQ</p>
                <p>Support</p>
            </div>
            <div class="only">
                <p>Designed by <span>ThemeFire</span></p>
                <p>Only on <span>Envato Market</span></p>
            </div>
        </div>
        <script src="script.js"></script>
</body>

</html>
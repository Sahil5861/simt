@extends('frontend.layout')
@section('title', 'BCA')
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">
<style>            
        .content{
            margin: 20px;
            scroll-margin-top: 200px;
        }   
        
        .eligibility li {
            list-style: none; /* Remove default bullet */
            padding-left: 30px; /* Space for the icon */
            position: relative;   
            margin: 20px 0;         
        }
        .content ul li{
            margin: 20px 0;
        }

        .eligibility li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 44%;
            transform: translateY(-50%);
            width: 24px; /* Larger size */
            height: 24px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='black'%3E%3Cpath d='M10 7l5 5-5 5V7z'/%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
        }

        .boxes{
            display: flex;
            gap: 10px;
        }
        .box1{
            border-right: 1px solid #888;
        }
        .box{
            min-width: 130px;
            display: flex;
            flex-direction: column;
        }
        .container{
            position: relative;
            scroll-margin-top: 200px; 
        }    
        
        .contact{
            padding: 10px;
            background-color: var(--e-global-color-primary) !important;
            color: #fff;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;            
            border-radius: 10px;
        }
        .contact h4{
            color: #fff;
        }
        .btn-contact{
            background-color: #fff !important;
            color: #000 !important;
            color: var(--e-global-color-primary) !important;
            border-radius: 10px !important;
            float: right !important;
        }  
    .accreditation-section {
        padding: 40px 0px;        
        background-color: transparent;        
      }
      
      .accreditation-section h3 {
        font-size: 22px;
        font-weight: 700;
        color: #0c1e41; /* dark navy */
        margin-bottom: 30px;
      }
      
      .accreditation-logos {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 30px;
      }
      
      .accreditation-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 150px;
      }
      
      .accreditation-item img {
        height: 60px;
        object-fit: contain;
        margin-bottom: 10px;
      }
      
      .accreditation-item p {
        margin: 0;
        font-size: 14px;
        font-weight: 500;
        color: #333;
        text-align: center;
      }

      
      .banner-2 {
            height: 73vh;
            position: relative;            
            display: flex;
            justify-content: flex-end;
            align-items: center;            
            padding: 2rem;
            color: white;            
            background-position-x: center;
            background-position-y: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .banner-dark{
            position: relative;
        }
        
        .baner-dark::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Dark overlay */
            z-index: 1;
        }
        .banner-content2{
            position: absolute;
            z-index: 2;
            max-width: 700px;
            color: white;            
            padding: 20px;
            border-radius: 10px;
            right: 50px;
        }

        .banner-content2 h1{
            color: #fff !important;
            font-size: 50px !important;
        }
        .banner-content2 h4{
            color: #fff !important;
            font-size: 24px !important;
        }

        .navbar-box{
            position: sticky;
            top: 85px; 
            margin-bottom:100px;
            z-index: 994; 
            background-color:#fff;
            padding:5px;
        }

        mark{
            background-color: yellow !important;
        }

        @media screen and (max-width:768px) {
            .banner-2 {
                background-position-x: 35% !important;
            }
            .banner-content2 {
                position: absolute;
                z-index: 2;
                max-width: 350px;
                color: white;            
                padding: 20px;
                border-radius: 10px;
                bottom: 0px;
                left: 0px;            
                /* transform: translateY(-50%); */
            }   
            .banner-content2 h1{
                font-size: 24px !important;
            }

            .banner-content2 h4{
                font-size: 16px !important;
            }
            .banner-content2 p{
                font-size: 12px !important;
            }
            .accreditation-item {
                max-width: 110px;
            }
            .elementor img{
                max-width: 138% !important;
            }
            .navbar ul li a{
                font-size: 12px !important;
            }
            .navbar-box{
                top: 130px !important;
                margin-bottom: 0;
            }
            .accreditation-section{
                padding: 30px 0 10px 0;
            }
        }

</style>
@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304" style="background-color: #fff;">        
    <section class="banner-2" style="background-image: url('../images/BCA_image2.jpg');">
        <div class="banner-content2">
            <h1>BCA-Unlocking the World of Technology</h1>
            <p><i>Master the skills to innovate in a fast-evolving digital landscape.</i></p>
        </div>
    </section>

    <section class="container-lg"style="padding: 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Bachelor of Computer Applications (BCA)</h2>                                                        
            </div>
        </div>
        <br>
        <h4>Where your passion for code sparks a professional journey</h4>
        <br>        
        <div class="boxes">
            <div class="box box1">
                Program Level
                <b>Undergraduate</b>
            </div>
            <div class="box box2">
                Duration 
                <b>3 years</b>
            </div>
        </div>
        <section class="accreditation-section">
            <h3>Program Accreditations</h3>
            <div class="accreditation-logos">
              <div class="accreditation-item">
                <img src="{{asset('accresiations/image1.png')}}" alt="NAAC A+">
                <p>Approved by the AICTE, India</p>
                
              </div>
              <div class="accreditation-item">
                <img style="margin-top:13px;" src="{{asset('accresiations/image2.png')}}" alt="UGC Entitled" width="90">
                <p>Affiliated with Dr. A.P.J. Abdul Kalam Technical University</p>
              </div>      
            </div>
        </section>

    </section>
    <div class="container p-4" style="padding: 40px;">
        <div class="navbar-box" style="">
            <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);overflow-x: auto; white-space: nowrap;">
                <ul style="display: flex; justify-content:flex-start;">
                    <li><a href="#About_the_programme">About the Programme</a></li>
                    <li><a href="#eligibility">Eligibility Criteria</a></li>                
                    <li><a href="#curriculum">Curriculum Structure</a></li>                
                    <li><a href="#subjects">Subjects</a></li>  
                    <li><a href="#overview">Subjects Overview</a></li>                
                    <li><a href="#program_objectives">POs</a></li>                    
                </ul>
            </nav>
        </div>
        <section>
            <div class="content" id="About_the_programme">
                <h2>About the Programme</h2>
                <ul>
                    <li>The Bachelor of Computer Applications (BCA) program at SITASRM Institute of Management and Technology is a three-year undergraduate degree, divided into six semesters.</li>
                    <li>It is designed to provide students with a strong foundation in computer applications, software development, programming, databases, networking, and emerging technologies.  </li>
                    <li>The program aims to equip students with the necessary skills and knowledge to thrive in the IT industry and pursue further studies.</li>
                    <li>Aligned with the National Education Policy (NEP) 2020, the program focuses on holistic development, integrating technical skills with critical thinking, creativity, and ethical grounding</li>
                    <li>The institute emphasizes practical learning, industry interaction, and readiness for future technologies, including areas like Artificial Intelligence and Machine Learning.  </li>
                </ul>
            </div>

            <div class="content" id="eligibility">
                <h2>Eligibility Criteria</h2>                                
                <ul>
                    <li><strong>Educational Qualification :</strong> Completion of 10+2 or equivalent examination from a recognized board.</li>
                    <li><strong>Minimum Marks :</strong> Minimum 45% aggregate in 10+2 from a recognized board.
                    </li>
                    <li><strong>Compulsory Subject :</strong> Mathematics is often required at the 10+2 level.</li>
                    <li><strong>Admission :</strong> Typically based on scores from the Common University Entrance Test (CUET-UG), followed by counseling conducted by AKTU/UPTAC</li>
                </ul>
            </div>

            <div class="content" id="curriculum">
                <h2>Curriculum Structure</h2>
                <ul>
                    <li><strong>Duration :</strong> 3 Years (6 Semesters).</li>
                    <li><strong>Approach :</strong> The curriculum blends theory with practical application through labs and projects, aligning with industry requirements. It encourages learning by doing. </li>
                </ul>
            </div>

            <div class="content" id="subjects">
                <h2>Key Subjects</h2>
                <ul>
                    <li>Fundamentals of Computer </li>
                    <li>Mathematical Foundation  </li>
                    <li>Problem Solving Using C  </li>
                    <li>Communication Skills  </li>
                    <li>Environment and Ecology  </li>
                    <li>Problem Solving Using C Lab  </li>
                    <li>Communication Skills Lab  </li>
                    <li>Digital Electronics</li>
                    <li>Discrete Mathematics  </li>
                    <li>Data Structure</li>
                    <li>Professional Communication</li>
                    <li>Information Systems  </li>
                    <li>Data Structure Lab  </li>
                    <li>Professional Communication Lab</li>
                    <li>Sports and Yoga  </li>
                </ul>
            </div>

            <div class="content" id="overview">
                <h2>Subjects Overview</h2>
                <ul>
                    <li>Year 1 (Sem 1 & 2) : Focus on fundamentals like Digital Computer Fundamentals, Introduction to Programming Using C, C & Data Structures, Foundational Mathematics, Statistics, Operating Systems, Database Management System basics, Microprocessors.</li>
                    <li>Year 2 (Sem 3 & 4) : Includes subjects like Semiconductor Devices, Numerical Analysis, Discrete Structures, Computer Graphics, Advanced Operating Systems, Software Engineering, Optimization Techniques.</li>
                    <li>Year 3 (Sem 5 & 6) : Covers areas like DBMS, Java Programming, Dynamic Web Page Design, Computer Networks, Network Security, System Analysis & Design, E-Commerce, Knowledge Management, and potentially a Major Project.</li>                    
                    <li style=""><mark>Emerging Tech Focus: Exposure to AI, Machine Learning, and prompt engineering concepts, encouraging projects like AI chatbot development.</mark></li>
                </ul>
            </div>
            
            <div class="content" id="program_objectives">
                <h2>Program Outcomes (POs)</h2>                                           
                <ul>
                    <li>Progressive Learning : The program facilitates a structured progression of knowledge and skills, building from fundamental concepts to advanced applications, enabling students to adapt to evolving technologies.</li>
                    <li>Industry and Academics Immersion : The curriculum integrates theoretical knowledge with practical skills, fostering engagement with both academic principles and industry practices.</li>
                    <li>Computational Knowledge : Apply fundamental knowledge of mathematics, computing principles, and domain specialization to solve problems.</li>
                    <li>Problem Analysis : Identify, formulate, research literature, and analyze complex computing problems to reach substantiated conclusions using principles of mathematics and computer science</li>
                    <li>Design/Development of Solutions : Design solutions for complex computing problems and design system components or processes that meet specified needs with appropriate consideration for public health, safety, cultural, societal, and environmental factors. </li>
                    <li>Conduct Investigations of Complex Problems : Use research-based knowledge and methods, including design of experiments, data analysis, and interpretation, to provide valid conclusions.</li>
                    <li>Modern Tool Usage : Create, select, adapt, and apply appropriate techniques, resources, and modern computing tools (including prediction and modeling) to complex activities, understanding their limitations.</li>
                    <li>The Professional and Society : Understand and assess societal, health, safety, legal, and cultural issues and the consequent responsibilities relevant to professional computing practice within local and global contexts.  </li>
                </ul>
            </div>
        </section>
    </div>    
</div>
@endsection


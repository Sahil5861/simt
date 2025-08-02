@extends('frontend.layout')
@section('title', 'MCA')
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

        mark{
            background-color: yellow !important;
        }

        .navbar-box{
            position: sticky;
            top: 85px; 
            margin-bottom:100px;
            z-index: 994; 
            background-color:#fff;
            padding:5px;
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
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">        
    <section class="banner-2" style="background-image: url('../images/MCA_image2.jpg');">
        <div class="banner-content2">
            <h1>MCA-Designing Tomorrow's Tech Landscape </h1>
            <p><i>Lead the evolution of technology with unparalleled expertise and creativity.</i></p>
        </div>
    </section>

    <section class="container-lg"style="padding: 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Master of Computer Applications (MCA) at SITASRM</h2>                                                        
            </div>
        </div>
        <br>
        <h4>Shape tomorrow's digital world with advanced computing mastery</h4>
        <br>        
        <div class="boxes">
            <div class="box box1">
                Program Level
                <b>Undergraduate</b>
            </div>
            <div class="box box2">
                Duration 
                <b>2 years</b>
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
        <div class="navbar-box">
            <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);overflow-x: auto; white-space: nowrap;">
                <ul style="display: flex; justify-content:flex-start;">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#About_the_programme">About the Programme</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#eligibility">Eligibility Criteria</a></li>                
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#curriculum">Curriculum Structure</a></li> 
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#subjects">Subjects</a></li>                 
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#overview">Subjects Overview</a></li>                
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#program_objectives">POs</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#pos">PSOs</a></li>
                </ul>
            </nav>
        </div>
        <section>
            <div class="content" id="About_the_programme">
                <h2>About the Programme</h2>
                <ul>
                    <li>The Master of Computer Applications (MCA) program at SITASRM Institute of Management and Technology (SIMT) is a two-year postgraduate degree, divided into four semesters.</li>
                    <li>It aims to provide students with advanced theoretical and practical knowledge in computer science, software development, and application design, along with essential management skills. </li>
                    <li>Recognizing the growing importance of AI, the program takes a bold step forward to equip students with essential AI skills and expertise, enabling them to responsibly lead in an AI-driven world</li>
                    <li>The program focuses on preparing students for specialized and leadership roles within the dynamic IT industry.  </li>
                    <li>Emphasis is placed on research, innovation, industry collaboration, and mastering emerging technologies.</li>
                    <li>The institute fosters an environment for critical thinking, problem-solving, and developing solutions for real-world challenges.</li>
                </ul>
            </div>

            <div class="content" id="eligibility">
                <h2>Eligibility Criteria</h2>                                
                <ul>
                    <li><strong>Educational Qualification:</strong> Typically requires a BCA / Bachelor's Degree in Computer Science Engineering or equivalent, OR a B.Sc./ B.Com./ B.A. graduate degree with Mathematics at the 10+2 level or Graduation level</li>
                    <li><strong>Minimum Marks:</strong>  Minimum 50% aggregate marks at the graduation level.
                    </li>                    
                    <li><strong>Admission:</strong>  Primarily based on scores obtained in the Common University Entrance Test (CUET-PG) for the relevant MCA paper, followed by counseling conducted by AKTU/UPTAC.</li>
                </ul>
            </div>

            <div class="content" id="curriculum">
                <h2>Curriculum Structure</h2>
                <ul>
                    <li><strong>Duration:</strong> 2 Years (4 Semesters).</li>
                    <li><strong>Approach:</strong> In-depth study of advanced topics with a strong emphasis on practical labs, project work, and potentially elective specializations. The curriculum aims to be industry-relevant.  </li>
                </ul>
            </div>

            <div class="content" id="subjects">
                <h2>Key Subjects</h2>
                <ul>
                    <li>Fundamental of Computers & Emerging Technologies</li>
                    <li>Problem Solving using C  </li>
                    <li>Principles of Management & Communication  </li>
                    <li>Discrete Mathematics</li>
                    <li>Computer Organization & Architecture  </li>
                    <li>Problem Solving using C Lab  </li>
                    <li>Computer Organization & Architecture Lab</li>
                    <li>Professional Communication Lab </li>
                    <li>Cyber Security  </li>
                    <li>Web Technology </li>
                    <li>Object Oriented Programming </li>
                    <li>Operating Systems </li>
                    <li>Database Management Systems </li>
                    <li>Data Structures & Analysis of Algorithms  </li>
                    <li>Web Technology Lab </li>
                    <li>Object Oriented Programming Lab </li>
                    <li>DBMS Lab </li>
                    <li>Data Structures & Analysis of Algorithms Lab  </li>
                    <li>Sports and Yoga</li>
                </ul>
            </div>

            <div class="content" id="overview">
                <h2>Subjects Overview</h2>
                <ul>
                    <li><strong>Core Subjects:</strong> Advanced Data Structures & Algorithms, Advanced DBMS, Software Engineering, Computer Organization & Architecture, Object-Oriented Programming, Operating Systems, Computer Networks, Discrete Mathematics, Principles of Management.</li>
                    <li><strong>Emerging Technologies:</strong> Likely includes modules or electives in areas like Artificial Intelligence, Machine Learning, Cloud Computing, Big Data Analytics, Mobile Computing, Cybersecurity.</li>
                    <li><strong>Practical Labs:</strong> Intensive hands-on sessions covering programming, database management, network configuration, etc..  </li>
                    <li><strong>Electives:</strong> May be offered in later semesters allowing for specialization.</li>
                    <li><strong>Major Project:</strong> A significant component, typically undertaken in the final semester, involving substantial research or development work.</li>
                    <li><mark><strong>Emerging Tech Focus:</strong> SIMT uses a credit-based system where courses are assigned credits based on workload and importance.</mark></li>
                </ul>
            </div>
            
            <div class="content" id="program_objectives">
                <h2>MCA Program Outcomes (POs)</h2>                                           
                <ul>
                    <li><strong>Computational Knowledge:</strong> Apply knowledge of computing fundamentals, specialization, mathematics, and domain knowledge appropriate for the computing specialization to the abstraction and conceptualization of computing models from defined problems and requirements. </li>
                    <li><strong>Problem Analysis:</strong> Identify, formulate, research literature, and solve complex computing problems, reaching substantiated conclusions using fundamental principles of mathematics, computing sciences, and relevant domain disciplines. </li>
                    <li><strong>Disciplines/Design/Development of Solutions:</strong> Design and evaluate solutions for complex computing problems, and design/evaluate systems, components, or processes that meet specified needs with appropriate consideration for public health and safety, cultural, societal, and environmental considerations. </li>
                    <li><strong>Conduct Investigations of Complex Computing Problems:</strong> Use research-based knowledge and methods, including design of experiments, analysis and interpretation of data, and synthesis of information to provide valid conclusions. </li>
                    <li><strong>Modern Tool Usage:</strong> Create, select, adapt, and apply appropriate techniques, resources, and modern computing tools to complex computing activities, with an understanding of the limitations.</li>
                    <li><strong>Professional Ethics:</strong> Understand and commit to professional ethics, cyber regulations, responsibilities, and norms of professional computing practices. </li>
                    <li><strong>Life-long Learning:</strong> Recognize the need for, and have the ability to engage in, independent learning for continual development as a computing professional.  </li>
                    <li><strong>Project Management and Finance:</strong> Demonstrate knowledge and understanding of computing and management principles and apply these to one's own work, as a member and leader in a team, to manage projects in multidisciplinary environments.  </li>
                    <li><strong>Communication Efficacy:</strong> Communicate effectively with the computing community and society at large about complex computing activities by being able to comprehend and write effective reports, design documentation, make effective presentations, and give/understand clear instructions.  </li>
                    <li><strong>Societal and Environmental Concern:</strong> Understand and assess societal, environmental, health, safety, legal, and cultural issues within local and global contexts, and the consequential responsibilities relevant to professional computing practices.</li>
                    <li><strong>Individual and Teamwork:</strong> Function effectively as an individual and as a member or leader in diverse teams and multidisciplinary environments.</li>
                    <li><strong>Innovation and Entrepreneurship:</strong> Identify timely opportunities and use innovation to pursue those opportunities to create value and wealth for the betterment of the individual and society at large.</li>
                </ul>
            </div>
        </section>
    </div>    
</div>
@endsection


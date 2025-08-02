@extends('frontend.layout')
@section('title', 'BBA')
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

            .contact{
                flex-direction: row;
            }
            .contact h4{
                font-size: 14px !important;
            }
            .contact a{
                font-size: 12px !important;
                padding: 10px !important;
            }
        }

</style>
@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">        
    <section class="banner-2" style="background-image: url('../images/BBA_image2.jpg');">
        <div class="banner-content2">
            <h1>BBA-Shaping Tomorrow's Business Leaders </h1>
            <p><i>Empowering future managers with innovative insights and global perspectives.</i></p>
        </div>
    </section>

    <section class="container-lg"style="padding: 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Bachelor of Business Administration (BBA)</h2>                                                        
            </div>
        </div>
        <br>
        <h4>Fostering Futuristic Leadership</h4>
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
        <div class="navbar-box">
            <nav class="navbar" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);overflow-x: auto; white-space: nowrap;">
                <ul style="display: flex; justify-content:flex-start;">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#About_the_programme">About the Programme</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#eligibility">Eligibility</a></li>                
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#program_objectives">POs</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#pos">PSOs</a></li>
                </ul>
            </nav>
        </div>
        <section>
            <div class="content" id="About_the_programme">
                <h2>About the Programme</h2>
                <p>SIMT's core BBA program provides a strong foundation in business administration, preparing students for management roles. The curriculum balances core management principles with specialized knowledge in areas like finance, marketing, and operations. </p>
                <p>This program emphasizes developing key skills, including communication, analytical thinking, problem-solving, and leadership. Through experiential learning, industry interaction, and technology integration, students gain practical experience and digital literacy. It also fosters entrepreneurial skills and ethical awareness, shaping agile, responsible business professionals ready for the evolving corporate world.</p>                
            </div>

            <div class="content" id="eligibility">
                <h2>Eligibility</h2>                
                <strong>Minimum Academic Eligibility</strong>
                <p>Candidates applying for the BBA program must have successfully completed their 10+2 or equivalent examination from a recognized board or institution. A minimum aggregate of 45% marks is mandatory to ensure that students possess the foundational knowledge and skills necessary for pursuing business studies.</p>
                <br>

                <strong>Enrollment</strong>
                <p>Admissions are based solely on merit, providing an equal opportunity for all eligible students to begin their transformative educational journey. Seize this opportunity to join a vibrant academic community and pave the way for a successful career. Apply now and take the first step toward your bright future!</p>
                <br>

                <strong>Selection Procedure</strong>
                <ul>
                    <li>Visit the SIMT website and complete the application form.</li>
                    <li>Upload essential documents, including academic records and certificates.</li>                    
                    <li>Engage in a one-on-one discussion with the SIMT team to showcase your potential and aspirations.</li>
                    <li>Once selected, secure your spot by completing the admission process.</li>
                </ul>
            </div>
            
            <div class="content" id="program_objectives">
                <h2>Program Objectives</h2>            
                <p>The BBA program at SIMT aims to:</p>                
                <ul>
                    <li>Impart high-quality management education to a wide cross-section of students.</li>
                    <li>Instill behavioral competencies such as analytical and reflective thinking skills, critical thinking, and creativity, that provide students a solid foundation to initiate and maintain their own entrepreneurial pursuits.</li>
                    <li>Develop the intellectual capacity of students along with their executive personality equipped with managerial skills to enable them for managerial positions in the Industry.</li>
                    <li>Inculcate behavioral competencies like analytical and reflective thinking techniques that provide a strong foundation for students to start and sustain their own entrepreneurial ventures. </li>
                    <li>Provide a curriculum that creates opportunities for students to upgrade themselves and gain hands-on experience with corporations under internship programs.</li>
                    <li>Embrace academic proficiency among students and generate a comprehensive ability in them to enroll in post-graduate programs</li>
                    <li>Provide an appropriate blend of general management, accounting, capital management, marketing and communications, strategy and operations, law and entrepreneurship, bringing both functional and integrative skills in the field of business. </li>
                    <li>Offer quality courseware, personalized instruction and industry interface to provide the right proportion of theoretical and pragmatic skills required for students’ professional orientation.</li>
                    <li>Develop a deep-rooted value system that brings about the ability, stability and sustainability in the progress of students.</li>
                </ul>
            </div>

            <div class="content" id="pos">
                <h2>Program Specific Outcomes (PSOs)</h2>
                <p>Upon completion of the BBA program, students will be able to:</p>
                
                <ul>
                    <li>Demonstrate strong foundational knowledge in various functional areas of business administration.</li>
                    <li>Apply analytical and reflective thinking techniques in real-world business scenarios.</li>
                    <li>Apply analytical and reflective thinking techniques in real-world business scenarios.</li>
                    <li>Communicate effectively and work collaboratively in diverse teams.  
                    </li>
                    <li>Utilize technology and software applications relevant to business operations. </li>
                    <li>Pursue entrepreneurial ventures with a sound understanding of business principles.</li>
                    <li>Make ethical business decisions and understand the social responsibility of organizations.</li>
                    <li>Demonstrate readiness for further studies in management and related fields.</li>
                </ul>
            </div>

            <hr>
            <div class="contact mt-2">
                <h4 style="color: #fff;">Speak with our counselors to explore your options and know more about programs</h4>
                <a href="#" class="btn-contact btn btn-lg">Schedule a Call</a>
            </div>
        </section>
    </div>

    
</div>
@endsection


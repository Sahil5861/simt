@extends('frontend.layout')
@section('title', 'MBA')
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
    <section class="banner-2 baner-dark" style="background-image: url('../images/MBA_image2.jpg');">
        <div class="banner-content2">
            <h1>MBA-Transforming Vision into Strategy</h1>
            <p><i>Excel in leadership with expertise across diverse business domains</i></p>
        </div>
    </section>

    <section class="container-lg"style="padding: 40px;">
        <div class="elementor-element elementor-element-66a6537 elementor-invisible elementor-widget elementor-widget-heading"
            data-id="66a6537" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
            data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">Master of Business Administration (MBA)</h2>                                                        
            </div>
        </div>
        <br>
            <h4>Become Job-Ready with Industry-Relevant Specializations
            </h4>
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
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#eligibility">Eligibility</a></li>                
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#program_objectives">POs</a></li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item elementskit-mobile-builder-content" data-vertical-menu="750px"><a href="#pos">PSOs</a></li>
                </ul>
            </nav>
        </div>
        <section>
            <div class="content" id="About_the_programme">
                <h2>About the Programme</h2>
                <p>Propel your career towards future business leadership with SITASRM INSTITUTE OF MANAGEMENT & TECHNOLOGY (SIMT)’s flagship MBA programme.</p>                

                <h4>Dual Specializations</h4>
                <p>Gain in-depth understanding with dual specialization in key business administration areas such as: </p>
                <ul>
                    <li>HR</li>
                    <li>Marketing</li>
                    <li>Finance</li>
                    <li>Operations</li>
                    <li>Business analytics</li>
                    <li>IT</li>
                    <li>IB</li>
                </ul>

                <p>SIMT's MBA program develops skilled professionals who are socially conscious and globally aware. Covering multiple domains beyond management expertise. It trains students to lead individually and collaborate effectively through simulations, projects, internships, entrepreneurship labs, and industry interactions. </p>
                <p>Top educators shape students into hardworking, innovative, and creative leaders. We prepare MBA students to tackle global challenges, understand multinational corporations, and address issues faced by SMEs and micro-enterprises.</p>
            </div>

            <div class="content" id="eligibility">
                <h2>Eligibility</h2>                
                <strong>Minimum Academic Eligibility</strong>
                <ul>
                    <li><strong>Graduation Qualification:</strong>Candidates must hold a bachelor's degree from a recognized university or institution. The degree can be in any discipline, provided it meets the graduation standards set by regulatory bodies.</li>
                    <li><strong>Minimum Marks:</strong>A minimum of <b>50% aggregate marks</b> in the undergraduate program is required. This benchmark ensures that students possess a solid academic foundation to undertake advanced management studies.</li>
                    <li>
                        <strong>Additional Considerations:</strong>
                        <ul>
                            <li>Applicants who have completed their undergraduate studies with distinctions or relevant professional certifications may be given added consideration during the selection process.</li>
                            <li>Students awaiting final results for their undergraduate degree are also eligible to apply, provided they submit proof of completion before the commencement of the program.</li>
                        </ul>                        
                    </li>
                </ul>

                <strong>Selection Procedure</strong>
                <ul>
                    <li>Visit the SIMT website and complete the application form.</li>
                    <li>Upload essential documents, including academic records and certificates.</li>
                    <li>Sit for the SIMT entrance test.</li>
                    <li>Engage in a one-on-one discussion with the SIMT team to showcase your potential and aspirations.</li>
                    <li>Once selected, secure your spot by completing the admission process.</li>
                </ul>
                <p>This streamlined process ensures transparency and focuses on identifying students who are passionate, committed, and ready to excel in the dynamic field of management.</p>
            </div>
            
            <div class="content" id="program_objectives">
                <h2>Program Objectives</h2>                                           
                <ul>
                    <li><strong>Impart Quality Management Education:</strong>Deliver high-quality management education that provides students with the necessary knowledge, skills, and ethical foundation to excel in the business world.</li>
                    <li><strong>Make Future Generations Technologically Competent:</strong>Integrate technological proficiency into the program to prepare students to leverage technology for innovation and efficiency in their careers.</li>
                    <li><strong>Develop Creativity and Lateral Thinking in Students:</strong>Foster creativity and the ability to think outside the box for problem-solving and adaptation to the dynamic global business environment.</li>
                    <li><strong>Train Students in the Latest Management Developments:</strong> Keep the curriculum updated with the latest trends, tools, and practices in management to ensure students are aware of current and emerging global business developments.</li>
                    <li><strong>Develop Leadership and Managerial Skills:</strong>Nurture leadership qualities and managerial capabilities, including teamwork, decision-making, communication, and strategic thinking</li>
                    <li><strong>Promote Research Activities Among Students and Staff:</strong> Encourage a culture of research and inquiry to advance knowledge in management studies.</li>
                    <li><strong>Enhance Industry-Academia Collaboration:</strong>Partner with industries to keep the curriculum relevant and provide students with practical experience through internships, guest lectures, and live projects. </li>
                </ul>
            </div>

            <div class="content" id="pos">
                <h2>Program Outcomes</h2> 
                <ul>
                    <li><strong>Disciplinary Knowledge:</strong>A broad and critical knowledge of the ideas, approaches, methodologies, and theoretical underpinnings of Business Management from an inter- and multi-disciplinary perspective.</li>
                    <li><strong>Critical Thinking and Problem Solving:</strong>Ability to employ the tools of critical thinking and methods of inquiry in identifying, formulating, analyzing, and evaluating complex problems and issues for arriving at effective solutions from first principles.</li>
                    <li><strong>Research Orientation:</strong> Capability to demonstrate understanding in identifying primary sources of knowledge and utilize research tools to investigate, analyze, interpret data and synthesize information to arrive at sound conclusions</li>
                    <li><strong>Quantitative Reasoning:</strong>Ability to define problems, critically evaluate ideas, evidence and experiences using scientific principles, analyze, interpret, and draw conclusions from quantitative/qualitative data.</li>
                    <li><strong>Application: </strong> Capacity to use practical knowledge of appropriate tools and techniques, including the use of latest technology, to address issues and solve problems</li>
                    <li><strong>Ethical Behavior:</strong>Ability to recognize the importance of ethical behavior, commit to following professional and societal rules and norms, and articulate a clear personal code of conduct.</li>
                    <li><strong>Effective Communication:</strong>Demonstrate competence in communicating accurately and reliably in diverse contexts including academic, professional and the society at large using multiple tools and mediums.</li>
                    <li><strong>Entrepreneurial Spirit:</strong> Display willingness to seek out opportunities, take calculated risks, lead, and innovate in diverse contexts</li>
                    <li><strong>Individual and Collaborative Work:</strong>Ability to function effectively towards realization of a common goal, both at the individual and team level, in diverse settings.</li>
                    <li><strong>Indian Context:</strong> Capable of taking a critical, informed, and action-oriented approach taking into account various facets of India’s diversity.</li>
                    <li><strong>Good Citizenship:</strong>Capacity to apply knowledge and skills to contribute positively to the creation of just, inclusive, tolerant, and environmentally sustainable communities, and demonstrate, by doing, the importance of participating in the governance structures of one’s profession and society</li>
                    <li><strong>Personal Growth and Leadership:</strong> Ability to examine, analyze and reflect upon knowledge and experiences, practice physical and mental wellness, create a personal roadmap for financial well-being, resilience, self-reliance, and articulate a sense of purpose in life.</li>
                    <li><strong>Life-long Learning:</strong> Demonstrate willingness and ability to independently undertake and sustain pursuit of knowledge and acquisition of skills for betterment of self, profession and society. </li>
                </ul>
            </div>

            <div class="content" id="psos">
                <h2>Program Specific Outcomes (PSOs)</h2>

                <ul>
                    <li>Demonstrate ability to critically analyze economic, legal, and business environments and to synthesize business situations to make sound business decisions. </li>
                    <li>Display understanding of basic tools of management such as quantitative analysis, financial accounting, research methods and application of information technology. </li>
                    <li>Demonstrate basic knowledge of functional areas of business such as Finance, Marketing, Operations, Business Analytics, Entrepreneurship and Human Resource Management. </li>
                    <li>Demonstrate expertise and advanced knowledge in the chosen area of specialization</li>
                    <li>Demonstrate ability to analyze and identify business opportunities and to develop business models for Industry 4.0 and beyond.</li>
                    <li>Display knowledge, skills, and attitude for employability to succeed in a global VUCA business environment.</li>                    
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


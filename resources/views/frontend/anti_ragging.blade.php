@extends('frontend.layout')
@section('title', 'Anti Ragging')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="{{asset('css/tabs_container.css')}}">
<link rel="stylesheet" href="{{asset('css/test-form.css')}}">

<style>    
    .main h3, .main h1{
        font-family: yale, TimesNewRoman, Times New Roman, Times, Baskerville, Georgia, serif;
        font-weight: bold;
    }



    .main p{
        /* font-family: Mallory, 'Gill Sans', 'Gill Sans MT', Calibri, Arial, sans-serif; */
        line-height: 1.6;
        font-weight: 400;
        font-size: 18px;
    }

    .nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
    max-width: 300px; /* Adjust width as needed */
}

.nav-list li {
    font-family: "Arial", sans-serif; /* Choose a clean font */
    font-size: 16px;
    font-weight: normal;
    padding: 15px;
    border-bottom: 1px solid #ddd; /* Light separator */
    text-align: left;
    cursor: pointer;
    transition: background 0.3s;
}

.nav-list li:hover {
    background-color: #f5f5f5; /* Light hover effect */
}


.card{
        height: 400px;
        background-position: left;
        background-position-x: left;
        background-size: contain;
        background-repeat: no-repeat;
        margin-bottom: 50px;
        border: none;
        border-bottom: 1px solid #555;
    }

    .blog-card .card-body img{
        width: 250px; 
        height: 250px; 
        object-fit: cover; 
        flex-shrink: 0;
    }

    .main .content{
        margin:20px auto;
    }

    .content li{        
        font-size: 18px;
        line-height: 1.5;
        margin: 20px 0;
    }
    

    @media screen and (max-width:990px){
        .nav-responsive-div{
            overflow-x: auto;
            white-space: nowrap; /* Prevent text from wrapping */
            position: sticky;
            top: 135px;
            /* background: #333; */
            background-color: #fff;
            /* box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5); */
            border-bottom: 1px solid #888;

        }
        .nav-responsive{
            display: flex;
            width: 100%;                         
        }
        .nav-responsive li{
            flex: 1 1 100%;
            text-align: left;
            cursor: pointer;
        }

        .nav-responsive li.active-nav {
            border-bottom: 1px solid #000;
        }
    }


    .accordion-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        .accordion-header {
            background: #f4f4f4;
            padding: 15px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s;
            user-select: none;            
        }
        .accordion-header:hover {
            background: #ddd;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            padding: 0 15px;
            background: #fff;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }
        .accordion-item.active .accordion-content {
            max-height: max-content;
            padding: 15px;
            border-left: 1px solid #888;
            border-right: 1px solid #888;
            border-bottom: 1px solid #888;
        }

        .accordion-item.active .accordion-header i{
            transform: rotateZ(90deg);
            transition: transform 0.3s ease;
        }

        .btn-primary_2{
            background-color: var(--e-global-color-primary) !important;
        }


        .banner {
            height: 73vh;
            position: relative;
            overflow: hidden;            
        }
        .banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .counter-section {
            position: absolute;
            top: 50%;
            right: 5%;
            transform: translateY(-50%);            
            color: white;
            padding: 40px;
            width: 35%;
        }
        .counter-table {
            width: 100%;
            padding: 20px;
            background-color: #fff;
        }
        .counter-table td {
            padding: 10px;
            text-align: left;
            cursor: pointer;
        }
        .counter-table p{
            font-weight: bold;
        }
        .counter {
            font-size: 2.5rem;
            font-weight: bold;
            color: red;
        }

    
        

    .comprehensive-data{
        display: flex;
        justify-content: center;
        align-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .comprehensive-data li{
        cursor: pointer;
        padding: 20px;
        width: 150px;
        text-align: center;
        background-color: var(--e-global-color-primary);
        color: #fff;        
    }
    .comprehensive-data li:hover{
        box-shadow: .1rem .1rem 10px rgba(00, 0, 0, 0.5);
    }

    @media screen and (max-width:500px){

        .comprehensive-data{
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-content: center;
            gap: 20px;
            overflow-x:  auto;            
        }
        .comprehensive-data li{
            cursor: pointer;
            padding: 8px;
            width: 70px;
            font-size: 12px;
            text-align: center;
            background-color: var(--e-global-color-primary);
            color: #fff;        
        }   
    }

    .owl-carousel .item{
        padding: 20px;
    }
    .owl-carousel .item img {
        width: 90%;
        height: 200px; /* Adjust as needed */
        object-fit: contain;
        border-radius: 10px;
        background-blend-mode: color-burn;
        mix-blend-mode: multiply;            
    } 
    .section-dark{
        position: relative;
    }

    .section-dark::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }
    .card .card-img-top{
        max-height: 344px !important;
    }

</style>

@section('main_content') 
<div data-elementor-type="wp-post" data-elementor-id="436" class="elementor elementor-436 elementor-304">
    {{-- here it is --}}      
    <section class="banner" style="background: url('../images/anti_ragging.jpg') no-repeat center center / cover;"></section>
    <script>
        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                let count = +counter.innerText;
                const increment = target / 100;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 50);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    </script>
    <section class="container-lg p-4">
        {{-- <p style="font-family: Arial, Helvetica, sans-serif; margin: 30px 0 50px 0;">HOME > <span class="text-primary">ADMISSIONS</span></p> --}}
        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-lg-12 main" style="font-family:Arial, Helvetica, sans-serif;">
                <h1 style="margin:20px 0; font-weight:100; line-height:1.6;">SIMT - Anti-Ragging Policy</h1>                
                <h5><i>"Ragging is a Criminal Offense. Ragging is Strictly Prohibited."</i></h5>

                <h6><b>SIMT follows a ZERO TOLERANCE APPROACH TOWARDS RAGGING, PHYSICAL or MENTAL ABUSE. SIMT advocates Psychological Safety </b></h6>
                <p>At SIMT, we are committed to fostering an environment that is safe, respectful, and inclusive for all students. We will not tolerate ragging in any form and strictly comply with the State Government and Central Government guidelines and regulations to eliminate this negative practice.</p>                

                <p>The policy aims to create an educational, living environment that is free from intimidation, hostility or abuse ensuring a congenial environment for all.</p>
                <br>
                <div class="content"> 
                    <h4>Nomenclature followed- the Consequences of Ragging</h4>                   
                    <p>Any student found to have violated the Terms of Anti-Ragging may face devastating consequences, including: </p>

                    <ul>
                        <li style="list-style: upper-alpha;">Filing of a formal complaint by the offended with an Initial Review by the Anti-Ragging Committee</li>
                        <li style="list-style: upper-alpha;">Assignment of an Investigator by the Anti-Ragging Committee </li>
                        <li style="list-style: upper-alpha;">Written Notice to Parties mentioning the Objection by the Anti-Ragging  Committee</li>
                        <li style="list-style: upper-alpha;">Written Statement from Respondent</li>
                        <li style="list-style: upper-alpha;">Submission of Investigation report by the Anti-Ragging Committee with penalization which could be suspension/rustication or other measures as deemed fit</li>
                    </ul>

                    <strong>SIMT Established Anti-Ragging Committee</strong>
                    <p>We critically ensure compliance with all anti-ragging laws and regulations that are in effect, and actively monitor and oversee the prevention of ragging at the institution.</p>

                    {{-- <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Designation</th>
                                <th>Email id.</th>
                                <th>Contact</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. S. S. S. Rao</td>
                                <td>Chairman</td>
                                <td>Anti-Ragging Committee</td>
                                <td>sssr@simt.ac.in</td>
                                <td>94400 12345</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. S. S. S. Rao</td>
                                <td>Member</td>
                                <td>Anti-Ragging Committee</td>
                                <td>sssr@simt.ac.in</td>
                                <td>94400 12345</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. S. S. S. Rao</td>
                                <td>Member</td>
                                <td>Anti-Ragging Committee</td>
                                <td>sssr@simt.ac.in</td>
                                <td>94400 12345</td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>

                <div class="content">
                    <h4>Our Proactive Approach to Addressing Ragging Incidents:</h4>
                    <p>Upon receiving a recommendation from the Anti-Ragging Squad or any information about a reported ragging incident, the Head of the Institution must take prompt action: </p>

                    <ul>
                        <li style="list-style:disc;"><strong>Legal Analysis:</strong> The Head must promptly determine if the reported incident amounts to a cognizable offence under the penal laws. </li>
                        <li style="list-style:disc;"><strong>Filing FIR:</strong> If it is established that a case is made out, the Head will file a First Information Report (“FIR”) with the police or appropriate local authorities, either directly or through an authorized member of the Anti-Ragging Committee.</li>
                        <li style="list-style:disc;"><strong>Internal Inquiry:</strong> In parallel, the institution will, through an inquiry (to be conducted in such a manner that is deemed appropriate), initiate its own comprehensive inquiry into the facts of the incident.</li>
                        <li style="list-style:disc;"><strong>Immediate Action:</strong> Suitable action will be taken against the student(s) involved, based on the inquiry findings and whether the latter has occurred with or without deliberation having taken place in an Anti-Ragging Committee meeting. </li>
                        <li style="list-style:disc;"><strong>Convening of the Committee:</strong> The Head of the Institution, as the Chair of the Anti-Ragging Committee, will summon a meeting of all members of the Committee within twenty-four hours of receipt of information/recommendation regarding a ragging incident to discuss and determine the action to be recommended.</li>
                    </ul>
                </div>

                <div class="content">
                    <h4>Guaranteeing Fast and Fair Resolution</h4>
                    <p>SIMT is dedicated to ensuring a prompt and fair resolution of all reported cases of ragging. The internal enquiry process by the institution will begin and will be concluded without delay on no occasion later than seven days from the occurrence being reported.</p>

                    <ul>
                        <li><strong>The Role of an Anti-Ragging Committee in the Enquiry:</strong> The Anti-Ragging Committee will undertake an enquiry into all instances of ragging referred to it by the Head of the Institution, or upon receiving any information pertaining to such an incident.</li>
                        <li><strong>Fair and Transparent Process:</strong> The Anti-Ragging Committee will provide and conduct the enquiry with respect to a fair and transparent process and will naturally behove to the principles and practices of natural justice.</li>
                        <li><strong>Opportunity for Fair Hearing:</strong> The student(s) accused of ragging and any other pertinent witnesses will have an appropriate fair opportunity to respond to the facts, documents, or circumstances concerning the alleged incident regarding their conduct.</li>
                        <li><strong>Consideration of All Relevant Evidence:</strong> The Committee will take careful consideration and review all evidence presented and any other relevant issues as appropriate.</li>
                        <li><strong>Recommendations to the Head:</strong> Upon consideration of the enquiry, the Anti-Ragging Committee will write a full report with their recommendations and submit the report to the Head for appropriate action.</li>
                    </ul>
                    <p>SIMT is committed to ensuring that every student can learn and develop in a safe and supportive environment that is free of ragging. We invite all students to report any incidents of ragging without fear. Your physical and psychological safety and well-being is our primary concern.</p>
                </div>


                
            </div>            
        </div>
    </section>
</div>
@endsection

<script>
    $(document).ready(function() {
    $(".nav-responsive li").on("click", function() {
        $(".nav-responsive li").removeClass("active-nav"); // Remove class from all items
        $(this).addClass("active-nav"); // Add class to the clicked item
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,  // Enables infinite looping
            margin: 10,  // Space between images            
            autoplay: true,  // Enables auto-slide            
            dots:false,
            autoplayTimeout: 3000,  // Slide changes every 3 seconds            
            responsive: {
                0: { items: 1 },  // 1 image per slide on small screens
                600: { items: 2 },  // 2 images per slide on medium screens
                1000: { items: 3 }  // 3 images per slide on large screens
            }
        });
    });
</script>
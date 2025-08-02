<style>
  body {
    background-color: #f8f9fa;
  }
  footer {
    /* background-color: var(--e-global-color-primary); */
    background-color: #213153;
    color: #fff;
  }
  footer h3 {
    color: #fff !important;
  }
  .footer-section ul {
    padding-left: 0;
    list-style: none;
  }
  .footer-section ul li {
    margin-bottom: 6px;
    color: #888;
    cursor: pointer;
  }
  .footer-section ul li a{
      text-decoration: none;
      color: #888;
  }
  .footer-section p{
      color: #888;
      cursor: pointer;
  }
  .footer-section p:hover{
      color: #fff;
  }
  .footer-section ul li:hover{
      color: #fff;
  }

  .footer-section ul li a:hover{
      color: #fff;
  }
  .red-strip {
    background-color: var(--e-global-color-accent);
    color: #fff;
  }
  .footer-about {
    color: #ccc;
    font-size: 15px;
    line-height: 1.6;
    margin-top: 15px;
  }
  .copyright-strip {
  background-color: #111;
  color: #ccc;
  font-size: 14px;
}

.copyright-strip a {
  color: #ccc;
  text-decoration: none;
}

.copyright-strip a:hover {
  text-decoration: underline;
}

.social-icons a{
  padding-right: 10px;    
  font-size: 30px;
  color: #fff;
}

.submit-btn:hover{
    background-color: var(--e-global-color-primary) !important;
}
</style>


<!-- Contact Form Section -->
{{-- <div class="container my-5">
  <div class="card p-4 shadow">
    <h3 class="mb-4">Contact Us</h3>
    <form>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>Your Name*</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
          <label>Your Email*</label>
          <input type="email" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
          <label>Your Phone Number*</label>
          <input type="tel" class="form-control" required>
        </div>          
        <div class="col-md-6 mb-3">
          <label>Select Program*</label>
          <select class="form-control" required>
            <option value="">Select program</option>
            <option>Computer Science and Engineering</option>
            <option>Electronics & Communication Engineering</option>
            <option>Computer Science & Information Technology</option>
            <option>CSE (Artificial Intelligence & Machine Learning)</option>              
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label>Your City*</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
          <label>Your State*</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary_2  px-5">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div> --}}


<!-- Light Red Background Section -->
<section style="background: linear-gradient(to bottom, #ffffff 0%, #ffffff 50%, #f8f9fa 50%, #f8f9fa 100%); padding: 60px 0;">
  <!-- Contact Form Section -->
  <div class="container">
    <div class="card p-4 shadow" style="border: none;">
      <h3 class="mb-4">Contact Us</h3>   
      
      <div class="alert alert-success alert-dismissible fade show" role="alert" id="successalert" style="display: none;">
        <strong>Success</strong> Enquiry Form submitted.
        <button type="button" onclick="closealert()" style="background-color: transparent !important; color:#000 !important;" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form id="contact-form" method="POST" data-action="{{ route('submit-contact') }}">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your Name*</label>
            <input type="text" name="name" class="form-control" required autocomplete="new-password">
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your Email*</label>
            <input type="email" name="email" class="form-control" max="10" maxlength="10" required autocomplete="new-password">
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your Phone Number*</label>
            <input type="tel" name="phone" class="form-control" required autocomplete="new-password">
          </div>          
          <div class="col-md-6 mb-3">
            <label class="mb-2">Select Program*</label>
            <select class="form-control" name="program" id="select_program" required autocomplete="new-password">              
              <option value="BBA" selected>Bachelor of Business Administration (BBA)</option>            
              <option value="BCA">Bachelor of Computer Application (BCA)</option>            
              <option value="MCA">Master of Computer Application (MCA)</option>            
              <option value="MBA">Master of Business Administration (MBA)</option>            
            </select>
          </div>
          <div class="col-md-6 mb-3" id="specialization_div" style="display: none;">
            <label class="mb-2">Select Specialization*</label>
            <select class="form-control" name="specialization" id="select_specialization" required autocomplete="new-password">              
              <option value=""></option>   
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your State*</label>
            {{-- <input type="text" name="state" class="form-control" required autocomplete="new-password"> --}}
            <select name="state" id="state">
                <option>Select your state</option>                        
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>                        
                <option value="Andaman & Nicobar">Andaman & Nicobar (UT)</option>
                <option value="Chandigarh">Chandigarh (UT)</option>
                <option value="Dadra & Nagar Haveli and Daman & Diu">Dadra & Nagar Haveli and Daman & Diu (UT)</option>
                <option value="Delhi">Delhi [National Capital Territory (NCT)]</option>
                <option value="Jammu & Kashmir">Jammu & Kashmir (UT)</option>
                <option value="Ladakh">Ladakh (UT)</option>
                <option value="Lakshadweep">Lakshadweep (UT)</option>
                <option value="Puducherry">Puducherry (UT)</option>                        
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label class="mb-2">Your City*</label>
            <input type="text" name="city" class="form-control" required autocomplete="new-password">
          </div>          
          <div class="col-12">
            <button type="submit" class="btn btn-primary_2 px-5 submit-btn" style="padding:15px 25px !important; width:200px;">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>


<!-- Google Map -->
{{-- <div class="container my-5">
  <h3 class="text-center mb-3">Our Location</h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.121698538086!2d77.48518659999999!3d28.475881400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceb5380c79ed5%3A0x6614739ef8af810d!2sSITASRM%20ENGINEERING%20AND%20RESEARCH%20INSTITUTE!5e0!3m2!1sen!2sin!4v1744114386712!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
</div> --}}


<!-- Red Strip Section -->
<div class="red-strip py-4 px-3">
  <div class="container d-flex justify-content-between align-items-center">
    <span> Reach Out for More Insights</span>
    <span><i class="fa fa-phone-alt"></i> 0120-4109418 | 0120-4106050</span>
  </div>
</div>

<!-- Footer Section -->
<footer class="text-light pt-5 pb-3 footer" style="padding-left:30px; ">
  <div class="container">
    <div class="row footer-section">
      <!-- SITASRM Info -->
      <div class="col-md-4 mb-4">
        <h3><strong>SITASRM</strong></h3>
        <p>INSTITUTE OF MANAGEMENT & TECHNOLOGY</p>
        <p>{{env('COLLEGE_ADDRESS')}}</p>
        <p>Email – <a href="mailto:info@simt.net.in" class="text-light">info@simt.net.in</a></p>          
        <p>Phone – {{env('COLLEGE_PHONES')}}</p>          
        <div class="social-icons">
          <!-- You can add your icons here -->
          <a href="https://www.facebook.com/people/Sitasrm-Institute-of-Management-and-Technology/61576331637810/"><i class="fab fa-facebook"></i></a>
          <a href="https://wa.me/919560201536"><i class="fab fa-whatsapp"></i></a>
          <a href="https://www.instagram.com/simt.grnoida?igsh=bGt4bHlsOWJ1YTMx"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/sitasrm-institute-of-management-and-technology/"><i class="fab fa-linkedin"></i></a>
          <a href="https://x.com/simt_grnoida?t=8wTK7NZEpqvIycCI7zca1g&s=08"><i class="fa-brands fa-x-twitter"></i></a>
        </div>    
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.0405942689667!2d77.4828914!3d28.4783241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6df3479bf159da6d%3A0xb1082c86eb48a641!2sSITASRM%20INSTITUTE%20OF%20MANAGEMENT%20AND%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1744182360100!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h3>QUICK LINKS</h3>
        <ul class="list-unstyled">
          <li><a href="{{ route('home') }}">HOME</a></li>
          <li><a href="{{ route('about') }}">ABOUT US</a></li>
          <li><a href="#">ACADEMICS</a></li>
          <li><a href="#">CONTROLLER OF EXAMINATIONS</a></li>
          <li><a href="#">INFRASTRUCTURE</a></li>
          <li><a href="#">RESEARCH</a></li>
          <li><a href="#">STUDENT SUPPORT</a></li>
          <li><a href="#">DOWNLOADS</a></li>
          <li><a href="#">POSH COMMITTEE</a></li>
        </ul>
      </div>
      

      <!-- Important Links -->
      <div class="col-md-4 mb-4">
        <h3>IMPORTANT LINKS</h3>
        <ul class="list-unstyled">
          <li><a href="{{route('anti-ragging')}}">ANTI RAGGING COMMITTEE</a></li>
          <li><a href="#">ANTI DRUGS COMMITTEE</a></li>
          <li><a href="{{ route('home') }}">CAREERS</a></li>
          <li><a href="{{ route('privacy-policy')}}">PRIVACY POLICY</a></li>
          <li><a href="{{ route('terms-conditions')}}">TERMS & CONDITIONS</a></li>
          <li><a href="{{ route('fees')}}">FEE STRUCTURE</a></li>
          <li><a href="{{ route('refund')}}">REFUND POLICY</a></li>
          <li><a href="#">SITE MAP</a></li>
          <li><a href="{{route('contact')}}">CONTACT US</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<hr style="padding: 0; margin:0;">

<!-- Copyright Section -->
<div class="bg-dark text-white py-2 px-3 d-flex justify-content-between">
  <div>
    <a href="{{ route('privacy-policy')}}" class="text-white text-decoration-none">Privacy Policy</a>
  </div>
  <div>
    Copyright © SERI
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var url = form.data('action');
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            beforeSend: function () {
                // Optional: show loading spinner or disable button
            },
            success: function (response) {                              
                $('#successalert').fadeIn(); // Show the alert
                form[0].reset(); // Reset form
                setTimeout(() => {
                    $('#successalert').fadeOut();
                }, 5000);

                
                
                // Optional: close modal/popup
            },
            error: function (xhr) {
                let errors = xhr.responseJSON?.errors;
                if (errors) {
                    let firstError = Object.values(errors)[0][0];
                    alert('Error: ' + firstError);
                } else {
                    alert('An error occurred. Please try again.');
                }
            }
        });
    });
});

const data = {
    'BBA' : [],
    'BCA' : [],
    'MCA' : [],
    'MBA' : ['HR', 'Marketing', 'Finance', 'Business Analytics'],
  };

  $('#select_program').on('change', function (){
    let selected = $('#select_program').find('option:selected').val();    

    let specializationDropdown = $('#select_specialization');
    specializationDropdown.empty();
    

    let options = data[selected];

    if (options && options.length) {
        specializationDropdown.append(`<option value="">--Select Specialization--</option>`);
        options.forEach(function (opt) {
          specializationDropdown.append(`<option value="${opt}">${opt}</option>`);
        });
        $('#specialization_div').show();
    }else {
        specializationDropdown.append(`<option value=""></option>`);
        $('#specialization_div').hide();
    }
    console.log(options);
  })
</script>

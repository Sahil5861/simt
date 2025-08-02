<style>
    .newpopup{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff3;
        padding: 20px;   
        width: 100%;
        max-height: 100vh;
        min-height: 100vh;
        z-index: 999;
        display: none;
        justify-content: flex-end;
        align-items: center;
    }
    .newpopup::after{
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        height: 90%;
        background: url('../images/popup_image.jpg') center center no-repeat;
        background-size: cover;
        z-index: 999;        
    }

    .newpopup .form-section{
        padding: 20px;        
        height: 95vh;
        width: 600px;
        background-color: #fff;        
        z-index: 1000;
        margin-right: 100px;
    }
    .newpopup .form-section form{
        display: flex;        
        flex-direction: column; 
        padding: 50px 10px; 
        position: relative;      
    }

    .newpopup .form-section form input, .newpopup .form-section form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px !important;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important
    }

    .newpopup form button {
        background: var(--e-global-color-accent);
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .close-btn {
        position: absolute;
        top: -30px;
        right: -20px;
        background: transparent !important;
        color: #000 !important;
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 40px !important;
    }
    .form-section h3{
        font-weight: 100;
        color: #000;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.5;
        font-size: 20px;
        
    }

    .checkbox-container {
        display: flex;
        align-items: center;
        justify-content: flex-start;            
        margin-top: 10px;
    }

    .tel-input{
        width: 80% !important;
    }


    @media screen and (max-width : 1000px){
        .newpopup{
            top: 0%;
            left: 0%;
            width: 100vw;
            transform: translate(0%, 0%);
            align-items: center;
            justify-content: center;                                    
        }
        .newpopup::after{
            content: "";
            display: none;
        }

        .newpopup .form-section{
            min-height: 70vh;
            padding-top: 40px;
            height: max-content;
            width: 95%;
            justify-content: flex-end;  
            border: 1px solid #000;    
            margin-right: 0px;      
        }

        .tel-input{
            width: 60% !important;
        }

        .close-btn {
            position: absolute;
            top: -52px;
            right: -25px;
            background: transparent !important;
            color: #000 !important;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 40px !important;
        }

        .alert button{
            background-color: transparent !important;
            color: #000;
            font-size: 24px !important;
        }


    }
</style>



<div class="newpopup" id="popup">
    <div class="form-section">
        <form id="admission-enquiry-form" method="POST" data-action="{{ route('add-enquiry') }}">
            @csrf
            <div class="alert alert-success alert-dismissible d-none" id="successalert_popup">
                <strong>Success</strong> Enquiry Form submitted.
                <button type="button" onclick="closealert()" class="close" data-dismiss="alert" aria-label="Close" style="background-color: transparent !important;border: 1px solid #000;color: #000;font-weight: bold;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <h3>Get in Touch</h3>
            <button type="button" class="close-btn" onclick="closePopup()">&times</button>
            <div class="form-group">
                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name" required pattern="[A-Za-z\s]+">
                <script>
                    document.getElementById('name').addEventListener('input', function (e) {
                        this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Remove numbers and special characters
                    });
                </script>
            </div>
            <div class="form-group">
                <input class="form-control" id="email" name="email" type="email" placeholder="Enter email address" required>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" style="background: transparent; width:100px; border-radius:0;" id="telPrepend">+ 91</span>
                    </div>
                    <input type="tel" class="form-control tel-input" style="height: 38px;" id="phone" name="phone" placeholder="Phone number" required 
                    pattern="[0-9]+" title="Only numbers are allowed" inputmode="numeric" maxlength="10" max="10">
                    <script>
                        document.getElementById('phone').addEventListener('input', function (e) {
                            this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
                        });
                    </script>
                </div>
            </div>
            <div class="form-group">
                <select class="form-control" name="program" id="select_program_apply" required>              
                    <option value="BBA" selected>Bachelor of Business Administration (BBA)</option>            
                    <option value="BCA">Bachelor of Computer Application (BCA)</option>            
                    <option value="MCA">Master of Computer Application (MCA)</option>            
                    <option value="MBA">Master of Business Administration (MBA)</option>            
                </select>
            </div>

            <div class="form-group" id="specialization_div_apply" style="display: none;">
                <select class="form-control" name="specialization" id="select_specialzation_apply" required autocomplete="new-password">                                             
                </select>
            </div>
            
            <div class="form-group">                        
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
            <div class="form-group">
                <input type="text" name="city" id="city" class="form-control" required placeholder="Enter Your City" autocomplete="new-password">
            </div>
            <button class="btn btn-sm btn-primary" style="width: 100px;" type="submit">Submit</button>
            <div class="box" style="width: 100%; display: flex; align-items: center; gap: 10px;padding: 10px;">
                <input type="checkbox" id="customControlAutosizing" name="checked" style="margin: 0; width: 16px; height: 16px;">
                <label for="customControlAutosizing" style="margin-bottom: 0; font-size: 11px; user-select:none; cursor: pointer;">
                    By clicking on the above button, I authorize {{env('COLLEGE_NAME_SHORT')}} representative to contact me via phone and/or email.
                </label>
            </div>
        </form>
    </div>
</div>


<script>
    function openPopup() {
        document.getElementById("popup").style.display = "flex";
        document.getElementById("content").classList.add('blur');
        document.getElementById("mobile-menus").style.display = 'none';
        document.body.style.overflow = "hidden"; // Disable scrolling
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
        document.getElementById("content").classList.remove('blur');
        document.getElementById("mobile-menus").style.display = '';
        document.body.style.overflow = "auto"; // Enable scrolling
    }

    function closealert() {
        $('#successalert_popup').alert('close')
    }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#admission-enquiry-form').on('submit', function (e) {
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
                $('#successalert_popup').addClass('show').removeClass('d-none');                
                form[0].reset(); // Reset form
                // setTimeout(() => {
                //     $('#successalert_popup').fadeOut();
                // }, 5000);
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

const data_apply = {
    'BBA' : [],
    'BCA' : [],
    'MCA' : [],
    'MBA' : ['HR', 'Marketing', 'Finance', 'Business Analytics'],
  };

  $('#select_program_apply').on('change', function (){    
    let selected = $('#select_program_apply').find('option:selected').val();    

    let specializationDropdown = $('#select_specialzation_apply');
    specializationDropdown.empty();
    

    let options = data_apply[selected];

    if (options && options.length) {
        specializationDropdown.append(`<option value="">--Select Specialization--</option>`);
        options.forEach(function (opt) {
          specializationDropdown.append(`<option value="${opt}">${opt}</option>`);
        });
        $('#specialization_div_apply').show();
    }else {
        specializationDropdown.append(`<option value=""></option>`);
        $('#specialization_div_apply').hide();
    }
    console.log(options);
  })
</script>









{{-- <form>
    <h3>Get in Touch</h3>
    <div class="form-group">
        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name" required pattern="[A-Za-z\s]+">
        <script>
            document.getElementById('name').addEventListener('input', function (e) {
                this.value = this.value.replace(/[^A-Za-z\s]/g, ''); // Remove numbers and special characters
            });
        </script>
    </div>
    <div class="form-group">
        <input class="form-control" id="email" name="email" type="email" placeholder="Enter email address" required>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background: transparent; width:100px; border-radius:0;" id="telPrepend">+ 91</span>
            </div>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number" required 
            pattern="[0-9]+" title="Only numbers are allowed" inputmode="numeric" maxlength="10" max="10">
            <script>
                document.getElementById('phone').addEventListener('input', function (e) {
                    this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
                });
            </script>
        </div>
    </div>
    <div class="form-group">
        <select name="branch" id="branch">
            <option value="">Select program</option>
            <option value="cse">Computer Science and Engineering</option>
            <option value="ai_ml">CSE (Artificial Intelligence and Machine Learning)</option>
            <option value="cs_it">Computer Science & Information Technology</option>
            <option value="ece">Electronics & Communication Engineering</option>
        </select>
    </div>
    <div class="form-group">                        
        
    </div>
    <button class="btn btn-sm btn-primary" style="width: 100px;" type="submit">Submit</button>
    <div class="box" style="width: 100%; display: flex; align-items: center; gap: 10px;padding: 10px;">
        <input type="checkbox" id="customControlAutosizing" name="checked" style="margin: 0; width: 16px; height: 16px;">
        <label for="customControlAutosizing" style="margin-bottom: 0; font-size: 11px; user-select:none;">
            By clicking on the above button, I authorize {{env('COLLEGE_NAME_SHORT')}} representative to contact me via phone and/or email.
        </label>
    </div>
</form> --}}



{{-- <select name="state" id="state">
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
</select> --}}
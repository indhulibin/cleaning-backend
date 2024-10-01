<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- iziToast CSS -->
    <link rel="stylesheet" href="{{ asset('dist_front/css/iziToast.min.css') }}">
    <!-- iziToast JS -->
    <script src="{{ asset('dist_front/js/iziToast.min.js') }}"></script>

    <style>
        /* Remove border from the button */
        button#decrement {
            border: none;
            background-color: transparent; /* Optional: Makes the button's background transparent */
            outline: none; /* Optional: Removes the focus outline */
        }
        button#increment {
            border: none;
            background-color: transparent; /* Optional: Makes the button's background transparent */
            outline: none; /* Optional: Removes the focus outline */
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="ic col-6 col-md-3">
                        <a class="navbar-brand" href="#" id="icon"><span class="first">Clean</span><span class="second">ly</span></a>
                    </div> 
                    <div class="ph col-6 col-md-9">   
                        <p id="phone">0434-951-251</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid booking">
        <div class="container">
          <div class="row justify-content-center">
            <span class="p1">Book your cleaning.</span>
          </div>
          <div class="row justify-content-center">
            <span class="p2">It's time to book our cleaning service for your home or apartment.</span>
          </div>
          <div class="row gx-5">
            <div class="col-lg-9 col-md-12 col-sm-12">
               <div class="row p3box">
                <div class="p3">
                    Cleaning Preferences
                </div>
               </div>
               <div>
                <br>
                <form action="{{ route('bookingSubmission') }}" method="POST" onsubmit="return validateForm()" name="bookingForm">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                          @error('name')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">
                          @error('phone')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                          @error('email')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">What type of cleaning?</label>
                      <div class="col-sm-9">
                        <select class="form-select form-select-lg mb-3" name="type">
                            <option value="">Select Type</option>
                            <option value="Standard" {{ old('type') == 'Standard' ? 'selected' : '' }}>Standard</option>
                            <option value="Deep" {{ old('type') == 'Deep' ? 'selected' : '' }}>Deep</option>
                        </select>
                        @error('type')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">How many bedrooms</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" name="bedroom" value="{{ old('bedroom') }}">
                        @error('bedroom')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">How many bathrooms</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="bathroom" value="{{ old('bathroom') }}">
                          @error('bathroom')
                            <div class="error-message" style="color: red;">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Need any extras?</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Clean Oven" name="extras[]">
                                <label class="form-check-label" for="inlineCheckbox1">Clean Oven</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Clean Windows" name="extras[]">
                                <label class="form-check-label" for="inlineCheckbox2">Clean Windows</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Clean Fridge" name="extras[]">
                                <label class="form-check-label" for="inlineCheckbox3">Clean Fridge</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Ironing" name="extras[]">
                                <label class="form-check-label" for="inlineCheckbox4">Ironing</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Do you have any special requirements</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="requirements"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Choose a date</label>
                        <div class="col-sm-9">
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" name="appointment_date" id="dateSelect">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                            @error('appointment_date')
                                <div class="error-message" style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Select your time corresponding date</label>
                        <div class="col-sm-9">
                            <select id="timeSolt" class="form-control" name="time_id"></select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Appointment</button>
                </form>
               </div>
               <br>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="row p4box">
                    <div class="p4">
                        Booking Summary
                    </div>
                </div>
                <div class="row">
                    <div class="fesilities">
                        @if(isset($clientDetails) && is_array($clientDetails))
                        <ul>
                        <li><i class="fa fa-person" aria-hidden="true"></i>
                        <p>{{  $clientDetails['name'] }}</p>
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                            <p>{{  $clientDetails['phone'] }}</p>
                        </li>
                        <li><i class="fa fa-paint-brush" aria-hidden="true"></i>
                            <p>{{  $clientDetails['type'] }}</p>
                        </li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>
                        <p>
                            @php
                            // Retrieve the appointment date
                            $appointmentDate = $clientDetails['appointment_date'];
            
                            // Create a DateTime object from the appointment date
                            $date = new DateTime($appointmentDate);
            
                            // Format the date as d/m/Y
                            $formattedDate = $date->format('d/m/Y');
                            @endphp
            
                            {{ $formattedDate }}
                        </p>
                        </li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>
                        <p> 
                            @php
                            $timeSlot = \App\Models\TimeSlot::find($clientDetails['time_id']);
                            @endphp
                           @if ($timeSlot)
                           @php
                           // Format the time as 12-hour format with AM/PM
                           $time = new DateTime($timeSlot->slot);
                           echo $time->format('g:i A');
                           @endphp
                       @else
                           No time slot available
                       @endif
                        </p>
                        </li>
                        <li><i class="fa fa-refresh" aria-hidden="true"></i>
                        <p>One time</p>
                        </li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>1650 Broadway Apt. 23B New York, NY 10023</p>
                        </li>
                        </ul>
                        @php
                        Session::forget('client_details');
                        @endphp
                        @endif
                        
                    </div>
                </div>
               
            </div>
          </div>
        </div>
    </div>

    <!-- Flash success message -->
    @if(session('success'))
        <script>
            iziToast.success({
                title: '',
                position: 'topRight',
                message: '{{ session('success') }}',
            });
        </script>
    @endif

    <!-- Flash error message -->
    @if($errors->any())
        @foreach($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '{{ $error }}'
                });
            </script>
        @endforeach
    @endif

    <!-- Flash error message -->
    @if(session('error'))
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ session('error') }}',
            });
        </script>
    @endif

    <script type="text/javascript">

    $(document).ready(function(){
    // Get today's date
    var today = new Date();
    today.setHours(0, 0, 0, 0); // Reset time part to ensure correct comparison

    // Array of holiday dates (in 'dd/mm/yyyy' format)
    var holidays = ["25/12/2024", "01/01/2024"]; // Add more holiday dates as needed

    // Initialize the datepicker with today as the start date
    $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true,
        startDate: today, // This enables today and disables all previous dates
        daysOfWeekDisabled: [0, 6], // Disable weekends (Sunday=0, Saturday=6)
        beforeShowDay: function(date){
            var formattedDate = ('0' + date.getDate()).slice(-2) + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + date.getFullYear();
            // Disable holidays
            if (holidays.indexOf(formattedDate) !== -1) {
                return false;
            }
            return true;
        }
    });
});


        function validateForm() {
            // Get form field values
            var name = document.forms["bookingForm"]["name"].value;
            var phone = document.forms["bookingForm"]["phone"].value;
            var email = document.forms["bookingForm"]["email"].value;
            var type = document.forms["bookingForm"]["type"].value;
            var bedroom = document.forms["bookingForm"]["bedroom"].value;
            var bathroom = document.forms["bookingForm"]["bathroom"].value;
            var appointmentDate = document.forms["bookingForm"]["appointment_date"].value;

            // Regular expressions for validation
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Validate name
            if (name == "") {
                alert("Name must be filled out");
                return false;
            }

            // Validate phone number
            if (phone == "") {
                alert("Phone number must be filled out");
                return false;
            }

            // Validate email
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address");
                return false;
            }

            // Validate type
            if (type == "") {
                alert("What type of cleaning you want");
                return false;
            }

            // Validate bedroom
            if (bedroom == "") {
                alert("Bedroom detail must be filled out");
                return false;
            }

            // Validate bathroom
            if (bathroom == "") {
                alert("Bathroom detail must be filled out");
                return false;
            }

            // Validate appointment date
            if (appointmentDate == "") {
                alert("Please select an appointment date");
                return false;
            }

            // If all validations pass
            return true;
        }

        $(document).ready(function() {
            $('#dateSelect').change(function(event) {
                var idDate = this.value;
                $('#timeSolt').html('');
                if (idDate) {
                    // The variable idDate has a value
                    console.log("idDate has a value: " + idDate);
                } else {
                    // The variable idDate does not have a value
                    console.log("idDate is null, undefined, or empty.");
                }
                $.ajax({
                    url: "/api/fetch-time",
                    type: 'POST',
                    dataType: 'json',
                    data: {appointment_date: idDate, _token: "{{ csrf_token() }}"},
                    success: function(response) {
                        $('#timeSolt').html('<option value="">Select Time</option>');
                        $.each(response, function(key, value) {
                            $('#timeSolt').append('<option value="' + value.id + '">' + value.slot + '</option>');
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>

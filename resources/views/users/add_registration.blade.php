
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>My PHP Contact Form</title>
     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
     <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
 </head>

 <body>
     <div class="form" >
         <div class="main">
             <form action="{{ route('user.store') }}" method="POST">
                @csrf
                 <div class="single-form">
                     <label>First Name</label>
                     <input type="text" name="first_name" placeholder="Enter your Name">

                 </div>

                 <div class="single-form">
                     <label>Last Name</label>
                     <input type="text" name="last_name" placeholder="Enter your Last Name">

                 </div>

                 <div class="single-form">
                     <label> Email</label>
                     <input type="email" name="email" placeholder="Enter your Email">
                 </div>

                 <div class="single-form">
                     <label>Phone Number</label>
                     <input type="number" name="phone_number" placeholder="Enter your Phone Number">
                 </div>

                 <div class="">
                     <label>Gender</label>
                     <label>Male </label>
                     <input type="radio" name="gender" >
                     <label>Female </label>
                     <input type="radio" name="gender" >
                 </div>

                 <div class="single-form">
                     <label>Do you Have NID? </label>
                     <select id="nid_select">
                         <option value="yes">Yes</option>
                         <option value="no">No</option>
                     </select>
                 </div>

                 <div id="nid_form" >

                 </div>
                 <script type="text/javascript">

                    $(document).on("change", "#nid_select", function(){
                    if($(this).val() == "yes"){

                    var txt = "";
                    txt +='<label>NID Number</label><input type="number" name="nid" placeholder="Enter your NID Number">';

                        $("#nid_form").html(txt);
                    } else

                $("#nid_form").html(" ");
                });


                     </script>

                 <div>
                     <button type="submit">Submit</button>
                 </div>
             </form>
         </div>
     </div>




 </body>

 </html>

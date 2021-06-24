<html>
    <head>
      <link rel="stylesheet" href="css/register.css">
        <script type="text/javascript" src = "register.js"></script>
    </head>
    <body>
        <?php
$db=mysqli_connect('localhost','root','','railway pantry system') or die("could not connect to database");
$errors=array();
if(isset($_POST['Register']))
{
    $emailclient=$_POST['email'];
    mail("$emailclient","Registration Successful!",'You Have Succesfully Registered Your Account Try Logging In Now!','From: irctc12102020@gmail.com');
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $securityquestion=mysqli_real_escape_string($db,$_POST['securityquestion']);
    $securityanswer=mysqli_real_escape_string($db,$_POST['securityanswer']);
    $firstname=mysqli_real_escape_string($db,$_POST['firstname']);
    $middlename=mysqli_real_escape_string($db,$_POST['middlename']);
    $lastname=mysqli_real_escape_string($db,$_POST['lastname']);
    $gender=mysqli_real_escape_string($db,$_POST['gender']);
    $dob=mysqli_real_escape_string($db,$_POST['dob']);
    $occupation=mysqli_real_escape_string($db,$_POST['occupation']);
    $mstatus=mysqli_real_escape_string($db,$_POST['mstatus']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $mobile=mysqli_real_escape_string($db,$_POST['mobile']);
    $nationality=mysqli_real_escape_string($db,$_POST['nationality']);
    $flat=mysqli_real_escape_string($db,$_POST['flat']);
    $street=mysqli_real_escape_string($db,$_POST['street']);
    $area=mysqli_real_escape_string($db,$_POST['area']);
    $pincode=mysqli_real_escape_string($db,$_POST['pincode']);
    $state=mysqli_real_escape_string($db,$_POST['state']);
    $city=mysqli_real_escape_string($db,$_POST['city']);
    $postoffice=mysqli_real_escape_string($db,$_POST['postoffice']);
    $phone=mysqli_real_escape_string($db,$_POST['phone']);
    $sbi=mysqli_real_escape_string($db,$_POST['sbi']);
    $tc=mysqli_real_escape_string($db,$_POST['tc']);
    $checkuni="SELECT * FROM usertable WHERE username='$username' LIMIT 1";
    $results=mysqli_query($db,$checkuni);
    $user=mysqli_fetch_assoc($results);
    $p=0;
    if($user)
    {
        if($user['username']==$username)
        {
            echo '<script type="text/javascript">alert("Username Already Exists, Please Try a Different One!");</script>';
            $p=1;
        }
    }
    if($p==0)
    {
        $query="INSERT INTO usertable (username,password,securityquestion,securityanswer,firstname,middlename,lastname,gender,dob,occupation,mstatus,email,mobile,nationality,flat,street,area,pincode,state,city,postoffice,phone,sbi,tc) VALUES('$username','$password','$securityquestion','$securityanswer','$firstname','$middlename','$lastname','$gender','$dob','$occupation','$mstatus','$email','$mobile','$nationality','$flat','$street','$area','$pincode','$state','$city','$postoffice','$phone','$sbi','$tc')";
        mysqli_query($db,$query);
        header("Location:login.php");
    }

    if($sbi=="on")
    {
        $emailclient=$_POST['email'];
        mail("$emailclient","My Subject",'check this link for sbi card details--> https://www.sbicard.com/en/personal/credit-cards/travel/irctc-sbi-platinum-card.page','From: irctc12102020@gmail.com');
    }
}
?>
    <div class = "container">
    <div class="header">
        <center><h2>Individual Registration</h2></center>
        <br>
    </div>
    <form class="form" action= "" method="post" onsubmit="return vfinal()">
         <p style="font-size: 12px;"><b>GARBAGE/JUNK VALUES IN PROFILE MAY LEAD TO DEACTIVATION</b></p>
        <p style="font-size: 13px;">Please use a valid E-mail ID and mobile number in registration.</p>
        <hr>
        <br>
        <div class="form-control">
            <label>User Name<font color="red">*</font>:</label>
            <input type="text" placeholder="User Name" id="un" onblur="vusername()" name="username">
            <input type="text" id="username" readonly>
        </div>
                <div class="form-control">
            <label>Password<font color="red">*</font>:</label>
            <input type="password" placeholder="Password" id="p" onblur="vpassword()" name="password">
            <input type="text" id="errorpassword" readonly>
        </div>

                <div class="form-control">
            <label>Confirm Password<font color="red">*</font>:</label>
            <input type="password" placeholder="Confirm Password" id="cp" onblur="vcpassword()" name="cpassword">
                    <input type="text" id="errorcpassword" readonly>
        </div>
        <div>
            <label>Security Question<font color="red">*</font>:</label>
            <select name="securityquestion" required><option selected disabled value="">Select Security Question</option><option value="What is your pet name?">What is your pet name?</option><option value="What was the name of your first school?">What was the name of your first school?</option><option value="Who was your childhood hero?">Who was your childhood hero?</option><option value="What is your favourite past-time?">What is your favourite past-time?</option><option value="What is your all favourite sports team?">What is your all favourite sports team?</option><option value="What is your father's middle name?">What is your father's middle name?</option><option value="What make was your first car or bike?">What make was your first car or bike?</option><option value="Where did you first meet your spouse?">Where did you first meet your spouse?</option></select>

        </div>
        <br>
                <div class="form-control">
            <label>Security Answer<font color="red">*</font>:</label>
            <input type="text" placeholder="Security Answer" name="securityanswer" id="sa" onblur="vsecurityanswer()">
                    <input type="text" id="securityanswer" readonly>
        </div>

        <hr>
        <table><td class="PD">
            <b>Personal&nbsp;Details</b></td></table>
        <br>
          <div class="form-control ">
            <label>Name<font color="red">*</font>:</label>
            <input type="text" placeholder="First Name" name="firstname" id="fn" onblur="vfirstname()">

            <input type="text" placeholder="Middle Name[ Optional ]" name="middlename">

            <input type="text" placeholder="Last Name[ Optional ]" name="lastname">
            <input type="text" id="fname" readonly>
        </div>
          <table><td class="info">
            <b>Info!</b>Please provide your exact name as per Aadhaar to avail Aadhaar based benifits on IRCTC eTicketing website.</td></table>
        <hr>
        <div>
            <label>Gender<font color="red">*</font>:</label>
         <input type="radio" name="gender" value="Male" style="cursor: pointer;" required>
  <label><font size="2px">Male</font></label>
        <input type="radio" name="gender" value="Female" style="cursor: pointer;">
  <label><font size="2px">Female</font></label>
        <input type="radio" name="gender" value="Transgender" style="cursor: pointer;">
  <label><font size="2px">Transgender</font></label>
        </div>
        <br>
        <br>
        <div class="form-control">
            <label>Date Of Birth<font color="red">*</font>:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div>
            <label>Occupation<font color="red">*</font>:</label>
            <select name="occupation" required><option selected disabled value="">Select Occupation</option><option>GOVERNMENT</option><option>PUBLIC</option><option>PRIVATE</option><option>PROFESSIONAL</option><option>SELF EMPLOYED</option><option>STUDENT</option><option>OTHER</option></select>

        </div>
        <br>
        <br>
        <div>
            <label>Martial Status(Optional):</label>
         <input type="radio" name="mstatus" value="Married" style="cursor: pointer;" required>
  <label><font size="1px">Married</font></label>
        <input type="radio" name="mstatus" value="Unmarried" style="cursor: pointer;">
  <label><font size="1px">Unmarried</font></label>
        </div>
        <br>
        <br>
        <div>
            <label>Country<font color="red">*</font>:</label>
            <select><option value="India">India</option><option value="Brazil">Brazil</option><option value="Japan">Japan</option><option value="Russia">Russia</option><option value="America">America</option><option value="Australia">Australia</option><option value="Peru">Peru</option><option value="England">England</option></select>

        </div>
        <br>
        <br>
        <div class="form-control">
            <label>Email<font color="red">*</font>:</label>
            <input type="email" placeholder="Email" id="em" onblur="vemail()" name="email">
            <input type="text" id="email" readonly>
        </div>
        <div class="form-control">
            <label>ISD-Mobile<font color="red">*</font>:</label>
         <table><td class="TC">91</td></table><input type="tel" name="mobile" placeholder="Mobile" pattern="[7-9]{1}[0-9]{9}"
       title="Mobile number with 7-9 and remaing 9 digit with 0-9" id="mo" onblur="vmobile()">
            <input type="text" id="mobile" readonly>
        </div>
                <div>
            <label>Nationality<font color="red">*</font>:</label>
            <select name="nationality" required><option selected disabled value="">Select a Nationality</option><option value="India">India</option><option value="Brazil">Brazil</option><option value="Japan">Japan</option><option value="Russia">Russia</option><option value="America">America</option><option value="Australia">Australia</option><option value="Peru">Peru</option><option value="England">England</option></select>

        </div>
        <br>
        <br>
        <hr>
        <table><td class="PD">
            <b>Residential&nbsp;Address</b></td></table>
        <br>
        <div>
        <label>Flat/Door/Block No.<font color="red">*</font>:</label>
        <textarea placeholder="Flat/Door/Block No." rows="5" cols="42" id="fl" onblur="vflat()" name="flat"></textarea>
        <input type="text" id="flat" readonly>
            <br>
            <br>
        <label>Street/Lane(Optional):</label>
        <textarea placeholder="Street/Lane(Optional)" rows="5" cols="42" name="street"></textarea>
            <br>
            <br>
            <br>
        <label>Area/Locality(Optional):</label>
        <textarea placeholder="Area/Locality(Optional)" rows="5" cols="42" name="area"></textarea>
        </div>
        <br>
        <br>
        <div class="form-control ">
            <label>Pin code<font color="red">*</font>:</label>
            <input type="text" placeholder="Pin code" pattern="[0-9]{6}" title="Pin code should be of six digits only" id="pi" onblur="vpincode()" name="pincode">
            <input type="text" id="pin" readonly>
        </div>
                <div class="form-control ">
            <label>State<font color="red">*</font>:</label>
            <input type="text" placeholder="State" id="st" onblur="vstate()" name="state">
            <input type="text" id="state" readonly>

        </div>
        <div>
            <label>City/Town<font color="red">*</font>:</label>
            <select name="city" required><option selected disabled value="">Select city</option><option value="Chennai">Chennai</option><option value="Coimbatore">Coimbatore</option><option value="Tiruchirapalli">Tiruchirapalli</option><option value="Madurai">Madurai</option><option value="Tirunelveli">Tirunelveli</option><option value="Kochi">Kochi</option><option value="Bengaluru">Bengaluru</option><option value="Thiruvananthapuram">Thiruvananthapuram</option></select>
        </div>
        <br>
        <br>
        <div>
            <label>Post Office<font color="red">*</font>:</label>
            <select name="postoffice" required><option selected disabled value="">Select a Post Office</option><option value="Chennai">Chennai</option><option value="Coimbatore">Coimbatore</option><option value="Tiruchirapalli">Tiruchirapalli</option><option value="Madurai">Madurai</option><option value="Tirunelveli">Tirunelveli</option><option value="Kochi">Kochi</option><option value="Bengaluru">Bengaluru</option><option value="Thiruvananthapuram">Thiruvananthapuram</option></select>
        </div>
        <br>
        <br>
        <div class="form-control">
            <label>Phone<font color="red">*</font>:</label>
            <input type="tel" placeholder="Phone" pattern="[7-9]{1}[0-9]{9}"
                   title="Phone number with 7-9 and remaing 9 digit with 0-9" onblur="vphone()" id="ph" name="phone">
            <input type="text" id="phone" readonly>
        </div>
        <hr>
        <div>
        <input type="radio" style="cursor: pointer;" value="on" name="sbi" required><label style="font-size: 13px">Please inform me about IRCTC SBI Card through Phone/Email/SMS(Optional)</label>
        <p style="font-size: 11px;color: blue;"><b>Book free Railway tickets using Reward Points and Enjoy Zero payment gateway charge with IRCTC SBI Card</b></p>
        <input type="radio" style="cursor: pointer;"  value="off" name="sbi"><label style="font-size: 13px">No,I am Not Interested.</label>
        </div>
        <hr>
        <input type="checkbox" style="cursor: pointer;" required onclick="vfinal()" name="tc"><label style="font-size: 13px">I have read and agree with the <a href="tc.html" style="text-decoration: none;color: royalblue;">Terms and Conditions.</a>and also agree to receive promotional emails/SMS/offers/announcements from IRCTC & associated partners</label>
        <br>
        <br>
        <input type="text" id="fi" readonly>
        <hr>
        <br>
        <button type="submit" name="Register">Register</button>
    </form>



</div>
</body>
</html>

function vusername()
{
    var u=document.getElementById("un").value;
    if(u == null || u == "")
    {
        document.getElementById("username").value="Username must be filled out!";
    }
    else if(u != null && u != "")
    {
        document.getElementById("username").value=" ";
    }  
}
function vpassword()
{
    var x=document.getElementById("p").value;
    if (x == null || x == "")
    {
        document.getElementById("errorpassword").value="Password must be filled out!";       
    }
    else if(x != null && x != "")
    {
        document.getElementById("errorpassword").value=" ";
    }
}
function vcpassword()
{
   var x=document.getElementById("p").value;
   var y=document.getElementById("cp").value; 
   if (y == null || y == "")
   {
        document.getElementById("errorcpassword").value="Confirm Password must be filled out!";
   }
   else if(y != null && y != "")
   {
        document.getElementById("errorcpassword").value=" ";
   }
   if((y != null && y != "" ) && (x!=y))
   {
        document.getElementById("errorcpassword").value="Confirm Password Does'nt match with Password!";
   }
}
function vsecurityanswer()
{
   var s=document.getElementById("sa").value;
   if (s == null || s == "")
   {
        document.getElementById("securityanswer").value="Security Answer to be filled out!";
   }
   else if(s != null && s != "")
   {
        document.getElementById("securityanswer").value=" ";
   } 
}
function vfirstname()
{
   var n=document.getElementById("fn").value;
   if (n == null || n == "")
   {
        document.getElementById("fname").value="First Name is to be filled!";
   }
   else if(n != null && n != "")
   {
        document.getElementById("fname").value=" ";
   } 
    
}
function vstate()
{
   var st=document.getElementById("st").value;
     if (st == null || st == "")
     {
        document.getElementById("state").value="State is to be filled!";
     }
     else if(st != null && st != "")
     {
        document.getElementById("state").value=" ";
     }
}
function vemail()
{
   var e=document.getElementById("em").value; 
   if(e == null || e == "")
   {
        document.getElementById("email").value="Email is to be filled!";
   }
   else if(e != null && e != "")
   {
        document.getElementById("email").value=" ";
   }
}
function vflat()
{
   var f=document.getElementById("fl").value; 
   if(f == null || f == "")
   {
        document.getElementById("flat").value="Flat/Door/Block No. is to be filled!";
   }
   else if(f != null && f != "")
   {
        document.getElementById("flat").value=" ";
   }    
}
function vpincode()
{
   var pi=document.getElementById("pi").value; 
   if(pi == null || pi == "")
   {
        document.getElementById("pin").value="Pin Code is to be filled!";
   }
   else if(pi != null && pi != "")
   {
        document.getElementById("pin").value=" ";
   }    
}
function vphone()
{
   var ph=document.getElementById("ph").value; 
   if(ph == null || ph == "")
   {
        document.getElementById("phone").value="Phone Number is to be filled!";
   }
   else if(ph != null && ph != "")
   {
        document.getElementById("phone").value=" ";
   }    
}
function vmobile()
{
   var mo=document.getElementById("mo").value; 
   if(mo == null || mo == "")
   {
        document.getElementById("mobile").value="ISD-Mobile Number is to be filled!";
   }
   else if(mo != null && mo != "")
   {
        document.getElementById("mobile").value=" ";
   }    
}
function vfinal()
{
                var x=document.getElementById("p").value;
                var y=document.getElementById("cp").value;
                var u=document.getElementById("un").value;
                var s=document.getElementById("sa").value;
                var n=document.getElementById("fn").value;
                var st=document.getElementById("st").value;
                if(u == null || u == "" || x == null || x == "" || y == null || y == "" || s == null || s == "" || n == null || n == "" || 
                   st == null || st == "" || e == null || e == "" || f == null || f == "" || pi == null || pi == "" || ph == null || ph == "" || mo == null || mo == "")
                {
                    document.getElementById("fi").value="Warning: Mandatory Field(s) left Unfilled, Kindly Check!";
                    alert("Warning: Mandatory Field(s) left Unfilled, Kindly Check!");
                    return false;
                }
                else
                {
                    document.getElementById("fi").value=" ";
                    return true;
                }     

    
}

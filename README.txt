Railway Pantry system - Team 4

*******************************************************************************************************************************************************************

Team members:
1. D S kishore - 19BCE1460
2. Laxman B - 19BCE1105

********************************************************************************************************************************************************************

Login credentials are given below.
while creating a new account, after successful registration the pnr number of that user has
to manually inserted in the database. For simplicity login directly with the below credentials. 

important credentials:

user ID: kishore
password : k
pnr: 1224567893

user ID : laxman b 
password : l
pnr : 1234567890
**********************************************************************************************************************************************************************

Email credentials : 

Email ID : irctc12102020@gmail.com
password : irctc12102020

**********************************************************************************************************************************************************************

Updates: 

During rewiev, you told us to upload the file directly when the link is posted without any updates.

***********************************************************************************************************************************************************************

Flow of exection:

1. Place this folder in htdocs folder which is in xampp directory and import "railway_pantry_system.sql"
   into database.
2. To create a new account open Register.php. After registering it will direct you to the 
   homepage of the project. It advised to login directly, else the new account has to be linked 
   to a new pnr number manually in the database.During successful registration a mail will be sent.
3. If you dont want to register, open login.php page and input the login credentials given in 
   this file. It is important that the webpage is signed in, else the food cannot be ordered.
4. In the homepage (pantry system.php), click the "order now" button, it will direct you to the 
   "order.php" where you can order food.
5. order the food you like and press continue button shown at the bottom of the page.
6. This will direct you to "order summary.php". Enter the correct pnr no. to proceed
   (if user is kishore pnr is 1224567893, if user is laxman b pnr is 1234567890)
7. This will direct you to main payment gateway.php. choose the desired mode of payment.
8. For debit card and credit card give suitable dummy credentials. For cod click confirm order.
9. A mail will be sent to user mail during this time and you will be directed to "bill.php" where
   you can see the order receipt. you can save the bill in pdf format as well.
10.Click "return to Homepage" link to go back to indexpage (pantry system.php).

************************************************************************************************************************************************************************

External css and images are there in css and images folder respectively
For email verification kindly see the sample screenshot in "mail component sample screenshot" folder
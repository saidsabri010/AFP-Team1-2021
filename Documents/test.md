<H4>Testing Environment: </H4>
<table> 
  <tr>
    <th>Tester</th> 
    <th>Operating System</th>
    <th>Browser</th>
    <th>Result</th>
</tr>

<tr>
    <th>Rachid Aifar</th>
    <th>Windows 10 64 Bit</th>
    <th>Google Chrome V.94.0.4606.61</th>
    <th>it's working</th>
</tr>
<tr>
    <th>Dany Razzoqa</th>
    <th>Windows 10 64 Bit</th>
    <th>Google Chrome V.94.0.4606.61</th>
    <th>it's working</th>
</tr>
</table>

<H4>Testing: </H4>
<table> 
  <tr>
    <th>Testing id</th>
    <th>Tester</th> 
    <th>Date</th>
    <th>Function discription</th>
    <th>Discription</th>
    <th>Expected result</th>
    <th>Result</th>

</tr>
<tr>
    <th>K01</th>
    <th>Rachid Aifar</th>
    <th>Search</th>
    <th>2021/10/05</th>
    <th>The search function get the information from database according to the Data inputed.</th>
    <th>return exact research</th>
    <th>it's working</th>
</tr>
<tr>
    <th>K02</th>
    <th>Rachid Aifar</th>
    <th>login</th>
    <th>2021/10/05</th>
    <th>The login function let user login according to information from database.</th>
    <th>the user can enter the page</th>
    <th>it's working</th>
   
   
</tr>
  <tr>
    <th>K03</th>
    <th>Rachid Aifar</th>
    <th>login</th>
    <th>2021/10/12</th>
    <th>The login function let user login according to information from database .</th>
    <th>the user can enter the profil</th>
    <th>it's working</th>
   
   
</tr>
   <tr>
    <th>K04</th>
    <th>Dani Razzoqa</th>
    <th>signup</th>
    <th>2021/10/12</th>
    <th>The login function let user signup according to information from database.</th>
    <th>the user can register the page</th>
     <th>it's working</th>
</tr>
     <tr>
    <th>K05</th>
    <th>Rachid Aifar</th>
    <th>contact</th>
    <th>2021/10/12</th>
    <th>The contact function let user conatct with the programmer.</th>
    <th>the user can conatct us</th>
    <th>it's working</th>
   
   
</tr>
<tr>
    <th>K06</th>
    <th>dani razoqqa</th>
    <th>home</th>
    <th>2021/10/12</th>
    <th>The home function let user go back home page.</th>
    <th>the user can go back home page  </th>
    <th>it's working</th>
</tr>
</table>
==================================================

* TEST ID:        1
* TEST SCENARIO:  Register with valid data 
* TEST STEPS:     Go to the register.php page => click on Register button => enter test data => click Sign Up
* TEST DATA:    USERNAME: XXXXXX
                EMAIL   : email@example.com
                PASSWORD: 123456
                PASSWORD CONF : 123456
* EXPECTED RESULT:Rediract to login.php main page  
* ACTUAL RESULT:  Popup window notified tester that they were successfully registered
* PASS/FAIL:      Pass 

==================================================

* TEST ID:        2
* TEST SCENARIO:  Try to register a duplicate user
* TEST STEPS:     Go to register.php => click Register => enter invalid data
* TEST DATA:    USERNAME: XXXXXX
                EMAIL   : email@example.com
                PASSWORD: 123456
* EXPECTED RESULT:Popup window notifies user that user with this name already exists  
* ACTUAL RESULT:  Popup window notified tester that user with this name already exists 
* PASS/FAIL:      Pass

==================================================
* TEST ID:        3
* TEST SCENARIO:  Try to login with invalid username
* TEST STEPS:     Go to index.php => Log in => enter invalid data
* TEST DATA:      USERNAME: XXXXXX
                EMAIL   : email@example.com
                PASSWORD: 123456
* EXPECTED RESULT:Popup window with the message "login failed. wrong password or username"  
* ACTUAL RESULT:  Popup window with the message "login failed. wrong password or username" 
* PASS/FAIL:      Pass

==================================================
* TEST ID:        4
* TEST SCENARIO:  Try to register with empty username or password or email
* TEST STEPS:     Go to index.php => register
* TEST DATA:    USERNAME: XXXXXX
                EMAIL   : email@example.com
                PASSWORD: 123456
* EXPECTED RESULT:Popup window with the message "Please fill out this field"  
* ACTUAL RESULT:  Popup window with the message "Please fill out this field" 
* PASS/FAIL:      Pass

==================================================

* TEST ID:        5
* TEST SCENARIO:  Try to send message with empty email or subject or message
* TEST STEPS:     Go to index.php => contact => send with empty field
* TEST DATA:    USERNAME: 
                subject   : email@example.com
                message: 123456
* EXPECTED RESULT:Popup window with the message "Please fill out this field"  
* ACTUAL RESULT:  Popup window with the message "Please fill out this field" 
* PASS/FAIL:      Pass


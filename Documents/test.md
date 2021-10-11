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
    <th>logout</th>
  <th> The login function let user login according to information from database.</th>
    <tr>
    <th>K04</th>
    <th>sign up </th>
    <th> The sign up function add user information to database.</th>
      <tr>
      <th>K05</th>
    <th>Contact</th>
  <th>the user can contact us</th>
</tr>
<tr>
    <th>K06</th>
    <th>search</th>
  <th>search available courses on the web cit</th>
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
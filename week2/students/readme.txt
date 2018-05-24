Students Profile
1.	Create a database named “studentsprofile”

2.	Create a table named “registration”
a.	RegID INT (A_I) PRIMARY KEY
b.	Name VARCHAR (20)
c.	Email VARCHAR (30)
d.	Password VARCHAR (8)
e.	Class VARCHAR (4)
f.	ContactNo VARCHAR(10)

3.	Create 4 pages Home, Registration, Login, Welcome (use include in php)
a.	Put consistent menu using nav of bootstrap and the concept of include in php named “header.php”, out the content of nav in <div id=”header”>…</div>
b.	Put consistent footer using <div id=”footer”>…</div>
c.	Every page will have its individual content in a <div id=”main”>…</div>
d.	Also put the bootstrap files, jquery file, and sweetalert file in one place named “plugins.php”.

4.	Home page (index.php) has main content as “Welcome to College!”














5.	Registration page has main content as input controls out in a form tag having method as “POST” and action as $_SERVER[‘PHP_SELF’].
a.	Input controls:
i.	Name
ii.	Email
iii.	Password
iv.	Confirm Password
v.	Class
vi.	ContactNo
b.	Button named “Register” to submit the data and referring the php code block that has instructions to store the values in the registration table.
c.	On successful registration display a message stating “Registration Successful” using the SweetAlert library.

6.	Login page has main content as input controls out in a form tag having method as “POST” and action as $_SERVER[‘PHP_SELF’].
a.	Input controls:
i.	Email
ii.	Password
b.	Button named “Login” to submit the data and referring the php code block that has instructions to check whether the user is present in the database table or not. If present then redirect user to “Welcome.php” page else display a message “Invalid Credentials”.

7.	welcome.php page will have just one <h1> tag stating Welcome user.




8.	profile.php page:
a.	Create input controls:
i.	RegID, Name, Email, Class, ContactNo
b.	Create 2 buttons:
i.	GetData => when clicked all the textboxes will be filled with appropriate RegID entered in the textbox.
1.	Use select query in php code.
ii.	EditData=> when clicked the data in all the textboxes except RegID will be update to new entered values in the registration table.
1.	Use update query in php code.

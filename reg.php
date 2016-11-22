<!DOCTYPE html>
<html>
<title>Alumini REGISTERATION FORM</title>
<marquee>
    <p>
        <h1 style=""><strong>Welcome To Alumini REGISTERATION FORM</strong></h1>
    </p>
</marquee>
<style>
    body {
        background: url(background.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        /* For WebKit*/
        -moz-background-size: cover;
        /* Mozilla*/
        -o-background-size: cover;
        /* Opera*/
        font: 400 0.875rem/1.5 "Open Sans", sans-serif;
        min-height: 100%;
        background-size: cover;
        font: 400 0.875rem/1.5 "Open Sans", sans-serif;
        margin: 0;
        min-height: 100%;
        font-weight: bold;
    }

</style>
<form action="in.php" method="post" enctype="multipart/form-data">

    <table align="right">
        <tr>
            <td><input type="file" name="image"></td>
        </tr>
    </table>
    </br>
    </br>
    </br>
    <table border="0" cellspacing="0px" cellpadding="10px">
        <tr>
            <td>Name of the Alumini:</td>
            <td><input type="text" name="nameal" placeholder="Name of the Alumini"></td>
        </tr>

        <tr>
            <td>Date Of Birth:</td>
            <td><input type="text" name="dob" placeholder="Year-MM-Day"></td>
        </tr>

        <tr>
            <td>Branch:</td>
            <td><input type="text" name="branch" placeholder="Branch"></td>
        </tr>

        <tr>
            <td>Batch:</td>
            <td><input type="text" name="batch" placeholder="Batch"></td>
        </tr>
        <tr>
            <td>Year:</td>
            <td><input type="text" name="year" placeholder="Duration of your B'tech"></td>
        </tr>

        <tr>
            <td>Current postion:</td>
            <td><input type="text" name="cpo" placeholder="Current postion"></td>
        </tr>
        <tr>
            <td>Company/Origanisation</br>Working with:</td>
            <td><input type="text" name="coww" placeholder="Company/Origanisation"></td>
        </tr>

        <tr>
            <td>E-mail ID:</td>
            <td><input type="text" name="email" placeholder="E-mail"></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><input type="text" name="mobile" placeholder="Mobile No"></td>
        </tr>


        <tr>
            <td>Area of Specialization:</td>
            <td><input type="text" name="aos" placeholder="Area of Specialization"></td>
        </tr>

        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" placeholder="Username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="text" name="password" placeholder="Password"></td>
        </tr>



    </table>

    <tr>
        <td>
            <center><input type="submit" name="sumit" value="submit"> &nbsp &nbsp &nbsp &nbsp &nbsp <input type="reset" value="clear"></center>
        </td>
    </tr>
</form>
</body>

</html>

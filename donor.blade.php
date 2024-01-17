<!-- resources/views/donor.blade.php -->
{{-- @extends('mainpage') --}}

    {{-- <h1>Donor Page</h1> --}}

    <style>

        html, body {
min-height: 100%;
background-image: url('assets/bg-pastel.png');
            background-size: cover; /* Adjust this property based on your design preference */
            /* Add other background-related properties if needed */
}
div, form, input, select, p {
padding: 0;
margin: 0;
outline: none;
font-family: Roboto, Arial, sans-serif;
font-size: 14px;
color: #666;
}
h1 {
margin: 0;
font-weight: 400;
text-align: center;
}
h3 {
margin: 12px 0;
color: #000000;
}
.main-block {
display: flex;
justify-content: center;
align-items: center;
}
form {
width: 100%;
padding: 20px;
}
fieldset {
border: none;
border-top: 1px solid #8ebf42;
}
.account-details, .personal-details {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}
.account-details >div, .personal-details >div >div {
display: flex;
align-items: center;
margin-bottom: 10px;
}
.account-details >div, .personal-details >div, input, label {
width: 100%;
}
label {
padding: 0 5px;
text-align: right;
vertical-align: middle;
}
input {
padding: 5px;
vertical-align: middle;
}
.allergies {
margin-bottom: 10px;
}
select, .children, .gender, .bdate-block {
width: calc(100% + 26px);
padding: 5px 0;
}
select {
background: transparent;
}
.gender input {
width: auto;
}
.gender label {
padding: 0 20px 0 0;
}
.bdate-block {
display: flex;
justify-content: space-between;
}
.birthdate select.day {
width: 35px;
}
.birthdate select.mounth {
width: calc(100% - 94px);
}
.birthdate input {
width: 38px;
vertical-align: unset;
}
.allergies input, .children input {
width: auto;
margin: 2px 5px 0 0;
}
.allergies a {
color: #8ebf42;
}
.allergies a:hover {
color: #82b534;
}
button {
width: 100%;
padding: 10px 0;
margin: 10px auto;
border-radius: 5px;
border: none;
background: #8ebf42;
font-size: 14px;
font-weight: 600;
color: #fff;
}
button:hover {
background: #82b534;
}
@media (min-width: 568px) {
.account-details >div, .personal-details >div {
width: 50%;
}
label {
width: 40%;
}
input {
width: 60%;
}
select, .children, .gender, .bdate-block {
width: calc(60% + 16px);
}
select {
  padding: 6px;
  background-color: #ffffff;
  color: #a8a8a8;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
}

}
    </style>
<head>
    <title>Donor Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/icon.jpeg" rel="icon">

</head>
<body>
    <div class="main-block">
        <form action="/">
        <h1>Blood Donor Form</h1>
        <fieldset>
        <legend>
        <h3>Personal Details</h3>
        </legend>

        <div class="personal-details">
        <div>
        <div><label>First Name</label><input type="text" name="fname" required></div>
        <div><label>Last Name</label><input type="text" name="lname" required></div>
        <div><label>Phone</label><input type="text" name="phoneno" required></div>
        <div><label>Email</label><input type="text" name="email" required></div>
        <div><label>Address</label><input type="text" name="address" required></div>
        <div>
        </div>
        </div>

        <div>
        <div>
        <label>Gender</label>
        <div class="gender">
        <input type="radio" value="none" id="male" name="gender" required/>
        <label for="male" class="radio">Male</label>
        <input type="radio" value="none" id="female" name="gender" required/>
        <label for="female" class="radio">Female</label>
        </div>
        </div>

        <div>
            <label>Blood Type</label>
            <select required>
            <option value=""></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
            </select>
            </div>


        <div>
        <label>Date of Birth</label>
        <input type="date" name="user_dob" />
        <i class="fas fa-calendar-alt"></i>
        </div>
        </div>

        </fieldset>
        <fieldset>
        <legend>
        <h3>Personal Questions</h3>
        </legend>
        <div>
            <label>Do you suffer any disease?</label>
            <div class="gender">
            <input type="radio" value="none" id="yes" name="allergies" required/>
            <label for="yes" class="radio">Yes</label>
            <input type="radio" value="none" id="no" name="allergies" required/>
            <label for="no" class="radio">No</label>
        </div>

        <div>
            <label>Do you have any allergies?</label>
            <div class="gender">
            <input type="radio" value="none" id="yes" name="allergies" required/>
            <label for="yes" class="radio">Yes</label>
            <input type="radio" value="none" id="no" name="allergies" required/>
            <label for="no" class="radio">No</label>
        </div>

        </fieldset>
        <button onclick="document.location='/submit'" type="button" class="button">Submit</button>
        </form>
        </div>
</body>
</html>


# REPORT

  - Course Code and Title: INFO 3305 Web Application Development
  - Section: 1
  - Group: 1
  - Lecturer Name: Dr. Mohd Khairul Azmi Bin Hassan
  - Date of Submission: 1/1/2024
  
# NAME AND MATRIC NO.

  1. Nor Hidayati Binti Munadi (2214282)
  2. Che Wan Sarah Najwa Binti Che Wan Ahmad (2117644)
  3. Nor Ain Natashya Binti Hairi (2118124)
  4. Siti Nur Idah Binti Roslan (2110174)
  5. Nur Fathnin Ilhami Binti Mohamad Helmi (2124852)
  6. Aina Afifah Binti Azeri (2016178)

# TITLE OF THE PROJECT 

  Blood Bank Web Application

## INTRODUCTION

  In a world where medical emergencies, accidents, and surgeries are an unavoidable part of life, access to a robust and efficient blood donation system is critical. 
  The importance of timely and secure blood donations cannot be overstated, as countless lives depend on this precious resource. Recognizing the vital role that technology 
  plays in enhancing healthcare services, we present our proposal for the development of Blood Bank Web Application. This innovative web application is designed to address 
  the challenges faced by traditional blood banks, streamline the donation process, and ultimately save more lives.Our proposal encompasses a comprehensive approach, integrating 
  cutting-edge technologies to create a user-friendly platform that encourages blood donation, facilitates efficient inventory management, and provides immediate access to 
  blood supplies when and where they are needed the most.

## OBJECTIVE

  The objective of Blood Bank Web Application is to develop an efficient donor management in the healthcare service. This web application encompasses a comprehensive system that seamless   integrates with healthcare institutions to facilitate efficient collection, processing, storage, and distribution processes. Futhermore, this Bank Blood Web Application also implement    the features for real-time tracking of blood products, minimizing delays and ensuring timely responses to healthcare professionals blood requests.

## FEATURES AND FUNCTIONALITY

By using Blood Bank Web Application, the operation of blood donation and blood supplies is paperless. The donors and blood donation centres can communicate efficiently and coordinate with each other to minimize time and effort required for blood donation process. This system helps donors to donate their blood by fill in the form that provided first. It also allows the recipients to request for blood easily. This system will store all the donor and recipient information that consist of their ID, donor and recipient names, gender, date of birth, phone number and blood type to the system database.


| Staff Side | Donor Side | Recipient Side |
| --- | --- | --- |
| Manage Donor Data | Donate blood page | Request for Blood page |
| Manage Recipient Data |
| Update blood bag stock |



  

## ENTITIY RELATIONAL DIAGRAM (ERD)
![UML class](https://github.com/idahh02/README.md/assets/154742278/899a78ee-68ad-4d10-9bdf-6cf399c1c674)


## SEQUENCE DIAGRAM
![WAD Sequence Diagram-Donor drawio (1)](https://github.com/idahh02/README.md/assets/101859532/11aea8b7-7307-4753-90b7-5e65e355ef4d)


## PROJECT SYSTEM CAPTURED SCREEN AND EXPLANATION
1. Mainpage -  This page consists of 3 buttons which will navigate to different pages which are Donor, Recipient and Staff
   
![image](https://github.com/idahh02/README.md/assets/154742278/40e3a523-66c5-43d4-9cad-2383373eab79)

2. Blood Donor Form - This page will display a form which prompt user to insert their personal details and personal informations.

   ![image](https://github.com/idahh02/README.md/assets/147692602/68a9db5f-e34d-489f-9b2d-d32fc20100c6)


3. Blood Recipient Form - This page will display a form which prompt user to insert their personal details and personal informations.

   ![image](https://github.com/idahh02/README.md/assets/147692602/faa08a36-ab74-4f6f-88d6-b9f1feef9d40)


4. Confirmation page - This confirmation page will be display after user click submit button in the donor/recipient form.

![image](https://github.com/idahh02/README.md/assets/101859532/7033d9b3-9ed7-4e6b-a144-e52227ecbcf7)


5. Staff Login page - This page consists of 2 input which are Email and Password for staff to fill in to log in to the Staff page. Staff may access the Staff page by entering the assigned email address and password in the two provided input fields. Only valid credentials allow access, errors will be displayed for incorrect information or missing entries.
   
![image](https://github.com/idahh02/README.md/assets/154742278/4ee4eadf-fe8c-441b-bae7-061358bfb3e1)

6. Blood Bag Information page - This page will display a list of collected blood bag data and include a Delete button for removing the selected Bag ID and Insert button for inserting blood bag information.
    
   ![image](https://github.com/idahh02/README.md/assets/101859532/07314344-1b07-4d4e-a4f7-43fc614e14f1)
   
7. Update Blood Bag page - A form where staff need to fill in the donor's details such as Bag ID, Blood Type, Donation and Expiry Date, Test Result and Extra Notes. There is a Save button to update the form that will go to the Blood Bag Information
    
   ![image](https://github.com/idahh02/README.md/assets/101859532/c946a416-69e6-4d1c-912f-f2eb44825d05)

8. Blood Bag Inventory - It consists of an Edit button that, when clicked, navigates to the EditBloodBag page. On this page, staff can click the Add/Subtract button to update the number of blood packs. Upon clicking the Save button, the application will redirect to the Blood Bag Inventory page.
    
   ![image](https://github.com/idahh02/README.md/assets/101859532/679ea760-3788-466d-9c7f-4acfcf8bdeeb)
   ![image](https://github.com/idahh02/README.md/assets/101859532/23912589-530a-400c-aa7b-094728c99b7d)

9. Profile - Show details of the staff of BloodDonation which are Full Name, Position, Phone Number, Email, Address and Country
    
![image](https://github.com/idahh02/README.md/assets/101859532/144fda09-bf51-457c-abfd-a1af032e8af8)




## CHALLENGES / DIFFICULTIES
1. It is challenging to insert data into the database and display it when connecting to the tables in phpMyAdmin
2. One team member who is not giving full cooperation in completing the project
3. Identifying and resolving the displayed error is challenging
4. Pinpointing the occurrence of logical errors is difficult and requires thorough investigation
5. Differing coding styles and project structures can make collaboration difficult and code harder to maintain

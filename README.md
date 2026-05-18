# Student Job Portal — README

## Project Overview

**Student Job Portal** is a web-based database management system designed to connect students with companies offering job opportunities. The platform allows students to search and apply for jobs, while companies and administrators can manage job postings, applicants, and organizational data. 

The system was developed as part of the **CSE370: Database Systems** course project at **BRAC University**. 

---

# Features

## Authentication & User Roles

* Super Admin Login
* Customer Admin Login
* Job Seeker Login
* Job Provider Login
* User Registration / Sign Up
* Session-based Authentication

## Job Management

* Add Job
* Edit Job
* Delete Job
* Search Jobs
* Filter Jobs by:

  * Keyword
  * Category
  * Salary Range
  * Working Hours

## Company Management

* Add Company
* Edit Company
* Delete Company

## Student Features

* Create CV
* Edit CV
* View CV
* Apply for Jobs
* View Applied Jobs

## Employer Features

* View Applicants
* Approve Candidates
* Manage Posted Jobs

---

# Technologies Used

## Frontend

* HTML
* CSS
* Bootstrap
* JavaScript
* jQuery

## Backend

* PHP
* MySQL

## Database Design

* ER / EER Diagram
* Relational Schema Design

---

# Project Structure

```bash
Student-Job-Portal/
│
├── admin/
├── customer_admin/
├── jobseeker/
├── company/
│
├── css/
├── js/
├── images/
│
├── header.php
├── footer.php
├── dashboard.php
├── jobs.php
├── available_jobs.php
├── cv.php
├── edit_cv.php
├── jobseeker_signup.php
├── job_provider_signup.php
│
├── database/
│   └── student_job_portal.sql
│
└── README.md
```

---

# Database Modules

The database system includes the following major entities:

* Students / Job Seekers
* Job Providers
* Companies
* Jobs
* Applicants
* Approved Candidates
* Admins

The project also includes:

* EER Diagram
* Schema Diagram



---

# Installation Guide

## Requirements

Install the following software first:

* XAMPP / WAMP
* PHP
* MySQL
* Web Browser

---

## Setup Steps

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/student-job-portal.git
```

### 2. Move Project Folder

Move the project folder into:

```bash
htdocs/
```

for XAMPP.

---

### 3. Import Database

1. Open **phpMyAdmin**
2. Create a database named:

```sql
student_job_portal
```

3. Import:

```bash
student_job_portal.sql
```

---

### 4. Configure Database Connection

Edit the database connection file:

```php
$conn = mysqli_connect("localhost","root","","student_job_portal");
```

---

### 5. Run the Project

Start:

* Apache
* MySQL

Then open:

```bash
http://localhost/student-job-portal
```

---

# User Roles

## Super Admin

Can:

* Manage customers
* Manage jobs
* Edit company data
* Control admin privileges
* Access full database

## Customer Admin

Can:

* Manage own company jobs
* Add/Edit/Delete jobs
* Manage own company information

## Job Seeker

Can:

* Register account
* Create CV
* Apply for jobs
* View available jobs
* Edit profile/CV

## Job Provider

Can:

* Post jobs
* View applicants
* Approve candidates

---

# Key Functionalities

## Job Search System

Dynamic job filtering using MySQL queries and PHP backend. 

## Session Management

PHP sessions are used to maintain user authentication and role-based dashboards. 

## Dashboard System

Different dashboards are shown based on user roles using conditional session logic. 

---

# Contributors

| ID       | Name               | Contribution                                         |
| -------- | ------------------ | ---------------------------------------------------- |
| 21201114 | Tasnim Rahman      | Admin panel, job management, searching, EER & schema |
| 21301601 | Tanveer Hasan      | Frontend, header/footer, jobs page                   |
| 19101193 | Tanzeela Mariam    | Available jobs page, database integration            |
| 22201674 | Sadia Hakim Mollik | Creative design                                      |
| 22101623 | Arif Bin Islam     | Signup system, CV module, applicants & applied jobs  |



---

# Future Improvements

* Resume upload support
* Email notifications
* Real-time chat system
* AI-based job recommendations
* Advanced filtering
* Mobile responsiveness improvements
* Security hardening
* REST API integration

---

# References

* W3Schools
* Bootstrap Documentation
* Colorlib Job Board Templates
* Research Papers on Online Job Portals




---

# License

This project was developed for academic purposes under the CSE370 Database Systems course at BRAC University.

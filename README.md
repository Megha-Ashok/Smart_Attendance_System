# 🎓 Student Attendance Management System (SAMS)

> A full-featured, role-based web application to streamline attendance tracking for educational institutions. Built with PHP, MySQL, JavaScript, and deployed on InfinityFree, this system empowers administrators and teachers with real-time attendance management, analytics, and report generation.

[🔗 Live Demo](https://smartattendence.rf.gd) &nbsp; |

---

## 🚀 Project Overview

**Student Attendance Management System** (SAMS) is a scalable and secure web-based platform designed to digitize and automate manual attendance workflows. It includes an **Admin Dashboard** for managing institutions, and a **Teacher Dashboard** for real-time attendance entry, student filtering, and CSV report generation.

This system simulates real-world implementation for schools, colleges, or any academic organization — reflecting solid backend design, user authentication, database optimization, and deployment experience.

---

## 👨‍💼 Roles & Permissions

| Role         | Functionalities                                                                 |
|--------------|----------------------------------------------------------------------------------|
| **Admin**    | Add/view/manage students, teachers, classes, sessions, terms, and attendance    |
| **Teacher**  | View assigned class dashboard, take daily attendance, view reports, export CSV  |

---

## ✨ Key Features

### ✅ Admin Panel
- Secure login and dashboard
- Manage classes, arms, sessions, terms
- Add/manage teachers and students
- Centralized student attendance records

### 👨‍🏫 Teacher Panel
- Personalized dashboard for assigned class
- Mark daily attendance with status
- Filter records by **all**, **specific date**, or **date range**
- Export **daily reports in CSV format**
- Lightweight and responsive UI

### 📊 Analytics (In Progress)
- Daily/weekly/monthly attendance trends
- Percentage summaries per student/class

---

## 💡 Technologies Used

| Tech Stack     | Description                                  |
|----------------|----------------------------------------------|
| **PHP**        | Core backend scripting and routing            |
| **MySQL**      | Relational database for storing records       |
| **HTML/CSS**   | Responsive and semantic UI layout             |
| **JavaScript** | Dynamic content loading, AJAX filtering       |
| **Bootstrap**  | Clean and professional UI components          |
| **InfinityFree** | Hosting the live version of the platform    |

---

## 📷 Screenshots

### 🔐 Login Panel
<p align="center">
  <img src="Screenshot%202025-07-07%20100453.png" width="500"/>
</p><br>

### 📊 Admin Dashboard
<p align="center">
  <img src="Screenshot%202025-07-07%20100510.png" width="500"/>
</p><br>
### 👨‍🏫 Teacher Dashboard
<p align="center">
  <img src="Screenshot%202025-07-07%20100533.png" width="500"/>
</p><br>

---

## 🧩 Database Schema (MySQL)

- **tblstudents**
- **tblattendance**
- **tblclass**, **tblclassarms**
- **tblteachers**, **tblsessionterm**, **tblterm**
- Normalized structure with foreign key references and indexing

📌 *SQL dump file included in the `/database` folder.*

---




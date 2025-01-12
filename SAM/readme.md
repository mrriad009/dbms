
# Student Attendance Management System
**Course Title:** Database Management Systems Lab  
**Course Code:** CSE 3104

## Objective
The Student Attendance Management System aims to streamline the process of tracking and managing student attendance in educational institutions. It provides an efficient, automated, and user-friendly platform for recording attendance, generating reports, and analyzing student performance based on attendance data.

## Features of the Project

1. **Student Registration**: Allows to register new students with details like ID, name, email, and department.
2. **Attendance Tracking**: Records attendance data (present, absent, total classes) for each student.
3. **Search Functionality**: Enables searching for students by their unique ID to view their attendance details.
4. **Department Filter**: Filters students by department and displays their attendance sorted by percentage.
5. **Attendance Percentage Calculation**: Automatically calculates attendance percentage for each student.
6. **Status Indicator**: Displays attendance status (Warning, Normal, Impressive) based on attendance percentage.
7. **View Profile**: Provides a detailed profile of each student, including attendance history.
8. **User-Friendly Interface**: A clean, modern, and responsive design for easy navigation.

## Database Design
The system uses a MySQL database with the following tables and attributes:

### 1. Students Table
**Attributes**:
- `id (Primary Key)`: Unique student ID.
- `name`: Full name of the student.
- `email`: Email address of the student.
- `department`: Department of the student.

### 2. Attendance Table
**Attributes**:
- `student_id (Foreign Key)`: References the id in the students table.
- `total_classes`: Total number of classes held.
- `present`: Number of classes attended.
- `absent`: Number of classes missed.
- `percentage`: Attendance percentage (calculated as (present / total_classes) * 100).

## Real-Life Usage

- **Automate Attendance Tracking**: Replace manual attendance registers with a digital system, reducing errors and saving time.
- **Monitor Student Performance**: Analyze attendance trends to identify students who may need additional support.
- **Generate Reports**: Create attendance reports for faculty, administration, and parents.
- **Enhance Accountability**: Ensure transparency in attendance records and reduce absenteeism.
- **Support Decision-Making**: Use attendance data to make informed decisions about student promotions, scholarships, and disciplinary actions.

## Future Development
The future development of the Student Attendance Management System can focus on several key enhancements:

- **Mobile Application**: Develop a mobile app for students and faculty to access attendance data and notifications on the go.
- **Real-Time Attendance Tracking**: Integrate facial recognition or biometric systems to automate real-time attendance tracking during classes.
- **Automated Alerts**: Send automatic notifications to students and parents when attendance drops below a certain threshold.
- **Analytics Dashboard**: Implement an advanced analytics dashboard to visualize attendance trends, track student engagement, and generate predictive insights.
- **Multi-School Support**: Enable the system to handle attendance data for multiple educational institutions.

## Conclusion
The Student Attendance Management System is a robust, scalable, and user-friendly solution for tracking and managing student attendance. It leverages modern web technologies and a well-structured database to provide accurate and efficient attendance tracking. By digitalizing the attendance process, the system helps educational institutions focus on their core mission of delivering quality education.

**Prepared by**:  
Md Mahamudul Islam Riad || Suraya Khatun Hasiba  
11220320898 || 11220321003  
Department of Computer Science and Engineering  
**Date**: 1.12.2025
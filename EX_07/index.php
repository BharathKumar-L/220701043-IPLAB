<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Lookup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>StudentScope</h1>
    
    <label for="student-select">Select Student Reg-No:</label>
    <select id="student-select">
        <option value="">Select a student</option>
    </select>

    <div id="student-details"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('student-select');
            const detailsDiv = document.getElementById('student-details');

            function loadStudentOptions() {
                const xhr = new XMLHttpRequest();
                xhr.open('GET', 'students.php', true);

                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        const students = JSON.parse(xhr.responseText);
                        students.forEach(student => {
                            const option = document.createElement('option');
                            option.value = student.student_reg_no;
                            option.textContent = student.student_reg_no;
                            selectElement.appendChild(option);
                        });
                    } else {
                        detailsDiv.innerHTML = '<p class="error">Failed to load student list.</p>';
                    }
                };

                xhr.onerror = function() {
                    detailsDiv.innerHTML = '<p class="error">Request failed. Please try again.</p>';
                };

                xhr.send();
            }

            selectElement.addEventListener('change', function() {
                const student_reg_no = selectElement.value;
                
                if (student_reg_no) {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', `student-details.php?student_reg_no=${encodeURIComponent(student_reg_no)}`, true);

                    xhr.onload = function() {
                        if (xhr.status >= 200 && xhr.status < 300) {
                            const student = JSON.parse(xhr.responseText);
                            if (student) {
                                detailsDiv.innerHTML = `
                                    <h2>Student Details</h2>
                                    <p><strong>Registration Number:</strong> ${student.student_reg_no}</p>
                                    <p><strong>Name:</strong> ${student.student_name}</p>
                                    <p><strong>Email:</strong> ${student.student_email}</p>
                                `;
                            } else {
                                detailsDiv.innerHTML = '<p class="error">Student not found.</p>';
                            }
                        } else {
                            detailsDiv.innerHTML = '<p class="error">Failed to load student details.</p>';
                        }
                    };

                    xhr.onerror = function() {
                        detailsDiv.innerHTML = '<p class="error">Request failed. Please try again.</p>';
                    };

                    xhr.send();
                } else {
                    detailsDiv.innerHTML = '';
                }
            });

            loadStudentOptions();
        });
    </script>
</body>
</html>
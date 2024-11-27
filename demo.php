<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Dashboard</title>
    <style>
        /* General Reset and Body Styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            display: flex;
            min-height: 100vh;
            background-color: #f5f7fa;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: #0062ff;
            padding: 20px;
            box-sizing: border-box;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #fff;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px;
            margin: 6px 0;
            border-radius: 8px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #004bb5;
        }

        .sidebar ul li.active {
            background-color: #004bb5;
            font-weight: bold;
        }

        .sidebar .new-event {
            background-color: #ff5733;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            margin-top: 20px;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .sidebar .new-event:hover {
            background-color: #e04e2a;
        }

        .sidebar .all-time {
            margin-top: 30px;
            color: #fff;
            font-size: 1.1em;
            text-align: center;
            opacity: 0.7;
        }

        /* Main Content Styling */
        .main {
            width: 100%;
            padding: 40px;
            background-color: #fff;
            box-sizing: border-box;
            margin-left: 250px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .main .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .main h1 {
            font-size: 2.5em;
            color: #333;
        }

        /* Download Button */
        .download {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .download:hover {
            background-color: #0056b3;
        }

        /* Activity and Date Range Styling */
        .activity, .date-range, .results {
            margin-top: 30px;
        }

        .activity h2, .date-range h2, .results h2 {
            margin-bottom: 15px;
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
        }

        .activities button {
            background-color: #f0f4f8;
            border: none;
            padding: 10px 18px;
            margin: 8px;
            border-radius: 5px;
            cursor: pointer;
            color: #333;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .activities button:hover {
            background-color: #d1e8ff;
        }

        .date-range .date-picker {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1.1em;
        }

        .date-range .timeline {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 0.9em;
            color: #888;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
            font-size: 1.1em;
        }

        table th {
            background-color: #f0f4f8;
            color: #333;
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        /* Status Styling */
        .present {
            color: green;
            font-weight: bold;
        }

        .absent {
            color: red;
            font-weight: bold;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
                padding: 15px;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .main h1 {
                font-size: 2em;
            }

            .download {
                font-size: 1em;
            }

            .activities button {
                font-size: 1em;
                padding: 8px 12px;
            }

            .date-range .date-picker {
                font-size: 1em;
            }

            table th, table td {
                font-size: 1em;
                padding: 10px;
            }
        }

    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li class="active">Home</li>
            <li>Attendance</li>
            <li>Reports</li>
            <li>Settings</li>
        </ul>
        <button class="new-event">Create New Event</button>
        <div class="all-time">All Time Attendance</div>
    </div>

    <div class="main">
        <div class="header">
            <h1>Attendance</h1>
            <button class="download">Download Report</button>
        </div>

        <div class="activity">
            <h2>Activity</h2>
            <div class="activities">
                <button>Swimming</button>
                <button>Basketball</button>
                <button>Soccer</button>
                <button>Volleyball</button>
                <button>Track and Field</button>
                <button>Tennis</button>
                <button>Badminton</button>
                <button>Rugby</button>
            </div>
        </div>

        <div class="date-range">
            <h2>Date Range</h2>
            <input type="date" class="date-picker">
            <div class="timeline">
                <span>2023-01-01</span>
                <span>2023-12-31</span>
            </div>
        </div>

        <div class="results">
            <h2>Results</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ava Smith</td>
                        <td>ava.smith@gmail.com</td>
                        <td>2023-01-01</td>
                        <td>14:00</td>
                        <td><span class="present">Present</span></td>
                    </tr>
                    <tr>
                        <td>Jack Johnson</td>
                        <td>jack.johnson@gmail.com</td>
                        <td>2023-01-01</td>
                        <td>14:00</td>
                        <td><span class="absent">Absent</span></td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>

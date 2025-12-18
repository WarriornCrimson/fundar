<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Table</title>
    <link rel="stylesheet" href="{{ asset('css/admin-sidebar.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-accounts.css') }}">
</head>
<body>
    <x-admin-sidebar/>
    
    <div class="admin-accounts"> 
    <main class="user-management-container">
        <nav class="user-tabs">
            <button class="tab-button active">All users</button>
            <button class="tab-button">Students</button>
            <button class="tab-button">Donors</button>
            <button class="tab-button">Admins</button>
            <button class="tab-button">Pending</button>
        </nav>

        <div class="filter-bar">
            <div class="search-input-wrapper">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search by name, email, or ID...">
            </div>

            <div class="dropdown-filter">
                <button class="dropdown-button">
                    All Roles <i class="fa-solid fa-chevron-down"></i>
                </button>
            </div>
            
            <div class="dropdown-filter">
                <button class="dropdown-button">
                    All Status <i class="fa-solid fa-chevron-down"></i>
                </button>
            </div>
        </div>

        <div class="data-table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Verified</th>
                        <th>Status</th>
                        <th>Date Joined</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="ID">U0011</td>
                        <td data-label="Name">Roberto Cruz</td>
                        <td data-label="Role"><span class="role-tag student">Student</span></td>
                        <td data-label="Email">robertocruz@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-check verified-icon active"></i></td>
                        <td data-label="Status"><span class="status-tag active">Active</span></td>
                        <td data-label="Date Joined">2025-08-20</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                    <tr>
                        <td data-label="ID">U0012</td>
                        <td data-label="Name">Kim Kardashian</td>
                        <td data-label="Role"><span class="role-tag donor">Donor</span></td>
                        <td data-label="Email">kimk@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-check verified-icon active"></i></td>
                        <td data-label="Status"><span class="status-tag active">Active</span></td>
                        <td data-label="Date Joined">2025-08-21</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                    <tr>
                        <td data-label="ID">U0001</td>
                        <td data-label="Name">Christo Espina</td>
                        <td data-label="Role"><span class="role-tag admin">Admin</span></td>
                        <td data-label="Email">christoreyespina@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-check verified-icon active"></i></td>
                        <td data-label="Status"><span class="status-tag active">Active</span></td>
                        <td data-label="Date Joined">2025-08-15</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                    <tr>
                        <td data-label="ID">U0013</td>
                        <td data-label="Name">Hyacinth Reyes</td>
                        <td data-label="Role"><span class="role-tag student">Student</span></td>
                        <td data-label="Email">reyeshyacinth@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-xmark verified-icon unverified"></i></td>
                        <td data-label="Status"><span class="status-tag unverified">Unverified</span></td>
                        <td data-label="Date Joined">2025-08-20</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                    <tr>
                        <td data-label="ID">U0014</td>
                        <td data-label="Name">Joshua Ramos</td>
                        <td data-label="Role"><span class="role-tag student">Student</span></td>
                        <td data-label="Email">jramos@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-xmark verified-icon pending"></i></td>
                        <td data-label="Status"><span class="status-tag pending">Pending</span></td>
                        <td data-label="Date Joined">2025-08-20</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                    <tr>
                        <td data-label="ID">U0015</td>
                        <td data-label="Name">Taylor Swift</td>
                        <td data-label="Role"><span class="role-tag donor">Donor</span></td>
                        <td data-label="Email">taylorswift@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-check verified-icon active"></i></td>
                        <td data-label="Status"><span class="status-tag active">Active</span></td>
                        <td data-label="Date Joined">2025-08-22</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                    <tr>
                        <td data-label="ID">U0016</td>
                        <td data-label="Name">Allyssa Ejares</td>
                        <td data-label="Role"><span class="role-tag student">Student</span></td>
                        <td data-label="Email">allyejares@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-check verified-icon active"></i></td>
                        <td data-label="Status"><span class="status-tag active">Active</span></td>
                        <td data-label="Date Joined">2025-08-19</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                     <tr>
                        <td data-label="ID">U0017</td>
                        <td data-label="Name">Angel Lopez</td>
                        <td data-label="Role"><span class="role-tag student">Student</span></td>
                        <td data-label="Email">angelopez@gmail.com</td>
                        <td data-label="Verified"><i class="fa-solid fa-circle-check verified-icon active"></i></td>
                        <td data-label="Status"><span class="status-tag active">Active</span></td>
                        <td data-label="Date Joined">2025-08-20</td>
                        <td data-label="Actions"><i class="fa-solid fa-ellipsis-vertical action-icon"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    <script src="{{ asset('js/admin-accounts.js') }}"></script>
</body>
</html>
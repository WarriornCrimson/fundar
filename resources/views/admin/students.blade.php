<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin-sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/students.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <x-admin-sidebar/>

    <div class="admin-accounts">
        <main class="verification-dashboard-container">

            <div class="stats-grid-verification">
                <div class="stat-card-verification">
                    <div class="stat-label">Pending Verifications</div>
                    <div class="stat-value primary-text">3</div>
                    <div class="stat-detail">Awaiting review</div>
                </div>

                <div class="stat-card-verification">
                    <div class="stat-label">Average Processing Time</div>
                    <div class="stat-value secondary-text">2 days</div>
                    <div class="stat-detail">From submission to approval</div>
                </div>

                <div class="stat-card-verification">
                    <div class="stat-label">Verification Rate</div>
                    <div class="stat-value positive-text">92%</div>
                    <div class="stat-detail">Successfully verified</div>
                </div>
                
                {{-- Add a placeholder for the 4th column if needed, or adjust grid-template-columns --}}
            </div>

            <div class="search-bar-list">
                <div class="search-input-wrapper-list">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search by name, email, or ID..." id="userSearchInput">
                </div>
            </div>

            <div class="data-table-wrapper-verification">
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Document Type</th>
                            <th>Submission Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="verificationTableBody">
                        {{-- Mock data to match the image --}}
                        @php
                            $pending_users = [
                                ['name' => 'Roberto Cruz', 'email' => 'robertcruz@gmail.com', 'document' => 'Student ID + Certificate of Enrollment', 'submission_date' => '2024-08-20'],
                                ['name' => 'Hyacinth Reyes', 'email' => 'reyeshyacinth@gmail.com', 'document' => 'Student ID + Certificate of Enrollment', 'submission_date' => '2024-08-20'],
                                ['name' => 'Joshua Ramos', 'email' => 'jramos@gmail.com', 'document' => 'Student ID + Certificate of Enrollment', 'submission_date' => '2024-08-20'],
                            ];
                        @endphp

                        @foreach ($pending_users as $user)
                            <tr>
                                <td data-label="Student Name">{{ $user['name'] }}</td>
                                <td data-label="Email">{{ $user['email'] }}</td>
                                <td data-label="Document Type">
                                    <i class="fa-solid fa-file-lines" style="margin-right: 5px;"></i>
                                    {{ $user['document'] }}
                                </td>
                                <td data-label="Submission Date">{{ $user['submission_date'] }}</td>
                                <td data-label="Actions">
                                    <a href="#" class="btn-primary review-btn-table">Review</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/students.js') }}"></script>
</body>
</html>
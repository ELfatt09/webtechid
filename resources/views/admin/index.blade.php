@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<h1>Admin Dashboard</h1>
<div class="admin-dashboard">
    <aside class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Comments</a></li>
            <li><a href="#">Users</a></li>
        </ul>
    </aside>

    <main class="dashboard-content">
        <div class="chart">
            <canvas id="chart" width="400" height="200"></canvas>
        </div>
        <div class="user-info">
            <h2>Admin Info</h2>
            <p>Username: admin</p>
        </div>
    </main>
</div>

<script>
    // Dummy chart initialization
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('chart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March'],
                datasets: [{
                    label: 'Views',
                    data: [12, 19, 3],
                    backgroundColor: ['rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            }
        });
    });
</script>
@endsection

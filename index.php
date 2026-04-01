<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .menu-card {
            width: 100%;
            max-width: 400px;
        }
        .btn-menu {
            font-size: 1.1rem;
            padding: 12px;
        }
    </style>
</head>
<body>
    <div class="menu-card card shadow">
        <div class="card-body p-4">
            <h2 class="card-title text-center mb-4">Main Menu</h2>
            <div class="d-grid gap-3">
                <a href="https://www.espn.com" target="_blank" class="btn btn-danger btn-menu">ESPN</a>
                <a href="https://www.facebook.com" target="_blank" class="btn btn-primary btn-menu">Facebook</a>
                <a href="https://www.instagram.com" target="_blank" class="btn btn-menu" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); color: white; border: none;">Instagram</a>
                <a href="https://www.cbc.ca" target="_blank" class="btn btn-dark btn-menu">CBC</a>
            </div>
        </div>
    </div>
</body>
</html>

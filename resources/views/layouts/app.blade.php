<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>📘</text></svg>">
    <title>Bookstore Management System</title>
    <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f9fafb;
          margin: 0;
        }
        
        .dashboard-header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          background-color: #111827;
          padding: 10px 30px;
          color: white;
          margin-bottom: 30px;
        }
        
        .dashboard-header h2 {
          font-size: 24px;
          margin: 0;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        
        .actions {
          display: flex;
          align-items: center;
          gap: 10px;
          margin: 1%;
          flex-grow: 1;
        }
        
        .actions input[type="text"] {
          padding: 8px 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
        }

        .search-container { 
          display: flex;
          width: 70%;
        }
        
        .search-container input[type="text"] {
          flex-grow: 1;
          padding: 8px 45px;
          border: 1px solid #ccc;
          border-radius: 4px; 
        }

        .search-container form {
          display: flex;
          width: 100%;
          gap: 10px;
        }

        .search-btn, .new-book-btn {
          background-color: #3b82f6;
          color: white;
          padding: 8px 16px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          text-decoration: none;
          transition: background-color 0.3s;
          white-space: nowrap;
        }
        
        .search-btn:hover {
          background-color: #2563eb;
        }
        
        .new-book-btn {
          background-color: #10b981;
        }
        
        .new-book-btn:hover {
          background-color: #059669;
        }
        
        .dashboard-table {
          width: 98%;
          border-collapse: collapse;
          margin: 1%;
        }
        
        .dashboard-table th, .dashboard-table td {
          padding: 12px;
          border: 1px solid #e5e7eb;
          text-align: left;
        }
        
        .dashboard-table th {
          background-color: #f3f4f6;
        }
        
        .action-buttons button, .action-buttons a {
          margin-right: 5px;
          padding: 6px 10px;
          border: 2px solid;
          border-radius: 4px;
          background-color: white;
          cursor: pointer;
          text-decoration: none;
          font-weight: bold;
          transition: 0.3s;
        }
        
        .details-btn {
          border-color: #3b82f6;
          color: #3b82f6;
        }
        
        .details-btn:hover {
          background-color: #3b82f6;
          color: white;
        }
        
        .update-btn {
          border-color: #059669;
          color: #059669;
        }
        
        .update-btn:hover {
          background-color: #059669;
          color: white;
        }
        
        .delete-btn {
          border-color: #f87171;
          color: #f87171;
        }
        
        .delete-btn:hover {
          background-color: #f87171;
          color: white;
        }
        
/* Pagination Styles */
.pagination-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1px;
    padding: 5px 10px;
    gap: 10px;
    margin-bottom: 10px;
    flex-grow: 1;
}

.pagination-info {
    color: #4b5563;
    font-size: 14px;
    justify-content: left;
}

.pagination-buttons {
    display: flex;
    gap: 5px;
    justify-content: right;
}

.pagination-buttons a,
.pagination-buttons span {
    display: inline-block;
    padding: 5px 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    text-decoration: none;
    color: #333;
    min-width: 30px;
    text-align: center;
}

.pagination-buttons a:hover {
    background-color:rgba(117, 132, 187, 0.65);
    color: white;
    border-color: #3b82f6;
}

.pagination-buttons .active {
    background-color:rgb(22, 107, 245);
    color: white;
    border-color:rgb(34, 116, 248);
}

.pagination-buttons .disabled {
    color: #ccc;
    border-color: #eee;
    cursor: not-allowed;
}

.pagination-buttons .dots {
    border: none;
    padding: 5px 5px;
}
        .form-container {
          max-width: 450px;
          margin: 50px auto;
          background-color: white;
          padding: 30px;
          border-radius: 8px;
          box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }
        
        .add-book-form {
          display: flex;
          flex-direction: column;
          gap: 24px; 
        }
        
        .form-group {
          display: flex;
          flex-direction: column;
        }
        
        .form-group label {
          margin-bottom: 8px;
          font-weight: bold;
          font-size: 14px;
        }
        
        .form-group input {
          padding: 10px 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
        }
        
        .form-buttons {
          display: flex;
          justify-content: space-between;
          align-items: center;
        }
        
        .submit-btn {
          background-color: #152bed;
          color: white;
          padding: 10px 24px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          transition: background-color 0.3s;
          text-decoration: none;
        }
        
        .submit-btn:hover {
          background-color: #058096;
        }
        
        .back-link {
          background-color: #eb0e2f;
          color: white;
          padding: 10px 24px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          transition: background-color 0.3s;
          text-decoration: none;
        }
        
        .back-link:hover {
          background-color: #e74d2e;
        }
    </style>
</head>
<body>
    @yield('content')

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
</body>
</html>

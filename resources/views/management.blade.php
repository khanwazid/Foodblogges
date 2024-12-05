<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <div class="admin-comments">
        <div class="comments-header">
            <h2>Manage Comments</h2>
        </div>
    
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <div class="comments-table">
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Post</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  
                        <tr>
                           
                            <td class="actions">
                                <button class="btn-edit" onclick="openEditModal()">
                                    <i class="fas fa-edit"></i>
                                </button>
                                
                                
                                    <button type="submit" class="btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
    
                        <!-- Edit Modal -->
                        <div id="editModal" class="modal">
                            <div class="modal-content">
                                <h3>Edit Comment</h3>
                               
                                    <textarea name="content" rows="4"></textarea>
                                    <div class="modal-actions">
                                        <button type="button" onclick="closeEditModal()">Cancel</button>
                                        <button type="submit">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                   
                </tbody>
            </table>
    
            <div class="pagination">
               
        </div>
    </div>
    
    <style>
    .admin-comments {
        padding: 2rem;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    
    .comments-header {
        margin-bottom: 2rem;
    }
    
    .comments-table table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .comments-table th,
    .comments-table td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #eee;
    }
    
    .comments-table th {
        background: #f8f9fa;
        font-weight: 600;
    }
    
    .actions {
        display: flex;
        gap: 10px;
    }
    
    .btn-edit,
    .btn-delete {
        padding: 0.5rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    
    .btn-edit {
        background: #ffc107;
        color: #000;
    }
    
    .btn-delete {
        background: #dc3545;
        color: #fff;
    }
    
    .btn-edit:hover,
    .btn-delete:hover {
        transform: translateY(-2px);
    }
    
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
    }
    
    .modal-content {
        background: #fff;
        padding: 2rem;
        border-radius: 10px;
        max-width: 500px;
        margin: 100px auto;
    }
    
    .modal textarea {
        width: 100%;
        padding: 1rem;
        margin: 1rem 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    
    .modal-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
    }
    
    .pagination {
        margin-top: 2rem;
        display: flex;
        justify-content: center;
    }
    </style>
    
    <script>
    function openEditModal(id) {
        document.getElementById('editModal' + id).style.display = 'block';
    }
    
    function closeEditModal(id) {
        document.getElementById('editModal' + id).style.display = 'none';
    }
    
    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    }
    </script>   
</body>
</html>
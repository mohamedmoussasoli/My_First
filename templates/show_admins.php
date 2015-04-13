<!DOCTYPE html>

<html>
    <head>
        <title>Show admins</title>
        
        <style>
            table {
                border-spacing: 0px;
            }
            
            th,td {
                padding: 20px;
            }
        </style>
    </head>
    
    <body>
            
        <table border="1">
            <tr>
                <th>#id</th><th>Username</th><th>Email</th><th>control</th>
            </tr>
            
            <?php foreach($users as $user) { ?>
                <tr>
                    <td><?php echo $user['user_id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <a href="?action=edit&id=<?php echo $user['user_id'] ?>">Edit</a> ||
                        <a href="?action=delete&id=<?php echo $user['user_id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            
        </table>
    
    
    </body>
</html>

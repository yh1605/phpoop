<?php
require("header.php");
?>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-head bg-dark text-white">
                        <h2>User List</h2>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="bg-dark text-white">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php
                                    $result = $user->select();
                                    if($result){
                                    foreach($result as $key => $row){
                                    $id = $row['user_id'];                                
                                    echo "<tr>";
                                    echo "<td>" . $row['user_id'] . "</td>";
                                    echo "<td>" . $row['username'] . "</td>";
                                    echo "<td>" . $row['firstname'] . "</td>";
                                    echo "<td>" . $row['lastname'] . "</td>";
                                    echo "<td>
                                    <a href='edituser.php?id=$id' class='btn btn-sm btn-info'>Edit</a>
                                    <a href='deleteuser.php?id=$id' class='btn btn-sm btn-danger'>Delete</a>
                                    </td>";
                                    echo "</tr>";
                                    }
                                }
                                else{
                                    echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="adduser.php" class="btn btn-sm btn-secondary">Add User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4>User Manajemen</h4>
    <?php
    try {
        $db = new PDO("mysql:host=" . DB_HOST . ";PORT=" . DB_PORT . ";dbname=" . DBASE . ";", DB_USER, DB_PASS);
    } catch (\PDOException $e) {
        die("<meta http-equiv='refresh' content='0; url=/405.html' />");
    }

    $stmt = $db->prepare("select * from surveyor");
    $stmt->execute();
    ?>
    <div class="card">
        <h5 class="card-header">Table User</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Userid</th>
                        <th>Level</th>
                        <th>Last Login</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php 
                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                    echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['level']."</td>
                        <td>".$row['last_login']."</td>
                        <td>
                            <a class='btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit pull-up' 
                               href='?pages=edit_user&id=".$row['id']."'
                               data-bs-toggle='tooltip'
                               data-popup='tooltip-custom'
                               data-bs-placement='top'
                               title='Edit User'>
                                <i class='mdi mdi-pencil-outline me-1'></i>
                            </a>
                            <a class='btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit pull-up' 
                               href='?pages=delete_user&id=".$row['id']."' 
                               data-bs-toggle='tooltip'
                               data-popup='tooltip-custom'
                               data-bs-placement='top'
                               title='Delete User'>
                                <i class='mdi mdi-delete-outline me-1'></i>
                            </a>
                        </td>
                    </tr>";
                }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
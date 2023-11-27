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
        <div class="card-header d-flex align-items-center">
            <h5 class="mb-0 align-items-center">Table User</h5>
            <a href="?pages=tambah_surveyor" 
               class="btn btn-primary btn-text-primary ms-auto"
               data-bs-toggle='tooltip'
               data-popup='tooltip-custom'
               data-bs-placement='top'
               title='Tambah Surveyor'>
                Tambah Surveyor
            </a>

        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Surveyor ID</th>
                        <th>Nama Surveyor</th>
                        <th>Level</th>
                        <th>Last Login</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php 
                foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                    echo "<tr>
                        <td>".$row['surveyor_id']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['level']."</td>
                        <td>".$row['last_login']."</td>
                        <td>
                            <a class='btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit pull-up' 
                               href='?pages=edit_user&id=".$row['surveyor_id']."'
                               data-bs-toggle='tooltip'
                               data-popup='tooltip-custom'
                               data-bs-placement='top'
                               title='Edit User'>
                                <i class='mdi mdi-pencil-outline me-1'></i>
                            </a>
                            <a class='btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit pull-up' 
                               href='?pages=delete_user&id=".$row['surveyor_id']."' 
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
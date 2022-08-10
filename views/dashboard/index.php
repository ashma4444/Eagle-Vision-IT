<div class="table-container">
    <table>
        <div class="user-management">
            <h2>User Management</h2>
            <form action="export.php" method="post" target="_blank">
                <button class="export-btn" name="export"> 
                    <i class="fa-solid fa-file"></i>
                    Export to PDF
                </button>
            </form>
        </div>

        <div class="circle"></div>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $db = new DatabaseConnection();
                $data = $db -> limit_query("user", 0, 3);
                if( !empty( $data ) ):
                    foreach( $data as $key => $d ): ?>
                        <tr>
                            <td> <?php echo $key+1 ?> </td>
                            <td> 
                                <div class="td-img-container">
                                    <img src="assets/images/IMG_-1.png" alt="">
                                    <?php echo $d[ 'name' ]; ?> 
                                </div>
                            </td>

                            <td><?php echo $d['email']; ?></td>
                            <td>
                                <?php 
                                    $date = strtotime( $d['created_date'] );
                                    echo date( 'd/m/Y', $date );
                                ?>
                            </td>
                            <td id="role"><?php echo $d['role']; ?></td>
                            <td class="action-container">
                                    <a href="signup.php?id=<?php echo $d['id']; ?>" class="update-btn"><i class="fa-regular fa-gear"></i></a> 
                                    <a href="controller/form-action.php?id=<?php echo $d['id']; ?>" class="delete-btn"><i class="fa-solid fa-circle-xmark"></i></a>
                                    <!-- <a class="delete-btn"><i class="fa-solid fa-circle-xmark"></i></a> -->
                            </td>
                        </tr>
                    <?php endforeach;
                endif;           
            ?>
        </tbody>
    </table>

    <?php $pagination_data = $db -> select_query(array("*"), "user" );
    $max = ceil( count( $pagination_data )/3 );?>
    <div class="pagination-container" data-max-page="<?php echo $max ?>">            
        <a href="" id="0" class="prev">prev</a>
        <?php 
            for($i = 1; $i <= $max; $i++ ){
                $active = $i== 1 ? 'active': ''; ?>
                <a href="" class="<?php echo $active; ?>" id="<?php echo $i ?>"> <?php echo $i ?> </a>  
        <?php } ?>
        <a href="" id="2" class="next">next</a>
    </div>
</div>
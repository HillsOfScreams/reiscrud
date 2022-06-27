<td>
                                    <form action="php/add.php" method="post">
                    
                                        <button type="submit" class="btn btn-success"> ADD</button>
                                    </form>
                                </td>
          
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> product_ID </th>
                            <th> Omschrijving </th>
                            <th> Prijs </th>
                            <th> EDIT</th>
                            <th> DELETE</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('includes/connect.php');
                        $query = "SELECT * FROM prodct";
                        $result = $connect->query($query);

                        if(mysqli_num_rows($result) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['product_ID']; ?></td>
                                <td><?php  echo $row['productomschrijving']; ?></td>
                                <td><?php  echo $row['prijs']; ?></td>
                              
                                <td>
                                    <form action="php/update.php" method="post">
                                        <input type="text" name="edit_product_ID" value="<?php echo $row['product_ID']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="php/delete.php" method="post">
                                        <input type = "hidden" name = "delete_product_ID" value="<?php echo $row['product_ID']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>

                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

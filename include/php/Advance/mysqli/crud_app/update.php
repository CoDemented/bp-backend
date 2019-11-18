




<!-- ----------------------------------Update Record Modal -->
<div class="modal fade" id="modalUpdateRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 85%">
        <div class="modal-content px-3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Source Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="width-230px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($queryResult)) { ?>
                        <tr>
                            <td>
                                <?php echo $counter; ?>
                            </td>
                            <td>
                                <?php echo $row['first_name'] ?>
                            </td>
                            <td>
                                <?php echo $row['last_name'] ?>
                            </td>
                            <td>
                                <?php echo $row['email'] ?>
                            </td>
                            <td>
                                <button class="oper-btn btn btn-outline-info  btn-block m-0"><i class="fal fa-edit"></i> Edit</button>
                                <form method="POST" class="d-inline">
                                    <input type="hidden" name="row_id" value='<?php echo $row['id']; ?>'>
                                    <button type="submit" name="delete" class="oper-btn btn btn-outline-danger btn-block m-0"><i
                                            class="fal fa-trash"></i> Delete
                                    </button>
                                </form>

                            </td>

                        </tr>
                        <?php
                        $counter++;
                    } ?>
                    <tr>
                        <form method="POST">
                            <td class="text-center">
                                <i class="fal fa-spinner-third"></i>
                            </td>
                            <td>
                                <input size="10" placeholder="First Name" type="text" name="firstName" class="input-fields">
                            </td>
                            <td>
                                <input size="10" placeholder="Last Name" type="text" name="lastName" class="input-fields">
                            </td>
                            <td>
                                <input size="30" placeholder="Email Address" type="email" name="email" class="input-fields">
                            </td>
                            <td>
                                <form method="POST" class="d-inline">
                                    <input type="hidden" name="row_id" value='<?php echo $row['id']; ?>'>
                                    <button type="submit" name="update" class="oper-btn btn btn-outline-danger btn-block m-0"><i
                                            class="fal fa-trash"></i> update
                                    </button>
                                </form>
                            </td>
                        </form>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ----------------------------------Update Record Modal -->

<link rel="stylesheet" href="<?php echo base_url(); ?>css/leave.css">

<body>
    <div class="fluid-container leave-page mt-5">
        <div class="card card-1">
            <div class="card-body">
                <h5 class="card-title">Leave Portal</h5>
                <h6 class="card-subtitle mb-2 text-muted ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" style="color: #6c757d !important; ">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Leave Application Verfication</li>
                        </ol>
                    </nav>
                </h6>
            </div>
        </div>

        <div class="card card-2">
            <div class="card-body table-responsive" style="overflow-x: scroll; overflow-y: scroll">
                <h5 class="card-title">Leave Application Verfication</h5>
                <form action="<?php echo base_url('update_status') ?>" method="post">
                    <table id="example" class="table table-striped table-hover align-middle" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>TIMESTAMP</th>
                                <th>APPLICATION ID</th>
                                <th>SEVARTH ID</th>
                                <th>STAFF NAME</th>
                                <th>LEAVE TYPE</th>
                                <th>LEAVE REASON</th>
                                <th>LEAVE STATUS</th>
                                <th>RANGE</th>
                                <th>DURATION</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($leave_application)) {
                                foreach ($leave_application as $key) {
                            ?>
                                    <tr>
                                    <td style="text-align: center;" >
                                            <input type="hidden" value="<?php echo ($key['time_stamp']); ?>" name="application_id" id="application_id"><?php echo ($key['time_stamp']); ?>
                                        </td>
                                        <td style="text-align: center;" >
                                            <input type="hidden" value="<?php echo ($key['application_id']); ?>" name="application_id" id="application_id"><?php echo ($key['application_id']); ?>
                                        </td>
                                        <td><?php echo ($key['sevarth_id']); ?></td>
                                        <td><label class="profile-name"><?php echo ($key['full_name']); ?></label></td>
                                        <td><?php echo ($key['leave_type']); ?></td>
                                        <td style="max-width:100px"><?php echo ($key['leave_reason']); ?></td>
                                        <td class="approved"><?php echo ($key['leave_status']); ?></td>
                                        <td> <b>From : </b> <?php echo ($key['start_date']); ?><br> <b>To :&nbsp;&nbsp;&nbsp; &nbsp;  </b> <?php echo ($key['end_date']); ?></td>
                                        <td style="text-align: center;"><?php echo ($key['duration']); ?></td>
                                        <td>
                                            <!-- <div class="btn-group">
                                            <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu card" style="text-align: center;">
                                                <li><a href="<?php echo base_url('all_leave/approve_leave/' . $key['application_id']); ?>" class=" btn-primary mt-3 mb-3 px-2 py-2" id="approve">Approve</a></li>
                                                <li><a href="<?php echo base_url('all_leave/reject_leave/' . $key['application_id']); ?>" class="btn-danger px-2 py-2" id="reject">Reject</a></li>
                                            </ul>
                                        </div> -->
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item text-success" href="<?php echo base_url('all_leave/approve_leave/' . $key['application_id']); ?>">Approve</a></li>
                                                    <li><a class="dropdown-item text-danger" href="<?php echo base_url('all_leave/reject_leave/' . $key['application_id']); ?>">Reject</a></li>
                                                    <!-- <li><a href="" id="approve">Approve</a></li>
                                                    <li><a href="" id="reject">Reject</a></li> -->

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                            <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

<script>
    var menu_btn = document.querySelector("#menu-btn")
    var sidebar = document.querySelector("#sidebar")
    var container = document.querySelector(".leave-page")
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav")
        container.classList.toggle("active-cont")
    })
</script>

<script>
    $(document).ready(function () {
    $('#example').DataTable({
        order: [[0, 'desc']],
    })
    
});


</script>

<!-- <script src="<?php echo base_url(); ?>js/leave.js"></script>-->
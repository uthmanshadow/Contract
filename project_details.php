<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NPA PST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/npa_bg_img.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Project Details</h2>
                <div class="form-container">
                    <form action="project_progress.php">
                        <div>
                            <label for="ptbreference" class="form-control">PTB Reference</label>
                            <input type="text" class="form-control" id="ptbReference" name="ptbreference">
                        </div>
                        <div>
                            <label for="ptbdate" class="form-label"> PTB Date</label>
                            <input type="date" class="form-control" id="ptbdate" name="ptbdate">
                        </div>
                        <div class="mb-3">
                            <label for="projName" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="projName" name="projName">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-select" id="department" name="department">
                                <option value="N&C">N&C</option>
                                <option value="HI&S">HI&S</option>
                                <option value="R&SP">R&SP</option>
                                <option value="SA&DM">SA&DM</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="projAwardDate" class="form-label">Project Award Date</label>
                            <input type="date" class="form-control" id="projAwardDate" name="projAwardDate">
                        </div>
                        <div class="mb-3">
                            <label for="awardExecutionPeriod" class="form-label">Award Execution Period</label>
                            <input type="text" class="form-control" id="awardExecutionPeriod" name="awardExecutionPeriod">
                        </div>
                        <div class="mb-3">
                            <label for="projectSupervisor" class="form-label">Project Supervisor</label>
                            <input type="text" class="form-control" id="projectSupervisor" name="projectSupervisor">
                        </div>
                         <div class="mb-3">
                            <label for="projEndDate" class="form-label">Project End Date</label>
                            <input type="date" class="form-control" id="projAwardDate" name="projAwardDate">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

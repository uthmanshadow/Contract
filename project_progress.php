<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NPA PST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center">Project Progress</h2>
                    <form action="project_progress.php">
                        <div class="mb-3">
                            <label for="periodFrom" class="form-label">Period From</label>
                            <input type="date" class="form-control" id="periodFrom" name="periodFrom">
                        </div>
                        <div class="mb-3">
                            <label for="periodTo" class="form-label">Period To</label>
                            <input type="date" class="form-control" id="periodTo" name="periodTo">
                        </div>
                        <div class="mb-3">
                            <label for="tasksAccomplished" class="form-label">Tasks Accomplished to Date</label>
                            <textarea class="form-control" id="tasksAccomplished" name="tasksAccomplished" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pendingTasks" class="form-label">Pending Tasks</label>
                            <textarea class="form-control" id="pendingTasks" name="pendingTasks" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="constraints" class="form-label">Constraints</label>
                            <textarea class="form-control" id="constraints" name="constraints" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="remark" class="form-label">Remark</label>
                            <textarea class="form-control" id="remark" name="remark" rows="3"></textarea>
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
<?php
include 'views/layout/header.php';
include 'views/layout/sidebar.php';
?>

<div class="flex-grow-1 p-4">
    <h4>Add Event</h4>
    <div class="container-fluid">
        <div class="card shadow-sm p-4">

            <form action="index.php?page=event&action=add" method="POST">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="title" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter event title" required>
                        </div>

                        <div class="mb-3">
                            <label for="event_date" class="form-label">Event Date</label>
                            <input type="date" class="form-control" id="event_date" name="event_date" required>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Enter event location">
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="event_type" class="form-label">Event Type</label>
                            <select class="form-select" id="event_type" name="event_type" required>
                                <option value="" disabled selected>Select event type</option>
                                <option value="fundraising">Fundraising</option>
                                <option value="awareness">Awareness</option>
                                <option value="education">Education</option>
                                <option value="medical_camp">Medical Camp</option>
                                <option value="community_service">Community Service</option>
                                <option value="celebration">Celebration</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="organized_by" class="form-label">Organized By</label>
                            <input type="text" class="form-control" id="organized_by" name="organized_by" placeholder="Enter organizer name">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="planned" selected>Planned</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="expected_fund" class="form-label">Expected Fund</label>
                            <input type="number" step="0.01" class="form-control" id="expected_fund" name="expected_fund" placeholder="e.g. 10000.00">
                        </div>

                        <div class="mb-3">
                            <label for="raised_fund" class="form-label">Raised Fund</label>
                            <input type="number" step="0.01" class="form-control" id="raised_fund" name="raised_fund" placeholder="e.g. 5000.00">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Event details..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary me-2">Save Event</button>
                    <a href="index.php?page=event" class="btn btn-secondary">Back to List</a>
                </div>
            </form>

        </div>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>

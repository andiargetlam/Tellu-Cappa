<?php include 'header.php'; ?>

<!-- First Block: Jumbotron Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    <!-- Add more carousel indicators as needed -->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h3>Headline 1</h3>
      <p>Some words and date</p>
    </div>
    <div class="carousel-item">
      <h3>Headline 2</h3>
      <p>Some words and date</p>
    </div>
    <div class="carousel-item">
      <h3>Headline 3</h3>
      <p>Some words and date</p>
    </div>
    <!-- Add more carousel items as needed -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php
// Fetch feed data from the database or external source
$feedData = [
  ['date' => '2023-10-20', 'content' => 'Feed 1', 'editedBy' => 'Admin 1', 'lastEditedTime' => '10:00 AM'],
  ['date' => '2023-10-19', 'content' => 'Feed 2', 'editedBy' => 'Admin 2', 'lastEditedTime' => '11:00 AM'],
  ['date' => '2023-10-18', 'content' => 'Feed 3', 'editedBy' => 'Admin 3', 'lastEditedTime' => '12:00 PM'],
  // Add more feed data as needed
];

// Display the feed
foreach ($feedData as $feed) {
  echo '<div class="feed">';
  echo '<p>Date: ' . $feed['date'] . '</p>';
  echo '<p>Content: ' . $feed['content'] . '</p>';
  echo '<p>Edited by: ' . $feed['editedBy'] . '</p>';
  echo '<p>Last edited time: ' . $feed['lastEditedTime'] . '</p>';
  echo '</div>';
}
?>

<?php
// Calculate the total number of pages
$totalPages = 12;

// Get the current page from the URL parameter
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

// Display the page
echo '<div class="pagination">';
for ($i = 1; $i <= $totalPages; $i++) {
  echo '<a href="?page=' . $i . '">' . $i . '</a>';
}
echo '</div>';
?>

<?php include 'footer.php'; ?>
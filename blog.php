<?php
     require_once('./inc/head.php');
     ?>
  <body>
  <?php
     require_once('./inc/nav.php');
     ?>



    <section class="p-[5%]">
      <img src="./assets/img/google-add.png" class="w-full" alt="" />
    </section>

  
  
  
    <!-- ======================SLIDER DIOR START HERE=============== -->
<?php
// Check if the blog_id parameter is set in the URL
if (isset($_GET['cat_id'])) {
    // Retrieve the blog_id from the URL
    $specific_id = $_GET['blog_id'];

    // Proceed with fetching data for the specific ID
    $query = "SELECT * FROM blogs WHERE id = $specific_id"; // Modify the query to fetch data for the specific ID
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            // Fetch data for the specific ID
            $row = mysqli_fetch_assoc($result);

            // Retrieve date, title, and category
            $date = date('M d, Y', strtotime($row['date']));
            $title = $row['first_title'] . ' ' . $row['second_title'] . ' ' . $row['third_title'];
            $category = $row['categories'];
            $blog_data = isset($row['blog_data']) ? $row['blog_data'] : ''; // Check if blog_data is not null

            ?>
    <section>
      <!-- Swiper -->
      <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
        <?php
                        // Loop through image columns
                        for ($i = 0; $i <= 5; $i++) {
                            $image_column = ($i == 0) ? 'image' : 'image' . $i;
                            // Check if the image column exists and is not empty
                            if (!empty($row[$image_column])) {
                                ?>
          <div class="swiper-slide">
            <div
              class="bg-[url('./assets/img/<?php echo $row[$image_column]; ?>')] h-screen bg-cover bg-no-repeat flex items-end justify-center"
            >
              <div class="pb-8">
                <p class="text-2xl nimbusl-regular text-[#ffffff]">
                  Source : <?php echo $category; ?> Collection
                </p>
              </div>
            </div>
           
          </div>
          <?php
                            }
                        }
                        ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="p-[5%]">
              <div
                class="text-xl nimbusl-bold text-[#AEAEAE] flex items-center gap-10 border-b border-[#A4A4A4]"
              >
                <p><?php echo $date; ?></p>
                <ul class="list-disc">
                  <li><?php echo $category; ?></li>
                </ul>
              </div>
              <h1 class="text-black text-6xl nimbusl-bold py-3">
              <?php echo $row['first_title'];?> <span class="ogg"><?php echo $row['second_title'];?> <i><?php echo $row['third_title'];?></i> </span>
              </h1>
              <p class="text-xl leading-[34px] text-[#A4A4A4] nimbusl-regular">
              <?php echo $blog_data; ?>
              </p>
              <a href="./single-blog.html">
                <button
                  class="px-16 py-3 text-lg text-white nimbusl-regular bg-black mt-8"
                >
                  Read More
                </button>
              </a>
            </div>
    </section>
    <?php
        } else {
            echo "<p>No related blogs found.</p>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No blog ID specified.";
}
?>
    <section class="py-[5%] px-[15%]">
      <img src="./assets/img/google-add.png" class="w-full" alt="" />
    </section>
    <section class="h-screen relative overflow-y-hidden">
      <div>
        <video width="100%" height="1080" autoplay loop>
          <source
            src="https://fiverr-res.cloudinary.com/video/upload/t_fiverr_hd/wsal2koyazxtu7gnbju7"
            type="video/mp4"
          />
          <!-- <source src="movie.ogg" type="video/ogg"> -->
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="pl-[5%] pb-8 absolute bottom-10">
        <div
          class="text-xl nimbusl-bold text-[#AEAEAE] flex items-center gap-10"
        >
          <p>Sep 2 , 2022</p>
          <ul class="list-disc">
            <li>Fashion</li>
          </ul>
        </div>
        <h1 class="text-white text-6xl nimbusl-bold">
          Making of Vogue arabia june 2023
          <span class="ogg"><i>saudi issue</i> </span>
        </h1>
      </div>
    </section>
   
    <section class="py-[5%] px-[15%]">
      <img src="./assets/img/google-add.png" class="w-full" alt="" />
    </section>


 
<?php
     require_once('./inc/footer.php');
     ?>
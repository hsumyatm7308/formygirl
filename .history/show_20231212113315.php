<?php
require_once('database.php');

try {
    $stmt = $conn->prepare("SELECT photo, name, wish FROM wishes");
    $stmt->execute();



} catch (Exception $e) {
    echo $e->getMessage();
}


// Constants
$recordsPerPage = 4;

// Get the current page number from the URL
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $recordsPerPage;

try {
    // Count total records
    $totalRecordsStmt = $conn->prepare("SELECT COUNT(*) as total FROM wishes");
    $totalRecordsStmt->execute();
    $totalRecords = $totalRecordsStmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Fetch records for the current page
    $stmt = $conn->prepare("SELECT photo, name, wish FROM wishes LIMIT ?, ?");
    $stmt->bindValue(1, $offset, PDO::PARAM_INT);
    $stmt->bindValue(2, $recordsPerPage, PDO::PARAM_INT);
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}




?>


<div class="grid lg:grid-cols-2 grid-cols-1 gap-4 lg:mt-20 mt-10">
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>

        <div class="w-full card p-5">
            <div class="w-full lg:border-r border border-r-gray-300 rounded-md flex flex-col justify-end item-center p-4">
                <div class="w-full h-[10vh]  grid grid-cols-7 place-items-start text-end flex justify-center item-start space-x-5 mb-10">
                    <div
                        class="w-[50px] h-[50px] border bg-gray-100 flex justify-center items-center  overflow-hidden bg-blue-00 transform rounded-full">
                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['photo']); ?>" alt="Image"
                            class="rounded-full" >
                    </div>
                    <div class="col-span-6 text-start flex flex-col space-y-4 self-start bg-blue-00">
                        <span class="self-start leading-relaxed wish-string">
                            <?php echo $row['wish']; ?>
                        </span>
                    </div>
                </div>
                <div class="text-black self-end bg-blue-">by <span class="font-medium">
                        <?php echo $row['name']; ?>
                    </span></div>
            </div>
        </div>
    <?php endwhile ?>

</div>

<!-- Pagination Links -->
<!-- Pagination Links -->
<?php if ($totalRecords > $recordsPerPage): ?>




    <div class="w-full flex justify-center items-center space-x-6 lg:mt-20 mt-10">

        <?php
        $totalPages = ceil($totalRecords / $recordsPerPage);

        // Display "Previous" button
        if ($page >= 1) {
            $prevPage = ($page == 1) ? 1 : ($page - 1);

            echo "<a href='index.php?page=" . $prevPage . "'>
                    <div class='w-10 h-10 border rounded-full flex justify-center items-center hover:bg-gray-400 transition duration-150 js-slider-sites-prev'>
                        <svg width='8' height='12' viewBox='0 0 8 12'>
                            <path d='M3.37879 6.64083L2.74979 6.01183L3.37879 5.37654L7.64341 1.11193L6.75652 0.218751L1.85661 5.11865L0.969726 6.00554L2.4919 7.52772L6.75652 11.7923L7.64341 10.9054L3.37879 6.64083Z' />
                        </svg>
                    </div>
                  </a>";
        }



        // Display "Next" button
        if ($page <= $totalPages) {
            $nextPage = ($page == $totalPages) ? $totalPages : ($page + 1);

            echo "<a href='index.php?page=" . $nextPage . "'>
                        <div class='w-10 h-10 border rounded-full flex justify-center items-center hover:bg-gray-400 transition duration-300 js-slider-sites-next'>
                            <svg width='8' height='13' viewBox='0 0 8 13'>
                                <path d='M5.13292 5.61893L5.76192 6.24793L5.13292 6.88322L0.86831 11.1478L1.7552 12.041L6.6551 7.14111L7.54199 6.25422L6.01981 4.73204L1.7552 0.467429L0.86831 1.35432L5.13292 5.61893Z' />
                            </svg>
                        </div>
                      </a>";
        }

        ?>






    </div>
<?php endif; ?>



<script type="text/javascript">
 let getstrs = document.querySelectorAll('.wish-string');

for (var x = 0; x < getstrs.length; x++) {
    console.log(getstrs[x].innerHTML);
    var str = getstrs[x].innerHTML;

    if (str.length > 100) {
        console.log(str.substring(0, 100).concat('...'))
        getstrs[x].innerHTML = str.substring(0, 300).concat(' ......');
    } else {
        console.log(str);
        getstrs[x].innerHTML = str;
    }
}



</script>
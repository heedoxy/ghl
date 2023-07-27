<nav aria-label="Page navigation example" class="mb-3">
<ul class="pagination  justify-content-center">
    <?php
    $pagLink="";
    $k = (($page + 4 > $number_of_page) ? $number_of_page - 4 : (($page - 4 < 1) ? 5 : $page));
    if ($page >= 2) {
        echo "<li class='page-item'><a class='page-link' href='".$list_url."?page=1 ".$item."'> << </a></li>";
        echo  "<li class='page-item'><a class='page-link' href='".$list_url."?page=" . ($page - 1)  .$item."'> < </a></li>";
    }

    if ($number_of_page > 7)
        for ($i = -4; $i <= 4; $i++) {
            if ($k + $i == $page)
                $pagLink .= "<li class='page-item active'><a class='page-link' href='".$list_url."?page=" . ($k + $i) .$item. "'>" . ($k + $i) . "</a></li>";
            else
                $pagLink .= "<li class='page-item' ><a class='page-link' href='".$list_url."?page=" . ($k + $i)   .$item. "'>" . ($k + $i) . "</a></li>";
        }
    elseif ($number_of_page)
        for ($i = 1; $i <= $number_of_page; $i++) {
            if ($i == $page)
                $pagLink .= "<li class='page-item active'><a class='page-link' href='".$list_url."?page=" . ($i)   .$item. "'>" . ($i) . "</a></li>";
            else
                    $pagLink .= "<li class='page-item '><a class='page-link' href='".$list_url."?page=" . ($i)  .$item. "'>" . ($i) . "</a></li>";
        }
    echo $pagLink;
    if ($page < $number_of_page) {
        echo "<li class='page-item'><a class='page-link' href='".$list_url."?page=" . ($page + 1)  .$item. "'> > </a></li>";
        echo "<li class='page-item'><a class='page-link' href='".$list_url."?page=" . $number_of_page  .$item. "'> >> </a></li>";
    }
    ?>
    </ul>
</nav>
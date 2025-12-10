<?php
class Pagination_custom {

    function paginationCustom($page_val=0,$start_from_val=0,$num_rec_per_page_val=10,$total_records_val=0,$previous_val=0,$next_val=0,$url){

            $page = $page_val;
            $start_from = $start_from_val;
            $pagination = "<ul class='pagination justify-content-center'>";
            $num_rec_per_page = $num_rec_per_page_val;
            $total_pages = ceil($total_records_val / $num_rec_per_page);
            $previous = $previous_val;
            $next = $next_val;

            if($page > 3)
            {
                $show_pages_start = $page - 2;
                $show_pages_end = $page + 2;

                if($show_pages_end >= $total_pages)
                {
                    $show_pages_end = $total_pages;
                }

                if($previous >= 1){
                    $pagination .= '<li class="page-item"> <a class="page-link" tabindex="-1" onclick="getAjaxPagination('.$previous.')">Prev</a> </li>'; // Goto 1st page
                }
                for ($j=$show_pages_start; $j<=$show_pages_end; $j++) {
                    if($j == $page){
                    $pagination .= '<li class="page-item active"><a class="page-link" onclick="getAjaxPagination('.$j.')">'.$j.'</a></li>';
                    }else{
                    $pagination .= '<li class="page-item"><a class="page-link" onclick="getAjaxPagination('.$j.')">'.$j.'</a></li>';
                    }
                }
                if($next <= $total_pages){
                    $pagination .= '<li class="page-item"> <a class="page-link" onclick="getAjaxPagination('.$next.')">Next</a> </li>';
                }
            }
            else {

                $start_from = ($page-1) * $num_rec_per_page;

                if($previous >= 1){
                    $pagination .= '<li class="page-item"> <a class="page-link" tabindex="-1" onclick="getAjaxPagination('.$previous.')">Prev</a> </li>';
                }
                for ($i=1; $i<=$total_pages; $i++) {
                    if($i == $page){
                    $pagination .= '<li class="page-item active"><a class="page-link" onclick="getAjaxPagination('.$i.')">'.$i.'</a></li>';
                    }else{
                    $pagination .= '<li class="page-item"><a class="page-link" onclick="getAjaxPagination('.$i.')">'.$i.'</a></li>';
                    }
                    if($i == 5)  break;
                }
                if($next <= $total_pages){
                $pagination .= '<li class="page-item"> <a class="page-link" onclick="getAjaxPagination('.$next.')">Next</a> </li>'; // Goto last page
                }

            }
            $pagination .="</ul>";
            return $pagination;
    }


}
?>